<div class="container-fluid py-4">
    <div class="panel-heading">
        <div class="col-md-6">Data Anggota</div>
        <div class="col-md-6">
             <a href="{{route('anggotaadd')}}" class="btn btn-success pull-right"><i class="fas fa-plus "> Tambah</i></a>
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
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Nama Anggota</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Jenis Kelamin</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Kelas</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Di Buat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $no=>$a )


              <tr>
                <td>

                    <p class="text-xs font-weight-bold mb-0 text-center">{{$no+1}}</p>


                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0 text-center">{{$a->nama_anggota}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$a->jenis_kelamin}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$a->kelas}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$a->created_at->isoFormat('D MMMM Y')}}</p>
                </td>

                <td class="align-middle text-center">
                  <a href="{{route('anggotaedit',['anggota_slug'=>$a->slug])}}" class="far fa-edit text-info font-weight-bold " data-toggle="tooltip" data-original-title="Edit user">
                  </a>
                  <a href="#" wire:click.prevent='confirmdeleteAnggota({{$a->id}})' class="far fa-trash-alt text-danger font-weight-bold " data-toggle="tooltip" data-original-title="Edit user">

                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

      </div>
</div>

