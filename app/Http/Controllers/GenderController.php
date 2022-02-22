<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenderResource;
use App\Models\Gender;
use Illuminate\Http\Request;

/**
 * @group Gender
 */
class GenderController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $genders = Gender::filter($filter)->paginate($paginate);
        return GenderResource::collection($genders);
    }
}
