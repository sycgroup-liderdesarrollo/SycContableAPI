<?php

namespace App\Http\Controllers;

use App\Models\BusinessLine;
use Illuminate\Http\Request;

class BusinessLineController extends Controller
{

    public function index()
    {
        $businessLine = BusinessLine::all();

        return $businessLine;
    }

    public function store(Request $request)
    {
        $businessLine=BusinessLine::create($request->all());
        return $businessLine;
    }


    public function show(BusinessLine $businessLine)
    {
        $businessLine->users;
        return $businessLine;
    }


    public function update(Request $request, BusinessLine $businessLine)
    {
        $businessLine->update($request->all());
        return $businessLine;
    }

    public function destroy(BusinessLine $businessLine)
    {
        $businessLine->delete();
        return $businessLine;
    }
}
