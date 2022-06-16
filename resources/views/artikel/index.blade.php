@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5"><h1>Kumpulan Artikel Untukmu!</h1></div>
        <div class="col-md-4 offset-md-2 mt-5">
            <form class="d-flex" role="search" >
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="list-group mt-5 mb-5">
        <a href="/detailartikel" class="list-group-item list-group-item-action flex-column align-items-start ">
            <div class="d-flex w-100 justify-content-between">
                <div class="row">
                    <div class="col-md-4"><img src={{ asset("./img/artikel.png") }} alt=""></div>
                    <div class="col-md-8">
                        <h5 class="mt-3">Cara Memakai Masker</h5>
                        <p class="mb-4">Penggunaan masker yang baik akan meningkatkan efektifitas masker saat digunakan.</p>
                        <small>6 Mei 2022, Masker Medis</small>
                    </div> 
                </div>
            </div>
        </a>
        <a href="/detailartikel" class="list-group-item list-group-item-action flex-column align-items-start ">
            <div class="d-flex w-100 justify-content-between">
                <div class="row">
                    <div class="col-md-4"><img src={{ asset("./img/artikel.png") }} alt=""></div>
                    <div class="col-md-8">
                        <h5 class="mt-3">Cara Memakai Masker</h5>
                        <p class="mb-4">Penggunaan masker yang baik akan meningkatkan efektifitas masker saat digunakan.</p>
                        <small>6 Mei 2022, Masker Medis</small>
                    </div> 
                </div>
            </div>
        </a>
        <a href="/detailartikel" class="list-group-item list-group-item-action flex-column align-items-start ">
            <div class="d-flex w-100 justify-content-between">
                <div class="row">
                    <div class="col-md-4"><img src={{ asset("./img/artikel.png") }} alt=""></div>
                    <div class="col-md-8">
                        <h5 class="mt-3">Cara Memakai Masker</h5>
                        <p class="mb-4">Penggunaan masker yang baik akan meningkatkan efektifitas masker saat digunakan.</p>
                        <small>6 Mei 2022, Masker Medis</small>
                    </div> 
                </div>
            </div>
        </a>
        <a href="/detailartikel" class="list-group-item list-group-item-action flex-column align-items-start ">
            <div class="d-flex w-100 justify-content-between">
                <div class="row">
                    <div class="col-md-4"><img src={{ asset("./img/artikel.png") }} alt=""></div>
                    <div class="col-md-8">
                        <h5 class="mt-3">Cara Memakai Masker</h5>
                        <p class="mb-4">Penggunaan masker yang baik akan meningkatkan efektifitas masker saat digunakan.</p>
                        <small>6 Mei 2022, Masker Medis</small>
                    </div> 
                </div>
            </div>
        </a>
        <a href="/detailartikel" class="list-group-item list-group-item-action flex-column align-items-start ">
            <div class="d-flex w-100 justify-content-between">
                <div class="row">
                    <div class="col-md-4"><img src={{ asset("./img/artikel.png") }} alt=""></div>
                    <div class="col-md-8">
                        <h5 class="mt-3">Cara Memakai Masker</h5>
                        <p class="mb-4">Penggunaan masker yang baik akan meningkatkan efektifitas masker saat digunakan.</p>
                        <small>6 Mei 2022, Masker Medis</small>
                    </div> 
                </div>
            </div>
        </a>
    </div>
</div>
@endsection