<?php

namespace App\Livewire\Front;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{
    #[Layout('admin.master'),Title('home page')]
    public function render()
    {
        return view('livewire.front.home-page');
    }
}
