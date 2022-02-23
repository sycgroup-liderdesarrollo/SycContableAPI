<?php

namespace App\Http\Controllers;

use App\Http\Requests\Provider\CreateProviderRequest;
use App\Http\Requests\Provider\UpdateProviderRequest;
use App\Http\Resources\Provider\ProviderResource;
use App\Http\Resources\Provider\ProvidersResource;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * @group Provider
 */
class ProviderController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\Provider\ProvidersResource
     * @apiResourceModel App\Models\Provider
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $providers = Provider::filter($filter)->paginate($paginate);
        return ProvidersResource::collection($providers);
    } /**
     * @apiResource App\Http\Resources\Provider\ProviderResource
     * @apiResourceModel App\Models\Provider
     */
    public function store(CreateProviderRequest $request, Provider $provider)
    {

        $provider = $request->all();
        $provider['password'] = Hash::make($request->password);
        $provider = Provider::create($provider);
        return new ProviderResource($provider);
    } /**
     * @apiResource App\Http\Resources\Provider\ProviderResource
     * @apiResourceModel App\Models\Provider
     */
    public function update(UpdateProviderRequest $request, Provider $provider)
    {
        $provider->fill($request->all());
        $provider->password = Hash::make($provider->password);
        $provider->save();
        return new ProviderResource($provider);
    } /**
     * @apiResource App\Http\Resources\Provider\ProviderResource
     * @apiResourceModel App\Models\Provider
     */
    public function show(Provider $provider)
    {
        $provider->identificationType;
        return new ProviderResource($provider);
    } /**
     * @apiResource App\Http\Resources\Provider\ProviderResource
     * @apiResourceModel App\Models\Provider
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();
        return new ProviderResource($provider);
    }
}
