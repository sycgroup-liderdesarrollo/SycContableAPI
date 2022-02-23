<?php

namespace App\Http\Controllers;

use App\Http\Resources\IdentificationTypeResource;
use App\Models\identificationType;
use Illuminate\Http\Request;
/**
 * @group Identification Type
 */
class IdentificationTypeController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\IdentificationTypeResource
     * @apiResourceModel App\Models\IdentificationType
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $identificationTypes = identificationType::filter($filter)->paginate($paginate);
        return IdentificationTypeResource::collection($identificationTypes);
    }
    /**
     * @bodyParam name required El nombre del tipo de identificacion. Example: Cedula de ciudadania
     * @apiResource App\Http\Resources\IdentificationTypeResource
     * @apiResourceModel App\Models\IdentificationType
     */
    public function store(Request $request)
    {
        $identificationType = identificationType::create($request->all());
        return new IdentificationTypeResource($identificationType);
    }
    /**
     * @apiResource App\Http\Resources\IdentificationTypeResource
     * @apiResourceModel App\Models\IdentificationType
     */
    public function show(identificationType $identificationType)
    {
        $identificationType->users;
        $identificationType->provider;
        return new IdentificationTypeResource($identificationType);
    }
    /**
     * @bodyParam name required El nombre del tipo de identificacion. Example: Cedula de ciudadania
     * @apiResource App\Http\Resources\IdentificationTypeResource
     * @apiResourceModel App\Models\IdentificationType
     */
    public function update(Request $request, identificationType $identificationType)
    {
        $identificationType->update($request->all());
        return new IdentificationTypeResource($identificationType);
    }
    /**
     * @apiResource App\Http\Resources\IdentificationTypeResource
     * @apiResourceModel App\Models\IdentificationType
     */
    public function destroy(identificationType $identificationType)
    {
        $identificationType->delete();
        return new IdentificationTypeResource($identificationType);
    }
}
