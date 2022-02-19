<?php

namespace App\Http\Controllers;

use App\Http\Resources\SalaryTypeResource;
use App\Models\SalaryType;
use Illuminate\Http\Request;
/**
 * @group Salary Type
 */
class SalaryTypeController extends Controller
{
    public function index()
    {
        $salaryTypes = SalaryType::all();
        return SalaryTypeResource::collection($salaryTypes);
    }
    /**
     * @bodyParam name required El nombre del tipo de salario. Example: Jefe
     */
    public function store(Request $request)
    {
        $salaryType = SalaryType::create($request->all());
        return new SalaryTypeResource($salaryType);
    }
    public function show(SalaryType $salaryType)
    {
        return new SalaryTypeResource($salaryType);
    }
    /**
     * @bodyParam name required El nombre del tipo de salario. Example: Jefe
     */
    public function update(Request $request, SalaryType $salaryType)
    {
        $salaryType->update($request->all());
        return new SalaryTypeResource($salaryType);
    }
    public function destroy(SalaryType $salaryType)
    {
        $salaryType->delete();
        return new SalaryTypeResource($salaryType);
    }
}
