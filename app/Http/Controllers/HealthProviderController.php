<?php

namespace App\Http\Controllers;

use App\Http\Resources\HealthProviderResource;
use App\Models\HealthProvider;
use Illuminate\Http\Request;
/**
 * @group Health Provider
 */
class HealthProviderController extends Controller
{
    public function index()
    {
        $healthProviders = HealthProvider::all();
        return HealthProviderResource::collection($healthProviders);
    }
    public function store(Request $request)
    {
        $healthProvider = HealthProvider::create($request->all());
        return new HealthProviderResource($healthProvider);
    }
    public function show(HealthProvider $healthProvider)
    {
        return new HealthProviderResource($healthProvider);
    }
    public function update(Request $request, HealthProvider $healthProvider)
    {
        $healthProvider->update($request->all());
        return new HealthProviderResource($healthProvider);
    }
    public function destroy(HealthProvider $healthProvider)
    {
        $healthProvider->delete();
        return new HealthProviderResource($healthProvider);
    }
}
