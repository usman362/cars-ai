@extends('site.layouts.app')
@section('content')
    <main id="mainContent"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div data-test="homepage">
            <div class="w-full overflow-hidden bg-light pt-[60px]">
                <div data-test="home">
                    <div class="bg-contain md:bg-cover bg-no-repeat text-center bg-top pt-5 pb-3 md:py-7 relative bg-[image:var(--image-url)] md:bg-[image:var(--image-url-md)] lg:bg-[image:var(--image-url-lg)] xl:bg-[image:var(--image-url-xl)]"
                        style="
                      --image-url: url({{ asset('assets/_next/static/images/hero-image-sm-31b0612268622ca7f2358922fa94cc13.jpg') }});
                      --image-url-md: url({{ asset('assets/_next/static/images/hero-image-md-d2dcd3952e4ff40e1159ecdfd35b28c0.jpg') }});
                      --image-url-lg: url({{ asset('assets/_next/static/images/hero-image-lg-7c2054dd909421922770212e6c57ce6f.jpg') }});
                      --image-url-xl: url({{ asset('assets/_next/static/images/hero-image-xl-5c67228d03ca284ab0bd00da04d744b2.jpg') }});
                    ">
                        <div
                            class="pointer-events-none absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_bottom,_rgba(0,0,0,0)_0vh,_rgba(0,0,0,1)_33vh,_rgba(0,0,0,1)_100%)] md:bg-[image:none] md:bg-[#0000004D]">
                        </div>
                        <div class="container container-max-width-3 mt-7 md:mt-0">
                            <h1
                                class="heading-2 normal-case heading-md-1 md:normal-case pt-2 pb-4 text-white md:mt-5 md:pt-3">
                                <span class="block">Car buying </span>shaped to your
                                life
                            </h1>
                            <div class="hidden-sm-down m-auto pb-3 md:max-w-[425px]">
                                <div class="w-full">
                                    <div class="relative flex w-full justify-center">
                                        <div data-test="dropdownBox" data-do-not-disturb="false"
                                            class="typeahead-field-dropdown-box dropdown">
                                            <button aria-haspopup="true" class="h-0 w-full hidden" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span></button><label
                                                for="homePageSearchBarLgOmnisearchSearchField" class="sr-only">Search make,
                                                model, or type</label>
                                            <div class="field-container-challenger typeahead-field-text-field">
                                                <div class="field-wrapper-challenger field-theme-dark-challenger">
                                                    <div class="field-content-row field-with-prefix">
                                                        <div class="field-addon-challenger field-addon-challenger-prefix">
                                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default z-[200]"
                                                                style="width: 24px; height: 24px" aria-hidden="true">
                                                                <use href="#search"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="field-input-label-challenger">
                                                            <input id="homePageSearchBarLgOmnisearchSearchField"
                                                                autocomplete="off"
                                                                class="form-control-challenger typeahead-field-text-field-input !rounded-[100px] !border-none"
                                                                aria-label="Search make, model, or type"
                                                                placeholder="Search make, model, or type" autocorrect="off"
                                                                autocapitalize="none" spellcheck="false"
                                                                data-test-item="TypeaheadField"
                                                                data-test="omnisearchSearchField" type="text"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="field-message-challenger">
                                                        <div class="field-message-text-challenger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div tabindex="-1" role="menu" aria-hidden="true"
                                                class="w-full dropdown-menu-typeahead dropdown-menu-rounded z-[200] rounded-b-[25px] dropdown-menu-dark dropdown-menu dropdown-menu-right">
                                                <ul style="max-height: 252px; overflow-y: auto" role="menu">
                                                    <li disabled="" tabindex="-1"
                                                        class="dropdown-item-typeahead disabled dropdown-item">
                                                        <span
                                                            class="block overflow-hidden whitespace-normal italic text-dark">No
                                                            results for ""</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mx-auto flex flex-wrap justify-center gap-3 min-[440px]:inline-flex min-[440px]:max-w-[330px] min-[640px]:flex-nowrap hidden-sm-down pt-5 md:mb-5 md:pt-3 md:pb-3">
                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] rounded-[10px] border border-[color:var(--gray-700)] bg-[rgba(100,100,100,0.60)] backdrop-blur-md relative flex h-[132px] flex-col items-center justify-center gap-2 min-[280px]:w-[calc(50%_-_10px)] min-[440px]:min-w-[132px] min-[440px]:max-w-[25%] bg-[radial-gradient(circle_at_top,_rgba(255,100,0,0.15)_0%,_rgba(230,230,230,0.1)_39%,_rgba(255,255,255,0)_100%)]"
                                    data-test="homepageHeroPanelShopNewButton" href="/shop/new/?filterType=brand"><svg
                                        viewBox="0 0 24 24" class="icon icon-fill-default fill-[var(--orange-600)]"
                                        style="width: 44px; height: 44px" aria-hidden="true">
                                        <use href="#car-accident-free"></use>
                                    </svg><span class="flex items-center pl-[8px] text-white">Shop New<svg
                                            viewBox="0 0 24 24" class="icon icon-fill-default"
                                            style="width: 20px; height: 20px" aria-hidden="true">
                                            <use href="#keyboard_arrow_right"></use>
                                        </svg></span></a><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] rounded-[10px] border border-[color:var(--gray-700)] bg-[rgba(100,100,100,0.60)] backdrop-blur-md relative flex h-[132px] flex-col items-center justify-center gap-2 min-[280px]:w-[calc(50%_-_10px)] min-[440px]:min-w-[132px] min-[440px]:max-w-[25%] bg-[radial-gradient(circle_at_top,_rgba(235,0,139,0.15)_0%,_rgba(230,230,230,0.1)_39%,_rgba(255,255,255,0)_100%)]"
                                    data-test="homepageHeroPanelShopUsedButton" href="/used-cars-for-sale/listings/"><svg
                                        viewBox="0 0 24 24" class="icon icon-fill-default fill-[var(--magenta-600)]"
                                        style="width: 44px; height: 44px" aria-hidden="true">
                                        <use href="#vehicle-discount"></use>
                                    </svg><span class="flex items-center pl-[8px] text-white">Shop Used<svg
                                            viewBox="0 0 24 24" class="icon icon-fill-default"
                                            style="width: 20px; height: 20px" aria-hidden="true">
                                            <use href="#keyboard_arrow_right"></use>
                                        </svg></span></a><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] rounded-[10px] border border-[color:var(--gray-700)] bg-[rgba(100,100,100,0.60)] backdrop-blur-md relative flex h-[132px] flex-col items-center justify-center gap-2 min-[280px]:w-[calc(50%_-_10px)] min-[440px]:min-w-[132px] min-[440px]:max-w-[25%] bg-[radial-gradient(circle_at_top,_rgba(6,174,170,0.15)_0%,_rgba(230,230,230,0.1)_39%,_rgba(255,255,255,0)_100%)]"
                                    data-test="homepageHeroPanelShopElectricButton" href="/electric/"><svg
                                        viewBox="0 0 24 24" class="icon icon-fill-default fill-[var(--teal-600)]"
                                        style="width: 44px; height: 44px" aria-hidden="true">
                                        <use href="#ev_charger"></use>
                                    </svg><span class="flex items-center pl-[8px] text-white">Shop Electric<svg
                                            viewBox="0 0 24 24" class="icon icon-fill-default"
                                            style="width: 20px; height: 20px" aria-hidden="true">
                                            <use href="#keyboard_arrow_right"></use>
                                        </svg></span></a>
                            </div>
                        </div>
                        <div class="theme-black w-full py-2 hidden-md-up fixed top-0 z-[1049] bg-white left-0 m-0 opacity-0 invisible"
                            data-test="fixedButtonBar">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <a data-ignore-contrast="false" data-loading="false" data-test="shopNewButton"
                                            class="btn-dark hidden-md-up btn btn-secondary btn-md btn-block"
                                            href="/shop/new/?filterType=brand"><span class="btn-inner">Shop New</span></a>
                                    </div>
                                    <div class="col">
                                        <a data-ignore-contrast="false" data-loading="false" data-test="shopUsedButton"
                                            class="btn-dark hidden-md-up btn btn-secondary btn-md btn-block"
                                            href="/shop/used/?filterType=brand"><span class="btn-inner">Shop
                                                Used</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span style="font-size: 0"></span>
                        <div class="container">
                            <div class="mx-auto md:hidden">
                                <div class="w-full">
                                    <div class="relative flex w-full justify-center">
                                        <div data-test="dropdownBox" data-do-not-disturb="false"
                                            class="typeahead-field-dropdown-box dropdown">
                                            <button aria-haspopup="true" class="h-0 w-full hidden" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span></button><label
                                                for="homePageSearchBarSmOmnisearchSearchField" class="sr-only">Search
                                                make, model, or type</label>
                                            <div class="field-container-challenger typeahead-field-text-field">
                                                <div class="field-wrapper-challenger field-theme-dark-challenger">
                                                    <div class="field-content-row field-with-prefix">
                                                        <div class="field-addon-challenger field-addon-challenger-prefix">
                                                            <svg viewBox="0 0 24 24"
                                                                class="icon icon-fill-default z-[200]"
                                                                style="width: 24px; height: 24px" aria-hidden="true">
                                                                <use href="#search"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="field-input-label-challenger">
                                                            <input id="homePageSearchBarSmOmnisearchSearchField"
                                                                autocomplete="off"
                                                                class="form-control-challenger typeahead-field-text-field-input !rounded-[100px] !border-none"
                                                                aria-label="Search make, model, or type"
                                                                placeholder="Search make, model, or type"
                                                                autocorrect="off" autocapitalize="none"
                                                                spellcheck="false" data-test-item="TypeaheadField"
                                                                data-test="omnisearchSearchField" type="text"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="field-message-challenger">
                                                        <div class="field-message-text-challenger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div tabindex="-1" role="menu" aria-hidden="true"
                                                class="w-full dropdown-menu-typeahead dropdown-menu-rounded z-[200] rounded-b-[25px] dropdown-menu-dark dropdown-menu dropdown-menu-right">
                                                <ul style="max-height: 252px; overflow-y: auto" role="menu">
                                                    <li disabled="" tabindex="-1"
                                                        class="dropdown-item-typeahead disabled dropdown-item">
                                                        <span
                                                            class="block overflow-hidden whitespace-normal italic text-dark">No
                                                            results for ""</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mx-auto flex flex-wrap justify-center gap-3 min-[440px]:inline-flex min-[440px]:max-w-[330px] min-[640px]:flex-nowrap pt-5 md:mb-5 md:hidden md:pt-3 md:pb-3">
                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] rounded-[10px] border border-[color:var(--gray-700)] bg-[rgba(100,100,100,0.60)] backdrop-blur-md relative flex h-[132px] flex-col items-center justify-center gap-2 min-[280px]:w-[calc(50%_-_10px)] min-[440px]:min-w-[132px] min-[440px]:max-w-[25%] bg-[radial-gradient(circle_at_top,_rgba(255,100,0,0.15)_0%,_rgba(230,230,230,0.1)_39%,_rgba(255,255,255,0)_100%)]"
                                    data-test="homepageHeroPanelShopNewButton" href="/shop/new/?filterType=brand"><svg
                                        viewBox="0 0 24 24" class="icon icon-fill-default fill-[var(--orange-600)]"
                                        style="width: 44px; height: 44px" aria-hidden="true">
                                        <use href="#car-accident-free"></use>
                                    </svg><span class="flex items-center pl-[8px] text-white">Shop New<svg
                                            viewBox="0 0 24 24" class="icon icon-fill-default"
                                            style="width: 20px; height: 20px" aria-hidden="true">
                                            <use href="#keyboard_arrow_right"></use>
                                        </svg></span></a><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] rounded-[10px] border border-[color:var(--gray-700)] bg-[rgba(100,100,100,0.60)] backdrop-blur-md relative flex h-[132px] flex-col items-center justify-center gap-2 min-[280px]:w-[calc(50%_-_10px)] min-[440px]:min-w-[132px] min-[440px]:max-w-[25%] bg-[radial-gradient(circle_at_top,_rgba(235,0,139,0.15)_0%,_rgba(230,230,230,0.1)_39%,_rgba(255,255,255,0)_100%)]"
                                    data-test="homepageHeroPanelShopUsedButton" href="/used-cars-for-sale/listings/"><svg
                                        viewBox="0 0 24 24" class="icon icon-fill-default fill-[var(--magenta-600)]"
                                        style="width: 44px; height: 44px" aria-hidden="true">
                                        <use href="#vehicle-discount"></use>
                                    </svg><span class="flex items-center pl-[8px] text-white">Shop Used<svg
                                            viewBox="0 0 24 24" class="icon icon-fill-default"
                                            style="width: 20px; height: 20px" aria-hidden="true">
                                            <use href="#keyboard_arrow_right"></use>
                                        </svg></span></a><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] rounded-[10px] border border-[color:var(--gray-700)] bg-[rgba(100,100,100,0.60)] backdrop-blur-md relative flex h-[132px] flex-col items-center justify-center gap-2 min-[280px]:w-[calc(50%_-_10px)] min-[440px]:min-w-[132px] min-[440px]:max-w-[25%] bg-[radial-gradient(circle_at_top,_rgba(6,174,170,0.15)_0%,_rgba(230,230,230,0.1)_39%,_rgba(255,255,255,0)_100%)]"
                                    data-test="homepageHeroPanelShopElectricButton" href="/electric/"><svg
                                        viewBox="0 0 24 24" class="icon icon-fill-default fill-[var(--teal-600)]"
                                        style="width: 44px; height: 44px" aria-hidden="true">
                                        <use href="#ev_charger"></use>
                                    </svg><span class="flex items-center pl-[8px] text-white">Shop Electric<svg
                                            viewBox="0 0 24 24" class="icon icon-fill-default"
                                            style="width: 20px; height: 20px" aria-hidden="true">
                                            <use href="#keyboard_arrow_right"></use>
                                        </svg></span></a>
                            </div>
                        </div>
                        <button type="button" class="link-button z-10 pt-[135px] md:hidden" aria-label="Scroll down">
                            <svg viewBox="0 0 24 24" class="icon icon-fill-default text-white"
                                style="width: 24px; height: 24px" aria-hidden="true">
                                <use href="#keyboard_arrow_down"></use>
                            </svg>
                        </button>
                    </div>
                    <div></div>

