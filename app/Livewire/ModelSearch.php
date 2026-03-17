<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcements;

class ModelSearch extends Component
{
    public $search = '';

    public function render()
    {
        $results = [];

        if (strlen($this->search) >= 2) {
            $results = Announcements::where('title', 'like', '%' . $this->search . '%')
                ->limit(5)
                ->get();
        }

        return view('livewire.model-search', compact('results'));
    }
}