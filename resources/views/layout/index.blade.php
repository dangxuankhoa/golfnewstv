<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-stand-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">

    <link rel="stylesheet" href="https://vjs.zencdn.net/7.17.3/video-js.css">
    <link rel="stylesheet" href="https://unpkg.com/@videojs/themes@1/dist/forest/index.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LYLB6X7K1S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-LYLB6X7K1S');
    </script>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ***** Header Start ***** -->
    @include('header')

    <!-- ***** Content Start ***** -->
    @if (isset($is_home))
        <div class="main-video">
            <video id="videoPlayer" class="video-js vjs-theme-forest vjs-big-play-centered" data-setup=''>
                <source src="https://884030f97a.vws.vegacdn.vn/live/_definst_/stream_1_a0acb/playlist.m3u8"
                    type="application/x-mpegURL">
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">Supports HTML5 video</a>
                </p>
            </video>
        </div>
    @endif

    @yield('content')
    <!-- ***** Footer Start ***** -->
    @include('footer')

    <!-- Style New -->
    <style>
        .video-js {
            position: relative !important;
            width: 100% !important;
            height: 86.4vh !important;
        }

        .videoPlayer-dimensions.vjs-fluid {
            padding-top: 30.00% !important;
        }

        footer div.col-lg-6 {
            text-align: left;
        }

        .contact {
            margin-left: 150px;
        }

        @media only screen and (max-width: 600px) {
            .video-js {
                position: relative !important;
                width: 100% !important;
                height: 350px !important;
            }

            .contact {
                margin-left: 0px !important;
            }

            .blog-posts .down-content {
                bottom: 30px;
                width: 91.6%;
            }
        }

    </style>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>

    <!-- Plugin Scripts -->
    <script src="https://vjs.zencdn.net/7.17.3/video.min.js"></script>
    <script src="//cdn.sc.gl/videojs-hotkeys/latest/videojs.hotkeys.min.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

    <script>
        var player = videojs('videoPlayer', {
            autoplay: 'muted',
            controls: true,
            poster: 'assets/images/wallpaper.jpg',
            playbackRates: [0.25, 0.5, 1, 1.5, 2],
            fluid: true,
            plugins: {
                hotkeys: {
                    seekStep: 5,
                    enableModifiersForNumbers: false
                }
            }
        });
        player.play();
    </script>
    @stack('script_pagination')
    @stack('style_pagination')
    @stack('style_loadmore')
</body>

</html>
