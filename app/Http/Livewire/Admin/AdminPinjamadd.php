<?php

namespace App\Http\Livewire\Admin;

use App\Models\anggota;
use App\Models\buku;
use App\Models\pinjam;
use Carbon\Carbon;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPinjamadd extends Component
{
    public $tgl_pinjam;
    public $id_anggota;
    public $id_buku;
    public $status;

    public function updated($fields)
    {
        $this->validateOnly($fields,[

            'id_anggota'=>'required',
            'id_buku'=>'required'
        ]);
    }
    public function addPinjam()
    {
        $this->validate([

            'id_anggota'=>'required',
            'id_buku'=>'required'
        ]);
    $pinjam = new pinjam();
    $pinjam->tgl_pinjam = Carbon::now();
    $pinjam->id_anggota = $this->id_anggota;
    $pinjam->id_buku = $this->id_buku;

    $pinjam->status = 'Pinjam';

    $pinjam->save();
    Alert::success('Sukses','Data Peminjaman Berhasil Disimpan');
    redirect('/pinjam');

    }
    public function render()
    {
        $buku = buku::all();
        $anggota = anggota::all();
        return view('livewire.admin.admin-pinjamadd',['buku'=>$buku,'anggota'=>$anggota])->layout('layouts.base');
    }
}
