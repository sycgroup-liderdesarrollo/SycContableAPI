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
    /**
     * @apiResourceCollection App\Http\Resources\Concept\ConceptTypeResource
     * @apiResourceModel App\Models\ConceptType
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $conceptTypes = ConceptType::filter($filter)->paginate($paginate);
        return ConceptTypeResource::collection($conceptTypes);
    }
    /**
     * @bodyParam name required El tipo de concepto, ya viene definido (Deduccion, devengado). Example: Devengado
     * @apiResource  App\Http\Resources\Concept\ConceptTypeResource
     * @apiResourceModel App\Models\ConceptType
     */
    public function store(Request $request)
    {
        $conceptType = ConceptType::create($request->all());
        return new ConceptTypeResource($conceptType);
    }
    /**
    * @apiResource  App\Http\Resources\Concept\ConceptTypeResource
    * @apiResourceModel App\Models\ConceptType
    */
    public function show(ConceptType $conceptType)
    {
        $conceptType->concept;
        return new ConceptTypeResource($conceptType);
    }
    /**
     * @bodyParam name required El tipo de concepto, ya viene definido (Deduccion, devengado). Example: Devengado
     * @apiResource  App\Http\Resources\Concept\ConceptTypeResource
     * @apiResourceModel App\Models\ConceptType
     */
    public function update(Request $request, ConceptType $conceptType)
    {
        $conceptType->update($request->all());
        return new ConceptTypeResource($conceptType);
    }
    /**
     * @apiResource  App\Http\Resources\Concept\ConceptTypeResource
     * @apiResourceModel App\Models\ConceptType
     */
    public function destroy(ConceptType $conceptType)
    {
        $conceptType->delete();
        return new ConceptTypeResource($conceptType);
    }
}
