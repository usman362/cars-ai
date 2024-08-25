@extends('site.layouts.app')
@section('content')
    <main id="mainContent"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div
            class="bg-[linear-gradient(#03806d_299px,_#ffffff_299px)] md:bg-[linear-gradient(#03806d_315px,_#ffffff_315px)] lg:bg-[linear-gradient(#03806d_356px,_#ffffff_356px)]">
            <div class="container container-max-width-2">
                <h1 class="heading-3 normal-case heading-md-2 md:normal-case heading-lg-1 lg:normal-case pt-4 pb-3 text-center text-white md:pt-6 md:pb-4"
                    data-test="paymentCalculatorPageTitle">Car Payment Calculator</h1>
                <div class="flex flex-col items-center" data-reach-tabs="" data-orientation="horizontal">
                    <div role="tablist" aria-orientation="horizontal"
                        class="switch-bar switch-bar-block w-full max-w-[200px] sm:max-w-[350px]" data-reach-tab-list="">
                        <button aria-controls="tabs--22--panel--0" aria-selected="true" role="tab" tabindex="0"
                            class="w-full switch" data-test="loanSwitch" aria-label="Go to the Loan Payment page"
                            aria-current="page" data-reach-tab="" data-orientation="horizontal" id="tabs--22--tab--0"
                            type="button" data-selected="">Loan<span
                                class="hidden-xs-down">&nbsp;Payment</span></button><button
                            aria-controls="tabs--22--panel--1" aria-selected="false" role="tab" tabindex="-1"
                            class="w-full switch" data-test="leaseSwitch" aria-label="Go to the Lease Payment page"
                            data-reach-tab="" data-orientation="horizontal" id="tabs--22--tab--1" type="button">Lease<span
                                class="hidden-xs-down">&nbsp;Payment</span></button></div>
                    <div data-test="calculatorSection" class="w-full pt-3 pb-4 md:pt-4 md:pb-5 lg:pt-5 lg:pb-6"
                        data-reach-tab-panels="">
                        <div aria-labelledby="tabs--22--tab--0" role="tabpanel" tabindex="0" data-reach-tab-panel=""
                            id="tabs--22--panel--0">
                            <div class="row mb-3 flex-col-reverse lg:mb-5 lg:flex-row">
                                <div class="lg:pr-2 col-lg-6">
                                    <div class="rounded border bg-white pt-3 pb-4 md:pt-4 px-3 md:px-7 lg:px-5 h-full">
                                        <section></section>
                                        <h2
                                            class="heading-4 normal-case heading-md-3 md:normal-case mb-3 text-center lg:mb-4 lg:text-left">
                                            Calculate Your Estimated Monthly Loan&nbsp;Payment</h2>
                                        <div class="field-container-challenger mb-3">
                                            <div class="field-wrapper-challenger field-label-padding-challenger">
                                                <div class="field-content-row">
                                                    <div class="field-input-label-challenger"><input id="19"
                                                            class="form-control-challenger" aria-label="Total MSRP"
                                                            placeholder=" " inputmode="numeric"
                                                            data-test="calculatorMsrpInput" data-test-item="loan"
                                                            value="$20,000">
                                                        <div class="field-label-text-challenger" data-test="fieldLabel">
                                                            <label for="19" data-ignore-contrast="true">Total
                                                                MSRP</label></div>
                                                    </div>
                                                </div>
                                                <div class="field-message-challenger">
                                                    <div class="field-message-text-challenger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field-container-challenger">
                                            <div class="field-wrapper-challenger field-label-padding-challenger">
                                                <div class="field-content-row">
                                                    <div class="field-input-label-challenger"><input id="20"
                                                            class="form-control-challenger" aria-label="Down Payment"
                                                            placeholder=" " inputmode="numeric"
                                                            data-test="calculatorDownPaymentInput" data-test-item="loan"
                                                            value="$2,500">
                                                        <div class="field-label-text-challenger" data-test="fieldLabel">
                                                            <label for="20" data-ignore-contrast="true">Down
                                                                Payment</label></div>
                                                    </div>
                                                </div>
                                                <div class="field-message-challenger">
                                                    <div class="field-message-text-challenger"></div>
                                                </div>
                                            </div>
                                        </div><span class="mb-2-5 ml-2-5 block text-xs text-muted">Optional</span>
                                        <div class="field-container-challenger">
                                            <div class="field-wrapper-challenger field-label-padding-challenger">
                                                <div class="field-content-row">
                                                    <div class="field-input-label-challenger"><input id="21"
                                                            class="form-control-challenger" aria-label="Trade-In Value"
                                                            placeholder=" " inputmode="numeric"
                                                            data-test="calculatorTradeInInput" data-test-item="loan"
                                                            value="$0">
                                                        <div class="field-label-text-challenger" data-test="fieldLabel">
                                                            <label for="21" data-ignore-contrast="true">Trade-In
                                                                Value</label></div>
                                                    </div>
                                                </div>
                                                <div class="field-message-challenger">
                                                    <div class="field-message-text-challenger"></div>
                                                </div>
                                            </div>
                                        </div><span class="mb-2-5 ml-2-5 block text-xs text-muted">Optional</span>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="field-container-challenger relative mb-3">
                                                    <div class="field-wrapper-challenger field-label-padding-challenger">
                                                        <div class="field-content-row">
                                                            <div class="field-input-label-challenger"><input
                                                                    id="22" class="form-control-challenger"
                                                                    aria-label="Interest Rate (APR)" placeholder=" "
                                                                    inputmode="decimal"
                                                                    data-test="calculatorInterestRateInput"
                                                                    value="11.35">
                                                                <div class="field-label-text-challenger"
                                                                    data-test="fieldLabel"><label for="22"
                                                                        data-ignore-contrast="true">Interest Rate
                                                                        (APR)</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="field-message-challenger">
                                                            <div class="field-message-text-challenger"></div>
                                                        </div>
                                                    </div>
                                                </div><span
                                                    class="absolute pointer-events-none top-[20px] z-1 pl-[calc(0.9375rem_+_1px)] pt-[0px]"><span
                                                        class="invisible">11.35</span>%</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="field-container-challenger relative mb-3">
                                                    <div class="field-wrapper-challenger field-label-padding-challenger">
                                                        <div class="field-content-row">
                                                            <div class="field-input-label-challenger"><input
                                                                    id="23" class="form-control-challenger"
                                                                    aria-label="Sales Tax" placeholder=" "
                                                                    inputmode="decimal"
                                                                    data-test="calculatorSalesTaxInput" value="0.00">
                                                                <div class="field-label-text-challenger"
                                                                    data-test="fieldLabel"><label for="23"
                                                                        data-ignore-contrast="true">Sales Tax</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="field-message-challenger">
                                                            <div class="field-message-text-challenger"></div>
                                                        </div>
                                                    </div>
                                                </div><span
                                                    class="absolute pointer-events-none top-[20px] z-1 pl-[calc(0.9375rem_+_1px)] pt-[0px]"><span
                                                        class="invisible">0.00</span>%</span>
                                            </div>
                                            <div class="items-end sm:flex col-sm-7"><button type="button"
                                                    class="link-button mb-[18px] sm:pl-2" data-test="salesTaxLink">What’s
                                                    my sales tax?</button></div>
                                        </div><span class="mt-2 mb-2-5 block">Term<span
                                                class="sm:hidden lg:inline xl:hidden"> (in months)</span></span>
                                        <div class="row">
                                            <div class="pr-2 mb-3 col-4"><a
                                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)]"
                                                    aria-pressed="false" href="javascript:void(0)" role="button"
                                                    data-test="calculatorLengthSelector" data-test-item="24">
                                                    <div data-test="cardContent" class="card-content items-center">
                                                        <div>24<span class="hidden sm:inline lg:hidden xl:inline">
                                                                months</span></div>
                                                    </div>
                                                </a></div>
                                            <div class="px-2 mb-3 col-4"><a
                                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)]"
                                                    aria-pressed="false" href="javascript:void(0)" role="button"
                                                    data-test="calculatorLengthSelector" data-test-item="36">
                                                    <div data-test="cardContent" class="card-content items-center">
                                                        <div>36<span class="hidden sm:inline lg:hidden xl:inline">
                                                                months</span></div>
                                                    </div>
                                                </a></div>
                                            <div class="pl-2 mb-3 col-4"><a
                                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)]"
                                                    aria-pressed="false" href="javascript:void(0)" role="button"
                                                    data-test="calculatorLengthSelector" data-test-item="48">
                                                    <div data-test="cardContent" class="card-content items-center">
                                                        <div>48<span class="hidden sm:inline lg:hidden xl:inline">
                                                                months</span></div>
                                                    </div>
                                                </a></div>
                                            <div class="pr-2 col-4"><a
                                                    class="linkable card transition-[transition:box-shadow] shadow-[0_0_0_2px_rgba(0,152,209,1)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[0_0_0_2px_rgba(0,152,209,1),2px_4px_9px_0_rgba(1,1,1,0.15)]"
                                                    aria-pressed="true" href="javascript:void(0)" role="button"
                                                    data-test="calculatorLengthSelector" data-test-item="60">
                                                    <div data-test="cardContent" class="card-content items-center">
                                                        <div>60<span class="hidden sm:inline lg:hidden xl:inline">
                                                                months</span></div>
                                                    </div>
                                                </a></div>
                                            <div class="px-2 col-4"><a
                                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)]"
                                                    aria-pressed="false" href="javascript:void(0)" role="button"
                                                    data-test="calculatorLengthSelector" data-test-item="72">
                                                    <div data-test="cardContent" class="card-content items-center">
                                                        <div>72<span class="hidden sm:inline lg:hidden xl:inline">
                                                                months</span></div>
                                                    </div>
                                                </a></div>
                                            <div class="pl-2 col-4"><a
                                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)]"
                                                    aria-pressed="false" href="javascript:void(0)" role="button"
                                                    data-test="calculatorLengthSelector" data-test-item="84">
                                                    <div data-test="cardContent" class="card-content items-center">
                                                        <div>84<span class="hidden sm:inline lg:hidden xl:inline">
                                                                months</span></div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="hidden-lg-up mt-4 flex flex-col items-center md:mt-5"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                class="mb-2-5 btn btn-primary btn-md btn-block"
                                                href="/model-search/?priceHigh=20000&amp;sort=PRICE_DESC"><span
                                                    class="btn-inner">See New Cars in Your Budget</span></a><a
                                                data-ignore-contrast="false" data-loading="false"
                                                class="btn btn-secondary btn-md btn-block"
                                                href="/used-cars-for-sale/listings/price-below-20000/"><span
                                                    class="btn-inner">See Used Cars in Your Budget</span></a></div>
                                    </div><span style="font-size: 0px;"></span>
                                </div>
                                <div class="mb-2-5 lg:mb-0 lg:pl-2 col-lg-6">
                                    <div class="rounded border bg-white pt-3 pb-3 lg:pb-5 md:pt-4 h-full px-3 md:px-5">
                                        <div class="px-3 md:px-5">
                                            <h2 class="heading-3 normal-case mb-2 px-3 text-center md:px-5 ">Estimated
                                                Monthly Payment*</h2>
                                            <div class="hidden-md-up">
                                                <div class="">
                                                    <div class="sticky-wrapper-waypoint"><span
                                                            style="font-size: 0px;"></span></div>
                                                    <div data-test="stickyWrapper"
                                                        class="sticky-wrapper sticky-wrapper-zindex sticky-wrapper-fixed sticky-wrapper-shadow z-[1000] flex flex-col justify-center bg-white py-2 pl-3">
                                                        <div class="heading-4 normal-case mb-1">Estimated Monthly Payment*
                                                        </div>
                                                        <div class="inline">
                                                            <div class="heading-3 normal-case inline">$384/mo.</div> <i>for
                                                                5 years</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-end justify-center">
                                                <div class="heading-1 normal-case">$384</div>
                                                <div class="heading-3 normal-case mb-1">/mo.</div>
                                            </div><i class="mb-2-5 block text-center lg:mb-3">for 5 years</i>
                                            <div class="mb-2-5 border-t lg:mb-3"></div>
                                            <div class="hidden-lg-up text-center"><button type="button"
                                                    class="link-button inline-flex items-center no-underline hover:no-underline">View
                                                    Summary<svg viewBox="0 0 24 24"
                                                        class="icon icon-after icon-fill-default" aria-hidden="true"
                                                        style="width: 24px; height: 24px;">
                                                        <use href="#keyboard_arrow_down"></use>
                                                    </svg></button></div>
                                        </div>
                                        <div class="hidden-md-down">
                                            <h3 class="heading-4 normal-case heading-lg-3 lg:normal-case mb-2-5">Loan
                                                Summary</h3>
                                            <div class="flex justify-between mb-2">
                                                <div>Total MSRP</div><span class="whitespace-nowrap"
                                                    data-test="calculatorLoanOutputMSRP">$20,000</span>
                                            </div>
                                            <div class="flex justify-between mb-2">
                                                <div>Down Payment</div><span class="whitespace-nowrap"
                                                    data-test="calculatorLoanOutputDownPayment">- $2,500</span>
                                            </div>
                                            <div class="flex justify-between mb-2">
                                                <div>Trade-In Value</div><span class="whitespace-nowrap"
                                                    data-test="calculatorLoanOutputTradeIn">- $0</span>
                                            </div>
                                            <div class="flex justify-between mb-2">
                                                <div>Est. Sales Tax (0.00%)</div><span class="whitespace-nowrap"
                                                    data-test="calculatorLoanOutputSalesTax">+ $0</span>
                                            </div>
                                            <div class="flex justify-between mb-2">
                                                <div>Est. Interest (11.35%)</div><span class="whitespace-nowrap"
                                                    data-test="calculatorLoanOutputInterest">+ $5,513</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <div>Other Fees</div><span class="whitespace-nowrap">Not Included</span>
                                            </div>
                                            <div class="border-t mt-4 mb-3"></div>
                                            <div class="flex justify-between mb-2 font-bold">
                                                <div>Total Loan Amount</div><span class="whitespace-nowrap"
                                                    data-test="calculatorLoanOutputTotal">$23,013</span>
                                            </div>
                                            <div class="flex justify-between mb-2 font-bold">
                                                <div>Monthly Payment</div><span class="whitespace-nowrap"
                                                    data-test="calculatorLoanOutputMonthlyPayment">$384</span>
                                            </div>
                                            <div class="hidden-md-down">
                                                <div class="border-t mt-3 mb-5"></div>
                                                <div class="mb-4 flex flex-col items-center"><a
                                                        data-ignore-contrast="true" data-loading="false"
                                                        data-test="newCarsLoanCTA"
                                                        class="mb-2-5 btn btn-primary btn-md btn-block"
                                                        href="/model-search/?priceHigh=20000&amp;sort=PRICE_DESC"><span
                                                            class="btn-inner">See New Cars in Your Budget</span></a><a
                                                        data-ignore-contrast="false" data-loading="false"
                                                        data-test="usedCarsLoanCTA"
                                                        class="mb-1 btn btn-secondary btn-md btn-block"
                                                        href="/used-cars-for-sale/listings/price-below-20000/"><span
                                                            class="btn-inner">See Used Cars in Your Budget</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container container-max-width-1 text-center"><span class="block md:mb-2">* The
                                    information provided is for illustrative purposes only, and is not an offer to
                                    lend.</span>You must qualify for credit from a dealer/lender. Other fees and finance
                                charges may apply.</div>
                        </div>
                        <div aria-labelledby="tabs--22--tab--1" role="tabpanel" tabindex="-1" data-reach-tab-panel=""
                            id="tabs--22--panel--1" hidden=""></div>
                    </div>
                </div>
            </div>
        </div>
        <section class="relative overflow-hidden bg-light pb-5 lg:pb-6">
            <div class="static top-[100px] z-0 text-center md:absolute md:right-[-270px] md:text-left lg:right-[-120px]">
                <div class="picture-container" style="padding-bottom: 0px; width: 500px; height: 375px;"><img
                        class="picture-inner picture-svg"
                        src="/assets/_next/static/images/module-1-img-61d1282fee01b38e2dcac37fb617efb3.svg" loading="lazy"
                        alt="" role="presentation"></div>
            </div>
            <div class="container">
                <h2 class="heading-3 normal-case heading-md-2 md:normal-case pt-3 pb-4 text-center md:pt-5 lg:pb-5">Best
                    Ranked Cars by&nbsp;Price</h2>
                <div class="row m-auto justify-center md:max-w-[70%] lg:max-w-[60%]">
                    <div class="pr-2 pl-0 col-6"><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-3 block h-[100px] text-center font-bold leading-[6]"
                            size="1" href="/best-cars-trucks/cars/price-under-20000/">Under $20K</a></div>
                    <div class="pl-2 pr-0 col-6"><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-3 block h-[100px] text-center font-bold leading-[6]"
                            size="2" href="/best-cars-trucks/cars/price-20000-30000/">Under $30K</a></div>
                    <div class="pl-0 pr-2 col-6"><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-3 block h-[100px] text-center font-bold leading-[6]"
                            size="1" href="/best-cars-trucks/cars/price-30000-40000/">Under $40K</a></div>
                    <div class="pl-2 pr-0 col-6"><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-3 block h-[100px] text-center font-bold leading-[6]"
                            size="2" href="/best-cars-trucks/cars/price-40000-50000/">Under $50K</a></div>
                    <div class="pl-0 pr-2 col-6"><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] block h-[100px] text-center font-bold leading-[6]"
                            size="2" href="/best-cars-trucks/cars/price-50000-60000/">Under $60K</a></div>
                    <div class="pl-2 pr-0 col-6"><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] block h-[100px] text-center font-bold leading-[6]"
                            size="2" href="/best-cars-trucks/cars/price-60000-70000/">Under $70K</a></div>
                </div>
            </div>
        </section>
        <section class="pt-6">
            <div class="container">
                <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-2-5 text-center md:mb-5">Cars Near You in
                    Your&nbsp;Budget</h2>

                    <div class="mt-4 mb-5 space-y-3 rankingsRecommendationCarousel" id="rankingsRecommendationCarousel">
                        <div class="relative items-center justify-center">
                            <div class="carousel">
                                <div class="relative flex w-full items-center">
                                    <button class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-2 carousel-arrow-prev carousel-arrow-prev" data-test="carouselArrowPrev" aria-label="Previous" disabled="">
                                        <svg width="16px" height="16px" viewBox="0 0 16 16" class="carousel-arrow-icon">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline stroke-width="1.5" fill-rule="nonzero" points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="grow" style="position: relative; overflow: hidden">
                                        <ul data-test="carouselSlideContainer" class="" style="display: flex; flex-flow: row; position: relative; overflow: hidden; transform: translateX(0px);">
                                            <li class="px-2" data-test="carouselCurrentSlide0" style="
                                    scroll-snap-align: start;
                                    flex-shrink: 0;
                                    width: 33.3333%;
                                  ">
                                                <div class="pb-2">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" data-test="newListing" data-test-item="4W5KHNRL1RZ503592" data-test-dealerid="466388">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="
                                                height: auto;
                                                padding-bottom: 56.25%;
                                                width: 100%;
                                              ">
                                                                        <img sizes="300px" src="https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="
                                                  https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-60.jpg     60w,
                                                  https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-120.jpg   120w,
                                                  https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-180.jpg   180w,
                                                  https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-360.jpg   360w,
                                                  https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-540.jpg   540w,
                                                  https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-860.jpg   860w,
                                                  https://listings-prod.tcimg.net/listings/466388/92/35/4W5KHNRL1RZ503592/XA7TWXZ6J2KNVZ2YMISE46JSLM-og-1400.jpg 1400w
                                                " style="background-image: none">
                                                                    </div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown">
                                                                        <button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p>
                                                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1">
                                                                        <span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item="">
                                                                    <svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline">
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">
                                                                            New 2024 Acura
                                                                        </div>
                                                                        <div class="w-full grid grid-cols-[1fr_auto] gap-1" data-test="vehicleCardTrim">
                                                                            <div class="truncate">
                                                                                ZDX A-Spec Package AWD
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">
                                                                                            $69,850
                                                                                        </div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">
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
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Irvine, CA</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge">
                                                                        <svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-1323" aria-hidden="false" style="width: 14px; height: 14px">
                                                                            <title id="icon-1323">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" href="/new-cars-for-sale/listing/4W5KHNRL1RZ503592/2024-acura-zdx/?position=0&amp;sourceType=ranking&amp;sponsored=true"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="px-2" data-test="" style="
                                    scroll-snap-align: start;
                                    flex-shrink: 0;
                                    width: 33.3333%;
                                  ">
                                                <div class="pb-2">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" data-test="newListing" data-test-item="4W5KHNRL0RZ502806" data-test-dealerid="466388">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="
                                                height: auto;
                                                padding-bottom: 56.25%;
                                                width: 100%;
                                              ">
                                                                        <img sizes="300px" src="https://listings-prod.tcimg.net/listings/466388/06/28/4W5KHNRL0RZ502806/VIYWP77B3NKIDBECX7E2XA72HE-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="
                                                  https://listings-prod.tcimg.net/listings/466388/06/28/4W5KHNRL0RZ502806/VIYWP77B3NKIDBECX7E2XA72HE-cr-60.jpg   60w,
                                                  https://listings-prod.tcimg.net/listings/466388/06/28/4W5KHNRL0RZ502806/VIYWP77B3NKIDBECX7E2XA72HE-cr-120.jpg 120w,
                                                  https://listings-prod.tcimg.net/listings/466388/06/28/4W5KHNRL0RZ502806/VIYWP77B3NKIDBECX7E2XA72HE-cr-180.jpg 180w,
                                                  https://listings-prod.tcimg.net/listings/466388/06/28/4W5KHNRL0RZ502806/VIYWP77B3NKIDBECX7E2XA72HE-cr-360.jpg 360w,
                                                  https://listings-prod.tcimg.net/listings/466388/06/28/4W5KHNRL0RZ502806/VIYWP77B3NKIDBECX7E2XA72HE-cr-540.jpg 540w
                                                " style="background-image: none">
                                                                    </div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown">
                                                                        <button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p>
                                                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1">
                                                                        <span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item="">
                                                                    <svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline">
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">
                                                                            New 2024 Acura
                                                                        </div>
                                                                        <div class="w-full grid grid-cols-[1fr_auto] gap-1" data-test="vehicleCardTrim">
                                                                            <div class="truncate">
                                                                                ZDX A-Spec Package AWD
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">
                                                                                            $70,450
                                                                                        </div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">
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
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Irvine, CA</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge">
                                                                        <svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-1331" aria-hidden="false" style="width: 14px; height: 14px">
                                                                            <title id="icon-1331">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" href="/new-cars-for-sale/listing/4W5KHNRL0RZ502806/2024-acura-zdx/?position=1&amp;sourceType=ranking&amp;sponsored=true"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="px-2" data-test="" style="
                                    scroll-snap-align: start;
                                    flex-shrink: 0;
                                    width: 33.3333%;
                                  ">
                                                <div class="pb-2">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" data-test="newListing" data-test-item="4W5KHNRL3RZ503593" data-test-dealerid="466388">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="
                                                height: auto;
                                                padding-bottom: 56.25%;
                                                width: 100%;
                                              ">
                                                                        <img sizes="300px" src="https://listings-prod.tcimg.net/listings/466388/93/35/4W5KHNRL3RZ503593/EXK4A22K5KZGJX4VRJA6DRNZ7Q-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="
                                                  https://listings-prod.tcimg.net/listings/466388/93/35/4W5KHNRL3RZ503593/EXK4A22K5KZGJX4VRJA6DRNZ7Q-cr-60.jpg   60w,
                                                  https://listings-prod.tcimg.net/listings/466388/93/35/4W5KHNRL3RZ503593/EXK4A22K5KZGJX4VRJA6DRNZ7Q-cr-120.jpg 120w,
                                                  https://listings-prod.tcimg.net/listings/466388/93/35/4W5KHNRL3RZ503593/EXK4A22K5KZGJX4VRJA6DRNZ7Q-cr-180.jpg 180w,
                                                  https://listings-prod.tcimg.net/listings/466388/93/35/4W5KHNRL3RZ503593/EXK4A22K5KZGJX4VRJA6DRNZ7Q-cr-360.jpg 360w,
                                                  https://listings-prod.tcimg.net/listings/466388/93/35/4W5KHNRL3RZ503593/EXK4A22K5KZGJX4VRJA6DRNZ7Q-cr-540.jpg 540w
                                                " style="background-image: none">
                                                                    </div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown">
                                                                        <button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p>
                                                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1">
                                                                        <span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item="">
                                                                    <svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline">
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">
                                                                            New 2024 Acura
                                                                        </div>
                                                                        <div class="w-full grid grid-cols-[1fr_auto] gap-1" data-test="vehicleCardTrim">
                                                                            <div class="truncate">
                                                                                ZDX A-Spec Package AWD
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">
                                                                                            $69,850
                                                                                        </div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">
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
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Irvine, CA</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge">
                                                                        <svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-1339" aria-hidden="false" style="width: 14px; height: 14px">
                                                                            <title id="icon-1339">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" href="/new-cars-for-sale/listing/4W5KHNRL3RZ503593/2024-acura-zdx/?position=2&amp;sourceType=ranking&amp;sponsored=true"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="px-2" data-test="" style="
                                    scroll-snap-align: start;
                                    flex-shrink: 0;
                                    width: 33.3333%;
                                  " inert="" aria-hidden="true">
                                                <div class="pb-2">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" data-test="newListing" data-test-item="4W5KHNRL2RZ502676" data-test-dealerid="466388">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="
                                                height: auto;
                                                padding-bottom: 56.25%;
                                                width: 100%;
                                              ">
                                                                        <img sizes="300px" src="https://listings-prod.tcimg.net/listings/466388/76/26/4W5KHNRL2RZ502676/VIYWP77B3NKIDBECX7E2XA72HE-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="
                                                  https://listings-prod.tcimg.net/listings/466388/76/26/4W5KHNRL2RZ502676/VIYWP77B3NKIDBECX7E2XA72HE-cr-60.jpg   60w,
                                                  https://listings-prod.tcimg.net/listings/466388/76/26/4W5KHNRL2RZ502676/VIYWP77B3NKIDBECX7E2XA72HE-cr-120.jpg 120w,
                                                  https://listings-prod.tcimg.net/listings/466388/76/26/4W5KHNRL2RZ502676/VIYWP77B3NKIDBECX7E2XA72HE-cr-180.jpg 180w,
                                                  https://listings-prod.tcimg.net/listings/466388/76/26/4W5KHNRL2RZ502676/VIYWP77B3NKIDBECX7E2XA72HE-cr-360.jpg 360w,
                                                  https://listings-prod.tcimg.net/listings/466388/76/26/4W5KHNRL2RZ502676/VIYWP77B3NKIDBECX7E2XA72HE-cr-540.jpg 540w
                                                " style="background-image: none">
                                                                    </div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown">
                                                                        <button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false" tabindex="-1">
                                                                            <p class="sr-only">Menu</p>
                                                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1">
                                                                        <span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item="" tabindex="-1">
                                                                    <svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline">
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">
                                                                            New 2024 Acura
                                                                        </div>
                                                                        <div class="w-full grid grid-cols-[1fr_auto] gap-1" data-test="vehicleCardTrim">
                                                                            <div class="truncate">
                                                                                ZDX A-Spec Package AWD
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">
                                                                                            $70,450
                                                                                        </div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">
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
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Irvine, CA</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge">
                                                                        <svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-1347" aria-hidden="false" style="width: 14px; height: 14px">
                                                                            <title id="icon-1347">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" href="/new-cars-for-sale/listing/4W5KHNRL2RZ502676/2024-acura-zdx/?position=3&amp;sourceType=ranking&amp;sponsored=true" tabindex="-1"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="px-2" data-test="" style="
                                    scroll-snap-align: start;
                                    flex-shrink: 0;
                                    width: 33.3333%;
                                  " inert="" aria-hidden="true">
                                                <div class="pb-2">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" data-test="newListing" data-test-item="4W5KHNRL0RZ503650" data-test-dealerid="466388">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="
                                                height: auto;
                                                padding-bottom: 56.25%;
                                                width: 100%;
                                              ">
                                                                        <img sizes="300px" src="https://listings-prod.tcimg.net/listings/466388/50/36/4W5KHNRL0RZ503650/63W57ZGYMF5OHXRMDSKYMEEZTM-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="
                                                  https://listings-prod.tcimg.net/listings/466388/50/36/4W5KHNRL0RZ503650/63W57ZGYMF5OHXRMDSKYMEEZTM-cr-60.jpg   60w,
                                                  https://listings-prod.tcimg.net/listings/466388/50/36/4W5KHNRL0RZ503650/63W57ZGYMF5OHXRMDSKYMEEZTM-cr-120.jpg 120w,
                                                  https://listings-prod.tcimg.net/listings/466388/50/36/4W5KHNRL0RZ503650/63W57ZGYMF5OHXRMDSKYMEEZTM-cr-180.jpg 180w,
                                                  https://listings-prod.tcimg.net/listings/466388/50/36/4W5KHNRL0RZ503650/63W57ZGYMF5OHXRMDSKYMEEZTM-cr-360.jpg 360w,
                                                  https://listings-prod.tcimg.net/listings/466388/50/36/4W5KHNRL0RZ503650/63W57ZGYMF5OHXRMDSKYMEEZTM-cr-540.jpg 540w
                                                " style="background-image: none">
                                                                    </div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown">
                                                                        <button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false" tabindex="-1">
                                                                            <p class="sr-only">Menu</p>
                                                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1">
                                                                        <span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item="" tabindex="-1">
                                                                    <svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline">
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">
                                                                            New 2024 Acura
                                                                        </div>
                                                                        <div class="w-full grid grid-cols-[1fr_auto] gap-1" data-test="vehicleCardTrim">
                                                                            <div class="truncate">
                                                                                ZDX A-Spec Package AWD
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">
                                                                                            $70,450
                                                                                        </div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">
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
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Irvine, CA</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge">
                                                                        <svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-1355" aria-hidden="false" style="width: 14px; height: 14px">
                                                                            <title id="icon-1355">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" href="/new-cars-for-sale/listing/4W5KHNRL0RZ503650/2024-acura-zdx/?position=4&amp;sourceType=ranking&amp;sponsored=true" tabindex="-1"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="px-2" data-test="" style="
                                    scroll-snap-align: start;
                                    flex-shrink: 0;
                                    width: 33.3333%;
                                  " inert="" aria-hidden="true">
                                                <div class="pb-2">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" data-test="newListing" data-test-item="4W5KHNRL5RZ504180" data-test-dealerid="466388">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="
                                                height: auto;
                                                padding-bottom: 56.25%;
                                                width: 100%;
                                              ">
                                                                        <img sizes="300px" src="https://listings-prod.tcimg.net/listings/466388/80/41/4W5KHNRL5RZ504180/VIYWP77B3NKIDBECX7E2XA72HE-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="
                                                  https://listings-prod.tcimg.net/listings/466388/80/41/4W5KHNRL5RZ504180/VIYWP77B3NKIDBECX7E2XA72HE-cr-60.jpg   60w,
                                                  https://listings-prod.tcimg.net/listings/466388/80/41/4W5KHNRL5RZ504180/VIYWP77B3NKIDBECX7E2XA72HE-cr-120.jpg 120w,
                                                  https://listings-prod.tcimg.net/listings/466388/80/41/4W5KHNRL5RZ504180/VIYWP77B3NKIDBECX7E2XA72HE-cr-180.jpg 180w,
                                                  https://listings-prod.tcimg.net/listings/466388/80/41/4W5KHNRL5RZ504180/VIYWP77B3NKIDBECX7E2XA72HE-cr-360.jpg 360w,
                                                  https://listings-prod.tcimg.net/listings/466388/80/41/4W5KHNRL5RZ504180/VIYWP77B3NKIDBECX7E2XA72HE-cr-540.jpg 540w
                                                " style="background-image: none">
                                                                    </div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown">
                                                                        <button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false" tabindex="-1">
                                                                            <p class="sr-only">Menu</p>
                                                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1">
                                                                        <span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item="" tabindex="-1">
                                                                    <svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline">
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">
                                                                            New 2024 Acura
                                                                        </div>
                                                                        <div class="w-full grid grid-cols-[1fr_auto] gap-1" data-test="vehicleCardTrim">
                                                                            <div class="truncate">
                                                                                ZDX A-Spec Package AWD
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">
                                                                                            $70,450
                                                                                        </div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">
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
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Irvine, CA</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge">
                                                                        <svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-1363" aria-hidden="false" style="width: 14px; height: 14px">
                                                                            <title id="icon-1363">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" href="/new-cars-for-sale/listing/4W5KHNRL5RZ504180/2024-acura-zdx/?position=5&amp;sourceType=ranking&amp;sponsored=true" tabindex="-1"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="px-2" data-test="" style="
                                    scroll-snap-align: start;
                                    flex-shrink: 0;
                                    width: 33.3333%;
                                  " inert="" aria-hidden="true">
                                                <div class="pb-2">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" data-test="newListing" data-test-item="4W5KHNRL0RZ504359" data-test-dealerid="466388">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="
                                                height: auto;
                                                padding-bottom: 56.25%;
                                                width: 100%;
                                              ">
                                                                        <img sizes="300px" src="https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="
                                                  https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-60.jpg     60w,
                                                  https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-120.jpg   120w,
                                                  https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-180.jpg   180w,
                                                  https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-360.jpg   360w,
                                                  https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-540.jpg   540w,
                                                  https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-860.jpg   860w,
                                                  https://listings-prod.tcimg.net/listings/466388/59/43/4W5KHNRL0RZ504359/H7JP6US4DL5SSH5MTUDQTMCEHU-og-1400.jpg 1400w
                                                " style="background-image: none">
                                                                    </div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown">
                                                                        <button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false" tabindex="-1">
                                                                            <p class="sr-only">Menu</p>
                                                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1">
                                                                        <span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item="" tabindex="-1">
                                                                    <svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline">
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">
                                                                            New 2024 Acura
                                                                        </div>
                                                                        <div class="w-full grid grid-cols-[1fr_auto] gap-1" data-test="vehicleCardTrim">
                                                                            <div class="truncate">
                                                                                ZDX A-Spec Package AWD
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">
                                                                                            $70,450
                                                                                        </div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">
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
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Irvine, CA</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge">
                                                                        <svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-1371" aria-hidden="false" style="width: 14px; height: 14px">
                                                                            <title id="icon-1371">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" href="/new-cars-for-sale/listing/4W5KHNRL0RZ504359/2024-acura-zdx/?position=6&amp;sourceType=ranking&amp;sponsored=true" tabindex="-1"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="px-2" data-test="" style="
                                    scroll-snap-align: start;
                                    flex-shrink: 0;
                                    width: 33.3333%;
                                  " inert="" aria-hidden="true">
                                                <div class="pb-2">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" data-test="newListing" data-test-item="4W5KHNRL2RZ500569" data-test-dealerid="466388">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="
                                                height: auto;
                                                padding-bottom: 56.25%;
                                                width: 100%;
                                              ">
                                                                        <img sizes="300px" src="https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="
                                                  https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-60.jpg     60w,
                                                  https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-120.jpg   120w,
                                                  https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-180.jpg   180w,
                                                  https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-360.jpg   360w,
                                                  https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-540.jpg   540w,
                                                  https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-860.jpg   860w,
                                                  https://listings-prod.tcimg.net/listings/466388/69/05/4W5KHNRL2RZ500569/BPIRWY4XXTZPRQGLIZOTJN67WE-og-1400.jpg 1400w
                                                " style="background-image: none">
                                                                    </div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown">
                                                                        <button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false" tabindex="-1">
                                                                            <p class="sr-only">Menu</p>
                                                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1">
                                                                        <span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item="" tabindex="-1">
                                                                    <svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline">
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">
                                                                            New 2024 Acura
                                                                        </div>
                                                                        <div class="w-full grid grid-cols-[1fr_auto] gap-1" data-test="vehicleCardTrim">
                                                                            <div class="truncate">
                                                                                ZDX A-Spec Package AWD
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">
                                                                                            $70,450
                                                                                        </div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">
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
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Irvine, CA</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge">
                                                                        <svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-1379" aria-hidden="false" style="width: 14px; height: 14px">
                                                                            <title id="icon-1379">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Acura ZDX, A-Spec Package AWD" href="/new-cars-for-sale/listing/4W5KHNRL2RZ500569/2024-acura-zdx/?position=7&amp;sourceType=ranking&amp;sponsored=true" tabindex="-1"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="carousel-arrow carousel-arrow-outside carousel-arrow-light carousel-arrow-small carousel-arrow-slide-spacing-2 carousel-arrow-next carousel-arrow-next" data-test="carouselArrowNext" aria-label="Next">
                                        <svg width="16px" height="16px" viewBox="0 0 16 16" class="carousel-arrow-icon">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline stroke-width="1.5" fill-rule="nonzero" points="5 2 12 8.36363636 5 14.7272727"></polyline>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative flex select-none items-center justify-center pt-2-5">
                                    <div class="mx-auto inline-flex items-center justify-center overflow-hidden relative h-[4px]">
                                        <ul data-test="carouselDots" class="m-0 inline-flex items-center justify-center gap-1 transition-transform duration-300 h-[4px]" style="transform: translateX(0px)">
                                            <li class="transition-[property:background,opacity] block shrink-0 rounded-full duration-[400ms] h-[4px] w-[10px] bg-black" data-test="carouselDotsDot"></li>
                                            <li class="transition-[property:background,opacity] block shrink-0 rounded-full duration-[400ms] h-[4px] w-[10px] bg-[color:var(--gray-200)]" data-test="carouselDotsDot"></li>
                                            <li class="transition-[property:background,opacity] block shrink-0 rounded-full duration-[400ms] h-[4px] w-[10px] bg-[color:var(--gray-200)]" data-test="carouselDotsDot"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <a class="mt-3 block text-center"
                    href="/new-cars-for-sale/listings/price-below-20000/location-90401/?galleryImagesCount=1">See All</a>
            </div>
        </section>
        <section class="pt-4 md:pt-6">
            <div class="container">
                <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case mb-2-5 text-center md:mb-3 lg:mb-5">Learn
                    More About Car Buying</h2>
                <div class="row">
                    <div class="lg:pr-2 col-lg-6"><a href="https://www.truecar.com/blog/how-much-car-can-i-afford/"
                            target="_blank"
                            class="block h-full relative rounded overflow-hidden no-underline max-lg:h-[334px]"
                            aria-label="How Much Car Can I Afford?">
                            <div class="picture-container picture-container-block absolute rounded"
                                style="padding-bottom: 119.048%;"><img class="picture-block rounded" sizes="625px"
                                    src="https://truecarblog.imgix.net/wp-content/uploads/2020/02/CG_2927-2.-Money-Matters-1.png?auto=format&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.3&amp;fp-y=0.3&amp;h=666.6666666666666&amp;w=560"
                                    srcset="https://truecarblog.imgix.net/wp-content/uploads/2020/02/CG_2927-2.-Money-Matters-1.png?auto=format&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.3&amp;fp-y=0.3&amp;h=666.6666666666666&amp;w=560 560w, https://truecarblog.imgix.net/wp-content/uploads/2020/02/CG_2927-2.-Money-Matters-1.png?auto=format&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.3&amp;fp-y=0.3&amp;h=1428.5714285714287&amp;w=1200 1200w"
                                    alt="" role="presentation"></div>
                            <div
                                class="flex flex-col w-full h-full justify-end text-white relative px-3 md:px-4 py-4 lg:py-5 rounded bg-[linear-gradient(0deg,_rgba(52,_49,_52,_1)_0%,_rgba(52,_49,_52,_0)_50%)]">
                                <div class="mb-2 uppercase">Car Buying</div>
                                <div class="heading-4 normal-case heading-md-3 md:normal-case mb-2 md:mb-2-5">How Much Car
                                    Can I&nbsp;Afford?</div>
                                <div class="line-clamp-2">Ready to save big on your car purchase? Our expert guide covers
                                    everything from how to set a budget to getting the best financing.</div>
                            </div>
                        </a></div>
                    <div class="mt-3 md:mt-4 lg:mt-0 lg:pl-2 col-lg-6"><a
                            href="https://www.truecar.com/blog/how-buying-a-car-affects-your-credit-score/"
                            target="_blank" class="block pb-4 lg:pb-3 overflow-hidden no-underline"
                            aria-label="How Buying a Car Affects Your Credit Score">
                            <div class="row">
                                <div class="mb-2 md:mb-0 md:pr-2 col-md-4 col-lg-6">
                                    <div class="picture-container picture-container-block h-full rounded"
                                        style="padding-bottom: 46.875%;"><img class="picture-block rounded h-full"
                                            sizes="302.5px"
                                            src="https://truecarblog.imgix.net/wp-content/uploads/2024/01/Debit-Card.png?auto=format&amp;fit=crop&amp;h=168.75&amp;w=360"
                                            srcset="https://truecarblog.imgix.net/wp-content/uploads/2024/01/Debit-Card.png?auto=format&amp;fit=crop&amp;h=168.75&amp;w=360 360w, https://truecarblog.imgix.net/wp-content/uploads/2024/01/Debit-Card.png?auto=format&amp;fit=crop&amp;h=262.5&amp;w=560 560w"
                                            role="presentation" alt=""></div>
                                </div>
                                <div class="md:pl-2 col-md-8 col-lg-6">
                                    <div class="mb-2 font-bold uppercase text-muted lg:mb-1">Car Buying</div>
                                    <div class="heading-4 normal-case mb-2 md:mb-2-5 lg:mb-1">How Buying a Car Affects
                                        Your Credit&nbsp;Score</div>
                                    <div class="line-clamp-2">Your credit score impacts your ability to finance a car –
                                        but does buying a car impact your credit? See how your car loan impacts your credit
                                        report in this guide.</div>
                                </div>
                            </div>
                        </a><a href="https://www.truecar.com/blog/guide-to-buying-a-new-car/" target="_blank"
                            class="block pb-4 lg:pb-3 overflow-hidden no-underline"
                            aria-label="How to Buy a New Car in Five Steps">
                            <div class="mb-3 border-t"></div>
                            <div class="row">
                                <div class="mb-2 md:mb-0 md:pr-2 col-md-4 col-lg-6">
                                    <div class="picture-container picture-container-block h-full rounded"
                                        style="padding-bottom: 46.875%;"><img class="picture-block rounded h-full"
                                            sizes="302.5px"
                                            src="https://truecarblog.imgix.net/wp-content/uploads/2022/07/CG-4325-Blog-Header.png?auto=format&amp;fit=crop&amp;h=168.75&amp;w=360"
                                            srcset="https://truecarblog.imgix.net/wp-content/uploads/2022/07/CG-4325-Blog-Header.png?auto=format&amp;fit=crop&amp;h=168.75&amp;w=360 360w, https://truecarblog.imgix.net/wp-content/uploads/2022/07/CG-4325-Blog-Header.png?auto=format&amp;fit=crop&amp;h=262.5&amp;w=560 560w"
                                            role="presentation" alt=""></div>
                                </div>
                                <div class="md:pl-2 col-md-8 col-lg-6">
                                    <div class="mb-2 font-bold uppercase text-muted lg:mb-1">Car Buying</div>
                                    <div class="heading-4 normal-case mb-2 md:mb-2-5 lg:mb-1">How to Buy a New Car in
                                        Five&nbsp;Steps</div>
                                    <div class="line-clamp-2">There’s a lot more to buying a car than deciding on the
                                        color, style, make, model, and price – here are 5 steps to buying a new car.</div>
                                </div>
                            </div>
                        </a><a href="https://www.truecar.com/blog/understanding-total-cost-of-ownership/"
                            target="_blank" class="block pb-4 lg:pb-3 overflow-hidden no-underline"
                            aria-label="Understanding Total Cost of Car Ownership">
                            <div class="mb-3 border-t"></div>
                            <div class="row">
                                <div class="mb-2 md:mb-0 md:pr-2 col-md-4 col-lg-6">
                                    <div class="picture-container picture-container-block h-full rounded"
                                        style="padding-bottom: 46.875%;"><img class="picture-block rounded h-full"
                                            sizes="302.5px"
                                            src="https://truecarblog.imgix.net/wp-content/uploads/2024/01/BLOG-HEADER-Total-Cost-of-Ownership.png?auto=format&amp;fit=crop&amp;h=168.75&amp;w=360"
                                            srcset="https://truecarblog.imgix.net/wp-content/uploads/2024/01/BLOG-HEADER-Total-Cost-of-Ownership.png?auto=format&amp;fit=crop&amp;h=168.75&amp;w=360 360w, https://truecarblog.imgix.net/wp-content/uploads/2024/01/BLOG-HEADER-Total-Cost-of-Ownership.png?auto=format&amp;fit=crop&amp;h=262.5&amp;w=560 560w"
                                            role="presentation" alt=""></div>
                                </div>
                                <div class="md:pl-2 col-md-8 col-lg-6">
                                    <div class="mb-2 font-bold uppercase text-muted lg:mb-1">Car Buying</div>
                                    <div class="heading-4 normal-case mb-2 md:mb-2-5 lg:mb-1">Understanding Total Cost of
                                        Car&nbsp;Ownership</div>
                                    <div class="line-clamp-2">Understand and calculate your car ownership costs beyond the
                                        monthly payment.</div>
                                </div>
                            </div>
                        </a><a href="https://www.truecar.com/blog/should-you-finance-through-a-dealer-or-a-bank/"
                            target="_blank" class="block pb-4 lg:pb-0 overflow-hidden no-underline"
                            aria-label="Pros and Cons of Financing Through a Dealer vs. Bank">
                            <div class="mb-3 border-t"></div>
                            <div class="row">
                                <div class="mb-2 md:mb-0 md:pr-2 col-md-4 col-lg-6">
                                    <div class="picture-container picture-container-block h-full rounded"
                                        style="padding-bottom: 46.875%;"><img class="picture-block rounded h-full"
                                            sizes="302.5px"
                                            src="https://truecarblog.imgix.net/wp-content/uploads/2009/09/BLOG-HEADER-ProsCons-Financing-Dealer-v-Bank.png?auto=format&amp;fit=crop&amp;h=168.75&amp;w=360"
                                            srcset="https://truecarblog.imgix.net/wp-content/uploads/2009/09/BLOG-HEADER-ProsCons-Financing-Dealer-v-Bank.png?auto=format&amp;fit=crop&amp;h=168.75&amp;w=360 360w, https://truecarblog.imgix.net/wp-content/uploads/2009/09/BLOG-HEADER-ProsCons-Financing-Dealer-v-Bank.png?auto=format&amp;fit=crop&amp;h=262.5&amp;w=560 560w"
                                            role="presentation" alt=""></div>
                                </div>
                                <div class="md:pl-2 col-md-8 col-lg-6">
                                    <div class="mb-2 font-bold uppercase text-muted lg:mb-1">Car Buying</div>
                                    <div class="heading-4 normal-case mb-2 md:mb-2-5 lg:mb-1">Pros and Cons of Financing
                                        Through a Dealer vs.&nbsp;Bank</div>
                                    <div class="line-clamp-2">Which is the better decision for you? Read on to find out.
                                    </div>
                                </div>
                            </div>
                        </a></div>
                </div>
                <div class="mb-3 border-t md:mb-5 lg:mt-4"></div>
                <div class="mx-auto text-center"><a data-ignore-contrast="false" data-loading="false"
                        href="https://www.truecar.com/blog/tag/loan/" target="_blank" rel="noopener"
                        class="btn btn-secondary btn-md"><span class="btn-inner">View More Blog Articles</span></a>
                </div>
            </div>
        </section>
        <section class="pt-6 pb-5 lg:pt-7">
            <div class="container container-max-width-1">
                <div class="last-of-type:mb-0 last-of-type:pb-0 pb-6">
                    <div class="see-more space-y-2" data-ignore-contrast="true">
                        <div data-test="seeMoreBody" style="overflow: hidden; max-height: 30000em;">
                            <div>
                                <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case mb-3">What is an
                                    Auto&nbsp;Loan?</h2>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">An auto loan is a sum of money that
                                    you borrow in order to buy a car. The person or organization lending you the money is
                                    known as the <strong>lender</strong>, and the person or organization who borrows the
                                    money is the <strong>borrower</strong>. The borrower agrees to pay back the full amount
                                    they borrowed by a certain date in the future. They also pay interest, which is a
                                    percentage of the loan amount. They usually pay both these amounts via monthly payments.
                                </p>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">Auto loans are very common: this year,
                                    according to Consumer Reports, Americans held more than $1.4 trillion in auto loans.
                                    This is because most people can't afford to pay full price for a vehicle right away.
                                    It’s easier to afford smaller monthly payments spread out over a longer period of time.
                                </p>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">You can get an auto loan from a bank
                                    or credit union. They will look at your credit and other financial information, and
                                    decide how much money they are willing to lend you and what interest rate they’ll offer.
                                    You can also get preapproved for a loan, which doesn’t obligate you to borrow money from
                                    the bank or credit union that preapproves you. Preapproval lets you approach several
                                    different lenders and compare the loan terms and interest rates offered, so you can
                                    choose the best one. It's important to understand that the finance company technically
                                    owns the car until you pay off the loan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last-of-type:mb-0 last-of-type:pb-0 pb-6">
                    <div class="see-more space-y-2" data-ignore-contrast="true">
                        <div data-test="seeMoreBody" style="overflow: hidden; max-height: 30000em;">
                            <div>
                                <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case mb-3">How to Calculate an
                                    Auto&nbsp;Loan</h2>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">To calculate an auto loan, you need to
                                    determine several factors:</p>
                                <ul class="list-disc mb-3 space-y-1 pl-4">
                                    <li><strong>The price of the car you want to buy</strong> — the price given to you by
                                        the dealership.</li>
                                    <li><strong>Your down payment</strong> — a sum of money you pay upfront toward the value
                                        of your car.</li>
                                    <li><strong>The value of your trade-in (if you have one)</strong> — the value of your
                                        existing vehicle, which you’ll usually trade in at the dealership where you buy your
                                        new car.</li>
                                    <li><strong>The length of time you want your loan to last (in months)</strong> — this
                                        amount of time can be anywhere from 12 to 84 months.</li>
                                    <li><strong>Annual percentage rate (APR)</strong> — your interest rate, which will
                                        determine how much extra you’ll pay a month on top of your monthly payment.</li>
                                    <li><strong>Sales tax</strong> — the percentage you pay to the state when purchasing a
                                        used car. In California, for example, you’ll pay 7.25% of your car’s total purchase
                                        price. You also may need to pay local tax.</li>
                                </ul>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">TrueCar’s <button type="button"
                                        class="link-button">loan calculator</button> can help you determine which
                                    combination of these factors will make the most sense for you as you decide on an auto
                                    loan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last-of-type:mb-0 last-of-type:pb-0 pb-6">
                    <div class="see-more space-y-2" data-ignore-contrast="true">
                        <div data-test="seeMoreBody" style="overflow: hidden; max-height: 30000em;">
                            <div>
                                <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case mb-3">Budget &amp;
                                    Car&nbsp;Price</h2>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">How do you figure out how much you can
                                    afford to spend on a car? While everyone has a different financial situation, auto
                                    industry experts and <strong>personal finance advisors generally agree that you should
                                        try to keep your car payment between 10% and 15% of your monthly take-home
                                        pay</strong>. You should also consider how much you may need to spend on gas (if
                                    you’re buying a car that’s powered by gasoline), insurance, and car repairs. As a
                                    reference point, add up your car-related expenses for the past month. In terms of
                                    repairs, AAA reports that the average new car owner pays more than a thousand dollars a
                                    year in maintenance costs — so factor that number in as well.</p>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">Look at the total price of the car
                                    you’re buying, and don’t forget to include interest. Then figure out how much you can
                                    afford in monthly payments. Once you’ve determined how much car you can afford and have
                                    decided which car you want to purchase on loan, enter its price in the Car Price field
                                    of the <button type="button" class="link-button">loan calculator</button>.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last-of-type:mb-0 last-of-type:pb-0 pb-6">
                    <div class="see-more space-y-2" data-ignore-contrast="true">
                        <div data-test="seeMoreBody" style="overflow: hidden; max-height: 30000em;">
                            <div>
                                <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case mb-3">Down Payment</h2>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">A down payment is an amount you pay
                                    upfront toward the total cost of the car you’re buying. It can include cash, the value
                                    of a vehicle trade-in, or a mixture of both. Your down payment helps lower the overall
                                    amount you need to take out as a loan, which can lower your monthly payments. If you’re
                                    buying a new car, <strong>experts advise that your down payment should be at least 20%
                                        of the car’s total purchase price. If you’re buying used, you can put down
                                        10%</strong>.</p>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">If you can make a 20% down payment, it
                                    may be a good idea to do so. In the first year after you buy a new car, its value
                                    usually goes down by about 20%. If you’ve made a down payment lower than 20%, you might
                                    end up owing more on your loan than your car is worth. That means that if you sell your
                                    car, you may need to pay the difference between the sale price and your loan balance.
                                    That’s not a great position to be in. There are also other benefits to making a larger
                                    down payment: some lenders may give you a better interest rate if you pay more up front.
                                </p>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">Enter different down payment amounts
                                    in the <button type="button" class="link-button">loan calculator</button> to see
                                    how they affect your monthly payments and other loan terms. Remember, the more you can
                                    pay upfront, the less expensive your monthly payment will be.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last-of-type:mb-0 last-of-type:pb-0 pb-6">
                    <div class="see-more space-y-2" data-ignore-contrast="true">
                        <div data-test="seeMoreBody" style="overflow: hidden; max-height: 30000em;">
                            <div>
                                <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case mb-3">Trade-In Value</h2>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">Many dealers will let you sell them
                                    your existing car in order to help pay for your new one. They will subtract the value of
                                    your old car from the sticker price of your new one. This is known as a trade-in. You
                                    can use this trade-in money as your down payment, or add it to your existing down
                                    payment to lower the amount you need to borrow. However, if you owe more than your car
                                    is worth, trading in your car may actually increase the amount of your loan and monthly
                                    payments.</p>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">For example, let’s say you own your
                                    trade-in outright, and it’s worth $5,000. The dealership purchases your trade-in and
                                    puts that amount toward your new car. Your loan amount is reduced by $5,000.</p>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">Now, let’s look at a different
                                    situation: you have a $15,000 trade-in, but you owe $20,000 on it. This is known as
                                    negative equity. Now, when the dealer buys your trade-in, they add $5,000 to the price
                                    of your car. Your loan now has to cover the price of your new car, plus the price of
                                    your old one — so both your total loan amount and your monthly payment will go up. To
                                    avoid this situation, it’s best to put as much money down as you can when you buy your
                                    new car.</p>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">To find out how much to enter in the
                                    trade-in section of the <button type="button" class="link-button">loan
                                        calculator</button>, check your trade-in value and subtract the amount you owe on
                                    your car loan. Then enter that amount in the trade-in value box.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last-of-type:mb-0 last-of-type:pb-0 pb-3 lg:pb-4">
                    <div class="see-more space-y-2" data-ignore-contrast="true">
                        <div data-test="seeMoreBody" style="overflow: hidden; max-height: 30000em;">
                            <div>
                                <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case mb-3">Sales Tax</h2>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">Remember to account for sales tax when
                                    thinking about the cost of your vehicle and the loan amount you’ll need. Car sales tax
                                    is set by your state and your local area, and can vary widely. Some states, like
                                    Delaware, have no sales tax. Some have high sales tax: Nevada’s is 8.25%. To find out
                                    how much sales tax you’ll be paying on your new car, multiply the purchase amount by the
                                    percentage amount of car sales tax in your state. You’ll also need to find out what your
                                    local sales tax is, and then multiply it by your purchase amount to see how much you’ll
                                    pay. These two amounts will be added to your loan amount. To add sales tax to your loan,
                                    look up the car sales tax rate for your state, and enter it into the loan calculator.
                                </p>
                                <p>To add sales tax to your loan, use our sales tax finder and enter it into the loan
                                    calculator.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-6">
                    <h3 class="heading-3 normal-case mb-3 lg:mb-2-5">Get Your Sales&nbsp;Tax</h3>
                    <form novalidate="" class="mb-3 flex">
                        <div class="field-container-challenger fs-mask text-left md:w-[270px]">
                            <div class="field-wrapper-challenger field-label-padding-challenger">
                                <div class="field-content-row">
                                    <div class="field-input-label-challenger"><input id="25"
                                            autocomplete="postal-code" class="form-control-challenger"
                                            aria-label="ZIP Code" placeholder=" " inputmode="numeric"
                                            name="postalCode" maxlength="5" data-test="zipCodeModal"
                                            value="">
                                        <div class="field-label-text-challenger text-xs" data-test="fieldLabel"><label
                                                for="25" data-ignore-contrast="true">ZIP Code</label></div>
                                    </div>
                                </div>
                                <div class="field-message-challenger">
                                    <div class="field-message-text-challenger"></div>
                                </div>
                            </div>
                        </div><button type="submit" data-ignore-contrast="true" data-loading="false"
                            data-test="confirmButton" class="ml-3 w-[50%] md:w-[178px] btn btn-primary btn-lg"><span
                                class="btn-inner">Get Sales Tax</span></button>
                    </form>
                    <p class="mb-3 font-bold lg:mb-2-5">Estimated Sales Tax: 0.00%</p><button type="button"
                        class="link-button">Add results to calculator</button>
                </div>
                <div class="last-of-type:mb-0 last-of-type:pb-0 pb-6">
                    <div class="see-more space-y-2" data-ignore-contrast="true">
                        <div data-test="seeMoreBody" style="overflow: hidden; max-height: 30000em;">
                            <div>
                                <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case mb-3">Interest Rate</h2>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0"><strong>Interest rate is a percentage
                                        that determines how much you pay to borrow the money for your auto loan</strong>.
                                    You must repay both the money you borrow and the interest in monthly payments over the
                                    term of your loan. Your interest rate can vary depending on several factors:</p>
                                <ul class="list-disc mb-3 space-y-1 pl-4">
                                    <li><strong>Today’s interest rates</strong> — if federal interest rates are low, you
                                        will pay less interest on your loan. If they are high, you’ll pay more.</li>
                                    <li><strong>Loan type</strong> — New car loans will have lower interest rates than used
                                        car loans, because used cars have a lower resale value.</li>
                                    <li><strong>Loan term</strong> — Shorter loan terms tend to have lower interest rates,
                                        while longer-term loans will have higher interest rates.</li>
                                    <li><strong>Debt-to-income ratio (DTI)</strong> — This is the percentage of your gross
                                        monthly income that goes to paying off debts. The higher your DTI, the higher your
                                        interest rate will be and vice versa.</li>
                                    <li><strong>Credit score</strong> — If you have good credit (in the range of 660-850),
                                        lenders will usually offer you a lower interest rate because you are a lower-risk
                                        loan. If your credit score is lower (300-600), you’ll pay higher interest rates. You
                                        could even end up paying thousands of dollars more in interest than someone with a
                                        better credit score. If you have a lower credit score, you might want to spend some
                                        time improving it before you apply for a car loan.</li>
                                </ul>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">The amount of interest you’ll pay each
                                    month will depend on your balance at that time. At the beginning of your loan, when you
                                    owe more, you will pay more interest. As you pay down your loan, your interest payments
                                    will get smaller.</p>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">Before you start looking for a lender,
                                    research the average interest rates that you can expect to get, based on your credit
                                    score. This way, you’ll know what to expect from lenders. Then, shop around to find the
                                    best interest rate you can get. Once you know the general interest rate you can expect
                                    to get, plug it into the loan calculator to estimate the amount of interest you will pay
                                    over the course of your car loan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last-of-type:mb-0 last-of-type:pb-0 pb-6">
                    <div class="see-more space-y-2" data-ignore-contrast="true">
                        <div data-test="seeMoreBody" style="overflow: hidden; max-height: 30000em;">
                            <div>
                                <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case mb-3">Loan Term</h2>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0"><strong>A loan term is the amount of
                                        time the lender gives you to pay off your loan</strong>. It can be anywhere from 12
                                    to 96 months (eight years). Monthly payments become lower when stretching them out over
                                    a more extended period. Initially, that might seem like it’s more cash in your pocket
                                    and a good thing. Not so fast. Remember: The longer the term, the higher the interest
                                    rate, and the more you end up paying over the course of the loan.</p>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">Another long-term issue is if you
                                    never build any measurable equity in your car. That is, with those loans spanning six,
                                    seven, or more years, your vehicle won’t be worth more than you owe until close to the
                                    end of the loan. The typical car loan length is 6 years. But with a 7- or 8-year loan,
                                    not only will you still be making payments at the loan’s end, but you might also be
                                    paying to make repairs to the car.</p>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">At the same time, the value of the car
                                    steadily decreases over the course of the loan, meaning that the car will never be worth
                                    the amount of the original loan. For example, say a borrower takes out a $10,000 loan to
                                    pay for a car. At the time of purchase, the car is worth about $10,000 (minus fees and
                                    taxes). Four years later, when the borrower has paid off the loan, the car may be worth
                                    only $2,000. If the borrower has neglected to take good care of the car, it might be
                                    worth substantially less. The process of a car losing its value over time is known as
                                    depreciation. Be sure to consider your car’s depreciation when deciding a term loan.</p>
                                <p class="mb-3 last-of-type:mb-0 last-of-type:pb-0">In the end, our advice is simple:
                                    <strong>When you’re buying a car and considering a car loan, opt for the shortest term
                                        and the best possible interest rate</strong>. This option might not be the most
                                    appealing idea in the short term, considering it will increase your monthly payments and
                                    it may limit the type of car you can afford. But in the long term, you’ll thank yourself
                                    when you’ve saved thousands of dollars on interest and paid off your car years before
                                    you thought you would. To see how different term lengths affect your monthly payments,
                                    toggle between the different options in the loan calculator.</p><button type="button"
                                    class="link-button mt-3 block font-bold">Back to Calculator</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light">
            <div class="container container-max-width-1 pb-3 pt-4 md:pt-5">
                <h2 class="heading-3 normal-case pb-3 text-left">Car Loan FAQs</h2>
                <div class="row mb-3 lg:mb-4">
                    <div class="col-12">
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">Is buying a car better than&nbsp;leasing?</h3>
                                </div><span class="ml-3 whitespace-nowrap">
                                    <div style="position: static;"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default my-3 mr-3" aria-hidden="true"
                                            data-test-item="down" style="width: 21px; height: 21px;">
                                            <use href="#keyboard_arrow_down"></use>
                                        </svg></div>
                                </span>
                            </button>
                            <div class="expandable-list-item-collapse border-t collapse">
                                <div class="px-3 py-3 expandable-list-item-shadow">
                                    <div class="whitespace-pre-line">Whether or not buying or leasing a car makes more
                                        sense depends on what the buyer wants. If you plan on keeping the car for a long
                                        time (over four years), buying almost always makes more sense. However, buying a car
                                        and selling it within a short period, such as within 24 months, would likely lead to
                                        a large depreciation loss.</div>
                                </div>
                            </div>
                        </div>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">How much do I need to put down on a car&nbsp;loan?
                                    </h3>
                                </div><span class="ml-3 whitespace-nowrap">
                                    <div style="position: static;"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default my-3 mr-3" aria-hidden="true"
                                            data-test-item="down" style="width: 21px; height: 21px;">
                                            <use href="#keyboard_arrow_down"></use>
                                        </svg></div>
                                </span>
                            </button>
                            <div class="expandable-list-item-collapse border-t collapse">
                                <div class="px-3 py-3 expandable-list-item-shadow">
                                    <div class="whitespace-pre-line">Often, you won’t need to put any money down on a car
                                        to qualify for a loan. But the more money you put down upfront, the less in interest
                                        you will pay over the life of the loan. Generally speaking, the typical
                                        recommendation is to put down 20% of the cost of the car.</div>
                                </div>
                            </div>
                        </div>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">What is a good interest rate on a car&nbsp;loan?
                                    </h3>
                                </div><span class="ml-3 whitespace-nowrap">
                                    <div style="position: static;"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default my-3 mr-3" aria-hidden="true"
                                            data-test-item="down" style="width: 21px; height: 21px;">
                                            <use href="#keyboard_arrow_down"></use>
                                        </svg></div>
                                </span>
                            </button>
                            <div class="expandable-list-item-collapse border-t collapse">
                                <div class="px-3 py-3 expandable-list-item-shadow">
                                    <div class="whitespace-pre-line">The average new car loan interest rate is around 5%,
                                        with used car buyers seeing an average of 8%. A good rate would be an APR lower than
                                        these two averages. Keep in mind that the length of a loan also increases the
                                        interest paid, so you want to ensure that the lower interest rate has the same term
                                        length.</div>
                                </div>
                            </div>
                        </div>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">What credit score do I need to get a car&nbsp;loan?
                                    </h3>
                                </div><span class="ml-3 whitespace-nowrap">
                                    <div style="position: static;"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default my-3 mr-3" aria-hidden="true"
                                            data-test-item="down" style="width: 21px; height: 21px;">
                                            <use href="#keyboard_arrow_down"></use>
                                        </svg></div>
                                </span>
                            </button>
                            <div class="expandable-list-item-collapse border-t collapse">
                                <div class="px-3 py-3 expandable-list-item-shadow">
                                    <div class="whitespace-pre-line">Most lenders are looking for an average score of 660
                                        or higher to qualify you for a car loan. The credit bureau used can vary from lender
                                        to lender. Some used car dealers may be able to get you a loan for less, but often
                                        it comes with a price of a very high-interest rate above 10%.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
