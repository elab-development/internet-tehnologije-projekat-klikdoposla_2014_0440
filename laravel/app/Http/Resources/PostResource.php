<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

     public static $wrap= 'post';
    public function toArray($request)
    {
        return [
'name'=>$this->resource->name,
'text'=>$this->resource->text,
'datum_objave'=>$this->resource->datum_objave,
//'vreme'=>$this->resource->vreme,
//'studio'=>$this->resource->studio,
'user_id'=>new UserResource($this->resource->user),
'profile_id'=>new ProfileResource($this->resource->profile),

        ];
    }
}
