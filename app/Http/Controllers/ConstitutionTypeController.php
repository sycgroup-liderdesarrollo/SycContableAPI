<?php

namespace App\Http\Controllers;

use App\Models\ConstitutionType;
use Illuminate\Http\Request;

class ConstitutionTypeController extends Controller
{
    public function index()
    {
        $constitutionTypes = ConstitutionType::all();
        return response()->json(['status'=>true,'data'=>$constitutionTypes]);
    }
}
