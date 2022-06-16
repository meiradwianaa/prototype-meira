@extends('layouts.profil')

@section('container')
    <div class="col-sm-9">
            <div class="py-5 px-4">
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="bg-white p-5 rounded shadow">
                            <div class="d-flex">
                                <div class="p-2"><h4 class="mt-3 d-inline">Alamat Saya</h4></div>
                                <div class="ml-auto p-2"><a class="btn btn-primary d-inline-end" href="/tambahalamat" role="button">Tambah Alamat&emsp;+</a></div>
                            </div>
                            <hr>
                            <form class="mt-5">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="nama" value=": User">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                                        <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="telepon" value=": 087700322561">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="telepon" value=": Jln Lapang Tembak Selatan Mekarsari no 34 RT08 RW07 Padasuka Cimahi Tengah Kota Cimahi">
                                    </div>
                                    <a class="btn btn-secondary mt-5" href="/tambahalamat" role="button">Edit</a>
                                </form>          
                                <hr class="mt-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>



@endsection