<?php

namespace App\Http\Controllers;

use App\Models\EmergencyContact;
use Illuminate\Http\Request;
/**
 * @group Emergency Contact
 */
class EmergencyContactController extends Controller
{

    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $emergencyContacts = EmergencyContact::filter($filter)->paginate($paginate);
        return response()->json(['status'=>true,'data'=>$emergencyContacts]);
    }

    public function store(Request $request)
    {
        $emergencyContact = EmergencyContact::create($request->all());
        return response()->json(['status'=>true,'data'=>$emergencyContact]);
    }

    public function show(EmergencyContact $emergencyContact)
    {
        return response()->json(['status'=>true,'data'=>$emergencyContact]);
    }

    public function update(Request $request, EmergencyContact $emergencyContact)
    {
        $emergencyContact->update($request->all());
        return response()->json(['status'=>true,'data'=>$emergencyContact]);
    }

    public function destroy(EmergencyContact $emergencyContact)
    {
        $emergencyContact->delete();
        return response()->json(['status'=>true,'data'=>$emergencyContact]);
    }
}
