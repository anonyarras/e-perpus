<?php

namespace App\Exports;

use App\Models\pinjam;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class PinjamExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {

        return view('livewire.admin.pinjam-pdf', [
            'pinjam' => pinjam::all()
        ]);
    }
}
