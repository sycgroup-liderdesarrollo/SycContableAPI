<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenderResource;
use App\Models\Gender;
/**
 * @group Gender
 */
class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        return GenderResource::collection($genders);
    }
}
