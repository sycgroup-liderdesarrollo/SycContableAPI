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
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $periodicityTypes = PeriodicityType::filter($filter)->paginate($paginate);
        return PeriodicityTypeResource::collection($periodicityTypes);
    }
    /**
     * @bodyParam name required El nombre, si es quincenal o mensual, ya viene definido por defecto
     */
    public function store(Request $request)
    {
        $periodicityType = PeriodicityType::create($request->all());
        return new PeriodicityTypeResource($periodicityType);
    }
    public function show(PeriodicityType $periodicityType)
    {
        $periodicityType->covenant;
        return new PeriodicityTypeResource($periodicityType);
    }
    /**
     * @bodyParam name required El nombre, si es quincenal o mensual, ya viene definido por defecto
     */
    public function update(Request $request, PeriodicityType $periodicityType)
    {
        $periodicityType->update($request->all());
        return new PeriodicityTypeResource($periodicityType);
    }
    public function destroy(PeriodicityType $periodicityType)
    {
        $periodicityType->delete();
        return new PeriodicityTypeResource($periodicityType);
    }
}
