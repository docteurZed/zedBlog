<?php

namespace App\Livewire\Guest;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryDetail extends Component
{
    use WithPagination;

    public $filter = 'all';     // 'all', 'article', 'video', 'audio'
    public $sort = 'latest';    // 'latest', 'most_liked', etc.
    public $perPage = 8;
    public Category $category;
    public ?bool $isSubscribed = false;

    protected $queryString = ['filter', 'sort', 'page'];

    /**
     * Initialisation avec récupération de l’auteur.
     */
    public function mount($id)
    {
        $this->category = Category::findOrFail($id);
        $this->isSubscribed = Auth::user()?->isSubscribedToCategory($this->category);
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

    public function toggleSubscription()
    {
        $user = Auth::user();

        if (!$user) return;

        if ($user->isSubscribedToCategory($this->category)) {
            $user->unsubscribeFromCategory($this->category);
            $this->isSubscribed = false;
        } else {
            $user->subscribeToCategory($this->category);
            $this->isSubscribed = true;
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
            ->where('category_id', $this->category->id);

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

        return view('livewire.guest.category-detail', compact('posts'));
    }
}
