@extends('layouts.master-admin')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-4 bg-purple">
                <div class="card-body">
                    <div class="media d-flex align-items-center ">
                        <div class="mr-4 rounded-circle bg-white sr-icon-box text-purple">
                            <i class="vl_user-male"></i>
                        </div>
                        <div class="media-body text-light">
                            <h4 class="text-uppercase mb-0 weight500">1,2123</h4>
                            <span>Total Pengguna baru</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4 bg-danger">
                <div class="card-body">
                    <div class="media d-flex align-items-center">
                        <div class="mr-4 rounded-circle bg-white sr-icon-box text-danger">
                            <i class="vl_shopping-bag2"></i>
                        </div>
                        <div class="media-body text-white">
                            <h4 class="text-uppercase mb-0 weight500">5,6544</h4>
                            <span>Total Pengguna Lama</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="row">

        <div class="col-xl-12">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-primary ml-3 float-left">
                        <div class="custom-title ml-4" >{{ strtoupper(Request::segment(2)) }}</div>
                    </div>
                    <div class="float-right">
                        <i class="fa fa-upload mt-1" onclick="upload()" style="font-size: 24px;"></i>
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
                                            <th>Name</th>
                                            <th>No DigiCash</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Edinburgh</td>
                                            <td>61</td>
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

        <script>
            function upload() {
                $('#formUpload').modal('show')
            }
        </script>
    @endpush


    <div class="modal fade" id="formUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="file" name="file" class="form-control" id="recipient-name">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>
                </form>
            </div>
        </div>
    </div>


@endsection




