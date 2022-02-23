<?php

namespace App\Http\Controllers;

use App\Http\Resources\PeriodicityTypeResource;
use App\Models\PeriodicityType;
use Illuminate\Http\Request;
/**
 * @group Periodicity Type
 */
class PeriodicityTypeController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\PeriodicityTypeResource
     * @apiResourceModel App\Models\PeriodicityType
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $periodicityTypes = PeriodicityType::filter($filter)->paginate($paginate);
        return PeriodicityTypeResource::collection($periodicityTypes);
    }
    /**
     * @bodyParam name required El nombre, si es quincenal o mensual, ya viene definido por defecto
     * @apiResource App\Http\Resources\PeriodicityTypeResource
     * @apiResourceModel App\Models\PeriodicityType
     */
    public function store(Request $request)
    {
        $periodicityType = PeriodicityType::create($request->all());
        return new PeriodicityTypeResource($periodicityType);
    }
    /**
     * @apiResource App\Http\Resources\PeriodicityTypeResource
     * @apiResourceModel App\Models\PeriodicityType
     */
    public function show(PeriodicityType $periodicityType)
    {
        $periodicityType->covenant;
        return new PeriodicityTypeResource($periodicityType);
    }
    /**
     * @bodyParam name required El nombre, si es quincenal o mensual, ya viene definido por defecto
     * @apiResource App\Http\Resources\PeriodicityTypeResource
     * @apiResourceModel App\Models\PeriodicityType
     */
    public function update(Request $request, PeriodicityType $periodicityType)
    {
        $periodicityType->update($request->all());
        return new PeriodicityTypeResource($periodicityType);
    }
    /**
     * @apiResource App\Http\Resources\PeriodicityTypeResource
     * @apiResourceModel App\Models\PeriodicityType
     */
    public function destroy(PeriodicityType $periodicityType)
    {
        $periodicityType->delete();
        return new PeriodicityTypeResource($periodicityType);
    }
}
