@extends('layouts.master-admin')

@section('content')

    @include('admin.dashboard-component.total-participan')
    <div class="alert alert-primary" role="alert">
        <h4 class="alert-heading">Note</h4>
        <p>Tampilkan kenaikan pengguna digicash pada diagram ditiap tiap seris 1,2,3,4,5 </p>
        <hr>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-info">
                        <div class="custom-title">New DigiCash</div>
                        <div class=" widget-action-link">
                            <div class="dropdown">
                                <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                    <i class=" vl_ellipsis-fill-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                    <a class="dropdown-item" href="#"> Edit</a>
                                    <a class="dropdown-item" href="#"> Delete</a>
                                    <a class="dropdown-item" href="#"> Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3">
                            <span class="text-muted mb-5 d-inline-block"><i class="fa fa-bolt"></i> Sales Views</span>
                            <h1 class="mb-0 state-view">27,487</h1>
                            <small class="text-muted">Sales views in last Sphp artisan eris</small>
                            <ul class="list-unstyled mt-5">
                                <li class="text-muted">
                                    <i class="fa fa-clock-o pr-2"></i> Data from New User DigiCash
                                </li>
                                <li class="text-muted">
                                    <i class="fa fa-clock-o pr-2"></i>  Last active in 07.12.2018
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-9">
                            <canvas id="sales_overview_chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.dashboard-component.detail-total-participant')

@endsection

@push('head')
    <link href="{{URL::to('assets/vendor/c3chart/c3.min.css')}}" rel="stylesheet">
@endpush

@push('js')



    <script src="{{URL::to('assets/vendor/c3chart/d3.min.js')}}"></script>
    <script src="{{URL::to('assets/vendor/c3chart/c3.min.js')}}"></script>

    <script src="{{URL::to('assets/vendor/js-init/c3chart/init-c3chart.js')}}"></script>



@endpush

