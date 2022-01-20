<?php

namespace App\Jobs\Covenant;

use App\Models\Covenant;
use App\Models\Setting;
use App\Models\User;
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

    public function handle()
    {
        $covenants = Covenant::where('covenant_type_id',2)->get();
        $usersComun = User::where('active', '=','1')->get();
        $setting = Setting::all();

        foreach($usersComun as $userComun){
            $payrollUserComun = $userComun->lastPayroll;
            $payrollUserComun->concepts()->attach(1 ,['count' => 15, 'unit_value'=>$payrollUserComun->user->base_salary/30, 'total_value'=>($payrollUserComun->count ?? 15)*($payrollUserComun->user->base_salary/30)]);
            if ($userComun->base_salary < ($setting[0]->value*2)) {
                $payrollUserComun->concepts()->attach(2 ,['count' => 1, 'unit_value'=>$setting[1]->value, 'total_value'=>$setting[1]->value]);
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
