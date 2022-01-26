<?php

namespace App\Http\Controllers;

use App\Http\Requests\Provider\CreateProviderRequest;
use App\Http\Requests\Provider\UpdateProviderRequest;
use App\Models\Provider;

/**
 * @group Provider
 */
class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::all();
        return response()->json(['status'=>true,'data'=>$providers]);
    }
    public function store(CreateProviderRequest $request, Provider $provider)
    {
        $provider = Provider::create($request->all());
        if ($request->constitution_type_id == 1) {
            return response()->json(['status'=>true,'data'=>$provider,'message'=> " Se creó un contacto con los mismos datos del proveedor!"]);
        }
        return response()->json(['status'=>true,'data'=>$provider]);


    }
    public function update(UpdateProviderRequest $request, Provider $provider)
    {
        $provider->update($request->all());
        return response()->json(['status'=>true,'data'=>$provider]);
    }
    public function show(Provider $provider)
    {
        $provider->identificationType;
        return response()->json(['status'=>true,'data'=>$provider]);
    }
    public function destroy(Provider $provider)
    {
        $provider->delete();
        return response()->json(['status'=>true,'data'=>$provider]);
    }
}
