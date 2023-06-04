<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class articleResource extends JsonResource
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
            'excerpt'=>$this->excerpt,
            'created_at'=>date_format($this->created_at,"Y/m/d"),
            // 'image'=>$this->image,
            'user'=>$this->whenLoaded('user'),
            'category_id'=>$this->category_id
        ];
    }
}
