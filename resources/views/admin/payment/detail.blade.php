@extends('layouts.master-admin')

@section('content')
    <div class="alert alert-primary" role="alert">
        <h4 class="alert-heading">Note</h4>
        <p>Menampilkan dataa Transaksi masing masing event</p>
        <p>No Referensi sebagai dataa yang unix</p>
        <p>untuk memasukan dataa, admin harus mengupload file transaksi pembayaran dalam bentuk excel</p>
        <hr>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-primary">

                            <div class="custom-title" style="display: contents">{{ strtoupper(Request::segment(2)) }}</div>


                        <div class="float-right">
                            <i class="fa fa-upload" onclick="uploadPayment()" style="font-size: 20px;"></i>
                        </div>


                    </div>
                </div>
                <div class="card-body- pt-3 pb-4">
                    <div class="table-responsive">
                        <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                            <thead>
                            <tr>
                                <th width="3%">No</th>
                                <th>Event Name</th>
                                <th>Start Date</th>
                                <th>Ended Date</th>
                                <th class="text-center">Image</th>
                                <th>Status</th>
                                <th width="10%" class="text-center">Option</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Virtual Ride Series 1</td>
                                <td>27/09/2021</td>
                                <td>7/10/2021</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-info viewImage">View</button>
                                </td>
                                <td>aktip</td>
                                <td class="text-center">

                                </td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.data-table')
    @push('js')
        <script>
            function uploadPayment() {
                $('#upload').modal('show');
            }
        </script>
    @endpush
@endsection

<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Transaction Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group col-lg-12 mb-3 mt-3">
                        <input type="file" name="transaction" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="No WhatsApp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
