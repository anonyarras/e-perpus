<?php

namespace App\Http\Livewire\Admin;

use App\Models\buku;
use App\Models\pasok;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPasokedit extends Component
{
    public $id_pasok;
    public $id_buku;
    public $jumlah;
    public function mount($id)
    {
        $pasok = pasok::where('id',$id)->first();
        $this->id_buku = $pasok->id_buku;
        $this->jumlah = $pasok->jumlah;
        $this->id_pasok = $pasok->id;
    }
    public function updated($field)
    {
        $this->validateOnly($field,[
            'id_buku'=>'required',
            'jumlah'=>'required|numeric'
        ]);
    }
    public function updatePasok()
    {

        $pasok = pasok::find($this->id_pasok);
        $pasok->id_buku = $this->id_buku;
        $pasok->jumlah = $this->jumlah;
        $pasok->save();
        Alert::success('Sukses','Data Pasok Berhasil Diupdate');
        redirect('/pasok');
    }
    public function render()
    {
        $buku = buku::all();
        return view('livewire.admin.admin-pasokedit',['buku'=>$buku])->layout('layouts.base');
    }
}
