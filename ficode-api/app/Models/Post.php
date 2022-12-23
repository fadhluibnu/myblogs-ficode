<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'author');
    }
    public function playlistData()
    {
        return $this->hasOne(PlaylistData::class);
    }
    public function playlist()
    {
        return $this->belongsTo(Playlist::class, 'id_playlist');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
    public function commets()
    {
        return $this->hasMany(Comment::class);
    }
    
}
