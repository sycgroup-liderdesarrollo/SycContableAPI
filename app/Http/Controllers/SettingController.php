<?php

namespace App\Http\Controllers;

use App\Http\Requests\Setting\CreateSettingRequest;
use App\Http\Requests\Setting\UpdateSettingRequest;
use App\Http\Resources\Concept\SettingResource;
use App\Models\Setting;
use Illuminate\Http\Request;

/**
 * @group Setting
 */
class SettingController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $settings = Setting::filter($filter)->paginate($paginate);
        return SettingResource::collection($settings);
    }
    public function store(CreateSettingRequest $request)
    {
        $setting = Setting::create($request->all());
        return new SettingResource($setting);
    }
    public function show(Setting $setting)
    {
        return new SettingResource($setting);
    }
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $setting->update($request->all());
        return new SettingResource($setting);
    }
    public function destroy(Setting $setting)
    {
        $setting->delete();
        return new SettingResource($setting);
    }
}
