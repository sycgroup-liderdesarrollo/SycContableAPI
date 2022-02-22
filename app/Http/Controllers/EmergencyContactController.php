<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmergencyContactResource;
use App\Models\EmergencyContact;
use Illuminate\Http\Request;
/**
 * @group Emergency Contact
 */
class EmergencyContactController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\EmergencyContactResource
     * @apiResourceModel App\Models\EmergencyContact
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $emergencyContacts = EmergencyContact::filter($filter)->paginate($paginate);
        return EmergencyContactResource::collection($emergencyContacts);
    }
    /**
     * @apiResource App\Http\Resources\EmergencyContactResource
     * @apiResourceModel App\Models\EmergencyContact
     */
    public function store(Request $request)
    {
        $emergencyContact = EmergencyContact::create($request->all());
        return new EmergencyContactResource($emergencyContact);
    }
    /**
     * @apiResource App\Http\Resources\EmergencyContactResource
     * @apiResourceModel App\Models\EmergencyContact
     */
    public function show(EmergencyContact $emergencyContact)
    {
        return new EmergencyContactResource($emergencyContact);
    }
    /**
     * @apiResource App\Http\Resources\EmergencyContactResource
     * @apiResourceModel App\Models\EmergencyContact
     */
    public function update(Request $request, EmergencyContact $emergencyContact)
    {
        $emergencyContact->update($request->all());
        return new EmergencyContactResource($emergencyContact);
    }
    /**
     * @apiResource App\Http\Resources\EmergencyContactResource
     * @apiResourceModel App\Models\EmergencyContact
     */
    public function destroy(EmergencyContact $emergencyContact)
    {
        $emergencyContact->delete();
        return new EmergencyContactResource($emergencyContact);
    }
}
