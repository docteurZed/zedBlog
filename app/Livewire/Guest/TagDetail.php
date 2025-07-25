<?php

namespace App\Livewire\Guest;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class TagDetail extends Component
{
    use WithPagination;

    public $filter = 'all';     // 'all', 'article', 'video', 'audio'
    public $sort = 'latest';    // 'latest', 'most_liked', etc.
    public $perPage = 8;
    public Tag $tag;

    protected $queryString = ['filter', 'sort', 'page'];

    /**
     * Initialisation avec récupération de l’auteur.
     */
    public function mount($id)
    {
        $this->tag = Tag::findOrFail($id);
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

    /**
     * Rendu du composant avec la pagination.
     */
    public function render()
    {
        $query = $this->tag->posts()
            ->with(['user', 'category', 'likes', 'stat'])
            ->where('status', 'published');

        // Filtrage
        if ($this->filter !== 'all') {
            $query->where('type', $this->filter);
        }

        // Jointure avec stats pour trier correctement
        $query->leftJoin('stats', 'posts.id', '=', 'stats.post_id')
            ->select('posts.*');

        // Tri
        match ($this->sort) {
            'most_liked'     => $query->orderByDesc('stats.likes'),
            'most_viewed'    => $query->orderByDesc('stats.views'),
            'most_commented' => $query->orderByDesc('stats.comments'),
            'latest'         => $query->latest(),
            default          => $query->latest(),
        };

        $posts = $query->paginate($this->perPage);

        return view('livewire.guest.tag-detail', compact('posts'));
    }
}
