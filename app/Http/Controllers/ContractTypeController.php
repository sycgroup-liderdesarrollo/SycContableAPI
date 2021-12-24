<?php

namespace App\Http\Controllers;

use App\Models\ContractType;
use Illuminate\Http\Request;

class ContractTypeController extends Controller
{

    public function index()
    {
        $contractType = ContractType::all();
        return $contractType;
    }

    public function store(Request $request)
    {
        $contractType = ContractType::create($request->all());
        return $contractType;
    }

    public function show(ContractType $contractType)
    {
        $contractType->users;
        return $contractType;
    }

    public function update(Request $request, ContractType $contractType)
    {
        $contractType->update($request->all());
        return $contractType;
    }

    public function destroy(ContractType $contractType)
    {
        $contractType->delete();
        return $contractType;
    }
}
