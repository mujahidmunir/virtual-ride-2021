@extends('layouts.master-admin')
@section('content')
    <div class="alert alert-primary" role="alert">
        <h4 class="alert-heading">Note</h4>
        <p></p>
        <p>Rule type data long texr, karena akan panjang</p>
        <hr>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-primary">
                        <div class="custom-title">{{ strtoupper(Request::segment(2)) }}</div>
                    </div>
                </div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="">
                                <div class="mt-3 mb-2">
                                    <label>Event Name</label>
                                </div>
                                <div class="mt-1 mb-4">
                                    <input type="text" class="form-control" placeholder="Event Name">
                                </div>

                                <div class="mt-3 mb-2">
                                    <label>Start Date</label>
                                </div>
                                <div class="mt-1 mb-4">
                                    <input type="date" class="form-control">
                                </div>

                                <div class="mt-3 mb-2">
                                   <label>Ended Date</label>
                                </div>
                                <div class="mt-1 mb-4">
                                    <input type="date" class="form-control" placeholder="Event Name">
                                </div>

                                <div class="mt-3 mb-2">
                                   <label>Images</label>
                                </div>
                                <div class="mt-1 mb-4">
                                    <input type="file" class="form-control" accept="image/*" placeholder="Event Name">
                                </div>

                                <div class="mt-3 mb-2">
                                   <label>Rules</label>
                                </div>
                                <div class="mt-1 mb-4">
                                    <textarea id="summernote" class="form-control"></textarea>
                                </div>


                            </div>
                            <div class="float-right">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-2"></i>Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('head')
    <link href="{{asset('assets/vendor/summernote/summernote-bs4.css')}}" rel="stylesheet">
@endpush

@push('js')
    <script src="{{asset('assets/vendor/summernote/summernote-bs4.min.js')}}"></script>
    <!--init-->
    <script src="{{asset('assets/vendor/js-init/init-summernote.js')}}"></script>
@endpush
