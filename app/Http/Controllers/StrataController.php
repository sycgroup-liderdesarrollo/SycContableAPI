<?php

namespace App\Http\Controllers;

use App\Http\Resources\StrataResource;
use App\Models\Strata;
/**
 * @group Strata
 */
class StrataController extends Controller
{
    public function index()
    {
        $strata = Strata::all();
        return StrataResource::collection($strata);
    }
}
