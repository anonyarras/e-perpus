<?php

namespace App\Exports;

use App\Models\buku;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class BukuExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {

        return view('livewire.admin.buku-pdf', [
            'buku' => buku::all()
        ]);
    }
}
