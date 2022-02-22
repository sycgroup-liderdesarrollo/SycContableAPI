<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResponsabilityTypeResource;
use App\Models\ResponsabilityType;
use Illuminate\Http\Request;

class ResponsabilityTypeController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $responsabilityTypes = ResponsabilityType::filter($filter)->paginate($paginate);
        return ResponsabilityTypeResource::collection($responsabilityTypes);
    }
}
