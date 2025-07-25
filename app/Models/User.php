<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'role',
        'profile_photo',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->take(2)
            ->map(fn ($word) => Str::substr($word, 0, 1))
            ->implode('');
    }

    /**
     * Retourne les initiales sous formes d'attribut
     * @return string
     */
    public function getInitialsAttribute(): string
    {
        return $this->initials();
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function likedPosts()
    {
        return $this->belongsToMany(Post::class, 'likes');
    }

    public function savedPosts()
    {
        return $this->belongsToMany(Post::class, 'saves');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function followedAuthors()
    {
        return $this->belongsToMany(
            User::class,
            'author_subscriptions',     // nom de la table pivot
            'user_id',         // clé locale : l'utilisateur actuel est le lecteur
            'author_id'        // clé associée : il suit un auteur
        );
    }

    // Les lecteurs qui suivent cet auteur
    public function authorFollowers()
    {
        return $this->belongsToMany(
            User::class,
            'author_subscriptions',     // table pivot
            'author_id',       // clé locale : l'utilisateur actuel est l'auteur
            'user_id'          // clé associée : il est suivi par un lecteur
        );
    }

    public function isFollowingAuthor(User $author)
    {
        return $this->followedAuthors->contains($author->id);
    }

    public function isAuthorFollowedBy(User $user)
    {
        return $this->authorFollowers->contains($user->id);
    }

    public function followAuthor(User $author)
    {
        $this->followedAuthors()->syncWithoutDetaching($author->id);
    }

    public function unfollowAuthor(User $author)
    {
        $this->followedAuthors()->detach($author->id);
    }

    public function subscribedCategories()
    {
        return $this->belongsToMany(
            Category::class,
            'category_subscriptions',
            'user_id',
            'category_id'
        );
    }

    public function isSubscribedToCategory(Category $category): bool
    {
        return $this->subscribedCategories->contains($category->id);
    }

    public function subscribeToCategory(Category $category): void
    {
        $this->subscribedCategories()->syncWithoutDetaching($category->id);
    }

    public function unsubscribeFromCategory(Category $category): void
    {
        $this->subscribedCategories()->detach($category->id);
    }

    public function media()
    {
        return $this->hasOne(Media::class);
    }
}
