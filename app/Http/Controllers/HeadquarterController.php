<?php

namespace App\Http\Controllers;

use App\Http\Resources\HeadquarterResource;
use App\Models\Headquarter;
use Illuminate\Http\Request;
/**
 * @group Headquarter
 */
class HeadquarterController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\HeadquarterResource
     * @apiResourceModel App\Models\Headquarter
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $headquarters = Headquarter::filter($filter)->paginate($paginate);
        return HeadquarterResource::collection($headquarters);
    }
    /**
     * @bodyParam name required El nombre de la sucursal. Example: Pereira
     * @apiResource App\Http\Resources\HeadquarterResource
     * @apiResourceModel App\Models\Headquarter
     */
    public function store(Request $request)
    {
        $headquarter = Headquarter::create($request->all());
        return new HeadquarterResource($headquarter);
    }
    /**
     * @apiResource App\Http\Resources\HeadquarterResource
     * @apiResourceModel App\Models\Headquarter
     */
    public function show(Headquarter $headquarter)
    {
        $headquarter->users;
        return new HeadquarterResource($headquarter);
    }
    /**
     * @bodyParam name required El nombre de la sucursal. Example: Pereira
     * * @apiResource App\Http\Resources\HeadquarterResource
     * @apiResourceModel App\Models\Headquarter
     */
    public function update(Request $request, Headquarter $headquarter)
    {
        $headquarter->update($request->all());
        return new HeadquarterResource($headquarter);
    }
    /**
     * @apiResource App\Http\Resources\HeadquarterResource
     * @apiResourceModel App\Models\Headquarter
     */
    public function destroy(Headquarter $headquarter)
    {
        $headquarter->delete();
        return new HeadquarterResource($headquarter);
    }
}
