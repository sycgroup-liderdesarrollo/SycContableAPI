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
    /**
     * @apiResourceCollection App\Http\Resources\Contact\ContactsResource
     * @apiResourceModel App\Models\Contact
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $contacts=Contact::filter($filter)->paginate($paginate);
        return ContactsResource::collection($contacts);
    }
    /**
     * @apiResource  App\Http\Resources\Contact\ContactResource
     * @apiResourceModel App\Models\Contact
     */
    public function store(Request $request)
    {
        $contact = Contact::create($request->all());
        return new ContactResource($contact);
    }
    /**
     * @apiResource  App\Http\Resources\Contact\ContactResource
     * @apiResourceModel App\Models\Contact
     */
    public function show(Contact $contact)
    {
        return new ContactResource($contact);
    }
    /**
     * @apiResource  App\Http\Resources\Contact\ContactResource
     * @apiResourceModel App\Models\Contact
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());
        return new ContactResource($contact);
    }
    /**
     * @apiResource  App\Http\Resources\Contact\ContactResource
     * @apiResourceModel App\Models\Contact
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return new ContactResource($contact);
    }
    /**
     * @apiResource  App\Http\Resources\Contact\ContactResource
     * @apiResourceModel App\Models\Contact
     */
    public function providerContact($provider_id)
    {
        $contact= Contact::where('provider_id', $provider_id)->get();
        return new ContactResource($contact);
    }
}
