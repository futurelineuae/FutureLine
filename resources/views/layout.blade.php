<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">

    <head>
        <title>Future Line</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <link rel="shortcut icon" href="{{ asset('images/logos/logo.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('js/vendor/essential-grid/css/settings.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('css/essential-grid.css') }}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{ asset('js/vendor/revslider/css/settings.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('css/revslider.css') }}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{ asset('css/font-icons/css/trx_addons_icons-embedded.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('js/vendor/swiper/swiper.min.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('js/vendor/magnific/magnific-popup.min.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('css/trx_addons_full.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('css/trx_addons.animation.css') }}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{ asset('css/font-face/Montserrat/stylesheet.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('css/font-face/Sofia-Pro-Light/stylesheet.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('css/font-face/Gilroy/stylesheet.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('css/font-face/PermanentMarker/stylesheet.css') }}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{ asset('css/fontello/css/fontello-embedded.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('css/colors.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('css/general.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" type="text/css" media="all" />

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- <link rel="icon" href="http://placehold.it/32x32.jpg" sizes="32x32" />
        <link rel="icon" href="http://placehold.it/192x192.jpg" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="http://placehold.it/180x180.jpg" /> -->

    </head>

    <body class="home page custom-background body_tag scheme_default body_style_wide blog_style_excerpt sidebar_hide expand_content remove_margins header_style_header-custom-18 header_position_default menu_style_top no_layout">
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">

            @include('partials.header')

            @include('partials.mobile')

            @yield('content')
        
            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->

        <script type="text/javascript" src="{{ asset('js/jquery/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery/ui/core.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery/ui/widget.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery/ui/accordion.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/_main.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/vendor/essential-grid/js/lightbox.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendor/essential-grid/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendor/essential-grid/js/jquery.themepunch.essential.min.js') }}"></script>
        <script type='text/javascript' src='js/vendor/revslider/jquery.themepunch.revolution.min.js'></script>
        <script type="text/javascript" src="{{ asset('js/eg-projects.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/vendor/revslider/revsliderextensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendor/revslider/revsliderextensions/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendor/revslider/revsliderextensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendor/revslider/revsliderextensions/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/revslider-homepage.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/vendor/swiper/swiper.jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendor/magnific/jquery.magnific-popup.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/trx_addons.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/superfish.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>

        <script type='text/javascript' src='http://maps.googleapis.com/maps/api/js'></script>
        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>

    </body>

</html>