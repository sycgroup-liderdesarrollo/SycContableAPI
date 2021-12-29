<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{

    public function index()
    {
        $periods = Period::all();
        return response()->json(['status'=>true,'data'=>$periods]);
    }

    public function store(Request $request)
    {
        $period = Period::create($request->all());
        return response()->json(['status'=>true,'data'=>$period]);
    }

    public function show(Period $period)
    {
        return response()->json(['status'=>true,'data'=>$period]);
    }

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
