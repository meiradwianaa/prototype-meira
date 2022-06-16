@extends('layouts.main')

@section('container')

<div class="container">
			<div class="container-fliud mt-5">
                <div class="row">
                    <div class="col-md-1"></div>
					<div class="preview col-md-5">
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src={{ asset("./img/selang2.png") }} /></div>
						  <div class="tab-pane" id="pic-2"><img src={{ asset("./img/selang2.png") }} /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src={{ asset("./img/selang.png") }} /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src={{ asset("./img/selang.png") }} /></a></li>

						</ul>
					</div>
					<div class="details col-md-6 mt-5">
                        <h1 class="mt-3">Nebulizer Mask</h1>
                        <h4 class="text-muted">R̶p̶.̶ ̶4̶0̶.̶0̶0̶0̶</h4>
                        <h2>Rp 26.000;</h2>
                        <h5 class="mt-5">Masker Nebulizer Adult, dapat digunakan untuk hampir semua alat nebulizer kompressor yang dipasarkan di Indonesia.
                            Dapat digunakan untuk terapi, sesak nafas, asma, bronkhitis paru, flu, pilek, batuk dahak, dll</h5>
                        <div class="bg-white rounded shadow mt-5">
                            <div class="btn-group-lg group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-light">Beli Sekarang</button>
                                <button type="button" class="btn btn-danger"><i class="bi bi-cart4"></i></button>
                                <button type="button" class="btn btn-light"><i class="bi bi-heart"></i></button>
                            </div>
                        </div>
                    </div>
				</div>

                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-11">
                            <div class="card mt-5">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" href="#">Penjelasan</a>
                                </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Selang Masker Nebulizer Ukuran Dewasa</h5>
                                <p class="card-text">Kondisi: Baru</p>
                                <p class="card-text">Berat: 100 Gram</p>
                                <p class="card-text">Kategori: Alat Bantu Pernafasan</p>
                                <p class="card-text">Etalase: Alat Bantu Pernafasan</p>
                                <p class="card-text">Masker Nebulizer Adult, dapat digunakan untuk hampir semua alat nebulizer kompressor yang dipasarkan di Indonesia. Dapat digunakan untuk terapi, sesak nafas, asma, bronkhitis paru, flu, pilek, batuk dahak, dll</p>
                                <p class="card-text">1 set terdiri dari:</p>
                                <p class="card-text">- Selang</p>
                                <p class="card-text">- Wadah obat dan,</p>
                                <p class="card-text">- Masker</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-5">Rekomendasi</h3>
        <div class="container py-4">
        <div class="card-deck-wrapper">
            <div class="card-deck">
                <div class="card p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href>
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text">Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href>
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text">Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href>
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text">Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href>
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text">Stok   : 100</small></p>
                    </a>
                </div>
                <div class="card p-2">
                    <img class="card-img-top" src={{ asset("./img/selang.png") }} alt="Card image cap">
                    <a class="card-block  text-decoration-none" href>
                        <h5 class="card-title mt-3">Nebulizer Mask</h5>
                        <p class="card-text">Rp. 26.000</p>
                        <p class="card-text">Stok   : 100</small></p>
                    </a>
                </div>
            </div>
        </div>
        
        </div>
            </div>
	</div>
@endsection