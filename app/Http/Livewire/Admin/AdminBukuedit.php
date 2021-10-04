<?php

namespace App\Http\Livewire\Admin;

use App\Models\buku;
use App\Models\kategori;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBukuedit extends Component
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
    public $id_buku;
    public $newImage;

    public function mount($buku_slug)
    {
        $buku = buku::where('slug',$buku_slug)->first();
        $this->judul = $buku->judul;
        $this->slug = $buku->slug;
        $this->id_kategori = $buku->id_kategori;
        $this->pengarang = $buku->pengarang;
        $this->penerbit = $buku->penerbit;
        $this->stok = $buku->stok;
        $this->tahun_terbit = $buku->tahun_terbit;
        $this->semester = $buku->semester;
        $this->dipinjam = $buku->dipinjam;
        $this->id_buku = $buku->id;
        $this->image = $buku->image;
    }
    public function generateslug()
    {
        $this->slug = Str::slug($this->judul,'-');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'judul'=>'required',
            'slug'=>'required|unique:table_buku',
            'id_kategori'=>'required',
            'pengarang'=>'required',
            'penerbit'=>'required',
            'stok'=>'required|numeric',
            'tahun_terbit'=>'required',
            'semester'=>'required',
            'newImage'=>'required'
        ]);
    }
    public function updateBuku()
    {

       $buku = buku::find($this->id_buku);
       $buku->judul = $this->judul;
       $buku->slug = $this->slug;
       $buku->id_kategori = $this->id_kategori;
       $buku->pengarang = $this->pengarang;
       $buku->penerbit = $this->penerbit;
       $buku->stok = $this->stok;
       $buku->tahun_terbit = $this->tahun_terbit;
       $buku->semester = $this->semester;
       if($this->newImage)
       {
           $imagename = Carbon::now()->timestamp.'.'.$this->newImage->extension();
           $this->newImage->storeAs('public/buku',$imagename);
           $buku->image = $imagename;
       }
       $buku->save();
       Alert::success('Sukses','Data Buku Berhasil Diupdate');
       redirect('/buku');
    }
    public function render()
    {
        $kategori = kategori::all();
        return view('livewire.admin.admin-bukuedit',['kategori'=>$kategori])->layout('layouts.base');
    }
}
