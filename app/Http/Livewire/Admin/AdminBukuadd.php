<?php

namespace App\Http\Livewire\Admin;

use App\Models\buku;
use App\Models\kategori;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBukuadd extends Component
{
    use WithFileUploads;
    public $judul;
    public $slug;
    public $id_kategori;
    public $pengarang;
    public $penerbit;
    public $stok;
    public $tahun_terbit;
    public $semester;
    public $dipinjam;
    public $image;

    public function generateslug()
    {
        $this->slug = Str::slug($this->judul,'-');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'judul'=> 'required',
            'slug'=>'required|unique:table_buku',
            'id_kategori'=>'required',
            'pengarang'=> 'required',
            'penerbit'=>'required',
            'stok'=>'required|numeric',
            'tahun_terbit'=>'required|numeric',
            'semester'=>'required',
            'dipinjam'=>'required|numeric',
            'image'=>'required|mimes:jpeg,png,jpg'
        ]);
    }
    public function addBuku()
    {
        $this->validate([
            'judul'=> 'required',
            'slug'=>'required|unique:table_buku',
            'id_kategori'=>'required',
            'pengarang'=> 'required',
            'penerbit'=>'required',
            'stok'=>'required|numeric',
            'tahun_terbit'=>'required|numeric',
            'semester'=>'required',
            'dipinjam'=>'required|numeric',
            'image'=>'required|mimes:jpeg,png,jpg'
        ]);
        $buku = new buku();
        $buku->judul = $this->judul;
        $buku->slug = $this->slug;
        $buku->id_kategori = $this->id_kategori;
        $buku->pengarang = $this->pengarang;
        $buku->penerbit = $this->penerbit;
        $buku->stok = $this->stok;
        $buku->tahun_terbit = $this->tahun_terbit;
        $buku->semester = $this->semester;
        $buku->dipinjam = $this->dipinjam;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('public/buku',$imageName);
        $buku->image = $imageName;
        $buku->save();
        Alert::success('Sukses','Data Buku Berhasil Disimpan');
       redirect('/buku');
    }
    public function render()
    {
        $kategori = kategori::all();
        return view('livewire.admin.admin-bukuadd',['kategori'=>$kategori])->layout('layouts.base');
    }
}
