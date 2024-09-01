<head>
    <title>
        The Cars AI
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <meta data-rh="true" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- SlickNav Css -->
    <link href="{{ asset('novaride/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('novaride/css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('novaride/css/all.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('novaride/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('novaride/css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('novaride/css/mousecursor.css') }}">
    <link href="{{ asset('novaride/css/custom.css') }}" rel="stylesheet" media="screen">
    <style>
        /* General styles */
        /* .range-slider-container {
    position: relative;
}

.range-slider-input {
    width: 100%;
    height: 100%;
}

/* Progress bar styles */
        .bg-blue-900 {
            background-color: var(--blue-900);
            transition: width 0.3s ease;
        }



        .header-top-bar-container {
            background-color: #F5F5F5;
        }

        .header-top-bar-container .header-toggle {
            display: none;
            clear: both;
            text-align: center;
            color: #777;
            padding: 15px 0;
        }

        .header-top-bar-container .header-toggle:hover {
            color: #000;
        }

        .header-top-bar-container .header-toggle {
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg);
            -ms-filter: fliph;
            filter: fliph;
        }

        .header-top-bar-container .header-toggle.active {
            -moz-transform: rotate(0);
            -webkit-transform: rotate(0);
            -o-transform: rotate(0);
            transform: rotate(0);
        }

        .header-top-bar,
        .header {
            width: 1170px;
            margin-left: auto;
            margin-right: auto;
        }

        .header-top-bar .contact-details {
            float: left;
        }

        .contact-details li:first-child {
            border-left: 1px solid #E2E6E7;
        }

        .contact-details li {
            float: left;
            border-right: 1px solid #E2E6E7;
            font-family: 'Open Sans';
            font-weight: 500;
            font-size: 13px;
            color: #999;
            line-height: 20px;
            padding: 15px 20px;
        }

        .contact-details li::before {
            color: #A4AAB3;
            font-size: 14px;
            margin-right: 10px;
            padding-bottom: 1px;
        }

        [class^="template-"]:before,
        [class*=" template-"]:before {
            font-family: "template-cs" !important;
            font-style: normal !important;
            font-weight: normal !important;
            font-variant: normal !important;
            text-transform: none !important;
            vertical-align: middle;
            speak: none;
            line-height: 1;
            direction: ltr;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .contact-details li a {
            color: #999;
        }

        .clearfix::after {
            font-size: 0px;
            content: ".";
            display: block;
            height: 0px;
            visibility: hidden;
            clear: both;
        }

        .cs_cart_icon_widget,
        .cs_social_icons_widget,
        .cs_contact_details_list_widget,
        .header-top-bar .widget_search,
        .widget.wpb_column {
            clear: none;
        }

        .widget {
            clear: both;
        }

        .header-top-bar .search-container {
            float: right;
            position: relative;
        }

        .search-container .template-search {
            display: block;
            font-size: 14px;
            padding: 17px;
            border-right: 1px solid #E2E6E7;
            color: #AAA;
        }

        .header-top-bar .search-form {
            position: absolute;
            display: none;
            width: 179px;
            right: 0;
            padding: 12px 10px;
            margin-top: 5px;
            background: #F5F5F5;
            z-index: 99;
        }

        .search-form .search-input.hint {
            color: #858d94;
        }

        .search-form .search-input {
            float: left;
            width: 91px;
            color: #777;
            font-size: 14px;
            background: #FFF;
            border: 1px solid #E2E6E7;
            margin: 0;
            padding: 12px 14px 12px 12px;
        }

        .search-form .search-submit-container {
            position: relative;
            float: right;
        }

        .search-form .search-submit-container .template-search {
            padding: 18px 18px 17px 18px;
            border: none;
        }

        .search-container .template-search {
            display: block;
            font-size: 14px;
            padding: 17px;
            border-right: 1px solid #E2E6E7;
            color: #AAA;
        }

        .search-form .search-submit {
            position: absolute;
            width: 50px;
            height: 50px;
            background: none;
            padding: 0;
            top: 0;
            left: 0;
            cursor: pointer;
        }

        .cs_cart_icon_widget {
            float: right;
            clear: none;
            border-right: 1px solid #E2E6E7;
        }

        .cart-icon {
            position: relative;
            display: block;
            width: 14px;
            color: #AAA;
            border: none;
            cursor: pointer;
            padding: 17px 33px 17px 17px;
        }

        .cart-items-number {
            position: absolute;
            display: block;
            top: 10px;
            left: 10px;
            width: 12px;
            height: 12px;
            background: #1E69B8;
            padding: 2px;
            font-size: 10px;
            font-weight: bold;
            text-align: center;
            color: #FFF;
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
        }

        .header-top-bar .social-icons {
            float: right;
        }

        .cs_cart_icon_widget,
        .cs_social_icons_widget,
        .cs_contact_details_list_widget,
        .header-top-bar .widget_search,
        .widget.wpb_column {
            clear: none;
        }

        .social-icons {
            list-style: none;
            padding: 0;
        }

        .social-icons li:first-child {
            border-left: 1px solid #E2E6E7;
        }

        .social-icons li {
            float: left;
            border-right: 1px solid #E2E6E7;
        }

        .social-icons li a {
            width: 14px;
            padding: 17px 28px 17px 17px;
        }

        .social-icons a {
            display: block;
            color: #A4AAB3;
        }
    </style>
    @stack('styles')
</head>
