<?php

namespace App\Http\Controllers;

use App\Models\ConstitutionType;

/**
 * @group ConstitutionType
 */
class ConstitutionTypeController extends Controller
{
    public function index()
    {
        $constitutionTypes = ConstitutionType::all();
        return response()->json(['status'=>true,'data'=>$constitutionTypes]);
    }
}
