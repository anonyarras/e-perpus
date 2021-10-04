<div class="container-fluid py-4">
    <div class="panel-heading">
        <div class="col-md-6">Ubah Pasok</div>
        <div class="col-md-6">
            <a href="{{route('pasok')}}" class="btn btn-success pull-right">Kembali</a>
        </div>
                    @if(Session::has('message'))
                        <div class = "alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
    <form wire:submit.prevent='updatePasok'>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Judul Buku</label>
            <select name="" class="form-control" wire:model='id_buku' id="" disabled>
                <option value="">Pilih Buku</option>
                @foreach ($buku as $b )
                <option value="{{$b->id}}">{{$b->judul}} </option>
                @endforeach
            </select>
            @error('id_buku')
                <p class='text-danger'>{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Jumlah</label>
            <input class="form-control" type="text" wire:model='jumlah'  id="example-text-input">
            @error('jumlah')
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
