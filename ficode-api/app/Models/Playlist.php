<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function post()
    {
        return $this->hasOne(Post::class);
    }
    public function playlistDatas()
    {
        return $this->hasMany(PlaylistData::class);
    }
}
