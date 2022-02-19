<?php

namespace App\Http\Resources\Contact;

use App\Http\Resources\Provider\ProviderResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'position' => $this->position,
            'phone' => $this->phone,
            'provider' => new ProviderResource($this->provider)
        ];
    }
}
