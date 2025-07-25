<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'description',
        'image',
        'is_visible'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function subscribers()
    {
        return $this->belongsToMany(
            User::class,
            'category_user',
            'category_id',
            'user_id'
        );
    }
}
