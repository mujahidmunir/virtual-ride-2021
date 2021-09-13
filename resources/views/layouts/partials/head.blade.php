<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{URL::to('assets/img/favicon.html')}}">

    <title>Home</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="{{URL::to('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--icon font-->
    <link href="{{URL::to('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets/vendor/dashlab-icon/dashlab-icon.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets/vendor/themify-icons/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets/vendor/weather-icons/css/weather-icons.min.css')}}" rel="stylesheet">

    <!--jquery ui-->
    <link href="{{URL::to('assets/vendor/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">

    <!--iCheck-->
    <link href="{{URL::to('assets/vendor/icheck/skins/all.css')}}" rel="stylesheet">

@stack('head')
    <!--custom styles-->
    <link href="{{URL::to('assets/css/main.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{URL::to('assets/vendor/html5shiv.js')}}"></script>
    <script src="{{URL::to('assets/vendor/respond.min.js')}}"></script>



    <![endif]-->
</head>
