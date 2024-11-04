<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
//        return parent::toArray($request);
        return [
            'id' => $this->id,
            'full_name' => $this->full_name,
            'username' => $this->username,
            'password' => $this->password,
            'email' => $this->email,
            'phone' => $this->phone,
            'created_at' => $this->created_at
        ];
    }
}
