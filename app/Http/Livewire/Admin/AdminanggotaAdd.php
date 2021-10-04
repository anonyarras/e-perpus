<?php

namespace App\Http\Livewire\Admin;

use App\Models\anggota;
use Livewire\Component;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AdminanggotaAdd extends Component
{
    public $nama_anggota;
    public $slug;
    public $jenis_kelamin;
    public $kelas;
    public function generateslug()
    {
        $this->slug = Str::slug($this->nama_anggota);
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'nama_anggota'=>'required',
            'slug'=>'required|unique:table_anggota',

        ]);
    }
    public function storeAnggota()
    {
        $this->validate([
            'nama_anggota'=>'required',
            'slug'=>'required|unique:table_anggota',
            'jenis_kelamin'=>'required',
            'kelas'=>'required'
        ]);
        $anggota = new anggota();
        $anggota->nama_anggota = $this->nama_anggota;
        $anggota->slug = $this->slug;
        $anggota->jenis_kelamin = $this->jenis_kelamin;
        $anggota->kelas = $this->kelas;
        $anggota->save();
       Alert::success('Sukses','Data Anggota Berhasil Disimpan');
       redirect('/anggota');
    }
    public function render()
    {
        return view('livewire.admin.adminanggota-add')->layout('layouts.base');
    }
}
