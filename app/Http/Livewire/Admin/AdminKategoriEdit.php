<?php

namespace App\Http\Livewire\Admin;

use App\Models\kategori;
use Livewire\Component;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AdminKategoriEdit extends Component
{
    public $kategori_slug;
    public $kategori_id;
    public $nama_kategori;
    public $slug;
    public function mount($kategori_slug){
        $this->kategori_slug = $kategori_slug;
        $kategori = kategori::where('slug',$kategori_slug)->first();
        $this->kategori_id = $kategori->id;
        $this->slug = $kategori->slug;
    }
    public function generateslug()
    {
        $this->slug = Str::slug($this->nama_kategori);

    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'nama_kategori'=>'required',
            'slug'=>'required|unique:table_kategori'
        ]);
    }
    public function updateKategori()
    {
        $this->validate([
            'nama_kategori'=>'required',
            'slug'=>'required|unique:table_kategori'
        ]);
        $kategori = kategori::find($this->kategori_id);
        $kategori->nama_kategori = $this->nama_kategori;
        $kategori->slug = $this->slug;
        $kategori->save();
        Alert::success('Sukses','Data Kategori Berhasil Diupdate');
       redirect('/kategori');
    }
    public function render()
    {
        return view('livewire.admin.admin-kategori-edit')->layout('layouts.base');
    }
}
