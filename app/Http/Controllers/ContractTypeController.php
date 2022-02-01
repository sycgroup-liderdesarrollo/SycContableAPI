<?php

namespace App\Http\Controllers;

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
        return response()->json(['status'=>true,'data'=>$contractTypes]);
    }
    /**
     * @bodyParam name required El nombre del contrato. Example: Indefinido
     */
    public function store(Request $request)
    {
        $contractType = ContractType::create($request->all());
        return response()->json(['status'=>true,'data'=>$contractType]);
    }
    public function show(ContractType $contractType)
    {
        $contractType->users;
        return response()->json(['status'=>true,'data'=>$contractType]);
    }
    /**
     * @bodyParam name required El nombre del contrato. Example: Indefinido
     */
    public function update(Request $request, ContractType $contractType)
    {
        $contractType->update($request->all());
        return response()->json(['status'=>true,'data'=>$contractType]);
    }
    public function destroy(ContractType $contractType)
    {
        $contractType->delete();
        return response()->json(['status'=>true,'data'=>$contractType]);
    }
}
