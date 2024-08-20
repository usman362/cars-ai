@extends('site.layouts.app')
@section('content')

                <main id="mainContent" class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]" style="margin-top:60px">
                    <div data-test="marketplaceSearchPage">
                        <div data-test="searchHeaderMarketplace" aria-label="Search Header">
                            <div class="container py-2 sm:py-3">
                                <div class="hidden-sm-down mt-0 flex items-center justify-between">
                                    <div class="hidden h-0 my-0 text-sm">
                                        <nav aria-label="breadcrumb">
                                            <ol class="flex flex-wrap pl-0" data-test="searchBreadcrumbsMarketplace">
                                                <li data-test="breadcrumbListItem" class="list-none" aria-current="page"><a title="New Car Listings" href="/new-cars-for-sale/listings/">New Cars Search</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <div class="flex items-center justify-start md:mt-2 md:flex-row lg:mb-1">
                                    <h1 class="heading-4 normal-case heading-sm-3 sm:normal-case heading-md-2 md:normal-case min-h-[20px] pr-2 sm:min-h-[30px] md:min-h-[39px] md:py-0" data-test="searchHeadingMarketplace">New Cars for Sale<span class="hidden-md-up"> <button type="button" class="link-button">
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
                                                        <legend class="sr-only">Vehicle Condition</legend><label class="form-radio-control switch w-full" data-test="usedCarsSwitch"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-24" value="USED">
                                                            <div>Used Cars </div>
                                                        </label><label class="form-radio-control switch w-full switch-active" data-test="newCarsSwitch"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-24" value="NEW" checked="">
                                                            <div>New Cars </div>
                                                        </label>
                                                    </fieldset>
                                                </div>
                                                <div class="-mx-3 mb-3 border-b px-3 py-3">
                                                    <h3 class="heading-4 normal-case mb-2-5">Buy Online</h3>
                                                    <div data-test="checkboxField" class="field-container-challenger"><label data-test="trueCarPlusCheckbox" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" value="25">
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
                                                                        <div class="ml-2 flex items-center">2,635</div>
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
                                                                                <option value="2021">2021</option>
                                                                                <option value="2022">2022</option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2024">2024</option>
                                                                                <option value="2025">2025</option>
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
                                                                                <option value="2021">2021</option>
                                                                                <option value="2022">2022</option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2024">2024</option>
                                                                                <option value="2025">2025</option>
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
                                                            </label><label class="form-radio-control switch w-1/3" data-test="leasePaymentFilter"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-37" value="lease">
                                                                <div>Lease </div>
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
                                                                            <p id="41" class="text-muted">Popular Makes</p>
                                                                        </div>
                                                                        <ul data-test="popularSection">
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-toyota" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="toyota: 44862 results" value="43">
                                                                                        <div data-test="makeFilter-toyotaCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Toyota</div>
                                                                                                    <div data-test-item="toyota-count" class="mx-2">44,862</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-bmw" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="bmw: 21674 results" value="45">
                                                                                        <div data-test="makeFilter-bmwCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>BMW</div>
                                                                                                    <div data-test-item="bmw-count" class="mx-2">21,674</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-chevrolet" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="chevrolet: 92115 results" value="47">
                                                                                        <div data-test="makeFilter-chevroletCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Chevrolet</div>
                                                                                                    <div data-test-item="chevrolet-count" class="mx-2">92,115</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-honda" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="honda: 76485 results" value="49">
                                                                                        <div data-test="makeFilter-hondaCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Honda</div>
                                                                                                    <div data-test-item="honda-count" class="mx-2">76,485</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-ford" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="ford: 128227 results" value="51">
                                                                                        <div data-test="makeFilter-fordCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Ford</div>
                                                                                                    <div data-test-item="ford-count" class="mx-2">128,227</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-audi" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="audi: 15737 results" value="53">
                                                                                        <div data-test="makeFilter-audiCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Audi</div>
                                                                                                    <div data-test-item="audi-count" class="mx-2">15,737</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-acura" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="acura: 11783 results" value="55">
                                                                                        <div data-test="makeFilter-acuraCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Acura</div>
                                                                                                    <div data-test-item="acura-count" class="mx-2">11,783</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-hyundai" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="hyundai: 74796 results" value="57">
                                                                                        <div data-test="makeFilter-hyundaiCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Hyundai</div>
                                                                                                    <div data-test-item="hyundai-count" class="mx-2">74,796</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-dodge" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="dodge: 15961 results" value="59">
                                                                                        <div data-test="makeFilter-dodgeCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Dodge</div>
                                                                                                    <div data-test-item="dodge-count" class="mx-2">15,961</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-mercedes-benz" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="mercedes-benz: 43161 results" value="61">
                                                                                        <div data-test="makeFilter-mercedes-benzCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Mercedes-Benz</div>
                                                                                                    <div data-test-item="mercedes-benz-count" class="mx-2">43,161</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-kia" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="kia: 57695 results" value="63">
                                                                                        <div data-test="makeFilter-kiaCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Kia</div>
                                                                                                    <div data-test-item="kia-count" class="mx-2">57,695</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                            <li class="flex mt-3">
                                                                                <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-lexus" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="lexus: 10137 results" value="65">
                                                                                        <div data-test="makeFilter-lexusCheckbox" class="indicator-wrapper">
                                                                                            <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                    <use href="#check"></use>
                                                                                                </svg></div>
                                                                                        </div>
                                                                                        <div class="custom-control-description">
                                                                                            <div class="">
                                                                                                <div class="flex justify-between">
                                                                                                    <div>Lexus</div>
                                                                                                    <div data-test-item="lexus-count" class="mx-2">10,137</div><span class="sr-only">results</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label></div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="flex justify-between">
                                                                        <p id="41" class="text-muted">All Other Makes</p>
                                                                    </div>
                                                                    <ul data-test="restSection">
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-alfa-romeo" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="alfa-romeo: 2069 results" value="67">
                                                                                    <div data-test="makeFilter-alfa-romeoCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Alfa Romeo</div>
                                                                                                <div data-test-item="alfa-romeo-count" class="mx-2">2,069</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-aston-martin" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="aston-martin: 51 results" value="69">
                                                                                    <div data-test="makeFilter-aston-martinCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Aston Martin</div>
                                                                                                <div data-test-item="aston-martin-count" class="mx-2">51</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-bentley" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="bentley: 191 results" value="71">
                                                                                    <div data-test="makeFilter-bentleyCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Bentley</div>
                                                                                                <div data-test-item="bentley-count" class="mx-2">191</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-buick" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="buick: 11068 results" value="73">
                                                                                    <div data-test="makeFilter-buickCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Buick</div>
                                                                                                <div data-test-item="buick-count" class="mx-2">11,068</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-cadillac" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="cadillac: 14510 results" value="75">
                                                                                    <div data-test="makeFilter-cadillacCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Cadillac</div>
                                                                                                <div data-test-item="cadillac-count" class="mx-2">14,510</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-chrysler" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="chrysler: 4555 results" value="77">
                                                                                    <div data-test="makeFilter-chryslerCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Chrysler</div>
                                                                                                <div data-test-item="chrysler-count" class="mx-2">4,555</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-fiat" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="fiat: 376 results" value="79">
                                                                                    <div data-test="makeFilter-fiatCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>FIAT</div>
                                                                                                <div data-test-item="fiat-count" class="mx-2">376</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-genesis" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="genesis: 8133 results" value="81">
                                                                                    <div data-test="makeFilter-genesisCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Genesis</div>
                                                                                                <div data-test-item="genesis-count" class="mx-2">8,133</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-gmc" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="gmc: 36222 results" value="83">
                                                                                    <div data-test="makeFilter-gmcCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>GMC</div>
                                                                                                <div data-test-item="gmc-count" class="mx-2">36,222</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-infiniti" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="infiniti: 6199 results" value="85">
                                                                                    <div data-test="makeFilter-infinitiCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>INFINITI</div>
                                                                                                <div data-test-item="infiniti-count" class="mx-2">6,199</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-jaguar" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="jaguar: 1097 results" value="87">
                                                                                    <div data-test="makeFilter-jaguarCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Jaguar</div>
                                                                                                <div data-test-item="jaguar-count" class="mx-2">1,097</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-jeep" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="jeep: 67487 results" value="89">
                                                                                    <div data-test="makeFilter-jeepCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Jeep</div>
                                                                                                <div data-test-item="jeep-count" class="mx-2">67,487</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-land-rover" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="land-rover: 5240 results" value="91">
                                                                                    <div data-test="makeFilter-land-roverCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Land Rover</div>
                                                                                                <div data-test-item="land-rover-count" class="mx-2">5,240</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-lincoln" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="lincoln: 12303 results" value="93">
                                                                                    <div data-test="makeFilter-lincolnCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Lincoln</div>
                                                                                                <div data-test-item="lincoln-count" class="mx-2">12,303</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-lotus" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="lotus: 22 results" value="95">
                                                                                    <div data-test="makeFilter-lotusCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Lotus</div>
                                                                                                <div data-test-item="lotus-count" class="mx-2">22</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-maserati" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="maserati: 718 results" value="97">
                                                                                    <div data-test="makeFilter-maseratiCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Maserati</div>
                                                                                                <div data-test-item="maserati-count" class="mx-2">718</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-mazda" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="mazda: 47266 results" value="99">
                                                                                    <div data-test="makeFilter-mazdaCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Mazda</div>
                                                                                                <div data-test-item="mazda-count" class="mx-2">47,266</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-mclaren" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="mclaren: 11 results" value="101">
                                                                                    <div data-test="makeFilter-mclarenCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>McLaren</div>
                                                                                                <div data-test-item="mclaren-count" class="mx-2">11</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-mini" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="mini: 1868 results" value="103">
                                                                                    <div data-test="makeFilter-miniCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>MINI</div>
                                                                                                <div data-test-item="mini-count" class="mx-2">1,868</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-mitsubishi" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="mitsubishi: 6597 results" value="105">
                                                                                    <div data-test="makeFilter-mitsubishiCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Mitsubishi</div>
                                                                                                <div data-test-item="mitsubishi-count" class="mx-2">6,597</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-nissan" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="nissan: 80564 results" value="107">
                                                                                    <div data-test="makeFilter-nissanCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Nissan</div>
                                                                                                <div data-test-item="nissan-count" class="mx-2">80,564</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-ram" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="ram: 47365 results" value="109">
                                                                                    <div data-test="makeFilter-ramCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Ram</div>
                                                                                                <div data-test-item="ram-count" class="mx-2">47,365</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-rolls-royce" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="rolls-royce: 25 results" value="111">
                                                                                    <div data-test="makeFilter-rolls-royceCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Rolls-Royce</div>
                                                                                                <div data-test-item="rolls-royce-count" class="mx-2">25</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-subaru" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="subaru: 34539 results" value="113">
                                                                                    <div data-test="makeFilter-subaruCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Subaru</div>
                                                                                                <div data-test-item="subaru-count" class="mx-2">34,539</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-volkswagen" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="volkswagen: 35121 results" value="115">
                                                                                    <div data-test="makeFilter-volkswagenCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Volkswagen</div>
                                                                                                <div data-test-item="volkswagen-count" class="mx-2">35,121</div><span class="sr-only">results</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </li>
                                                                        <li class="flex mt-3">
                                                                            <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="makeFilter-volvo" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="volvo: 10329 results" value="117">
                                                                                    <div data-test="makeFilter-volvoCheckbox" class="indicator-wrapper">
                                                                                        <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                                <use href="#check"></use>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="custom-control-description">
                                                                                        <div class="">
                                                                                            <div class="flex justify-between">
                                                                                                <div>Volvo</div>
                                                                                                <div data-test-item="volvo-count" class="mx-2">10,329</div><span class="sr-only">results</span>
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
                                                                <p id="119" class="text-muted">All Fuel Types</p>
                                                                <div class="toggle" aria-label="Show results for all fuel types"><input aria-labelledby="119" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-Electric" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Electric: 73185 results" value="122">
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
                                                                                        <div data-test-item="Electric-count" class="ml-2">73,185</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-Plug-In Hybrid" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Plug-In Hybrid: 35286 results" value="125">
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
                                                                                        <div data-test-item="Plug-In Hybrid-count" class="ml-2">35,286</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-Hybrid" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Hybrid: 59845 results" value="128">
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
                                                                                        <div data-test-item="Hybrid-count" class="ml-2">59,845</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-Gas" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Gas: 803459 results" value="131">
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
                                                                                        <div data-test-item="Gas-count" class="ml-2">803,459</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-Diesel" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Diesel: 51565 results" value="134">
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
                                                                                        <div data-test-item="Diesel-count" class="ml-2">51,565</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="fuelTypeFilter-Hydrogen" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Hydrogen: 49 results" value="137">
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
                                                                                        <div data-test-item="Hydrogen-count" class="ml-2">49</div><span class="sr-only">results</span>
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
                                                                <p id="140" class="text-muted">All Exterior Colors</p>
                                                                <div class="toggle" aria-label="Show results for all exterior colors"><input aria-labelledby="140" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Beige: 8 results" value="143">
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
                                                                                        <div data-test-item="Beige-count" class="ml-2">8</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Black: 201860 results" value="145">
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
                                                                                        <div data-test-item="Black-count" class="ml-2">201,860</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Blue: 93029 results" value="147">
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
                                                                                        <div data-test-item="Blue-count" class="ml-2">93,029</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Brown: 4410 results" value="149">
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
                                                                                        <div data-test-item="Brown-count" class="ml-2">4,410</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Copper: 337 results" value="151">
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
                                                                                        <div data-test-item="Copper-count" class="ml-2">337</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Gold: 1613 results" value="153">
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
                                                                                        <div data-test-item="Gold-count" class="ml-2">1,613</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Gray: 231601 results" value="155">
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
                                                                                        <div data-test-item="Gray-count" class="ml-2">231,601</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Green: 20581 results" value="157">
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
                                                                                        <div data-test-item="Green-count" class="ml-2">20,581</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Maroon: 3 results" value="159">
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
                                                                                        <div data-test-item="Maroon-count" class="ml-2">3</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Orange: 3918 results" value="161">
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
                                                                                        <div data-test-item="Orange-count" class="ml-2">3,918</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Purple: 796 results" value="163">
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
                                                                                        <div data-test-item="Purple-count" class="ml-2">796</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Red: 74596 results" value="165">
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
                                                                                        <div data-test-item="Red-count" class="ml-2">74,596</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Silver: 72884 results" value="167">
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
                                                                                        <div data-test-item="Silver-count" class="ml-2">72,884</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Tan: 12280 results" value="169">
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
                                                                                        <div data-test-item="Tan-count" class="ml-2">12,280</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Teal: 41 results" value="171">
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
                                                                                        <div data-test-item="Teal-count" class="ml-2">41</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="White: 287866 results" value="173">
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
                                                                                        <div data-test-item="White-count" class="ml-2">287,866</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Yellow: 1897 results" value="175">
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
                                                                                        <div data-test-item="Yellow-count" class="ml-2">1,897</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Unknown: 18839 results" value="177">
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
                                                                                        <div data-test-item="Unknown-count" class="ml-2">18,839</div><span class="sr-only">results</span>
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
                                                                <p id="180" class="text-muted">All Popular Features</p>
                                                                <div class="toggle" aria-label="Show results for all popular features"><input aria-labelledby="180" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Adaptive Cruise Control" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Adaptive Cruise Control: 747761 results" value="183">
                                                                            <div data-test="keyFeatures-Adaptive Cruise ControlCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Adaptive Cruise Control</div>
                                                                                        <div data-test-item="Adaptive Cruise Control-count" class="ml-2">747,761</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Android Auto" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Android Auto: 890875 results" value="185">
                                                                            <div data-test="keyFeatures-Android AutoCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Android Auto</div>
                                                                                        <div data-test-item="Android Auto-count" class="ml-2">890,875</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Apple CarPlay" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Apple CarPlay: 912792 results" value="187">
                                                                            <div data-test="keyFeatures-Apple CarPlayCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Apple CarPlay</div>
                                                                                        <div data-test-item="Apple CarPlay-count" class="ml-2">912,792</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Backup Camera" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Backup Camera: 1000179 results" value="189">
                                                                            <div data-test="keyFeatures-Backup CameraCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Backup Camera</div>
                                                                                        <div data-test-item="Backup Camera-count" class="ml-2">1,000,179</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Blind Spot System" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Blind Spot System: 873853 results" value="191">
                                                                            <div data-test="keyFeatures-Blind Spot SystemCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Blind Spot System</div>
                                                                                        <div data-test-item="Blind Spot System-count" class="ml-2">873,853</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Bluetooth" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Bluetooth: 1012138 results" value="193">
                                                                            <div data-test="keyFeatures-BluetoothCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Bluetooth</div>
                                                                                        <div data-test-item="Bluetooth-count" class="ml-2">1,012,138</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Front Cooled Seats" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Front Cooled Seats: 264008 results" value="195">
                                                                            <div data-test="keyFeatures-Front Cooled SeatsCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Front Cooled Seats</div>
                                                                                        <div data-test-item="Front Cooled Seats-count" class="ml-2">264,008</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Front Heated Seats" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Front Heated Seats: 779754 results" value="197">
                                                                            <div data-test="keyFeatures-Front Heated SeatsCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Front Heated Seats</div>
                                                                                        <div data-test-item="Front Heated Seats-count" class="ml-2">779,754</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Lane Keep Assist" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Lane Keep Assist: 912292 results" value="199">
                                                                            <div data-test="keyFeatures-Lane Keep AssistCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Lane Keep Assist</div>
                                                                                        <div data-test-item="Lane Keep Assist-count" class="ml-2">912,292</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Moonroof" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Moonroof: 500221 results" value="201">
                                                                            <div data-test="keyFeatures-MoonroofCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Moonroof</div>
                                                                                        <div data-test-item="Moonroof-count" class="ml-2">500,221</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Multi-Zone Climate Control" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Multi-Zone Climate Control: 778176 results" value="203">
                                                                            <div data-test="keyFeatures-Multi-Zone Climate ControlCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Multi-Zone Climate Control</div>
                                                                                        <div data-test-item="Multi-Zone Climate Control-count" class="ml-2">778,176</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Navigation" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Navigation: 565723 results" value="205">
                                                                            <div data-test="keyFeatures-NavigationCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Navigation</div>
                                                                                        <div data-test-item="Navigation-count" class="ml-2">565,723</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Parking Sensors" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Parking Sensors: 693340 results" value="207">
                                                                            <div data-test="keyFeatures-Parking SensorsCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Parking Sensors</div>
                                                                                        <div data-test-item="Parking Sensors-count" class="ml-2">693,340</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Power Trunk/Liftgate" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Power Trunk/Liftgate: 447690 results" value="209">
                                                                            <div data-test="keyFeatures-Power Trunk/LiftgateCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Power Trunk/Liftgate</div>
                                                                                        <div data-test-item="Power Trunk/Liftgate-count" class="ml-2">447,690</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Premium Audio" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Premium Audio: 367723 results" value="211">
                                                                            <div data-test="keyFeatures-Premium AudioCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Premium Audio</div>
                                                                                        <div data-test-item="Premium Audio-count" class="ml-2">367,723</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Premium Seat Material" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Premium Seat Material: 658319 results" value="213">
                                                                            <div data-test="keyFeatures-Premium Seat MaterialCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Premium Seat Material</div>
                                                                                        <div data-test-item="Premium Seat Material-count" class="ml-2">658,319</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Premium Wheels" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Premium Wheels: 934632 results" value="215">
                                                                            <div data-test="keyFeatures-Premium WheelsCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Premium Wheels</div>
                                                                                        <div data-test-item="Premium Wheels-count" class="ml-2">934,632</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Remote Engine Start" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Remote Engine Start: 834677 results" value="217">
                                                                            <div data-test="keyFeatures-Remote Engine StartCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Remote Engine Start</div>
                                                                                        <div data-test-item="Remote Engine Start-count" class="ml-2">834,677</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Third Row Seating" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Third Row Seating: 175792 results" value="219">
                                                                            <div data-test="keyFeatures-Third Row SeatingCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Third Row Seating</div>
                                                                                        <div data-test-item="Third Row Seating-count" class="ml-2">175,792</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Tow Hitch" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Tow Hitch: 294429 results" value="221">
                                                                            <div data-test="keyFeatures-Tow HitchCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Tow Hitch</div>
                                                                                        <div data-test-item="Tow Hitch-count" class="ml-2">294,429</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label data-test="keyFeatures-Unknown" class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Unknown: 12341 results" value="223">
                                                                            <div data-test="keyFeatures-UnknownCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Unknown</div>
                                                                                        <div data-test-item="Unknown-count" class="ml-2">12,341</div><span class="sr-only">results</span>
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
                                                                <p id="225" class="text-muted">All Transmissions</p>
                                                                <div class="toggle" aria-label="Show results for all transmissions"><input aria-labelledby="225" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Automatic: 1015280 results" value="228">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Automatic</div>
                                                                                        <div data-test-item="Automatic-count" class="ml-2">1,015,280</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Manual: 8109 results" value="230">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Manual</div>
                                                                                        <div data-test-item="Manual-count" class="ml-2">8,109</div><span class="sr-only">results</span>
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
                                                                <p id="232" class="text-muted">All Drive Types</p>
                                                                <div class="toggle" aria-label="Show results for all drive types"><input aria-labelledby="232" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="4WD: 280932 results" value="235">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>4WD</div>
                                                                                        <div data-test-item="4WD-count" class="ml-2">280,932</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="AWD: 374159 results" value="237">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>AWD</div>
                                                                                        <div data-test-item="AWD-count" class="ml-2">374,159</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="FWD: 261308 results" value="239">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>FWD</div>
                                                                                        <div data-test-item="FWD-count" class="ml-2">261,308</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="RWD: 109615 results" value="241">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>RWD</div>
                                                                                        <div data-test-item="RWD-count" class="ml-2">109,615</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Unknown: 545 results" value="243">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Unknown</div>
                                                                                        <div data-test-item="Unknown-count" class="ml-2">545</div><span class="sr-only">results</span>
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
                                                                <p id="245" class="text-muted">All Engines</p>
                                                                <div class="toggle" aria-label="Show results for all engines"><input aria-labelledby="245" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Electric: 73185 results" value="248">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Electric</div>
                                                                                        <div data-test-item="Electric-count" class="ml-2">73,185</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Hybrid: 59845 results" value="250">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Hybrid</div>
                                                                                        <div data-test-item="Hybrid-count" class="ml-2">59,845</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Hydrogen: 49 results" value="252">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Hydrogen</div>
                                                                                        <div data-test-item="Hydrogen-count" class="ml-2">49</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="10 Cylinder: 22 results" value="254">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>10 Cylinder</div>
                                                                                        <div data-test-item="10 Cylinder-count" class="ml-2">22</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="12 Cylinder: 199 results" value="256">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>12 Cylinder</div>
                                                                                        <div data-test-item="12 Cylinder-count" class="ml-2">199</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="3 Cylinder: 63500 results" value="258">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>3 Cylinder</div>
                                                                                        <div data-test-item="3 Cylinder-count" class="ml-2">63,500</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="4 Cylinder: 519098 results" value="260">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>4 Cylinder</div>
                                                                                        <div data-test-item="4 Cylinder-count" class="ml-2">519,098</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="5 Cylinder: 131 results" value="262">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>5 Cylinder</div>
                                                                                        <div data-test-item="5 Cylinder-count" class="ml-2">131</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="6 Cylinder: 250720 results" value="264">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>6 Cylinder</div>
                                                                                        <div data-test-item="6 Cylinder-count" class="ml-2">250,720</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="8 Cylinder: 116485 results" value="266">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>8 Cylinder</div>
                                                                                        <div data-test-item="8 Cylinder-count" class="ml-2">116,485</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Unknown: 3170 results" value="268">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Unknown</div>
                                                                                        <div data-test-item="Unknown-count" class="ml-2">3,170</div><span class="sr-only">results</span>
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
                                                                <p id="270" class="text-muted">All Interior Colors</p>
                                                                <div class="toggle" aria-label="Show results for all interior colors"><input aria-labelledby="270" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Beige: 50102 results" value="273">
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
                                                                                        <div data-test-item="Beige-count" class="ml-2">50,102</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Black: 713473 results" value="275">
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
                                                                                        <div data-test-item="Black-count" class="ml-2">713,473</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Blue: 6633 results" value="277">
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
                                                                                        <div data-test-item="Blue-count" class="ml-2">6,633</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Brown: 30706 results" value="279">
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
                                                                                        <div data-test-item="Brown-count" class="ml-2">30,706</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Gray: 145754 results" value="281">
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
                                                                                        <div data-test-item="Gray-count" class="ml-2">145,754</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Green: 4150 results" value="283">
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
                                                                                        <div data-test-item="Green-count" class="ml-2">4,150</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Grey: 291 results" value="285">
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
                                                                                        <div data-test-item="Grey-count" class="ml-2">291</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Orange: 378 results" value="287">
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
                                                                                        <div data-test-item="Orange-count" class="ml-2">378</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Purple: 1 results" value="289">
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
                                                                                        <div data-test-item="Purple-count" class="ml-2">1</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Red: 17401 results" value="291">
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
                                                                                        <div data-test-item="Red-count" class="ml-2">17,401</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="White: 6198 results" value="293">
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
                                                                                        <div data-test-item="White-count" class="ml-2">6,198</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Yellow: 6 results" value="295">
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
                                                                                        <div data-test-item="Yellow-count" class="ml-2">6</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Unknown: 51466 results" value="297">
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
                                                                                        <div data-test-item="Unknown-count" class="ml-2">51,466</div><span class="sr-only">results</span>
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
                                                                <p id="300" class="text-muted">All Bed Lengths</p>
                                                                <div class="toggle" aria-label="Show results for all bed lengths"><input aria-labelledby="300" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Long Bed: 20056 results" value="303">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Long Bed</div>
                                                                                        <div data-test-item="Long Bed-count" class="ml-2">20,056</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Short Bed: 124443 results" value="305">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Short Bed</div>
                                                                                        <div data-test-item="Short Bed-count" class="ml-2">124,443</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Standard Bed: 56815 results" value="307">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Standard Bed</div>
                                                                                        <div data-test-item="Standard Bed-count" class="ml-2">56,815</div><span class="sr-only">results</span>
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
                                                                <p id="309" class="text-muted">All Cab Types</p>
                                                                <div class="toggle" aria-label="Show results for all cab types"><input aria-labelledby="309" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Crew Cab: 185658 results" value="312">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Crew Cab</div>
                                                                                        <div data-test-item="Crew Cab-count" class="ml-2">185,658</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Extended Cab: 10911 results" value="314">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Extended Cab</div>
                                                                                        <div data-test-item="Extended Cab-count" class="ml-2">10,911</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Regular Cab: 6797 results" value="316">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Regular Cab</div>
                                                                                        <div data-test-item="Regular Cab-count" class="ml-2">6,797</div><span class="sr-only">results</span>
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
                                                                <p id="318" class="text-muted">All Roof Heights</p>
                                                                <div class="toggle" aria-label="Show results for all roof heights"><input aria-labelledby="318" data-test="toggleInput" type="checkbox" class="toggle-input form-check-input"><span class="toggle-track"><span class="toggle-knob" data-test="toggleKnob"><svg viewBox="0 0 24 24" class="icon icon-fill-default toggle-icon" aria-hidden="true" style="width: 12px; height: 12px;">
                                                                                <use href="#check"></use>
                                                                            </svg></span></span></div>
                                                            </div>
                                                            <ul data-test="restSection">
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="High: 4212 results" value="321">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>High</div>
                                                                                        <div data-test-item="High-count" class="ml-2">4,212</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Medium: 6206 results" value="323">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Medium</div>
                                                                                        <div data-test-item="Medium-count" class="ml-2">6,206</div><span class="sr-only">results</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label></div>
                                                                </li>
                                                                <li class="flex mt-3">
                                                                    <div data-test="checkboxField" class="field-container-challenger w-full"><label class="custom-control form-check-label "><input data-test="checkboxFieldInput" type="checkbox" class="custom-control-input custom-control-input-checkbox" aria-label="Standard: 5721 results" value="325">
                                                                            <div data-test="undefinedCheckbox" class="indicator-wrapper">
                                                                                <div class="custom-control-indicator custom-control-indicator-checkbox mr-2" data-test="checkboxIndicator"><svg viewBox="0 0 24 24" class="icon icon-fill-default custom-control-icon" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                                        <use href="#check"></use>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="custom-control-description">
                                                                                <div class="">
                                                                                    <div class="flex justify-between">
                                                                                        <div>Standard</div>
                                                                                        <div data-test-item="Standard-count" class="ml-2">5,721</div><span class="sr-only">results</span>
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
                                    <div data-test="buyingPowerBanner" class="bg-[image:var(--image-url)] md:bg-[image:var(--image-url-md)] lg:bg-[image:var(--image-url-lg)] relative overflow-hidden rounded bg-cover bg-no-repeat" style="--image-url: url({{asset('assets/_next/static/images/buying-power-banner-sm-bb21577aec0714fae25f9be6b0c84610.png')}}); --image-url-md: url({{asset('assets/_next/static/images/buying-power-banner-md-06f872c504329a3804745342b984d47f.png')}}); --image-url-lg: url({{asset('assets/_next/static/images/buying-power-banner-lg-93b0f5728a1a436901f19eb29032e45b.png')}});">
                                        <div class="absolute top-0 bottom-0 left-0 right-0 bg-[#00000099]"></div>
                                        <div>
                                            <div class="relative grid h-full items-center justify-center p-3 md:grid-cols-8 md:p-5 lg:px-4">
                                                <div class="md:col-span-3">
                                                    <div class="flex items-center justify-start pb-3 text-white md:hidden">
                                                        <div class="heading-3 normal-case pr-2 text-left">Know your buying&nbsp;power</div><button data-test="infoButtonButton" aria-label="Info" color="secondary" class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)]" style="--info-border-color: white;"><svg viewBox="0 0 24 24" class="icon icon-fill-default flex-shrink-0 fill-white" aria-hidden="true" style="width: 18px; height: 18px;">
                                                                <use href="#info"></use>
                                                            </svg></button>
                                                    </div>
                                                    <div class="hidden h-full items-center justify-center text-white md:flex md:flex-col">
                                                        <div class="flex h-[62px] items-start justify-center overflow-hidden text-[59px] font-bold leading-[59px] mb-2 scale-[.83] text-white lg:scale-100" role="region" aria-labelledby="buying-power-desc-1170" aria-live="polite">
                                                            <div id="buying-power-desc-1170" class="hidden">Max budget is 28554</div><span style="font-size: 0px;"></span><span class="text-[22px]">$</span>
                                                            <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true" style="transition-delay: 1000ms; transform: translateY(-177px);">
                                                                <div class="invisible">0</div>
                                                                <div class="text-center">0</div>
                                                                <div class="text-center">1</div>
                                                                <div class="text-center">2</div>
                                                                <div class="text-center">3</div>
                                                                <div class="text-center">4</div>
                                                                <div class="text-center">5</div>
                                                                <div class="text-center">6</div>
                                                                <div class="text-center">7</div>
                                                                <div class="text-center">8</div>
                                                                <div class="text-center">9</div>
                                                            </div>
                                                            <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true" style="transition-delay: 800ms; transform: translateY(-531px);">
                                                                <div class="invisible">0</div>
                                                                <div class="text-center">0</div>
                                                                <div class="text-center">1</div>
                                                                <div class="text-center">2</div>
                                                                <div class="text-center">3</div>
                                                                <div class="text-center">4</div>
                                                                <div class="text-center">5</div>
                                                                <div class="text-center">6</div>
                                                                <div class="text-center">7</div>
                                                                <div class="text-center">8</div>
                                                                <div class="text-center">9</div>
                                                            </div>
                                                            <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true" style="transition-delay: 600ms; transform: translateY(-59px);">
                                                                <div class="invisible">,</div>
                                                                <div class="text-center">,</div>
                                                            </div>
                                                            <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true" style="transition-delay: 400ms; transform: translateY(-354px);">
                                                                <div class="invisible">0</div>
                                                                <div class="text-center">0</div>
                                                                <div class="text-center">1</div>
                                                                <div class="text-center">2</div>
                                                                <div class="text-center">3</div>
                                                                <div class="text-center">4</div>
                                                                <div class="text-center">5</div>
                                                                <div class="text-center">6</div>
                                                                <div class="text-center">7</div>
                                                                <div class="text-center">8</div>
                                                                <div class="text-center">9</div>
                                                            </div>
                                                            <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true" style="transition-delay: 200ms; transform: translateY(-354px);">
                                                                <div class="invisible">0</div>
                                                                <div class="text-center">0</div>
                                                                <div class="text-center">1</div>
                                                                <div class="text-center">2</div>
                                                                <div class="text-center">3</div>
                                                                <div class="text-center">4</div>
                                                                <div class="text-center">5</div>
                                                                <div class="text-center">6</div>
                                                                <div class="text-center">7</div>
                                                                <div class="text-center">8</div>
                                                                <div class="text-center">9</div>
                                                            </div>
                                                            <div class="transition-transform duration-1000 ease-in-out" aria-hidden="true" style="transition-delay: 0ms; transform: translateY(-295px);">
                                                                <div class="invisible">0</div>
                                                                <div class="text-center">0</div>
                                                                <div class="text-center">1</div>
                                                                <div class="text-center">2</div>
                                                                <div class="text-center">3</div>
                                                                <div class="text-center">4</div>
                                                                <div class="text-center">5</div>
                                                                <div class="text-center">6</div>
                                                                <div class="text-center">7</div>
                                                                <div class="text-center">8</div>
                                                                <div class="text-center">9</div>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col justify-center pl-2">
                                                            <div class="flex items-center justify-center">
                                                                <div class="pr-1 pb-1 text-sm">Est. buying power</div><button data-test="infoButtonButton" aria-label="Info" color="secondary" class="info-button flex-grow-0 rounded-full shadow-[inset_0_0_0_1px_var(--info-border-color)] hover:shadow-[inset_0_0_0_2px_var(--info-border-color)] active:shadow-[inset_0_0_0_2px_var(--info-border-color)]" style="--info-border-color: white;"><svg viewBox="0 0 24 24" class="icon icon-fill-default flex-shrink-0 fill-white" aria-hidden="true" style="width: 18px; height: 18px;">
                                                                        <use href="#info"></use>
                                                                    </svg></button>
                                                            </div>
                                                            <div class="text-sm">Based on 6.5% APR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form novalidate="" class="border-white md:col-span-5 md:border-l md:pl-4 md:pt-4">
                                                    <div class="grid grid-cols-2 gap-3">
                                                        <div class="field-container-challenger w-full">
                                                            <div class="field-wrapper-challenger field-theme-dark-challenger field-label-padding-challenger">
                                                                <div class="field-content-row field-with-suffix">
                                                                    <div class="field-input-label-challenger input-label-select"><select required="" aria-label="Looking for" class="form-select-element-challenger" name="condition">
                                                                            <option value="NEW">New car</option>
                                                                            <option value="USED">Used car</option>
                                                                        </select>
                                                                        <div class="field-label-text-challenger" data-test="fieldLabel"><label data-ignore-contrast="true">Looking for</label></div>
                                                                    </div>
                                                                    <div class="field-addon-challenger field-addon-challenger-suffix"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                            <use href="#arrow_drop_down"></use>
                                                                        </svg></div>
                                                                </div>
                                                                <div class="field-message-challenger">
                                                                    <div class="field-message-text-challenger"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-container-challenger">
                                                            <div class="field-wrapper-challenger field-theme-dark-challenger field-label-padding-challenger">
                                                                <div class="field-content-row">
                                                                    <div class="field-input-label-challenger"><input id="332" class="form-control-challenger" aria-label="Down payment" placeholder=" " maxlength="10" type="tel" value="$3,000">
                                                                        <div class="field-label-text-challenger" data-test="fieldLabel"><label for="332" data-ignore-contrast="true">Down payment</label></div>
                                                                    </div>
                                                                </div>
                                                                <div class="field-message-challenger">
                                                                    <div class="field-message-text-challenger"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-container-challenger w-full">
                                                            <div class="field-wrapper-challenger field-theme-dark-challenger field-label-padding-challenger">
                                                                <div class="field-content-row field-with-suffix">
                                                                    <div class="field-input-label-challenger input-label-select"><select required="" aria-label="Credit score" class="form-select-element-challenger" name="creditRating" data-test="creditRating">
                                                                            <option value="POOR">300 - 579</option>
                                                                            <option value="FAIR">580 - 669</option>
                                                                            <option value="GOOD">670 - 739</option>
                                                                            <option value="VERY_GOOD">740 - 799</option>
                                                                            <option value="EXCELLENT">800 - 850</option>
                                                                        </select>
                                                                        <div class="field-label-text-challenger" data-test="fieldLabel"><label data-ignore-contrast="true">Credit score</label></div>
                                                                    </div>
                                                                    <div class="field-addon-challenger field-addon-challenger-suffix"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                            <use href="#arrow_drop_down"></use>
                                                                        </svg></div>
                                                                </div>
                                                                <div class="field-message-challenger">
                                                                    <div class="field-message-text-challenger"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-container-challenger">
                                                            <div class="field-wrapper-challenger field-theme-dark-challenger field-label-padding-challenger">
                                                                <div class="field-content-row">
                                                                    <div class="field-input-label-challenger"><input id="335" class="form-control-challenger" aria-label="Monthly payment" placeholder=" " type="tel" maxlength="6" value="$500">
                                                                        <div class="field-label-text-challenger" data-test="fieldLabel"><label for="335" data-ignore-contrast="true">Monthly payment</label></div>
                                                                    </div>
                                                                </div>
                                                                <div class="field-message-challenger">
                                                                    <div class="field-message-text-challenger"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 text-center"><button type="submit" data-ignore-contrast="false" data-loading="false" data-test="buyingPowerBannerSubmit" class="btn-dark !bg-transparent md:mt-2 btn btn-secondary btn-md"><span class="btn-inner"><span class="hidden md:inline">See your matches</span><span class="md:hidden">See buying power and matches</span></span></button></div>
                                                    </div>
                                                </form>
                                            </div><button type="button" class="link-button absolute top-0 right-0" aria-label="Close"><svg viewBox="0 0 24 24" class="icon icon-fill-default m-2 fill-white" aria-hidden="true" style="width: 24px; height: 24px;">
                                                    <use href="#close"></use>
                                                </svg></button>
                                        </div>
                                    </div>
                                    <div class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] border px-3 py-2-5 mt-2 hidden first:mt-0 md:flex" data-test="amexBanner">
                                        <div class="flex w-full items-start gap-2-5">
                                            <div class="picture-container shrink-0 overflow-hidden rounded" style="padding-bottom: 0px; width: 45px; height: 45px;"><img class="picture-inner" src="assets/_next/static/images/amex-icon-204d166a68c0afaeba1dd5688919ace4.png?auto=format&amp;h=45&amp;w=45" srcset="assets/_next/static/images/amex-icon-204d166a68c0afaeba1dd5688919ace4.png?auto=format&amp;h=45&amp;w=45 1x, assets/_next/static/images/amex-icon-204d166a68c0afaeba1dd5688919ace4.png?auto=format&amp;h=90&amp;w=90 2x" role="presentation" alt=""></div><span class="flex min-h-[42px] grow flex-col justify-center lg:gap-1"><span class="flex flex-col lg:flex-row lg:justify-between lg:gap-2-5"><span class="text-sm font-bold">Eligible American Express Card Members can save up to $4,500<br class="hidden sm:block lg:hidden"> on select <span class="whitespace-nowrap">Mercedes-Benz</span> vehicles.</span><a data-test="amexBannerLink" class="my-1 flex shrink-0 items-center gap-1 self-start text-sm lg:my-0" href="https://amexnetwork.truecar.com/oem/landing/mercedes-benz/?referrer_id=ZAME000028111" target="_blank" rel="noopener">Learn More <svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 16px; height: 16px;">
                                                            <use href="#open_in_new"></use>
                                                        </svg></a></span><span class="text-xs text-muted">Terms apply. See <a class="text-muted" href="#_" target="_blank" rel="noopener">Demo@demo.com</a> for details.</span></span>
                                        </div>
                                    </div>
                                    <div class="md:pt-2">
                                        <div class="flex items-center justify-between">
                                            <div data-test="marketplaceSrpResultsHeading">
                                                <h2 class="heading-base"><span class="hidden-sm-down">Showing 1 – 30 of <span data-test="marketplaceSrpListingsTotalCount">1,026,559</span> Listings</span><span class="hidden-md-up">1,026,559 Listings</span></h2>
                                            </div><label class="flex items-center justify-between">
                                                <div class="text-muted">Sort By</div>
                                                <div class="field-container-challenger w-[118px]">
                                                    <div class="field-wrapper-challenger">
                                                        <div class="field-content-row field-with-suffix">
                                                            <div class="field-input-label-challenger input-label-select"><select required="" aria-label="Sort By" class="form-select-element-challenger form-select-no-border form-select-no-label form-select-borderless" tabindex="0" data-test="searchResultsSortField" style="width: 119px;">
                                                                    <option value="best_match">Best Match</option>
                                                                    <option value="price_asc">Price Low to High</option>
                                                                    <option value="price_desc">Price High to Low</option>
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
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Mercedes-Benz Sprinter Cargo Van, 2500 Standard Roof Diesel HO 144&quot; RWD" data-test="newListing" data-test-item="W1W4NBHY8RT168185" data-test-dealerid="4039">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.5625%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.5625%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/4039/85/81/W1W4NBHY8RT168185/FELUTVCRHWMJMN2DMCDP3SQB4E-cr-360.jpg" alt="" role="presentation" loading="eager" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/4039/85/81/W1W4NBHY8RT168185/FELUTVCRHWMJMN2DMCDP3SQB4E-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/4039/85/81/W1W4NBHY8RT168185/FELUTVCRHWMJMN2DMCDP3SQB4E-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/4039/85/81/W1W4NBHY8RT168185/FELUTVCRHWMJMN2DMCDP3SQB4E-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/4039/85/81/W1W4NBHY8RT168185/FELUTVCRHWMJMN2DMCDP3SQB4E-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/4039/85/81/W1W4NBHY8RT168185/FELUTVCRHWMJMN2DMCDP3SQB4E-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Mercedes-Benz</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Sprinter Cargo Van 2500 Standard Roof Diesel HO 144" RWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$129,995</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">San Antonio, TX</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Mercedes-Benz Sprinter Cargo Van, 2500 Standard Roof Diesel HO 144&quot; RWD" href="/new-cars-for-sale/listing/W1W4NBHY8RT168185/2024-mercedes-benz-sprinter-cargo-van/?position=0&amp;sourceType=marketplace&amp;sponsored=true"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mx-1 mt-3 w-full md:hidden">
                                                    <div class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] border px-3 py-2-5" data-test="amexBanner">
                                                        <div class="flex w-full items-start gap-2-5">
                                                            <div class="picture-container shrink-0 overflow-hidden rounded" style="padding-bottom: 0px; width: 45px; height: 45px;"><img class="picture-inner" src="assets/_next/static/images/amex-icon-204d166a68c0afaeba1dd5688919ace4.png?auto=format&amp;h=45&amp;w=45" srcset="assets/_next/static/images/amex-icon-204d166a68c0afaeba1dd5688919ace4.png?auto=format&amp;h=45&amp;w=45 1x, /assets/_next/static/images/amex-icon-204d166a68c0afaeba1dd5688919ace4.png?auto=format&amp;h=90&amp;w=90 2x" role="presentation" alt=""></div><span class="flex min-h-[42px] grow flex-col justify-center lg:gap-1"><span class="flex flex-col lg:flex-row lg:justify-between lg:gap-2-5"><span class="text-sm font-bold">Eligible American Express Card Members can save up to $4,500<br class="hidden sm:block lg:hidden"> on select <span class="whitespace-nowrap">Mercedes-Benz</span> vehicles.</span><a data-test="amexBannerLink" class="my-1 flex shrink-0 items-center gap-1 self-start text-sm lg:my-0" href="https://amexnetwork.truecar.com/oem/landing/mercedes-benz/?referrer_id=ZAME000028111" target="_blank" rel="noopener">Learn More <svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 16px; height: 16px;">
                                                                            <use href="#open_in_new"></use>
                                                                        </svg></a></span><span class="text-xs text-muted">Terms apply. See <a class="text-muted" href="#_" target="_blank" rel="noopener">demo@demo.com</a> for details.</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-2 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2023 Mercedes-Benz Metris Passenger Van, Standard Roof 126&quot; Wheelbase" data-test="newListing" data-test-item="W1WV0FEYXP4342733" data-test-dealerid="4039">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/4039/33/27/W1WV0FEYXP4342733/O5YR2I4DAMWQZ4OIU7G25YT2VQ-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/4039/33/27/W1WV0FEYXP4342733/O5YR2I4DAMWQZ4OIU7G25YT2VQ-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/4039/33/27/W1WV0FEYXP4342733/O5YR2I4DAMWQZ4OIU7G25YT2VQ-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/4039/33/27/W1WV0FEYXP4342733/O5YR2I4DAMWQZ4OIU7G25YT2VQ-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/4039/33/27/W1WV0FEYXP4342733/O5YR2I4DAMWQZ4OIU7G25YT2VQ-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/4039/33/27/W1WV0FEYXP4342733/O5YR2I4DAMWQZ4OIU7G25YT2VQ-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/4039/33/27/W1WV0FEYXP4342733/O5YR2I4DAMWQZ4OIU7G25YT2VQ-cr-860.jpg 860w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2023 Mercedes-Benz</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Metris Passenger Van Standard Roof 126" Wheelbase</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$49,488</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">San Antonio, TX</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2023 Mercedes-Benz Metris Passenger Van, Standard Roof 126&quot; Wheelbase" href="/new-cars-for-sale/listing/W1WV0FEYXP4342733/2023-mercedes-benz-metris-passenger-van/?position=1&amp;sourceType=marketplace&amp;sponsored=true"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-2 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2023 Mercedes-Benz Metris Passenger Van, Standard Roof 126&quot; Wheelbase" data-test="newListing" data-test-item="W1WV0FEY2P4360983" data-test-dealerid="4039">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/4039/83/09/W1WV0FEY2P4360983/WXFLRP23XDIJOV52JN2HD72BLU-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/4039/83/09/W1WV0FEY2P4360983/WXFLRP23XDIJOV52JN2HD72BLU-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/4039/83/09/W1WV0FEY2P4360983/WXFLRP23XDIJOV52JN2HD72BLU-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/4039/83/09/W1WV0FEY2P4360983/WXFLRP23XDIJOV52JN2HD72BLU-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/4039/83/09/W1WV0FEY2P4360983/WXFLRP23XDIJOV52JN2HD72BLU-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/4039/83/09/W1WV0FEY2P4360983/WXFLRP23XDIJOV52JN2HD72BLU-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/4039/83/09/W1WV0FEY2P4360983/WXFLRP23XDIJOV52JN2HD72BLU-cr-860.jpg 860w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Sponsored</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2023 Mercedes-Benz</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Metris Passenger Van Standard Roof 126" Wheelbase</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$56,165</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">San Antonio, TX</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2023 Mercedes-Benz Metris Passenger Van, Standard Roof 126&quot; Wheelbase" href="/new-cars-for-sale/listing/W1WV0FEY2P4360983/2023-mercedes-benz-metris-passenger-van/?position=2&amp;sourceType=marketplace&amp;sponsored=true"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Honda Civic, LX Hatchback CVT" data-test="newListing" data-test-item="19XFL2H53RE039456" data-test-dealerid="7295">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/7295/56/94/19XFL2H53RE039456/RSKQY6R6BCXMJIH3JSXVVUVAQY-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/7295/56/94/19XFL2H53RE039456/RSKQY6R6BCXMJIH3JSXVVUVAQY-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/7295/56/94/19XFL2H53RE039456/RSKQY6R6BCXMJIH3JSXVVUVAQY-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/7295/56/94/19XFL2H53RE039456/RSKQY6R6BCXMJIH3JSXVVUVAQY-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/7295/56/94/19XFL2H53RE039456/RSKQY6R6BCXMJIH3JSXVVUVAQY-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/7295/56/94/19XFL2H53RE039456/RSKQY6R6BCXMJIH3JSXVVUVAQY-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Honda</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Civic LX Hatchback CVT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$26,045</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">San Antonio, TX</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Honda Civic, LX Hatchback CVT" href="/new-cars-for-sale/listing/19XFL2H53RE039456/2024-honda-civic/?position=3&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Honda Civic, LX Hatchback CVT" data-test="newListing" data-test-item="19XFL2H54RE038753" data-test-dealerid="7295">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/7295/53/87/19XFL2H54RE038753/3X4QPPDP2HXXURAZ7L47EYX7SM-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/7295/53/87/19XFL2H54RE038753/3X4QPPDP2HXXURAZ7L47EYX7SM-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/7295/53/87/19XFL2H54RE038753/3X4QPPDP2HXXURAZ7L47EYX7SM-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/7295/53/87/19XFL2H54RE038753/3X4QPPDP2HXXURAZ7L47EYX7SM-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/7295/53/87/19XFL2H54RE038753/3X4QPPDP2HXXURAZ7L47EYX7SM-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/7295/53/87/19XFL2H54RE038753/3X4QPPDP2HXXURAZ7L47EYX7SM-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Honda</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Civic LX Hatchback CVT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$26,045</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">San Antonio, TX</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Honda Civic, LX Hatchback CVT" href="/new-cars-for-sale/listing/19XFL2H54RE038753/2024-honda-civic/?position=4&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Kona, SEL FWD" data-test="newListing" data-test-item="KM8HB3AB5RU180771" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/71/07/KM8HB3AB5RU180771/T2MQR77EW7CTYFSMKWDVF54O2Q-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/71/07/KM8HB3AB5RU180771/T2MQR77EW7CTYFSMKWDVF54O2Q-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/71/07/KM8HB3AB5RU180771/T2MQR77EW7CTYFSMKWDVF54O2Q-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/71/07/KM8HB3AB5RU180771/T2MQR77EW7CTYFSMKWDVF54O2Q-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/71/07/KM8HB3AB5RU180771/T2MQR77EW7CTYFSMKWDVF54O2Q-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/71/07/KM8HB3AB5RU180771/T2MQR77EW7CTYFSMKWDVF54O2Q-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/16807/71/07/KM8HB3AB5RU180771/T2MQR77EW7CTYFSMKWDVF54O2Q-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/16807/71/07/KM8HB3AB5RU180771/T2MQR77EW7CTYFSMKWDVF54O2Q-cr-1400.jpg 1400w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Kona SEL FWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$27,829</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Kona, SEL FWD" href="/new-cars-for-sale/listing/KM8HB3AB5RU180771/2024-hyundai-kona/?position=5&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Elantra, Hybrid Blue DCT" data-test="newListing" data-test-item="KMHLM4DJ6RU114971" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/71/49/KMHLM4DJ6RU114971/NDYHRG3PVEOGPL3LNCBBRTU2VI-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/71/49/KMHLM4DJ6RU114971/NDYHRG3PVEOGPL3LNCBBRTU2VI-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/71/49/KMHLM4DJ6RU114971/NDYHRG3PVEOGPL3LNCBBRTU2VI-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/71/49/KMHLM4DJ6RU114971/NDYHRG3PVEOGPL3LNCBBRTU2VI-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/71/49/KMHLM4DJ6RU114971/NDYHRG3PVEOGPL3LNCBBRTU2VI-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/71/49/KMHLM4DJ6RU114971/NDYHRG3PVEOGPL3LNCBBRTU2VI-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Elantra Hybrid Blue DCT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$27,970</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="hybridBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-389" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-389">Hybrid</title>
                                                                            <use href="#leaf-fill"></use>
                                                                        </svg><span class="text-xs">Hybrid</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Elantra, Hybrid Blue DCT" href="/new-cars-for-sale/listing/KMHLM4DJ6RU114971/2024-hyundai-elantra/?position=6&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Elantra, N Line DCT" data-test="newListing" data-test-item="KMHLR4DF6RU823221" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/21/32/KMHLR4DF6RU823221/CRAEB3EFWC2EYE4N5UKF5YAIC4-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/21/32/KMHLR4DF6RU823221/CRAEB3EFWC2EYE4N5UKF5YAIC4-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/21/32/KMHLR4DF6RU823221/CRAEB3EFWC2EYE4N5UKF5YAIC4-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/21/32/KMHLR4DF6RU823221/CRAEB3EFWC2EYE4N5UKF5YAIC4-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/21/32/KMHLR4DF6RU823221/CRAEB3EFWC2EYE4N5UKF5YAIC4-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/21/32/KMHLR4DF6RU823221/CRAEB3EFWC2EYE4N5UKF5YAIC4-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/16807/21/32/KMHLR4DF6RU823221/CRAEB3EFWC2EYE4N5UKF5YAIC4-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/16807/21/32/KMHLR4DF6RU823221/CRAEB3EFWC2EYE4N5UKF5YAIC4-cr-1400.jpg 1400w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Elantra N Line DCT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$30,110</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Elantra, N Line DCT" href="/new-cars-for-sale/listing/KMHLR4DF6RU823221/2024-hyundai-elantra/?position=7&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Elantra, N Line DCT" data-test="newListing" data-test-item="KMHLR4DF7RU822952" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/52/29/KMHLR4DF7RU822952/PWKLJLI6AHRJI2LX3H77I5BFF4-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/52/29/KMHLR4DF7RU822952/PWKLJLI6AHRJI2LX3H77I5BFF4-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/52/29/KMHLR4DF7RU822952/PWKLJLI6AHRJI2LX3H77I5BFF4-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/52/29/KMHLR4DF7RU822952/PWKLJLI6AHRJI2LX3H77I5BFF4-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/52/29/KMHLR4DF7RU822952/PWKLJLI6AHRJI2LX3H77I5BFF4-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/52/29/KMHLR4DF7RU822952/PWKLJLI6AHRJI2LX3H77I5BFF4-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/16807/52/29/KMHLR4DF7RU822952/PWKLJLI6AHRJI2LX3H77I5BFF4-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/16807/52/29/KMHLR4DF7RU822952/PWKLJLI6AHRJI2LX3H77I5BFF4-cr-1400.jpg 1400w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Elantra N Line DCT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$30,575</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Elantra, N Line DCT" href="/new-cars-for-sale/listing/KMHLR4DF7RU822952/2024-hyundai-elantra/?position=8&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Sonata, SEL FWD" data-test="newListing" data-test-item="KMHL64JA4RA382255" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/55/22/KMHL64JA4RA382255/FGVQ3KUUMZ3UFUEEGMLNH4WE5Y-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/55/22/KMHL64JA4RA382255/FGVQ3KUUMZ3UFUEEGMLNH4WE5Y-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/55/22/KMHL64JA4RA382255/FGVQ3KUUMZ3UFUEEGMLNH4WE5Y-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/55/22/KMHL64JA4RA382255/FGVQ3KUUMZ3UFUEEGMLNH4WE5Y-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/55/22/KMHL64JA4RA382255/FGVQ3KUUMZ3UFUEEGMLNH4WE5Y-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/55/22/KMHL64JA4RA382255/FGVQ3KUUMZ3UFUEEGMLNH4WE5Y-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Sonata SEL FWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$29,210</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Sonata, SEL FWD" href="/new-cars-for-sale/listing/KMHL64JA4RA382255/2024-hyundai-sonata/?position=9&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Elantra, Hybrid Limited DCT" data-test="newListing" data-test-item="KMHLN4DJ4RU117705" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/05/77/KMHLN4DJ4RU117705/FDJJAXZDLHYPGITLWGLUOD57JE-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/05/77/KMHLN4DJ4RU117705/FDJJAXZDLHYPGITLWGLUOD57JE-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/05/77/KMHLN4DJ4RU117705/FDJJAXZDLHYPGITLWGLUOD57JE-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/05/77/KMHLN4DJ4RU117705/FDJJAXZDLHYPGITLWGLUOD57JE-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/05/77/KMHLN4DJ4RU117705/FDJJAXZDLHYPGITLWGLUOD57JE-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/05/77/KMHLN4DJ4RU117705/FDJJAXZDLHYPGITLWGLUOD57JE-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Elantra Hybrid Limited DCT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$31,195</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="hybridBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-418" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-418">Hybrid</title>
                                                                            <use href="#leaf-fill"></use>
                                                                        </svg><span class="text-xs">Hybrid</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Elantra, Hybrid Limited DCT" href="/new-cars-for-sale/listing/KMHLN4DJ4RU117705/2024-hyundai-elantra/?position=10&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Kona, Limited FWD" data-test="newListing" data-test-item="KM8HE3A33RU184219" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/19/42/KM8HE3A33RU184219/YUX3BWVS3EVLMPXJRFBP7G3F7A-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/19/42/KM8HE3A33RU184219/YUX3BWVS3EVLMPXJRFBP7G3F7A-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/19/42/KM8HE3A33RU184219/YUX3BWVS3EVLMPXJRFBP7G3F7A-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/19/42/KM8HE3A33RU184219/YUX3BWVS3EVLMPXJRFBP7G3F7A-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/19/42/KM8HE3A33RU184219/YUX3BWVS3EVLMPXJRFBP7G3F7A-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/19/42/KM8HE3A33RU184219/YUX3BWVS3EVLMPXJRFBP7G3F7A-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Kona Limited FWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$33,970</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Kona, Limited FWD" href="/new-cars-for-sale/listing/KM8HE3A33RU184219/2024-hyundai-kona/?position=11&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Santa Cruz, SEL FWD" data-test="newListing" data-test-item="5NTJC4DE1RH122859" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/59/28/5NTJC4DE1RH122859/KEHJTBI5QY3BOF7ZA3P7TE5H3I-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/59/28/5NTJC4DE1RH122859/KEHJTBI5QY3BOF7ZA3P7TE5H3I-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/59/28/5NTJC4DE1RH122859/KEHJTBI5QY3BOF7ZA3P7TE5H3I-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/59/28/5NTJC4DE1RH122859/KEHJTBI5QY3BOF7ZA3P7TE5H3I-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/59/28/5NTJC4DE1RH122859/KEHJTBI5QY3BOF7ZA3P7TE5H3I-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/59/28/5NTJC4DE1RH122859/KEHJTBI5QY3BOF7ZA3P7TE5H3I-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Santa Cruz SEL FWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$35,310</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Santa Cruz, SEL FWD" href="/new-cars-for-sale/listing/5NTJC4DE1RH122859/2024-hyundai-santa-cruz/?position=12&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Tucson, SEL FWD Limited Availability" data-test="newListing" data-test-item="5NMJF3DE6RH440554" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/54/05/5NMJF3DE6RH440554/KAZHG5FWUO5PJH4D6RJP2ZZ75U-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/54/05/5NMJF3DE6RH440554/KAZHG5FWUO5PJH4D6RJP2ZZ75U-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/54/05/5NMJF3DE6RH440554/KAZHG5FWUO5PJH4D6RJP2ZZ75U-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/54/05/5NMJF3DE6RH440554/KAZHG5FWUO5PJH4D6RJP2ZZ75U-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/54/05/5NMJF3DE6RH440554/KAZHG5FWUO5PJH4D6RJP2ZZ75U-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/54/05/5NMJF3DE6RH440554/KAZHG5FWUO5PJH4D6RJP2ZZ75U-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Tucson SEL FWD Limited Availability</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$34,275</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Tucson, SEL FWD Limited Availability" href="/new-cars-for-sale/listing/5NMJF3DE6RH440554/2024-hyundai-tucson/?position=13&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Elantra, Hybrid Limited DCT" data-test="newListing" data-test-item="KMHLN4DJ3RU117033" data-test-dealerid="414982">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/414982/33/70/KMHLN4DJ3RU117033/RCCDBCVYYQINLNMRQPYI3BLY34-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/414982/33/70/KMHLN4DJ3RU117033/RCCDBCVYYQINLNMRQPYI3BLY34-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/414982/33/70/KMHLN4DJ3RU117033/RCCDBCVYYQINLNMRQPYI3BLY34-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/414982/33/70/KMHLN4DJ3RU117033/RCCDBCVYYQINLNMRQPYI3BLY34-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/414982/33/70/KMHLN4DJ3RU117033/RCCDBCVYYQINLNMRQPYI3BLY34-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/414982/33/70/KMHLN4DJ3RU117033/RCCDBCVYYQINLNMRQPYI3BLY34-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/414982/33/70/KMHLN4DJ3RU117033/RCCDBCVYYQINLNMRQPYI3BLY34-cr-860.jpg 860w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Elantra Hybrid Limited DCT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$31,145</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Downers Grove, IL</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="hybridBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-447" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-447">Hybrid</title>
                                                                            <use href="#leaf-fill"></use>
                                                                        </svg><span class="text-xs">Hybrid</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Elantra, Hybrid Limited DCT" href="/new-cars-for-sale/listing/KMHLN4DJ3RU117033/2024-hyundai-elantra/?position=14&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Tucson, Hybrid Blue AWD" data-test="newListing" data-test-item="KM8JBCD14RU211755" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/55/17/KM8JBCD14RU211755/NMJVU3LIFGVLSYILA6ZZWYJCGQ-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/55/17/KM8JBCD14RU211755/NMJVU3LIFGVLSYILA6ZZWYJCGQ-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/55/17/KM8JBCD14RU211755/NMJVU3LIFGVLSYILA6ZZWYJCGQ-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/55/17/KM8JBCD14RU211755/NMJVU3LIFGVLSYILA6ZZWYJCGQ-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/55/17/KM8JBCD14RU211755/NMJVU3LIFGVLSYILA6ZZWYJCGQ-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/55/17/KM8JBCD14RU211755/NMJVU3LIFGVLSYILA6ZZWYJCGQ-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Tucson Hybrid Blue AWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$35,319</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="hybridBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-455" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-455">Hybrid</title>
                                                                            <use href="#leaf-fill"></use>
                                                                        </svg><span class="text-xs">Hybrid</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Tucson, Hybrid Blue AWD" href="/new-cars-for-sale/listing/KM8JBCD14RU211755/2024-hyundai-tucson/?position=15&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Elantra, Hybrid Limited DCT" data-test="newListing" data-test-item="KMHLN4DJ3RU116898" data-test-dealerid="414982">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/414982/98/68/KMHLN4DJ3RU116898/I5METTZD5FHHULHOAEGSS3L66Y-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/414982/98/68/KMHLN4DJ3RU116898/I5METTZD5FHHULHOAEGSS3L66Y-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/414982/98/68/KMHLN4DJ3RU116898/I5METTZD5FHHULHOAEGSS3L66Y-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/414982/98/68/KMHLN4DJ3RU116898/I5METTZD5FHHULHOAEGSS3L66Y-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/414982/98/68/KMHLN4DJ3RU116898/I5METTZD5FHHULHOAEGSS3L66Y-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/414982/98/68/KMHLN4DJ3RU116898/I5METTZD5FHHULHOAEGSS3L66Y-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/414982/98/68/KMHLN4DJ3RU116898/I5METTZD5FHHULHOAEGSS3L66Y-cr-860.jpg 860w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Elantra Hybrid Limited DCT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$31,180</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Downers Grove, IL</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="hybridBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-463" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-463">Hybrid</title>
                                                                            <use href="#leaf-fill"></use>
                                                                        </svg><span class="text-xs">Hybrid</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Elantra, Hybrid Limited DCT" href="/new-cars-for-sale/listing/KMHLN4DJ3RU116898/2024-hyundai-elantra/?position=16&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Tucson, Limited FWD" data-test="newListing" data-test-item="5NMJE3DEXRH439863" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/63/98/5NMJE3DEXRH439863/6PASRMIUETFCYM7TTRLDV7BWKI-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/63/98/5NMJE3DEXRH439863/6PASRMIUETFCYM7TTRLDV7BWKI-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/63/98/5NMJE3DEXRH439863/6PASRMIUETFCYM7TTRLDV7BWKI-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/63/98/5NMJE3DEXRH439863/6PASRMIUETFCYM7TTRLDV7BWKI-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/63/98/5NMJE3DEXRH439863/6PASRMIUETFCYM7TTRLDV7BWKI-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/63/98/5NMJE3DEXRH439863/6PASRMIUETFCYM7TTRLDV7BWKI-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Tucson Limited FWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$38,915</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Tucson, Limited FWD" href="/new-cars-for-sale/listing/5NMJE3DEXRH439863/2024-hyundai-tucson/?position=17&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Tucson, Hybrid Limited AWD" data-test="newListing" data-test-item="KM8JECD15RU222190" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/90/21/KM8JECD15RU222190/XURFGYH7UVVXQL5HRBBNQUKFGA-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/90/21/KM8JECD15RU222190/XURFGYH7UVVXQL5HRBBNQUKFGA-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/90/21/KM8JECD15RU222190/XURFGYH7UVVXQL5HRBBNQUKFGA-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/90/21/KM8JECD15RU222190/XURFGYH7UVVXQL5HRBBNQUKFGA-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/90/21/KM8JECD15RU222190/XURFGYH7UVVXQL5HRBBNQUKFGA-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/90/21/KM8JECD15RU222190/XURFGYH7UVVXQL5HRBBNQUKFGA-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Tucson Hybrid Limited AWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$41,590</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="hybridBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-478" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-478">Hybrid</title>
                                                                            <use href="#leaf-fill"></use>
                                                                        </svg><span class="text-xs">Hybrid</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Tucson, Hybrid Limited AWD" href="/new-cars-for-sale/listing/KM8JECD15RU222190/2024-hyundai-tucson/?position=18&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Elantra, SEL IVT" data-test="newListing" data-test-item="KMHLS4DG4RU815213" data-test-dealerid="414982">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/414982/13/52/KMHLS4DG4RU815213/DFXQFT26L37MJMF37KXPWPNAQI-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/414982/13/52/KMHLS4DG4RU815213/DFXQFT26L37MJMF37KXPWPNAQI-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/414982/13/52/KMHLS4DG4RU815213/DFXQFT26L37MJMF37KXPWPNAQI-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/414982/13/52/KMHLS4DG4RU815213/DFXQFT26L37MJMF37KXPWPNAQI-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/414982/13/52/KMHLS4DG4RU815213/DFXQFT26L37MJMF37KXPWPNAQI-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/414982/13/52/KMHLS4DG4RU815213/DFXQFT26L37MJMF37KXPWPNAQI-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/414982/13/52/KMHLS4DG4RU815213/DFXQFT26L37MJMF37KXPWPNAQI-cr-860.jpg 860w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Elantra SEL IVT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$27,480</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Downers Grove, IL</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Elantra, SEL IVT" href="/new-cars-for-sale/listing/KMHLS4DG4RU815213/2024-hyundai-elantra/?position=19&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Sonata, Hybrid Limited FWD" data-test="newListing" data-test-item="KMHL54JJ3RA095685" data-test-dealerid="414982">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/414982/85/56/KMHL54JJ3RA095685/SUA7BIFQ3V5APXR6RLXHGVQ4CM-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/414982/85/56/KMHL54JJ3RA095685/SUA7BIFQ3V5APXR6RLXHGVQ4CM-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/414982/85/56/KMHL54JJ3RA095685/SUA7BIFQ3V5APXR6RLXHGVQ4CM-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/414982/85/56/KMHL54JJ3RA095685/SUA7BIFQ3V5APXR6RLXHGVQ4CM-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/414982/85/56/KMHL54JJ3RA095685/SUA7BIFQ3V5APXR6RLXHGVQ4CM-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/414982/85/56/KMHL54JJ3RA095685/SUA7BIFQ3V5APXR6RLXHGVQ4CM-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/414982/85/56/KMHL54JJ3RA095685/SUA7BIFQ3V5APXR6RLXHGVQ4CM-cr-860.jpg 860w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Sonata Hybrid Limited FWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$38,835</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Downers Grove, IL</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="hybridBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-493" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-493">Hybrid</title>
                                                                            <use href="#leaf-fill"></use>
                                                                        </svg><span class="text-xs">Hybrid</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Sonata, Hybrid Limited FWD" href="/new-cars-for-sale/listing/KMHL54JJ3RA095685/2024-hyundai-sonata/?position=20&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Honda Civic, Sport Hatchback CVT" data-test="newListing" data-test-item="19XFL2H89RE037897" data-test-dealerid="7295">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/7295/97/78/19XFL2H89RE037897/2JATZFXNYGZDKVOUKPPVYFW4OE-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/7295/97/78/19XFL2H89RE037897/2JATZFXNYGZDKVOUKPPVYFW4OE-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/7295/97/78/19XFL2H89RE037897/2JATZFXNYGZDKVOUKPPVYFW4OE-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/7295/97/78/19XFL2H89RE037897/2JATZFXNYGZDKVOUKPPVYFW4OE-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/7295/97/78/19XFL2H89RE037897/2JATZFXNYGZDKVOUKPPVYFW4OE-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/7295/97/78/19XFL2H89RE037897/2JATZFXNYGZDKVOUKPPVYFW4OE-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Honda</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Civic Sport Hatchback CVT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$27,445</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">San Antonio, TX</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Honda Civic, Sport Hatchback CVT" href="/new-cars-for-sale/listing/19XFL2H89RE037897/2024-honda-civic/?position=21&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Kona, SEL FWD" data-test="newListing" data-test-item="KM8HC3AB4RU144163" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/63/41/KM8HC3AB4RU144163/PWQ5PVI3JHAMOUEPDUGRPXF22Q-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/63/41/KM8HC3AB4RU144163/PWQ5PVI3JHAMOUEPDUGRPXF22Q-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/63/41/KM8HC3AB4RU144163/PWQ5PVI3JHAMOUEPDUGRPXF22Q-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/63/41/KM8HC3AB4RU144163/PWQ5PVI3JHAMOUEPDUGRPXF22Q-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/63/41/KM8HC3AB4RU144163/PWQ5PVI3JHAMOUEPDUGRPXF22Q-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/63/41/KM8HC3AB4RU144163/PWQ5PVI3JHAMOUEPDUGRPXF22Q-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Kona SEL FWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$29,930</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Kona, SEL FWD" href="/new-cars-for-sale/listing/KM8HC3AB4RU144163/2024-hyundai-kona/?position=22&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Elantra, Limited IVT" data-test="newListing" data-test-item="KMHLP4DG1RU835078" data-test-dealerid="414982">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/414982/78/50/KMHLP4DG1RU835078/3VZ66DTJBGKJR5T65GLAQBQASQ-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/414982/78/50/KMHLP4DG1RU835078/3VZ66DTJBGKJR5T65GLAQBQASQ-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/414982/78/50/KMHLP4DG1RU835078/3VZ66DTJBGKJR5T65GLAQBQASQ-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/414982/78/50/KMHLP4DG1RU835078/3VZ66DTJBGKJR5T65GLAQBQASQ-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/414982/78/50/KMHLP4DG1RU835078/3VZ66DTJBGKJR5T65GLAQBQASQ-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/414982/78/50/KMHLP4DG1RU835078/3VZ66DTJBGKJR5T65GLAQBQASQ-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/414982/78/50/KMHLP4DG1RU835078/3VZ66DTJBGKJR5T65GLAQBQASQ-cr-860.jpg 860w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Elantra Limited IVT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$28,795</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Downers Grove, IL</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Elantra, Limited IVT" href="/new-cars-for-sale/listing/KMHLP4DG1RU835078/2024-hyundai-elantra/?position=23&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Tucson, Plug-In Hybrid SEL AWD" data-test="newListing" data-test-item="KM8JBDD21RU214594" data-test-dealerid="5889">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/5889/94/45/KM8JBDD21RU214594/NLYTT3JG4LOX7SMPRE3CZVGFMY-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/5889/94/45/KM8JBDD21RU214594/NLYTT3JG4LOX7SMPRE3CZVGFMY-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/5889/94/45/KM8JBDD21RU214594/NLYTT3JG4LOX7SMPRE3CZVGFMY-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/5889/94/45/KM8JBDD21RU214594/NLYTT3JG4LOX7SMPRE3CZVGFMY-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/5889/94/45/KM8JBDD21RU214594/NLYTT3JG4LOX7SMPRE3CZVGFMY-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/5889/94/45/KM8JBDD21RU214594/NLYTT3JG4LOX7SMPRE3CZVGFMY-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/5889/94/45/KM8JBDD21RU214594/NLYTT3JG4LOX7SMPRE3CZVGFMY-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/5889/94/45/KM8JBDD21RU214594/NLYTT3JG4LOX7SMPRE3CZVGFMY-cr-1400.jpg 1400w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Tucson Plug-In Hybrid SEL AWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$40,874</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Peoria, AZ</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="phevBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-522" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-522">PHEV</title>
                                                                            <use href="#plug-fill"></use>
                                                                        </svg><span class="text-xs">PHEV</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Tucson, Plug-In Hybrid SEL AWD" href="/new-cars-for-sale/listing/KM8JBDD21RU214594/2024-hyundai-tucson/?position=24&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Tucson, Limited FWD" data-test="newListing" data-test-item="5NMJE3DE8RH438274" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/74/82/5NMJE3DE8RH438274/HYYZFKN3A6A4WMO5D2N6CMRLHY-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/74/82/5NMJE3DE8RH438274/HYYZFKN3A6A4WMO5D2N6CMRLHY-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/74/82/5NMJE3DE8RH438274/HYYZFKN3A6A4WMO5D2N6CMRLHY-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/74/82/5NMJE3DE8RH438274/HYYZFKN3A6A4WMO5D2N6CMRLHY-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/74/82/5NMJE3DE8RH438274/HYYZFKN3A6A4WMO5D2N6CMRLHY-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/74/82/5NMJE3DE8RH438274/HYYZFKN3A6A4WMO5D2N6CMRLHY-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Tucson Limited FWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$38,915</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Tucson, Limited FWD" href="/new-cars-for-sale/listing/5NMJE3DE8RH438274/2024-hyundai-tucson/?position=25&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Honda Civic, Sport Hatchback CVT" data-test="newListing" data-test-item="19XFL2H88RE036370" data-test-dealerid="7295">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/7295/70/63/19XFL2H88RE036370/AKWPOPAUQE3A7CSR5CVSIYV3HU-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/7295/70/63/19XFL2H88RE036370/AKWPOPAUQE3A7CSR5CVSIYV3HU-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/7295/70/63/19XFL2H88RE036370/AKWPOPAUQE3A7CSR5CVSIYV3HU-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/7295/70/63/19XFL2H88RE036370/AKWPOPAUQE3A7CSR5CVSIYV3HU-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/7295/70/63/19XFL2H88RE036370/AKWPOPAUQE3A7CSR5CVSIYV3HU-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/7295/70/63/19XFL2H88RE036370/AKWPOPAUQE3A7CSR5CVSIYV3HU-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Honda</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Civic Sport Hatchback CVT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$27,900</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">San Antonio, TX</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Honda Civic, Sport Hatchback CVT" href="/new-cars-for-sale/listing/19XFL2H88RE036370/2024-honda-civic/?position=26&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Honda Civic, LX Hatchback CVT" data-test="newListing" data-test-item="19XFL2H55RE036042" data-test-dealerid="7295">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/7295/42/60/19XFL2H55RE036042/RYWADPDMQDONSNMQRXADX3EFCM-cr-860.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/7295/42/60/19XFL2H55RE036042/RYWADPDMQDONSNMQRXADX3EFCM-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/7295/42/60/19XFL2H55RE036042/RYWADPDMQDONSNMQRXADX3EFCM-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/7295/42/60/19XFL2H55RE036042/RYWADPDMQDONSNMQRXADX3EFCM-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/7295/42/60/19XFL2H55RE036042/RYWADPDMQDONSNMQRXADX3EFCM-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/7295/42/60/19XFL2H55RE036042/RYWADPDMQDONSNMQRXADX3EFCM-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/7295/42/60/19XFL2H55RE036042/RYWADPDMQDONSNMQRXADX3EFCM-cr-860.jpg 860w, https://listings-prod.tcimg.net/listings/7295/42/60/19XFL2H55RE036042/RYWADPDMQDONSNMQRXADX3EFCM-cr-1400.jpg 1400w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Honda</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Civic LX Hatchback CVT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$26,500</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">San Antonio, TX</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Honda Civic, LX Hatchback CVT" href="/new-cars-for-sale/listing/19XFL2H55RE036042/2024-honda-civic/?position=27&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Elantra, Hybrid Limited DCT" data-test="newListing" data-test-item="KMHLN4DJ0RU115854" data-test-dealerid="414982">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/414982/54/58/KMHLN4DJ0RU115854/CTPNRXQTEJ4MM6FMEU3DBH2UU4-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/414982/54/58/KMHLN4DJ0RU115854/CTPNRXQTEJ4MM6FMEU3DBH2UU4-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/414982/54/58/KMHLN4DJ0RU115854/CTPNRXQTEJ4MM6FMEU3DBH2UU4-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/414982/54/58/KMHLN4DJ0RU115854/CTPNRXQTEJ4MM6FMEU3DBH2UU4-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/414982/54/58/KMHLN4DJ0RU115854/CTPNRXQTEJ4MM6FMEU3DBH2UU4-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/414982/54/58/KMHLN4DJ0RU115854/CTPNRXQTEJ4MM6FMEU3DBH2UU4-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/414982/54/58/KMHLN4DJ0RU115854/CTPNRXQTEJ4MM6FMEU3DBH2UU4-cr-860.jpg 860w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Elantra Hybrid Limited DCT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$31,210</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Downers Grove, IL</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="hybridBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-551" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-551">Hybrid</title>
                                                                            <use href="#leaf-fill"></use>
                                                                        </svg><span class="text-xs">Hybrid</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Elantra, Hybrid Limited DCT" href="/new-cars-for-sale/listing/KMHLN4DJ0RU115854/2024-hyundai-elantra/?position=28&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Elantra, Hybrid Limited DCT" data-test="newListing" data-test-item="KMHLN4DJXRU115571" data-test-dealerid="414982">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/414982/71/55/KMHLN4DJXRU115571/EDAKZNB6OVMWJMUC45JS7UMYUM-cr-540.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/414982/71/55/KMHLN4DJXRU115571/EDAKZNB6OVMWJMUC45JS7UMYUM-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/414982/71/55/KMHLN4DJXRU115571/EDAKZNB6OVMWJMUC45JS7UMYUM-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/414982/71/55/KMHLN4DJXRU115571/EDAKZNB6OVMWJMUC45JS7UMYUM-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/414982/71/55/KMHLN4DJXRU115571/EDAKZNB6OVMWJMUC45JS7UMYUM-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/414982/71/55/KMHLN4DJXRU115571/EDAKZNB6OVMWJMUC45JS7UMYUM-cr-540.jpg 540w, https://listings-prod.tcimg.net/listings/414982/71/55/KMHLN4DJXRU115571/EDAKZNB6OVMWJMUC45JS7UMYUM-cr-860.jpg 860w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Elantra Hybrid Limited DCT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$31,180</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Downers Grove, IL</div>
                                                                <div class="flex items-center gap-1">
                                                                    <div class="flex h-[20px] items-center rounded-full pl-[4px] pr-[7px] border bg-white text-dark" data-test="hybridBadge"><svg viewBox="0 0 24 24" class="icon icon-fill-default text-[color:var(--green-600)]" role="img" aria-labelledby="icon-559" aria-hidden="false" style="width: 14px; height: 14px;">
                                                                            <title id="icon-559">Hybrid</title>
                                                                            <use href="#leaf-fill"></use>
                                                                        </svg><span class="text-xs">Hybrid</span></div>
                                                                </div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Elantra, Hybrid Limited DCT" href="/new-cars-for-sale/listing/KMHLN4DJXRU115571/2024-hyundai-elantra/?position=29&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Honda Civic, LX Hatchback CVT" data-test="newListing" data-test-item="19XFL2H59RE038019" data-test-dealerid="9787">
                                                            <div class="relative w-full">
                                                                <div class="picture-container picture-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;"><img class="picture-block" sizes="300px" src="https://static.tcimg.net/vehicles/primary/41f7bfd45d9be164/2024-Honda-Civic-white-full_color-driver_side_front_quarter.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=202.5&amp;pad=53&amp;w=360" srcset="https://static.tcimg.net/vehicles/primary/41f7bfd45d9be164/2024-Honda-Civic-white-full_color-driver_side_front_quarter.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=202.5&amp;pad=53&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/41f7bfd45d9be164/2024-Honda-Civic-white-full_color-driver_side_front_quarter.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=315&amp;pad=53&amp;w=560 560w" loading="lazy" alt="" role="presentation"></div>
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
                                                                    <div class="flex items-center gap-1"></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Honda</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Civic LX Hatchback CVT</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$26,500</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Torrance, CA</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Honda Civic, LX Hatchback CVT" href="/new-cars-for-sale/listing/19XFL2H59RE038019/2024-honda-civic/?position=30&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Santa Cruz, Limited AWD" data-test="newListing" data-test-item="5NTJEDDF8RH125499" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/99/54/5NTJEDDF8RH125499/TV6WYN4T2OJDWSIFX6ZQYJYD3M-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/99/54/5NTJEDDF8RH125499/TV6WYN4T2OJDWSIFX6ZQYJYD3M-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/99/54/5NTJEDDF8RH125499/TV6WYN4T2OJDWSIFX6ZQYJYD3M-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/99/54/5NTJEDDF8RH125499/TV6WYN4T2OJDWSIFX6ZQYJYD3M-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/99/54/5NTJEDDF8RH125499/TV6WYN4T2OJDWSIFX6ZQYJYD3M-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/99/54/5NTJEDDF8RH125499/TV6WYN4T2OJDWSIFX6ZQYJYD3M-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Santa Cruz Limited AWD</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$43,445</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Santa Cruz, Limited AWD" href="/new-cars-for-sale/listing/5NTJEDDF8RH125499/2024-hyundai-santa-cruz/?position=31&amp;sourceType=marketplace"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3 flex grow col-md-6 col-xl-4">
                                                    <div class="flex w-full flex-col">
                                                        <div class="relative rounded-md shadow-lg" aria-label="View details for 2024 Hyundai Tucson, SEL FWD Limited Availability" data-test="newListing" data-test-item="5NMJB3DE5RH425815" data-test-dealerid="16807">
                                                            <div class="relative w-full">
                                                                <div class="preprocessed-image-container preprocessed-image-container-block rounded-md overflow-hidden border-b-[1px]" style="padding-bottom: 56.25%;">
                                                                    <div class="img-container img-container-block preprocessed-image-inner" style="height: auto; padding-bottom: 56.25%; width: 100%;"><img sizes="300px" src="https://listings-prod.tcimg.net/listings/16807/15/58/5NMJB3DE5RH425815/FC5SCVVYD6EHDA6DIEVQZ5OTJM-cr-360.jpg" alt="" role="presentation" loading="lazy" class="img-inner img-block" srcset="https://listings-prod.tcimg.net/listings/16807/15/58/5NMJB3DE5RH425815/FC5SCVVYD6EHDA6DIEVQZ5OTJM-cr-60.jpg 60w, https://listings-prod.tcimg.net/listings/16807/15/58/5NMJB3DE5RH425815/FC5SCVVYD6EHDA6DIEVQZ5OTJM-cr-120.jpg 120w, https://listings-prod.tcimg.net/listings/16807/15/58/5NMJB3DE5RH425815/FC5SCVVYD6EHDA6DIEVQZ5OTJM-cr-180.jpg 180w, https://listings-prod.tcimg.net/listings/16807/15/58/5NMJB3DE5RH425815/FC5SCVVYD6EHDA6DIEVQZ5OTJM-cr-360.jpg 360w, https://listings-prod.tcimg.net/listings/16807/15/58/5NMJB3DE5RH425815/FC5SCVVYD6EHDA6DIEVQZ5OTJM-cr-540.jpg 540w" style="background-image: none;"></div>
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
                                                                    <div class="flex items-center gap-1"><span class="inline-block whitespace-nowrap rounded-full px-2 py-[2px] text-[10px] bg-white text-dark flex flex-nowrap px-[8px] drop-shadow-md" data-test="vehicleCardOverlayBadge">Dealer Discount Available</span></div>
                                                                </div><button type="button" class="link-button flex justify-center active:bg-transparent hover:no-underline group absolute top-0 right-0 z-10 p-2" aria-label="Like button" data-test="vehicleCardLikeButton" data-test-item=""><svg viewBox="0 0 24 24" class="icon icon-fill-default shrink-0 stroke-white text-dark" aria-hidden="true" style="width: 22px; height: 22px;">
                                                                        <use href="#outlined-heart-fill"></use>
                                                                    </svg>
                                                                    <div class="group-hover:text-white group-hover:underline"></div>
                                                                </button>
                                                            </div>
                                                            <div class="mt-1 flex w-full items-start p-2 text-left">
                                                                <div class="w-full truncate">
                                                                    <div data-test="vehicleCardInfo" class="text-sm">
                                                                        <div data-test="vehicleCardConditionYearMake" class="w-full truncate font-bold">New 2024 Hyundai</div>
                                                                        <div class="w-full truncate" data-test="vehicleCardTrim">Tucson SEL FWD Limited Availability</div>
                                                                    </div>
                                                                    <div class="mt-1 flex items-center justify-between gap-1">
                                                                        <div class="flex items-center">
                                                                            <h3 class="heading-4 normal-case flex items-center">
                                                                                <div class="truncate" data-test="vehicleCardMsrpLabelAmount">
                                                                                    <div class="flex items-end">
                                                                                        <div class="text-[18px]">$31,955</div>
                                                                                        <div class="flex pb-[1px]">
                                                                                            <div class="ml-1 mt-[2px] text-[14px]">Total MSRP</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-test="vehicleCardFooter" class="flex w-full items-center justify-between border-t-[1px] px-2 py-2 text-xs text-[#707070]">
                                                                <div class="min-h-[18px]">Oklahoma City, OK</div>
                                                                <div class="flex items-center gap-1"></div>
                                                            </div><a class="absolute top-0 left-0 bottom-0 right-0 w-full z-[2]" data-test="vehicleCardLink" aria-label="View details for 2024 Hyundai Tucson, SEL FWD Limited Availability" href="/new-cars-for-sale/listing/5NMJB3DE5RH425815/2024-hyundai-tucson/?position=32&amp;sourceType=marketplace"></a>
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
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item active"><a aria-label="Page 1" aria-current="page" data-test="paginationLink" class="page-link" href="/new-cars-for-sale/listings/">1</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 2" aria-current="false" data-test="paginationLink" class="page-link" href="/new-cars-for-sale/listings/?page=2">2</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 3" aria-current="false" data-test="paginationLink" class="page-link" href="/new-cars-for-sale/listings/?page=3">3</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 4" aria-current="false" data-test="paginationLink" class="page-link" href="/new-cars-for-sale/listings/?page=4">4</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 5" aria-current="false" data-test="paginationLink" class="page-link" href="/new-cars-for-sale/listings/?page=5">5</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 6" aria-current="false" data-test="paginationLink" class="page-link" href="/new-cars-for-sale/listings/?page=6">6</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 7" aria-current="false" data-test="paginationLink" class="page-link" href="/new-cars-for-sale/listings/?page=7">7</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 8" aria-current="false" data-test="paginationLink" class="page-link" href="/new-cars-for-sale/listings/?page=8">8</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 9" aria-current="false" data-test="paginationLink" class="page-link" href="/new-cars-for-sale/listings/?page=9">…</a></li>
                                                    <li data-test="paginationItem" class="hidden-sm-down page-item"><a aria-label="Page 333" aria-current="false" data-test="paginationLink" class="page-link" href="/new-cars-for-sale/listings/?page=333">333</a></li>
                                                    <li data-test="mobilePageRange" class="pagination-mobile-range-items hidden-md-up page-item">Page 1 of 333</li>
                                                    <li data-test="paginationDirectionalItem" class="page-item"><a aria-label="Go to next page" aria-disabled="false" data-test="Pagination-directional-next" class="page-link" href="/new-cars-for-sale/listings/?page=2"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
                                                                <use href="#keyboard_arrow_right"></use>
                                                            </svg></a></li>
                                                    <li data-test="paginationDirectionalItem" class="page-item"><a aria-label="Go to last page" aria-disabled="false" data-test="Pagination-directional-last" class="pagination-double-chevron page-link" href="/new-cars-for-sale/listings/?page=333"><svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true" style="width: 24px; height: 24px;">
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
                            <div class="py-3 xl:ml-[170px]"></div>
                            <section>
                                <div class="py-5">
                                    <div class="container">
                                        <div class="grid grid-cols-1 gap-x-3 border-b md:grid-cols-2 md:border-0">
                                            <div class="expandable-list-item border-t"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="staticSeoFooter">
                                                    <div class="heading-4 normal-case w-full px-3 py-3">All Makes</div><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse" style="">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <ul class="space-y-2">
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="0" href="/new-cars-for-sale/listings/acura/">New Acuras</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="1" href="/new-cars-for-sale/listings/alfa-romeo/">New Alfa Romeos</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="2" href="/new-cars-for-sale/listings/audi/">New Audis</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="3" href="/new-cars-for-sale/listings/bmw/">New BMWs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="4" href="/new-cars-for-sale/listings/buick/">New Buicks</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="5" href="/new-cars-for-sale/listings/cadillac/">New Cadillacs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="6" href="/new-cars-for-sale/listings/chevrolet/">New Chevrolets</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="7" href="/new-cars-for-sale/listings/chrysler/">New Chryslers</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="8" href="/new-cars-for-sale/listings/dodge/">New Dodges</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="9" href="/new-cars-for-sale/listings/fiat/">New FIATs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="10" href="/new-cars-for-sale/listings/ford/">New Fords</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="11" href="/new-cars-for-sale/listings/genesis/">New Genesis</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="12" href="/new-cars-for-sale/listings/gmc/">New GMCs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="13" href="/new-cars-for-sale/listings/honda/">New Hondas</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="14" href="/new-cars-for-sale/listings/hyundai/">New Hyundais</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="15" href="/new-cars-for-sale/listings/infiniti/">New INFINITIs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="16" href="/new-cars-for-sale/listings/jaguar/">New Jaguars</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="17" href="/new-cars-for-sale/listings/jeep/">New Jeeps</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="18" href="/new-cars-for-sale/listings/kia/">New Kias</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="19" href="/new-cars-for-sale/listings/land-rover/">New Land Rovers</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="20" href="/new-cars-for-sale/listings/lexus/">New Lexus</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="21" href="/new-cars-for-sale/listings/lincoln/">New Lincolns</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="22" href="/new-cars-for-sale/listings/maserati/">New Maseratis</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="23" href="/new-cars-for-sale/listings/mazda/">New Mazdas</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="24" href="/new-cars-for-sale/listings/mercedes-benz/">New Mercedes-Benz</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="25" href="/new-cars-for-sale/listings/mini/">New MINIs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="26" href="/new-cars-for-sale/listings/mitsubishi/">New Mitsubishis</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="27" href="/new-cars-for-sale/listings/nissan/">New Nissans</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="28" href="/new-cars-for-sale/listings/ram/">New Rams</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="29" href="/new-cars-for-sale/listings/subaru/">New Subarus</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="30" href="/new-cars-for-sale/listings/toyota/">New Toyotas</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="31" href="/new-cars-for-sale/listings/volkswagen/">New Volkswagens</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="32" href="/new-cars-for-sale/listings/volvo/">New Volvos</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="staticSeoFooter">
                                                    <div class="heading-4 normal-case w-full px-3 py-3">Vehicle Types</div><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse" style="">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <ul class="space-y-2">
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="0" href="/new-cars-for-sale/listings/body-convertible/">New Convertibles</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="1" href="/new-cars-for-sale/listings/body-coupe/">New Coupes</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="2" href="/new-cars-for-sale/listings/fuel-diesel/">New Diesels</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="3" href="/new-cars-for-sale/listings/fuel-electric/">New Electric Cars</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="4" href="/new-cars-for-sale/listings/body-hatchback/">New Hatchbacks</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="5" href="/new-cars-for-sale/listings/fuel-all-hybrids/">New Hybrids</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="6" href="/new-cars-for-sale/listings/body-sedan/">New Sedans</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="7" href="/new-cars-for-sale/listings/body-suv/">New SUVs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="8" href="/new-cars-for-sale/listings/body-truck/">New Trucks</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="9" href="/new-cars-for-sale/listings/body-van/">New Vans</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="10" href="/new-cars-for-sale/listings/body-wagon/">New Wagons</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item md:border-b"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="staticSeoFooter">
                                                    <div class="heading-4 normal-case w-full px-3 py-3">Used Makes</div><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse" style="">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <ul class="space-y-2">
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="0" href="/used-cars-for-sale/listings/acura/">Used Acuras</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="1" href="/used-cars-for-sale/listings/alfa-romeo/">Used Alfa Romeos</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="2" href="/used-cars-for-sale/listings/audi/">Used Audis</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="3" href="/used-cars-for-sale/listings/bmw/">Used BMWs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="4" href="/used-cars-for-sale/listings/buick/">Used Buicks</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="5" href="/used-cars-for-sale/listings/cadillac/">Used Cadillacs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="6" href="/used-cars-for-sale/listings/chevrolet/">Used Chevrolets</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="7" href="/used-cars-for-sale/listings/chrysler/">Used Chryslers</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="8" href="/used-cars-for-sale/listings/dodge/">Used Dodges</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="9" href="/used-cars-for-sale/listings/fiat/">Used FIATs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="10" href="/used-cars-for-sale/listings/ford/">Used Fords</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="11" href="/used-cars-for-sale/listings/genesis/">Used Genesis</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="12" href="/used-cars-for-sale/listings/gmc/">Used GMCs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="13" href="/used-cars-for-sale/listings/honda/">Used Hondas</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="14" href="/used-cars-for-sale/listings/hummer/">Used HUMMERs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="15" href="/used-cars-for-sale/listings/hyundai/">Used Hyundais</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="16" href="/used-cars-for-sale/listings/infiniti/">Used INFINITIs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="17" href="/used-cars-for-sale/listings/jaguar/">Used Jaguars</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="18" href="/used-cars-for-sale/listings/jeep/">Used Jeeps</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="19" href="/used-cars-for-sale/listings/kia/">Used Kias</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="20" href="/used-cars-for-sale/listings/land-rover/">Used Land Rovers</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="21" href="/used-cars-for-sale/listings/lexus/">Used Lexus</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="22" href="/used-cars-for-sale/listings/lincoln/">Used Lincolns</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="23" href="/used-cars-for-sale/listings/maserati/">Used Maseratis</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="24" href="/used-cars-for-sale/listings/mazda/">Used Mazdas</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="25" href="/used-cars-for-sale/listings/mercedes-benz/">Used Mercedes-Benz</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="26" href="/used-cars-for-sale/listings/mercury/">Used Mercurys</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="27" href="/used-cars-for-sale/listings/mini/">Used MINIs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="28" href="/used-cars-for-sale/listings/mitsubishi/">Used Mitsubishis</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="29" href="/used-cars-for-sale/listings/nissan/">Used Nissans</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="30" href="/used-cars-for-sale/listings/polestar/">Used Polestars</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="31" href="/used-cars-for-sale/listings/pontiac/">Used Pontiacs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="32" href="/used-cars-for-sale/listings/porsche/">Used Porsches</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="33" href="/used-cars-for-sale/listings/ram/">Used Rams</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="34" href="/used-cars-for-sale/listings/rivian/">Used Rivians</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="35" href="/used-cars-for-sale/listings/saab/">Used Saabs</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="36" href="/used-cars-for-sale/listings/saturn/">Used Saturns</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="37" href="/used-cars-for-sale/listings/scion/">Used Scions</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="38" href="/used-cars-for-sale/listings/smart/">Used smarts</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="39" href="/used-cars-for-sale/listings/subaru/">Used Subarus</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="40" href="/used-cars-for-sale/listings/suzuki/">Used Suzukis</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="41" href="/used-cars-for-sale/listings/tesla/">Used Teslas</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="42" href="/used-cars-for-sale/listings/toyota/">Used Toyotas</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="43" href="/used-cars-for-sale/listings/volkswagen/">Used Volkswagens</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="44" href="/used-cars-for-sale/listings/volvo/">Used Volvos</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expandable-list-item md:border-b"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="staticSeoFooter">
                                                    <div class="heading-4 normal-case w-full px-3 py-3">Popular Cities</div><span class="ml-3 whitespace-nowrap">
                                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                                <use href="#keyboard_arrow_down"></use>
                                                            </svg></div>
                                                    </span>
                                                </button>
                                                <div class="expandable-list-item-collapse border-t collapse" style="">
                                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                                        <ul class="space-y-2">
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="0" href="/new-cars-for-sale/listings/location-austin-tx/">New Cars in Austin, TX</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="1" href="/new-cars-for-sale/listings/location-boston-ma/">New Cars in Boston, MA</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="2" href="/new-cars-for-sale/listings/location-charlotte-nc/">New Cars in Charlotte, NC</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="3" href="/new-cars-for-sale/listings/location-chicago-il/">New Cars in Chicago, IL</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="4" href="/new-cars-for-sale/listings/location-columbus-oh/">New Cars in Columbus, OH</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="5" href="/new-cars-for-sale/listings/location-dallas-tx/">New Cars in Dallas, TX</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="6" href="/new-cars-for-sale/listings/location-denver-co/">New Cars in Denver, CO</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="7" href="/new-cars-for-sale/listings/location-detroit-mi/">New Cars in Detroit, MI</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="8" href="/new-cars-for-sale/listings/location-el-paso-tx/">New Cars in El Paso, TX</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="9" href="/new-cars-for-sale/listings/location-fort-worth-tx/">New Cars in Fort Worth, TX</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="10" href="/new-cars-for-sale/listings/location-houston-tx/">New Cars in Houston, TX</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="11" href="/new-cars-for-sale/listings/location-indianapolis-in/">New Cars in Indianapolis, IN</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="12" href="/new-cars-for-sale/listings/location-jacksonville-fl/">New Cars in Jacksonville, FL</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="13" href="/new-cars-for-sale/listings/location-los-angeles-ca/">New Cars in Los Angeles, CA</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="14" href="/new-cars-for-sale/listings/location-memphis-tn/">New Cars in Memphis, TN</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="15" href="/new-cars-for-sale/listings/location-nashville-tn/">New Cars in Nashville, TN</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="16" href="/new-cars-for-sale/listings/location-new-york-ny/">New Cars in New York, NY</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="17" href="/new-cars-for-sale/listings/location-philadelphia-pa/">New Cars in Philadelphia, PA</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="18" href="/new-cars-for-sale/listings/location-phoenix-az/">New Cars in Phoenix, AZ</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="19" href="/new-cars-for-sale/listings/location-san-antonio-tx/">New Cars in San Antonio, TX</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="20" href="/new-cars-for-sale/listings/location-san-diego-ca/">New Cars in San Diego, CA</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="21" href="/new-cars-for-sale/listings/location-san-francisco-ca/">New Cars in San Francisco, CA</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="22" href="/new-cars-for-sale/listings/location-san-jose-ca/">New Cars in San Jose, CA</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="23" href="/new-cars-for-sale/listings/location-seattle-wa/">New Cars in Seattle, WA</a></li>
                                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" data-test="staticSeoLink" data-test-item="24" href="/new-cars-for-sale/listings/location-washington-dc/">New Cars in Washington, DC</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </main>
             @endsection