@extends('site.layouts.app')
@section('content')
    <main id="mainContent" style="margin-top: 60px;margin-bottom:-40px"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div class="bg-[image:var(--image-url-sm)] bg-cover bg-no-repeat text-center md:bg-[image:var(--image-url-md)] lg:bg-[image:var(--image-url-lg)] xl:bg-[image:var(--image-url-xl)] bg-center relative h-full"
            style="--image-url-sm: url({{asset('assets/_next/static/images/hero-image-sm-902903a23ba13e4ada9abbe574051fd4.png')}}); --image-url-md: url({{asset('assets/_next/static/images/hero-image-md-a8f647aa5fffe65dff1b2aefb68ed18e.png')}}); --image-url-lg: url({{asset('assets/_next/static/images/hero-image-lg-a9d3940f6b5321d03da0845da2497fff.png')}}); --image-url-xl: url({{asset('assets/_next/static/images/hero-image-xl-a81613062e3c32e0f2f8b05405f16cab.png')}});">
            <div class="absolute bottom-0 left-0 right-0 top-0 flex h-full w-full bg-[#0000004d]"></div>
            <div
                class="absolute bottom-0 left-0 right-0 top-0 flex h-full w-full bg-gradient-to-b from-transparent to-[#00000080]">
            </div>
            <div class="container grid-cols-12 md:grid">
                <div
                    class="col-span-12 flex flex-col items-center pt-4 md:pt-5 lg:col-span-6 lg:items-start lg:py-7 lg:text-left">
                    <h1 class="heading-2 normal-case heading-md-1 md:normal-case text-white lg:pt-6 lg:text-[60px]"><span
                            class="block md:inline">Buying power</span> calculator</h1>
                    <p class="max-w-[304px] pt-3 pb-2 font-normal text-white md:py-4">Save time and narrow down cars that
                        fit your desired monthly payment</p>
                </div>
                <div
                    class="hidden min-h-[864px] md:col-span-8 md:col-start-3 md:-mx-4 md:block lg:col-span-6 lg:mx-0 lg:my-5">
                    <div class="overflow-hidden bg-white md:rounded">
                        <div class="relative"></div>
                        <div class="grow">
                            <div class="pt-5 md:px-7 lg:px-6 px-3">
                                <div class="heading-3 normal-case pb-4 pt-1 text-center">What's your current&nbsp;status?
                                </div>
                                <form novalidate="" class="text-left" id="buyingPowerCalculatorInputs">
                                    <div class="heading-5 normal-case pb-3">1. Looking for</div>
                                    <fieldset class="field-container-challenger flex pb-5" aria-invalid="false">
                                        <legend class="sr-only">1. Looking for</legend><label
                                            class="form-radio-control custom-control w-full"><input
                                                class="form-radio-control-input custom-control-input custom-control-input-radio"
                                                type="radio" name="condition" value="NEW">
                                            <div class="indicator-wrapper">
                                                <div class="custom-control-indicator custom-control-indicator-radio mr-2"
                                                    data-test="radioIndicator"></div>
                                            </div><span class="custom-control-description"><span class="">New car
                                                </span></span>
                                        </label><label class="form-radio-control custom-control w-full"><input
                                                class="form-radio-control-input custom-control-input custom-control-input-radio"
                                                type="radio" name="condition" value="USED">
                                            <div class="indicator-wrapper">
                                                <div class="custom-control-indicator custom-control-indicator-radio mr-2"
                                                    data-test="radioIndicator"></div>
                                            </div><span class="custom-control-description"><span class="">Used car
                                                </span></span>
                                        </label>
                                    </fieldset>
                                    <div>
                                        <div class="flex items-center justify-between pb-2">
                                            <div class="heading-5 normal-case" id="buyingPowerDownPayment">2. Down payment
                                            </div>
                                            <div class="field-container-challenger w-[125px]">
                                                <div class="field-wrapper-challenger">
                                                    <div class="field-content-row">
                                                        <div class="field-input-label-challenger"><input id="66"
                                                                class="form-control-challenger" aria-label="Down payment"
                                                                placeholder="undefined"
                                                                aria-labelledby="buyingPowerDownPayment" type="tel"
                                                                maxlength="10" value="$3,000"></div>
                                                    </div>
                                                    <div class="field-message-challenger">
                                                        <div class="field-message-text-challenger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field-container-challenger mb-2-5">
                                            <div class="field-wrapper-challenger">
                                                <div class="field-input-label-challenger">
                                                    <div data-test="rangeSlider" class="flex flex-wrap">
                                                        <div
                                                            class="overflow:hidden relative mr-[-12px] flex h-[30px] w-[calc(100%_+_12px)] translate-x-[-6px]">
                                                            <div class="pointer-events-none absolute top-[50%] left-[6px] h-[2px] w-[calc(100%_-_12px)] translate-y-[-50%] rounded-full bg-[color:var(--gray-300)]"
                                                                role="presentation">
                                                                <div class="absolute top-0 h-full rounded-full transition-[background] bg-blue-900"
                                                                    style="left: 0%; right: 85%;"></div>
                                                            </div>
                                                            <div class="pointer-events-none relative w-full"
                                                                role="presentation">
                                                                <div class="relative mx-2-5 flex h-full">
                                                                    <div class="absolute top-[50%] flex h-4 w-4 translate-y-[-50%] translate-x-[-50%] items-center justify-center"
                                                                        data-test="sliderIndicatorRight" style="left: 15%;">
                                                                        <div
                                                                            class="h-[18px] w-[18px] rounded-full border-[7px] transition-[background,border,box-shadow,width,height] border-[color:var(--blue-900)] bg-blue-900">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="absolute right-0 top-0 h-full overflow-hidden"
                                                                style="width: 100%;"><input
                                                                    class="absolute top-[50%] m-0 h-full w-full translate-y-[-50%] appearance-none border-none p-0 opacity-0 [&amp;::-moz-range-thumb]:h-4 [&amp;::-moz-range-thumb]:w-4 [&amp;::-moz-range-thumb]:scale-[2] [&amp;::-moz-range-thumb]:rounded-none [&amp;::-moz-range-thumb]:border-none [&amp;::-webkit-slider-thumb]:h-4 [&amp;::-webkit-slider-thumb]:w-4 [&amp;::-webkit-slider-thumb]:scale-[2] [&amp;::-webkit-slider-thumb]:rounded-none [&amp;::-webkit-slider-thumb]:border-none [&amp;::-ms-thumb]:h-4 [&amp;::-ms-thumb]:w-4 [&amp;::-ms-thumb]:scale-[2] [&amp;::-ms-thumb]:rounded-none [&amp;::-ms-thumb]:border-none cursor-pointer right-0"
                                                                    type="range" data-test="inputRight" id="error-67"
                                                                    aria-label="2. Down payment"
                                                                    aria-labelledby="buyingPowerDownPayment"
                                                                    aria-valuemin="0" aria-valuemax="20000"
                                                                    aria-valuenow="3000" aria-valuetext="3,000"
                                                                    min="0" max="20000" step="100"
                                                                    value="3000" style="width: 100%;"></div>
                                                        </div>
                                                        <div id="error-67_minMax"
                                                            class="flex w-full items-stretch justify-between text-sm text-muted sr-only">
                                                            <span><span class="sr-only">Min: </span>0</span><span><span
                                                                    class="sr-only">Max: </span>20,000</span></div>
                                                    </div>
                                                </div>
                                                <div class="field-message-challenger">
                                                    <div class="field-message-text-challenger !px-0"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center justify-between pb-2">
                                            <div class="heading-5 normal-case" id="buyingPowerMonthlyPayment">3. Desired
                                                monthly&nbsp;payment</div>
                                            <div class="field-container-challenger">
                                                <div class="field-wrapper-challenger">
                                                    <div class="field-content-row">
                                                        <div class="field-input-label-challenger"><input id="68"
                                                                class="form-control-challenger !w-[125px] ml-auto"
                                                                aria-label="Monthly payment" placeholder="undefined"
                                                                maxlength="6" aria-labelledby="buyingPowerMonthlyPayment"
                                                                type="tel" value="$500"></div>
                                                    </div>
                                                    <div class="field-message-challenger">
                                                        <div class="field-message-text-challenger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field-container-challenger mb-2-5">
                                            <div class="field-wrapper-challenger">
                                                <div class="field-input-label-challenger">
                                                    <div data-test="rangeSlider" class="flex flex-wrap">
                                                        <div
                                                            class="overflow:hidden relative mr-[-12px] flex h-[30px] w-[calc(100%_+_12px)] translate-x-[-6px]">
                                                            <div class="pointer-events-none absolute top-[50%] left-[6px] h-[2px] w-[calc(100%_-_12px)] translate-y-[-50%] rounded-full bg-[color:var(--gray-300)]"
                                                                role="presentation">
                                                                <div class="absolute top-0 h-full rounded-full transition-[background] bg-blue-900"
                                                                    style="left: 0%; right: 83.3333%;"></div>
                                                            </div>
                                                            <div class="pointer-events-none relative w-full"
                                                                role="presentation">
                                                                <div class="relative mx-2-5 flex h-full">
                                                                    <div class="absolute top-[50%] flex h-4 w-4 translate-y-[-50%] translate-x-[-50%] items-center justify-center"
                                                                        data-test="sliderIndicatorRight"
                                                                        style="left: 16.6667%;">
                                                                        <div
                                                                            class="h-[18px] w-[18px] rounded-full border-[7px] transition-[background,border,box-shadow,width,height] border-[color:var(--blue-900)] bg-blue-900">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="absolute right-0 top-0 h-full overflow-hidden"
                                                                style="width: 100%;"><input
                                                                    class="absolute top-[50%] m-0 h-full w-full translate-y-[-50%] appearance-none border-none p-0 opacity-0 [&amp;::-moz-range-thumb]:h-4 [&amp;::-moz-range-thumb]:w-4 [&amp;::-moz-range-thumb]:scale-[2] [&amp;::-moz-range-thumb]:rounded-none [&amp;::-moz-range-thumb]:border-none [&amp;::-webkit-slider-thumb]:h-4 [&amp;::-webkit-slider-thumb]:w-4 [&amp;::-webkit-slider-thumb]:scale-[2] [&amp;::-webkit-slider-thumb]:rounded-none [&amp;::-webkit-slider-thumb]:border-none [&amp;::-ms-thumb]:h-4 [&amp;::-ms-thumb]:w-4 [&amp;::-ms-thumb]:scale-[2] [&amp;::-ms-thumb]:rounded-none [&amp;::-ms-thumb]:border-none cursor-pointer right-0"
                                                                    type="range" data-test="inputRight" id="error-69"
                                                                    aria-label="3. Desired monthly payment"
                                                                    aria-labelledby="buyingPowerMonthlyPayment"
                                                                    aria-valuemin="0" aria-valuemax="3000"
                                                                    aria-valuenow="500" aria-valuetext="500"
                                                                    min="0" max="3000" step="10"
                                                                    value="500" style="width: 100%;"></div>
                                                        </div>
                                                        <div id="error-69_minMax"
                                                            class="flex w-full items-stretch justify-between text-sm text-muted sr-only">
                                                            <span><span class="sr-only">Min: </span>0</span><span><span
                                                                    class="sr-only">Max: </span>3,000</span></div>
                                                    </div>
                                                </div>
                                                <div class="field-message-challenger">
                                                    <div class="field-message-text-challenger !px-0"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center justify-between pb-2">
                                            <div class="heading-5 normal-case" id="buyingPowerCreditScore">4. Credit score
                                            </div>
                                            <div class="field-container-challenger w-[125px]">
                                                <div class="field-wrapper-challenger">
                                                    <div class="field-content-row field-with-suffix">
                                                        <div class="field-input-label-challenger input-label-select">
                                                            <select required="" aria-label=""
                                                                class="form-select-element-challenger form-select-no-label"
                                                                aria-labelledby="buyingPowerCreditScore">
                                                                <option value="POOR">300 - 579</option>
                                                                <option value="FAIR">580 - 669</option>
                                                                <option value="GOOD">670 - 739</option>
                                                                <option value="VERY_GOOD">740 - 799</option>
                                                                <option value="EXCELLENT">800 - 850</option>
                                                            </select></div>
                                                        <div
                                                            class="field-addon-challenger field-addon-challenger-suffix field-addon-challenger-suffix-inaccessible">
                                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default"
                                                                aria-hidden="true" style="width: 24px; height: 24px;">
                                                                <use href="#arrow_drop_down"></use>
                                                            </svg></div>
                                                    </div>
                                                    <div class="field-message-challenger">
                                                        <div class="field-message-text-challenger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field-container-challenger mb-2-5">
                                            <div class="field-wrapper-challenger">
                                                <div class="field-input-label-challenger">
                                                    <div data-test="rangeSlider" class="flex flex-wrap">
                                                        <div
                                                            class="overflow:hidden relative mr-[-12px] flex h-[30px] w-[calc(100%_+_12px)] translate-x-[-6px]">
                                                            <div class="pointer-events-none absolute top-[50%] left-[6px] h-[2px] w-[calc(100%_-_12px)] translate-y-[-50%] rounded-full bg-[color:var(--gray-300)]"
                                                                role="presentation">
                                                                <div class="absolute top-0 h-full rounded-full transition-[background] bg-blue-900"
                                                                    style="left: 0%; right: 50%;"></div>
                                                            </div>
                                                            <div class="pointer-events-none relative w-full"
                                                                role="presentation">
                                                                <div class="absolute left-2 top-0 right-2 h-full">
                                                                    <div class="absolute top-[50%] h-[8px] w-[8px] translate-y-[-50%] translate-x-[-50%] rounded-full bg-blue-900 transition-[background]"
                                                                        style="left: 0%;"></div>
                                                                    <div class="absolute top-[50%] h-[8px] w-[8px] translate-y-[-50%] translate-x-[-50%] rounded-full bg-blue-900 transition-[background]"
                                                                        style="left: 25%;"></div>
                                                                    <div class="absolute top-[50%] h-[8px] w-[8px] translate-y-[-50%] translate-x-[-50%] rounded-full bg-blue-900 transition-[background]"
                                                                        style="left: 50%;"></div>
                                                                    <div class="absolute top-[50%] h-[8px] w-[8px] translate-y-[-50%] translate-x-[-50%] rounded-full bg-[color:var(--gray-300)]"
                                                                        style="left: 75%;"></div>
                                                                    <div class="absolute top-[50%] h-[8px] w-[8px] translate-y-[-50%] translate-x-[-50%] rounded-full bg-[color:var(--gray-300)]"
                                                                        style="left: 100%;"></div>
                                                                </div>
                                                                <div class="relative mx-2-5 flex h-full">
                                                                    <div class="absolute top-[50%] flex h-4 w-4 translate-y-[-50%] translate-x-[-50%] items-center justify-center"
                                                                        data-test="sliderIndicatorRight"
                                                                        style="left: 50%;">
                                                                        <div
                                                                            class="h-[18px] w-[18px] rounded-full border-[7px] transition-[background,border,box-shadow,width,height] border-[color:var(--blue-900)] bg-blue-900">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="absolute right-0 top-0 h-full overflow-hidden"
                                                                style="width: 100%;"><input
                                                                    class="absolute top-[50%] m-0 h-full w-full translate-y-[-50%] appearance-none border-none p-0 opacity-0 [&amp;::-moz-range-thumb]:h-4 [&amp;::-moz-range-thumb]:w-4 [&amp;::-moz-range-thumb]:scale-[2] [&amp;::-moz-range-thumb]:rounded-none [&amp;::-moz-range-thumb]:border-none [&amp;::-webkit-slider-thumb]:h-4 [&amp;::-webkit-slider-thumb]:w-4 [&amp;::-webkit-slider-thumb]:scale-[2] [&amp;::-webkit-slider-thumb]:rounded-none [&amp;::-webkit-slider-thumb]:border-none [&amp;::-ms-thumb]:h-4 [&amp;::-ms-thumb]:w-4 [&amp;::-ms-thumb]:scale-[2] [&amp;::-ms-thumb]:rounded-none [&amp;::-ms-thumb]:border-none cursor-pointer right-0"
                                                                    type="range" data-test="inputRight" id="error-72"
                                                                    aria-label="4. Credit score"
                                                                    aria-labelledby="buyingPowerCreditScore"
                                                                    aria-valuemin="1" aria-valuemax="5" aria-valuenow="3"
                                                                    aria-valuetext="3" min="1" max="5"
                                                                    step="1" value="3" style="width: 100%;">
                                                            </div>
                                                        </div>
                                                        <div id="error-72_minMax"
                                                            class="flex w-full items-stretch justify-between text-sm text-muted sr-only">
                                                            <span><span class="sr-only">Min: </span>1</span><span><span
                                                                    class="sr-only">Max: </span>5</span></div>
                                                    </div>
                                                </div>
                                                <div class="field-message-challenger">
                                                    <div class="field-message-text-challenger !px-0"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4 flex items-center">
                                        <div class="toggle"><input id="buyingPowerTradeIn" data-test="toggleInput"
                                                type="checkbox" class="toggle-input form-check-input"><span
                                                class="toggle-track"><span class="toggle-knob"
                                                    data-test="toggleKnob"><svg viewBox="0 0 24 24"
                                                        class="icon icon-fill-default toggle-icon" aria-hidden="true"
                                                        style="width: 12px; height: 12px;">
                                                        <use href="#check"></use>
                                                    </svg></span></span></div><label for="buyingPowerTradeIn"
                                            class="ml-2 text-sm">Include trade-in</label>
                                    </div>
                                    <div data-test="buyingPowerCalculatorInputsTradeInValue" class="hidden">
                                        <div class="flex items-center justify-between pb-2">
                                            <div class="heading-5 normal-case" id="buyingPowerTradeInValue">5. Trade-in
                                                value</div>
                                            <div class="field-container-challenger w-[125px]">
                                                <div class="field-wrapper-challenger">
                                                    <div class="field-content-row">
                                                        <div class="field-input-label-challenger"><input id="74"
                                                                class="form-control-challenger"
                                                                aria-label="Trade in value" placeholder="undefined"
                                                                maxlength="10" aria-labelledby="buyingPowerTradeInValue"
                                                                type="tel" value="$0"></div>
                                                    </div>
                                                    <div class="field-message-challenger">
                                                        <div class="field-message-text-challenger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field-container-challenger mb-2-5">
                                            <div class="field-wrapper-challenger">
                                                <div class="field-input-label-challenger">
                                                    <div data-test="rangeSlider" class="flex flex-wrap">
                                                        <div
                                                            class="overflow:hidden relative mr-[-12px] flex h-[30px] w-[calc(100%_+_12px)] translate-x-[-6px]">
                                                            <div class="pointer-events-none absolute top-[50%] left-[6px] h-[2px] w-[calc(100%_-_12px)] translate-y-[-50%] rounded-full bg-[color:var(--gray-300)]"
                                                                role="presentation">
                                                                <div class="absolute top-0 h-full rounded-full transition-[background] bg-blue-900"
                                                                    style="left: 0%; right: 100%;"></div>
                                                            </div>
                                                            <div class="pointer-events-none relative w-full"
                                                                role="presentation">
                                                                <div class="relative mx-2-5 flex h-full">
                                                                    <div class="absolute top-[50%] flex h-4 w-4 translate-y-[-50%] translate-x-[-50%] items-center justify-center"
                                                                        data-test="sliderIndicatorRight"
                                                                        style="left: 0%;">
                                                                        <div
                                                                            class="h-[18px] w-[18px] rounded-full border-[7px] transition-[background,border,box-shadow,width,height] border-[color:var(--blue-900)] bg-blue-900">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="absolute right-0 top-0 h-full overflow-hidden"
                                                                style="width: 100%;"><input
                                                                    class="absolute top-[50%] m-0 h-full w-full translate-y-[-50%] appearance-none border-none p-0 opacity-0 [&amp;::-moz-range-thumb]:h-4 [&amp;::-moz-range-thumb]:w-4 [&amp;::-moz-range-thumb]:scale-[2] [&amp;::-moz-range-thumb]:rounded-none [&amp;::-moz-range-thumb]:border-none [&amp;::-webkit-slider-thumb]:h-4 [&amp;::-webkit-slider-thumb]:w-4 [&amp;::-webkit-slider-thumb]:scale-[2] [&amp;::-webkit-slider-thumb]:rounded-none [&amp;::-webkit-slider-thumb]:border-none [&amp;::-ms-thumb]:h-4 [&amp;::-ms-thumb]:w-4 [&amp;::-ms-thumb]:scale-[2] [&amp;::-ms-thumb]:rounded-none [&amp;::-ms-thumb]:border-none cursor-pointer right-0"
                                                                    type="range" data-test="inputRight" id="error-75"
                                                                    aria-label="5. Trade in value"
                                                                    aria-labelledby="buyingPowerTradeInValue"
                                                                    aria-valuemin="0" aria-valuemax="100000"
                                                                    aria-valuenow="0" aria-valuetext="0" min="0"
                                                                    max="100000" step="100" value="0"
                                                                    style="width: 100%;"></div>
                                                        </div>
                                                        <div id="error-75_minMax"
                                                            class="flex w-full items-stretch justify-between text-sm text-muted sr-only">
                                                            <span><span class="sr-only">Min: </span>0</span><span><span
                                                                    class="sr-only">Max: </span>100,000</span></div>
                                                    </div>
                                                </div>
                                                <div class="field-message-challenger">
                                                    <div class="field-message-text-challenger !px-0"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="pt-1 pb-5 bg-white px-3 md:px-7"><button type="submit" data-ignore-contrast="true"
                                data-loading="false" form="buyingPowerCalculatorInputs"
                                class="w-full btn btn-primary btn-lg"><span class="btn-inner">Calculate your buying
                                    power</span></button></div>
                    </div>
                </div>
            </div>
            <div class="container pt-5 lg:pt-0">
                <div class="hidden md:block">
                    <p class="px-7 pb-5 text-left text-[12px] font-normal text-[#F2F2F2] lg:px-0">The accuracy of the
                        Buying Power calculator may vary depending on the vehicle chosen. It calculates average total and
                        monthly amounts by combining multiple lenders and vehicle types with financing term lengths. This
                        calculator is a self-help tool. The information is provided for illustrative purposes only, and is
                        not an offer to lend. Consumer must qualify for credit from lender/dealer. See your dealer/lender
                        for details, including any actual offers, if any, that may be available to you.</p>
                </div>
            </div>
        </div>
        <div class="bg-white md:hidden">
            <div class="relative"></div>
            <div class="grow">
                <div class="pt-5 md:px-7 lg:px-6 px-3">
                    <div class="heading-3 normal-case pb-4 pt-1 text-center">What's your current&nbsp;status?</div>
                    <form novalidate="" class="text-left" id="buyingPowerCalculatorInputs">
                        <div class="heading-5 normal-case pb-3">1. Looking for</div>
                        <fieldset class="field-container-challenger flex pb-5" aria-invalid="false">
                            <legend class="sr-only">1. Looking for</legend><label
                                class="form-radio-control custom-control w-full"><input
                                    class="form-radio-control-input custom-control-input custom-control-input-radio"
                                    type="radio" name="condition" value="NEW">
                                <div class="indicator-wrapper">
                                    <div class="custom-control-indicator custom-control-indicator-radio mr-2"
                                        data-test="radioIndicator"></div>
                                </div><span class="custom-control-description"><span class="">New car </span></span>
                            </label><label class="form-radio-control custom-control w-full"><input
                                    class="form-radio-control-input custom-control-input custom-control-input-radio"
                                    type="radio" name="condition" value="USED">
                                <div class="indicator-wrapper">
                                    <div class="custom-control-indicator custom-control-indicator-radio mr-2"
                                        data-test="radioIndicator"></div>
                                </div><span class="custom-control-description"><span class="">Used car
                                    </span></span>
                            </label>
                        </fieldset>
                        <div>
                            <div class="flex items-center justify-between pb-2">
                                <div class="heading-5 normal-case" id="buyingPowerDownPayment">2. Down payment</div>
                                <div class="field-container-challenger w-[125px]">
                                    <div class="field-wrapper-challenger">
                                        <div class="field-content-row">
                                            <div class="field-input-label-challenger"><input id="77"
                                                    class="form-control-challenger" aria-label="Down payment"
                                                    placeholder="undefined" aria-labelledby="buyingPowerDownPayment"
                                                    type="tel" maxlength="10" value="$3,000"></div>
                                        </div>
                                        <div class="field-message-challenger">
                                            <div class="field-message-text-challenger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field-container-challenger mb-2-5">
                                <div class="field-wrapper-challenger">
                                    <div class="field-input-label-challenger">
                                        <div data-test="rangeSlider" class="flex flex-wrap">
                                            <div
                                                class="overflow:hidden relative mr-[-12px] flex h-[30px] w-[calc(100%_+_12px)] translate-x-[-6px]">
                                                <div class="pointer-events-none absolute top-[50%] left-[6px] h-[2px] w-[calc(100%_-_12px)] translate-y-[-50%] rounded-full bg-[color:var(--gray-300)]"
                                                    role="presentation">
                                                    <div class="absolute top-0 h-full rounded-full transition-[background] bg-blue-900"
                                                        style="left: 0%; right: 85%;"></div>
                                                </div>
                                                <div class="pointer-events-none relative w-full" role="presentation">
                                                    <div class="relative mx-2-5 flex h-full">
                                                        <div class="absolute top-[50%] flex h-4 w-4 translate-y-[-50%] translate-x-[-50%] items-center justify-center"
                                                            data-test="sliderIndicatorRight" style="left: 15%;">
                                                            <div
                                                                class="h-[18px] w-[18px] rounded-full border-[7px] transition-[background,border,box-shadow,width,height] border-[color:var(--blue-900)] bg-blue-900">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="absolute right-0 top-0 h-full overflow-hidden"
                                                    style="width: 100%;"><input
                                                        class="absolute top-[50%] m-0 h-full w-full translate-y-[-50%] appearance-none border-none p-0 opacity-0 [&amp;::-moz-range-thumb]:h-4 [&amp;::-moz-range-thumb]:w-4 [&amp;::-moz-range-thumb]:scale-[2] [&amp;::-moz-range-thumb]:rounded-none [&amp;::-moz-range-thumb]:border-none [&amp;::-webkit-slider-thumb]:h-4 [&amp;::-webkit-slider-thumb]:w-4 [&amp;::-webkit-slider-thumb]:scale-[2] [&amp;::-webkit-slider-thumb]:rounded-none [&amp;::-webkit-slider-thumb]:border-none [&amp;::-ms-thumb]:h-4 [&amp;::-ms-thumb]:w-4 [&amp;::-ms-thumb]:scale-[2] [&amp;::-ms-thumb]:rounded-none [&amp;::-ms-thumb]:border-none cursor-pointer right-0"
                                                        type="range" data-test="inputRight" id="error-78"
                                                        aria-label="2. Down payment"
                                                        aria-labelledby="buyingPowerDownPayment" aria-valuemin="0"
                                                        aria-valuemax="20000" aria-valuenow="3000" aria-valuetext="3,000"
                                                        min="0" max="20000" step="100" value="3000"
                                                        style="width: 100%;"></div>
                                            </div>
                                            <div id="error-78_minMax"
                                                class="flex w-full items-stretch justify-between text-sm text-muted sr-only">
                                                <span><span class="sr-only">Min: </span>0</span><span><span
                                                        class="sr-only">Max: </span>20,000</span></div>
                                        </div>
                                    </div>
                                    <div class="field-message-challenger">
                                        <div class="field-message-text-challenger !px-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between pb-2">
                                <div class="heading-5 normal-case" id="buyingPowerMonthlyPayment">3. Desired
                                    monthly&nbsp;payment</div>
                                <div class="field-container-challenger">
                                    <div class="field-wrapper-challenger">
                                        <div class="field-content-row">
                                            <div class="field-input-label-challenger"><input id="79"
                                                    class="form-control-challenger !w-[125px] ml-auto"
                                                    aria-label="Monthly payment" placeholder="undefined" maxlength="6"
                                                    aria-labelledby="buyingPowerMonthlyPayment" type="tel"
                                                    value="$500"></div>
                                        </div>
                                        <div class="field-message-challenger">
                                            <div class="field-message-text-challenger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field-container-challenger mb-2-5">
                                <div class="field-wrapper-challenger">
                                    <div class="field-input-label-challenger">
                                        <div data-test="rangeSlider" class="flex flex-wrap">
                                            <div
                                                class="overflow:hidden relative mr-[-12px] flex h-[30px] w-[calc(100%_+_12px)] translate-x-[-6px]">
                                                <div class="pointer-events-none absolute top-[50%] left-[6px] h-[2px] w-[calc(100%_-_12px)] translate-y-[-50%] rounded-full bg-[color:var(--gray-300)]"
                                                    role="presentation">
                                                    <div class="absolute top-0 h-full rounded-full transition-[background] bg-blue-900"
                                                        style="left: 0%; right: 83.3333%;"></div>
                                                </div>
                                                <div class="pointer-events-none relative w-full" role="presentation">
                                                    <div class="relative mx-2-5 flex h-full">
                                                        <div class="absolute top-[50%] flex h-4 w-4 translate-y-[-50%] translate-x-[-50%] items-center justify-center"
                                                            data-test="sliderIndicatorRight" style="left: 16.6667%;">
                                                            <div
                                                                class="h-[18px] w-[18px] rounded-full border-[7px] transition-[background,border,box-shadow,width,height] border-[color:var(--blue-900)] bg-blue-900">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="absolute right-0 top-0 h-full overflow-hidden"
                                                    style="width: 100%;"><input
                                                        class="absolute top-[50%] m-0 h-full w-full translate-y-[-50%] appearance-none border-none p-0 opacity-0 [&amp;::-moz-range-thumb]:h-4 [&amp;::-moz-range-thumb]:w-4 [&amp;::-moz-range-thumb]:scale-[2] [&amp;::-moz-range-thumb]:rounded-none [&amp;::-moz-range-thumb]:border-none [&amp;::-webkit-slider-thumb]:h-4 [&amp;::-webkit-slider-thumb]:w-4 [&amp;::-webkit-slider-thumb]:scale-[2] [&amp;::-webkit-slider-thumb]:rounded-none [&amp;::-webkit-slider-thumb]:border-none [&amp;::-ms-thumb]:h-4 [&amp;::-ms-thumb]:w-4 [&amp;::-ms-thumb]:scale-[2] [&amp;::-ms-thumb]:rounded-none [&amp;::-ms-thumb]:border-none cursor-pointer right-0"
                                                        type="range" data-test="inputRight" id="error-80"
                                                        aria-label="3. Desired monthly payment"
                                                        aria-labelledby="buyingPowerMonthlyPayment" aria-valuemin="0"
                                                        aria-valuemax="3000" aria-valuenow="500" aria-valuetext="500"
                                                        min="0" max="3000" step="10" value="500"
                                                        style="width: 100%;"></div>
                                            </div>
                                            <div id="error-80_minMax"
                                                class="flex w-full items-stretch justify-between text-sm text-muted sr-only">
                                                <span><span class="sr-only">Min: </span>0</span><span><span
                                                        class="sr-only">Max: </span>3,000</span></div>
                                        </div>
                                    </div>
                                    <div class="field-message-challenger">
                                        <div class="field-message-text-challenger !px-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between pb-2">
                                <div class="heading-5 normal-case" id="buyingPowerCreditScore">4. Credit score</div>
                                <div class="field-container-challenger w-[125px]">
                                    <div class="field-wrapper-challenger">
                                        <div class="field-content-row field-with-suffix">
                                            <div class="field-input-label-challenger input-label-select"><select
                                                    required="" aria-label=""
                                                    class="form-select-element-challenger form-select-no-label"
                                                    aria-labelledby="buyingPowerCreditScore">
                                                    <option value="POOR">300 - 579</option>
                                                    <option value="FAIR">580 - 669</option>
                                                    <option value="GOOD">670 - 739</option>
                                                    <option value="VERY_GOOD">740 - 799</option>
                                                    <option value="EXCELLENT">800 - 850</option>
                                                </select></div>
                                            <div
                                                class="field-addon-challenger field-addon-challenger-suffix field-addon-challenger-suffix-inaccessible">
                                                <svg viewBox="0 0 24 24" class="icon icon-fill-default"
                                                    aria-hidden="true" style="width: 24px; height: 24px;">
                                                    <use href="#arrow_drop_down"></use>
                                                </svg></div>
                                        </div>
                                        <div class="field-message-challenger">
                                            <div class="field-message-text-challenger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field-container-challenger mb-2-5">
                                <div class="field-wrapper-challenger">
                                    <div class="field-input-label-challenger">
                                        <div data-test="rangeSlider" class="flex flex-wrap">
                                            <div
                                                class="overflow:hidden relative mr-[-12px] flex h-[30px] w-[calc(100%_+_12px)] translate-x-[-6px]">
                                                <div class="pointer-events-none absolute top-[50%] left-[6px] h-[2px] w-[calc(100%_-_12px)] translate-y-[-50%] rounded-full bg-[color:var(--gray-300)]"
                                                    role="presentation">
                                                    <div class="absolute top-0 h-full rounded-full transition-[background] bg-blue-900"
                                                        style="left: 0%; right: 50%;"></div>
                                                </div>
                                                <div class="pointer-events-none relative w-full" role="presentation">
                                                    <div class="absolute left-2 top-0 right-2 h-full">
                                                        <div class="absolute top-[50%] h-[8px] w-[8px] translate-y-[-50%] translate-x-[-50%] rounded-full bg-blue-900 transition-[background]"
                                                            style="left: 0%;"></div>
                                                        <div class="absolute top-[50%] h-[8px] w-[8px] translate-y-[-50%] translate-x-[-50%] rounded-full bg-blue-900 transition-[background]"
                                                            style="left: 25%;"></div>
                                                        <div class="absolute top-[50%] h-[8px] w-[8px] translate-y-[-50%] translate-x-[-50%] rounded-full bg-blue-900 transition-[background]"
                                                            style="left: 50%;"></div>
                                                        <div class="absolute top-[50%] h-[8px] w-[8px] translate-y-[-50%] translate-x-[-50%] rounded-full bg-[color:var(--gray-300)]"
                                                            style="left: 75%;"></div>
                                                        <div class="absolute top-[50%] h-[8px] w-[8px] translate-y-[-50%] translate-x-[-50%] rounded-full bg-[color:var(--gray-300)]"
                                                            style="left: 100%;"></div>
                                                    </div>
                                                    <div class="relative mx-2-5 flex h-full">
                                                        <div class="absolute top-[50%] flex h-4 w-4 translate-y-[-50%] translate-x-[-50%] items-center justify-center"
                                                            data-test="sliderIndicatorRight" style="left: 50%;">
                                                            <div
                                                                class="h-[18px] w-[18px] rounded-full border-[7px] transition-[background,border,box-shadow,width,height] border-[color:var(--blue-900)] bg-blue-900">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="absolute right-0 top-0 h-full overflow-hidden"
                                                    style="width: 100%;"><input
                                                        class="absolute top-[50%] m-0 h-full w-full translate-y-[-50%] appearance-none border-none p-0 opacity-0 [&amp;::-moz-range-thumb]:h-4 [&amp;::-moz-range-thumb]:w-4 [&amp;::-moz-range-thumb]:scale-[2] [&amp;::-moz-range-thumb]:rounded-none [&amp;::-moz-range-thumb]:border-none [&amp;::-webkit-slider-thumb]:h-4 [&amp;::-webkit-slider-thumb]:w-4 [&amp;::-webkit-slider-thumb]:scale-[2] [&amp;::-webkit-slider-thumb]:rounded-none [&amp;::-webkit-slider-thumb]:border-none [&amp;::-ms-thumb]:h-4 [&amp;::-ms-thumb]:w-4 [&amp;::-ms-thumb]:scale-[2] [&amp;::-ms-thumb]:rounded-none [&amp;::-ms-thumb]:border-none cursor-pointer right-0"
                                                        type="range" data-test="inputRight" id="error-83"
                                                        aria-label="4. Credit score"
                                                        aria-labelledby="buyingPowerCreditScore" aria-valuemin="1"
                                                        aria-valuemax="5" aria-valuenow="3" aria-valuetext="3"
                                                        min="1" max="5" step="1" value="3"
                                                        style="width: 100%;"></div>
                                            </div>
                                            <div id="error-83_minMax"
                                                class="flex w-full items-stretch justify-between text-sm text-muted sr-only">
                                                <span><span class="sr-only">Min: </span>1</span><span><span
                                                        class="sr-only">Max: </span>5</span></div>
                                        </div>
                                    </div>
                                    <div class="field-message-challenger">
                                        <div class="field-message-text-challenger !px-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 flex items-center">
                            <div class="toggle"><input id="buyingPowerTradeIn" data-test="toggleInput" type="checkbox"
                                    class="toggle-input form-check-input"><span class="toggle-track"><span
                                        class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default toggle-icon" aria-hidden="true"
                                            style="width: 12px; height: 12px;">
                                            <use href="#check"></use>
                                        </svg></span></span></div><label for="buyingPowerTradeIn"
                                class="ml-2 text-sm">Include trade-in</label>
                        </div>
                        <div data-test="buyingPowerCalculatorInputsTradeInValue" class="hidden">
                            <div class="flex items-center justify-between pb-2">
                                <div class="heading-5 normal-case" id="buyingPowerTradeInValue">5. Trade-in value</div>
                                <div class="field-container-challenger w-[125px]">
                                    <div class="field-wrapper-challenger">
                                        <div class="field-content-row">
                                            <div class="field-input-label-challenger"><input id="85"
                                                    class="form-control-challenger" aria-label="Trade in value"
                                                    placeholder="undefined" maxlength="10"
                                                    aria-labelledby="buyingPowerTradeInValue" type="tel"
                                                    value="$0"></div>
                                        </div>
                                        <div class="field-message-challenger">
                                            <div class="field-message-text-challenger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field-container-challenger mb-2-5">
                                <div class="field-wrapper-challenger">
                                    <div class="field-input-label-challenger">
                                        <div data-test="rangeSlider" class="flex flex-wrap">
                                            <div
                                                class="overflow:hidden relative mr-[-12px] flex h-[30px] w-[calc(100%_+_12px)] translate-x-[-6px]">
                                                <div class="pointer-events-none absolute top-[50%] left-[6px] h-[2px] w-[calc(100%_-_12px)] translate-y-[-50%] rounded-full bg-[color:var(--gray-300)]"
                                                    role="presentation">
                                                    <div class="absolute top-0 h-full rounded-full transition-[background] bg-blue-900"
                                                        style="left: 0%; right: 100%;"></div>
                                                </div>
                                                <div class="pointer-events-none relative w-full" role="presentation">
                                                    <div class="relative mx-2-5 flex h-full">
                                                        <div class="absolute top-[50%] flex h-4 w-4 translate-y-[-50%] translate-x-[-50%] items-center justify-center"
                                                            data-test="sliderIndicatorRight" style="left: 0%;">
                                                            <div
                                                                class="h-[18px] w-[18px] rounded-full border-[7px] transition-[background,border,box-shadow,width,height] border-[color:var(--blue-900)] bg-blue-900">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="absolute right-0 top-0 h-full overflow-hidden"
                                                    style="width: 100%;"><input
                                                        class="absolute top-[50%] m-0 h-full w-full translate-y-[-50%] appearance-none border-none p-0 opacity-0 [&amp;::-moz-range-thumb]:h-4 [&amp;::-moz-range-thumb]:w-4 [&amp;::-moz-range-thumb]:scale-[2] [&amp;::-moz-range-thumb]:rounded-none [&amp;::-moz-range-thumb]:border-none [&amp;::-webkit-slider-thumb]:h-4 [&amp;::-webkit-slider-thumb]:w-4 [&amp;::-webkit-slider-thumb]:scale-[2] [&amp;::-webkit-slider-thumb]:rounded-none [&amp;::-webkit-slider-thumb]:border-none [&amp;::-ms-thumb]:h-4 [&amp;::-ms-thumb]:w-4 [&amp;::-ms-thumb]:scale-[2] [&amp;::-ms-thumb]:rounded-none [&amp;::-ms-thumb]:border-none cursor-pointer right-0"
                                                        type="range" data-test="inputRight" id="error-86"
                                                        aria-label="5. Trade in value"
                                                        aria-labelledby="buyingPowerTradeInValue" aria-valuemin="0"
                                                        aria-valuemax="100000" aria-valuenow="0" aria-valuetext="0"
                                                        min="0" max="100000" step="100" value="0"
                                                        style="width: 100%;"></div>
                                            </div>
                                            <div id="error-86_minMax"
                                                class="flex w-full items-stretch justify-between text-sm text-muted sr-only">
                                                <span><span class="sr-only">Min: </span>0</span><span><span
                                                        class="sr-only">Max: </span>100,000</span></div>
                                        </div>
                                    </div>
                                    <div class="field-message-challenger">
                                        <div class="field-message-text-challenger !px-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="pt-1 pb-5 bg-white px-3 md:px-7"><button type="submit" data-ignore-contrast="true"
                    data-loading="false" form="buyingPowerCalculatorInputs" class="w-full btn btn-primary btn-lg"><span
                        class="btn-inner">Calculate your buying power</span></button></div>
        </div>
        <div class="bg-light md:hidden">
            <p class="px-3 py-4 text-left text-[12px] font-normal text-[#707070]">The accuracy of the Buying Power
                calculator may vary depending on the vehicle chosen. It calculates average total and monthly amounts by
                combining multiple lenders and vehicle types with financing term lengths. This calculator is a self-help
                tool. The information is provided for illustrative purposes only, and is not an offer to lend. Consumer must
                qualify for credit from lender/dealer. See your dealer/lender for details, including any actual offers, if
                any, that may be available to you.</p>
        </div>
    </main>
@endsection
