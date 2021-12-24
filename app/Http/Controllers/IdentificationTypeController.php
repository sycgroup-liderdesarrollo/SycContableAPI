<?php

namespace App\Http\Controllers;

use App\Models\identificationType;
use Illuminate\Http\Request;

class IdentificationTypeController extends Controller
{

    public function index()
    {
        $identificationType = identificationType::all();
        return $identificationType;
    }

    public function store(Request $request)
    {
        $identificationType = identificationType::create($request->all());
        return $identificationType;
    }

    public function show(identificationType $identificationType)
    {
        $identificationType->users;
        $identificationType->provider;
        return $identificationType;
    }

    public function update(Request $request, identificationType $identificationType)
    {
        $identificationType->update($request->all());
        return $identificationType;
    }

    public function destroy(identificationType $identificationType)
    {
        $identificationType->delete();
        return $identificationType;
    }
}
