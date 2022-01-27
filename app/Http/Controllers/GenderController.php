<?php

namespace App\Http\Controllers;

use App\Models\Gender;
/**
 * @group Gender
 */
class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        return response()->json(['status'=>true,'data'=>$genders]);
    }
}
