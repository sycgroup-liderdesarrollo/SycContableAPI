<?php

namespace App\Http\Controllers;

use App\Models\identificationType;
use Illuminate\Http\Request;

class IdentificationTypeController extends Controller
{

    public function index()
    {
        $identificationTypes = identificationType::all();
        return response()->json(['status'=>true,'data'=>$identificationTypes]);
    }
    /**
     * @bodyParam name required El nombre del tipo de identificacion. Example: Cedula de ciudadania
     */
    public function store(Request $request)
    {
        $identificationType = identificationType::create($request->all());
        return response()->json(['status'=>true,'data'=>$identificationType]);
    }

    public function show(identificationType $identificationType)
    {
        $identificationType->users;
        $identificationType->provider;
        return response()->json(['status'=>true,'data'=>$identificationType]);
    }
    /**
     * @bodyParam name required El nombre del tipo de identificacion. Example: Cedula de ciudadania
     */
    public function update(Request $request, identificationType $identificationType)
    {
        $identificationType->update($request->all());
        return response()->json(['status'=>true,'data'=>$identificationType]);
    }

    public function destroy(identificationType $identificationType)
    {
        $identificationType->delete();
        return response()->json(['status'=>true,'data'=>$identificationType]);
    }
}
