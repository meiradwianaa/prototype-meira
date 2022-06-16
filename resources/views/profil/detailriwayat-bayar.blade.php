@extends('layouts.profil')

@section('container')
    <div class="col-sm-9">
            <div class="py-5 px-4">
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="bg-white p-5 rounded shadow">
                            <div class="d-flex">
                                <div class="p-2"><h4 class="mt-3 d-inline"><a href="/riwayatpembelian"><i class="bi bi-chevron-left"></i></a>Detail Pembelian</h4></div>
                                <div class="ml-auto p-2"><a class="btn btn-warning d-inline-end">Menunggu Pembayaran</a></div>
                            </div>
                            <hr>
                            <form class="mt-3">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                        <div class="col-sm-6">
                                        <input type="text" readonly class="form-control-plaintext" id="nama" value=": Meira Dwiana">
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telepon" class="col-sm-4 col-form-label">Telepon</label>
                                        <div class="col-sm-6">
                                        <input type="text" readonly class="form-control-plaintext" id="telepon" value=": 087700322561">
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                        <div class="col-sm-7">
                                        <input type="text" readonly class="form-control-plaintext" id="telepon" value=": Jln Lapang Tembak Selatan Mekarsari no 34 RT08 RW07"></div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="resi" class="col-sm-4 col-form-label">Resi Pengiriman</label>
                                        <div class="col-sm-6">
                                        <input type="text" readonly class="form-control-plaintext" id="resi" value=": 110010003892621">
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                    <a href="/carabayar" >Lihat Cara Bayar</a>
                            </form>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src={{ asset("./img/selang.png") }}>
                                </div>
                                <div class="col-sm-6">
                                    <h3>Nebulizer Mask</h3>
                                    <h5>RP. 26.000;</h5>
                                </div>
                                <div class="col-sm-2">
                                    <p>2x</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-6"></div>
                                <div class="col-sm-2">
                                    <h5>Rp 52.000;</h5>
                                </div>
                            </div>
                            <hr>
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

                            <div class="d-flex mt-5">
                                <div class="p-2 mt-3 d-inline"></div>
                                <div class="ml-auto p-2">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                    Upload Bukti Bayar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Upload Bukti Bayar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="file-upload-wrapper">
                                                <input type="file" id="input-file-now" class="file-upload" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a type="button" class="btn btn-danger"  href="/detailriwayat-kirim" >Upload Bukti Bayar</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>



@endsection