<?php

namespace App\Jobs\Covenant;

use App\Models\Covenant;
use App\Models\Setting;
use App\Models\User;
use App\Models\Vacation;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CovenantAssignJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function handle(){

        $covenants  = Covenant::where('covenant_type_id',2)->get();
        $usersComun = User::where('active', '=','1')->get();
        $setting    = Setting::all();
        $continue   = true;

        foreach($usersComun as $userComun){
            $continue = true;
            $payrollUserComun = $userComun->lastPayroll;

            $vacation = Vacation::where('user_id', $userComun->id)->orderBy('created_at','desc')->first();
            if ($vacation) {
                if (date_create($vacation->end_date)->format('Y-m') == Carbon::now()->format('Y-m')) {
                    $vacationPeriod = period(date_create($vacation->end_date)->format('d'));
                    $nowPeriod      = period(Carbon::now()->format('d'));
                    if ($vacationPeriod == $nowPeriod) {
                        $days = daysWeek(Carbon::now()->format('Y-m-d'), $vacation->end_date);

                        $payrollUserComun->concepts()->attach(1 ,['count' =>15 - $days->original['days'], 'unit_value'=>$payrollUserComun->user->base_salary/30, 'total_value'=>(15 - $days->original['days'])*($payrollUserComun->user->base_salary/30)]);
                        $payrollUserComun->concepts()->attach(5 ,['count' => $days->original['days'], 'unit_value'=>$payrollUserComun->user->base_salary/30, 'total_value'=>($days->original['days'])*($payrollUserComun->user->base_salary/30)]);

                        if ($userComun->base_salary < ($setting[0]->value*2)) {
                            $payrollUserComun->concepts()->attach(2 ,['count' => 15 - $days->original['days'], 'unit_value'=>$setting[1]->value/30, 'total_value'=>($setting[1]->value/30)*(15 - $days->original['days'])]);
                        }
                        $continue = false;
                    }
                }
                if (($vacation->days_apart >= 15) && (date_create($vacation->end_date)->format('Y-m-d') > Carbon::now()->format('Y-m-d')) && ($continue)) {
                    $payrollUserComun->concepts()->attach(5 ,['count' => 15, 'unit_value'=>$payrollUserComun->user->base_salary/30, 'total_value'=>15*($payrollUserComun->user->base_salary/30)]);
                    $continue = false;
                }
            }
            if ($continue) {

                $payrollUserComun->concepts()->attach(1 ,['count' => 15, 'unit_value'=>$payrollUserComun->user->base_salary/30, 'total_value'=>($payrollUserComun->count ?? 15)*($payrollUserComun->user->base_salary/30)]);
                if ($userComun->base_salary < ($setting[0]->value*2)) {
                    $payrollUserComun->concepts()->attach(2 ,['count' => 1, 'unit_value'=>$setting[1]->value/2, 'total_value'=>$setting[1]->value/2]);
                }
            }
            $payrollUserComun->concepts()->attach(3 ,['count' => 1, 'unit_value'=>($userComun->base_salary*$setting[2]->value)/100, 'total_value'=>($userComun->base_salary*$setting[2]->value)/100]);
            $payrollUserComun->concepts()->attach(4 ,['count' => 1, 'unit_value'=>($userComun->base_salary*$setting[3]->value)/100, 'total_value'=>($userComun->base_salary*$setting[3]->value)/100]);
        }
        foreach ($covenants as $covenant) {
            foreach ($covenant->users as $user) {
                $payrollUser = $user->lastPayroll;
                $payrollUser->concepts()->attach($covenant->concept_id, ['count' => 1,'unit_value'=>$covenant->value , 'total_value'=>$covenant->value]);
            }
        }
    }
}

