<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Posts')]
class Timeline extends Component
{
    public function render()
    {
        return view('livewire.timeline');
    }
}
