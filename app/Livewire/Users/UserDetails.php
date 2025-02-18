<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class UserDetails extends Component
{
    #[Layout('admin.master'),Title('panel page')]

    public User $user;

//    public function mount (User $user)
//    {
//        $this->user=$user;
//    }
    public function render():View
    {
        return view('livewire.users.user-details');
    }
}
