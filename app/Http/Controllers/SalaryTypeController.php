<?php

namespace App\Http\Controllers;

use App\Models\SalaryType;
use Illuminate\Http\Request;

class SalaryTypeController extends Controller
{

    public function index()
    {
        $salaryTypes = SalaryType::all();
        return response()->json(['status'=>true,'data'=>$salaryTypes]);
    }


    public function store(Request $request)
    {
        $salaryType = SalaryType::create($request->all());
        return response()->json(['status'=>true,'data'=>$salaryType]);
    }

    public function show(SalaryType $salaryType)
    {
        return response()->json(['status'=>true,'data'=>$salaryType]);
    }


    public function update(Request $request, SalaryType $salaryType)
    {
        $salaryType->update($request->all());
        return response()->json(['status'=>true,'data'=>$salaryType]);
    }


    public function destroy(SalaryType $salaryType)
    {
        $salaryType->delete();
        return response()->json(['status'=>true,'data'=>$salaryType]);
    }
}
