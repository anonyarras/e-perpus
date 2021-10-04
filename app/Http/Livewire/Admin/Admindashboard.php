<?php

namespace App\Http\Livewire\Admin;

use App\Models\anggota;
use App\Models\buku;
use App\Models\pasok;
use App\Models\pinjam;
use Livewire\Component;

class Admindashboard extends Component
{
    public function render()
    {
        $anggota = anggota::all()->count();
        $buku = buku::all()->count();
        $pasok = pasok::all()->count();
        $pinjam = pinjam::all()->count();
        $anggota1 = anggota::simplepaginate(5);
        $buku1 = buku::simplepaginate(1);
        $pasok1 = pasok::simplepaginate(5);
        $pinjam1 = pinjam::simplepaginate(5);
        return view('livewire.admin.admindashboard',['anggota'=>$anggota,'buku'=>$buku,'pasok'=>$pasok,'pinjam'=>$pinjam,'anggota1'=>$anggota1,'buku1'=>$buku1,'pasok1'=>$pasok1,'pinjam1'=>$pinjam1])->layout('layouts.base');
    }
}
