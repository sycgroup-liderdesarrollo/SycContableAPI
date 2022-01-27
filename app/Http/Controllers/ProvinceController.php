<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
/**
 * @group Province
 */
class ProvinceController extends Controller
{
    /**
     * @queryParam name Filtro para buscar departamentos. Example: Risaralda
     */
    public function index(Request $request)
    {
        $filter = $request->query('name',null);
        $provinces = Province::filter($filter)->get();
        return response()->json(['status'=>true,'data'=>$provinces]);

    }
}