<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Login extends Component
{
    use WithPagination;
    public function render()
    {
        $user = User::simplepaginate(5);
        return view('livewire.login',['user'=>$user])->layout('layouts.base');
    }
}
