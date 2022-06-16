@extends('layouts.profil')

@section('container')
    <div class="col-sm-9">
            <div class="py-5 px-4">
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="bg-white p-5 rounded shadow akun">
                            <h4 class="mt-3">Profil Saya</h4>
                                <form class="mt-5">
                                    <div class="form-group row">
                                        <label for="staticUsername" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="staticUsername" value=": Meiradwiana">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticName" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="staticName" value=": Meira">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": meiradwiana@gmail.com">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticJK" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="staticJK" value=": Laki-laki">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticTTL" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="staticTTL" value=": 18 Mei 2000">
                                        </div>
                                    </div>
                                    <a class="btn btn-secondary mt-3" href="/editprofil" role="button">Edit</a>
                                    
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