{{-- <style>

.about-us {
    padding: 100px 0;
    background-color: black;
    color: #fff;
}
.align-items-center {
    align-items: center !important;
}

.about-image {
    position: relative;
    background: url(https://demo.awaikenthemes.com/html-preview/novaride/dark/images/about-image-bg.svg) no-repeat;
    background-position: bottom 25px right 50px;
    background-size: auto;
    padding-bottom: 100px;
    margin-right: 40px;
    padding-left: 10px;
}

.about-img-1 {
    width: 414px;
    position: relative;
}

.about-img-1::before {
    content: '';
    position: absolute;
    top: -10px;
    bottom: 0;
    left: -10px;
    right: 0;
    width: 100%;
    height: 100%;
    border: 1px solid #FFFFFF2E;
    border-radius: 200px;
    z-index: 1;
}
.reveal {
    position: relative;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    visibility: hidden;
    overflow: hidden;
}

figure {
    margin: 0;
}
.about-img-1 img {
    width: 100%;
    aspect-ratio: 1 / 1.37;
    object-fit: cover;
    border-radius: 200px;
}

.reveal img {
    height: 100%;
    width: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -webkit-transform-origin: left;
    transform-origin: left;
}

.about-img-2 {
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: 2;
}

.about-img-2::before {
    content: '';
    position: absolute;
    top: -8px;
    bottom: 0;
    left: -8px;
    right: 0;
    width: 100%;
    height: 100%;
    border: 1px solid #FFFFFF2E;
    border-radius: 160px;
    z-index: 1;
}

.about-img-2 img {
    width: 100%;
    aspect-ratio: 1 / 1.37;
    object-fit: cover;
    border-radius: 160px;
}

.section-title {
    margin-bottom: 40px;
}

.section-title h3 {
    display: inline-block;
    position: relative;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.2em;
    text-transform: capitalize;
    color: red;
    padding-left: 25px;
    margin-bottom: 15px;
}
.section-title h3::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    background: url(https://demo.awaikenthemes.com/html-preview/novaride/dark/images/icon-sub-heading.svg) no-repeat;
    background-position: left center;
    background-size: cover;
    width: 18px;
    height: 18px;
}

.section-title h2 {
    font-size: 44px;
    font-weight: 700;
    margin-bottom: 0;
}

.section-title p {
    margin-top: 20px;
    margin-bottom: 0;
}

.about-content-body {
    margin-bottom: 40px;
}

.about-trusted-booking {
    display: flex;
    border-bottom: 1px solid #FFFFFF2E;
    padding-bottom: 30px;
    margin-bottom: 30px;
}

.about-trusted-booking .icon-box {
    position: relative;
    margin-right: 20px;
    padding: 10px 0px 0px 10px;
}
.about-trusted-booking .icon-box::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    background-color: #FFFFFF;
    opacity: 10%;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    z-index: 0;
    transition: all 0.4s ease-in-out;
}
.trusted-booking-content {
    width: calc(100% - 94px);
}
.trusted-booking-content h3 {
    font-size: 20px;
    font-weight: 600;
    text-transform: capitalize;
    margin-bottom: 10px;
}
.trusted-booking-content p {
    margin: 0;
}

.btn-default {
    display: inline-block;
    font-size: 16px;
    font-weight: 700;
    line-height: 1em;
    text-transform: capitalize;
    background: #FF3600;
    color: #FFFFFF;
    border-radius: 100px;
    padding: 16px 25px;
    margin-right: 48px;
    border: none;
    transition: all 0.5s ease-in-out;
    position: relative;
    z-index: 1;
}

.btn-default::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background-color: #FF3600;
    background-image: url(https://demo.awaikenthemes.com/html-preview/novaride/dark/images/arrow-white.svg);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 14px auto;
    transform: translate(48px, 0px);
    transition: all 0.4s ease-in-out;
}
</style> --}}
                    <div class="about-us">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- About Us Image Start -->
                                    <div class="about-image">
                                        <!-- About Image Start -->
                                        <div class="about-img-1">
                                            <figure class="reveal" style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                                <img src="https://demo.awaikenthemes.com/html-preview/novaride/dark/images/about-img-1.jpg" alt="" style="transform: translate(0px, 0px);">
                                            </figure>
                                        </div>
                                        <!-- About Image End -->

                                        <!-- About Image Start -->
                                        <div class="about-img-2">
                                            <figure class="reveal" style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                                <img src="https://demo.awaikenthemes.com/html-preview/novaride/dark/images/about-img-2.jpg" alt="" style="transform: translate(0px, 0px);">
                                            </figure>
                                        </div>
                                        <!-- About Image End -->
                                    </div>
                                    <!-- About Us Image End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- About Us Content Start -->
                                    <div class="about-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">about us</h3>
                                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: start; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">Y</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">p</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div></div> </div><div class="split-line" style="display: block; text-align: start; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">b</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div></div></div></h2>
                                            <p class="wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">Aqestic Optio Amet A Ququam Saepe Aliquid Voluate Dicta Fuga Dolor Saerror Sed Earum A Magni Soluta Quam Minus Dolor Dolor</p>
                                        </div>
                                        <!-- Section Title End -->

                                        <!-- About Content Body Start -->
                                        <div class="about-content-body">
                                            <!-- About Trusted Booking Start -->
                                            <div class="about-trusted-booking wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                <div class="icon-box">
                                                    <img src="https://demo.awaikenthemes.com/html-preview/novaride/dark/images/icon-about-trusted-1.svg" alt="">
                                                </div>
                                                <div class="trusted-booking-content">
                                                    <h3>easy booking process</h3>
                                                    <p>We Have Optimized The Booking Process So That Our Clients Can Experience The Easiest And The Safest Service</p>
                                                </div>
                                            </div>
                                            <!-- About Trusted Booking End -->

                                            <!-- About Trusted Booking Start -->
                                            <div class="about-trusted-booking wow fadeInUp" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                                                <div class="icon-box">
                                                    <img src="https://demo.awaikenthemes.com/html-preview/novaride/dark/images/icon-about-trusted-2.svg" alt="">
                                                </div>
                                                <div class="trusted-booking-content">
                                                    <h3>convenient pick-up &amp; return process</h3>
                                                    <p>We Have Optimized The Booking Process So That Our Clients Can Experience The Easiest And The Safest Service</p>
                                                </div>
                                            </div>
                                            <!-- About Trusted Booking End -->
                                        </div>
                                        <!-- About Content Body End -->

                                        <!-- About Content Footer Start -->
                                        <div class="about-content-footer wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                                            <a href="#" class="btn-default">contact us</a>
                                        </div>
                                        <!-- About Content Footer End -->
                                    </div>
                                    <!-- About Us Content End -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container flex flex-col items-center py-5 text-center lg:flex-row">
                        <div class="row flex w-full">
                            <div class="col-12 col-lg-6">
                                <div class="flex flex-col lg:justify-start lg:pr-5 lg:text-left">
                                    <div
                                        class="m-auto rounded bg-[#00ADEE80] py-1 px-2 text-xs font-bold lg:ml-0 lg:mr-auto">
                                        NEW
                                    </div>
                                    <div class="flex justify-center pt-2-5 lg:w-full lg:justify-start">
                                        <h2 class="heading-2 normal-case">
                                            <span class="block sm:inline-block">Know your</span>
                                            <!-- -->buying power<button data-test="infoButtonButton" aria-label="Info"
                                                color="secondary" style="--info-border-color: black"
                                                class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)] my-auto ml-2">
                                                <svg viewBox="0 0 24 24" class="icon icon-fill-default flex-shrink-0"
                                                    style="width: 18px; height: 18px" aria-hidden="true">
                                                    <use href="#info"></use>
                                                </svg>
                                            </button>
                                        </h2>
                                    </div>
                                    <p class="m-auto w-full pb-3 pt-2 text-muted md:w-1/2 md:pb-6 lg:w-full lg:pb-3">
                                        How much car can you afford? Find out, then see
                                        vehicles that match your&nbsp;budget
                                    </p>
                                    <div class="picture-container picture-container-block hidden lg:block xl:hidden"
                                        style="padding-bottom: 43.58974358974359%">
                                        <img class="picture-block" sizes="40px"
                                            src="{{ asset('assets/_next/static/images/buying-power-lg-4ade71d5fe5a6d55b8b876e7e957fd2d.png') }}?auto=format&amp;h=26.153846153846153&amp;w=60"
                                            srcset="
                                {{ asset('assets/_next/static/images/buying-power-lg-4ade71d5fe5a6d55b8b876e7e957fd2d.png') }}?auto=format&amp;h=26.153846153846153&amp;w=60 60w,
                                {{ asset('assets/_next/static/images/buying-power-lg-4ade71d5fe5a6d55b8b876e7e957fd2d.png') }}?auto=format&amp;h=39.23076923076923&amp;w=90  90w
                              "
                                            alt="" />
                                    </div>
                                    <div class="picture-container picture-container-block hidden xl:block"
                                        style="padding-bottom: 45.55555555555556%">
                                        <img class="picture-block" sizes="585px"
                                            src="{{ asset('assets/_next/static/images/buying-power-xl-a1e7ea75d976086f91fe311285608514.png') }}"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="relative hidden w-full flex-col items-center rounded bg-white p-5 md:flex">
                                    <div class="picture-container absolute top-[-45px] z-10 lg:hidden"
                                        style="
                              padding-bottom: 0px;
                              width: 175px;
                              height: 87px;
                            ">
                                        <img class="picture-inner"
                                            src="{{ asset('assets/_next/static/images/buying-power-mobile-6295117c1463f0a229e54d553180ca3c.png') }}?auto=format&amp;h=87&amp;w=175"
                                            srcset="
                                {{ asset('assets/_next/static/images/buying-power-mobile-6295117c1463f0a229e54d553180ca3c.png') }}?auto=format&amp;h=87&amp;w=175  1x,
                                {{ asset('assets/_next/static/images/buying-power-mobile-6295117c1463f0a229e54d553180ca3c.png') }}?auto=format&amp;h=174&amp;w=350 2x
                              "
                                            alt="" />
                                    </div>
                                    <div class="flex h-[62px] items-start justify-center overflow-hidden text-[59px] font-bold leading-[59px] mb-2 text-[#000000]"
                                        role="region" aria-labelledby="buying-power-desc-81" aria-live="polite">
                                        <div id="buying-power-desc-81" class="hidden">
                                            Max budget is 27370
                                        </div>
                                        <span style="font-size: 0px"></span><span class="text-[22px]">$</span>
                                        <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true">
                                            <div class="invisible">0</div>
                                            <div class="text-center">0</div>
                                            <div class="text-center">1</div>
                                            <div class="text-center">2</div>
                                            <div class="text-center">3</div>
                                            <div class="text-center">4</div>
                                            <div class="text-center">5</div>
                                            <div class="text-center">6</div>
                                            <div class="text-center">7</div>
                                            <div class="text-center">8</div>
                                            <div class="text-center">9</div>
                                        </div>
                                        <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true">
                                            <div class="invisible">0</div>
                                            <div class="text-center">0</div>
                                            <div class="text-center">1</div>
                                            <div class="text-center">2</div>
                                            <div class="text-center">3</div>
                                            <div class="text-center">4</div>
                                            <div class="text-center">5</div>
                                            <div class="text-center">6</div>
                                            <div class="text-center">7</div>
                                            <div class="text-center">8</div>
                                            <div class="text-center">9</div>
                                        </div>
                                        <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true">
                                            <div class="invisible">,</div>
                                            <div class="text-center">,</div>
                                        </div>
                                        <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true">
                                            <div class="invisible">0</div>
                                            <div class="text-center">0</div>
                                            <div class="text-center">1</div>
                                            <div class="text-center">2</div>
                                            <div class="text-center">3</div>
                                            <div class="text-center">4</div>
                                            <div class="text-center">5</div>
                                            <div class="text-center">6</div>
                                            <div class="text-center">7</div>
                                            <div class="text-center">8</div>
                                            <div class="text-center">9</div>
                                        </div>
                                        <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true">
                                            <div class="invisible">0</div>
                                            <div class="text-center">0</div>
                                            <div class="text-center">1</div>
                                            <div class="text-center">2</div>
                                            <div class="text-center">3</div>
                                            <div class="text-center">4</div>
                                            <div class="text-center">5</div>
                                            <div class="text-center">6</div>
                                            <div class="text-center">7</div>
                                            <div class="text-center">8</div>
                                            <div class="text-center">9</div>
                                        </div>
                                        <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true">
                                            <div class="invisible">0</div>
                                            <div class="text-center">0</div>
                                            <div class="text-center">1</div>
                                            <div class="text-center">2</div>
                                            <div class="text-center">3</div>
                                            <div class="text-center">4</div>
                                            <div class="text-center">5</div>
                                            <div class="text-center">6</div>
                                            <div class="text-center">7</div>
                                            <div class="text-center">8</div>
                                            <div class="text-center">9</div>
                                        </div>
                                    </div>
                                    <p class="pt-1 pb-2">Est. buying power</p>
                                    <p class="pb-3 text-muted">Based on 8.5% APR</p>
                                    <div class="w-full border-t">
                                        <div class="row pt-4 pb-3">
                                            <div class="pr-3 col">
                                                <div class="field-container-challenger w-full text-left">
                                                    <div class="field-wrapper-challenger field-label-padding-challenger">
                                                        <div class="field-content-row field-with-suffix">
                                                            <div class="field-input-label-challenger input-label-select">
                                                                <select required="" aria-label="Looking for"
                                                                    class="form-select-element-challenger">
                                                                    <option value="NEW">New car</option>
                                                                    <option value="USED">Used car</option>
                                                                </select>
                                                                <div class="field-label-text-challenger"
                                                                    data-test="fieldLabel">
                                                                    <label data-ignore-contrast="true">Looking for</label>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="field-addon-challenger field-addon-challenger-suffix">
                                                                <svg viewBox="0 0 24 24" class="icon icon-fill-default"
                                                                    aria-hidden="true" style="width: 24px; height: 24px">
                                                                    <use href="#arrow_drop_down"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="field-message-challenger">
                                                            <div class="field-message-text-challenger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="field-container-challenger w-full text-left">
                                                    <div class="field-wrapper-challenger field-label-padding-challenger">
                                                        <div class="field-content-row">
                                                            <div class="field-input-label-challenger">
                                                                <input id="160" class="form-control-challenger"
                                                                    aria-label="Down payment" placeholder=" "
                                                                    maxlength="10" type="tel" data-test="downPayment"
                                                                    value="$3,000" />
                                                                <div class="field-label-text-challenger"
                                                                    data-test="fieldLabel">
                                                                    <label for="160" data-ignore-contrast="true">Down
                                                                        payment</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-message-challenger">
                                                            <div class="field-message-text-challenger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="pr-3 col">
                                                <div class="field-container-challenger w-full text-left">
                                                    <div class="field-wrapper-challenger field-label-padding-challenger">
                                                        <div class="field-content-row field-with-suffix">
                                                            <div class="field-input-label-challenger input-label-select">
                                                                <select required="" aria-label="Credit score"
                                                                    class="form-select-element-challenger"
                                                                    data-test="creditScoreSelect">
                                                                    <option value="POOR">
                                                                        300 - 579
                                                                    </option>
                                                                    <option value="FAIR">
                                                                        580 - 669
                                                                    </option>
                                                                    <option value="GOOD">
                                                                        670 - 739
                                                                    </option>
                                                                    <option value="VERY_GOOD">
                                                                        740 - 799
                                                                    </option>
                                                                    <option value="EXCELLENT">
                                                                        800 - 850
                                                                    </option>
                                                                </select>
                                                                <div class="field-label-text-challenger"
                                                                    data-test="fieldLabel">
                                                                    <label data-ignore-contrast="true">Credit score</label>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="field-addon-challenger field-addon-challenger-suffix">
                                                                <svg viewBox="0 0 24 24" class="icon icon-fill-default"
                                                                    aria-hidden="true" style="width: 24px; height: 24px">
                                                                    <use href="#arrow_drop_down"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="field-message-challenger">
                                                            <div class="field-message-text-challenger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="field-container-challenger w-full text-left">
                                                    <div class="field-wrapper-challenger field-label-padding-challenger">
                                                        <div class="field-content-row">
                                                            <div class="field-input-label-challenger">
                                                                <input id="163" class="form-control-challenger"
                                                                    aria-label="Monthly payment" placeholder=" "
                                                                    maxlength="6" type="tel"
                                                                    data-test="monthlyPayment" value="$500" />
                                                                <div class="field-label-text-challenger"
                                                                    data-test="fieldLabel">
                                                                    <label for="163"
                                                                        data-ignore-contrast="true">Monthly payment</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-message-challenger">
                                                            <div class="field-message-text-challenger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mt-2 flex items-center">
                                                    <div class="toggle">
                                                        <input id="buyingPowerModuleTradeInMd" data-test="toggleInput"
                                                            type="checkbox" class="toggle-input form-check-input" /><span
                                                            class="toggle-track"><span class="toggle-knob"
                                                                data-test="toggleKnob"><svg viewBox="0 0 24 24"
                                                                    class="icon icon-fill-default toggle-icon"
                                                                    aria-hidden="true" style="width: 12px; height: 12px">
                                                                    <use href="#check"></use>
                                                                </svg></span></span>
                                                    </div>
                                                    <label for="buyingPowerModuleTradeInMd" class="ml-2 text-sm">Include
                                                        trade-in</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field-container-challenger mt-3 w-full text-left" id="tradeInAmount"
                                            style="display: none">
                                            <div class="field-wrapper-challenger field-label-padding-challenger">
                                                <div class="field-content-row">
                                                    <div class="field-input-label-challenger">
                                                        <input id="445" class="form-control-challenger"
                                                            aria-label="Trade-in amount" placeholder=" " maxlength="10"
                                                            type="tel" value="$23">
                                                        <div class="field-label-text-challenger" data-test="fieldLabel">
                                                            <label for="445" data-ignore-contrast="true">Trade-in
                                                                amount</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-message-challenger">
                                                    <div class="field-message-text-challenger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" data-ignore-contrast="true" data-loading="false"
                                            data-test="buyingPowerModuleCta" aria-haspopup="dialog"
                                            class="mt-5 w-full btn btn-primary btn-md">
                                            <span class="btn-inner">See your matches</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container flex flex-col items-center justify-center bg-white pt-5 md:hidden">
                        <div class="picture-container absolute top-[-45px] z-10 lg:hidden"
                            style="padding-bottom: 0px; width: 175px; height: 87px">
                            <img class="picture-inner"
                                src="{{ asset('assets/_next/static/images/buying-power-mobile-6295117c1463f0a229e54d553180ca3c.png') }}?auto=format&amp;h=87&amp;w=175"
                                srcset="
                          {{ asset('assets/_next/static/images/buying-power-mobile-6295117c1463f0a229e54d553180ca3c.png') }}?auto=format&amp;h=87&amp;w=175  1x,
                          {{ asset('assets/_next/static/images/buying-power-mobile-6295117c1463f0a229e54d553180ca3c.png') }}?auto=format&amp;h=174&amp;w=350 2x
                        "
                                alt="" />
                        </div>
                        <div class="flex h-[62px] items-start justify-center overflow-hidden text-[59px] font-bold leading-[59px] mb-2 text-[#000000]"
                            role="region" aria-labelledby="buying-power-desc-90" aria-live="polite">
                            <div id="buying-power-desc-90" class="hidden">
                                Max budget is 27370
                            </div>
                            <span style="font-size: 0px"></span><span class="text-[22px]">$</span>
                            <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true"
                                style="
                          transition-delay: 1000ms;
                          transform: translateY(-177px);
                        ">
                                <div class="invisible">0</div>
                                <div class="text-center">0</div>
                                <div class="text-center">1</div>
                                <div class="text-center">2</div>
                                <div class="text-center">3</div>
                                <div class="text-center">4</div>
                                <div class="text-center">5</div>
                                <div class="text-center">6</div>
                                <div class="text-center">7</div>
                                <div class="text-center">8</div>
                                <div class="text-center">9</div>
                            </div>
                            <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true"
                                style="
                          transition-delay: 800ms;
                          transform: translateY(-472px);
                        ">
                                <div class="invisible">0</div>
                                <div class="text-center">0</div>
                                <div class="text-center">1</div>
                                <div class="text-center">2</div>
                                <div class="text-center">3</div>
                                <div class="text-center">4</div>
                                <div class="text-center">5</div>
                                <div class="text-center">6</div>
                                <div class="text-center">7</div>
                                <div class="text-center">8</div>
                                <div class="text-center">9</div>
                            </div>
                            <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true"
                                style="
                          transition-delay: 600ms;
                          transform: translateY(-59px);
                        ">
                                <div class="invisible">,</div>
                                <div class="text-center">,</div>
                            </div>
                            <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true"
                                style="
                          transition-delay: 400ms;
                          transform: translateY(-236px);
                        ">
                                <div class="invisible">0</div>
                                <div class="text-center">0</div>
                                <div class="text-center">1</div>
                                <div class="text-center">2</div>
                                <div class="text-center">3</div>
                                <div class="text-center">4</div>
                                <div class="text-center">5</div>
                                <div class="text-center">6</div>
                                <div class="text-center">7</div>
                                <div class="text-center">8</div>
                                <div class="text-center">9</div>
                            </div>
                            <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true"
                                style="
                          transition-delay: 200ms;
                          transform: translateY(-472px);
                        ">
                                <div class="invisible">0</div>
                                <div class="text-center">0</div>
                                <div class="text-center">1</div>
                                <div class="text-center">2</div>
                                <div class="text-center">3</div>
                                <div class="text-center">4</div>
                                <div class="text-center">5</div>
                                <div class="text-center">6</div>
                                <div class="text-center">7</div>
                                <div class="text-center">8</div>
                                <div class="text-center">9</div>
                            </div>
                            <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true"
                                style="
                          transition-delay: 0ms;
                          transform: translateY(-59px);
                        ">
                                <div class="invisible">0</div>
                                <div class="text-center">0</div>
                                <div class="text-center">1</div>
                                <div class="text-center">2</div>
                                <div class="text-center">3</div>
                                <div class="text-center">4</div>
                                <div class="text-center">5</div>
                                <div class="text-center">6</div>
                                <div class="text-center">7</div>
                                <div class="text-center">8</div>
                                <div class="text-center">9</div>
                            </div>
                        </div>
                        <p class="pt-1 pb-2">Est. buying power</p>
                        <p class="pb-3 text-muted">Based on 8.5% APR</p>
                        <div class="w-full border-t">
                            <div class="row pt-4 pb-3">
                                <div class="pr-3 col">
                                    <div class="field-container-challenger w-full text-left">
                                        <div class="field-wrapper-challenger field-label-padding-challenger">
                                            <div class="field-content-row field-with-suffix">
                                                <div class="field-input-label-challenger input-label-select">
                                                    <select required="" aria-label="Looking for"
                                                        class="form-select-element-challenger">
                                                        <option value="NEW">New car</option>
                                                        <option value="USED">Used car</option>
                                                    </select>
                                                    <div class="field-label-text-challenger" data-test="fieldLabel">
                                                        <label data-ignore-contrast="true">Looking for</label>
                                                    </div>
                                                </div>
                                                <div class="field-addon-challenger field-addon-challenger-suffix">
                                                    <svg viewBox="0 0 24 24" class="icon icon-fill-default"
                                                        aria-hidden="true" style="width: 24px; height: 24px">
                                                        <use href="#arrow_drop_down"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="field-message-challenger">
                                                <div class="field-message-text-challenger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="field-container-challenger w-full text-left">
                                        <div class="field-wrapper-challenger field-label-padding-challenger">
                                            <div class="field-content-row">
                                                <div class="field-input-label-challenger">
                                                    <input id="168" class="form-control-challenger"
                                                        aria-label="Down payment" placeholder=" " maxlength="10"
                                                        type="tel" data-test="downPayment" value="$3,000" />
                                                    <div class="field-label-text-challenger" data-test="fieldLabel">
                                                        <label for="168" data-ignore-contrast="true">Down
                                                            payment</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field-message-challenger">
                                                <div class="field-message-text-challenger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="pr-3 col">
                                    <div class="field-container-challenger w-full text-left">
                                        <div class="field-wrapper-challenger field-label-padding-challenger">
                                            <div class="field-content-row field-with-suffix">
                                                <div class="field-input-label-challenger input-label-select">
                                                    <select required="" aria-label="Credit score"
                                                        class="form-select-element-challenger"
                                                        data-test="creditScoreSelect">
                                                        <option value="POOR">300 - 579</option>
                                                        <option value="FAIR">580 - 669</option>
                                                        <option value="GOOD">670 - 739</option>
                                                        <option value="VERY_GOOD">740 - 799</option>
                                                        <option value="EXCELLENT">800 - 850</option>
                                                    </select>
                                                    <div class="field-label-text-challenger" data-test="fieldLabel">
                                                        <label data-ignore-contrast="true">Credit score</label>
                                                    </div>
                                                </div>
                                                <div class="field-addon-challenger field-addon-challenger-suffix">
                                                    <svg viewBox="0 0 24 24" class="icon icon-fill-default"
                                                        aria-hidden="true" style="width: 24px; height: 24px">
                                                        <use href="#arrow_drop_down"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="field-message-challenger">
                                                <div class="field-message-text-challenger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="field-container-challenger w-full text-left">
                                        <div class="field-wrapper-challenger field-label-padding-challenger">
                                            <div class="field-content-row">
                                                <div class="field-input-label-challenger">
                                                    <input id="171" class="form-control-challenger"
                                                        aria-label="Monthly payment" placeholder=" " maxlength="6"
                                                        type="tel" data-test="monthlyPayment" value="$500" />
                                                    <div class="field-label-text-challenger" data-test="fieldLabel">
                                                        <label for="171" data-ignore-contrast="true">Monthly
                                                            payment</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field-message-challenger">
                                                <div class="field-message-text-challenger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mt-2 flex items-center">
                                        <div class="toggle">
                                            <input id="buyingPowerModuleTradeIn" data-test="toggleInput" type="checkbox"
                                                class="toggle-input form-check-input" /><span class="toggle-track"><span
                                                    class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24"
                                                        class="icon icon-fill-default toggle-icon" aria-hidden="true"
                                                        style="width: 12px; height: 12px">
                                                        <use href="#check"></use>
                                                    </svg></span></span>
                                        </div>
                                        <label for="buyingPowerModuleTradeIn" class="ml-2 text-sm">Include
                                            trade-in</label>
                                    </div>
                                </div>
                            </div>
                            <button type="button" data-ignore-contrast="true" data-loading="false"
                                data-test="buyingPowerModuleCta" aria-haspopup="dialog"
                                class="mt-5 w-full btn btn-primary btn-md">
                                <span class="btn-inner">See your matches</span>
                            </button>
                        </div>
                    </div>
                    <div class="container">
                        <div class="border-b-2 pb-5 md:pb-0"></div>
                    </div>

                    <div class="why-choose-us">
                        <div class="container">
                            <div class="row section-row">
                                <div class="col-lg-12">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">why choose us</h3>
                                        <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">U</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">m</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">h</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">q</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">v</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div></div> </div><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">f</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h2>
                                    </div>
                                    <!-- Section Title End -->
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-6 order-lg-1 order-md-1 order-1">
                                    <!-- Why Choose Item Start -->
                                    <div class="why-choose-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="icon-box">
                                            <img src="{{asset('novaride/images/icon-why-choose-1.svg')}}" alt="">
                                        </div>
                                        <div class="why-choose-content">
                                            <h3>extensive fleet options</h3>
                                            <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus Hendrerit, Massa</p>
                                        </div>
                                    </div>
                                    <!-- Why Choose Item End -->

                                    <!-- Why Choose Item Start -->
                                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                        <div class="icon-box">
                                            <img src="{{asset('novaride/images/icon-why-choose-2.svg')}}" alt="">
                                        </div>
                                        <div class="why-choose-content">
                                            <h3>exceptional customer service</h3>
                                            <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus Hendrerit, Massa</p>
                                        </div>
                                    </div>
                                    <!-- Why Choose Item End -->
                                </div>

                                <div class="col-lg-4 col-md-12 order-lg-2 order-md-3 order-2">
                                    <div class="why-choose-image">
                                        <figure class="reveal" style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                            <img src="{{asset('novaride/images/why-choose-img.jpg')}}" alt="" style="transform: translate(0px, 0px);">
                                        </figure>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 order-lg-3 order-md-2 order-3">
                                    <!-- Why Choose Item Start -->
                                    <div class="why-choose-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="icon-box">
                                            <img src="{{asset('novaride/images/icon-why-choose-3.svg')}}" alt="">
                                        </div>
                                        <div class="why-choose-content">
                                            <h3>convenient locations</h3>
                                            <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus Hendrerit, Massa</p>
                                        </div>
                                    </div>
                                    <!-- Why Choose Item End -->

                                    <!-- Why Choose Item Start -->
                                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                        <div class="icon-box">
                                            <img src="{{asset('novaride/images/icon-why-choose-4.svg')}}" alt="">
                                        </div>
                                        <div class="why-choose-content">
                                            <h3>reliability and safety</h3>
                                            <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus Hendrerit, Massa</p>
                                        </div>
                                    </div>
                                    <!-- Why Choose Item End -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="cta-box bg-section">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-7">
                                    <!-- Cta Box Content Start -->
                                    <div class="cta-box-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: start; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">R</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">h</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">h</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">?</div></div> </div><div class="split-line" style="display: block; text-align: start; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">B</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">k</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">!</div></div></div></h2>
                                            <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Our friendly customer service team is here to help. Contact us anytime for support and inquiries.</p>
                                        </div>
                                        <!-- Section Title End -->

                                        <!-- Cta Box Btn Start -->
                                        <div class="cta-box-btn wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                            <a href="#" class="btn-default">contact us</a>
                                        </div>
                                        <!-- Cta Box Btn End -->
                                    </div>
                                    <!-- Cta Box Content End -->
                                </div>

                                <div class="col-lg-6 col-md-5">
                                    <!-- Cta Box Image Start -->
                                    <div class="cat-box-image">
                                        <figure>
                                            <img src="{{asset('novaride/images/cta-car-img.png')}}" alt="">
                                        </figure>
                                    </div>
                                    <!-- Cta Box Image End -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-2 px-0 md:px-3">
                        <div data-test="shopYourFavortieBrandSection"
                            class="flex flex-col justify-center rounded bg-white py-5 px-3 text-center md:px-0 lg:px-5">
                            <h2 class="heading-2 normal-case pt-3">
                                Shop your favorite&nbsp;brand
                            </h2>
                            <div data-reach-tabs="" data-orientation="horizontal">
                                <div role="tablist" aria-orientation="horizontal"
                                    class="switch-bar switch-bar-block mx-auto mt-5 max-w-[250px]"
                                    data-reach-tab-list="">
                                    <button aria-controls="tabs--1--panel--0" aria-selected="true" role="tab"
                                        tabindex="0" class="w-full switch" data-test="newCarsMakes"
                                        data-reach-tab="" data-orientation="horizontal" id="tabs--1--tab--0"
                                        type="button" data-selected="">
                                        New Cars</button><button aria-controls="tabs--1--panel--1" aria-selected="false"
                                        role="tab" tabindex="-1" class="w-full switch"
                                        data-test="usedCarsMakes" data-reach-tab="" data-orientation="horizontal"
                                        id="tabs--1--tab--1" type="button">
                                        Used Cars
                                    </button>
                                </div>
                                <div class="pt-4" data-reach-tab-panels="" id="seeMoreSection">
                                    <div class="see-more space-y-2" data-ignore-contrast="true">
                                        <div data-test="seeMoreBody"
                                            style="
                                overflow: hidden;
                                max-height: calc(386px - 0.625rem);
                              ">
                                            <div class="px-1 pt-1 lg:px-3">
                                                <div aria-labelledby="tabs--1--tab--0" role="tabpanel" tabindex="0"
                                                    data-reach-tab-panel="" id="tabs--1--panel--0">
                                                    <div data-test="shopByPopularBrandSection" data-test-item="New"
                                                        class="mb-5 grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4">
                                                        <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="toyota"
                                                            href="/overview/toyota/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Toyota</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="bmw"
                                                            href="/overview/bmw/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">BMW</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard"
                                                            data-test-item="chevrolet" href="/overview/chevrolet/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Chevrolet</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="honda"
                                                            href="/overview/honda/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Honda</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="ford"
                                                            href="/overview/ford/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Ford</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="audi"
                                                            href="/overview/audi/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Audi</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="acura"
                                                            href="/overview/acura/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Acura</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="hyundai"
                                                            href="/overview/hyundai/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Hyundai</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="dodge"
                                                            href="/overview/dodge/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="absolute top-[10px] left-[-37px] inline w-[115px] -rotate-45 bg-[#f1fafa] p-1 text-[9px] font-bold text-green md:top-[16px] md:left-[-28px] md:text-xs">
                                                                    Save $1K*
                                                                </div>
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Dodge</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard"
                                                            data-test-item="mercedes-benz"
                                                            href="/overview/mercedes-benz/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span
                                                                    class="pt-1 md:pt-0 md:text-left">Mercedes-Benz</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="kia"
                                                            href="/overview/kia/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Kia</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="lexus"
                                                            href="/overview/lexus/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Lexus</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard"
                                                            data-test-item="alfa-romeo" href="/overview/alfa-romeo/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="absolute top-[10px] left-[-37px] inline w-[115px] -rotate-45 bg-[#f1fafa] p-1 text-[9px] font-bold text-green md:top-[16px] md:left-[-28px] md:text-xs">
                                                                    Save $1K*
                                                                </div>
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Alfa Romeo</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="buick"
                                                            href="/overview/buick/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Buick</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="cadillac"
                                                            href="/overview/cadillac/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Cadillac</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="chrysler"
                                                            href="/overview/chrysler/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="absolute top-[10px] left-[-37px] inline w-[115px] -rotate-45 bg-[#f1fafa] p-1 text-[9px] font-bold text-green md:top-[16px] md:left-[-28px] md:text-xs">
                                                                    Save $1K*
                                                                </div>
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Chrysler</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="fiat"
                                                            href="/overview/fiat/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="absolute top-[10px] left-[-37px] inline w-[115px] -rotate-45 bg-[#f1fafa] p-1 text-[9px] font-bold text-green md:top-[16px] md:left-[-28px] md:text-xs">
                                                                    Save $1K*
                                                                </div>
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">FIAT</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="genesis"
                                                            href="/overview/genesis/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Genesis</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="gmc"
                                                            href="/overview/gmc/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">GMC</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="infiniti"
                                                            href="/overview/infiniti/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">INFINITI</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="jaguar"
                                                            href="/overview/jaguar/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Jaguar</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="jeep"
                                                            href="/overview/jeep/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="absolute top-[10px] left-[-37px] inline w-[115px] -rotate-45 bg-[#f1fafa] p-1 text-[9px] font-bold text-green md:top-[16px] md:left-[-28px] md:text-xs">
                                                                    Save $1K*
                                                                </div>
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Jeep</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard"
                                                            data-test-item="land-rover" href="/overview/land-rover/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Land Rover</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="lincoln"
                                                            href="/overview/lincoln/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Lincoln</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="maserati"
                                                            href="/overview/maserati/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Maserati</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="mazda"
                                                            href="/overview/mazda/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Mazda</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="mini"
                                                            href="/overview/mini/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">MINI</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard"
                                                            data-test-item="mitsubishi" href="/overview/mitsubishi/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Mitsubishi</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="nissan"
                                                            href="/overview/nissan/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Nissan</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="ram"
                                                            href="/overview/ram/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="absolute top-[10px] left-[-37px] inline w-[115px] -rotate-45 bg-[#f1fafa] p-1 text-[9px] font-bold text-green md:top-[16px] md:left-[-28px] md:text-xs">
                                                                    Save $1K*
                                                                </div>
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Ram</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="subaru"
                                                            href="/overview/subaru/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Subaru</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard"
                                                            data-test-item="volkswagen" href="/overview/volkswagen/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Volkswagen</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="volvo"
                                                            href="/overview/volvo/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Volvos</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div aria-labelledby="tabs--1--tab--1" role="tabpanel" tabindex="-1"
                                                    data-reach-tab-panel="" id="tabs--1--panel--1" hidden="">
                                                    <div data-test="shopByPopularBrandSection" data-test-item="Used"
                                                        class="mb-5 grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4">
                                                        <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="toyota"
                                                            href="/used-cars-for-sale/listings/toyota/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Toyota</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="bmw"
                                                            href="/used-cars-for-sale/listings/bmw/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">BMW</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard"
                                                            data-test-item="chevrolet"
                                                            href="/used-cars-for-sale/listings/chevrolet/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Chevrolet</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="honda"
                                                            href="/used-cars-for-sale/listings/honda/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Honda</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="ford"
                                                            href="/used-cars-for-sale/listings/ford/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Ford</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="audi"
                                                            href="/used-cars-for-sale/listings/audi/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Audi</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="acura"
                                                            href="/used-cars-for-sale/listings/acura/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Acura</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="hyundai"
                                                            href="/used-cars-for-sale/listings/hyundai/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Hyundai</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="dodge"
                                                            href="/used-cars-for-sale/listings/dodge/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Dodge</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard"
                                                            data-test-item="mercedes-benz"
                                                            href="/used-cars-for-sale/listings/mercedes-benz/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span
                                                                    class="pt-1 md:pt-0 md:text-left">Mercedes-Benz</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="kia"
                                                            href="/used-cars-for-sale/listings/kia/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Kia</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="lexus"
                                                            href="/used-cars-for-sale/listings/lexus/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Lexus</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard"
                                                            data-test-item="alfa-romeo"
                                                            href="/used-cars-for-sale/listings/alfa-romeo/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Alfa Romeo</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="buick"
                                                            href="/used-cars-for-sale/listings/buick/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Buick</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="cadillac"
                                                            href="/used-cars-for-sale/listings/cadillac/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Cadillac</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="chrysler"
                                                            href="/used-cars-for-sale/listings/chrysler/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Chrysler</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="fiat"
                                                            href="/used-cars-for-sale/listings/fiat/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">FIAT</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="genesis"
                                                            href="/used-cars-for-sale/listings/genesis/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Genesis</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="gmc"
                                                            href="/used-cars-for-sale/listings/gmc/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">GMC</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="infiniti"
                                                            href="/used-cars-for-sale/listings/infiniti/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">INFINITI</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="jaguar"
                                                            href="/used-cars-for-sale/listings/jaguar/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Jaguar</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="jeep"
                                                            href="/used-cars-for-sale/listings/jeep/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Jeep</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard"
                                                            data-test-item="land-rover"
                                                            href="/used-cars-for-sale/listings/land-rover/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Land Rover</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="lincoln"
                                                            href="/used-cars-for-sale/listings/lincoln/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Lincoln</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="maserati"
                                                            href="/used-cars-for-sale/listings/maserati/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Maserati</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="mazda"
                                                            href="/used-cars-for-sale/listings/mazda/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Mazda</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="mini"
                                                            href="/used-cars-for-sale/listings/mini/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">MINI</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard"
                                                            data-test-item="mitsubishi"
                                                            href="/used-cars-for-sale/listings/mitsubishi/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Mitsubishi</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="nissan"
                                                            href="/used-cars-for-sale/listings/nissan/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Nissan</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="ram"
                                                            href="/used-cars-for-sale/listings/ram/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Ram</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="subaru"
                                                            href="/used-cars-for-sale/listings/subaru/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Subaru</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard"
                                                            data-test-item="volkswagen"
                                                            href="/used-cars-for-sale/listings/volkswagen/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                    <div class="picture-container hidden md:block"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 40px;
                                              height: 40px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x,
                                                https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Volkswagen</span>
                                                            </div>
                                                        </a><a
                                                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                            data-test="shopByPopularBrandCard" data-test-item="volvo"
                                                            href="/used-cars-for-sale/listings/volvo/">
                                                            <div data-test="cardContent"
                                                                class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                                <div
                                                                    class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                    <div class="picture-container md:hidden"
                                                                        style="
                                              padding-bottom: 0;
                                              width: 66px;
                                              height: 33px;
                                            ">
                                                                        <img class="picture-inner"
                                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                            srcset="
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66  1x,
                                                https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x
                                              "
                                                                            alt="" role="presentation" />
                                                                    </div>
                                                                </div>
                                                                <span class="pt-1 md:pt-0 md:text-left">Volvo</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right mt-0" data-test="seeMoreLinkContainer">
                                            <div class="see-more-link text-center print:hidden">
                                                <button type="button" data-ignore-contrast="false"
                                                    data-loading="false" data-test="seeMoreButton"
                                                    class="btn btn-secondary btn-md seeMorebtn">
                                                    <span class="btn-inner"><span class="flex items-center">See more<svg
                                                                viewBox="0 0 24 24"
                                                                class="icon icon-after icon-fill-default see-more-icon-angle"
                                                                aria-hidden="true" style="width: 24px; height: 24px">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></span></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div data-test="seeMoreFade" class="see-more-fade"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="pt-4" data-reach-tab-panels="" id="seeLessSection" style="display: none">
                                <div class="see-more space-y-2" data-ignore-contrast="true">
                                    <div data-test="seeMoreBody" style="height: auto;">
                                        <div class="px-1 pt-1 lg:px-3">
                                            <div aria-labelledby="tabs--1--tab--0" role="tabpanel" tabindex="0"
                                                data-reach-tab-panel="" id="tabs--1--panel--0">
                                                <div data-test="shopByPopularBrandSection" data-test-item="New"
                                                    class="mb-5 grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4"><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="acura"
                                                        href="/overview/acura/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Acura</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="alfa-romeo"
                                                        href="/overview/alfa-romeo/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Alfa
                                                                Romeo</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="audi"
                                                        href="/overview/audi/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Audi</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="bmw"
                                                        href="/overview/bmw/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">BMW</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="buick"
                                                        href="/overview/buick/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Buick</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="cadillac"
                                                        href="/overview/cadillac/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Cadillac</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="chevrolet"
                                                        href="/overview/chevrolet/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Chevrolet</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="chrysler"
                                                        href="/overview/chrysler/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Chrysler</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="dodge"
                                                        href="/overview/dodge/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Dodge</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="fiat"
                                                        href="/overview/fiat/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">FIAT</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="ford"
                                                        href="/overview/ford/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Ford</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="genesis"
                                                        href="/overview/genesis/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Genesis</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="gmc"
                                                        href="/overview/gmc/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">GMC</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="honda"
                                                        href="/overview/honda/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Honda</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="hyundai"
                                                        href="/overview/hyundai/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Hyundai</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="infiniti"
                                                        href="/overview/infiniti/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">INFINITI</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="jaguar"
                                                        href="/overview/jaguar/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Jaguar</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="jeep"
                                                        href="/overview/jeep/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Jeep</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="kia"
                                                        href="/overview/kia/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Kia</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="land-rover"
                                                        href="/overview/land-rover/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Land
                                                                Rover</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="lexus"
                                                        href="/overview/lexus/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Lexus</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="lincoln"
                                                        href="/overview/lincoln/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Lincoln</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="maserati"
                                                        href="/overview/maserati/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Maserati</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="mazda"
                                                        href="/overview/mazda/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Mazda</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard"
                                                        data-test-item="mercedes-benz" href="/overview/mercedes-benz/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span
                                                                class="pt-1 md:pt-0 md:text-left">Mercedes-Benz</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="mini"
                                                        href="/overview/mini/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">MINI</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="mitsubishi"
                                                        href="/overview/mitsubishi/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span
                                                                class="pt-1 md:pt-0 md:text-left">Mitsubishi</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="nissan"
                                                        href="/overview/nissan/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Nissan</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="ram"
                                                        href="/overview/ram/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Ram</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="subaru"
                                                        href="/overview/subaru/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Subaru</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="toyota"
                                                        href="/overview/toyota/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Toyota</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="volkswagen"
                                                        href="/overview/volkswagen/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span
                                                                class="pt-1 md:pt-0 md:text-left">Volkswagen</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="volvo"
                                                        href="/overview/volvo/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Volvo</span>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div aria-labelledby="tabs--1--tab--1" role="tabpanel" tabindex="-1"
                                                data-reach-tab-panel="" id="tabs--1--panel--1" hidden="">
                                                <div data-test="shopByPopularBrandSection" data-test-item="Used"
                                                    class="mb-5 grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4"><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="acura"
                                                        href="/used-cars-for-sale/listings/acura/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Acura</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="alfa-romeo"
                                                        href="/used-cars-for-sale/listings/alfa-romeo/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Alfa
                                                                Romeo</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="audi"
                                                        href="/used-cars-for-sale/listings/audi/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Audi</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="bmw"
                                                        href="/used-cars-for-sale/listings/bmw/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">BMW</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="buick"
                                                        href="/used-cars-for-sale/listings/buick/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Buick</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="cadillac"
                                                        href="/used-cars-for-sale/listings/cadillac/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Cadillac</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="chevrolet"
                                                        href="/used-cars-for-sale/listings/chevrolet/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Chevrolet</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="chrysler"
                                                        href="/used-cars-for-sale/listings/chrysler/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Chrysler</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="dodge"
                                                        href="/used-cars-for-sale/listings/dodge/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Dodge</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="fiat"
                                                        href="/used-cars-for-sale/listings/fiat/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">FIAT</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="ford"
                                                        href="/used-cars-for-sale/listings/ford/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Ford</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="genesis"
                                                        href="/used-cars-for-sale/listings/genesis/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Genesis</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="gmc"
                                                        href="/used-cars-for-sale/listings/gmc/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">GMC</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="honda"
                                                        href="/used-cars-for-sale/listings/honda/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Honda</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="hyundai"
                                                        href="/used-cars-for-sale/listings/hyundai/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Hyundai</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="infiniti"
                                                        href="/used-cars-for-sale/listings/infiniti/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">INFINITI</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="jaguar"
                                                        href="/used-cars-for-sale/listings/jaguar/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Jaguar</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="jeep"
                                                        href="/used-cars-for-sale/listings/jeep/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Jeep</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="kia"
                                                        href="/used-cars-for-sale/listings/kia/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Kia</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="land-rover"
                                                        href="/used-cars-for-sale/listings/land-rover/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Land
                                                                Rover</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="lexus"
                                                        href="/used-cars-for-sale/listings/lexus/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Lexus</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="lincoln"
                                                        href="/used-cars-for-sale/listings/lincoln/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Lincoln</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="maserati"
                                                        href="/used-cars-for-sale/listings/maserati/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Maserati</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="mazda"
                                                        href="/used-cars-for-sale/listings/mazda/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Mazda</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard"
                                                        data-test-item="mercedes-benz"
                                                        href="/used-cars-for-sale/listings/mercedes-benz/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span
                                                                class="pt-1 md:pt-0 md:text-left">Mercedes-Benz</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="mini"
                                                        href="/used-cars-for-sale/listings/mini/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">MINI</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="mitsubishi"
                                                        href="/used-cars-for-sale/listings/mitsubishi/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span
                                                                class="pt-1 md:pt-0 md:text-left">Mitsubishi</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="nissan"
                                                        href="/used-cars-for-sale/listings/nissan/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Nissan</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="ram"
                                                        href="/used-cars-for-sale/listings/ram/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Ram</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="subaru"
                                                        href="/used-cars-for-sale/listings/subaru/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Subaru</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="toyota"
                                                        href="/used-cars-for-sale/listings/toyota/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Toyota</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="volkswagen"
                                                        href="/used-cars-for-sale/listings/volkswagen/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span
                                                                class="pt-1 md:pt-0 md:text-left">Volkswagen</span>
                                                        </div>
                                                    </a><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]"
                                                        data-test="shopByPopularBrandCard" data-test-item="volvo"
                                                        href="/used-cars-for-sale/listings/volvo/">
                                                        <div data-test="cardContent"
                                                            class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div
                                                                class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden"
                                                                    style="padding-bottom:0;width:66px;height:33px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x"
                                                                        alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block"
                                                                    style="padding-bottom:0;width:40px;height:40px"><img
                                                                        class="picture-inner"
                                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40"
                                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x"
                                                                        alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Volvo</span>
                                                        </div>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right mt-0" data-test="seeMoreLinkContainer">
                                        <div class="see-more-link text-center print:hidden">
                                            <button type="button" data-ignore-contrast="false" data-loading="false"
                                                data-test="seeMoreButton" class="btn btn-secondary btn-md seeLessbtn">
                                                <span class="btn-inner"><span class="flex items-center">See less<svg
                                                            viewBox="0 0 24 24"
                                                            class="icon icon-after icon-fill-default see-more-icon-angle"
                                                            aria-hidden="true" style="width: 24px; height: 24px;">
                                                            <use href="#keyboard_arrow_up"></use>
                                                        </svg></span></span></button>
                                        </div>
                                    </div>
                                    <div data-test="seeMoreFade" class="see-more-fade invisible"></div>
                                </div>
                            </div>


                            <p class="px-1 pt-5 text-left text-xs text-muted lg:px-3">
                                *Vehicle incentives and rebates are programs made
                                available by car manufacturers to encourage vehicle
                                sales by providing consumers with cash allowances or
                                favorable financing/lease rates. Incentives can vary by
                                location, vehicle configuration, as well as the buyer's
                                method of payment (cash purchase, financing, lease).
                                Some incentives can be stacked with other incentive
                                programs, and some have eligibility conditions that must
                                be met to qualify. Additional incentives are sometimes
                                targeted to customer segment groups like college
                                graduates, military members, etc. Incentives are
                                normally subject to change and governed by specific
                                eligibility rules. Please see your local dealer for
                                details on incentives that might be available
                                to&nbsp;you.
                            </p>
                        </div>
                    </div>

                    <div class="luxury-collection">
                        <div class="container-fluid">
                            <div class="row no-gutters">
                                <div class="col-lg-12">
                                    <div class="luxury-collection-box">
                                        <!-- Luxury Collection Item Start -->
                                        <div class="luxury-collection-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                            <!-- Luxury Collection Image Start -->
                                            <div class="luxury-collection-image" data-cursor-text="View">
                                                <a href="#">
                                                    <figure>
                                                        <img src="{{asset('novaride/images/luxury-collection-img-1.jpg')}}" alt="">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- Luxury Collection Image End -->

                                            <!-- Luxury Collection Title Start -->
                                            <div class="luxury-collection-title">
                                                <h2>sport car</h2>
                                            </div>
                                            <!-- Luxury Collection Title End -->

                                            <!-- Luxury Collection Btn Start -->
                                            <div class="luxury-collection-btn">
                                                <a href="#" class="section-icon-btn"><img src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Luxury Collection Btn End -->
                                        </div>
                                        <!-- Luxury Collection Item End -->

                                        <!-- Luxury Collection Item Start -->
                                        <div class="luxury-collection-item wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                            <!-- Luxury Collection Image Start -->
                                            <div class="luxury-collection-image" data-cursor-text="View">
                                                <a href="#">
                                                    <figure>
                                                        <img src="{{asset('novaride/images/luxury-collection-img-2.jpg')}}" alt="">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- Luxury Collection Image End -->

                                            <!-- Luxury Collection Title Start -->
                                            <div class="luxury-collection-title">
                                                <h2>convertible car</h2>
                                            </div>
                                            <!-- Luxury Collection Title End -->

                                            <!-- Luxury Collection Footer Start -->
                                            <div class="luxury-collection-btn">
                                                <a href="#" class="section-icon-btn"><img src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Luxury Collection Footer End -->
                                        </div>
                                        <!-- Luxury Collection Item End -->

                                        <!-- Luxury Collection Item Start -->
                                        <div class="luxury-collection-item wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                            <!-- Luxury Collection Image Start -->
                                            <div class="luxury-collection-image" data-cursor-text="View">
                                                <a href="#">
                                                    <figure>
                                                        <img src="{{asset('novaride/images/luxury-collection-img-3.jpg')}}" alt="">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- Luxury Collection Image End -->

                                            <!-- Luxury Collection Title Start -->
                                            <div class="luxury-collection-title">
                                                <h2>sedan car</h2>
                                            </div>
                                            <!-- Luxury Collection Title End -->

                                            <!-- Luxury Collection Footer Start -->
                                            <div class="luxury-collection-btn">
                                                <a href="#" class="section-icon-btn"><img src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Luxury Collection Footer End -->
                                        </div>
                                        <!-- Luxury Collection Item End -->

                                        <!-- Luxury Collection Item Start -->
                                        <div class="luxury-collection-item wow fadeInUp" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                                            <!-- Luxury Collection Image Start -->
                                            <div class="luxury-collection-image" data-cursor-text="View">
                                                <a href="#">
                                                    <figure>
                                                        <img src="{{asset('novaride/images/luxury-collection-img-4.jpg')}}" alt="">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- Luxury Collection Image End -->

                                            <!-- Luxury Collection Title Start -->
                                            <div class="luxury-collection-title">
                                                <h2>luxury car</h2>
                                            </div>
                                            <!-- Luxury Collection Title End -->

                                            <!-- Luxury Collection Footer Start -->
                                            <div class="luxury-collection-btn">
                                                <a href="#" class="section-icon-btn"><img src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Luxury Collection Footer End -->
                                        </div>
                                        <!-- Luxury Collection Item End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="our-testimonial">
                        <div class="container">
                            <div class="row section-row">
                                <div class="col-lg-12">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">testimonials</h3>
                                        <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">W</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">h</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">m</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div></div> </div><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">g</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">b</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h2>
                                    </div>
                                    <!-- Section Title End -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Testimonial Slider Start -->
                                    <div class="testimonial-slider">
                                        <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                            <div class="swiper-wrapper" data-cursor-text="Drag" id="swiper-wrapper-b43776f6da33969f" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-433.333px, 0px, 0px); transition-delay: 0ms;">
                                                <!-- Testimonial Slide Start -->

                                                <!-- Testimonial Slide End -->

                                                <!-- Testimonial Slide Start -->

                                                <!-- Testimonial Slide End -->

                                                <!-- Testimonial Slide Start -->

                                                <!-- Testimonial Slide End -->

                                                <!-- Testimonial Slide Start -->

                                                <!-- Testimonial Slide End -->
                                            <div class="swiper-slide swiper-slide-prev" style="width: 403.333px; margin-right: 30px;" role="group" aria-label="3 / 4" data-swiper-slide-index="2">
                                                    <div class="testimonial-item">
                                                        <div class="testimonial-header">
                                                            <div class="testimonial-rating">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </div>
                                                            <div class="testimonial-content">
                                                                <p>Renting a car from nova ride was a great decision. Not only did I get a reliable and comfortable vehicle, but the prices were also very competitive.</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-body">
                                                            <div class="author-image">
                                                                <figure class="image-anime">
                                                                    <img src="{{asset('novaride/images/author-3.jpg')}}" alt="">
                                                                </figure>
                                                            </div>
                                                            <div class="author-content">
                                                                <h3>leslie alexander</h3>
                                                                <p>project manager</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="4 / 4" data-swiper-slide-index="3" style="width: 403.333px; margin-right: 30px;">
                                                    <div class="testimonial-item">
                                                        <div class="testimonial-header">
                                                            <div class="testimonial-rating">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>
                                                            <div class="testimonial-content">
                                                                <p>Renting a car from nova ride was a great decision. Not only did I get a reliable and comfortable vehicle, but the prices were also very competitive.</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-body">
                                                            <div class="author-image">
                                                                <figure class="image-anime">
                                                                    <img src="{{asset('novaride/images/author-4.jpg')}}" alt="">
                                                                </figure>
                                                            </div>
                                                            <div class="author-content">
                                                                <h3>alis white</h3>
                                                                <p>project manager</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><div class="swiper-slide swiper-slide-next" style="width: 403.333px; margin-right: 30px;" role="group" aria-label="1 / 4" data-swiper-slide-index="0">
                                                    <div class="testimonial-item">
                                                        <div class="testimonial-header">
                                                            <div class="testimonial-rating">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>
                                                            <div class="testimonial-content">
                                                                <p>Renting a car from nova ride was a great decision. Not only did I get a reliable and comfortable vehicle, but the prices were also very competitive.</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-body">
                                                            <div class="author-image">
                                                                <figure class="image-anime">
                                                                    <img src="{{asset('novaride/images/author-1.jpg')}}" alt="">
                                                                </figure>
                                                            </div>
                                                            <div class="author-content">
                                                                <h3>floyd miles</h3>
                                                                <p>project manager</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><div class="swiper-slide" style="width: 403.333px; margin-right: 30px;" role="group" aria-label="2 / 4" data-swiper-slide-index="1">
                                                    <div class="testimonial-item">
                                                        <div class="testimonial-header">
                                                            <div class="testimonial-rating">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </div>
                                                            <div class="testimonial-content">
                                                                <p>Renting a car from nova ride was a great decision. Not only did I get a reliable and comfortable vehicle, but the prices were also very competitive.</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-body">
                                                            <div class="author-image">
                                                                <figure class="image-anime">
                                                                    <img src="{{asset('novaride/images/author-2.jpg')}}" alt="">
                                                                </figure>
                                                            </div>
                                                            <div class="author-content">
                                                                <h3>annette black</h3>
                                                                <p>project manager</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div>
                                            <div class="testimonial-btn">
                                                <div class="testimonial-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b43776f6da33969f"></div>
                                                <div class="testimonial-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b43776f6da33969f"></div>
                                            </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                    </div>
                                    <!-- Testimonial Slider End -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="our-faqs bg-section">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-lg-1 order-md-2 order-2">
                                    <!-- Our Faqs Image Start -->
                                    <div class="our-faqs-image">
                                        <div class="faqs-img-1">
                                            <figure class="image-anime">
                                                <img src="{{asset('novaride/images/our-faqs-img-1.jpg')}}" alt="">
                                            </figure>
                                        </div>

                                        <div class="faqs-img-2">
                                            <figure class="image-anime">
                                                <img src="{{asset('novaride/images/our-faqs-img-2.jpg')}}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- Our Faqs Image End -->
                                </div>

                                <div class="col-lg-6 order-lg-2 order-md-1 order-1">
                                    <!-- Our Faqs Content Start -->
                                    <div class="our-faqs-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">frequently asked questions</h3>
                                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: start; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">E</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">v</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">h</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">g</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div></div> </div><div class="split-line" style="display: block; text-align: start; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">k</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">w</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">b</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">v</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h2>
                                        </div>
                                        <!-- Section Title End -->

                                        <!-- Our Faqs Accordion Start -->
                                        <div class="our-faqs-accordion" id="faqsaccordion">
                                            <!-- FAQ Item Start -->
                                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                                <h2 class="accordion-header" id="faqheading1">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqcollapse1" aria-expanded="false" aria-controls="faqcollapse1">
                                                        What do I need to rent a car?
                                                    </button>
                                                </h2>
                                                <div id="faqcollapse1" class="accordion-collapse collapse" aria-labelledby="faqheading1" data-bs-parent="#faqsaccordion" style="">
                                                    <div class="accordion-body">
                                                        <p>Explore our diverse selection of high-end vehicles, choose your preferred pickup and return dates, and select a location that best fits your needs.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- FAQ Item End -->

                                            <!-- FAQ Item Start -->
                                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                <h2 class="accordion-header" id="faqheading2">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqcollapse2" aria-expanded="false" aria-controls="faqcollapse2">
                                                        How old do I need to be to rent a car?
                                                    </button>
                                                </h2>
                                                <div id="faqcollapse2" class="accordion-collapse collapse" aria-labelledby="faqheading2" data-bs-parent="#faqsaccordion" style="">
                                                    <div class="accordion-body">
                                                        <p>Explore our diverse selection of high-end vehicles, choose your preferred pickup and return dates, and select a location that best fits your needs.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- FAQ Item End -->

                                            <!-- FAQ Item Start -->
                                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                                                <h2 class="accordion-header" id="faqheading3">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqcollapse3" aria-expanded="true" aria-controls="faqcollapse3">
                                                        Can I rent a car with a debit card?
                                                    </button>
                                                </h2>
                                                <div id="faqcollapse3" class="accordion-collapse collapse show" aria-labelledby="faqheading3" data-bs-parent="#faqsaccordion" style="">
                                                    <div class="accordion-body">
                                                        <p>Explore our diverse selection of high-end vehicles, choose your preferred pickup and return dates, and select a location that best fits your needs.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- FAQ Item End -->
                                        </div>
                                        <!-- Our Faqs Accordion End -->
                                    </div>
                                    <!-- Our Faqs Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
