<?php

namespace App\Livewire\Users;

use Livewire\Component;

class CreateUser extends Component
{
    public $title= "create user";
    public $name,$email,$password;

    public function render()
    {
        return view('livewire.users.create-user');
    }
}
