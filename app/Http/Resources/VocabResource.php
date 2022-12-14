<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\JsonResource;

class VocabResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $user_id = Auth::id();
        return [
            'id' => $this->id,
            'title' => $this->title,
            'last_seen' => $this->description,
            'last_status' => $this->last_status,
            'repeat_number' => $this->repeat_number,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'user' => $this->user,
            'user_id' => $this->user_id,
            'meanings' => $this->meanings,

          ];
    }
}
