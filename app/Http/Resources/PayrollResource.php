<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PayrollResource extends JsonResource
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
            'period' => new PeriodResource($this->period),
            'user' => new UsersResource($this->user),
            'provision' => new ProvissionResource($this->provision)
        ];
    }
}
