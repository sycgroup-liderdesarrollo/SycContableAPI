<?php

namespace App\Http\Controllers;

use App\Models\PensionFund;
use Illuminate\Http\Request;

class PensionFundController extends Controller
{
    public function index()
    {
        $pensionFunds = PensionFund::all();
        return response()->json(['status'=>true,'data'=>$pensionFunds]);
    }
    public function store(Request $request)
    {
        $pensionFund = PensionFund::create($request->all());
        return response()->json(['status'=>true,'data'=>$pensionFund]);
    }
    public function show(PensionFund $pensionFund)
    {
        return response()->json(['status'=>true,'data'=>$pensionFund]);
    }
    public function update(Request $request, PensionFund $pensionFund)
    {
        $pensionFund->update($request->all());
        return response()->json(['status'=>true,'data'=>$pensionFund]);
    }
    public function destroy(PensionFund $pensionFund)
    {
        $pensionFund->delete();
        return response()->json(['status'=>true,'data'=>$pensionFund]);
    }
}
