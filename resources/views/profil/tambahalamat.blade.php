@extends('layouts.profil')

@section('container')
    <div class="col-sm-9">
            <div class="py-5 px-4">
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="bg-white p-5 rounded shadow">
                            <h4 class="mt-3 d-inline"><a href="/alamat"><i class="bi bi-chevron-left"></i></a> Alamat Saya</h4>
                            <hr>
                            <form class="mt-5">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                                        <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="telepon">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                        <textarea class="form-control" id="alamat" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Provinsi</label>
                                        <div class="col-sm-10">
                                        <select class="form-control">
                                                <option>Jawa Barat</option>
                                                <option>Jawa Tengah</option>
                                                <option>Jawa Timur</option>
                                                <option>DKI Jakarta</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Kota</label>
                                        <div class="col-sm-10">
                                        <select class="form-control">
                                                <option>Bandung</option>
                                                <option>Cimahi</option>
                                                <option>Sumedang</option>
                                                <option>Bogor</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Kecataman</label>
                                        <div class="col-sm-10">
                                        <select class="form-control">
                                                <option>Cimahi Tengah</option>
                                                <option>Cimahi Selatan</option>
                                                <option>Cimahi Utara</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                                        <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="kodepos">
                                        </div>
                                    </div>
                                    <a class="btn btn-primary " href="/alamat2" role="button" style="float: right;">Simpan</a>
                            </form>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>



@endsection