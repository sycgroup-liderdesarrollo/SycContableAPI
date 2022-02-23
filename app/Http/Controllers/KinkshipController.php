<?php

namespace App\Http\Controllers;

use App\Http\Resources\KinkshipResource;
use App\Models\Kinship;
use Illuminate\Http\Request;

/**
 * @group Kinkship
 */
class KinkshipController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\KinkshipResource
     * @apiResourceModel App\Models\Kinship
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $kinkships = Kinship::filter($filter)->paginate($paginate);
        return KinkshipResource::collection($kinkships);
    }
}
