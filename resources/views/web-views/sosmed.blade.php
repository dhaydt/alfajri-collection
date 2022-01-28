

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
        .main-row {
            background-image: url('assets/front-end/img/al-bg.jpg');
            height: 100vh;
        }
        .card {
            background-color: transparent;
            height: 80vh;
            overflow-y: scroll;
        }
        .card-title{
            font-size: 36px;
            color: #fff;
        }
        .wa-link {
            position: relative;
            border: 3px solid #fff;
            border-radius: 25px;
        }
        .sos img {
            height: 48px;
        }
        .wa-link span{
            position: absolute;
            width: 100%;
            text-align: center;
            font-size: 24px;
            color: #fff;
            font-weight: 900;
        }

        .card-subtitle {
            color: #fff;
            font-weight: 800;
        }
        .subtitle {
            font-size: 24px;
        }
    </style>
</head>

<body>

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="container py-0 py-sm-7">
        @php($e_commerce_logo=\App\Model\BusinessSetting::where(['type'=>'company_web_logo'])->first()->value)
        <div class="row main-row justify-content-center">
            <div class="col-md-5 pt-5">
                <a class="d-flex justify-content-center mb-5" href="javascript:">
                    <img class="z-index-2" src="{{asset("storage/company/".$e_commerce_logo)}}" alt="Logo"
                         onerror="this.src='{{asset('assets/back-end/img/400x400/img2.jpg')}}'"
                         style="width: 8rem;">
                </a>
                <div class="card pb-5">
                    <div class="card-body">
                      <h5 class="card-title text-center">Contact Us</h5>
                      <h6 class="card-subtitle mb-2 text-center mt-2">Alfajri Official</h6>
                      <div class="row flex-column">
                        <a href="https://api.whatsapp.com/send?phone=6282124714356" target="_blank" class="btn btn-outline-secondary mt-4 d-flex justify-content-start wa-link">
                            <img src="{{ asset('assets/front-end/img/WhatsApp.png') }}" alt="wa">
                            <span class="mx-auto">Admin 1</span>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=6281283966436" target="_blank" class="btn btn-outline-secondary mt-4 d-flex justify-content-start wa-link">
                            <img src="{{ asset('assets/front-end/img/WhatsApp.png') }}" alt="wa">
                            <span class="mx-auto">Admin 2</span>
                        </a>
                      </div>
                      <h5 class="card-subtitle mb-2 subtitle text-center mt-8">Official Social Media</h5>
                      <div class="row flex-column">
                        <a href="https://www.tiktok.com/@alfajri_official01"  target="_blank" class="btn btn-outline-secondary mt-4 d-flex justify-content-start wa-link sos">
                            <img src="{{ asset('assets/front-end/img/tiktok.png') }}" alt="wa">
                            <span class="mx-auto">Tiktok Official</span>
                        </a>
                        <a href="https://www.instagram.com/alfajri_official01/" target="_blank" class="btn btn-outline-secondary mt-4 d-flex justify-content-start wa-link sos">
                            <img src="{{ asset('assets/front-end/img/ig.png') }}" alt="wa">
                            <span class="mx-auto">Instagram Official</span>
                        </a>
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

<!-- JS Plugins Init. -->
<script>
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

