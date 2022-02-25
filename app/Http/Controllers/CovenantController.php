<?php

namespace App\Http\Controllers;

use App\Http\Requests\Covenant\UpdateCovenantRequest;
use App\Http\Requests\Covenant\CreateCovenantRequest;
use App\Http\Resources\Convenant\CovenantResource;
use App\Http\Resources\Convenant\CovenantsResource;
use App\Jobs\Covenant\CovenantSaveImageJob;
use App\Models\Covenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * @group Covenant
 */
class CovenantController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\Convenant\CovenantsResource
     * @apiResourceModel App\Models\Covenant
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $covenants = Covenant::filter($filter)->paginate($paginate);
        return CovenantsResource::collection($covenants);
    }
    /**
     * @bodyParam provider_id int Es el id del proveedor. Example: 1
     * @bodyParam concept_name string Es el nombre del concepto con el que se cargará en la nomina. Example: Cuota de convenio por salud
     * @apiResource  App\Http\Resources\Convenant\CovenantResource
     * @apiResourceModel App\Models\Covenant
     */
    public function store(CreateCovenantRequest $request)
    {
        if ($request->covenant_type_id == 1) {
            $covenant = Covenant::create($request->except('image', 'value'));
            $covenant->save();
        }
        else{
            $covenant = Covenant::create($request->except('image'));
            $covenant->save();
        }
        if(isset($request->image)) CovenantSaveImageJob::dispatch($request->image, 'covenants', $covenant->id, $covenant->name);

        return new CovenantResource($covenant);
    }
    /**
     * @apiResource  App\Http\Resources\Convenant\CovenantResource
     * @apiResourceModel App\Models\Covenant
     */
    public function show(Covenant $covenant)
    {
        return new CovenantResource($covenant);
    }
    /**
     * @apiResource  App\Http\Resources\Convenant\CovenantResource
     * @apiResourceModel App\Models\Covenant
     */
    public function update(UpdateCovenantRequest $request, Covenant $covenant)
    {

        if($request->concept_name){
            $covenant->concept->name = $request->concept_name;
            $covenant->concept->save();
        }
        if ($request->covenant_type_id == 1) {
            $covenant->update($request->except('image', 'value'));
        }
        else{
            $covenant->update($request->except('image'));
        }

        if(isset($request->image)) CovenantSaveImageJob::dispatch($request->image, 'covenants', $covenant->id, $covenant->name);

        return new CovenantResource($covenant);

    }
    public function destroy(Covenant $covenant)
    {
        $covenant->delete();
        return new CovenantResource($covenant);
    }
    /**
     * @queryParam covenant_id int ID de llave foranea para el convenio. Example: 1
     * @queryParam concept_type_id int ID de llave foranea para el tipo de concepto (deduccion, devengado). Example: 1
     * @queryParam periodicity_type_id int ID de llave foranea para el periodo (quincenal, mensual). Example: 1
     * @apiResource  App\Http\Resources\Convenant\CovenantResource
     * @apiResourceModel App\Models\Covenant
     */
    public function consultCovenant(Request $request)
    {
        $covenant = DB::table('covenants')
        ->join('concepts', 'covenants.concept_id', '=', 'concepts.id')
        ->join('concept_types', 'concepts.concept_type_id', '=', 'concept_types.id')
        ->join('periodicity_types', 'covenants.periodicity_type_id', '=', 'periodicity_types.id')
        ->select(
            'covenants.id AS id de convenio',
            'covenants.name AS convenio',
            'concepts.name AS concepto',
            'concept_types.name AS tipo',
            'periodicity_types.name AS periodo')
        ->where('covenants.id', $request->input('covenant_id'))
        ->where('concept_types.id', $request->input('concept_type_id'))
        ->where('periodicity_types.id', $request->input('periodicity_type_id'))
        ->get();
        return new CovenantResource($covenant);
    }
}
