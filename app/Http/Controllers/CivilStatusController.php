<?php

namespace App\Http\Controllers;

use App\Http\Resources\CivilStatusResource;
use App\Models\CivilStatus;
/**
 * @group Civil Statu
 */
class CivilStatusController extends Controller
{
    public function index()
    {
        $civilStatuses = CivilStatus::all();

        return CivilStatusResource::collection($civilStatuses);
    }
}
