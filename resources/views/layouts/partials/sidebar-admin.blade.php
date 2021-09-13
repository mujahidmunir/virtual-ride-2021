<div class="left-nav-wrap">
    <div class="left-sidebar">
        <nav class="sidebar-menu">
            <ul id="nav-accordion">
                <li><a href="{{url('/admin/dashboard')}}"  class="{{ Request::segment(2) == 'dashboard' ? 'active' : ''}}"><i class="ti-home" style="font-size: 18px"></i> Dashboard</a></li>


                <li class="sub-menu">
                    <a  href="#" class="{{ Request::segment(2) == 'event' ? 'active' : ''}}"> <i class="fa fa-calendar" style="font-size: 18px"></i>  Events</a>
                    <ul class="sub">
                        <li><a  href="{{url('admin/event')}}">List Event</a></li>
                        <li><a  href="{{url('admin/event/create')}}">Add Event</a></li>
                    </ul>
                </li>

                 <li class="sub-menu">
                    <a  href="#" class="{{ Request::segment(2) == 'registration' ? 'active' : ''}}"> <i class="fa fa-calendar-plus-o" style="font-size: 18px"></i> Registration</a>
                    <ul class="sub">
                        <li><a  href="{{url('admin/registration')}}">List Registration</a></li>
                        <li><a  href="{{url('admin/registration/create')}}">Add Registration</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a  href="#" class="{{ request()->is('admin/participant/*') ? 'active' : ''}}"> <i class="fa fa-users" style="font-size: 18px"></i> Participant</a>
                    <ul class="sub">
                        <li><a  href="{{url('admin/participant')}}">List Participant</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a  href="#" class="{{ Request::segment(2) == 'payment' ? 'active' : ''}}"> <i class="fa fa-money" style="font-size: 18px"></i> Payment</a>
                    <ul class="sub">
                        <li><a  href="{{url('admin/payment')}}">List Payment</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a  href="#" class="{{ request()->is('admin/user/*') ? 'active' : ''}}" > <i class="fa fa-user-circle" style="font-size: 18px"></i> User</a>
                    <ul class="sub">
                        <li><a  href="{{url('admin/user')}}">List User</a></li>
                        <li><a  href="{{url('admin/user/create')}}">Add User</a></li>

                    </ul>
                </li>

                <li class="sub-menu">
                    <a  href="#" class="{{ request()->is('admin/user/*') ? 'active' : ''}}" > <i class="fa fa-credit-card-alt" style="font-size: 18px"></i> DigiCash</a>
                    <ul class="sub">
                        <li><a  href="{{url('admin/digicash')}}">List DigiCash</a></li>


                    </ul>
                </li>
                <hr class="bg-white">
                <li class="active"><a href="{{url('/')}}" class=""><i class="fa fa-sign-out" style="font-size: 18px"></i> Logout</a></li>





            </ul>
        </nav>
    </div>
</div>
