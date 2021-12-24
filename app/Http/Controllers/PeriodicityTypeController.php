<?php

namespace App\Http\Controllers;

use App\Models\PeriodicityType;
use Illuminate\Http\Request;

class PeriodicityTypeController extends Controller
{
    public function index()
    {
        $periodicityType = PeriodicityType::all();
        return $periodicityType;
    }

    public function store(Request $request)
    {
        $periodicityType = PeriodicityType::create($request->all());
        return $periodicityType;
    }

    public function show(PeriodicityType $periodicityType)
    {
        $periodicityType->covenant;
        return $periodicityType;
    }

    public function update(Request $request, PeriodicityType $periodicityType)
    {
        $periodicityType->update($request->all());
        return $periodicityType;
    }

    public function destroy(PeriodicityType $periodicityType)
    {
        $periodicityType->delete();
        return $periodicityType;
    }
}
