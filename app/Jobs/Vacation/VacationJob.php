<?php

namespace App\Jobs\Vacation;

use App\Models\User;
use App\Models\Vacation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class VacationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $vacationData;

    public function __construct($vacationData)
    {
        $this->vacationData = $vacationData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = User::findOrFail($this->vacationData->user_id);
        $payroll = $user->lastPayroll;
        $vacationDays = daysWeekForPayroll($this->vacationData->start_date, $this->vacationData->end_date);
        $payroll->concepts()->updateExistingPivot(1,
        [
            'count'=> $vacationDays->original['workdedDays'],
            'unit_value'=>$payroll->user->base_salary/30,
            'total_value'=>$vacationDays->original['workdedDays']*($payroll->user->base_salary/30)
        ]);

        $ifexist = DB::table('concept_payroll')->where('concept_id',5)->where('payroll_id', $payroll->id)->first();

        if ($ifexist != null) {
            $payroll->concepts()->updateExistingPivot(5,
            [
                'count'=>$vacationDays->original['paidDays'],
                'unit_value'=>$payroll->user->base_salary/30,
                'total_value'=>$vacationDays->original['paidDays']*($payroll->user->base_salary/30)
            ]);
        }else{
            $payroll->concepts()->attach(5,
            [
                'count'=>$vacationDays->original['paidDays'],
                'unit_value'=>$payroll->user->base_salary/30,
                'total_value'=>$vacationDays->original['paidDays']*($payroll->user->base_salary/30)
            ]);
        }
        $payroll->concepts()->detach(2);
        return response()->json(['status'=>true,'data'=>$vacationDays]);
    }}
