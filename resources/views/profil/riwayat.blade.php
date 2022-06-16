@extends('layouts.profil')

@section('container')
    <div class="col-sm-9">
            <div class="py-5 px-4">
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="bg-white p-5 rounded shadow">
                            <h4 class="mt-3">Riwayat Pembelian</h4>
                            <table class="table mt-5">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Total Produk</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>9 Juni 2022</td>
                                    <td>2</td>
                                    <td>Rp 63.000;</td>
                                    <td>Menunggu Pembayaran</td>
                                    <td><a class="btn btn-warning" href="/detailriwayat-bayar" role="button">Bayar</a></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>9 Juni 2022</td>
                                    <td>2</td>
                                    <td>Rp 63.000;</td>
                                    <td>Sedang Dikirim</td>
                                    <td><a class="btn btn-primary" href="/detailriwayat-kirim" role="button">Detail</a></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>9 Juni 2022</td>
                                    <td>2</td>
                                    <td>Rp 63.000;</td>
                                    <td>Selesai</td>
                                    <td><a class="btn btn-primary" href="/detailriwayat-selesai" role="button">Detail</a></td>
                                    </tr>
                                </tbody>
                                </table>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>



@endsection