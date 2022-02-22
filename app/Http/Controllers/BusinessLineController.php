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

    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $businessLines = BusinessLine::filter($filter)->paginate($paginate);

        return BusinessLineResource::collection($businessLines);
    }
    /**
     * @bodyParam name required El nombre de la linea de negocions. Example: SyC Group
     */
    public function store(Request $request)
    {
        $businessLine=BusinessLine::create($request->all());
        return new BusinessLineResource($businessLine);
    }

    public function show(BusinessLine $businessLine)
    {
        return new BusinessLineResource($businessLine);
    }

    /**
     * @bodyParam name required El nombre de la linea de negocions. Example: SyC Group
     * @bodyParam active boolean El estado de la linea de negocios, si esta activa o no.
     */
    public function update(Request $request, BusinessLine $businessLine)
    {
        $businessLine->update($request->all());
        return new BusinessLineResource($businessLine);
    }

    public function destroy(BusinessLine $businessLine)
    {
        $businessLine->delete();
        return new BusinessLineResource($businessLine);
    }
}
