<?php

namespace App\Http\Controllers;

use App\Http\Resources\PensionFundResource;
use App\Models\PensionFund;
use Illuminate\Http\Request;
/**
 * @group Pension Fund
 */
class PensionFundController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\PensionFundResource
     * @apiResourceModel App\Models\PensionFund
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $pensionFunds = PensionFund::filter($filter)->paginate($paginate);
        return PensionFundResource::collection($pensionFunds);
    }
    /**
     * @apiResource App\Http\Resources\PensionFundResource
     * @apiResourceModel App\Models\PensionFund
     */
    public function store(Request $request)
    {
        $pensionFund = PensionFund::create($request->all());
        return new PensionFundResource($pensionFund);
    }
    /**
     * @apiResource App\Http\Resources\PensionFundResource
     * @apiResourceModel App\Models\PensionFund
     */
    public function show(PensionFund $pensionFund)
    {
        return new PensionFundResource($pensionFund);
    }
    /**
     * @apiResource App\Http\Resources\PensionFundResource
     * @apiResourceModel App\Models\PensionFund
     */
    public function update(Request $request, PensionFund $pensionFund)
    {
        $pensionFund->update($request->all());
        return new PensionFundResource($pensionFund);
    }
    /**
     * @apiResource App\Http\Resources\PensionFundResource
     * @apiResourceModel App\Models\PensionFund
     */
    public function destroy(PensionFund $pensionFund)
    {
        $pensionFund->delete();
        return new PensionFundResource($pensionFund);
    }
}
