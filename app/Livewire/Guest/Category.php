<?php

namespace App\Livewire\Guest;

use App\Models\Category as ModelsCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;

    public $perPage = 8;

    protected $queryString = ['page'];

    public function render()
    {
        $query = ModelsCategory::query()
            ->with(['posts'])
            ->where('is_visible', true);

        $categories = $query->paginate($this->perPage);

        return view('livewire.guest.category', compact('categories'));
    }
}
