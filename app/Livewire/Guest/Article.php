<?php

namespace App\Livewire\Guest;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Article extends Component
{
    use WithPagination;

    public $filter = 'all';     // 'all', 'article', 'video', 'audio'
    public $sort = 'latest';    // 'latest', 'most_liked', etc.
    public $perPage = 8;

    protected $queryString = ['filter', 'sort', 'page'];

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

    /**
     * Rendu du composant avec la pagination.
     */
    public function render()
    {
        $query = Post::query()
            ->with(['user', 'category', 'likes', 'stat'])
            ->where('status', 'published');

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

        return view('livewire.guest.article', compact('posts'));
    }
}
