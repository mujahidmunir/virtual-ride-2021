@extends('layouts.master-admin')

@section('content')
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
                    <div class="custom-title-wrap bar-primary">
                        <div class="custom-title">{{ strtoupper(Request::segment(2)) }}</div>
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
                                <td class="text-center"><button class="btn btn-sm btn-info viewImage">View</button></td>
                                <td>aktip</td>
                                <td class="text-center">
                                    @if($uri == 'event')
                                        <a href="" class="btn btn-sm btn-primary">Non Active</a>
                                    @else
                                        <a href="{{url('admin/'. $uri . '/1')}}" class="btn btn-sm btn-info">Detail</a>
                                    @endif
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

@endsection
