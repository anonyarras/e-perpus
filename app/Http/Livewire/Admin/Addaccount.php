<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class Addaccount extends Component
{
    public $name;
    public $email;
    public $password;
    public function update($fields)
    {
        $this->validateOnly($fields,[
            'name'=> 'required|string',
            'email'=>'required|string|unique:users',
            'password'=>'required'
        ]);
    }
    public function addAccount()
    {
        $this->validate([
            'name'=>'required|string',
            'email'=>'required|string|unique:users',
            'password'=>'required'
        ]);
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();
        Alert::success('Sukses','Data User Berhasil Ditambahkan');
        redirect('/register');
    }
    public function render()
    {
        return view('livewire.admin.addaccount')->layout('layouts.base');
    }
}
