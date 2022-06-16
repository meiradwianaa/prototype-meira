@extends('layouts.main')

@section('container')
@if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif
@if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif
<div class="container">
            <div class="row">
                <div class="col-md-6 mt-5 mb-5pt-lg-0 pt-sm-2">
                    <img src="img/login.png" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            @if ($message = Session::get('errormessage'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @error('nomer_induk')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @enderror
                            @error('password')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @enderror
                            @endif
                            <div class="mb-4 mt-5 pt-2 text-center-sm">
                                <h1 class=""><b>Login</b></h1>
                            </div>
                            <form action="/login" method="post">
                                @csrf
                                <div class="form-floating mb-2 ">
                                    <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                                    <label for="username">Username</label>
                                    @error('username')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-2 ">
                                    <input type="password" name="password"class="form-control" id="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                                <input type="submit" value="Log In" class="btn btn-block btn-login">
                            </form>
                            <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Register Sekarang!</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
    @endsection