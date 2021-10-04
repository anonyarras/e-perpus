<?php

namespace App\Http\Livewire\Admin;

use App\Models\kategori;
use Livewire\Component;
use Livewire\WithPagination;

class AdminKategori extends Component
{
    use WithPagination;
    protected $listeners = ['deleteconfirmed'=> 'deleteKategori'];
    public $iddelete=null;

    public function confirmdeleteKategori($id)
    {
        $this->iddelete = $id;
        $this->dispatchBrowserEvent('show-delete');

    }
    public function deleteKategori()
    {
        $kategori = kategori::findOrFail($this->iddelete);
        $kategori->delete();
        $this->dispatchBrowserEvent('successDelete',['message'=>'Data Kategori Berhasil Dihapus']);
    }
    public function render()
    {
        $kategori = kategori::simplepaginate(5);
        return view('livewire.admin.admin-kategori',['kategori'=>$kategori])->layout('layouts.base');

    }
}
