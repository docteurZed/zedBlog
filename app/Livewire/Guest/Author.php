<?php

namespace App\Livewire\Guest;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Author extends Component
{
    use WithPagination;

    public $perPage = 8;

    protected $queryString = ['page'];

    public function render()
    {
        $query = User::query()
            ->with(['posts'])
            ->where('role', '!=', 'reader')
            ->where('is_active', true);

        $authors = $query->paginate($this->perPage);

        return view('livewire.guest.author', compact('authors'));
    }
}
