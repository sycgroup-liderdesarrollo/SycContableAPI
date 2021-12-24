<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{

    public function index()
    {
        $position = Position::all();
        return $position;
    }

    public function store(Request $request)
    {
        $position = Position::create($request->all());
        return $position;
    }


    public function show(Position $position)
    {
        $position->users;
        return $position;
    }


    public function update(Request $request, Position $position)
    {
        $position->update($request->all());
        return $position;
    }


    public function destroy(Position $position)
    {
        $position->delete();
        return $position;
    }
}
