<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
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
            'name'=> $this->name,
            'last_name' => $this->last_name,
            'identification_number'=> $this->identification_number,
            'active'=> $this->active,
            'email'=> $this->email,
            'base_salary'=> $this->base_salary,
            'position' => new PositionResource($this->position),
            'image' => $this->image

        ];
    }
}
