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
    public function index()
    {
        $contractTypes = ContractType::all();
        return ContractTypeResource::collection($contractTypes);
    }
    /**
     * @bodyParam name required El nombre del contrato. Example: Indefinido
     */
    public function store(Request $request)
    {
        $contractType = ContractType::create($request->all());
        return new ContractTypeResource($contractType);
    }
    public function show(ContractType $contractType)
    {
        $contractType->users;
        return new ContractTypeResource($contractType);
    }
    /**
     * @bodyParam name required El nombre del contrato. Example: Indefinido
     */
    public function update(Request $request, ContractType $contractType)
    {
        $contractType->update($request->all());
        return new ContractTypeResource($contractType);
    }
    public function destroy(ContractType $contractType)
    {
        $contractType->delete();
        return new ContractTypeResource($contractType);
    }
}
