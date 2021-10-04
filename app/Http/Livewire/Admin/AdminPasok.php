<?php

namespace App\Http\Livewire\Admin;

use App\Exports\PasokExport;
use App\Models\buku;
use App\Models\pasok;
use Barryvdh\DomPDF\Facade as PDF;
use Facade\FlareClient\Http\Response;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;

class AdminPasok extends Component
{
    use WithPagination;
    protected $listeners = ['deleteconfirmed'=> 'deletePasok'];
    public $iddelete=null;

    public function export($exl)
    {
        return Excel::download(new PasokExport,'laporan-pasok.xlsx');

    }

    public function confirmdeletePasok($id)
    {
        $this->iddelete = $id;
        $this->dispatchBrowserEvent('show-delete');

    }
    public function deletePasok()
    {
        $pasok = pasok::findOrFail($this->iddelete);
        $pasok->delete();
        $this->dispatchBrowserEvent('successDelete',['message'=>'Data Pemasokan Berhasil Dihapus']);
    }
    public function render()
    {
        $pasok = pasok::simplepaginate(5);
        return view('livewire.admin.admin-pasok',['pasok'=>$pasok])->layout('layouts.base');
    }

}
