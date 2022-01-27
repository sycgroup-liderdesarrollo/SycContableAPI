<?php

namespace App\Http\Controllers;

use App\Models\HealthProvider;
use Illuminate\Http\Request;
/**
 * @group Health Provider
 */
class HealthProviderController extends Controller
{
    public function index()
    {
        $healthProviders = HealthProvider::all();
        return response()->json(['status'=>true,'data'=>$healthProviders]);
    }
    public function store(Request $request)
    {
        $healthProvider = HealthProvider::create($request->all());
        return response()->json(['status'=>true,'data'=>$healthProvider]);
    }
    public function show(HealthProvider $healthProvider)
    {
        return response()->json(['status'=>true,'data'=>$healthProvider]);
    }
    public function update(Request $request, HealthProvider $healthProvider)
    {
        $healthProvider->update($request->all());
        return response()->json(['status'=>true,'data'=>$healthProvider]);
    }
    public function destroy(HealthProvider $healthProvider)
    {
        $healthProvider->delete();
        return response()->json(['status'=>true,'data'=>$healthProvider]);
    }
}
