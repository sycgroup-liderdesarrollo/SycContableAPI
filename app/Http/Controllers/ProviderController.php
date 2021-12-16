<?php

namespace App\Http\Controllers;

use App\Http\Requests\Provider\CreateProviderRequest;
use App\Http\Requests\Provider\UpdateProviderRequest;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        $provider = Provider::all();
        return $provider;
    }
    public function store(CreateProviderRequest $request, Provider $provider)
    {
        $provider = Provider::create($request->all());
        return $provider;
    }
    public function update(UpdateProviderRequest $request, Provider $provider)
    {
        $provider->update($request->all());
        return $provider;
    }
    public function show(Provider $provider)
    {
        $provider->identificationType;
        return $provider;
    }
    public function destroy(Provider $provider)
    {
        $provider->delete();
        return $provider;
    }
}
