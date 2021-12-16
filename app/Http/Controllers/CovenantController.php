<?php

namespace App\Http\Controllers;

use App\Http\Requests\Covenant\UpdateCovenantRequest;
use App\Http\Requests\Covenant\CreateCovenantRequest;
use App\Models\Covenant;
use Illuminate\Http\Request;

class CovenantController extends Controller
{
    public function index()
    {
        $covenant = Covenant::all();
        return $covenant;
    }
    public function store(CreateCovenantRequest $request, Covenant $covenant)
    {
        $covenant = Covenant::create($request->all());
        return $covenant;
    }
    public function show(Covenant $covenant)
    {
        $covenant->covenantType;
        $covenant->periodicityType;
        $covenant->concept;
        return $covenant;
    }
    public function update(UpdateCovenantRequest $request, Covenant $covenant)
    {
        $covenant->update($request->all());
        return $covenant;
    }
    public function destroy(Covenant $covenant)
    {
        $covenant->delete();
        return $covenant;
    }
}
