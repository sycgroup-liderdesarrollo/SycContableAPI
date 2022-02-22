<?php

namespace App\Http\Resources\Convenant;

use App\Http\Resources\Concept\ConceptResource;
use App\Http\Resources\PeriodicityTypeResource;
use App\Http\Resources\Provider\ProviderResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\UsersResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CovenantResource extends JsonResource
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
            'active' => $this->active,
            'value' => $this->value,
            'covenantType' => new CovenantTypeResource($this->covenantType),
            'periodicityType' => new PeriodicityTypeResource($this->periodicityType),
            'concept' => new ConceptResource($this->concept),
            'provider' => new ProviderResource($this->provider),
            'users' => $this->users
        ];
    }
}
