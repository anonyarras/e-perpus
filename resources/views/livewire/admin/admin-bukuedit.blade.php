<div class="container-fluid py-4">
    <div class="panel-heading">
        <div class="col-md-6">Ubah Buku</div>
        <div class="col-md-6">
            <a href="{{route('buku')}}" class="btn btn-success pull-right">Kembali</a>
        </div>
                    @if(Session::has('message'))
                        <div class = "alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
    <form wire:submit.prevent='updateBuku'>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Judul Buku</label>
            <input class="form-control" wire:model='judul' wire:keyup='generateslug' type="text" placeholder="Example...Agif" id="example-text-input">
            @error('judul')
                <p class='text-danger'>{{$message}}</p>
            @enderror
        </div>
        <div class="form-group" hidden>
            <label for="example-text-input" class="form-control-label">Slug Buku</label>
            <input class="form-control" type="text" wire:model='slug' disabled id="example-text-input">
            @error('slug')
            <p class="text-danger">{{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Kategori</label>
            <select name="" class="form-control" id="" wire:model='id_kategori'>
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $k )
                <option value="{{$k->id}}">{{$k->nama_kategori}}</option>

                @endforeach
            </select>
            @error('id_kategori')
            <p class="text-danger">{{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Pengarang</label>
            <input class="form-control" type="text" wire:model='pengarang' id="example-text-input">
            @error('pengarang')
            <p class="text-danger">{{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Penerbit</label>
            <input class="form-control" type="text" wire:model='penerbit' id="example-text-input">
            @error('penerbit')
            <p class="text-danger">{{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Stok</label>
            <input class="form-control" type="number" wire:model='stok' id="example-text-input">
            @error('stok')
            <p class="text-danger">{{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Tahun Terbit</label>
            <input class="form-control" type="number" wire:model='tahun_terbit' id="example-text-input">
            @error('tahun_terbit')
            <p class="text-danger">{{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Semester</label>
            <input class="form-control" type="number" wire:model='semester' id="example-text-input">
            @error('semester')
            <p class="text-danger">{{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Dipinjam</label>
            <input class="form-control" type="number" wire:model='dipinjam'  id="example-text-input">
            @error('dipinjam')
            <p class="text-danger">{{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Cover Buku</label>
            <input class="form-control" type="file" wire:model='newImage' id="example-text-input">
            @if ($newImage)
                <img src="{{$newImage->temporaryUrl()}}" width=120 alt="" class="">
                @else
                <img src="{{asset('storage/buku')}}/{{$image}}" width=120 alt="" class="">
            @endif
            @error('image')
            <p class="text-danger">{{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="" class="col-md-4 control-label"></label>
            <div class="col-md-6">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
    </form>
    </div>

</div>
