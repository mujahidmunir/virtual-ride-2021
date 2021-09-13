@extends('layouts.master-admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="mt-3"><i class="fa fa-pencil"></i> Registration</h3>
        </div>
        <div class="card-body">
            <form action="">
                @csrf
                <div class="row">

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Nama">
                        <small class="form-text text-muted">Masukan Nama Lengkap</small>
                    </div>

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="NIK">
                        <small class="form-text text-muted">Masukan NIK Sesuai KK</small>
                    </div>

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">No WhaatsApp</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="No WhatsApp">
                        <small class="form-text text-muted">Masukan Nomor WhatsApp Aktif</small>
                    </div>

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Nomor DigiCash</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Nomor Tlp DigiCash">
                        <small class="form-text text-muted">Masukan Nomor Tlp DigiCash</small>
                    </div>


                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Tgl Lahir</label>
                        <input type="date" class="form-control">
                        <small class="form-text text-muted">Masukan Tgl Lahir</small>
                    </div>

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="1">Pria</option>
                            <option value="2">Wanita</option>
                        </select>
                        <small class="form-text text-muted">Pilih Jenis Kelamin</small>
                    </div>


                </div>
                <div class="form-group col-12 mb-4 mt-3">
                    <button type="submit" class="btn btn-primary float-right"><i class="fa fa-save mr-3"></i>Simpan
                    </button>
                </div>
            </form>
        </div>


        <div class="card-header">

        </div>
    </div>
@endsection

