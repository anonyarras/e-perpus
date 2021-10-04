<?php

namespace App\Http\Livewire\Admin;

use App\Exports\PinjamExport;
use App\Models\pinjam;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPinjam extends Component
{
    public $tgl_pengembalian;
    public $status;
    public $searchTerm = '';
    public $pinjam;
    use WithPagination;
    protected $listeners = ['deleteconfirmed'=> 'deletePinjam'];
    public $iddelete=null;

    public function confirmdeletePinjam($id)
    {
        $this->iddelete = $id;
        $this->dispatchBrowserEvent('show-delete');

    }
    public function deletePinjam()
    {
        $pinjam = pinjam::findOrFail($this->iddelete);
        $pinjam->delete();
        $this->dispatchBrowserEvent('successDelete',['message'=>'Data Pinjaman Berhasil Dihapus']);
    }
    public function kembali($id)
    {
        $pinjam = pinjam::find($id);
        $pinjam->tgl_pengembalian = Carbon::now();
        $pinjam->status = 'Kembali';
        $pinjam->update();
        Alert::success('Sukses','Telah Berhasil Mengembalikan Buku');
        redirect('/pinjam');
    }
    public function render()
    {
        $this->pinjam = pinjam::where('id_anggota','like','%'.$this->searchTerm.'%')->get();
        return view('livewire.admin.admin-pinjam')->layout('layouts.base');
    }
    public function export()
    {
        $now = Carbon::now();
        return Excel::download(new PinjamExport, 'Laporan-pinjam-buku-'.$now.'.xlsx');

    }
}
