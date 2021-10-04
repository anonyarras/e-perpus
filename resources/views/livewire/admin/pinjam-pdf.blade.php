<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Peminjaman</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <!--     Fonts and icons     -->
   {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> --}}
   {{-- <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> --}}
   <!-- Nucleo Icons -->
   {{-- <link href="{{ asset('template/assets/css/nucleo-icons.css')}}" rel="stylesheet" /> --}}
   {{-- <link href="{{ asset('template/assets/css/nucleo-svg.css')}}" rel="stylesheet" /> --}}
   <!-- Font Awesome Icons -->
   {{-- <link href="{{ asset('template/assets/css/font-awesome.css')}}" rel="stylesheet" /> --}}
   {{-- <link href="{{ asset('template/assets/css/nucleo-svg.css')}}" rel="stylesheet" /> --}}
   <!-- CSS Files -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <style type="text/css">
    .table-data{
    width: 100%;
    border-collapse: collapse;
    }
    .table-data tr th,
    .table-data tr td{
    border:1px solid black;
    font-size: 11pt;
    font-family:Verdana;
    padding: 10px 10px 10px 10px;
    }
    h3{
    font-family:Verdana;
    }
    </style>
</head>
<body>

    <div class="table-responsive">
        <table class="table-data">
            <thead>
            <tr>
                <th align="center">No</th>
                <th align="center">Nama Peminjam</th>
                <th align="center">Judul Buku</th>
                <th align="center">Tanggal Pinjam</th>
                <th align="center">Tanggal Pengembalian</th>
                <th align="center">Status</th>

            </tr>
            </thead>
            <tbody>
                @foreach($pinjam as $e=>$dt)
                <tr>
                    <td align="center">{{ $e+1}}</td>
                    <td align="center">{{$dt->anggota->nama_anggota}} </td>
                    <td align="center">{{$dt->buku->judul}} </td>
                    <td align="center">{{$dt->tgl_pinjam}} </td>
                    <td align="center">{{$dt->tgl_pengembalian}} </td>
                    <td align="center">{{$dt->status}} </td>

            </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>
