@extends('layouts.main')

@section('container')
<div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5  rounded shadow contents card mt-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8 ">
                            <div class="mb-4 mt-5 pt-2 text-center-sm">
                                <h1 class=""><b>Registrasi</b></h1>
                            </div>
                            <form action="/register" method="post">
                                @csrf
                                <div class="form-floating mb-2">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                                    <label for="name">Nama</label>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                                    <label for="name">Username</label>
                                    @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror " id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                    <label for="email">Email</label>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror " id="password" placeholder="password" required>
                                    <label for="password">Password</label>
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <input type="submit" value="Registrasi" class="btn btn-block btn-login">
                            </form>
                            <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Login Sekarang!</a></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mb-5pt-lg-0 pt-sm-2">
                    <img src="img/regis.png" alt="Image" class="img-fluid mb-5">
                </div>
            </div>
      
  
</div>
@endsection