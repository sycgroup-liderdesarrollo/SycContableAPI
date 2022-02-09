<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersResource;
use App\Models\Provision;
use App\Models\User;
use Illuminate\Http\Request;

class ProvisionController extends Controller
{
    public function index()
    {
        $provisions = Provision::all();
        return response()->json(['status'=>true,'data'=>$provisions]);
    }
    public function show(Provision $provision)
    {
        return response()->json(['status'=>true,'data'=>$provision]);
    }
    public function store(Request $request)
    {
        $provision = Provision::create($request->all());
        return response()->json(['status'=>true,'data'=>$provision]);
    }
    public function update(Provision $provision, Request $request)
    {
        $provision->update($request->all());
    }
    public function destroy(Provision $provision)
    {
        $provision->delete();
    }

}
