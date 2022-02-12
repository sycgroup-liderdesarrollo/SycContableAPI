<?php

namespace App\Jobs\Vacation;

use App\Models\Setting;
use App\Models\User;
use App\Models\Vacation;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class VacationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public function __construct()
    {
    }
    public function handle()
    {
        $vacations = Vacation::where('end_date', '>', Carbon::now()->format('Y-m-d'))->get();
        $setting   = Setting::all();
        $empty = count($vacations);
        if ($empty >= 1) {
            foreach($vacations as $vacation){
                $date_vacation   = date_create($vacation->start_date)->format('Y-m');
                $date_now        = Carbon::now()->format('Y-m');
                $period_vacation = period(date_create($vacation->start_date)->format('d'));
                $period_now      = period(Carbon::now()->format('d'));

                if (($date_vacation == $date_now) && ($period_now == $period_vacation)) {
                    $user = User::findOrFail($vacation->user_id);
                    $payroll = $user->lastPayroll;
                    $vacationDays = daysWeekForPayroll($vacation->start_date, $vacation->end_date);
                    $payroll->concepts()->updateExistingPivot(1,
                    [
                        'count'       => $vacationDays->original['workdedDays'],
                        'unit_value'  => $payroll->user->base_salary/30,
                        'total_value' => $vacationDays->original['workdedDays']*($payroll->user->base_salary/30)
                    ]);
                    $payroll->concepts()->updateExistingPivot(2,
                    [
                        'count'       => $vacationDays->original['workdedDays'],
                        'unit_value'  => $setting[1]->value/30,
                        'total_value' => $vacationDays->original['workdedDays']*($setting[1]->value/30)
                    ]);
                    $ifexist = DB::table('concept_payroll')->where('concept_id',5)->where('payroll_id', $payroll->id)->first();
                    if ($ifexist != null) {
                        $payroll->concepts()->updateExistingPivot(5,
                        [
                            'count'       => $vacationDays->original['paidDays'],
                            'unit_value'  => $payroll->user->base_salary/30,
                            'total_value' => $vacationDays->original['paidDays']*($payroll->user->base_salary/30)
                        ]);
                    }else{
                        $payroll->concepts()->attach(5,
                        [
                            'count'       => $vacationDays->original['paidDays'],
                            'unit_value'  => $payroll->user->base_salary/30,
                            'total_value' => $vacationDays->original['paidDays']*($payroll->user->base_salary/30)
                        ]);
                    }
                }
            }
            return response()->json(['status'=>true,'data'=>$vacationDays]);
        }
    }}
