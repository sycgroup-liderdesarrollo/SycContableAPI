<?php

namespace App\Http\Controllers;

use App\Models\ResponsabilityType;

class ResponsabilityTypeController extends Controller
{
    public function index()
    {
        $responsabilityTypes = ResponsabilityType::all();
        return response()->json(['status'=>true,'data'=>$responsabilityTypes]);
    }
}
