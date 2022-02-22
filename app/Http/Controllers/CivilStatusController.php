<?php

namespace App\Http\Controllers;

use App\Http\Resources\CivilStatusResource;
use App\Models\CivilStatus;
use Illuminate\Http\Request;

/**
 * @group Civil Status
 */
class CivilStatusController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\CivilStatusResource
     * @apiResourceModel App\Models\CivilStatus
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $civilStatuses = CivilStatus::filter($filter)->paginate($paginate);

        return CivilStatusResource::collection($civilStatuses);
    }
}
