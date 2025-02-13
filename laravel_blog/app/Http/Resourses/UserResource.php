<?php

namespace App\Http\Resources;
use Illuminate\Http\Request;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'lastname' => $this->lastname,
            'age' => $this->age,
            'city' => $this->city,
            'email' => $this->email,
            'created_at' => $this->created_at
        ];
    }
}