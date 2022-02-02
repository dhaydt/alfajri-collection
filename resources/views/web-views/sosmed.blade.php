<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>{{\App\CPU\translate('Alfajri | Social Contact')}}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Carousel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('assets/back-end')}}/css/vendor.min.css">
    <link rel="stylesheet" href="{{asset('assets/back-end')}}/vendor/icon-set/style.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{asset('assets/back-end')}}/css/theme.minc619.css?v=1.0">
    <link rel="stylesheet" href="{{asset('assets/back-end')}}/css/toastr.css">
    <style>
        .slider {
            max-width: 1100px;
            display: flex;
        }

        .slider .cards {
            margin: 0 10px;
            height: 100%;
            background: inherit;
        }

        .slider .cards .img {
            height: 100%;
            width: 100%;
        }

        .slider .cards .img img {
            width: 100%;
            border-radius: 15px;
        }

        .owl-carousel .owl-stage-outer {
            margin-bottom: 20px;
        }

        .owl-carousel .owl-stage-outer .owl-item {
            height: 380px;
        }

        .main-row {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            padding: 20px;
        }

        .main-row::before {
            content: "";
            position: fixed;
            background-color: #00000026;
            z-index: -1;
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
        }

        .card {
            /* background-color: transparent;
            height: 100vh;
            overflow-y: scroll; */
            box-shadow: 0 0 1rem 0 rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            position: relative;
            z-index: 1;
            height: 93vh;
            background: inherit;
            overflow-x: hidden;
            overflow-y: scroll;
        }

        .card::before {
            content: "";
            position: fixed;
            background: inherit;
            z-index: -1;
            top: 40px;
            left: 40px;
            right: 40px;
            border-radius: 10px;
            bottom: 7vh;
            box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
            /* backdrop-filter: blur(1px) saturate(100%) contrast(56%) brightness(128%); */
            margin: -20px;
        }

        .card-header {
            background-color: transparent;
            border-bottom: none;
            padding-bottom: 0;
        }

        .card-title {
            font-size: 30px;
            color: #fff;
        }

        .wa-link {
            display: inline-block;
            border: 0;
            text-decoration: none;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            letter-spacing: 2px;
            cursor: pointer;
            text-transform: capitalize;
            box-shadow: 3px 3px 10px -2px rgba(0, 0, 0, 0.93);
            -webkit-box-shadow: 3px 3px 10px -2px rgba(0, 0, 0, 0.93);
            -moz-box-shadow: 3px 3px 10px -2px rgba(0, 0, 0, 0.93);
        }

        .wa-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .wa-link img {
            height: 38px;
        }

        .wa-link span {
            position: absolute;
            width: 100%;
            text-align: center;
            font-size: 22px;
            color: #fff;
            font-weight: 900;
        }

        .card-subtitle {
            color: #fff;
            font-weight: 800;
        }

        .carousel-sosmed {
            position: absolute;
            left: 0;
        }
    </style>
</head>

<body>

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="container py-0 py-sm-7">
            @php($e_commerce_logo=\App\Model\BusinessSetting::where(['type'=>'company_web_logo'])->first()->value)
            <div class="row main-row justify-content-center"
                style="background-image: url('assets/front-end/img/al-bg.jpg');">
                <div class="col-md-5 col-12">
                    <div class="card pb-5">
                        <div class="card-header d-flex justify-content-center">
                            <a class="d-flex justify-content-center mb-5" href="{{ route('home') }}">
                                <img class="z-index-2" src="{{asset("storage/company/".$e_commerce_logo)}}" alt="Logo"
                                    onerror="this.src='{{asset('assets/back-end/img/400x400/img2.jpg')}}'"
                                    style="width: 8rem;">
                            </a>
                        </div>
                        <div class="card-body pt-0">
                            <h5 class="card-title text-center">Contact Us</h5>
                            <div class="row flex-column mx-2">
                                @if (count($wa) > 0)
                                @foreach ($wa as $w)
                                <a href="https://api.whatsapp.com/send?phone={{ $w->link }}" target="_blank"
                                    class="btn btn-outline-secondary mt-2 d-flex justify-content-start wa-link">
                                    <img src="{{ asset('assets/front-end/img/WhatsApp.png') }}" alt="wa">
                                    <span class="mx-auto">{{ $w->name }}</span>
                                </a>
                                @endforeach
                                @endif
                            </div>
                            <h5 class="card-title text-center mt-4">Social Media</h5>
                            <div class="row flex-column pb-4 mx-2">
                                @if (count($sosmed) > 0)
                                @foreach ($sosmed as $w)
                                <a href="{{ $w->link }}" target="_blank"
                                    class="btn btn-outline-secondary mt-2 d-flex justify-content-start wa-link sos">
                                    <img src="{{asset('storage/linktree')}}/{{$w->logo}}" alt="wa">
                                    <span class="mx-auto">{{ $w->name }}</span>
                                </a>
                                @endforeach
                                @endif
                            </div>
                            <div class="carousel-sosmed">
                                <div class="slider owl-carousel">
                                    @if (count($product) > 0)
                                        @foreach ($product as $p)
                                        <div class="cards">
                                            <div class="img">
                                                <img src="{{ asset('storage/linktree') }}/{{ $p->image }}" alt="">
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->


    <!-- JS Implementing Plugins -->
    <script src="{{asset('assets/back-end')}}/js/vendor.min.js"></script>

    <!-- JS Front -->
    <script src="{{asset('assets/back-end')}}/js/theme.min.js"></script>
    <script src="{{asset('assets/back-end')}}/js/toastr.js"></script>
    {!! Toastr::message() !!}

    @if ($errors->any())
    <script>
        @foreach($errors->all() as $error)
        toastr.error('{{$error}}', Error, {
            CloseButton: true,
            ProgressBar: true
        });
        @endforeach
    </script>
    @endif
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- JS Plugins Init. -->
    <script>
        $(".slider").owlCarousel({
           loop: true,
           autoplay: false,
           autoplayTimeout: 15000, //2000ms = 2s;
           autoplayHoverPause: true,
           responsive: {
                //X-Small
                0: {
                    items: 1.5
                },
                360: {
                    items: 1
                },
                375: {
                    items: 1.5
                },
                540: {
                    items: 2
                },
                //Small
                576: {
                    items: 2
                },
                //Medium
                768: {
                    items: 2
                },
                //Large
                992: {
                    items: 2
                },
                //Extra large
                1200: {
                    items: 2
                },
                //Extra extra large
                1400: {
                    items: 2
                }
            }
         });

    $(document).on('ready', function () {
        // INITIALIZATION OF SHOW PASSWORD
        // =======================================================
        $('.js-toggle-password').each(function () {
            new HSTogglePassword(this).init()
        });

        // INITIALIZATION OF FORM VALIDATION
        // =======================================================
        $('.js-validate').each(function () {
            $.HSCore.components.HSValidation.init($(this));
        });
    });
    </script>

    @if(env('APP_MODE')=='demo')
    <script>
        function copy_cred() {
            $('#signinSrEmail').val('admin@admin.com');
            $('#signupSrPassword').val('12345678');
            toastr.success('Copied successfully!', 'Success!', {
                CloseButton: true,
                ProgressBar: true
            });
        }
    </script>
    @endif

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="{{asset('assets/admin')}}/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
</body>

</html>
