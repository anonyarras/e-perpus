<div class="container-fluid py-4">
    <div class="panel-heading">
        <div class="col-md-6">Tambah User</div>
        <div class="col-md-6">
            <a href="{{route('createuser')}}" class="btn btn-success pull-right">Kembali</a>
        </div>
                    @if(Session::has('message'))
                        <div class = "alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
    <form wire:submit.prevent='addAccount'>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama User</label>
            <input name="" class="form-control" wire:model='name' id="">

            @error('name')
                <p class='text-danger'>{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Email</label>
            <input class="form-control" type="email" wire:model='email'  id="example-text-input">
            @error('email')
            <p class="text-danger">{{$message}} </p>

            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Password</label>
            <input class="form-control" type="password" wire:model='password'  id="example-text-input">
            @error('password')
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
