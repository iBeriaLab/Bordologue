<?php

namespace App\Http\Resources\Organisation;

use Illuminate\Http\Resources\Json\Resource;

class OrganisationResource extends Resource
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
            'name' => $this->name,
            'description' => $this->detail,
            'image' => $this->image,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
        ];
    }
}
