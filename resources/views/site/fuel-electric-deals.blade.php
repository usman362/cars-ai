@extends('site.layouts.app')
@section('content')
    <style>
        .page-faqs {
            background-color: #000000;
            color: #fff;
            margin-top: 14px
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
    </style>
    <main id="mainContent"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]"
        style="margin-top:160px">
        <div>

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
                                                Electric Vehicle Deals</div>
                                        </div>
                                </h1>
                                <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Electric Vehicle Deals</li>
                                    </ol>
                                </nav>
                            </div>
                            <!-- Page Header Box End -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-light pb-3 md:pb-4">
                <div class="container container-max-width-2">
                    <div class="heading-3 normal-case heading-lg-2 lg:normal-case pb-4 pt-5 md:pt-6 lg:pb-5">Find Deals by
                        Vehicle&nbsp;Type</div>
                    <div class="flex flex-wrap justify-center md:pb-1 mr-[-4px] md:mr-[-20px]"><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="convertibles"
                            href="/deals/convertibles/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconConvertables-be884bb8d136f35bb6558b94fd825344.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Convertibles</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="coupes" href="/deals/coupes/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconCoupes-b13ad2ede15fb4beb0d01df2269cf9f8.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Coupes</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="suvs" href="/deals/suvs/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconSuv-f1ac2be397703ffcacdbfd74eea4299a.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">SUVs</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="sedans" href="/deals/sedans/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Sedans</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="trucks" href="/deals/trucks/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconTrucks-580a7f2703d3c26ce63c295dc03d166d.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Trucks</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="hatchbacks" href="/deals/hatchbacks/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconHatchbacks-5fef3ca145dd8b50777b2033a6f4d6b0.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Hatchbacks</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="vans" href="/deals/vans/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconVans-870c7511e02faf9d23d77dfe8e77ff45.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Vans</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="wagons" href="/deals/wagons/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconWagons-570cc460532e6540d6108d60cf281230.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Wagons</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="luxury-cars"
                            href="/deals/luxury-cars/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconLuxuryCar-87a471f1074ed4055fb4a68b07764ee6.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Luxury
                                    Cars</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="luxury-suvs"
                            href="/deals/luxury-suvs/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconLuxurySUV-d6de04f820cf51ed437f864b7fcbf7c8.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Luxury
                                    SUVs</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="fuel-hybrid"
                            href="/deals/fuel-hybrid/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconHybrids-750de8cd6fcd9984877da94f2d91c978.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Hybrids</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="fuel-electric"
                            href="/deals/fuel-electric/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconElectrics-37b61a4ced0f9b529aa71879b3b1aeaa.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Electric
                                    Vehicles</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="fuel-diesel"
                            href="/deals/fuel-diesel/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="{{ asset('assets/_next/static/images/iconDiesel-d5cc1b3d19e25226bf7d3ec17ab5ba05.svg') }}"
                                        alt="" role="presentation">
                                </div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Diesels</span>
                            </div>
                        </a></div>
                </div>
            </div>
            <section class="py-5 lg:py-7">
                <div class="container container-max-width-2">
                    <div class="space-y-3 pb-2-5 text-center md:pb-3">
                        <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case text-left">Deals by Brand</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <ul class="hidden-md-up">
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Acura Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/acura/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Acura</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Alfa Romeo Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/alfa-romeo/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Alfa Romeo</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Audi Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/audi/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Audi</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New BMW Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/bmw/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>BMW</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Buick Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/buick/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Buick</div>
                                                </div>
                                            </div>
                                        </a></li>
                                </ul>
                                <div class="hidden-md-up">
                                    <div class="collapse">
                                        <ul>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Cadillac Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/cadillac/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Cadillac</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Chevrolet Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/chevrolet/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Chevrolet</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Chrysler Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/chrysler/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Chrysler</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Dodge Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/dodge/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Dodge</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New FIAT Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/fiat/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>FIAT</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Ford Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/ford/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Ford</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Genesis Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/genesis/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Genesis</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New GMC Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/gmc/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>GMC</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Honda Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/honda/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Honda</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Hyundai Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/hyundai/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Hyundai</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New INFINITI Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/infiniti/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>INFINITI</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Jaguar Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/jaguar/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Jaguar</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Jeep Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/jeep/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Jeep</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Kia Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/kia/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Kia</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Land Rover Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/land-rover/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Land Rover</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Lexus Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/lexus/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Lexus</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Lincoln Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/lincoln/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Lincoln</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Maserati Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/maserati/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Maserati</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Mazda Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/mazda/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Mazda</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Mercedes-Benz Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/mercedes-benz/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Mercedes-Benz</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New MINI Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/mini/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>MINI</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Mitsubishi Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/mitsubishi/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Mitsubishi</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Nissan Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/nissan/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Nissan</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Ram Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/ram/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Ram</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Subaru Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/subaru/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Subaru</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Toyota Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/toyota/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Toyota</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Volkswagen Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/volkswagen/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Volkswagen</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                    title="New Volvo Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/volvo/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Volvo</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </div>
                                    <div class="flex justify-center pb-0 pt-3"><button type="button"
                                            class="link-button nav-link">
                                            <div class="inline-block align-middle">Show More Brands</div><svg
                                                viewBox="0 0 24 24"
                                                class="icon icon-after icon-fill-default ml-0 inline-block"
                                                aria-hidden="true" style="width: 24px; height: 24px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg>
                                        </button></div>
                                </div>
                                <ul class="hidden-sm-down grid grid-cols-3 text-left lg:grid-cols-4" data-test="makesList"
                                    data-test-item="new">
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Acura Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/acura/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Acura</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Alfa Romeo Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/alfa-romeo/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Alfa Romeo</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Audi Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/audi/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Audi</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New BMW Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/bmw/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>BMW</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Buick Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/buick/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Buick</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Cadillac Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/cadillac/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Cadillac</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Chevrolet Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/chevrolet/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Chevrolet</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Chrysler Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/chrysler/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Chrysler</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Dodge Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/dodge/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Dodge</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New FIAT Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/fiat/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>FIAT</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Ford Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/ford/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Ford</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Genesis Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/genesis/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Genesis</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New GMC Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/gmc/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>GMC</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Honda Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/honda/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Honda</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Hyundai Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/hyundai/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Hyundai</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New INFINITI Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/infiniti/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>INFINITI</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Jaguar Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/jaguar/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Jaguar</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Jeep Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/jeep/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Jeep</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Kia Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/kia/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Kia</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Land Rover Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/land-rover/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Land Rover</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Lexus Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/lexus/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Lexus</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Lincoln Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/lincoln/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Lincoln</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Maserati Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/maserati/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Maserati</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Mazda Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/mazda/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Mazda</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Mercedes-Benz Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/mercedes-benz/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Mercedes-Benz</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New MINI Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/mini/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>MINI</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Mitsubishi Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/mitsubishi/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Mitsubishi</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Nissan Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/nissan/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Nissan</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Ram Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/ram/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Ram</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Subaru Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/subaru/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Subaru</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Toyota Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/toyota/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Toyota</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Volkswagen Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/volkswagen/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Volkswagen</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Volvo Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/volvo/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Volvo</div>
                                                </div>
                                            </div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="cta-box bg-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-7">
                            <!-- Cta Box Content Start -->
                            <div class="cta-box-content">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                        <div class="split-line"
                                            style="display: block; text-align: start; position: relative;">
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    R</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    e</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    a</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    d</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    y</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    o</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    h</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    i</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    h</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    e</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    r</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    o</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    a</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    d</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    ?</div>
                                            </div>
                                        </div>
                                        <div class="split-line"
                                            style="display: block; text-align: start; position: relative;">
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    B</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    o</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    o</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    k</div>
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
                                                    c</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    a</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    r</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    o</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    d</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    a</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    y</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    !</div>
                                            </div>
                                        </div>
                                    </h2>
                                    <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Our
                                        friendly customer service team is here to help. Contact us anytime for support and
                                        inquiries.</p>
                                </div>
                                <!-- Section Title End -->

                                <!-- Cta Box Btn Start -->
                                <div class="cta-box-btn wow fadeInUp" data-wow-delay="0.5s"
                                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
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
                                    <img src="{{ asset('novaride/images/cta-car-img.png') }}" alt="">
                                </figure>
                            </div>
                            <!-- Cta Box Image End -->
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Honda Civic</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button>
                                </div>
                                <div>
                                    <div class="heading-4 normal-case inline-block">6 Deals Available</div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                                </div>
                                <div class="hidden-sm-down">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/honda/civic-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/honda/civic/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Honda
                                    Civic</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/e2af810e5f998397/2024-Honda-Civic-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/e2af810e5f998397/2024-Honda-Civic-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/e2af810e5f998397/2024-Honda-Civic-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation">
                                    </div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Honda Civic</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/honda/civic-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/honda/civic/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:mt-2" data-test="dealsRow">
                                <div class="row ml-[-20px]">
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Honda
                                                        Military Appreciation&nbsp;Offer</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$500</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>03/31/25</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">
                                                        Special APR</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">3.9%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">48</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Excludes 2 trims</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Honda Civic&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$303</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/honda/civic/lease/">View Lease Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4"><button type="button" class="link-button">See More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Toyota Corolla</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button>
                                </div>
                                <div>
                                    <div class="heading-4 normal-case inline-block">7 Deals Available</div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                                </div>
                                <div class="hidden-sm-down">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/toyota/corolla-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/toyota/corolla/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Toyota
                                    Corolla</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/2f98c332d7c16ad4/2024-Toyota-Corolla-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/2f98c332d7c16ad4/2024-Toyota-Corolla-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/2f98c332d7c16ad4/2024-Toyota-Corolla-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation">
                                    </div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Toyota Corolla</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/toyota/corolla-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/toyota/corolla/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:mt-2" data-test="dealsRow">
                                <div class="row ml-[-20px]">
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Toyota Lease Loyalty&nbsp;Program </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,000</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Special APR T3 -&nbsp;LA</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">10.49%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">60</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Toyota Corolla&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$303</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/toyota/corolla/lease/">View Lease Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4"><button type="button" class="link-button">See More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Honda Accord</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button>
                                </div>
                                <div>
                                    <div class="heading-4 normal-case inline-block">6 Deals Available</div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                                </div>
                                <div class="hidden-sm-down">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/honda/accord-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/honda/accord/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Honda
                                    Accord</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/0037d8af3b341851/2024-Honda-Accord-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/0037d8af3b341851/2024-Honda-Accord-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/0037d8af3b341851/2024-Honda-Accord-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation">
                                    </div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Honda Accord</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/honda/accord-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/honda/accord/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:mt-2" data-test="dealsRow">
                                <div class="row ml-[-20px]">
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">HFS
                                                        Lease Loyalty/Conquest</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,250</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">
                                                        Special APR</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">2.9%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Honda Accord&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$348</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/honda/accord/lease/">View Lease Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4"><button type="button" class="link-button">See More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Toyota Camry</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button>
                                </div>
                                <div>
                                    <div class="heading-4 normal-case inline-block">6 Deals Available</div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                                </div>
                                <div class="hidden-sm-down">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/toyota/camry-level-setting/?modelYear=2025"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/toyota/camry/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2025 Toyota
                                    Camry</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/735fb852128cb024/2025-Toyota-Camry-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/735fb852128cb024/2025-Toyota-Camry-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/735fb852128cb024/2025-Toyota-Camry-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation">
                                    </div>
                                    <div class="hidden-lg-up pt-1 text-center">2025 Toyota Camry</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/toyota/camry-level-setting/?modelYear=2025"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/toyota/camry/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:mt-2" data-test="dealsRow">
                                <div class="row ml-[-20px]">
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Toyota Lease Loyalty&nbsp;Program </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,000</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Military Program -&nbsp;$500 </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$500</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Special APR T3 -&nbsp;LA</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">10.25%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">60</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4"><button type="button" class="link-button">See More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Hyundai Elantra</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button>
                                </div>
                                <div>
                                    <div class="heading-4 normal-case inline-block">8 Deals Available</div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                                </div>
                                <div class="hidden-sm-down">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/hyundai/elantra-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/hyundai/elantra/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Hyundai
                                    Elantra</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/f3da9046a3d27ec7/2024-Hyundai-Elantra-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/f3da9046a3d27ec7/2024-Hyundai-Elantra-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/f3da9046a3d27ec7/2024-Hyundai-Elantra-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation">
                                    </div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Hyundai Elantra</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/hyundai/elantra-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/hyundai/elantra/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:mt-2" data-test="dealsRow">
                                <div class="row ml-[-20px]">
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Retail
                                                        Bonus Cash</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,500</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Applies to 2 trims</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">
                                                        Hyundai HMF Dealer&nbsp;Choice </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="text-sm font-bold invisible">Up to</div>
                                                            <div class="heading-3 normal-case">3.99%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="text-sm font-bold invisible">Up to</div>
                                                            <div class="heading-3 normal-case">60</div>
                                                            <div>months</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,250</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Excludes 1 trim</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Hyundai Elantra&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$254</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/hyundai/elantra/lease/">View Lease Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4"><button type="button" class="link-button">See More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Dodge Charger</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button>
                                </div>
                                <div>
                                    <div class="heading-4 normal-case inline-block">6 Deals Available</div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                                </div>
                                <div class="hidden-sm-down">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/dodge/charger-level-setting/?modelYear=2023"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/dodge/charger/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2023 Dodge
                                    Charger</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/fc39ce2bdc5a250f/2023-Dodge-Charger-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/fc39ce2bdc5a250f/2023-Dodge-Charger-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/fc39ce2bdc5a250f/2023-Dodge-Charger-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation">
                                    </div>
                                    <div class="hidden-lg-up pt-1 text-center">2023 Dodge Charger</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/dodge/charger-level-setting/?modelYear=2023"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/dodge/charger/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:mt-2" data-test="dealsRow">
                                <div class="row ml-[-20px]">
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2023
                                                        IDL Bonus&nbsp;Cash</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$5,000</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Applies to 2 trims</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>08/05/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2023
                                                        SFS Standalone APR&nbsp;(72) </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">6.9%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">72</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Applies to 3 trims</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>08/05/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2023
                                                        Dodge Charger&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$523</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/dodge/charger/lease/">View Lease Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4"><button type="button" class="link-button">See More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Ford Mustang</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button>
                                </div>
                                <div>
                                    <div class="heading-4 normal-case inline-block">8 Deals Available</div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                                </div>
                                <div class="hidden-sm-down">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/ford/mustang-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/ford/mustang/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Ford
                                    Mustang</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/8eb2f7a014ad464b/2024-Ford-Mustang-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/8eb2f7a014ad464b/2024-Ford-Mustang-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/8eb2f7a014ad464b/2024-Ford-Mustang-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation">
                                    </div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Ford Mustang</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/ford/mustang-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/ford/mustang/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:mt-2" data-test="dealsRow">
                                <div class="row ml-[-20px]">
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">RCL
                                                        Customer Cash</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,000</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Applies to 2 trims</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/30/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Ford
                                                        Credit 90-Day Deferred Payment APR&nbsp;Financing</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">1.9%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">38</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Excludes 1 trim</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Ford Mustang&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$478</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/ford/mustang/lease/">View Lease Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4"><button type="button" class="link-button">See More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Dodge Challenger</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button>
                                </div>
                                <div>
                                    <div class="heading-4 normal-case inline-block">6 Deals Available</div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                                </div>
                                <div class="hidden-sm-down">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/dodge/challenger-level-setting/?modelYear=2023"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/dodge/challenger/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2023 Dodge
                                    Challenger</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/f1bb175460a2174a/2023-Dodge-Challenger-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/f1bb175460a2174a/2023-Dodge-Challenger-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/f1bb175460a2174a/2023-Dodge-Challenger-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation">
                                    </div>
                                    <div class="hidden-lg-up pt-1 text-center">2023 Dodge Challenger</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/dodge/challenger-level-setting/?modelYear=2023"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/dodge/challenger/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:mt-2" data-test="dealsRow">
                                <div class="row ml-[-20px]">
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2023
                                                        National Power Dollars Retail Bonus&nbsp;Cash</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$3,750</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Applies to 3 trims</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>08/05/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2023
                                                        SFS Standalone APR&nbsp;(72) </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">6.9%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">72</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Applies to 3 trims</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>08/05/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2023
                                                        Dodge Challenger&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$498</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/dodge/challenger/lease/">View Lease Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4"><button type="button" class="link-button">See More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Kia Forte</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button>
                                </div>
                                <div>
                                    <div class="heading-4 normal-case inline-block">5 Deals Available</div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                                </div>
                                <div class="hidden-sm-down">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/kia/forte-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/kia/forte/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Kia Forte</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/ce2a0b1cb16e728c/2024-Kia-Forte-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/ce2a0b1cb16e728c/2024-Kia-Forte-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/ce2a0b1cb16e728c/2024-Kia-Forte-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation">
                                    </div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Kia Forte</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/kia/forte-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/kia/forte/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:mt-2" data-test="dealsRow">
                                <div class="row ml-[-20px]">
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Kia
                                                        Customer Cash</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,000</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">KMF
                                                        Low APR&nbsp;Program</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">3.9%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">48</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Kia Forte&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$344</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails" href="/kia/forte/lease/">View
                                                        Lease Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4"><button type="button" class="link-button">See More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Toyota Prius</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button>
                                </div>
                                <div>
                                    <div class="heading-4 normal-case inline-block">4 Deals Available</div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                                </div>
                                <div class="hidden-sm-down">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/toyota/prius-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/toyota/prius/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Toyota
                                    Prius</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/1c9b9245c2179921/2024-Toyota-Prius-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/1c9b9245c2179921/2024-Toyota-Prius-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/1c9b9245c2179921/2024-Toyota-Prius-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation">
                                    </div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Toyota Prius</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/toyota/prius-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/toyota/prius/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:mt-2" data-test="dealsRow">
                                <div class="row ml-[-20px]">
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Toyota Lease Loyalty&nbsp;Program </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,000</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Military Program -&nbsp;$500 </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$500</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/03/24</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span>
                                                    </div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Toyota Prius&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$398</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/toyota/prius/lease/">View Lease Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4"><button type="button" class="link-button">See More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="page-faqs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Faqs Sidebar Start -->
                        <div class="faq-sidebar">
                            <!-- Faqs Catagery List Start -->
                            <div class="faq-catagery-list wow fadeInUp" data-wow-delay="0.25s"
                                style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
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
                                <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">FAQs
                                </h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                    <div class="split-line"
                                        style="display: block; text-align: start; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                G</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                l</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                f</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
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
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                        </div>
                                    </div>
                                </h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="true"
                                            aria-controls="collapse1">
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
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s"
                                    style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse2"
                                            aria-expanded="false" aria-controls="collapse2">
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
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s"
                                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse3"
                                            aria-expanded="false" aria-controls="collapse3">
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
                                <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">FAQs
                                </h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                    <div class="split-line"
                                        style="display: block; text-align: start; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                B</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                k</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                g</div>
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
                                                r</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
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
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                        </div>
                                    </div>
                                </h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion1">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s"
                                    style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4" aria-expanded="false"
                                            aria-controls="collapse4">
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
                                <div class="accordion-item wow fadeInUp" data-wow-delay="1s"
                                    style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse5"
                                            aria-expanded="false" aria-controls="collapse5">
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
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s"
                                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading6">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse6"
                                            aria-expanded="false" aria-controls="collapse6">
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
                                <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">FAQs
                                </h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                    <div class="split-line"
                                        style="display: block; text-align: start; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                P</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                g</div>
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
                                                p</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                y</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                m</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                        </div>
                                    </div>
                                </h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion2">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading7">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse7" aria-expanded="true"
                                            aria-controls="collapse7">
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
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s"
                                    style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading8">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse8"
                                            aria-expanded="false" aria-controls="collapse8">
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
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s"
                                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading9">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse9"
                                            aria-expanded="false" aria-controls="collapse9">
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
                                <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">FAQs
                                </h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                    <div class="split-line"
                                        style="display: block; text-align: start; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                V</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                h</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                l</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                f</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
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
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                        </div>
                                    </div>
                                </h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion3">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading10">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse10" aria-expanded="true"
                                            aria-controls="collapse10">
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
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s"
                                    style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading11">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse11"
                                            aria-expanded="false" aria-controls="collapse11">
                                            Do you offer vehicles with automatic transmission?
                                        </button>
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse"
                                        aria-labelledby="heading11" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We offer a diverse fleet of vehicles, including economy cars, compact cars,
                                                SUVs, luxury cars, and more to suit various needs and preferences.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s"
                                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading12">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse12"
                                            aria-expanded="false" aria-controls="collapse12">
                                            Can I choose a specific vehicle model?
                                        </button>
                                    </h2>
                                    <div id="collapse12" class="accordion-collapse collapse"
                                        aria-labelledby="heading12" data-bs-parent="#accordion3">
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

        <div class="our-testimonial">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">testimonials
                            </h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                <div class="split-line" style="display: block; text-align: center; position: relative;">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            W</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            h</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            t</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
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
                                            c</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            u</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            t</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            m</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            r</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            r</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                    </div>
                                </div>
                                <div class="split-line" style="display: block; text-align: center; position: relative;">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            y</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            g</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            b</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            u</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            t</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            u</div>
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

                <div class="row">
                    <div class="col-lg-12">
                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                <div class="swiper-wrapper" data-cursor-text="Drag"
                                    id="swiper-wrapper-76746779e8e44012" aria-live="off"
                                    style="transition-duration: 0ms; transform: translate3d(-433.333px, 0px, 0px); transition-delay: 0ms;">
                                    <!-- Testimonial Slide Start -->

                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->

                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->

                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 4"
                                        data-swiper-slide-index="3" style="width: 403.333px; margin-right: 30px;">
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
                                                    <p>Renting a car from nova ride was a great decision. Not only did I get
                                                        a reliable and comfortable vehicle, but the prices were also very
                                                        competitive.</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('novaride/images/author-4.jpg') }}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>alis white</h3>
                                                    <p>project manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->
                                    <div class="swiper-slide swiper-slide-active"
                                        style="width: 403.333px; margin-right: 30px;" role="group"
                                        aria-label="1 / 4" data-swiper-slide-index="0">
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
                                                    <p>Renting a car from nova ride was a great decision. Not only did I get
                                                        a reliable and comfortable vehicle, but the prices were also very
                                                        competitive.</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('novaride/images/author-1.jpg') }}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>floyd miles</h3>
                                                    <p>project manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next"
                                        style="width: 403.333px; margin-right: 30px;" role="group"
                                        aria-label="2 / 4" data-swiper-slide-index="1">
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
                                                    <p>Renting a car from nova ride was a great decision. Not only did I get
                                                        a reliable and comfortable vehicle, but the prices were also very
                                                        competitive.</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('novaride/images/author-2.jpg') }}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>annette black</h3>
                                                    <p>project manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 403.333px; margin-right: 30px;"
                                        role="group" aria-label="3 / 4" data-swiper-slide-index="2">
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
                                                    <p>Renting a car from nova ride was a great decision. Not only did I get
                                                        a reliable and comfortable vehicle, but the prices were also very
                                                        competitive.</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('novaride/images/author-3.jpg') }}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>leslie alexander</h3>
                                                    <p>project manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-btn">
                                    <div class="testimonial-button-prev" tabindex="0" role="button"
                                        aria-label="Previous slide" aria-controls="swiper-wrapper-76746779e8e44012">
                                    </div>
                                    <div class="testimonial-button-next" tabindex="0" role="button"
                                        aria-label="Next slide" aria-controls="swiper-wrapper-76746779e8e44012"></div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
