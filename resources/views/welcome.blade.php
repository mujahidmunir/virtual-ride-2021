@extends('layouts.master')
@section('content')
            <!--sales statistical overview-->
            <div class="row">
                <div class="col-xl-4">
                    <div class="row">
                        <div class=" col-12">
                            <div class="card card-shadow mb-4 py-2">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="vl_graph-bar fa-3x text-muted"></i>
                                    </div>
                                    <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Revenue</h5>
                                    <h2 class="mt-3 mb-3">3,432</h2>
                                    <p class="mb-0 text-muted">
                                        <span class="text-danger mr-2"><i class="fa fa-arrow-down"></i> 1.43%</span>
                                        <span class="float-right">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=" col-12">
                            <div class="card card-shadow mb-4 py-2">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="vl_shopping-bag2 fa-3x text-muted"></i>
                                    </div>
                                    <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Product Sales</h5>
                                    <h2 class="mt-3 mb-3">2,3211</h2>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.23%</span>
                                        <span class="float-right">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">Sales Report</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="bar-chart-js" height="240"></canvas>
                        </div>
                    </div>
                </div>
            </div>






@endsection
