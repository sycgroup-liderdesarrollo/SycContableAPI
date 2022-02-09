<?php

namespace App\Http\Controllers;

use App\Models\OccupationalRiskManager;
use Illuminate\Http\Request;

class OccupationalRiskManagerController extends Controller
{
    public function index()
    {
        $occupationals = OccupationalRiskManager::all();
        return response()->json(['status'=>true,'data'=>$occupationals]);
    }
}
