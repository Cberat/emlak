<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield("title","Backend")</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset("assets/backend/images/favicon.ico")}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset("assets/backend/plugins/bootstrap/css/bootstrap.css")}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset("assets/backend/plugins/node-waves/waves.css")}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset("assets/backend/plugins/animate-css/animate.css")}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset("assets/backend/css/style.css")}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset("assets/backend/css/themes/all-themes.css")}}" rel="stylesheet" />
    @stack("customCss")
</head>

<body class="theme-red">



    
    <!-- yukleme ekrani -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->


    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->


    @include("backend.include.search")


    @include("backend.include.ustbar")


    @include("backend.include.left-rightbar")


    @yield("content")

    

    <!-- Jquery Core Js -->
    <script src="{{asset("assets/backend/plugins/jquery/jquery.min.js")}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset("assets/backend/plugins/bootstrap/js/bootstrap.js")}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset("assets/backend/plugins/bootstrap-select/js/bootstrap-select.js")}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset("assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js")}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset("assets/backend/plugins/node-waves/waves.js")}}"></script>

    <!-- Custom Js -->
    <script src="{{asset("assets/backend/js/admin.js")}}"></script>

    <!-- Demo Js -->
    <script src="{{asset("assets/backend/js/demo.js")}}"></script>
    @stack("customJs")
</body>

</html>
