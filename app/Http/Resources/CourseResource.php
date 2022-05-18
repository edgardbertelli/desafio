<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            'description' => $this->description,
            'category' => $this->category->name,
            'price' => 'R$'.number_format($this->price, 2, ',', '.'),
            'author' => $this->author,
            'length' => $this->length,
            'date_create' => $this->date_create,
            'date_update' => $this->date_update
        ];
    }
}
