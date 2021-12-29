<?php

namespace App\Http\Controllers;

use App\Models\Headquarter;
use Illuminate\Http\Request;

class HeadquarterController extends Controller
{

    public function index()
    {
        $headQuarters = Headquarter::all();
        return response()->json(['status'=>true,'data'=>$headQuarters]);
    }

    public function store(Request $request)
    {
        $headQuarter = Headquarter::create($request->all());
        return response()->json(['status'=>true,'data'=>$headQuarter]);
    }

    public function show(Headquarter $headQuarter)
    {
        $headQuarter->users;
        return response()->json(['status'=>true,'data'=>$headQuarter]);
    }

    public function update(Request $request, Headquarter $headQuarter)
    {
        $headQuarter->update($request->all());
        return response()->json(['status'=>true,'data'=>$headQuarter]);
    }

    public function destroy(Headquarter $headQuarter)
    {
        $headQuarter->delete();
        return response()->json(['status'=>true,'data'=>$headQuarter]);
    }
}
