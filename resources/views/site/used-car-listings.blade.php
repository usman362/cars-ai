@extends('site.layouts.app')
@section('content')

                <main id="mainContent" class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]" style="margin-top:60px">
                    <div data-test="marketplaceSearchPage">
                        <div data-test="searchHeaderMarketplace" aria-label="Search Header">
                            <div class="container py-2 sm:py-3">
                                <div class="hidden-sm-down mt-0 flex items-center justify-between">
                                    <div class="my-0 text-sm">
                                        <nav aria-label="breadcrumb">
                                            <ol class="flex flex-wrap pl-0" data-test="searchBreadcrumbsMarketplace">
                                                <li data-test="breadcrumbListItem" class="list-none" aria-current="false"><a title="Used Car Listings" href="/used-cars-for-sale/">Used Cars For Sale</a><span class="my-[0px] mx-[9px] text-muted"><span class="text-center text-sm">&gt;</span></span></li>
                                                <li data-test="breadcrumbListItem" class="list-none" aria-current="page"><a href="/used-cars-for-sale/listings/">Listings</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <div class="flex items-center justify-start md:mt-2 md:flex-row lg:mb-1">
                                    <h1 class="heading-4 normal-case heading-sm-3 sm:normal-case heading-md-2 md:normal-case min-h-[20px] pr-2 sm:min-h-[30px] md:min-h-[39px] md:py-0" data-test="searchHeadingMarketplace">Used Cars for Sale Online<span class="hidden-md-up"> <button type="button" class="link-button">
                                                <div class="heading-4 normal-case heading-sm-3 sm:normal-case heading-md-2 md:normal-case">Nationwide</div>
                                            </button></span></h1>
                                    <div class="hidden-sm-down ml-2 mr-2"><button type="button" data-ignore-contrast="false" data-loading="false" data-test="openZipPopup" aria-haspopup="dialog" class="lg:h-5 btn btn-secondary btn-md" aria-label="See Listings Near Me"><span class="btn-inner">See Listings Near Me</span></button></div>
                                    <div class="hidden-md-down ml-auto"><button type="button" data-ignore-contrast="false" data-loading="false" data-test="saveSearchButton" aria-haspopup="dialog" class="max-w-[120px] px-3 lg:h-5 lg:max-w-[156px] btn btn-secondary btn-md" aria-label="Save Search">
                                            <div class="btn-inner btn-fade" style="opacity: 1;">Save Search</div>
                                        </button></div>
                                </div>
                            </div>
                        </div>
                        <div class="container py-2">
                            <div class="row md:flex-nowrap">
                                <div class="col-lg-4 col-xl-3">
                                    <div class="rounded border bg-white px-3">
                                        <div>
                                            <div class="heading-base sr-only" aria-level="2" role="heading">Search filters</div>
                                            <p class="sr-only">Changing filters in this panel will update search results immediately.</p>
                                            <div class="-mx-3 border-b px-3 py-3">
                                                <div class="-mx-3 px-3">
                                                    <fieldset class="switch-bar switch-bar-block" aria-invalid="false">
                                                        <legend class="sr-only">Vehicle Condition</legend><label class="form-radio-control switch w-full" data-test="usedCarsSwitch"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-24" value="USED" checked="">
                                                            <div>Used Cars </div>
                                                        </label><label class="form-radio-control switch w-full" data-test="newCarsSwitch"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-24" value="NEW">
                                                            <div>New Cars </div>
                                                        </label>
                                                    </fieldset>
                                                </div>
                                                <div class="-mx-3 mb-3 border-b px-3 py-3">
                                                    <h3 class="heading-4 normal-case mb-2-5">Buy Online</h3>
                                                    <div data-test="checkboxField" class="field-container-challenger"><label data-test="trueCarPlusCheckbox" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" value="25" checked="">
                                                            <div data-test="trueCarPlusCheckboxCheckbox" class="indicator-wrapper">
                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                        <use href="#check"></use>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="custom-control-description">
                                                                <div class="">
                                                                    <div class="relative top-[-3px] flex justify-between">
                                                                        <div class="flex items-center">
                                                                            <div class="picture-container" style="padding-bottom: 0px; width: 28px; height: 28px;"><img class="picture-inner" src="assets/_next/static/images/tc-plus-badge-2-e519423f477ac631d4bb02a434167acc.png?auto=format&amp;h=28&amp;w=28" srcset="assets/_next/static/images/tc-plus-badge-2-e519423f477ac631d4bb02a434167acc.png?auto=format&amp;h=28&amp;w=28 1x, assets/_next/static/images/tc-plus-badge-2-e519423f477ac631d4bb02a434167acc.png?auto=format&amp;h=56&amp;w=56 2x" alt=""></div><span class="ml-2">See Buy Online Cars</span>
                                                                        </div>
                                                                        <div class="ml-2 flex items-center">326</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </label></div>
                                                </div>
                                                <div class="">
                                                    <div class="flex items-center justify-between gap-2 text-muted mb-2">
                                                        <div>Location</div><button type="button" class="link-button truncate" aria-label="Nationwide" aria-haspopup="dialog" data-test="searchFiltersLocationButton">Nationwide <svg viewBox="0 0 24 24" class="icon icon-fill-secondary" aria-hidden="true" style="width: 16px; height: 16px;">
                                                                <use href="#location_on"></use>
                                                            </svg> <svg viewBox="0 0 24 24" class="icon icon-fill-default hidden-lg-up" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                <use href="#keyboard_arrow_right"></use>
                                                            </svg></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mx-3 border-b px-3 py-3"><label class="mb-1 flex items-baseline justify-between">
                                                    <div class="text-muted" data-test="testLabel-searchFiltersBodyStyleSlug">Body Style</div>
                                                    <div class="field-container-challenger">
                                                        <div class="field-wrapper-challenger">
                                                            <div class="field-content-row field-with-suffix">
                                                                <div class="field-input-label-challenger input-label-select"><select required="" aria-label="Change vehicle body style" class="form-select-element-challenger form-select-no-border form-select-no-label form-select-borderless" data-test="searchFiltersBodyStyleSlug">
                                                                        <option value="">All</option>
                                                                        <option value="convertible">Convertible</option>
                                                                        <option value="coupe">Coupe</option>
                                                                        <option value="hatchback">Hatchback</option>
                                                                        <option value="sedan">Sedan</option>
                                                                        <option value="suv">SUV</option>
                                                                        <option value="truck">Truck</option>
                                                                        <option value="van">Van</option>
                                                                        <option value="wagon">Wagon</option>
                                                                        <option value="unknown">Unknown</option>
                                                                    </select></div>
                                                                <div class="field-addon-challenger field-addon-challenger-suffix field-addon-challenger-suffix-inaccessible"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                        <use href="#arrow_drop_down"></use>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="field-message-challenger">
                                                                <div class="field-message-text-challenger"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                                <div class="flex items-baseline justify-between">
                                                    <div class="text-muted">Years</div>
                                                    <div class="flex items-baseline"><label class="mr-0">
                                                            <div class="field-container-challenger">
                                                                <div class="field-wrapper-challenger">
                                                                    <div class="field-content-row field-with-suffix">
                                                                        <div class="field-input-label-challenger input-label-select"><select required="" aria-label="Change minimum vehicle year" class="form-select-element-challenger form-select-no-border form-select-no-label form-select-borderless" data-test="searchFiltersYearLow">
                                                                                <option value="">Min</option>
                                                                                <option value="2005">2005</option>
                                                                                <option value="2006">2006</option>
                                                                                <option value="2007">2007</option>
                                                                                <option value="2008">2008</option>
                                                                                <option value="2009">2009</option>
                                                                                <option value="2010">2010</option>
                                                                                <option value="2011">2011</option>
                                                                                <option value="2012">2012</option>
                                                                                <option value="2013">2013</option>
                                                                                <option value="2014">2014</option>
                                                                                <option value="2015">2015</option>
                                                                                <option value="2016">2016</option>
                                                                                <option value="2017">2017</option>
                                                                                <option value="2018">2018</option>
                                                                                <option value="2019">2019</option>
                                                                                <option value="2020">2020</option>
                                                                                <option value="2021">2021</option>
                                                                                <option value="2022">2022</option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2024">2024</option>
                                                                            </select></div>
                                                                        <div class="field-addon-challenger field-addon-challenger-suffix field-addon-challenger-suffix-inaccessible"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                <use href="#arrow_drop_down"></use>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="field-message-challenger">
                                                                        <div class="field-message-text-challenger"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <div class="mx-2 text-muted">to</div><label class="mr-0">
                                                            <div class="field-container-challenger">
                                                                <div class="field-wrapper-challenger">
                                                                    <div class="field-content-row field-with-suffix">
                                                                        <div class="field-input-label-challenger input-label-select"><select required="" aria-label="Change maximum vehicle year" class="form-select-element-challenger form-select-no-border form-select-no-label form-select-borderless" data-test="searchFiltersYearHigh">
                                                                                <option value="">Max</option>
                                                                                <option value="2005">2005</option>
                                                                                <option value="2006">2006</option>
                                                                                <option value="2007">2007</option>
                                                                                <option value="2008">2008</option>
                                                                                <option value="2009">2009</option>
                                                                                <option value="2010">2010</option>
                                                                                <option value="2011">2011</option>
                                                                                <option value="2012">2012</option>
                                                                                <option value="2013">2013</option>
                                                                                <option value="2014">2014</option>
                                                                                <option value="2015">2015</option>
                                                                                <option value="2016">2016</option>
                                                                                <option value="2017">2017</option>
                                                                                <option value="2018">2018</option>
                                                                                <option value="2019">2019</option>
                                                                                <option value="2020">2020</option>
                                                                                <option value="2021">2021</option>
                                                                                <option value="2022">2022</option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2024">2024</option>
                                                                            </select></div>
                                                                        <div class="field-addon-challenger field-addon-challenger-suffix field-addon-challenger-suffix-inaccessible"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                <use href="#arrow_drop_down"></use>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="field-message-challenger">
                                                                        <div class="field-message-text-challenger"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mx-3">
                                                <div class="border-b px-3 py-3">
                                                    <div>
                                                        <h3 class="heading-4 normal-case flex items-center">Price<button data-test="infoButtonButton" aria-label="Info" color="secondary" class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)] ml-1" style="--info-border-color: black;"><svg viewBox="0 0 24 24" class="icon icon-fill-default flex-shrink-0" aria-hidden="true" style="width: 18px; height: 18px;">
                                                                    <use href="#info"></use>
                                                                </svg></button></h3>
                                                        <fieldset class="switch-bar mt-2-5 w-full" aria-invalid="false">
                                                            <legend class="sr-only">Payment Types</legend><label class="form-radio-control switch switch-active w-1/3" data-test="cashPaymentFilter"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-37" value="cash" checked="">
                                                                <div>Cash </div>
                                                            </label><label class="form-radio-control switch w-1/3" data-test="loanPaymentFilter"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-37" value="loan">
                                                                <div>Finance </div>
                                                            </label>
                                                        </fieldset>
                                                        <div class="field-container-challenger mt-2" data-test="priceFilter">
                                                            <div class="field-wrapper-challenger">
                                                                <div class="field-input-label-challenger">
                                                                    <div data-test="rangeSlider" class="flex flex-wrap"><output id="error-38_output" for="error-38_from error-38_to" class="flex min-h-[16px] w-full items-center justify-between gap-2 mb-2" aria-live="off"><span class="sr-only">Value: </span>
                                                                            <div class="field-container-challenger">
                                                                                <div class="field-wrapper-challenger">
                                                                                    <div class="field-content-row">
                                                                                        <div class="field-input-label-challenger"><input id="39" class="form-control-challenger" aria-label="Price Minimum" placeholder="undefined" inputmode="numeric" data-test="inputTextLeft" value="$0"></div>
                                                                                    </div>
                                                                                    <div class="field-message-challenger">
                                                                                        <div class="field-message-text-challenger"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div><span class="text-sm text-muted">to</span>
                                                                            <div class="field-container-challenger">
                                                                                <div class="field-wrapper-challenger">
                                                                                    <div class="field-content-row">
                                                                                        <div class="field-input-label-challenger"><input id="40" class="form-control-challenger" aria-label="Price Maximum" placeholder="undefined" inputmode="numeric" data-test="inputTextRight" value="$100,000+"></div>
                                                                                    </div>
                                                                                    <div class="field-message-challenger">
                                                                                        <div class="field-message-text-challenger"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </output>
                                                                        <div class="overflow:hidden relative mr-[-12px] flex h-[30px] w-[calc(100%_+_12px)] translate-x-[-6px]">
                                                                            <div class="pointer-events-none absolute top-[50%] left-[6px] h-[2px] w-[calc(100%_-_12px)] translate-y-[-50%] rounded-full bg-[color:var(--gray-300)]" role="presentation">
                                                                                <div class="absolute top-0 h-full rounded-full transition-[background] bg-blue-900" style="left: 0%; right: 0%;"></div>
                                                                            </div>
                                                                            <div class="pointer-events-none relative w-full" role="presentation">
                                                                                <div class="relative mx-2-5 flex h-full">
                                                                                    <div class="absolute top-[50%] flex h-4 w-4 translate-y-[-50%] translate-x-[-50%] items-center justify-center" data-test="sliderIndicatorLeft" style="left: 0%;">
                                                                                        <div class="h-[18px] w-[18px] rounded-full border-[7px] transition-[background,border,box-shadow,width,height] border-[color:var(--blue-900)] bg-blue-900"></div>
                                                                                    </div>
                                                                                    <div class="absolute top-[50%] flex h-4 w-4 translate-y-[-50%] translate-x-[-50%] items-center justify-center" data-test="sliderIndicatorRight" style="left: 100%;">
                                                                                        <div class="h-[18px] w-[18px] rounded-full border-[7px] transition-[background,border,box-shadow,width,height] border-[color:var(--blue-900)] bg-blue-900"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="absolute left-2-5 top-0 h-full -translate-x-2-5 overflow-hidden" style="width: calc(50% + 0px);"><input class="absolute top-[50%] m-0 h-full w-full translate-y-[-50%] appearance-none border-none p-0 opacity-0 [&amp;::-moz-range-thumb]:h-4 [&amp;::-moz-range-thumb]:w-4 [&amp;::-moz-range-thumb]:scale-[2] [&amp;::-moz-range-thumb]:rounded-none [&amp;::-moz-range-thumb]:border-none [&amp;::-webkit-slider-thumb]:h-4 [&amp;::-webkit-slider-thumb]:w-4 [&amp;::-webkit-slider-thumb]:scale-[2] [&amp;::-webkit-slider-thumb]:rounded-none [&amp;::-webkit-slider-thumb]:border-none [&amp;::-ms-thumb]:h-4 [&amp;::-ms-thumb]:w-4 [&amp;::-ms-thumb]:scale-[2] [&amp;::-ms-thumb]:rounded-none [&amp;::-ms-thumb]:border-none cursor-pointer left-0" type="range" data-test="inputLeft" id="error-38_from" aria-label="Price minimum value" aria-describedby="error-38_output" aria-valuemin="0" aria-valuemax="99000" aria-valuenow="0" aria-valuetext="$0" max="100000" min="0" step="1000" value="0" style="width: calc(200% + 0px);"></div>
                                                                            <div class="absolute right-0 top-0 h-full overflow-hidden" style="width: calc(50% + 0px);"><input class="absolute top-[50%] m-0 h-full w-full translate-y-[-50%] appearance-none border-none p-0 opacity-0 [&amp;::-moz-range-thumb]:h-4 [&amp;::-moz-range-thumb]:w-4 [&amp;::-moz-range-thumb]:scale-[2] [&amp;::-moz-range-thumb]:rounded-none [&amp;::-moz-range-thumb]:border-none [&amp;::-webkit-slider-thumb]:h-4 [&amp;::-webkit-slider-thumb]:w-4 [&amp;::-webkit-slider-thumb]:scale-[2] [&amp;::-webkit-slider-thumb]:rounded-none [&amp;::-webkit-slider-thumb]:border-none [&amp;::-ms-thumb]:h-4 [&amp;::-ms-thumb]:w-4 [&amp;::-ms-thumb]:scale-[2] [&amp;::-ms-thumb]:rounded-none [&amp;::-ms-thumb]:border-none cursor-pointer right-0" type="range" data-test="inputRight" id="error-38_to" aria-label="Price maximum value" aria-describedby="error-38_output" aria-valuemin="1000" aria-valuemax="100000" aria-valuenow="100000" aria-valuetext="$100,000+" min="0" max="100000" step="1000" value="100000" style="width: calc(200% + 0px);"></div>
                                                                        </div>
                                                                        <div id="error-38_minMax" class="flex w-full items-stretch justify-between text-sm text-muted sr-only"><span><span class="sr-only">Min: </span>$0</span><span><span class="sr-only">Max: </span>$100,000+</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="field-message-challenger">
                                                                    <div class="field-message-text-challenger !px-0"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full pt-2">
                                                            <div data-test="checkboxField" class="field-container-challenger"><label data-test="priceReductionCheckbox" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" value="41">
                                                                    <div data-test="priceReductionCheckboxCheckbox" class="indicator-wrapper">
                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                <use href="#check"></use>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="custom-control-description">
                                                                        <div class="">
                                                                            <div class="flex justify-between"><span>Price Drop</span><span class="ml-2">275</span></div>
                                                                            <div class="text-sm text-muted">See vehicles with price drops in the past 30 days</div>
                                                                        </div>
                                                                    </div>
                                                                </label></div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <h3 class="heading-4 normal-case" id="range-filter-label-43">Mileage</h3>
                                                        <div class="field-container-challenger mt-2" data-test="mileageFilter">
                                                            <div class="field-wrapper-challenger">
                                                                <div class="field-input-label-challenger">
                                                                    <div data-test="rangeSlider" class="flex flex-wrap"><output id="error-44_output" for="error-44_from error-44_to" class="flex min-h-[16px] w-full items-center justify-between gap-2 mb-2" aria-live="off"><span class="sr-only">Value: </span>
                                                                            <div class="field-container-challenger">
                                                                                <div class="field-wrapper-challenger">
                                                                                    <div class="field-content-row">
                                                                                        <div class="field-input-label-challenger"><input id="45" class="form-control-challenger" aria-label="Mileage Minimum" placeholder="undefined" inputmode="numeric" data-test="inputTextLeft" value="0"></div>
                                                                                    </div>
                                                                                    <div class="field-message-challenger">
                                                                                        <div class="field-message-text-challenger"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div><span class="text-sm text-muted">to</span>
                                                                            <div class="field-container-challenger">
                                                                                <div class="field-wrapper-challenger">
                                                                                    <div class="field-content-row">
                                                                                        <div class="field-input-label-challenger"><input id="46" class="form-control-challenger" aria-label="Mileage Maximum" placeholder="undefined" inputmode="numeric" data-test="inputTextRight" value="200,000+"></div>
                                                                                    </div>
                                                                                    <div class="field-message-challenger">
                                                                                        <div class="field-message-text-challenger"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </output>
                                                                        <div class="overflow:hidden relative mr-[-12px] flex h-[30px] w-[calc(100%_+_12px)] translate-x-[-6px]">
                                                                            <div class="pointer-events-none absolute top-[50%] left-[6px] h-[2px] w-[calc(100%_-_12px)] translate-y-[-50%] rounded-full bg-[color:var(--gray-300)]" role="presentation">
                                                                                <div class="absolute top-0 h-full rounded-full transition-[background] bg-blue-900" style="left: 0%; right: 0%;"></div>
                                                                            </div>
                                                                            <div class="pointer-events-none relative w-full" role="presentation">
                                                                                <div class="relative mx-2-5 flex h-full">
                                                                                    <div class="absolute top-[50%] flex h-4 w-4 translate-y-[-50%] translate-x-[-50%] items-center justify-center" data-test="sliderIndicatorLeft" style="left: 0%;">
                                                                                        <div class="h-[18px] w-[18px] rounded-full border-[7px] transition-[background,border,box-shadow,width,height] border-[color:var(--blue-900)] bg-blue-900"></div>
                                                                                    </div>
                                                                                    <div class="absolute top-[50%] flex h-4 w-4 translate-y-[-50%] translate-x-[-50%] items-center justify-center" data-test="sliderIndicatorRight" style="left: 100%;">
                                                                                        <div class="h-[18px] w-[18px] rounded-full border-[7px] transition-[background,border,box-shadow,width,height] border-[color:var(--blue-900)] bg-blue-900"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="absolute left-2-5 top-0 h-full -translate-x-2-5 overflow-hidden" style="width: calc(50% + 0px);"><input class="absolute top-[50%] m-0 h-full w-full translate-y-[-50%] appearance-none border-none p-0 opacity-0 [&amp;::-moz-range-thumb]:h-4 [&amp;::-moz-range-thumb]:w-4 [&amp;::-moz-range-thumb]:scale-[2] [&amp;::-moz-range-thumb]:rounded-none [&amp;::-moz-range-thumb]:border-none [&amp;::-webkit-slider-thumb]:h-4 [&amp;::-webkit-slider-thumb]:w-4 [&amp;::-webkit-slider-thumb]:scale-[2] [&amp;::-webkit-slider-thumb]:rounded-none [&amp;::-webkit-slider-thumb]:border-none [&amp;::-ms-thumb]:h-4 [&amp;::-ms-thumb]:w-4 [&amp;::-ms-thumb]:scale-[2] [&amp;::-ms-thumb]:rounded-none [&amp;::-ms-thumb]:border-none cursor-pointer left-0" type="range" data-test="inputLeft" id="error-44_from" aria-label="Mileage minimum value" aria-labelledby="range-filter-label-43" aria-describedby="error-44_output" aria-valuemin="0" aria-valuemax="199000" aria-valuenow="0" aria-valuetext="0" max="200000" min="0" step="1000" value="0" style="width: calc(200% + 0px);"></div>
                                                                            <div class="absolute right-0 top-0 h-full overflow-hidden" style="width: calc(50% + 0px);"><input class="absolute top-[50%] m-0 h-full w-full translate-y-[-50%] appearance-none border-none p-0 opacity-0 [&amp;::-moz-range-thumb]:h-4 [&amp;::-moz-range-thumb]:w-4 [&amp;::-moz-range-thumb]:scale-[2] [&amp;::-moz-range-thumb]:rounded-none [&amp;::-moz-range-thumb]:border-none [&amp;::-webkit-slider-thumb]:h-4 [&amp;::-webkit-slider-thumb]:w-4 [&amp;::-webkit-slider-thumb]:scale-[2] [&amp;::-webkit-slider-thumb]:rounded-none [&amp;::-webkit-slider-thumb]:border-none [&amp;::-ms-thumb]:h-4 [&amp;::-ms-thumb]:w-4 [&amp;::-ms-thumb]:scale-[2] [&amp;::-ms-thumb]:rounded-none [&amp;::-ms-thumb]:border-none cursor-pointer right-0" type="range" data-test="inputRight" id="error-44_to" aria-label="Mileage maximum value" aria-labelledby="range-filter-label-43" aria-describedby="error-44_output" aria-valuemin="1000" aria-valuemax="200000" aria-valuenow="200000" aria-valuetext="200,000+" min="0" max="200000" step="1000" value="200000" style="width: calc(200% + 0px);"></div>
                                                                        </div>
                                                                        <div id="error-44_minMax" class="flex w-full items-stretch justify-between text-sm text-muted sr-only"><span><span class="sr-only">Min: </span>0</span><span><span class="sr-only">Max: </span>200,000+</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="field-message-challenger">
                                                                    <div class="field-message-text-challenger !px-0"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-3">
                                                    <div class="expandable-list-item -mx-3 px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="makeFilter">
                                                            <h3 class="heading-4 normal-case w-full px-3 py-3">Make</h3><span class="ml-3 whitespace-nowrap">
                                                                <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                        <use href="#keyboard_arrow_down"></use>
                                                                    </svg></div>
                                                            </span>
                                                        </button>
                                                        <div class="expandable-list-item-collapse border-t collapse">
                                                            <div class="expandable-list-item-shadow">
                                                                <div class="flex flex-col max-h-[50vh] overflow-y-scroll py-3 pr-1 pl-3 sm:max-h-[400px]" data-test="makeFilterOptions">
                                                                    <div class="pb-3">
                                                                        <div class="flex justify-between">
                                                                            <p id="47" class="text-muted">Popular Makes</p>
                                                                        </div>
                                                                        <ul data-test="popularSection">
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-toyota" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="toyota: 16 results" value="49">
                                                                                        <div data-test="makeFilter-toyotaCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Toyota</div>
                                                                                                    <div data-test-item="toyota-count" class="mx-2">16</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-bmw" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="bmw: 1 results" value="51">
                                                                                        <div data-test="makeFilter-bmwCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>BMW</div>
                                                                                                    <div data-test-item="bmw-count" class="mx-2">1</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-chevrolet" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="chevrolet: 39 results" value="53">
                                                                                        <div data-test="makeFilter-chevroletCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Chevrolet</div>
                                                                                                    <div data-test-item="chevrolet-count" class="mx-2">39</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-honda" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="honda: 12 results" value="55">
                                                                                        <div data-test="makeFilter-hondaCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Honda</div>
                                                                                                    <div data-test-item="honda-count" class="mx-2">12</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-ford" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="ford: 39 results" value="57">
                                                                                        <div data-test="makeFilter-fordCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Ford</div>
                                                                                                    <div data-test-item="ford-count" class="mx-2">39</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-audi" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="audi: 21 results" value="59">
                                                                                        <div data-test="makeFilter-audiCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Audi</div>
                                                                                                    <div data-test-item="audi-count" class="mx-2">21</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-acura" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="acura: 2 results" value="61">
                                                                                        <div data-test="makeFilter-acuraCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Acura</div>
                                                                                                    <div data-test-item="acura-count" class="mx-2">2</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-hyundai" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="hyundai: 38 results" value="63">
                                                                                        <div data-test="makeFilter-hyundaiCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Hyundai</div>
                                                                                                    <div data-test-item="hyundai-count" class="mx-2">38</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-dodge" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="dodge: 5 results" value="65">
                                                                                        <div data-test="makeFilter-dodgeCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Dodge</div>
                                                                                                    <div data-test-item="dodge-count" class="mx-2">5</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-mercedes-benz" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="mercedes-benz: 4 results" value="67">
                                                                                        <div data-test="makeFilter-mercedes-benzCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Mercedes-Benz</div>
                                                                                                    <div data-test-item="mercedes-benz-count" class="mx-2">4</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-kia" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="kia: 15 results" value="69">
                                                                                        <div data-test="makeFilter-kiaCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Kia</div>
                                                                                                    <div data-test-item="kia-count" class="mx-2">15</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-lexus" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="lexus: 3 results" value="71">
                                                                                        <div data-test="makeFilter-lexusCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Lexus</div>
                                                                                                    <div data-test-item="lexus-count" class="mx-2">3</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="flex justify-between">
                                                                        <p id="47" class="text-muted">All Other Makes</p>
                                                                    </div>
                                                                    <ul data-test="restSection">
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-alfa-romeo" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="alfa-romeo: 0 results" value="73">
                                                                                    <div data-test="makeFilter-alfa-romeoCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Alfa Romeo</div>
                                                                                                <div data-test-item="alfa-romeo-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-am-general" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="am-general: 0 results" value="75">
                                                                                    <div data-test="makeFilter-am-generalCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>AM General</div>
                                                                                                <div data-test-item="am-general-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-aston-martin" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="aston-martin: 0 results" value="77">
                                                                                    <div data-test="makeFilter-aston-martinCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Aston Martin</div>
                                                                                                <div data-test-item="aston-martin-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-bentley" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="bentley: 0 results" value="79">
                                                                                    <div data-test="makeFilter-bentleyCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Bentley</div>
                                                                                                <div data-test-item="bentley-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-buick" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="buick: 3 results" value="81">
                                                                                    <div data-test="makeFilter-buickCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Buick</div>
                                                                                                <div data-test-item="buick-count" class="mx-2">3</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-cadillac" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="cadillac: 7 results" value="83">
                                                                                    <div data-test="makeFilter-cadillacCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Cadillac</div>
                                                                                                <div data-test-item="cadillac-count" class="mx-2">7</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-chrysler" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="chrysler: 1 results" value="85">
                                                                                    <div data-test="makeFilter-chryslerCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Chrysler</div>
                                                                                                <div data-test-item="chrysler-count" class="mx-2">1</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-ferrari" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="ferrari: 0 results" value="87">
                                                                                    <div data-test="makeFilter-ferrariCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Ferrari</div>
                                                                                                <div data-test-item="ferrari-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-fiat" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="fiat: 0 results" value="89">
                                                                                    <div data-test="makeFilter-fiatCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>FIAT</div>
                                                                                                <div data-test-item="fiat-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-fisker" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="fisker: 0 results" value="91">
                                                                                    <div data-test="makeFilter-fiskerCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Fisker</div>
                                                                                                <div data-test-item="fisker-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-freightliner" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="freightliner: 0 results" value="93">
                                                                                    <div data-test="makeFilter-freightlinerCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Freightliner</div>
                                                                                                <div data-test-item="freightliner-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-genesis" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="genesis: 6 results" value="95">
                                                                                    <div data-test="makeFilter-genesisCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Genesis</div>
                                                                                                <div data-test-item="genesis-count" class="mx-2">6</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-gmc" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="gmc: 6 results" value="97">
                                                                                    <div data-test="makeFilter-gmcCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>GMC</div>
                                                                                                <div data-test-item="gmc-count" class="mx-2">6</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-hummer" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="hummer: 0 results" value="99">
                                                                                    <div data-test="makeFilter-hummerCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>HUMMER</div>
                                                                                                <div data-test-item="hummer-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-ineos" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="ineos: 0 results" value="101">
                                                                                    <div data-test="makeFilter-ineosCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>INEOS</div>
                                                                                                <div data-test-item="ineos-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-infiniti" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="infiniti: 1 results" value="103">
                                                                                    <div data-test="makeFilter-infinitiCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>INFINITI</div>
                                                                                                <div data-test-item="infiniti-count" class="mx-2">1</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-isuzu" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="isuzu: 0 results" value="105">
                                                                                    <div data-test="makeFilter-isuzuCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Isuzu</div>
                                                                                                <div data-test-item="isuzu-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-jaguar" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="jaguar: 0 results" value="107">
                                                                                    <div data-test="makeFilter-jaguarCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Jaguar</div>
                                                                                                <div data-test-item="jaguar-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-jeep" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="jeep: 9 results" value="109">
                                                                                    <div data-test="makeFilter-jeepCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Jeep</div>
                                                                                                <div data-test-item="jeep-count" class="mx-2">9</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-karma" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="karma: 0 results" value="111">
                                                                                    <div data-test="makeFilter-karmaCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Karma</div>
                                                                                                <div data-test-item="karma-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-lamborghini" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="lamborghini: 0 results" value="113">
                                                                                    <div data-test="makeFilter-lamborghiniCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Lamborghini</div>
                                                                                                <div data-test-item="lamborghini-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-land-rover" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="land-rover: 0 results" value="115">
                                                                                    <div data-test="makeFilter-land-roverCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Land Rover</div>
                                                                                                <div data-test-item="land-rover-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-lincoln" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="lincoln: 2 results" value="117">
                                                                                    <div data-test="makeFilter-lincolnCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Lincoln</div>
                                                                                                <div data-test-item="lincoln-count" class="mx-2">2</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-lotus" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="lotus: 0 results" value="119">
                                                                                    <div data-test="makeFilter-lotusCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Lotus</div>
                                                                                                <div data-test-item="lotus-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-lucid" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="lucid: 0 results" value="121">
                                                                                    <div data-test="makeFilter-lucidCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Lucid</div>
                                                                                                <div data-test-item="lucid-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-maserati" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="maserati: 0 results" value="123">
                                                                                    <div data-test="makeFilter-maseratiCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Maserati</div>
                                                                                                <div data-test-item="maserati-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-maybach" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="maybach: 0 results" value="125">
                                                                                    <div data-test="makeFilter-maybachCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Maybach</div>
                                                                                                <div data-test-item="maybach-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-mazda" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="mazda: 44 results" value="127">
                                                                                    <div data-test="makeFilter-mazdaCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Mazda</div>
                                                                                                <div data-test-item="mazda-count" class="mx-2">44</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-mclaren" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="mclaren: 0 results" value="129">
                                                                                    <div data-test="makeFilter-mclarenCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>McLaren</div>
                                                                                                <div data-test-item="mclaren-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-mercury" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="mercury: 0 results" value="131">
                                                                                    <div data-test="makeFilter-mercuryCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Mercury</div>
                                                                                                <div data-test-item="mercury-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-mini" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="mini: 1 results" value="133">
                                                                                    <div data-test="makeFilter-miniCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>MINI</div>
                                                                                                <div data-test-item="mini-count" class="mx-2">1</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-mitsubishi" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="mitsubishi: 0 results" value="135">
                                                                                    <div data-test="makeFilter-mitsubishiCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Mitsubishi</div>
                                                                                                <div data-test-item="mitsubishi-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-nissan" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="nissan: 15 results" value="137">
                                                                                    <div data-test="makeFilter-nissanCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Nissan</div>
                                                                                                <div data-test-item="nissan-count" class="mx-2">15</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-oldsmobile" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="oldsmobile: 0 results" value="139">
                                                                                    <div data-test="makeFilter-oldsmobileCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Oldsmobile</div>
                                                                                                <div data-test-item="oldsmobile-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-plymouth" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="plymouth: 0 results" value="141">
                                                                                    <div data-test="makeFilter-plymouthCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Plymouth</div>
                                                                                                <div data-test-item="plymouth-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-polestar" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="polestar: 0 results" value="143">
                                                                                    <div data-test="makeFilter-polestarCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Polestar</div>
                                                                                                <div data-test-item="polestar-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-pontiac" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="pontiac: 0 results" value="145">
                                                                                    <div data-test="makeFilter-pontiacCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Pontiac</div>
                                                                                                <div data-test-item="pontiac-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-porsche" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="porsche: 0 results" value="147">
                                                                                    <div data-test="makeFilter-porscheCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Porsche</div>
                                                                                                <div data-test-item="porsche-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-ram" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="ram: 8 results" value="149">
                                                                                    <div data-test="makeFilter-ramCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Ram</div>
                                                                                                <div data-test-item="ram-count" class="mx-2">8</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-rivian" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="rivian: 0 results" value="151">
                                                                                    <div data-test="makeFilter-rivianCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Rivian</div>
                                                                                                <div data-test-item="rivian-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-rolls-royce" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="rolls-royce: 0 results" value="153">
                                                                                    <div data-test="makeFilter-rolls-royceCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Rolls-Royce</div>
                                                                                                <div data-test-item="rolls-royce-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-saab" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="saab: 0 results" value="155">
                                                                                    <div data-test="makeFilter-saabCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Saab</div>
                                                                                                <div data-test-item="saab-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-saturn" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="saturn: 0 results" value="157">
                                                                                    <div data-test="makeFilter-saturnCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Saturn</div>
                                                                                                <div data-test-item="saturn-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-scion" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="scion: 0 results" value="159">
                                                                                    <div data-test="makeFilter-scionCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Scion</div>
                                                                                                <div data-test-item="scion-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-smart" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="smart: 0 results" value="161">
                                                                                    <div data-test="makeFilter-smartCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>smart</div>
                                                                                                <div data-test-item="smart-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-subaru" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="subaru: 10 results" value="163">
                                                                                    <div data-test="makeFilter-subaruCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Subaru</div>
                                                                                                <div data-test-item="subaru-count" class="mx-2">10</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-suzuki" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="suzuki: 0 results" value="165">
                                                                                    <div data-test="makeFilter-suzukiCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Suzuki</div>
                                                                                                <div data-test-item="suzuki-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-tesla" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="tesla: 6 results" value="167">
                                                                                    <div data-test="makeFilter-teslaCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Tesla</div>
                                                                                                <div data-test-item="tesla-count" class="mx-2">6</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-vinfast" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="vinfast: 0 results" value="169">
                                                                                    <div data-test="makeFilter-vinfastCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>VinFast</div>
                                                                                                <div data-test-item="vinfast-count" class="mx-2">0</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-volkswagen" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="volkswagen: 10 results" value="171">
                                                                                    <div data-test="makeFilter-volkswagenCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Volkswagen</div>
                                                                                                <div data-test-item="volkswagen-count" class="mx-2">10</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-volvo" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="volvo: 2 results" value="173">
                                                                                    <div data-test="makeFilter-volvoCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Volvo</div>
                                                                                                <div data-test-item="volvo-count" class="mx-2">2</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mx-3 border-t px-3 py-3">
                                                <h3 class="heading-4 normal-case mb-2-5"><span class="flex items-center gap-1">Certified Pre-Owned<button data-test="infoButtonButton" aria-label="Info" color="secondary" class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)] h-[18px] w-[18px]" style="--info-border-color: black;"><svg viewBox="0 0 24 24" class="icon icon-fill-default flex-shrink-0" aria-hidden="true" style="width: 18px; height: 18px;">
                                                                <use href="#info"></use>
                                                            </svg></button></span></h3>
                                                <div data-test="checkboxField" class="field-container-challenger"><label data-test="certifiedPreOwnedCheckbox" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" value="176">
                                                        <div data-test="certifiedPreOwnedCheckboxCheckbox" class="indicator-wrapper">
                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                    <use href="#check"></use>
                                                                </svg></div>
                                                        </div>
                                                        <div class="custom-control-description">
                                                            <div class="">
                                                                <div class="flex justify-between"><span><span class="flex items-center gap-1"><svg viewBox="0 0 24 24" class="icon icon-fill-default fill-purple" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                <use href="#verified-fill"></use>
                                                                            </svg>CPO</span></span><span class="ml-2">53</span></div>
                                                                <div class="text-sm text-muted"></div>
                                                            </div>
                                                        </div>
                                                    </label></div>
                                            </div>
                                            <div class="expandable-list-item -mx-3 border-t px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="fuelTypeFilter">
                                                    <h3 class="heading-4 normal-case w-full px-3 py-3">Fuel Type</h3><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <div class="flex flex-col" data-test="fuelTypeFilterOptions">
                                                            <div class="flex justify-between">
                                                                <p id="179" class="text-muted">All Fuel Types</p>
                                                                <div class="toggle" aria-label="Show results for all fuel types"><input aria-labelledby="179" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-Electric" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Electric: 31 results" value="182">
                                                                            <div data-test="fuelTypeFilter-ElectricCheckbox" class="indicator-wrapper flex my-auto">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center">
                                                                                                <div><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[5px] text-[#1FA85D]" aria-hidden="true" data-test="filterIconBolt" style="width: 23px; height: 23px;">
                                                                                                        <use href="#bolt-fill"></use>
                                                                                                    </svg></div>Electric vehicle (EV)
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-test-item="Electric-count" class="ml-2">31</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-Plug-In Hybrid" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Plug-In Hybrid: 5 results" value="185">
                                                                            <div data-test="fuelTypeFilter-Plug-In HybridCheckbox" class="indicator-wrapper flex my-auto">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center">
                                                                                                <div><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[5px] text-[#000]" aria-hidden="true" data-test="filterIconPlug" style="width: 24px; height: 24px;">
                                                                                                        <use href="#plug-fill"></use>
                                                                                                    </svg></div>Plug-in electric vehicle (PHEV)
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-test-item="Plug-In Hybrid-count" class="ml-2">5</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-Hybrid" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Hybrid: 11 results" value="188">
                                                                            <div data-test="fuelTypeFilter-HybridCheckbox" class="indicator-wrapper flex my-auto">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center">
                                                                                                <div><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[5px] text-[#000]" aria-hidden="true" data-test="filterIconLeaf" style="width: 23px; height: 23px;">
                                                                                                        <use href="#leaf-fill"></use>
                                                                                                    </svg></div>Hybrid
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-test-item="Hybrid-count" class="ml-2">11</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-Gas" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Gas: 270 results" value="191">
                                                                            <div data-test="fuelTypeFilter-GasCheckbox" class="indicator-wrapper flex my-auto">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center">
                                                                                                <div><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[5px] text-[#000]" aria-hidden="true" data-test="filterIconLocalGasStation" style="width: 22px; height: 22px;">
                                                                                                        <use href="#local_gas_station-fill"></use>
                                                                                                    </svg></div>Gas
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-test-item="Gas-count" class="ml-2">270</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-Diesel" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Diesel: 9 results" value="194">
                                                                            <div data-test="fuelTypeFilter-DieselCheckbox" class="indicator-wrapper flex my-auto">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center">
                                                                                                <div><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[5px] text-[#000]" aria-hidden="true" data-test="filterIconOilBarrel" style="width: 22px; height: 22px;">
                                                                                                        <use href="#oil_barrel-fill"></use>
                                                                                                    </svg></div>Diesel
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-test-item="Diesel-count" class="ml-2">9</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-CNG" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="CNG: 0 results" value="197">
                                                                            <div data-test="fuelTypeFilter-CNGCheckbox" class="indicator-wrapper flex my-auto">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center">
                                                                                                <div><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[5px] text-[#000]" aria-hidden="true" data-test="filterIconGasMeter" style="width: 22px; height: 22px;">
                                                                                                        <use href="#gas_meter-fill"></use>
                                                                                                    </svg></div>CNG
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-test-item="CNG-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-Hydrogen" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Hydrogen: 0 results" value="200">
                                                                            <div data-test="fuelTypeFilter-HydrogenCheckbox" class="indicator-wrapper flex my-auto">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center">
                                                                                                <div><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[5px] text-[#000]" aria-hidden="true" data-test="filterIconWaterDrop" style="width: 22px; height: 22px;">
                                                                                                        <use href="#water_drop-fill"></use>
                                                                                                    </svg></div>Hydrogen
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-test-item="Hydrogen-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item -mx-3 border-t px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                                    <h3 class="heading-4 normal-case w-full px-3 py-3">Exterior Color</h3><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <div class="flex flex-col">
                                                            <div class="flex justify-between">
                                                                <p id="203" class="text-muted">All Exterior Colors</p>
                                                                <div class="toggle" aria-label="Show results for all exterior colors"><input aria-labelledby="203" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Beige: 0 results" value="206">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#CFC8BE] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Beige</div>
                                                                                        </div>
                                                                                        <div data-test-item="Beige-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Black: 65 results" value="208">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#1B1C20] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Black</div>
                                                                                        </div>
                                                                                        <div data-test-item="Black-count" class="ml-2">65</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Blue: 34 results" value="210">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#2A4679] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Blue</div>
                                                                                        </div>
                                                                                        <div data-test-item="Blue-count" class="ml-2">34</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Brown: 0 results" value="212">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#513D3C] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Brown</div>
                                                                                        </div>
                                                                                        <div data-test-item="Brown-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Copper: 0 results" value="214">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#B87333] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Copper</div>
                                                                                        </div>
                                                                                        <div data-test-item="Copper-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Gold: 0 results" value="216">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#C6A655] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Gold</div>
                                                                                        </div>
                                                                                        <div data-test-item="Gold-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Gray: 80 results" value="218">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#838288] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Gray</div>
                                                                                        </div>
                                                                                        <div data-test-item="Gray-count" class="ml-2">80</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Green: 6 results" value="220">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#0E502C] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Green</div>
                                                                                        </div>
                                                                                        <div data-test-item="Green-count" class="ml-2">6</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Maroon: 0 results" value="222">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#560D22] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Maroon</div>
                                                                                        </div>
                                                                                        <div data-test-item="Maroon-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Orange: 3 results" value="224">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#CD5A31] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Orange</div>
                                                                                        </div>
                                                                                        <div data-test-item="Orange-count" class="ml-2">3</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Purple: 0 results" value="226">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#411E5A] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Purple</div>
                                                                                        </div>
                                                                                        <div data-test-item="Purple-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Red: 36 results" value="228">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#AE081F] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Red</div>
                                                                                        </div>
                                                                                        <div data-test-item="Red-count" class="ml-2">36</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Silver: 25 results" value="230">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#D1D1D4] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Silver</div>
                                                                                        </div>
                                                                                        <div data-test-item="Silver-count" class="ml-2">25</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Tan: 1 results" value="232">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#E8D8BE] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Tan</div>
                                                                                        </div>
                                                                                        <div data-test-item="Tan-count" class="ml-2">1</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Teal: 0 results" value="234">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#245566] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Teal</div>
                                                                                        </div>
                                                                                        <div data-test-item="Teal-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Undetermined: 0 results" value="236">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-1" aria-hidden="true" data-test="noColorIcon" style="width: 16px; height: 16px;">
                                                                                                    <use href="#block"></use>
                                                                                                </svg>Undetermined</div>
                                                                                        </div>
                                                                                        <div data-test-item="Undetermined-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="White: 73 results" value="239">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#F7F7F9] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>White</div>
                                                                                        </div>
                                                                                        <div data-test-item="White-count" class="ml-2">73</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Yellow: 0 results" value="241">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#F0C834] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Yellow</div>
                                                                                        </div>
                                                                                        <div data-test-item="Yellow-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Unknown: 3 results" value="243">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-1" aria-hidden="true" data-test="noColorIcon" style="width: 16px; height: 16px;">
                                                                                                    <use href="#block"></use>
                                                                                                </svg>Unknown</div>
                                                                                        </div>
                                                                                        <div data-test-item="Unknown-count" class="ml-2">3</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item -mx-3 border-t px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="true" data-test="priceRatingFilter">
                                                    <h3 class="heading-4 normal-case w-full px-3 py-3">Price Rating</h3><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="up" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_up"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse show">
                                                    <div class="px-3 py-3 expandable-list-item-shadow expandable-list-item-shadow-open">
                                                        <div class="flex flex-col" data-test="priceRatingFilterOptions">
                                                            <div class="flex justify-between">
                                                                <p id="246" class="text-muted">All Price Ratings<button data-test="infoButtonButton" aria-label="Info" color="secondary" class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)] ml-1" style="--info-border-color: black;"><svg viewBox="0 0 24 24" class="icon icon-fill-default flex-shrink-0" aria-hidden="true" style="width: 18px; height: 18px;">
                                                                            <use href="#info"></use>
                                                                        </svg></button></p>
                                                                <div class="toggle" aria-label="Show results for all price ratings"><input aria-labelledby="246" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="priceRatingFilter-excellent" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="excellent: 93 results" value="250">
                                                                            <div data-test="priceRatingFilter-excellentCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="flex items-center">
                                                                                                <div class="graph-icon-container graph-icon-bucket-one mr-1" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                                        <use href="#caret-double-down"></use>
                                                                                                    </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1">Excellent Price</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-test-item="excellent-count" class="ml-2">93</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="priceRatingFilter-great" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="great: 119 results" value="253">
                                                                            <div data-test="priceRatingFilter-greatCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="flex items-center">
                                                                                                <div class="graph-icon-container graph-icon-bucket-two mr-1" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                                        <use href="#arrow_drop_down"></use>
                                                                                                    </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1">Great Price</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-test-item="great-count" class="ml-2">119</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="priceRatingFilter-fair" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="fair: 82 results" value="256">
                                                                            <div data-test="priceRatingFilter-fairCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="flex items-center">
                                                                                                <div class="graph-icon-container graph-icon-bucket-three mr-1" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                                        <use href="#done"></use>
                                                                                                    </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1">Fair Price</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-test-item="fair-count" class="ml-2">82</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="priceRatingFilter-high" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="high: 32 results" value="259">
                                                                            <div data-test="priceRatingFilter-highCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="flex items-center">
                                                                                                <div class="graph-icon-container graph-icon-bucket-four mr-1" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                                        <use href="#arrow_drop_up"></use>
                                                                                                    </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1">High Price</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-test-item="high-count" class="ml-2">32</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item -mx-3 border-t px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="keyFeatures">
                                                    <h3 class="heading-4 normal-case w-full px-3 py-3">Popular Features</h3><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <div class="flex flex-col" data-test="keyFeaturesOptions">
                                                            <div class="flex justify-between">
                                                                <p id="262" class="text-muted">All Popular Features</p>
                                                                <div class="toggle" aria-label="Show results for all popular features"><input aria-labelledby="262" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Adaptive Cruise Control" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Adaptive Cruise Control: 176 results" value="265">
                                                                            <div data-test="keyFeatures-Adaptive Cruise ControlCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Adaptive Cruise Control</div>
                                                                                        <div data-test-item="Adaptive Cruise Control-count" class="ml-2">176</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Android Auto" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Android Auto: 269 results" value="267">
                                                                            <div data-test="keyFeatures-Android AutoCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Android Auto</div>
                                                                                        <div data-test-item="Android Auto-count" class="ml-2">269</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Apple CarPlay" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Apple CarPlay: 272 results" value="269">
                                                                            <div data-test="keyFeatures-Apple CarPlayCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Apple CarPlay</div>
                                                                                        <div data-test-item="Apple CarPlay-count" class="ml-2">272</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Backup Camera" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Backup Camera: 314 results" value="271">
                                                                            <div data-test="keyFeatures-Backup CameraCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Backup Camera</div>
                                                                                        <div data-test-item="Backup Camera-count" class="ml-2">314</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Blind Spot System" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Blind Spot System: 238 results" value="273">
                                                                            <div data-test="keyFeatures-Blind Spot SystemCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Blind Spot System</div>
                                                                                        <div data-test-item="Blind Spot System-count" class="ml-2">238</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Bluetooth" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Bluetooth: 323 results" value="275">
                                                                            <div data-test="keyFeatures-BluetoothCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Bluetooth</div>
                                                                                        <div data-test-item="Bluetooth-count" class="ml-2">323</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Front Cooled Seats" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Front Cooled Seats: 66 results" value="277">
                                                                            <div data-test="keyFeatures-Front Cooled SeatsCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Front Cooled Seats</div>
                                                                                        <div data-test-item="Front Cooled Seats-count" class="ml-2">66</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Front Heated Seats" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Front Heated Seats: 227 results" value="279">
                                                                            <div data-test="keyFeatures-Front Heated SeatsCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Front Heated Seats</div>
                                                                                        <div data-test-item="Front Heated Seats-count" class="ml-2">227</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Lane Keep Assist" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Lane Keep Assist: 249 results" value="281">
                                                                            <div data-test="keyFeatures-Lane Keep AssistCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Lane Keep Assist</div>
                                                                                        <div data-test-item="Lane Keep Assist-count" class="ml-2">249</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Moonroof" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Moonroof: 148 results" value="283">
                                                                            <div data-test="keyFeatures-MoonroofCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Moonroof</div>
                                                                                        <div data-test-item="Moonroof-count" class="ml-2">148</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Multi-Zone Climate Control" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Multi-Zone Climate Control: 232 results" value="285">
                                                                            <div data-test="keyFeatures-Multi-Zone Climate ControlCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Multi-Zone Climate Control</div>
                                                                                        <div data-test-item="Multi-Zone Climate Control-count" class="ml-2">232</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Navigation" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Navigation: 158 results" value="287">
                                                                            <div data-test="keyFeatures-NavigationCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Navigation</div>
                                                                                        <div data-test-item="Navigation-count" class="ml-2">158</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Parking Sensors" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Parking Sensors: 169 results" value="289">
                                                                            <div data-test="keyFeatures-Parking SensorsCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Parking Sensors</div>
                                                                                        <div data-test-item="Parking Sensors-count" class="ml-2">169</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Power Trunk/Liftgate" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Power Trunk/Liftgate: 141 results" value="291">
                                                                            <div data-test="keyFeatures-Power Trunk/LiftgateCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Power Trunk/Liftgate</div>
                                                                                        <div data-test-item="Power Trunk/Liftgate-count" class="ml-2">141</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Premium Audio" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Premium Audio: 149 results" value="293">
                                                                            <div data-test="keyFeatures-Premium AudioCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Premium Audio</div>
                                                                                        <div data-test-item="Premium Audio-count" class="ml-2">149</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Premium Seat Material" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Premium Seat Material: 227 results" value="295">
                                                                            <div data-test="keyFeatures-Premium Seat MaterialCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Premium Seat Material</div>
                                                                                        <div data-test-item="Premium Seat Material-count" class="ml-2">227</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Premium Wheels" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Premium Wheels: 312 results" value="297">
                                                                            <div data-test="keyFeatures-Premium WheelsCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Premium Wheels</div>
                                                                                        <div data-test-item="Premium Wheels-count" class="ml-2">312</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Remote Engine Start" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Remote Engine Start: 223 results" value="299">
                                                                            <div data-test="keyFeatures-Remote Engine StartCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Remote Engine Start</div>
                                                                                        <div data-test-item="Remote Engine Start-count" class="ml-2">223</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Third Row Seating" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Third Row Seating: 61 results" value="301">
                                                                            <div data-test="keyFeatures-Third Row SeatingCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Third Row Seating</div>
                                                                                        <div data-test-item="Third Row Seating-count" class="ml-2">61</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Tow Hitch" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Tow Hitch: 57 results" value="303">
                                                                            <div data-test="keyFeatures-Tow HitchCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Tow Hitch</div>
                                                                                        <div data-test-item="Tow Hitch-count" class="ml-2">57</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Unknown" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Unknown: 1 results" value="305">
                                                                            <div data-test="keyFeatures-UnknownCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Unknown</div>
                                                                                        <div data-test-item="Unknown-count" class="ml-2">1</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item -mx-3 border-t px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                                    <h3 class="heading-4 normal-case w-full px-3 py-3">Condition and History</h3><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <div class="heading-4 normal-case">Reported Accidents</div>
                                                        <fieldset class="field-container-challenger" aria-invalid="false">
                                                            <legend class="sr-only">Vehicle Condition</legend><label class="form-radio-control custom-control w-full mt-3" data-test="accidentHistoryFilterRadio" data-test-item="none"><input class="form-radio-control-input custom-control-input custom-control-input-radio" type="radio" name="radio-group-308" value="none">
                                                                <div class="indicator-wrapper">
                                                                    <div class="custom-control-indicator custom-control-indicator-radio mr-2" data-test="radioIndicator"></div>
                                                                </div><span class="custom-control-description"><span class="">
                                                                        <div class="flex w-full justify-between"><span>No accidents reported</span><span>270</span></div>
                                                                    </span></span>
                                                            </label><label class="form-radio-control custom-control w-full mt-3" data-test="accidentHistoryFilterRadio" data-test-item="max-1"><input class="form-radio-control-input custom-control-input custom-control-input-radio" type="radio" name="radio-group-308" value="max-1">
                                                                <div class="indicator-wrapper">
                                                                    <div class="custom-control-indicator custom-control-indicator-radio mr-2" data-test="radioIndicator"></div>
                                                                </div><span class="custom-control-description"><span class="">
                                                                        <div class="flex w-full justify-between"><span>1 or fewer</span><span>313</span></div>
                                                                    </span></span>
                                                            </label><label class="form-radio-control custom-control w-full mt-3" data-test="accidentHistoryFilterRadio" data-test-item="any"><input class="form-radio-control-input custom-control-input custom-control-input-radio" type="radio" name="radio-group-308" value="any" checked="">
                                                                <div class="indicator-wrapper">
                                                                    <div class="custom-control-indicator custom-control-indicator-radio mr-2" data-test="radioIndicator"></div>
                                                                </div><span class="custom-control-description"><span class="">
                                                                        <div class="flex w-full justify-between"><span>Any number</span><span>326</span></div>
                                                                    </span></span>
                                                            </label>
                                                        </fieldset>
                                                        <div class="heading-4 normal-case mt-5">Title</div>
                                                        <div class="mt-3 flex justify-between">
                                                            <div class="pr-2">
                                                                <p>Show clean title only</p>
                                                                <p class="mt-1 text-sm text-muted">A vehicle that doesn't have any of the below issues</p>
                                                            </div>
                                                            <div>
                                                                <div class="toggle float-right"><input data-test="cleanToggle" aria-label="Show clean title only" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 flex justify-between">
                                                            <div data-test="checkboxField" class="field-container-challenger"><label data-test="titleHistoryFilterCheckbox" data-test-item="hide-salvage" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Salvage" value="310" checked="">
                                                                    <div data-test="titleHistoryFilterCheckboxCheckbox" class="indicator-wrapper">
                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                <use href="#check"></use>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="custom-control-description">
                                                                        <div class="">Salvage </div>
                                                                    </div>
                                                                </label>
                                                                <div class="pl-4 pr-2">
                                                                    <p class="mt-1 mr-5 text-sm text-muted">Significant damage or totaled</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 flex justify-between">
                                                            <div data-test="checkboxField" class="field-container-challenger"><label data-test="titleHistoryFilterCheckbox" data-test-item="hide-lemon" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Lemon" value="312" checked="">
                                                                    <div data-test="titleHistoryFilterCheckboxCheckbox" class="indicator-wrapper">
                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                <use href="#check"></use>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="custom-control-description">
                                                                        <div class="">Lemon </div>
                                                                    </div>
                                                                </label>
                                                                <div class="pl-4 pr-2">
                                                                    <p class="mt-1 mr-5 text-sm text-muted">A condition where the automaker buys back the car due to warranty defects</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 flex justify-between">
                                                            <div data-test="checkboxField" class="field-container-challenger"><label data-test="titleHistoryFilterCheckbox" data-test-item="hide-theft-recovery" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Theft Recovery" value="314" checked="">
                                                                    <div data-test="titleHistoryFilterCheckboxCheckbox" class="indicator-wrapper">
                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                <use href="#check"></use>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="custom-control-description">
                                                                        <div class="">Theft Recovery </div>
                                                                    </div>
                                                                </label>
                                                                <div class="pl-4 pr-2">
                                                                    <p class="mt-1 mr-5 text-sm text-muted">Any vehicle that has been stolen from its owner and then found</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 flex justify-between">
                                                            <div data-test="checkboxField" class="field-container-challenger"><label data-test="titleHistoryFilterCheckbox" data-test-item="hide-frame-damage" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Frame Damage" value="316" checked="">
                                                                    <div data-test="titleHistoryFilterCheckboxCheckbox" class="indicator-wrapper">
                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                <use href="#check"></use>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="custom-control-description">
                                                                        <div class="">Frame Damage </div>
                                                                    </div>
                                                                </label>
                                                                <div class="pl-4 pr-2">
                                                                    <p class="mt-1 mr-5 text-sm text-muted">Damage to a component of the main structure of the vehicle</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="heading-4 normal-case mt-5">Number of Owners</div>
                                                        <fieldset class="field-container-challenger" aria-invalid="false">
                                                            <legend class="sr-only">Vehicle Condition</legend><label class="form-radio-control custom-control w-full mt-3" data-test="ownerHistoryFilterRadio" data-test-item="original"><input class="form-radio-control-input custom-control-input custom-control-input-radio" type="radio" name="radio-group-318" value="original">
                                                                <div class="indicator-wrapper">
                                                                    <div class="custom-control-indicator custom-control-indicator-radio mr-2" data-test="radioIndicator"></div>
                                                                </div><span class="custom-control-description"><span class="">
                                                                        <div class="flex w-full justify-between"><span>One owner</span><span>267</span></div>
                                                                    </span></span>
                                                            </label><label class="form-radio-control custom-control w-full mt-3" data-test="ownerHistoryFilterRadio" data-test-item="max-2"><input class="form-radio-control-input custom-control-input custom-control-input-radio" type="radio" name="radio-group-318" value="max-2">
                                                                <div class="indicator-wrapper">
                                                                    <div class="custom-control-indicator custom-control-indicator-radio mr-2" data-test="radioIndicator"></div>
                                                                </div><span class="custom-control-description"><span class="">
                                                                        <div class="flex w-full justify-between"><span>2 or fewer</span><span>309</span></div>
                                                                    </span></span>
                                                            </label><label class="form-radio-control custom-control w-full mt-3" data-test="ownerHistoryFilterRadio" data-test-item="any"><input class="form-radio-control-input custom-control-input custom-control-input-radio" type="radio" name="radio-group-318" value="any" checked="">
                                                                <div class="indicator-wrapper">
                                                                    <div class="custom-control-indicator custom-control-indicator-radio mr-2" data-test="radioIndicator"></div>
                                                                </div><span class="custom-control-description"><span class="">
                                                                        <div class="flex w-full justify-between"><span>Any number</span><span>326</span></div>
                                                                    </span></span>
                                                            </label>
                                                        </fieldset>
                                                        <div class="heading-4 normal-case mt-5">Fleet &amp; Rental&nbsp;Indicator</div>
                                                        <div class="mt-3 flex justify-between">
                                                            <div data-test="checkboxField" class="field-container-challenger"><label data-test="fleetHistoryCheckbox" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Fleet Vehicles" value="319" checked="">
                                                                    <div data-test="fleetHistoryCheckboxCheckbox" class="indicator-wrapper">
                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                <use href="#check"></use>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="custom-control-description">
                                                                        <div class="">
                                                                            <div class="flex justify-between">
                                                                                <div>Fleet Vehicles</div>
                                                                                <div>72</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <div class="pl-4 pr-2">
                                                                    <p class="mt-1 text-sm text-muted">Vehicles owned or leased by a business rather than an individual</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 flex justify-between">
                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="rentalHistoryCheckbox" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Rental vehicles" value="321" checked="">
                                                                    <div data-test="rentalHistoryCheckboxCheckbox" class="indicator-wrapper">
                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                <use href="#check"></use>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="custom-control-description">
                                                                        <div class="">
                                                                            <div class="flex justify-between">
                                                                                <div>Rental Vehicles</div>
                                                                                <div>33</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <div class="pl-4 pr-2">
                                                                    <p class="mt-1 text-sm text-muted">Vehicles used in a rental capacity</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="mt-3 text-sm">Condition History data is provided by Experian AutoCheck. Use of this data is subject to the <a href="https://www.autocheck.com/vehiclehistory/termsAndConditions" target="_blank">AutoCheck Terms &amp; Conditions.</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item -mx-3 border-t px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                                    <h3 class="heading-4 normal-case w-full px-3 py-3">Transmission</h3><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <div class="flex flex-col">
                                                            <div class="flex justify-between">
                                                                <p id="323" class="text-muted">All Transmissions</p>
                                                                <div class="toggle" aria-label="Show results for all transmissions"><input aria-labelledby="323" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Automatic: 315 results" value="326">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Automatic</div>
                                                                                        <div data-test-item="Automatic-count" class="ml-2">315</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Manual: 11 results" value="328">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Manual</div>
                                                                                        <div data-test-item="Manual-count" class="ml-2">11</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item -mx-3 border-t px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                                    <h3 class="heading-4 normal-case w-full px-3 py-3">Drive Type</h3><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <div class="flex flex-col">
                                                            <div class="flex justify-between">
                                                                <p id="330" class="text-muted">All Drive Types</p>
                                                                <div class="toggle" aria-label="Show results for all drive types"><input aria-labelledby="330" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="4WD: 51 results" value="333">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>4WD</div>
                                                                                        <div data-test-item="4WD-count" class="ml-2">51</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="AWD: 98 results" value="335">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>AWD</div>
                                                                                        <div data-test-item="AWD-count" class="ml-2">98</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="FWD: 124 results" value="337">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>FWD</div>
                                                                                        <div data-test-item="FWD-count" class="ml-2">124</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="RWD: 53 results" value="339">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>RWD</div>
                                                                                        <div data-test-item="RWD-count" class="ml-2">53</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Unknown: 0 results" value="341">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Unknown</div>
                                                                                        <div data-test-item="Unknown-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item -mx-3 border-t px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                                    <h3 class="heading-4 normal-case w-full px-3 py-3">Engine</h3><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <div class="flex flex-col">
                                                            <div class="flex justify-between">
                                                                <p id="343" class="text-muted">All Engines</p>
                                                                <div class="toggle" aria-label="Show results for all engines"><input aria-labelledby="343" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Electric: 31 results" value="346">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Electric</div>
                                                                                        <div data-test-item="Electric-count" class="ml-2">31</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Hybrid: 11 results" value="348">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Hybrid</div>
                                                                                        <div data-test-item="Hybrid-count" class="ml-2">11</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Hydrogen: 0 results" value="350">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Hydrogen</div>
                                                                                        <div data-test-item="Hydrogen-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="10 Cylinder: 0 results" value="352">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>10 Cylinder</div>
                                                                                        <div data-test-item="10 Cylinder-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="12 Cylinder: 0 results" value="354">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>12 Cylinder</div>
                                                                                        <div data-test-item="12 Cylinder-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="2 Cylinder: 0 results" value="356">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>2 Cylinder</div>
                                                                                        <div data-test-item="2 Cylinder-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="3 Cylinder: 11 results" value="358">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>3 Cylinder</div>
                                                                                        <div data-test-item="3 Cylinder-count" class="ml-2">11</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="4 Cylinder: 167 results" value="360">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>4 Cylinder</div>
                                                                                        <div data-test-item="4 Cylinder-count" class="ml-2">167</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="5 Cylinder: 0 results" value="362">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>5 Cylinder</div>
                                                                                        <div data-test-item="5 Cylinder-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="6 Cylinder: 87 results" value="364">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>6 Cylinder</div>
                                                                                        <div data-test-item="6 Cylinder-count" class="ml-2">87</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="8 Cylinder: 30 results" value="366">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>8 Cylinder</div>
                                                                                        <div data-test-item="8 Cylinder-count" class="ml-2">30</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Rotary: 0 results" value="368">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Rotary</div>
                                                                                        <div data-test-item="Rotary-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Unknown: 0 results" value="370">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Unknown</div>
                                                                                        <div data-test-item="Unknown-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item -mx-3 border-t px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                                    <h3 class="heading-4 normal-case w-full px-3 py-3">Interior Color</h3><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <div class="flex flex-col">
                                                            <div class="flex justify-between">
                                                                <p id="372" class="text-muted">All Interior Colors</p>
                                                                <div class="toggle" aria-label="Show results for all interior colors"><input aria-labelledby="372" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="#N/A: 0 results" value="375">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>#N/A</div>
                                                                                        </div>
                                                                                        <div data-test-item="#N/A-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Beige: 14 results" value="377">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#CFC8BE] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Beige</div>
                                                                                        </div>
                                                                                        <div data-test-item="Beige-count" class="ml-2">14</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Black: 245 results" value="379">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#1B1C20] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Black</div>
                                                                                        </div>
                                                                                        <div data-test-item="Black-count" class="ml-2">245</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Blue: 1 results" value="381">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#2A4679] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Blue</div>
                                                                                        </div>
                                                                                        <div data-test-item="Blue-count" class="ml-2">1</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Brown: 7 results" value="383">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#513D3C] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Brown</div>
                                                                                        </div>
                                                                                        <div data-test-item="Brown-count" class="ml-2">7</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Gray: 49 results" value="385">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#838288] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Gray</div>
                                                                                        </div>
                                                                                        <div data-test-item="Gray-count" class="ml-2">49</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Green: 1 results" value="387">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#0E502C] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Green</div>
                                                                                        </div>
                                                                                        <div data-test-item="Green-count" class="ml-2">1</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Grey: 0 results" value="389">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Grey</div>
                                                                                        </div>
                                                                                        <div data-test-item="Grey-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Orange: 0 results" value="391">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#CD5A31] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Orange</div>
                                                                                        </div>
                                                                                        <div data-test-item="Orange-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Pink: 0 results" value="393">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#D89BAB] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Pink</div>
                                                                                        </div>
                                                                                        <div data-test-item="Pink-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Purple: 0 results" value="395">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#411E5A] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Purple</div>
                                                                                        </div>
                                                                                        <div data-test-item="Purple-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Red: 4 results" value="397">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#AE081F] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Red</div>
                                                                                        </div>
                                                                                        <div data-test-item="Red-count" class="ml-2">4</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Silver: 0 results" value="399">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#D1D1D4] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Silver</div>
                                                                                        </div>
                                                                                        <div data-test-item="Silver-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="White: 2 results" value="401">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#F7F7F9] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>White</div>
                                                                                        </div>
                                                                                        <div data-test-item="White-count" class="ml-2">2</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Yellow: 0 results" value="403">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><i data-test="coloredCircle" class="rounded-full mr-1 bg-[#F0C834] inline-block h-[16px] w-[16px] border border-[#e5e5e5]"></i>Yellow</div>
                                                                                        </div>
                                                                                        <div data-test-item="Yellow-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Unknown: 3 results" value="405">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>
                                                                                            <div class="mr-2 flex items-center"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-1" aria-hidden="true" data-test="noColorIcon" style="width: 16px; height: 16px;">
                                                                                                    <use href="#block"></use>
                                                                                                </svg>Unknown</div>
                                                                                        </div>
                                                                                        <div data-test-item="Unknown-count" class="ml-2">3</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item -mx-3 border-t px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                                    <h3 class="heading-4 normal-case w-full px-3 py-3">Bed Length</h3><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <div class="flex flex-col">
                                                            <div class="flex justify-between">
                                                                <p id="408" class="text-muted">All Bed Lengths</p>
                                                                <div class="toggle" aria-label="Show results for all bed lengths"><input aria-labelledby="408" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Long Bed: 3 results" value="411">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Long Bed</div>
                                                                                        <div data-test-item="Long Bed-count" class="ml-2">3</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Short Bed: 24 results" value="413">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Short Bed</div>
                                                                                        <div data-test-item="Short Bed-count" class="ml-2">24</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Standard Bed: 11 results" value="415">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Standard Bed</div>
                                                                                        <div data-test-item="Standard Bed-count" class="ml-2">11</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item -mx-3 border-t px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                                    <h3 class="heading-4 normal-case w-full px-3 py-3">Cab Type</h3><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <div class="flex flex-col">
                                                            <div class="flex justify-between">
                                                                <p id="417" class="text-muted">All Cab Types</p>
                                                                <div class="toggle" aria-label="Show results for all cab types"><input aria-labelledby="417" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Crew Cab: 34 results" value="420">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Crew Cab</div>
                                                                                        <div data-test-item="Crew Cab-count" class="ml-2">34</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Extended Cab: 1 results" value="422">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Extended Cab</div>
                                                                                        <div data-test-item="Extended Cab-count" class="ml-2">1</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Regular Cab: 3 results" value="424">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Regular Cab</div>
                                                                                        <div data-test-item="Regular Cab-count" class="ml-2">3</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item -mx-3 border-t px-0"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                                                    <h3 class="heading-4 normal-case w-full px-3 py-3">Roof Height</h3><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <div class="flex flex-col">
                                                            <div class="flex justify-between">
                                                                <p id="426" class="text-muted">All Roof Heights</p>
                                                                <div class="toggle" aria-label="Show results for all roof heights"><input aria-labelledby="426" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="High: 2 results" value="429">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>High</div>
                                                                                        <div data-test-item="High-count" class="ml-2">2</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Medium: 0 results" value="431">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Medium</div>
                                                                                        <div data-test-item="Medium-count" class="ml-2">0</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Standard: 2 results" value="433">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Standard</div>
                                                                                        <div data-test-item="Standard-count" class="ml-2">2</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-9">
                                    <div class="relative mt-2 rounded bg-black bg-no-repeat first:mt-0 bg-[position:calc(100%_+_80px)_center] bg-[auto_80%] min-[460px]:bg-[position:calc(100%_-_20px)_center] md:bg-contain md:bg-[position:calc(100%_-_20px)_20px] xl:bg-[position:calc(100%_-_30px)_20px] bg-[image:var(--image-url)] md:bg-[image:var(--image-url-md)]" style="--image-url: url(assets/_next/static/images/phones-shifted-bab17d216a252e4741b5734a06752736.png); --image-url-md: url(assets/_next/static/images/phones-shifted-bab17d216a252e4741b5734a06752736.png);">
                                        <div class="p-3 xl:p-4">
                                            <div class="relative mb-2-5">
                                                <div class="picture-container" style="padding-bottom: 0px; width: 506px; height: 76px;"><img class="picture-inner picture-svg" src="assets/_next/static/images/title-33a62f6737e22aa8090974958980f23b.svg" alt="Buy 100% online. Have it delivered."></div><button data-test="infoButtonButton" aria-label="Info" color="secondary" class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)] absolute z-1 bottom-[13px] ml-[-60px]" style="--info-border-color: white;"><svg viewBox="0 0 24 24" class="icon icon-fill-default flex-shrink-0 fill-white" aria-hidden="true" style="width: 18px; height: 18px;">
                                                        <use href="#info"></use>
                                                    </svg></button>
                                            </div>
                                            <div class="picture-container" style="padding-bottom: 0px; width: 107px; height: 18px;"><img class="picture-inner picture-svg" src="assets/_next/static/images/tc-plus-dark-theme-logo-f9a028938a01d05a636e4a5a8a188099.svg" alt="TrueCar Plus"></div>
                                        </div><label id="tcplus-banner-buyonline-toggle-label" data-test="tcplusBannerToggle" class="flex h-[48px] w-full items-center justify-center gap-2 px-3 text-white border-t border-t-[color:#4c4c4c] bg-[rgba(35,35,35,0.5)] backdrop-blur-lg rounded-b focus-visible:rounded max-md:text-sm max-sm:justify-between">See cars you can buy online<div class="toggle"><input aria-labelledby="tcplus-banner-buyonline-toggle-label" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input" checked=""><span class="toggle-track toggle-track-dark"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                            <use href="#check"></use>
                                                        </svg></span></span></div></label>
                                    </div>
                                    <div class="md:pt-2">
                                        <div class="flex items-center justify-between">
                                            <div data-test="marketplaceSrpResultsHeading">
                                                <h2 class="heading-base"><span class="hidden-sm-down">Showing 1 – 30 of <span data-test="marketplaceSrpListingsTotalCount">326</span> Listings</span><span class="hidden-md-up">326 Listings</span></h2>
                                            </div><label class="flex items-center justify-between">
                                                <div class="text-muted">Sort By</div>
                                                <div class="field-container-challenger w-[118px]">
                                                    <div class="field-wrapper-challenger">
                                                        <div class="field-content-row field-with-suffix">
                                                            <div class="field-input-label-challenger input-label-select"><select required="" aria-label="Sort By" class="form-select-element-challenger form-select-no-border form-select-no-label form-select-borderless" tabindex="0" data-test="searchResultsSortField" style="width: 119px;">
                                                                    <option value="best_match">Best Match</option>
                                                                    <option value="best_deal_desc_script">Best Deal</option>
                                                                    <option value="price_asc">Price Low to High</option>
                                                                    <option value="price_desc">Price High to Low</option>
                                                                    <option value="mileage_asc">Mileage Low to High</option>
                                                                    <option value="mileage_desc">Mileage High to Low</option>
                                                                    <option value="year_asc">Year Low to High</option>
                                                                    <option value="year_desc">Year High to Low</option>
                                                                    <option value="created_date_desc">Newly Listed</option>
                                                                </select></div>
                                                            <div class="field-addon-challenger field-addon-challenger-suffix field-addon-challenger-suffix-inaccessible"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                    <use href="#arrow_drop_down"></use>
                                                                </svg></div>
                                                        </div>
                                                        <div class="field-message-challenger">
                                                            <div class="field-message-text-challenger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div data-test="allVehicleListings" data-loading="false">
                                            <ul class="row mb-3 mt-1">
                                                <li class="mt-2 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2020 Jeep Wrangler, Unlimited Sahara" data-test="usedListing" data-test-item="1C4HJXEN3LW195431" data-test-dealerid="6011">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.5625%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.5625%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-860.jpg" alt="" role="presentation" loading="eager" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2020 Jeep</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Wrangler Unlimited Sahara</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$26,995</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>54k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2020 Jeep Wrangler, Unlimited Sahara" href="/used-cars-for-sale/listing/1C4HJXEN3LW195431/2020-jeep-wrangler/?position=0&amp;sourceType=marketplace&amp;sponsored=true"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mx-1 mt-3 w-full md:hidden"></li>
                                                <li class="mt-2 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2020 Kia Niro EV, EX Premium" data-test="usedListing" data-test-item="KNDCE3LG1L5060854" data-test-dealerid="8849">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2020 Kia</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Niro EV EX Premium</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$17,209</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>49k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-456" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-456">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2020 Kia Niro EV, EX Premium" href="/used-cars-for-sale/listing/KNDCE3LG1L5060854/2020-kia-niro-ev/?position=1&amp;sourceType=marketplace&amp;sponsored=true"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-2 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2018 Tesla Model 3, Performance Dual Motor" data-test="usedListing" data-test-item="5YJ3E1EB2JF171107" data-test-dealerid="8849">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2018 Tesla</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Model 3 Performance Dual Motor</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$31,818</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>15k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-466" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-466">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2018 Tesla Model 3, Performance Dual Motor" href="/used-cars-for-sale/listing/5YJ3E1EB2JF171107/2018-tesla-model-3/?position=2&amp;sourceType=marketplace&amp;sponsored=true"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow xl:hidden col-md-6 col-xl-4">
                                                    <div class="h-full w-full rounded bg-black bg-no-repeat p-3 bg-[auto_100%] bg-[position:calc(100%_+_48px)_calc(100%_+_20px)] min-[460px]:bg-[position:calc(100%_-_10px)_calc(100%_+_20px)] sm:bg-[position:calc(100%_-_20px)_calc(100%_+_20px)] md:bg-[size:70%] md:bg-[position:calc(100%_-_20px)_calc(100%_+_5px)] bg-[image:var(--image-url)] sm:bg-[image:var(--image-url-sm)]" style="--image-url: url(assets/_next/static/images/phones-shifted-bab17d216a252e4741b5734a06752736.png); --image-url-sm: url(assets/_next/static/images/phones-shifted-bab17d216a252e4741b5734a06752736.png);">
                                                        <div class="relative mb-2-5">
                                                            <div class="picture-container" style="padding-bottom: 0px; width: 268px; height: 42px;"><img class="picture-inner picture-svg" src="assets/_next/static/images/title-33a62f6737e22aa8090974958980f23b.svg" alt="Buy 100% online. Have it delivered."></div><button data-test="infoButtonButton" aria-label="Info" color="secondary" class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)] absolute z-1 bottom-[6px] ml-[-32px] scale-[80%]" style="--info-border-color: white;"><svg viewBox="0 0 24 24" class="icon icon-fill-default flex-shrink-0 fill-white" aria-hidden="true" style="width: 18px; height: 18px;">
                                                                    <use href="#info"></use>
                                                                </svg></button>
                                                        </div>
                                                        <div class="picture-container" style="padding-bottom: 0px; width: 81px; height: 14px;"><img class="picture-inner picture-svg" src="assets/_next/static/images/tc-plus-dark-theme-logo-f9a028938a01d05a636e4a5a8a188099.svg" alt="TrueCar Plus"></div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2020 Jeep Wrangler, Unlimited Sahara" data-test="usedListing" data-test-item="1C4HJXEN3LW195431" data-test-dealerid="6011">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/6011/31/54/1C4HJXEN3LW195431/PDILNQQKI6VGQXED6LFN7HOW54-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2020 Jeep</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Wrangler Unlimited Sahara</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$26,995</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>54k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2020 Jeep Wrangler, Unlimited Sahara" href="/used-cars-for-sale/listing/1C4HJXEN3LW195431/2020-jeep-wrangler/?position=0&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow hidden xl:block col-md-6 col-xl-4">
                                                    <div class="h-full w-full rounded bg-black bg-no-repeat p-3 bg-[auto_100%] bg-[position:calc(100%_+_48px)_calc(100%_+_20px)] min-[460px]:bg-[position:calc(100%_-_10px)_calc(100%_+_20px)] sm:bg-[position:calc(100%_-_20px)_calc(100%_+_20px)] md:bg-[size:70%] md:bg-[position:calc(100%_-_20px)_calc(100%_+_5px)] bg-[image:var(--image-url)] sm:bg-[image:var(--image-url-sm)]" style="--image-url: url(assets/_next/static/images/phones-shifted-bab17d216a252e4741b5734a06752736.png); --image-url-sm: url(assets/_next/static/images/phones-shifted-bab17d216a252e4741b5734a06752736.png);">
                                                        <div class="relative mb-2-5">
                                                            <div class="picture-container" style="padding-bottom: 0px; width: 268px; height: 42px;"><img class="picture-inner picture-svg" src="assets/_next/static/images/title-33a62f6737e22aa8090974958980f23b.svg" alt="Buy 100% online. Have it delivered."></div><button data-test="infoButtonButton" aria-label="Info" color="secondary" class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)] absolute z-1 bottom-[6px] ml-[-32px] scale-[80%]" style="--info-border-color: white;"><svg viewBox="0 0 24 24" class="icon icon-fill-default flex-shrink-0 fill-white" aria-hidden="true" style="width: 18px; height: 18px;">
                                                                    <use href="#info"></use>
                                                                </svg></button>
                                                        </div>
                                                        <div class="picture-container" style="padding-bottom: 0px; width: 81px; height: 14px;"><img class="picture-inner picture-svg" src="assets/_next/static/images/tc-plus-dark-theme-logo-f9a028938a01d05a636e4a5a8a188099.svg" alt="TrueCar Plus"></div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2020 Kia Niro EV, EX Premium" data-test="usedListing" data-test-item="KNDCE3LG1L5060854" data-test-dealerid="8849">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/8849/54/08/KNDCE3LG1L5060854/3ILK6JASUCTHXZ7ZIMG6KVMPXE-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2020 Kia</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Niro EV EX Premium</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$17,209</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>49k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-487" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-487">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2020 Kia Niro EV, EX Premium" href="/used-cars-for-sale/listing/KNDCE3LG1L5060854/2020-kia-niro-ev/?position=1&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2018 Tesla Model 3, Performance Dual Motor" data-test="usedListing" data-test-item="5YJ3E1EB2JF171107" data-test-dealerid="8849">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/8849/07/11/5YJ3E1EB2JF171107/ETIR3EOYYHDASUDCM3OIJERCYQ-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2018 Tesla</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Model 3 Performance Dual Motor</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$31,818</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>15k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-497" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-497">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2018 Tesla Model 3, Performance Dual Motor" href="/used-cars-for-sale/listing/5YJ3E1EB2JF171107/2018-tesla-model-3/?position=2&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2021 Chrysler Pacifica, Touring L FWD" data-test="usedListing" data-test-item="2C4RC1BG8MR531280" data-test-dealerid="8401">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/8401/80/12/2C4RC1BG8MR531280/B3XJFEGFJ7RRCVTCSWK3V6VTR4-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/8401/80/12/2C4RC1BG8MR531280/B3XJFEGFJ7RRCVTCSWK3V6VTR4-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/8401/80/12/2C4RC1BG8MR531280/B3XJFEGFJ7RRCVTCSWK3V6VTR4-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/8401/80/12/2C4RC1BG8MR531280/B3XJFEGFJ7RRCVTCSWK3V6VTR4-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/8401/80/12/2C4RC1BG8MR531280/B3XJFEGFJ7RRCVTCSWK3V6VTR4-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/8401/80/12/2C4RC1BG8MR531280/B3XJFEGFJ7RRCVTCSWK3V6VTR4-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/8401/80/12/2C4RC1BG8MR531280/B3XJFEGFJ7RRCVTCSWK3V6VTR4-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/8401/80/12/2C4RC1BG8MR531280/B3XJFEGFJ7RRCVTCSWK3V6VTR4-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2021 Chrysler</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Pacifica Touring L FWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$19,405</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>78k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2021 Chrysler Pacifica, Touring L FWD" href="/used-cars-for-sale/listing/2C4RC1BG8MR531280/2021-chrysler-pacifica/?position=6&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2019 Nissan Armada, SV RWD" data-test="usedListing" data-test-item="JN8AY2ND9K9089767" data-test-dealerid="8401">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/8401/67/97/JN8AY2ND9K9089767/EUS6PFS5UDKPTKD2IX4MOUFIY4-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/8401/67/97/JN8AY2ND9K9089767/EUS6PFS5UDKPTKD2IX4MOUFIY4-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/8401/67/97/JN8AY2ND9K9089767/EUS6PFS5UDKPTKD2IX4MOUFIY4-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/8401/67/97/JN8AY2ND9K9089767/EUS6PFS5UDKPTKD2IX4MOUFIY4-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/8401/67/97/JN8AY2ND9K9089767/EUS6PFS5UDKPTKD2IX4MOUFIY4-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/8401/67/97/JN8AY2ND9K9089767/EUS6PFS5UDKPTKD2IX4MOUFIY4-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/8401/67/97/JN8AY2ND9K9089767/EUS6PFS5UDKPTKD2IX4MOUFIY4-cr-860.jpg 860w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2019 Nissan</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Armada SV RWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$20,619</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>49k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2019 Nissan Armada, SV RWD" href="/used-cars-for-sale/listing/JN8AY2ND9K9089767/2019-nissan-armada/?position=7&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2020 Chevrolet Camaro, LT with 1LT Coupe" data-test="usedListing" data-test-item="1G1FA1RX4L0135377" data-test-dealerid="107807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/107807/77/53/1G1FA1RX4L0135377/MAZ6ZMGBRKSDNTPYAJ3MDGFMVU-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/107807/77/53/1G1FA1RX4L0135377/MAZ6ZMGBRKSDNTPYAJ3MDGFMVU-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/107807/77/53/1G1FA1RX4L0135377/MAZ6ZMGBRKSDNTPYAJ3MDGFMVU-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/107807/77/53/1G1FA1RX4L0135377/MAZ6ZMGBRKSDNTPYAJ3MDGFMVU-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/107807/77/53/1G1FA1RX4L0135377/MAZ6ZMGBRKSDNTPYAJ3MDGFMVU-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/107807/77/53/1G1FA1RX4L0135377/MAZ6ZMGBRKSDNTPYAJ3MDGFMVU-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/107807/77/53/1G1FA1RX4L0135377/MAZ6ZMGBRKSDNTPYAJ3MDGFMVU-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/107807/77/53/1G1FA1RX4L0135377/MAZ6ZMGBRKSDNTPYAJ3MDGFMVU-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2020 Chevrolet</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Camaro LT with 1LT Coupe</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$21,950</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>30k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2020 Chevrolet Camaro, LT with 1LT Coupe" href="/used-cars-for-sale/listing/1G1FA1RX4L0135377/2020-chevrolet-camaro/?position=8&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2021 Audi Q5, Premium SUV" data-test="usedListing" data-test-item="WA1AAAFY6M2050782" data-test-dealerid="375669">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/375669/82/07/WA1AAAFY6M2050782/QSFMEXSX4LN4JHS5I7RUUSRUFU-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/375669/82/07/WA1AAAFY6M2050782/QSFMEXSX4LN4JHS5I7RUUSRUFU-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/375669/82/07/WA1AAAFY6M2050782/QSFMEXSX4LN4JHS5I7RUUSRUFU-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/375669/82/07/WA1AAAFY6M2050782/QSFMEXSX4LN4JHS5I7RUUSRUFU-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/375669/82/07/WA1AAAFY6M2050782/QSFMEXSX4LN4JHS5I7RUUSRUFU-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/375669/82/07/WA1AAAFY6M2050782/QSFMEXSX4LN4JHS5I7RUUSRUFU-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/375669/82/07/WA1AAAFY6M2050782/QSFMEXSX4LN4JHS5I7RUUSRUFU-cr-860.jpg 860w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2021 Audi</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Q5 Premium SUV</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$24,797</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>36k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2021 Audi Q5, Premium SUV" href="/used-cars-for-sale/listing/WA1AAAFY6M2050782/2021-audi-q5/?position=9&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2023 Ford Edge, SEL" data-test="usedListing" data-test-item="2FMPK4J92PBA02494" data-test-dealerid="50600">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/50600/94/24/2FMPK4J92PBA02494/VVWUHQ35XPVNDLOOBLUHGZCEFE-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/50600/94/24/2FMPK4J92PBA02494/VVWUHQ35XPVNDLOOBLUHGZCEFE-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/50600/94/24/2FMPK4J92PBA02494/VVWUHQ35XPVNDLOOBLUHGZCEFE-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/50600/94/24/2FMPK4J92PBA02494/VVWUHQ35XPVNDLOOBLUHGZCEFE-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/50600/94/24/2FMPK4J92PBA02494/VVWUHQ35XPVNDLOOBLUHGZCEFE-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/50600/94/24/2FMPK4J92PBA02494/VVWUHQ35XPVNDLOOBLUHGZCEFE-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/50600/94/24/2FMPK4J92PBA02494/VVWUHQ35XPVNDLOOBLUHGZCEFE-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/50600/94/24/2FMPK4J92PBA02494/VVWUHQ35XPVNDLOOBLUHGZCEFE-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2023 Ford</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Edge SEL</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$20,705</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>48k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2023 Ford Edge, SEL" href="/used-cars-for-sale/listing/2FMPK4J92PBA02494/2023-ford-edge/?position=10&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2021 Chevrolet Bolt EV, Premier" data-test="usedListing" data-test-item="1G1FZ6S08M4103299" data-test-dealerid="8401">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/8401/99/32/1G1FZ6S08M4103299/2BPV65PJPZE6SQB3V63DSHLU3A-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/8401/99/32/1G1FZ6S08M4103299/2BPV65PJPZE6SQB3V63DSHLU3A-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/8401/99/32/1G1FZ6S08M4103299/2BPV65PJPZE6SQB3V63DSHLU3A-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/8401/99/32/1G1FZ6S08M4103299/2BPV65PJPZE6SQB3V63DSHLU3A-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/8401/99/32/1G1FZ6S08M4103299/2BPV65PJPZE6SQB3V63DSHLU3A-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/8401/99/32/1G1FZ6S08M4103299/2BPV65PJPZE6SQB3V63DSHLU3A-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/8401/99/32/1G1FZ6S08M4103299/2BPV65PJPZE6SQB3V63DSHLU3A-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/8401/99/32/1G1FZ6S08M4103299/2BPV65PJPZE6SQB3V63DSHLU3A-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2021 Chevrolet</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Bolt EV Premier</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$16,649</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>32k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-552" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-552">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2021 Chevrolet Bolt EV, Premier" href="/used-cars-for-sale/listing/1G1FZ6S08M4103299/2021-chevrolet-bolt-ev/?position=11&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2018 Tesla Model 3, Long Range RWD" data-test="usedListing" data-test-item="5YJ3E1EA8JF016763" data-test-dealerid="8849">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/8849/63/67/5YJ3E1EA8JF016763/YSUBR5LG5BT5Y46QZIBOS325F4-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/8849/63/67/5YJ3E1EA8JF016763/YSUBR5LG5BT5Y46QZIBOS325F4-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/8849/63/67/5YJ3E1EA8JF016763/YSUBR5LG5BT5Y46QZIBOS325F4-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/8849/63/67/5YJ3E1EA8JF016763/YSUBR5LG5BT5Y46QZIBOS325F4-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/8849/63/67/5YJ3E1EA8JF016763/YSUBR5LG5BT5Y46QZIBOS325F4-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/8849/63/67/5YJ3E1EA8JF016763/YSUBR5LG5BT5Y46QZIBOS325F4-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/8849/63/67/5YJ3E1EA8JF016763/YSUBR5LG5BT5Y46QZIBOS325F4-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/8849/63/67/5YJ3E1EA8JF016763/YSUBR5LG5BT5Y46QZIBOS325F4-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2018 Tesla</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Model 3 Long Range RWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$21,482</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>78k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-562" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-562">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2018 Tesla Model 3, Long Range RWD" href="/used-cars-for-sale/listing/5YJ3E1EA8JF016763/2018-tesla-model-3/?position=12&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Cadillac LYRIQ, Tech with 1SA" data-test="usedListing" data-test-item="1GYKPMRK3RZ106977" data-test-dealerid="107858">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/107858/77/69/1GYKPMRK3RZ106977/7QYVOWLVUN6JGSVYC4BT424FLE-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/107858/77/69/1GYKPMRK3RZ106977/7QYVOWLVUN6JGSVYC4BT424FLE-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/107858/77/69/1GYKPMRK3RZ106977/7QYVOWLVUN6JGSVYC4BT424FLE-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/107858/77/69/1GYKPMRK3RZ106977/7QYVOWLVUN6JGSVYC4BT424FLE-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/107858/77/69/1GYKPMRK3RZ106977/7QYVOWLVUN6JGSVYC4BT424FLE-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/107858/77/69/1GYKPMRK3RZ106977/7QYVOWLVUN6JGSVYC4BT424FLE-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/107858/77/69/1GYKPMRK3RZ106977/7QYVOWLVUN6JGSVYC4BT424FLE-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/107858/77/69/1GYKPMRK3RZ106977/7QYVOWLVUN6JGSVYC4BT424FLE-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2024 Cadillac</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">LYRIQ Tech with 1SA</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$42,950</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>1k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-572" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-572">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Cadillac LYRIQ, Tech with 1SA" href="/used-cars-for-sale/listing/1GYKPMRK3RZ106977/2024-cadillac-lyriq/?position=13&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2019 Jeep Cherokee, Trailhawk 4WD" data-test="usedListing" data-test-item="1C4PJMBX1KD410380" data-test-dealerid="6011">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/6011/80/03/1C4PJMBX1KD410380/4AKY7FA77ZOBKHSKQY74XMF7GU-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/6011/80/03/1C4PJMBX1KD410380/4AKY7FA77ZOBKHSKQY74XMF7GU-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/6011/80/03/1C4PJMBX1KD410380/4AKY7FA77ZOBKHSKQY74XMF7GU-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/6011/80/03/1C4PJMBX1KD410380/4AKY7FA77ZOBKHSKQY74XMF7GU-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/6011/80/03/1C4PJMBX1KD410380/4AKY7FA77ZOBKHSKQY74XMF7GU-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/6011/80/03/1C4PJMBX1KD410380/4AKY7FA77ZOBKHSKQY74XMF7GU-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/6011/80/03/1C4PJMBX1KD410380/4AKY7FA77ZOBKHSKQY74XMF7GU-cr-860.jpg 860w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2019 Jeep</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Cherokee Trailhawk 4WD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$16,995</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>71k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2019 Jeep Cherokee, Trailhawk 4WD" href="/used-cars-for-sale/listing/1C4PJMBX1KD410380/2019-jeep-cherokee/?position=14&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2021 Audi Q5, Premium SUV" data-test="usedListing" data-test-item="WA1AAAFY8M2025110" data-test-dealerid="375669">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/375669/10/51/WA1AAAFY8M2025110/35EHWCTO5DSPWHQ543OQXTUZ2M-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/375669/10/51/WA1AAAFY8M2025110/35EHWCTO5DSPWHQ543OQXTUZ2M-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/375669/10/51/WA1AAAFY8M2025110/35EHWCTO5DSPWHQ543OQXTUZ2M-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/375669/10/51/WA1AAAFY8M2025110/35EHWCTO5DSPWHQ543OQXTUZ2M-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/375669/10/51/WA1AAAFY8M2025110/35EHWCTO5DSPWHQ543OQXTUZ2M-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/375669/10/51/WA1AAAFY8M2025110/35EHWCTO5DSPWHQ543OQXTUZ2M-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/375669/10/51/WA1AAAFY8M2025110/35EHWCTO5DSPWHQ543OQXTUZ2M-cr-860.jpg 860w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2021 Audi</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Q5 Premium SUV</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$22,985</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>49k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2021 Audi Q5, Premium SUV" href="/used-cars-for-sale/listing/WA1AAAFY8M2025110/2021-audi-q5/?position=15&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2023 Audi Q5, Premium Plus S line SUV" data-test="usedListing" data-test-item="WA1EAAFY0P2055157" data-test-dealerid="375669">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/375669/57/51/WA1EAAFY0P2055157/EVFSWAPRYS66WEDLA2V4BTZDZA-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/375669/57/51/WA1EAAFY0P2055157/EVFSWAPRYS66WEDLA2V4BTZDZA-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/375669/57/51/WA1EAAFY0P2055157/EVFSWAPRYS66WEDLA2V4BTZDZA-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/375669/57/51/WA1EAAFY0P2055157/EVFSWAPRYS66WEDLA2V4BTZDZA-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/375669/57/51/WA1EAAFY0P2055157/EVFSWAPRYS66WEDLA2V4BTZDZA-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/375669/57/51/WA1EAAFY0P2055157/EVFSWAPRYS66WEDLA2V4BTZDZA-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/375669/57/51/WA1EAAFY0P2055157/EVFSWAPRYS66WEDLA2V4BTZDZA-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/375669/57/51/WA1EAAFY0P2055157/EVFSWAPRYS66WEDLA2V4BTZDZA-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2023 Audi</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Q5 Premium Plus S line SUV</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$30,406</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>33k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2023 Audi Q5, Premium Plus S line SUV" href="/used-cars-for-sale/listing/WA1EAAFY0P2055157/2023-audi-q5/?position=16&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2021 Volkswagen Tiguan, 2.0T SEL Premium R-Line 4MOTION" data-test="usedListing" data-test-item="3VV4B7AX5MM082926" data-test-dealerid="6719">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/6719/26/29/3VV4B7AX5MM082926/5W5KPEIBTCUZJMB7WXT2LMCGNY-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/6719/26/29/3VV4B7AX5MM082926/5W5KPEIBTCUZJMB7WXT2LMCGNY-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/6719/26/29/3VV4B7AX5MM082926/5W5KPEIBTCUZJMB7WXT2LMCGNY-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/6719/26/29/3VV4B7AX5MM082926/5W5KPEIBTCUZJMB7WXT2LMCGNY-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/6719/26/29/3VV4B7AX5MM082926/5W5KPEIBTCUZJMB7WXT2LMCGNY-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/6719/26/29/3VV4B7AX5MM082926/5W5KPEIBTCUZJMB7WXT2LMCGNY-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/6719/26/29/3VV4B7AX5MM082926/5W5KPEIBTCUZJMB7WXT2LMCGNY-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/6719/26/29/3VV4B7AX5MM082926/5W5KPEIBTCUZJMB7WXT2LMCGNY-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2021 Volkswagen</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Tiguan 2.0T SEL Premium R-Line 4MOTION</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$25,499</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>24k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2021 Volkswagen Tiguan, 2.0T SEL Premium R-Line 4MOTION" href="/used-cars-for-sale/listing/3VV4B7AX5MM082926/2021-volkswagen-tiguan/?position=17&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2022 Cadillac XT6, Premium Luxury FWD" data-test="usedListing" data-test-item="1GYKPCRSXNZ111419" data-test-dealerid="8401">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/8401/19/14/1GYKPCRSXNZ111419/KVWHTUDIUNUSIASPOZI2QYKCOA-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/8401/19/14/1GYKPCRSXNZ111419/KVWHTUDIUNUSIASPOZI2QYKCOA-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/8401/19/14/1GYKPCRSXNZ111419/KVWHTUDIUNUSIASPOZI2QYKCOA-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/8401/19/14/1GYKPCRSXNZ111419/KVWHTUDIUNUSIASPOZI2QYKCOA-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/8401/19/14/1GYKPCRSXNZ111419/KVWHTUDIUNUSIASPOZI2QYKCOA-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/8401/19/14/1GYKPCRSXNZ111419/KVWHTUDIUNUSIASPOZI2QYKCOA-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/8401/19/14/1GYKPCRSXNZ111419/KVWHTUDIUNUSIASPOZI2QYKCOA-cr-860.jpg 860w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2022 Cadillac</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">XT6 Premium Luxury FWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$27,656</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>49k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2022 Cadillac XT6, Premium Luxury FWD" href="/used-cars-for-sale/listing/1GYKPCRSXNZ111419/2022-cadillac-xt6/?position=18&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2021 Hyundai Sonata, SEL Plus" data-test="usedListing" data-test-item="5NPEJ4J29MH067148" data-test-dealerid="50600">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/50600/48/71/5NPEJ4J29MH067148/YLZEM4CT5CDTHVMPYDY2K4WAFE-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/50600/48/71/5NPEJ4J29MH067148/YLZEM4CT5CDTHVMPYDY2K4WAFE-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/50600/48/71/5NPEJ4J29MH067148/YLZEM4CT5CDTHVMPYDY2K4WAFE-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/50600/48/71/5NPEJ4J29MH067148/YLZEM4CT5CDTHVMPYDY2K4WAFE-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/50600/48/71/5NPEJ4J29MH067148/YLZEM4CT5CDTHVMPYDY2K4WAFE-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/50600/48/71/5NPEJ4J29MH067148/YLZEM4CT5CDTHVMPYDY2K4WAFE-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/50600/48/71/5NPEJ4J29MH067148/YLZEM4CT5CDTHVMPYDY2K4WAFE-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/50600/48/71/5NPEJ4J29MH067148/YLZEM4CT5CDTHVMPYDY2K4WAFE-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2021 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Sonata SEL Plus</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$17,400</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>74k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2021 Hyundai Sonata, SEL Plus" href="/used-cars-for-sale/listing/5NPEJ4J29MH067148/2021-hyundai-sonata/?position=19&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2020 Ford Edge, SEL FWD" data-test="usedListing" data-test-item="2FMPK3J94LBB07445" data-test-dealerid="50600">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/50600/45/74/2FMPK3J94LBB07445/2JTOO2RX7XIOJEMRVRUEONSEJQ-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/50600/45/74/2FMPK3J94LBB07445/2JTOO2RX7XIOJEMRVRUEONSEJQ-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/50600/45/74/2FMPK3J94LBB07445/2JTOO2RX7XIOJEMRVRUEONSEJQ-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/50600/45/74/2FMPK3J94LBB07445/2JTOO2RX7XIOJEMRVRUEONSEJQ-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/50600/45/74/2FMPK3J94LBB07445/2JTOO2RX7XIOJEMRVRUEONSEJQ-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/50600/45/74/2FMPK3J94LBB07445/2JTOO2RX7XIOJEMRVRUEONSEJQ-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/50600/45/74/2FMPK3J94LBB07445/2JTOO2RX7XIOJEMRVRUEONSEJQ-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/50600/45/74/2FMPK3J94LBB07445/2JTOO2RX7XIOJEMRVRUEONSEJQ-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2020 Ford</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Edge SEL FWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$20,325</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>20k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2020 Ford Edge, SEL FWD" href="/used-cars-for-sale/listing/2FMPK3J94LBB07445/2020-ford-edge/?position=20&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2021 Ford Explorer, ST 4WD" data-test="usedListing" data-test-item="1FM5K8GC4MGB44688" data-test-dealerid="50600">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/50600/88/46/1FM5K8GC4MGB44688/UZU7TYMQEPIYIFDK2GWBYUVN5E-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/50600/88/46/1FM5K8GC4MGB44688/UZU7TYMQEPIYIFDK2GWBYUVN5E-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/50600/88/46/1FM5K8GC4MGB44688/UZU7TYMQEPIYIFDK2GWBYUVN5E-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/50600/88/46/1FM5K8GC4MGB44688/UZU7TYMQEPIYIFDK2GWBYUVN5E-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/50600/88/46/1FM5K8GC4MGB44688/UZU7TYMQEPIYIFDK2GWBYUVN5E-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/50600/88/46/1FM5K8GC4MGB44688/UZU7TYMQEPIYIFDK2GWBYUVN5E-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/50600/88/46/1FM5K8GC4MGB44688/UZU7TYMQEPIYIFDK2GWBYUVN5E-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/50600/88/46/1FM5K8GC4MGB44688/UZU7TYMQEPIYIFDK2GWBYUVN5E-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2021 Ford</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Explorer ST 4WD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$37,225</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>40k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="cpoBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default fill-purple shrink-0 mr-[2px]" role="presentation" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                            <use href="#verified-fill"></use>
                                                                        </svg><span class="text-xs font-bold">CPO</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2021 Ford Explorer, ST 4WD" href="/used-cars-for-sale/listing/1FM5K8GC4MGB44688/2021-ford-explorer/?position=21&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2022 Toyota Tacoma, SR5 Double Cab 5' Bed V6 4WD Automatic" data-test="usedListing" data-test-item="3TMCZ5AN0NM465151" data-test-dealerid="50600">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/50600/51/51/3TMCZ5AN0NM465151/GYKPDKM53DWRSZNGBLTLNUOOQE-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/50600/51/51/3TMCZ5AN0NM465151/GYKPDKM53DWRSZNGBLTLNUOOQE-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/50600/51/51/3TMCZ5AN0NM465151/GYKPDKM53DWRSZNGBLTLNUOOQE-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/50600/51/51/3TMCZ5AN0NM465151/GYKPDKM53DWRSZNGBLTLNUOOQE-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/50600/51/51/3TMCZ5AN0NM465151/GYKPDKM53DWRSZNGBLTLNUOOQE-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/50600/51/51/3TMCZ5AN0NM465151/GYKPDKM53DWRSZNGBLTLNUOOQE-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/50600/51/51/3TMCZ5AN0NM465151/GYKPDKM53DWRSZNGBLTLNUOOQE-cr-860.jpg 860w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2022 Toyota</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Tacoma SR5 Double Cab 5' Bed V6 4WD Automatic</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$31,885</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>50k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2022 Toyota Tacoma, SR5 Double Cab 5' Bed V6 4WD Automatic" href="/used-cars-for-sale/listing/3TMCZ5AN0NM465151/2022-toyota-tacoma/?position=22&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2023 Chevrolet Silverado 1500, WT Regular Cab Long Bed 2WD" data-test="usedListing" data-test-item="3GCNAAED9PG330679" data-test-dealerid="50600">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/50600/79/06/3GCNAAED9PG330679/S4B7JZ435DXW3QKRG2PGGWNLQY-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/50600/79/06/3GCNAAED9PG330679/S4B7JZ435DXW3QKRG2PGGWNLQY-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/50600/79/06/3GCNAAED9PG330679/S4B7JZ435DXW3QKRG2PGGWNLQY-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/50600/79/06/3GCNAAED9PG330679/S4B7JZ435DXW3QKRG2PGGWNLQY-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/50600/79/06/3GCNAAED9PG330679/S4B7JZ435DXW3QKRG2PGGWNLQY-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/50600/79/06/3GCNAAED9PG330679/S4B7JZ435DXW3QKRG2PGGWNLQY-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/50600/79/06/3GCNAAED9PG330679/S4B7JZ435DXW3QKRG2PGGWNLQY-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/50600/79/06/3GCNAAED9PG330679/S4B7JZ435DXW3QKRG2PGGWNLQY-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2023 Chevrolet</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Silverado 1500 WT Regular Cab Long Bed 2WD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$27,625</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>13k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2023 Chevrolet Silverado 1500, WT Regular Cab Long Bed 2WD" href="/used-cars-for-sale/listing/3GCNAAED9PG330679/2023-chevrolet-silverado-1500/?position=23&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2023 Hyundai Kona Electric, SEL" data-test="usedListing" data-test-item="KM8K33AG1PU183646" data-test-dealerid="7056">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/7056/46/36/KM8K33AG1PU183646/3K22XBDLVTWHPLPVNP5VD4YXGY-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/7056/46/36/KM8K33AG1PU183646/3K22XBDLVTWHPLPVNP5VD4YXGY-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/7056/46/36/KM8K33AG1PU183646/3K22XBDLVTWHPLPVNP5VD4YXGY-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/7056/46/36/KM8K33AG1PU183646/3K22XBDLVTWHPLPVNP5VD4YXGY-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/7056/46/36/KM8K33AG1PU183646/3K22XBDLVTWHPLPVNP5VD4YXGY-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/7056/46/36/KM8K33AG1PU183646/3K22XBDLVTWHPLPVNP5VD4YXGY-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/7056/46/36/KM8K33AG1PU183646/3K22XBDLVTWHPLPVNP5VD4YXGY-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/7056/46/36/KM8K33AG1PU183646/3K22XBDLVTWHPLPVNP5VD4YXGY-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2023 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Kona Electric SEL</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$24,799</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>11k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="cpoBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default fill-purple shrink-0 mr-[2px]" role="presentation" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                            <use href="#verified-fill"></use>
                                                                        </svg><span class="text-xs font-bold">CPO</span></div>
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-674" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-674">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2023 Hyundai Kona Electric, SEL" href="/used-cars-for-sale/listing/KM8K33AG1PU183646/2023-hyundai-kona-electric/?position=24&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2021 Volkswagen Tiguan, 2.0T SEL Premium R-Line 4MOTION" data-test="usedListing" data-test-item="3VV4B7AX7MM058921" data-test-dealerid="6719">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/6719/21/89/3VV4B7AX7MM058921/U7TDJFGOU6HDIA3M3F33FAOYJI-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/6719/21/89/3VV4B7AX7MM058921/U7TDJFGOU6HDIA3M3F33FAOYJI-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/6719/21/89/3VV4B7AX7MM058921/U7TDJFGOU6HDIA3M3F33FAOYJI-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/6719/21/89/3VV4B7AX7MM058921/U7TDJFGOU6HDIA3M3F33FAOYJI-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/6719/21/89/3VV4B7AX7MM058921/U7TDJFGOU6HDIA3M3F33FAOYJI-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/6719/21/89/3VV4B7AX7MM058921/U7TDJFGOU6HDIA3M3F33FAOYJI-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/6719/21/89/3VV4B7AX7MM058921/U7TDJFGOU6HDIA3M3F33FAOYJI-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/6719/21/89/3VV4B7AX7MM058921/U7TDJFGOU6HDIA3M3F33FAOYJI-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2021 Volkswagen</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Tiguan 2.0T SEL Premium R-Line 4MOTION</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$25,991</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>30k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2021 Volkswagen Tiguan, 2.0T SEL Premium R-Line 4MOTION" href="/used-cars-for-sale/listing/3VV4B7AX7MM058921/2021-volkswagen-tiguan/?position=25&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2015 Ford Mustang, EcoBoost Premium Fastback" data-test="usedListing" data-test-item="1FA6P8TH6F5434947" data-test-dealerid="6884">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/6884/47/49/1FA6P8TH6F5434947/XTOQZO7LB2CN6BE4FBD2A4DV4Q-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/6884/47/49/1FA6P8TH6F5434947/XTOQZO7LB2CN6BE4FBD2A4DV4Q-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/6884/47/49/1FA6P8TH6F5434947/XTOQZO7LB2CN6BE4FBD2A4DV4Q-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/6884/47/49/1FA6P8TH6F5434947/XTOQZO7LB2CN6BE4FBD2A4DV4Q-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/6884/47/49/1FA6P8TH6F5434947/XTOQZO7LB2CN6BE4FBD2A4DV4Q-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/6884/47/49/1FA6P8TH6F5434947/XTOQZO7LB2CN6BE4FBD2A4DV4Q-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/6884/47/49/1FA6P8TH6F5434947/XTOQZO7LB2CN6BE4FBD2A4DV4Q-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/6884/47/49/1FA6P8TH6F5434947/XTOQZO7LB2CN6BE4FBD2A4DV4Q-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2015 Ford</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Mustang EcoBoost Premium Fastback</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$18,644</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>66k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2015 Ford Mustang, EcoBoost Premium Fastback" href="/used-cars-for-sale/listing/1FA6P8TH6F5434947/2015-ford-mustang/?position=26&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2020 Kia Telluride, EX FWD" data-test="usedListing" data-test-item="5XYP34HC2LG086924" data-test-dealerid="24903">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/24903/24/69/5XYP34HC2LG086924/DKMXST6JHHHBTCEBB3RCLSV5IY-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/24903/24/69/5XYP34HC2LG086924/DKMXST6JHHHBTCEBB3RCLSV5IY-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/24903/24/69/5XYP34HC2LG086924/DKMXST6JHHHBTCEBB3RCLSV5IY-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/24903/24/69/5XYP34HC2LG086924/DKMXST6JHHHBTCEBB3RCLSV5IY-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/24903/24/69/5XYP34HC2LG086924/DKMXST6JHHHBTCEBB3RCLSV5IY-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/24903/24/69/5XYP34HC2LG086924/DKMXST6JHHHBTCEBB3RCLSV5IY-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/24903/24/69/5XYP34HC2LG086924/DKMXST6JHHHBTCEBB3RCLSV5IY-cr-860.jpg 860w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2020 Kia</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Telluride EX FWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$18,950</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>104k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2020 Kia Telluride, EX FWD" href="/used-cars-for-sale/listing/5XYP34HC2LG086924/2020-kia-telluride/?position=27&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2021 Ford F-150, Platinum SuperCrew 5.5' Box 4WD" data-test="usedListing" data-test-item="1FTFW1ED7MFA85948" data-test-dealerid="12217">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/12217/48/59/1FTFW1ED7MFA85948/3SQDFFFICCIWULTCHB5M2A7PSQ-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/12217/48/59/1FTFW1ED7MFA85948/3SQDFFFICCIWULTCHB5M2A7PSQ-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/12217/48/59/1FTFW1ED7MFA85948/3SQDFFFICCIWULTCHB5M2A7PSQ-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/12217/48/59/1FTFW1ED7MFA85948/3SQDFFFICCIWULTCHB5M2A7PSQ-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/12217/48/59/1FTFW1ED7MFA85948/3SQDFFFICCIWULTCHB5M2A7PSQ-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/12217/48/59/1FTFW1ED7MFA85948/3SQDFFFICCIWULTCHB5M2A7PSQ-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/12217/48/59/1FTFW1ED7MFA85948/3SQDFFFICCIWULTCHB5M2A7PSQ-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/12217/48/59/1FTFW1ED7MFA85948/3SQDFFFICCIWULTCHB5M2A7PSQ-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2021 Ford</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">F-150 Platinum SuperCrew 5.5' Box 4WD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$47,999</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>41k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="hybridBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-711" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-711">Hybrid</title>
                                                                            <use href="#leaf-fill"></use>
                                                                        </svg><span class="text-xs">Hybrid</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2021 Ford F-150, Platinum SuperCrew 5.5' Box 4WD" href="/used-cars-for-sale/listing/1FTFW1ED7MFA85948/2021-ford-f-150/?position=28&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2021 Chevrolet Bolt EV, LT" data-test="usedListing" data-test-item="1G1FW6S01M4112127" data-test-dealerid="107807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/107807/27/21/1G1FW6S01M4112127/HJDB54GEN764CPK2KIDHAMPNDE-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/107807/27/21/1G1FW6S01M4112127/HJDB54GEN764CPK2KIDHAMPNDE-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/107807/27/21/1G1FW6S01M4112127/HJDB54GEN764CPK2KIDHAMPNDE-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/107807/27/21/1G1FW6S01M4112127/HJDB54GEN764CPK2KIDHAMPNDE-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/107807/27/21/1G1FW6S01M4112127/HJDB54GEN764CPK2KIDHAMPNDE-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/107807/27/21/1G1FW6S01M4112127/HJDB54GEN764CPK2KIDHAMPNDE-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/107807/27/21/1G1FW6S01M4112127/HJDB54GEN764CPK2KIDHAMPNDE-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/107807/27/21/1G1FW6S01M4112127/HJDB54GEN764CPK2KIDHAMPNDE-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2021 Chevrolet</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Bolt EV LT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$16,950</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>26k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-721" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-721">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2021 Chevrolet Bolt EV, LT" href="/used-cars-for-sale/listing/1G1FW6S01M4112127/2021-chevrolet-bolt-ev/?position=29&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2023 Genesis GV60, Performance" data-test="usedListing" data-test-item="KMUKEDTB4PU010559" data-test-dealerid="313470">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/313470/59/05/KMUKEDTB4PU010559/5ECLSJVNKTQEGHX7TCVOXSTVXA-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/313470/59/05/KMUKEDTB4PU010559/5ECLSJVNKTQEGHX7TCVOXSTVXA-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/313470/59/05/KMUKEDTB4PU010559/5ECLSJVNKTQEGHX7TCVOXSTVXA-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/313470/59/05/KMUKEDTB4PU010559/5ECLSJVNKTQEGHX7TCVOXSTVXA-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/313470/59/05/KMUKEDTB4PU010559/5ECLSJVNKTQEGHX7TCVOXSTVXA-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/313470/59/05/KMUKEDTB4PU010559/5ECLSJVNKTQEGHX7TCVOXSTVXA-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/313470/59/05/KMUKEDTB4PU010559/5ECLSJVNKTQEGHX7TCVOXSTVXA-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/313470/59/05/KMUKEDTB4PU010559/5ECLSJVNKTQEGHX7TCVOXSTVXA-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2023 Genesis</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">GV60 Performance</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$42,888</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>13k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="evBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-731" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-731">EV</title>
                                                                            <use href="#bolt-fill"></use>
                                                                        </svg><span class="text-xs">EV</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2023 Genesis GV60, Performance" href="/used-cars-for-sale/listing/KMUKEDTB4PU010559/2023-genesis-gv60/?position=30&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2023 Nissan Rogue, 2023.5 SV AWD" data-test="usedListing" data-test-item="5N1BT3BB4PC788401" data-test-dealerid="6011">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/6011/01/84/5N1BT3BB4PC788401/ZECIHGBPOWYAWLU6TZ6PO5PRFQ-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/6011/01/84/5N1BT3BB4PC788401/ZECIHGBPOWYAWLU6TZ6PO5PRFQ-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/6011/01/84/5N1BT3BB4PC788401/ZECIHGBPOWYAWLU6TZ6PO5PRFQ-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/6011/01/84/5N1BT3BB4PC788401/ZECIHGBPOWYAWLU6TZ6PO5PRFQ-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/6011/01/84/5N1BT3BB4PC788401/ZECIHGBPOWYAWLU6TZ6PO5PRFQ-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/6011/01/84/5N1BT3BB4PC788401/ZECIHGBPOWYAWLU6TZ6PO5PRFQ-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/6011/01/84/5N1BT3BB4PC788401/ZECIHGBPOWYAWLU6TZ6PO5PRFQ-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/6011/01/84/5N1BT3BB4PC788401/ZECIHGBPOWYAWLU6TZ6PO5PRFQ-cr-1400.jpg 1400w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2023 Nissan</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Rogue 2023.5 SV AWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$22,825</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>20k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2023 Nissan Rogue, 2023.5 SV AWD" href="/used-cars-for-sale/listing/5N1BT3BB4PC788401/2023-nissan-rogue/?position=31&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2019 Jeep Compass, Trailhawk 4WD" data-test="usedListing" data-test-item="3C4NJDDB3KT618232" data-test-dealerid="8401">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/8401/32/82/3C4NJDDB3KT618232/6FFY5UUKROV5HQMPRZ34UTRGTY-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/8401/32/82/3C4NJDDB3KT618232/6FFY5UUKROV5HQMPRZ34UTRGTY-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/8401/32/82/3C4NJDDB3KT618232/6FFY5UUKROV5HQMPRZ34UTRGTY-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/8401/32/82/3C4NJDDB3KT618232/6FFY5UUKROV5HQMPRZ34UTRGTY-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/8401/32/82/3C4NJDDB3KT618232/6FFY5UUKROV5HQMPRZ34UTRGTY-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/8401/32/82/3C4NJDDB3KT618232/6FFY5UUKROV5HQMPRZ34UTRGTY-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/8401/32/82/3C4NJDDB3KT618232/6FFY5UUKROV5HQMPRZ34UTRGTY-cr-860.jpg 860w" style="background-image: none;"></div>
                                                                </div>
                                                                <div class="absolute bottom-[-16px] right-2 z-20">
                                                                    <div data-test="vehicleCardActionDropDown" class="dropdown"><button aria-haspopup="true" class="flex h-[32px] w-[32px] flex-row items-center justify-between overflow-hidden rounded-full border-[1px] bg-white px-2 text-sm text-[color:var(--gray-700)] drop-shadow-sm hover:cursor-pointer hover:drop-shadow active:drop-shadow-lg" aria-expanded="false">
                                                                            <p class="sr-only">Menu</p><svg viewBox="0 0 24 24" class="icon icon-fill-default absolute left-1/2 top-1/2 h-[10px] -translate-x-1/2 -translate-y-1/2 fill-[currentColor] align-middle text-[22px] leading-[10px] tracking-[1px]" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                                <use href="#more-vert"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="z-[9999] my-1 ml-[-218px] w-[250px] border-none bg-[#fffff] p-2 dropdown-menu"><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#heart_plus"></use>
                                                                                </svg><span class="ml-2 font-normal">Add to favorites</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#ios_share"></use>
                                                                                </svg><span class="ml-2 font-normal">Share</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#frame_inspect"></use>
                                                                                </svg><span class="ml-2 font-normal">Quick view</span></button><button type="button" tabindex="0" role="menuitem" class="pl-2 text-sm flex items-center dropdown-item"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 20px; height: 20px;">
                                                                                    <use href="#paid"></use>
                                                                                </svg><span class="ml-2 font-normal">See actual pricing</span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="absolute top-2 left-2 z-[2]">
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-blue-900 text-white flex flex-nowrap px-[8px] drop-shadow-md uppercase" data-test="vehicleCardTcPlusBadge">Buy Online</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">Used 2019 Jeep</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Compass Trailhawk 4WD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center"><span class="truncate" data-test="vehicleCardPriceLabelAmount">$14,535</span></h3>
                                                                            <div data-test="vehicleCardPriceRating">
                                                                                <div class="flex items-center ml-1">
                                                                                    <div class="graph-icon-container graph-icon-bucket-one" style="height: 1rem; width: 1rem;"><svg viewBox="0 0 24 24" class="icon icon-fill-default graph-icon" aria-hidden="true" style="width: 13px; height: 13px;">
                                                                                            <use href="#caret-double-down"></use>
                                                                                        </svg></div><span data-test="graphIconLabel" class="graph-icon-title ml-1 truncate text-xs">Excellent Price</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-full justify-end">
                                                                            <div class="flex items-center truncate text-xs" data-test="vehicleMileage"><svg viewBox="0 0 24 24" class="icon icon-fill-default mr-[2px]" aria-hidden="true" style="width: 14px; height: 14px;">
                                                                                    <use href="#speed"></use>
                                                                                </svg>97k mi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]"> Delivery to your Door</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2019 Jeep Compass, Trailhawk 4WD" href="/used-cars-for-sale/listing/3C4NJDDB3KT618232/2019-jeep-compass/?position=32&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex justify-center">
                                            <nav class="" aria-label="pagination">
                                                <ul data-test="searchResultsPagination" class="pagination">
                                                    <li data-test="paginationDirectionalItemDisabled" class="page-item disabled"><span class="page-link pagination-double-chevron" data-test="paginationDirectionalNonLink"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                <use href="#keyboard_arrow_left"></use>
                                                            </svg><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                <use href="#keyboard_arrow_left"></use>
                                                            </svg></span></li>
                                                    <li data-test="paginationDirectionalItemDisabled" class="page-item disabled"><span class="page-link" data-test="paginationDirectionalNonLink"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                <use href="#keyboard_arrow_left"></use>
                                                            </svg></span></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item active"><a aria-label="Page 1" aria-current="page" data-test="paginationLink" class="page-link" href="/used-cars-for-sale/listings/?buyOnline=true">1</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 2" aria-current="false" data-test="paginationLink" class="page-link" href="/used-cars-for-sale/listings/?buyOnline=true&amp;page=2">2</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 3" aria-current="false" data-test="paginationLink" class="page-link" href="/used-cars-for-sale/listings/?buyOnline=true&amp;page=3">3</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 4" aria-current="false" data-test="paginationLink" class="page-link" href="/used-cars-for-sale/listings/?buyOnline=true&amp;page=4">4</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 5" aria-current="false" data-test="paginationLink" class="page-link" href="/used-cars-for-sale/listings/?buyOnline=true&amp;page=5">5</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 6" aria-current="false" data-test="paginationLink" class="page-link" href="/used-cars-for-sale/listings/?buyOnline=true&amp;page=6">6</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 7" aria-current="false" data-test="paginationLink" class="page-link" href="/used-cars-for-sale/listings/?buyOnline=true&amp;page=7">7</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 8" aria-current="false" data-test="paginationLink" class="page-link" href="/used-cars-for-sale/listings/?buyOnline=true&amp;page=8">8</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 9" aria-current="false" data-test="paginationLink" class="page-link" href="/used-cars-for-sale/listings/?buyOnline=true&amp;page=9">…</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 11" aria-current="false" data-test="paginationLink" class="page-link" href="/used-cars-for-sale/listings/?buyOnline=true&amp;page=11">11</a></li>
                                                    <li data-test="mobilePageRange" class="pagination-mobile-range-items hidden-md-up page-item">Page 1 of 11</li>
                                                    <li data-test="paginationDirectionalItem" class="page-item"><a aria-label="Go to next page" aria-disabled="false" data-test="Pagination-directional-next" class="page-link" href="/used-cars-for-sale/listings/?buyOnline=true&amp;page=2"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                <use href="#keyboard_arrow_right"></use>
                                                            </svg></a></li>
                                                    <li data-test="paginationDirectionalItem" class="page-item"><a aria-label="Go to last page" aria-disabled="false" data-test="Pagination-directional-last" class="pagination-double-chevron page-link" href="/used-cars-for-sale/listings/?buyOnline=true&amp;page=11"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                <use href="#keyboard_arrow_right"></use>
                                                            </svg><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                <use href="#keyboard_arrow_right"></use>
                                                            </svg></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               @endsection
