<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProvissionResource;
use App\Models\Provision;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * @group Provision
 */
class ProvisionController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\ProvissionResource
     * @apiResourceModel App\Models\Provision
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $provisions = Provision::filter($filter)->paginate($paginate);
        return ProvissionResource::collection($provisions);
    }
    /**
     * @apiResource App\Http\Resources\ProvissionResource
     * @apiResourceModel App\Models\Provision
     */
    public function show(Provision $provision)
    {
        return new ProvissionResource($provision);
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
     * @apiResource App\Http\Resources\ProvissionResource
     * @apiResourceModel App\Models\Provision
     */
    public function store(Request $request)
    {
        $provision = $request->all();
        $provision['period_id'] = period(Carbon::now()->format('d'));
        $provision = Provision::create($provision);
        return new ProvissionResource($provision);
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
     * @apiResource App\Http\Resources\ProvissionResource
     * @apiResourceModel App\Models\Provision
     */
    public function update(Provision $provision, Request $request)
    {
        $provision->update($request->all());
        return new ProvissionResource($provision);
    }
    /**
     * @apiResource App\Http\Resources\ProvissionResource
     * @apiResourceModel App\Models\Provision
     */
    public function destroy(Provision $provision)
    {
        $provision->delete();
        return new ProvissionResource($provision);
    }
}


