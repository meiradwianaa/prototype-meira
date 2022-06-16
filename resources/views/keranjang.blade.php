@extends('layouts.main')
@section('container')
<div class="container">
    <h2 class="text-center mt-5">Keranjang Belanja</h2>
        <div class="bg-white p-5 rounded shadow">
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-check">
                        <input class="form-check-input mt-5" type="checkbox" value="" id="flexCheckDefault" checked>
                    </div>
                </div>
                <div class="col-sm-3">
                    <img  src={{ asset("./img/selang.png") }}>
                </div>
                <div class="col-sm-4">
                    <h3>Nebulizer Mask</h3>
                    <h5>Rp 26.000</h5>
                    <div class="form-floating">
                        <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="jumlah pesan" required>
                        <label for="jumlah">Jumlah Pesanan</label>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2 mt-5">
                    <h5>Rp 52.000</h5>
                </div>
                <div class="col-sm-1">
                    <a type="button" class="btn btn-danger" href="/keranjang2"><i class="bi bi-trash"></i></a>
                </div>
            </div>
        </div>

        <div class="bg-white p-5 rounded shadow mt-5">
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                </div>
                <div class="col-sm-3">
                    <h5>Pilih Semua</h5>
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-3">
                    <h5>Total Pesanan</h5>
                </div>
                <div class="col-sm-2 ">
                    <h5>Rp 52.000</h5>
                </div>
                <div class="col-sm-1">
                    
                </div>
            </div>
        </div>
        <div class="d-flex mt-5 mb-5">
            <div class="p-2 mt-3 d-inline"></div>
            <div class="ml-auto p-2"><a class="btn btn-secondary d-inline-end" href="/detailpembelian" role="button">Check Out</a></div>
        </div>
</div>
@endsection