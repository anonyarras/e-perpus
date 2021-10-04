<?php

namespace App\Http\Livewire;

use App\Models\buku;
use Livewire\Component;
use Livewire\WithPagination;

class LandingPage extends Component
{
    use WithPagination;
    public function render()
    {
        $buku = buku::simplepaginate(4);
        return view('livewire.landing-page',['buku'=>$buku])->layout('layouts.land');
    }
}
