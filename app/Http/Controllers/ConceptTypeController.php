<?php

namespace App\Http\Controllers;

use App\Http\Resources\Concept\ConceptTypeResource;
use App\Models\ConceptType;
use Illuminate\Http\Request;
/**
 * @group Concept Type
 */
class ConceptTypeController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $conceptTypes = ConceptType::filter($filter)->paginate($paginate);
        return ConceptTypeResource::collection($conceptTypes);
    }
    /**
     * @bodyParam name required El tipo de concepto, ya viene definido (Deduccion, devengado). Example: Devengado
     */
    public function store(Request $request)
    {
        $conceptType = ConceptType::create($request->all());
        return new ConceptTypeResource($conceptType);
    }

    public function show(ConceptType $conceptType)
    {
        $conceptType->concept;
        return new ConceptTypeResource($conceptType);
    }
    /**
     * @bodyParam name required El tipo de concepto, ya viene definido (Deduccion, devengado). Example: Devengado
     */
    public function update(Request $request, ConceptType $conceptType)
    {
        $conceptType->update($request->all());
        return new ConceptTypeResource($conceptType);
    }

    public function destroy(ConceptType $conceptType)
    {
        $conceptType->delete();
        return new ConceptTypeResource($conceptType);
    }
}
