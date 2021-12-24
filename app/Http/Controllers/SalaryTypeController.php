<?php

namespace App\Http\Controllers;

use App\Models\SalaryType;
use Illuminate\Http\Request;

class SalaryTypeController extends Controller
{

    public function index()
    {
        $salaryType = SalaryType::all();
        return $salaryType;
    }


    public function store(Request $request)
    {
        $salaryType = SalaryType::create($request->all());
        return $salaryType;
    }

    public function show(SalaryType $salaryType)
    {
        $salaryType->users;
        return $salaryType;
    }


    public function update(Request $request, SalaryType $salaryType)
    {
        $salaryType->update($request->all());
        return $salaryType;
    }


    public function destroy(SalaryType $salaryType)
    {
        $salaryType->delete();
        return $salaryType;
    }
}
