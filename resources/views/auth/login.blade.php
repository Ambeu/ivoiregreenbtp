@extends('admin.layouts.auth')

@section('form')
<div class="card bg-dark">
    <div class="card-body bg-dark login-card-body">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  >

                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Se Connecter</button>
                </div>

            </div>
        </form>

    </div>

</div>
@endsection
