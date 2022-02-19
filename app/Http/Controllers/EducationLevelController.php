<?php

namespace App\Http\Controllers;

use App\Http\Resources\EducationLevelResource;
use App\Models\EducationLevel;
/**
 * @group Education Level
 */
class EducationLevelController extends Controller
{
    public function index()
    {
        $educationLevels = EducationLevel::all();
        return EducationLevelResource::collection($educationLevels);
    }
}
