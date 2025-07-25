<?php

namespace App\Livewire\Guest\Article;

use App\Models\Comment as ModelsComment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comment extends Component
{
    public Post $post;
    public string $message = '';
    public bool $submitted = false;

    protected $rules = [
        'message' => 'required|string|min:3|max:1000',
    ];

    public function submit()
    {
        $this->validate();

        ModelsComment::create([
            'post_id' => $this->post->id,
            'user_id' => Auth::id(),
            'comment' => $this->message,
        ]);

        $this->reset('message');
        $this->submitted = true;

        // Recharge les commentaires
        $this->dispatch('$refresh');
    }

    public function render()
    {
        $comments = $this->post->comments()->latest()->with('user')->get();

        return view('livewire.guest.article.comment', [
            'comments' => $comments,
        ]);
    }
}
