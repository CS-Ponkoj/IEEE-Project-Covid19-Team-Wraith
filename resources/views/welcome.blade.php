<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta property="og:title" content="Covid19">
    <meta property="og:image" content="{{asset('frontend/assets/logo.png')}}">
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
    <!--End Preloader-->
    <!--Header-->
    <header class="header_v3">
        <section class="navbar_outer">
            <div class="navbar navbar-expand-lg  bsnav bsnav-sticky bsnav-sticky-slide">
                <div class="container">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('frontend/assets/image/logo.png')}}" class="img-fluid log_normal" alt="img">
                        <img src="{{asset('frontend/assets/image/home-3-logo.png')}}" class="img-fluid log_sticky" alt="img">
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
                                                <li class="nav-item"><a class="nav-link" href="{{route('profile',auth()->user()->id)}}">Profile</a></li>
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
    <main class="main-content">
        <!------main-content------>
        <!------main-slider------>
        <section class="banner type_two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex">
                        <div class="banner_text">
                            <h1>COVID-19 <br>Latest Updates</h1>
                            <p>The Virus Is Thought To Spread Mainly From Person-To-Person. Between People Who Are In Close Contact With One Another</p>
                            <div class="link_box">
                                <a href="#" class="theme_btn tp_three">Latest News Of Countries<span class="flaticon-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image_box">
                            <div class="image image_1 rotate-me">
                                <img src="{{asset('frontend/assets/image/main-slider/home-3-slider-1.png')}}" class="img-fluid" alt="img" />
                            </div>
                            <div class="image image_2">
                                <img src="{{asset('frontend/assets/image/main-slider/home-3-slider-2.png')}}" class="img-fluid" alt="img" />
                            </div>
                            <div class="image image_3">
                                <img src="{{asset('frontend/assets/image/main-slider/home-3-slider-bg-1.png')}}" class="img-fluid" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------fun facts---------->
        <section class="funfacts type_three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_facts_box type_three">
                            <span class="flaticon-hospitalisation icon"></span>
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
                            <div class="content_box">
                                <h2>Total Confirmed</h2>
                                <h6><span class="counter-value">{{$cases}}</span>+</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_facts_box type_three">
                            <span class="flaticon-overpopulation icon"></span>
                            <div class="content_box">
                                <h2>Deaths</h2>
                                <h6><span class="counter-value">{{$deaths}}</span>+</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_facts_box type_three">
                            <span class="flaticon-family icon"></span>
                            <div class="content_box">
                                <h2>Total Recoverd</h2>
                                <h6><span class="counter-value">{{$recovered}}TotalRecovered</span>+</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_facts_box type_three last">
                            <span class="flaticon-death icon"></span>
                            <div class="content_box">
                                <h2>Confirmed Active</h2>
                                <h6><span class="counter-value">{{$active}}</span>+</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------about-------------->
        <section class="about type_two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image_box">
                            <img src="{{asset('frontend/assets/image/resources/home-3-about.png')}}" class="img-fluid" alt="about" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about_content">
                                <div class="heading tp_two">
                                    <h1>How Covid-19 Spreads</h1>
                                    <span class="flaticon-virus icon"></span>
                                </div>
                                <h5>COVID-19 is a new illness that can affect your lungs and airways.</h5>
                                <p>The Virus Is Thought To Spread Mainly From Person-To-Person. Between People Who Are In Close Contact With One Another (Within About 6 Feet). Through Respiratory Droplets Produced When An Infected Person Coughs Or Sneezes. These Droplets Can Land In The Mouths Or Noses Of People Who Are Nearby Or Possibly Be Inhaled Into The Lungs.</p>
                                <p>Common signs of infection include respiratory symptoms, fever, cough, shortness of breath and breathing difficulties. In more severe cases, infection can cause pneumonia, severe acute respiratory syndrome, kidney failure and even death.</p>
                                <h5>Steps that you need to know about</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="scroll-navone">
                                            <ul>
                                                <li class="current"><a href="#risk" class="nav-link">Who’s at increased risk?</a> </li>
                                                <li><a href="#symptoms" class="nav-link">Symptoms of coronavirus</a> </li>
                                                <li><a href="#protect" class="nav-link">How to protect yourself</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="scroll-nav">
                                            <ul>
                                                <li><a href="#spread" class="nav-link">How Virus Spread</a> </li>
                                                <li><a href="#faq" class="nav-link">Friquently Ask Questions</a> </li>
                                                <li><a href="#blog" class="nav-link">Worldwide Latest News</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-------------risk type_one---------->
        <section class="risk type_one" id="risk">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="risk_box">
                            <div class="heading icon_dark tp_two">
                                <h1>Who’s at increased risk?</h1>
                                <span class="flaticon-virus icon"></span>
                            </div>
                            <p>You’re at high risk for contracting SARS-CoV-2 if you come into contact with someone who’s carrying it, especially if you’ve been exposed to their saliva or been near them when they’ve coughed or sneezed.</p>
                            <h6>Without taking proper prevention measures, you’re also at high risk if you:</h6>
                            <ul>
                                <li>live with someone who has contracted the virus</li>
                                <li> are providing home care for someone who has contracted the virus</li>
                                <li> have an intimate partner who has contracted the virus</li>
                            </ul>
                            <p>COVID-19 can be diagnosed similarly to other conditions caused by viral infections</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="risk_box">
                            <p>Older people and people with certain health conditions have a higher risk for severe complications if they contract the virus. These health conditions include:</p>
                            <ul>
                                <li>lung conditions, such as COPD and asthma</li>
                                <li> certain heart conditions</li>
                                <li>immune system conditions, such as HIV</li>
                                <li> cancer that requires treatment</li>
                                <li> severe obesity</li>
                                <li>other health conditions, if not well-controlled, such as diabetes, kidney disease, or liver disease</li>
                            </ul>
                            <p> Pregnant women have a higher risk of complicationsTrusted Source from other viral infections, but it’s not yet known if this is the case for the 2019 coronavirus.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="risk_box_two">
                            <h2>Handwashing is key</h2>
                            <p><b>Washing your hands </b>and disinfecting surfaces can help decrease your risk for catching this and other viruses.
                                Wash your hands often with soap and water for at least 20 seconds especially after you have been in a public place, or after blowing your nose, coughing, or sneezing.
                                If soap and water are not readily available, use a hand sanitizer that contains at least 60% alcohol. Cover all surfaces of your hands and rub them together until they feel dry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------how virus spread---------->
        <section class="symptoms type_three" id="symptoms">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 padding_zero">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading icon_dark text-center tp_two">
                                    <h6>symptoms</h6>
                                    <h1>Watch for symptoms</h1>
                                    <span class="flaticon-virus icon"></span>
                                    <p>Reported illnesses have ranged from mild symptoms to severe illness and death for confirmed coronavirus disease 2019 .</p>
                                </div>
                            </div>
                        </div>
                        <!-- Swiper -->
                        <div class="swiper-container swiper-three">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="symptoms_box type_three wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <span class="flaticon-headache icon"></span>
                                        <div class="content_box">
                                            <h2>Headache </h2>
                                        </div>
                                        <i class="flaticon-virus icon_same"></i>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="symptoms_box type_three wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <span class="flaticon-sore-throat icon"></span>
                                        <div class="content_box">
                                            <h2>Sore Throat</h2>
                                        </div>
                                        <i class="flaticon-virus icon_same"></i>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="symptoms_box type_three wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <span class="flaticon-difficulty-breathing icon"></span>
                                        <div class="content_box">
                                            <h2>Shortness Of Breath</h2>
                                        </div>
                                        <i class="flaticon-virus icon_same"></i>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="symptoms_box type_three wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <span class="flaticon-diarrhea icon"></span>
                                        <div class="content_box">
                                            <h2>Diarrhea </h2>
                                        </div>
                                        <i class="flaticon-virus icon_same"></i>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="symptoms_box type_three">
                                        <span class="flaticon-fever icon"></span>
                                        <div class="content_box">
                                            <h2>Fever </h2>
                                        </div>
                                        <i class="flaticon-virus icon_same"></i>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="symptoms_box type_three">
                                        <span class="flaticon-sneeze icon"></span>
                                        <div class="content_box">
                                            <h2>Cough </h2>
                                        </div>
                                        <i class="flaticon-virus icon_same"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="image_box">
                            <div class="image">
                                <img src="{{asset('frontend/assets/image/resources/home-3-symptoms.png')}}" class="img-fluid" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------preventions---------->
        <section class="preventions type_three" id="protect">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading text-center icon_dark tp_two">
                            <h6>Prevention Coronavirus</h6>
                            <h1>How to protect yourself? </h1>
                            <span class="flaticon-virus icon"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_four wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="content_box">
                                <h2><a href="#">Wash your hands often with soap</a></h2>
                            </div>
                            <div class="icon">
                                <span class="flaticon-sneeze"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_four wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="content_box">
                                <h2><a href="#">Avoid touching your eyes, nose, and mouth</a></h2>
                            </div>
                            <div class="icon">
                                <span class="flaticon-vomit"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_four wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content_box">
                                <h2><a href="#">Stay home if you are sick,  get medical care</a></h2>
                            </div>
                            <div class="icon">
                                <span class="flaticon-stay-home"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_four wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="content_box">
                                <h2><a href="#">Avoid close contact with people who  sick</a></h2>
                            </div>
                            <div class="icon">
                                <span class="flaticon-sneeze-1"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------how virus spread---------->
        <section class="how_virus_spread type_two" id="spread">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading  text-center tp_two">
                            <h1>How Virus Spread</h1>
                            <span class="flaticon-virus icon"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 padding_zero">
                        <div class="owl-carousel three_items_noloop">
                            <div class="spreading_box type_two wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                                <span class="flaticon-cough icon"></span>
                                <div class="content_box">
                                    <h2>
                                        <a href="#">From Close Contact With an Infected Person</a>
                                    </h2>
                                    <p>Data from published epidemiology and virologic studies provide evidence that COVID-19 is primarily transmitted from symptomatic people to others who are in close contact through respiratory droplets, by direct contact with infected persons, or by contact with contaminated objects and surfaces.</p>
                                </div>
                            </div>
                            <div class="spreading_box type_two wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <span class="flaticon-distance icon"></span>
                                <div class="content_box">
                                    <h2>
                                        <a href="#">Droplets From Infected Person’s Cough or Sneeze</a>
                                    </h2>
                                    <p>Droplet Contact defines Some diseases can be transferred by infected droplets contacting surfaces of the eye, nose, or mouth. For example, large droplets that may be visible to the naked eye are generated when a person sneezes or coughs. These droplets typically spread only one to two metres and quickly fall to the ground. Influenza and SARS are two examples of diseases capable of being transmitted from droplet contact. Currently, health experts believe that coronavirus can also be transmitted in this way.</p>
                                </div>
                            </div>
                            <div class="spreading_box type_two wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <span class="flaticon-infected icon"></span>
                                <div class="content_box">
                                    <h2>
                                        <a href="#">Touching Objects That Have Cough or Sneeze Droplets</a>
                                    </h2>
                                    <p>Infected people might Sneeze or Cough on some object. The object carries the virus for couple of hours depending on the metarial structure of the object.That is how it helps the COVID virus to spread. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------faq---------->
        <section class="faq type_three" id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading  text-center  tp_two">
                            <h6>Faq's</h6>
                            <h1>Frequently Ask Questions</h1>
                            <span class="flaticon-virus icon"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div id="accordion">
                            <div class="card faq_box type_three">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="faq_btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Why is the disease being called coronavirus disease 2019, COVID-19?<span class="faq_no">01</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        On February 11, 2020 the World Health Organization announced an official name for the disease that is causing the 2019 novel coronavirus outbreak, first identified in Wuhan China. The new name of this disease is coronavirus disease 2019, abbreviated as
                                        COVID-19. In COVID-19, ‘CO’ stands for ‘corona,’ ‘VI’ for ‘virus,’ and ‘D’ for disease. Formerly, this disease was referred to as “2019 novel coronavirus” or “2019-nCoV”.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq_box type_three">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="faq_btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Can someone who has had COVID-19 spread the illness to others?<span class="faq_no">03</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Indeed, cases of COVID-19 among nursing home residents, choir groups
                                        and families fuel a growing concern about people who are infected, yet
                                        feel generally OK and go about their daily lives, giving the virus to friends,
                                        family members and strangers without knowing that they themselves have it.
                                        But there are wide gaps in our understanding of how many people fit this
                                        category of "silent spreaders" — as they're called by some public health
                                        researchers — and how much they contribute to transmission of the disease.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="accordiontwo">
                            <div class="card faq_box type_three">
                                <div class="card-header" id="headingtwoOne">
                                    <h5 class="mb-0">
                                        <button class="faq_btn collapsed" data-toggle="collapse" data-target="#collapsetwoOne" aria-expanded="true" aria-controls="collapsetwoOne">
                                            What are the possible complications from COVID-19? Diseases<span class="faq_no">02</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsetwoOne" class="collapse" aria-labelledby="headingtwoOne" data-parent="#accordiontwo">
                                    <div class="card-body">
                                        If you have COVID-19, the illness that comes from infection with the recently
                                        discovered coronavirus, your symptoms may be relatively mild and manageable at home.
                                        That’s true for most people. But if you’re older or have another illness such as diabetes or heart
                                        disease, you’re more at risk for the serious form of COVID-19.
                                        Some people -- about 1 in 6 -- will have complications, including some that are life-threatening.
                                        Many of these complications may be caused by a condition known as cytokine release syndrome or a cytokine storm. This is when an infection triggers your immune system to flood your bloodstream with inflammatory proteins called cytokines.
                                        They can kill tissue and damage your organs, including your lungs, heart, and kidneys.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq_box type_three">
                                <div class="card-header" id="headingtwoTwo">
                                    <h5 class="mb-0">
                                        <button class="faq_btn" data-toggle="collapse" data-target="#collapsetwoTwo" aria-expanded="false" aria-controls="collapsetwoTwo">
                                            What treatments are available?<span class="faq_no">04</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsetwoTwo" class="collapse show" aria-labelledby="headingtwoTwo" data-parent="#accordiontwo">
                                    <div class="card-body">
                                        There’s currently no treatment specifically approved for COVID-19, and no cure for an infection, although treatments and vaccines are currently under study. Instead, treatment focuses on managing symptoms as the virus runs its course.
                                        Seek immediate medical help if you think you have COVID-19. Your doctor will recommend treatment for any symptoms or complications that develop.
                                        Other coronaviruses like SARS and MERS are also treated by managing symptoms. In some cases, experimental treatments.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------blog---------->
        <section class="blog type_three" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading  text-center  tp_two">
                            <h6>Blog</h6>
                            <h1>Worldwide Latest News </h1>
                            <span class="flaticon-virus icon"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 padding_zero">
                        <div class=" owl-carousel three_items">
                            @foreach($blogs as $blog)
                                <div class="blog_box type_three wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                @if($blog->image)
                                <div class=" image_box">
                                    <img src="{{asset('uploads/'.$blog->image)}}" class="img-fluid" alt="img" />
                                    <div class="overlay">
                                        <a href="{{route('single-blog',$blog->slug)}}" data-fancybox="gallery" data-caption="">
                                            <span class="flaticon-video-camera"></span>
                                        </a>
                                    </div>
                                </div>
                                    @else
                                        <div class=" image_box">
                                            <img src="{{asset('uploads/no-image-available-icon.jpg')}}" class="img-fluid" alt="img" />
                                            <div class="overlay">
                                                <a href="{{route('single-blog',$blog->slug)}}" data-fancybox="gallery" data-caption="">
                                                    <span class="flaticon-video-camera"></span>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                <div class="content_box">
                                    <div class="upper_box">
                                        <ul>
                                            <li><a href="#" class="category">{{$blog->category->title}}</a></li>
                                            <li><a href="#" class="date"><span class="fa fa-clock-o"></span>{{$blog->created_at->diffForHumans()}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="lower_box">
                                        <h2><a href="{{route('single-blog',$blog->slug)}}">{{$blog->title}} </a></h2>
                                        <a href="{{route('single-blog',$blog->slug)}}" class="read_more tp_three">Read More<span class="flaticon-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
<a href="#" id="scroll" class="default-bg red" style="display: inline;"><span class="fa fa-angle-up"></span></a>
<!---------mbile-navbar----->
<div class="bsnav-mobile">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar">
        <button class="navbar-toggler toggler-spring mobile-toggler"><span class="fa fa-close"></span></button>
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
