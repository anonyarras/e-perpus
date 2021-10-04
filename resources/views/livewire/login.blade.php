<div class="container-fluid py-4">
    <div class="panel-heading">
        <div class="col-md-6">Data User</div>
        <div class="col-md-6">
            <a href="{{route('accountadd')}}" class="btn btn-success pull-right"><i class="fas fa-plus "> Tambah</i></a>
        </div>
    </div>
    @if (Session::has('Message'))
    <div class="alert alert-danger" role="alert">{{Session::get('Message')}}</div>

    @endif
    <div class="card">

        <div class="table-responsive">

          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Nama User</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Email</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Tanggal Dibuat</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($user as $no=>$b )


              <tr>
                <td>

                    <p class="text-xs font-weight-bold mb-0 text-center">{{$no+1}}</p>


                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0 text-center">{{$b->name}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$b->email}}</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$b->created_at}}</p>
                </td>


              </tr>
              @endforeach
            </tbody>
          </table>
          {{$user->links()}}
        </div>
      </div>
</div>

