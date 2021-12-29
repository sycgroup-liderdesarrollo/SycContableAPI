<?php

namespace App\Http\Controllers;

use App\Http\Requests\Covenant\UpdateCovenantRequest;
use App\Http\Requests\Covenant\CreateCovenantRequest;
use App\Models\Covenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CovenantController extends Controller
{
    public function index()
    {
        $covenants = Covenant::all();
        return response()->json(['status'=>true,'data'=>$covenants]);
    }
    public function store(CreateCovenantRequest $request, Covenant $covenant)
    {
        $covenant = Covenant::create($request->all());
        return response()->json(['status'=>true,'data'=>$covenant]);
    }
    public function show(Covenant $covenant)
    {
        $covenant->covenantType;
        $covenant->periodicityType;
        $covenant->concept;
        return response()->json(['status'=>true,'data'=>$covenant]);
    }
    public function update(UpdateCovenantRequest $request, Covenant $covenant)
    {
        $covenant->update($request->all());
        return response()->json(['status'=>true,'data'=>$covenant]);
    }
    public function destroy(Covenant $covenant)
    {
        $covenant->delete();
        return response()->json(['status'=>true,'data'=>$covenant]);
    }
    /**
     * @queryParam covenant_id int ID de llave foranea para el convenio. Example: 1
     * @queryParam concept_type_id ID de llave foranea para el tipo de concepto (deduccion, devengado). Example: 1
     * @queryParam
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
        return response()->json(['status'=>true,'data'=>$covenant]);
    }
}
