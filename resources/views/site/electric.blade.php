@extends('site.layouts.app')
@section('content')

                <main id="mainContent" class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]" style="margin-top:60px">
                    <nav class="theme-dark md:overflow-x-auto h-[60px] whitespace-nowrap">
                        <div class="container h-full">
                            <div class="hidden-sm-down flex h-full items-center">
                                <div class="border-r pr-2-5 text-white"><span class="font-bold">Electric Vehicles</span></div>
                                <ul class="flex">
                                    <li class="ml-2-5 md:ml-3 mr-3 md:mr-4"><a class="no-underline" href="/new-cars-for-sale/listings/fuel-electric/">New EVs</a></li>
                                    <li class="mr-3 md:mr-4"><a class="no-underline" href="/used-cars-for-sale/listings/fuel-electric/">Used EVs</a></li>
                                    <li class="mr-3 md:mr-4"><a class="no-underline" href="/used-cars-for-sale/listings/tesla/">Used Teslas</a></li>
                                    <li class="mr-3 md:mr-4"><a class="no-underline" href="/electric/incentives/">EV Incentives</a></li>
                                    <li class="mr-3 md:mr-4"><a class="no-underline" href="/deals/fuel-electric/">EV Deals</a></li>
                                    <li class="mr-3 md:mr-4"><a class="no-underline" href="/best-cars-trucks/fuel-electric/">Best EVs</a></li>
                                    <li class="mr-3 md:mr-4"><a href="https://www.truecar.com/blog/electric-vehicle-buyers-guide/" target="_blank" class="no-underline">Buyer's Guide</a></li>
                                </ul>
                            </div>
                            <div class="hidden-md-up flex h-full items-center">
                                <div class="w-full dropdown"><button aria-expanded="false" data-toggle="dropdown" aria-haspopup="true" class="flex items-center text-white"><span class="font-bold">Electric Vehicles</span><span class="ml-1 flex items-center"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                <use href="#arrow_drop_down"></use>
                                            </svg></span></button>
                                    <ul tabindex="-1" role="menu" aria-hidden="true" class="px-3 pt-3 pb-2 mt-[19px] -ml-2-5 border-none rounded-none z-[1040] bg-dark w-[calc(100%+2.5rem)] dropdown-menu">
                                        <div class="row">
                                            <div class="col-4"><button type="button" tabindex="0" role="menuitem" class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"><a class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark" href="/new-cars-for-sale/listings/fuel-electric/">New EVs</a></button></div>
                                            <div class="col-4"><button type="button" tabindex="0" role="menuitem" class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"><a class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark" href="/used-cars-for-sale/listings/fuel-electric/">Used EVs</a></button></div>
                                            <div class="col-4"><button type="button" tabindex="0" role="menuitem" class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"><a class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark" href="/used-cars-for-sale/listings/tesla/">Used Teslas</a></button></div>
                                            <div class="col-4"><button type="button" tabindex="0" role="menuitem" class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"><a class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark" href="/electric/incentives/">EV Incentives</a></button></div>
                                            <div class="col-4"><button type="button" tabindex="0" role="menuitem" class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"><a class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark" href="/deals/fuel-electric/">EV Deals</a></button></div>
                                            <div class="col-4"><button type="button" tabindex="0" role="menuitem" class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"><a class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark" href="/best-cars-trucks/fuel-electric/">Best EVs</a></button></div>
                                            <div class="col-4"><button type="button" tabindex="0" role="menuitem" class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"><a href="https://www.truecar.com/blog/electric-vehicle-buyers-guide/" target="_blank" class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark">Buyer's Guide</a></button></div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <section>
                        <div class="relative mb-4">
                            <div class="bg-[image:var(--image-url-sm)] bg-cover bg-no-repeat text-center md:bg-[image:var(--image-url-md)] lg:bg-[image:var(--image-url-lg)] bg-center" style="--image-url-sm: url({{asset('assets/_next/static/images/ioniqMobile-6d52239612c983539f6834c01bb43b04.jpg')}}); --image-url-md: url({{asset('assets/_next/static/images/ioniqTablet-ea20ffba9ef367e3f170460d3d08081b.jpg')}}); --image-url-lg: url({{asset('assets/_next/static/images/ioniqDesktop-e44e9e91a55c8708046b20de5fd63350.jpg')}});">
                                <div class="container">
                                    <div class="grid grid-cols-12 md:pt-4">
                                        <div class="col-span-12 pb-[180px] md:col-span-4 md:bg-[#343434CC] md:px-2-5 md:pb-4 lg:px-4 lg:pb-5">
                                            <h1 class="heading-2 normal-case heading-md-3_5 md:normal-case heading-lg-3 lg:normal-case pb-3 pt-3 text-center text-white sm:pt-3 lg:pt-4"><span class="block">Electric Cars For</span>Every Lifestyle</h1><a data-ignore-contrast="true" data-loading="false" class="mb-2-5 flex btn btn-primary btn-md" href="/shop/new/?bodyStyle=Electrics&amp;filterType=body"><span class="btn-inner">Shop New</span></a><a data-ignore-contrast="true" data-loading="false" class="mb-2-5 flex btn btn-primary btn-md" href="/used-cars-for-sale/listings/fuel-electric/"><span class="btn-inner">Shop Used</span></a><a data-ignore-contrast="false" data-loading="false" class="btn-dark flex !bg-transparent btn btn-secondary btn-md" href="/electric/incentives/"><span class="btn-inner">EV Incentives</span></a>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 items-end pt-5">
                                        <div class="col-span-6 pl-3 pb-4 text-left text-white md:col-span-4 md:col-start-5 md:pb-5"><a href="/overview/hyundai/ioniq-6/">
                                                <div class="picture-container mb-2 block" style="padding-bottom: 0px; width: 148px; height: 60px;"><img class="picture-inner" src="{{asset('assets/_next/static/images/2023-ioniq-6-70cdac1bb51d904318e3d7606e80deeb.png')}}?auto=format&amp;h=60&amp;w=148" srcset="{{asset('assets/_next/static/images/2023-ioniq-6-70cdac1bb51d904318e3d7606e80deeb.png')}}?auto=format&amp;h=60&amp;w=148 1x, {{asset('assets/_next/static/images/2023-ioniq-6-70cdac1bb51d904318e3d7606e80deeb.png')}}?auto=format&amp;h=120&amp;w=296 2x" alt="IONIQ 6"></div>
                                            </a>
                                            <p class="mb-2 hidden text-left lg:block">The streamlined silhouette reveals a balance of clean lines and sensuous curves. Over 700 pixel LED lights brilliantly enhance both design and emotion.</p><a class="text-left text-white hover:text-[#c2c2c2]" href="/overview/hyundai/ioniq-6/">Learn More</a>
                                        </div>
                                        <div class="col-span-6 flex items-end justify-end pb-4 md:col-span-4 md:pb-5">
                                            <div class="picture-container hidden md:block" style="padding-bottom: 0px; width: 85px; height: 50px;"><img class="picture-inner" src="{{asset('assets/_next/static/images/HyundaiLogo-d3ba55e1cb5e664951258fef8018196d.jpg')}}?auto=format&amp;h=50&amp;w=85" srcset="{{asset('assets/_next/static/images/HyundaiLogo-d3ba55e1cb5e664951258fef8018196d.jpg')}}?auto=format&amp;h=50&amp;w=85 1x, {{asset('assets/_next/static/images/HyundaiLogo-d3ba55e1cb5e664951258fef8018196d.jpg')}}?auto=format&amp;h=100&amp;w=170 2x" alt="Hyundai"></div>
                                            <div class="picture-container md:hidden" style="padding-bottom: 0px; width: 52px; height: 31px;"><img class="picture-inner" src="{{asset('assets/_next/static/images/HyundaiLogo-d3ba55e1cb5e664951258fef8018196d.jpg')}}?auto=format&amp;h=31&amp;w=52" srcset="{{asset('assets/_next/static/images/HyundaiLogo-d3ba55e1cb5e664951258fef8018196d.jpg')}}?auto=format&amp;h=31&amp;w=52 1x, {{asset('assets/_next/static/images/HyundaiLogo-d3ba55e1cb5e664951258fef8018196d.jpg')}}?auto=format&amp;h=62&amp;w=104 2x" alt="Hyundai"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="sticky top-0 sticky-wrapper-zindex bg-white navigation-header" data-test="stickyWrapper">
                        <div class="sticky-wrapper-waypoint"><span style="font-size: 0px;"></span></div>
                        <div data-test="stickyWrapperChildren" class="">
                            <div class="flex justify-center" role="navigation" aria-label="In Page">
                                <div class="container">
                                    <div class="hidden"></div><a href="#" class="navigation-arrow navigation-arrow-prev hidden" aria-label="Previous"><span class="navigation-arrow-inner"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 16px; height: 16px; stroke-width: 1px;">
                                                <use href="#keyboard_arrow_right"></use>
                                            </svg></span></a>
                                    <ul class="tab-bar tab-bar-block tab-bar-scrollable navigation-bar lg:justify-center md:justify-center justify-start">
                                        <li class="w-full navigation-tab-item"><a href="#best-evs" aria-current="page" aria-disabled="false" class="w-full inline-block tab tab-active tab-navigation-link" data-test="navigationTab" data-test-item="best-evs" id="best-evs-tabitem"><span class="tab-text">Best EVs</span><span class="tab-bottom-border"></span></a></li>
                                        <li class="w-full navigation-tab-item"><a href="#shopping" aria-current="false" aria-disabled="false" class="w-full inline-block tab tab-navigation-link" data-test="navigationTab" data-test-item="shopping" id="shopping-tabitem"><span class="tab-text">Shopping</span><span class="tab-bottom-border"></span></a></li>
                                        <li class="w-full navigation-tab-item"><a href="#ranges" aria-current="false" aria-disabled="false" class="w-full inline-block tab tab-navigation-link" data-test="navigationTab" data-test-item="ranges" id="ranges-tabitem"><span class="tab-text">Ranges</span><span class="tab-bottom-border"></span></a></li>
                                        <li class="w-full navigation-tab-item"><a href="#charging" aria-current="false" aria-disabled="false" class="w-full inline-block tab tab-navigation-link" data-test="navigationTab" data-test-item="charging" id="charging-tabitem"><span class="tab-text">Charging</span><span class="tab-bottom-border"></span></a></li>
                                        <li class="w-full navigation-tab-item"><a href="#why-evs" aria-current="false" aria-disabled="false" class="w-full inline-block tab tab-navigation-link" data-test="navigationTab" data-test-item="why-evs" id="why-evs-tabitem"><span class="tab-text">Why EVs?</span><span class="tab-bottom-border"></span></a></li>
                                    </ul>
                                    <div class="hidden"></div><a href="#shopping" class="navigation-arrow navigation-arrow-next hidden" aria-label="Next"><span class="navigation-arrow-inner"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 16px; height: 16px; stroke-width: 1px;">
                                                <use href="#keyboard_arrow_right"></use>
                                            </svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div id="best-evs" tabindex="-1" class="navigation-section">
                            <div class="pt-4 md:pt-5">
                                <section class="pb-5 md:pb-6">
                                    <div class="container container-max-width-1">
                                        <h2 class="heading-3 normal-case mb-1 text-center" data-test="topRankedElectric">Top Ranked Electric&nbsp;Vehicles</h2>
                                        <p class="mb-3 text-center">Start your search with the best EVs in each category.</p>
                                        <div class="row row-card mb-[-15px] md:mb-[-20px]">
                                            <div class="mb-2-5 px-2 sm:mb-3 col-sm-6 col-md-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] flex-row max-sm:bg-[#f8f8f8] sm:flex-col" aria-label="Best Electric Vehicles" href="/best-cars-trucks/fuel-electric/">
                                                    <div class="card-image mx-auto flex items-center py-2-5 pl-2 pr-2-5 sm:pb-0 sm:pt-3 sm:pl-0 sm:pr-0 w-[34%] max-sm:h-[100%] sm:w-[var(--width)]" style="--width: 50%;">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img class="picture-block picture-svg" src="assets/_next/static/images/BestEV-2ac663d70aa64c26d8323b9a278df2a1.svg" alt="" role="presentation"></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content hidden-sm-up flex h-full justify-center px-0 py-0">
                                                        <h3 class="heading-4 normal-case w-full sm:text-center">Best Electric Vehicles</h3>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content hidden-xs-down flex flex-col justify-end" aria-hidden="true">
                                                        <h3 class="heading-4 normal-case w-full sm:text-center">Best Electric Vehicles</h3>
                                                    </div>
                                                </a></div>
                                            <div class="mb-2-5 px-2 sm:mb-3 col-sm-6 col-md-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] flex-row max-sm:bg-[#f8f8f8] sm:flex-col" aria-label="Best Electric SUVs" href="/best-cars-trucks/suvs/fuel-electric/">
                                                    <div class="card-image mx-auto flex items-center py-2-5 pl-2 pr-2-5 sm:pb-0 sm:pt-3 sm:pl-0 sm:pr-0 w-[34%] max-sm:h-[100%] sm:w-[var(--width)]" style="--width: 50%;">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img class="picture-block picture-svg" src="assets/_next/static/images/BestSUV-b1bb70d2ae8e880c9453c563da076d10.svg" alt="" role="presentation"></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content hidden-sm-up flex h-full justify-center px-0 py-0">
                                                        <h3 class="heading-4 normal-case w-full sm:text-center">Best Electric SUVs</h3>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content hidden-xs-down flex flex-col justify-end" aria-hidden="true">
                                                        <h3 class="heading-4 normal-case w-full sm:text-center">Best Electric SUVs</h3>
                                                    </div>
                                                </a></div>
                                            <div class="mb-2-5 px-2 sm:mb-3 col-sm-6 col-md-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] flex-row max-sm:bg-[#f8f8f8] sm:flex-col" aria-label="Best Luxury EVs" href="/best-cars-trucks/fuel-electric/luxury/">
                                                    <div class="card-image mx-auto flex items-center py-2-5 pl-2 pr-2-5 sm:pb-0 sm:pt-3 sm:pl-0 sm:pr-0 w-[34%] max-sm:h-[100%] sm:w-[var(--width)]" style="--width: 50%;">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img class="picture-block picture-svg" src="assets/_next/static/images/BestLUX-8d6701cf220fc28226acbf9584bdc329.svg" alt="" role="presentation"></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content hidden-sm-up flex h-full justify-center px-0 py-0">
                                                        <h3 class="heading-4 normal-case w-full sm:text-center">Best Luxury EVs</h3>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content hidden-xs-down flex flex-col justify-end" aria-hidden="true">
                                                        <h3 class="heading-4 normal-case w-full sm:text-center">Best Luxury EVs</h3>
                                                    </div>
                                                </a></div>
                                            <div class="mb-2-5 px-2 sm:mb-3 col-sm-6 col-md-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] flex-row max-sm:bg-[#f8f8f8] sm:flex-col" aria-label="Best AWD EVs" href="/best-cars-trucks/fuel-electric/all-wheel-drive/">
                                                    <div class="card-image mx-auto flex items-center py-2-5 pl-2 pr-2-5 sm:pb-0 sm:pt-3 sm:pl-0 sm:pr-0 w-[34%] max-sm:h-[100%] sm:w-[var(--width)]" style="--width: 50%;">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img class="picture-block picture-svg" src="assets/_next/static/images/BestAWD-d518e9ecc89632d4e86445c249635e3a.svg" alt="" role="presentation"></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content hidden-sm-up flex h-full justify-center px-0 py-0">
                                                        <h3 class="heading-4 normal-case w-full sm:text-center">Best AWD EVs</h3>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content hidden-xs-down flex flex-col justify-end" aria-hidden="true">
                                                        <h3 class="heading-4 normal-case w-full sm:text-center">Best AWD EVs</h3>
                                                    </div>
                                                </a></div>
                                            <div class="mb-2-5 px-2 sm:mb-3 col-sm-6 col-md-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] flex-row max-sm:bg-[#f8f8f8] sm:flex-col" aria-label="Top EVs by Range" href="/best-cars-trucks/fuel-electric/by-range/">
                                                    <div class="card-image mx-auto flex items-center py-2-5 pl-2 pr-2-5 sm:pb-0 sm:pt-3 sm:pl-0 sm:pr-0 w-[34%] max-sm:h-[100%] sm:w-[var(--width)]" style="--width: 56%;">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 41.6667%;"><img class="picture-block picture-svg" src="assets/_next/static/images/TopRange-5b3635f1e42ef0b6f46817a262d61b81.svg" alt="" role="presentation"></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content hidden-sm-up flex h-full justify-center px-0 py-0">
                                                        <h3 class="heading-4 normal-case w-full sm:text-center">Top EVs by&nbsp;Range</h3>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content hidden-xs-down flex flex-col justify-end" aria-hidden="true">
                                                        <h3 class="heading-4 normal-case w-full sm:text-center">Top EVs by&nbsp;Range</h3>
                                                    </div>
                                                </a></div>
                                            <div class="mb-2-5 px-2 sm:mb-3 col-sm-6 col-md-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] flex-row max-sm:bg-[#f8f8f8] sm:flex-col" aria-label="Cheapest EVs" href="/best-cars-trucks/fuel-electric/cheapest/">
                                                    <div class="card-image mx-auto flex items-center py-2-5 pl-2 pr-2-5 sm:pb-0 sm:pt-3 sm:pl-0 sm:pr-0 w-[34%] max-sm:h-[100%] sm:w-[var(--width)]" style="--width: 66%;">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 36.3636%;"><img class="picture-block picture-svg" src="assets/_next/static/images/LowestPricedEV-db3fb4c26e0c518be8d24369750bbfbf.svg" alt="" role="presentation"></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content hidden-sm-up flex h-full justify-center px-0 py-0">
                                                        <h3 class="heading-4 normal-case w-full sm:text-center">Cheapest EVs</h3>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content hidden-xs-down flex flex-col justify-end" aria-hidden="true">
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
                                <section class="bg-light pt-4 pb-5 md:pt-5 md:pb-6">
                                    <div class="container mx-auto max-w-[650px]">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="row">
                                                    <div class="col-6 offset-3 col-sm-12 offset-sm-0">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 100%;"><img class="picture-block" sizes="145px" src="assets/_next/static/images/BuyingGuide-33ad590b20665be0cdde2b3a6b510654.png?auto=format&amp;h=160&amp;w=160" srcset="assets/_next/static/images/BuyingGuide-33ad590b20665be0cdde2b3a6b510654.png?auto=format&amp;h=160&amp;w=160 160w, assets/_next/static/images/BuyingGuide-33ad590b20665be0cdde2b3a6b510654.png?auto=format&amp;h=240&amp;w=240 240w" role="presentation" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:pl-4 col-sm-9">
                                                <h2 class="heading-3 normal-case my-3 text-center sm:mt-0 sm:mb-2 sm:text-left">Is an EV Right For&nbsp;You?</h2>
                                                <p>Thinking about buying or leasing an electric vehicle?</p>
                                                <p class="mb-3">Here's everything you need to know.</p>
                                                <div class="text-center sm:text-left"><a data-ignore-contrast="false" data-loading="false" href="https://www.truecar.com/blog/electric-vehicle-buyers-guide/" target="_blank" rel="noopener" class="btn btn-secondary btn-md"><span class="btn-inner">EV Buying Guide</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="pt-4 pb-5 md:pt-5 md:pb-6">
                                    <div class="container container-max-width-1">
                                        <h2 class="heading-3 normal-case mb-1 text-center">New Electric Vehicles</h2>
                                        <p class="mb-3 text-center sm:mb-0 lg:mb-3">Learn about new EVs currently on the market.</p>
                                        <div class="row row-card mt-4">
                                            <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative" href="/overview/acura/zdx/">
                                                    <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img class="picture-block" sizes="155px" src="https://static.tcimg.net/vehicles/primary/c87f8a6e361a18d9/2024-Acura-ZDX-silver-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160" srcset="https://static.tcimg.net/vehicles/primary/c87f8a6e361a18d9/2024-Acura-ZDX-silver-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/c87f8a6e361a18d9/2024-Acura-ZDX-silver-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w" loading="lazy" role="presentation" alt=""></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content mt-0 items-center">
                                                        <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">Acura<br class="hidden-sm-up"> ZDX</h3>
                                                        <div class="hidden-sm-down text-center">
                                                            <p>Starting MSRP</p>
                                                            <p class="font-bold">$65,850</p>
                                                        </div>
                                                        <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">MSRP <span class="font-bold">$65,850</span></p>
                                                    </div>
                                                </a></div>
                                            <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative" href="/overview/audi/q4-e-tron/">
                                                    <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img class="picture-block" sizes="155px" src="https://static.tcimg.net/vehicles/primary/d18efdf8bdf7784c/2024-Audi-Q4_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160" srcset="https://static.tcimg.net/vehicles/primary/d18efdf8bdf7784c/2024-Audi-Q4_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/d18efdf8bdf7784c/2024-Audi-Q4_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w" loading="lazy" role="presentation" alt=""></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content mt-0 items-center">
                                                        <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">Audi<br class="hidden-sm-up"> Q4 e-tron</h3>
                                                        <div class="hidden-sm-down text-center">
                                                            <p>Starting MSRP</p>
                                                            <p class="font-bold">$50,995</p>
                                                        </div>
                                                        <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">MSRP <span class="font-bold">$50,995</span></p>
                                                    </div>
                                                </a></div>
                                            <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative" href="/overview/audi/q8-e-tron/">
                                                    <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img class="picture-block" sizes="155px" src="https://static.tcimg.net/vehicles/primary/6d5fe302166e0bab/2024-Audi-Q8_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160" srcset="https://static.tcimg.net/vehicles/primary/6d5fe302166e0bab/2024-Audi-Q8_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/6d5fe302166e0bab/2024-Audi-Q8_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w" loading="lazy" role="presentation" alt=""></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content mt-0 items-center">
                                                        <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">Audi<br class="hidden-sm-up"> Q8 e-tron</h3>
                                                        <div class="hidden-sm-down text-center">
                                                            <p>Starting MSRP</p>
                                                            <p class="font-bold">$75,595</p>
                                                        </div>
                                                        <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">MSRP <span class="font-bold">$75,595</span></p>
                                                    </div>
                                                </a></div>
                                            <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative" href="/overview/audi/rs-e-tron-gt/">
                                                    <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img class="picture-block" sizes="155px" src="https://static.tcimg.net/vehicles/primary/27c3a4ba1b4a06d4/2024-Audi-RS_e-tron_GT-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160" srcset="https://static.tcimg.net/vehicles/primary/27c3a4ba1b4a06d4/2024-Audi-RS_e-tron_GT-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/27c3a4ba1b4a06d4/2024-Audi-RS_e-tron_GT-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w" loading="lazy" role="presentation" alt=""></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content mt-0 items-center">
                                                        <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">Audi<br class="hidden-sm-up"> RS e-tron GT</h3>
                                                        <div class="hidden-sm-down text-center">
                                                            <p>Starting MSRP</p>
                                                            <p class="font-bold">$148,595</p>
                                                        </div>
                                                        <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">MSRP <span class="font-bold">$148,595</span></p>
                                                    </div>
                                                </a></div>
                                            <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative" href="/overview/audi/sq8-e-tron/">
                                                    <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img class="picture-block" sizes="155px" src="https://static.tcimg.net/vehicles/primary/a2c45113ea5644c8/2024-Audi-SQ8_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160" srcset="https://static.tcimg.net/vehicles/primary/a2c45113ea5644c8/2024-Audi-SQ8_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/a2c45113ea5644c8/2024-Audi-SQ8_e-tron-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w" loading="lazy" role="presentation" alt=""></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content mt-0 items-center">
                                                        <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">Audi<br class="hidden-sm-up"> SQ8 e-tron</h3>
                                                        <div class="hidden-sm-down text-center">
                                                            <p>Starting MSRP</p>
                                                            <p class="font-bold">$90,995</p>
                                                        </div>
                                                        <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">MSRP <span class="font-bold">$90,995</span></p>
                                                    </div>
                                                </a></div>
                                            <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative" href="/overview/audi/e-tron-gt/">
                                                    <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img class="picture-block" sizes="155px" src="https://static.tcimg.net/vehicles/primary/beae27501aa30fd0/2024-Audi-e-tron_GT-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160" srcset="https://static.tcimg.net/vehicles/primary/beae27501aa30fd0/2024-Audi-e-tron_GT-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/beae27501aa30fd0/2024-Audi-e-tron_GT-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w" loading="lazy" role="presentation" alt=""></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content mt-0 items-center">
                                                        <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">Audi<br class="hidden-sm-up"> e-tron GT</h3>
                                                        <div class="hidden-sm-down text-center">
                                                            <p>Starting MSRP</p>
                                                            <p class="font-bold">$107,995</p>
                                                        </div>
                                                        <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">MSRP <span class="font-bold">$107,995</span></p>
                                                    </div>
                                                </a></div>
                                            <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative" href="/overview/bmw/i4/">
                                                    <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img class="picture-block" sizes="155px" src="https://static.tcimg.net/vehicles/primary/6c4a201406824010/2025-BMW-i4-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160" srcset="https://static.tcimg.net/vehicles/primary/6c4a201406824010/2025-BMW-i4-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/6c4a201406824010/2025-BMW-i4-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w" loading="lazy" role="presentation" alt=""></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content mt-0 items-center">
                                                        <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">BMW<br class="hidden-sm-up"> i4</h3>
                                                        <div class="hidden-sm-down text-center">
                                                            <p>Starting MSRP</p>
                                                            <p class="font-bold">$53,975</p>
                                                        </div>
                                                        <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">MSRP <span class="font-bold">$53,975</span></p>
                                                    </div>
                                                </a></div>
                                            <div class="mt-4 mb-3 items-end px-2 sm:mt-6 md:mt-4 col-6 col-md-4 col-lg-3"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] relative" href="/overview/bmw/i5/">
                                                    <div class="card-image mt-[-19px] px-2 sm:mt-[-59px] md:mt-[-26px] md:px-4">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img class="picture-block" sizes="155px" src="https://static.tcimg.net/vehicles/primary/d488c988c9cdd085/2025-BMW-i5-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160" srcset="https://static.tcimg.net/vehicles/primary/d488c988c9cdd085/2025-BMW-i5-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=80&amp;w=160 160w, https://static.tcimg.net/vehicles/primary/d488c988c9cdd085/2025-BMW-i5-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w" loading="lazy" role="presentation" alt=""></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content mt-0 items-center">
                                                        <h3 class="heading-4 normal-case mb-1 grow text-center font-bold md:mb-2">BMW<br class="hidden-sm-up"> i5</h3>
                                                        <div class="hidden-sm-down text-center">
                                                            <p>Starting MSRP</p>
                                                            <p class="font-bold">$68,275</p>
                                                        </div>
                                                        <p class="hidden-md-up text-center text-sm sm:text-base" aria-hidden="true">MSRP <span class="font-bold">$68,275</span></p>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="text-center md:mt-2"><button type="button" class="link-button inline-flex items-center no-underline">See More EVs <svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
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
                                        <p class="mb-3 text-center">See how different electric cars could work with your driving habits.</p>
                                        <div class="grid grid-cols-1 gap-y-2-5"><a class="block no-underline hover:no-underline" href="/overview/chevrolet/silverado-ev/">
                                                <div class="w-full overflow-hidden rounded-full bg-[#d6e5e3]">
                                                    <div class="rounded-full bg-green-600 px-2-5 py-1 h-full flex justify-between text-white" style="width: 100%;"><span class="truncate">Chevrolet Silverado EV</span><span class="whitespace-nowrap pl-1">393-450 mi</span></div>
                                                </div>
                                            </a><a class="block no-underline hover:no-underline" href="/overview/hyundai/ioniq-6/">
                                                <div class="w-full overflow-hidden rounded-full bg-[#d6e5e3]">
                                                    <div class="rounded-full bg-green-600 px-2-5 py-1 h-full flex justify-between text-white" style="width: 80.1339%;"><span class="truncate">Hyundai IONIQ 6</span><span class="whitespace-nowrap pl-1">240-361 mi</span></div>
                                                </div>
                                            </a><a class="block no-underline hover:no-underline" href="/overview/mercedes-benz/eqs-sedan/">
                                                <div class="w-full overflow-hidden rounded-full bg-[#d6e5e3]">
                                                    <div class="rounded-full bg-green-600 px-2-5 py-1 h-full flex justify-between text-white" style="width: 78.125%;"><span class="truncate">Mercedes-Benz EQS Sedan</span><span class="whitespace-nowrap pl-1">277-352 mi</span></div>
                                                </div>
                                            </a><a class="block no-underline hover:no-underline" href="/overview/mercedes-benz/eqs-suv/">
                                                <div class="w-full overflow-hidden rounded-full bg-[#d6e5e3]">
                                                    <div class="rounded-full bg-green-600 px-2-5 py-1 h-full flex justify-between text-white" style="width: 75.2232%;"><span class="truncate">Mercedes-Benz EQS SUV</span><span class="whitespace-nowrap pl-1">285-339 mi</span></div>
                                                </div>
                                            </a><a class="block no-underline hover:no-underline" href="/overview/bmw/ix/">
                                                <div class="w-full overflow-hidden rounded-full bg-[#d6e5e3]">
                                                    <div class="rounded-full bg-green-600 px-2-5 py-1 h-full flex justify-between text-white" style="width: 71.875%;"><span class="truncate">BMW iX</span><span class="whitespace-nowrap pl-1">288-324 mi</span></div>
                                                </div>
                                            </a><a class="block no-underline hover:no-underline" href="/overview/chevrolet/blazer-ev/">
                                                <div class="w-full overflow-hidden rounded-full bg-[#d6e5e3]">
                                                    <div class="rounded-full bg-green-600 px-2-5 py-1 h-full flex justify-between text-white" style="width: 71.875%;"><span class="truncate">Chevrolet Blazer EV</span><span class="whitespace-nowrap pl-1">279-324 mi</span></div>
                                                </div>
                                            </a></div>
                                        <div class="mt-3 text-center md:mt-4"><button type="button" class="link-button inline-flex items-center no-underline hover:no-underline">See More EVs <svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                    <use href="#keyboard_arrow_down"></use>
                                                </svg></button></div>
                                    </div>
                                </section>
                                <section class="pt-4 pb-5 md:pt-5 md:pb-6">
                                    <div class="container container-max-width-1">
                                        <h2 class="heading-3 normal-case mb-1 text-center">EV Shopping Resources</h2>
                                        <p class="mb-3 text-center">Learn about incentives, rebates, and savings, and get EV shopping tips.</p>
                                        <div class="row w-full">
                                            <div class="px-2 col-lg-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] h-full" href="https://www.truecar.com/blog/electric-vehicle-tax-credits-and-rebates-explained/" target="_blank" rel="noopener">
                                                    <div class="card-image">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 56.25%;"><img class="picture-block rounded-t" sizes="289.984375px" src="assets/_next/static/images/TaxCredits-307896a2f364cc54e4ef5d997cbfcc10.png?auto=format&amp;fit=crop&amp;h=135&amp;w=240" srcset="assets/_next/static/images/TaxCredits-307896a2f364cc54e4ef5d997cbfcc10.png?auto=format&amp;fit=crop&amp;h=135&amp;w=240 240w, assets/_next/static/images/TaxCredits-307896a2f364cc54e4ef5d997cbfcc10.png?auto=format&amp;fit=crop&amp;h=315&amp;w=560 560w" loading="lazy" alt="" role="presentation"></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content">
                                                        <h3 class="heading-5 normal-case mb-1 grow font-bold">Electric Vehicle Tax Credits and Rebates&nbsp;Explained</h3>
                                                        <p class="w-full overflow-hidden text-ellipsis text-sm line-clamp-2">From spending less on gas to reducing your carbon footprint, there are plenty of great…</p>
                                                    </div>
                                                </a></div>
                                            <div class="px-2 col-lg-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] h-full" href="https://www.truecar.com/blog/the-pros-and-cons-of-electric-vehicles/" target="_blank" rel="noopener">
                                                    <div class="card-image">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 56.25%;"><img class="picture-block rounded-t" sizes="289.984375px" src="assets/_next/static/images/ProsCons-505407ce037fde625580ffb9bd1c5ad5.png?auto=format&amp;fit=crop&amp;h=135&amp;w=240" srcset="assets/_next/static/images/ProsCons-505407ce037fde625580ffb9bd1c5ad5.png?auto=format&amp;fit=crop&amp;h=135&amp;w=240 240w, assets/_next/static/images/ProsCons-505407ce037fde625580ffb9bd1c5ad5.png?auto=format&amp;fit=crop&amp;h=315&amp;w=560 560w" loading="lazy" alt="" role="presentation"></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content">
                                                        <h3 class="heading-5 normal-case mb-1 grow font-bold">The Pros and Cons of Electric&nbsp;Vehicles</h3>
                                                        <p class="w-full overflow-hidden text-ellipsis text-sm line-clamp-2">Electric vehicles represent the latest and greatest in automotive advancements, and they’re getting…</p>
                                                    </div>
                                                </a></div>
                                            <div class="px-2 col-lg-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] h-full" href="https://www.truecar.com/blog/how-electric-vehicles-save-you-money/" target="_blank" rel="noopener">
                                                    <div class="card-image">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 56.25%;"><img class="picture-block rounded-t" sizes="289.984375px" src="assets/_next/static/images/MoneySaving-c6d5a0f2dbb3054d888d4445831e1ab2.png?auto=format&amp;fit=crop&amp;h=135&amp;w=240" srcset="assets/_next/static/images/MoneySaving-c6d5a0f2dbb3054d888d4445831e1ab2.png?auto=format&amp;fit=crop&amp;h=135&amp;w=240 240w, assets/_next/static/images/MoneySaving-c6d5a0f2dbb3054d888d4445831e1ab2.png?auto=format&amp;fit=crop&amp;h=315&amp;w=560 560w" loading="lazy" alt="" role="presentation"></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content">
                                                        <h3 class="heading-5 normal-case mb-1 grow font-bold">How Electric Vehicles Save You&nbsp;Money</h3>
                                                        <p class="w-full overflow-hidden text-ellipsis text-sm line-clamp-2">As more automakers diversify their lineups with zero emissions vehicles, the future…</p>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div id="charging" tabindex="-1" class="navigation-section">
                            <div class="">
                                <section class="bg-light pt-4 pb-5 md:pt-5 md:pb-6">
                                    <div class="container container-max-width-1">
                                        <div class="text-center">
                                            <h2 class="heading-3 normal-case mb-1">EV Charging Basics</h2>
                                            <p class="mb-3 md:mb-4">We take you through the three most popular ways to charge an electric vehicle.</p>
                                        </div>
                                        <div data-reach-tabs="" data-orientation="horizontal">
                                            <div role="tablist" aria-orientation="horizontal" class="tab-bar tab-bar-block tab-bar-scrollable" data-reach-tab-list=""><button aria-controls="tabs--1--panel--0" aria-selected="true" role="tab" tabindex="0" class="tab border-b border-solid border-b-[#e5e5e5]" data-reach-tab="" data-orientation="horizontal" id="tabs--1--tab--0" type="button" data-selected=""><span class="tab-text">Level 1</span><span class="tab-bottom-border"></span></button><button aria-controls="tabs--1--panel--1" aria-selected="false" role="tab" tabindex="-1" class="tab border-b border-solid border-b-[#e5e5e5]" data-reach-tab="" data-orientation="horizontal" id="tabs--1--tab--1" type="button"><span class="tab-text">Level 2</span><span class="tab-bottom-border"></span></button><button aria-controls="tabs--1--panel--2" aria-selected="false" role="tab" tabindex="-1" class="tab border-b border-solid border-b-[#e5e5e5]" data-reach-tab="" data-orientation="horizontal" id="tabs--1--tab--2" type="button"><span class="tab-text">DC Fast Charger</span><span class="tab-bottom-border"></span></button></div>
                                            <div data-reach-tab-panels="">
                                                <div aria-labelledby="tabs--1--tab--0" role="tabpanel" tabindex="0" class="pt-3 md:pt-4" data-reach-tab-panel="" id="tabs--1--panel--0">
                                                    <div class="row">
                                                        <div class="pb-3 md:pr-2 md:pb-0 col-md-6">
                                                            <div class="picture-container picture-container-block mb-2-5 flex justify-center overflow-hidden md:mb-3" style="padding-bottom: 40.9877%;"><img class="picture-block picture-svg max-lg:w-[125%]" src="assets/_next/static/images/ChargingLevel1-0f1a040be291e31de3cd0f47c9252a9c.svg" alt="" role="presentation"></div>
                                                            <div class="mb-1 ml-2">Level 1</div>
                                                            <div class="w-full overflow-hidden rounded-[25px] bg-[#f2f2f2]">
                                                                <div class="rounded-[25px] bg-[#03806d] px-2 py-1 h-full inline-flex text-white"><span>5 miles/hr</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="md:pl-2 col-md-6">
                                                            <h3 class="heading-4 normal-case mb-1 md:mb-2">Level 1: The Household Outlet</h3>
                                                            <p class="mb-1 md:mb-2">Today, electric vehicles usually come with the ability to charge at home on the standard household current of 120 volts. This is known as Level 1 charging. It may take up to 30 hours to charge your EV using Level 1.</p>
                                                            <p class="text-sm"><span class="font-bold">Power Level:</span> 120v</p>
                                                            <p class="text-sm"><span class="font-bold">Locations:</span> Residential</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div aria-labelledby="tabs--1--tab--1" role="tabpanel" tabindex="-1" class="pt-3 md:pt-4" data-reach-tab-panel="" id="tabs--1--panel--1" hidden="">
                                                    <div class="row">
                                                        <div class="pb-3 md:pr-2 md:pb-0 col-md-6">
                                                            <div class="picture-container picture-container-block mb-2-5 flex justify-center overflow-hidden md:mb-3" style="padding-bottom: 40.9877%;"><img class="picture-block picture-svg max-lg:w-[125%]" src="assets/_next/static/images/ChargingLevel2-9a6c6f321eb302958786a6f928a13bf2.svg" alt="" role="presentation"></div>
                                                            <div class="mb-1 ml-2">Level 2</div>
                                                            <div class="w-full overflow-hidden rounded-[25px] bg-[#f2f2f2]">
                                                                <div class="rounded-[25px] bg-[#03806d] px-2 py-1 h-full inline-flex justify-end text-white" style="width: 40%;"><span>20 miles/hr</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="md:pl-2 col-md-6">
                                                            <h3 class="heading-4 normal-case mb-1 md:mb-2">Level 2: The 240v Outlet</h3>
                                                            <p class="mb-1 md:mb-2">To charge on Level 2, you will need a 240V outlet. You'll also need to purchase a separate charger; the charger that comes with your EV purchase is usually a Level 1. Charging on Level 2 will take 6-12 hours, depending on your battery size.</p>
                                                            <p class="text-sm"><span class="font-bold">Power Level:</span> 240v</p>
                                                            <p class="text-sm"><span class="font-bold">Locations:</span> Residential, Business</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div aria-labelledby="tabs--1--tab--2" role="tabpanel" tabindex="-1" class="pt-3 md:pt-4" data-reach-tab-panel="" id="tabs--1--panel--2" hidden="">
                                                    <div class="row">
                                                        <div class="pb-3 md:pr-2 md:pb-0 col-md-6">
                                                            <div class="picture-container picture-container-block mb-2-5 flex justify-center overflow-hidden md:mb-3" style="padding-bottom: 40.9877%;"><img class="picture-block picture-svg max-lg:w-[125%]" src="assets/_next/static/images/ChargingDCFast-9485084d5b5b95afe59e22b731f507cb.svg" alt="" role="presentation"></div>
                                                            <div class="mb-1 ml-2">DC Fast Charger</div>
                                                            <div class="w-full overflow-hidden rounded-[25px] bg-[#f2f2f2]">
                                                                <div class="rounded-[25px] bg-[#03806d] px-2 py-1 h-full inline-flex justify-end text-white" style="width: 100%;"><span>120 miles/30min</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="md:pl-2 col-md-6">
                                                            <h3 class="heading-4 normal-case mb-1 md:mb-2">Level 3: DC Fast Charging</h3>
                                                            <p class="mb-1 md:mb-2">This type of charging can be found at public charging stations, which are located all over the country. DC Fast Charging can usually recharge your EV to 80% in around 30 minutes.</p>
                                                            <p class="text-sm"><span class="font-bold">Power Level:</span> 480v</p>
                                                            <p class="text-sm"><span class="font-bold">Locations:</span> Business</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="pt-4 pb-5 md:pt-5 md:pb-6">
                                    <div class="container container-max-width-1">
                                        <h2 class="heading-3 normal-case mb-1 text-center">More Charging Resources</h2>
                                        <p class="mb-3 text-center">Get all your EV charging questions answered.</p>
                                        <div class="row w-full">
                                            <div class="px-2 col-lg-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] h-full" href="https://www.truecar.com/blog/how-long-do-electric-car-batteries-last/" target="_blank" rel="noopener">
                                                    <div class="card-image">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 56.25%;"><img class="picture-block rounded-t" sizes="289.984375px" src="assets/_next/static/images/HowLongLast-fb841080a662b7531c573012823ed66b.png?auto=format&amp;fit=crop&amp;h=135&amp;w=240" srcset="assets/_next/static/images/HowLongLast-fb841080a662b7531c573012823ed66b.png?auto=format&amp;fit=crop&amp;h=135&amp;w=240 240w, assets/_next/static/images/HowLongLast-fb841080a662b7531c573012823ed66b.png?auto=format&amp;fit=crop&amp;h=315&amp;w=560 560w" loading="lazy" alt="" role="presentation"></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content">
                                                        <h3 class="heading-5 normal-case mb-1 grow font-bold">How Long Do Electric Car Batteries&nbsp;Last?</h3>
                                                        <p class="w-full overflow-hidden text-ellipsis text-sm line-clamp-2">Electric vehicles have come a long way. Automakers are offering more affordable electric cars with plenty of range…</p>
                                                    </div>
                                                </a></div>
                                            <div class="px-2 col-lg-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] h-full" href="https://www.truecar.com/blog/how-much-does-it-cost-to-charge-an-electric-vehicle/" target="_blank" rel="noopener">
                                                    <div class="card-image">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 56.25%;"><img class="picture-block rounded-t" sizes="289.984375px" src="assets/_next/static/images/CostToCharge-a2150aa8b6da8d8b6df8b36bf328812b.png?auto=format&amp;fit=crop&amp;h=135&amp;w=240" srcset="assets/_next/static/images/CostToCharge-a2150aa8b6da8d8b6df8b36bf328812b.png?auto=format&amp;fit=crop&amp;h=135&amp;w=240 240w, assets/_next/static/images/CostToCharge-a2150aa8b6da8d8b6df8b36bf328812b.png?auto=format&amp;fit=crop&amp;h=315&amp;w=560 560w" loading="lazy" alt="" role="presentation"></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content">
                                                        <h3 class="heading-5 normal-case mb-1 grow font-bold">How Much Does it Cost to Charge an Electric&nbsp;Vehicle?</h3>
                                                        <p class="w-full overflow-hidden text-ellipsis text-sm line-clamp-2">Before you commit to an electrified lifestyle, you’ll probably want to know what it costs to drive. Specifically, how much…</p>
                                                    </div>
                                                </a></div>
                                            <div class="px-2 col-lg-4"><a class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] h-full" href="https://www.truecar.com/blog/how-long-does-it-take-to-charge-an-electric-vehicle/" target="_blank" rel="noopener">
                                                    <div class="card-image">
                                                        <div class="picture-container picture-container-block" style="padding-bottom: 56.25%;"><img class="picture-block rounded-t" sizes="289.984375px" src="assets/_next/static/images/HowLongToCharge-19b6802f7454eae06dc45100ed87efe9.png?auto=format&amp;fit=crop&amp;h=135&amp;w=240" srcset="assets/_next/static/images/HowLongToCharge-19b6802f7454eae06dc45100ed87efe9.png?auto=format&amp;fit=crop&amp;h=135&amp;w=240 240w, assets/_next/static/images/HowLongToCharge-19b6802f7454eae06dc45100ed87efe9.png?auto=format&amp;fit=crop&amp;h=315&amp;w=560 560w" loading="lazy" alt="" role="presentation"></div>
                                                    </div>
                                                    <div data-test="cardContent" class="card-content">
                                                        <h3 class="heading-5 normal-case mb-1 grow font-bold">How Long Does it Take to Charge an Electric&nbsp;Vehicle?</h3>
                                                        <p class="w-full overflow-hidden text-ellipsis text-sm line-clamp-2">You might know how much it costs to charge an electric vehicle, but what about the time it takes to fully charge? And what…</p>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div id="why-evs" tabindex="-1" class="navigation-section">
                            <div class="">
                                <div class="container container-max-width-1 flex justify-center pt-2">
                                    <div class="picture-container text-center" style="padding-bottom: 0px; width: 250px; height: 184px;"><img class="picture-inner picture-svg" src="assets/_next/static/images/WhyDriveEV-61c3ade5d177c00f335993d99770e0bd.svg" alt="" role="presentation"></div>
                                </div>
                                <div class="bg-light pt-4 pb-5 md:pt-5 md:pb-6">
                                    <div class="container container-max-width-1">
                                        <h2 class="heading-3 normal-case mb-3 text-center">Why Drive an Electric&nbsp;Vehicle?</h2>
                                        <p class="mb-3">Electric vehicles allow you to charge at home and leave the house with a full battery every morning. With the average American commute currently at around 30 miles round trip, you’ll rarely have to worry about range, thanks to the large batteries in modern EVs like the Volkswagen ID.4 or the Ford Mustang Mach-E. Combine that with a growing number of public charging stations and the lower price of electric charging in comparison to filling a gas tank, and buying an EV can be a smart financial decision. Driving an EV can also be fun and effortless, as EVs have instant torque due to their electric motors and lower centers of gravity.</p>
                                        <p class="mb-3">Another perk of electric vehicles is their high safety ratings. EVs have often been rated as some of the safest vehicles on the road, thanks to a larger crumple zone and lack of an engine bay. In addition, electric vehicles often have the best smart car technology, with advanced driving and safety features—all without the smell or sound of exhaust.</p>
                                        <p class="mb-3">If you are considering buying a used EV, you’ll want to check the estimated range available. Current EV batteries will degrade naturally over time, as the amount of quick charging and full charging cycles will have an impact on usable battery capacity. Regardless, most EVs have an original warranty on their batteries that lasts well beyond the bumper-to-bumper coverage. For example, Nissan, Chevy, and BMW have eight-year, 100,000+ mile battery warranties. With this peace of mind, shop The car.ai collection of popular EVs today, including the Audi e-tron, Hyundai Kona EV, Nissan Leaf, and Chevrolet Bolt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><span style="font-size: 0px;"></span>
                    <section class="pt-4 pb-5 md:pt-5 md:pb-6">
                        <div class="container container-max-width-1">
                            <h2 class="heading-3 normal-case mb-3 text-center">Electric Vehicle FAQs</h2>
                            <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                    <div class="heading-4 normal-case w-full px-3 py-3">
                                        <h3 class="heading-4 normal-case">Are electric vehicles better for the&nbsp;environment?</h3>
                                    </div><span class="ml-3 whitespace-nowrap">
                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></div>
                                    </span>
                                </button>
                                <div class="expandable-list-item-collapse border-t collapse">
                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                        <div class="whitespace-pre-line">The eco-friendliness of electric vehicles depends on a few factors, including how the car is produced, the components used in its construction, and the energy powering the car on a day-to-day basis. For example, states like Washington have a significant portion of their power coming from renewable energy. Others, such as Wyoming, have very little. However, if you use solar panels to power your car, then the carbon footprint is significantly reduced.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                    <div class="heading-4 normal-case w-full px-3 py-3">
                                        <h3 class="heading-4 normal-case">How long does it take to charge an electric&nbsp;vehicle?</h3>
                                    </div><span class="ml-3 whitespace-nowrap">
                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></div>
                                    </span>
                                </button>
                                <div class="expandable-list-item-collapse border-t collapse">
                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                        <div class="whitespace-pre-line">The rate at which the car can replenish its charge depends on the manufacturer's architecture and the type of outlet. If you are using a standard 120-Volt outlet (known as Level 1), it could take up to 50 hours to charge a 250-mile range EV. A 240-Volt outlet (Level 2) can fully charge your vehicle in closer to 6-12 hours. Lastly, DC Fast Charging can charge an EV to 80% in around 30 minutes.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                    <div class="heading-4 normal-case w-full px-3 py-3">
                                        <h3 class="heading-4 normal-case">What is an electric&nbsp;vehicle?</h3>
                                    </div><span class="ml-3 whitespace-nowrap">
                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></div>
                                    </span>
                                </button>
                                <div class="expandable-list-item-collapse border-t collapse">
                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                        <div class="whitespace-pre-line">An electric vehicle (or EV) is a car that uses only electricity for propulsion. Instead of having a typical engine that relies on pistons and the combustion of a fuel source like gasoline to create energy sent through a drivetrain to move a vehicle forward, EVs use stored electricity from a large battery pack routed through electric motors that spin the wheels. There are various types of motors that use electricity differently, but the result is the same.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                    <div class="heading-4 normal-case w-full px-3 py-3">
                                        <h3 class="heading-4 normal-case">Are electric vehicle charging stations&nbsp;free?</h3>
                                    </div><span class="ml-3 whitespace-nowrap">
                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></div>
                                    </span>
                                </button>
                                <div class="expandable-list-item-collapse border-t collapse">
                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                        <div class="whitespace-pre-line">There are free charging stations available throughout the US. Most EV charging stations can be found at hotels, large shopping areas, and parking garages next to office buildings. Several companies offer charging stations by the hour or by use (per kWh).</div>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                    <div class="heading-4 normal-case w-full px-3 py-3">
                                        <h3 class="heading-4 normal-case">Are all electric vehicle chargers the&nbsp;same?</h3>
                                    </div><span class="ml-3 whitespace-nowrap">
                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></div>
                                    </span>
                                </button>
                                <div class="expandable-list-item-collapse border-t collapse">
                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                        <div class="whitespace-pre-line">No. Most notably, Tesla uses its own standard charger at its Supercharger locations, which are not currently accessible to any other EVs. Tesla provides an adapter (J1172) that can be used at non-Tesla public charging stations, but there’s still a third type of charger, CHAdeMO, used by EVgo and Electrify America. For home charging, manufacturers provide a mobile charging cable that is rated for 120 volts or 240 volts. It’s best to check with the specific vehicle manufacturer to ensure you have the right outlet or adapter before purchasing an electric vehicle. However, more converters and accessories are being sold to allow EV owners access to multiple platforms.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                    <div class="heading-4 normal-case w-full px-3 py-3">
                                        <h3 class="heading-4 normal-case">Do electric vehicles have&nbsp;transmissions?</h3>
                                    </div><span class="ml-3 whitespace-nowrap">
                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></div>
                                    </span>
                                </button>
                                <div class="expandable-list-item-collapse border-t collapse">
                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                        <div class="whitespace-pre-line">No, most EVs do not have transmissions, at least not like the ones in traditional internal combustion engine cars. The majority of EVs have a single gear transmission, meaning once the car is put in drive, no shifts occur. The only current exception is the Porsche Taycan, which has two gears. This implementation is supposed to help improve performance with acceleration in track conditions.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                    <div class="heading-4 normal-case w-full px-3 py-3">
                                        <h3 class="heading-4 normal-case">Do electric vehicles work in cold&nbsp;weather?</h3>
                                    </div><span class="ml-3 whitespace-nowrap">
                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></div>
                                    </span>
                                </button>
                                <div class="expandable-list-item-collapse border-t collapse">
                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                        <div class="whitespace-pre-line">Yes, electric cars work in cold weather, even below freezing. However, as with all batteries, a vehicle’s performance will be limited until the battery pack has warmed up. The use of the HVAC system will cause a significant loss of range in cold weather. Some manufacturers are creating solutions to combat this by adding features such as a heat pump and allowing drivers to preheat their cars while still plugged in.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
@endsection