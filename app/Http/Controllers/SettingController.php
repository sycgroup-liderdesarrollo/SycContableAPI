<?php

namespace App\Http\Controllers;

use App\Http\Requests\Setting\CreateSettingRequest;
use App\Http\Requests\Setting\UpdateSettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return response()->json(['status'=>true,'data'=>$settings]);
    }

    public function store(CreateSettingRequest $request)
    {
        $setting = Setting::create($request->all());
        return response()->json(['status'=>true,'data'=>$setting]);

    }

    public function show(Setting $setting)
    {
        return response()->json(['status'=>true,'data'=>$setting]);
    }

    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $setting->update($request->all());
        return response()->json(['status'=>true,'data'=>$setting]);
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return response()->json(['status'=>true,'data'=>$setting]);
    }
}
