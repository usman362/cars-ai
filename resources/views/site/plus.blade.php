@extends('site.layouts.app')
@section('content')
<style>
    .page-faqs{
        background-color: #000000;
        color: #fff;
    }
    .accordion-button {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    /* padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x); */
    font-size: 1rem;
    /* color: var(--bs-accordion-btn-color); */
    text-align: left;
    /* background-color: var(--bs-accordion-btn-bg); */
    border: 0;
    border-radius: 0;
    overflow-anchor: none;
    /* transition: var(--bs-accordion-transition); */
}
.global-footer{
    margin: 0 !important;
}
</style>
    <main id="mainContent" style="margin-top:60px"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div>
            <div class="relative pt-[60px]">
                <div style="--image-url-sm:url({{ asset('assets/_next/static/images/tc-plus-landing-bg-lg-f3460d1ab4f6eec80fa4e6e7a78c1982.jpeg') }});--image-url-md:url({{ asset('assets/_next/static/images/tc-plus-landing-bg-lg-f3460d1ab4f6eec80fa4e6e7a78c1982.jpeg') }});--image-url-lg:url({{ asset('assets/_next/static/images/tc-plus-landing-bg-lg-f3460d1ab4f6eec80fa4e6e7a78c1982.jpeg') }}?w=2000&amp;h=944)"
                    class="bg-[image:var(--image-url-sm)] bg-cover bg-no-repeat text-center text-white md:bg-[image:var(--image-url-md)] lg:bg-[image:var(--image-url-lg)] relative bg-center before:content-[''] before:block before:absolute before:top-0 before:bottom-0 before:left-0 before:right-0 before:bg-gradient-to-r before:from-black before:to-[rgba(36,43,66,0.6)]">
                    <div class="container">
                        <div class="mx-0 mb-[-25px] px-0 md:mx-[30px] md:mb-[-40px] md:px-2 md:text-left lg:pb-6 lg:pt-6">
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
        <div class="why-choose-us">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">why choose us
                            </h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                <div class="split-line" style="display: block; text-align: center; position: relative;">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            U</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            m</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            t</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            c</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            h</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            d</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            q</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            u</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            l</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            t</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            y</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            d</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            r</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            v</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            c</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                    </div>
                                </div>
                                <div class="split-line" style="display: block; text-align: center; position: relative;">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            f</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            r</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            y</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            u</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            r</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            d</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                    </div>
                                </div>
                            </h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 order-lg-1 order-md-1 order-1">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="icon-box">
                                <img src="images/icon-why-choose-1.svg" alt="">
                            </div>
                            <div class="why-choose-content">
                                <h3>extensive fleet options</h3>
                                <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus Hendrerit, Massa
                                </p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="icon-box">
                                <img src="{{ asset('novaride/images/icon-why-choose-2.svg') }}" alt="">
                            </div>
                            <div class="why-choose-content">
                                <h3>exceptional customer service</h3>
                                <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus Hendrerit, Massa
                                </p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->
                    </div>

                    <div class="col-lg-4 col-md-12 order-lg-2 order-md-3 order-2">
                        <div class="why-choose-image">
                            <figure class="reveal"
                                style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <img src="{{ asset('novaride/images/why-choose-img.jpg') }}" alt=""
                                    style="transform: translate(0px, 0px);">
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 order-lg-3 order-md-2 order-3">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="icon-box">
                                <img src="{{ asset('novaride/images/icon-why-choose-3.svg') }}" alt="">
                            </div>
                            <div class="why-choose-content">
                                <h3>convenient locations</h3>
                                <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus Hendrerit, Massa
                                </p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="icon-box">
                                <img src="{{ asset('novaride/images/icon-why-choose-4.svg') }}" alt="">
                            </div>
                            <div class="why-choose-content">
                                <h3>reliability and safety</h3>
                                <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus Hendrerit, Massa
                                </p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                </div>
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
                            Cars</button><button aria-controls="tabs--1--panel--1" aria-selected="false" role="tab"
                            tabindex="-1" class="w-full switch" data-reach-tab="" data-orientation="horizontal"
                            id="tabs--1--tab--1" type="button">New Cars</button></div>
                    <div data-reach-tab-panels="">
                        <div aria-labelledby="tabs--1--tab--0" role="tabpanel" tabindex="0" data-reach-tab-panel=""
                            id="tabs--1--panel--0">
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
                        <div aria-labelledby="tabs--1--tab--1" role="tabpanel" tabindex="-1" data-reach-tab-panel=""
                            id="tabs--1--panel--1" hidden="">
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

        <!-- Page Faqs Start -->
        <div class="page-faqs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Faqs Sidebar Start -->
                        <div class="faq-sidebar">
                            <!-- Faqs Catagery List Start -->
                            <div class="faq-catagery-list wow fadeInUp" data-wow-delay="0.25s">
                                <ul>
                                    <li><a href="#general_information">general information</a></li>
                                    <li><a href="#booking_and_reservations">booking and reservations</a></li>
                                    <li><a href="#pricing_and_payment">pricing and payment</a></li>
                                    <li><a href="#vehicle_information">vehicle information</a></li>
                                </ul>
                            </div>
                            <!-- Faqs Catagery List End -->
                        </div>
                        <!-- Faqs Sidebar End -->
                    </div>

                    <div class="col-lg-8">
                        <!-- FAQs section start -->
                        <div class="rental-condition-accordion" id="general_information">
                            <div class="section-title faqs-section-title">
                                <h3 class="wow fadeInUp">FAQs</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">General information</h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            What types of vehicles are available for rent?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show"
                                        aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, we accept international driver's licenses. An additional
                                                government-issued ID, such as a passport, is also required.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                            aria-controls="collapse2">
                                            Where are your rental locations?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, we accept international driver's licenses. An additional
                                                government-issued ID, such as a passport, is also required.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                            aria-controls="collapse3">
                                            What are your hours of operation?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, we accept international driver's licenses. An additional
                                                government-issued ID, such as a passport, is also required.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="rental-condition-accordion" id="booking_and_reservations">
                            <div class="section-title faqs-section-title">
                                <h3 class="wow fadeInUp">FAQs</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Booking and reservations</h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion1">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            How do I make a reservation?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse show"
                                        aria-labelledby="heading4" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Yes, you can rent a car for someone else, but the primary driver must be
                                                present at the time of rental to provide their driver's license and sign the
                                                rental agreement.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                            aria-controls="collapse5">
                                            Can I modify or cancel my reservation?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                        data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Yes, you can rent a car for someone else, but the primary driver must be
                                                present at the time of rental to provide their driver's license and sign the
                                                rental agreement.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="accordion-header" id="heading6">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false"
                                            aria-controls="collapse6">
                                            What is your cancellation policy?
                                        </button>
                                    </h2>
                                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                        data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Yes, you can rent a car for someone else, but the primary driver must be
                                                present at the time of rental to provide their driver's license and sign the
                                                rental agreement.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="rental-condition-accordion" id="pricing_and_payment">
                            <div class="section-title faqs-section-title">
                                <h3 class="wow fadeInUp">FAQs</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Pricing and payment</h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion2">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading7">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                            What forms of payment do you accept?
                                        </button>
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse show"
                                        aria-labelledby="heading7" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Reservations can be made online through our website, by calling our customer
                                                service hotline, or by visiting one of our rental locations in person.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                    <h2 class="accordion-header" id="heading8">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false"
                                            aria-controls="collapse8">
                                            Are there any hidden fees?
                                        </button>
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                                        data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Reservations can be made online through our website, by calling our customer
                                                service hotline, or by visiting one of our rental locations in person.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="accordion-header" id="heading9">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false"
                                            aria-controls="collapse9">
                                            Do you require a deposit?
                                        </button>
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                                        data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Reservations can be made online through our website, by calling our customer
                                                service hotline, or by visiting one of our rental locations in person.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="rental-condition-accordion" id="vehicle_information">
                            <div class="section-title faqs-section-title">
                                <h3 class="wow fadeInUp">FAQs</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Vehicle information</h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion3">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading10">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                            Are your vehicles insured?
                                        </button>
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse show"
                                        aria-labelledby="heading10" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We offer a diverse fleet of vehicles, including economy cars, compact cars,
                                                SUVs, luxury cars, and more to suit various needs and preferences.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                    <h2 class="accordion-header" id="heading11">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false"
                                            aria-controls="collapse11">
                                            Do you offer vehicles with automatic transmission?
                                        </button>
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                                        data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We offer a diverse fleet of vehicles, including economy cars, compact cars,
                                                SUVs, luxury cars, and more to suit various needs and preferences.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="accordion-header" id="heading12">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false"
                                            aria-controls="collapse12">
                                            Can I choose a specific vehicle model?
                                        </button>
                                    </h2>
                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                                        data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We offer a diverse fleet of vehicles, including economy cars, compact cars,
                                                SUVs, luxury cars, and more to suit various needs and preferences.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Faq End -->
    </main>
@endsection
