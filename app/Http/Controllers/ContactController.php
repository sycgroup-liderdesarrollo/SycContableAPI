<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts=Contact::all();
        return response()->json(['status'=>true,'data'=>$contacts]);
    }
    public function store(Request $request)
    {
        $contact = Contact::create($request->all());
        return response()->json(['status'=>true,'data'=>$contact]);
    }
    public function show(Contact $contact)
    {
        return response()->json(['status'=>true,'data'=>$contact]);
    }
    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());
        return response()->json(['status'=>true,'data'=>$contact]);
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return response()->json(['status'=>true,'data'=>$contact]);
    }
}
