<?php

namespace App\Http\Controllers;

use App\Http\Resources\EducationLevelResource;
use App\Models\EducationLevel;
use Illuminate\Http\Request;

/**
 * @group Education Level
 */
class EducationLevelController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\EducationLevelResource
     * @apiResourceModel App\Models\EducationLevel
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $educationLevels = EducationLevel::filter($filter)->paginate($paginate);
        return EducationLevelResource::collection($educationLevels);
    }
}
