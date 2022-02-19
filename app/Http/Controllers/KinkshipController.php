<?php

namespace App\Http\Controllers;

use App\Http\Resources\KinkshipResource;
use App\Models\Kinship;

/**
 * @group Kinkship
 */
class KinkshipController extends Controller
{
    public function index()
    {
        $kinkships = Kinship::all();
        return KinkshipResource::collection($kinkships);
    }
}
