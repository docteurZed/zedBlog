<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'type',
        'title',
        'slug',
        'resume',
        'content',
        'image',
        'status',
        'media_url',
        'published_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function isLikedBy(User $user)
    {
        return $this->likes()->where('user_id', $user->id)->exists();
    }

    public function addLikeBy(User $user)
    {
        $this->likes()->syncWithoutDetaching($user->id);
    }

    public function removeLikeBy(User $user)
    {
        $this->likes()->detach($user->id);
    }

    public function saves()
    {
        return $this->belongsToMany(User::class, 'saves');
    }

    public function isSavedBy(User $user)
    {
        return $this->saves()->where('user_id', $user->id)->exists();
    }

    public function addSaveBy(User $user)
    {
        $this->saves()->syncWithoutDetaching($user->id);
    }

    public function removeSaveBy(User $user)
    {
        $this->saves()->detach($user->id);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function stat()
    {
        return $this->hasOne(Stat::class);
    }
}
