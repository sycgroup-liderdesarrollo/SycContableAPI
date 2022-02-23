<?php

namespace App\Http\Resources\Convenant;

use App\Http\Resources\Concept\ConceptResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CovenantsResource extends JsonResource
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
            'image' => $this->image,
            'covenantType' => new CovenantTypeResource($this->covenantType),
            'concept' => new ConceptResource($this->concept)
        ];
    }
}
