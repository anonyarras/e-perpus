<div class="container-fluid py-4">
    <div class="panel-heading">
        <div class="col-md-6">Data Kategori</div>
        <div class="col-md-6">
            <a href="{{route('kategoriadd')}}" class="btn btn-success pull-right"><i class="fas fa-plus "> Tambah</i></a>
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
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Nama Kategori</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Di Buat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $no=>$k )


              <tr>
                <td>

                    <p class="text-xs font-weight-bold mb-0 text-center">{{$no+1}}</p>


                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0 text-center">{{$k->nama_kategori}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$k->created_at->isoFormat('D MMMM Y')}}</p>
                </td>

                <td class="align-middle text-center">
                  <a href="{{route('kategoriedit',['kategori_slug'=>$k->slug])}}" class="far fa-edit text-info font-weight-bold" data-toggle="tooltip" data-original-title="Edit user">

                  </a>
                  <a href="#" wire:click.prevent='confirmdeleteKategori({{$k->id}})' class="far fa-trash-alt text-danger font-weight-bold" data-toggle="tooltip" data-original-title="Edit user">

                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

      </div>
</div>

