<?php

namespace App\Http\Livewire\Admin;

use App\Exports\BukuExport;
use App\Models\buku;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class AdminBuku extends Component
{
    use WithPagination;
    protected $listeners = ['deleteconfirmed'=> 'deleteBuku'];
    public $iddelete=null;

    public function confirmdeleteBuku($id)
    {
        $this->iddelete = $id;
        $this->dispatchBrowserEvent('show-delete');

    }
    public function deleteBuku()
    {
        $buku = buku::findOrFail($this->iddelete);

        $buku->delete();
        $this->dispatchBrowserEvent('successDelete',['message'=>'Data Buku Berhasil Dihapus']);
    }
    public function render()
    {
        $buku = buku::simplepaginate(5);
        return view('livewire.admin.admin-buku',['buku'=>$buku])->layout('layouts.base');
    }
    public function export()
    {
        return Excel::download(new BukuExport, 'Laporan-buku.xlsx');

    }
}
