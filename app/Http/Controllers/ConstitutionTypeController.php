<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConstitutionTypeResource;
use App\Models\ConstitutionType;
use Illuminate\Http\Request;

/**
 * @group ConstitutionType
 */
class ConstitutionTypeController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\ConstitutionTypeResource
     * @apiResourceModel App\Models\ConstitutionType
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $constitutionTypes = ConstitutionType::filter($filter)->paginate($paginate);
        return ConstitutionTypeResource::collection($constitutionTypes);
    }
}
