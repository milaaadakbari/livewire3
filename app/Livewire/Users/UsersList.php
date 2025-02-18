<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class UsersList extends Component
{
//    #[On('user-created')]
//    public function userCreated()
//    {
//
//    }

#[Layout('admin.master'),Title('panel page')]
    public function render()
    {
        $users= User::query()->get();
        return view('livewire.users.users-list',compact('users'));
    }
}
