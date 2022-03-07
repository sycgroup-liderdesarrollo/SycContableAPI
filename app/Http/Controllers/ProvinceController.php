<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProvincesResource;
use App\Models\Province;
use Illuminate\Http\Request;
/**
 * @group Province
 */
class ProvinceController extends Controller
{
    /**
     * @queryParam name Filtro para buscar departamentos. Example: Risaralda
     * @apiResourceCollection App\Http\Resources\ProvincesResource
     * @apiResourceModel App\Models\Province
     */
    public function index(Request $request)
    {
        $paginate = $request->query('paginate') ?? 34;
        $filter = $request->query('name',null);
        $provinces = Province::filter($filter)->paginate($paginate);

        return ProvincesResource::collection($provinces);
    }
}
