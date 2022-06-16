@extends('layouts.main')
@section('container')
<div class="container">
    <h2 class="text-center mt-5">Detail Pembelian</h2>
        <div class="d-flex mt-5">
            <div class="p-2"><h4 class="mt-3 d-inline">Alamat</h4></div>
                <div class="p-2 mt-3 d-inline-end"></div>
                    <div class="ml-auto p-2">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                            Ganti Alamat
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Ganti Alamat</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card">
                                            <a class="card-block  text-decoration-none" href="#">
                                                <p>Meira</p>
                                                <p>087700322561</p>
                                                <p>Jln Lapang Tembak Selatan Mekarsari no 34 RT08 RW07</p>
                                            </a>
                                            </div>
                                            <p class="text-center mt-2">Tidak menemukan alamat? <a href="/alamat">Tambah pada profil</a></p>
                                        </div>
                                        <div class="modal-footer">
                                            <a type="button" class="btn btn-primary"  href="/detailpembelian" >Simpan</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                   
                                </div>
                            </div>
        <form class="mt-3">
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" readonly class="form-control-plaintext" id="nama" value=": Meira Dwiana">
                </div>
                <div class="col-sm-3"></div>
            </div>
            <div class="form-group row">
            <div class="col-sm-1"></div>
                <label for="telepon" class="col-sm-3 col-form-label">Telepon</label>
                <div class="col-sm-5">
                    <input type="text" readonly class="form-control-plaintext" id="telepon" value=": 087700322561">
                </div>
                <div class="col-sm-3"></div>
            </div>
            <div class="form-group row">
            <div class="col-sm-1"></div>
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" readonly class="form-control-plaintext" id="telepon" value=": Jln Lapang Tembak Selatan Mekarsari no 34 RT08 RW07"></div>
                <div class="col-sm-2"></div>
            </div>
        </form>
        <div class="bg-white p-5 rounded shadow">
            <div class="row">
                <div class="col-sm-4">
                    <img  src={{ asset("./img/selang.png") }}>
                </div>
                <div class="col-sm-4">
                    <h3>Nebulizer Mask</h3>
                    <h5>Rp 26.000</h5>
                </div>
                <div class="col-sm-1 mt-5">
                    <p>2</p>
                </div>
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
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                <h5>Jasa Kirim</h5>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    JNT
                </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        JNE
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Sicepat
                    </label>
                </div>
                </div>
                <div class="col-sm-3">
                    <h5>Cara Bayar</h5>
                    <a href="/carabayar">Lihat Cara Bayar</a>
                </div>
                <div class="col-sm-5">
                <h5>Voucher</h5>
                <form class="d-flex" role="search" >
                            <input class="form-control me-2" type="search" placeholder="Masukkan Voucher" aria-label="Search">
                            <a class="btn btn-primary" type="button"  href="">Pakai</a>
                        </form>
                </div>
            </div>
        </div> 
        <div class="bg-white p-5 rounded shadow mt-5">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-4">
                    <p>Total Pesanan</p>
                    <p>Total Pengiriman</p>
                    <p>Total Pembayaran</p>
                </div>
                <div class="col-sm-2">
                    <p>Rp 52.000;</p>
                    <p>Rp 11.000;</p>
                    <h5>Rp 63.000;</h5>
                </div>
            </div>
        </div>  
        <div class="d-flex mt-5 mb-5">
            <div class="p-2 mt-3 d-inline"></div>
            <div class="ml-auto p-2"><a class="btn btn-primary d-inline-end" href="/detailriwayat-bayar" role="button">Buat Pesanan</a></div>
        </div>      
</div>
@endsection