<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;
use App\Http\Resources\UserResource;

class BlogResource extends JsonResource
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
            'Title' => $this->Title,
            'Content' => $this->Content,
            'image' => $this->image,
            'type' => $this->type,
            'user_id' => UserResource::collection($this->whenLoaded('author')),
            
        ];
    }
}
