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
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'author' => [
                'id' => $this->user->id,
                'name' => $this->user->name,
                'username' => $this->user->username,
                'email' => $this->user->email,
                'role' => $this->user->role,
            ],
            'title' => $this->title,
            'meta_desc' => $this->meta_desc,
            'slug' => $this->slug,
            'tag' => $this->tag,
            'playlist' => new PlaylistResource($this->playlist),
            'category' => $this->category,
            'image_cover' => $this->image_cover,
            'body' => $this->body,
            'views' => $this->views,
        ];
    }
    public function boot()
    {
        JsonResource::withoutWrapping();
    }
}
