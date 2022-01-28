<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

        return response()->json(['status'=>true,'data'=>$cities]);
    }
}
