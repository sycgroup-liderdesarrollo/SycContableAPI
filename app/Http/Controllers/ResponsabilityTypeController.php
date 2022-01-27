<?php

namespace App\Http\Controllers;

use App\Models\ResponsabilityType;
use Illuminate\Http\Request;

class ResponsabilityTypeController extends Controller
{
    public function index()
    {
        $responsabilityTypes = ResponsabilityType::all();
        return response()->json(['status'=>true,'data'=>$responsabilityTypes]);
    }
}
