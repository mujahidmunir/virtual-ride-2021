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
                        <select class="form-control mt-3" id="selectEvent" style="min-width: 200px;">
                            <option>All Series</option>
                            <option>Series 1</option>
                            <option>Series 2</option>
                        </select>

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
                            @foreach($events as $key => $data)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{date('d-m-Y, H:i', strtotime($data->start_date))}}</td>
                                <td>{{date('d-m-Y, H:i', strtotime($data->start_date))}}</td>
                                <td class="text-center"><button class="btn btn-sm btn-info viewImage">View</button></td>
                                <td>@if($data->status == 1)Active @endif</td>
                                <td class="text-center">
                                    @if($url == 'event')
                                        @if($data->status == 1)
                                            <a href="{{url('admin/event/status', $dataa->id)}}" class="btn btn-sm btn-danger">Stop</a>
                                        @else
                                            <a href="{{url('admin/event/status', $data->id)}}" class="btn btn-sm btn-primary">Start</a>
                                        @endif

                                    @else
                                    <a href="{{url('admin/'. $uri . '/1')}}" class="btn btn-sm btn-info">Detail</a>
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @push('js')
        <script>
            $('.viewImage').on('click', function () {
                $('#exampleModal').modal('show');
                $('#img').html(' <img src="{{asset('assets/img/events/raisa.jpg')}}" width="100%" height="auto" alt="">')
            })

            $('#selectEvent').on('change', function () {
                alert('tampilkan data di series yang di pilih')
            })
        </script>
    @endpush


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-body" id="img">

                </div>

            </div>
        </div>
    </div>

@endsection


