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
    public function index()
    {
        $headquarters = Headquarter::all();
        return HeadquarterResource::collection($headquarters);
    }
    /**
     * @bodyParam name required El nombre de la sucursal. Example: Pereira
     */
    public function store(Request $request)
    {
        $headquarter = Headquarter::create($request->all());
        return new HeadquarterResource($headquarter);
    }
    public function show(Headquarter $headquarter)
    {
        $headquarter->users;
        return new HeadquarterResource($headquarter);
    }
    /**
     * @bodyParam name required El nombre de la sucursal. Example: Pereira
     */
    public function update(Request $request, Headquarter $headquarter)
    {
        $headquarter->update($request->all());
        return new HeadquarterResource($headquarter);
    }
    public function destroy(Headquarter $headquarter)
    {
        $headquarter->delete();
        return new HeadquarterResource($headquarter);
    }
}
