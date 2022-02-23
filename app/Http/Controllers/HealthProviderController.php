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
    /**
     * @apiResourceCollection App\Http\Resources\HealthProviderResource
     * @apiResourceModel App\Models\HealthProvider
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $healthProviders = HealthProvider::filter($filter)->paginate($paginate);
        return HealthProviderResource::collection($healthProviders);
    }
    /**
     * @apiResource App\Http\Resources\HealthProviderResource
     * @apiResourceModel App\Models\HealthProvider
     */
    public function store(Request $request)
    {
        $healthProvider = HealthProvider::create($request->all());
        return new HealthProviderResource($healthProvider);
    }
    /**
     * @apiResource App\Http\Resources\HealthProviderResource
     * @apiResourceModel App\Models\HealthProvider
     */
    public function show(HealthProvider $healthProvider)
    {
        return new HealthProviderResource($healthProvider);
    }
    /**
     * @apiResource App\Http\Resources\HealthProviderResource
     * @apiResourceModel App\Models\HealthProvider
     */
    public function update(Request $request, HealthProvider $healthProvider)
    {
        $healthProvider->update($request->all());
        return new HealthProviderResource($healthProvider);
    }
    /**
     * @apiResource App\Http\Resources\HealthProviderResource
     * @apiResourceModel App\Models\HealthProvider
     */
    public function destroy(HealthProvider $healthProvider)
    {
        $healthProvider->delete();
        return new HealthProviderResource($healthProvider);
    }
}
