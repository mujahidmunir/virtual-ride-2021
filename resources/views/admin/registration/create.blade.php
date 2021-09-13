@extends('layouts.master-admin')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="mt-3"><i class="fa fa-user"></i> Data Pribadi</h3>
        </div>
        <form action="" method="post">
            @csrf
            <div class="card-body">
                <div class="row">

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="name" required value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                        <small  class="form-text text-muted">Masukan Nama Lengkap</small>
                    </div>

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" required value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                        <small  class="form-text text-muted">Masukan Nama Lengkap</small>
                    </div>



                    <div class="form-group col-lg-4 mb-3 mt-3">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="number" min="16" name="nik" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK">
                        <small  class="form-text text-muted">Masukan NIK</small>
                    </div>

                    <div class="form-group col-lg-4 mb-3 mt-3">
                        <label for="exampleInputEmail1">Tgl Lahir</label>
                        <input type="date" name="dob" required class="form-control">
                        <small class="form-text text-muted">Masukan Tgl Lahir</small>
                    </div>

                    <div class="form-group col-lg-4 mb-3 mt-3">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <select class="form-control" name="gender" required id="exampleFormControlSelect1">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="1">Pria</option>
                            <option value="2">Wanita</option>
                        </select>
                        <small  class="form-text text-muted">Pilih Jenis Kelamin</small>
                    </div>

                    <div class="form-group col-lg-4 mb-3 mt-3">
                        <label for="exampleInputEmail1">Nomor WhatsApp</label>
                        <input type="number" name="whatsapp" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No WhatsApp">
                        <small  class="form-text text-muted">Masukan Nomor Whatsapp Aktif</small>
                    </div>

                    <div class="form-group col-lg-4 mb-3 mt-3">
                        <label for="exampleInputEmail1">Nomor DigiCash</label>
                        <input type="number" name="digicash" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Tlp DigiCash">
                        <small  class="form-text text-muted">Masukan Nomor Tlp DigiCash</small>
                    </div>

                    <div class="form-group col-lg-4 mb-3 mt-3">
                        <label for="exampleInputEmail1">Instagram Account</label>
                        <input type="text" name="ig_account" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Instagram Account">
                        <small  class="form-text text-muted">Masukan Nomor Tlp DigiCash</small>
                    </div>



                    <div class="col-12">
                        <h3 class="mt-5"><i class="fa fa-home"></i> Alamat Sesuai KTP</h3>
                    </div>

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Provinsi</label>
                        <select class="form-control select2" id="province" required name="prov">
                            <option value=""></option>
                            @foreach($provinces as $data)
                                <option value="{{$data->id}}">{{$data->province_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Kota / Kabupaten</label>
                        <select class="form-control select2" id="city" required name="city">
                            <option></option>
                            <option>asd</option>
                        </select>
                    </div>

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Kecmatan</label>
                        <select class="form-control select2" id="district" required name="dist">
                            <option></option>
                        </select>
                    </div>

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Kelurahan</label>
                        <select class="form-control select2" id="village" required name="vill">
                            <option></option>
                        </select>
                    </div>


                    <div class="form-group col-lg-12 mb-3 mt-3">
                        <label for="exampleInputEmail1">Alamat</label>
                        <textarea type="text" rows="5" required name="address"  class="form-control"></textarea>
                    </div>

                    <div class="col-12">
                        <div class="float-left">
                            <h3 class="mt-5"><i class="fa fa-home"></i> Alamat Domisili</h3>
                        </div>
                        <div class="float-right">
                            <div class="form-group mt-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked name="agree" id="agree" >
                                    <label class="form-check-label" for="invalidCheck">
                                        Pilih Jika Domosili Sesuai KTP
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Provinsi</label>
                        <select disabled class="form-control select2 dom" id="dom_province" name="dom_prov">
                            <option value=""></option>
                            @foreach($provinces as $data)
                                <option value="{{$data->id}}">{{$data->province_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Kota / Kabupaten</label>
                        <select disabled class="form-control select2 dom" id="dom_city" name="dom_city">
                            <option></option>
                            <option>asd</option>
                        </select>
                    </div>

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Kecmatan</label>
                        <select disabled class="form-control select2 dom" id="dom_district" name="dom_dist">
                            <option></option>
                        </select>
                    </div>

                    <div class="form-group col-lg-6 mb-3 mt-3">
                        <label for="exampleInputEmail1">Kelurahan</label>
                        <select disabled class="form-control select2 dom" id="dom_village" name="dom_vill">
                            <option></option>
                        </select>
                    </div>


                    <div class="form-group col-lg-12 mb-3 mt-3">
                        <label for="exampleInputEmail1">Alamat</label>
                        <textarea disabled type="text" rows="5" name="dom_address" id="dom_address"  class="form-control dom"></textarea>
                    </div>


                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>


@endsection

@push('head')
    <link href="{{asset('assets/vendor/select2/css/select2.css')}}" rel="stylesheet">
@endpush


@push('js')
    <script src="{{asset('assets/vendor/select2/js/select2.min.js')}}"></script>
    <!--init select2-->
    <script src="{{asset('assets/vendor/js-init/init-select2.js')}}"></script>

    <script>
        $('.select2').select2();
    </script>

    @include('user.profile.js.address-ktp')
    @include('user.profile.js.address-domisili')



@endpush
