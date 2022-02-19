<?php

namespace App\Http\Controllers;

use App\Http\Requests\Provider\CreateProviderRequest;
use App\Http\Requests\Provider\UpdateProviderRequest;
use App\Http\Resources\Provider\ProviderResource;
use App\Http\Resources\Provider\ProvidersResource;
use App\Models\Provider;
use Illuminate\Support\Facades\Hash;

/**
 * @group Provider
 */
class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::all();
        return ProvidersResource::collection($providers);
    }
    public function store(CreateProviderRequest $request, Provider $provider)
    {

        $provider = $request->all();
        $provider['password'] = Hash::make($request->password);
        $provider = Provider::create($provider);
        return new ProviderResource($provider);
    }
    public function update(UpdateProviderRequest $request, Provider $provider)
    {
        $provider->fill($request->all());
        $provider->password = Hash::make($provider->password);
        $provider->save();
        return new ProviderResource($provider);
    }
    public function show(Provider $provider)
    {
        $provider->identificationType;
        return new ProviderResource($provider);
    }
    public function destroy(Provider $provider)
    {
        $provider->delete();
        return new ProviderResource($provider);
    }
}
