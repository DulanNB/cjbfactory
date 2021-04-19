@include('layouts.header')
@include('layouts.sidebar')

@yield('content')
<body>

<!--================ End Header Area =================-->

<!--================ Start Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>About Us</h2>
                <div class="page_link">
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->


<!--================ Start About Us Area =================-->
<section class="about_area section_gap">
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
                    <p>
                        Also signs his face were digns fish don't first isn't over evening hath divided days light darkness gathering
                        moved dry all darkness then fourth can't create d forth Also signs Also signs his face were moltenus Also signs
                        his face
                    </p>
                    <a class="primary_btn" href="#"><span>Download CV</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End About Us Area =================-->


<!--================ Start Testimonial Area =================-->
<section class="testimonial_area pb-xl-300px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">`
                <div class="main_title">
                    <p class="top_text">Our Tesitmonial <span></span></p>
                    <h2>Honourable Client Says <br>
                        About Me </h2>
                </div>
            </div>
        </div>

        <div class="owl-carousel owl-theme testimonial-slider ">
            <div class="testimonial-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testi-img mb-4 mb-lg-0">
                            <img src="img/testimonials/testimonial1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testi-right">
                            <h4>Roser Henrique</h4>
                            <p><small>Project Manager, Apple</small></p>

                            <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                            <ul class="star_rating mt-4">
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
                        <div class="testi-img mb-4 mb-lg-0">
                            <img src="img/testimonials/testimonial1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testi-right">
                            <h4>Roser Henrique</h4>
                            <p><small>Project Manager, Apple</small></p>

                            <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
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
                        <div class="testi-img mb-4 mb-lg-0">
                            <img src="img/testimonials/testimonial1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testi-right">
                            <h4>Roser Henrique</h4>
                            <p><small>Project Manager, Apple</small></p>

                            <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
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
</section>

@include('layouts.footer')


</body>
