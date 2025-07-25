<?php

namespace App\Livewire\Guest;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AuthorDetail extends Component
{
    use WithPagination;

    public $filter = 'all';     // 'all', 'article', 'video', 'audio'
    public $sort = 'latest';    // 'latest', 'most_liked', etc.
    public $perPage = 8;
    public User $author;
    public ?bool $isFollowing = false;

    protected $queryString = ['filter', 'sort', 'page'];

    /**
     * Initialisation avec récupération de l’auteur.
     */
    public function mount($id)
    {
        $this->author = User::findOrFail($id);
        $this->isFollowing = Auth::user()?->isFollowingAuthor($this->author);
    }

    /**
     * Met à jour le filtre de type de publication.
     */
    public function setFilter($type)
    {
        $this->filter = $type;
        $this->resetPage();
    }

    /**
     * Met à jour le critère de tri.
     */
    public function setSort($type)
    {
        $this->sort = $type;
        $this->resetPage();
    }

    public function toggleFollow()
    {
        $user = Auth::user();

        if (!$user) return;

        if ($user->isFollowingAuthor($this->author)) {
            $user->unfollowAuthor($this->author);
            $this->isFollowing = false;
        } else {
            $user->followAuthor($this->author);
            $this->isFollowing = true;
        }
    }

    /**
     * Rendu du composant avec la pagination.
     */
    public function render()
    {
        $query = Post::query()
            ->with(['user', 'category', 'likes', 'stat'])
            ->where('status', 'published')
            ->where('user_id', $this->author->id);

        // Filtrage
        if ($this->filter !== 'all') {
            $query->where('type', $this->filter);
        }

        // Tri
        match ($this->sort) {
            'latest' => $query->latest(),
            'most_liked' => $query->withCount('stat')->orderByDesc('likes'),
            'most_viewed' => $query->withCount('stat')->orderByDesc('views'),
            'most_commented' => $query->withCount('stat')->orderByDesc('comments'),
            default => $query->latest(),
        };

        $posts = $query->paginate($this->perPage);

        return view('livewire.guest.author-detail', compact('posts'));
    }
}
