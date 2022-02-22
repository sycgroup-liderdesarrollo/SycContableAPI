<?php

namespace App\Http\Controllers;

use App\Http\Resources\BusinessLineResource;
use App\Models\BusinessLine;
use Illuminate\Http\Request;

/**
 * @group Business Line
 */

class BusinessLineController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\BusinessLineResource
     * @apiResourceModel App\Models\BusinessLine
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $businessLines = BusinessLine::filter($filter)->paginate($paginate);

        return BusinessLineResource::collection($businessLines);
    }
    /**
     * @apiResource  App\Http\Resources\BusinessLineResource
     * @apiResourceModel App\Models\BusinessLine
     */
    public function store(Request $request)
    {
        $businessLine=BusinessLine::create($request->all());
        return new BusinessLineResource($businessLine);
    }
    /**
     * @apiResource  App\Http\Resources\BusinessLineResource
     * @apiResourceModel App\Models\BusinessLine
     */
    public function show(BusinessLine $businessLine)
    {
        return new BusinessLineResource($businessLine);
    }
    /**
     * @bodyParam name required El nombre de la linea de negocions. Example: SyC Group
     * @bodyParam active boolean El estado de la linea de negocios, si esta activa o no.
     * @apiResource  App\Http\Resources\BusinessLineResource
     * @apiResourceModel App\Models\BusinessLine
     */
    public function update(Request $request, BusinessLine $businessLine)
    {
        $businessLine->update($request->all());
        return new BusinessLineResource($businessLine);
    }
    /**
     * @apiResource  App\Http\Resources\BusinessLineResource
     * @apiResourceModel App\Models\BusinessLine
     */
    public function destroy(BusinessLine $businessLine)
    {
        $businessLine->delete();
        return new BusinessLineResource($businessLine);
    }
}
