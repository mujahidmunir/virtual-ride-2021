<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/codelab/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:06:21 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.html">

    <title>Login</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--icon font-->
    <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/vendor/icheck/skins/all.css')}}" rel="stylesheet">

    <!--custom styles-->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/vendor/html5shiv.js')}}"></script>
    <script src="{{asset('assets/vendor/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body class="signin-up-bg">
<?php
$agent = new \Jenssegers\Agent\Agent();
?>
@if($agent->isMobile())

@else
@endif

    <div class="leftHalf" style="background-image: url('{{asset('assets/img/login/bjbdigicash.png')}}'); background-size: 100%;">
        <div class="login-promo-txt">
            <h2>Let’s Start The Journey</h2>
            <p>Enter the most beautiful admin ever</p>
        </div>
    </div>

<div class="rightHalf">
    <div class="position-relative">
        <!--login form-->
        <div class="login-form">
            <h2 class="text-center mb-4">
                <img src="" srcset="" alt="CodeLab">
            </h2>
            <h4 class="text-uppercase- text-purple text-center mb-5">Login to Admin</h4>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group mb-4">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                </div>

                <div class="form-group clearfix">
                    <button type="submit" class="btn btn-purple btn-pill float-right">LOGIN</button>
                </div>

                <div class="form-divider"></div>

                <a href="{{url('auth/google')}}" class="btn btn-facebook btn-pill text-uppercase"><i class="fa fa-google mt-1"></i> Login with Google</a>

            </form>
        </div>
        <!--/login form-->
    </div>
</div>

<!--basic scripts-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/vendor/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</html>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
   $('#loginEmail').on('click', function () {

        $('.loginEmail').attr('hidden', false)
   })
</script>

