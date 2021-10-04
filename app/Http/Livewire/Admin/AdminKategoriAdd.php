<?php

namespace App\Http\Livewire\Admin;

use App\Models\kategori;
use Livewire\Component;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
class AdminKategoriAdd extends Component
{
    public $nama_kategori;
    public $slug;
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
    public function storeKategori()
    {
        $this->validate([
            'nama_kategori'=>'required',
            'slug'=>'required|unique:table_kategori'
        ]);
        $kategori = new kategori();
        $kategori->nama_kategori = $this->nama_kategori;
        $kategori->slug = $this->slug;
        $kategori->save();
        Alert::success('Sukses','Data Kategori Berhasil Disimpan');
       redirect('/kategori');
    }
    public function render()
    {
        return view('livewire.admin.admin-kategori-add')->layout('layouts.base');
    }
}
