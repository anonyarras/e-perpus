<div class="container-fluid py-4">
    <div class="panel-heading">
        <div class="col-md-6">Data Peminjaman</div>
        <div class="col-md-4">
            <a href="{{route('pinjamadd')}}" class="btn btn-success pull-right"><i class="fas fa-plus "> Tambah</i></a>
            <a href=""  wire:click="export('xlsx')" class="btn btn-info pull-right"><i class="fa fa-file-excel-o "></i> Laporan Excel</a>

        </div>
    </div>
    @if (Session::has('Message'))
    <div class="alert alert-danger" role="alert">{{Session::get('Message')}}</div>

    @endif




          <table class="ui celled table" id="table" data-toggle="table">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Nama Peminjam</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Judul Buku</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Tanggal Pinjam</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Tanggal Pengembalian</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Status</th>

                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Action</th>
              </tr>
            </thead>
            <tbody>




            @foreach ($pinjam as $no=>$b )


            <tr>
              <td>

                  <p class="text-xs font-weight-bold mb-0 text-center">{{$no+1}}</p>


              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0 text-center">{{$b->anggota->nama_anggota}}</p>
              </td>
              <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0">{{$b->buku->judul}}</p>
              </td>
              <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0">{{$b->tgl_pinjam}}</p>
              </td>
              <td class="align-middle text-center text-sm">
                  @if ($b->tgl_pengembalian == null)
                  <p class="text-xs font-weight-bold mb-0">Buku Belum Dikembalikan</p>
                  @else
                  <p class="text-xs font-weight-bold mb-0">{{$b->tgl_pengembalian}}</p>
                  @endif
              </td>
              <td class="align-middle text-center text-sm">
                  @if ($b->status == 'Pinjam')
                  <a href="#"wire:click.prevent='kembali({{$b->id}})' class="btn btn-sm btn-outline-primary" data-toggle="tooltip" data-original-title="Edit user">Mengembalikan</a>
                  @else
                  <p class="text-xs font-weight-bold mb-0">{{$b->status}}

                  @endif
                  </p>
              </td>

              <td class="align-middle text-center">

                <a href="#"wire:click.prevent='confirmdeletePinjam({{$b->id}})' class="far fa-trash-alt text-danger font-weight-bold" data-toggle="tooltip" data-original-title="Edit user">

                </a>
              </td>
            </tr>
            @endforeach

        </tbody>

          </table>


      </div>
</div>

