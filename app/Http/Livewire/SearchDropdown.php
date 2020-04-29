<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchDropdown extends Component
{
     public $search = 'hello there';

    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
