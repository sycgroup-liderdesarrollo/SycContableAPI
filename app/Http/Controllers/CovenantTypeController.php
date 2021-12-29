<?php

namespace App\Http\Controllers;

use App\Models\CovenantType;
use Illuminate\Http\Request;

class CovenantTypeController extends Controller
{

    public function index()
    {
        $covenantTypes = CovenantType::all();
        return response()->json(['status'=>true,'data'=>$covenantTypes]);
    }

    public function store(Request $request)
    {
        $covenantType = CovenantType::create($request->all());
        return response()->json(['status'=>true,'data'=>$covenantType]);
    }
    public function show(CovenantType $covenantType)
    {
        $covenantType->covenant;
        return response()->json(['status'=>true,'data'=>$covenantType]);
    }

    public function update(Request $request, CovenantType $covenantType)
    {
        $covenantType->update($request->all());
        return response()->json(['status'=>true,'data'=>$covenantType]);
    }

    public function destroy(CovenantType $covenantType)
    {
        $covenantType->delete();
        return response()->json(['status'=>true,'data'=>$covenantType]);
    }
}