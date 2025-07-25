<?php

namespace App\Livewire\Guest;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public $categories;
    public $posts;
    public $authors;

    public function mount()
    {
        $this->categories = Category::latest()->take(4)->get();
        $this->posts = Post::latest()->take(4)->get();
        $this->authors = User::where('role', '!=', 'reader')->latest()->take(4)->get();
    }

    public function render()
    {
        return view('livewire.guest.home');
    }
}
