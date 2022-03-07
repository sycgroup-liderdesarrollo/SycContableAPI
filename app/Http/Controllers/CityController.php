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
     * @queryParam name Filtro para buscar ciudades por id de departamento. Example: 1
     * @apiResourceCollection App\Http\Resources\CitiesResource
     * @apiResourceModel App\Models\City
     */
    public function index(Request $request)
    {
        $filter = $request->query('province_id',null);
        $paginate = $request->query('paginate') ?? 200;

        $cities = City::filter($filter)->paginate($paginate);

        return CitiesResource::collection($cities);
    }
}
