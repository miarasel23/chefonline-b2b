@extends('frontend.layouts.main')

@if(url()->current() == 'https://www.chefonline.com/epos/contact' )
@section('title', 'Contact Us For EPos Services Support | ChefOnline Epos')
@section('description', 'Contact ChefOnline for professional EPoS service support.Get expert guidance, competitive pricing,  setup solutions for your restaurant | Get in Touch Today')
@endif

@if(url()->current() == 'https://www.chefonline.com/epos/contact/annual-pos-software-license-&-support' )
@section('title', 'Contact Us For Annual EPOS Software Licence | ChefOnline EPOS')
@section('description', 'Contact ChefOnline for reliable EPoS service support. Get clear advice, transparent pricing, setup assistance designed for your restaurant | Speak to Our Team')
@endif

@if(url()->current() == 'https://www.chefonline.com/epos/contact/modem' )
@section('title', 'Contact Us For EPOS Modem Support | ChefOnline EPOS')
@section('description', 'Contact ChefOnline for trusted EPoS support. Get practical advice, transparent pricing, and tailored setup guidance for your restaurant.')
@endif

@if(url()->current() == 'https://www.chefonline.com/epos/contact/electronic-cash-draw' )
@section('title', 'Contact Us For Electronic Cash Drawer | ChefOnline EPOS')
@section('description', 'Contact ChefOnline for dedicated EPoS support. Get expert advice, clear pricing, and tailored setup solutions built around your restaurant’s needs.')
@endif

@if(url()->current() == 'https://www.chefonline.com/epos/contact/post-code-data-base-license' )
@section('title', 'Contact Us For Postcode Database Licence | ChefOnline EPOS')
@section('description', 'Get in touch with ChefOnline for professional EPoS support. Clear guidance, competitive pricing, and tailored setup for your restaurant.')
@endif

@if(url()->current() == 'https://www.chefonline.com/epos/contact/tab-software-license' )
@section('title', 'Contact Us For TAB Software Licence | ChefOnline EPOS')
@section('description', 'Speak to ChefOnline for dependable EPoS support. Get clear advice, transparent pricing, and tailored setup solutions for your restaurant.')
@endif

@if(url()->current() == 'https://www.chefonline.com/epos/contact/thermal-receipt-printer' )
@section('title', 'Contact Us For Thermal Receipt Printer | ChefOnline EPOS')
@section('description', 'Contact ChefOnline for professional EPoS support and service guidance. Clear advice, fair pricing, and tailored setup for your restaurant.')
@endif



@section('canonical', url()->current())
@section('content')

    <?php
    if (isset($_GET['name'])) {
        $productName = $_GET['name'];
    } else {
        $productName = '';
    }
    
    echo $productName;
    ?>

    <body class="information-contact layout-1">
        @include('frontend.layouts.menu')

        <div class="content_headercms_top"></div>
        <div class="content-top-breadcum">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="title-content">

                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- ======= Quick view JS ========= -->
        <script>
            function quickbox() {
                if ($(window).width() > 767) {
                    $('.quickview-button').magnificPopup({
                        type: 'iframe',
                        delegate: 'a',
                        preloader: true,
                        tLoading: 'Loading image #%curr%...',
                    });
                }
            }
            jQuery(document).ready(function() {
                quickbox();
            });
            jQuery(window).resize(function() {
                quickbox();
            });
        </script>
        <div class="container">
            <div class="row">
                <div class="">
                    <div id="content" class="hide">
                        <h1 class="page-title">Contact Us</h1>
                    </div>
                    <h3></h3>
                    <div class="contact-info">
                        <div class="col-md-10 col-md-offset-1">

                            <div class="">
                                {{ Session::get('message') }}
                            </div>

                            <form action="{{ route('contact.sendEmail') }}" method="post" enctype="multipart/form-data"
                                class="form-horizontal" onsubmit="return validateForm()">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" name="name" value="{{ old('name') }}" id="input-name"
                                                class="form-control" placeholder="Your Name" @error('name')  @enderror />
                                            @error('name')
                                                <p class="text-danger text-xs italic">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="email" value="{{ old('email') }}"
                                                id="input-email" class="form-control" placeholder="Your Email"
                                                @error('email')  @enderror />
                                            @error('email')
                                                <p class="text-danger text-xs italic">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class="form-select form-control @error('product') is-invalid @enderror"
                                                aria-label="Default select example" name="product" style="color: #999999;">

                                                @if (!empty($filterProducts['name']))
                                                    <option value="{{ $filterProducts['name'] }}" selected>
                                                        {{ $filterProducts['name'] }}
                                                    </option>
                                                @else
                                                    <option value="" selected disabled>Choose the product</option>
                                                @endif

                                                @foreach ($allProducts as $product)
                                                    <option value="{{ $product['name'] }}">{{ $product['name'] }}</option>
                                                @endforeach
                                            </select>

                                            @error('product')
                                                <div class="text-danger text-xs italic">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="business" value="{{ old('business') }}"
                                                id="input-business" class="form-control" placeholder="Business Name"
                                                @error('business')  @enderror />
                                            @error('business')
                                                <p class="text-danger text-xs italic">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="postcode" value="{{ old('postcode') }}"
                                                id="input-postcode" class="form-control" placeholder="Postcode"
                                                @error('postcode')  @enderror />
                                            @error('postcode')
                                                <p class="text-danger text-xs italic">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea name="enquiry" rows="6" id="input-enquiry" class="form-control" placeholder="Message"
                                                @error('enquiry')  @enderror>{{ old('enquiry') }}</textarea>
                                            @error('enquiry')
                                                <p class="text-danger text-xs italic">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <script src="https://www.google.com/recaptcha/api.js" type="text/javascript"></script>

                                    <fieldset>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <div class="g-recaptcha pull-right"
                                                    data-sitekey="6LfGzDcrAAAAAJ4WwFghyQaq-VqiPgAdG9YXFG7p"
                                                    data-callback="recaptchaCallback"></div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div id="err-captch" class=" pull-right" style="display: none; color: red;">Please
                                        complete the security check.</div>

                                    <div class="buttons">
                                        <div class="pull-right">
                                            <input class="btn btn-primary" type="submit" value="Submit" />
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        </div>



        <script type="text/javascript">
            var isCaptchaValid = false;

            // reCAPTCHA callback function
            function recaptchaCallback(response) {
                if (response) {
                    isCaptchaValid = true; // The CAPTCHA is completed successfully
                    document.getElementById("err-captch").style.display = 'none'; // Hide error message
                }
            }

            // Validate the CAPTCHA before form submission
            function validateForm() {
                if (!isCaptchaValid) {
                    document.getElementById("err-captch").style.display = 'block'; // Show error message
                    return false; // Prevent form submission if CAPTCHA is not valid
                }
                return true; // Allow form submission
            }
        </script>

    @endsection
