<?php

namespace App\Http\Controllers;

use App\Http\Resources\PeriodResource;
use App\Models\Period;
use Illuminate\Http\Request;
/**
 * @group Period
 */
class PeriodController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $periods = Period::filter($filter)->paginate($paginate);
        return PeriodResource::collection($periods);
    }
    /**
     * @bodyParam name required El nombre de periodo que se usaria para la nomina, ya viene definido por defecto. Example: 5 a 19
     */
    public function store(Request $request)
    {
        $period = Period::create($request->all());
        return new PeriodResource($period);
    }
    public function show(Period $period)
    {
        return new PeriodResource($period);
    }
    /**
     * @bodyParam name required El nombre de periodo que se usaria para la nomina, ya viene definido por defecto. Example: 5 a 19
     */
    public function update(Request $request, Period $period)
    {
        $period->update($request->all());
        return new PeriodResource($period);
    }
    public function destroy(Period $period)
    {
        $period->delete();
        return new PeriodResource($period);
    }
}
