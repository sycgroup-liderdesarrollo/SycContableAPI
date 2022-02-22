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
    /**
     * @apiResourceCollection App\Http\Resources\SalaryTypeResource
     * @apiResourceModel App\Models\SalaryType
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $salaryTypes = SalaryType::filter($filter)->paginate($paginate);
        return SalaryTypeResource::collection($salaryTypes);
    }
    /**
     * @bodyParam name required El nombre del tipo de salario. Example: Jefe
     * @apiResource App\Http\Resources\SalaryTypeResource
     * @apiResourceModel App\Models\SalaryType
     */
    public function store(Request $request)
    {
        $salaryType = SalaryType::create($request->all());
        return new SalaryTypeResource($salaryType);
    }
    /**
     * @apiResource App\Http\Resources\SalaryTypeResource
     * @apiResourceModel App\Models\SalaryType
     */
    public function show(SalaryType $salaryType)
    {
        return new SalaryTypeResource($salaryType);
    }
    /**
     * @bodyParam name required El nombre del tipo de salario. Example: Jefe
     * @apiResource App\Http\Resources\SalaryTypeResource
     * @apiResourceModel App\Models\SalaryType
     */
    public function update(Request $request, SalaryType $salaryType)
    {
        $salaryType->update($request->all());
        return new SalaryTypeResource($salaryType);
    }
    /**
     * @apiResource App\Http\Resources\SalaryTypeResource
     * @apiResourceModel App\Models\SalaryType
     */
    public function destroy(SalaryType $salaryType)
    {
        $salaryType->delete();
        return new SalaryTypeResource($salaryType);
    }
}
