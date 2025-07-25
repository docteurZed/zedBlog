<?php

namespace App\Livewire\Guest\Article;

use App\Models\Post;
use App\Models\Stat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Detail extends Component
{
    public Post $post;
    public bool $liked = false;
    public bool $saved = false;
    public int $totalLikes = 0;
    public int $totalComments = 0;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->updateLikeState();
        $this->updateSaveState();
    }

    public function toggleLike()
    {
        $user = Auth::user();

        if ($this->liked) {
            $this->post->removeLikeBy($user);
        } else {
            $this->post->addLikeBy($user);
        }

        Stat::updateOrCreate(
            ['post_id' => $this->post->id], // critère d'unicité
            ['likes' => $this->post->likes()->count()] // valeurs à mettre à jour
        );

        $this->updateLikeState();
    }

    public function toggleSave()
    {
        $user = Auth::user();

        if ($this->saved) {
            $this->post->removeSaveBy($user);
        } else {
            $this->post->addSaveBy($user);
        }

        $this->updateSaveState();
    }

    public function updateLikeState()
    {
        $user = Auth::user();
        $this->liked = $this->post->isLikedBy($user);
        $this->totalLikes = $this->post->likes()->count();
        $this->totalComments = $this->post->comments()->count();
    }

    public function updateSaveState()
    {
        $user = Auth::user();
        $this->saved = $this->post->isSavedBy($user);
    }

    public function render()
    {
        return view('livewire.guest.article.detail');
    }
}
