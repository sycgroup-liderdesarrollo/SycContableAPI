<?php

namespace App\Http\Controllers;

use App\Http\Requests\Concept\CreateConceptRequest;
use App\Http\Requests\Concept\UpdateConceptRequest;
use App\Models\Concept;
use Illuminate\Http\Request;
/**
 * @group Concept
 */
class ConceptController extends Controller
{

    public function index()
    {
        $concepts = Concept::all();
        return response()->json(['status'=>true,'data'=>$concepts]);
    }

    public function store(CreateConceptRequest $request)
    {
        $concept = Concept::create($request->all());
        return response()->json(['status'=>true,'data'=>$concept]);

    }

    public function show(Concept $concept)
    {
        $concept->payrolls;
        $concept->covenant;
        return response()->json(['status'=>true,'data'=>$concept]);

    }

    public function update(UpdateConceptRequest $request, Concept $concept)
    {
        $concept->update($request->all());
        return response()->json(['status'=>true,'data'=>$concept]);

    }

    public function destroy(Concept $concept)
    {
        $concept->delete();
        return response()->json(['status'=>true,'data'=>$concept]);

    }
}
