<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Anggota</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{$anggota}}

                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="fas fa-user-friends text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Pasok</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{$pasok}}

                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="fas fa-archive text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Buku</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{$buku}}

                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="fas fa-book-open text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Pinjam Buku</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{$pinjam}}

                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="fas fa-credit-card text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br></br>
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-12">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">List Buku</p>
                  <div class="table-responsive">

                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Judul Buku</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cover Buku</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($buku1 as $no=>$b )


                        <tr>
                          <td>

                              <p class="text-xs font-weight-bold mb-0 text-center">{{$no+1}}</p>


                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0 text-center">{{$b->judul}}</p>
                          </td>

                          <td class="align-middle text-center text-sm">
                              <img src="{{asset('storage/buku')}}/{{$b->image}}" class="img-thumbnail" alt="">

                          </td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$buku1->links()}}
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-12">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">List Pasok</p>
                  <div class="table-responsive">

                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Judul Buku</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($pasok1 as $no=>$b )


                        <tr>
                          <td>

                              <p class="text-xs font-weight-bold mb-0 text-center">{{$no+1}}</p>


                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0 text-center">{{$b->buku->judul}}</p>
                          </td>

                          <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0 text-center">{{$b->jumlah}}</p>

                          </td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$pasok1->links()}}
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <p></p>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-12">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">List Anggota</p>
                  <div class="table-responsive">

                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Judul Buku</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($anggota1 as $no=>$b )


                        <tr>
                          <td>

                              <p class="text-xs font-weight-bold mb-0 text-center">{{$no+1}}</p>


                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0 text-center">{{$b->nama_anggota}}</p>
                          </td>

                          <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0 text-center">{{$b->jenis_kelamin}}</p>

                          </td>
                          <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0 text-center">{{$b->kelas}}</p>

                          </td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$anggota1->links()}}
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-12">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">List Peminjam Buku</p>
                  <div class="table-responsive">

                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">Nama Anggota</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul Buku</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($pinjam1 as $no=>$b )


                        <tr>
                          <td>

                              <p class="text-xs font-weight-bold mb-0 text-center">{{$no+1}}</p>


                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0 text-center">{{$b->anggota->nama_anggota}}</p>
                          </td>

                          <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0 text-center">{{$b->buku->judul}}</p>

                          </td>
                          <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0 text-center">{{$b->status}}</p>

                          </td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$anggota1->links()}}
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>
