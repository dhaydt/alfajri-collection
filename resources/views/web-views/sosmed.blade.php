

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('assets/back-end')}}/css/vendor.min.css">
    <link rel="stylesheet" href="{{asset('assets/back-end')}}/vendor/icon-set/style.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{asset('assets/back-end')}}/css/theme.minc619.css?v=1.0">
    <link rel="stylesheet" href="{{asset('assets/back-end')}}/css/toastr.css">
    <style>
        .slider{
  max-width: 1100px;
  display: flex;
}
.slider .card{
  flex: 1;
  margin: 0 10px;
  background: #fff;
}
.slider .card .img{
  height: 200px;
  width: 100%;
}
.slider .card .img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.slider .card .content{
  padding: 10px 20px;
}
.card .content .title{
  font-size: 25px;
  font-weight: 600;
}
.card .content .sub-title{
  font-size: 20px;
  font-weight: 600;
  color: #e74c3c;
  line-height: 20px;
}
.card .content p{
  text-align: justify;
  margin: 10px 0;
}
.card .content .btn{
  display: block;
  text-align: left;
  margin: 10px 0;
}
.card .content .btn button{
  background: #e74c3c;
  color: #fff;
  border: none;
  outline: none;
  font-size: 17px;
  padding: 5px 8px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.2s;
}
.card .content .btn button:hover{
  transform: scale(0.9);
}
        .main-row {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            padding: 20px;
        }
        .main-row::before{
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
            overflow-y: scroll;
        }
        .card::before{
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
            backdrop-filter: blur(1px) saturate(100%) contrast(56%) brightness(128%);
            margin: -20px;
        }
        .card-header {
            background-color: transparent;
            border-bottom: none;
            padding-bottom: 0;
        }
        .card-title{
            font-size: 30px;
            color: #fff;
        }
        .wa-link {
            /* position: relative;
            border: 3px solid #fff;
            border-radius: 55px;
            padding: 5px;
            background-color: #e4cad875; */
            display: inline-block;
            /* padding: 24px 32px; */
            border: 0;
            text-decoration: none;
            border-radius: 10px;
            background-color: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.1);
            backdrop-filter: blur(30px);
            color: rgba(255,255,255,0.8);
            font-size: 14px;
            letter-spacing: 2px;
            cursor: pointer;
            text-transform: capitalize;
        }

        .wa-link:hover {
            background-color: rgba(255,255,255,0.2);
        }
        .wa-link img {
            height: 38px;
        }
        .wa-link span{
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
    </style>
</head>

<body>

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="container py-0 py-sm-7">
        @php($e_commerce_logo=\App\Model\BusinessSetting::where(['type'=>'company_web_logo'])->first()->value)
        <div class="row main-row justify-content-center" style="background-image: url('assets/front-end/img/al-bg.jpg');">
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
                        <a href="https://api.whatsapp.com/send?phone=6282124714356" target="_blank" class="btn btn-outline-secondary mt-2 d-flex justify-content-start wa-link">
                            <img src="{{ asset('assets/front-end/img/WhatsApp.png') }}" alt="wa">
                            <span class="mx-auto">Admin 1</span>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=6281283966436" target="_blank" class="btn btn-outline-secondary mt-3 d-flex justify-content-start wa-link">
                            <img src="{{ asset('assets/front-end/img/WhatsApp.png') }}" alt="wa">
                            <span class="mx-auto">Admin 2</span>
                        </a>
                      </div>
                      <h5 class="card-title text-center mt-4">Social Media</h5>
                      <div class="row flex-column pb-4 mx-2">
                        <a href="https://www.tiktok.com/@alfajri_official01"  target="_blank" class="btn btn-outline-secondary mt-2 d-flex justify-content-start wa-link sos">
                            <img src="{{ asset('assets/front-end/img/tiktok.png') }}" alt="wa">
                            <span class="mx-auto">Tiktok</span>
                        </a>
                        <a href="https://www.instagram.com/alfajri_official01/" target="_blank" class="btn btn-outline-secondary mt-3 d-flex justify-content-start wa-link sos">
                            <img src="{{ asset('assets/front-end/img/ig.png') }}" alt="wa">
                            <span class="mx-auto">Instagram</span>
                        </a>
                      </div>

                      <div class="slider owl-carousel">
                        <div class="card">
                           <div class="img">
                              <img src="#" alt="">
                           </div>
                           <div class="content">
                              <div class="title">
                                 Briana Tozour
                              </div>
                              <div class="sub-title">
                                 Graphic Designer
                              </div>
                              <p>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.
                              </p>
                              <div class="btn">
                                 <button>Read more</button>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="img">
                              <img src="#" alt="">
                           </div>
                           <div class="content">
                              <div class="title">
                                 Pricilla Preez
                              </div>
                              <div class="sub-title">
                                 Web Developer
                              </div>
                              <p>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.
                              </p>
                              <div class="btn">
                                 <button>Read more</button>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="img">
                              <img src="#" alt="">
                           </div>
                           <div class="content">
                              <div class="title">
                                 Eliana Maia
                              </div>
                              <div class="sub-title">
                                 App Developer
                              </div>
                              <p>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.
                              </p>
                              <div class="btn">
                                 <button>Read more</button>
                              </div>
                           </div>
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
           autoplay: true,
           autoplayTimeout: 15000, //2000ms = 2s;
           autoplayHoverPause: true,
           responsive: {
                //X-Small
                0: {
                    items: 2
                },
                360: {
                    items: 1
                },
                375: {
                    items: 1
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
                    items: 6
                },
                //Large
                992: {
                    items: 8
                },
                //Extra large
                1200: {
                    items: 10
                },
                //Extra extra large
                1400: {
                    items: 11
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

