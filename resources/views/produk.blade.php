@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="form-check mt-5">
                <h4><i class="bi bi-funnel-fill"></i>Filter</h4>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Produk Terbaru
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Harga Tertinggi
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Harga Terendah
                </label>
            </div>
        </div>
        <div class="col-sm-9">
        <div class="card-deck mt-5 mb-5">
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href="/detail-produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text"><small class="text-muted"> ̶R̶p̶.̶ ̶4̶0̶.̶0̶0̶0̶</small></p>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"><small>Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href="/detail-produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text"><small class="text-muted"> ̶R̶p̶.̶ ̶4̶0̶.̶0̶0̶0̶</small></p>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"><small>Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href="/detail-produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text"><small class="text-muted"> ̶R̶p̶.̶ ̶4̶0̶.̶0̶0̶0̶</small></p>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"><small>Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" >
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text"><small class="text-muted"> ̶R̶p̶.̶ ̶4̶0̶.̶0̶0̶0̶</small></p>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"><small>Stok   : 100</small></p>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection