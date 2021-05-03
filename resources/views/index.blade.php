@include('layouts.header')

@yield('content')

<style>

    body::-webkit-scrollbar {
        display: none;
    }
    body {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
    .overlay {
        opacity: 0.1;
    }

    .header_area {
        background: #918989;
    }

    .navbar .nav .nav-item .nav-link {
        color: #ffffff;
        font-family: Montserrat;
        font-size: 17px;
        font-weight: 1000;
    }

    .navbar .nav .nav-item:hover .nav-link, .navbar .nav .nav-item.active .nav-link {
        color: #090404;
    }

    #navbar1 {
        background: #5f3a27;
    }

    .about_area {
        background: #a5856e;
    }

    .testimonial_area {
        background: #a5856e;
    }

    .portfolio_area {
        background: #a5856e;
    }

    .testimonial-slider p {
        color: #331202;
        font-size: 17px;
    }

    .testimonial-slider .owl-dots .owl-dot span {
        background: #000000;
    }

    .testimonial-slider .owl-dots .owl-dot.active span {
        background: #ffffff;
    }

    p {
        font-family: Montserrat;
        color: #331202;
    }

    h2, h1, h5, h4 {
        font-family: Montserrat;
        color: #652405;
    }

    .portfolio_area .filters ul li {
        font-family: Montserrat;
        font-weight: 1000;
        font-size: 14px;
    }

    .primary_btn {
        background: #532408;
    }

    .testimonial-slider .owl-item img {
        width: 600px;
        height: 600px;
        margin-left: -110px;
        margin-top: -83px;
        border-radius: 0;
        box-shadow: 0px 0px 0px 0px rgb(5 54 77 / 20%);
    }

    @media (max-width: 575px) {
        .testimonial-slider .owl-item img {
            width: 420px;
            height: 420px;
            margin-left: -76px;
            margin-top: -83px;
            border-radius: 0;
            box-shadow: 0px 0px 0px 0px rgb(5 54 77 / 20%);
        }
    }


     #loader {
         border: 16px solid #f3f3f3; /* Light grey */
         border-top: 16px solid #3498db; /* Blue */
         border-radius: 50%;
         width: 120px;
         height: 120px;
         animation: spin 2s linear infinite;
     }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .hide-loader{
        display:none;
    }


</style>
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar1">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="img/logo.png" alt=""
                                                                      style="margin-left:  -23px; width: 225px; height: 70px"></a>
                <a class="navbar-brand logo_inner_page" href="/"><img src="img/logo2.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>

                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<body>

