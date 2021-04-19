@include('layouts.header')
@include('layouts.sidebar')

@yield('content')
<body>

<style>
    .banner_area .banner_inner .banner_content h2 {
        font-size: 38px;
    }

</style>


<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Contact me Via <a href="https://www.fiverr.com/emotoon" style="color:black" target="_blank">Fiverr.</a></h2>
                <div class="page_link">
                    <a href="/">Home</a>
                    <a href="/contact">Contact</a>
                    <a href="https://www.fiverr.com/emotoon" style="color:black" target="_blank">Fiverr</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->

<!-- ================ contact section start ================= -->
<section class="section-margin">
    <div class="container">

        <div class="row">
            @if (session('error'))
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                </div>
            @endif
            @if (session('success'))
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="alert alert-success" style="margin-top:10px">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8 mb-4 mb-lg-0">
                <form name="contactForm" method="post" class="form-contact contact_form" id="contactForm"  action="{{route('contact.store')}}">
                    @csrf
                    <fieldset>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"
                                          minlength="2"  aria-required="true" required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name" minlength="2"  aria-required="true" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address" minlength="2"  aria-required="true" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject" minlength="2"  aria-required="true" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-lg-3">
                        <button type="submit" class="primary_btn button-contactForm">Send Message</button>
                    </div>
                    </fieldset>
                </form>



            </div>



            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Buttonwood, California.</h3>
                        <p>Rosemead, CA 91770</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')

{{--<script>--}}
{{--    $(document).ready(function(){--}}

{{--        (function($) {--}}
{{--            "use strict";--}}

{{--            jQuery.validator.addMethod('answercheck', function (value, element) {--}}
{{--                return this.optional(element) || /^\bcat\b$/.test(value)--}}
{{--            }, "type the correct answer -_-");--}}

{{--            // validate contactForm form--}}
{{--            $(function() {--}}
{{--                $('#contactForm').validate({--}}
{{--                    rules: {--}}
{{--                        name: {--}}
{{--                            required: true,--}}
{{--                            minlength: 2--}}
{{--                        },--}}
{{--                        subject: {--}}
{{--                            required: true,--}}
{{--                            minlength: 4--}}
{{--                        },--}}
{{--                        number: {--}}
{{--                            required: true,--}}
{{--                            minlength: 5--}}
{{--                        },--}}
{{--                        email: {--}}
{{--                            required: true,--}}
{{--                            email: true--}}
{{--                        },--}}
{{--                        message: {--}}
{{--                            required: true,--}}
{{--                            minlength: 20--}}
{{--                        }--}}
{{--                    },--}}
{{--                    messages: {--}}
{{--                        name: {--}}
{{--                            required: "come on, you have a name, don't you?",--}}
{{--                            minlength: "your name must consist of at least 2 characters"--}}
{{--                        },--}}
{{--                        subject: {--}}
{{--                            required: "come on, you have a subject, don't you?",--}}
{{--                            minlength: "your subject must consist of at least 4 characters"--}}
{{--                        },--}}
{{--                        number: {--}}
{{--                            required: "come on, you have a number, don't you?",--}}
{{--                            minlength: "your Number must consist of at least 5 characters"--}}
{{--                        },--}}
{{--                        email: {--}}
{{--                            required: "no email, no message"--}}
{{--                        },--}}
{{--                        message: {--}}
{{--                            required: "um...yea, you have to write something to send this form.",--}}
{{--                            minlength: "thats all? really?"--}}
{{--                        }--}}
{{--                    },--}}
{{--                    submitHandler: function(form) {--}}

{{--                        console.log('name');--}}
{{--                        $.ajax({--}}
{{--                            type:"POST",--}}
{{--                            //data: $(form).serialize(),--}}
{{--                            data: {--}}
{{--                                "_token": "{{ csrf_token() }}",--}}
{{--                                message: message,--}}
{{--                                name: name,--}}
{{--                                email: email,--}}

{{--                            },--}}
{{--                            url: "/message",--}}

{{--                            success: function() {--}}
{{--                                $('#contactForm :input').attr('disabled', 'disabled');--}}
{{--                                $('#contactForm').fadeTo( "slow", 1, function() {--}}
{{--                                    $(this).find(':input').attr('disabled', 'disabled');--}}
{{--                                    $(this).find('label').css('cursor','default');--}}
{{--                                    $('#success').fadeIn()--}}
{{--                                    $('.modal').modal('hide');--}}
{{--                                    $('#success').modal('show');--}}
{{--                                })--}}
{{--                            },--}}
{{--                            error: function() {--}}
{{--                                $('#contactForm').fadeTo( "slow", 1, function() {--}}
{{--                                    $('#error').fadeIn()--}}
{{--                                    $('.modal').modal('hide');--}}
{{--                                    $('#error').modal('show');--}}
{{--                                })--}}
{{--                            }--}}
{{--                        })--}}
{{--                    }--}}
{{--                })--}}
{{--            })--}}

{{--        })(jQuery)--}}
{{--    })--}}
{{--</script>--}}

</body>
