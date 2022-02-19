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
    public function index()
    {
        $occupationals = OccupationalRiskManager::all();
        return OcupationalRiskManagerResource::collection($occupationals);
    }
}
