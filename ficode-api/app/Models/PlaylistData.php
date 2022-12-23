<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistData extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function playlist()
    {
        return $this->belongsTo(Playlist::class, 'id_playlist');
    }
    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }
}
