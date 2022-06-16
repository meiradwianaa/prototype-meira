@extends('layouts.main')

@section('container')
    <div class="container">
        <h2 class="text-center mt-5 mb-5"> PT INSAN AFIAT MANDIRI</h2>
        <h5 class="text-center mb-5">PT Insan Afiat Mandiri adalah perusahaan penyalur alat kesehatan terketak di Provinsi JAWA BARAT di Kabupaten KOTA BANDUNG dengan alamat Komp. Puri Cipageran Indah 2 Blok C-4 No. 37, Rt. 02/20, Desa Tanimulya, Kec. Ngamprah, Bandung Barat.</h5>
        <h3>Layanan Kami</h3>
        <div class="row mt-5">
            <div class="col-sm-4">
                <img src={{ asset("./img/about1.png") }}>
                <img class="mt-5" src={{ asset("./img/about2.png") }}>
            </div>
            <div class="col-sm-7">
                <img src={{ asset("./img/about3.png") }}>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-6">
                <h3>Detail Perusahaan</h3>
                <div class="card rounded shadow p-2 mt-5">
                    <h4>Nomer Izin Edar</h4>
                    <p>XXXXXXXXXXX</p>
                    <a href=#>Lihat Izin Edar</a>
                </div>
            </div>
            <div class="col-sm-6">
                <h3>Kontak Kami</h3>
                <div class="card rounded shadow p-2 mt-5">
                    <div class="row mt-3">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2">
                            <img src={{ asset("./img/gmail.png") }}>
                        </div>
                        <div class="col-sm-8">
                            <h4>EMAIL</h4>
                            <p>pt.insanafiatmandiri@yahoo.co.id</p>
                        </div>
                    </div>
                </div>
                <div class="card rounded shadow p-2 mt-2">
                    <div class="row mt-3">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2">
                            <img src={{ asset("./img/fax.png") }}>
                        </div>
                        <div class="col-sm-8">
                            <h4>TELP/FAX</h4>
                            <p>022 - 6624768</p>
                        </div>
                    </div>
                </div>
                <div class="card rounded shadow p-2 mt-2">
                    <div class="row mt-3">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2">
                            <img src={{ asset("./img/whatsapp.png") }}>
                        </div>
                        <div class="col-sm-8">
                            <h4>WHATSAPP</h4>
                            <p>087700322561</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card rounded shadow p-5">
                    <h3 class="text-center mt-3">Kritik dan Saran</h3>
                        <form class="mt-3">
                        <textarea id="w3review" name="w3review" rows="6" cols="40" placeholder="Masukkan Kritik dan Saran"></textarea>
                        <br>
                        <input type="submit" class="btn btn-primary mt-2" value="Simpan">
                        </form>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
@endsection