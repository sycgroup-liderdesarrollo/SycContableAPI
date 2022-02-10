<?php

namespace App\Jobs\Provision;

use App\Models\Provision;
use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProvisionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function handle()
    {
        $setting = Setting::all();
        $data_provision = datas_for_the_provision();
        if ($data_provision != null) {
            $provision = Provision::findOrFail($data_provision->original['provision_id']);

            $provision['pension_contribution']=$data_provision->original['total_accrued_without_aux']*($setting[4]->value);
            $provision['health_contribution']=$data_provision->original['total_accrued_without_aux']*($setting[4]->value);
            $provision['occupational_risk_contributions']=$data_provision->original['total_accrued_without_aux']*($setting[5]->value);
            $provision['compensation_funds']=$data_provision->original['total_accrued_without_aux']*($setting[6]->value);
            $provision['wage_premium']=$data_provision->original['total_accrued']*($setting[7]->value);
            $provision['layoffs']=$data_provision->original['total_accrued']*($setting[7]->value);
            $provision['Interest_on_severance_pay']=($data_provision->original['total_accrued']*($setting[7]->value))*($setting[8]->value);
            $provision['vacation_provision']=$data_provision->original['total_accrued_without_aux']*($setting[9]->value);

            $provision['total_provisions'] = (
                $provision['pension_contribution']+$provision['health_contribution']+$provision['occupational_risk_contributions']+
                $provision['compensation_funds']+$provision['wage_premium']+$provision['layoffs']+$provision['Interest_on_severance_pay']+
                $provision['vacation_provision']
            );

            $provision['total_payroll']=$data_provision->original['total_payroll'];
            $provisionsArray = get_object_vars($provision);

            $provision->update($provisionsArray);
        }
    }
}
