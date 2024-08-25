@extends('site.layouts.app')
@section('content')
    <main id="mainContent"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div>
            <div class="relative pt-[60px]">
                <div style="--image-url-sm:url({{ asset('assets/_next/static/images/tc-plus-landing-bg-lg-f3460d1ab4f6eec80fa4e6e7a78c1982.jpeg') }});--image-url-md:url({{ asset('assets/_next/static/images/tc-plus-landing-bg-lg-f3460d1ab4f6eec80fa4e6e7a78c1982.jpeg') }});--image-url-lg:url({{ asset('assets/_next/static/images/tc-plus-landing-bg-lg-f3460d1ab4f6eec80fa4e6e7a78c1982.jpeg') }}?w=2000&amp;h=944)"
                    class="bg-[image:var(--image-url-sm)] bg-cover bg-no-repeat text-center text-white md:bg-[image:var(--image-url-md)] lg:bg-[image:var(--image-url-lg)] relative bg-center before:content-[''] before:block before:absolute before:top-0 before:bottom-0 before:left-0 before:right-0 before:bg-gradient-to-r before:from-black before:to-[rgba(36,43,66,0.6)]">
                    <div class="container">
                        <div class="mx-0 mb-[-25px] px-0 md:mx-[30px] md:mb-[-40px] md:px-2 md:text-left lg:pb-6 lg:pt-6">
                            <div class="flex flex-col items-start pt-5 pb-2 md:pb-0 lg:pt-0">
                                <div
                                    class="mb-1 flex rounded-[100px] bg-[#CCEFFC] px-[10px] py-[5px] text-[10px] font-bold text-[color:var(--gray-900)] md:mb-2">
                                    NEW</div>
                                <div>
                                    <h1 class="heading-3 normal-case heading-md-1 md:normal-case pb-1 font-normal md:pb-0">
                                        <span class="sr-only">TrueCar Plus</span>
                                    </h1>
                                    <div class="w-full">
                                        <div class="picture-container" style="padding-bottom:0;width:160px;height:29px"><img
                                                class="picture-inner picture-svg w-[110px] md:w-[160px]"
                                                src="{{ asset('assets/_next/static/images/tc-plus-dark-theme-logo-f9a028938a01d05a636e4a5a8a188099.svg') }}"
                                                role="presentation" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mt-2 text-left xl:mt-3">
                                <div class="picture-container max-xl:!w-[380px] max-sm:hidden"
                                    style="padding-bottom:0;width:506px;height:82px"><img class="picture-inner picture-svg"
                                        src="{{ asset('assets/_next/static/images/title-b0b7eb6df743280db2060661e023a6d9.svg') }}"
                                        alt="Buy online. Have it delivered."></div>
                                <div class="picture-container sm:hidden" style="padding-bottom:0;width:330px;height:102px">
                                    <img class="picture-inner picture-svg"
                                        src="{{ asset('assets/_next/static/images/title-stacked-00434b4d80b883337793ab9cce983c38.svg') }}"
                                        alt="Buy online. Have it delivered.">
                                </div><button data-test="infoButtonButton" aria-label="Info" color="secondary"
                                    style="--info-border-color:white"
                                    class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)] absolute z-1 bottom-[16px] ml-[-136px] sm:bottom-[20px] sm:ml-[-16px] xl:bottom-[12px] xl:ml-[-24px]"><svg
                                        viewBox="0 0 24 24" class="icon icon-fill-default flex-shrink-0 fill-white"
                                        style="width:18px;height:18px" aria-hidden="true">
                                        <use href="#info"></use>
                                    </svg></button>
                            </div>
                            <p class="py-3 text-left font-normal">Enjoy nationwide delivery for used cars. California
                                delivery for new cars.</p>
                            <div class="max-w-[472px] md:max-w-[527px]">
                                <div class="text-dark">
                                    <div class="w-full">
                                        <div class="relative flex w-full justify-center">
                                            <div data-test="dropdownBox" data-do-not-disturb="false"
                                                class="typeahead-field-dropdown-box dropdown"><button aria-haspopup="true"
                                                    class="h-0 w-full hidden" aria-expanded="false"><span
                                                        class="sr-only">Toggle Dropdown</span></button><label
                                                    for="trueCarPlusSearchBarOmnisearchSearchField" class="sr-only">Search
                                                    make, model, or type</label>
                                                <div class="field-container-challenger typeahead-field-text-field">
                                                    <div class="field-wrapper-challenger field-theme-dark-challenger">
                                                        <div class="field-content-row field-with-prefix">
                                                            <div
                                                                class="field-addon-challenger field-addon-challenger-prefix">
                                                                <svg viewBox="0 0 24 24"
                                                                    class="icon icon-fill-default z-[200]"
                                                                    style="width:24px;height:24px" aria-hidden="true">
                                                                    <use href="#search"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="field-input-label-challenger"><input
                                                                    id="trueCarPlusSearchBarOmnisearchSearchField"
                                                                    autocomplete="off"
                                                                    class="form-control-challenger typeahead-field-text-field-input !rounded-[100px] !border-none"
                                                                    aria-label="Search make, model, or type"
                                                                    placeholder="Search make, model, or type"
                                                                    autocorrect="off" autocapitalize="none"
                                                                    spellcheck="false" data-test-item="TypeaheadField"
                                                                    data-test="omnisearchSearchField" type="text"
                                                                    value=""></div>
                                                        </div>
                                                        <div class="field-message-challenger">
                                                            <div class="field-message-text-challenger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div tabindex="-1" role="menu" aria-hidden="true"
                                                    class="w-full dropdown-menu-typeahead dropdown-menu-rounded z-[200] rounded-b-[25px] dropdown-menu-dark dropdown-menu dropdown-menu-right">
                                                    <ul style="max-height:252px;overflow-y:auto" role="menu">
                                                        <li disabled="" tabindex="-1"
                                                            class="dropdown-item-typeahead disabled dropdown-item"><span
                                                                class="block overflow-hidden whitespace-normal italic text-dark">No
                                                                results for ""</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mx-auto flex flex-wrap justify-center gap-3 min-[440px]:inline-flex min-[440px]:max-w-[330px] min-[640px]:flex-nowrap w-full !max-w-none grid-cols-3 justify-between !gap-1 py-3">
                                    <a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] rounded-[10px] border border-[color:var(--gray-700)] bg-[rgba(100,100,100,0.60)] backdrop-blur-md relative flex h-[132px] flex-col items-center justify-center gap-2 min-[280px]:w-[calc(50%_-_10px)] min-[440px]:min-w-[132px] min-[440px]:max-w-[25%] bg-[radial-gradient(circle_at_top,_rgba(255,100,0,0.15)_0%,_rgba(230,230,230,0.1)_39%,_rgba(255,255,255,0)_100%)] min-[280px]:!w-[calc(33%_-_6px)] !max-w-[calc(33%_-_6px)] !min-w-0 min-[280px]:h-[110px] min-[440px]:!max-w-none min-[440px]:h-[132px]"
                                        data-test="homepageHeroPanelShopNewButton"
                                        href="/new-cars-for-sale/listings/?buyOnline=true"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default fill-[var(--orange-600)]"
                                            style="width:44px;height:44px" aria-hidden="true">
                                            <use href="#car-accident-free"></use>
                                        </svg><span class="flex items-center pl-[8px] text-white">Shop New<svg
                                                viewBox="0 0 24 24" class="icon icon-fill-default"
                                                style="width:20px;height:20px" aria-hidden="true">
                                                <use href="#keyboard_arrow_right"></use>
                                            </svg></span></a><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] rounded-[10px] border border-[color:var(--gray-700)] bg-[rgba(100,100,100,0.60)] backdrop-blur-md relative flex h-[132px] flex-col items-center justify-center gap-2 min-[280px]:w-[calc(50%_-_10px)] min-[440px]:min-w-[132px] min-[440px]:max-w-[25%] bg-[radial-gradient(circle_at_top,_rgba(235,0,139,0.15)_0%,_rgba(230,230,230,0.1)_39%,_rgba(255,255,255,0)_100%)] min-[280px]:!w-[calc(33%_-_6px)] !max-w-[calc(33%_-_6px)] !min-w-0 min-[280px]:h-[110px] min-[440px]:!max-w-none min-[440px]:h-[132px]"
                                        data-test="homepageHeroPanelShopUsedButton"
                                        href="/used-cars-for-sale/listings/?buyOnline=true"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default fill-[var(--magenta-600)]"
                                            style="width:44px;height:44px" aria-hidden="true">
                                            <use href="#vehicle-discount"></use>
                                        </svg><span class="flex items-center pl-[8px] text-white">Shop Used<svg
                                                viewBox="0 0 24 24" class="icon icon-fill-default"
                                                style="width:20px;height:20px" aria-hidden="true">
                                                <use href="#keyboard_arrow_right"></use>
                                            </svg></span></a><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] rounded-[10px] border border-[color:var(--gray-700)] bg-[rgba(100,100,100,0.60)] backdrop-blur-md relative flex h-[132px] flex-col items-center justify-center gap-2 min-[280px]:w-[calc(50%_-_10px)] min-[440px]:min-w-[132px] min-[440px]:max-w-[25%] bg-[radial-gradient(circle_at_top,_rgba(6,174,170,0.15)_0%,_rgba(230,230,230,0.1)_39%,_rgba(255,255,255,0)_100%)] min-[280px]:!w-[calc(33%_-_6px)] !max-w-[calc(33%_-_6px)] !min-w-0 min-[280px]:h-[110px] min-[440px]:!max-w-none min-[440px]:h-[132px]"
                                        data-test="homepageHeroPanelShopElectricButton"
                                        href="/used-cars-for-sale/listings/fuel-electric/?buyOnline=true"><svg
                                            viewBox="0 0 24 24" class="icon icon-fill-default fill-[var(--teal-600)]"
                                            style="width:44px;height:44px" aria-hidden="true">
                                            <use href="#ev_charger"></use>
                                        </svg><span class="flex items-center pl-[8px] text-white"><span
                                                class="md:hidden">Shop EV</span><span class="hidden md:block">Shop
                                                Electric</span><svg viewBox="0 0 24 24" class="icon icon-fill-default"
                                                style="width:20px;height:20px" aria-hidden="true">
                                                <use href="#keyboard_arrow_right"></use>
                                            </svg></span></a>
                                </div>
                                <p class="text-left text-sm md:hidden">Delivery not available in NY, MA, HI, and AK.</p>
                                <p class="hidden text-left text-sm text-[color:var(--gray-300)] md:block">Delivery not
                                    available in New York, Massachusetts, Hawaii, and Alaska.</p><span
                                    style="font-size:0"></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative right-0 bottom-[-25px] ml-[40%] md:mt-5 md:ml-[50%] lg:absolute lg:bottom-[-40px] lg:w-full lg:max-w-[400px] xl:max-w-[600px]">
                        <div class="picture-container picture-container-block" style="padding-bottom:58.94378194207837%">
                            <img class="picture-block" sizes="600px"
                                src="{{ asset('assets/_next/static/images/tc-plus-landing-vehicle-bg-1e34583cf1595a372873ef1ee0b5eff8.png') }}?auto=format&amp;h=330.08517887563886&amp;w=560"
                                srcset="{{ asset('assets/_next/static/images/tc-plus-landing-vehicle-bg-1e34583cf1595a372873ef1ee0b5eff8.png') }}?auto=format&amp;h=330.08517887563886&amp;w=560 560w, {{ asset('assets/_next/static/images/tc-plus-landing-vehicle-bg-1e34583cf1595a372873ef1ee0b5eff8.png') }}?auto=format&amp;h=707.3253833049404&amp;w=1200 1200w"
                                role="presentation" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div data-test="trueCarPlusFixedButtonBar"
                class="w-full py-2 hidden-md-up fixed top-0 z-[1049] bg-white left-0 m-0 opacity-0 invisible">
                <div class="container">
                    <div class="row">
                        <div class="col"><a data-ignore-contrast="true" data-loading="false"
                                class="hidden-md-up btn btn-primary btn-md btn-block"
                                href="/new-cars-for-sale/listings/?buyOnline=true"><span class="btn-inner">Shop
                                    New</span></a></div>
                        <div class="col"><a data-ignore-contrast="true" data-loading="false"
                                class="hidden-md-up btn btn-primary btn-md btn-block"
                                href="/used-cars-for-sale/listings/?buyOnline=true"><span class="btn-inner">Shop
                                    Used</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mt-4 mb-3 text-center" data-test="tcplusTopDealsCarousel">
                <p class="pt-3 pb-4 text-[30px]">Top deals to buy online</p>
                <div class="mt-4 mb-5 space-y-3 rankingsRecommendationCarousel" id="rankingsRecommendationCarousel">
                    <div class="relative items-center justify-center">
                        <div class="carousel">
                            <div class="relative flex w-full items-center">
                                <button
                                    class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-2 carousel-arrow-prev carousel-arrow-prev"
                                    data-test="carouselArrowPrev" aria-label="Previous" disabled="">
                                    <svg width="16px" height="16px" viewBox="0 0 16 16" class="carousel-arrow-icon">
                                        <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline stroke-width="1.5" fill-rule="nonzero"
                                                points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                        </g>
                                    </svg>
                                </button>
                                <div class="grow" style="position: relative; overflow: hidden">
                                    <ul data-test="carouselSlideContainer" class=""
                                        style="display: flex; flex-flow: row; position: relative; overflow: hidden; transform: translateX(0px);">
                                        <li class="px-2" data-test="carouselCurrentSlide0"
                                            style="
                                scroll-snap-align: start;
                                flex-shrink: 0;
                                width: 33.3333%;
                              ">
                                            <div class="pb-2">
                                                <div class="flex w-full flex-col">
                                                    <div class="relative rounded-md shadow-lg"
                                                        aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                        data-test="newListing" data-test-item="4W5KHNRL1RZ503592"
                                                        data-test-dealerid="466388">
                                                        <div class="relative w-full">
                                                            <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]"
                                                                style="padding-bottom: 56.25%">
                                                                <div class="img-container img-container-block preprocessed-image-inner"
                                                                    style="
                                            height: auto;
                                            padding-bottom: 56.25%;
                                            width: 100%;
                                          ">
                                                                    <img sizes="300px"
                                                                        src="https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-860.jpg"
                                                                        alt="" role="presentation" loading="lazy"
                                                                        class="img-inner img-block"
                                                                        srcset="
                                              https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-60.jpg     60w,
                                              https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-120.jpg   120w,
                                              https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-180.jpg   180w,
                                              https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-360.jpg   360w,
                                              https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-540.jpg   540w,
                                              https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-860.jpg   860w,
                                              https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-1400.jpg 1400w
                                            "
                                                                        style="background-image: none">
                                                                </div>
                                                            </div>
                                                            <div class="absolute bottom-[-16px] right-2 z-20">
                                                                <div data-test="vehicleCardActionDropDown"
                                                                    class="dropdown">
                                                                    <button aria-haspopup="true"
                                                                        class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg"
                                                                        aria-expanded="false">
                                                                        <p class="sr-only">Menu</p>
                                                                        <svg viewBox="0 0 24 24"
                                                                            class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]"
                                                                            aria-hidden="true"
                                                                            style="width: 22px; height: 22px">
                                                                            <use href="#more-vert"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="absolute top-2 left-2 z-[2]">
                                                                <div class="flex items-center gap-1">
                                                                    <span
                                                                        class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md"
                                                                        data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2"
                                                                aria-label="Like button" data-test="vehicleCardLikeButton"
                                                                data-test-item="">
                                                                <svg viewBox="0 0 24 24"
                                                                    class="icon icon-fill-default shrink-0 stroke-white text-dark"
                                                                    aria-hidden="true" style="width: 22px; height: 22px">
                                                                    <use href="#outlined-heart-fill"></use>
                                                                </svg>
                                                                <div class="group-hover:text-white group-hover:underline">
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div class="mt-1 flex w-full items-start p-2 text-left">
                                                            <div class="w-full truncate">
                                                                <div data-test="vehicleCardInfo" class="text-sm">
                                                                    <div data-test="vehicleCardConditionYearMake"
                                                                        class="w-full truncate font-bold">
                                                                        New 2024 Acura
                                                                    </div>
                                                                    <div class="w-full grid grid-cols-[1fr_auto] gap-1"
                                                                        data-test="vehicleCardTrim">
                                                                        <div class="truncate">
                                                                            ZDX A-Spec Package AWD
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1 flex items-center justify-between gap-1">
                                                                    <div class="flex items-center">
                                                                        <h3
                                                                            class="heading-4 normal-case flex items-center">
                                                                            <div class="truncate"
                                                                                data-test="vehicleCardMsrpLabelAmount">
                                                                                <div class="flex items-end">
                                                                                    <div class="text-[18px]">
                                                                                        $69,850
                                                                                    </div>
                                                                                    <div class="flex pb-[1px]">
                                                                                        <div
                                                                                            class="ml-1 mt-[2px] text-[14px]">
                                                                                            Total MSRP
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-test="vehicleCardFooter"
                                                            class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                            <div class="min-h-[18px]">Irvine, CA</div>
                                                            <div class="flex items-center gap-1">
                                                                <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark"
                                                                    data-test="evBadge">
                                                                    <svg viewBox="0 0 24 24"
                                                                        class="icon icon-fill-default text-[color:var(--green-600)]"
                                                                        role="img" aria-labelledby="icon-1323"
                                                                        aria-hidden="false"
                                                                        style="width: 14px; height: 14px">
                                                                        <title id="icon-1323">EV</title>
                                                                        <use href="#bolt-fill"></use>
                                                                    </svg><span class="text-xs">EV</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]"
                                                            data-test="vehicleCardLink"
                                                            aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                            href="/new-cars-for-sale/listing/4W5KHNRL1RZ503592/2024-acura-zdx/?position=0&amp;sourceType=ranking&amp;sponsored=true"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="px-2" data-test=""
                                            style="
                                scroll-snap-align: start;
                                flex-shrink: 0;
                                width: 33.3333%;
                              ">
                                            <div class="pb-2">
                                                <div class="flex w-full flex-col">
                                                    <div class="relative rounded-md shadow-lg"
                                                        aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                        data-test="newListing" data-test-item="4W5KHNRL0RZ502806"
                                                        data-test-dealerid="466388">
                                                        <div class="relative w-full">
                                                            <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]"
                                                                style="padding-bottom: 56.25%">
                                                                <div class="img-container img-container-block preprocessed-image-inner"
                                                                    style="
                                            height: auto;
                                            padding-bottom: 56.25%;
                                            width: 100%;
                                          ">
                                                                    <img sizes="300px"
                                                                        src="https://listings-prod.tcimg.net/listings/466388/06/28/4W5KHNRL0RZ502806/VIYWP77B3NKIDBECX7E2XA72HE-cr-360.jpg"
                                                                        alt="" role="presentation" loading="lazy"
                                                                        class="img-inner img-block"
                                                                        srcset="
                                              https://listings-prod.tcimg.net/listings/466388/06/28/4W5KHNRL0RZ502806/VIYWP77B3NKIDBECX7E2XA72HE-cr-60.jpg   60w,
                                              https://listings-prod.tcimg.net/listings/466388/06/28/4W5KHNRL0RZ502806/VIYWP77B3NKIDBECX7E2XA72HE-cr-120.jpg 120w,
                                              https://listings-prod.tcimg.net/listings/466388/06/28/4W5KHNRL0RZ502806/VIYWP77B3NKIDBECX7E2XA72HE-cr-180.jpg 180w,
                                              https://listings-prod.tcimg.net/listings/466388/06/28/4W5KHNRL0RZ502806/VIYWP77B3NKIDBECX7E2XA72HE-cr-360.jpg 360w,
                                              https://listings-prod.tcimg.net/listings/466388/06/28/4W5KHNRL0RZ502806/VIYWP77B3NKIDBECX7E2XA72HE-cr-540.jpg 540w
                                            "
                                                                        style="background-image: none">
                                                                </div>
                                                            </div>
                                                            <div class="absolute bottom-[-16px] right-2 z-20">
                                                                <div data-test="vehicleCardActionDropDown"
                                                                    class="dropdown">
                                                                    <button aria-haspopup="true"
                                                                        class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg"
                                                                        aria-expanded="false">
                                                                        <p class="sr-only">Menu</p>
                                                                        <svg viewBox="0 0 24 24"
                                                                            class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]"
                                                                            aria-hidden="true"
                                                                            style="width: 22px; height: 22px">
                                                                            <use href="#more-vert"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="absolute top-2 left-2 z-[2]">
                                                                <div class="flex items-center gap-1">
                                                                    <span
                                                                        class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md"
                                                                        data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2"
                                                                aria-label="Like button" data-test="vehicleCardLikeButton"
                                                                data-test-item="">
                                                                <svg viewBox="0 0 24 24"
                                                                    class="icon icon-fill-default shrink-0 stroke-white text-dark"
                                                                    aria-hidden="true" style="width: 22px; height: 22px">
                                                                    <use href="#outlined-heart-fill"></use>
                                                                </svg>
                                                                <div class="group-hover:text-white group-hover:underline">
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div class="mt-1 flex w-full items-start p-2 text-left">
                                                            <div class="w-full truncate">
                                                                <div data-test="vehicleCardInfo" class="text-sm">
                                                                    <div data-test="vehicleCardConditionYearMake"
                                                                        class="w-full truncate font-bold">
                                                                        New 2024 Acura
                                                                    </div>
                                                                    <div class="w-full grid grid-cols-[1fr_auto] gap-1"
                                                                        data-test="vehicleCardTrim">
                                                                        <div class="truncate">
                                                                            ZDX A-Spec Package AWD
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1 flex items-center justify-between gap-1">
                                                                    <div class="flex items-center">
                                                                        <h3
                                                                            class="heading-4 normal-case flex items-center">
                                                                            <div class="truncate"
                                                                                data-test="vehicleCardMsrpLabelAmount">
                                                                                <div class="flex items-end">
                                                                                    <div class="text-[18px]">
                                                                                        $70,450
                                                                                    </div>
                                                                                    <div class="flex pb-[1px]">
                                                                                        <div
                                                                                            class="ml-1 mt-[2px] text-[14px]">
                                                                                            Total MSRP
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-test="vehicleCardFooter"
                                                            class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                            <div class="min-h-[18px]">Irvine, CA</div>
                                                            <div class="flex items-center gap-1">
                                                                <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark"
                                                                    data-test="evBadge">
                                                                    <svg viewBox="0 0 24 24"
                                                                        class="icon icon-fill-default text-[color:var(--green-600)]"
                                                                        role="img" aria-labelledby="icon-1331"
                                                                        aria-hidden="false"
                                                                        style="width: 14px; height: 14px">
                                                                        <title id="icon-1331">EV</title>
                                                                        <use href="#bolt-fill"></use>
                                                                    </svg><span class="text-xs">EV</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]"
                                                            data-test="vehicleCardLink"
                                                            aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                            href="/new-cars-for-sale/listing/4W5KHNRL0RZ502806/2024-acura-zdx/?position=1&amp;sourceType=ranking&amp;sponsored=true"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="px-2" data-test=""
                                            style="
                                scroll-snap-align: start;
                                flex-shrink: 0;
                                width: 33.3333%;
                              ">
                                            <div class="pb-2">
                                                <div class="flex w-full flex-col">
                                                    <div class="relative rounded-md shadow-lg"
                                                        aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                        data-test="newListing" data-test-item="4W5KHNRL3RZ503593"
                                                        data-test-dealerid="466388">
                                                        <div class="relative w-full">
                                                            <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]"
                                                                style="padding-bottom: 56.25%">
                                                                <div class="img-container img-container-block preprocessed-image-inner"
                                                                    style="
                                            height: auto;
                                            padding-bottom: 56.25%;
                                            width: 100%;
                                          ">
                                                                    <img sizes="300px"
                                                                        src="https://listings-prod.tcimg.net/listings/466388/93/35/4W5KHNRL3RZ503593/EXK4A22K5KZGJX4VRJA6DRNZ7Q-cr-360.jpg"
                                                                        alt="" role="presentation" loading="lazy"
                                                                        class="img-inner img-block"
                                                                        srcset="
                                              https://listings-prod.tcimg.net/listings/466388/93/35/4W5KHNRL3RZ503593/EXK4A22K5KZGJX4VRJA6DRNZ7Q-cr-60.jpg   60w,
                                              https://listings-prod.tcimg.net/listings/466388/93/35/4W5KHNRL3RZ503593/EXK4A22K5KZGJX4VRJA6DRNZ7Q-cr-120.jpg 120w,
                                              https://listings-prod.tcimg.net/listings/466388/93/35/4W5KHNRL3RZ503593/EXK4A22K5KZGJX4VRJA6DRNZ7Q-cr-180.jpg 180w,
                                              https://listings-prod.tcimg.net/listings/466388/93/35/4W5KHNRL3RZ503593/EXK4A22K5KZGJX4VRJA6DRNZ7Q-cr-360.jpg 360w,
                                              https://listings-prod.tcimg.net/listings/466388/93/35/4W5KHNRL3RZ503593/EXK4A22K5KZGJX4VRJA6DRNZ7Q-cr-540.jpg 540w
                                            "
                                                                        style="background-image: none">
                                                                </div>
                                                            </div>
                                                            <div class="absolute bottom-[-16px] right-2 z-20">
                                                                <div data-test="vehicleCardActionDropDown"
                                                                    class="dropdown">
                                                                    <button aria-haspopup="true"
                                                                        class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg"
                                                                        aria-expanded="false">
                                                                        <p class="sr-only">Menu</p>
                                                                        <svg viewBox="0 0 24 24"
                                                                            class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]"
                                                                            aria-hidden="true"
                                                                            style="width: 22px; height: 22px">
                                                                            <use href="#more-vert"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="absolute top-2 left-2 z-[2]">
                                                                <div class="flex items-center gap-1">
                                                                    <span
                                                                        class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md"
                                                                        data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2"
                                                                aria-label="Like button" data-test="vehicleCardLikeButton"
                                                                data-test-item="">
                                                                <svg viewBox="0 0 24 24"
                                                                    class="icon icon-fill-default shrink-0 stroke-white text-dark"
                                                                    aria-hidden="true" style="width: 22px; height: 22px">
                                                                    <use href="#outlined-heart-fill"></use>
                                                                </svg>
                                                                <div class="group-hover:text-white group-hover:underline">
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div class="mt-1 flex w-full items-start p-2 text-left">
                                                            <div class="w-full truncate">
                                                                <div data-test="vehicleCardInfo" class="text-sm">
                                                                    <div data-test="vehicleCardConditionYearMake"
                                                                        class="w-full truncate font-bold">
                                                                        New 2024 Acura
                                                                    </div>
                                                                    <div class="w-full grid grid-cols-[1fr_auto] gap-1"
                                                                        data-test="vehicleCardTrim">
                                                                        <div class="truncate">
                                                                            ZDX A-Spec Package AWD
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1 flex items-center justify-between gap-1">
                                                                    <div class="flex items-center">
                                                                        <h3
                                                                            class="heading-4 normal-case flex items-center">
                                                                            <div class="truncate"
                                                                                data-test="vehicleCardMsrpLabelAmount">
                                                                                <div class="flex items-end">
                                                                                    <div class="text-[18px]">
                                                                                        $69,850
                                                                                    </div>
                                                                                    <div class="flex pb-[1px]">
                                                                                        <div
                                                                                            class="ml-1 mt-[2px] text-[14px]">
                                                                                            Total MSRP
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-test="vehicleCardFooter"
                                                            class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                            <div class="min-h-[18px]">Irvine, CA</div>
                                                            <div class="flex items-center gap-1">
                                                                <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark"
                                                                    data-test="evBadge">
                                                                    <svg viewBox="0 0 24 24"
                                                                        class="icon icon-fill-default text-[color:var(--green-600)]"
                                                                        role="img" aria-labelledby="icon-1339"
                                                                        aria-hidden="false"
                                                                        style="width: 14px; height: 14px">
                                                                        <title id="icon-1339">EV</title>
                                                                        <use href="#bolt-fill"></use>
                                                                    </svg><span class="text-xs">EV</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]"
                                                            data-test="vehicleCardLink"
                                                            aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                            href="/new-cars-for-sale/listing/4W5KHNRL3RZ503593/2024-acura-zdx/?position=2&amp;sourceType=ranking&amp;sponsored=true"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="px-2" data-test=""
                                            style="
                                scroll-snap-align: start;
                                flex-shrink: 0;
                                width: 33.3333%;
                              "
                                            inert="" aria-hidden="true">
                                            <div class="pb-2">
                                                <div class="flex w-full flex-col">
                                                    <div class="relative rounded-md shadow-lg"
                                                        aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                        data-test="newListing" data-test-item="4W5KHNRL2RZ502676"
                                                        data-test-dealerid="466388">
                                                        <div class="relative w-full">
                                                            <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]"
                                                                style="padding-bottom: 56.25%">
                                                                <div class="img-container img-container-block preprocessed-image-inner"
                                                                    style="
                                            height: auto;
                                            padding-bottom: 56.25%;
                                            width: 100%;
                                          ">
                                                                    <img sizes="300px"
                                                                        src="https://listings-prod.tcimg.net/listings/466388/76/26/4W5KHNRL2RZ502676/VIYWP77B3NKIDBECX7E2XA72HE-cr-360.jpg"
                                                                        alt="" role="presentation" loading="lazy"
                                                                        class="img-inner img-block"
                                                                        srcset="
                                              https://listings-prod.tcimg.net/listings/466388/76/26/4W5KHNRL2RZ502676/VIYWP77B3NKIDBECX7E2XA72HE-cr-60.jpg   60w,
                                              https://listings-prod.tcimg.net/listings/466388/76/26/4W5KHNRL2RZ502676/VIYWP77B3NKIDBECX7E2XA72HE-cr-120.jpg 120w,
                                              https://listings-prod.tcimg.net/listings/466388/76/26/4W5KHNRL2RZ502676/VIYWP77B3NKIDBECX7E2XA72HE-cr-180.jpg 180w,
                                              https://listings-prod.tcimg.net/listings/466388/76/26/4W5KHNRL2RZ502676/VIYWP77B3NKIDBECX7E2XA72HE-cr-360.jpg 360w,
                                              https://listings-prod.tcimg.net/listings/466388/76/26/4W5KHNRL2RZ502676/VIYWP77B3NKIDBECX7E2XA72HE-cr-540.jpg 540w
                                            "
                                                                        style="background-image: none">
                                                                </div>
                                                            </div>
                                                            <div class="absolute bottom-[-16px] right-2 z-20">
                                                                <div data-test="vehicleCardActionDropDown"
                                                                    class="dropdown">
                                                                    <button aria-haspopup="true"
                                                                        class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <p class="sr-only">Menu</p>
                                                                        <svg viewBox="0 0 24 24"
                                                                            class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]"
                                                                            aria-hidden="true"
                                                                            style="width: 22px; height: 22px">
                                                                            <use href="#more-vert"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="absolute top-2 left-2 z-[2]">
                                                                <div class="flex items-center gap-1">
                                                                    <span
                                                                        class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md"
                                                                        data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2"
                                                                aria-label="Like button" data-test="vehicleCardLikeButton"
                                                                data-test-item="" tabindex="-1">
                                                                <svg viewBox="0 0 24 24"
                                                                    class="icon icon-fill-default shrink-0 stroke-white text-dark"
                                                                    aria-hidden="true" style="width: 22px; height: 22px">
                                                                    <use href="#outlined-heart-fill"></use>
                                                                </svg>
                                                                <div class="group-hover:text-white group-hover:underline">
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div class="mt-1 flex w-full items-start p-2 text-left">
                                                            <div class="w-full truncate">
                                                                <div data-test="vehicleCardInfo" class="text-sm">
                                                                    <div data-test="vehicleCardConditionYearMake"
                                                                        class="w-full truncate font-bold">
                                                                        New 2024 Acura
                                                                    </div>
                                                                    <div class="w-full grid grid-cols-[1fr_auto] gap-1"
                                                                        data-test="vehicleCardTrim">
                                                                        <div class="truncate">
                                                                            ZDX A-Spec Package AWD
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1 flex items-center justify-between gap-1">
                                                                    <div class="flex items-center">
                                                                        <h3
                                                                            class="heading-4 normal-case flex items-center">
                                                                            <div class="truncate"
                                                                                data-test="vehicleCardMsrpLabelAmount">
                                                                                <div class="flex items-end">
                                                                                    <div class="text-[18px]">
                                                                                        $70,450
                                                                                    </div>
                                                                                    <div class="flex pb-[1px]">
                                                                                        <div
                                                                                            class="ml-1 mt-[2px] text-[14px]">
                                                                                            Total MSRP
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-test="vehicleCardFooter"
                                                            class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                            <div class="min-h-[18px]">Irvine, CA</div>
                                                            <div class="flex items-center gap-1">
                                                                <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark"
                                                                    data-test="evBadge">
                                                                    <svg viewBox="0 0 24 24"
                                                                        class="icon icon-fill-default text-[color:var(--green-600)]"
                                                                        role="img" aria-labelledby="icon-1347"
                                                                        aria-hidden="false"
                                                                        style="width: 14px; height: 14px">
                                                                        <title id="icon-1347">EV</title>
                                                                        <use href="#bolt-fill"></use>
                                                                    </svg><span class="text-xs">EV</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]"
                                                            data-test="vehicleCardLink"
                                                            aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                            href="/new-cars-for-sale/listing/4W5KHNRL2RZ502676/2024-acura-zdx/?position=3&amp;sourceType=ranking&amp;sponsored=true"
                                                            tabindex="-1"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="px-2" data-test=""
                                            style="
                                scroll-snap-align: start;
                                flex-shrink: 0;
                                width: 33.3333%;
                              "
                                            inert="" aria-hidden="true">
                                            <div class="pb-2">
                                                <div class="flex w-full flex-col">
                                                    <div class="relative rounded-md shadow-lg"
                                                        aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                        data-test="newListing" data-test-item="4W5KHNRL0RZ503650"
                                                        data-test-dealerid="466388">
                                                        <div class="relative w-full">
                                                            <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]"
                                                                style="padding-bottom: 56.25%">
                                                                <div class="img-container img-container-block preprocessed-image-inner"
                                                                    style="
                                            height: auto;
                                            padding-bottom: 56.25%;
                                            width: 100%;
                                          ">
                                                                    <img sizes="300px"
                                                                        src="https://listings-prod.tcimg.net/listings/466388/50/36/4W5KHNRL0RZ503650/63W57ZGYMF5OHXRMDSKYMEEZTM-cr-360.jpg"
                                                                        alt="" role="presentation" loading="lazy"
                                                                        class="img-inner img-block"
                                                                        srcset="
                                              https://listings-prod.tcimg.net/listings/466388/50/36/4W5KHNRL0RZ503650/63W57ZGYMF5OHXRMDSKYMEEZTM-cr-60.jpg   60w,
                                              https://listings-prod.tcimg.net/listings/466388/50/36/4W5KHNRL0RZ503650/63W57ZGYMF5OHXRMDSKYMEEZTM-cr-120.jpg 120w,
                                              https://listings-prod.tcimg.net/listings/466388/50/36/4W5KHNRL0RZ503650/63W57ZGYMF5OHXRMDSKYMEEZTM-cr-180.jpg 180w,
                                              https://listings-prod.tcimg.net/listings/466388/50/36/4W5KHNRL0RZ503650/63W57ZGYMF5OHXRMDSKYMEEZTM-cr-360.jpg 360w,
                                              https://listings-prod.tcimg.net/listings/466388/50/36/4W5KHNRL0RZ503650/63W57ZGYMF5OHXRMDSKYMEEZTM-cr-540.jpg 540w
                                            "
                                                                        style="background-image: none">
                                                                </div>
                                                            </div>
                                                            <div class="absolute bottom-[-16px] right-2 z-20">
                                                                <div data-test="vehicleCardActionDropDown"
                                                                    class="dropdown">
                                                                    <button aria-haspopup="true"
                                                                        class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <p class="sr-only">Menu</p>
                                                                        <svg viewBox="0 0 24 24"
                                                                            class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]"
                                                                            aria-hidden="true"
                                                                            style="width: 22px; height: 22px">
                                                                            <use href="#more-vert"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="absolute top-2 left-2 z-[2]">
                                                                <div class="flex items-center gap-1">
                                                                    <span
                                                                        class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md"
                                                                        data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2"
                                                                aria-label="Like button" data-test="vehicleCardLikeButton"
                                                                data-test-item="" tabindex="-1">
                                                                <svg viewBox="0 0 24 24"
                                                                    class="icon icon-fill-default shrink-0 stroke-white text-dark"
                                                                    aria-hidden="true" style="width: 22px; height: 22px">
                                                                    <use href="#outlined-heart-fill"></use>
                                                                </svg>
                                                                <div class="group-hover:text-white group-hover:underline">
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div class="mt-1 flex w-full items-start p-2 text-left">
                                                            <div class="w-full truncate">
                                                                <div data-test="vehicleCardInfo" class="text-sm">
                                                                    <div data-test="vehicleCardConditionYearMake"
                                                                        class="w-full truncate font-bold">
                                                                        New 2024 Acura
                                                                    </div>
                                                                    <div class="w-full grid grid-cols-[1fr_auto] gap-1"
                                                                        data-test="vehicleCardTrim">
                                                                        <div class="truncate">
                                                                            ZDX A-Spec Package AWD
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1 flex items-center justify-between gap-1">
                                                                    <div class="flex items-center">
                                                                        <h3
                                                                            class="heading-4 normal-case flex items-center">
                                                                            <div class="truncate"
                                                                                data-test="vehicleCardMsrpLabelAmount">
                                                                                <div class="flex items-end">
                                                                                    <div class="text-[18px]">
                                                                                        $70,450
                                                                                    </div>
                                                                                    <div class="flex pb-[1px]">
                                                                                        <div
                                                                                            class="ml-1 mt-[2px] text-[14px]">
                                                                                            Total MSRP
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-test="vehicleCardFooter"
                                                            class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                            <div class="min-h-[18px]">Irvine, CA</div>
                                                            <div class="flex items-center gap-1">
                                                                <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark"
                                                                    data-test="evBadge">
                                                                    <svg viewBox="0 0 24 24"
                                                                        class="icon icon-fill-default text-[color:var(--green-600)]"
                                                                        role="img" aria-labelledby="icon-1355"
                                                                        aria-hidden="false"
                                                                        style="width: 14px; height: 14px">
                                                                        <title id="icon-1355">EV</title>
                                                                        <use href="#bolt-fill"></use>
                                                                    </svg><span class="text-xs">EV</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]"
                                                            data-test="vehicleCardLink"
                                                            aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                            href="/new-cars-for-sale/listing/4W5KHNRL0RZ503650/2024-acura-zdx/?position=4&amp;sourceType=ranking&amp;sponsored=true"
                                                            tabindex="-1"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="px-2" data-test=""
                                            style="
                                scroll-snap-align: start;
                                flex-shrink: 0;
                                width: 33.3333%;
                              "
                                            inert="" aria-hidden="true">
                                            <div class="pb-2">
                                                <div class="flex w-full flex-col">
                                                    <div class="relative rounded-md shadow-lg"
                                                        aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                        data-test="newListing" data-test-item="4W5KHNRL5RZ504180"
                                                        data-test-dealerid="466388">
                                                        <div class="relative w-full">
                                                            <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]"
                                                                style="padding-bottom: 56.25%">
                                                                <div class="img-container img-container-block preprocessed-image-inner"
                                                                    style="
                                            height: auto;
                                            padding-bottom: 56.25%;
                                            width: 100%;
                                          ">
                                                                    <img sizes="300px"
                                                                        src="https://listings-prod.tcimg.net/listings/466388/80/41/4W5KHNRL5RZ504180/VIYWP77B3NKIDBECX7E2XA72HE-cr-360.jpg"
                                                                        alt="" role="presentation" loading="lazy"
                                                                        class="img-inner img-block"
                                                                        srcset="
                                              https://listings-prod.tcimg.net/listings/466388/80/41/4W5KHNRL5RZ504180/VIYWP77B3NKIDBECX7E2XA72HE-cr-60.jpg   60w,
                                              https://listings-prod.tcimg.net/listings/466388/80/41/4W5KHNRL5RZ504180/VIYWP77B3NKIDBECX7E2XA72HE-cr-120.jpg 120w,
                                              https://listings-prod.tcimg.net/listings/466388/80/41/4W5KHNRL5RZ504180/VIYWP77B3NKIDBECX7E2XA72HE-cr-180.jpg 180w,
                                              https://listings-prod.tcimg.net/listings/466388/80/41/4W5KHNRL5RZ504180/VIYWP77B3NKIDBECX7E2XA72HE-cr-360.jpg 360w,
                                              https://listings-prod.tcimg.net/listings/466388/80/41/4W5KHNRL5RZ504180/VIYWP77B3NKIDBECX7E2XA72HE-cr-540.jpg 540w
                                            "
                                                                        style="background-image: none">
                                                                </div>
                                                            </div>
                                                            <div class="absolute bottom-[-16px] right-2 z-20">
                                                                <div data-test="vehicleCardActionDropDown"
                                                                    class="dropdown">
                                                                    <button aria-haspopup="true"
                                                                        class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <p class="sr-only">Menu</p>
                                                                        <svg viewBox="0 0 24 24"
                                                                            class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]"
                                                                            aria-hidden="true"
                                                                            style="width: 22px; height: 22px">
                                                                            <use href="#more-vert"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="absolute top-2 left-2 z-[2]">
                                                                <div class="flex items-center gap-1">
                                                                    <span
                                                                        class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md"
                                                                        data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2"
                                                                aria-label="Like button" data-test="vehicleCardLikeButton"
                                                                data-test-item="" tabindex="-1">
                                                                <svg viewBox="0 0 24 24"
                                                                    class="icon icon-fill-default shrink-0 stroke-white text-dark"
                                                                    aria-hidden="true" style="width: 22px; height: 22px">
                                                                    <use href="#outlined-heart-fill"></use>
                                                                </svg>
                                                                <div class="group-hover:text-white group-hover:underline">
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div class="mt-1 flex w-full items-start p-2 text-left">
                                                            <div class="w-full truncate">
                                                                <div data-test="vehicleCardInfo" class="text-sm">
                                                                    <div data-test="vehicleCardConditionYearMake"
                                                                        class="w-full truncate font-bold">
                                                                        New 2024 Acura
                                                                    </div>
                                                                    <div class="w-full grid grid-cols-[1fr_auto] gap-1"
                                                                        data-test="vehicleCardTrim">
                                                                        <div class="truncate">
                                                                            ZDX A-Spec Package AWD
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1 flex items-center justify-between gap-1">
                                                                    <div class="flex items-center">
                                                                        <h3
                                                                            class="heading-4 normal-case flex items-center">
                                                                            <div class="truncate"
                                                                                data-test="vehicleCardMsrpLabelAmount">
                                                                                <div class="flex items-end">
                                                                                    <div class="text-[18px]">
                                                                                        $70,450
                                                                                    </div>
                                                                                    <div class="flex pb-[1px]">
                                                                                        <div
                                                                                            class="ml-1 mt-[2px] text-[14px]">
                                                                                            Total MSRP
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-test="vehicleCardFooter"
                                                            class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                            <div class="min-h-[18px]">Irvine, CA</div>
                                                            <div class="flex items-center gap-1">
                                                                <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark"
                                                                    data-test="evBadge">
                                                                    <svg viewBox="0 0 24 24"
                                                                        class="icon icon-fill-default text-[color:var(--green-600)]"
                                                                        role="img" aria-labelledby="icon-1363"
                                                                        aria-hidden="false"
                                                                        style="width: 14px; height: 14px">
                                                                        <title id="icon-1363">EV</title>
                                                                        <use href="#bolt-fill"></use>
                                                                    </svg><span class="text-xs">EV</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]"
                                                            data-test="vehicleCardLink"
                                                            aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                            href="/new-cars-for-sale/listing/4W5KHNRL5RZ504180/2024-acura-zdx/?position=5&amp;sourceType=ranking&amp;sponsored=true"
                                                            tabindex="-1"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="px-2" data-test=""
                                            style="
                                scroll-snap-align: start;
                                flex-shrink: 0;
                                width: 33.3333%;
                              "
                                            inert="" aria-hidden="true">
                                            <div class="pb-2">
                                                <div class="flex w-full flex-col">
                                                    <div class="relative rounded-md shadow-lg"
                                                        aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                        data-test="newListing" data-test-item="4W5KHNRL0RZ504359"
                                                        data-test-dealerid="466388">
                                                        <div class="relative w-full">
                                                            <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]"
                                                                style="padding-bottom: 56.25%">
                                                                <div class="img-container img-container-block preprocessed-image-inner"
                                                                    style="
                                            height: auto;
                                            padding-bottom: 56.25%;
                                            width: 100%;
                                          ">
                                                                    <img sizes="300px"
                                                                        src="https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-860.jpg"
                                                                        alt="" role="presentation" loading="lazy"
                                                                        class="img-inner img-block"
                                                                        srcset="
                                              https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-60.jpg     60w,
                                              https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-120.jpg   120w,
                                              https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-180.jpg   180w,
                                              https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-360.jpg   360w,
                                              https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-540.jpg   540w,
                                              https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-860.jpg   860w,
                                              https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-1400.jpg 1400w
                                            "
                                                                        style="background-image: none">
                                                                </div>
                                                            </div>
                                                            <div class="absolute bottom-[-16px] right-2 z-20">
                                                                <div data-test="vehicleCardActionDropDown"
                                                                    class="dropdown">
                                                                    <button aria-haspopup="true"
                                                                        class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <p class="sr-only">Menu</p>
                                                                        <svg viewBox="0 0 24 24"
                                                                            class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]"
                                                                            aria-hidden="true"
                                                                            style="width: 22px; height: 22px">
                                                                            <use href="#more-vert"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="absolute top-2 left-2 z-[2]">
                                                                <div class="flex items-center gap-1">
                                                                    <span
                                                                        class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md"
                                                                        data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2"
                                                                aria-label="Like button" data-test="vehicleCardLikeButton"
                                                                data-test-item="" tabindex="-1">
                                                                <svg viewBox="0 0 24 24"
                                                                    class="icon icon-fill-default shrink-0 stroke-white text-dark"
                                                                    aria-hidden="true" style="width: 22px; height: 22px">
                                                                    <use href="#outlined-heart-fill"></use>
                                                                </svg>
                                                                <div class="group-hover:text-white group-hover:underline">
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div class="mt-1 flex w-full items-start p-2 text-left">
                                                            <div class="w-full truncate">
                                                                <div data-test="vehicleCardInfo" class="text-sm">
                                                                    <div data-test="vehicleCardConditionYearMake"
                                                                        class="w-full truncate font-bold">
                                                                        New 2024 Acura
                                                                    </div>
                                                                    <div class="w-full grid grid-cols-[1fr_auto] gap-1"
                                                                        data-test="vehicleCardTrim">
                                                                        <div class="truncate">
                                                                            ZDX A-Spec Package AWD
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1 flex items-center justify-between gap-1">
                                                                    <div class="flex items-center">
                                                                        <h3
                                                                            class="heading-4 normal-case flex items-center">
                                                                            <div class="truncate"
                                                                                data-test="vehicleCardMsrpLabelAmount">
                                                                                <div class="flex items-end">
                                                                                    <div class="text-[18px]">
                                                                                        $70,450
                                                                                    </div>
                                                                                    <div class="flex pb-[1px]">
                                                                                        <div
                                                                                            class="ml-1 mt-[2px] text-[14px]">
                                                                                            Total MSRP
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-test="vehicleCardFooter"
                                                            class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                            <div class="min-h-[18px]">Irvine, CA</div>
                                                            <div class="flex items-center gap-1">
                                                                <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark"
                                                                    data-test="evBadge">
                                                                    <svg viewBox="0 0 24 24"
                                                                        class="icon icon-fill-default text-[color:var(--green-600)]"
                                                                        role="img" aria-labelledby="icon-1371"
                                                                        aria-hidden="false"
                                                                        style="width: 14px; height: 14px">
                                                                        <title id="icon-1371">EV</title>
                                                                        <use href="#bolt-fill"></use>
                                                                    </svg><span class="text-xs">EV</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]"
                                                            data-test="vehicleCardLink"
                                                            aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                            href="/new-cars-for-sale/listing/4W5KHNRL0RZ504359/2024-acura-zdx/?position=6&amp;sourceType=ranking&amp;sponsored=true"
                                                            tabindex="-1"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="px-2" data-test=""
                                            style="
                                scroll-snap-align: start;
                                flex-shrink: 0;
                                width: 33.3333%;
                              "
                                            inert="" aria-hidden="true">
                                            <div class="pb-2">
                                                <div class="flex w-full flex-col">
                                                    <div class="relative rounded-md shadow-lg"
                                                        aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                        data-test="newListing" data-test-item="4W5KHNRL2RZ500569"
                                                        data-test-dealerid="466388">
                                                        <div class="relative w-full">
                                                            <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]"
                                                                style="padding-bottom: 56.25%">
                                                                <div class="img-container img-container-block preprocessed-image-inner"
                                                                    style="
                                            height: auto;
                                            padding-bottom: 56.25%;
                                            width: 100%;
                                          ">
                                                                    <img sizes="300px"
                                                                        src="https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-860.jpg"
                                                                        alt="" role="presentation" loading="lazy"
                                                                        class="img-inner img-block"
                                                                        srcset="
                                              https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-60.jpg     60w,
                                              https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-120.jpg   120w,
                                              https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-180.jpg   180w,
                                              https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-360.jpg   360w,
                                              https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-540.jpg   540w,
                                              https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-860.jpg   860w,
                                              https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-1400.jpg 1400w
                                            "
                                                                        style="background-image: none">
                                                                </div>
                                                            </div>
                                                            <div class="absolute bottom-[-16px] right-2 z-20">
                                                                <div data-test="vehicleCardActionDropDown"
                                                                    class="dropdown">
                                                                    <button aria-haspopup="true"
                                                                        class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <p class="sr-only">Menu</p>
                                                                        <svg viewBox="0 0 24 24"
                                                                            class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]"
                                                                            aria-hidden="true"
                                                                            style="width: 22px; height: 22px">
                                                                            <use href="#more-vert"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="absolute top-2 left-2 z-[2]">
                                                                <div class="flex items-center gap-1">
                                                                    <span
                                                                        class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md"
                                                                        data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2"
                                                                aria-label="Like button" data-test="vehicleCardLikeButton"
                                                                data-test-item="" tabindex="-1">
                                                                <svg viewBox="0 0 24 24"
                                                                    class="icon icon-fill-default shrink-0 stroke-white text-dark"
                                                                    aria-hidden="true" style="width: 22px; height: 22px">
                                                                    <use href="#outlined-heart-fill"></use>
                                                                </svg>
                                                                <div class="group-hover:text-white group-hover:underline">
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div class="mt-1 flex w-full items-start p-2 text-left">
                                                            <div class="w-full truncate">
                                                                <div data-test="vehicleCardInfo" class="text-sm">
                                                                    <div data-test="vehicleCardConditionYearMake"
                                                                        class="w-full truncate font-bold">
                                                                        New 2024 Acura
                                                                    </div>
                                                                    <div class="w-full grid grid-cols-[1fr_auto] gap-1"
                                                                        data-test="vehicleCardTrim">
                                                                        <div class="truncate">
                                                                            ZDX A-Spec Package AWD
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1 flex items-center justify-between gap-1">
                                                                    <div class="flex items-center">
                                                                        <h3
                                                                            class="heading-4 normal-case flex items-center">
                                                                            <div class="truncate"
                                                                                data-test="vehicleCardMsrpLabelAmount">
                                                                                <div class="flex items-end">
                                                                                    <div class="text-[18px]">
                                                                                        $70,450
                                                                                    </div>
                                                                                    <div class="flex pb-[1px]">
                                                                                        <div
                                                                                            class="ml-1 mt-[2px] text-[14px]">
                                                                                            Total MSRP
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-test="vehicleCardFooter"
                                                            class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                            <div class="min-h-[18px]">Irvine, CA</div>
                                                            <div class="flex items-center gap-1">
                                                                <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark"
                                                                    data-test="evBadge">
                                                                    <svg viewBox="0 0 24 24"
                                                                        class="icon icon-fill-default text-[color:var(--green-600)]"
                                                                        role="img" aria-labelledby="icon-1379"
                                                                        aria-hidden="false"
                                                                        style="width: 14px; height: 14px">
                                                                        <title id="icon-1379">EV</title>
                                                                        <use href="#bolt-fill"></use>
                                                                    </svg><span class="text-xs">EV</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]"
                                                            data-test="vehicleCardLink"
                                                            aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD"
                                                            href="/new-cars-for-sale/listing/4W5KHNRL2RZ500569/2024-acura-zdx/?position=7&amp;sourceType=ranking&amp;sponsored=true"
                                                            tabindex="-1"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <button
                                    class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-2 carousel-arrow-next carousel-arrow-next"
                                    data-test="carouselArrowNext" aria-label="Next">
                                    <svg width="16px" height="16px" viewBox="0 0 16 16" class="carousel-arrow-icon">
                                        <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline stroke-width="1.5" fill-rule="nonzero"
                                                points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div class="relative flex select-none items-center justify-center pt-2-5">
                                <div
                                    class="mx-auto inline-flex items-center justify-center overflow-hidden relative h-[4px]">
                                    <ul data-test="carouselDots"
                                        class="m-0 inline-flex items-center justify-center gap-1 transition-transform duration-300 h-[4px]"
                                        style="transform: translateX(0px)">
                                        <li class="transition-[property:background,opacity] block shrink-0 rounded-full duration-[400ms] h-[4px] w-[10px] bg-black"
                                            data-test="carouselDotsDot"></li>
                                        <li class="transition-[property:background,opacity] block shrink-0 rounded-full duration-[400ms] h-[4px] w-[10px] bg-[color:var(--gray-200)]"
                                            data-test="carouselDotsDot"></li>
                                        <li class="transition-[property:background,opacity] block shrink-0 rounded-full duration-[400ms] h-[4px] w-[10px] bg-[color:var(--gray-200)]"
                                            data-test="carouselDotsDot"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a data-ignore-contrast="true" data-loading="false"
                    class="!max-w-none md:!max-w-[140px] btn btn-primary btn-lg btn-block"
                    href="/used-cars-for-sale/listings/?buyOnline=true"><span class="btn-inner">View more</span></a>
            </div>
        </div>
        <div data-test="tcplusBanner" class="bg-black text-center text-white mt-5 overflow-hidden">
            <div class="relative mx-auto max-w-[1600px] space-y-3 py-5 text-center">
                <div
                    class="rounded-[10px] border border-[color:var(--gray-900)] bg-[color:rgba(30,30,30,0.5)] relative z-[2] mx-4 max-w-full space-y-4 py-4 px-3 backdrop-blur-lg sm:px-4 min-[1540px]:mx-auto min-[1540px]:max-w-[1190px]">
                    <div class="heading-2 normal-case font-[500]">How does<div class="picture-container mx-2"
                            style="padding-bottom:0;width:131px;height:23px"><img class="picture-inner picture-svg"
                                src="{{ asset('assets/_next/static/images/tc-plus-dark-theme-logo-f9a028938a01d05a636e4a5a8a188099.svg') }}"
                                alt="TrueCar Plus"></div>work?</div>
                    <ol
                        class="mx-auto grid max-w-[400px] gap-3 p-0 pr-3 text-left min-[1080px]:max-w-full min-[1080px]:grid-cols-[repeat(3,auto)] min-[1140px]:pr-5 min-[1540px]:pr-7">
                        <li class="flex list-none items-start gap-2-5">
                            <div class="picture-container -mr-3 shrink-0 origin-top-left scale-75 min-[1080px]:mr-0 min-[1080px]:scale-100"
                                style="padding-bottom:0;width:74px;height:94px"><img class="picture-inner picture-svg"
                                    src="{{ asset('assets/_next/static/images/number-1-5f3f6bfeb32e9113f9a4ed55c11f4b94.svg') }}"
                                    alt="1"></div>
                            <div class="space-y-1">
                                <div class="heading-3 normal-case font-[500]">You're in total control</div>
                                <p>Shop at your own pace and choose from a large selection of new and used vehicles.</p>
                            </div>
                        </li>
                        <li class="flex list-none items-start gap-2-5">
                            <div class="picture-container -mr-3 shrink-0 origin-top-left scale-75 min-[1080px]:mr-0 min-[1080px]:scale-100"
                                style="padding-bottom:0;width:74px;height:94px"><img class="picture-inner picture-svg"
                                    src="{{ asset('assets/_next/static/images/number-2-2db898bea518a47edfe0cbeade0a155b.svg') }}"
                                    alt="1"></div>
                            <div class="space-y-1">
                                <div class="heading-3 normal-case font-[500]">Find the right financing</div>
                                <p>See your actual monthly payment and select the lender that fits you best.</p>
                            </div>
                        </li>
                        <li class="flex list-none items-start gap-2-5">
                            <div class="picture-container -mr-3 shrink-0 origin-top-left scale-75 min-[1080px]:mr-0 min-[1080px]:scale-100"
                                style="padding-bottom:0;width:74px;height:94px"><img class="picture-inner picture-svg"
                                    src="{{ asset('assets/_next/static/images/number-3-7df2c01b3f48551ae97e84ee42f4a600.svg') }}"
                                    alt="1"></div>
                            <div class="space-y-1">
                                <div class="heading-3 normal-case font-[500]">Receive your car<button
                                        data-test="infoButtonButton" aria-label="Info" color="secondary"
                                        style="--info-border-color:white"
                                        class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)] ml-2"><svg
                                            viewBox="0 0 24 24" class="icon icon-fill-default flex-shrink-0 fill-white"
                                            style="width:18px;height:18px" aria-hidden="true">
                                            <use href="#info"></use>
                                        </svg></button></div>
                                <p>Schedule delivery (for used cars only) or pickup, to begin enjoying your new ride!</p>
                            </div>
                        </li>
                    </ol><button type="button" data-ignore-contrast="true" data-loading="false"
                        data-test="tcplusBannerCTA" class="btn-dark btn btn-primary btn-lg"><span class="btn-inner">Buy
                            online</span></button>
                </div>
                <div class="picture-container absolute right-[calc(100%_-_150px)] z-1 bottom-[-180px] min-[1540px]:right-auto min-[1540px]:left-[60px] min-[1540px]:scale-[85%] hidden md:block"
                    style="padding-bottom:0;width:276px;height:304px"><img class="picture-inner"
                        src="{{ asset('assets/_next/static/images/phone-left-743e848adcec5270d0e95db71ddb17c5.png') }}?auto=format&amp;h=304&amp;w=276"
                        srcset="{{ asset('assets/_next/static/images/phone-left-743e848adcec5270d0e95db71ddb17c5.png') }}?auto=format&amp;h=304&amp;w=276 1x, {{ asset('assets/_next/static/images/phone-left-743e848adcec5270d0e95db71ddb17c5.png') }}?auto=format&amp;h=608&amp;w=552 2x"
                        alt="" role="presentation"></div>
                <div class="picture-container absolute left-[calc(100%_-_130px)] z-[3] origin-bottom scale-75 bottom-[-102px] min-[1540px]:bottom-[-140px] min-[1140px]:left-[calc(100%_-_170px)] min-[1540px]:left-auto min-[1540px]:right-[60px] min-[1540px]:scale-[85%] hidden md:block"
                    style="padding-bottom:0;width:285px;height:414px"><img class="picture-inner"
                        src="{{ asset('assets/_next/static/images/phone-right-a9d600ac9c6d63007f8358dc04d61dd2.png') }}?auto=format&amp;h=414&amp;w=285"
                        srcset="{{ asset('assets/_next/static/images/phone-right-a9d600ac9c6d63007f8358dc04d61dd2.png') }}?auto=format&amp;h=414&amp;w=285 1x, {{ asset('assets/_next/static/images/phone-right-a9d600ac9c6d63007f8358dc04d61dd2.png') }}?auto=format&amp;h=828&amp;w=570 2x"
                        alt="" role="presentation"></div>
            </div>
        </div>
        <section class="pt-5 pb-6 md:pb-5">
            <div class="container">
                <h2 class="heading-2 normal-case pt-2-5 pb-3 text-center md:pb-4 md:pt-3 lg:pt-0">Shop by Brand</h2>
                <div class="flex flex-col justify-center" data-reach-tabs="" data-orientation="horizontal">
                    <div role="tablist" aria-orientation="horizontal"
                        class="switch-bar switch-bar-block mx-auto mb-3 w-full max-w-[250px] md:mb-4"
                        data-reach-tab-list=""><button aria-controls="tabs--1--panel--0" aria-selected="true"
                            role="tab" tabindex="0" class="w-full switch" data-reach-tab=""
                            data-orientation="horizontal" id="tabs--1--tab--0" type="button" data-selected="">Used
                            Cars</button><button aria-controls="tabs--1--panel--1" aria-selected="false"
                            role="tab" tabindex="-1" class="w-full switch" data-reach-tab=""
                            data-orientation="horizontal" id="tabs--1--tab--1" type="button">New Cars</button></div>
                    <div data-reach-tab-panels="">
                        <div aria-labelledby="tabs--1--tab--0" role="tabpanel" tabindex="0"
                            data-reach-tab-panel="" id="tabs--1--panel--0">
                            <div class="row row-card">
                                <div class="pb-3 px-2 col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/hyundai/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Hyundai</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/ford/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Ford</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/mazda/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Mazda</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/chevrolet/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Chevrolet</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/kia/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Kia</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden md:flex col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/toyota/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Toyota</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden md:flex col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/audi/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Audi</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden md:flex col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/nissan/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Nissan</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden md:flex col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/gmc/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">GMC</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden md:flex col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/subaru/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Subaru</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden md:flex col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/volkswagen/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Volkswagen</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden md:flex col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/jeep/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Jeep</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/honda/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Honda</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/tesla/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/385x384_full_color/894bffb70433ffd7/Tesla.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/894bffb70433ffd7/Tesla.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/894bffb70433ffd7/Tesla.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Tesla</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/ram/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Ram</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/cadillac/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Cadillac</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/genesis/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Genesis</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/dodge/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Dodge</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/buick/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Buick</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/bmw/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">BMW</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/lexus/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Lexus</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/volvo/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Volvo</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/acura/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Acura</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/chrysler/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Chrysler</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/lincoln/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Lincoln</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/mercedes-benz/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Mercedes-Benz</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/land-rover/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Land Rover</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/mini/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">MINI</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/used-cars-for-sale/listings/porsche/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/296x384_full_color/5505f9fd129ce1d5/Porsche.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/296x384_full_color/5505f9fd129ce1d5/Porsche.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/296x384_full_color/5505f9fd129ce1d5/Porsche.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Porsche</div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                        <div aria-labelledby="tabs--1--tab--1" role="tabpanel" tabindex="-1"
                            data-reach-tab-panel="" id="tabs--1--panel--1" hidden="">
                            <div class="row row-card">
                                <div class="pb-3 px-2 col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/new-cars-for-sale/listings/hyundai/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Hyundai</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/new-cars-for-sale/listings/chevrolet/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Chevrolet</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/new-cars-for-sale/listings/mazda/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Mazda</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/new-cars-for-sale/listings/ford/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Ford</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/new-cars-for-sale/listings/kia/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Kia</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden md:flex col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/new-cars-for-sale/listings/subaru/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Subaru</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden md:flex col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/new-cars-for-sale/listings/gmc/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">GMC</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden md:flex col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/new-cars-for-sale/listings/volkswagen/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Volkswagen</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden md:flex col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/new-cars-for-sale/listings/audi/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Audi</div>
                                        </div>
                                    </a></div>
                                <div class="pb-3 px-2 hidden md:flex col-12 col-sm-6 col-lg-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative flex flex-row items-center py-2 pl-[calc(50%-80px)]"
                                        href="/new-cars-for-sale/listings/cadillac/?buyOnline=true">
                                        <div class="picture-container" style="padding-bottom:0;width:60px;height:60px">
                                            <img class="picture-inner"
                                                src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60"
                                                srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=120 2x"
                                                role="presentation" alt="">
                                        </div>
                                        <div class="pl-3">
                                            <div class="heading-base">Cadillac</div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center text-center mt-3 md:mt-4 flex"><button type="button"
                        data-ignore-contrast="false" data-loading="false"
                        class="inline-flex items-center justify-center btn btn-secondary btn-lg"><span
                            class="btn-inner">See more</span></button></div>
                <p class="mt-4 text-center text-sm">We’re constantly adding new brands and partners, so we can bring you
                    one of the largest online inventories of new and used cars.</p>
            </div>
        </section>
        <section class="pt-4 pb-5 md:pt-5 md:pb-6 theme-light">
            <div class="container container-max-width-2">
                <h2 class="heading-3 normal-case heading-md-2 md:normal-case pb-3 text-center">FAQs</h2>
                <h3 class="heading-3 normal-case pt-2 pb-3"><button class="flex w-full justify-between">
                        <div>TrueCar+</div>
                        <div>
                            <div class="flex h-[28px] w-[28px] items-center justify-center rounded-full bg-black"><svg
                                    viewBox="0 0 24 24"
                                    class="icon icon-fill-default fill-white transition-transform duration-300"
                                    style="width:24px;height:24px" aria-hidden="true">
                                    <use href="#keyboard_arrow_down"></use>
                                </svg></div>
                        </div>
                    </button></h3>
                <div class="collapse">
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-33">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">What is TrueCar+?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-33"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-35">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">Can I negotiate the vehicle’s&nbsp;price?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-35"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-37">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">Do I have to finance my vehicle on&nbsp;TrueCar+?
                                    </h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-37"></div>
                    </div>
                </div>
                <h3 class="heading-3 normal-case pt-2 pb-3"><button class="flex w-full justify-between">
                        <div>Trade-in/payoff</div>
                        <div>
                            <div class="flex h-[28px] w-[28px] items-center justify-center rounded-full bg-black"><svg
                                    viewBox="0 0 24 24"
                                    class="icon icon-fill-default fill-white transition-transform duration-300"
                                    style="width:24px;height:24px" aria-hidden="true">
                                    <use href="#keyboard_arrow_down"></use>
                                </svg></div>
                        </div>
                    </button></h3>
                <div class="collapse">
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-40">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">What if I owe money on my&nbsp;vehicle?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-40"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-42">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">What if my vehicle is&nbsp;leased?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-42"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-44">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">How long is my trade-in appraisal value
                                        good&nbsp;for?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-44"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-46">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">What happens if my trade-in value&nbsp;expires?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-46"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-48">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">What happens to my trade if I’m getting my new
                                        vehicle&nbsp;delivered?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-48"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-50">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">What do I need to be prepared to do for
                                        my&nbsp;trade?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-50"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-52">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">What happens if I owe more than my trade-in
                                        is&nbsp;worth?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-52"></div>
                    </div>
                </div>
                <h3 class="heading-3 normal-case pt-2 pb-3"><button class="flex w-full justify-between">
                        <div>Credit application</div>
                        <div>
                            <div class="flex h-[28px] w-[28px] items-center justify-center rounded-full bg-black"><svg
                                    viewBox="0 0 24 24"
                                    class="icon icon-fill-default fill-white transition-transform duration-300"
                                    style="width:24px;height:24px" aria-hidden="true">
                                    <use href="#keyboard_arrow_down"></use>
                                </svg></div>
                        </div>
                    </button></h3>
                <div class="collapse">
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-55">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">What happens if I do not receive any
                                        finance&nbsp;offers?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-55"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-57">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">Will submitting a credit application impact
                                        my&nbsp;credit?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-57"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-59">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">Will my credit be ran multiple&nbsp;times?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-59"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-61">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">What if I don’t want to put my Social Security
                                        Number&nbsp;online?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-61"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-63">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">Can I add a&nbsp;co-signer?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-63"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-65">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">Can I use the price offer on any other vehicle?
                                        Another VIN within the same&nbsp;dealer?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-65"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-67">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">How long is the offer good&nbsp;for?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-67"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-69">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">Can I switch and accept another lender offer that
                                        was presented to&nbsp;me?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-69"></div>
                    </div>
                </div>
                <h3 class="heading-3 normal-case pt-2 pb-3"><button class="flex w-full justify-between">
                        <div>Delivery</div>
                        <div>
                            <div class="flex h-[28px] w-[28px] items-center justify-center rounded-full bg-black"><svg
                                    viewBox="0 0 24 24"
                                    class="icon icon-fill-default fill-white transition-transform duration-300"
                                    style="width:24px;height:24px" aria-hidden="true">
                                    <use href="#keyboard_arrow_down"></use>
                                </svg></div>
                        </div>
                    </button></h3>
                <div class="collapse">
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-72">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">Is my vehicle insured during&nbsp;transport?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-72"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-74">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">What if I change my mind and want to pick up
                                        my&nbsp;vehicle?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-74"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-76">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">How long does delivery&nbsp;take?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-76"></div>
                    </div>
                    <div class="linkable card expandable-card rounded mb-3"><button
                            class="expandable-card-title px-3 pt-3" type="button" aria-expanded="false"
                            aria-controls="expandable-content-78">
                            <div class="flex flex-nowrap justify-between">
                                <div class="heading-4 normal-case text-left">
                                    <h4 class="heading-4 normal-case">Do I have to be present at delivery, or can someone
                                        receive the car on my&nbsp;behalf?</h4>
                                </div><span class="ml-3 whitespace-nowrap"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default expandable-card-icon"
                                        style="width:21px;height:21px" aria-hidden="true">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></span>
                            </div>
                        </button>
                        <div class="expandable-card-collapse px-3 pb-3" id="expandable-content-78"></div>
                    </div>
                </div>
            </div>
            <div class="text-center pt-3"><span class="hidden-sm-down">Still have questions? Contact our Customer
                    Support Center at</span><span class="hidden-md-up">Questions?</span> <a href="tel:1-833-658-2377"
                    class="focus-visible:outline-2 focus-visible:outline-white">1-833-658-2377</a></div>
        </section>
    </main>
@endsection
