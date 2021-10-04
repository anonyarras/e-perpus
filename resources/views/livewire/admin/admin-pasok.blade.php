<div class="container-fluid py-4">
    <div class="panel-heading">
        <div class="col-md-6">Data Pasok</div>
        <div class="col-md-6">
            <a href="{{route('pasokadd')}}" class="btn btn-success pull-right"><i class="fas fa-plus "> Tambah</i></a>
            {{-- <a href=""  wire:click="exportPDF" class="btn btn-info pull-right"><i class="fa fa-file-pdf-o "></i> Laporan PDF</a> --}}
            <a href=""  wire:click="export('xlsx')" class="btn btn-info pull-right"><i class="fa fa-file-excel-o "></i> Laporan Excel</a>
        </div>
    </div>
    <div class="card">



            @if (Session::has('Message'))
            <div class="alert alert-danger" role="alert">{{Session::get('Message')}}</div>

            @endif
            <table class="ui celled table" id="table" style="width:100%">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Judul Buku</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Jumlah</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Tanggal Di Input</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pasok as $no=>$p )


              <tr>
                <td>

                    <p class="text-xs font-weight-bold mb-0 text-center">{{$no+1}}</p>


                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0 text-center">{{$p->buku->judul}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$p->jumlah}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$p->created_at->isoFormat('D MMMM Y')}}</p>
                </td>

                <td class="align-middle text-center">
                  <a href="{{route('pasokedit',$p->id)}} " class="far fa-edit text-info font-weight-bold" data-toggle="tooltip" data-original-title="Edit user">

                  </a>
                  <a href="#" wire:click.prevent='confirmdeletePasok({{$p->id}})' class="far fa-trash-alt text-danger font-weight-bold" data-toggle="tooltip" data-original-title="Edit user">

                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

      </div>
</div>

