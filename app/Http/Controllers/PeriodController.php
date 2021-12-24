<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{

    public function index()
    {
        $period = Period::all();
        return $period;
    }

    public function store(Request $request)
    {
        $period = Period::create($request->all());
        return $period;
    }

    public function show(Period $period)
    {
        return $period;
    }

    public function update(Request $request, Period $period)
    {
        $period->update($request->all());
    }

    public function destroy(Period $period)
    {
        $period->delete();
        return $period;
    }
}
