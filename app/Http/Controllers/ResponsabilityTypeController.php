<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResponsabilityTypeResource;
use App\Models\ResponsabilityType;

class ResponsabilityTypeController extends Controller
{
    public function index()
    {
        $responsabilityTypes = ResponsabilityType::all();
        return ResponsabilityTypeResource::collection($responsabilityTypes);
    }
}
