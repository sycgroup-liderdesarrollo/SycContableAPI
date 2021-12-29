<?php

namespace App\Http\Controllers;

use App\Models\ConceptType;
use Illuminate\Http\Request;

class ConceptTypeController extends Controller
{

    public function index()
    {
        $conceptTypes = ConceptType::all();
        return response()->json(['status'=>true,'data'=>$conceptTypes]);
    }

    public function store(Request $request)
    {
        $conceptType = ConceptType::create($request->all());
        return response()->json(['status'=>true,'data'=>$conceptType]);
    }

    public function show(ConceptType $conceptType)
    {
        $conceptType->concept;
        return response()->json(['status'=>true,'data'=>$conceptType]);
    }

    public function update(Request $request, ConceptType $conceptType)
    {
        $conceptType->update($request->all());
        return response()->json(['status'=>true,'data'=>$conceptType]);
    }

    public function destroy(ConceptType $conceptType)
    {
        $conceptType->delete();
        return response()->json(['status'=>true,'data'=>$conceptType]);
    }
}
