<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;
/**
 * @group Period
 */
class PeriodController extends Controller
{
    public function index()
    {
        $periods = Period::all();
        return response()->json(['status'=>true,'data'=>$periods]);
    }
    /**
     * @bodyParam name required El nombre de periodo que se usaria para la nomina, ya viene definido por defecto. Example: 5 a 19
     */
    public function store(Request $request)
    {
        $period = Period::create($request->all());
        return response()->json(['status'=>true,'data'=>$period]);
    }
    public function show(Period $period)
    {
        return response()->json(['status'=>true,'data'=>$period]);
    }
    /**
     * @bodyParam name required El nombre de periodo que se usaria para la nomina, ya viene definido por defecto. Example: 5 a 19
     */
    public function update(Request $request, Period $period)
    {
        $period->update($request->all());
        return response()->json(['status'=>true,'data'=>$period]);
    }
    public function destroy(Period $period)
    {
        $period->delete();
        return response()->json(['status'=>true,'data'=>$period]);
    }
}
