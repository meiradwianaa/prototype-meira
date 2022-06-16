@extends('layouts.main')

@section('container')
<div class="container faq mt-5">    
<h2 class="text-center mt-5 mb-5">Frequently Asked Questions <br>(FAQ)</h2>
        <div id="accordion py-5">
            <div class="card mb-3">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                <button class="btn btn-link pertanyaan" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Apakah bisa menggunakan metode pembayaran COD?
                </button>
                </h5>
            </div>
        
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Untuk sampai saat ini toko kami belum menyediakan fitur COD. Tapi anda dapat menggunakan Tranfer bank dan E-Wallet. Untuk penjelasan lebih lengkap tentang pembayaran dapat mengakses <a href="/carabayar">Cara Bayar</a>
                </div>
            </div>
            </div>
            <div class="card mb-3">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                <button class="btn btn-link collapsed pertanyaan" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Bagaimana cara melihat apakah alat kesehatan ini asli atau abal-abal?
                </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                Setiap produk memiliki nomer izin edar, produk yang kami sediakan sudah meliki izin edar jadi aman untuk digunakan.
                </div>
            </div>
            </div>
            <div class="card mb-3">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                <button class="btn btn-link collapsed pertanyaan" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Pertanyaan
                </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    Jawaban
                 </div>
            </div>
            </div>
            <div class="card mb-3">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed pertanyaan" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Pertanyaan
                    </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        Jawaban
                     </div>
                </div>
                </div>
        </div>
        <p class="text-muted text-center mb-5"><small>Apakah pertanyaan kamu terjawab? Jika tidak silahkan hubungi kami pada kontak yang tertera</small></p>
        <a href="https://api.whatsapp.com/send?phone=+6287700322561&text=Halo" class="float"><img class="whatsapp mt-2" src={{ asset("./img/wa.png") }}> </i></a>
    </div>
@endsection