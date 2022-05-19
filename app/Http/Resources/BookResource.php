<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'title' => $this->title,
            'author' => $this->author,
            'synopsis' => $this->synopsis,
            'genre' => $this->genre->name,
            'price' => 'R$'.number_format($this->price, 2, ',', '.'),
            'year' => $this->year,
            'date_create' => $this->date_create,
            'date_update' => $this->date_update
        ];
    }
}
