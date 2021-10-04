<?php

namespace App\Http\Livewire\Admin;

use App\Models\anggota;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class AdminAnggota extends Component
{
    use WithPagination;

    protected $listeners = ['deleteconfirmed'=> 'deleteAnggota'];
    public $iddelete=null;

    public function confirmdeleteAnggota($id)
    {
        $this->iddelete = $id;
        $this->dispatchBrowserEvent('show-delete');

    }
    public function deleteAnggota()
    {
        $anggota = anggota::findOrFail($this->iddelete);
        $anggota->delete();
        $this->dispatchBrowserEvent('successDelete',['message'=>'Data Anggota Berhasil Dihapus']);
    }
    public function render()
    {
        $anggota = anggota::simplepaginate(5);
        return view('livewire.admin.admin-anggota',['anggota'=>$anggota])->layout('layouts.base');
    }
}
