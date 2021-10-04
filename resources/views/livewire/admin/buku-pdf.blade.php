<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Buku</title>
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
                <th align="center">Judul Buku</th>
                <th align="center">Kategori</th>
                <th align="center">Pengarang</th>
                <th align="center">Penerbit</th>
                <th align="center">Stok</th>
                <th align="center">Tahun Terbit</th>
                <th align="center">Semester</th>
                <th align="center">Dipinjam</th>


            </tr>
            </thead>
            <tbody>
                @foreach($buku as $e=>$dt)
                <tr>
                    <td align="center">{{ $e+1}}</td>
                    <td >{{$dt->judul}} </td>
                    <td>{{$dt->kategori->nama_kategori}} </td>
                    <td>{{$dt->pengarang}} </td>
                    <td>{{$dt->penerbit}} </td>
                    <td align="center">{{$dt->Stok}} </td>
                    <td align="center">{{$dt->tahun_terbit}} </td>
                    <td align="center">{{$dt->semester}} </td>
                    <td >{{$dt->dipinjam}} </td>

            </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>
