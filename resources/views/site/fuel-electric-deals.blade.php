@extends('site.layouts.app')
@section('content')

          <main
            id="mainContent" style="margin-top: 60px;"
            class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]"
          >
            <div
              class="relative overflow-hidden"
              data-test="vehicleTypeDealsPage"
            >
              <div
                class="absolute top-[-60px] z-1 h-[60px] w-[100%] shadow-[2px_2px_5px_rgba(1,_1,_1,_0.15)]"
              ></div>
              <nav
                class="theme-white md:overflow-x-auto h-[60px] whitespace-nowrap border mb-1"
              >
                <div class="container h-full">
                  <div class="hidden-sm-down flex h-full items-center">
                    <div class="border-r pr-2-5">
                      <a class="no-underline text-dark" href="/electric/"
                        >Electric Vehicles</a
                      >
                    </div>
                    <ul class="flex">
                      <li class="ml-2-5 md:ml-3 mr-3 md:mr-4">
                        <a
                          class="no-underline"
                          href="/new-cars-for-sale/listings/fuel-electric/"
                          >New EVs</a
                        >
                      </li>
                      <li class="mr-3 md:mr-4">
                        <a
                          class="no-underline"
                          href="/used-cars-for-sale/listings/fuel-electric/"
                          >Used EVs</a
                        >
                      </li>
                      <li class="mr-3 md:mr-4">
                        <a
                          class="no-underline"
                          href="/used-cars-for-sale/listings/tesla/"
                          >Used Teslas</a
                        >
                      </li>
                      <li class="mr-3 md:mr-4">
                        <a class="no-underline" href="/electric/incentives/"
                          >EV Incentives</a
                        >
                      </li>
                      <li class="mr-3 md:mr-4">
                        <span class="font-bold">EV Deals</span>
                      </li>
                      <li class="mr-3 md:mr-4">
                        <a
                          class="no-underline"
                          href="/best-cars-trucks/fuel-electric/"
                          >Best EVs</a
                        >
                      </li>
                      <li class="mr-3 md:mr-4">
                        <a
                          href="https://www.truecar.com/blog/electric-vehicle-buyers-guide/"
                          target="_blank"
                          class="no-underline"
                          >Buyer's Guide</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="hidden-md-up flex h-full items-center">
                    <div class="w-full dropdown">
                      <button
                        aria-expanded="false"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        class="flex items-center text-dark"
                      >
                        <span class="font-bold">EV Deals</span
                        ><span class="ml-1 flex items-center"
                          ><svg
                            viewBox="0 0 24 24"
                            class="icon icon-fill-default"
                            aria-hidden="true"
                            style="width: 24px; height: 24px"
                          >
                            <use href="#arrow_drop_down"></use></svg
                        ></span>
                      </button>
                      <ul
                        tabindex="-1"
                        role="menu"
                        aria-hidden="true"
                        class="px-3 pt-3 pb-2 mt-[19px] -ml-2-5 border-none rounded-none z-[1040] bg-dark w-[calc(100%+2.5rem)] dropdown-menu"
                      >
                        <div class="row">
                          <div class="col-4">
                            <button
                              type="button"
                              tabindex="0"
                              role="menuitem"
                              class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"
                            >
                              <a
                                class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark"
                                href="/electric/"
                                >Electric Vehicles</a
                              >
                            </button>
                          </div>
                          <div class="col-4">
                            <button
                              type="button"
                              tabindex="0"
                              role="menuitem"
                              class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"
                            >
                              <a
                                class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark"
                                href="/new-cars-for-sale/listings/fuel-electric/"
                                >New EVs</a
                              >
                            </button>
                          </div>
                          <div class="col-4">
                            <button
                              type="button"
                              tabindex="0"
                              role="menuitem"
                              class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"
                            >
                              <a
                                class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark"
                                href="/used-cars-for-sale/listings/fuel-electric/"
                                >Used EVs</a
                              >
                            </button>
                          </div>
                          <div class="col-4">
                            <button
                              type="button"
                              tabindex="0"
                              role="menuitem"
                              class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"
                            >
                              <a
                                class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark"
                                href="/used-cars-for-sale/listings/tesla/"
                                >Used Teslas</a
                              >
                            </button>
                          </div>
                          <div class="col-4">
                            <button
                              type="button"
                              tabindex="0"
                              role="menuitem"
                              class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"
                            >
                              <a
                                class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark"
                                href="/electric/incentives/"
                                >EV Incentives</a
                              >
                            </button>
                          </div>
                          <div class="col-4">
                            <button
                              type="button"
                              tabindex="0"
                              role="menuitem"
                              class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"
                            >
                              <a
                                class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark"
                                href="/best-cars-trucks/fuel-electric/"
                                >Best EVs</a
                              >
                            </button>
                          </div>
                          <div class="col-4">
                            <button
                              type="button"
                              tabindex="0"
                              role="menuitem"
                              class="h-[74px] bg-white flex justify-center justify-center rounded mb-3 text-xs px-0 py-0 dropdown-item"
                            >
                              <a
                                href="https://www.truecar.com/blog/electric-vehicle-buyers-guide/"
                                target="_blank"
                                class="no-underline flex w-full h-full items-center justify-center font-normal text-center px-2-5 whitespace-normal text-dark hover:text-dark"
                                >Buyer's Guide</a
                              >
                            </button>
                          </div>
                        </div>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
              <div class="container pt-3 pb-3 md:pt-5 md:pb-4">
                <div>
                  <nav aria-label="breadcrumb">
                    <ol class="flex flex-wrap">
                      <li
                        data-test="breadcrumbListItem"
                        class="list-none"
                        aria-current="false"
                      >
                        <a href="/deals/">Deals &amp; Incentives</a
                        ><span class="my-[0px] mx-[9px] text-muted">/</span>
                      </li>
                      <li
                        data-test="breadcrumbListItem"
                        class="list-none"
                        aria-current="page"
                      >
                        <span>Electric Vehicle Deals</span>
                      </li>
                    </ol>
                  </nav>
                </div>
                <div class="hidden-md-up pt-3">
                  <button
                    type="button"
                    data-ignore-contrast="false"
                    data-loading="false"
                    class="w-full btn btn-secondary btn-md"
                  >
                    <span class="btn-inner">Browse Deals by Vehicle Type</span>
                  </button>
                </div>
              </div>
              <div
                class="pt-3 pb-4 hidden-sm-down relative z-1 shadow-[2px_4px_9px_0_rgba(1,_1,_1,_0.15)]"
              >
                <div class="container">
                  <div class="heading-base mb-5 font-bold">
                    Browse Deals by Vehicle&nbsp;Type
                  </div>


                  <div class="hidden-sm-down relative" data-test="rankingsNavigation">
                <div>
                    <div class="container container-max-width-3">
                        <nav aria-label="Rankings Categories" data-test="rankingCategoriesCarousel">
                            <div class="flex w-full items-center">
                                <div class="w-full">
                                    <div class="carousel [@media(any-hover:hover)]:h-[115px] [@media(any-hover:hover)]:overflow-hidden [@media(any-hover:hover)]:px-1">
                                        <div class="relative flex w-full items-center">
                                            <button class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-0 carousel-arrow-prev carousel-arrow-prev" data-test="carouselArrowPrev" aria-label="Previous">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="carousel-arrow-icon">
                                                    <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                        <polyline stroke-width="1.5" fill-rule="nonzero" points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                                    </g>
                                                </svg>
                                            </button>
                                            <div class="grow" style="position: relative; overflow: hidden">
                                                <ul role="menubar" data-test="carouselSlideContainer" class="" style="display: flex; flex-flow: row; position: relative; overflow: hidden; transform: translateX(-232px);">
                                                    <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="
                                      scroll-snap-align: start;
                                      flex-shrink: 0;
                                      width: 20%;
                                    " inert="" aria-hidden="true">
                                                        <button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Cars" style="block-size: fit-content" tabindex="-1">
                                                            <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                                <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                                    <div class="img-container" style="
                                              height: 50px;
                                              padding-bottom: 0px;
                                              width: 100px;
                                            ">
                                                                        <img src="http://127.0.0.1:8000/assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="
                                                background-image: url(http://127.0.0.1:8000/assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg);
                                              ">
                                                                    </div>
                                                                    <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">
                                                                        Cars
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="
                                      scroll-snap-align: start;
                                      flex-shrink: 0;
                                      width: 20%;
                                    " inert="" aria-hidden="true">
                                                        <button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Trucks" style="block-size: fit-content" tabindex="-1">
                                                            <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                                <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                                    <div class="img-container" style="
                                              height: 50px;
                                              padding-bottom: 0px;
                                              width: 100px;
                                            ">
                                                                        <img src="http://127.0.0.1:8000/assets/_next/static/images/iconTrucks-580a7f2703d3c26ce63c295dc03d166d.svg" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="
                                                background-image: url(http://127.0.0.1:8000/assets/_next/static/images/iconTrucks-580a7f2703d3c26ce63c295dc03d166d.svg);">
                                                                    </div>
                                                                    <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">
                                                                        Trucks
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="
                                      scroll-snap-align: start;
                                      flex-shrink: 0;
                                      width: 20%;
                                    " inert="" aria-hidden="true">
                                                        <button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best SUVs" style="block-size: fit-content" tabindex="-1">
                                                            <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                                <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                                    <div class="img-container" style="
                                              height: 50px;
                                              padding-bottom: 0px;
                                              width: 100px;
                                            ">
                                                                        <img src="http://127.0.0.1:8000/assets/_next/static/images/iconSuv-f1ac2be397703ffcacdbfd74eea4299a.svg" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="
                                                background-image: url(http://127.0.0.1:8000/assets/_next/static/images/iconSuv-f1ac2be397703ffcacdbfd74eea4299a.svg)
                                              ">
                                                                    </div>
                                                                    <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">
                                                                        SUVs
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="
                                      scroll-snap-align: start;
                                      flex-shrink: 0;
                                      width: 20%;
                                    " inert="" aria-hidden="true">
                                                        <button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Sedans" style="block-size: fit-content" tabindex="-1">
                                                            <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                                <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                                    <div class="img-container" style="
                                              height: 50px;
                                              padding-bottom: 0px;
                                              width: 100px;
                                            ">
                                                                        <img src="http://127.0.0.1:8000/assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="
                                                background-image: url(http://127.0.0.1:8000/assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg)
                                              ">
                                                                    </div>
                                                                    <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">
                                                                        Sedans
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="
                                      scroll-snap-align: start;
                                      flex-shrink: 0;
                                      width: 20%;
                                    " inert="" aria-hidden="true">
                                                        <button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Hatchbacks" style="block-size: fit-content" tabindex="-1">
                                                            <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                                <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                                    <div class="img-container" style="
                                              height: 50px;
                                              padding-bottom: 0px;
                                              width: 100px;
                                            ">
                                                                        <img src="http://127.0.0.1:8000/assets/_next/static/images/iconHatchbacks-5fef3ca145dd8b50777b2033a6f4d6b0.svg" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="
                                                background-image: url(http://127.0.0.1:8000/assets/_next/static/images/iconHatchbacks-5fef3ca145dd8b50777b2033a6f4d6b0.svg)
                                              ">
                                                                    </div>
                                                                    <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">
                                                                        Hatchbacks
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="carouselCurrentSlide5" style="
                                      scroll-snap-align: start;
                                      flex-shrink: 0;
                                      width: 20%;
                                    ">
                                                        <button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Wagons" style="block-size: fit-content">
                                                            <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                                <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                                    <div class="img-container" style="
                                              height: 50px;
                                              padding-bottom: 0px;
                                              width: 100px;
                                            ">
                                                                        <img src="http://127.0.0.1:8000/assets/_next/static/images/iconWagons-570cc460532e6540d6108d60cf281230.svg" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="
                                                background-image: url(http://127.0.0.1:8000/assets/_next/static/images/iconWagons-570cc460532e6540d6108d60cf281230.svg)
                                              ">
                                                                    </div>
                                                                    <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">
                                                                        Wagons
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="
                                      scroll-snap-align: start;
                                      flex-shrink: 0;
                                      width: 20%;
                                    ">
                                                        <button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Coupes" style="block-size: fit-content">
                                                            <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                                <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                                    <div class="img-container" style="
                                              height: 50px;
                                              padding-bottom: 0px;
                                              width: 100px;
                                            ">
                                                                        <img src="http://127.0.0.1:8000/assets/_next/static/images/iconCoupes-b13ad2ede15fb4beb0d01df2269cf9f8.svg" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="
                                                background-image: url(http://127.0.0.1:8000/assets/_next/static/images/iconCoupes-b13ad2ede15fb4beb0d01df2269cf9f8.svg)
                                              ">
                                                                    </div>
                                                                    <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">
                                                                        Coupes
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="
                                      scroll-snap-align: start;
                                      flex-shrink: 0;
                                      width: 20%;
                                    ">
                                                        <button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Convertibles" style="block-size: fit-content">
                                                            <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                                <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                                    <div class="img-container" style="
                                              height: 50px;
                                              padding-bottom: 0px;
                                              width: 100px;
                                            ">
                                                                        <img src="http://127.0.0.1:8000/assets/_next/static/images/iconConvertables-be884bb8d136f35bb6558b94fd825344.svg" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="
                                                background-image: url(http://127.0.0.1:8000/assets/_next/static/images/iconConvertables-be884bb8d136f35bb6558b94fd825344.svg)
                                              ">
                                                                    </div>
                                                                    <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">
                                                                        Convertibles
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="
                                      scroll-snap-align: start;
                                      flex-shrink: 0;
                                      width: 20%;
                                    ">
                                                        <button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Vans" style="block-size: fit-content">
                                                            <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                                <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                                    <div class="img-container" style="
                                              height: 50px;
                                              padding-bottom: 0px;
                                              width: 100px;
                                            ">
                                                                        <img src="http://127.0.0.1:8000/assets/_next/static/images/iconVans-870c7511e02faf9d23d77dfe8e77ff45.svg" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="
                                                background-image: url(http://127.0.0.1:8000/assets/_next/static/images/iconVans-870c7511e02faf9d23d77dfe8e77ff45.svg)
                                              ">
                                                                    </div>
                                                                    <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">
                                                                        Vans
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li role="none" class="p-0 lg:w-[25%] xl:w-[20%]" data-test="" style="
                                      scroll-snap-align: start;
                                      flex-shrink: 0;
                                      width: 20%;
                                    ">
                                                        <button type="button" class="link-button inset-focus h-[-moz-fit-content] w-full items-center border-none" aria-haspopup="menu" role="menuitem" aria-expanded="false" aria-label="Best Other" style="block-size: fit-content">
                                                            <div class="linkable card rounded-none shadow-none before:hidden bg-transparent shadow-none" size="2" data-test="rankingCarouselCategory">
                                                                <div data-test="cardContent" class="card-content card-content-center flex-row items-center py-2 md:flex-col md:py-3">
                                                                    <div class="img-container" style="
                                              height: 50px;
                                              padding-bottom: 0px;
                                              width: 100px;
                                            ">
                                                                        <img src="http://127.0.0.1:8000/assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg" alt="" role="presentation" loading="lazy" class="img-inner img-contain" style="
                                                background-image: url(http://127.0.0.1:8000/assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg)
                                              ">
                                                                    </div>
                                                                    <div class="heading-5 normal-case heading-xl-4 xl:normal-case ml-3 pt-1 md:ml-0">
                                                                        Other
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <button class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-0 carousel-arrow-next carousel-arrow-next" data-test="carouselArrowNext" aria-label="Next">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="carousel-arrow-icon">
                                                    <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                        <polyline stroke-width="1.5" fill-rule="nonzero" points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
                </div>
              </div>
              <div class="bg-light pt-5 lg:pt-6">
                <div class="container">
                  <h1
                    class="heading-3 normal-case heading-lg-1 lg:normal-case mb-3"
                    data-test="bodyTypeDealsHeading"
                  >
                    Deals on Popular Electric Vehicles Near You
                  </h1>
                  <p class="mb-3 lg:mb-4">
                    Find deals on the most popular electric vehicles based on
                    TrueCar sales data. Updated monthly.
                  </p>
                  <div class="mb-4 max-w-[326px] md:mb-3 lg:mb-0">
                    <div class="field-container-challenger">
                      <div
                        class="field-wrapper-challenger field-label-padding-challenger"
                      >
                        <div class="field-content-row field-with-suffix">
                          <div
                            class="field-input-label-challenger input-label-select"
                          >
                            <select
                              required=""
                              aria-label="Deal Type"
                              class="form-select-element-challenger"
                            >
                              <option value="ALL">All Deals</option>
                              <option value="CASH">Cash Offer</option>
                              <option value="FINANCE">Finance</option>
                              <option value="LEASE">Lease</option>
                            </select>
                            <div
                              class="field-label-text-challenger"
                              data-test="fieldLabel"
                            >
                              <label data-ignore-contrast="true"
                                >Deal Type</label
                              >
                            </div>
                          </div>
                          <div
                            class="field-addon-challenger field-addon-challenger-suffix"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default"
                              aria-hidden="true"
                              style="width: 24px; height: 24px"
                            >
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
                  <div
                    class="flex justify-between pb-4 lg:pb-0 lg:mb-3 lg:mt-5"
                  >
                    <div class="flex lg:flex-row items-baseline">
                      <div
                        class="pr-3 md:pb-2 lg:pb-0"
                        data-test="zipCodeValue"
                      >
                        <span class="hidden-md-down">We found </span
                        ><span class="md:font-bold">86 <span>deals </span></span
                        ><span class="hidden-lg-up">found </span>near
                        <span class="hidden-sm-down">Santa Monica, CA</span>
                        <span class="max-md:font-bold">90401</span>
                      </div>
                      <button
                        type="button"
                        class="link-button block lg:inline"
                        data-test="changeLocationModalLink"
                      >
                        Change <span class="hidden-sm-down">Location</span
                        ><span class="hidden-md-up">ZIP</span>
                      </button>
                    </div>
                  </div>
                  <p>
                    Showing deals for top 10 popular electric vehicle models
                  </p>
                </div>
                <div class="bg-light pt-4">
                  <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                      <div class="flex items-baseline pb-2">
                        <div class="flex items-center md:mr-2">
                          <h2
                            class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1"
                          >
                            Hyundai IONIQ 5
                          </h2>
                          <button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 28px; height: 28px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div></button
                          ><button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 30px; height: 30px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div>
                          </button>
                        </div>
                        <div>
                          <div class="heading-4 normal-case inline-block">
                            7 Deals Available
                          </div>
                        </div>
                      </div>
                      <div class="relative">
                        <div
                          class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]"
                        ></div>
                        <div class="hidden-sm-down">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/hyundai/ioniq-5-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/hyundai/ioniq-5/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                        <span
                          class="hidden-md-down absolute right-0 top-[119px] pt-3"
                          >2024 Hyundai IONIQ 5</span
                        >
                        <div
                          class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]"
                        >
                          <div
                            class="picture-container picture-container-block"
                            style="padding-bottom: 50%"
                          >
                            <img
                              class="picture-block"
                              sizes="400px"
                              src="https://static.tcimg.net/vehicles/primary/4d07193d980062cf/2024-Hyundai-IONIQ_5-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                              srcset="
                                https://static.tcimg.net/vehicles/primary/4d07193d980062cf/2024-Hyundai-IONIQ_5-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w,
                                https://static.tcimg.net/vehicles/primary/4d07193d980062cf/2024-Hyundai-IONIQ_5-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w
                              "
                              alt=""
                              role="presentation"
                            />
                          </div>
                          <div class="hidden-lg-up pt-1 text-center">
                            2024 Hyundai IONIQ 5
                          </div>
                        </div>
                        <div class="hidden-md-up">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/hyundai/ioniq-5-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/hyundai/ioniq-5/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lg:mt-2" data-test="dealsRow">
                        <div class="row ml-[-20px]">
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >CASH OFFER</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Retail Bonus Cash
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $7,500
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >FINANCE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Hyundai HMF Dealer&nbsp;Choice
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="mr-4 inline-block">
                                      <div class="text-sm font-bold invisible">
                                        Up to
                                      </div>
                                      <div class="heading-3 normal-case">
                                        6.49%
                                      </div>
                                      <div>APR</div>
                                    </div>
                                    <div class="mr-4 inline-block">
                                      <div class="text-sm font-bold invisible">
                                        Up to
                                      </div>
                                      <div class="heading-3 normal-case">
                                        60
                                      </div>
                                      <div>months</div>
                                    </div>
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $7,500
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4"
                          >
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >LEASE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    2024 Hyundai IONIQ 5&nbsp;Lease
                                  </h2>
                                  <div class="flex grow flex-nowrap">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        $230
                                      </div>
                                      <div>per month</div>
                                    </div>
                                    <div class="inline-block">
                                      <div class="heading-3 normal-case">
                                        36
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <a
                                    data-test="viewLeaseDealsDetails"
                                    href="/hyundai/ioniq-5/lease/"
                                    >View Lease Options</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pt-4">
                          <button type="button" class="link-button">
                            See More
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-light pt-4">
                  <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                      <div class="flex items-baseline pb-2">
                        <div class="flex items-center md:mr-2">
                          <h2
                            class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1"
                          >
                            Kia EV9
                          </h2>
                          <button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 28px; height: 28px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div></button
                          ><button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 30px; height: 30px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div>
                          </button>
                        </div>
                        <div>
                          <div class="heading-4 normal-case inline-block">
                            6 Deals Available
                          </div>
                        </div>
                      </div>
                      <div class="relative">
                        <div
                          class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]"
                        ></div>
                        <div class="hidden-sm-down">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/kia/ev9-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/kia/ev9/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                        <span
                          class="hidden-md-down absolute right-0 top-[119px] pt-3"
                          >2024 Kia EV9</span
                        >
                        <div
                          class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]"
                        >
                          <div
                            class="picture-container picture-container-block"
                            style="padding-bottom: 50%"
                          >
                            <img
                              class="picture-block"
                              sizes="400px"
                              src="https://static.tcimg.net/vehicles/primary/7589d5c1318bd529/2024-Kia-EV9-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                              srcset="
                                https://static.tcimg.net/vehicles/primary/7589d5c1318bd529/2024-Kia-EV9-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w,
                                https://static.tcimg.net/vehicles/primary/7589d5c1318bd529/2024-Kia-EV9-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w
                              "
                              alt=""
                              role="presentation"
                            />
                          </div>
                          <div class="hidden-lg-up pt-1 text-center">
                            2024 Kia EV9
                          </div>
                        </div>
                        <div class="hidden-md-up">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/kia/ev9-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/kia/ev9/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lg:mt-2" data-test="dealsRow">
                        <div class="row ml-[-20px]">
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >CASH OFFER</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Kia Customer Cash
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $7,500
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >FINANCE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    KMF Low APR&nbsp;Program
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        0%
                                      </div>
                                      <div>APR</div>
                                    </div>
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        48
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4"
                          >
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >LEASE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    2024 Kia EV9&nbsp;Lease
                                  </h2>
                                  <div class="flex grow flex-nowrap">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        $444
                                      </div>
                                      <div>per month</div>
                                    </div>
                                    <div class="inline-block">
                                      <div class="heading-3 normal-case">
                                        36
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <a
                                    data-test="viewLeaseDealsDetails"
                                    href="/kia/ev9/lease/"
                                    >View Lease Options</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pt-4">
                          <button type="button" class="link-button">
                            See More
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-light pt-4">
                  <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                      <div class="flex items-baseline pb-2">
                        <div class="flex items-center md:mr-2">
                          <h2
                            class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1"
                          >
                            Hyundai IONIQ 6
                          </h2>
                          <button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 28px; height: 28px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div></button
                          ><button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 30px; height: 30px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div>
                          </button>
                        </div>
                        <div>
                          <div class="heading-4 normal-case inline-block">
                            8 Deals Available
                          </div>
                        </div>
                      </div>
                      <div class="relative">
                        <div
                          class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]"
                        ></div>
                        <div class="hidden-sm-down">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/hyundai/ioniq-6-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/hyundai/ioniq-6/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                        <span
                          class="hidden-md-down absolute right-0 top-[119px] pt-3"
                          >2024 Hyundai IONIQ 6</span
                        >
                        <div
                          class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]"
                        >
                          <div
                            class="picture-container picture-container-block"
                            style="padding-bottom: 50%"
                          >
                            <img
                              class="picture-block"
                              sizes="400px"
                              src="https://static.tcimg.net/vehicles/primary/13df02f0df2c1444/2024-Hyundai-IONIQ_6-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                              srcset="
                                https://static.tcimg.net/vehicles/primary/13df02f0df2c1444/2024-Hyundai-IONIQ_6-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w,
                                https://static.tcimg.net/vehicles/primary/13df02f0df2c1444/2024-Hyundai-IONIQ_6-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w
                              "
                              alt=""
                              role="presentation"
                            />
                          </div>
                          <div class="hidden-lg-up pt-1 text-center">
                            2024 Hyundai IONIQ 6
                          </div>
                        </div>
                        <div class="hidden-md-up">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/hyundai/ioniq-6-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/hyundai/ioniq-6/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lg:mt-2" data-test="dealsRow">
                        <div class="row ml-[-20px]">
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >CASH OFFER</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Retail Bonus Cash
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $7,500
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >FINANCE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Hyundai HMF Dealer&nbsp;Choice
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="mr-4 inline-block">
                                      <div class="text-sm font-bold invisible">
                                        Up to
                                      </div>
                                      <div class="heading-3 normal-case">
                                        6.49%
                                      </div>
                                      <div>APR</div>
                                    </div>
                                    <div class="mr-4 inline-block">
                                      <div class="text-sm font-bold invisible">
                                        Up to
                                      </div>
                                      <div class="heading-3 normal-case">
                                        60
                                      </div>
                                      <div>months</div>
                                    </div>
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $7,500
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4"
                          >
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >LEASE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    2024 Hyundai IONIQ 6&nbsp;Lease
                                  </h2>
                                  <div class="flex grow flex-nowrap">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        $268
                                      </div>
                                      <div>per month</div>
                                    </div>
                                    <div class="inline-block">
                                      <div class="heading-3 normal-case">
                                        36
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <a
                                    data-test="viewLeaseDealsDetails"
                                    href="/hyundai/ioniq-6/lease/"
                                    >View Lease Options</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pt-4">
                          <button type="button" class="link-button">
                            See More
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-light pt-4">
                  <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                      <div class="flex items-baseline pb-2">
                        <div class="flex items-center md:mr-2">
                          <h2
                            class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1"
                          >
                            Kia EV6
                          </h2>
                          <button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 28px; height: 28px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div></button
                          ><button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 30px; height: 30px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div>
                          </button>
                        </div>
                        <div>
                          <div class="heading-4 normal-case inline-block">
                            6 Deals Available
                          </div>
                        </div>
                      </div>
                      <div class="relative">
                        <div
                          class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]"
                        ></div>
                        <div class="hidden-sm-down">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/kia/ev6-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/kia/ev6/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                        <span
                          class="hidden-md-down absolute right-0 top-[119px] pt-3"
                          >2024 Kia EV6</span
                        >
                        <div
                          class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]"
                        >
                          <div
                            class="picture-container picture-container-block"
                            style="padding-bottom: 50%"
                          >
                            <img
                              class="picture-block"
                              sizes="400px"
                              src="https://static.tcimg.net/vehicles/primary/3f93089487bfe2ff/2024-Kia-EV6-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                              srcset="
                                https://static.tcimg.net/vehicles/primary/3f93089487bfe2ff/2024-Kia-EV6-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w,
                                https://static.tcimg.net/vehicles/primary/3f93089487bfe2ff/2024-Kia-EV6-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w
                              "
                              alt=""
                              role="presentation"
                            />
                          </div>
                          <div class="hidden-lg-up pt-1 text-center">
                            2024 Kia EV6
                          </div>
                        </div>
                        <div class="hidden-md-up">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/kia/ev6-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/kia/ev6/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lg:mt-2" data-test="dealsRow">
                        <div class="row ml-[-20px]">
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >CASH OFFER</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Kia Customer Cash
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $7,500
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >FINANCE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    KMF Low APR&nbsp;Program
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        0%
                                      </div>
                                      <div>APR</div>
                                    </div>
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        48
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4"
                          >
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >LEASE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    2024 Kia EV6&nbsp;Lease
                                  </h2>
                                  <div class="flex grow flex-nowrap">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        $251
                                      </div>
                                      <div>per month</div>
                                    </div>
                                    <div class="inline-block">
                                      <div class="heading-3 normal-case">
                                        36
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <a
                                    data-test="viewLeaseDealsDetails"
                                    href="/kia/ev6/lease/"
                                    >View Lease Options</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pt-4">
                          <button type="button" class="link-button">
                            See More
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-light pt-4">
                  <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                      <div class="flex items-baseline pb-2">
                        <div class="flex items-center md:mr-2">
                          <h2
                            class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1"
                          >
                            Volkswagen ID.4
                          </h2>
                          <button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 28px; height: 28px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div></button
                          ><button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 30px; height: 30px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div>
                          </button>
                        </div>
                        <div>
                          <div class="heading-4 normal-case inline-block">
                            11 Deals Available
                          </div>
                        </div>
                      </div>
                      <div class="relative">
                        <div
                          class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]"
                        ></div>
                        <div class="hidden-sm-down">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/volkswagen/id-4-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/volkswagen/id-4/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                        <span
                          class="hidden-md-down absolute right-0 top-[119px] pt-3"
                          >2024 Volkswagen ID.4</span
                        >
                        <div
                          class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]"
                        >
                          <div
                            class="picture-container picture-container-block"
                            style="padding-bottom: 50%"
                          >
                            <img
                              class="picture-block"
                              sizes="400px"
                              src="https://static.tcimg.net/vehicles/primary/d1ce5192bde04752/2024-Volkswagen-ID.4-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                              srcset="
                                https://static.tcimg.net/vehicles/primary/d1ce5192bde04752/2024-Volkswagen-ID.4-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w,
                                https://static.tcimg.net/vehicles/primary/d1ce5192bde04752/2024-Volkswagen-ID.4-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w
                              "
                              alt=""
                              role="presentation"
                            />
                          </div>
                          <div class="hidden-lg-up pt-1 text-center">
                            2024 Volkswagen ID.4
                          </div>
                        </div>
                        <div class="hidden-md-up">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/volkswagen/id-4-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/volkswagen/id-4/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lg:mt-2" data-test="dealsRow">
                        <div class="row ml-[-20px]">
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >CASH OFFER</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    EV Lease Bonus
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $7,500
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >FINANCE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Special APR -&nbsp;ID.4
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        0%
                                      </div>
                                      <div>APR</div>
                                    </div>
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        72
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4"
                          >
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >LEASE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    2024 Volkswagen ID.4&nbsp;Lease
                                  </h2>
                                  <div class="flex grow flex-nowrap">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        $205
                                      </div>
                                      <div>per month</div>
                                    </div>
                                    <div class="inline-block">
                                      <div class="heading-3 normal-case">
                                        36
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <a
                                    data-test="viewLeaseDealsDetails"
                                    href="/volkswagen/id-4/lease/"
                                    >View Lease Options</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pt-4">
                          <button type="button" class="link-button">
                            See More
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-light pt-4">
                  <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                      <div class="flex items-baseline pb-2">
                        <div class="flex items-center md:mr-2">
                          <h2
                            class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1"
                          >
                            Ford Mustang Mach‑E
                          </h2>
                          <button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 28px; height: 28px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div></button
                          ><button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 30px; height: 30px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div>
                          </button>
                        </div>
                        <div>
                          <div class="heading-4 normal-case inline-block">
                            11 Deals Available
                          </div>
                        </div>
                      </div>
                      <div class="relative">
                        <div
                          class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]"
                        ></div>
                        <div class="hidden-sm-down">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/ford/mustang-mach-e-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/ford/mustang-mach-e/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                        <span
                          class="hidden-md-down absolute right-0 top-[119px] pt-3"
                          >2024 Ford Mustang Mach‑E</span
                        >
                        <div
                          class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]"
                        >
                          <div
                            class="picture-container picture-container-block"
                            style="padding-bottom: 50%"
                          >
                            <img
                              class="picture-block"
                              sizes="400px"
                              src="https://static.tcimg.net/vehicles/primary/3c2842cbb55ce982/2024-Ford-Mustang_Mach-E-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                              srcset="
                                https://static.tcimg.net/vehicles/primary/3c2842cbb55ce982/2024-Ford-Mustang_Mach-E-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w,
                                https://static.tcimg.net/vehicles/primary/3c2842cbb55ce982/2024-Ford-Mustang_Mach-E-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w
                              "
                              alt=""
                              role="presentation"
                            />
                          </div>
                          <div class="hidden-lg-up pt-1 text-center">
                            2024 Ford Mustang Mach‑E
                          </div>
                        </div>
                        <div class="hidden-md-up">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/ford/mustang-mach-e-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/ford/mustang-mach-e/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lg:mt-2" data-test="dealsRow">
                        <div class="row ml-[-20px]">
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >CASH OFFER</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Summer Sales Event Ford Credit Retail Bonus
                                    Customer&nbsp;Cash
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $750
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >FINANCE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Ford Credit 90-Day Deferred Payment
                                    APR&nbsp;Financing
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        0%
                                      </div>
                                      <div>APR</div>
                                    </div>
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        74
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/30/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4"
                          >
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >LEASE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    2024 Ford Mustang Mach‑E&nbsp;Lease
                                  </h2>
                                  <div class="flex grow flex-nowrap">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        $674
                                      </div>
                                      <div>per month</div>
                                    </div>
                                    <div class="inline-block">
                                      <div class="heading-3 normal-case">
                                        36
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <a
                                    data-test="viewLeaseDealsDetails"
                                    href="/ford/mustang-mach-e/lease/"
                                    >View Lease Options</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pt-4">
                          <button type="button" class="link-button">
                            See More
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-light pt-4">
                  <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                      <div class="flex items-baseline pb-2">
                        <div class="flex items-center md:mr-2">
                          <h2
                            class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1"
                          >
                            BMW i4
                          </h2>
                          <button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 28px; height: 28px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div></button
                          ><button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 30px; height: 30px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div>
                          </button>
                        </div>
                        <div>
                          <div class="heading-4 normal-case inline-block">
                            10 Deals Available
                          </div>
                        </div>
                      </div>
                      <div class="relative">
                        <div
                          class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]"
                        ></div>
                        <div class="hidden-sm-down">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/bmw/i4-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/bmw/i4/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                        <span
                          class="hidden-md-down absolute right-0 top-[119px] pt-3"
                          >2024 BMW i4</span
                        >
                        <div
                          class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]"
                        >
                          <div
                            class="picture-container picture-container-block"
                            style="padding-bottom: 50%"
                          >
                            <img
                              class="picture-block"
                              sizes="400px"
                              src="https://static.tcimg.net/vehicles/primary/32922d7c9a58dc32/2024-BMW-i4-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                              srcset="
                                https://static.tcimg.net/vehicles/primary/32922d7c9a58dc32/2024-BMW-i4-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w,
                                https://static.tcimg.net/vehicles/primary/32922d7c9a58dc32/2024-BMW-i4-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w
                              "
                              alt=""
                              role="presentation"
                            />
                          </div>
                          <div class="hidden-lg-up pt-1 text-center">
                            2024 BMW i4
                          </div>
                        </div>
                        <div class="hidden-md-up">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/bmw/i4-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/bmw/i4/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lg:mt-2" data-test="dealsRow">
                        <div class="row ml-[-20px]">
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >CASH OFFER</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    IRA Lease Credit
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $7,500
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >FINANCE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Sales Support APR&nbsp;Rates
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        2.99%
                                      </div>
                                      <div>APR</div>
                                    </div>
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        60
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4"
                          >
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >LEASE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    2024 BMW i4&nbsp;Lease
                                  </h2>
                                  <div class="flex grow flex-nowrap">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        $894
                                      </div>
                                      <div>per month</div>
                                    </div>
                                    <div class="inline-block">
                                      <div class="heading-3 normal-case">
                                        36
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <a
                                    data-test="viewLeaseDealsDetails"
                                    href="/bmw/i4/lease/"
                                    >View Lease Options</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pt-4">
                          <button type="button" class="link-button">
                            See More
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-light pt-4">
                  <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                      <div class="flex items-baseline pb-2">
                        <div class="flex items-center md:mr-2">
                          <h2
                            class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1"
                          >
                            Cadillac LYRIQ
                          </h2>
                          <button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 28px; height: 28px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div></button
                          ><button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 30px; height: 30px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div>
                          </button>
                        </div>
                        <div>
                          <div class="heading-4 normal-case inline-block">
                            15 Deals Available
                          </div>
                        </div>
                      </div>
                      <div class="relative">
                        <div
                          class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]"
                        ></div>
                        <div class="hidden-sm-down">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/cadillac/lyriq-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/cadillac/lyriq/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                        <span
                          class="hidden-md-down absolute right-0 top-[119px] pt-3"
                          >2024 Cadillac LYRIQ</span
                        >
                        <div
                          class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]"
                        >
                          <div
                            class="picture-container picture-container-block"
                            style="padding-bottom: 50%"
                          >
                            <img
                              class="picture-block"
                              sizes="400px"
                              src="https://static.tcimg.net/vehicles/primary/2cf998f7a08dbefd/2024-Cadillac-LYRIQ-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                              srcset="
                                https://static.tcimg.net/vehicles/primary/2cf998f7a08dbefd/2024-Cadillac-LYRIQ-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w,
                                https://static.tcimg.net/vehicles/primary/2cf998f7a08dbefd/2024-Cadillac-LYRIQ-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w
                              "
                              alt=""
                              role="presentation"
                            />
                          </div>
                          <div class="hidden-lg-up pt-1 text-center">
                            2024 Cadillac LYRIQ
                          </div>
                        </div>
                        <div class="hidden-md-up">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/cadillac/lyriq-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/cadillac/lyriq/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lg:mt-2" data-test="dealsRow">
                        <div class="row ml-[-20px]">
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >CASH OFFER</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    GM Rewards Card Sign Up and Spend&nbsp;Offer
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $500
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>10/31/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >FINANCE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Cadillac Financial Standalone APR &amp; Down
                                    Payment Assistance&nbsp;Program
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="mr-4 inline-block">
                                      <div class="text-sm font-bold invisible">
                                        Up to
                                      </div>
                                      <div class="heading-3 normal-case">
                                        2.9%
                                      </div>
                                      <div>APR</div>
                                    </div>
                                    <div class="mr-4 inline-block">
                                      <div class="text-sm font-bold invisible">
                                        Up to
                                      </div>
                                      <div class="heading-3 normal-case">
                                        36
                                      </div>
                                      <div>months</div>
                                    </div>
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $1,000
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4"
                          >
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >LEASE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    2024 Cadillac LYRIQ&nbsp;Lease
                                  </h2>
                                  <div class="flex grow flex-nowrap">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        $508
                                      </div>
                                      <div>per month</div>
                                    </div>
                                    <div class="inline-block">
                                      <div class="heading-3 normal-case">
                                        36
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <a
                                    data-test="viewLeaseDealsDetails"
                                    href="/cadillac/lyriq/lease/"
                                    >View Lease Options</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pt-4">
                          <button type="button" class="link-button">
                            See More
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-light pt-4">
                  <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                      <div class="flex items-baseline pb-2">
                        <div class="flex items-center md:mr-2">
                          <h2
                            class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1"
                          >
                            Hyundai Kona Electric
                          </h2>
                          <button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 28px; height: 28px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div></button
                          ><button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 30px; height: 30px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div>
                          </button>
                        </div>
                        <div>
                          <div class="heading-4 normal-case inline-block">
                            5 Deals Available
                          </div>
                        </div>
                      </div>
                      <div class="relative">
                        <div
                          class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]"
                        ></div>
                        <div class="hidden-sm-down">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/hyundai/kona-electric-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/hyundai/kona-electric/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                        <span
                          class="hidden-md-down absolute right-0 top-[119px] pt-3"
                          >2024 Hyundai Kona Electric</span
                        >
                        <div
                          class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]"
                        >
                          <div
                            class="picture-container picture-container-block"
                            style="padding-bottom: 50%"
                          >
                            <img
                              class="picture-block"
                              sizes="400px"
                              src="https://static.tcimg.net/vehicles/primary/c116c67abefa1d28/2024-Hyundai-Kona_Electric-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                              srcset="
                                https://static.tcimg.net/vehicles/primary/c116c67abefa1d28/2024-Hyundai-Kona_Electric-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w,
                                https://static.tcimg.net/vehicles/primary/c116c67abefa1d28/2024-Hyundai-Kona_Electric-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w
                              "
                              alt=""
                              role="presentation"
                            />
                          </div>
                          <div class="hidden-lg-up pt-1 text-center">
                            2024 Hyundai Kona Electric
                          </div>
                        </div>
                        <div class="hidden-md-up">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/hyundai/kona-electric-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/hyundai/kona-electric/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lg:mt-2" data-test="dealsRow">
                        <div class="row ml-[-20px]">
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >CASH OFFER</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Military Program
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $500
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >FINANCE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    Hyundai HMF Low&nbsp;APR
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        6.49%
                                      </div>
                                      <div>APR</div>
                                    </div>
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        60
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4"
                          >
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >LEASE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    2024 Hyundai Kona Electric&nbsp;Lease
                                  </h2>
                                  <div class="flex grow flex-nowrap">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        $350
                                      </div>
                                      <div>per month</div>
                                    </div>
                                    <div class="inline-block">
                                      <div class="heading-3 normal-case">
                                        36
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <a
                                    data-test="viewLeaseDealsDetails"
                                    href="/hyundai/kona-electric/lease/"
                                    >View Lease Options</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pt-4">
                          <button type="button" class="link-button">
                            See More
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-light pt-4">
                  <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                      <div class="flex items-baseline pb-2">
                        <div class="flex items-center md:mr-2">
                          <h2
                            class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1"
                          >
                            Toyota bZ4X
                          </h2>
                          <button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 28px; height: 28px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div></button
                          ><button
                            type="button"
                            class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                            aria-label="Save Model Button"
                            aria-pressed="false"
                            aria-haspopup="dialog"
                            data-test="saveModelButton"
                            data-test-item="notSaved"
                          >
                            <svg
                              viewBox="0 0 24 24"
                              class="icon icon-fill-default shrink-0 text-white stroke-black"
                              aria-hidden="true"
                              style="width: 30px; height: 30px"
                            >
                              <use href="#outlined-heart-fill"></use>
                            </svg>
                            <div
                              class="group-hover:text-dark group-hover:underline"
                            ></div>
                          </button>
                        </div>
                        <div>
                          <div class="heading-4 normal-case inline-block">
                            7 Deals Available
                          </div>
                        </div>
                      </div>
                      <div class="relative">
                        <div
                          class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]"
                        ></div>
                        <div class="hidden-sm-down">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/toyota/bz4x-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/toyota/bz4x/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                        <span
                          class="hidden-md-down absolute right-0 top-[119px] pt-3"
                          >2024 Toyota bZ4X</span
                        >
                        <div
                          class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]"
                        >
                          <div
                            class="picture-container picture-container-block"
                            style="padding-bottom: 50%"
                          >
                            <img
                              class="picture-block"
                              sizes="400px"
                              src="https://static.tcimg.net/vehicles/primary/4bd101c2a3b99201/2024-Toyota-bZ4X-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                              srcset="
                                https://static.tcimg.net/vehicles/primary/4bd101c2a3b99201/2024-Toyota-bZ4X-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w,
                                https://static.tcimg.net/vehicles/primary/4bd101c2a3b99201/2024-Toyota-bZ4X-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w
                              "
                              alt=""
                              role="presentation"
                            />
                          </div>
                          <div class="hidden-lg-up pt-1 text-center">
                            2024 Toyota bZ4X
                          </div>
                        </div>
                        <div class="hidden-md-up">
                          <div class="top-[119px] pt-3 md:absolute md:w-full">
                            <div class="ml-0" data-test="buildAndPriceCTA">
                              <a
                                data-ignore-contrast="true"
                                data-loading="false"
                                data-test="dealsModelCardConfigUrl"
                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                href="/prices-new/toyota/bz4x-level-setting/?modelYear=2024"
                                ><span class="btn-inner"
                                  >Build &amp; Price</span
                                ></a
                              >
                            </div>
                            <div class="ml-0">
                              <a
                                data-ignore-contrast="false"
                                data-loading="false"
                                href="/new-cars-for-sale/listings/toyota/bz4x/"
                                target=""
                                rel="noopener"
                                data-test="buttonViewInventory"
                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"
                                ><span class="btn-inner"
                                  >View Inventory</span
                                ></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lg:mt-2" data-test="dealsRow">
                        <div class="row ml-[-20px]">
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >CASH OFFER</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    TFS Lease Subvention&nbsp;Cash
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="inline-block">
                                      <div>
                                        <div class="text-sm font-bold">
                                          Up to
                                        </div>
                                        <div class="heading-3 normal-case">
                                          $15,250
                                        </div>
                                      </div>
                                      <div>Customer Cash</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >FINANCE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    TFS Special APR T3 -&nbsp;LA
                                  </h2>
                                  <div class="flex flex-nowrap justify-between">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        5.9%
                                      </div>
                                      <div>APR</div>
                                    </div>
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        72
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <div class="flex justify-between">
                                    <button
                                      type="button"
                                      class="link-button"
                                      data-test="viewDealsDetails"
                                    >
                                      View Details
                                    </button>
                                    <div>Exp. <span>09/03/24</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4"
                          >
                            <div
                              class="h-full flex flex-col bg-white min-h-[281px]"
                              data-test="dealsIncentiveCard"
                            >
                              <div
                                class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between"
                              >
                                <div class="flex grow flex-col">
                                  <div
                                    class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block"
                                  >
                                    <span
                                      class="font-bold text-white"
                                      data-test="dealType"
                                      >LEASE</span
                                    >
                                  </div>
                                  <h2
                                    class="heading-base mb-2 font-bold"
                                    style="flex-grow: 2"
                                  >
                                    2024 Toyota bZ4X&nbsp;Lease
                                  </h2>
                                  <div class="flex grow flex-nowrap">
                                    <div class="mr-4 inline-block">
                                      <div class="heading-3 normal-case">
                                        $465
                                      </div>
                                      <div>per month</div>
                                    </div>
                                    <div class="inline-block">
                                      <div class="heading-3 normal-case">
                                        36
                                      </div>
                                      <div>months</div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div class="my-2-5 border-t"></div>
                                  <a
                                    data-test="viewLeaseDealsDetails"
                                    href="/toyota/bz4x/lease/"
                                    >View Lease Options</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pt-4">
                          <button type="button" class="link-button">
                            See More
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex justify-center py-4 md:py-5">
                  <button
                    type="button"
                    data-ignore-contrast="false"
                    data-loading="false"
                    class="btn btn-secondary btn-md"
                  >
                    <div class="btn-inner btn-fade" style="opacity: 1">
                      Load More
                    </div>
                  </button>
                </div>
              </div>
              <section class="py-5">
                <div class="container">
                  <h2
                    class="heading-3 normal-case heading-md-2 md:normal-case mb-3"
                  >
                    Electric Vehicle Deals Information
                  </h2>
                  Interested in a new electric vehicle? For August 2024, there
                  are special financing rates for 37 electric vehicle models and
                  lease offers for 45 electric vehicle models. Monthly lease
                  payments for electric vehicles can be as low as $205 for the
                  2024 Volkswagen ID.4, with finance interest rates as low as
                  0%. There are also a variety of cash programs for electric
                  vehicles, including the Retail Bonus Cash and Military
                  Program.
                  <h2 class="heading-3 normal-case mt-5 mb-2-5">
                    Electric Vehicle Lease Deals
                  </h2>
                  <p>
                    You’ll find a variety of electric vehicle lease deals in
                    August 2024. The 2024 Volkswagen ID.4 is available for
                    $205/mo, while the 2024 Hyundai IONIQ 5 can be leased for
                    $230/mo (36 months, 12,000 miles per year, and $2,000 due at
                    signing). Leasing is a great option for electric vehicles,
                    and with many car manufacturers like Hyundai, Kia, and
                    Volkswagen, you’re likely to find a lease deal on a perfect
                    electric vehicle.
                  </p>
                  <h2 class="heading-3 normal-case mt-5 mb-2-5">
                    Electric Vehicle Finance Incentives
                  </h2>
                  <p>
                    Financing your next electric vehicle through the car
                    manufacturer can mean very competitive rates. Many models,
                    from the Hyundai IONIQ 5 to the Kia EV9 and the Kia EV6,
                    have low interest rates. One such special is 0% on a brand
                    new 2024 Hyundai IONIQ 5. Another is 0% for the 2024 Kia
                    EV9. Financing specials for electric vehicles are constantly
                    changing, but with deals from leading brands such as
                    Hyundai, Kia, and Volkswagen, there are plenty to choose
                    from.
                  </p>
                  <h2 class="heading-3 normal-case mt-5 mb-2-5">
                    Learn More About Electric Vehicle Models
                  </h2>
                  <p>
                    Whether you’re considering financing or leasing a new
                    electric vehicle, TrueCar has resources to help you learn
                    more about each model. You can find comprehensive
                    information and reviews about popular electric vehicles,
                    such as the
                    <a href="/overview/hyundai/ioniq-5/">2024 Hyundai IONIQ 5</a
                    >, <a href="/overview/kia/ev9/">2024 Kia EV9</a>, or
                    <a href="/overview/hyundai/ioniq-6/">2024 Hyundai IONIQ 6</a
                    >.
                  </p>
                  <br />
                  <p>
                    Interested in cross-shopping electric vehicles? Some of the
                    top electric vehicle comparisons are
                    <a href="/compare/hyundai-ioniq-5-vs-kia-ev6/"
                      >Hyundai IONIQ 5 vs Kia EV6</a
                    >,
                    <a href="/compare/kia-ev9-vs-ford-mustang-mach-e/"
                      >Kia EV9 vs Ford Mustang Mach-E</a
                    >, and
                    <a href="/compare/hyundai-ioniq-6-vs-bmw-i4/"
                      >Hyundai IONIQ 6 vs BMW i4</a
                    >. You can also see where electric vehicle models land on
                    our vehicle ranking lists, such as
                    <a href="/best-cars-trucks/suvs/fuel-electric/"
                      >Best Electric SUVs</a
                    >,
                    <a href="/best-cars-trucks/cars/fuel-electric/"
                      >Best Electric Cars</a
                    >, or
                    <a href="/best-cars-trucks/suvs/segment-midsize/luxury/"
                      >Best Midsize Luxury SUVs</a
                    >.
                  </p>
                  <h2 class="heading-3 normal-case mt-5">
                    Best Electric Vehicle Financing Deals:
                  </h2>
                  <ul class="list-disc pl-5 pt-2">
                    <li>2024 Hyundai IONIQ 5: 0% financing</li>
                    <li>2024 Kia EV9: 0% financing</li>
                    <li>2024 Kia EV6: 0% financing</li>
                    <li>2024 Volkswagen ID.4: 0% financing</li>
                    <li>2024 Ford Mustang Mach‑E: 0% financing</li>
                    <li>2024 Toyota bZ4X: 0% financing</li>
                    <li>2024 Cadillac LYRIQ: 2.9% financing</li>
                    <li>2024 Hyundai IONIQ 6: 2.99% financing</li>
                    <li>2024 BMW i4: 2.99% financing</li>
                    <li>2024 Hyundai Kona Electric: 6.49% financing</li>
                  </ul>
                  <h2 class="heading-3 normal-case mt-4">
                    Best Electric Vehicle Leasing Deals:
                  </h2>
                  <ul class="list-disc pl-5 pt-2">
                    <li>
                      2024 Volkswagen ID.4: $205 per month (36 months, $2,000
                      due at signing)
                    </li>
                    <li>
                      2024 Hyundai IONIQ 5: $230 per month (36 months, $2,000
                      due at signing)
                    </li>
                    <li>
                      2024 Kia EV6: $251 per month (36 months, $2,000 due at
                      signing)
                    </li>
                    <li>
                      2024 Hyundai IONIQ 6: $268 per month (36 months, $2,000
                      due at signing)
                    </li>
                    <li>
                      2024 Hyundai Kona Electric: $350 per month (36 months,
                      $2,000 due at signing)
                    </li>
                    <li>
                      2024 Kia EV9: $444 per month (36 months, $2,000 due at
                      signing)
                    </li>
                    <li>
                      2024 Toyota bZ4X: $465 per month (36 months, $2,000 due at
                      signing)
                    </li>
                    <li>
                      2024 Cadillac LYRIQ: $508 per month (36 months, $2,000 due
                      at signing)
                    </li>
                    <li>
                      2024 Ford Mustang Mach‑E: $674 per month (36 months,
                      $2,000 due at signing)
                    </li>
                    <li>
                      2024 BMW i4: $894 per month (36 months, $2,000 due at
                      signing)
                    </li>
                  </ul>
                </div>
              </section>
              <section>
                <section>
                  <div class="container pb-3 pt-4 md:pt-5">
                    <h2 class="heading-3 normal-case pb-3 text-center">
                      Electric Vehicle Deals &amp; Incentives FAQs
                    </h2>
                    <div class="row mb-3 lg:mb-4">
                      <div class="col-12">
                        <div class="expandable-list-item">
                          <button
                            class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                            aria-expanded="false"
                          >
                            <div class="heading-4 normal-case w-full px-3 py-3">
                              <h3 class="heading-4 normal-case">
                                What are the best electric vehicle finance deals
                                for August&nbsp;2024?
                              </h3>
                            </div>
                            <span class="ml-3 whitespace-nowrap"
                              ><div style="position: static">
                                <svg
                                  viewBox="0 0 24 24"
                                  class="icon icon-fill-default my-3 mr-3"
                                  aria-hidden="true"
                                  data-test-item="down"
                                  style="width: 21px; height: 21px"
                                >
                                  <use href="#keyboard_arrow_down"></use>
                                </svg></div
                            ></span>
                          </button>
                          <div
                            class="expandable-list-item-collapse border-t collapse"
                          >
                            <div class="px-3 py-3 expandable-list-item-shadow">
                              <div class="whitespace-pre-line">
                                Currently, there are finance deals for 37
                                electric vehicle models, starting with the 2024
                                Hyundai IONIQ 5, which has a 0% APR on a
                                60-month loan and the 2024 Kia EV9, which has a
                                0% APR on a 48-month loan.
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="expandable-list-item">
                          <button
                            class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                            aria-expanded="false"
                          >
                            <div class="heading-4 normal-case w-full px-3 py-3">
                              <h3 class="heading-4 normal-case">
                                What are the best electric vehicle lease deals
                                for August&nbsp;2024?
                              </h3>
                            </div>
                            <span class="ml-3 whitespace-nowrap"
                              ><div style="position: static">
                                <svg
                                  viewBox="0 0 24 24"
                                  class="icon icon-fill-default my-3 mr-3"
                                  aria-hidden="true"
                                  data-test-item="down"
                                  style="width: 21px; height: 21px"
                                >
                                  <use href="#keyboard_arrow_down"></use>
                                </svg></div
                            ></span>
                          </button>
                          <div
                            class="expandable-list-item-collapse border-t collapse"
                          >
                            <div class="px-3 py-3 expandable-list-item-shadow">
                              <div class="whitespace-pre-line">
                                A total of 45 electric vehicle models have a
                                lease special, including the 2024 Volkswagen
                                ID.4, which can be leased for 36 months with
                                $2,000 due at signing and a monthly payment of
                                $205. Another great electric vehicle deal is
                                offered by the 2024 Hyundai IONIQ 5, which can
                                be leased under the same terms with a $230
                                monthly payment.
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="expandable-list-item">
                          <button
                            class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                            aria-expanded="false"
                          >
                            <div class="heading-4 normal-case w-full px-3 py-3">
                              <h3 class="heading-4 normal-case">
                                What are the best electric vehicle cash offers
                                for August&nbsp;2024?
                              </h3>
                            </div>
                            <span class="ml-3 whitespace-nowrap"
                              ><div style="position: static">
                                <svg
                                  viewBox="0 0 24 24"
                                  class="icon icon-fill-default my-3 mr-3"
                                  aria-hidden="true"
                                  data-test-item="down"
                                  style="width: 21px; height: 21px"
                                >
                                  <use href="#keyboard_arrow_down"></use>
                                </svg></div
                            ></span>
                          </button>
                          <div
                            class="expandable-list-item-collapse border-t collapse"
                          >
                            <div class="px-3 py-3 expandable-list-item-shadow">
                              <div class="whitespace-pre-line">
                                With 42 electric vehicles offering cash
                                incentives, August 2024 is a great time to buy!
                                Cash offers are ranging from $400 to $15,250
                                with the 2024 Toyota bZ4X having the best cash
                                bonus.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </section>
              <div class="container pt-4 md:pt-5">
                <div class="row">
                  <div class="pb-5 md:pb-6 col-12 col-sm-6 col-lg-3">
                    <h2 class="heading-5 normal-case py-2">Deals by Make</h2>
                    <div class="see-more space-y-2" data-ignore-contrast="true">
                      <div
                        data-test="seeMoreBody"
                        style="overflow: hidden; max-height: 10.5em"
                      >
                        <div>
                          <ul class="space-y-2">
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/acura/deals/"
                                >Acura Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/alfa-romeo/deals/"
                                >Alfa Romeo Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/aston-martin/deals/"
                                >Aston Martin Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/audi/deals/"
                                >Audi Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/bentley/deals/"
                                >Bentley Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/bmw/deals/"
                                >BMW Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/buick/deals/"
                                >Buick Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/cadillac/deals/"
                                >Cadillac Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/chevrolet/deals/"
                                >Chevrolet Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/chrysler/deals/"
                                >Chrysler Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/dodge/deals/"
                                >Dodge Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/ferrari/deals/"
                                >Ferrari Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/fiat/deals/"
                                >FIAT Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/ford/deals/"
                                >Ford Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/genesis/deals/"
                                >Genesis Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/gmc/deals/"
                                >GMC Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/honda/deals/"
                                >Honda Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/hyundai/deals/"
                                >Hyundai Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/infiniti/deals/"
                                >INFINITI Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/jaguar/deals/"
                                >Jaguar Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/jeep/deals/"
                                >Jeep Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/kia/deals/"
                                >Kia Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/lamborghini/deals/"
                                >Lamborghini Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/land-rover/deals/"
                                >Land Rover Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/lexus/deals/"
                                >Lexus Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/lincoln/deals/"
                                >Lincoln Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/lucid/deals/"
                                >Lucid Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/maserati/deals/"
                                >Maserati Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/mazda/deals/"
                                >Mazda Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/mclaren/deals/"
                                >McLaren Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/mercedes-benz/deals/"
                                >Mercedes-Benz Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/mini/deals/"
                                >MINI Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/mitsubishi/deals/"
                                >Mitsubishi Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/nissan/deals/"
                                >Nissan Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/polestar/deals/"
                                >Polestar Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/porsche/deals/"
                                >Porsche Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/ram/deals/"
                                >Ram Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/rivian/deals/"
                                >Rivian Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/rolls-royce/deals/"
                                >Rolls-Royce Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/subaru/deals/"
                                >Subaru Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/tesla/deals/"
                                >Tesla Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/toyota/deals/"
                                >Toyota Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/volkswagen/deals/"
                                >Volkswagen Deals</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/volvo/deals/"
                                >Volvo Deals</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div
                        class="text-left mt-0"
                        data-test="seeMoreLinkContainer"
                      >
                        <button
                          type="button"
                          class="link-button see-more-link"
                          data-test="seeMoreButton"
                        >
                          <span class="see-more-link-text">See More</span
                          ><svg
                            viewBox="0 0 24 24"
                            class="icon icon-fill-default see-more-icon-angle"
                            aria-hidden="true"
                            style="width: 24px; height: 24px"
                          >
                            <use href="#keyboard_arrow_down"></use>
                          </svg>
                        </button>
                      </div>
                      <div class="text-center mt-0" data-test="seeLessLinkContainer" style="display: none">
                        <button type="button" class="link-button see-more-link" data-test="seeLessButton">
                            <span class="see-less-link-text">See Less</span>
                            <svg viewBox="0 0 24 24" class="icon icon-fill-default see-less-icon-angle"
                                aria-hidden="true" style="width: 24px; height: 24px;">
                                <use href="#keyboard_arrow_up"></use>
                            </svg>
                        </button>
                    </div>
                      <div data-test="seeMoreFade" class="see-more-fade"></div>
                    </div>
                  </div>
                  <div class="pb-5 md:pb-6 col-12 col-sm-6 col-lg-3">
                    <h2 class="heading-5 normal-case py-2">Vehicle Rankings</h2>
                    <div class="see-more space-y-2" data-ignore-contrast="true">
                      <div
                        data-test="seeMoreBody"
                        style="overflow: hidden; max-height: 10.5em"
                      >
                        <div>
                          <ul class="space-y-2">
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/cars/"
                                >Best Cars</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/trucks/"
                                >Best Trucks</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/suvs/"
                                >Best SUVs</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/sedans/"
                                >Best Sedans</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/hatchbacks/"
                                >Best Hatchbacks</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/wagons/"
                                >Best Wagons</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/coupes/"
                                >Best Coupes</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/convertibles/"
                                >Best Convertibles</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/vans/"
                                >Best Vans</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-hybrid/"
                                >Best Hybrids</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-plug-in-hybrid/"
                                >Best Plug-In Hybrids</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-electric/"
                                >Best Electric Vehicles</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-diesel/"
                                >Best Diesel Vehicles</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div
                        class="text-left mt-0"
                        data-test="seeMoreLinkContainer"
                      >
                        <button
                          type="button"
                          class="link-button see-more-link"
                          data-test="seeMoreButton"
                        >
                          <span class="see-more-link-text">See More</span
                          ><svg
                            viewBox="0 0 24 24"
                            class="icon icon-fill-default see-more-icon-angle"
                            aria-hidden="true"
                            style="width: 24px; height: 24px"
                          >
                            <use href="#keyboard_arrow_down"></use>
                          </svg>
                        </button>
                      </div>
                      <div class="text-center mt-0" data-test="seeLessLinkContainer" style="display: none">
                        <button type="button" class="link-button see-more-link" data-test="seeLessButton">
                            <span class="see-less-link-text">See Less</span>
                            <svg viewBox="0 0 24 24" class="icon icon-fill-default see-less-icon-angle"
                                aria-hidden="true" style="width: 24px; height: 24px;">
                                <use href="#keyboard_arrow_up"></use>
                            </svg>
                        </button>
                    </div>
                      <div data-test="seeMoreFade" class="see-more-fade"></div>
                    </div>
                  </div>
                  <div class="pb-5 md:pb-6 col-12 col-sm-6 col-lg-3">
                    <h2 class="heading-5 normal-case py-2">
                      Electric Vehicle Rankings
                    </h2>
                    <div class="see-more space-y-2" data-ignore-contrast="true">
                      <div
                        data-test="seeMoreBody"
                        style="overflow: hidden; max-height: 10.5em"
                      >
                        <div>
                          <ul class="space-y-2">
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/cars/fuel-electric/"
                                >Best Electric Cars</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/trucks/fuel-electric/"
                                >Best Electric Trucks</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/suvs/fuel-electric/"
                                >Best Electric SUVs</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-electric/luxury/"
                                >Best Luxury Electric Vehicles</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-electric/all-wheel-drive/"
                                >Best All Wheel Drive Electric Vehicles</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-electric/by-range/"
                                >Longest Range Electric Vehicles</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-electric/by-charge-time/"
                                >Fastest Charging Electric Vehicles</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-electric/by-mpge/"
                                >Most Efficient Electric Vehicles</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-electric/by-hybrid-ev-warranty/"
                                >Best Electric Vehicle Warranties</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-electric/for-the-value/"
                                >Best Electric Vehicles for the Money</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-electric/price-under-35000/"
                                >Best Electric Vehicles Under $35K</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-electric/price-35000-40000/"
                                >Best Electric Vehicles Under $40K</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/best-cars-trucks/fuel-electric/price-40000-50000/"
                                >Best Electric Vehicles Under $50K</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div
                        class="text-left mt-0"
                        data-test="seeMoreLinkContainer"
                      >
                        <button
                          type="button"
                          class="link-button see-more-link"
                          data-test="seeMoreButton"
                        >
                          <span class="see-more-link-text">See More</span
                          ><svg
                            viewBox="0 0 24 24"
                            class="icon icon-fill-default see-more-icon-angle"
                            aria-hidden="true"
                            style="width: 24px; height: 24px"
                          >
                            <use href="#keyboard_arrow_down"></use>
                          </svg>
                        </button>
                      </div>
                      <div class="text-center mt-0" data-test="seeLessLinkContainer" style="display: none">
                        <button type="button" class="link-button see-more-link" data-test="seeLessButton">
                            <span class="see-less-link-text">See Less</span>
                            <svg viewBox="0 0 24 24" class="icon icon-fill-default see-less-icon-angle"
                                aria-hidden="true" style="width: 24px; height: 24px;">
                                <use href="#keyboard_arrow_up"></use>
                            </svg>
                        </button>
                    </div>
                      <div data-test="seeMoreFade" class="see-more-fade"></div>
                    </div>
                  </div>
                  <div class="pb-5 md:pb-6 col-12 col-sm-6 col-lg-3">
                    <h2 class="heading-5 normal-case py-2">
                      Research Electric Vehicles
                    </h2>
                    <div class="see-more space-y-2" data-ignore-contrast="true">
                      <div
                        data-test="seeMoreBody"
                        style="overflow: hidden; max-height: 10.5em"
                      >
                        <div>
                          <ul class="space-y-2">
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/chevrolet/blazer-ev/"
                                >2024 Chevrolet Blazer EV</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/honda/prologue/"
                                >2024 Honda Prologue</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/chevrolet/equinox-ev/"
                                >2024 Chevrolet Equinox EV</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/mercedes-benz/eqb/"
                                >2024 Mercedes-Benz EQB</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/ford/mustang-mach-e/"
                                >2024 Ford Mustang Mach-E</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/hyundai/ioniq-5/"
                                >2024 Hyundai IONIQ 5</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/bmw/ix/"
                                >2025 BMW iX</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/mercedes-benz/eqe-suv/"
                                >2024 Mercedes-Benz EQE SUV</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/acura/zdx/"
                                >2024 Acura ZDX</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/audi/q4-e-tron/"
                                >2024 Audi Q4 e-tron</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/volkswagen/id-4/"
                                >2024 Volkswagen ID.4</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/mercedes-benz/eqe-sedan/"
                                >2024 Mercedes-Benz EQE Sedan</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/cadillac/lyriq/"
                                >2024 Cadillac LYRIQ</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/ford/f-150-lightning/"
                                >2024 Ford F-150 Lightning</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/gmc/hummer-ev-suv/"
                                >2024 GMC HUMMER EV SUV</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/kia/ev9/"
                                >2024 Kia EV9</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/bmw/i5/"
                                >2024 BMW i5</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/mercedes-benz/eqs-sedan/"
                                >2024 Mercedes-Benz EQS Sedan</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/hyundai/ioniq-6/"
                                >2024 Hyundai IONIQ 6</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/kia/niro-ev/"
                                >2024 Kia Niro EV</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/mercedes-benz/eqs-suv/"
                                >2024 Mercedes-Benz EQS SUV</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/bmw/i4/"
                                >2024 BMW i4</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/subaru/solterra/"
                                >2024 Subaru Solterra</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/audi/q8-e-tron/"
                                >2024 Audi Q8 e-tron</a
                              >
                            </li>
                            <li class="">
                              <a
                                aria-current="false"
                                aria-disabled="false"
                                class="link-item-minimal"
                                href="/overview/nissan/leaf/"
                                >2024 Nissan LEAF</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div
                        class="text-left mt-0"
                        data-test="seeMoreLinkContainer"
                      >
                        <button
                          type="button"
                          class="link-button see-more-link"
                          data-test="seeMoreButton"
                        >
                          <span class="see-more-link-text">See More</span
                          ><svg
                            viewBox="0 0 24 24"
                            class="icon icon-fill-default see-more-icon-angle"
                            aria-hidden="true"
                            style="width: 24px; height: 24px"
                          >
                            <use href="#keyboard_arrow_down"></use>
                          </svg>
                        </button>
                      </div>
                      <div class="text-center mt-0" data-test="seeLessLinkContainer" style="display: none">
                        <button type="button" class="link-button see-more-link" data-test="seeLessButton">
                            <span class="see-less-link-text">See Less</span>
                            <svg viewBox="0 0 24 24" class="icon icon-fill-default see-less-icon-angle"
                                aria-hidden="true" style="width: 24px; height: 24px;">
                                <use href="#keyboard_arrow_up"></use>
                            </svg>
                        </button>
                    </div>
                      <div data-test="seeMoreFade" class="see-more-fade"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>

        @endsection
