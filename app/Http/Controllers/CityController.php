<?php

namespace App\Http\Controllers;

use App\Http\Resources\CitiesResource;
use App\Models\City;
use Illuminate\Http\Request;
/**
 * @group City
 */
class CityController extends Controller
{
    /**
     * @queryParam name Filtro para buscar ciudades por nombre. Example: Pereira
     */
    public function index(Request $request)
    {
        $filter = $request->query('province_id',null);

        $cities = City::filter($filter)->get();

        return CitiesResource::collection($cities);
    }
}
