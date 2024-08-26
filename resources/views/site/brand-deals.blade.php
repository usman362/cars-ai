@extends('site.layouts.app')
@section('content')
    <main id="mainContent" style="margin-top: 60px"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div class="relative overflow-hidden">
            <div class="hidden-sm-down absolute top-[-60px] z-1 h-[60px] w-[100%] shadow-[2px_2px_5px_rgba(1,_1,_1,_0.15)]">
            </div>
            <div class="container" data-test="makeDealsPage">
                <div class="pt-3 md:pt-5 lg:pt-6">
                    <nav aria-label="breadcrumb">
                        <ol class="flex flex-wrap">
                            <li data-test="breadcrumbListItem" class="list-none" aria-current="false"><a href="/deals/">Deals
                                    &amp; Incentives</a><span class="my-[0px] mx-[9px] text-muted">&gt;</span></li>
                            <li data-test="breadcrumbListItem" class="list-none" aria-current="page"><span>All Acura
                                    Deals</span></li>
                        </ol>
                    </nav>
                </div>
                <div class="pt-4 md:pt-3">
                    <h1 class="heading-2 normal-case heading-lg-1 lg:normal-case pb-2-5 md:pb-4"
                        data-test="dealsPageHeading">Acura Leases, Deals &amp; Incentives for August&nbsp;2024</h1>
                    <div class="flex justify-between pb-4 lg:pb-0 hidden-md-up">
                        <div class="flex lg:flex-row items-baseline md:flex-col">
                            <div class="pr-3 md:pb-2 lg:pb-0" data-test="zipCodeValue"><span class="hidden-md-down">We found
                                </span><span class="md:font-bold">30 <span>deals </span></span><span
                                    class="hidden-lg-up">found </span>near <span class="hidden-sm-down">Santa Monica,
                                    CA</span> <span class="max-md:font-bold">90401</span></div><button type="button"
                                class="link-button block lg:inline" data-test="changeLocationModalLink">Change <span
                                    class="hidden-sm-down">Location</span><span class="hidden-md-up">ZIP</span></button>
                        </div>
                    </div>
                    <div class="pb-3 md:pb-4 lg:pb-4">
                        <div class="flex flex-col items-center md:flex-row md:items-stretch">
                            <p class="sr-only">Changing options in this select field will update the page according to the
                                make and model selected.</p>
                            <div class="field-container-challenger w-[100%] md:w-[185px] lg:w-[236px] md:mr-3">
                                <div
                                    class="field-wrapper-challenger field-theme-dark-challenger field-label-padding-challenger">
                                    <div class="field-content-row field-with-suffix">
                                        <div class="field-input-label-challenger input-label-select"><select required=""
                                                aria-label="Select Make" class="form-select-element-challenger"
                                                data-test="dealsLandingSelectMake">
                                                <option disabled="" value="">Select Make</option>
                                                <option value="acura">Acura</option>
                                                <option value="alfa-romeo">Alfa Romeo</option>
                                                <option value="audi">Audi</option>
                                                <option value="bmw">BMW</option>
                                                <option value="buick">Buick</option>
                                                <option value="cadillac">Cadillac</option>
                                                <option value="chevrolet">Chevrolet</option>
                                                <option value="chrysler">Chrysler</option>
                                                <option value="dodge">Dodge</option>
                                                <option value="fiat">FIAT</option>
                                                <option value="ford">Ford</option>
                                                <option value="genesis">Genesis</option>
                                                <option value="gmc">GMC</option>
                                                <option value="honda">Honda</option>
                                                <option value="hyundai">Hyundai</option>
                                                <option value="infiniti">INFINITI</option>
                                                <option value="jaguar">Jaguar</option>
                                                <option value="jeep">Jeep</option>
                                                <option value="kia">Kia</option>
                                                <option value="land-rover">Land Rover</option>
                                                <option value="lexus">Lexus</option>
                                                <option value="lincoln">Lincoln</option>
                                                <option value="maserati">Maserati</option>
                                                <option value="mazda">Mazda</option>
                                                <option value="mercedes-benz">Mercedes-Benz</option>
                                                <option value="mini">MINI</option>
                                                <option value="mitsubishi">Mitsubishi</option>
                                                <option value="nissan">Nissan</option>
                                                <option value="ram">Ram</option>
                                                <option value="subaru">Subaru</option>
                                                <option value="toyota">Toyota</option>
                                                <option value="volkswagen">Volkswagen</option>
                                                <option value="volvo">Volvo</option>
                                            </select>
                                            <div class="field-label-text-challenger" data-test="fieldLabel"><label
                                                    data-ignore-contrast="true">Select Make</label></div>
                                        </div>
                                        <div class="field-addon-challenger field-addon-challenger-suffix"><svg
                                                viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true"
                                                style="width: 24px; height: 24px;">
                                                <use href="#arrow_drop_down"></use>
                                            </svg></div>
                                    </div>
                                    <div class="field-message-challenger">
                                        <div class="field-message-text-challenger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="field-container-challenger pt-1 md:pt-0 w-[100%] md:w-[185px] lg:w-[236px]">
                                <div
                                    class="field-wrapper-challenger field-theme-dark-challenger field-label-padding-challenger">
                                    <div class="field-content-row field-with-suffix">
                                        <div class="field-input-label-challenger input-label-select"><select required=""
                                                aria-label="Select Model" class="form-select-element-challenger"
                                                data-test="dealsLandingSelectModel">
                                                <option disabled="" value="">Select Model</option>
                                                <option value="All Models">All Models</option>
                                                <option value="integra">Integra</option>
                                                <option value="mdx">MDX</option>
                                                <option value="rdx">RDX</option>
                                                <option value="tlx">TLX</option>
                                                <option value="zdx">ZDX</option>
                                            </select>
                                            <div class="field-label-text-challenger" data-test="fieldLabel"><label
                                                    data-ignore-contrast="true">Select Model</label></div>
                                        </div>
                                        <div class="field-addon-challenger field-addon-challenger-suffix"><svg
                                                viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true"
                                                style="width: 24px; height: 24px;">
                                                <use href="#arrow_drop_down"></use>
                                            </svg></div>
                                    </div>
                                    <div class="field-message-challenger">
                                        <div class="field-message-text-challenger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden-md-up pb-3"><label class="flex items-center"><span
                            class="inline-block text-muted">Sort by:</span>
                        <div class="field-container-challenger">
                            <div class="field-wrapper-challenger">
                                <div class="field-content-row field-with-suffix">
                                    <div class="field-input-label-challenger input-label-select"><select required=""
                                            aria-label=""
                                            class="form-select-element-challenger form-select-no-border form-select-no-label form-select-borderless">
                                            <option value="name-asc">Model Name A-Z</option>
                                            <option value="name-desc">Model Name Z-A</option>
                                            <option value="price-asc">Price Low to High</option>
                                            <option value="price-desc">Price High to Low</option>
                                        </select></div>
                                    <div
                                        class="field-addon-challenger field-addon-challenger-suffix field-addon-challenger-suffix-inaccessible">
                                        <svg viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true"
                                            style="width: 24px; height: 24px;">
                                            <use href="#arrow_drop_down"></use>
                                        </svg></div>
                                </div>
                                <div class="field-message-challenger">
                                    <div class="field-message-text-challenger"></div>
                                </div>
                            </div>
                        </div>
                    </label></div>
                <div class="max-w-[541px]">
                    <fieldset class="switch-bar switch-bar-block mb-3 md:mb-4 lg:mb-5" aria-invalid="false">
                        <legend class="sr-only">Select Deal Filter Type</legend><label
                            class="form-radio-control switch w-full"><input
                                class="form-radio-control-input custom-control-input" type="radio"
                                name="radio-group-25" value="ALL" checked="">
                            <div>All<span class="hidden-sm-down"> Deals</span> </div>
                        </label><label class="form-radio-control switch w-full"><input
                                class="form-radio-control-input custom-control-input" type="radio"
                                name="radio-group-25" value="CASH">
                            <div>Cash<span class="hidden-sm-down"> Offer</span> </div>
                        </label><label class="form-radio-control switch w-full"><input
                                class="form-radio-control-input custom-control-input" type="radio"
                                name="radio-group-25" value="FINANCE">
                            <div>Finance </div>
                        </label><label class="form-radio-control switch w-full"><input
                                class="form-radio-control-input custom-control-input" type="radio"
                                name="radio-group-25" value="LEASE">
                            <div>Lease </div>
                        </label>
                    </fieldset>
                </div>
            </div>
            <div class="hidden-sm-down lg:bg-[#f8f8f8]">
                <div class="container">
                    <div class="flex justify-between pb-4 lg:pb-0 lg:pt-5">
                        <div class="flex lg:flex-row items-baseline md:flex-col">
                            <div class="pr-3 md:pb-2 lg:pb-0" data-test="zipCodeValue"><span class="hidden-md-down">We
                                    found </span><span class="md:font-bold">30 <span>deals </span></span><span
                                    class="hidden-lg-up">found </span>near <span class="hidden-sm-down">Santa Monica,
                                    CA</span> <span class="max-md:font-bold">90401</span></div><button type="button"
                                class="link-button block lg:inline" data-test="changeLocationModalLinkMdUp">Change <span
                                    class="hidden-sm-down">Location</span><span class="hidden-md-up">ZIP</span></button>
                        </div>
                        <div class="hidden-sm-down mt-[-8px]"><label class="flex items-center"><span
                                    class="inline-block text-muted">Sort by:</span>
                                <div class="field-container-challenger">
                                    <div class="field-wrapper-challenger">
                                        <div class="field-content-row field-with-suffix">
                                            <div class="field-input-label-challenger input-label-select"><select
                                                    required="" aria-label=""
                                                    class="form-select-element-challenger form-select-no-border form-select-no-label form-select-borderless">
                                                    <option value="name-asc">Model Name A-Z</option>
                                                    <option value="name-desc">Model Name Z-A</option>
                                                    <option value="price-asc">Price Low to High</option>
                                                    <option value="price-desc">Price High to Low</option>
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
                            </label></div>
                    </div>
                </div>
            </div>
            <div class="bg-light pt-4">
                <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                        <div class="flex items-baseline pb-2">
                            <div class="flex items-center md:mr-2">
                                <h2 class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                    Acura Integra</h2><button type="button"
                                    class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                    aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                    data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default shrink-0 text-white stroke-black" aria-hidden="true"
                                        style="width: 28px; height: 28px;">
                                        <use href="#outlined-heart-fill"></use>
                                    </svg>
                                    <div class="group-hover:text-dark group-hover:underline"></div>
                                </button><button type="button"
                                    class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                    aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                    data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default shrink-0 text-white stroke-black" aria-hidden="true"
                                        style="width: 30px; height: 30px;">
                                        <use href="#outlined-heart-fill"></use>
                                    </svg>
                                    <div class="group-hover:text-dark group-hover:underline"></div>
                                </button>
                            </div>
                            <div>
                                <div class="heading-4 normal-case inline-block">3 Deals Available</div>
                            </div>
                        </div>
                        <div class="relative">
                            <div
                                class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                            </div>
                            <div class="hidden-sm-down">
                                <div class="top-[119px] pt-3 md:absolute md:w-full">
                                    <div class="ml-0" data-test="buildAndPriceCTA"><a data-ignore-contrast="true"
                                            data-loading="false" data-test="dealsModelCardConfigUrl"
                                            class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                            href="/prices-new/acura/integra-level-setting/?modelYear=2025"><span
                                                class="btn-inner">Build &amp; Price</span></a></div>
                                    <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                            href="/new-cars-for-sale/listings/acura/integra/" target=""
                                            rel="noopener" data-test="buttonViewInventory"
                                            class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                class="btn-inner">View Inventory</span></a></div>
                                </div>
                            </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2025 Acura Integra</span>
                            <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img
                                        class="picture-block" sizes="400px"
                                        src="https://static.tcimg.net/vehicles/primary/9f45842b266abbb0/2024-Acura-Integra-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                        srcset="https://static.tcimg.net/vehicles/primary/9f45842b266abbb0/2024-Acura-Integra-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/9f45842b266abbb0/2024-Acura-Integra-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                        alt="" role="presentation"></div>
                                <div class="hidden-lg-up pt-1 text-center">2025 Acura Integra</div>
                            </div>
                            <div class="hidden-md-up">
                                <div class="top-[119px] pt-3 md:absolute md:w-full">
                                    <div class="ml-0" data-test="buildAndPriceCTA"><a data-ignore-contrast="true"
                                            data-loading="false" data-test="dealsModelCardConfigUrl"
                                            class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                            href="/prices-new/acura/integra-level-setting/?modelYear=2025"><span
                                                class="btn-inner">Build &amp; Price</span></a></div>
                                    <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                            href="/new-cars-for-sale/listings/acura/integra/" target=""
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
                                                <div class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">CASH
                                                        OFFER</span></div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">
                                                    Loyalty/Conquest Offer</h2>
                                                <div class="flex flex-nowrap justify-between">
                                                    <div class="inline-block">
                                                        <div>
                                                            <div class="text-sm font-bold">Up to</div>
                                                            <div class="heading-3 normal-case">$750</div>
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
                                <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                    <div class="h-full flex flex-col bg-white min-h-[281px]"
                                        data-test="dealsIncentiveCard">
                                        <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                            <div class="flex grow flex-col">
                                                <div class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">CASH
                                                        OFFER</span></div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Acura
                                                    Military Appreciation&nbsp;Offer</h2>
                                                <div class="flex flex-nowrap justify-between">
                                                    <div class="inline-block">
                                                        <div>
                                                            <div class="text-sm font-bold">Up to</div>
                                                            <div class="heading-3 normal-case">$750</div>
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
                                <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                    <div class="h-full flex flex-col bg-white min-h-[281px]"
                                        data-test="dealsIncentiveCard">
                                        <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                            <div class="flex grow flex-col">
                                                <div class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">CASH
                                                        OFFER</span></div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Acura
                                                    Graduate Bonus&nbsp;Offer</h2>
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
                            </div>
                            <div class="pt-4 lg:hidden"><button type="button" class="link-button">See More</button>
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
                                <h2 class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                    Acura MDX</h2><button type="button"
                                    class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                    aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                    data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default shrink-0 text-white stroke-black" aria-hidden="true"
                                        style="width: 28px; height: 28px;">
                                        <use href="#outlined-heart-fill"></use>
                                    </svg>
                                    <div class="group-hover:text-dark group-hover:underline"></div>
                                </button><button type="button"
                                    class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                    aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                    data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default shrink-0 text-white stroke-black" aria-hidden="true"
                                        style="width: 30px; height: 30px;">
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
                                    <div class="ml-0" data-test="buildAndPriceCTA"><a data-ignore-contrast="true"
                                            data-loading="false" data-test="dealsModelCardConfigUrl"
                                            class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                            href="/prices-new/acura/mdx-level-setting/?modelYear=2025"><span
                                                class="btn-inner">Build &amp; Price</span></a></div>
                                    <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                            href="/new-cars-for-sale/listings/acura/mdx/" target="" rel="noopener"
                                            data-test="buttonViewInventory"
                                            class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                class="btn-inner">View Inventory</span></a></div>
                                </div>
                            </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2025 Acura MDX</span>
                            <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img
                                        class="picture-block" sizes="400px"
                                        src="https://static.tcimg.net/vehicles/primary/de8dbaaee65a4b71/2025-Acura-MDX-gray-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                        srcset="https://static.tcimg.net/vehicles/primary/de8dbaaee65a4b71/2025-Acura-MDX-gray-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/de8dbaaee65a4b71/2025-Acura-MDX-gray-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                        alt="" role="presentation"></div>
                                <div class="hidden-lg-up pt-1 text-center">2025 Acura MDX</div>
                            </div>
                            <div class="hidden-md-up">
                                <div class="top-[119px] pt-3 md:absolute md:w-full">
                                    <div class="ml-0" data-test="buildAndPriceCTA"><a data-ignore-contrast="true"
                                            data-loading="false" data-test="dealsModelCardConfigUrl"
                                            class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                            href="/prices-new/acura/mdx-level-setting/?modelYear=2025"><span
                                                class="btn-inner">Build &amp; Price</span></a></div>
                                    <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                            href="/new-cars-for-sale/listings/acura/mdx/" target="" rel="noopener"
                                            data-test="buttonViewInventory"
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
                                                <div class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">CASH
                                                        OFFER</span></div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Competitor
                                                    Conquest Bonus</h2>
                                                <div class="flex flex-nowrap justify-between">
                                                    <div class="inline-block">
                                                        <div>
                                                            <div class="text-sm font-bold">Up to</div>
                                                            <div class="heading-3 normal-case">$1,000</div>
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
                                                <div class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">CASH
                                                        OFFER</span></div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Acura
                                                    Loyalty Appreciation&nbsp;Offer</h2>
                                                <div class="flex flex-nowrap justify-between">
                                                    <div class="inline-block">
                                                        <div>
                                                            <div class="text-sm font-bold">Up to</div>
                                                            <div class="heading-3 normal-case">$1,000</div>
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
                                <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                    <div class="h-full flex flex-col bg-white min-h-[281px]"
                                        data-test="dealsIncentiveCard">
                                        <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                            <div class="flex grow flex-col">
                                                <div class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">FINANCE</span>
                                                </div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Retail APR
                                                </h2>
                                                <div class="flex flex-nowrap justify-between">
                                                    <div class="mr-4 inline-block">
                                                        <div class="heading-3 normal-case">4.9%</div>
                                                        <div>APR</div>
                                                    </div>
                                                    <div class="mr-4 inline-block">
                                                        <div class="heading-3 normal-case">60</div>
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
                            </div>
                            <div class="pt-4"><button type="button" class="link-button">See More</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-light pt-4">
                <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                        <div class="flex items-baseline pb-2">
                            <div class="flex items-center md:mr-2">
                                <h2 class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                    Acura RDX</h2><button type="button"
                                    class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                    aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                    data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default shrink-0 text-white stroke-black" aria-hidden="true"
                                        style="width: 28px; height: 28px;">
                                        <use href="#outlined-heart-fill"></use>
                                    </svg>
                                    <div class="group-hover:text-dark group-hover:underline"></div>
                                </button><button type="button"
                                    class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                    aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                    data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default shrink-0 text-white stroke-black" aria-hidden="true"
                                        style="width: 30px; height: 30px;">
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
                                    <div class="ml-0" data-test="buildAndPriceCTA"><a data-ignore-contrast="true"
                                            data-loading="false" data-test="dealsModelCardConfigUrl"
                                            class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                            href="/prices-new/acura/rdx-level-setting/?modelYear=2024"><span
                                                class="btn-inner">Build &amp; Price</span></a></div>
                                    <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                            href="/new-cars-for-sale/listings/acura/rdx/" target="" rel="noopener"
                                            data-test="buttonViewInventory"
                                            class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                class="btn-inner">View Inventory</span></a></div>
                                </div>
                            </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Acura RDX</span>
                            <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img
                                        class="picture-block" sizes="400px"
                                        src="https://static.tcimg.net/vehicles/primary/18b50061ebfbe6e8/2024-Acura-RDX-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                        srcset="https://static.tcimg.net/vehicles/primary/18b50061ebfbe6e8/2024-Acura-RDX-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/18b50061ebfbe6e8/2024-Acura-RDX-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                        alt="" role="presentation"></div>
                                <div class="hidden-lg-up pt-1 text-center">2024 Acura RDX</div>
                            </div>
                            <div class="hidden-md-up">
                                <div class="top-[119px] pt-3 md:absolute md:w-full">
                                    <div class="ml-0" data-test="buildAndPriceCTA"><a data-ignore-contrast="true"
                                            data-loading="false" data-test="dealsModelCardConfigUrl"
                                            class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                            href="/prices-new/acura/rdx-level-setting/?modelYear=2024"><span
                                                class="btn-inner">Build &amp; Price</span></a></div>
                                    <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                            href="/new-cars-for-sale/listings/acura/rdx/" target="" rel="noopener"
                                            data-test="buttonViewInventory"
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
                                                <div class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">CASH
                                                        OFFER</span></div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Acura Lease
                                                    Loyalty&nbsp;Offer</h2>
                                                <div class="flex flex-nowrap justify-between">
                                                    <div class="inline-block">
                                                        <div>
                                                            <div class="text-sm font-bold">Up to</div>
                                                            <div class="heading-3 normal-case">$2,500</div>
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
                                                <div class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">FINANCE</span>
                                                </div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Retail APR
                                                </h2>
                                                <div class="flex flex-nowrap justify-between">
                                                    <div class="mr-4 inline-block">
                                                        <div class="heading-3 normal-case">3.9%</div>
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
                                                <div class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">LEASE</span>
                                                </div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024 Acura
                                                    RDX&nbsp;Lease</h2>
                                                <div class="flex grow flex-nowrap">
                                                    <div class="mr-4 inline-block">
                                                        <div class="heading-3 normal-case">$484</div>
                                                        <div>per month</div>
                                                    </div>
                                                    <div class="inline-block">
                                                        <div class="heading-3 normal-case">36</div>
                                                        <div>months</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="my-2-5 border-t"></div><a data-test="viewLeaseDealsDetails"
                                                    href="/acura/rdx/lease/">View Lease Options</a>
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
            <div class="bg-light pt-4">
                <div class="container">
                    <div class="border-b pb-5" data-test="dealsSection">
                        <div class="flex items-baseline pb-2">
                            <div class="flex items-center md:mr-2">
                                <h2 class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                    Acura TLX</h2><button type="button"
                                    class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                    aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                    data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default shrink-0 text-white stroke-black" aria-hidden="true"
                                        style="width: 28px; height: 28px;">
                                        <use href="#outlined-heart-fill"></use>
                                    </svg>
                                    <div class="group-hover:text-dark group-hover:underline"></div>
                                </button><button type="button"
                                    class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                    aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                    data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default shrink-0 text-white stroke-black" aria-hidden="true"
                                        style="width: 30px; height: 30px;">
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
                                    <div class="ml-0" data-test="buildAndPriceCTA"><a data-ignore-contrast="true"
                                            data-loading="false" data-test="dealsModelCardConfigUrl"
                                            class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                            href="/prices-new/acura/tlx-level-setting/?modelYear=2024"><span
                                                class="btn-inner">Build &amp; Price</span></a></div>
                                    <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                            href="/new-cars-for-sale/listings/acura/tlx/" target="" rel="noopener"
                                            data-test="buttonViewInventory"
                                            class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                class="btn-inner">View Inventory</span></a></div>
                                </div>
                            </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Acura TLX</span>
                            <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img
                                        class="picture-block" sizes="400px"
                                        src="https://static.tcimg.net/vehicles/primary/dc49233584333169/2024-Acura-TLX-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                        srcset="https://static.tcimg.net/vehicles/primary/dc49233584333169/2024-Acura-TLX-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/dc49233584333169/2024-Acura-TLX-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                        alt="" role="presentation"></div>
                                <div class="hidden-lg-up pt-1 text-center">2024 Acura TLX</div>
                            </div>
                            <div class="hidden-md-up">
                                <div class="top-[119px] pt-3 md:absolute md:w-full">
                                    <div class="ml-0" data-test="buildAndPriceCTA"><a data-ignore-contrast="true"
                                            data-loading="false" data-test="dealsModelCardConfigUrl"
                                            class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                            href="/prices-new/acura/tlx-level-setting/?modelYear=2024"><span
                                                class="btn-inner">Build &amp; Price</span></a></div>
                                    <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                            href="/new-cars-for-sale/listings/acura/tlx/" target="" rel="noopener"
                                            data-test="buttonViewInventory"
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
                                                <div class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">CASH
                                                        OFFER</span></div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Competitor
                                                    Conquest - 2024&nbsp;TLX</h2>
                                                <div class="flex flex-nowrap justify-between">
                                                    <div class="inline-block">
                                                        <div>
                                                            <div class="text-sm font-bold">Up to</div>
                                                            <div class="heading-3 normal-case">$1,000</div>
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
                                <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                    <div class="h-full flex flex-col bg-white min-h-[281px]"
                                        data-test="dealsIncentiveCard">
                                        <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                            <div class="flex grow flex-col">
                                                <div class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">FINANCE</span>
                                                </div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Retail APR
                                                </h2>
                                                <div class="flex flex-nowrap justify-between">
                                                    <div class="mr-4 inline-block">
                                                        <div class="heading-3 normal-case">4.9%</div>
                                                        <div>APR</div>
                                                    </div>
                                                    <div class="mr-4 inline-block">
                                                        <div class="heading-3 normal-case">60</div>
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
                                                <div class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">LEASE</span>
                                                </div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024 Acura
                                                    TLX&nbsp;Lease</h2>
                                                <div class="flex grow flex-nowrap">
                                                    <div class="mr-4 inline-block">
                                                        <div class="heading-3 normal-case">$616</div>
                                                        <div>per month</div>
                                                    </div>
                                                    <div class="inline-block">
                                                        <div class="heading-3 normal-case">36</div>
                                                        <div>months</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="my-2-5 border-t"></div><a data-test="viewLeaseDealsDetails"
                                                    href="/acura/tlx/lease/">View Lease Options</a>
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
            <div class="bg-light pt-4">
                <div class="container">
                    <div class="border-b-0 pb-5" data-test="dealsSection">
                        <div class="flex items-baseline pb-2">
                            <div class="flex items-center md:mr-2">
                                <h2 class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                    Acura ZDX</h2><button type="button"
                                    class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                    aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                    data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default shrink-0 text-white stroke-black" aria-hidden="true"
                                        style="width: 28px; height: 28px;">
                                        <use href="#outlined-heart-fill"></use>
                                    </svg>
                                    <div class="group-hover:text-dark group-hover:underline"></div>
                                </button><button type="button"
                                    class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                    aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                    data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default shrink-0 text-white stroke-black" aria-hidden="true"
                                        style="width: 30px; height: 30px;">
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
                                    <div class="ml-0" data-test="buildAndPriceCTA"><a data-ignore-contrast="true"
                                            data-loading="false" data-test="dealsModelCardConfigUrl"
                                            class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                            href="/prices-new/acura/zdx-level-setting/?modelYear=2024"><span
                                                class="btn-inner">Build &amp; Price</span></a></div>
                                    <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                            href="/new-cars-for-sale/listings/acura/zdx/" target="" rel="noopener"
                                            data-test="buttonViewInventory"
                                            class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                class="btn-inner">View Inventory</span></a></div>
                                </div>
                            </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Acura ZDX</span>
                            <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img
                                        class="picture-block" sizes="400px"
                                        src="https://static.tcimg.net/vehicles/primary/c87f8a6e361a18d9/2024-Acura-ZDX-silver-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                        srcset="https://static.tcimg.net/vehicles/primary/c87f8a6e361a18d9/2024-Acura-ZDX-silver-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/c87f8a6e361a18d9/2024-Acura-ZDX-silver-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                        alt="" role="presentation"></div>
                                <div class="hidden-lg-up pt-1 text-center">2024 Acura ZDX</div>
                            </div>
                            <div class="hidden-md-up">
                                <div class="top-[119px] pt-3 md:absolute md:w-full">
                                    <div class="ml-0" data-test="buildAndPriceCTA"><a data-ignore-contrast="true"
                                            data-loading="false" data-test="dealsModelCardConfigUrl"
                                            class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                            href="/prices-new/acura/zdx-level-setting/?modelYear=2024"><span
                                                class="btn-inner">Build &amp; Price</span></a></div>
                                    <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                            href="/new-cars-for-sale/listings/acura/zdx/" target="" rel="noopener"
                                            data-test="buttonViewInventory"
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
                                                <div class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">CASH
                                                        OFFER</span></div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Federal EV
                                                    Tax&nbsp;Credit</h2>
                                                <div class="flex flex-nowrap justify-between">
                                                    <div class="inline-block">
                                                        <div>
                                                            <div class="text-sm font-bold">Up to</div>
                                                            <div class="heading-3 normal-case">$7,500</div>
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
                                                    <div>Exp. <span>12/31/24</span></div>
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
                                                <div class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">FINANCE</span>
                                                </div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Retail APR
                                                </h2>
                                                <div class="flex flex-nowrap justify-between">
                                                    <div class="mr-4 inline-block">
                                                        <div class="heading-3 normal-case">0.9%</div>
                                                        <div>APR</div>
                                                    </div>
                                                    <div class="mr-4 inline-block">
                                                        <div class="heading-3 normal-case">72</div>
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
                                                <div class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                    <span class="font-bold text-white" data-test="dealType">LEASE</span>
                                                </div>
                                                <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024 Acura
                                                    ZDX&nbsp;Lease</h2>
                                                <div class="flex grow flex-nowrap">
                                                    <div class="mr-4 inline-block">
                                                        <div class="heading-3 normal-case">$788</div>
                                                        <div>per month</div>
                                                    </div>
                                                    <div class="inline-block">
                                                        <div class="heading-3 normal-case">36</div>
                                                        <div>months</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="my-2-5 border-t"></div><a data-test="viewLeaseDealsDetails"
                                                    href="/acura/zdx/lease/">View Lease Options</a>
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
            <section class="py-5">
                <div class="container">
                    <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-3">Acura Deals Information</h2>
                    <p class="mb-2">For August 2024, Acura is offering special financing rates for 4 models, with finance
                        interest rates as low as 0.9%.</p>
                    <p class="mb-2">Lease offers are also available for 3 models. Monthly lease payments for Acura models
                        can be as low as $484 (36 months, 12,000 miles per year, and $2,000 due at signing) for the RDX.</p>
                    <p class="mb-2">Additionally, Acura has cash offers such as Loyalty/Conquest Offer and Acura Military
                        Appreciation Offer.</p>
                    <h2 class="heading-3 normal-case mt-5 mb-2-5">Acura Lease Deals</h2>
                    <p>You’ll find a variety of Acura lease deals on many different vehicle types in August 2024. Acura has
                        a lease special on the 2024 RDX, which is $484 per month (36 months, 12,000 miles per year, and
                        $2,000 due at signing). If you’re interested in a different type of vehicle, the 2024 TLX can be
                        leased for $616 per month (36 months, 12,000 miles per year, and $2,000 due at signing).</p>
                    <h2 class="heading-3 normal-case mt-5 mb-2-5">Acura Finance Incentives</h2>
                    <p>Acura has competitive financing deals in August. Many models, from the ZDX to the RDX and the MDX,
                        have low interest rates if you finance through Acura. One such special is 0.9% for 36 months on a
                        brand new 2024 Acura ZDX. Another is 3.9% for 36 months for the 2024 RDX.</p>
                    <h2 class="heading-3 normal-case mt-5 mb-2-5">Learn More About Acura Models</h2>
                    <p>Whether you’re considering financing or leasing a new Acura, TrueCar has resources to help you learn
                        more about each model. You can find comprehensive information and reviews about popular Acuras, such
                        as the <a href="/overview/acura/integra/2025/">2025 Integra</a>, <a
                            href="/overview/acura/mdx/2025/">2025 MDX</a>, or <a href="/overview/acura/rdx/">2024 RDX</a>.
                    </p><br>
                    <p>Interested in cross-shopping a Acura? Some of the top Acura comparisons are <a
                            href="/compare/acura-integra-vs-audi-a3/">Acura Integra vs Audi A3</a>, <a
                            href="/compare/acura-mdx-vs-lexus-rx/">Acura MDX vs Lexus RX</a>, and <a
                            href="/compare/acura-rdx-vs-mercedes-benz-glc/">Acura RDX vs Mercedes-Benz GLC</a>. You can
                        also see where Acura models land on our vehicle ranking lists, such as <a
                            href="/best-cars-trucks/cars/segment-compact/luxury/">Best Compact Luxury Cars</a> or <a
                            href="/best-cars-trucks/suvs/segment-midsize/luxury/">Best Midsize Luxury SUVs</a>.</p>
                    <h2 class="heading-3 normal-case mt-5">Best Acura Financing Deals:</h2>
                    <ul class="list-disc pl-5 pt-2">
                        <li>2024 Acura ZDX: 0.9% financing</li>
                        <li>2024 Acura RDX: 3.9% financing</li>
                        <li>2025 Acura MDX: 4.9% financing</li>
                        <li>2024 Acura TLX: 4.9% financing</li>
                    </ul>
                    <h2 class="heading-3 normal-case mt-4">Best Acura Leasing Deals:</h2>
                    <ul class="list-disc pl-5 pt-2">
                        <li>2024 Acura RDX: $484 per month (36 months, $2,000 due at signing)</li>
                        <li>2024 Acura TLX: $616 per month (36 months, $2,000 due at signing)</li>
                        <li>2024 Acura ZDX: $788 per month (36 months, $2,000 due at signing)</li>
                    </ul>
                </div>
            </section>
            <div class="container">
                <h2 class="heading-3 normal-case mt-6 text-center" data-test="incentivesMoreInfoHeading">More Information
                    About&nbsp;Incentives</h2>
                <p class="px-5 pt-2-5 pb-6 text-center">Vehicle incentives and rebates are programs made available by car
                    manufacturers to encourage vehicle sales by providing consumers with cash allowances or favorable
                    financing/lease rates. Incentives can vary by location, vehicle configuration, as well as the buyer’s
                    method of payment (cash purchase, financing, lease). Some incentives can be stacked with other incentive
                    programs, and some have eligibility conditions that must be met to qualify. Additional incentives are
                    sometimes targeted to customer segment groups like college graduates, military members, etc. Incentives
                    are normally subject to change and governed by specific eligibility rules. Please see your local dealer
                    for details on incentives that might be available to you.</p>
            </div>
            <div class="container">
                <section>
                    <div class="container pb-3 pt-4 md:pt-5">
                        <h2 class="heading-3 normal-case pb-3 text-center">Acura Deals &amp; Incentives FAQs</h2>
                        <div class="row mb-3 lg:mb-4">
                            <div class="col-12">
                                <div class="expandable-list-item"><button
                                        class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                        aria-expanded="false">
                                        <div class="heading-4 normal-case w-full px-3 py-3">
                                            <h3 class="heading-4 normal-case">What are the best Acura finance deals for
                                                August&nbsp;2024?</h3>
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
                                            <div class="whitespace-pre-line">Currently, there are finance deals for 4 Acura
                                                models, starting with the 2024 Acura ZDX, which has a 0.9% APR on a 72-month
                                                loan and the 2024 Acura RDX, which has a 3.9% APR on a 60-month loan.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="expandable-list-item"><button
                                        class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                        aria-expanded="false">
                                        <div class="heading-4 normal-case w-full px-3 py-3">
                                            <h3 class="heading-4 normal-case">What are the best Acura lease deals for
                                                August&nbsp;2024?</h3>
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
                                            <div class="whitespace-pre-line">A total of 3 Acura models have a lease
                                                special, including the 2024 Acura RDX, which can be leased for 36 months
                                                with $2,000 due at signing and a monthly payment of $484. Another great
                                                Acura deal is offered by the 2024 Acura TLX, which can be leased under the
                                                same terms with a $616 monthly payment.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="expandable-list-item"><button
                                        class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                        aria-expanded="false">
                                        <div class="heading-4 normal-case w-full px-3 py-3">
                                            <h3 class="heading-4 normal-case">What are the best Acura cash offers for
                                                August&nbsp;2024?</h3>
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
                                            <div class="whitespace-pre-line">With 5 Acuras offering cash incentives,
                                                August 2024 is a great time to buy! Cash offers are ranging from $500 to
                                                $7,500 with the 2024 Acura ZDX having the best cash bonus.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
                                        src="/assets/_next/static/images/iconConvertables-be884bb8d136f35bb6558b94fd825344.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Convertibles</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="coupes" href="/deals/coupes/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="/assets/_next/static/images/iconCoupes-b13ad2ede15fb4beb0d01df2269cf9f8.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Coupes</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="suvs" href="/deals/suvs/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="/assets/_next/static/images/iconSuv-f1ac2be397703ffcacdbfd74eea4299a.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">SUVs</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="sedans" href="/deals/sedans/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="/assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Sedans</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="trucks" href="/deals/trucks/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="/assets/_next/static/images/iconTrucks-580a7f2703d3c26ce63c295dc03d166d.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Trucks</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="hatchbacks"
                            href="/deals/hatchbacks/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="/assets/_next/static/images/iconHatchbacks-5fef3ca145dd8b50777b2033a6f4d6b0.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Hatchbacks</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="vans" href="/deals/vans/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="/assets/_next/static/images/iconVans-870c7511e02faf9d23d77dfe8e77ff45.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Vans</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="wagons" href="/deals/wagons/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="/assets/_next/static/images/iconWagons-570cc460532e6540d6108d60cf281230.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Wagons</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="luxury-cars"
                            href="/deals/luxury-cars/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="/assets/_next/static/images/iconLuxuryCar-87a471f1074ed4055fb4a68b07764ee6.svg"
                                        alt="" role="presentation"></div><span
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
                                        src="/assets/_next/static/images/iconLuxurySUV-d6de04f820cf51ed437f864b7fcbf7c8.svg"
                                        alt="" role="presentation"></div><span
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
                                        src="/assets/_next/static/images/iconHybrids-750de8cd6fcd9984877da94f2d91c978.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Hybrids</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="fuel-electric"
                            href="/deals/fuel-electric/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="/assets/_next/static/images/iconElectrics-37b61a4ced0f9b529aa71879b3b1aeaa.svg"
                                        alt="" role="presentation"></div><span
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
                                        src="/assets/_next/static/images/iconDiesel-d5cc1b3d19e25226bf7d3ec17ab5ba05.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Diesels</span>
                            </div>
                        </a></div>
                </div>
            </div>
            <div class="container">
                <div data-test="leasingSeoFooter">
                    <div class="container">
                        <section>
                            <div class="py-5">
                                <div class="container">
                                    <div class="grid grid-cols-1 gap-x-3 border-b md:grid-cols-2 md:border-0">
                                        <div class="expandable-list-item border-t"><button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false" data-test="seoLinkColumnHeading">
                                                <div class="heading-4 normal-case w-full px-3 py-3">Acura Lease Deals
                                                </div><span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static;"><svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3" aria-hidden="true"
                                                            data-test-item="down" style="width: 21px; height: 21px;">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg></div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse" style="">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/acura/integra/lease/">Acura Integra Lease Deals</a>
                                                        </li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/acura/mdx/lease/">Acura MDX Lease Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/acura/rdx/lease/">Acura RDX Lease Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/acura/tlx/lease/">Acura TLX Lease Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/acura/zdx/lease/">Acura ZDX Lease Deals</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-list-item"><button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false" data-test="seoLinkColumnHeading">
                                                <div class="heading-4 normal-case w-full px-3 py-3">Research Acuras</div>
                                                <span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static;"><svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3" aria-hidden="true"
                                                            data-test-item="down" style="width: 21px; height: 21px;">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg></div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse" style="">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/cl/">2003 Acura CL</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/ilx/">2022 Acura ILX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/integra/">2024 Acura Integra</a>
                                                        </li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/mdx/">2024 Acura MDX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/nsx/">2022 Acura NSX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/rdx/">2024 Acura RDX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/rl/">2012 Acura RL</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/rlx/">2020 Acura RLX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/rsx/">2006 Acura RSX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/slx/">1999 Acura SLX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/tl/">2014 Acura TL</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/tlx/">2024 Acura TLX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/tsx/">2014 Acura TSX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/overview/acura/zdx/">2013 Acura ZDX</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-list-item md:border-b"><button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false" data-test="seoLinkColumnHeading">
                                                <div class="heading-4 normal-case w-full px-3 py-3">New &amp;
                                                    Used&nbsp;Acuras</div><span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static;"><svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3" aria-hidden="true"
                                                            data-test-item="down" style="width: 21px; height: 21px;">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg></div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse" style="">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/new-cars-for-sale/listings/acura/integra/">New
                                                                Acura Integra</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/used-cars-for-sale/listings/acura/integra/">Used
                                                                Acura Integra</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/new-cars-for-sale/listings/acura/mdx/">New Acura
                                                                MDX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/used-cars-for-sale/listings/acura/mdx/">Used Acura
                                                                MDX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/new-cars-for-sale/listings/acura/rdx/">New Acura
                                                                RDX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/used-cars-for-sale/listings/acura/rdx/">Used Acura
                                                                RDX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/new-cars-for-sale/listings/acura/tlx/">New Acura
                                                                TLX</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/used-cars-for-sale/listings/acura/tlx/">Used Acura
                                                                TLX</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-list-item md:border-b"><button
                                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                                aria-expanded="false" data-test="seoLinkColumnHeading">
                                                <div class="heading-4 normal-case w-full px-3 py-3">Deals by
                                                    Vehicle&nbsp;Type</div><span class="ml-3 whitespace-nowrap">
                                                    <div style="position: static;"><svg viewBox="0 0 24 24"
                                                            class="icon icon-fill-default my-3 mr-3" aria-hidden="true"
                                                            data-test-item="down" style="width: 21px; height: 21px;">
                                                            <use href="#keyboard_arrow_down"></use>
                                                        </svg></div>
                                                </span>
                                            </button>
                                            <div class="expandable-list-item-collapse border-t collapse" style="">
                                                <div class="px-3 py-3 expandable-list-item-shadow">
                                                    <ul class="space-y-2">
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/convertibles/">Convertible Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/coupes/">Coupe Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/fuel-diesel/">Diesel Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/fuel-electric/">Electric Vehicle Deals</a>
                                                        </li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/hatchbacks/">Hatchback Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/fuel-hybrid/">Hybrid Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/luxury-cars/">Luxury Car Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/luxury-suvs/">Luxury SUV Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/suvs/">SUV Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/sedans/">Sedan Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/trucks/">Truck Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/vans/">Van Deals</a></li>
                                                        <li class=""><a aria-current="false"
                                                                aria-disabled="false"
                                                                class="link-item-minimal no-underline"
                                                                href="/deals/wagons/">Wagon Deals</a></li>
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
            </div>
        </div>
    </main>
@endsection
