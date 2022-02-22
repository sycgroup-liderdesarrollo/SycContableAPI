<?php

namespace App\Http\Controllers;

use App\Http\Resources\OcupationalRiskManagerResource;
use App\Models\OccupationalRiskManager;
use Illuminate\Http\Request;
/**
 * @group Occupational Risk Manager
 */
class OccupationalRiskManagerController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\OcupationalRiskManagerResource
     * @apiResourceModel App\Models\OccupationalRiskManager
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $occupationals = OccupationalRiskManager::filter($filter)->paginate($paginate);
        return OcupationalRiskManagerResource::collection($occupationals);
    }
}
