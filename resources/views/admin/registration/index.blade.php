@extends('layouts.master-admin')

@section('content')
    @include('admin.event.partials.header')
    <div class="alert alert-primary" role="alert">
        <h4 class="alert-heading">Note</h4>
        <p>Jika Status Event Tidaak Aktif maka tidak bisa mengklik daftar event</p>
        <p>Start Date digunaakan untuk waktu awal user bisa melakukan pendaftran</p>
        <p>Jika Ended Date Lebih kecil dari waktu sekaraang, user tidak bisa melakukan pendaftaran</p>
        <hr>
    </div>

    <div class="row">

        <div class="col-xl-12">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-primary ml-3 float-left">
                        <div class="custom-title ml-4" >{{ strtoupper(Request::segment(2)) }}</div>
                    </div>

                    <div class="float-right">
                        <div class="btn-group mt-3 mr-5">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Approve All</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Send Messaage All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-body- pt-3 pb-4">
                                <div class="table-responsive">
                                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th width="2%">No</th>
                                            <th>Name</th>
                                            <th>Gmail</th>
                                            <th>No WhatsApp</th>
                                            <th>No DigiCash</th>
                                            <th width="8%">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td class="text-center">
                                                <div class="btn-group mb-4">
                                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Option
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Approve</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Send Notification</a>
                                                    </div>
                                                </div>
                                            </td>
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



    @push('head')
        <link href="{{URL::to('assets/vendor/data-tables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endpush
    @push('js')
        <script src="{{URL::to('assets/vendor/data-tables/jquery.dataTables.min.js')}}"></script>
        <script src="{{URL::to('assets/vendor/data-tables/dataTables.bootstrap4.min.js')}}"></script>
        <!--init datatable-->
        <script src="{{URL::to('assets/vendor/js-init/init-datatable.js')}}"></script>
    @endpush


@endsection



