@extends('layouts.main')

@section('container')
<div class="container faq mt-5">
    <h1 class="text-center"> Notifikasi</h1> 
        <div class="alert alert-warning mt-5  " role="alert">
            <b>Paket sudah dikirim</b><br> <small>Silahkan menunggu hingga paket yang dikirim sampai di tujuan</small> 
            <a href="/notif-baca" class="float-right">
            <i class="bi bi-x-lg"></i>
            </a>
        </div>
        <div class="alert alert-warning  mb-5 " role="alert">
            <b>Paket sudah dikirim</b><br> <small>Silahkan menunggu hingga paket yang dikirim sampai di tujuan</small> 
            <a href="/notif-baca" class="float-right">
            <i class="bi bi-x-lg"></i>
            </a>
        </div>
</div>

@endsection