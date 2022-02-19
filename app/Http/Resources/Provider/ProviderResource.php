<?php

namespace App\Http\Resources\Provider;

use App\Http\Resources\CitiesResource;
use App\Http\Resources\ConstitutionTypeResource;
use App\Http\Resources\IdentificationTypeResource;
use App\Http\Resources\ResponsabilityTypeResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderResource extends JsonResource
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
            'trade_name' => $this->trade_name,
            'address' => $this->address,
            'phone' => $this->phone,
            'identification_number' => $this->identification_number,
            'iva' => $this->iva,
            'email' => $this->email,
            'identificationType' => new IdentificationTypeResource($this->identificationType),
            'ConstitutionType' => new ConstitutionTypeResource($this->constitutionType),
            'city' => new CitiesResource($this->city),
            'responsabilityType' => new ResponsabilityTypeResource($this->responsabilityType)
        ];
    }
}
