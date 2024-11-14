<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
//            'user_id' => $this->user->id,
            'user_id' => $this->user ? $this->user->id : null,
            'title' => $this->title,
            'image' => url('storage/' .$this->image),
            'post' => $this->post,
            'location' => $this->location,
            'created_at' => Carbon::parse($this->created_at)->diffForHumans(),
        ];
    }
}
