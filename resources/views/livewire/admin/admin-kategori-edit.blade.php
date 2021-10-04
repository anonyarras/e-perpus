<div class="container-fluid py-4">
    <div class="panel-heading">
        <div class="col-md-6">Ubah Kategori</div>
        <div class="col-md-6">
            <a href="{{route('kategori')}}" class="btn btn-success pull-right">Kembali</a>
        </div>
                    @if(Session::has('message'))
                        <div class = "alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
    <form wire:submit.prevent='updateKategori'>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Kategori</label>
            <input class="form-control" wire:model='nama_kategori' wire:keyup='generateslug' type="text" placeholder="Example...IPA" id="example-text-input">
            @error('nama_kategori')
                <p class='text-danger'>{{$message}}</p>
            @enderror
        </div>
        <div class="form-group" hidden>
            <label for="example-text-input" class="form-control-label">Slug Kategori</label>
            <input class="form-control" type="text" wire:model='slug' disabled id="example-text-input">
            @error('slug')
            <p class="text-danger">{{$message}} </p>

            @enderror
        </div>
        <div class="form-group">
            <label for="" class="col-md-4 control-label"></label>
            <div class="col-md-6">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
    </form>
    </div>
</div>
