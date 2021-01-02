<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta property="og:title" content="Covid19">
    <meta property="og:image" content="{{asset('frontend/assets/')}}">
    <meta property="og:description" content="Covid-19">
    <meta name="full-screen" content="yes">
    <meta name="theme-color" content="#020018">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Covid19 | Nobel Corona Virus</title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/fonts/font/flaticon.css')}}">
    <!---------favicon--------------->
    <link rel="icon" type="image/png" href="{{asset('frontend/assets/image/favicon.png')}}" sizes="16x16">
    <!---------favicon--------------->
</head>
<body class="home_page_two">
<div class="page_wapper">
    <!--Start Preloader-->
    <div class="preloader">
        <div class="preloader_box">
            <div class="loader">
                <div class="circle item0"></div>
                <div class="circle item1"></div>
                <div class="circle item2"></div>
            </div>
        </div>
    </div>
    <!--End Preloader -->
    <!--Header-->
    <header class="header_v2">
        <section class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="heading">
                                    <h2>Today Updates</h2>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="news_inner">
                                    <div class="owl-carousel owl-theme single_items">
                                        <div class="mid-text">
                                            <p><a href="#">Stabilitech's COVID-19 Vaccine Intended to Be Delivered in a Disruptive Thermally Stable Oral Capsule</a></p>
                                        </div>
                                        <div class="mid-text">
                                            <p><a href="#"> Controlled Release Drug Delivery Market Size Worth $69.8 Billion by 2027: Grand View Research, Inc.</a></p>
                                        </div>
                                        <div class="mid-text">
                                            <p><a href="#">  Drug Delivery Market Size Worth $69.8 Billion by 2027: Grand View Research, Inc.
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text_right">
                            <div class="social_media_icon">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#" class="has-tooltip">
                                            <span class="fa fa-facebook"></span>
                                            <div class="c-tooltip">
                                                <div class="tooltip-inner">Facebook</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="has-tooltip">
                                            <span class="fa fa-twitter"></span>
                                            <div class="c-tooltip">
                                                <div class="tooltip-inner">Twitter</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="has-tooltip">
                                            <span class="fa fa-linkedin"></span>
                                            <div class="c-tooltip">
                                                <div class="tooltip-inner">Linkedin</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="navbar_outer">
            <div class="navbar navbar-expand-lg  bsnav bsnav-sticky bsnav-sticky-slide">
                <div class="container">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('frontend/assets/image/logo.png')}}" class="img-fluid log_normal" alt="img">
                    </a>
                    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse scroll-nav">
                        <ul class="navbar-nav navbar-mobile navbar_left  ml-auto" id="nav">
                            <li class="nav-item nav_item activ">
                                <a class="nav-link link_hd" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{route('about')}}">About </a></li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{route('affactedCountries')}}">Statistics</a></li>
                            <li class="nav-item nav_item">
                                <a class="nav-link link_hd" href="{{route('blogs')}}">  Blog  </a>
                            </li>
                            <li class="nav-item nav_item dropdown">
                                <a class="nav-link link_hd" href="#">  <i class="fa fa-user"></i>  </a>
                                <ul class="navbar-nav submenu">
                                    @if (Route::has('login'))
                                        <div class="top-right links">
                                            @if (Auth::check())
                                                <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}">Logout</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
                                            @else
                                                <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                                                <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                                            @endif
                                        </div>
                                    @endif
                                </ul>
                            </li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{route('contact')}}">Contact</a></li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{route('transaction')}}">Donations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </header>
    <!--Header-->
    <!------main-content------>
    <main class="main-content">
        <section class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex">
                        <div class="content_box">
                            <ul class="bread_crumb text-center">
                                <li class="bread_crumb-item"><a href="#">Home</a></li>
                                <li class="bread_crumb-item active"> About Covid-19</li>
                            </ul>
                            <h1>About Covid-19</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about type_one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading icon_dark tp_one">
                            <h6>about Covid-19</h6>
                            <h1>Coronavirus Disease 2019 (COVID-19)</h1>
                            <span class="flaticon-virus icon"></span>
                        </div>
                        <div class="about_content">
                            <p class="description">Coronavirus disease 2019 (COVID-19) is an
                                infectious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2).
                                It was first identified
                                in December 2019 in Wuhan, the capital of China's Hubei province, and has
                                since spread globally, resulting in an ongoing pandemic. As of 6 May 2020, more than 3.66 million
                                cases have been reported across 187 countries and territories,
                                resulting in more than 257,000 deaths. More than 1.19 million people have recovered.

                                Common symptoms include fever,
                                cough, fatigue, shortness of breath, and loss of smell and taste. While the majority
                                of cases result in mild symptoms, some progress to viral pneumonia,
                                multi-organ failure, or cytokine storm. The time from exposure to onset of
                                symptoms is typically around five days but may range from two to fourteen days.

                                The virus is primarily spread between people
                                during close contact, often via small droplets produced by coughing, sneezing, and talking.The droplets
                                usually fall to the ground or onto surfaces rather than remaining in the air over long distances.
                                People may also become infected by touching a contaminated surface and then touching their face.
                                On surfaces, the amount of virus declines over time until it is insufficient to remain infectious, but it may be detected for hours or days. It is most contagious during the first three days after the onset of symptoms, although spread may be possible before symptoms appear and in later stages of the disease. The standard method of diagnosis is by real-time reverse transcription polymerase chain reaction (rRT-PCR) from a nasopharyngeal swab. Chest CT imaging may also
                                be helpful for diagnosis in individuals where there is a high suspicion of infection based
                                on symptoms and risk factors; however, guidelines do not recommend using it for routine screening.
                                like readable English.
                            </p>
                            <div class="symptoms">
                                <h2>The best way to prevent illness is to avoid being exposed to this virus.</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>
                                                <span class="flaticon-check"></span>
                                                <p>Clean AND disinfect frequently touched surfaces </p>
                                            </li>
                                            <li>
                                                <span class="flaticon-check"></span>
                                                <p>Avoid touching your eyes, nose, and mouth</p>
                                            </li>
                                            <li>
                                                <span class="flaticon-check"></span>
                                                <p>Clean your hands with a hand sanitizer </p>
                                            </li>
                                            <li>
                                                <span class="flaticon-check"></span>
                                                <p>Cover coughs and sneezes</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>
                                                <span class="flaticon-check"></span>
                                                <p>Stay home if you’re sick</p>
                                            </li>
                                            <li>
                                                <span class="flaticon-check"></span>
                                                <p>Wear a facemask if sick</p>
                                            </li>
                                            <li>
                                                <span class="flaticon-check"></span>
                                                <p>Cover your mouth and nose </p>
                                            </li>
                                            <li>
                                                <span class="flaticon-check"></span>
                                                <p>Throw used tissues in trash</p>
                                            </li>
                                            <li>
                                                <span class="flaticon-check"></span>
                                                <p>Ensure solution has at least 70% alcohol.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="theme_btn tp_one">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="funfacts type_one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading tp_one text-center text_white icon_dark">
                            <h6>Funfacts</h6>
                            <span class="flaticon-virus icon"></span>
                            <h1>Keep Your Headup & Be Patient</h1>
                        </div>
                    </div>
                </div>
                <?php $cases=0; $todayCases=0;$deaths=0;$todayDeaths=0;$recovered=0;$active=0;$critical=0;?>
                @foreach($globally as $global)
                    <?php $cases+=$global->cases;?>
                    <?php $todayCases+=$global->todayCases;?>
                    <?php $deaths+=$global->deaths;?>
                    <?php $todayDeaths+=$global->todayDeaths;?>
                    <?php $recovered+=$global->recovered;?>
                    <?php $active+=$global->active;?>
                    <?php $critical+=$global->critical;?>
                @endforeach
                <div class="about_fun_facts">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="fun_facts_box type_one">

                                <div class="icon">
                                    <img src="{{asset('frontend/assets/image/svg/virus.svg')}}" class="img-fluid svg_image" alt="home" />
                                </div>
                                <h2><span class="counter-value">{{$cases}}</span>+</h2>
                                <h6>Total Confirmed</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="fun_facts_box type_one">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/image/svg/partnership.svg')}}" class="img-fluid svg_image" alt="home" />
                                </div>
                                <h2><span class="counter-value" data-count="">{{$active}}</span>+</h2>
                                <h6>Active</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="fun_facts_box type_one">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/image/svg/man.svg')}}" class="img-fluid svg_image" alt="home" />
                                </div>
                                <h2><span class="counter-value">{{$recovered}}</span>+</h2>
                                <h6>Total Recoverd</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="fun_facts_box type_one last">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/image/svg/tombstones.svg')}}" class="img-fluid svg_image" alt="home" />
                                </div>
                                <h2><span class="counter-value">{{$deaths}}</span>+</h2>
                                <h6>Confirmed Deaths</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer type_three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xs-12">
                        <div class="footer_widgets type_three">
                            <h3 class="widgets_title">About</h3>
                            <div class="inner_widgets">
                                <ul class="links">
                                    <li><a href="#">Situation Reports</a></li>
                                    <li><a href="#">Advice For Public</a></li>
                                    <li><a href="#">Prevention</a></li>
                                    <li><a href="#">Coronavirus Symptoms</a></li>
                                    <li><a href="#">Donor & Partners</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widgets type_three">
                            <h3 class="widgets_title">Prevention</h3>
                            <div class="inner_widgets">
                                <ul class="links">
                                    <li><a href="#">Wash your hands</a></li>
                                    <li><a href="#">Avoid touching your</a></li>
                                    <li><a href="#">Avoid close contact</a></li>
                                    <li><a href="#">Stay home if you are sick</a></li>
                                    <li><a href="#">Immediately wash your </a></li>
                                    <li><a href="#">Wear a facemask</a></li>
                                    <li><a href="#">Keep surfaces  clean</a></li>
                                    <li><a href="#">Cover your mouth  </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widgets type_three">
                            <h3 class="widgets_title">Follow the steps</h3>
                            <div class="inner_widgets">
                                <ul class="links">
                                    <li><a href="#"> Soap on Hand</a></li>
                                    <li><a href="#"> Palm to Palm</a></li>
                                    <li><a href="#"> Between Fingers</a></li>
                                    <li><a href="#"> Back to Hands</a></li>
                                    <li><a href="#"> Clean with Water</a></li>
                                    <li><a href="#">Focus on Wrist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widgets type_three">
                            <h3 class="widgets_title logo">
                                <a href="index.html"><img src="{{asset('frontend/assets/image/logo.png')}}" class="img-fluid" alt="logo" /></a>
                            </h3>
                            <div class="inner_widgets">
                                <p>A novel coronavirus is a new coronavirus that has not been previously identified. The virus causing coronavirus disease 2019 (COVID-19)</p>
                                <div class="social_media_icon">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#" class="has-tooltip">
                                                <span class="fa fa-facebook"></span>
                                                <div class="c-tooltip">
                                                    <div class="tooltip-inner">Facebook</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="has-tooltip">
                                                <span class="fa fa-twitter"></span>
                                                <div class="c-tooltip">
                                                    <div class="tooltip-inner">Twitter</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="has-tooltip">
                                                <span class="fa fa-linkedin"></span>
                                                <div class="c-tooltip">
                                                    <div class="tooltip-inner">Linkedin</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_last type_three">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>Copyright © 2020 Tusher. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------main-centent-end--------------->
    </main>
    <!-------------pagewapper-end--------------->
</div>
<!--Scroll to top-->
<a href="# " id="scroll" class="default-bg " style="display: inline;"><span class="fa fa-angle-up "></span></a>
<!---------mbile-navbar----->
<div class="bsnav-mobile ">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar ">
        <button class="navbar-toggler toggler-spring mobile-toggler"><span class="fa fa-close "></span></button>
    </div>
</div>

<!-----------------------------------script-------------------------------------->
<script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bsnav.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('frontend/assets/js/wow.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.js')}}"></script>
<script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('frontend/assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/validator.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/appear.js')}}"></script>
<script src="{{asset('frontend/assets/js/moment.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('frontend/assets/js/pagenav.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
</body>

</html>
