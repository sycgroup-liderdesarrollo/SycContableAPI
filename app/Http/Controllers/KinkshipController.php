<?php

namespace App\Http\Controllers;

use App\Models\Kinship;
use Illuminate\Http\Request;

class KinkshipController extends Controller
{
    public function index()
    {
        $kinships = Kinship::all();
        return response()->json(['status'=> true,'data'=>$kinships]);
    }
}
