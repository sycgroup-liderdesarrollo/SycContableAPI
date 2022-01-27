<?php

namespace App\Http\Controllers;

use App\Models\CivilStatu;
/**
 * @group Civil Statu
 */
class CivilStatuController extends Controller
{
    public function index()
    {
        $civilStatus = CivilStatu::all();
        return response()->json(['status'=>true,'data'=>$civilStatus]);
    }
}
