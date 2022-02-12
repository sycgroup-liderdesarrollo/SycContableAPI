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

            $provision['pension_contribution']              = round($data_provision->original['total_accrued_without_aux']*($setting[4]->value), 2);
            $provision['health_contribution']               = round($data_provision->original['total_accrued_without_aux']*($setting[4]->value), 2);
            $provision['occupational_risk_contributions']   = round($data_provision->original['total_accrued_without_aux']*($setting[5]->value), 2);
            $provision['compensation_funds']                = round($data_provision->original['total_accrued_without_aux']*($setting[6]->value), 2);
            $provision['wage_premium']                      = round($data_provision->original['total_accrued']*($setting[7]->value), 2);
            $provision['layoffs']                           = round($data_provision->original['total_accrued']*($setting[7]->value), 2);
            $provision['Interest_on_severance_pay']         = round(($data_provision->original['total_accrued']*($setting[7]->value))*($setting[8]->value), 2);
            $provision['vacation_provision']                = round($data_provision->original['total_accrued_without_aux']*($setting[9]->value), 2);

            $provision['total_provisions'] = round((
                $provision['pension_contribution'] + $provision['health_contribution'] + $provision['occupational_risk_contributions'] +
                $provision['compensation_funds'] + $provision['wage_premium'] + $provision['layoffs'] + $provision['Interest_on_severance_pay'] +
                $provision['vacation_provision']
            ), 2);

            $provision['total_payroll'] = round($data_provision->original['total_payroll'], 2);

            $provisionsArray = get_object_vars($provision);

            $provision->update($provisionsArray);

            return $provision;
        }
    }
}
