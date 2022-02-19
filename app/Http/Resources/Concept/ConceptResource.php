<?php

namespace App\Http\Resources\Concept;

use Illuminate\Http\Resources\Json\JsonResource;

class ConceptResource extends JsonResource
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
            'id'          => $this->id,
            'name'        => $this->name,
            'calculated'  => $this->calculated,
            'conceptType' => new ConceptTypeResource($this->conceptType),
            'setting'     => new SettingResource($this->setting)
        ];
    }
}
