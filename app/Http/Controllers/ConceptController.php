<?php

namespace App\Http\Controllers;

use App\Http\Requests\Concept\CreateConceptRequest;
use App\Http\Requests\Concept\UpdateConceptRequest;
use App\Http\Resources\Concept\ConceptResource;
use App\Http\Resources\Concept\ConceptsResource;
use App\Models\Concept;
use Illuminate\Http\Request;
/**
 * @group Concept
 */
class ConceptController extends Controller
{
    /**
     * @queryParam type int Filtro para buscar por tipo, 1 = devengado, 2 = deducciones. Example: 1
     * @apiResourceCollection App\Http\Resources\Concept\ConceptResource
     * @apiResourceModel App\Models\Concept
     */
    public function index(Request $request)
    {
        $paginate = $request->query('paginate') ?? 10;
        $concept_type_id = $request->query('type', null);
        $name = $request->query('name', null);
        $concepts = Concept::conceptTypeFilter($concept_type_id)->nameFilter($name)->paginate($paginate);
        return ConceptResource::collection($concepts);
    }
    /**
     * @apiResource  App\Http\Resources\Concept\ConceptResource
     * @apiResourceModel App\Models\Concept
     */
    public function store(CreateConceptRequest $request)
    {
        $concept = Concept::create($request->all());
        return new ConceptResource($concept);
    }
    /**
     * @apiResource  App\Http\Resources\Concept\ConceptResource
     * @apiResourceModel App\Models\Concept
     */
    public function show(Concept $concept)
    {
        $concept->payrolls;
        $concept->covenant;
        return new ConceptResource($concept);
    }
    /**
     * @apiResource  App\Http\Resources\Concept\ConceptResource
     * @apiResourceModel App\Models\Concept
     */
    public function update(UpdateConceptRequest $request, Concept $concept)
    {
        $concept->update($request->all());
        return new ConceptResource($concept);
    }
    /**
     * @apiResource  App\Http\Resources\Concept\ConceptResource
     * @apiResourceModel App\Models\Concept
     */
    public function destroy(Concept $concept)
    {
        $concept->delete();
        return new ConceptResource($concept);
    }
}
