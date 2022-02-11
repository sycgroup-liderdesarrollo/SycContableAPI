<?php

namespace App\Http\Controllers;

use App\Models\Kinship;

/**
 * @group Kinkship
 */
class KinkshipController extends Controller
{
    public function index()
    {
        $kinships = Kinship::all();
        return response()->json(['status'=> true,'data'=>$kinships]);
    }
}
