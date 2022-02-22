<?php

namespace App\Http\Controllers;

use App\Http\Resources\PositionResource;
use App\Models\Position;
use Illuminate\Http\Request;
/**
 * @group Position
 */
class PositionController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $positions = Position::filter($filter)->paginate($paginate);
        return PositionResource::collection($positions);
    }
    /**
     * @bodyParam name required El nombre del cargo. Example: Jefe
     */
    public function store(Request $request)
    {
        $position = Position::create($request->all());
        return new PositionResource($position);
    }
    public function show(Position $position)
    {
        return new PositionResource($position);
    }
    /**
     * @bodyParam name required El nombre del cargo. Example: Jefe
     */
    public function update(Request $request, Position $position)
    {
        $position->update($request->all());
        return new PositionResource($position);
    }
    public function destroy(Position $position)
    {
        $position->delete();
        return new PositionResource($position);
    }
}
