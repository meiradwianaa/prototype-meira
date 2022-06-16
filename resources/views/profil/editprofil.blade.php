@extends('layouts.profil')

@section('container')
    <div class="col-sm-9">
            <div class="py-5 px-4">
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="bg-white p-5 rounded shadow ">
                            <h4 class="mt-3"><a href="/profil"><i class="bi bi-chevron-left"></i></a>  Profil Saya</h4>
                                <form class="mt-5">
                                    <div class="form-group row">
                                        <label for="staticUsername" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="staticUsername" value=": Username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Name" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="Name" value=" Nama User">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Email" value=" user@gmail.com">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="JK" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                                            <label class="form-check-label" for="inlineRadio3">lainnya.</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="TTL" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="TTL" value=" 18 Mei 2000">
                                        </div>
                                    </div>
                                    <a class="btn btn-primary mt-3" href="/profil2" role="button">Simpan</a>
                                    
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