<?php

namespace App\Http\Controllers;

use App\Models\EducationLevel;
/**
 * @group Education Level
 */
class EducationLevelController extends Controller
{
    public function index()
    {
        $educationLevels = EducationLevel::all();
        return response()->json(['status'=>true,'data'=>$educationLevels]);
    }
}
