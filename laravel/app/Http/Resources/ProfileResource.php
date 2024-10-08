<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
                 'status'=>$this->resource->status,
                 'skills'=>$this->resource->skills,
                 'githubusername'=>$this->resource->githubusername,
                 'location'=>$this->resource->location,
                         ];
         }
    }

