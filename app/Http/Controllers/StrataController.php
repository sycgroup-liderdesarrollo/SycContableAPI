<?php

namespace App\Http\Controllers;

use App\Http\Resources\StrataResource;
use App\Models\Strata;
use Illuminate\Http\Request;

/**
 * @group Strata
 */
class StrataController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\StrataResource
     * @apiResourceModel App\Models\Strata
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $strata = Strata::filter($filter)->paginate($paginate);
        return StrataResource::collection($strata);
    }
}
