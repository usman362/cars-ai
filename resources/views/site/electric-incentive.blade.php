@extends('site.layouts.app')
@section('content')

          <main
            id="mainContent" style="margin-top: 60px;"
            class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]"
          >
            <nav
              class="theme-white md:overflow-x-auto h-[60px] whitespace-nowrap border"
            >
              <div class="container h-full">
                <div class="hidden-sm-down flex h-full items-center">
                  <div class="border-r pr-2-5">
                    <a class="no-underline text-dark" href="/electric/">Electric Vehicles</a
                    >
                  </div>
                  <ul class="flex">
                    <li class="ml-2-5 md:ml-3 mr-3 md:mr-4">
                      <a
                        class="no-underline"
                        href="/new-cars-for-sale/listings/fuel-electric/"
                        >New EVs</a>
                    </li>
                    <li class="mr-3 md:mr-4">
                      <a
                        class="no-underline"
                        href="/used-cars-for-sale/listings/fuel-electric/"
                        >Used EVs</a>
                    </li>
                    <li class="mr-3 md:mr-4">
                      <a
                        class="no-underline"
                        href="/used-cars-for-sale/listings/tesla/"
                        >Used Teslas</a>
                    </li>
                    <li class="mr-3 md:mr-4">
                      <a
                        class="no-underline font-bold"
                        href="/electric/incentives/"
                        >EV Incentives</a>
                    </li>
                    <li class="mr-3 md:mr-4">
                      <a class="no-underline" href="/deals/fuel-electric/"
                        >EV Deals</a>
                    </li>
                    <li class="mr-3 md:mr-4">
                      <a
                        class="no-underline"
                        href="/best-cars-trucks/fuel-electric/"
                        >Best EVs</a>
                    </li>
                    <li class="mr-3 md:mr-4">
                      <a
                        href="https://www.truecar.com/blog/electric-vehicle-buyers-guide/"
                        target="_blank"
                        class="no-underline"
                        >Buyer's Guide</a>
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
                      <span class="font-bold">EV Incentives</span><span class="ml-1 flex items-center"
                        ><svg
                          viewBox="0 0 24 24"
                          class="icon icon-fill-default"
                          style="width: 24px; height: 24px"
                          aria-hidden="true"
                        >
                          <use href="#arrow_drop_down"></use></svg></span>
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
                              href="/deals/fuel-electric/"
                              >EV Deals</a
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
            <div
              style="
                --image-url-xs: url({{asset('assets/_next/static/images/hero-background-xs-50202c73aba03633c4b7ecdba9c4090e.png')}});
                --image-url-sm: url({{asset('assets/_next/static/images/hero-background-sm-738f5c7c8f6ff23e831fbe2bfe8f0fd9.png')}});
                --image-url-md: url({{asset('assets/_next/static/images/hero-background-lg-1f6aac730834ba5c3bf5b72731a7c1f8.jpeg')}});
                --image-url-xl: url({{asset('assets/_next/static/images/hero-background-xl-da6861e0381037ad491d82d7af5b6a1c.jpeg')}});
              "
              class="relative bg-[image:var(--image-url-xs)] sm:bg-[image:var(--image-url-sm)] md:bg-[image:var(--image-url-md)] xl:bg-[image:var(--image-url-xl)] h-[344px] bg-cover bg-bottom bg-no-repeat"
            >
              <div
                class="absolute left-[0px] right-[0px] top-[0px] bottom-[0px] bg-[linear-gradient(8.68deg,_rgba(0,_0,_0,_0.5395)_73.61%,_rgba(248,_248,_248,_0)_224.72%)] sm:bg-[linear-gradient(96.63deg,_rgba(0,_0,_0,_0.415)_28.29%,_rgba(248,_248,_248,_0)_122.36%)]"
              >
                <div class="container h-full sm:flex sm:items-center">
                  <div>
                    <h1
                      class="heading-2 normal-case heading-md-1 md:normal-case mb-4 pt-6 text-center text-white sm:pt-0 sm:text-left"
                      data-test="electricIncentivesHeroTitle"
                    >
                      Electric Vehicle Incentives
                    </h1>
                    <p
                      class="text-center text-white sm:max-w-[460px] sm:text-left"
                    >
                      Search available electric car incentives near you. Enter
                      your zip code or make and model to browse all current
                      state and local EV tax credits and rebates to see how much
                      you could save.
                    </p>
                  </div>
                </div>
                <div
                  class="container absolute bottom-[0px] left-[0px] right-[0px] mx-auto"
                >
                  <p class="hidden pb-2 text-right sm:block sm:text-xs">
                    <a
                      href="/overview/ford/mustang-mach-e/"
                      class="text-white no-underline hover:text-[white] hover:underline">2022 Ford Mustang Mach-E shown above</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="pb-5" data-reach-tabs="" data-orientation="horizontal">
              <div class="container">
                <div
                  role="tablist"
                  aria-orientation="horizontal"
                  class="tab-bar tab-bar-block"
                  data-reach-tab-list=""
                >
                  <button
                    aria-controls="tabs--1--panel--0"
                    aria-selected="true"
                    role="tab"
                    tabindex="0"
                    class="tab"
                    data-test="browseIncentivesTab"
                    data-reach-tab=""
                    data-orientation="horizontal"
                    id="tabs--1--tab--0"
                    type="button"
                    data-selected=""
                  >
                    <span class="tab-text">Browse Incentives</span
                    ><span class="tab-bottom-border"></span></button
                  ><button
                    aria-controls="tabs--1--panel--1"
                    aria-selected="false"
                    role="tab"
                    tabindex="-1"
                    class="tab"
                    data-test="browseEvsTab"
                    data-reach-tab=""
                    data-orientation="horizontal"
                    id="tabs--1--tab--1"
                    type="button"
                  >
                    <span class="tab-text">Browse EVs</span
                    ><span class="tab-bottom-border"></span>
                  </button>
                </div>
              </div>
              <div data-reach-tab-panels="">
                <div
                  aria-labelledby="tabs--1--tab--0"
                  role="tabpanel"
                  tabindex="0"
                  data-reach-tab-panel=""
                  id="tabs--1--panel--0"
                >
                  <div class="bg-[#1A1A1A] py-4">
                    <div class="container">
                      <h2
                        class="heading-2 normal-case text-center text-white sm:text-left">
                        Browse Incentives
                      </h2>
                    </div>
                  </div>
                  <div class="bg-light py-3 md:py-[23px] lg:pb-0">
                    <div class="container items-center lg:flex">
                      <form novalidate="" class="items-center md:flex">
                        <div
                          class="field-container-challenger mb-3 w-full md:mb-0 md:mr-3 md:min-h-[71px] md:w-auto lg:w-full"
                        >
                          <div
                            class="field-wrapper-challenger field-label-padding-challenger"
                          >
                            <div class="field-content-row">
                              <div class="field-input-label-challenger">
                                <input
                                  id="19"
                                  autocomplete="postal-code"
                                  class="form-control-challenger"
                                  aria-label="ZIP Code"
                                  placeholder=" "
                                  inputmode="numeric"
                                  name="postalCode"
                                  maxlength="5"
                                  value=""
                                />
                                <div
                                  class="field-label-text-challenger"
                                  data-test="fieldLabel"
                                >
                                  <label for="19" data-ignore-contrast="true"
                                    >ZIP Code</label
                                  >
                                </div>
                              </div>
                            </div>
                            <div class="field-message-challenger">
                              <div class="field-message-text-challenger"></div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3 md:mb-0 md:min-h-[71px] lg:mr-3">
                          <div class="flex items-center md:min-h-[48px]">
                            <button
                              type="submit"
                              data-ignore-contrast="true"
                              data-loading="false"
                              class="w-full md:w-auto btn btn-primary btn-lg"
                            >
                              <span class="btn-inner">Go</span>
                            </button>
                          </div>
                        </div>
                      </form>
                      <div>
                        <div class="lg:mr-3 lg:min-h-[71px]">
                          <div class="flex items-center lg:min-h-[48px]">
                            <button
                              type="button"
                              data-ignore-contrast="false"
                              data-loading="false"
                              class="w-full md:w-auto lg:w-full btn btn-secondary btn-lg"
                            >
                              <span class="btn-inner"
                                >Personalize Incentives</span
                              >
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="container pt-4">
                    <div class="pb-5">
                      <h3 class="heading-3 normal-case pb-3">
                        Cash Rebate (4)
                      </h3>
                      <div
                        class="grid auto-rows-fr grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="mx-1 mb-3">
                          <div
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full"
                          >
                            <div
                              class="flex h-full w-full flex-col justify-between"
                            >
                              <div class="mb-4 bg-light px-3 pt-3 pb-2">
                                <div class="heading-3_5 normal-case pb-2">
                                  Consumer Assistance Program
                                </div>
                                <p>Bureau of Automotive Repair (BAR)</p>
                              </div>
                              <div class="p-3">
                                <div class="heading-2 normal-case pb-2">
                                  $1,000 - $1,500
                                </div>
                                <p
                                  class="mt-4 mb-3 break-words text-muted line-clamp-4"
                                >
                                  Receive up to $1,500 when you retire your
                                  operational vehicle with CAP.
                                </p>
                                <button
                                  type="button"
                                  data-ignore-contrast="false"
                                  data-loading="false"
                                  class="btn btn-secondary btn-md"
                                >
                                  <span class="btn-inner">Learn More</span>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mx-1 mb-3">
                          <div
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full"
                          >
                            <div
                              class="flex h-full w-full flex-col justify-between"
                            >
                              <div class="mb-4 bg-light px-3 pt-3 pb-2">
                                <div class="heading-3_5 normal-case pb-2">
                                  Replace Your Ride
                                </div>
                                <p>
                                  South Coast Air Quality Management District
                                </p>
                              </div>
                              <div class="p-3">
                                <div class="heading-2 normal-case pb-2">
                                  $12,000
                                </div>
                                <p
                                  class="mt-4 mb-3 break-words text-muted line-clamp-4"
                                >
                                  With Replace Your Ride, you are eligible for a
                                  rebate up to $9,500 to upgrade to a hybrid or
                                  plug-in electric vehicle.
                                </p>
                                <button
                                  type="button"
                                  data-ignore-contrast="false"
                                  data-loading="false"
                                  class="btn btn-secondary btn-md"
                                >
                                  <span class="btn-inner">Learn More</span>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mx-1 mb-3">
                          <div
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full"
                          >
                            <div
                              class="flex h-full w-full flex-col justify-between"
                            >
                              <div class="mb-4 bg-light px-3 pt-3 pb-2">
                                <div class="heading-3_5 normal-case pb-2">
                                  Residential EV Charging Incentive
                                  Pilot&nbsp;Program
                                </div>
                                <p>
                                  South Coast Air Quality Management District
                                </p>
                              </div>
                              <div class="p-3">
                                <div class="heading-2 normal-case pb-2">
                                  $500
                                </div>
                                <p
                                  class="mt-4 mb-3 break-words text-muted line-clamp-4"
                                >
                                  SCAQMD customers are eligible to receive a
                                  $250 rebate for the installation of a Level 2
                                  EV charger.
                                </p>
                                <button
                                  type="button"
                                  data-ignore-contrast="false"
                                  data-loading="false"
                                  class="btn btn-secondary btn-md"
                                >
                                  <span class="btn-inner">Learn More</span>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mx-1 mb-3">
                          <div
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full"
                          >
                            <div
                              class="flex h-full w-full flex-col justify-between"
                            >
                              <div class="mb-4 bg-light px-3 pt-3 pb-2">
                                <div class="heading-3_5 normal-case pb-2">
                                  Pre-Owned EV Rebate
                                </div>
                                <p>Southern California Edison</p>
                              </div>
                              <div class="p-3">
                                <div class="heading-2 normal-case pb-2">
                                  $1,000 - $4,000
                                </div>
                                <p
                                  class="mt-4 mb-3 break-words text-muted line-clamp-4"
                                >
                                  SCE customers are eligible to receive a rebate
                                  of up to $4,000 for the purchase of an
                                  electric vehicle.
                                </p>
                                <button
                                  type="button"
                                  data-ignore-contrast="false"
                                  data-loading="false"
                                  class="btn btn-secondary btn-md"
                                >
                                  <span class="btn-inner">Learn More</span>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pb-5">
                      <h3 class="heading-3 normal-case pb-3">EV Perk (1)</h3>
                      <div
                        class="grid auto-rows-fr grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="mx-1 mb-3">
                          <div
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full"
                          >
                            <div
                              class="flex h-full w-full flex-col justify-between"
                            >
                              <div class="mb-4 bg-light px-3 pt-3 pb-2">
                                <div class="heading-3_5 normal-case pb-2">
                                  Decal for High Occupancy Vehicle (HOV) lane
                                  exemption&nbsp;(DMV)
                                </div>
                                <p>CA DMV</p>
                              </div>
                              <div class="p-3">
                                <p
                                  class="mt-4 mb-3 break-words text-muted line-clamp-4"
                                >
                                  Electric Vehicles are eligible to receive a
                                  decal that allow single occupancy use of HOV
                                  lanes in California.
                                </p>
                                <button
                                  type="button"
                                  data-ignore-contrast="false"
                                  data-loading="false"
                                  class="btn btn-secondary btn-md"
                                >
                                  <span class="btn-inner">Learn More</span>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pb-5">
                      <h3 class="heading-3 normal-case pb-3">
                        EV Parking Perk (1)
                      </h3>
                      <div
                        class="grid auto-rows-fr grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="mx-1 mb-3">
                          <div
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full"
                          >
                            <div
                              class="flex h-full w-full flex-col justify-between"
                            >
                              <div class="mb-4 bg-light px-3 pt-3 pb-2">
                                <div class="heading-3_5 normal-case pb-2">
                                  Free Metered Parking in Santa&nbsp;Monica
                                </div>
                                <p>City of Santa Monica</p>
                              </div>
                              <div class="p-3">
                                <p
                                  class="mt-4 mb-3 break-words text-muted line-clamp-4"
                                >
                                  The city of Santa Monica offers drivers of
                                  electric vehicles free parking at on street
                                  (curbside) parking meters.
                                </p>
                                <button
                                  type="button"
                                  data-ignore-contrast="false"
                                  data-loading="false"
                                  class="btn btn-secondary btn-md"
                                >
                                  <span class="btn-inner">Learn More</span>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pb-5">
                      <h3 class="heading-3 normal-case pb-3">
                        Reduced Tax Rate (1)
                      </h3>
                      <div
                        class="grid auto-rows-fr grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="mx-1 mb-3">
                          <div
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full"
                          >
                            <div
                              class="flex h-full w-full flex-col justify-between"
                            >
                              <div class="mb-4 bg-light px-3 pt-3 pb-2">
                                <div class="heading-3_5 normal-case pb-2">
                                  Federal Tax Credit for Used Plug-in
                                  Electric&nbsp;Vehicles
                                </div>
                                <p>IRS</p>
                              </div>
                              <div class="p-3">
                                <div class="heading-2 normal-case pb-2">
                                  $4,000
                                </div>
                                <p
                                  class="mt-4 mb-3 break-words text-muted line-clamp-4"
                                >
                                  The IRS is offering a federal tax credit of up
                                  to $4,000 for the purchase of a used plug-in
                                  hybrid electric vehicle.
                                </p>
                                <button
                                  type="button"
                                  data-ignore-contrast="false"
                                  data-loading="false"
                                  class="btn btn-secondary btn-md"
                                >
                                  <span class="btn-inner">Learn More</span>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pb-5">
                      <h3 class="heading-3 normal-case pb-3">Tax Credit (3)</h3>
                      <div
                        class="grid auto-rows-fr grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="mx-1 mb-3">
                          <div
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full"
                          >
                            <div
                              class="flex h-full w-full flex-col justify-between"
                            >
                              <div class="mb-4 bg-light px-3 pt-3 pb-2">
                                <div class="heading-3_5 normal-case pb-2">
                                  Federal Tax Credit for EV
                                  Charger&nbsp;Installation
                                </div>
                                <p>IRS</p>
                              </div>
                              <div class="p-3">
                                <div class="heading-2 normal-case pb-2">
                                  $1,000
                                </div>
                                <p
                                  class="mt-4 mb-3 break-words text-muted line-clamp-4"
                                >
                                  You are eligible to receive 30% of the cost of
                                  an EV charger, up to $1000 in tax credits from
                                  the IRS from the purchase and installation of
                                  an EV charger.
                                </p>
                                <button
                                  type="button"
                                  data-ignore-contrast="false"
                                  data-loading="false"
                                  class="btn btn-secondary btn-md"
                                >
                                  <span class="btn-inner">Learn More</span>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mx-1 mb-3">
                          <div
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full"
                          >
                            <div
                              class="flex h-full w-full flex-col justify-between"
                            >
                              <div class="mb-4 bg-light px-3 pt-3 pb-2">
                                <div class="heading-3_5 normal-case pb-2">
                                  Federal Tax Credit for Leased New Plug-in
                                  Electric&nbsp;Vehicles
                                </div>
                                <p>IRS</p>
                              </div>
                              <div class="p-3">
                                <div class="heading-2 normal-case pb-2">
                                  $7,500
                                </div>
                                <p
                                  class="mt-4 mb-3 break-words text-muted line-clamp-4"
                                >
                                  You may receive up to $7,500 off the cost of a
                                  leased electric vehicle if you meet specific
                                  income criteria
                                </p>
                                <button
                                  type="button"
                                  data-ignore-contrast="false"
                                  data-loading="false"
                                  class="btn btn-secondary btn-md"
                                >
                                  <span class="btn-inner">Learn More</span>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mx-1 mb-3">
                          <div
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full"
                          >
                            <div
                              class="flex h-full w-full flex-col justify-between"
                            >
                              <div class="mb-4 bg-light px-3 pt-3 pb-2">
                                <div class="heading-3_5 normal-case pb-2">
                                  Federal Tax Credit for New Plug-in
                                  Electric&nbsp;Vehicles
                                </div>
                                <p>IRS</p>
                              </div>
                              <div class="p-3">
                                <div class="heading-2 normal-case pb-2">
                                  $3,750 - $7,500
                                </div>
                                <p
                                  class="mt-4 mb-3 break-words text-muted line-clamp-4"
                                >
                                  You may be eligible for up to a $7,500 tax
                                  credit on your Federal tax return when you
                                  purchase a new plug-in or fuel cell electric
                                  vehicle.
                                </p>
                                <button
                                  type="button"
                                  data-ignore-contrast="false"
                                  data-loading="false"
                                  class="btn btn-secondary btn-md"
                                >
                                  <span class="btn-inner">Learn More</span>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="">
                      <h3 class="heading-3 normal-case pb-3">
                        EV Specific Electricity Plans (1)
                      </h3>
                      <div
                        class="grid auto-rows-fr grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="mx-1 mb-3">
                          <div
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] h-full"
                          >
                            <div
                              class="flex h-full w-full flex-col justify-between"
                            >
                              <div class="mb-4 bg-light px-3 pt-3 pb-2">
                                <div class="heading-3_5 normal-case pb-2">
                                  Southern California Edison (SCE) - Special EV
                                  Rate for Home&nbsp;Charging
                                </div>
                                <p>Southern California Edison</p>
                              </div>
                              <div class="p-3">
                                <p
                                  class="mt-4 mb-3 break-words text-muted line-clamp-4"
                                >
                                  Southern California Edison customers are
                                  eligible for special time-of-use rates to save
                                  money while you charge your electric vehicle.
                                </p>
                                <button
                                  type="button"
                                  data-ignore-contrast="false"
                                  data-loading="false"
                                  class="btn btn-secondary btn-md"
                                >
                                  <span class="btn-inner">Learn More</span>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  aria-labelledby="tabs--1--tab--1"
                  role="tabpanel"
                  tabindex="-1"
                  data-reach-tab-panel=""
                  id="tabs--1--panel--1"
                  hidden=""
                ></div>
              </div>
            </div>
            <div class="container pb-5 text-xs text-muted">
              <p class="pb-4">
                ¹"After All Incentives" includes both at-purchase incentives and
                after-purchase incentives, which can include the Federal EV tax
                credit, cash rebates, utility bill credits, perks like free
                charging or HOV-lane access, or rebates and credits for charger
                installation. EV incentives and rebates may change or become
                unavailable.
              </p>
              <p>
                EV incentives and rebates may change or become unavailable. We
                strive to regularly update available rebates and incentives, but
                our information may not always be comprehensive. For the most
                up-to-date information, visit the<!-- -->
                <a
                  href="https://afdc.energy.gov/"
                  target="_blank"
                  class="text-muted"
                  >Alternative Fuels Data Center</a
                >
                <!-- -->website or check with the website of the organization
                offering a specific incentive or rebate. While we publish these
                incentives and rebates on our site, you will still need to visit
                the website of each individual incentive and rebate in order to
                apply for them, in addition to fulfilling any other listed
                application requirements for each incentive.
              </p>
            </div>
            <div class="bg-[#1A1A1A] py-4">
              <div class="container">
                <h2
                  class="heading-2 normal-case text-center text-white sm:text-left"
                >
                  Information &amp; FAQs
                </h2>
              </div>
            </div>
            <div class="bg-light py-4">
              <div class="container">
                <h3 class="heading-3 normal-case pb-3 text-center sm:text-left">
                  Electric Vehicles Incentive&nbsp;Information
                </h3>
                <p class="pb-3">
                  Did you know that your location, income, household size, and
                  specific EV all impact the rebates and incentives you can
                  qualify for? Use this tool to find out if you qualify for
                  incentives, how much you can receive in credits after the
                  purchase of your EV, and more.
                </p>
                <p class="text-xs">
                  <em
                    >FAQs were last updated on
                    <strong>October 19, 2022</strong></em
                  >
                </p>
              </div>
            </div>
            <div class="container pt-4 pb-5">
              <h3 class="heading-3 normal-case pb-3">FAQs</h3>
              <hr />
              <div class="expandable-list-item">
                <button
                  class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                  aria-expanded="false"
                >
                  <div class="heading-4 normal-case w-full px-3 py-3">
                    <h3 class="heading-4 normal-case">
                      What incentives do you get for buying an
                      electric&nbsp;car?
                    </h3>
                  </div>
                  <span class="ml-3 whitespace-nowrap"
                    ><div style="position: static">
                      <svg
                        viewBox="0 0 24 24"
                        class="icon icon-fill-default my-3 mr-3"
                        style="width: 21px; height: 21px"
                        aria-hidden="true"
                        data-test-item="down">
                        <use href="#keyboard_arrow_down"></use>
                      </svg></div
                  ></span>
                </button>
                <div class="expandable-list-item-collapse border-t collapse">
                  <div class="px-3 py-3 expandable-list-item-shadow">
                    <div class="whitespace-pre-line">
                      When you buy an electric car, you may be eligible for a
                      one-time tax credit of up to $7,500 for a new clean
                      vehicle or up to $4,000 for a pre-owned clean vehicle from
                      the federal government, depending on the amount of income
                      you earn and subject to meeting the criteria for each
                      credit set forth by the IRS. It's important to note that
                      at this time, this isn't represented as immediate
                      point-of-sale savings on your EV. It's a tax credit, which
                      means that it reduces what you owe in federal income taxes
                      during the year that you purchased your electric vehicle.
                      There are also state and local incentives you may qualify
                      for. These can vary depending on your location, your
                      household size, your utility provider, which EV you want,
                      and whether you're trading in a car. Those incentives can
                      include: - Cash rebates that come after purchasing the EV
                      - Vouchers, down payments or grants that can be put toward
                      an EV purchase before buying - Bill credits from utility
                      companies - Perks like free charging or HOV-lane access -
                      Rebates and credits for charger installation You can use
                      our incentives tool to search for incentives by location
                      or vehicle make/model.
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
                      How do I get a state or local rebate on an&nbsp;EV?
                    </h3>
                  </div>
                  <span class="ml-3 whitespace-nowrap"
                    ><div style="position: static">
                      <svg
                        viewBox="0 0 24 24"
                        class="icon icon-fill-default my-3 mr-3"
                        style="width: 21px; height: 21px"
                        aria-hidden="true"
                        data-test-item="down">
                        <use href="#keyboard_arrow_down"></use>
                      </svg></div
                  ></span>
                </button>
                <div class="expandable-list-item-collapse border-t collapse">
                  <div class="px-3 py-3 expandable-list-item-shadow">
                    <div class="whitespace-pre-line">
                      Rebates differ by state and vehicle. Use our incentives
                      tool to find the specific rebates you qualify for. To
                      apply for each rebate, click or tap Learn More to visit
                      the website offering the rebate.
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
                      How do I claim an EV&nbsp;grant?
                    </h3>
                  </div>
                  <span class="ml-3 whitespace-nowrap"
                    ><div style="position: static">
                      <svg
                        viewBox="0 0 24 24"
                        class="icon icon-fill-default my-3 mr-3"
                        style="width: 21px; height: 21px"
                        aria-hidden="true"
                        data-test-item="down">
                        <use href="#keyboard_arrow_down"></use>
                      </svg></div
                  ></span>
                </button>
                <div class="expandable-list-item-collapse border-t collapse">
                  <div class="px-3 py-3 expandable-list-item-shadow">
                    <div class="whitespace-pre-line">
                      Your dealer will claim the government EV grant after you
                      purchase your electric vehicle, and deduct that amount
                      from the vehicle's asking price if you are buying in cash.
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
                      What states offer incentives for electric&nbsp;cars?
                    </h3>
                  </div>
                  <span class="ml-3 whitespace-nowrap"
                    ><div style="position: static">
                      <svg
                        viewBox="0 0 24 24"
                        class="icon icon-fill-default my-3 mr-3"
                        style="width: 21px; height: 21px"
                        aria-hidden="true"
                        data-test-item="down">
                        <use href="#keyboard_arrow_down"></use>
                      </svg></div
                  ></span>
                </button>
                <div class="expandable-list-item-collapse border-t collapse">
                  <div class="px-3 py-3 expandable-list-item-shadow">
                    <div class="whitespace-pre-line">
                      45 states and the District of Columbia provide incentives
                      for electric vehicles. These incentives include rebates,
                      tax credits, utility rate reductions, exemption from
                      emissions testing, and fleet acquisition goals.
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
                      What factors should be considered for federal incentives
                      for a new&nbsp;EV?
                    </h3>
                  </div>
                  <span class="ml-3 whitespace-nowrap"
                    ><div style="position: static">
                      <svg
                        viewBox="0 0 24 24"
                        class="icon icon-fill-default my-3 mr-3"
                        style="width: 21px; height: 21px"
                        aria-hidden="true"
                        data-test-item="down">
                        <use href="#keyboard_arrow_down"></use>
                      </svg></div
                  ></span>
                </button>
                <div class="expandable-list-item-collapse border-t collapse">
                  <div class="px-3 py-3 expandable-list-item-shadow">
                    <div class="whitespace-pre-line">
                      For qualified EVs purchased after 8/16/2022 and before
                      1/1/2023, the minimum Section 30D federal tax credit
                      amount is $2,500, and the credit may be up to $7,500
                      depending on the vehicle's battery capacity. Note that the
                      credit is phased out for an EV in the 2nd through 4th
                      quarters following the calendar quarter in which a minimum
                      of 200,000 qualified EVs have been sold by its respective
                      manufacturer for use in the U.S. Furthermore, the final
                      assembly of the EV must occur within North America. For
                      qualified EVs purchased after 12/31/2022 and before
                      1/1/2033, under the Inflation Reduction Act, the Section
                      30D* federal tax credit may be up to $7,500. A credit of
                      $3,750 is available if the battery that propels the EV
                      contains critical minerals that meet certain domestic
                      sourcing requirements. An additional credit of $3,750 is
                      available if the battery that propels the EV contains
                      certain components assembled or manufactured in North
                      America. Qualified vehicles must be made by a qualified
                      manufacturer, the final assembly of the EV must occur
                      within North America, and the MSRP of the vehicle must be
                      less than $55,000 (or $80,000 for vans, pickup trucks and
                      SUVs). There are also income caps to consider: individuals
                      with current or prior year modified adjusted gross income
                      above $150,000, joint filers above $300,000, and heads of
                      household above $225,000, do not qualify to claim the
                      credit. We recommend contacting a tax preparer for
                      assessing these incentives and for determining whether you
                      may qualify for the federal EV tax credit. *The Section
                      30D credit under IRA outlined above is intended for
                      individual taxpayers only. If you are a business that is
                      purchasing clean vehicles, there is a credit specifically
                      for business entities under IRA, Section 45W, that
                      provides a credit of up to $7,500 for qualifying electric
                      vehicles weighing less than 14,000 pounds, or $40,000 for
                      qualifying heavy vehicles. Please contact your tax
                      preparer for additional information related to these
                      credits.
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
                      What incentives are available for a pre-owned&nbsp;EV?
                    </h3>
                  </div>
                  <span class="ml-3 whitespace-nowrap"
                    ><div style="position: static">
                      <svg
                        viewBox="0 0 24 24"
                        class="icon icon-fill-default my-3 mr-3"
                        style="width: 21px; height: 21px"
                        aria-hidden="true"
                        data-test-item="down">
                        <use href="#keyboard_arrow_down"></use>
                      </svg></div
                  ></span>
                </button>
                <div class="expandable-list-item-collapse border-t collapse">
                  <div class="px-3 py-3 expandable-list-item-shadow">
                    <div class="whitespace-pre-line">
                      Under the Inflation Reduction Act, under Section 25E, used
                      light-duty electric vehicles purchased from a dealer after
                      12/31/2022 and before 1/1/2033 may be eligible for a
                      federal tax credit of either $4,000 or 30% of the used
                      EV's price, whichever is less. Qualifying cars would need
                      to be at least two model years earlier than the year of
                      purchase. The sales price cap of the EV is $25,000, and
                      there are also income caps to consider: individuals with
                      current or prior year modified adjusted gross income above
                      $75,000, joint filers above $150,000, and heads of
                      household above $112,500, do not qualify. Eligibility
                      factors for the Section 25E previously-owned clean vehicle
                      credit do NOT include whether the final assembly took
                      place in North America, nor where key battery components
                      or minerals come from. However, vehicles are limited to
                      one credit every three years, based on the VIN. Some local
                      authorities offer rebates on used and certified pre-owned
                      EV purchases. There may be additional state, local, or
                      private incentives for low-income communities on used
                      vehicles. You can use our search tool to find used car
                      incentives you qualify for. We recommend contacting your
                      tax preparer for assessing these incentives and for
                      determining whether you may qualify for the federal EV tax
                      credit or other local incentives.
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
                      How do I claim the federal EV tax&nbsp;credit?
                    </h3>
                  </div>
                  <span class="ml-3 whitespace-nowrap"
                    ><div style="position: static">
                      <svg
                        viewBox="0 0 24 24"
                        class="icon icon-fill-default my-3 mr-3"
                        style="width: 21px; height: 21px"
                        aria-hidden="true"
                        data-test-item="down">
                        <use href="#keyboard_arrow_down"></use>
                      </svg></div
                  ></span>
                </button>
                <div class="expandable-list-item-collapse border-t collapse">
                  <div class="px-3 py-3 expandable-list-item-shadow">
                    <div class="whitespace-pre-line">
                      You can claim the one-time tax credit of up to $7,500 for
                      a new clean vehicle or up to $4,000 for a pre-owned clean
                      vehicle on your federal income tax return by filing
                      <a
                        href="https://www.irs.gov/pub/irs-pdf/f8936.pdf"
                        target="_blank"
                        >IRS Form 8936</a>. When you buy the car, you’ll need to get a letter of
                      certification from your dealer stating the vehicle’s make,
                      model, and the tax year in which it qualifies for the
                      credit. This letter is required for purposes of claiming
                      the credit and will provide helpful information related to
                      whether your EV is a qualifying vehicle, subject to
                      meeting all the requirements laid out by the IRS. It’s
                      important to confirm if your vehicle qualifies for the tax
                      credit before you purchase it, and we recommend you
                      consult with a tax advisor. You may also want to have your
                      Buyer’s Order on hand, so that you can easily access any
                      vehicle-related information you may need for tax purposes,
                      such as your VIN.<br /><br />Additionally, in order to
                      know your modified adjusted gross income, and thus if you
                      are eligible to claim an EV tax credit, you’ll need to
                      reference information from your current and prior year
                      Forms 1040. That means you may need to have completed a
                      large chunk of your current year individual tax return
                      before beginning to fill out Form 8936.<br /><br />If you
                      need help or have other questions about how to claim the
                      federal EV tax credit, contact a tax preparer.
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
                      Can I get incentives for leasing an&nbsp;EV?
                    </h3>
                  </div>
                  <span class="ml-3 whitespace-nowrap"
                    ><div style="position: static">
                      <svg
                        viewBox="0 0 24 24"
                        class="icon icon-fill-default my-3 mr-3"
                        style="width: 21px; height: 21px"
                        aria-hidden="true"
                        data-test-item="down">
                        <use href="#keyboard_arrow_down"></use>
                      </svg></div
                  ></span>
                </button>
                <div class="expandable-list-item-collapse border-t collapse">
                  <div class="px-3 py-3 expandable-list-item-shadow">
                    <div class="whitespace-pre-line">
                      The federal tax credit for new clean vehicles under IRA is
                      available for EVs that are acquired for use or lease, not
                      for resale, and may apply to leased EVs. Eligibility for
                      the credit depends on the fact pattern of the lease
                      arrangement. It is important that you consult with your
                      tax advisor on determining if the specific terms of your
                      lease agreement make you eligible to claim the credit.
                      Additionally, some state and local authorities offer
                      incentives for leased EVs. Also, sometimes automakers will
                      offer lower-priced leases that include the value of the
                      tax credit.
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
                      What perks can come with owning an EV? (HOV lane,
                      discounted electricity,&nbsp;etc.)
                    </h3>
                  </div>
                  <span class="ml-3 whitespace-nowrap"
                    ><div style="position: static">
                      <svg
                        viewBox="0 0 24 24"
                        class="icon icon-fill-default my-3 mr-3"
                        aria-hidden="true"
                        data-test-item="down"
                        style="width: 21px; height: 21px">
                        <use href="#keyboard_arrow_down"></use>
                      </svg></div
                  ></span>
                </button>
                <div
                  class="expandable-list-item-collapse border-t collapse"
                  style=""
                >
                  <div class="px-3 py-3 expandable-list-item-shadow">
                    <div class="whitespace-pre-line">
                      EV owners enjoy quite a few perks. Some states allow
                      electric vehicles to drive in carpool or HOV lanes, even
                      when there is only one vehicle occupant. States sometimes
                      also offer cheaper registration for EVs, and a tax credit
                      for installing a home car charging station. This last
                      benefit is a sizeable one, since owners can keep their
                      cars fully charged without needing to visit an outside
                      charging station, and they can also charge during off-peak
                      hours, leading to a substantially lower cost of ownership.
                      In addition, selected automakers provide charging credits
                      at certain charging stations. Some businesses also offer
                      free EV parking, or allow electric vehicles to park closer
                      to building entrances — and cities like Los Angeles offer
                      free parking for EVs in certain areas of town. This
                      information is for illustrative purposes only, and any
                      rebates/incentive/perks may vary depending upon the EV
                      purchased and other factors.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>

      @endsection