<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FENDI K</title>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/preloader.css')}}" type="text/css" media="screen, print"/>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <script src="{{asset('assets/js/lte-ie7.js')}}"></script>
{{--    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
{{--    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>--}}
</head>

<body>

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
@if(count($errors) > 0)
    <div class="alert alert-danger" style="margin-top:  72px;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>

@else
    <div class="alert alert-danger">
        {{session('all')}}
    </div>
@endif
@yield('header')

@yield('content')


<footer>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo   wow fadeInUp animated">
                        <img src="{{asset('assets/images/logo.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center   wow fadeInUp animated">
                    <div class="social">
                        <h2>Follow Me on Here</h2>
                        <ul class="icon_list">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>&copy; brandy 2020.All Right Reserved By</p>
                        <p>Made for creative people.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

</body>
</html>
