<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class UserItem extends Component
{
    public $user;

    public function editUser($user)
    {
        $this->dispatch('editUser', $user);
    }


    #[On('destroy-user')]
    public function destroyUser($user_id)
    {
        User::destroy($user_id);
        $this->dispatch('user-deleted');
    }

    #[On('item-update')]
    public function itemUpdate()
    {

    }


    public function render()
    {
        return view('livewire.users.user-item');
    }
}
