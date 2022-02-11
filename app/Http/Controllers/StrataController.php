<?php

namespace App\Http\Controllers;

use App\Models\Strata;
/**
 * @group Strata
 */
class StrataController extends Controller
{
    public function index()
    {
        $strata = Strata::all();
        return response()->json(['status'=>true,'data'=>$strata]);
    }
}