<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="banner_content">
{{--                        <h3>Hey There !</h3>--}}
{{--                        <h1 class="text-uppercase" style="font-weight: bold">I am Chandana</h1>--}}
{{--                        <h5 class="text-uppercase">Freelance Designer and Illustrator</h5>--}}
{{--                        <div class="social_icons my-5">--}}
{{--                            <a href="#"><i class="ti-twitter"></i></a>--}}
{{--                            <a href="#"><i class="ti-skype"></i></a>--}}
{{--                            <a href="#"><i class="ti-instagram"></i></a>--}}
{{--                            <a href="#"><i class="ti-dribbble"></i></a>--}}
{{--                            <a href="#"><i class="ti-vimeo"></i></a>--}}
{{--                        </div>--}}
{{--                        <button class="primary_btn" href="#"--}}
{{--                                onclick="smoothScroll(document.getElementById('portfolio'))"><span--}}
{{--                                style="font-family: Montserrat;">See My Work</span></button>--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="home_right_img">
                        <img class="img-fluid" src="img/banner/home-right.png" alt="" style="visibility: hidden">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_area section_gap" style="margin-top: -77px;">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-5">
                <div class="about_img">
                    <img class="" src="img/about-us.png" alt="">
                </div>
            </div>

            <div class="offset-lg-1 col-lg-5">
                <div class="main_title text-left">
                    <p class="top_text">About me <span></span></p>
                    <h2>
                        Creative Art Director <br>
                        And Designer
                    </h2>
                    <p style="font-size: 17px">
                        Also signs his face were digns fish don't first isn't over evening hath divided days light
                        darkness gathering
                        moved dry all darkness then fourth can't create d forth Also signs Also signs his face were
                        moltenus Also signs
                        his face
                    </p>
                    <a class="primary_btn" href="/contact"><span style="font-family: Montserrat;">Contact Me</span></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonial_area" id="testimonial_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title">
                    <p class="top_text">My Tesitmonials <span></span></p>
                    <h2>FEATURED GRAPHIC DESIGN PROJECTS <br>
                         About me</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="owl-carousel owl-theme testimonial-slider ">
                <div class="testimonial-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <img id="my-img" src="img/testimonials/zuumte_dark.png" alt=""
                                    onmouseover="hover_sample1(this);" onmouseout="unhover_sample1(this);" style="cursor: -webkit-grab; cursor: grab;">
                        </div>
                        <script>
                            function hover_sample1(element) {
                                element.setAttribute('src', 'img/testimonials/zuumte.png');
                            }
                            function unhover_sample1(element) {
                                element.setAttribute('src', 'img/testimonials/zuumte_dark.png');
                            }
                        </script>
                        <div class="col-lg-6">
                            <div class="testi-right">
                                <a href="https://www.fiverr.com/emotoon/create-a-emoji-based-cartoon-character-of-you?context_referrer=user_page&ref_ctx_id=868c225603629559773b7d4ea289ef3b&pckg_id=1&pos=1" target="_blank">
                                    <h4>zuumte</h4></a>
                                <a href="https://www.fiverr.com/emotoon/create-a-emoji-based-cartoon-character-of-you?context_referrer=user_page&ref_ctx_id=868c225603629559773b7d4ea289ef3b&pckg_id=1&pos=1" target="_blank">
                                    <p><small>Client From Fiverr</small></p></a>

                                <p>Delivered on time and did it flawlessly! Chandana exceeded my expectations and what I
                                    even imagined in my head! Thank you so much! Would definitely recommend and would
                                    totally work with them again!! </p>
                                <ul class="star_rating mt-5">
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-6">
                                <img id="my-img" src="img/testimonials/zuumte_dark.png" alt="" onmouseover="hover_sample2(this);"
                                     onmouseout="unhover_sample2(this);" style="cursor: -webkit-grab; cursor: grab;">
                            </div>
                        </div>
                        <script>
                            function hover_sample2(element) {
                                element.setAttribute('src', 'img/testimonials/zuumte.png');
                            }
                            function unhover_sample2(element) {
                                element.setAttribute('src', 'img/testimonials/zuumte_dark.png');
                            }

                        </script>
                        <div class="col-lg-6">
                            <div class="testi-right">
                                <h4>Roser Henrique</h4>
                                <p><small>Project Manager, Apple</small></p>

                                <p>Waters can not replenish hath fly and be to brought isn't very days behold without
                                    land
                                    every above lights us fruitful wherein divide it him fowl moving may beginning
                                    subdue
                                    fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                                <ul class="star_rating mt-3">
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li class="disable"><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-6">
                                <img id="my-img" src="img/testimonials/zuumte.png" onmouseover="hover_sample3(this);"
                                     onmouseout="unhover_sample3(this);">
                            </div>
                        </div>
                        <script>
                            function hover_sample3(element) {
                                element.setAttribute('src', 'img/testimonials/zuumte.png');
                            }
                            function unhover_sample3(element) {
                                element.setAttribute('src', 'img/testimonials/zuumte_dark.png');
                            }

                        </script>
                        <div class="col-lg-6">
                            <div class="testi-right">
                                <h4>Roser Henrique</h4>
                                <p><small>Project Manager, Apple</small></p>

                                <p>Waters can not replenish hath fly and be to brought isn't very days behold without
                                    land
                                    every above lights us fruitful wherein divide it him fowl moving may beginning
                                    subdue
                                    fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                                <ul class="star_rating mt-3">
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li class="disable"><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Testimonial Area =================-->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <span  id="loader"class="fa fa-spinner fa-spin fa-3x"></span>
                <img id = "mainwork" class="img-fluid" src="" alt="" style="visibility: hidden">
            </div>
        </div>
    </div>
</div>


<!--================ Start Portfolio Area =================-->
<section class="portfolio_area" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title">
                    <p class="top_text">My Portfolio <span></span></p>
                    <h2>Check My Recent <br>
                        Client Work </h2>
                </div>
            </div>
        </div>



        <div class="filters-content">
            <div class="container">
                <div class="row portfolio-grid">
                    <div class="grid-sizer col-6 col-md-6 col-lg-3"></div>
                        <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                            <div class="single_portfolio">
                                <a href="" onclick="load(id='01')" data-toggle="modal" data-target="#exampleModalCenter">
                                <img class="img-fluid w-100" src="img/portfolio/01.jpg"
                                     style="padding-left: 0px; padding-right: 0px" alt="">
                                </a>
                            </div>
                        </div>



                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/02.jpg"
                                 style="padding-left: 0px; padding-right: 0px" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/03.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/04.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/05.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/06.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/07.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/08.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/09.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/10.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/11.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>

                    <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/12.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>
                    </a>

                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/13.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/14.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/portfolio/15.jpg" style="padding: 0px;" alt="">
                        </div>
                    </div>

                    <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="col-lg-3 col-md-6 col-6 all latest popular upcoming" style="padding: 0px">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="img/portfolio/16.jpg" style="padding: 0px;" alt="">
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>



<script>

    function load(id)
        {
            document.getElementById('loader').style.display='display'
        var mainwork = document.getElementById('mainwork')
        mainwork.src = "img/portfolio/works/"+id+".jpg";
        mainwork.style.visibility='visible'
            document.getElementById('loader').style.display='none'


        }

    window.smoothScroll = function (target) {
        var scrollContainer = target;
        do { //find scroll container
            scrollContainer = scrollContainer.parentNode;
            if (!scrollContainer) return;
            scrollContainer.scrollTop += 1;
        } while (scrollContainer.scrollTop == 0);

        var targetY = 0;
        do { //find the top of target relatively to the container
            if (target == scrollContainer) break;
            targetY += target.offsetTop;
        } while (target = target.offsetParent);

        scroll = function (c, a, b, i) {
            i++;
            if (i > 30) return;
            c.scrollTop = a + (b - a) / 30 * i;
            setTimeout(function () {
                scroll(c, a, b, i);
            }, 10);
        }
        // start scrolling
        scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
    }
</script>

@include('layouts.footer')


</body>

