<!doctype html>
<html lang="en">

  <head>
    <title>@yield("title","Emlak")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("assets/frontend/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("assets/frontend/css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("assets/frontend/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/frontend/css/aos.css")}}">
    @stack("customCss")
    
    <link rel="stylesheet" href="{{asset("assets/frontend/fonts/ionicons/css/ionicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/frontend/fonts/fontawesome/css/font-awesome.min.css")}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset("assets/frontend/css/style.css")}}">
  </head>

  <body>
   

      @yield("content")

    
    @include("frontend.include.footer")



    <script src="{{asset("assets/frontend/js/jquery-3.2.1.min.js")}}"></script>
    <script src="{{asset("assets/frontend/js/popper.min.js")}}"></script>
    <script src="{{asset("assets/frontend/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/frontend/js/owl.carousel.min.js")}}"></script>
    <script src="{{asset("assets/frontend/js/jquery.waypoints.min.js")}}"></script>
    <script src="{{asset("assets/frontend/js/aos.js")}}"></script>
    <script src="{{asset("assets/frontend/js/main.js")}}"></script>
/


    @stack("customJs")
  </body>
</html>