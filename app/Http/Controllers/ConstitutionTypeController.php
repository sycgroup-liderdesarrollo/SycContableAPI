<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConstitutionTypeResource;
use App\Models\ConstitutionType;

/**
 * @group ConstitutionType
 */
class ConstitutionTypeController extends Controller
{
    public function index()
    {
        $constitutionTypes = ConstitutionType::all();
        return ConstitutionTypeResource::collection($constitutionTypes);
    }
}
