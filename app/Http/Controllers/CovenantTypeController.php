<?php

namespace App\Http\Controllers;

use App\Models\CovenantType;
use Illuminate\Http\Request;

class CovenantTypeController extends Controller
{

    public function index()
    {
        $covenantType = CovenantType::all();
        return $covenantType;
    }

    public function store(Request $request)
    {
        $covenantType = CovenantType::create($request->all());
        return $covenantType;
    }

    public function show(CovenantType $covenantType)
    {
        $covenantType->covenant;
        return $covenantType;
    }

    public function update(Request $request, CovenantType $covenantType)
    {
        $covenantType->update($request->all());
        return $covenantType;
    }

    public function destroy(CovenantType $covenantType)
    {
        $covenantType->delete();
        return $covenantType;
    }
}
