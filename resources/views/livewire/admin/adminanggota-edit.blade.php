<div class="container-fluid py-4">
    <div class="panel-heading">
        <div class="col-md-6">Ubah Anggota</div>
        <div class="col-md-6">
            <a href="{{route('anggota')}}" class="btn btn-success pull-right">Kembali</a>
        </div>
                    @if(Session::has('message'))
                        <div class = "alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
    <form wire:submit.prevent='updateAnggota'>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Anggota</label>
            <input class="form-control" wire:model='nama_anggota' wire:keyup='generateslug' type="text" placeholder="Jhon Alexander" id="example-text-input">
            @error('nama_anggota')
                <p class='text-danger'>{{$message}}</p>
            @enderror
        </div>
        <div class="form-group" hidden>
            <label for="example-text-input" class="form-control-label">Slug Anggota</label>
            <input class="form-control" type="text" wire:model='slug' disabled id="example-text-input">
            @error('slug')
            <p class="text-danger">{{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
            <select name="" class="form-control" wire:model='jenis_kelamin' id="">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
            <p class="text-danger">{{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Kelas</label>
            <input class="form-control" type="text" wire:model='kelas' placeholder="9H" id="example-text-input">
            @error('kelas')
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
