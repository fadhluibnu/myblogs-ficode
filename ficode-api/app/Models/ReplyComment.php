<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyComment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function commet()
    {
        return $this->belongsTo(Comment::class, 'id_comment');
    }
}
