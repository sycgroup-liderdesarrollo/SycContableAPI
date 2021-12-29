<?php

namespace App\Http\Controllers;

use App\Models\PeriodicityType;
use Illuminate\Http\Request;

class PeriodicityTypeController extends Controller
{
    public function index()
    {
        $periodicityTypes = PeriodicityType::all();
        return response()->json(['status'=>true,'data'=>$periodicityTypes]);
    }
    /**
     * @bodyParam name required El nombre, si es quincenal o mensual, ya viene definido por defecto
     */
    public function store(Request $request)
    {
        $periodicityType = PeriodicityType::create($request->all());
        return response()->json(['status'=>true,'data'=>$periodicityType]);
    }

    public function show(PeriodicityType $periodicityType)
    {
        $periodicityType->covenant;
        return response()->json(['status'=>true,'data'=>$periodicityType]);
    }

    public function update(Request $request, PeriodicityType $periodicityType)
    {
        $periodicityType->update($request->all());
        return response()->json(['status'=>true,'data'=>$periodicityType]);
    }

    public function destroy(PeriodicityType $periodicityType)
    {
        $periodicityType->delete();
        return response()->json(['status'=>true,'data'=>$periodicityType]);
    }
}
