<header class="app-header">
    <div class="branding-wrap">
        <!--left nav toggler start-->
        <a class="nav-link mt-2 float-left js_left-nav-toggler pos-fixed" href="javaScript:;">
            <i class=" ti-align-right"></i>
        </a>
        <!--left nav toggler end-->

        <!--brand start-->
        <div class="navbar-brand pos-fixed">
            <a class="" href="">
                <img src="{{asset('assets/img/logo.png')}}" srcset="" alt="CodeLab">
            </a>
        </div>
        <!--brand end-->
    </div>

    <!--header rightside links-->
    <ul class="header-links hide-arrow navbar">
       <li>
            <a class="nav-link dropdown-toggle" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="user-thumb">
                    <img class="rounded-circle" src="{{Auth::user()->avatar}}" alt=""/>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                <div class="dropdown-item- px-3 py-2">
                    <img class="rounded-circle mr-2" src="{{Auth::user()->avatar}}" width="35" alt=""/>
                    <span class="text-muted">{{Auth::user()->name}}</span>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">Sign Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
            </div>
        </li>

    </ul>
    <!--/header rightside links-->
</header>
