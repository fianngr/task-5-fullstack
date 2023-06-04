<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class articleDetailResource extends JsonResource
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
            'title'=>$this->title,
            'content'=>$this->content,
            'created_at'=>date_format($this->created_at,"Y/m/d"),
            'user'=>$this->whenLoaded('user'),
            // 'image'=>$this->image,
            'category_id'=>$this->category_id
        ];
    }
}
