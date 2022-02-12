<?php

namespace App\Http\Controllers;

use App\Models\Covenant;
use App\Models\Provision;
use App\Models\Setting;
use App\Models\User;
use App\Models\Vacation;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * @group Provision
 */
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
        $provision = $request->all();
        $provision['period_id'] = period(Carbon::now()->format('d'));
        $provision = Provision::create($provision);
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
    public function prueba(){
        
    }

}


