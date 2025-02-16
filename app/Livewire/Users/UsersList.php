<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UsersList extends Component
{
    public function render()
    {
        $users= User::query()->get();
        return view('livewire.users.users-list',compact('users'));
    }
}
