<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{

    public function index()
    {
        $positions = Position::all();
        return response()->json(['status'=>true,'data'=>$positions]);
    }

    public function store(Request $request)
    {
        $position = Position::create($request->all());
        return response()->json(['status'=>true,'data'=>$position]);
    }


    public function show(Position $position)
    {
        return response()->json(['status'=>true,'data'=>$position]);
    }


    public function update(Request $request, Position $position)
    {
        $position->update($request->all());
        return response()->json(['status'=>true,'data'=>$position]);
    }


    public function destroy(Position $position)
    {
        $position->delete();
        return response()->json(['status'=>true,'data'=>$position]);
    }
}
