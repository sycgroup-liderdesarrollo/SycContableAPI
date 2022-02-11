<?php

namespace App\Http\Controllers;

use App\Models\Provision;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
/**
 * @group Provision
 */
class ProvisionController extends Controller
{
    public function index()
    {
        $provisions = Provision::all();
        return response()->json(['status'=>true,'data'=>$provisions]);
    }
    public function show(Provision $provision)
    {
        return response()->json(['status'=>true,'data'=>$provision]);
    }
    /**
     * @bodyParam period_id int
     * @bodyParam pension_contribution int
     * @bodyParam occupational_risk_contributions int
     * @bodyParam health_contribution int
     * @bodyParam compensation_funds int
     * @bodyParam layoffs int
     * @bodyParam Interest_on_severance_pay int
     * @bodyParam vacation_provision int
     * @bodyParam wage_premium
     * @bodyParam total_provisions
     * @bodyParam total_payroll
     */
    public function store(Request $request)
    {
        $provision = $request->all();
        $provision['period_id'] = period(Carbon::now()->format('d'));
        $provision = Provision::create($provision);
        return response()->json(['status'=>true,'data'=>$provision]);
    }
    /**
     * @bodyParam period_id int
     * @bodyParam pension_contribution int
     * @bodyParam occupational_risk_contributions int
     * @bodyParam health_contribution int
     * @bodyParam compensation_funds int
     * @bodyParam layoffs int
     * @bodyParam Interest_on_severance_pay int
     * @bodyParam vacation_provision int
     * @bodyParam wage_premium
     * @bodyParam total_provisions
     * @bodyParam total_payroll
     */
    public function update(Provision $provision, Request $request)
    {
        $provision->update($request->all());
    }
    public function destroy(Provision $provision)
    {
        $provision->delete();
    }
    public function prueba()
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
            return $provision;
        }
    }
}


