<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $fillable = [
        'post_id',
        'views',
        'likes',
        'comments',
        'saves'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
