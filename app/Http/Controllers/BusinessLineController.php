<?php

namespace App\Http\Controllers;

use App\Models\BusinessLine;
use Illuminate\Http\Request;

/**
 * @group Business Line
 */

class BusinessLineController extends Controller
{

    public function index()
    {
        $businessLines = BusinessLine::all();

        return response()->json(['status'=>true,'data'=> $businessLines]);
    }
    /**
     * @bodyParam name required El nombre de la linea de negocions. Example: SyC Group
     */
    public function store(Request $request)
    {
        $businessLine=BusinessLine::create($request->all());
        return response()->json(['status'=>true,'data'=> $businessLine]);

    }


    public function show(BusinessLine $businessLine)
    {
        $businessLine->users;
        return response()->json(['status'=>true,'data'=> $businessLine]);

    }

    /**
     * @bodyParam name required El nombre de la linea de negocions. Example: SyC Group
     */
    public function update(Request $request, BusinessLine $businessLine)
    {
        $businessLine->update($request->all());
        return response()->json(['status'=>true,'data'=> $businessLine]);

    }

    public function destroy(BusinessLine $businessLine)
    {
        $businessLine->delete();
        return response()->json(['status'=>true,'data'=> $businessLine]);

    }
}
