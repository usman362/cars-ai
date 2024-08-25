@extends('site.layouts.app')
@section('content')
    <main id="mainContent"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div data-test="homepage">
            <div class="w-full overflow-hidden bg-light pt-[60px]">
                <div data-test="home">
                    <div class="bg-contain md:bg-cover bg-no-repeat text-center bg-top pt-5 pb-3 md:py-7 relative bg-[image:var(--image-url)] md:bg-[image:var(--image-url-md)] lg:bg-[image:var(--image-url-lg)] xl:bg-[image:var(--image-url-xl)]"
                        style="
                      --image-url: url({{asset('assets/_next/static/images/hero-image-sm-31b0612268622ca7f2358922fa94cc13.jpg')}});
                      --image-url-md: url({{asset('assets/_next/static/images/hero-image-md-d2dcd3952e4ff40e1159ecdfd35b28c0.jpg')}});
                      --image-url-lg: url({{asset('assets/_next/static/images/hero-image-lg-7c2054dd909421922770212e6c57ce6f.jpg')}});
                      --image-url-xl: url({{asset('assets/_next/static/images/hero-image-xl-5c67228d03ca284ab0bd00da04d744b2.jpg')}});
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
                    <div data-test="tcplusBanner" class="bg-black text-center text-white">
                        <div class="relative mx-auto max-w-[1600px] space-y-3 py-5 text-center">
                            <div class="relative mx-auto h-[85px]">
                                <div class="picture-container absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 scale-75 sm:scale-100"
                                    style="padding-bottom: 0; width: 506px; height: 85px">
                                    <img class="picture-inner picture-svg"
                                        src="{{asset('assets/_next/static/images/title-centered-3dafb7bfa74195039786a74199c67f39.svg')}}"
                                        alt="Buy online. Have it delivered." />
                                </div>
                                <button data-test="infoButtonButton" aria-label="Info" color="secondary"
                                    style="--info-border-color: white"
                                    class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)] absolute top-1/2 left-1/2 z-1 translate-x-[140px] translate-y-[4px] sm:translate-x-[185px] sm:translate-y-[8px]">
                                    <svg viewBox="0 0 24 24" class="icon icon-fill-default flex-shrink-0 fill-white"
                                        style="width: 18px; height: 18px" aria-hidden="true">
                                        <use href="#info"></use>
                                    </svg>
                                </button>
                            </div>
                            <div
                                class="rounded-[10px] border border-[color:var(--gray-900)] bg-[color:rgba(30,30,30,0.5)] relative z-[2] mx-4 max-w-full space-y-4 py-4 px-3 backdrop-blur-lg sm:px-4 min-[1540px]:mx-auto min-[1540px]:max-w-[1190px]">
                                <div class="heading-2 normal-case font-[500]">
                                    How does
                                    <div class="picture-container mx-2"
                                        style="
                              padding-bottom: 0;
                              width: 131px;
                              height: 23px;
                            ">
                                        <img class="picture-inner picture-svg"
                                            src="{{asset('assets/_next/static/images/tc-plus-dark-theme-logo-f9a028938a01d05a636e4a5a8a188099.svg')}}"
                                            alt="TrueCar Plus" />
                                    </div>
                                    work?
                                </div>
                                <ol
                                    class="mx-auto grid max-w-[400px] gap-3 p-0 pr-3 text-left min-[1080px]:max-w-full min-[1080px]:grid-cols-[repeat(3,auto)] min-[1140px]:pr-5 min-[1540px]:pr-7">
                                    <li class="flex list-none items-start gap-2-5">
                                        <div class="picture-container -mr-3 shrink-0 origin-top-left scale-75 min-[1080px]:mr-0 min-[1080px]:scale-100"
                                            style="
                                padding-bottom: 0;
                                width: 74px;
                                height: 94px;
                              ">
                                            <img class="picture-inner picture-svg"
                                                src="{{asset('assets/_next/static/images/number-1-5f3f6bfeb32e9113f9a4ed55c11f4b94.svg')}}"
                                                alt="1" />
                                        </div>
                                        <div class="space-y-1">
                                            <div class="heading-3 normal-case font-[500]">
                                                You're in total control
                                            </div>
                                            <p>
                                                Shop at your own pace and choose from a large
                                                selection of new and used vehicles.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex list-none items-start gap-2-5">
                                        <div class="picture-container -mr-3 shrink-0 origin-top-left scale-75 min-[1080px]:mr-0 min-[1080px]:scale-100"
                                            style="
                                padding-bottom: 0;
                                width: 74px;
                                height: 94px;
                              ">
                                            <img class="picture-inner picture-svg"
                                                src="{{asset('assets/_next/static/images/number-2-2db898bea518a47edfe0cbeade0a155b.svg')}}"
                                                alt="1" />
                                        </div>
                                        <div class="space-y-1">
                                            <div class="heading-3 normal-case font-[500]">
                                                Find the right financing
                                            </div>
                                            <p>
                                                See your actual monthly payment and select the
                                                lender that fits you best.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex list-none items-start gap-2-5">
                                        <div class="picture-container -mr-3 shrink-0 origin-top-left scale-75 min-[1080px]:mr-0 min-[1080px]:scale-100"
                                            style="
                                padding-bottom: 0;
                                width: 74px;
                                height: 94px;
                              ">
                                            <img class="picture-inner picture-svg"
                                                src="{{asset('assets/_next/static/images/number-3-7df2c01b3f48551ae97e84ee42f4a600.svg')}}"
                                                alt="1" />
                                        </div>
                                        <div class="space-y-1">
                                            <div class="heading-3 normal-case font-[500]">
                                                Receive your car<button data-test="infoButtonButton" aria-label="Info"
                                                    color="secondary" style="--info-border-color: white"
                                                    class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)] ml-2">
                                                    <svg viewBox="0 0 24 24"
                                                        class="icon icon-fill-default flex-shrink-0 fill-white"
                                                        style="width: 18px; height: 18px" aria-hidden="true">
                                                        <use href="#info"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <p>
                                                Schedule delivery (for used cars only) or
                                                pickup, to begin enjoying your new ride!
                                            </p>
                                        </div>
                                    </li>
                                </ol>
                                <a data-ignore-contrast="true" data-loading="false" data-test="tcplusBannerCTA"
                                    class="btn-dark btn btn-primary btn-lg"
                                    href="/used-cars-for-sale/listings/?buyOnline=true"><span class="btn-inner">Buy
                                        online</span></a>
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
                                            src="{{asset('assets/_next/static/images/buying-power-lg-4ade71d5fe5a6d55b8b876e7e957fd2d.png')}}?auto=format&amp;h=26.153846153846153&amp;w=60"
                                            srcset="
                                {{asset('assets/_next/static/images/buying-power-lg-4ade71d5fe5a6d55b8b876e7e957fd2d.png')}}?auto=format&amp;h=26.153846153846153&amp;w=60 60w,
                                {{asset('assets/_next/static/images/buying-power-lg-4ade71d5fe5a6d55b8b876e7e957fd2d.png')}}?auto=format&amp;h=39.23076923076923&amp;w=90  90w
                              "
                                            alt="" />
                                    </div>
                                    <div class="picture-container picture-container-block hidden xl:block"
                                        style="padding-bottom: 45.55555555555556%">
                                        <img class="picture-block" sizes="585px"
                                            src="{{asset('assets/_next/static/images/buying-power-xl-a1e7ea75d976086f91fe311285608514.png')}}" alt="" />
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
                                            src="{{asset('assets/_next/static/images/buying-power-mobile-6295117c1463f0a229e54d553180ca3c.png')}}?auto=format&amp;h=87&amp;w=175"
                                            srcset="
                                {{asset('assets/_next/static/images/buying-power-mobile-6295117c1463f0a229e54d553180ca3c.png')}}?auto=format&amp;h=87&amp;w=175  1x,
                                {{asset('assets/_next/static/images/buying-power-mobile-6295117c1463f0a229e54d553180ca3c.png')}}?auto=format&amp;h=174&amp;w=350 2x
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
                                        <div class="field-container-challenger mt-3 w-full text-left" id="tradeInAmount" style="display: none">
                                            <div class="field-wrapper-challenger field-label-padding-challenger">
                                                <div class="field-content-row">
                                                    <div class="field-input-label-challenger">
                                                        <input id="445" class="form-control-challenger" aria-label="Trade-in amount" placeholder=" " maxlength="10" type="tel" value="$23">
                                                        <div class="field-label-text-challenger" data-test="fieldLabel">
                                                            <label for="445" data-ignore-contrast="true">Trade-in amount</label>
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
                                src="{{asset('assets/_next/static/images/buying-power-mobile-6295117c1463f0a229e54d553180ca3c.png')}}?auto=format&amp;h=87&amp;w=175"
                                srcset="
                          {{asset('assets/_next/static/images/buying-power-mobile-6295117c1463f0a229e54d553180ca3c.png')}}?auto=format&amp;h=87&amp;w=175  1x,
                          {{asset('assets/_next/static/images/buying-power-mobile-6295117c1463f0a229e54d553180ca3c.png')}}?auto=format&amp;h=174&amp;w=350 2x
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
                    <div class="container" data-test="featuredToolCards">
                        <div class="row row-card">
                            <div class="heading-2 normal-case w-full justify-center pb-4 text-center">

                                <div class="homepage redesign">
                                    <div class="container ddc2dBannerOverridesReturningUser">
                                        <section class="ddC2DBanner ddC2dBannerNewTabOrder">
                                            <section class="c2dBannerSection bannerSection">
                                                <section class="c2dBannerSectionContent">
                                                    <header class="c2dBannerHeader">
                                                        <h1 class="bannerHeaderText c2dBannerText">
                                                            Get an instant offer on your car
                                                        </h1>
                                                    </header>

                                                    <section class="c2dBannerSectionRating">
                                                        <div class="c2dBannerRatingStarts">
                                                            <svg width="24" height="23" viewBox="0 0 24 23"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.6928 0.764839L7.9082 6.4539L1.67803 7.36914C0.560775 7.53242 0.113021 8.92031 0.923242 9.71523L5.43063 14.141L4.36455 20.393C4.17266 21.523 5.35387 22.3695 6.3432 21.841L11.9167 18.8891L17.4901 21.841C18.4795 22.3652 19.6607 21.523 19.4688 20.393L18.4027 14.141L22.9101 9.71523C23.7203 8.92031 23.2726 7.53242 22.1553 7.36914L15.9251 6.4539L13.1405 0.764839C12.6416 -0.249223 11.196 -0.262114 10.6928 0.764839Z"
                                                                    fill="#FFB300"></path>
                                                            </svg>
                                                            <svg width="24" height="23" viewBox="0 0 24 23"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.6928 0.764839L7.9082 6.4539L1.67803 7.36914C0.560775 7.53242 0.113021 8.92031 0.923242 9.71523L5.43063 14.141L4.36455 20.393C4.17266 21.523 5.35387 22.3695 6.3432 21.841L11.9167 18.8891L17.4901 21.841C18.4795 22.3652 19.6607 21.523 19.4688 20.393L18.4027 14.141L22.9101 9.71523C23.7203 8.92031 23.2726 7.53242 22.1553 7.36914L15.9251 6.4539L13.1405 0.764839C12.6416 -0.249223 11.196 -0.262114 10.6928 0.764839Z"
                                                                    fill="#FFB300"></path>
                                                            </svg>
                                                            <svg width="24" height="23" viewBox="0 0 24 23"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.6928 0.764839L7.9082 6.4539L1.67803 7.36914C0.560775 7.53242 0.113021 8.92031 0.923242 9.71523L5.43063 14.141L4.36455 20.393C4.17266 21.523 5.35387 22.3695 6.3432 21.841L11.9167 18.8891L17.4901 21.841C18.4795 22.3652 19.6607 21.523 19.4688 20.393L18.4027 14.141L22.9101 9.71523C23.7203 8.92031 23.2726 7.53242 22.1553 7.36914L15.9251 6.4539L13.1405 0.764839C12.6416 -0.249223 11.196 -0.262114 10.6928 0.764839Z"
                                                                    fill="#FFB300"></path>
                                                            </svg>
                                                            <svg width="24" height="23" viewBox="0 0 24 23"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.6928 0.764839L7.9082 6.4539L1.67803 7.36914C0.560775 7.53242 0.113021 8.92031 0.923242 9.71523L5.43063 14.141L4.36455 20.393C4.17266 21.523 5.35387 22.3695 6.3432 21.841L11.9167 18.8891L17.4901 21.841C18.4795 22.3652 19.6607 21.523 19.4688 20.393L18.4027 14.141L22.9101 9.71523C23.7203 8.92031 23.2726 7.53242 22.1553 7.36914L15.9251 6.4539L13.1405 0.764839C12.6416 -0.249223 11.196 -0.262114 10.6928 0.764839Z"
                                                                    fill="#FFB300"></path>
                                                            </svg>
                                                            <svg width="24" height="23" viewBox="0 0 24 23"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.6928 0.764839L7.9082 6.4539L1.67803 7.36914C0.560775 7.53242 0.113021 8.92031 0.923242 9.71523L5.43063 14.141L4.36455 20.393C4.17266 21.523 5.35387 22.3695 6.3432 21.841L11.9167 18.8891L17.4901 21.841C18.4795 22.3652 19.6607 21.523 19.4688 20.393L18.4027 14.141L22.9101 9.71523C23.7203 8.92031 23.2726 7.53242 22.1553 7.36914L15.9251 6.4539L13.1405 0.764839C12.6416 -0.249223 11.196 -0.262114 10.6928 0.764839Z"
                                                                    fill="#FFB300"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="c2dBannerRatingText">
                                                            4.7/5 stars | Over 2,000 reviews
                                                        </div>
                                                    </section>
                                                </section>

                                                <section class="c2dBannerSectionLicensePlateForm">
                                                    <form class="c2dBannerLicensePlateForm">
                                                        <div class="c2dBannerLicensePlateFormGroup">
                                                            <div class="c2dBannerLicensePlateFormGroupLabelWrapper">
                                                                <label for="c2dBannerLicensePlateForm-licensePlate">
                                                                    License plate
                                                                </label>
                                                            </div>
                                                            <div class="c2dBannerLicensePlateFormGroupInputWrapper">
                                                                <input id="c2dBannerLicensePlateForm-licensePlate"
                                                                    placeholder="ex: C4R 6URU" required="">
                                                            </div>
                                                        </div>

                                                        <div class="c2dBannerLicensePlateFormGroup">
                                                            <div class="c2dBannerLicensePlateFormGroupLabelWrapper">
                                                                <label for="c2dBannerLicensePlateForm-state">
                                                                    State
                                                                </label>
                                                            </div>
                                                            <div class="c2dBannerLicensePlateFormGroupInputWrapper">
                                                                <div class="c2dStatesBlock">
                                                                    <select
                                                                        id="c2dBannerLicensePlateForm-registrationState"
                                                                        class=" statesDropDown" aria-label="state"
                                                                        required="">
                                                                        <option value="" selected=""
                                                                            disabled="" hidden="">Select</option>
                                                                        <option value="AL">AL</option>
                                                                        <option value="AK">AK</option>
                                                                        <option value="AZ">AZ</option>
                                                                        <option value="AR">AR</option>
                                                                        <option value="CA">CA</option>
                                                                        <option value="CO">CO</option>
                                                                        <option value="CT">CT</option>
                                                                        <option value="DE">DE</option>
                                                                        <option value="DC">DC</option>
                                                                        <option value="FL">FL</option>
                                                                        <option value="GA">GA</option>
                                                                        <option value="HI">HI</option>
                                                                        <option value="ID">ID</option>
                                                                        <option value="IL">IL</option>
                                                                        <option value="IN">IN</option>
                                                                        <option value="IA">IA</option>
                                                                        <option value="KS">KS</option>
                                                                        <option value="KY">KY</option>
                                                                        <option value="LA">LA</option>
                                                                        <option value="ME">ME</option>
                                                                        <option value="MD">MD</option>
                                                                        <option value="MA">MA</option>
                                                                        <option value="MI">MI</option>
                                                                        <option value="MN">MN</option>
                                                                        <option value="MS">MS</option>
                                                                        <option value="MO">MO</option>
                                                                        <option value="MT">MT</option>
                                                                        <option value="NE">NE</option>
                                                                        <option value="NV">NV</option>
                                                                        <option value="NH">NH</option>
                                                                        <option value="NJ">NJ</option>
                                                                        <option value="NM">NM</option>
                                                                        <option value="NY">NY</option>
                                                                        <option value="NC">NC</option>
                                                                        <option value="ND">ND</option>
                                                                        <option value="OH">OH</option>
                                                                        <option value="OK">OK</option>
                                                                        <option value="OR">OR</option>
                                                                        <option value="PA">PA</option>
                                                                        <option value="RI">RI</option>
                                                                        <option value="SC">SC</option>
                                                                        <option value="SD">SD</option>
                                                                        <option value="TN">TN</option>
                                                                        <option value="TX">TX</option>
                                                                        <option value="UT">UT</option>
                                                                        <option value="VT">VT</option>
                                                                        <option value="VA">VA</option>
                                                                        <option value="WA">WA</option>
                                                                        <option value="WV">WV</option>
                                                                        <option value="WI">WI</option>
                                                                        <option value="WY">WY</option>
                                                                    </select>
                                                                    <span class="statesDropDownArrow"></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button class="bannerSectionButton hp-c2d-banner-cta"
                                                            type="submit">
                                                            <div id="c2dBannerLicensePlateForm-submitSpinner"
                                                                class="c2dLicensePlateFormSubmitSpinner">
                                                                <img
                                                                    src="https://static-assets.cargurus.com/images/site-p2p/homePageBanner/spinner-third-regular-white_f93a491eb63bed962027293365664f0299c15630d5a0f4bea5d313a580788e30.svg')}}">
                                                            </div>

                                                            Get your offer
                                                        </button>
                                                    </form>
                                                </section>

                                                <section class="c2dBannerSectionRating-mobile">
                                                    <div class="c2dBannerRatingStarts">
                                                        <svg width="24" height="23" viewBox="0 0 24 23"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6928 0.764839L7.9082 6.4539L1.67803 7.36914C0.560775 7.53242 0.113021 8.92031 0.923242 9.71523L5.43063 14.141L4.36455 20.393C4.17266 21.523 5.35387 22.3695 6.3432 21.841L11.9167 18.8891L17.4901 21.841C18.4795 22.3652 19.6607 21.523 19.4688 20.393L18.4027 14.141L22.9101 9.71523C23.7203 8.92031 23.2726 7.53242 22.1553 7.36914L15.9251 6.4539L13.1405 0.764839C12.6416 -0.249223 11.196 -0.262114 10.6928 0.764839Z"
                                                                fill="#FFB300"></path>
                                                        </svg>
                                                        <svg width="24" height="23" viewBox="0 0 24 23"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6928 0.764839L7.9082 6.4539L1.67803 7.36914C0.560775 7.53242 0.113021 8.92031 0.923242 9.71523L5.43063 14.141L4.36455 20.393C4.17266 21.523 5.35387 22.3695 6.3432 21.841L11.9167 18.8891L17.4901 21.841C18.4795 22.3652 19.6607 21.523 19.4688 20.393L18.4027 14.141L22.9101 9.71523C23.7203 8.92031 23.2726 7.53242 22.1553 7.36914L15.9251 6.4539L13.1405 0.764839C12.6416 -0.249223 11.196 -0.262114 10.6928 0.764839Z"
                                                                fill="#FFB300"></path>
                                                        </svg>
                                                        <svg width="24" height="23" viewBox="0 0 24 23"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6928 0.764839L7.9082 6.4539L1.67803 7.36914C0.560775 7.53242 0.113021 8.92031 0.923242 9.71523L5.43063 14.141L4.36455 20.393C4.17266 21.523 5.35387 22.3695 6.3432 21.841L11.9167 18.8891L17.4901 21.841C18.4795 22.3652 19.6607 21.523 19.4688 20.393L18.4027 14.141L22.9101 9.71523C23.7203 8.92031 23.2726 7.53242 22.1553 7.36914L15.9251 6.4539L13.1405 0.764839C12.6416 -0.249223 11.196 -0.262114 10.6928 0.764839Z"
                                                                fill="#FFB300"></path>
                                                        </svg>
                                                        <svg width="24" height="23" viewBox="0 0 24 23"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6928 0.764839L7.9082 6.4539L1.67803 7.36914C0.560775 7.53242 0.113021 8.92031 0.923242 9.71523L5.43063 14.141L4.36455 20.393C4.17266 21.523 5.35387 22.3695 6.3432 21.841L11.9167 18.8891L17.4901 21.841C18.4795 22.3652 19.6607 21.523 19.4688 20.393L18.4027 14.141L22.9101 9.71523C23.7203 8.92031 23.2726 7.53242 22.1553 7.36914L15.9251 6.4539L13.1405 0.764839C12.6416 -0.249223 11.196 -0.262114 10.6928 0.764839Z"
                                                                fill="#FFB300"></path>
                                                        </svg>
                                                        <svg width="24" height="23" viewBox="0 0 24 23"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6928 0.764839L7.9082 6.4539L1.67803 7.36914C0.560775 7.53242 0.113021 8.92031 0.923242 9.71523L5.43063 14.141L4.36455 20.393C4.17266 21.523 5.35387 22.3695 6.3432 21.841L11.9167 18.8891L17.4901 21.841C18.4795 22.3652 19.6607 21.523 19.4688 20.393L18.4027 14.141L22.9101 9.71523C23.7203 8.92031 23.2726 7.53242 22.1553 7.36914L15.9251 6.4539L13.1405 0.764839C12.6416 -0.249223 11.196 -0.262114 10.6928 0.764839Z"
                                                                fill="#FFB300"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="c2dBannerRatingText">
                                                        4.7/5 stars | Over 2,000 reviews
                                                    </div>
                                                </section>
                                            </section>

                                        </section>

                                        <script type="text/javascript"
                                            src="https://static.cargurus.com/bundles/js/cg_home_dd_c2d_banner.entry.en_US.709541bc.js"
                                            onerror="window.reportError('https://static.cargurus.com/bundles/js/cg_home_dd_c2d_banner.entry.en_US.709541bc.js')"
                                            defer="" async=""></script>
                                        <script type="text/javascript"
                                            src="https://static.cargurus.com/bundles/js/cg_home_dd_c2d_banner.entry_581c7f50fbc25a509f821e47be660112.js"
                                            onerror="window.reportError('https://static.cargurus.com/bundles/js/cg_home_dd_c2d_banner.entry_581c7f50fbc25a509f821e47be660112.js')"
                                            defer="" async=""></script>

                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="border-b-2 pb-5 md:pb-0"></div>
                    </div>

                    <div class="mt-5 bg-light pt-3">
                        <div class="container" data-test="featuredToolCards">
                            <div class="row row-card">
                                <div class="heading-2 normal-case w-full justify-center pb-4 text-center">
                                    Featured tools
                                </div>
                                <div data-test="featuredCardItem" data-test-item="fit" class="pb-2 col-12 col-md-6">
                                    <div class="h-full w-full">
                                        <div
                                            class="linkable card h-full shadow-none md:flex md:justify-end md:px-3 md:py-5">
                                            <a data-test="cardLinkOverlay" tabindex="-1" aria-hidden="true"
                                                href="/fit-quiz/steps/"
                                                class="absolute top-0 bottom-0 left-0 right-0 z-10"></a>
                                            <div
                                                class="card-image hidden min-h-[83px] items-end justify-center pt-2-5 md:flex md:min-h-0 md:px-0">
                                                <div class="md:w-1/2">
                                                    <div class="picture-container picture-container-block hidden md:block"
                                                        style="padding-bottom: 30.467289719626166%">
                                                        <img class="picture-block" sizes="295px"
                                                            src="{{asset('assets/_next/static/images/find-your-fit-c3e69b766901145f689dc9d45db2511d.png')}}?auto=format&amp;fit=max&amp;h=73.1214953271028&amp;w=240"
                                                            srcset="
                                        {{asset('assets/_next/static/images/find-your-fit-c3e69b766901145f689dc9d45db2511d.png')}}?auto=format&amp;fit=max&amp;h=73.1214953271028&amp;w=240   240w,
                                        {{asset('assets/_next/static/images/find-your-fit-c3e69b766901145f689dc9d45db2511d.png')}}?auto=format&amp;fit=max&amp;h=170.61682242990653&amp;w=560 560w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <div class="picture-container picture-container-block md:hidden"
                                                        style="padding-bottom: 29.411764705882355%">
                                                        <img class="picture-block" sizes="40px"
                                                            src="{{asset('assets/_next/static/images/find-your-fit-c3e69b766901145f689dc9d45db2511d.png')}}?auto=format&amp;fit=max&amp;h=17.647058823529413&amp;w=60"
                                                            srcset="
                                        {{asset('assets/_next/static/images/find-your-fit-c3e69b766901145f689dc9d45db2511d.png')}}?auto=format&amp;fit=max&amp;h=17.647058823529413&amp;w=60 60w,
                                        {{asset('assets/_next/static/images/find-your-fit-c3e69b766901145f689dc9d45db2511d.png')}}?auto=format&amp;fit=max&amp;h=26.47058823529412&amp;w=90  90w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-test="cardContent"
                                                class="card-content px-4 pb-5 pt-0 items-center relative md:py-0 md:px-0 md:pt-0 md:text-center md:static md:grow-0 md:justify-end">
                                                <div class="flex w-full items-center justify-between md:justify-center">
                                                    <div
                                                        class="heading-2 normal-case heading-md-2 md:normal-case mr-2-5 whitespace-nowrap pt-5 pb-4 text-center md:mr-0 md:pt-2-5 md:pb-3">
                                                        Find your fit
                                                    </div>
                                                    <div class="flex h-full w-full items-center my-3 md:hidden">
                                                        <div class="picture-container picture-container-block hidden md:block"
                                                            style="
                                        padding-bottom: 30.467289719626166%;
                                      ">
                                                            <img class="picture-block" sizes="40px"
                                                                src="{{asset('assets/_next/static/images/find-your-fit-c3e69b766901145f689dc9d45db2511d.png')}}?auto=format&amp;fit=max&amp;h=18.2803738317757&amp;w=60"
                                                                srcset="
                                          {{asset('assets/_next/static/images/find-your-fit-c3e69b766901145f689dc9d45db2511d.png')}}?auto=format&amp;fit=max&amp;h=18.2803738317757&amp;w=60  60w,
                                          {{asset('assets/_next/static/images/find-your-fit-c3e69b766901145f689dc9d45db2511d.png')}}?auto=format&amp;fit=max&amp;h=27.42056074766355&amp;w=90 90w
                                        "
                                                                alt="" role="presentation" />
                                                        </div>
                                                        <div class="picture-container picture-container-block md:hidden"
                                                            style="
                                        padding-bottom: 29.411764705882355%;
                                      ">
                                                            <img class="picture-block" sizes="40px"
                                                                src="{{asset('assets/_next/static/images/find-your-fit-c3e69b766901145f689dc9d45db2511d.png')}}?auto=format&amp;fit=max&amp;h=17.647058823529413&amp;w=60"
                                                                srcset="
                                          {{asset('assets/_next/static/images/find-your-fit-c3e69b766901145f689dc9d45db2511d.png')}}?auto=format&amp;fit=max&amp;h=17.647058823529413&amp;w=60 60w,
                                          {{asset('assets/_next/static/images/find-your-fit-c3e69b766901145f689dc9d45db2511d.png')}}?auto=format&amp;fit=max&amp;h=26.47058823529412&amp;w=90  90w
                                        "
                                                                alt="" role="presentation" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full lg:px-5">
                                                    <p class="pb-4 text-muted">
                                                        Not sure what you want? Answer a few
                                                        questions to find what fits you&nbsp;best.
                                                    </p>
                                                    <div class="text-center">
                                                        <a data-ignore-contrast="true" data-loading="false"
                                                            class="btn btn-primary btn-md" href="/fit-quiz/steps/"><span
                                                                class="btn-inner">Start quiz</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-test="featuredCardItem" data-test-item="shop" class="pb-2 col-12 col-md-6">
                                    <div class="h-full w-full">
                                        <div
                                            class="linkable card h-full shadow-none md:flex md:justify-end md:px-3 md:py-5">
                                            <button data-test="cardLinkOverlay" tabindex="-1" aria-hidden="true"
                                                class="absolute top-0 bottom-0 left-0 right-0 z-10"></button>
                                            <div
                                                class="card-image hidden min-h-[83px] items-end justify-center pt-2-5 md:flex md:min-h-0 md:px-0">
                                                <div class="md:w-1/5">
                                                    <div class="picture-container picture-container-block hidden md:block"
                                                        style="padding-bottom: 132.54716981132074%">
                                                        <img class="picture-block" sizes="118px"
                                                            src="{{asset('assets/_next/static/images/shop-by-budget-d249f20ce1d3fb7fb7da7f1dc8ed3e5f.png')}}?auto=format&amp;fit=max&amp;h=159.0566037735849&amp;w=120"
                                                            srcset="
                                        {{asset('assets/_next/static/images/shop-by-budget-d249f20ce1d3fb7fb7da7f1dc8ed3e5f.png')}}?auto=format&amp;fit=max&amp;h=159.0566037735849&amp;w=120 120w,
                                        {{asset('assets/_next/static/images/shop-by-budget-d249f20ce1d3fb7fb7da7f1dc8ed3e5f.png')}}?auto=format&amp;fit=max&amp;h=318.1132075471698&amp;w=240 240w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <div class="picture-container md:hidden"
                                                        style="
                                      padding-bottom: 0;
                                      width: 49px;
                                      height: 55px;
                                    ">
                                                        <img class="picture-inner"
                                                            src="{{asset('assets/_next/static/images/shop-by-budget-d249f20ce1d3fb7fb7da7f1dc8ed3e5f.png')}}?auto=format&amp;fit=max&amp;h=55&amp;w=49"
                                                            srcset="
                                        {{asset('assets/_next/static/images/shop-by-budget-d249f20ce1d3fb7fb7da7f1dc8ed3e5f.png')}}?auto=format&amp;fit=max&amp;h=55&amp;w=49  1x,
                                        {{asset('assets/_next/static/images/shop-by-budget-d249f20ce1d3fb7fb7da7f1dc8ed3e5f.png')}}?auto=format&amp;fit=max&amp;h=110&amp;w=98 2x
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-test="cardContent"
                                                class="card-content px-4 pb-5 pt-0 items-center relative md:py-0 md:px-0 md:pt-0 md:text-center md:static md:grow-0 md:justify-end">
                                                <div class="flex w-full items-center justify-between md:justify-center">
                                                    <div
                                                        class="heading-2 normal-case heading-md-2 md:normal-case mr-2-5 whitespace-nowrap pt-5 pb-4 text-center md:mr-0 md:pt-2-5 md:pb-3">
                                                        Shop by budget
                                                    </div>
                                                    <div
                                                        class="flex h-full w-full items-center my-3 md:hidden max-w-[30%]">
                                                        <div class="picture-container picture-container-block hidden md:block"
                                                            style="
                                        padding-bottom: 132.54716981132074%;
                                      ">
                                                            <img class="picture-block" sizes="40px"
                                                                src="{{asset('assets/_next/static/images/shop-by-budget-d249f20ce1d3fb7fb7da7f1dc8ed3e5f.png')}}?auto=format&amp;fit=max&amp;h=79.52830188679245&amp;w=60"
                                                                srcset="
                                          {{asset('assets/_next/static/images/shop-by-budget-d249f20ce1d3fb7fb7da7f1dc8ed3e5f.png')}}?auto=format&amp;fit=max&amp;h=79.52830188679245&amp;w=60  60w,
                                          {{asset('assets/_next/static/images/shop-by-budget-d249f20ce1d3fb7fb7da7f1dc8ed3e5f.png')}}?auto=format&amp;fit=max&amp;h=119.29245283018868&amp;w=90 90w
                                        "
                                                                alt="" role="presentation" />
                                                        </div>
                                                        <div class="picture-container md:hidden"
                                                            style="
                                        padding-bottom: 0;
                                        width: 49px;
                                        height: 55px;
                                      ">
                                                            <img class="picture-inner"
                                                                src="{{asset('assets/_next/static/images/shop-by-budget-d249f20ce1d3fb7fb7da7f1dc8ed3e5f.png')}}?auto=format&amp;fit=max&amp;h=55&amp;w=49"
                                                                srcset="
                                          {{asset('assets/_next/static/images/shop-by-budget-d249f20ce1d3fb7fb7da7f1dc8ed3e5f.png')}}?auto=format&amp;fit=max&amp;h=55&amp;w=49  1x,
                                          {{asset('assets/_next/static/images/shop-by-budget-d249f20ce1d3fb7fb7da7f1dc8ed3e5f.png')}}?auto=format&amp;fit=max&amp;h=110&amp;w=98 2x
                                        "
                                                                alt="" role="presentation" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full lg:px-5">
                                                    <p class="pb-4 text-muted">
                                                        Save time and narrow down cars that fit your
                                                        monthly payment and price&nbsp;point.
                                                    </p>
                                                    <div class="text-center">
                                                        <button type="button" data-ignore-contrast="true"
                                                            data-loading="false" aria-haspopup="dialog"
                                                            class="btn btn-primary btn-md">
                                                            <span class="btn-inner">See your buying power</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-test="featuredCardItem" data-test-item="build" class="pb-2 col-12 col-md-6">
                                    <div class="h-full w-full">
                                        <div
                                            class="linkable card h-full shadow-none md:flex md:justify-end md:px-3 md:py-5">
                                            <a data-test="cardLinkOverlay" tabindex="-1" aria-hidden="true"
                                                href="/shop/new/?filterType=brand"
                                                class="absolute top-0 bottom-0 left-0 right-0 z-10"></a>
                                            <div
                                                class="card-image hidden min-h-[83px] items-end justify-center pt-2-5 md:flex md:min-h-0 md:px-0">
                                                <div class="md:w-1/5">
                                                    <div class="picture-container picture-container-block hidden md:block"
                                                        style="padding-bottom: 107.61904761904762%">
                                                        <img class="picture-block" sizes="118px"
                                                            src="{{asset('assets/_next/static/images/build-and-price-e166dc27e8dda05c627d2d8074920ef3.png')}}?auto=format&amp;fit=max&amp;h=129.14285714285714&amp;w=120"
                                                            srcset="
                                        {{asset('assets/_next/static/images/build-and-price-e166dc27e8dda05c627d2d8074920ef3.png')}}?auto=format&amp;fit=max&amp;h=129.14285714285714&amp;w=120 120w,
                                        {{asset('assets/_next/static/images/build-and-price-e166dc27e8dda05c627d2d8074920ef3.png')}}?auto=format&amp;fit=max&amp;h=258.2857142857143&amp;w=240  240w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <div class="picture-container md:hidden"
                                                        style="
                                      padding-bottom: 0;
                                      width: 58px;
                                      height: 63px;
                                    ">
                                                        <img class="picture-inner"
                                                            src="{{asset('assets/_next/static/images/build-and-price-e166dc27e8dda05c627d2d8074920ef3.png')}}?auto=format&amp;fit=max&amp;h=63&amp;w=58"
                                                            srcset="
                                        {{asset('assets/_next/static/images/build-and-price-e166dc27e8dda05c627d2d8074920ef3.png')}}?auto=format&amp;fit=max&amp;h=63&amp;w=58   1x,
                                        {{asset('assets/_next/static/images/build-and-price-e166dc27e8dda05c627d2d8074920ef3.png')}}?auto=format&amp;fit=max&amp;h=126&amp;w=116 2x
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-test="cardContent"
                                                class="card-content px-4 pb-5 pt-0 items-center relative md:py-0 md:px-0 md:pt-0 md:text-center md:static md:grow-0 md:justify-end">
                                                <div class="flex w-full items-center justify-between md:justify-center">
                                                    <div
                                                        class="heading-2 normal-case heading-md-2 md:normal-case mr-2-5 whitespace-nowrap pt-5 pb-4 text-center md:mr-0 md:pt-2-5 md:pb-3">
                                                        Build and price
                                                    </div>
                                                    <div
                                                        class="flex h-full w-full items-center my-3 md:hidden max-w-[30%]">
                                                        <div class="picture-container picture-container-block hidden md:block"
                                                            style="
                                        padding-bottom: 107.61904761904762%;
                                      ">
                                                            <img class="picture-block" sizes="40px"
                                                                src="{{asset('assets/_next/static/images/build-and-price-e166dc27e8dda05c627d2d8074920ef3.png')}}?auto=format&amp;fit=max&amp;h=64.57142857142857&amp;w=60"
                                                                srcset="
                                          {{asset('assets/_next/static/images/build-and-price-e166dc27e8dda05c627d2d8074920ef3.png')}}?auto=format&amp;fit=max&amp;h=64.57142857142857&amp;w=60 60w,
                                          {{asset('assets/_next/static/images/build-and-price-e166dc27e8dda05c627d2d8074920ef3.png')}}?auto=format&amp;fit=max&amp;h=96.85714285714285&amp;w=90 90w
                                        "
                                                                alt="" role="presentation" />
                                                        </div>
                                                        <div class="picture-container md:hidden"
                                                            style="
                                        padding-bottom: 0;
                                        width: 58px;
                                        height: 63px;
                                      ">
                                                            <img class="picture-inner"
                                                                src="{{asset('assets/_next/static/images/build-and-price-e166dc27e8dda05c627d2d8074920ef3.png')}}?auto=format&amp;fit=max&amp;h=63&amp;w=58"
                                                                srcset="
                                          {{asset('assets/_next/static/images/build-and-price-e166dc27e8dda05c627d2d8074920ef3.png')}}?auto=format&amp;fit=max&amp;h=63&amp;w=58   1x,
                                          {{asset('assets/_next/static/images/build-and-price-e166dc27e8dda05c627d2d8074920ef3.png')}}?auto=format&amp;fit=max&amp;h=126&amp;w=116 2x
                                        "
                                                                alt="" role="presentation" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full lg:px-5">
                                                    <p class="pb-4 text-muted">
                                                        Choose the make, model, trim, and options
                                                        you&nbsp;want.
                                                    </p>
                                                    <div class="text-center">
                                                        <a data-ignore-contrast="true" data-loading="false"
                                                            class="btn btn-primary btn-md"
                                                            href="/shop/new/?filterType=brand"><span
                                                                class="btn-inner">Build your car</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-test="featuredCardItem" data-test-item="syc" class="pb-2 col-12 col-md-6">
                                    <div class="h-full w-full">
                                        <div
                                            class="linkable card h-full shadow-none md:flex md:justify-end md:px-3 md:py-5">
                                            <a data-test="cardLinkOverlay" tabindex="-1" aria-hidden="true"
                                                href="/sell-your-car/"
                                                class="absolute top-0 bottom-0 left-0 right-0 z-10"></a>
                                            <div
                                                class="card-image hidden min-h-[83px] items-end justify-center pt-2-5 md:flex md:min-h-0 md:px-0">
                                                <div class="md:w-1/2">
                                                    <div class="picture-container picture-container-block hidden md:block"
                                                        style="padding-bottom: 64.64088397790056%">
                                                        <img class="picture-block" sizes="295px"
                                                            src="{{asset('assets/_next/static/images/sell-your-car-3535592c22047d856102d713367192eb.png')}}?auto=format&amp;fit=max&amp;h=155.13812154696132&amp;w=240"
                                                            srcset="
                                        {{asset('assets/_next/static/images/sell-your-car-3535592c22047d856102d713367192eb.png')}}?auto=format&amp;fit=max&amp;h=155.13812154696132&amp;w=240 240w,
                                        {{asset('assets/_next/static/images/sell-your-car-3535592c22047d856102d713367192eb.png')}}?auto=format&amp;fit=max&amp;h=361.9889502762431&amp;w=560  560w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <div class="picture-container md:hidden"
                                                        style="
                                      padding-bottom: 0;
                                      width: 80px;
                                      height: 53px;
                                    ">
                                                        <img class="picture-inner"
                                                            src="{{asset('assets/_next/static/images/sell-your-car-3535592c22047d856102d713367192eb.png')}}?auto=format&amp;fit=max&amp;h=53&amp;w=80"
                                                            srcset="
                                        {{asset('assets/_next/static/images/sell-your-car-3535592c22047d856102d713367192eb.png')}}?auto=format&amp;fit=max&amp;h=53&amp;w=80   1x,
                                        {{asset('assets/_next/static/images/sell-your-car-3535592c22047d856102d713367192eb.png')}}?auto=format&amp;fit=max&amp;h=106&amp;w=160 2x
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-test="cardContent"
                                                class="card-content px-4 pb-5 pt-0 items-center relative md:py-0 md:px-0 md:pt-0 md:text-center md:static md:grow-0 md:justify-end">
                                                <div class="flex w-full items-center justify-between md:justify-center">
                                                    <div
                                                        class="heading-2 normal-case heading-md-2 md:normal-case mr-2-5 whitespace-nowrap pt-5 pb-4 text-center md:mr-0 md:pt-2-5 md:pb-3">
                                                        Sell and trade
                                                    </div>
                                                    <div
                                                        class="flex h-full w-full items-center my-3 md:hidden max-w-[30%]">
                                                        <div class="picture-container picture-container-block hidden md:block"
                                                            style="padding-bottom: 64.64088397790056%">
                                                            <img class="picture-block" sizes="40px"
                                                                src="{{asset('assets/_next/static/images/sell-your-car-3535592c22047d856102d713367192eb.png')}}?auto=format&amp;fit=max&amp;h=38.78453038674033&amp;w=60"
                                                                srcset="
                                          {{asset('assets/_next/static/images/sell-your-car-3535592c22047d856102d713367192eb.png')}}?auto=format&amp;fit=max&amp;h=38.78453038674033&amp;w=60 60w,
                                          {{asset('assets/_next/static/images/sell-your-car-3535592c22047d856102d713367192eb.png')}}?auto=format&amp;fit=max&amp;h=58.1767955801105&amp;w=90  90w
                                        "
                                                                alt="" role="presentation" />
                                                        </div>
                                                        <div class="picture-container md:hidden"
                                                            style="
                                        padding-bottom: 0;
                                        width: 80px;
                                        height: 53px;
                                      ">
                                                            <img class="picture-inner"
                                                                src="{{asset('assets/_next/static/images/sell-your-car-3535592c22047d856102d713367192eb.png')}}?auto=format&amp;fit=max&amp;h=53&amp;w=80"
                                                                srcset="
                                          {{asset('assets/_next/static/images/sell-your-car-3535592c22047d856102d713367192eb.png')}}?auto=format&amp;fit=max&amp;h=53&amp;w=80   1x,
                                          {{asset('assets/_next/static/images/sell-your-car-3535592c22047d856102d713367192eb.png')}}?auto=format&amp;fit=max&amp;h=106&amp;w=160 2x
                                        "
                                                                alt="" role="presentation" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full lg:px-5">
                                                    <p class="pb-4 text-muted">
                                                        Get an offer in minutes, then cash out or
                                                        trade&nbsp;in.
                                                    </p>
                                                    <div class="text-center">
                                                        <a data-ignore-contrast="true" data-loading="false"
                                                            class="btn btn-primary btn-md" href="/sell-your-car/"><span
                                                                class="btn-inner">Learn more</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 text-center theme-black">
                        <div class="container container-max-width-1 theme-black">
                            <h2 class="heading-2 normal-case pt-3 pb-5 text-[#e5e5e5] md:pb-0">
                                Why TheCar.ai?
                            </h2>
                            <div class="carousel pb-4 md:hidden">
                                <div class="relative flex w-full items-center">
                                    <button
                                        class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-2 carousel-arrow-prev carousel-arrow-prev"
                                        data-test="carouselArrowPrev" aria-label="Previous" disabled="">
                                        <svg width="16px" height="16px" viewBox="0 0 16 16"
                                            class="carousel-arrow-icon">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline stroke-width="1.5" fill-rule="nonzero"
                                                    points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                            </g>
                                        </svg>
                                    </button>
                                    <div style="position: relative; overflow: hidden" class="grow">
                                        <ul data-test="carouselSlideContainer"
                                            style="
                                display: flex;
                                flex-flow: row;
                                position: relative;
                                overflow: hidden;
                              "
                                            class="">
                                            <li class="px-2" data-test="carouselCurrentSlide0"
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 100%;
                                ">
                                                <div class="linkable card h-full theme-dark">
                                                    <div data-test="cardContent"
                                                        class="card-content flex items-center justify-start py-5 px-2 text-[#e5e5e5]">
                                                        <div class="w-[115px] md:w-[135px]">
                                                            <div class="picture-container picture-container-block mb-2 md:mb-4"
                                                                style="
                                          padding-bottom: 66.38655462184873%;
                                        ">
                                                                <img class="picture-block picture-svg"
                                                                    src="{{asset('assets/_next/static/images/transparent-pricing-4d7899553551b3a2db95d346ac20062f.svg')}}"
                                                                    alt="" role="presentation" />
                                                            </div>
                                                        </div>
                                                        <h3 class="heading-3 normal-case pb-3">
                                                            Transparent pricing
                                                        </h3>
                                                        <p class="px-4">
                                                            No surprises here. See how much you'll pay
                                                            on cars you&nbsp;like.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="px-2" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 100%;
                                "
                                                inert="" aria-hidden="true">
                                                <div class="linkable card h-full theme-dark">
                                                    <div data-test="cardContent"
                                                        class="card-content flex items-center justify-start py-5 px-2 text-[#e5e5e5]">
                                                        <div class="w-[115px] md:w-[135px]">
                                                            <div class="picture-container picture-container-block mb-2 md:mb-4"
                                                                style="
                                          padding-bottom: 66.38655462184873%;
                                        ">
                                                                <img class="picture-block picture-svg"
                                                                    src="{{asset('assets/_next/static/images/minutes-not-hours-48afd64860a3e72b36d5986738c77eb4.svg')}}"
                                                                    alt="" role="presentation" />
                                                            </div>
                                                        </div>
                                                        <h3 class="heading-3 normal-case pb-3">
                                                            Minutes, not hours
                                                        </h3>
                                                        <p class="px-4">
                                                            Time saving tools to help you find the
                                                            right car in a&nbsp;snap.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="px-2" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 100%;
                                "
                                                inert="" aria-hidden="true">
                                                <div class="linkable card h-full theme-dark">
                                                    <div data-test="cardContent"
                                                        class="card-content flex items-center justify-start py-5 px-2 text-[#e5e5e5]">
                                                        <div class="w-[115px] md:w-[135px]">
                                                            <div class="picture-container picture-container-block mb-2 md:mb-4"
                                                                style="
                                          padding-bottom: 66.38655462184873%;
                                        ">
                                                                <img class="picture-block picture-svg"
                                                                    src="{{asset('assets/_next/static/images/shop-your-way-f575579b12ccf6daf39539dab242c0e2.svg')}}"
                                                                    alt="" role="presentation" />
                                                            </div>
                                                        </div>
                                                        <h3 class="heading-3 normal-case pb-3">
                                                            Shop your way
                                                        </h3>
                                                        <p class="px-4">
                                                            Your own pace, your own space. Shop online
                                                            where and when it's convenient
                                                            for&nbsp;you.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <button
                                        class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-2 carousel-arrow-next carousel-arrow-next"
                                        data-test="carouselArrowNext" aria-label="Next">
                                        <svg width="16px" height="16px" viewBox="0 0 16 16"
                                            class="carousel-arrow-icon">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline stroke-width="1.5" fill-rule="nonzero"
                                                    points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="row hidden md:flex">
                                <div class="col-4">
                                    <div class="linkable card h-full theme-black">
                                        <div data-test="cardContent"
                                            class="card-content flex items-center justify-start py-5 px-2 text-[#e5e5e5]">
                                            <div class="w-[115px] md:w-[135px]">
                                                <div class="picture-container picture-container-block mb-2 md:mb-4"
                                                    style="padding-bottom: 66.38655462184873%">
                                                    <img class="picture-block picture-svg"
                                                        src="{{asset('assets/_next/static/images/transparent-pricing-4d7899553551b3a2db95d346ac20062f.svg')}}"
                                                        alt="" role="presentation" />
                                                </div>
                                            </div>
                                            <h3 class="heading-3 normal-case pb-3">
                                                Transparent pricing
                                            </h3>
                                            <p class="px-4">
                                                No surprises here. See how much you'll pay on
                                                cars you&nbsp;like.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="linkable card h-full theme-black">
                                        <div data-test="cardContent"
                                            class="card-content flex items-center justify-start py-5 px-2 text-[#e5e5e5]">
                                            <div class="w-[115px] md:w-[135px]">
                                                <div class="picture-container picture-container-block mb-2 md:mb-4"
                                                    style="padding-bottom: 66.38655462184873%">
                                                    <img class="picture-block picture-svg"
                                                        src="{{asset('assets/_next/static/images/minutes-not-hours-48afd64860a3e72b36d5986738c77eb4.svg')}}"
                                                        alt="" role="presentation" />
                                                </div>
                                            </div>
                                            <h3 class="heading-3 normal-case pb-3">
                                                Minutes, not hours
                                            </h3>
                                            <p class="px-4">
                                                Time saving tools to help you find the right car
                                                in a&nbsp;snap.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="linkable card h-full theme-black">
                                        <div data-test="cardContent"
                                            class="card-content flex items-center justify-start py-5 px-2 text-[#e5e5e5]">
                                            <div class="w-[115px] md:w-[135px]">
                                                <div class="picture-container picture-container-block mb-2 md:mb-4"
                                                    style="padding-bottom: 66.38655462184873%">
                                                    <img class="picture-block picture-svg"
                                                        src="{{asset('assets/_next/static/images/shop-your-way-f575579b12ccf6daf39539dab242c0e2.svg')}}"
                                                        alt="" role="presentation" />
                                                </div>
                                            </div>
                                            <h3 class="heading-3 normal-case pb-3">
                                                Shop your way
                                            </h3>
                                            <p class="px-4">
                                                Your own pace, your own space. Shop online where
                                                and when it's convenient for&nbsp;you.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" data-ignore-contrast="true" data-loading="false"
                            class="btn-dark mb-3 btn btn-primary btn-md">
                            <span class="btn-inner">Sign up</span>
                        </button>
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
                                            <div aria-labelledby="tabs--1--tab--0" role="tabpanel" tabindex="0" data-reach-tab-panel="" id="tabs--1--panel--0">
                                                <div data-test="shopByPopularBrandSection" data-test-item="New" class="mb-5 grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="acura" href="/overview/acura/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Acura</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="alfa-romeo" href="/overview/alfa-romeo/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Alfa Romeo</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="audi" href="/overview/audi/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Audi</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="bmw" href="/overview/bmw/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">BMW</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="buick" href="/overview/buick/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Buick</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="cadillac" href="/overview/cadillac/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Cadillac</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="chevrolet" href="/overview/chevrolet/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Chevrolet</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="chrysler" href="/overview/chrysler/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Chrysler</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="dodge" href="/overview/dodge/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Dodge</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="fiat" href="/overview/fiat/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">FIAT</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="ford" href="/overview/ford/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Ford</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="genesis" href="/overview/genesis/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Genesis</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="gmc" href="/overview/gmc/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">GMC</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="honda" href="/overview/honda/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Honda</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="hyundai" href="/overview/hyundai/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Hyundai</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="infiniti" href="/overview/infiniti/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">INFINITI</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="jaguar" href="/overview/jaguar/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Jaguar</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="jeep" href="/overview/jeep/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Jeep</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="kia" href="/overview/kia/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Kia</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="land-rover" href="/overview/land-rover/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Land Rover</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="lexus" href="/overview/lexus/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Lexus</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="lincoln" href="/overview/lincoln/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Lincoln</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="maserati" href="/overview/maserati/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Maserati</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="mazda" href="/overview/mazda/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Mazda</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="mercedes-benz" href="/overview/mercedes-benz/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Mercedes-Benz</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="mini" href="/overview/mini/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">MINI</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="mitsubishi" href="/overview/mitsubishi/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Mitsubishi</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="nissan" href="/overview/nissan/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Nissan</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="ram" href="/overview/ram/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Ram</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="subaru" href="/overview/subaru/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Subaru</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="toyota" href="/overview/toyota/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Toyota</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="volkswagen" href="/overview/volkswagen/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Volkswagen</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="volvo" href="/overview/volvo/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Volvo</span>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div aria-labelledby="tabs--1--tab--1" role="tabpanel" tabindex="-1" data-reach-tab-panel="" id="tabs--1--panel--1" hidden="">
                                                <div data-test="shopByPopularBrandSection" data-test-item="Used" class="mb-5 grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="acura" href="/used-cars-for-sale/listings/acura/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Acura</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="alfa-romeo" href="/used-cars-for-sale/listings/alfa-romeo/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Alfa Romeo</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="audi" href="/used-cars-for-sale/listings/audi/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Audi</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="bmw" href="/used-cars-for-sale/listings/bmw/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">BMW</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="buick" href="/used-cars-for-sale/listings/buick/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Buick</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="cadillac" href="/used-cars-for-sale/listings/cadillac/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Cadillac</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="chevrolet" href="/used-cars-for-sale/listings/chevrolet/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Chevrolet</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="chrysler" href="/used-cars-for-sale/listings/chrysler/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Chrysler</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="dodge" href="/used-cars-for-sale/listings/dodge/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Dodge</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="fiat" href="/used-cars-for-sale/listings/fiat/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">FIAT</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="ford" href="/used-cars-for-sale/listings/ford/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Ford</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="genesis" href="/used-cars-for-sale/listings/genesis/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Genesis</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="gmc" href="/used-cars-for-sale/listings/gmc/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">GMC</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="honda" href="/used-cars-for-sale/listings/honda/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Honda</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="hyundai" href="/used-cars-for-sale/listings/hyundai/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Hyundai</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="infiniti" href="/used-cars-for-sale/listings/infiniti/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">INFINITI</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="jaguar" href="/used-cars-for-sale/listings/jaguar/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Jaguar</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="jeep" href="/used-cars-for-sale/listings/jeep/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Jeep</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="kia" href="/used-cars-for-sale/listings/kia/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Kia</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="land-rover" href="/used-cars-for-sale/listings/land-rover/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Land Rover</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="lexus" href="/used-cars-for-sale/listings/lexus/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Lexus</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="lincoln" href="/used-cars-for-sale/listings/lincoln/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Lincoln</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="maserati" href="/used-cars-for-sale/listings/maserati/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Maserati</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="mazda" href="/used-cars-for-sale/listings/mazda/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Mazda</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="mercedes-benz" href="/used-cars-for-sale/listings/mercedes-benz/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Mercedes-Benz</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="mini" href="/used-cars-for-sale/listings/mini/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">MINI</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="mitsubishi" href="/used-cars-for-sale/listings/mitsubishi/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Mitsubishi</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="nissan" href="/used-cars-for-sale/listings/nissan/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Nissan</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="ram" href="/used-cars-for-sale/listings/ram/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Ram</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="subaru" href="/used-cars-for-sale/listings/subaru/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Subaru</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="toyota" href="/used-cars-for-sale/listings/toyota/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Toyota</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="volkswagen" href="/used-cars-for-sale/listings/volkswagen/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Volkswagen</span>
                                                        </div>
                                                    </a><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] overflow-hidden md:min-h-[75px]" data-test="shopByPopularBrandCard" data-test-item="volvo" href="/used-cars-for-sale/listings/volvo/">
                                                        <div data-test="cardContent" class="card-content relative flex items-center justify-center py-2-5 text-center md:flex-row md:justify-start md:px-5 md:py-5 lg:py-4 xl:pl-6">
                                                            <div class="md:flex md:justify-start md:pr-2 lg:pr-3 xl:justify-center xl:pr-2-5">
                                                                <div class="picture-container md:hidden" style="padding-bottom:0;width:66px;height:33px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=33&amp;pad=5&amp;w=66 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=66&amp;pad=5&amp;w=132 2x" alt="" role="presentation"></div>
                                                                <div class="picture-container hidden md:block" style="padding-bottom:0;width:40px;height:40px"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=40&amp;w=40 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=80&amp;w=80 2x" alt="" role="presentation"></div>
                                                            </div><span class="pt-1 md:pt-0 md:text-left">Volvo</span>
                                                        </div>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right mt-0" data-test="seeMoreLinkContainer">
                                        <div class="see-more-link text-center print:hidden">
                                          <button type="button" data-ignore-contrast="false" data-loading="false" data-test="seeMoreButton" class="btn btn-secondary btn-md seeLessbtn">
                                            <span class="btn-inner"><span class="flex items-center">See less<svg viewBox="0 0 24 24" class="icon icon-after icon-fill-default see-more-icon-angle" aria-hidden="true" style="width: 24px; height: 24px;">
                                            <use href="#keyboard_arrow_up"></use>
                                            </svg></span></span></button></div>
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
                    <div class="container px-0 md:px-3">
                        <div class="row row-card pb-2">
                            <div class="pt-2 col-12 col-md-6">
                                <div class="linkable card relative rounded-none bg-[image:var(--image-url-sm)] bg-cover text-white shadow-none md:rounded lg:bg-[image:var(--image-url-lg)]"
                                    style="
                            --image-url-sm: url({{asset('assets/_next/static/images/sell-and-trade-sm-c6a6e07382b6fd41088f1411a48ba8bf.jpg')}});
                            --image-url-lg: url({{asset('assets/_next/static/images/sell-and-trade-lg-b53d7e8bad9a3d34789ad476cbdebd11.jpg')}});
                          ">
                                    <a data-test="cardLinkOverlay" tabindex="-1" aria-hidden="true"
                                        href="/sell-your-car/" class="absolute top-0 bottom-0 left-0 right-0 z-10"></a>
                                    <div
                                        class="absolute top-0 bottom-0 left-0 right-0 z-10 bg-black md:rounded opacity-[57%]">
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content z-20 flex items-center justify-between py-6 text-center hover:text-white">
                                        <div>
                                            <div class="heading-2 normal-case pt-2-5">
                                                Sell and trade
                                            </div>
                                            <p class="max-w-xs pt-3">
                                                Answer a few questions and get an
                                                instant&nbsp;offer.
                                            </p>
                                        </div>
                                        <a data-ignore-contrast="true" data-loading="false"
                                            class="btn-dark mt-4 mb-2-5 btn btn-primary btn-md"
                                            href="/sell-your-car/"><span class="btn-inner">Learn more</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2 col-12 col-md-6">
                                <div class="linkable card relative rounded-none bg-[image:var(--image-url-sm)] bg-cover text-white shadow-none md:rounded lg:bg-[image:var(--image-url-lg)]"
                                    style="
                            --image-url-sm: url({{asset('assets/_next/static/images/military-savings-sm-d71c2584c20aa0f2ae6b927aa6e73817.jpg')}});
                            --image-url-lg: url({{asset('assets/_next/static/images/military-savings-lg-e08cfa6a978f064715ff754303b51847.jpg')}});
                          ">
                                    <a data-test="cardLinkOverlay" tabindex="-1" aria-hidden="true"
                                        href="http://military.truecar.com?referrer_id=ZTRU000027670"
                                        class="absolute top-0 bottom-0 left-0 right-0 z-10"></a>
                                    <div
                                        class="absolute top-0 bottom-0 left-0 right-0 z-10 bg-black md:rounded opacity-[27%]">
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content z-20 flex items-center justify-between py-6 text-center hover:text-white">
                                        <div>
                                            <div class="heading-2 normal-case pt-2-5">
                                                Military savings
                                            </div>
                                            <p class="max-w-xs pt-3">
                                                Find savings and incentives tailored for active
                                                duty military, veterans, and&nbsp;family.
                                            </p>
                                        </div>
                                        <a data-ignore-contrast="true" data-loading="false"
                                            href="http://military.truecar.com?referrer_id=ZTRU000027670" target="_blank"
                                            rel="noopener" class="btn-dark mt-4 mb-2-5 btn btn-primary btn-md"><span
                                                class="btn-inner"><span class="flex items-center">Learn more
                                                    <svg viewBox="0 0 24 24" class="icon icon-fill-default ml-1"
                                                        style="width: 16px; height: 16px" aria-hidden="true">
                                                        <use href="#open_in_new"></use>
                                                    </svg></span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container px-0 md:px-3">
                        <div class="flex flex-col justify-center rounded bg-white py-5 md:px-3 lg:px-5 px-3 md:px-0"
                            data-test="carRankingsModule">
                            <h2 class="heading-2 normal-case w-full pt-3 text-center">
                                Top-rated cars by&nbsp;type
                            </h2>
                            <div class="carousel mt-[-56px] py-5 lg:px-3">
                                <div class="relative flex w-full items-center">
                                    <button
                                        class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-1 carousel-arrow-prev carousel-arrow-prev"
                                        data-test="carouselArrowPrev" aria-label="Previous" disabled="">
                                        <svg width="16px" height="16px" viewBox="0 0 16 16"
                                            class="carousel-arrow-icon">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline stroke-width="1.5" fill-rule="nonzero"
                                                    points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                            </g>
                                        </svg>
                                    </button>
                                    <div style="position: relative; overflow: hidden" class="grow">
                                        <ul data-test="carouselSlideContainer"
                                            style="
                                display: flex;
                                flex-flow: row;
                                position: relative;
                                overflow: hidden;
                              "
                                            class="">
                                            <li class="px-1" data-test="carouselCurrentSlide0"
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 12.5%;
                                ">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mt-[56px] h-full rounded-t shadow-none"
                                                    data-test="cardsByType" data-test-item="Sedans"
                                                    href="/best-cars-trucks/sedans/">
                                                    <div class="picture-container picture-container-block"
                                                        style="padding-bottom: 236.4485981308411%">
                                                        <img class="picture-block rounded" sizes="353.125px"
                                                            src="{{asset('assets/_next/static/images/sedan-dff0d70ce3dfc53c7d48d91e79a26652.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360"
                                                            srcset="
                                        {{asset('assets/_next/static/images/sedan-dff0d70ce3dfc53c7d48d91e79a26652.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360  360w,
                                        {{asset('assets/_next/static/images/sedan-dff0d70ce3dfc53c7d48d91e79a26652.jpg')}}?auto=format&amp;fit=max&amp;h=1702.429906542056&amp;w=720 720w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <span
                                                        class="mt-3 w-full items-start whitespace-normal p-0 text-center text-xs font-bold uppercase">Sedans</span>
                                                </a>
                                            </li>
                                            <li class="px-1" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 12.5%;
                                ">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mt-[56px] h-full rounded-t shadow-none"
                                                    data-test="cardsByType" data-test-item="SUVs"
                                                    href="/best-cars-trucks/suvs/">
                                                    <div class="picture-container picture-container-block"
                                                        style="padding-bottom: 236.4485981308411%">
                                                        <img class="picture-block rounded" sizes="353.328125px"
                                                            src="{{asset('assets/_next/static/images/suv-275ed70df463ea1cae0748f15eced3ae.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360"
                                                            srcset="
                                        {{asset('assets/_next/static/images/suv-275ed70df463ea1cae0748f15eced3ae.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360  360w,
                                        {{asset('assets/_next/static/images/suv-275ed70df463ea1cae0748f15eced3ae.jpg')}}?auto=format&amp;fit=max&amp;h=1702.429906542056&amp;w=720 720w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <span
                                                        class="mt-3 w-full items-start whitespace-normal p-0 text-center text-xs font-bold uppercase">SUVs</span>
                                                </a>
                                            </li>
                                            <li class="px-1" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 12.5%;
                                ">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mt-[56px] h-full rounded-t shadow-none"
                                                    data-test="cardsByType" data-test-item="Trucks"
                                                    href="/best-cars-trucks/trucks/">
                                                    <div class="picture-container picture-container-block"
                                                        style="padding-bottom: 236.4485981308411%">
                                                        <img class="picture-block rounded" sizes="353.328125px"
                                                            src="{{asset('assets/_next/static/images/truck-ad515512810927b6687812b8b9cb64ae.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360"
                                                            srcset="
                                        {{asset('assets/_next/static/images/truck-ad515512810927b6687812b8b9cb64ae.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360  360w,
                                        {{asset('assets/_next/static/images/truck-ad515512810927b6687812b8b9cb64ae.jpg')}}?auto=format&amp;fit=max&amp;h=1702.429906542056&amp;w=720 720w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <span
                                                        class="mt-3 w-full items-start whitespace-normal p-0 text-center text-xs font-bold uppercase">Trucks</span>
                                                </a>
                                            </li>
                                            <li class="px-1" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 12.5%;
                                ">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mt-[56px] h-full rounded-t shadow-none"
                                                    data-test="cardsByType" data-test-item="Vans"
                                                    href="/best-cars-trucks/vans/">
                                                    <div class="picture-container picture-container-block"
                                                        style="padding-bottom: 236.4485981308411%">
                                                        <img class="picture-block rounded" sizes="353.328125px"
                                                            src="{{asset('assets/_next/static/images/van-f52db2b870549226c6612da6419c1896.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360"
                                                            srcset="
                                        {{asset('assets/_next/static/images/van-f52db2b870549226c6612da6419c1896.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360  360w,
                                        {{asset('assets/_next/static/images/van-f52db2b870549226c6612da6419c1896.jpg')}}?auto=format&amp;fit=max&amp;h=1702.429906542056&amp;w=720 720w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <span
                                                        class="mt-3 w-full items-start whitespace-normal p-0 text-center text-xs font-bold uppercase">Vans</span>
                                                </a>
                                            </li>
                                            <li class="px-1" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 12.5%;
                                ">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mt-[56px] h-full rounded-t shadow-none"
                                                    data-test="cardsByType" data-test-item="Electric Vehicles (EV)"
                                                    href="/best-cars-trucks/fuel-electric/">
                                                    <div class="picture-container picture-container-block"
                                                        style="padding-bottom: 236.4485981308411%">
                                                        <img class="picture-block rounded" sizes="353.328125px"
                                                            src="{{asset('assets/_next/static/images/ev-a95ca4103bd2356b4c93ca70ec6595e4.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360"
                                                            srcset="
                                        {{asset('assets/_next/static/images/ev-a95ca4103bd2356b4c93ca70ec6595e4.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360  360w,
                                        {{asset('assets/_next/static/images/ev-a95ca4103bd2356b4c93ca70ec6595e4.jpg')}}?auto=format&amp;fit=max&amp;h=1702.429906542056&amp;w=720 720w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <span
                                                        class="mt-3 w-full items-start whitespace-normal p-0 text-center text-xs font-bold uppercase">Electric
                                                        Vehicles (EV)</span>
                                                </a>
                                            </li>
                                            <li class="px-1" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 12.5%;
                                ">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mt-[56px] h-full rounded-t shadow-none"
                                                    data-test="cardsByType" data-test-item="Hybrids"
                                                    href="/best-cars-trucks/fuel-hybrid/">
                                                    <div class="picture-container picture-container-block"
                                                        style="padding-bottom: 236.4485981308411%">
                                                        <img class="picture-block rounded" sizes="353.328125px"
                                                            src="{{asset('assets/_next/static/images/hybrid-8674ca92667ba94371e57e7a91f07823.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360"
                                                            srcset="
                                        {{asset('assets/_next/static/images/hybrid-8674ca92667ba94371e57e7a91f07823.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360  360w,
                                        {{asset('assets/_next/static/images/hybrid-8674ca92667ba94371e57e7a91f07823.jpg')}}?auto=format&amp;fit=max&amp;h=1702.429906542056&amp;w=720 720w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <span
                                                        class="mt-3 w-full items-start whitespace-normal p-0 text-center text-xs font-bold uppercase">Hybrids</span>
                                                </a>
                                            </li>
                                            <li class="px-1" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 12.5%;
                                ">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mt-[56px] h-full rounded-t shadow-none"
                                                    data-test="cardsByType" data-test-item="Plug-In Hybrids (PHEV)"
                                                    href="/best-cars-trucks/fuel-plug-in-hybrid/">
                                                    <div class="picture-container picture-container-block"
                                                        style="padding-bottom: 236.4485981308411%">
                                                        <img class="picture-block rounded" sizes="353.328125px"
                                                            src="{{asset('assets/_next/static/images/phev-b1b4bb23d87b76a3944a7fe7b7ef7e1d.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360"
                                                            srcset="
                                        {{asset('assets/_next/static/images/phev-b1b4bb23d87b76a3944a7fe7b7ef7e1d.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360  360w,
                                        {{asset('assets/_next/static/images/phev-b1b4bb23d87b76a3944a7fe7b7ef7e1d.jpg')}}?auto=format&amp;fit=max&amp;h=1702.429906542056&amp;w=720 720w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <span
                                                        class="mt-3 w-full items-start whitespace-normal p-0 text-center text-xs font-bold uppercase">Plug-In
                                                        Hybrids (PHEV)</span>
                                                </a>
                                            </li>
                                            <li class="px-1" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 12.5%;
                                ">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mt-[56px] h-full rounded-t shadow-none"
                                                    data-test="cardsByType" data-test-item="Hatchbacks"
                                                    href="/best-cars-trucks/hatchbacks/">
                                                    <div class="picture-container picture-container-block"
                                                        style="padding-bottom: 236.4485981308411%">
                                                        <img class="picture-block rounded" sizes="353.328125px"
                                                            src="{{asset('assets/_next/static/images/hatchback-f9501b6dc68dd0e20361b353c5f14251.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360"
                                                            srcset="
                                        {{asset('assets/_next/static/images/hatchback-f9501b6dc68dd0e20361b353c5f14251.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360  360w,
                                        {{asset('assets/_next/static/images/hatchback-f9501b6dc68dd0e20361b353c5f14251.jpg')}}?auto=format&amp;fit=max&amp;h=1702.429906542056&amp;w=720 720w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <span
                                                        class="mt-3 w-full items-start whitespace-normal p-0 text-center text-xs font-bold uppercase">Hatchbacks</span>
                                                </a>
                                            </li>
                                            <li class="px-1" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 12.5%;
                                "
                                                inert="" aria-hidden="true">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mt-[56px] h-full rounded-t shadow-none"
                                                    data-test="cardsByType" data-test-item="Coupes"
                                                    href="/best-cars-trucks/coupes/" tabindex="-1">
                                                    <div class="picture-container picture-container-block"
                                                        style="padding-bottom: 236.4485981308411%">
                                                        <img class="picture-block rounded" sizes="353.328125px"
                                                            src="{{asset('assets/_next/static/images/coupe-3850b84948d5d05f6ecaeee9affe4e7c.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360"
                                                            srcset="
                                        {{asset('assets/_next/static/images/coupe-3850b84948d5d05f6ecaeee9affe4e7c.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360  360w,
                                        {{asset('assets/_next/static/images/coupe-3850b84948d5d05f6ecaeee9affe4e7c.jpg')}}?auto=format&amp;fit=max&amp;h=1702.429906542056&amp;w=720 720w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <span
                                                        class="mt-3 w-full items-start whitespace-normal p-0 text-center text-xs font-bold uppercase">Coupes</span>
                                                </a>
                                            </li>
                                            <li class="px-1" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 12.5%;
                                "
                                                inert="" aria-hidden="true">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mt-[56px] h-full rounded-t shadow-none"
                                                    data-test="cardsByType" data-test-item="Convertibles"
                                                    href="/best-cars-trucks/convertibles/" tabindex="-1">
                                                    <div class="picture-container picture-container-block"
                                                        style="padding-bottom: 236.4485981308411%">
                                                        <img class="picture-block rounded" sizes="353.328125px"
                                                            src="{{asset('assets/_next/static/images/convertible-42255d0eb6db160b820f8718f9e830b4.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360"
                                                            srcset="
                                        {{asset('assets/_next/static/images/convertible-42255d0eb6db160b820f8718f9e830b4.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360  360w,
                                        {{asset('assets/_next/static/images/convertible-42255d0eb6db160b820f8718f9e830b4.jpg')}}?auto=format&amp;fit=max&amp;h=1702.429906542056&amp;w=720 720w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <span
                                                        class="mt-3 w-full items-start whitespace-normal p-0 text-center text-xs font-bold uppercase">Convertibles</span>
                                                </a>
                                            </li>
                                            <li class="px-1" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 12.5%;
                                "
                                                inert="" aria-hidden="true">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mt-[56px] h-full rounded-t shadow-none"
                                                    data-test="cardsByType" data-test-item="Wagons"
                                                    href="/best-cars-trucks/wagons/" tabindex="-1">
                                                    <div class="picture-container picture-container-block"
                                                        style="padding-bottom: 236.4485981308411%">
                                                        <img class="picture-block rounded" sizes="353.125px"
                                                            src="{{asset('assets/_next/static/images/wagon-8a9f2d24eea1b44f0d92c174f484d105.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360"
                                                            srcset="
                                        {{asset('assets/_next/static/images/wagon-8a9f2d24eea1b44f0d92c174f484d105.jpg')}}?auto=format&amp;fit=max&amp;h=851.214953271028&amp;w=360  360w,
                                        {{asset('assets/_next/static/images/wagon-8a9f2d24eea1b44f0d92c174f484d105.jpg')}}?auto=format&amp;fit=max&amp;h=1702.429906542056&amp;w=720 720w
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <span
                                                        class="mt-3 w-full items-start whitespace-normal p-0 text-center text-xs font-bold uppercase">Wagons</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <button
                                        class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-1 carousel-arrow-next carousel-arrow-next"
                                        data-test="carouselArrowNext" aria-label="Next">
                                        <svg width="16px" height="16px" viewBox="0 0 16 16"
                                            class="carousel-arrow-icon">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline stroke-width="1.5" fill-rule="nonzero"
                                                    points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3 flex justify-center">
                                <a data-ignore-contrast="false" data-loading="false"
                                    class="w-min btn btn-secondary btn-md" href="/best-cars-trucks/"><span
                                        class="btn-inner">See all</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-2 px-0 md:px-3">
                        <div class="flex flex-col justify-center rounded bg-white py-5 px-3 md:px-0 lg:px-5">
                            <h2 class="heading-2 normal-case pt-3 pb-5 text-center">
                                Get car reviews from our&nbsp;experts
                            </h2>
                            <div class="carousel bg-white lg:px-3">
                                <div class="relative flex w-full items-center">
                                    <button
                                        class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-2 carousel-arrow-prev carousel-arrow-prev"
                                        data-test="carouselArrowPrev" aria-label="Previous" disabled="">
                                        <svg width="16px" height="16px" viewBox="0 0 16 16"
                                            class="carousel-arrow-icon">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline stroke-width="1.5" fill-rule="nonzero"
                                                    points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                            </g>
                                        </svg>
                                    </button>
                                    <div style="position: relative; overflow: hidden" class="grow">
                                        <ul data-test="carouselSlideContainer"
                                            style="
                                display: flex;
                                flex-flow: row;
                                position: relative;
                                overflow: hidden;
                              "
                                            class="">
                                            <li class="px-2" data-test="carouselCurrentSlide0"
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 33.3333%;
                                ">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full shadow-none"
                                                    data-test="editorialReviewCard"
                                                    aria-label="2025 BMW 5 Series, reviewed by Mark Takahashi"
                                                    href="/overview/bmw/5-series/">
                                                    <div class="card-image">
                                                        <div class="picture-container picture-container-block"
                                                            style="
                                        padding-bottom: 55.319148936170215%;
                                      ">
                                                            <img class="picture-block rounded-t" sizes="1070px"
                                                                src="https://static.tcimg.net/vehicles/oem/68146315cd53322a/2025-BMW-5_Series.jpg?auto=format&amp;fit=crop&amp;h=531.0638297872341&amp;w=960"
                                                                srcset="
                                          https://static.tcimg.net/vehicles/oem/68146315cd53322a/2025-BMW-5_Series.jpg?auto=format&amp;fit=crop&amp;h=33.19148936170213&amp;w=60   60w,
                                          https://static.tcimg.net/vehicles/oem/68146315cd53322a/2025-BMW-5_Series.jpg?auto=format&amp;fit=crop&amp;h=531.0638297872341&amp;w=960 960w
                                        "
                                                                loading="lazy" data-test="editorialReviewCardImage"
                                                                alt="" role="presentation" />
                                                        </div>
                                                    </div>
                                                    <div data-test="cardContent"
                                                        class="card-content flex items-center justify-between rounded-b bg-light py-3">
                                                        <div class="heading-3_5 normal-case text-center">
                                                            2025 BMW 5&nbsp;Series
                                                        </div>
                                                        <div class="flex items-center pt-2">
                                                            <div class="picture-container mr-2 flex-shrink-0"
                                                                style="
                                          padding-bottom: 0;
                                          width: 34px;
                                          height: 34px;
                                        ">
                                                                <img class="picture-inner rounded-full"
                                                                    src="https://static.tcimg.net/authors/e97ee1f457b032ee/mark-takahashi.jpg?auto=format&amp;fit=crop&amp;h=34&amp;w=34"
                                                                    srcset="
                                            https://static.tcimg.net/authors/e97ee1f457b032ee/mark-takahashi.jpg?auto=format&amp;fit=crop&amp;h=34&amp;w=34 1x,
                                            https://static.tcimg.net/authors/e97ee1f457b032ee/mark-takahashi.jpg?auto=format&amp;fit=crop&amp;h=68&amp;w=68 2x
                                          "
                                                                    data-test="editorialReviewCardAuthorImage"
                                                                    alt="" role="presentation" />
                                                            </div>
                                                            <span>by
                                                                <!-- -->Mark Takahashi</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-2" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 33.3333%;
                                ">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full shadow-none"
                                                    data-test="editorialReviewCard"
                                                    aria-label="2025 Kia Seltos, reviewed by Perry Stern"
                                                    href="/overview/kia/seltos/">
                                                    <div class="card-image">
                                                        <div class="picture-container picture-container-block"
                                                            style="
                                        padding-bottom: 55.319148936170215%;
                                      ">
                                                            <img class="picture-block rounded-t" sizes="1070px"
                                                                src="https://static.tcimg.net/vehicles/oem/169ecbd53b7ec728/2024-Kia-Seltos.jpg?auto=format&amp;fit=crop&amp;h=531.0638297872341&amp;w=960"
                                                                srcset="
                                          https://static.tcimg.net/vehicles/oem/169ecbd53b7ec728/2024-Kia-Seltos.jpg?auto=format&amp;fit=crop&amp;h=33.19148936170213&amp;w=60   60w,
                                          https://static.tcimg.net/vehicles/oem/169ecbd53b7ec728/2024-Kia-Seltos.jpg?auto=format&amp;fit=crop&amp;h=531.0638297872341&amp;w=960 960w
                                        "
                                                                loading="lazy" data-test="editorialReviewCardImage"
                                                                alt="" role="presentation" />
                                                        </div>
                                                    </div>
                                                    <div data-test="cardContent"
                                                        class="card-content flex items-center justify-between rounded-b bg-light py-3">
                                                        <div class="heading-3_5 normal-case text-center">
                                                            2025 Kia Seltos
                                                        </div>
                                                        <div class="flex items-center pt-2">
                                                            <div class="picture-container mr-2 flex-shrink-0"
                                                                style="
                                          padding-bottom: 0;
                                          width: 34px;
                                          height: 34px;
                                        ">
                                                                <img class="picture-inner rounded-full"
                                                                    src="https://static.tcimg.net/authors/5001ec2b4def491a/perry-stern.jpg?auto=format&amp;fit=crop&amp;h=34&amp;w=34"
                                                                    srcset="
                                            https://static.tcimg.net/authors/5001ec2b4def491a/perry-stern.jpg?auto=format&amp;fit=crop&amp;h=34&amp;w=34 1x,
                                            https://static.tcimg.net/authors/5001ec2b4def491a/perry-stern.jpg?auto=format&amp;fit=crop&amp;h=68&amp;w=68 2x
                                          "
                                                                    data-test="editorialReviewCardAuthorImage"
                                                                    alt="" role="presentation" />
                                                            </div>
                                                            <span>by
                                                                <!-- -->Perry Stern</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-2" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 33.3333%;
                                ">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full shadow-none"
                                                    data-test="editorialReviewCard"
                                                    aria-label="2025 Audi Q6 e-tron, reviewed by Mark Takahashi"
                                                    href="/overview/audi/q6-e-tron/">
                                                    <div class="card-image">
                                                        <div class="picture-container picture-container-block"
                                                            style="
                                        padding-bottom: 55.319148936170215%;
                                      ">
                                                            <img class="picture-block rounded-t" sizes="1070px"
                                                                src="https://static.tcimg.net/vehicles/oem/cacf2392d6c956d5/2025-Audi-Q6_e-tron.jpg?auto=format&amp;fit=crop&amp;h=531.0638297872341&amp;w=960"
                                                                srcset="
                                          https://static.tcimg.net/vehicles/oem/cacf2392d6c956d5/2025-Audi-Q6_e-tron.jpg?auto=format&amp;fit=crop&amp;h=33.19148936170213&amp;w=60   60w,
                                          https://static.tcimg.net/vehicles/oem/cacf2392d6c956d5/2025-Audi-Q6_e-tron.jpg?auto=format&amp;fit=crop&amp;h=531.0638297872341&amp;w=960 960w
                                        "
                                                                loading="lazy" data-test="editorialReviewCardImage"
                                                                alt="" role="presentation" />
                                                        </div>
                                                    </div>
                                                    <div data-test="cardContent"
                                                        class="card-content flex items-center justify-between rounded-b bg-light py-3">
                                                        <div class="heading-3_5 normal-case text-center">
                                                            2025 Audi Q6&nbsp;e-tron
                                                        </div>
                                                        <div class="flex items-center pt-2">
                                                            <div class="picture-container mr-2 flex-shrink-0"
                                                                style="
                                          padding-bottom: 0;
                                          width: 34px;
                                          height: 34px;
                                        ">
                                                                <img class="picture-inner rounded-full"
                                                                    src="https://static.tcimg.net/authors/e97ee1f457b032ee/mark-takahashi.jpg?auto=format&amp;fit=crop&amp;h=34&amp;w=34"
                                                                    srcset="
                                            https://static.tcimg.net/authors/e97ee1f457b032ee/mark-takahashi.jpg?auto=format&amp;fit=crop&amp;h=34&amp;w=34 1x,
                                            https://static.tcimg.net/authors/e97ee1f457b032ee/mark-takahashi.jpg?auto=format&amp;fit=crop&amp;h=68&amp;w=68 2x
                                          "
                                                                    data-test="editorialReviewCardAuthorImage"
                                                                    alt="" role="presentation" />
                                                            </div>
                                                            <span>by
                                                                <!-- -->Mark Takahashi</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-2" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 33.3333%;
                                "
                                                inert="" aria-hidden="true">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full shadow-none"
                                                    data-test="editorialReviewCard"
                                                    aria-label="2025 Ferrari 12Cilindri, reviewed by Mark Takahashi"
                                                    href="/overview/ferrari/12cilindri/" tabindex="-1">
                                                    <div class="card-image">
                                                        <div class="picture-container picture-container-block"
                                                            style="
                                        padding-bottom: 55.319148936170215%;
                                      ">
                                                            <img class="picture-block rounded-t" sizes="1070px"
                                                                src="https://static.tcimg.net/vehicles/oem/6f725c33c6d2d16e/2025-Ferrari-12Cilindri.jpg?auto=format&amp;fit=crop&amp;h=531.0638297872341&amp;w=960"
                                                                srcset="
                                          https://static.tcimg.net/vehicles/oem/6f725c33c6d2d16e/2025-Ferrari-12Cilindri.jpg?auto=format&amp;fit=crop&amp;h=33.19148936170213&amp;w=60   60w,
                                          https://static.tcimg.net/vehicles/oem/6f725c33c6d2d16e/2025-Ferrari-12Cilindri.jpg?auto=format&amp;fit=crop&amp;h=531.0638297872341&amp;w=960 960w
                                        "
                                                                loading="lazy" data-test="editorialReviewCardImage"
                                                                alt="" role="presentation" />
                                                        </div>
                                                    </div>
                                                    <div data-test="cardContent"
                                                        class="card-content flex items-center justify-between rounded-b bg-light py-3">
                                                        <div class="heading-3_5 normal-case text-center">
                                                            2025 Ferrari 12Cilindri
                                                        </div>
                                                        <div class="flex items-center pt-2">
                                                            <div class="picture-container mr-2 flex-shrink-0"
                                                                style="
                                          padding-bottom: 0;
                                          width: 34px;
                                          height: 34px;
                                        ">
                                                                <img class="picture-inner rounded-full"
                                                                    src="https://static.tcimg.net/authors/e97ee1f457b032ee/mark-takahashi.jpg?auto=format&amp;fit=crop&amp;h=34&amp;w=34"
                                                                    srcset="
                                            https://static.tcimg.net/authors/e97ee1f457b032ee/mark-takahashi.jpg?auto=format&amp;fit=crop&amp;h=34&amp;w=34 1x,
                                            https://static.tcimg.net/authors/e97ee1f457b032ee/mark-takahashi.jpg?auto=format&amp;fit=crop&amp;h=68&amp;w=68 2x
                                          "
                                                                    data-test="editorialReviewCardAuthorImage"
                                                                    alt="" role="presentation" />
                                                            </div>
                                                            <span>by
                                                                <!-- -->Mark Takahashi</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-2" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 33.3333%;
                                "
                                                inert="" aria-hidden="true">
                                                <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full shadow-none"
                                                    data-test="editorialReviewCard"
                                                    aria-label="2025 Nissan LEAF, reviewed by John O'Dell"
                                                    href="/overview/nissan/leaf/" tabindex="-1">
                                                    <div class="card-image">
                                                        <div class="picture-container picture-container-block"
                                                            style="
                                        padding-bottom: 55.319148936170215%;
                                      ">
                                                            <img class="picture-block rounded-t" sizes="1070px"
                                                                src="https://static.tcimg.net/vehicles/oem/cf3e38878079d5af/2025-Nissan-LEAF.jpg?auto=format&amp;fit=crop&amp;h=531.0638297872341&amp;w=960"
                                                                srcset="
                                          https://static.tcimg.net/vehicles/oem/cf3e38878079d5af/2025-Nissan-LEAF.jpg?auto=format&amp;fit=crop&amp;h=33.19148936170213&amp;w=60   60w,
                                          https://static.tcimg.net/vehicles/oem/cf3e38878079d5af/2025-Nissan-LEAF.jpg?auto=format&amp;fit=crop&amp;h=531.0638297872341&amp;w=960 960w
                                        "
                                                                loading="lazy" data-test="editorialReviewCardImage"
                                                                alt="" role="presentation" />
                                                        </div>
                                                    </div>
                                                    <div data-test="cardContent"
                                                        class="card-content flex items-center justify-between rounded-b bg-light py-3">
                                                        <div class="heading-3_5 normal-case text-center">
                                                            2025 Nissan LEAF
                                                        </div>
                                                        <div class="flex items-center pt-2">
                                                            <div class="picture-container mr-2 flex-shrink-0"
                                                                style="
                                          padding-bottom: 0;
                                          width: 34px;
                                          height: 34px;
                                        ">
                                                                <img class="picture-inner rounded-full"
                                                                    src="https://static.tcimg.net/authors/ea26984c01e15c87/john-o-dell.jpg?auto=format&amp;fit=crop&amp;h=34&amp;w=34"
                                                                    srcset="
                                            https://static.tcimg.net/authors/ea26984c01e15c87/john-o-dell.jpg?auto=format&amp;fit=crop&amp;h=34&amp;w=34 1x,
                                            https://static.tcimg.net/authors/ea26984c01e15c87/john-o-dell.jpg?auto=format&amp;fit=crop&amp;h=68&amp;w=68 2x
                                          "
                                                                    data-test="editorialReviewCardAuthorImage"
                                                                    alt="" role="presentation" />
                                                            </div>
                                                            <span>by
                                                                <!-- -->John O'Dell</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <button
                                        class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-2 carousel-arrow-next carousel-arrow-next"
                                        data-test="carouselArrowNext" aria-label="Next">
                                        <svg width="16px" height="16px" viewBox="0 0 16 16"
                                            class="carousel-arrow-icon">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline stroke-width="1.5" fill-rule="nonzero"
                                                    points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a data-ignore-contrast="false" data-loading="false"
                                class="mx-auto mt-5 mb-3 btn btn-secondary btn-md" href="/all-reviews/"><span
                                    class="btn-inner">See all</span></a>
                        </div>
                    </div>
                    <div class="container mt-2 px-0 md:px-3">
                        <div class="rounded bg-white py-5 px-3 md:px-0 lg:px-5">
                            <h2 class="heading-2 normal-case pb-5 pt-3 text-center">
                                What people are&nbsp;saying
                            </h2>
                            <div class="carousel mb-3 lg:hidden">
                                <div class="relative flex w-full items-center">
                                    <button
                                        class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-2 carousel-arrow-prev carousel-arrow-prev"
                                        data-test="carouselArrowPrev" aria-label="Previous" disabled="">
                                        <svg width="16px" height="16px" viewBox="0 0 16 16"
                                            class="carousel-arrow-icon">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline stroke-width="1.5" fill-rule="nonzero"
                                                    points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                            </g>
                                        </svg>
                                    </button>
                                    <div style="position: relative; overflow: hidden" class="grow">
                                        <ul data-test="carouselSlideContainer"
                                            style="
                                display: flex;
                                flex-flow: row;
                                position: relative;
                                overflow: hidden;
                              "
                                            class="">
                                            <li class="px-2" data-test="carouselCurrentSlide0"
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 50%;
                                ">
                                                <div class="linkable card relative h-full pl-[43px]">
                                                    <div class="picture-container absolute top-0 left-0 mt-4"
                                                        style="
                                      padding-bottom: 0;
                                      width: 86px;
                                      height: 86px;
                                    ">
                                                        <img class="picture-inner rounded-full"
                                                            src="{{asset('assets/_next/static/images/athziri-27aba0eeb0f540b560b43ee20ddade5c.jpg')}}?auto=format&amp;h=86&amp;w=86"
                                                            srcset="
                                        {{asset('assets/_next/static/images/athziri-27aba0eeb0f540b560b43ee20ddade5c.jpg')}}?auto=format&amp;h=86&amp;w=86   1x,
                                        {{asset('assets/_next/static/images/athziri-27aba0eeb0f540b560b43ee20ddade5c.jpg')}}?auto=format&amp;h=172&amp;w=172 2x
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <div data-test="cardContent"
                                                        class="card-content rounded bg-light py-4 pl-[43px] pr-4">
                                                        <div class="pl-3">
                                                            <p class="text-[22px]">
                                                                “<a href="https://twitter.com/TrueCar"
                                                                    target="_blank">@TrueCar</a>
                                                                seriously helped me with my car deal.
                                                                Anyone looking to get a car should just
                                                                use it. #lifesaver”
                                                            </p>
                                                            <div class="flex items-center pt-4">
                                                                <div class="heading-4 normal-case">
                                                                    Athziri
                                                                </div>
                                                            </div>
                                                            <p class="flex items-center pt-2">
                                                                @Cee_OhWhattt
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="px-2" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 50%;
                                ">
                                                <div class="linkable card relative h-full pl-[43px]">
                                                    <div class="picture-container absolute top-0 left-0 mt-4"
                                                        style="
                                      padding-bottom: 0;
                                      width: 86px;
                                      height: 86px;
                                    ">
                                                        <img class="picture-inner rounded-full"
                                                            src="{{asset('assets/_next/static/images/lee-tyndall-08613dc341694b8632cb058b62728196.jpg')}}?auto=format&amp;h=86&amp;w=86"
                                                            srcset="
                                        {{asset('assets/_next/static/images/lee-tyndall-08613dc341694b8632cb058b62728196.jpg')}}?auto=format&amp;h=86&amp;w=86   1x,
                                        {{asset('assets/_next/static/images/lee-tyndall-08613dc341694b8632cb058b62728196.jpg')}}?auto=format&amp;h=172&amp;w=172 2x
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <div data-test="cardContent"
                                                        class="card-content rounded bg-light py-4 pl-[43px] pr-4">
                                                        <div class="pl-3">
                                                            <p class="text-[22px]">
                                                                “I researched and discovered my amazing
                                                                🚗 on<!-- -->
                                                                <a href="https://twitter.com/TrueCar"
                                                                    target="_blank">@TrueCar</a>, long before buying cars
                                                                online was
                                                                popular.”
                                                            </p>
                                                            <div class="flex items-center pt-4">
                                                                <div class="heading-4 normal-case">
                                                                    Lee Tyndall
                                                                </div>
                                                            </div>
                                                            <p class="flex items-center pt-2">
                                                                @photoguy_nc
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="px-2" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 50%;
                                "
                                                inert="" aria-hidden="true">
                                                <div class="linkable card relative h-full pl-[43px]">
                                                    <div class="picture-container absolute top-0 left-0 mt-4"
                                                        style="
                                      padding-bottom: 0;
                                      width: 86px;
                                      height: 86px;
                                    ">
                                                        <img class="picture-inner rounded-full"
                                                            src="{{asset('assets/_next/static/images/rajesh-kanna-e52d13a0e708d8e8ad92823299d0f6a6.jpg')}}?auto=format&amp;h=86&amp;w=86"
                                                            srcset="
                                        {{asset('assets/_next/static/images/rajesh-kanna-e52d13a0e708d8e8ad92823299d0f6a6.jpg')}}?auto=format&amp;h=86&amp;w=86   1x,
                                        {{asset('assets/_next/static/images/rajesh-kanna-e52d13a0e708d8e8ad92823299d0f6a6.jpg')}}?auto=format&amp;h=172&amp;w=172 2x
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <div data-test="cardContent"
                                                        class="card-content rounded bg-light py-4 pl-[43px] pr-4">
                                                        <div class="pl-3">
                                                            <p class="text-[22px]">
                                                                “TrueCar is awesome. Reduces all the
                                                                annoying parts of the new car purchase.”
                                                            </p>
                                                            <div class="flex items-center pt-4">
                                                                <div class="heading-4 normal-case">
                                                                    Rajesh Kanna
                                                                </div>
                                                            </div>
                                                            <p class="flex items-center pt-2">
                                                                @vrajeshkanna1
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="px-2" data-test=""
                                                style="
                                  scroll-snap-align: start;
                                  flex-shrink: 0;
                                  width: 50%;
                                "
                                                inert="" aria-hidden="true">
                                                <div class="linkable card relative h-full pl-[43px]">
                                                    <div class="picture-container absolute top-0 left-0 mt-4"
                                                        style="
                                      padding-bottom: 0;
                                      width: 86px;
                                      height: 86px;
                                    ">
                                                        <img class="picture-inner rounded-full"
                                                            src="{{asset('assets/_next/static/images/monte-pittman-427519c51ffb75ce6febe063a34d9ac1.jpg')}}?auto=format&amp;h=86&amp;w=86"
                                                            srcset="
                                        {{asset('assets/_next/static/images/monte-pittman-427519c51ffb75ce6febe063a34d9ac1.jpg')}}?auto=format&amp;h=86&amp;w=86   1x,
                                        {{asset('assets/_next/static/images/monte-pittman-427519c51ffb75ce6febe063a34d9ac1.jpg')}}?auto=format&amp;h=172&amp;w=172 2x
                                      "
                                                            alt="" role="presentation" />
                                                    </div>
                                                    <div data-test="cardContent"
                                                        class="card-content rounded bg-light py-4 pl-[43px] pr-4">
                                                        <div class="pl-3">
                                                            <p class="text-[22px]">
                                                                “Did you check out
                                                                <a href="https://twitter.com/TrueCar" target="_blank"
                                                                    tabindex="-1">@TrueCar</a>? I used them. Amazing”
                                                            </p>
                                                            <div class="flex items-center pt-4">
                                                                <div class="heading-4 normal-case">
                                                                    Monte Pittman
                                                                </div>
                                                                <div class="picture-container ml-1"
                                                                    style="
                                            padding-bottom: 0;
                                            width: 17px;
                                            height: 17px;
                                          ">
                                                                    <img class="picture-inner picture-svg"
                                                                        src="{{asset('assets/_next/static/images/twitter-verified-e17362028ae049f5fa6503ba90445c41.svg')}}"
                                                                        alt="Twitter Verified" />
                                                                </div>
                                                            </div>
                                                            <p class="flex items-center pt-2">
                                                                @montepittman
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <button
                                        class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-2 carousel-arrow-next carousel-arrow-next"
                                        data-test="carouselArrowNext" aria-label="Next">
                                        <svg width="16px" height="16px" viewBox="0 0 16 16"
                                            class="carousel-arrow-icon">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline stroke-width="1.5" fill-rule="nonzero"
                                                    points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="hidden grid-cols-2 gap-x-5 gap-y-4 px-3 pb-3 lg:grid">
                                <div class="linkable card relative h-full pl-[43px]">
                                    <div class="picture-container absolute top-0 left-0 mt-4"
                                        style="padding-bottom: 0; width: 86px; height: 86px">
                                        <img class="picture-inner rounded-full"
                                            src="{{asset('assets/_next/static/images/athziri-27aba0eeb0f540b560b43ee20ddade5c.jpg')}}?auto=format&amp;h=86&amp;w=86"
                                            srcset="
                                {{asset('assets/_next/static/images/athziri-27aba0eeb0f540b560b43ee20ddade5c.jpg')}}?auto=format&amp;h=86&amp;w=86   1x,
                                {{asset('assets/_next/static/images/athziri-27aba0eeb0f540b560b43ee20ddade5c.jpg')}}?auto=format&amp;h=172&amp;w=172 2x
                              "
                                            alt="" role="presentation" />
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content rounded bg-light py-4 pl-[43px] pr-4">
                                        <div class="pl-3">
                                            <p class="text-[22px]">
                                                “<a href="https://twitter.com/TrueCar" target="_blank">@TrueCar</a>
                                                seriously helped me with my car deal. Anyone
                                                looking to get a car should just use it.
                                                #lifesaver”
                                            </p>
                                            <div class="flex items-center pt-4">
                                                <div class="heading-4 normal-case">Athziri</div>
                                            </div>
                                            <p class="flex items-center pt-2">
                                                @Cee_OhWhattt
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="linkable card relative h-full pl-[43px]">
                                    <div class="picture-container absolute top-0 left-0 mt-4"
                                        style="padding-bottom: 0; width: 86px; height: 86px">
                                        <img class="picture-inner rounded-full"
                                            src="{{asset('assets/_next/static/images/lee-tyndall-08613dc341694b8632cb058b62728196.jpg')}}?auto=format&amp;h=86&amp;w=86"
                                            srcset="
                                {{asset('assets/_next/static/images/lee-tyndall-08613dc341694b8632cb058b62728196.jpg')}}?auto=format&amp;h=86&amp;w=86   1x,
                                {{asset('assets/_next/static/images/lee-tyndall-08613dc341694b8632cb058b62728196.jpg')}}?auto=format&amp;h=172&amp;w=172 2x
                              "
                                            alt="" role="presentation" />
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content rounded bg-light py-4 pl-[43px] pr-4">
                                        <div class="pl-3">
                                            <p class="text-[22px]">
                                                “I researched and discovered my amazing 🚗 on<!-- -->
                                                <a href="https://twitter.com/TrueCar" target="_blank">@TrueCar</a>, long
                                                before buying cars online was popular.”
                                            </p>
                                            <div class="flex items-center pt-4">
                                                <div class="heading-4 normal-case">
                                                    Lee Tyndall
                                                </div>
                                            </div>
                                            <p class="flex items-center pt-2">@photoguy_nc</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="linkable card relative h-full pl-[43px]">
                                    <div class="picture-container absolute top-0 left-0 mt-4"
                                        style="padding-bottom: 0; width: 86px; height: 86px">
                                        <img class="picture-inner rounded-full"
                                            src="{{asset('assets/_next/static/images/rajesh-kanna-e52d13a0e708d8e8ad92823299d0f6a6.jpg')}}?auto=format&amp;h=86&amp;w=86"
                                            srcset="
                                {{asset('assets/_next/static/images/rajesh-kanna-e52d13a0e708d8e8ad92823299d0f6a6.jpg')}}?auto=format&amp;h=86&amp;w=86   1x,
                                {{asset('assets/_next/static/images/rajesh-kanna-e52d13a0e708d8e8ad92823299d0f6a6.jpg')}}?auto=format&amp;h=172&amp;w=172 2x
                              "
                                            alt="" role="presentation" />
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content rounded bg-light py-4 pl-[43px] pr-4">
                                        <div class="pl-3">
                                            <p class="text-[22px]">
                                                “TrueCar is awesome. Reduces all the annoying
                                                parts of the new car purchase.”
                                            </p>
                                            <div class="flex items-center pt-4">
                                                <div class="heading-4 normal-case">
                                                    Rajesh Kanna
                                                </div>
                                            </div>
                                            <p class="flex items-center pt-2">
                                                @vrajeshkanna1
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="linkable card relative h-full pl-[43px]">
                                    <div class="picture-container absolute top-0 left-0 mt-4"
                                        style="padding-bottom: 0; width: 86px; height: 86px">
                                        <img class="picture-inner rounded-full"
                                            src="{{asset('assets/_next/static/images/monte-pittman-427519c51ffb75ce6febe063a34d9ac1.jpg')}}?auto=format&amp;h=86&amp;w=86"
                                            srcset="
                                {{asset('assets/_next/static/images/monte-pittman-427519c51ffb75ce6febe063a34d9ac1.jpg')}}?auto=format&amp;h=86&amp;w=86   1x,
                                {{asset('assets/_next/static/images/monte-pittman-427519c51ffb75ce6febe063a34d9ac1.jpg')}}?auto=format&amp;h=172&amp;w=172 2x
                              "
                                            alt="" role="presentation" />
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content rounded bg-light py-4 pl-[43px] pr-4">
                                        <div class="pl-3">
                                            <p class="text-[22px]">
                                                “Did you check out
                                                <a href="https://twitter.com/TrueCar" target="_blank">@TrueCar</a>? I
                                                used them. Amazing”
                                            </p>
                                            <div class="flex items-center pt-4">
                                                <div class="heading-4 normal-case">
                                                    Monte Pittman
                                                </div>
                                                <div class="picture-container ml-1"
                                                    style="
                                    padding-bottom: 0;
                                    width: 17px;
                                    height: 17px;
                                  ">
                                                    <img class="picture-inner picture-svg"
                                                        src="{{asset('assets/_next/static/images/twitter-verified-e17362028ae049f5fa6503ba90445c41.svg')}}"
                                                        alt="Twitter Verified" />
                                                </div>
                                            </div>
                                            <p class="flex items-center pt-2">
                                                @montepittman
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container my-2 px-0 md:px-3">
                        <div class="flex flex-col justify-center rounded bg-white px-3 lg:px-5 py-5">
                            <h2 class="heading-2 normal-case w-full pt-3 text-center">
                                Resources
                            </h2>
                            <div class="flex w-full flex-col justify-center pt-5 pb-3 lg:px-3" data-reach-tabs=""
                                data-orientation="horizontal">
                                <div class="flex w-full justify-center">
                                    <div role="tablist" aria-orientation="horizontal"
                                        class="tab-bar tab-bar-block w-full max-w-lg" data-reach-tab-list="">
                                        <button aria-controls="tabs--2--panel--0" aria-selected="true" role="tab"
                                            tabindex="0" class="tab pt-0" data-reach-tab=""
                                            data-orientation="horizontal" id="tabs--2--tab--0" type="button"
                                            data-selected="">
                                            <span class="tab-text">Helpful links</span><span
                                                class="tab-bottom-border"></span>
                                        </button>

                                        <button
                                            aria-controls="tabs--2--panel--1" aria-selected="false" role="tab"
                                            tabindex="-1" class="tab pt-0" data-reach-tab=""
                                            data-orientation="horizontal" id="tabs--2--tab--1" type="button">
                                            <span class="tab-text">Used cars</span><span
                                                class="tab-bottom-border"></span>
                                        </button>

                                        <button
                                            aria-controls="tabs--2--panel--2" aria-selected="false" role="tab"
                                            tabindex="-1" class="tab pt-0" data-reach-tab=""
                                            data-orientation="horizontal" id="tabs--2--tab--2" type="button">
                                            <span class="tab-text">New cars</span><span
                                                class="tab-bottom-border"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="border-y-[1px]" data-reach-tab-panels="">
                                    <div aria-labelledby="tabs--2--tab--0" role="tabpanel" tabindex="0"
                                        data-reach-tab-panel="" id="tabs--2--panel--0" class="tabs--2--panel">
                                        <div class="expandable-list-item">
                                            <button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false">
                                                <div class="heading-4 normal-case w-full px-3 py-3">
                                                    Reviews
                                                </div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static">
                                                        <svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3"
                                                            style="width: 21px; height: 21px" aria-hidden="true"
                                                            data-test-item="down">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <div class="grid grid-cols-1 gap-3 sm:space-y-0 md:grid-cols-3">
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/acura/rdx/">Acura RDX</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/audi/q5/">Audi Q5</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/bmw/i4/">BMW i4</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/bmw/x3/">BMW X3</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/ford/bronco/">Ford Bronco</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/ford/ecosport/">Ford EcoSport</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/ford/maverick/">Ford Maverick</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/genesis/gv70/">Genesis GV70</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/honda/civic/">Honda Civic</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/hyundai/elantra/">Hyundai Elantra</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/hyundai/santa-fe/">Hyundai Santa
                                                                    Fe</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/jeep/gladiator/">Jeep Gladiator</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/kia/ev6/">Kia EV6</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/kia/k5/">Kia K5</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/polestar/2/">Polestar 2</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/porsche/macan/">Porsche Macan</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/subaru/forester/">Subaru Forester</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/subaru/outback/">Subaru Outback</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/volkswagen/id-4/">Volkswagen ID.4</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/overview/volkswagen/taos/">Volkswagen Taos</a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-list-item">
                                            <button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false">
                                                <div class="heading-4 normal-case w-full px-3 py-3">
                                                    Comparisons
                                                </div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static">
                                                        <svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3"
                                                            style="width: 21px; height: 21px" aria-hidden="true"
                                                            data-test-item="down">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <div class="grid grid-cols-1 gap-3 sm:space-y-0 md:grid-cols-3">
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/compare/bmw-i4-vs-tesla-model-3/">BMW i4 vs.
                                                                    Tesla Model 3</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/compare/ford-bronco-vs-jeep-wrangler/">Ford
                                                                    Bronco vs. Jeep Wrangler</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/compare/ford-maverick-vs-hyundai-santa-cruz/">Ford
                                                                    Maverick vs. Hyundai Santa
                                                                    Cruz</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/compare/honda-accord-vs-toyota-camry/">Honda
                                                                    Accord vs. Toyota Camry</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/compare/honda-cr-v-vs-toyota-rav4/">Honda CR-V
                                                                    vs. Toyota RAV4</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/compare/honda-odyssey-vs-toyota-sienna/">Honda
                                                                    Odyssey vs. Toyota Sienna</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/compare/honda-pilot-vs-toyota-highlander/">Honda
                                                                    Pilot vs. Toyota Highlander</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/compare/hyundai-ioniq-5-vs-kia-ev6/">Hyundai
                                                                    IONIQ 5 vs. Kia EV6</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/compare/hyundai-palisade-vs-kia-telluride/">Hyundai
                                                                    Palisade vs. Kia Telluride</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/compare/polestar-2-vs-tesla-model-3/">Polestar
                                                                    2 vs. Tesla Model 3</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/compare/porsche-taycan-vs-tesla-model-s/">Porsche
                                                                    Taycan vs. Tesla Model S</a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-list-item">
                                            <button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false">
                                                <div class="heading-4 normal-case w-full px-3 py-3">
                                                    Inventory by make
                                                </div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static">
                                                        <svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3"
                                                            style="width: 21px; height: 21px" aria-hidden="true"
                                                            data-test-item="down">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <div class="grid grid-cols-1 gap-3 sm:space-y-0 md:grid-cols-3">
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/acura/">Acura Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/alfa-romeo/">Alfa Romeo Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/audi/">Audi Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/bmw/">BMW Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/buick/">Buick Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/cadillac/">Cadillac Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/chevrolet/">Chevrolet Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/chrysler/">Chrysler Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/dodge/">Dodge Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/fiat/">FIAT Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/ford/">Ford Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/genesis/">Genesis Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/gmc/">GMC Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/honda/">Honda Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/hummer/">HUMMER Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/hyundai/">Hyundai Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/infiniti/">INFINITI Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/jaguar/">Jaguar Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/jeep/">Jeep Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/kia/">Kia Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/land-rover/">Land Rover Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/lexus/">Lexus Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/lincoln/">Lincoln Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/maserati/">Maserati Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/mazda/">Mazda Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/mercedes-benz/">Mercedes-Benz
                                                                    Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/mercury/">Mercury Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/mini/">MINI Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/mitsubishi/">Mitsubishi Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/nissan/">Nissan Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/polestar/">Polestar Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/pontiac/">Pontiac Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/porsche/">Porsche Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/ram/">Ram Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/rivian/">Rivian Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/saab/">Saab Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/saturn/">Saturn Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/scion/">Scion Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/smart/">smart Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/subaru/">Subaru Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/tesla/">Tesla Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/toyota/">Toyota Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/volkswagen/">Volkswagen Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/volvo/">Volvo Inventory</a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-list-item">
                                            <button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false">
                                                <div class="heading-4 normal-case w-full px-3 py-3">
                                                    Browse inventory
                                                </div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static">
                                                        <svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3"
                                                            style="width: 21px; height: 21px" aria-hidden="true"
                                                            data-test-item="down">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <div class="grid grid-cols-1 gap-3 sm:space-y-0 md:grid-cols-3">
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ca/">California Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/tx/">Texas Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/fl/">Florida Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ny/">New York Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/pa/">Pennsylvania Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/il/">Illinois Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/oh/">Ohio Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ga/">Georgia Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/nc/">North Carolina Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/mi/">Michigan Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/nj/">New Jersey Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/va/">Virginia Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/wa/">Washington Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/az/">Arizona Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ma/">Massachusetts Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/tn/">Tennessee Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/in/">Indiana Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/mo/">Missouri Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/md/">Maryland Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/wi/">Wisconsin Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/co/">Colorado Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/mn/">Minnesota Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/sc/">South Carolina Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/al/">Alabama Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/la/">Louisiana Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ky/">Kentucky Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/or/">Oregon Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ok/">Oklahoma Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ct/">Connecticut Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ut/">Utah Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ia/">Iowa Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/nv/">Nevada Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ar/">Arkansas Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ms/">Mississippi Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ks/">Kansas Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/nm/">New Mexico Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ne/">Nebraska Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/wv/">West Virginia Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/id/">Idaho Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/hi/">Hawaii Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/nh/">New Hampshire Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/me/">Maine Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/mt/">Montana Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ri/">Rhode Island Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/de/">Delaware Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/sd/">South Dakota Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/nd/">North Dakota Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/ak/">Alaska Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/dc/">District of Columbia
                                                                    Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/vt/">Vermont Inventory</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/sitemap/state/wy/">Wyoming Inventory</a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div aria-labelledby="tabs--2--tab--1" role="tabpanel" tabindex="-1"
                                        data-reach-tab-panel="" id="tabs--2--panel--1" hidden="" class="tabs--2--panel">
                                        <div class="expandable-list-item">
                                            <button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false">
                                                <div class="heading-4 normal-case w-full px-3 py-3">
                                                    Popular models
                                                </div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static">
                                                        <svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3"
                                                            style="width: 21px; height: 21px" aria-hidden="true"
                                                            data-test-item="down">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <div class="grid grid-cols-1 gap-3 sm:space-y-0 md:grid-cols-3">
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/dodge/challenger/">Used
                                                                    Dodge Challenger</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/dodge/charger/">Used
                                                                    Dodge Charger</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/ford/edge/">Used
                                                                    Ford Edge</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/ford/escape/">Used
                                                                    Ford Escape</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/ford/explorer/">Used
                                                                    Ford Explorer</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/ford/f-150/">Used
                                                                    Ford F-150</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/honda/accord/">Used
                                                                    Honda Accord</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/honda/civic/">Used
                                                                    Honda Civic</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/honda/cr-v/">Used
                                                                    Honda CR-V</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/honda/pilot/">Used
                                                                    Honda Pilot</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/hyundai/elantra/">Used
                                                                    Hyundai Elantra</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/hyundai/kona/">Used
                                                                    Hyundai Kona</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/hyundai/santa-fe/">Used
                                                                    Hyundai Santa Fe</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/jeep/cherokee/">Used
                                                                    Jeep Cherokee</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/jeep/grand-cherokee/">Used
                                                                    Jeep Grand Cherokee</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/jeep/renegade/">Used
                                                                    Jeep Renegade</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/jeep/wrangler/">Used
                                                                    Jeep Wrangler</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/kia/sorento/">Used
                                                                    Kia Sorento</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/kia/stinger/">Used
                                                                    Kia Stinger</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/mazda/cx-5/">Used
                                                                    Mazda CX-5</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/nissan/rogue/">Used
                                                                    Nissan Rogue</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/subaru/ascent/">Used
                                                                    Subaru Ascent</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/subaru/crosstrek/">Used
                                                                    Subaru Crosstrek</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/subaru/forester/">Used
                                                                    Subaru Forester</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/subaru/outback/">Used
                                                                    Subaru Outback</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/tesla/model-3/">Used
                                                                    Tesla Model 3</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/toyota/4runner/">Used
                                                                    Toyota 4Runner</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/toyota/camry/">Used
                                                                    Toyota Camry</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/toyota/highlander/">Used
                                                                    Toyota Highlander</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/toyota/rav4/">Used
                                                                    Toyota RAV4</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/toyota/tacoma/">Used
                                                                    Toyota Tacoma</a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-list-item">
                                            <button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false">
                                                <div class="heading-4 normal-case w-full px-3 py-3">
                                                    Locations
                                                </div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static">
                                                        <svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3"
                                                            style="width: 21px; height: 21px" aria-hidden="true"
                                                            data-test-item="down">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <div class="grid grid-cols-1 gap-3 sm:space-y-0 md:grid-cols-3">
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-albuquerque-nm/">Albuquerque</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-atlanta-ga/">Atlanta</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-austin-tx/">Austin</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-dallas-tx/">Dallas</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-denver-co/">Denver</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-houston-tx/">Houston</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-indianapolis-in/">Indianapolis</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-kansas-city-mo/">Kansas
                                                                    City</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-las-vegas-nv/">Las
                                                                    Vegas</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-los-angeles-ca/">Los
                                                                    Angeles</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-miami-fl/">Miami</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-orlando-fl/">Orlando</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-philadelphia-pa/">Philadelphia</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-phoenix-az/">Phoenix</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/location-virginia-beach-va/">Virginia
                                                                    Beach</a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-list-item">
                                            <button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false">
                                                <div class="heading-4 normal-case w-full px-3 py-3">
                                                    Fuel types
                                                </div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static">
                                                        <svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3"
                                                            style="width: 21px; height: 21px" aria-hidden="true"
                                                            data-test-item="down">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <div class="grid grid-cols-1 gap-3 sm:space-y-0 md:grid-cols-3">
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/fuel-diesel/">Diesel</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/fuel-electric/">Electric</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/fuel-all-hybrids/">Hybrid</a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-list-item">
                                            <button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false">
                                                <div class="heading-4 normal-case w-full px-3 py-3">
                                                    Trims
                                                </div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static">
                                                        <svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3"
                                                            style="width: 21px; height: 21px" aria-hidden="true"
                                                            data-test-item="down">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <div class="grid grid-cols-1 gap-3 sm:space-y-0 md:grid-cols-3">
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/bmw/3-series/?trim=335i">BMW
                                                                    335i</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/dodge/charger/?trim=r-t">Dodge
                                                                    Charger R/T</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/ford/focus/?trim=st">Ford
                                                                    Focus ST</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/ford/mustang/?trim=gt">Ford
                                                                    Mustang GT</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/honda/civic/?trim=si">Honda
                                                                    Civic Si</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/honda/civic/?trim=sport">Honda
                                                                    Civic Sport</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/infiniti/g/?trim=g37">INFINITI
                                                                    G37</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/lexus/gx/?trim=gx-460">Lexus
                                                                    GX 460</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/lexus/is/?trim=is-250">Lexus
                                                                    IS 250</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/lexus/rx/?trim=rx-350">Lexus
                                                                    RX 350</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/subaru/wrx/?trim=sti">Subaru
                                                                    WRX STI</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/toyota/camry/">Toyota
                                                                    Camry Hybrid</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/used-cars-for-sale/listings/toyota/highlander/">Toyota
                                                                    Highlander Hybrid</a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div aria-labelledby="tabs--2--tab--2" role="tabpanel" tabindex="-1"
                                        data-reach-tab-panel="" id="tabs--2--panel--2" hidden="" class="tabs--2--panel">
                                        <div class="expandable-list-item">
                                            <button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false">
                                                <div class="heading-4 normal-case w-full px-3 py-3">
                                                    Popular models
                                                </div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static">
                                                        <svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3"
                                                            style="width: 21px; height: 21px" aria-hidden="true"
                                                            data-test-item="down">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <div class="grid grid-cols-1 gap-3 sm:space-y-0 md:grid-cols-3">
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/dodge/challenger/">New
                                                                    Dodge Challenger</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/ford/bronco/">New
                                                                    Ford Bronco</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/ford/edge/">New Ford
                                                                    Edge</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/ford/escape/">New
                                                                    Ford Escape</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/ford/explorer/">New
                                                                    Ford Explorer</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/ford/f-150/">New
                                                                    Ford F-150</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/ford/mustang/">New
                                                                    Ford Mustang</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/ford/ranger/">New
                                                                    Ford Ranger</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/honda/accord/">New
                                                                    Honda Accord</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/honda/civic/">New
                                                                    Honda Civic</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/honda/cr-v/">New
                                                                    Honda CR-V</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/honda/pilot/">New
                                                                    Honda Pilot</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/hyundai/elantra/">New
                                                                    Hyundai Elantra</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/hyundai/kona/">New
                                                                    Hyundai Kona</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/hyundai/santa-fe/">New
                                                                    Hyundai Santa Fe</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/jeep/cherokee/">New
                                                                    Jeep Cherokee</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/jeep/grand-cherokee/">New
                                                                    Jeep Grand Cherokee</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/jeep/renegade/">New
                                                                    Jeep Renegade</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/jeep/wagoneer/">New
                                                                    Jeep Wagoneer</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/jeep/wrangler/">New
                                                                    Jeep Wrangler</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/kia/sorento/">New
                                                                    Kia Sorento</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/kia/stinger/">New
                                                                    Kia Stinger</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/mazda/cx-5/">New
                                                                    Mazda CX-5</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/nissan/frontier/">New
                                                                    Nissan Frontier</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/nissan/rogue/">New
                                                                    Nissan Rogue</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/subaru/ascent/">New
                                                                    Subaru Ascent</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/subaru/crosstrek/">New
                                                                    Subaru Crosstrek</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/subaru/forester/">New
                                                                    Subaru Forester</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/subaru/outback/">New
                                                                    Subaru Outback</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/toyota/4runner/">New
                                                                    Toyota 4Runner</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/toyota/camry/">New
                                                                    Toyota Camry</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/toyota/tacoma/">New
                                                                    Toyota Tacoma</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/toyota/tundra/">New
                                                                    Toyota Tundra</a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-list-item">
                                            <button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false">
                                                <div class="heading-4 normal-case w-full px-3 py-3">
                                                    Locations
                                                </div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static">
                                                        <svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3"
                                                            style="width: 21px; height: 21px" aria-hidden="true"
                                                            data-test-item="down">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <div class="grid grid-cols-1 gap-3 sm:space-y-0 md:grid-cols-3">
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-albuquerque-nm/">Albuquerque</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-atlanta-ga/">Atlanta</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-austin-tx/">Austin</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-boston-ma/">Boston</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-charlotte-nc/">Charlotte</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-cincinatti-oh/">Cincinatti</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-columbus-oh/">Columbus</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-dallas-tx/">Dallas</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-denver-co/">Denver</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-el-paso-tx/">El
                                                                    Paso</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-fresno-ca/">Fresno</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-los-angeles-ca/">Los
                                                                    Angeles</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-san-antonio-tx/">San
                                                                    Antonio</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-san-diego-ca/">San
                                                                    Diego</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/location-tulsa-ok/">Tulsa</a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-list-item">
                                            <button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false">
                                                <div class="heading-4 normal-case w-full px-3 py-3">
                                                    Fuel types
                                                </div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static">
                                                        <svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3"
                                                            style="width: 21px; height: 21px" aria-hidden="true"
                                                            data-test-item="down">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <div class="grid grid-cols-1 gap-3 sm:space-y-0 md:grid-cols-3">
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/fuel-diesel/">Diesel</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/fuel-electric/">Electric</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/fuel-all-hybrids/">Hybrid</a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-list-item">
                                            <button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false">
                                                <div class="heading-4 normal-case w-full px-3 py-3">
                                                    Trims
                                                </div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static">
                                                        <svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3"
                                                            style="width: 21px; height: 21px" aria-hidden="true"
                                                            data-test-item="down">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <div class="grid grid-cols-1 gap-3 sm:space-y-0 md:grid-cols-3">
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/ford/mustang/?trim=gt">Ford
                                                                    Mustang GT</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/gmc/terrain/?trim=slt">GMC
                                                                    Terrain SLT</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/gmc/yukon/?trim=slt">GMC
                                                                    Yukon SLT</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/honda/accord/">Honda
                                                                    Accord Hybrid</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/honda/accord/?trim=sport">Honda
                                                                    Accord Sport</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/honda/civic/?trim=si">Honda
                                                                    Civic Si</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/honda/civic/?trim=sport">Honda
                                                                    Civic Sport</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/lexus/rx/?trim=rx-350">Lexus
                                                                    RX 350</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/nissan/sentra/?trim=sv">Nissan
                                                                    Sentra SV</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/ram/2500/?trim=laramie">Ram
                                                                    2500 Laramie</a>
                                                            </li>
                                                            <li class="">
                                                                <a aria-current="false" aria-disabled="false"
                                                                    class="link-item-minimal no-underline"
                                                                    href="/new-cars-for-sale/listings/toyota/highlander/">Toyota
                                                                    Highlander Hybrid</a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
