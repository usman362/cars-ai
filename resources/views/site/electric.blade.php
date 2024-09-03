@extends('site.layouts.app')
@section('content')
    <main id="mainContent"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]"
        style="margin-top:160px">
        <div class="page-header bg-section parallaxie">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Page Header Box Start -->
                        <div class="page-header-box">
                            <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                <div class="split-line" style="display: block; text-align: center; position: relative;">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            Electric</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            Cars</div>
                                    </div>
                                </div>
                            </h1>
                            <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./">home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">electric cars</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div id="best-evs" tabindex="-1" class="navigation-section">
                <div class="pt-4 md:pt-5">
                    <section class="pb-5 md:pb-6">
                        <div class="container container-max-width-1">
                            <h2 class="heading-3 normal-case mb-1 text-center" data-test="topRankedElectric">Top Ranked
                                Electric&nbsp;Vehicles</h2>
                            <p class="mb-3 text-center">Start your search with the best EVs in each category.</p>
                            <div class="row row-card mb-[-15px] md:mb-[-20px]">
                                <div class="mb-2-5 px-2 sm:mb-3 col-sm-6 col-md-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] flex-row max-sm:bg-[#f8f8f8] sm:flex-col"
                                        aria-label="Best Electric Vehicles" href="/best-cars-trucks/fuel-electric/">
                                        <div class="card-image mx-auto flex items-center py-2-5 pl-2 pr-2-5 sm:pb-0 sm:pt-3 sm:pl-0 sm:pr-0 w-[34%] max-sm:h-[100%] sm:w-[var(--width)]"
                                            style="--width: 50%;">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 50%;"><img class="picture-block picture-svg"
                                                    src="{{asset('assets/_next/static/images/BestEV-2ac663d70aa64c26d8323b9a278df2a1.svg')}}"
                                                    alt="" role="presentation"></div>
                                        </div>
                                        <div data-test="cardContent"
                                            class="card-content hidden-sm-up flex h-full justify-center px-0 py-0">
                                            <h3 class="heading-4 normal-case w-full sm:text-center">Best Electric Vehicles
                                            </h3>
                                        </div>
                                        <div data-test="cardContent"
                                            class="card-content hidden-xs-down flex flex-col justify-end"
                                            aria-hidden="true">
                                            <h3 class="heading-4 normal-case w-full sm:text-center">Best Electric Vehicles
                                            </h3>
                                        </div>
                                    </a></div>
                                <div class="mb-2-5 px-2 sm:mb-3 col-sm-6 col-md-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] flex-row max-sm:bg-[#f8f8f8] sm:flex-col"
                                        aria-label="Best Electric SUVs" href="/best-cars-trucks/suvs/fuel-electric/">
                                        <div class="card-image mx-auto flex items-center py-2-5 pl-2 pr-2-5 sm:pb-0 sm:pt-3 sm:pl-0 sm:pr-0 w-[34%] max-sm:h-[100%] sm:w-[var(--width)]"
                                            style="--width: 50%;">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 50%;"><img class="picture-block picture-svg"
                                                    src="{{asset('assets/_next/static/images/BestSUV-b1bb70d2ae8e880c9453c563da076d10.svg')}}"
                                                    alt="" role="presentation"></div>
                                        </div>
                                        <div data-test="cardContent"
                                            class="card-content hidden-sm-up flex h-full justify-center px-0 py-0">
                                            <h3 class="heading-4 normal-case w-full sm:text-center">Best Electric SUVs</h3>
                                        </div>
                                        <div data-test="cardContent"
                                            class="card-content hidden-xs-down flex flex-col justify-end"
                                            aria-hidden="true">
                                            <h3 class="heading-4 normal-case w-full sm:text-center">Best Electric SUVs</h3>
                                        </div>
                                    </a></div>
                                <div class="mb-2-5 px-2 sm:mb-3 col-sm-6 col-md-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] flex-row max-sm:bg-[#f8f8f8] sm:flex-col"
                                        aria-label="Best Luxury EVs" href="/best-cars-trucks/fuel-electric/luxury/">
                                        <div class="card-image mx-auto flex items-center py-2-5 pl-2 pr-2-5 sm:pb-0 sm:pt-3 sm:pl-0 sm:pr-0 w-[34%] max-sm:h-[100%] sm:w-[var(--width)]"
                                            style="--width: 50%;">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 50%;"><img class="picture-block picture-svg"
                                                    src="{{asset('assets/_next/static/images/BestLUX-8d6701cf220fc28226acbf9584bdc329.svg')}}"
                                                    alt="" role="presentation"></div>
                                        </div>
                                        <div data-test="cardContent"
                                            class="card-content hidden-sm-up flex h-full justify-center px-0 py-0">
                                            <h3 class="heading-4 normal-case w-full sm:text-center">Best Luxury EVs</h3>
                                        </div>
                                        <div data-test="cardContent"
                                            class="card-content hidden-xs-down flex flex-col justify-end"
                                            aria-hidden="true">
                                            <h3 class="heading-4 normal-case w-full sm:text-center">Best Luxury EVs</h3>
                                        </div>
                                    </a></div>
                                <div class="mb-2-5 px-2 sm:mb-3 col-sm-6 col-md-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] flex-row max-sm:bg-[#f8f8f8] sm:flex-col"
                                        aria-label="Best AWD EVs" href="/best-cars-trucks/fuel-electric/all-wheel-drive/">
                                        <div class="card-image mx-auto flex items-center py-2-5 pl-2 pr-2-5 sm:pb-0 sm:pt-3 sm:pl-0 sm:pr-0 w-[34%] max-sm:h-[100%] sm:w-[var(--width)]"
                                            style="--width: 50%;">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 50%;"><img class="picture-block picture-svg"
                                                    src="{{asset('assets/_next/static/images/BestAWD-d518e9ecc89632d4e86445c249635e3a.svg')}}"
                                                    alt="" role="presentation"></div>
                                        </div>
                                        <div data-test="cardContent"
                                            class="card-content hidden-sm-up flex h-full justify-center px-0 py-0">
                                            <h3 class="heading-4 normal-case w-full sm:text-center">Best AWD EVs</h3>
                                        </div>
                                        <div data-test="cardContent"
                                            class="card-content hidden-xs-down flex flex-col justify-end"
                                            aria-hidden="true">
                                            <h3 class="heading-4 normal-case w-full sm:text-center">Best AWD EVs</h3>
                                        </div>
                                    </a></div>
                                <div class="mb-2-5 px-2 sm:mb-3 col-sm-6 col-md-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] flex-row max-sm:bg-[#f8f8f8] sm:flex-col"
                                        aria-label="Top EVs by Range" href="/best-cars-trucks/fuel-electric/by-range/">
                                        <div class="card-image mx-auto flex items-center py-2-5 pl-2 pr-2-5 sm:pb-0 sm:pt-3 sm:pl-0 sm:pr-0 w-[34%] max-sm:h-[100%] sm:w-[var(--width)]"
                                            style="--width: 56%;">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 41.6667%;"><img class="picture-block picture-svg"
                                                    src="{{asset('assets/_next/static/images/TopRange-5b3635f1e42ef0b6f46817a262d61b81.svg')}}"
                                                    alt="" role="presentation"></div>
                                        </div>
                                        <div data-test="cardContent"
                                            class="card-content hidden-sm-up flex h-full justify-center px-0 py-0">
                                            <h3 class="heading-4 normal-case w-full sm:text-center">Top EVs by&nbsp;Range
                                            </h3>
                                        </div>
                                        <div data-test="cardContent"
                                            class="card-content hidden-xs-down flex flex-col justify-end"
                                            aria-hidden="true">
                                            <h3 class="heading-4 normal-case w-full sm:text-center">Top EVs by&nbsp;Range
                                            </h3>
                                        </div>
                                    </a></div>
                                <div class="mb-2-5 px-2 sm:mb-3 col-sm-6 col-md-4"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] flex-row max-sm:bg-[#f8f8f8] sm:flex-col"
                                        aria-label="Cheapest EVs" href="/best-cars-trucks/fuel-electric/cheapest/">
                                        <div class="card-image mx-auto flex items-center py-2-5 pl-2 pr-2-5 sm:pb-0 sm:pt-3 sm:pl-0 sm:pr-0 w-[34%] max-sm:h-[100%] sm:w-[var(--width)]"
                                            style="--width: 66%;">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 36.3636%;"><img class="picture-block picture-svg"
                                                    src="{{asset('assets/_next/static/images/LowestPricedEV-db3fb4c26e0c518be8d24369750bbfbf.svg')}}"
                                                    alt="" role="presentation"></div>
                                        </div>
                                        <div data-test="cardContent"
                                            class="card-content hidden-sm-up flex h-full justify-center px-0 py-0">
                                            <h3 class="heading-4 normal-case w-full sm:text-center">Cheapest EVs</h3>
                                        </div>
                                        <div data-test="cardContent"
                                            class="card-content hidden-xs-down flex flex-col justify-end"
                                            aria-hidden="true">
                                            <h3 class="heading-4 normal-case w-full sm:text-center">Cheapest EVs</h3>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div id="shopping" tabindex="-1" class="navigation-section">
                <div class="">
                    <div class="why-choose-us">
                        <div class="container">
                            <div class="row section-row">
                                <div class="col-lg-12">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                            why choose us</h3>
                                        <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                            <div class="split-line"
                                                style="display: block; text-align: center; position: relative;">
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
                                            <div class="split-line"
                                                style="display: block; text-align: center; position: relative;">
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
                                    <div class="why-choose-item wow fadeInUp"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="icon-box">
                                            <img src="{{ asset('novaride/images/icon-why-choose-1.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="why-choose-content">
                                            <h3>extensive fleet options</h3>
                                            <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus
                                                Hendrerit, Massa</p>
                                        </div>
                                    </div>
                                    <!-- Why Choose Item End -->

                                    <!-- Why Choose Item Start -->
                                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s"
                                        style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                        <div class="icon-box">
                                            <img src="{{ asset('novaride/images/icon-why-choose-2.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="why-choose-content">
                                            <h3>exceptional customer service</h3>
                                            <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus
                                                Hendrerit, Massa</p>
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
                                    <div class="why-choose-item wow fadeInUp"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="icon-box">
                                            <img src="{{ asset('novaride/images/icon-why-choose-3.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="why-choose-content">
                                            <h3>convenient locations</h3>
                                            <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus
                                                Hendrerit, Massa</p>
                                        </div>
                                    </div>
                                    <!-- Why Choose Item End -->

                                    <!-- Why Choose Item Start -->
                                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s"
                                        style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                        <div class="icon-box">
                                            <img src="{{ asset('novaride/images/icon-why-choose-4.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="why-choose-content">
                                            <h3>reliability and safety</h3>
                                            <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus
                                                Hendrerit, Massa</p>
                                        </div>
                                    </div>
                                    <!-- Why Choose Item End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="pt-4 pb-5 md:pt-5 md:pb-6">
                        <div class="container container-max-width-1">
                            <h2 class="heading-3 normal-case mb-1 text-center">New Electric Vehicles</h2>
                            <p class="mb-3 text-center sm:mb-0 lg:mb-3">Learn about new EVs currently on the market.</p>
                            <div class="row row-card mt-4">
                                <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative"
                                        href="/overview/acura/zdx/">
                                        <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 50%;"><img class="picture-block" sizes="155px"
                                                    src="https://static.tcimg.net/vehicles/primary/c87f8a6e361a18d9/2024-Acura-ZDX-silver-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160"
                                                    srcset="https://static.tcimg.net/vehicles/primary/c87f8a6e361a18d9/2024-Acura-ZDX-silver-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/c87f8a6e361a18d9/2024-Acura-ZDX-silver-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w"
                                                    loading="lazy" role="presentation" alt=""></div>
                                        </div>
                                        <div data-test="cardContent" class="card-content mt-0 items-center">
                                            <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">
                                                Acura<br class="hidden-sm-up"> ZDX</h3>
                                            <div class="hidden-sm-down text-center">
                                                <p>Starting MSRP</p>
                                                <p class="font-bold">$65,850</p>
                                            </div>
                                            <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">
                                                MSRP <span class="font-bold">$65,850</span></p>
                                        </div>
                                    </a></div>
                                <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative"
                                        href="/overview/audi/q4-e-tron/">
                                        <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 50%;"><img class="picture-block" sizes="155px"
                                                    src="https://static.tcimg.net/vehicles/primary/d18efdf8bdf7784c/2024-Audi-Q4_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160"
                                                    srcset="https://static.tcimg.net/vehicles/primary/d18efdf8bdf7784c/2024-Audi-Q4_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/d18efdf8bdf7784c/2024-Audi-Q4_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w"
                                                    loading="lazy" role="presentation" alt=""></div>
                                        </div>
                                        <div data-test="cardContent" class="card-content mt-0 items-center">
                                            <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">
                                                Audi<br class="hidden-sm-up"> Q4 e-tron</h3>
                                            <div class="hidden-sm-down text-center">
                                                <p>Starting MSRP</p>
                                                <p class="font-bold">$50,995</p>
                                            </div>
                                            <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">
                                                MSRP <span class="font-bold">$50,995</span></p>
                                        </div>
                                    </a></div>
                                <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative"
                                        href="/overview/audi/q8-e-tron/">
                                        <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 50%;"><img class="picture-block" sizes="155px"
                                                    src="https://static.tcimg.net/vehicles/primary/6d5fe302166e0bab/2024-Audi-Q8_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160"
                                                    srcset="https://static.tcimg.net/vehicles/primary/6d5fe302166e0bab/2024-Audi-Q8_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/6d5fe302166e0bab/2024-Audi-Q8_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w"
                                                    loading="lazy" role="presentation" alt=""></div>
                                        </div>
                                        <div data-test="cardContent" class="card-content mt-0 items-center">
                                            <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">
                                                Audi<br class="hidden-sm-up"> Q8 e-tron</h3>
                                            <div class="hidden-sm-down text-center">
                                                <p>Starting MSRP</p>
                                                <p class="font-bold">$75,595</p>
                                            </div>
                                            <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">
                                                MSRP <span class="font-bold">$75,595</span></p>
                                        </div>
                                    </a></div>
                                <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative"
                                        href="/overview/audi/rs-e-tron-gt/">
                                        <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 50%;"><img class="picture-block" sizes="155px"
                                                    src="https://static.tcimg.net/vehicles/primary/27c3a4ba1b4a06d4/2024-Audi-RS_e-tron_GT-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160"
                                                    srcset="https://static.tcimg.net/vehicles/primary/27c3a4ba1b4a06d4/2024-Audi-RS_e-tron_GT-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/27c3a4ba1b4a06d4/2024-Audi-RS_e-tron_GT-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w"
                                                    loading="lazy" role="presentation" alt=""></div>
                                        </div>
                                        <div data-test="cardContent" class="card-content mt-0 items-center">
                                            <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">
                                                Audi<br class="hidden-sm-up"> RS e-tron GT</h3>
                                            <div class="hidden-sm-down text-center">
                                                <p>Starting MSRP</p>
                                                <p class="font-bold">$148,595</p>
                                            </div>
                                            <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">
                                                MSRP <span class="font-bold">$148,595</span></p>
                                        </div>
                                    </a></div>
                                <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative"
                                        href="/overview/audi/sq8-e-tron/">
                                        <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 50%;"><img class="picture-block" sizes="155px"
                                                    src="https://static.tcimg.net/vehicles/primary/a2c45113ea5644c8/2024-Audi-SQ8_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160"
                                                    srcset="https://static.tcimg.net/vehicles/primary/a2c45113ea5644c8/2024-Audi-SQ8_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/a2c45113ea5644c8/2024-Audi-SQ8_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w"
                                                    loading="lazy" role="presentation" alt=""></div>
                                        </div>
                                        <div data-test="cardContent" class="card-content mt-0 items-center">
                                            <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">
                                                Audi<br class="hidden-sm-up"> SQ8 e-tron</h3>
                                            <div class="hidden-sm-down text-center">
                                                <p>Starting MSRP</p>
                                                <p class="font-bold">$90,995</p>
                                            </div>
                                            <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">
                                                MSRP <span class="font-bold">$90,995</span></p>
                                        </div>
                                    </a></div>
                                <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative"
                                        href="/overview/audi/e-tron-gt/">
                                        <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 50%;"><img class="picture-block" sizes="155px"
                                                    src="https://static.tcimg.net/vehicles/primary/beae27501aa30fd0/2024-Audi-e-tron_GT-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160"
                                                    srcset="https://static.tcimg.net/vehicles/primary/beae27501aa30fd0/2024-Audi-e-tron_GT-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/beae27501aa30fd0/2024-Audi-e-tron_GT-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w"
                                                    loading="lazy" role="presentation" alt=""></div>
                                        </div>
                                        <div data-test="cardContent" class="card-content mt-0 items-center">
                                            <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">
                                                Audi<br class="hidden-sm-up"> e-tron GT</h3>
                                            <div class="hidden-sm-down text-center">
                                                <p>Starting MSRP</p>
                                                <p class="font-bold">$107,995</p>
                                            </div>
                                            <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">
                                                MSRP <span class="font-bold">$107,995</span></p>
                                        </div>
                                    </a></div>
                                <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative"
                                        href="/overview/bmw/i4/">
                                        <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 50%;"><img class="picture-block" sizes="155px"
                                                    src="https://static.tcimg.net/vehicles/primary/6c4a201406824010/2025-BMW-i4-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160"
                                                    srcset="https://static.tcimg.net/vehicles/primary/6c4a201406824010/2025-BMW-i4-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/6c4a201406824010/2025-BMW-i4-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w"
                                                    loading="lazy" role="presentation" alt=""></div>
                                        </div>
                                        <div data-test="cardContent" class="card-content mt-0 items-center">
                                            <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">
                                                BMW<br class="hidden-sm-up"> i4</h3>
                                            <div class="hidden-sm-down text-center">
                                                <p>Starting MSRP</p>
                                                <p class="font-bold">$53,975</p>
                                            </div>
                                            <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">
                                                MSRP <span class="font-bold">$53,975</span></p>
                                        </div>
                                    </a></div>
                                <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a
                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative"
                                        href="/overview/bmw/i5/">
                                        <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                            <div class="picture-container picture-container-block"
                                                style="padding-bottom: 50%;"><img class="picture-block" sizes="155px"
                                                    src="https://static.tcimg.net/vehicles/primary/d488c988c9cdd085/2025-BMW-i5-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160"
                                                    srcset="https://static.tcimg.net/vehicles/primary/d488c988c9cdd085/2025-BMW-i5-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/d488c988c9cdd085/2025-BMW-i5-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w"
                                                    loading="lazy" role="presentation" alt=""></div>
                                        </div>
                                        <div data-test="cardContent" class="card-content mt-0 items-center">
                                            <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">
                                                BMW<br class="hidden-sm-up"> i5</h3>
                                            <div class="hidden-sm-down text-center">
                                                <p>Starting MSRP</p>
                                                <p class="font-bold">$68,275</p>
                                            </div>
                                            <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">
                                                MSRP <span class="font-bold">$68,275</span></p>
                                        </div>
                                    </a></div>
                            </div>
                            <div class="text-center md:mt-2"><button type="button"
                                    class="link-button inline-flex items-center no-underline">See More EVs <svg
                                        viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true"
                                        style="width: 24px; height: 24px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></button></div>
                        </div>
                    </section>
                </div>
            </div>
            <div id="ranges" tabindex="-1" class="navigation-section">
                <div class="">
                    <section class="bg-light pt-4 pb-5 md:pt-5 md:pb-6">
                        <div class="container container-max-width-1">
                            <h2 class="heading-3 normal-case mb-1 text-center">Compare EV Ranges</h2>
                            <p class="mb-3 text-center">See how different electric cars could work with your driving
                                habits.</p>
                            <div class="grid grid-cols-1 gap-y-2-5"><a class="block no-underline hover:no-underline"
                                    href="/overview/chevrolet/silverado-ev/">
                                    <div class="w-full overflow-hidden rounded-full bg-[#d6e5e3]">
                                        <div class="rounded-full bg-green-600 px-2-5 py-1 h-full flex justify-between text-white"
                                            style="width: 100%;"><span class="truncate">Chevrolet Silverado EV</span><span
                                                class="whitespace-nowrap pl-1">393-450 mi</span></div>
                                    </div>
                                </a><a class="block no-underline hover:no-underline" href="/overview/hyundai/ioniq-6/">
                                    <div class="w-full overflow-hidden rounded-full bg-[#d6e5e3]">
                                        <div class="rounded-full bg-green-600 px-2-5 py-1 h-full flex justify-between text-white"
                                            style="width: 80.1339%;"><span class="truncate">Hyundai IONIQ 6</span><span
                                                class="whitespace-nowrap pl-1">240-361 mi</span></div>
                                    </div>
                                </a><a class="block no-underline hover:no-underline"
                                    href="/overview/mercedes-benz/eqs-sedan/">
                                    <div class="w-full overflow-hidden rounded-full bg-[#d6e5e3]">
                                        <div class="rounded-full bg-green-600 px-2-5 py-1 h-full flex justify-between text-white"
                                            style="width: 78.125%;"><span class="truncate">Mercedes-Benz EQS
                                                Sedan</span><span class="whitespace-nowrap pl-1">277-352 mi</span></div>
                                    </div>
                                </a><a class="block no-underline hover:no-underline"
                                    href="/overview/mercedes-benz/eqs-suv/">
                                    <div class="w-full overflow-hidden rounded-full bg-[#d6e5e3]">
                                        <div class="rounded-full bg-green-600 px-2-5 py-1 h-full flex justify-between text-white"
                                            style="width: 75.2232%;"><span class="truncate">Mercedes-Benz EQS
                                                SUV</span><span class="whitespace-nowrap pl-1">285-339 mi</span></div>
                                    </div>
                                </a><a class="block no-underline hover:no-underline" href="/overview/bmw/ix/">
                                    <div class="w-full overflow-hidden rounded-full bg-[#d6e5e3]">
                                        <div class="rounded-full bg-green-600 px-2-5 py-1 h-full flex justify-between text-white"
                                            style="width: 71.875%;"><span class="truncate">BMW iX</span><span
                                                class="whitespace-nowrap pl-1">288-324 mi</span></div>
                                    </div>
                                </a><a class="block no-underline hover:no-underline"
                                    href="/overview/chevrolet/blazer-ev/">
                                    <div class="w-full overflow-hidden rounded-full bg-[#d6e5e3]">
                                        <div class="rounded-full bg-green-600 px-2-5 py-1 h-full flex justify-between text-white"
                                            style="width: 71.875%;"><span class="truncate">Chevrolet Blazer EV</span><span
                                                class="whitespace-nowrap pl-1">279-324 mi</span></div>
                                    </div>
                                </a></div>
                            <div class="mt-3 text-center md:mt-4"><button type="button"
                                    class="link-button inline-flex items-center no-underline hover:no-underline">See More
                                    EVs <svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true"
                                        style="width: 24px; height: 24px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></button></div>
                        </div>
                    </section>
                </div>
            </div>
        </div><span style="font-size: 0px;"></span>
        <div class="exclusive-partners bg-section">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">executive partners</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">T</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">b</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">g</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">b</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <img src="{{asset('novaride/images/icon-partners-1.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <img src="{{asset('novaride/images/icon-partners-2.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <img src="{{asset('novaride/images/icon-partners-3.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <img src="{{asset('novaride/images/icon-partners-4.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                            <img src="{{asset('novaride/images/icon-partners-3.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
                            <img src="{{asset('novaride/images/icon-partners-4.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInUp;">
                            <img src="{{asset('novaride/images/icon-partners-1.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s" style="visibility: visible; animation-delay: 1.6s; animation-name: fadeInUp;">
                            <img src="{{asset('novaride/images/icon-partners-2.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
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
                                <div class="swiper-wrapper" data-cursor-text="Drag" id="swiper-wrapper-0a324b55aafd885e" aria-live="off" style="transition-duration: 1000ms; transform: translate3d(-433.333px, 0px, 0px);">
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
                                    <div class="testimonial-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-0a324b55aafd885e"></div>
                                    <div class="testimonial-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-0a324b55aafd885e"></div>
                                </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
