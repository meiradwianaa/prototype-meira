@extends('layouts.main')

@section('container')
<div class="container">
<h2 class="text-center mt-5 ">Cara Bayar</h2>
<hr class="mb-5">
<p>Langkah mudah berbelanja menggunakan Pembayaran Bank Transfer di IAMCARE</p>
<p>Kamu dapat melakukan pembayaran dengan tranfer pada rekening dibawah ini :</p>
<div class="row">
  <div class="col-sm-4">
    <div class="card bayar">
    <img class="card-img-top" src={{ asset("./img/bri.png") }} alt="Card image cap">
      <div class="card-body text-center">
        <h5 class="card-title">089301033394532</h5>
        <p class="card-text text-muted">Meira Dwiana Anjani</p>
        <a href="#" >Salin No. Rekening</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card bayar">
    <img class="card-img-top" src={{ asset("./img/mandiri.png") }} alt="Card image cap">
      <div class="card-body text-center">
        <h5 class="card-title">1320025583650</h5>
        <p class="card-text text-muted">Meira Dwiana Anjani</p>
        <a href="#" >Salin No. Rekening</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card bayar">
    <img class="card-img-top" src={{ asset("./img/bca.png") }} alt="Card image cap">
      <div class="card-body text-center">
        <h5 class="card-title">1393517992</h5>
        <p class="card-text text-muted">Meira Dwiana Anjani</p>
        <a href="#" >Salin No. Rekening</a>
      </div>
    </div>
  </div>
</div>
<div class="row mt-5 mb-5">
  <div class="col-sm-4">
    <div class="card bayar">
    <img class="card-img-top" src={{ asset("./img/dana.png") }} alt="Card image cap">
      <div class="card-body text-center">
        <h5 class="card-title">087700322561</h5>
        <p class="card-text text-muted">Meira Dwiana Anjani</p>
        <a href="#" >Salin No. Rekening</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card bayar">
    <img class="card-img-top" src={{ asset("./img/ovo.png") }} alt="Card image cap">
      <div class="card-body text-center">
        <h5 class="card-title">087700322561</h5>
        <p class="card-text text-muted">Meira Dwiana Anjani</p>
        <a href="#" >Salin No. Rekening</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card bayar">
    <img class="card-img-top" src={{ asset("./img/shopee.png") }} alt="Card image cap">
      <div class="card-body text-center">
        <h5 class="card-title">087700322561</h5>
        <p class="card-text text-muted">Meira Dwiana Anjani</p>
        <a href="#" >Salin No. Rekening</a>
      </div>
    </div>
  </div>
</div>
<p>Setelah melakukan pembayaran dengan Tranfer ke Bank atau E-wallet di atas dengan nominal yang sesuai degan jumlah tagihan, anda dapat melampirkan bukti pembayaran pada bagian UPLOAD BUKTI BAYAR di detail pesanan.</p>
<a href="https://api.whatsapp.com/send?phone=+6287700322561&text=Halo" class="float"><img class="whatsapp mt-2" src={{ asset("./img/wa.png") }}> </i></a>
</div>
@endsection