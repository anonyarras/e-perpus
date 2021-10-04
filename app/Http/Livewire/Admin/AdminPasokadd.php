<?php

namespace App\Http\Livewire\Admin;

use App\Models\buku;
use App\Models\pasok;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPasokadd extends Component
{
    public $id_buku;
    public $jumlah;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'id_buku'=>'required',
            'jumlah'=> 'required|numeric'

        ]);
    }
    public function addPasok()
    {
        $this->validate([
            'id_buku'=>'required',
            'jumlah'=>'required|numeric'
        ]);
        $pasok = new pasok();
        $pasok->id_buku = $this->id_buku;
        $pasok->jumlah = $this->jumlah;
        $pasok->save();
        Alert::success('Sukses','Data Pasok Berhasil Disimpan');
       redirect('/pasok');
    }
    public function render()
    {
        $buku = buku::all();
        return view('livewire.admin.admin-pasokadd',['buku'=>$buku])->layout('layouts.base');
    }
}
