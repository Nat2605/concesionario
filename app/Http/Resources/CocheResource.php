<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CocheResource extends JsonResource
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
            'modelo' => $this->modelo,
            'marca' => $this->marca->nombre,
            'velocidad_max' => $this->velocidad_max,
            'carburante' => $this->carburante,
            'descripcion' => $this->descripcion,
        ];
    }
}
