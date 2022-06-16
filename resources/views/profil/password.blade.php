@extends('layouts.profil')

@section('container')
    <div class="col-sm-9">
            <div class="py-5 px-4">
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="bg-white p-5 rounded shadow">
                            <h4 class="mt-3">Ganti Password</h4>
                                <form class="mt-5">
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-4 col-form-label">Password Baru</label>
                                        <div class="col-sm-8">
                                        <input type="text"  class="form-control" id="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="konfpass" class="col-sm-4 col-form-label">Konfirmasi Password</label>
                                        <div class="col-sm-8">
                                        <input type="text"  class="form-control" id="konfpass">
                                        </div>
                                    </div>
                                    <a class="btn btn-primary " href="/password" role="button" style="float: right;">Simpan</a>
                                    
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