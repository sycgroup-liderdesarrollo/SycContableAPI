<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class VacationResource extends JsonResource
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
            'id'=>$this->id,
            'start_date'=>$this->start_date,
            'end_date'=>$this->end_date,
            'total_days'=>$this->total_days,
            'user'=>new UsersResource(User::findOrFail($this->user_id))
        ];
    }
}
