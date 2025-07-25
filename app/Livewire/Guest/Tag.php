<?php

namespace App\Livewire\Guest;

use App\Models\Tag as ModelsTag;
use Livewire\Component;

class Tag extends Component
{
    public function render()
    {
        $tags = ModelsTag::with(['posts'])
            ->get();

        return view('livewire.guest.tag', compact('tags'));
    }
}
