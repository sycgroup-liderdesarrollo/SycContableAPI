<?php

namespace App\Http\Controllers;

use App\Models\Headquarter;
use Illuminate\Http\Request;

class HeadquarterController extends Controller
{

    public function index()
    {
        $headQuarter = Headquarter::all();
        return $headQuarter;
    }

    public function store(Request $request)
    {
        $headQuarter = Headquarter::create($request->all());
        return $headQuarter;
    }

    public function show(Headquarter $headQuarter)
    {
        $headQuarter->users;
        return $headQuarter;
    }

    public function update(Request $request, Headquarter $headQuarter)
    {
        $headQuarter->update($request->all());
        return $headQuarter;
    }

    public function destroy(Headquarter $headQuarter)
    {
        $headQuarter->delete();
        return $headQuarter;
    }
}
