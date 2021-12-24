<?php

namespace App\Http\Controllers;

use App\Http\Requests\Concept\CreateConceptRequest;
use App\Http\Requests\Concept\UpdateConceptRequest;
use App\Models\Concept;
use Illuminate\Http\Request;

class ConceptController extends Controller
{

    public function index()
    {
        $concept = Concept::all();
        return $concept;
    }

    public function store(CreateConceptRequest $request)
    {
        $concept = Concept::create($request->all());
        return $concept;
    }

    public function show(Concept $concept)
    {
        $concept->payrolls;
        $concept->covenant;
        return $concept;
    }

    public function update(UpdateConceptRequest $request, Concept $concept)
    {
        $concept->update($request->all());
        return $concept;
    }

    public function destroy(Concept $concept)
    {
        $concept->delete();
        return $concept;
    }
}
