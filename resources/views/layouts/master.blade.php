<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevTv - Your Online Video Subscription Platform</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('layerslider/css/layerslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
    <div class="off-canvas-wrapper">
            <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
                @include('layouts.nav')
                @yield('content')
                <!-- footer -->
                <footer>
                    <div class="row">
                        <div class="large-3 medium-6 columns">
                            <div class="widgetBox">
                                <div class="widgetTitle">
                                    <h5>About Betube</h5>
                                </div>
                                <div class="textwidget">
                                    Betube video wordpress theme lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s book.
                                </div>
                            </div>
                        </div>
                        <div class="large-3 medium-6 columns">
                            <div class="widgetBox">
                                <div class="widgetTitle">
                                    <h5>Subscribe Now</h5>
                                </div>
                                <div class="widgetContent">
                                    <form data-abide novalidate method="post">
                                        <p>Subscribe to get exclusive videos</p>
                                        <div class="input">
                                            <input type="text" placeholder="Enter your full Name" required>
                                                <span class="form-error">
                                                    Yo, you had better fill this out, it's required.
                                                </span>
                                        </div>
                                        <div class="input">
                                            <input type="email" id="email" placeholder="Enter your email addres" required >
                                                <span class="form-error">
                                                  I'm required!
                                                </span>
                                        </div>
                                        <button class="button" type="submit" value="Submit">Sign up Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-double-up"></i></a>
                </footer><!-- footer -->
                <div id="footer-bottom">
                </div>
            </div><!--end off canvas content-->
        </div><!--end off canvas wrapper inner-->
    </div><!--end off canvas wrapper-->
    <!-- script files -->
    <script src="{{ asset('js/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('js/what-input/what-input.js') }}"></script>
    <script src="{{ asset('js/foundation-sites/dist/foundation.js') }}"></script>
    <script src="{{ asset('js/jquery.showmore.src.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('layerslider/js/greensock.js') }}" type="text/javascript"></script>
    <!-- LayerSlider script files -->
    <script src="{{ asset('layerslider/js/layerslider.transitions.js') }}" type="text/javascript"></script>
    <script src="{{ asset('layerslider/js/layerslider.kreaturamedia.jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/inewsticker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.kyco.easyshare.js') }}" type="text/javascript"></script>
</body>
</html>