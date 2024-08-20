@extends('site.layouts.app')
@section('content')


<main id="mainContent" style="margin-top: 60px;" class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
    <div class="md:hidden">
        <div class="container container-max-width-3" data-test="rankingsNavigation"><button type="button" data-ignore-contrast="false" data-loading="false" class="my-3 w-full btn btn-secondary btn-md"><span class="btn-inner"><svg viewBox="0 0 24 24" class="icon icon-before icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                        <use href="#tune"></use>
                    </svg> See All Best Cars And Trucks</span></button></div>
    </div>
    <div class="hidden-sm-down relative" data-test="rankingsNavigation">
        <div class="bg-[#f8f8f8]">
            <div class="container container-max-width-3">
                <nav aria-label="Rankings Categories" data-test="rankingCategoriesCarousel">
                    <div class="flex w-full items-center">
                        <div class="w-full">
                            <div class="carousel [@media(any-hover:hover)]:h-[115px] [@media(any-hover:hover)]:overflow-hidden [@media(any-hover:hover)]:px-1">
                                <div class="relative flex w-full items-center"><button class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-0 carousel-arrow-prev carousel-arrow-prev" data-test="carouselArrowPrev" aria-label="Previous" disabled=""><svg width="16px" height="16px" viewBox="0 0 16 16" class="carousel-arrow-icon">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline stroke-width="1.5" fill-rule="nonzero" points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                            </g>
                                        </svg></button>
                                    <div class="grow" style="position: relative; overflow: hidden;">
                                        <ul role="menubar" data-test="carouselSlideContainer" class="" style="display: flex; flex-flow: row; position: relative; overflow: hidden;">
                                            <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="carouselCurrentSlide0" style="scroll-snap-align: start; flex-shrink: 0; width: 20%;"><button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Cars" style="block-size: fit-content;">
                                                    <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                        <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                            <div class="img-container" style="height: 50px; padding-bottom: 0px; width: 100px;"><img src="{{asset('assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg')}}" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg')}});"></div>
                                                            <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">Cars</div>
                                                        </div>
                                                    </div>
                                                </button></li>
                                            <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="scroll-snap-align: start; flex-shrink: 0; width: 20%;"><button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Trucks" style="block-size: fit-content;">
                                                    <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                        <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                            <div class="img-container" style="height: 50px; padding-bottom: 0px; width: 100px;"><img src="{{asset('assets/_next/static/images/iconTrucks-580a7f2703d3c26ce63c295dc03d166d.svg')}}" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/iconTrucks-580a7f2703d3c26ce63c295dc03d166d.svg')}});"></div>
                                                            <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">Trucks</div>
                                                        </div>
                                                    </div>
                                                </button></li>
                                            <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="scroll-snap-align: start; flex-shrink: 0; width: 20%;"><button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best SUVs" style="block-size: fit-content;">
                                                    <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                        <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                            <div class="img-container" style="height: 50px; padding-bottom: 0px; width: 100px;"><img src="{{asset('assets/_next/static/images/iconSuv-f1ac2be397703ffcacdbfd74eea4299a.svg')}}" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/iconSuv-f1ac2be397703ffcacdbfd74eea4299a.svg')}});"></div>
                                                            <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">SUVs</div>
                                                        </div>
                                                    </div>
                                                </button></li>
                                            <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="scroll-snap-align: start; flex-shrink: 0; width: 20%;"><button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Sedans" style="block-size: fit-content;">
                                                    <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                        <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                            <div class="img-container" style="height: 50px; padding-bottom: 0px; width: 100px;"><img src="{{asset('assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg')}}" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg')}});"></div>
                                                            <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">Sedans</div>
                                                        </div>
                                                    </div>
                                                </button></li>
                                            <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="scroll-snap-align: start; flex-shrink: 0; width: 20%;"><button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Hatchbacks" style="block-size: fit-content;">
                                                    <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                        <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                            <div class="img-container" style="height: 50px; padding-bottom: 0px; width: 100px;"><img src="{{asset('assets/_next/static/images/iconHatchbacks-5fef3ca145dd8b50777b2033a6f4d6b0.svg')}}" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/iconHatchbacks-5fef3ca145dd8b50777b2033a6f4d6b0.svg')}});"></div>
                                                            <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">Hatchbacks</div>
                                                        </div>
                                                    </div>
                                                </button></li>
                                            <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="scroll-snap-align: start; flex-shrink: 0; width: 20%;" inert="" aria-hidden="true"><button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Wagons" style="block-size: fit-content;" tabindex="-1">
                                                    <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                        <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                            <div class="img-container" style="height: 50px; padding-bottom: 0px; width: 100px;"><img src="{{asset('assets/_next/static/images/iconWagons-570cc460532e6540d6108d60cf281230.svg')}}" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/iconWagons-570cc460532e6540d6108d60cf281230.svg')}});"></div>
                                                            <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">Wagons</div>
                                                        </div>
                                                    </div>
                                                </button></li>
                                            <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="scroll-snap-align: start; flex-shrink: 0; width: 20%;" inert="" aria-hidden="true"><button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Coupes" style="block-size: fit-content;" tabindex="-1">
                                                    <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                        <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                            <div class="img-container" style="height: 50px; padding-bottom: 0px; width: 100px;"><img src="{{asset('assets/_next/static/images/iconCoupes-b13ad2ede15fb4beb0d01df2269cf9f8.svg')}}" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/iconCoupes-b13ad2ede15fb4beb0d01df2269cf9f8.svg')}});"></div>
                                                            <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">Coupes</div>
                                                        </div>
                                                    </div>
                                                </button></li>
                                            <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="scroll-snap-align: start; flex-shrink: 0; width: 20%;" inert="" aria-hidden="true"><button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Convertibles" style="block-size: fit-content;" tabindex="-1">
                                                    <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                        <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                            <div class="img-container" style="height: 50px; padding-bottom: 0px; width: 100px;"><img src="{{asset('assets/_next/static/images/iconConvertables-be884bb8d136f35bb6558b94fd825344.svg')}}" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/iconConvertables-be884bb8d136f35bb6558b94fd825344.svg')}});"></div>
                                                            <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">Convertibles</div>
                                                        </div>
                                                    </div>
                                                </button></li>
                                            <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="scroll-snap-align: start; flex-shrink: 0; width: 20%;" inert="" aria-hidden="true"><button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Vans" style="block-size: fit-content;" tabindex="-1">
                                                    <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                        <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                            <div class="img-container" style="height: 50px; padding-bottom: 0px; width: 100px;"><img src="{{asset('assets/_next/static/images/iconVans-870c7511e02faf9d23d77dfe8e77ff45.svg')}}" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/iconVans-870c7511e02faf9d23d77dfe8e77ff45.svg')}});"></div>
                                                            <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">Vans</div>
                                                        </div>
                                                    </div>
                                                </button></li>
                                            <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="scroll-snap-align: start; flex-shrink: 0; width: 20%;" inert="" aria-hidden="true"><button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Other" style="block-size: fit-content;" tabindex="-1">
                                                    <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                        <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                            <div class="img-container" style="height: 50px; padding-bottom: 0px; width: 100px;"><img src="{{asset('assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg')}}" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg')}});"></div>
                                                            <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">Other</div>
                                                        </div>
                                                    </div>
                                                </button></li>
                                        </ul>
                                    </div><button class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-0 carousel-arrow-next carousel-arrow-next" data-test="carouselArrowNext" aria-label="Next"><svg width="16px" height="16px" viewBox="0 0 16 16" class="carousel-arrow-icon">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline stroke-width="1.5" fill-rule="nonzero" points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                            </g>
                                        </svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="md:px-3 py-2-5 md:py-3 mb-5 border rounded bg-white">
        <div class="container">
            <h1 class="heading-3 normal-case heading-md-1 md:normal-case mb-1 md:mb-2">TrueCar's Best Rated Vehicles for&nbsp;2024</h1>
            <p>Need help finding the best cars, trucks, or SUVs on the market?
                We sifted through the data and selected the top vehicles based on key
                factors such as price, comfort, amenities, efficiency, tech, and performance.
                Find the right vehicle for your needs by browsing our most popular categories
                below.</p><button type="button" class="link-button mt-1 block font-bold" data-test="learnMoreLink">Learn More</button>
        </div>
    </div>
    <div class="container container-max-width-2">
        <div class="mb-5 md:mb-7">
            <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-5">Cars</h2>
            <div class="columns-[240px_3] gap-y-3">
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/cars/">Best Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/luxury/">Best Luxury Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/performance/">Best Performance Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/by-horsepower/">Cars with Most Horsepower</a><a class="mb-1 block" href="/best-cars-trucks/cars/by-gas-mileage/">Cars with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/cars/for-tall-people/">Roomiest Cars for Tall People</a><a class="mb-1 block" href="/best-cars-trucks/cars/for-the-value/">Best Cars for the Money</a><a class="mb-1 block" href="/best-cars-trucks/cars/fastest/">Fastest Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/cheapest/">Cheapest Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/expensive/">Most Expensive Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/narrowest/">Narrowest Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/shortest/">Shortest Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/safest/">Safest Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/luxury/cheapest/">Cheapest Luxury Cars</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/cars/for-families/">Best Family Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/muscle/">Best Muscle Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/fuel-electric/">Best Electric Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/fuel-hybrid/">Best Hybrid Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/fuel-plug-in-hybrid/">Best Plug-In Hybrid Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/all-wheel-drive/">Best All Wheel Drive Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/aspiration-supercharged/">Best Supercharged Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/aspiration-turbocharged/">Best Turbocharged Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/aspiration-supercharged-and-turbocharged/">Best Supercharged and Turbocharged Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/transmission-cvt/">Best CVT Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/fuel-electric/fastest/">Fastest Electric Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/fuel-electric/cheapest/">Cheapest Electric Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/fuel-electric/expensive/">Most Expensive Electric Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/fuel-electric/mpge-over-100/">Best Electric Cars Over 100 MPGe</a><a class="mb-1 block" href="/best-cars-trucks/cars/fuel-hybrid/luxury/">Best Luxury Hybrid Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/fuel-hybrid/cheapest/">Cheapest Hybrid Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/all-wheel-drive/by-gas-mileage/">All Wheel Drive Cars with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/cars/all-wheel-drive/cheapest/">Cheapest All Wheel Drive Cars</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/cars/segment-subcompact/">Best Subcompact Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-subcompact/by-gas-mileage/">Subcompact Cars with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-subcompact/for-the-value/">Best Subcompact Cars for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/cars/segment-compact/">Best Compact Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-compact/luxury/">Best Compact Luxury Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-compact/performance/">Best Compact Performance Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-compact/by-gas-mileage/">Compact Cars with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-compact/for-the-value/">Best Compact Cars for the Money</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-compact/cheapest/">Cheapest Compact Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-compact/price-under-20000/">Best Compact Cars Under $20K</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-compact/price-20000-30000/">Best Compact Cars Under $30K</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-compact/price-30000-40000/">Best Compact Cars Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-compact/price-40000-50000/">Best Compact Cars Under $50K</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-compact/price-50000-60000/">Best Compact Cars Under $60K</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-compact/luxury/for-the-value/">Best Compact Luxury Cars for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/cars/segment-midsize/">Best Midsize Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-midsize/luxury/">Best Midsize Luxury Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-midsize/performance/">Best Midsize Performance Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-midsize/by-gas-mileage/">Midsize Cars with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-midsize/for-the-value/">Best Midsize Cars for the Money</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-midsize/price-under-30000/">Best Midsize Cars Under $30K</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-midsize/price-30000-40000/">Best Midsize Cars Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-midsize/price-40000-50000/">Best Midsize Cars Under $50K</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-midsize/price-50000-60000/">Best Midsize Cars Under $60K</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-midsize/luxury/for-the-value/">Best Midsize Luxury Cars for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/cars/segment-fullsize/">Best Full Size Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-fullsize/luxury/">Best Full Size Luxury Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-fullsize/performance/">Best Full Size Performance Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-fullsize/by-gas-mileage/">Full Size Cars with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-fullsize/for-the-value/">Best Full Size Cars for the Money</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-fullsize/price-under-40000/">Best Full Size Cars Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-fullsize/price-40000-50000/">Best Full Size Cars Under $50K</a><a class="mb-1 block" href="/best-cars-trucks/cars/segment-fullsize/luxury/for-the-value/">Best Full Size Luxury Cars for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/cars/mpg-over-30/">Best Cars Over 30 MPG</a><a class="mb-1 block" href="/best-cars-trucks/cars/mpg-over-40/">Best Cars Over 40 MPG</a><a class="mb-1 block" href="/best-cars-trucks/cars/horsepower-over-200/">Best Cars Over 200 hp</a><a class="mb-1 block" href="/best-cars-trucks/cars/horsepower-over-300/">Best Cars Over 300 hp</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/cars/brand-american/">Best American Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/brand-japanese/">Best Japanese Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/brand-korean/">Best Korean Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/brand-german/">Best German Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/brand-british/">Best British Cars</a><a class="mb-1 block" href="/best-cars-trucks/cars/brand-italian/">Best Italian Cars</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/cars/price-under-20000/">Best Cars Under $20K</a><a class="mb-1 block" href="/best-cars-trucks/cars/price-20000-30000/">Best Cars Under $30K</a><a class="mb-1 block" href="/best-cars-trucks/cars/price-30000-40000/">Best Cars Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/cars/price-40000-50000/">Best Cars Under $50K</a><a class="mb-1 block" href="/best-cars-trucks/cars/price-50000-60000/">Best Cars Under $60K</a><a class="mb-1 block" href="/best-cars-trucks/cars/price-60000-70000/">Best Cars Under $70K</a><a class="mb-1 block" href="/best-cars-trucks/cars/price-70000-80000/">Best Cars Under $80K</a><a class="mb-1 block" href="/best-cars-trucks/cars/price-80000-90000/">Best Cars Under $90K</a><a class="mb-1 block" href="/best-cars-trucks/cars/price-90000-100000/">Best Cars Under $100K</a><a class="mb-1 block" href="/best-cars-trucks/cars/price-over-100000/">Best Cars Over $100K</a><a class="mb-1 block" href="/best-cars-trucks/cars/luxury/price-over-100000/">Best Luxury Cars Over $100K</a><a class="mb-1 block" href="/best-cars-trucks/cars/fastest/price-under-35000/">Fastest Cars Under $35K</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/cars/seat-material-leather/">Best Cars with Leather Seats</a><a class="mb-1 block" href="/best-cars-trucks/cars/apple-carplay/">Best Cars with Apple Carplay</a><a class="mb-1 block" href="/best-cars-trucks/cars/android-auto/">Best Cars with Android Auto</a><a class="mb-1 block" href="/best-cars-trucks/cars/navigation/">Best Cars with Navigation</a><a class="mb-1 block" href="/best-cars-trucks/cars/premium-audio/">Best Cars with Premium Audio</a><a class="mb-1 block" href="/best-cars-trucks/cars/cruise-control-adaptive/">Best Cars with Adaptive Cruise Control</a><a class="mb-1 block" href="/best-cars-trucks/cars/around-view-camera/">Best Cars with Around View Camera</a><a class="mb-1 block" href="/best-cars-trucks/cars/transmission-manual/">Best Cars with Manual Transmission</a><a class="mb-1 block" href="/best-cars-trucks/cars/panoramic-moonroof/">Best Cars with Panoramic Moonroof</a><a class="mb-1 block" href="/best-cars-trucks/cars/warranty-over-5/">Best Cars with Basic Warranty Over 5 Years</a></div>
                </div>
            </div>
        </div>
        <div class="mb-5 md:mb-7">
            <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-5">Trucks</h2>
            <div class="columns-[240px_3] gap-y-3">
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/trucks/">Best Trucks</a><a class="mb-1 block" href="/best-cars-trucks/trucks/by-gas-mileage/">Trucks with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/trucks/by-horsepower/">Trucks with Most Horsepower</a><a class="mb-1 block" href="/best-cars-trucks/trucks/by-towing-capacity/">Trucks with Best Towing Capacity</a><a class="mb-1 block" href="/best-cars-trucks/trucks/for-the-value/">Best Trucks for the Money</a><a class="mb-1 block" href="/best-cars-trucks/trucks/fastest/">Fastest Trucks</a><a class="mb-1 block" href="/best-cars-trucks/trucks/cheapest/">Cheapest Trucks</a><a class="mb-1 block" href="/best-cars-trucks/trucks/expensive/">Most Expensive Trucks</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/trucks/segment-midsize/">Best Midsize Trucks</a><a class="mb-1 block" href="/best-cars-trucks/trucks/segment-midsize/by-gas-mileage/">Midsize Trucks with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/trucks/segment-midsize/by-towing-capacity/">Midsize Trucks with Best Towing Capacity</a><a class="mb-1 block" href="/best-cars-trucks/trucks/segment-midsize/for-the-value/">Best Midsize Trucks for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/trucks/segment-fullsize/">Best Full Size Trucks</a><a class="mb-1 block" href="/best-cars-trucks/trucks/segment-fullsize/by-gas-mileage/">Full Size Trucks with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/trucks/segment-fullsize/by-towing-capacity/">Full Size Trucks with Best Towing Capacity</a><a class="mb-1 block" href="/best-cars-trucks/trucks/segment-fullsize/for-the-value/">Best Full Size Trucks for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/trucks/segment-heavy-duty/">Best Heavy Duty Trucks</a><a class="mb-1 block" href="/best-cars-trucks/trucks/segment-heavy-duty/by-towing-capacity/">Heavy Duty Trucks with Best Towing Capacity</a><a class="mb-1 block" href="/best-cars-trucks/trucks/segment-heavy-duty/for-the-value/">Best Heavy Duty Trucks for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/trucks/fuel-diesel/">Best Diesel Trucks</a><a class="mb-1 block" href="/best-cars-trucks/trucks/fuel-hybrid/">Best Hybrid Trucks</a><a class="mb-1 block" href="/best-cars-trucks/trucks/fuel-electric/">Best Electric Trucks</a><a class="mb-1 block" href="/best-cars-trucks/trucks/four-wheel-drive/">Best Four Wheel Drive Trucks</a><a class="mb-1 block" href="/best-cars-trucks/trucks/off-road/">Best Off Road Trucks</a><a class="mb-1 block" href="/best-cars-trucks/trucks/fuel-diesel/cheapest/">Cheapest Diesel Trucks</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/trucks/price-under-30000/">Best Trucks Under $30K</a><a class="mb-1 block" href="/best-cars-trucks/trucks/price-30000-40000/">Best Trucks Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/trucks/price-40000-50000/">Best Trucks Under $50K</a><a class="mb-1 block" href="/best-cars-trucks/trucks/price-50000-60000/">Best Trucks Under $60K</a></div>
                </div>
            </div>
        </div>
        <div class="mb-5 md:mb-7">
            <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-5">SUVs</h2>
            <div class="columns-[240px_3] gap-y-3">
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/suvs/">Best SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/luxury/">Best Luxury SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/performance/">Best Performance SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/by-gas-mileage/">SUVs with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/suvs/by-towing-capacity/">SUVs with Best Towing Capacity</a><a class="mb-1 block" href="/best-cars-trucks/suvs/by-horsepower/">SUVs with Most Horsepower</a><a class="mb-1 block" href="/best-cars-trucks/suvs/for-tall-people/">Roomiest SUVs for Tall People</a><a class="mb-1 block" href="/best-cars-trucks/suvs/for-the-value/">Best SUVs for the Money</a><a class="mb-1 block" href="/best-cars-trucks/suvs/fastest/">Fastest SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/cheapest/">Cheapest SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/expensive/">Most Expensive SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/safest/">Safest SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/crossover/">Best Crossover SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/luxury/by-gas-mileage/">Luxury SUVs with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/suvs/luxury/cheapest/">Cheapest Luxury SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/crossover/luxury/">Best Luxury Crossover SUVs</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/suvs/for-families/">Best Family SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/fuel-hybrid/">Best Hybrid SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/fuel-electric/">Best Electric SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/all-wheel-drive/">Best All Wheel Drive SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/four-wheel-drive/">Best Four Wheel Drive SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/off-road/">Best Off Road SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/fuel-hybrid/cheapest/">Cheapest Hybrid SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/fuel-electric/cheapest/">Cheapest Electric SUVs</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-subcompact/">Best Subcompact SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-subcompact/luxury/">Best Subcompact Luxury SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-subcompact/by-gas-mileage/">Subcompact SUVs with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-subcompact/for-the-value/">Best Subcompact SUVs for the Money</a><a class="mb-1 block" href="/best-cars-trucks/suvs/crossover/segment-subcompact/">Best Subcompact Crossover SUVs</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-compact/">Best Compact SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-compact/luxury/">Best Compact Luxury SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-compact/performance/">Best Compact Performance SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-compact/by-gas-mileage/">Compact SUVs with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-compact/by-towing-capacity/">Compact SUVs with Best Towing Capacity</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-compact/for-the-value/">Best Compact SUVs for the Money</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-compact/cheapest/">Cheapest Compact SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-compact/price-under-25000/">Best Compact SUVs Under $25K</a><a class="mb-1 block" href="/best-cars-trucks/suvs/crossover/segment-compact/">Best Compact Crossover SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-compact/luxury/for-the-value/">Best Compact Luxury SUVs for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-midsize/">Best Midsize SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-midsize/luxury/">Best Midsize Luxury SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-midsize/performance/">Best Midsize Performance SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-midsize/by-gas-mileage/">Midsize SUVs with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-midsize/by-towing-capacity/">Midsize SUVs with Best Towing Capacity</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-midsize/for-the-value/">Best Midsize SUVs for the Money</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-midsize/price-under-35000/">Best Midsize SUVs Under $35K</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-fullsize/">Best Full Size SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-fullsize/luxury/">Best Full Size Luxury SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-fullsize/performance/">Best Full Size Performance SUVs</a><a class="mb-1 block" href="/best-cars-trucks/suvs/segment-fullsize/by-gas-mileage/">Full Size SUVs with Best Gas Mileage</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/suvs/price-under-25000/">Best SUVs Under $25K</a><a class="mb-1 block" href="/best-cars-trucks/suvs/price-25000-30000/">Best SUVs Under $30K</a><a class="mb-1 block" href="/best-cars-trucks/suvs/price-30000-40000/">Best SUVs Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/suvs/price-40000-50000/">Best SUVs Under $50K</a><a class="mb-1 block" href="/best-cars-trucks/suvs/price-50000-60000/">Best SUVs Under $60K</a><a class="mb-1 block" href="/best-cars-trucks/suvs/price-60000-70000/">Best SUVs Under $70K</a><a class="mb-1 block" href="/best-cars-trucks/suvs/price-70000-80000/">Best SUVs Under $80K</a><a class="mb-1 block" href="/best-cars-trucks/suvs/price-80000-100000/">Best SUVs Under $100K</a><a class="mb-1 block" href="/best-cars-trucks/suvs/price-over-100000/">Best SUVs Over $100K</a><a class="mb-1 block" href="/best-cars-trucks/suvs/luxury/price-under-50000/">Best Luxury SUVs Under $50K</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/suvs/3rd-row/">Best SUVs with 3rd Row</a><a class="mb-1 block" href="/best-cars-trucks/suvs/warranty-over-4/">Best SUVs with Basic Warranty Over 4 Years</a><a class="mb-1 block" href="/best-cars-trucks/suvs/luxury/3rd-row/">Best Luxury SUVs with 3rd Row</a><a class="mb-1 block" href="/best-cars-trucks/suvs/3rd-row/by-gas-mileage/">SUVs with 3rd Row with Best Gas Mileage</a></div>
                </div>
            </div>
        </div>
        <div class="mb-5 md:mb-7">
            <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-5">Sedans</h2>
            <div class="columns-[240px_3] gap-y-3">
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/sedans/">Best Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/luxury/">Best Luxury Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/performance/">Best Performance Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/by-gas-mileage/">Sedans with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/sedans/for-the-value/">Best Sedans for the Money</a><a class="mb-1 block" href="/best-cars-trucks/sedans/fastest/">Fastest Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/cheapest/">Cheapest Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/expensive/">Most Expensive Sedans</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/sedans/sport/">Best Sport Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/fuel-hybrid/">Best Hybrid Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/fuel-plug-in-hybrid/">Best Plug-In Hybrid Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/all-wheel-drive/">Best All Wheel Drive Sedans</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-subcompact/">Best Subcompact Sedans</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-compact/">Best Compact Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-compact/luxury/">Best Compact Luxury Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-compact/performance/">Best Compact Performance Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-compact/by-gas-mileage/">Compact Sedans with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-compact/for-the-value/">Best Compact Sedans for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-midsize/">Best Midsize Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-midsize/luxury/">Best Midsize Luxury Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-midsize/performance/">Best Midsize Performance Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-midsize/by-gas-mileage/">Midsize Sedans with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-midsize/for-the-value/">Best Midsize Sedans for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-fullsize/">Best Full Size Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-fullsize/luxury/">Best Full Size Luxury Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-fullsize/performance/">Best Full Size Performance Sedans</a><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-fullsize/by-gas-mileage/">Full Size Sedans with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/sedans/segment-fullsize/for-the-value/">Best Full Size Sedans for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/sedans/price-under-20000/">Best Sedans Under $20K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/price-20000-30000/">Best Sedans Under $30K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/price-30000-40000/">Best Sedans Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/price-40000-50000/">Best Sedans Under $50K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/price-50000-60000/">Best Sedans Under $60K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/price-60000-70000/">Best Sedans Under $70K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/price-70000-80000/">Best Sedans Under $80K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/price-80000-90000/">Best Sedans Under $90K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/price-90000-100000/">Best Sedans Under $100K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/price-over-100000/">Best Sedans Over $100K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/luxury/price-under-40000/">Best Luxury Sedans Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/luxury/price-40000-50000/">Best Luxury Sedans Under $50K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/luxury/price-50000-60000/">Best Luxury Sedans Under $60K</a><a class="mb-1 block" href="/best-cars-trucks/sedans/luxury/price-60000-70000/">Best Luxury Sedans Under $70K</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/sedans/warranty-over-4/">Best Sedans with Basic Warranty Over 4 Years</a></div>
                </div>
            </div>
        </div>
        <div class="mb-5 md:mb-7">
            <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-5">Hatchbacks</h2>
            <div class="columns-[240px_3] gap-y-3">
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/">Best Hatchbacks</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/luxury/">Best Luxury Hatchbacks</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/performance/">Best Performance Hatchbacks</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/by-gas-mileage/">Hatchbacks with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/for-the-value/">Best Hatchbacks for the Money</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/cheapest/">Cheapest Hatchbacks</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/segment-subcompact/">Best Subcompact Hatchbacks</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/segment-subcompact/by-gas-mileage/">Subcompact Hatchbacks with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/segment-subcompact/for-the-value/">Best Subcompact Hatchbacks for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/segment-compact/">Best Compact Hatchbacks</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/segment-compact/performance/">Best Compact Performance Hatchbacks</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/segment-compact/by-gas-mileage/">Compact Hatchbacks with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/segment-compact/for-the-value/">Best Compact Hatchbacks for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/segment-fullsize/">Best Full Size Hatchbacks</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/segment-fullsize/for-the-value/">Best Full Size Hatchbacks for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/price-under-20000/">Best Hatchbacks Under $20K</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/price-20000-30000/">Best Hatchbacks Under $30K</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/price-30000-40000/">Best Hatchbacks Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/price-40000-50000/">Best Hatchbacks Under $50K</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/hatchbacks/warranty-over-4/">Best Hatchbacks with Basic Warranty Over 4 Years</a></div>
                </div>
            </div>
        </div>
        <div class="mb-5 md:mb-7">
            <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-5">Wagons</h2>
            <div class="columns-[240px_3] gap-y-3">
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/wagons/">Best Wagons</a><a class="mb-1 block" href="/best-cars-trucks/wagons/luxury/">Best Luxury Wagons</a><a class="mb-1 block" href="/best-cars-trucks/wagons/performance/">Best Performance Wagons</a><a class="mb-1 block" href="/best-cars-trucks/wagons/by-gas-mileage/">Wagons with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/wagons/for-the-value/">Best Wagons for the Money</a><a class="mb-1 block" href="/best-cars-trucks/wagons/cheapest/">Cheapest Wagons</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/wagons/segment-midsize/">Best Midsize Wagons</a><a class="mb-1 block" href="/best-cars-trucks/wagons/segment-midsize/luxury/">Best Midsize Luxury Wagons</a><a class="mb-1 block" href="/best-cars-trucks/wagons/segment-midsize/by-gas-mileage/">Midsize Wagons with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/wagons/segment-midsize/for-the-value/">Best Midsize Wagons for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/wagons/all-wheel-drive/">Best All Wheel Drive Wagons</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/wagons/seat-material-leather/">Best Wagons with Leather Seats</a></div>
                </div>
            </div>
        </div>
        <div class="mb-5 md:mb-7">
            <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-5">Coupes</h2>
            <div class="columns-[240px_3] gap-y-3">
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/coupes/">Best Coupes</a><a class="mb-1 block" href="/best-cars-trucks/coupes/luxury/">Best Luxury Coupes</a><a class="mb-1 block" href="/best-cars-trucks/coupes/performance/">Best Performance Coupes</a><a class="mb-1 block" href="/best-cars-trucks/coupes/by-gas-mileage/">Coupes with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/coupes/for-the-value/">Best Coupes for the Money</a><a class="mb-1 block" href="/best-cars-trucks/coupes/cheapest/">Cheapest Coupes</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/coupes/segment-compact/">Best Compact Coupes</a><a class="mb-1 block" href="/best-cars-trucks/coupes/segment-compact/luxury/">Best Compact Luxury Coupes</a><a class="mb-1 block" href="/best-cars-trucks/coupes/segment-compact/performance/">Best Compact Performance Coupes</a><a class="mb-1 block" href="/best-cars-trucks/coupes/segment-compact/by-gas-mileage/">Compact Coupes with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/coupes/segment-compact/for-the-value/">Best Compact Coupes for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/coupes/segment-midsize/">Best Midsize Coupes</a><a class="mb-1 block" href="/best-cars-trucks/coupes/segment-midsize/performance/">Best Midsize Performance Coupes</a><a class="mb-1 block" href="/best-cars-trucks/coupes/segment-midsize/by-gas-mileage/">Midsize Coupes with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/coupes/segment-midsize/for-the-value/">Best Midsize Coupes for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/coupes/segment-fullsize/">Best Full Size Coupes</a><a class="mb-1 block" href="/best-cars-trucks/coupes/segment-fullsize/by-gas-mileage/">Full Size Coupes with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/coupes/segment-fullsize/for-the-value/">Best Full Size Coupes for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/coupes/price-under-40000/">Best Coupes Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/coupes/price-40000-50000/">Best Coupes Under $50K</a><a class="mb-1 block" href="/best-cars-trucks/coupes/price-50000-60000/">Best Coupes Under $60K</a><a class="mb-1 block" href="/best-cars-trucks/coupes/price-60000-100000/">Best Coupes Under $100K</a><a class="mb-1 block" href="/best-cars-trucks/coupes/luxury/price-under-50000/">Best Luxury Coupes Under $50K</a><a class="mb-1 block" href="/best-cars-trucks/coupes/luxury/price-50000-60000/">Best Luxury Coupes Under $60K</a><a class="mb-1 block" href="/best-cars-trucks/coupes/luxury/price-60000-100000/">Best Luxury Coupes Under $100K</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/coupes/warranty-over-3/">Best Coupes with Basic Warranty Over 3 Years</a></div>
                </div>
            </div>
        </div>
        <div class="mb-5 md:mb-7">
            <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-5">Convertibles</h2>
            <div class="columns-[240px_3] gap-y-3">
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/convertibles/">Best Convertibles</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/luxury/">Best Luxury Convertibles</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/performance/">Best Performance Convertibles</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/by-gas-mileage/">Convertibles with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/for-the-value/">Best Convertibles for the Money</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/cheapest/">Cheapest Convertibles</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/expensive/">Most Expensive Convertibles</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/convertibles/segment-compact/">Best Compact Convertibles</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/segment-compact/luxury/">Best Compact Luxury Convertibles</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/segment-compact/performance/">Best Compact Performance Convertibles</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/segment-compact/by-gas-mileage/">Compact Convertibles with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/segment-compact/for-the-value/">Best Compact Convertibles for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/convertibles/segment-midsize/">Best Midsize Convertibles</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/segment-midsize/performance/">Best Midsize Performance Convertibles</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/segment-midsize/by-gas-mileage/">Midsize Convertibles with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/segment-midsize/for-the-value/">Best Midsize Convertibles for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/convertibles/segment-fullsize/">Best Full Size Convertibles</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/convertibles/price-under-30000/">Best Convertibles Under $30K</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/price-30000-40000/">Best Convertibles Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/price-40000-50000/">Best Convertibles Under $50K</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/price-50000-60000/">Best Convertibles Under $60K</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/luxury/price-under-70000/">Best Luxury Convertibles Under $70K</a><a class="mb-1 block" href="/best-cars-trucks/convertibles/luxury/price-70000-100000/">Best Luxury Convertibles Under $100K</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/convertibles/warranty-over-3/">Best Convertibles with Basic Warranty Over 3 Years</a></div>
                </div>
            </div>
        </div>
        <div class="mb-5 md:mb-7">
            <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-5">Vans</h2>
            <div class="columns-[240px_3] gap-y-3">
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/vans/">Best Vans</a><a class="mb-1 block" href="/best-cars-trucks/vans/by-gas-mileage/">Vans with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/vans/for-the-value/">Best Vans for the Money</a><a class="mb-1 block" href="/best-cars-trucks/vans/cheapest/">Cheapest Vans</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/vans/segment-midsize/">Best Midsize Vans</a><a class="mb-1 block" href="/best-cars-trucks/vans/segment-midsize/by-gas-mileage/">Midsize Vans with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/vans/segment-midsize/for-the-value/">Best Midsize Vans for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/vans/segment-fullsize/">Best Full Size Vans</a><a class="mb-1 block" href="/best-cars-trucks/vans/segment-fullsize/by-gas-mileage/">Full Size Vans with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/vans/segment-fullsize/for-the-value/">Best Full Size Vans for the Money</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/vans/price-under-30000/">Best Vans Under $30K</a><a class="mb-1 block" href="/best-cars-trucks/vans/price-30000-40000/">Best Vans Under $40K</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/minivans/">Best Minivans</a><a class="mb-1 block" href="/best-cars-trucks/minivans/by-gas-mileage/">Minivans with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/minivans/for-the-value/">Best Minivans for the Money</a><a class="mb-1 block" href="/best-cars-trucks/minivans/cheapest/">Cheapest Minivans</a><a class="mb-1 block" href="/best-cars-trucks/minivans/expensive/">Most Expensive Minivans</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/passenger-vans/">Best Passenger Vans</a><a class="mb-1 block" href="/best-cars-trucks/passenger-vans/by-gas-mileage/">Passenger Vans with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/passenger-vans/for-the-value/">Best Passenger Vans for the Money</a><a class="mb-1 block" href="/best-cars-trucks/passenger-vans/price-under-40000/">Best Passenger Vans Under $40K</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/cargo-vans/">Best Cargo Vans</a><a class="mb-1 block" href="/best-cars-trucks/cargo-vans/by-gas-mileage/">Cargo Vans with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/cargo-vans/for-the-value/">Best Cargo Vans for the Money</a><a class="mb-1 block" href="/best-cars-trucks/cargo-vans/cheapest/">Cheapest Cargo Vans</a></div>
                </div>
            </div>
        </div>
        <div class="mb-5 md:mb-7">
            <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-5">Other</h2>
            <div class="columns-[240px_3] gap-y-3">
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/fuel-hybrid/">Best Hybrids</a><a class="mb-1 block" href="/best-cars-trucks/fuel-hybrid/luxury/">Best Luxury Hybrids</a><a class="mb-1 block" href="/best-cars-trucks/fuel-hybrid/by-gas-mileage/">Hybrids with Best Gas Mileage</a><a class="mb-1 block" href="/best-cars-trucks/fuel-hybrid/by-hybrid-ev-warranty/">Best Hybrid Warranties</a><a class="mb-1 block" href="/best-cars-trucks/fuel-hybrid/price-under-25000/">Best Hybrids Under $25K</a><a class="mb-1 block" href="/best-cars-trucks/fuel-hybrid/price-25000-30000/">Best Hybrids Under $30K</a><a class="mb-1 block" href="/best-cars-trucks/fuel-hybrid/price-30000-40000/">Best Hybrids Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/fuel-hybrid/price-40000-50000/">Best Hybrids Under $50K</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/fuel-plug-in-hybrid/">Best Plug-In Hybrids</a><a class="mb-1 block" href="/best-cars-trucks/fuel-plug-in-hybrid/luxury/">Best Luxury Plug-In Hybrids</a><a class="mb-1 block" href="/best-cars-trucks/fuel-plug-in-hybrid/cheapest/">Cheapest Plug-In Hybrids</a><a class="mb-1 block" href="/best-cars-trucks/fuel-plug-in-hybrid/by-hybrid-ev-warranty/">Best Plug-In Hybrid Warranties</a><a class="mb-1 block" href="/best-cars-trucks/fuel-plug-in-hybrid/price-under-30000/">Best Plug-In Hybrids Under $30K</a><a class="mb-1 block" href="/best-cars-trucks/fuel-plug-in-hybrid/price-30000-40000/">Best Plug-In Hybrids Under $40K</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/fuel-electric/">Best Electric Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/fuel-electric/luxury/">Best Luxury Electric Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/fuel-electric/all-wheel-drive/">Best All Wheel Drive Electric Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/fuel-electric/by-range/">Longest Range Electric Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/fuel-electric/by-charge-time/">Fastest Charging Electric Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/fuel-electric/by-mpge/">Most Efficient Electric Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/fuel-electric/by-hybrid-ev-warranty/">Best Electric Vehicle Warranties</a><a class="mb-1 block" href="/best-cars-trucks/fuel-electric/for-the-value/">Best Electric Vehicles for the Money</a><a class="mb-1 block" href="/best-cars-trucks/fuel-electric/price-under-35000/">Best Electric Vehicles Under $35K</a><a class="mb-1 block" href="/best-cars-trucks/fuel-electric/price-35000-40000/">Best Electric Vehicles Under $40K</a><a class="mb-1 block" href="/best-cars-trucks/fuel-electric/price-40000-50000/">Best Electric Vehicles Under $50K</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/fuel-diesel/">Best Diesel Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/fuel-diesel/by-gas-mileage/">Diesel Vehicles with Best Gas Mileage</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/all-wheel-drive/">Best All Wheel Drive Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/four-wheel-drive/">Best Four Wheel Drive Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/exotic/">Best Exotics</a><a class="mb-1 block" href="/best-cars-trucks/exotic/luxury/">Best Luxury Exotics</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/brand-american/">Best American Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/brand-japanese/">Best Japanese Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/brand-korean/">Best Korean Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/brand-german/">Best German Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/brand-british/">Best British Vehicles</a><a class="mb-1 block" href="/best-cars-trucks/brand-italian/">Best Italian Vehicles</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/seat-material-leather/">Best Vehicles with Leather Seats</a><a class="mb-1 block" href="/best-cars-trucks/apple-carplay/">Best Vehicles with Apple Carplay</a><a class="mb-1 block" href="/best-cars-trucks/android-auto/">Best Vehicles with Android Auto</a><a class="mb-1 block" href="/best-cars-trucks/navigation/">Best Vehicles with Navigation</a><a class="mb-1 block" href="/best-cars-trucks/dvd-player/">Best Vehicles with DVD Player</a><a class="mb-1 block" href="/best-cars-trucks/premium-audio/">Best Vehicles with Premium Audio</a><a class="mb-1 block" href="/best-cars-trucks/cruise-control-adaptive/">Best Vehicles with Adaptive Cruise Control</a><a class="mb-1 block" href="/best-cars-trucks/around-view-camera/">Best Vehicles with Around View Camera</a><a class="mb-1 block" href="/best-cars-trucks/transmission-manual/">Best Vehicles with Manual Transmission</a><a class="mb-1 block" href="/best-cars-trucks/panoramic-moonroof/">Best Vehicles with Panoramic Moonroof</a><a class="mb-1 block" href="/best-cars-trucks/warranty-over-5/">Best Vehicles with Basic Warranty Over 5 Years</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/for-dogs/">Best Vehicles for Dog Owners</a></div>
                </div>
                <div class="mb-3 break-inside-avoid-column">
                    <div><a class="mb-1 block" href="/best-cars-trucks/make-acura/">Best Acura Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-alfa-romeo/">Best Alfa Romeo Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-audi/">Best Audi Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-bmw/">Best BMW Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-buick/">Best Buick SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-cadillac/">Best Cadillac Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-chevrolet/">Best Chevrolet Cars, Trucks &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-chrysler/">Best Chrysler Cars</a><a class="mb-1 block" href="/best-cars-trucks/make-dodge/">Best Dodge Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-fiat/">Best FIAT Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-ford/">Best Ford Cars, Trucks &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-genesis/">Best Genesis Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-gmc/">Best GMC Trucks &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-honda/">Best Honda Cars, Trucks &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-hyundai/">Best Hyundai Cars, Trucks &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-infiniti/">Best INFINITI Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-jaguar/">Best Jaguar Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-jeep/">Best Jeep Trucks &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-kia/">Best Kia Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-land-rover/">Best Land Rover SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-lexus/">Best Lexus Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-lincoln/">Best Lincoln SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-maserati/">Best Maserati Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-mazda/">Best Mazda Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-mercedes-benz/">Best Mercedes-Benz Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-mini/">Best MINI Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-mitsubishi/">Best Mitsubishi Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-nissan/">Best Nissan Cars, Trucks &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-ram/">Best Ram Trucks</a><a class="mb-1 block" href="/best-cars-trucks/make-subaru/">Best Subaru Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-toyota/">Best Toyota Cars, Trucks &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-volkswagen/">Best Volkswagen Cars &amp; SUVs</a><a class="mb-1 block" href="/best-cars-trucks/make-volvo/">Best Volvo Cars &amp; SUVs</a></div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="py-5" data-test="seoFooter">
            <div class="container">
                <div class="grid grid-cols-1 gap-x-3 border-b md:grid-cols-2 md:border-0">
                    <div class="expandable-list-item border-t"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="seoLinkColumnHeading">
                            <div class="heading-4 normal-case w-full px-3 py-3">Popular Used Cars</div><span class="ml-3 whitespace-nowrap">
                                <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></div>
                            </span>
                        </button>
                        <div class="expandable-list-item-collapse border-t collapse" style="">
                            <div class="px-3 py-3 expandable-list-item-shadow">
                                <ul class="space-y-2">
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/dodge/challenger/">Used Dodge Challenger</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/ford/edge/">Used Ford Edge</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/ford/escape/">Used Ford Escape</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/ford/explorer/">Used Ford Explorer</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/ford/f-150/">Used Ford F-150</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/honda/accord/">Used Honda Accord</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/honda/civic/">Used Honda Civic</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/honda/cr-v/">Used Honda CR-V</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/honda/pilot/">Used Honda Pilot</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/hyundai/elantra/">Used Hyundai Elantra</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/hyundai/kona/">Used Hyundai Kona</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/hyundai/santa-fe/">Used Hyundai Santa Fe</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/jeep/cherokee/">Used Jeep Cherokee</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/jeep/grand-cherokee/">Used Jeep Grand Cherokee</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/jeep/renegade/">Used Jeep Renegade</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/jeep/wrangler/">Used Jeep Wrangler</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/kia/sorento/">Used Kia Sorento</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/kia/stinger/">Used Kia Stinger</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/mazda/cx-5/">Used Mazda CX-5</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/nissan/rogue/">Used Nissan Rogue</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/subaru/ascent/">Used Subaru Ascent</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/subaru/crosstrek/">Used Subaru Crosstrek</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/subaru/forester/">Used Subaru Forester</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/subaru/outback/">Used Subaru Outback</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/used-cars-for-sale/listings/toyota/4runner/">Used Toyota 4Runner</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="seoLinkColumnHeading">
                            <div class="heading-4 normal-case w-full px-3 py-3">Popular New Cars</div><span class="ml-3 whitespace-nowrap">
                                <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></div>
                            </span>
                        </button>
                        <div class="expandable-list-item-collapse border-t collapse" style="">
                            <div class="px-3 py-3 expandable-list-item-shadow">
                                <ul class="space-y-2">
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/dodge/challenger/">New Dodge Challenger</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/ford/edge/">New Ford Edge</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/ford/escape/">New Ford Escape</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/ford/explorer/">New Ford Explorer</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/ford/f-150/">New Ford F-150</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/honda/accord/">New Honda Accord</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/honda/civic/">New Honda Civic</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/honda/cr-v/">New Honda CR-V</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/honda/pilot/">New Honda Pilot</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/hyundai/elantra/">New Hyundai Elantra</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/hyundai/kona/">New Hyundai Kona</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/hyundai/santa-fe/">New Hyundai Santa Fe</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/jeep/cherokee/">New Jeep Cherokee</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/jeep/grand-cherokee/">New Jeep Grand Cherokee</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/jeep/renegade/">New Jeep Renegade</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/jeep/wrangler/">New Jeep Wrangler</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/kia/sorento/">New Kia Sorento</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/kia/stinger/">New Kia Stinger</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/mazda/cx-5/">New Mazda CX-5</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/nissan/rogue/">New Nissan Rogue</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/subaru/ascent/">New Subaru Ascent</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/subaru/crosstrek/">New Subaru Crosstrek</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/subaru/forester/">New Subaru Forester</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/subaru/outback/">New Subaru Outback</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/new-cars-for-sale/listings/toyota/4runner/">New Toyota 4Runner</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="expandable-list-item md:border-b"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="seoLinkColumnHeading">
                            <div class="heading-4 normal-case w-full px-3 py-3">Research Cars</div><span class="ml-3 whitespace-nowrap">
                                <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></div>
                            </span>
                        </button>
                        <div class="expandable-list-item-collapse border-t collapse" style="">
                            <div class="px-3 py-3 expandable-list-item-shadow">
                                <ul class="space-y-2">
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/dodge/challenger/">2023 Dodge Challenger</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/ford/edge/">2024 Ford Edge</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/ford/escape/">2024 Ford Escape</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/ford/explorer/">2025 Ford Explorer</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/ford/f-150/">2024 Ford F-150</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/honda/accord/">2024 Honda Accord</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/honda/civic/">2024 Honda Civic</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/honda/cr-v/">2024 Honda CR-V</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/honda/pilot/">2025 Honda Pilot</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/hyundai/elantra/">2024 Hyundai Elantra</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/hyundai/kona/">2024 Hyundai Kona</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/hyundai/santa-fe/">2024 Hyundai Santa Fe</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/jeep/cherokee/">2023 Jeep Cherokee</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/jeep/grand-cherokee/">2024 Jeep Grand Cherokee</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/jeep/renegade/">2023 Jeep Renegade</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/jeep/wrangler/">2024 Jeep Wrangler</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/kia/sorento/">2024 Kia Sorento</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/kia/stinger/">2023 Kia Stinger</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/mazda/cx-5/">2025 Mazda CX-5</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/nissan/rogue/">2024 Nissan Rogue</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/subaru/ascent/">2024 Subaru Ascent</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/subaru/crosstrek/">2024 Subaru Crosstrek</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/subaru/forester/">2025 Subaru Forester</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/subaru/outback/">2024 Subaru Outback</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/toyota/4runner/">2024 Toyota 4Runner</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="expandable-list-item md:border-b"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="seoLinkColumnHeading">
                            <div class="heading-4 normal-case w-full px-3 py-3">Browse Inventory</div><span class="ml-3 whitespace-nowrap">
                                <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></div>
                            </span>
                        </button>
                        <div class="expandable-list-item-collapse border-t collapse" style="">
                            <div class="px-3 py-3 expandable-list-item-shadow">
                                <ul class="space-y-2">
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ca/">California Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/tx/">Texas Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/fl/">Florida Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ny/">New York Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/pa/">Pennsylvania Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/il/">Illinois Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/oh/">Ohio Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ga/">Georgia Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/nc/">North Carolina Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/mi/">Michigan Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/nj/">New Jersey Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/va/">Virginia Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/wa/">Washington Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/az/">Arizona Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ma/">Massachusetts Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/tn/">Tennessee Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/in/">Indiana Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/mo/">Missouri Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/md/">Maryland Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/wi/">Wisconsin Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/co/">Colorado Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/mn/">Minnesota Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/sc/">South Carolina Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/al/">Alabama Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/la/">Louisiana Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ky/">Kentucky Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/or/">Oregon Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ok/">Oklahoma Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ct/">Connecticut Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ut/">Utah Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ia/">Iowa Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/nv/">Nevada Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ar/">Arkansas Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ms/">Mississippi Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ks/">Kansas Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/nm/">New Mexico Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ne/">Nebraska Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/wv/">West Virginia Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/id/">Idaho Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/hi/">Hawaii Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/nh/">New Hampshire Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/me/">Maine Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/mt/">Montana Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ri/">Rhode Island Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/de/">Delaware Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/sd/">South Dakota Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/nd/">North Dakota Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/ak/">Alaska Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/dc/">District of Columbia Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/vt/">Vermont Inventory</a></li>
                                    <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/sitemap/state/wy/">Wyoming Inventory</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection
