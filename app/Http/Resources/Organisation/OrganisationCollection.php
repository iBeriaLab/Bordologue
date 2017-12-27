<?php

namespace App\Http\Resources\Organisation;

use Illuminate\Http\Resources\Json\Resource;

class OrganisationCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'image' => $this->image,
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'No Rating',
            'href' => [
                'link' => route('organisations.show',$this->id)
            ]
        ];
    }
}
