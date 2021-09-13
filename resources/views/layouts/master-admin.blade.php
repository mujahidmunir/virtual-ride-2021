<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/codelab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:03:32 GMT -->
@include('layouts.partials.head')

<body class="left-sidebar-fixed  header-fixed">
<!--header start-->
@include('layouts.partials.header')
<!--search modal start-->

<!--search modal start-->
<!--header end-->

<div class="app-body">
    <!--left sidebar start-->
@include('layouts.partials.sidebar-admin')
<!--left sidebar end-->

    <!--main content wrapper-->
    <div class="content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>

{{--        <!--footer-->--}}
{{--        <footer class="sticky-footer">--}}
{{--            <div class="container">--}}
{{--                <div class="text-center">--}}
{{--                    <small>Copyright &copy; VectorLab 2018</small>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </footer>--}}
{{--        <!--/footer-->--}}
    </div>
    <!--main content wrapper end-->

    <!--right sidebar-->
    <!--right sidebar end-->
</div>

<!--basic scripts-->

@include('layouts.partials.js')
@include('sweetalert::alert')

<!-- Mirrored from thevectorlab.net/codelab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:04:25 GMT -->
</body>
</html>


