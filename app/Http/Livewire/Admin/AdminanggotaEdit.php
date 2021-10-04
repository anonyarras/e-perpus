<?php

namespace App\Http\Livewire\Admin;

use App\Models\anggota;
use Livewire\Component;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AdminanggotaEdit extends Component
{
    public $anggota_slug;
    public $anggota_id;
    public $nama_anggota;
    public $slug;
    public $jenis_kelamin;
    public $kelas;

    public function mount($anggota_slug){
        $this->anggota_slug = $anggota_slug;
        $anggota = anggota::where('slug',$anggota_slug)->first();
        $this->anggota_id = $anggota->id;
        $this->slug = $anggota->slug;
        $this->nama_anggota = $anggota->nama_anggota;
        $this->jenis_kelamin = $anggota->jenis_kelamin;
        $this->kelas = $anggota->kelas;
    }
    public function generateslug()
    {
        $this->slug = Str::slug($this->nama_anggota);

    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'nama_anggota'=>'required',
            'slug'=>'required|unique:table_anggota'
        ]);
    }
    public function updateAnggota()
    {
        $this->validate([
            'nama_anggota'=>'required',
            'slug'=>'required|unique:table_anggota',
            'jenis_kelamin'=>'required',
            'kelas'=>'required',
        ]);
        $anggota = anggota::find($this->anggota_id);
        $anggota->nama_anggota = $this->nama_anggota;
        $anggota->slug = $this->slug;
        $anggota->jenis_kelamin = $this->jenis_kelamin;
        $anggota->kelas = $this->kelas;
        $anggota->save();
        Alert::success('Sukses','Data Anggota Berhasil Diupdate');
       redirect('/anggota');
    }
    public function render()
    {
        return view('livewire.admin.adminanggota-edit')->layout('layouts.base');
    }
}
