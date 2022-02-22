<?php

namespace App\Http\Controllers;

use App\Http\Resources\Contact\ContactResource;
use App\Http\Resources\Contact\ContactsResource;
use App\Models\Contact;
use Illuminate\Http\Request;

/**
 * @group Contact
 */
class ContactController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $contacts=Contact::filter($filter)->paginate($paginate);
        return ContactsResource::collection($contacts);
    }
    public function store(Request $request)
    {
        $contact = Contact::create($request->all());
        return new ContactResource($contact);
    }
    public function show(Contact $contact)
    {
        return new ContactResource($contact);
    }
    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());
        return new ContactResource($contact);
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return new ContactResource($contact);
    }
    public function providerContact($provider_id)
    {
        $contact= Contact::where('provider_id', $provider_id)->get();
        return new ContactResource($contact);
    }
}
