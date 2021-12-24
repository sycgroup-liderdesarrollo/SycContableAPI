<?php

namespace App\Http\Controllers;

use App\Models\ConceptType;
use Illuminate\Http\Request;

class ConceptTypeController extends Controller
{

    public function index()
    {
        $conceptType = ConceptType::all();
        return $conceptType;
    }

    public function store(Request $request)
    {
        $conceptType = ConceptType::create($request->all());
        return $conceptType;
    }

    public function show(ConceptType $conceptType)
    {
        $conceptType->concept;
        return $conceptType;
    }

    public function update(Request $request, ConceptType $conceptType)
    {
        $conceptType->update($request->all());
        return $conceptType;
    }

    public function destroy(ConceptType $conceptType)
    {
        $conceptType->delete();
        return $conceptType;
    }
}
