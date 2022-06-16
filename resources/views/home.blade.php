@extends('layouts.main')
@section('container')
<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src={{ asset("./img/jamop.png") }} alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src={{ asset("./img/2.png") }} alt="Second slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <div class="promo mt-5">
        <div class="row">
            <div class="col-md-6"><h3 >Promo Menarik Minggu Ini!</h3></div>
            <div class="col-md-2 offset-md-4"><a  class="lainnya" style="text-decoration:none" href="/produk"><i class="bi bi-chevron-right"></i>Lihat Semua</a> </div>
        </div>

        <div class="container py-4">
        <div class="card-deck-wrapper">
            <div class="card-deck">
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
            </div>
        </div>
</div>
    </div>
    <div class="artikel mt-2">
    <div class="row">
            <div class="col-md-6"><h3 >Artikel Pilihan</h3></div>
            <div class="col-md-2 offset-md-4"><a  class="lainnya" style="text-decoration:none" href="/artikel"><i class="bi bi-chevron-right"></i>Lihat Semua</a> </div>
        </div>
        <div class="card rounded shadow mt-3" style="width: 20rem;">
            <img class="card-img-top" src={{ asset("./img/artikel.png") }} alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Cara Menggunakan Masker</h5>
                <p class="card-text">Cuplikan Artikel</p>
                <a href="/detailartikel" class="btn btn-primary">Detail</a>
        </div>
</div>
    </div>
    <div class="rekomendasi mt-5">
        <h3>Rekomendasi</h3>
        <div class="container py-4">
        <div class="card-deck-wrapper">
            <div class="card-deck">
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href="/detail-produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"> <small>Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href="/detail-produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"> <small>Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href=href="/detail-produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"> <small>Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href=href="/detail-produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"> <small>Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href=href="/detail-produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"> <small>Stok   : 100</small></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-deck-wrapper mt-4">
            <div class="card-deck">
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href="/produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"> <small>Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href="/produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"> <small>Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href="/produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"> <small>Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href="/produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"> <small>Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card rounded shadow p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href="/produk">
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text"> <small>Stok   : 100</small></p>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
    <a href="https://api.whatsapp.com/send?phone=+6287700322561&text=Halo" class="float"><img class="whatsapp mt-2" src={{ asset("./img/wa.png") }}> </i></a>
</div>
@endsection

