<?php

namespace App\Http\Controllers;

use App\Models\Provision;
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
     * @bodyParam wage_premium int
     * @bodyParam total_provisiones int
     * @bodyParam total_payroll int
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
     * @bodyParam wage_premium int
     * @bodyParam total_provisiones int
     * @bodyParam total_payroll int
     */
    public function update(Provision $provision, Request $request)
    {
        $provision->update($request->all());
    }
    public function destroy(Provision $provision)
    {
        $provision->delete();
    }
}


