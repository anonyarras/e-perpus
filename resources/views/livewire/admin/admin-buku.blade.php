<div class="container-fluid py-4">
    <div class="panel-heading">
        <div class="col-md-6">Data Buku</div>
        <div class="col-md-6">
            <a href="{{route('bukuadd')}}" class="btn btn-success pull-right"><i class="fas fa-plus "> Tambah</i></a>
            <a href=""  wire:click.prevent="export('xlsx')" class="btn btn-info pull-right"><i class="fa fa-file-excel-o "></i> Laporan Excel</a>
        </div>
    </div>
    @if (Session::has('Message'))
    <div class="alert alert-danger" role="alert">{{Session::get('Message')}}</div>

    @endif
    <div class="card">



          <table class="ui celled table" id="table" style="width:100%">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Judul Buku</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Nama Kategori</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Pengarang</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penerbit</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahun Terbit</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Semester</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Di Pinjam</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cover Buku</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($buku as $no=>$b )


              <tr>
                <td>

                    <p class="text-xs font-weight-bold mb-0 text-center">{{$no+1}}</p>


                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0 text-center">{{$b->judul}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$b->kategori->nama_kategori}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$b->pengarang}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$b->penerbit}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$b->stok}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$b->tahun_terbit}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$b->semester}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$b->dipinjam}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <img src="{{asset('storage/buku')}}/{{$b->image}}" class="img-thumbnail" alt="">

                </td>

                <td class="align-middle text-center">
                  <a href="{{route('bukuedit',['buku_slug'=>$b->slug])}}" class="far fa-edit text-info font-weight-bold" data-toggle="tooltip" data-original-title="Edit user">

                  </a>
                  <a href="#" wire:click.prevent='confirmdeleteBuku({{$b->id}})' class="far fa-trash-alt text-danger font-weight-bold" data-toggle="tooltip" data-original-title="Edit user">

                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>


      </div>
</div>

