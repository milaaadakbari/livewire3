<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateUser extends Component
{

    public $title= "create user";

    #[Validate('required|min:4')]
    public $name;

    #[Validate('required|unique:users,email')]
    public $email;

    #[Validate('required')]
    public $password;

    public $editMode = false;
    public $editingUserId;



    public function createUser()
    {
        $this->validate();
        User::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $this->reset();
        $this->dispatch('user-created');
    }

    #[On('editUser')]
    public function editUser($user)
    {
        $this->editMode = true;
        $this->title = "Edit user";
        $this->name = $user['name'];
        $this->email = $user['email'];
        $this->editingUserId = $user['id'];
    }

    public function updateUser()
    {
        $this->validate([
            'name' => 'required|min:4',
            'email' => 'required|unique:users,email,'.$this->editingUserId,
        ]);
        $user=User::query()->find($this->editingUserId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' =>$this->password ? Hash::make($this->password) : $user->password
        ]);
        $this->dispatch('user-created');
        $this->dispatch('item-update');
    }
    public function render():View
    {
        return view('livewire.users.create-user');
    }
}
