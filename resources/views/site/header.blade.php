<header id="HOME" style="background-position: 50% -125px;">
    <div class="section_overlay">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo2.png')}}" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        @foreach($menu as $m)
                            <li> <a href="#{{$m['alias']}}">{{$m['title']}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="home_text wow fadeInUp animated">
                        <h2 style="text-transform: none;font-size: 49px;letter-spacing: 4px">it’s Karen g.</h2>
                        <p>php & laravel developer</p>
                        <img src="{{asset('assets/images/shape.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
