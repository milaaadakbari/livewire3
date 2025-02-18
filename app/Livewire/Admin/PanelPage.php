<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class PanelPage extends Component
{
    #[Layout('front.master'),Title('panel page')]
    public function render()
    {
        return view('livewire.admin.panel-page');
    }
}
