@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h3><i class="fa fa-user mt-2 mb-2"></i> &nbsp; My Profile</h3>
            </div>

            <div class="float-right">
                <a href="{{url('profile/edit',1)}}" class="mt-2" data-toggle="tooltip" data-placement="top" title="Edit Profile">
                    <i class="fa fa-edit f24 mt-3 text-dark"></i>
                </a>
            </div>

        </div>
    </div>

    <div class="row mt-4">
        <div class="col-xl-4 col-md-6 profile-info-position">
            <div class="card card-shadow mb-4 ">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mt-4 mb-3">
                            <img class="rounded-circle" src="assets/img/avatar/avatar-large3.jpg" width="85"
                                 alt=""/>
                        </div>
                        <h5 class="text-uppercase mb-0">Jane Doe</h5>
                        <p class="text-muted mb-0">Sr. Marketing Executive </p>
                        <div class="rattings mb-4">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-o text-warning"></i>
                        </div>
                        <div class="profile-social-link mb-4">
                            <a href="#" class="mx-2"   id="changeProfile"><i class="fa fa-edit" data-toggle="modal" data-target=".UploadImage"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-danger">
                        <div class="custom-title">Points</div>
                    </div>
                    <div class="progress mt-4" style="height: 5px;">
                        <div class="progress-bar bg-purple-light" role="progressbar" style="width: 60%;"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-2">
                        <span class="float-left f12 text-muted">Total 7250</span>
                        <span class="float-right f12 text-muted">1250 Left</span>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="card-body">
                    <div class="row f12 mb-3">
                        <div class="col-6">Article Read</div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">900/1200</div>
                                <div class="col-6">
                                    <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%;"
                                             aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row f12 mb-3">
                        <div class="col-6">Comments</div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">145/450</div>
                                <div class="col-6">
                                    <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;"
                                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row f12 mb-3">
                        <div class="col-6">Likes</div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">370/750</div>
                                <div class="col-6">
                                    <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 35%;"
                                             aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row f12">
                        <div class="col-6">Share</div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">30/100</div>
                                <div class="col-6">
                                    <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;"
                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-sm btn-pill btn-outline-primary">View All</a>
                    </div>
                </div>
            </div>


        </div>

        <div class="col-xl-8 col-md-6">
            <div class="card" style="min-height: 720px;">
                <div class="card-body">
                    <div class="timeline-title btn-pill text-muted d-inline-block px-3 py-1 mb-5 mx-5">January
                        2018
                    </div>
                    <ul class="list-unstyled base-timeline activity-timeline">

                        <li class="">
                            <div class="timeline-icon bg-danger">
                                <i class="fa fa-tasks"></i>
                            </div>
                            <div class="act-time">Today</div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-danger">Task Added</a>
                                <span
                                    class="d-block">You have added task #26 Successfully to the project “Agile CRM”</span>
                            </div>
                            <small class="text-muted">
                                28 mins ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon bg-success">
                                <i class="fa fa-download"></i>
                            </div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-success">Download Complete</a>
                                <span class="d-block">You downloaded the pdf documentation file of Agile CRM</span>
                            </div>
                            <small class="text-muted">
                                45 mins ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon bg-primary">
                                <i class="fa fa-handshake-o"></i>
                            </div>
                            <div class="act-time">Yesterday</div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-primary">Deal Added</a>
                                <span class="d-block">Final deal with ABC Company is done and added to the “Upcoming deal” list</span>
                            </div>
                            <small class="text-muted">
                                12 mins ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon">
                                <img src="assets/img/avatar/avatar2.jpg" alt=""/>
                            </div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-info">Charlie Johnson</a>
                                <span class="d-block">joined DashLab last week.</span>
                            </div>
                            <small class="text-muted">
                                3 days ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon bg-purple">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="act-time">29 January</div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-purple">Task Complete</a>
                                <span class="d-block">5 tasks for 29 january is completed successfully and no task pending</span>
                            </div>
                            <small class="text-muted">
                                07:00 PM
                            </small>
                        </li>
                    </ul>

                    <br/>

                    <br/>
                </div>
            </div>

        </div>
    </div>

    @push('js')

    @endpush
@endsection

<div class="modal fade UploadImage" id="uploadImage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <input type="file" class="form-control" nama="image">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
