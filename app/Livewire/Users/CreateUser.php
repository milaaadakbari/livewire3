<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateUser extends Component
{

    public $title= "create user";
    public $name,$email,$password;
    public $editMode = false;
    public $editingUserId;



    public function createUser()
    {
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
