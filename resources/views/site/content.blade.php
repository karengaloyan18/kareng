{{--services--}}
<section class="services" id="SERVICE">
    <div class="container">
        @foreach($services as $s => $serv)
            @if($s  % 4 == 0 )
                <div class="row">
                    @endif
                    <div class="col-md-3 text-center">
                        <div class="single_service wow fadeInUp" data-wow-delay="1s">
                            <i class="{{$serv->icon}}"></i>
                            <h2>{{$serv->name}}</h2>
                            <p>{{$serv->text}}</p>
                        </div>
                    </div>
                    @if(($s+1) % 4 === 0)
                </div>
            @endif
        @endforeach
    </div>
</section>


{{--about--}}
<section class="about_us_area" id="ABOUT">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="about_title">
                    <h2>About Me</h2>
                    <img src="{{asset('assets/images/shape.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4  wow fadeInLeft animated">
                @foreach($about as $a => $ab)
                    <div class="single_progress_bar">
                        <h2>{{$ab->name}} - {{$ab->percentofknowledge}}%</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                 aria-valuemax="100" style="width: {{$ab->percentofknowledge}}%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @foreach($abouttext as $a => $at)
                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">{{$at->text}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


{{--facts--}}
<div class="fun_facts  testimonial text-center wow fadeInUp animated" id="TESTIMONIAL">
    <section class="header parallax home-parallax page" id="fun_facts" style="background-position: 50% -150px;">
        <div class="section_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft animated">
                        <div class="row">
                            @foreach($facts as $f => $fact)
                                <div class="col-md-4">
                                    <div class="single_count">
                                        <i class="{{$fact->icon}}"></i>
                                        <h3>{{$fact->numbers}}</h3>
                                        <p>{{$fact->name}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1 wow fadeInRight animated">
                        <div class="imac">
                            <img src="{{asset('assets/images/imac.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


{{--work--}}
<section class="work_area" id="WORK">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="work_title  wow fadeInUp animated">
                    <h1>Latest Works</h1>
                    <img src="{{asset('assets/images/shape.png')}}" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna <br> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @foreach($works as $w => $work)
            @if($w == 0)
                <div class="row">
                    @endif
                    @if($w % 3 ==0 )
                </div>
            @endif
            @if($w % 3 == 0 and $w > 0)
                <div class="row pad_top">
                    @endif
                    <div class="col-md-4 no_padding">
                        <div class="single_image">
                            <img src="{{asset('assets/images/').'/'. $work->image}}" alt="">
                            <div class="image_overlay">
                                <h2>drawing</h2>
                                <h4>with pencil colors</h4>
                            </div>
                        </div>
                    </div>
                    @if($w == 5 or ($w % 4 ==0 and $w > 4))
                </div>
            @endif
        @endforeach
    </div>
</section>


{{--contact--}}
<section class="contact" id="CONTACT">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="contact_title  wow fadeInUp animated">
                    <h1>get in touch</h1>
                    <img src="{{asset('assets/images/shape.png')}}" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna<br/> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3  wow fadeInLeft animated">
                <div class="single_contact_info">
                    <h2>Call Me</h2>
                    <p>+88 00 123 456 01</p>
                </div>
                <div class="single_contact_info">
                    <h2>Write Me</h2>
                    <p>karengaloyan18@gmail.com</p>
                </div>
                <div class="single_contact_info">
                    <h2>Address</h2>
                    <p>216 Street Address, Barisal, BD</p>
                </div>
            </div>
            <div class="col-md-9  wow fadeInRight animated">
                <form class="contact-form" action="{{route('index')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Your name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                            <label for="email">Mail</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">
                        </div>
                        <div class="col-md-6">
                            <label for="message">Message</label>
                            <textarea name="textarea" class="form-control" id="message" rows="25" cols="10"
                                                                   placeholder="  Message Texts...">{{old('textarea')}}</textarea>
                            <button type="submit" class="btn btn-default submit-btn form_submit">SEND MESSAGE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
