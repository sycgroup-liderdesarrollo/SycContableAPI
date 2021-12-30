<?php

namespace App\Http\Controllers;

use App\Models\Headquarter;
use Illuminate\Http\Request;
/**
 * @group Headquarter
 */
class HeadquarterController extends Controller
{

    public function index()
    {
        $headQuarters = Headquarter::all();
        return response()->json(['status'=>true,'data'=>$headQuarters]);
    }
    /**
     * @bodyParam name required El nombre de la sucursal. Example: Pereira
     */
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
    /**
     * @bodyParam name required El nombre de la sucursal. Example: Pereira
     */
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
