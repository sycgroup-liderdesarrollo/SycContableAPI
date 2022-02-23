<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContractTypeResource;
use App\Models\ContractType;
use Illuminate\Http\Request;

/**
 * @group Contract Type
 */
class ContractTypeController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\ContractTypeResource
     * @apiResourceModel App\Models\ContractType
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $contractTypes = ContractType::filter($filter)->paginate($paginate);
        return ContractTypeResource::collection($contractTypes);
    }
    /**
     * @bodyParam name required El nombre del contrato. Example: Indefinido
     * @apiResource  App\Http\Resources\ContractTypeResource
     * @apiResourceModel App\Models\ContractType
     */
    public function store(Request $request)
    {
        $contractType = ContractType::create($request->all());
        return new ContractTypeResource($contractType);
    }
    /**
     * @apiResource  App\Http\Resources\ContractTypeResource
     * @apiResourceModel App\Models\ContractType
     */
    public function show(ContractType $contractType)
    {
        $contractType->users;
        return new ContractTypeResource($contractType);
    }
    /**
     * @apiResource  App\Http\Resources\ContractTypeResource
     * @apiResourceModel App\Models\ContractType
     */
    public function update(Request $request, ContractType $contractType)
    {
        $contractType->update($request->all());
        return new ContractTypeResource($contractType);
    }
    /**
     * @apiResource  App\Http\Resources\ContractTypeResource
     * @apiResourceModel App\Models\ContractType
     */
    public function destroy(ContractType $contractType)
    {
        $contractType->delete();
        return new ContractTypeResource($contractType);
    }
}
