<?php

namespace App\Http\Resources\v2;

use Illuminate\Http\Resources\Json\Resource;

class PersonResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'full_name' => $this->first_name .' '. $this->last_name,
            'mobile_phone' => $this->phone,

        ];
    }
}
