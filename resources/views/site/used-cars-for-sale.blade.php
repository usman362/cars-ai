@extends('site.layouts.app')
@section('content')
    <main id="mainContent"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]"
        style="margin-top:60px">
        <div id="used-landing-redesigned" data-test="usedLandingRedesignedPage">
            <div class="relative flex w-full justify-center bg-light">
                <div class="absolute w-full top-0 h-[136px] bg-no-repeat bg-[center_-50px] bg-cover md:h-[340px] md:bg-[center_-80px] lg:bg-[center_-190px]"
                    style="background-image: url(assets/_next/static/images/family-driving-711da83785c2832223b20e3d075fcb4f.jpg);">
                    <div
                        class="md:bg-gradient-to-b md:from-[rgba(0,0,0,0.5)_43.75%] md:to-[rgba(0,0,0,0)_100%] w-full h-full">
                    </div>
                </div>
                <div class="w-full flex flex-col items-center z-1 max-w-[660px] pt-[96px] md:mb-0 md:pt-5">
                    <div data-test="usedSearchHeading">
                        <div>
                            <div class="hidden md:block">
                                <h1
                                    class="heading-2 normal-case heading-md-1 md:normal-case heading-lg-1 lg:normal-case text-center pt-2 sm:pt-0 md:pt-5 mx-auto block max-w-[250px] md:max-w-none md:text-white">
                                    Used Cars For Sale Near&nbsp;Me</h1>
                            </div>
                            <div class="container">
                                <div>
                                    <div
                                        class="bg-white md:bg-transparent rounded shadow-[0_2px_6px_0_rgba(0,0,0,0.1)] md:shadow-none px-3 md:px-0 w-full pt-2 md:pt-0 pb-3 md:pb-0 sm:px-4 md:px-0 sm:pt-3 md:pt-0">
                                        <div class="md:hidden">
                                            <h1
                                                class="heading-2 normal-case heading-md-1 md:normal-case heading-lg-1 lg:normal-case text-center pt-2 sm:pt-0 md:pt-5 mx-auto block max-w-[250px] md:max-w-none md:text-white">
                                                Used Cars For Sale Near&nbsp;Me</h1>
                                        </div>
                                        <div>
                                            <div class="flex flex-col items-center justify-center" data-reach-tabs=""
                                                data-orientation="horizontal">
                                                <div role="tablist" aria-orientation="horizontal"
                                                    class="switch-bar switch-bar-block mt-2 mb-4 w-full text-xs md:my-3 md:max-w-[360px]"
                                                    data-reach-tab-list=""><button aria-controls="tabs--8--panel--0"
                                                        aria-selected="true" role="tab" tabindex="0"
                                                        class="w-full switch px-2-5 sm:px-3"
                                                        data-test="usedLandingMakeModelTab" data-reach-tab=""
                                                        data-orientation="horizontal" id="tabs--8--tab--0" type="button"
                                                        data-selected="">Make/Model</button><button
                                                        aria-controls="tabs--8--panel--1" aria-selected="false"
                                                        role="tab" tabindex="-1" class="w-full switch px-2-5 sm:px-3"
                                                        data-test="usedLandingBodyStyleTab" data-reach-tab=""
                                                        data-orientation="horizontal" id="tabs--8--tab--1"
                                                        type="button">Body Style</button><button
                                                        aria-controls="tabs--8--panel--2" aria-selected="false"
                                                        role="tab" tabindex="-1" class="w-full switch px-2-5 sm:px-3"
                                                        data-test="usedLandingPriceTab" data-reach-tab=""
                                                        data-orientation="horizontal" id="tabs--8--tab--2"
                                                        type="button">Price</button></div>
                                                <div class="md:bg-white rounded md:shadow-[0_2px_6px_0_rgba(0,0,0,0.1)] md:max-w-[660px] md:px-3 md:w-full md:py-3"
                                                    data-reach-tab-panels="">
                                                    <div aria-labelledby="tabs--8--tab--0" role="tabpanel" tabindex="0"
                                                        class="flex grow justify-center" data-reach-tab-panel=""
                                                        id="tabs--8--panel--0">
                                                        <form novalidate="" class="w-full max-w-[510px]">
                                                            <div data-test="usedLandingMakeModelSelector"
                                                                class="w-full max-w-[510px]">
                                                                <div class="row flex justify-center">
                                                                    <div class="pb-3 sm:pr-2 sm:pb-0 col-12 col-sm-4">
                                                                        <div class="field-container-challenger">
                                                                            <div
                                                                                class="field-wrapper-challenger field-label-padding-challenger">
                                                                                <div
                                                                                    class="field-content-row field-with-suffix">
                                                                                    <div
                                                                                        class="field-input-label-challenger input-label-select">
                                                                                        <select required=""
                                                                                            aria-label="All Makes"
                                                                                            class="form-select-element-challenger"
                                                                                            data-test="selectMake">
                                                                                            <option value="">All Makes
                                                                                            </option>
                                                                                            <option value="acura">Acura
                                                                                            </option>
                                                                                            <option value="alfa-romeo">Alfa
                                                                                                Romeo</option>
                                                                                            <option value="am-general">AM
                                                                                                General</option>
                                                                                            <option value="aston-martin">
                                                                                                Aston Martin</option>
                                                                                            <option value="audi">Audi
                                                                                            </option>
                                                                                            <option value="bentley">Bentley
                                                                                            </option>
                                                                                            <option value="bmw">BMW
                                                                                            </option>
                                                                                            <option value="buick">Buick
                                                                                            </option>
                                                                                            <option value="cadillac">
                                                                                                Cadillac</option>
                                                                                            <option value="chevrolet">
                                                                                                Chevrolet</option>
                                                                                            <option value="chrysler">
                                                                                                Chrysler</option>
                                                                                            <option value="dodge">Dodge
                                                                                            </option>
                                                                                            <option value="ferrari">Ferrari
                                                                                            </option>
                                                                                            <option value="fiat">FIAT
                                                                                            </option>
                                                                                            <option value="fisker">Fisker
                                                                                            </option>
                                                                                            <option value="ford">Ford
                                                                                            </option>
                                                                                            <option value="freightliner">
                                                                                                Freightliner</option>
                                                                                            <option value="genesis">Genesis
                                                                                            </option>
                                                                                            <option value="gmc">GMC
                                                                                            </option>
                                                                                            <option value="honda">Honda
                                                                                            </option>
                                                                                            <option value="hummer">HUMMER
                                                                                            </option>
                                                                                            <option value="hyundai">Hyundai
                                                                                            </option>
                                                                                            <option value="ineos">INEOS
                                                                                            </option>
                                                                                            <option value="infiniti">
                                                                                                INFINITI</option>
                                                                                            <option value="isuzu">Isuzu
                                                                                            </option>
                                                                                            <option value="jaguar">Jaguar
                                                                                            </option>
                                                                                            <option value="jeep">Jeep
                                                                                            </option>
                                                                                            <option value="karma">Karma
                                                                                            </option>
                                                                                            <option value="kia">Kia
                                                                                            </option>
                                                                                            <option value="lamborghini">
                                                                                                Lamborghini</option>
                                                                                            <option value="land-rover">Land
                                                                                                Rover</option>
                                                                                            <option value="lexus">Lexus
                                                                                            </option>
                                                                                            <option value="lincoln">Lincoln
                                                                                            </option>
                                                                                            <option value="lotus">Lotus
                                                                                            </option>
                                                                                            <option value="lucid">Lucid
                                                                                            </option>
                                                                                            <option value="maserati">
                                                                                                Maserati</option>
                                                                                            <option value="maybach">Maybach
                                                                                            </option>
                                                                                            <option value="mazda">Mazda
                                                                                            </option>
                                                                                            <option value="mclaren">McLaren
                                                                                            </option>
                                                                                            <option value="mercedes-benz">
                                                                                                Mercedes-Benz</option>
                                                                                            <option value="mercury">Mercury
                                                                                            </option>
                                                                                            <option value="mini">MINI
                                                                                            </option>
                                                                                            <option value="mitsubishi">
                                                                                                Mitsubishi</option>
                                                                                            <option value="nissan">Nissan
                                                                                            </option>
                                                                                            <option value="oldsmobile">
                                                                                                Oldsmobile</option>
                                                                                            <option value="plymouth">
                                                                                                Plymouth</option>
                                                                                            <option value="polestar">
                                                                                                Polestar</option>
                                                                                            <option value="pontiac">Pontiac
                                                                                            </option>
                                                                                            <option value="porsche">Porsche
                                                                                            </option>
                                                                                            <option value="ram">Ram
                                                                                            </option>
                                                                                            <option value="rivian">Rivian
                                                                                            </option>
                                                                                            <option value="rolls-royce">
                                                                                                Rolls-Royce</option>
                                                                                            <option value="saab">Saab
                                                                                            </option>
                                                                                            <option value="saturn">Saturn
                                                                                            </option>
                                                                                            <option value="scion">Scion
                                                                                            </option>
                                                                                            <option value="smart">smart
                                                                                            </option>
                                                                                            <option value="subaru">Subaru
                                                                                            </option>
                                                                                            <option value="suzuki">Suzuki
                                                                                            </option>
                                                                                            <option value="tesla">Tesla
                                                                                            </option>
                                                                                            <option value="toyota">Toyota
                                                                                            </option>
                                                                                            <option value="vinfast">VinFast
                                                                                            </option>
                                                                                            <option value="volkswagen">
                                                                                                Volkswagen</option>
                                                                                            <option value="volvo">Volvo
                                                                                            </option>
                                                                                        </select>
                                                                                        <div class="field-label-text-challenger"
                                                                                            data-test="fieldLabel"><label
                                                                                                data-ignore-contrast="true">All
                                                                                                Makes</label></div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="field-addon-challenger field-addon-challenger-suffix">
                                                                                        <svg viewBox="0 0 24 24"
                                                                                            class="icon icon-fill-default"
                                                                                            aria-hidden="true"
                                                                                            style="width: 24px; height: 24px;">
                                                                                            <use href="#arrow_drop_down">
                                                                                            </use>
                                                                                        </svg></div>
                                                                                </div>
                                                                                <div class="field-message-challenger">
                                                                                    <div
                                                                                        class="field-message-text-challenger">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pb-3 sm:pb-0 sm:pr-2 col-12 col-sm-4">
                                                                        <div class="field-container-challenger">
                                                                            <div
                                                                                class="field-wrapper-challenger field-label-padding-challenger">
                                                                                <div
                                                                                    class="field-content-row field-with-suffix field-content-disabled">
                                                                                    <div
                                                                                        class="field-input-label-challenger input-label-select">
                                                                                        <select required=""
                                                                                            aria-label="All Models"
                                                                                            disabled=""
                                                                                            class="form-select-element-challenger"
                                                                                            data-test="selectModel">
                                                                                            <option value="">All
                                                                                                Models</option>
                                                                                        </select>
                                                                                        <div class="field-label-text-challenger is-disabled"
                                                                                            data-test="fieldLabel"><label
                                                                                                data-ignore-contrast="true">All
                                                                                                Models</label></div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="field-addon-challenger field-addon-challenger-suffix field-addon-challenger-suffix-disabled">
                                                                                        <svg viewBox="0 0 24 24"
                                                                                            class="icon icon-fill-default"
                                                                                            aria-hidden="true"
                                                                                            style="width: 24px; height: 24px;">
                                                                                            <use href="#arrow_drop_down">
                                                                                            </use>
                                                                                        </svg></div>
                                                                                </div>
                                                                                <div class="field-message-challenger">
                                                                                    <div
                                                                                        class="field-message-text-challenger">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3">
                                                                        <div
                                                                            class="field-container-challenger sm:min-w-[130px]">
                                                                            <div
                                                                                class="field-wrapper-challenger field-label-padding-challenger">
                                                                                <div
                                                                                    class="field-content-row field-with-suffix">
                                                                                    <div
                                                                                        class="field-input-label-challenger">
                                                                                        <input id="21"
                                                                                            class="form-control-challenger"
                                                                                            aria-label="Zip Code"
                                                                                            placeholder=" "
                                                                                            inputmode="numeric"
                                                                                            data-test="usedLandingZipCodeField"
                                                                                            type="text" maxlength="5"
                                                                                            value="90401">
                                                                                        <div class="field-label-text-challenger"
                                                                                            data-test="fieldLabel"><label
                                                                                                for="21"
                                                                                                data-ignore-contrast="true">Zip
                                                                                                Code</label></div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="field-addon-challenger field-addon-challenger-suffix">
                                                                                        <svg viewBox="0 0 24 24"
                                                                                            class="icon icon-fill-default"
                                                                                            aria-hidden="true"
                                                                                            style="width: 17px; height: 17px;">
                                                                                            <use href="#location_on"></use>
                                                                                        </svg></div>
                                                                                </div>
                                                                                <div class="field-message-challenger">
                                                                                    <div
                                                                                        class="field-message-text-challenger">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-full pt-4 text-center md:pt-3"><button
                                                                    data-ignore-contrast="true" data-loading="false"
                                                                    data-test="usedLandingMakeModelSelectorSearchButton"
                                                                    class="btn btn-primary btn-md btn-block">
                                                                    <div class="btn-inner btn-fade" style="opacity: 1;">
                                                                        Search</div>
                                                                </button></div>
                                                        </form>
                                                    </div>
                                                    <div aria-labelledby="tabs--8--tab--1" role="tabpanel" tabindex="-1"
                                                        class="flex grow justify-center" data-reach-tab-panel=""
                                                        id="tabs--8--panel--1" hidden=""></div>
                                                    <div aria-labelledby="tabs--8--tab--2" role="tabpanel" tabindex="-1"
                                                        class="flex grow justify-center" data-reach-tab-panel=""
                                                        id="tabs--8--panel--2" hidden=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-striped">
                <section class="pt-4 pb-4 md:pt-5 md:pb-5">
                    <div class="container container-max-width-1 md:pb-1">
                        <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-2-5 text-center md:mb-3">Popular
                            Used Car&nbsp;Searches</h2>
                        <div class="row justify-center">
                            <div class="mb-2 md:mb-3 md:px-2-5 col-sm-6 col-md-4"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] h-full py-1 px-2 md:py-3 md:px-3"
                                    href="/used-cars-for-sale/listings/?sort[]=price_asc">
                                    <div class="row w-full">
                                        <div class="flex justify-center pr-2 md:pb-3 md:pr-0 col-4 col-md-12">
                                            <div class="picture-container"
                                                style="padding-bottom: 0px; width: 165px; height: 80px;"><img
                                                    class="picture-inner picture-svg"
                                                    src="assets/_next/static/images/lowest-price-e858c9e34251e8388843756c78eac0cb.svg"
                                                    loading="eager" alt=""></div>
                                        </div>
                                        <div
                                            class="flex flex-col justify-center md:flex-row text-left md:text-center col-8 col-md-12">
                                            <h3 class="heading-4 normal-case">Lowest Price</h3>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="mb-2 md:mb-3 md:px-2-5 col-sm-6 col-md-4"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] h-full py-1 px-2 md:py-3 md:px-3"
                                    href="/used-cars-for-sale/listings/?sort[]=best_deal_desc_script">
                                    <div class="row w-full">
                                        <div class="flex justify-center pr-2 md:pb-3 md:pr-0 col-4 col-md-12">
                                            <div class="picture-container"
                                                style="padding-bottom: 0px; width: 165px; height: 80px;"><img
                                                    class="picture-inner picture-svg"
                                                    src="assets/_next/static/images/deals-a30f3bda6a275cb9086cfc5a7824ad3b.svg"
                                                    loading="eager" alt=""></div>
                                        </div>
                                        <div
                                            class="flex flex-col justify-center md:flex-row text-left md:text-center col-8 col-md-12">
                                            <h3 class="heading-4 normal-case">Best Deals</h3>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="mb-2 md:mb-3 md:px-2-5 col-sm-6 col-md-4"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] h-full py-1 px-2 md:py-3 md:px-3"
                                    href="/used-cars-for-sale/listings/?certifiedPreOwned[]=true">
                                    <div class="row w-full">
                                        <div class="flex justify-center pr-2 md:pb-3 md:pr-0 col-4 col-md-12">
                                            <div class="picture-container"
                                                style="padding-bottom: 0px; width: 165px; height: 80px;"><img
                                                    class="picture-inner picture-svg"
                                                    src="assets/_next/static/images/certified-pre-own-5b979613c4addc6add00c5552823b8eb.svg"
                                                    loading="eager" alt=""></div>
                                        </div>
                                        <div
                                            class="flex flex-col justify-center md:flex-row text-left md:text-center col-8 col-md-12">
                                            <h3 class="heading-4 normal-case">Certified Pre-Owned</h3>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </section>
                <section class="pt-4 pb-5 md:pt-5 md:pb-6">
                    <div class="container">
                        <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-3 text-center md:mb-4">Used Cars in
                            Popular&nbsp;Cities</h2>
                        <div class="see-more space-y-2" data-ignore-contrast="true">
                            <div data-test="seeMoreBody" style="overflow: hidden; max-height: 30em;">
                                <div>
                                    <div class="md:columns-2 xl:columns-5"><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-austin-tx/">Used Cars in Austin,
                                            TX</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-boston-ma/">Used Cars in Boston,
                                            MA</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-charlotte-nc/">Used Cars in
                                            Charlotte, NC</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-chicago-il/">Used Cars in Chicago,
                                            IL</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-columbus-oh/">Used Cars in
                                            Columbus, OH</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-dallas-tx/">Used Cars in Dallas,
                                            TX</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-denver-co/">Used Cars in Denver,
                                            CO</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-detroit-mi/">Used Cars in Detroit,
                                            MI</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-el-paso-tx/">Used Cars in El Paso,
                                            TX</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-fort-worth-tx/">Used Cars in Fort
                                            Worth, TX</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-houston-tx/">Used Cars in Houston,
                                            TX</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-indianapolis-in/">Used Cars in
                                            Indianapolis, IN</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-jacksonville-fl/">Used Cars in
                                            Jacksonville, FL</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-los-angeles-ca/">Used Cars in Los
                                            Angeles, CA</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-memphis-tn/">Used Cars in Memphis,
                                            TN</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-nashville-tn/">Used Cars in
                                            Nashville, TN</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-new-york-ny/">Used Cars in New
                                            York, NY</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-philadelphia-pa/">Used Cars in
                                            Philadelphia, PA</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-phoenix-az/">Used Cars in Phoenix,
                                            AZ</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-san-antonio-tx/">Used Cars in San
                                            Antonio, TX</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-san-diego-ca/">Used Cars in San
                                            Diego, CA</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-san-francisco-ca/">Used Cars in San
                                            Francisco, CA</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-san-jose-ca/">Used Cars in San
                                            Jose, CA</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-seattle-wa/">Used Cars in Seattle,
                                            WA</a><a class="mb-2-5 block"
                                            href="/used-cars-for-sale/listings/location-washington-dc/">Used Cars in
                                            Washington, DC</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pt-4 pb-5 md:pt-5 md:pb-6">
                    <div class="container container-max-width-1">
                        <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-2 text-center">Make a Confident
                            Car-Buying&nbsp;Decision</h2>
                        <h3 class="heading-4 normal-case mb-3 text-center font-normal md:mb-4">We give you all the tools
                            you need to find the right used car for&nbsp;you.</h3>
                        <div class="mx-auto mb-3 max-h-[369px] max-w-[500px] md:mb-4">
                            <div class="picture-container picture-container-block max-h-[369px] max-w-[500px]"
                                style="padding-bottom: 73.8%;"><img
                                    class="picture-block picture-svg max-w-[500px] max-h-[369px]"
                                    src="assets/_next/static/images/infographic-cbd82eb20be8331530e2180db743546c.svg"
                                    alt="" role="presentation"></div>
                        </div>
                        <div class="flex flex-col items-center md:block">
                            <div class="row block md:flex">
                                <div class="mb-2-5 md:mb-0 flex items-center md:justify-center col-md-4"><svg
                                        viewBox="0 0 24 24"
                                        class="icon icon-before icon-fill-default icon-border-circle overflow-visible rounded-full border-none bg-[#343434] text-[white]"
                                        aria-hidden="true" style="width: 14px; height: 14px; padding: 3.15px;">
                                        <use href="#done"></use>
                                    </svg>
                                    <p>See detailed pricing information</p>
                                </div>
                                <div class="mb-2-5 md:mb-0 flex items-center md:justify-center col-md-4"><svg
                                        viewBox="0 0 24 24"
                                        class="icon icon-before icon-fill-default icon-border-circle overflow-visible rounded-full border-none bg-[#343434] text-[white]"
                                        aria-hidden="true" style="width: 14px; height: 14px; padding: 3.15px;">
                                        <use href="#done"></use>
                                    </svg>
                                    <p>Get a free condition summary</p>
                                </div>
                                <div class="flex items-center md:justify-center col-md-4"><svg viewBox="0 0 24 24"
                                        class="icon icon-before icon-fill-default icon-border-circle overflow-visible rounded-full border-none bg-[#343434] text-[white]"
                                        aria-hidden="true" style="width: 14px; height: 14px; padding: 3.15px;">
                                        <use href="#done"></use>
                                    </svg>
                                    <p>Build your deal online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container container-max-width-1">
                        <div class="row pt-4 pb-5 md:pt-5 md:pb-6">
                            <div class="col-lg-8 offset-lg-2">
                                <div>
                                    <div class="mb-3 text-center">
                                        <h2 class="heading-3 normal-case heading-md-2 md:normal-case">Shop by Type</h2>
                                    </div>
                                    <div class="row">
                                        <div class="md:px-4 col">
                                            <div class="row">
                                                <div class="py-0 px-2 col-6 col-md-4"><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2-5 sm:mb-3"
                                                        size="2" data-test="usedCategoryCard"
                                                        href="/used-cars-for-sale/listings/body-convertible/">
                                                        <div data-test="cardContent"
                                                            class="card-content card-content-center block flex-row items-center py-2 md:py-2">
                                                            <div class="img-container"
                                                                style="height: 50px; padding-bottom: 0px; width: 100px;">
                                                                <img src="assets/_next/static/images/iconConvertables-be884bb8d136f35bb6558b94fd825344.svg"
                                                                    alt="" role="presentation" loading="lazy"
                                                                    class="img-inner img-contain"
                                                                    style="background-image: url(assets/_next/static/images/iconConvertables-be884bb8d136f35bb6558b94fd825344.svg);">
                                                            </div>
                                                            <div class="heading-base pt-1">Convertibles</div>
                                                        </div>
                                                    </a></div>
                                                <div class="py-0 px-2 col-6 col-md-4"><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2-5 sm:mb-3"
                                                        size="2" data-test="usedCategoryCard"
                                                        href="/used-cars-for-sale/listings/body-coupe/">
                                                        <div data-test="cardContent"
                                                            class="card-content card-content-center block flex-row items-center py-2 md:py-2">
                                                            <div class="img-container"
                                                                style="height: 50px; padding-bottom: 0px; width: 100px;">
                                                                <img src="assets/_next/static/images/iconCoupes-b13ad2ede15fb4beb0d01df2269cf9f8.svg"
                                                                    alt="" role="presentation" loading="lazy"
                                                                    class="img-inner img-contain"
                                                                    style="background-image: url(assets/_next/static/images/iconCoupes-b13ad2ede15fb4beb0d01df2269cf9f8.svg);">
                                                            </div>
                                                            <div class="heading-base pt-1">Coupes</div>
                                                        </div>
                                                    </a></div>
                                                <div class="py-0 px-2 col-6 col-md-4"><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2-5 sm:mb-3"
                                                        size="2" data-test="usedCategoryCard"
                                                        href="/used-cars-for-sale/listings/body-suv/">
                                                        <div data-test="cardContent"
                                                            class="card-content card-content-center block flex-row items-center py-2 md:py-2">
                                                            <div class="img-container"
                                                                style="height: 50px; padding-bottom: 0px; width: 100px;">
                                                                <img src="assets/_next/static/images/iconSuv-f1ac2be397703ffcacdbfd74eea4299a.svg"
                                                                    alt="" role="presentation" loading="lazy"
                                                                    class="img-inner img-contain"
                                                                    style="background-image: url(assets/_next/static/images/iconSuv-f1ac2be397703ffcacdbfd74eea4299a.svg);">
                                                            </div>
                                                            <div class="heading-base pt-1">SUVs</div>
                                                        </div>
                                                    </a></div>
                                                <div class="py-0 px-2 col-6 col-md-4"><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2-5 sm:mb-3"
                                                        size="2" data-test="usedCategoryCard"
                                                        href="/used-cars-for-sale/listings/body-sedan/">
                                                        <div data-test="cardContent"
                                                            class="card-content card-content-center block flex-row items-center py-2 md:py-2">
                                                            <div class="img-container"
                                                                style="height: 50px; padding-bottom: 0px; width: 100px;">
                                                                <img src="assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg"
                                                                    alt="" role="presentation" loading="lazy"
                                                                    class="img-inner img-contain"
                                                                    style="background-image: url(assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg);">
                                                            </div>
                                                            <div class="heading-base pt-1">Sedans</div>
                                                        </div>
                                                    </a></div>
                                                <div class="py-0 px-2 col-6 col-md-4"><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2-5 sm:mb-3"
                                                        size="2" data-test="usedCategoryCard"
                                                        href="/used-cars-for-sale/listings/body-truck/">
                                                        <div data-test="cardContent"
                                                            class="card-content card-content-center block flex-row items-center py-2 md:py-2">
                                                            <div class="img-container"
                                                                style="height: 50px; padding-bottom: 0px; width: 100px;">
                                                                <img src="assets/_next/static/images/iconTrucks-580a7f2703d3c26ce63c295dc03d166d.svg"
                                                                    alt="" role="presentation" loading="lazy"
                                                                    class="img-inner img-contain"
                                                                    style="background-image: url(assets/_next/static/images/iconTrucks-580a7f2703d3c26ce63c295dc03d166d.svg);">
                                                            </div>
                                                            <div class="heading-base pt-1">Trucks</div>
                                                        </div>
                                                    </a></div>
                                                <div class="py-0 px-2 col-6 col-md-4"><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2-5 sm:mb-3"
                                                        size="2" data-test="usedCategoryCard"
                                                        href="/used-cars-for-sale/listings/body-van/">
                                                        <div data-test="cardContent"
                                                            class="card-content card-content-center block flex-row items-center py-2 md:py-2">
                                                            <div class="img-container"
                                                                style="height: 50px; padding-bottom: 0px; width: 100px;">
                                                                <img src="assets/_next/static/images/iconVans-870c7511e02faf9d23d77dfe8e77ff45.svg"
                                                                    alt="" role="presentation" loading="lazy"
                                                                    class="img-inner img-contain"
                                                                    style="background-image: url(assets/_next/static/images/iconVans-870c7511e02faf9d23d77dfe8e77ff45.svg);">
                                                            </div>
                                                            <div class="heading-base pt-1">Vans</div>
                                                        </div>
                                                    </a></div>
                                                <div class="py-0 px-2 col-6 col-md-4"><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2-5 sm:mb-3"
                                                        size="2" data-test="usedCategoryCard"
                                                        href="/used-cars-for-sale/listings/body-wagon/">
                                                        <div data-test="cardContent"
                                                            class="card-content card-content-center block flex-row items-center py-2 md:py-2">
                                                            <div class="img-container"
                                                                style="height: 50px; padding-bottom: 0px; width: 100px;">
                                                                <img src="assets/_next/static/images/iconWagons-570cc460532e6540d6108d60cf281230.svg"
                                                                    alt="" role="presentation" loading="lazy"
                                                                    class="img-inner img-contain"
                                                                    style="background-image: url(assets/_next/static/images/iconWagons-570cc460532e6540d6108d60cf281230.svg);">
                                                            </div>
                                                            <div class="heading-base pt-1">Wagons</div>
                                                        </div>
                                                    </a></div>
                                                <div class="py-0 px-2 col-6 col-md-4"><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2-5 sm:mb-3"
                                                        size="2" data-test="usedCategoryCard"
                                                        href="/used-cars-for-sale/listings/body-hatchback/">
                                                        <div data-test="cardContent"
                                                            class="card-content card-content-center block flex-row items-center py-2 md:py-2">
                                                            <div class="img-container"
                                                                style="height: 50px; padding-bottom: 0px; width: 100px;">
                                                                <img src="assets/_next/static/images/iconHatchbacks-5fef3ca145dd8b50777b2033a6f4d6b0.svg"
                                                                    alt="" role="presentation" loading="lazy"
                                                                    class="img-inner img-contain"
                                                                    style="background-image: url(assets/_next/static/images/iconHatchbacks-5fef3ca145dd8b50777b2033a6f4d6b0.svg);">
                                                            </div>
                                                            <div class="heading-base pt-1">Hatchbacks</div>
                                                        </div>
                                                    </a></div>
                                                <div class="py-0 px-2 col-6 col-md-4"><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2-5 sm:mb-3"
                                                        size="2" data-test="usedCategoryCard"
                                                        href="/used-cars-for-sale/listings/fuel-all-hybrids/">
                                                        <div data-test="cardContent"
                                                            class="card-content card-content-center block flex-row items-center py-2 md:py-2">
                                                            <div class="img-container"
                                                                style="height: 50px; padding-bottom: 0px; width: 100px;">
                                                                <img src="assets/_next/static/images/iconHybrids-750de8cd6fcd9984877da94f2d91c978.svg"
                                                                    alt="" role="presentation" loading="lazy"
                                                                    class="img-inner img-contain"
                                                                    style="background-image: url(assets/_next/static/images/iconHybrids-750de8cd6fcd9984877da94f2d91c978.svg);">
                                                            </div>
                                                            <div class="heading-base pt-1">Hybrids</div>
                                                        </div>
                                                    </a></div>
                                                <div class="py-0 px-2 col-6 col-md-4"><a
                                                        class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2-5 sm:mb-3"
                                                        size="2" data-test="usedCategoryCard"
                                                        href="/used-cars-for-sale/listings/fuel-electric/">
                                                        <div data-test="cardContent"
                                                            class="card-content card-content-center block flex-row items-center py-2 md:py-2">
                                                            <div class="img-container"
                                                                style="height: 50px; padding-bottom: 0px; width: 100px;">
                                                                <img src="assets/_next/static/images/iconElectrics-37b61a4ced0f9b529aa71879b3b1aeaa.svg"
                                                                    alt="" role="presentation" loading="lazy"
                                                                    class="img-inner img-contain"
                                                                    style="background-image: url(assets/_next/static/images/iconElectrics-37b61a4ced0f9b529aa71879b3b1aeaa.svg);">
                                                            </div>
                                                            <div class="heading-base pt-1">Electrics</div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pt-4 pb-5 md:pt-5 md:pb-6">
                    <div class="container max-w-[864px]">
                        <div class="space-y-3 pb-2-5 text-center md:pb-3">
                            <h2 class="heading-3 normal-case heading-md-2 md:normal-case">Shop by Brand</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <ul class="hidden-md-up">
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Acura For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/acura/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Acura</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Alfa Romeo For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/alfa-romeo/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Alfa Romeo</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used AM General For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/am-general/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/2747x384_full_color/969ed759e2320912/AM_General.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/2747x384_full_color/969ed759e2320912/AM_General.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/2747x384_full_color/969ed759e2320912/AM_General.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>AM General</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Aston Martin For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/aston-martin/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/1709x384_full_color/d214081a029dc416/Aston_Martin.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/1709x384_full_color/d214081a029dc416/Aston_Martin.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1709x384_full_color/d214081a029dc416/Aston_Martin.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Aston Martin</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Audi For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/audi/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Audi</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                    </ul>
                                    <div class="hidden-md-up">
                                        <div class="collapse">
                                            <ul>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Bentley For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/bentley/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/1185x384_full_color/d2638e90710a366d/Bentley.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/1185x384_full_color/d2638e90710a366d/Bentley.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1185x384_full_color/d2638e90710a366d/Bentley.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Bentley</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used BMW For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/bmw/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>BMW</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Buick For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/buick/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Buick</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Cadillac For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/cadillac/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Cadillac</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Chevrolet For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/chevrolet/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Chevrolet</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Chrysler For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/chrysler/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Chrysler</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Dodge For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/dodge/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Dodge</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Ferrari For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/ferrari/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/234x384_full_color/d5203c48e7d38a9c/Ferrari.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/234x384_full_color/d5203c48e7d38a9c/Ferrari.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/234x384_full_color/d5203c48e7d38a9c/Ferrari.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Ferrari</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used FIAT For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/fiat/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>FIAT</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Fisker For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/fisker/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/384x384_full_color/b4d2095b7fe2a3f5/Fisker.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/b4d2095b7fe2a3f5/Fisker.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/b4d2095b7fe2a3f5/Fisker.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Fisker</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Ford For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/ford/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Ford</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Freightliner For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/freightliner/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/1854x384_full_color/ea5083c4bb38412e/Freightliner.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/1854x384_full_color/ea5083c4bb38412e/Freightliner.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1854x384_full_color/ea5083c4bb38412e/Freightliner.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Freightliner</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Genesis For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/genesis/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Genesis</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used GMC For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/gmc/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>GMC</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Honda For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/honda/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Honda</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used HUMMER For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/hummer/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/3759x384_full_color/76893111d596f8f2/HUMMER.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/3759x384_full_color/76893111d596f8f2/HUMMER.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/3759x384_full_color/76893111d596f8f2/HUMMER.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>HUMMER</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Hyundai For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/hyundai/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Hyundai</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used INEOS For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/ineos/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/384x384_full_color/951568bad9ce8ec3/INEOS.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/951568bad9ce8ec3/INEOS.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/951568bad9ce8ec3/INEOS.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>INEOS</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used INFINITI For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/infiniti/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>INFINITI</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Isuzu For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/isuzu/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/2235x384_full_color/87b8f66e2f2bc1fa/Isuzu.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/2235x384_full_color/87b8f66e2f2bc1fa/Isuzu.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/2235x384_full_color/87b8f66e2f2bc1fa/Isuzu.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Isuzu</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Jaguar For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/jaguar/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Jaguar</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Jeep For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/jeep/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Jeep</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Karma For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/karma/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/512x384_full_color/2498c42ff2973c50/Karma.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/512x384_full_color/2498c42ff2973c50/Karma.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/512x384_full_color/2498c42ff2973c50/Karma.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Karma</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Kia For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/kia/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Kia</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Lamborghini For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/lamborghini/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/335x384_full_color/4e8c9caab897bcc2/Lamborghini.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/335x384_full_color/4e8c9caab897bcc2/Lamborghini.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/335x384_full_color/4e8c9caab897bcc2/Lamborghini.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Lamborghini</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Land Rover For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/land-rover/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Land Rover</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Lexus For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/lexus/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Lexus</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Lincoln For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/lincoln/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div class="inline-block self-center align-middle leading-[1]">
                                                                <div>Lincoln</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Lotus For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/lotus/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/384x384_full_color/2d251d389a327bf3/Lotus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/2d251d389a327bf3/Lotus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/2d251d389a327bf3/Lotus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Lotus</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Lucid For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/lucid/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/384x384_full_color/eca94ca09242b896/Lucid.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/eca94ca09242b896/Lucid.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/eca94ca09242b896/Lucid.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Lucid</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Maserati For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/maserati/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Maserati</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Maybach For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/maybach/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/504x384_full_color/887dbe72f56d88c9/Maybach.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/504x384_full_color/887dbe72f56d88c9/Maybach.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/504x384_full_color/887dbe72f56d88c9/Maybach.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Maybach</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Mazda For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/mazda/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Mazda</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used McLaren For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/mclaren/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/2675x384_full_color/f887c5e1dddb5b46/McLaren.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/2675x384_full_color/f887c5e1dddb5b46/McLaren.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/2675x384_full_color/f887c5e1dddb5b46/McLaren.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>McLaren</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem"
                                                        title="Used Mercedes-Benz For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/mercedes-benz/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Mercedes-Benz</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Mercury For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/mercury/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/384x384_full_color/847c8cfa8d900b17/Mercury.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/847c8cfa8d900b17/Mercury.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/847c8cfa8d900b17/Mercury.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Mercury</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used MINI For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/mini/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>MINI</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Mitsubishi For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/mitsubishi/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Mitsubishi</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Nissan For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/nissan/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Nissan</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Oldsmobile For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/oldsmobile/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/410x384_full_color/8b33c670c7173042/Oldsmobile.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/410x384_full_color/8b33c670c7173042/Oldsmobile.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/410x384_full_color/8b33c670c7173042/Oldsmobile.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Oldsmobile</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Plymouth For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/plymouth/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/384x384_full_color/a46aa76cf1ab01d5/Plymouth.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/a46aa76cf1ab01d5/Plymouth.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/a46aa76cf1ab01d5/Plymouth.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Plymouth</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Polestar For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/polestar/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/379x384_full_color/f17cb6e7bc04cb64/Polestar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/379x384_full_color/f17cb6e7bc04cb64/Polestar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/379x384_full_color/f17cb6e7bc04cb64/Polestar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Polestar</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Pontiac For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/pontiac/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/186x384_full_color/8066191e443ba237/Pontiac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/186x384_full_color/8066191e443ba237/Pontiac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/186x384_full_color/8066191e443ba237/Pontiac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Pontiac</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Porsche For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/porsche/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/296x384_full_color/5505f9fd129ce1d5/Porsche.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/296x384_full_color/5505f9fd129ce1d5/Porsche.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/296x384_full_color/5505f9fd129ce1d5/Porsche.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Porsche</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Ram For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/ram/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Ram</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Rivian For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/rivian/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/399x384_full_color/7016c7daa3d20e4f/Rivian.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/399x384_full_color/7016c7daa3d20e4f/Rivian.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/399x384_full_color/7016c7daa3d20e4f/Rivian.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Rivian</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Rolls-Royce For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/rolls-royce/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/222x384_full_color/995403cff9890cb1/Rolls-Royce.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/222x384_full_color/995403cff9890cb1/Rolls-Royce.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/222x384_full_color/995403cff9890cb1/Rolls-Royce.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Rolls-Royce</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Saab For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/saab/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/384x384_full_color/4a938b6d06287fae/Saab.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/4a938b6d06287fae/Saab.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/4a938b6d06287fae/Saab.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Saab</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Saturn For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/saturn/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/398x384_full_color/d1197ea9dca096c2/Saturn.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/398x384_full_color/d1197ea9dca096c2/Saturn.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/398x384_full_color/d1197ea9dca096c2/Saturn.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Saturn</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Scion For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/scion/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/570x384_full_color/4a826825db9c0ec4/Scion.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/570x384_full_color/4a826825db9c0ec4/Scion.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/570x384_full_color/4a826825db9c0ec4/Scion.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Scion</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used smart For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/smart/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/405x384_full_color/13a6e9d329db2108/smart.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/405x384_full_color/13a6e9d329db2108/smart.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/405x384_full_color/13a6e9d329db2108/smart.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>smart</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Subaru For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/subaru/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Subaru</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Suzuki For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/suzuki/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/376x384_full_color/d3bcdb28245d306a/Suzuki.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/376x384_full_color/d3bcdb28245d306a/Suzuki.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/376x384_full_color/d3bcdb28245d306a/Suzuki.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Suzuki</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Tesla For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/tesla/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/385x384_full_color/894bffb70433ffd7/Tesla.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/894bffb70433ffd7/Tesla.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/894bffb70433ffd7/Tesla.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Tesla</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Toyota For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/toyota/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Toyota</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used VinFast For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/vinfast/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/395x384_full_color/86367274d3ed5011/VinFast.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/395x384_full_color/86367274d3ed5011/VinFast.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/395x384_full_color/86367274d3ed5011/VinFast.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>VinFast</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="border-b leading-[4] md:border-none"><a
                                                        data-test="makePanelListItem" title="Used Volkswagen For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/volkswagen/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
                                                                <div>Volkswagen</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                        title="Used Volvo For Sale"
                                                        class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                        href="/used-cars-for-sale/listings/volvo/">
                                                        <div class="inline-block align-middle">
                                                            <div class="picture-container mr-[16px] inline-block align-middle"
                                                                style="padding-bottom: 0px; width: 30px; height: 30px;">
                                                                <img class="picture-inner"
                                                                    src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                    srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                    role="presentation" alt=""></div>
                                                            <div
                                                                class="inline-block self-center align-middle leading-[1]">
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
                                    <ul class="hidden-sm-down grid grid-cols-3 text-left lg:grid-cols-4"
                                        data-test="makesList" data-test-item="used">
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Acura For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/acura/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Acura</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Alfa Romeo For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/alfa-romeo/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Alfa Romeo</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used AM General For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/am-general/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/2747x384_full_color/969ed759e2320912/AM_General.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/2747x384_full_color/969ed759e2320912/AM_General.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/2747x384_full_color/969ed759e2320912/AM_General.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>AM General</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Aston Martin For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/aston-martin/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/1709x384_full_color/d214081a029dc416/Aston_Martin.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/1709x384_full_color/d214081a029dc416/Aston_Martin.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1709x384_full_color/d214081a029dc416/Aston_Martin.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Aston Martin</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Audi For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/audi/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Audi</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Bentley For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/bentley/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/1185x384_full_color/d2638e90710a366d/Bentley.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/1185x384_full_color/d2638e90710a366d/Bentley.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1185x384_full_color/d2638e90710a366d/Bentley.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Bentley</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used BMW For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/bmw/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>BMW</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Buick For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/buick/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Buick</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Cadillac For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/cadillac/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Cadillac</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Chevrolet For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/chevrolet/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Chevrolet</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Chrysler For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/chrysler/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Chrysler</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Dodge For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/dodge/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Dodge</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Ferrari For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/ferrari/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/234x384_full_color/d5203c48e7d38a9c/Ferrari.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/234x384_full_color/d5203c48e7d38a9c/Ferrari.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/234x384_full_color/d5203c48e7d38a9c/Ferrari.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Ferrari</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used FIAT For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/fiat/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>FIAT</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Fisker For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/fisker/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/b4d2095b7fe2a3f5/Fisker.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/b4d2095b7fe2a3f5/Fisker.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/b4d2095b7fe2a3f5/Fisker.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Fisker</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Ford For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/ford/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Ford</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Freightliner For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/freightliner/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/1854x384_full_color/ea5083c4bb38412e/Freightliner.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/1854x384_full_color/ea5083c4bb38412e/Freightliner.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1854x384_full_color/ea5083c4bb38412e/Freightliner.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Freightliner</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Genesis For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/genesis/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Genesis</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used GMC For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/gmc/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>GMC</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Honda For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/honda/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Honda</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used HUMMER For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/hummer/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/3759x384_full_color/76893111d596f8f2/HUMMER.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/3759x384_full_color/76893111d596f8f2/HUMMER.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/3759x384_full_color/76893111d596f8f2/HUMMER.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>HUMMER</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Hyundai For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/hyundai/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Hyundai</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used INEOS For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/ineos/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/951568bad9ce8ec3/INEOS.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/951568bad9ce8ec3/INEOS.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/951568bad9ce8ec3/INEOS.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>INEOS</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used INFINITI For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/infiniti/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>INFINITI</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Isuzu For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/isuzu/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/2235x384_full_color/87b8f66e2f2bc1fa/Isuzu.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/2235x384_full_color/87b8f66e2f2bc1fa/Isuzu.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/2235x384_full_color/87b8f66e2f2bc1fa/Isuzu.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Isuzu</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Jaguar For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/jaguar/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Jaguar</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Jeep For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/jeep/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Jeep</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Karma For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/karma/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/512x384_full_color/2498c42ff2973c50/Karma.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/512x384_full_color/2498c42ff2973c50/Karma.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/512x384_full_color/2498c42ff2973c50/Karma.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Karma</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Kia For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/kia/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Kia</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Lamborghini For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/lamborghini/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/335x384_full_color/4e8c9caab897bcc2/Lamborghini.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/335x384_full_color/4e8c9caab897bcc2/Lamborghini.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/335x384_full_color/4e8c9caab897bcc2/Lamborghini.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Lamborghini</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Land Rover For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/land-rover/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Land Rover</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Lexus For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/lexus/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Lexus</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Lincoln For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/lincoln/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Lincoln</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Lotus For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/lotus/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/2d251d389a327bf3/Lotus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/2d251d389a327bf3/Lotus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/2d251d389a327bf3/Lotus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Lotus</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Lucid For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/lucid/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/eca94ca09242b896/Lucid.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/eca94ca09242b896/Lucid.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/eca94ca09242b896/Lucid.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Lucid</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Maserati For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/maserati/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Maserati</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Maybach For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/maybach/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/504x384_full_color/887dbe72f56d88c9/Maybach.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/504x384_full_color/887dbe72f56d88c9/Maybach.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/504x384_full_color/887dbe72f56d88c9/Maybach.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Maybach</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Mazda For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/mazda/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Mazda</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used McLaren For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/mclaren/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/2675x384_full_color/f887c5e1dddb5b46/McLaren.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/2675x384_full_color/f887c5e1dddb5b46/McLaren.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/2675x384_full_color/f887c5e1dddb5b46/McLaren.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>McLaren</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Mercedes-Benz For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/mercedes-benz/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Mercedes-Benz</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Mercury For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/mercury/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/847c8cfa8d900b17/Mercury.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/847c8cfa8d900b17/Mercury.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/847c8cfa8d900b17/Mercury.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Mercury</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used MINI For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/mini/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>MINI</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Mitsubishi For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/mitsubishi/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Mitsubishi</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Nissan For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/nissan/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Nissan</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Oldsmobile For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/oldsmobile/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/410x384_full_color/8b33c670c7173042/Oldsmobile.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/410x384_full_color/8b33c670c7173042/Oldsmobile.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/410x384_full_color/8b33c670c7173042/Oldsmobile.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Oldsmobile</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Plymouth For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/plymouth/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/a46aa76cf1ab01d5/Plymouth.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/a46aa76cf1ab01d5/Plymouth.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/a46aa76cf1ab01d5/Plymouth.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Plymouth</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Polestar For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/polestar/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/379x384_full_color/f17cb6e7bc04cb64/Polestar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/379x384_full_color/f17cb6e7bc04cb64/Polestar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/379x384_full_color/f17cb6e7bc04cb64/Polestar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Polestar</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Pontiac For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/pontiac/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/186x384_full_color/8066191e443ba237/Pontiac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/186x384_full_color/8066191e443ba237/Pontiac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/186x384_full_color/8066191e443ba237/Pontiac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Pontiac</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Porsche For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/porsche/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/296x384_full_color/5505f9fd129ce1d5/Porsche.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/296x384_full_color/5505f9fd129ce1d5/Porsche.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/296x384_full_color/5505f9fd129ce1d5/Porsche.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Porsche</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Ram For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/ram/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Ram</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Rivian For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/rivian/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/399x384_full_color/7016c7daa3d20e4f/Rivian.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/399x384_full_color/7016c7daa3d20e4f/Rivian.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/399x384_full_color/7016c7daa3d20e4f/Rivian.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Rivian</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Rolls-Royce For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/rolls-royce/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/222x384_full_color/995403cff9890cb1/Rolls-Royce.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/222x384_full_color/995403cff9890cb1/Rolls-Royce.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/222x384_full_color/995403cff9890cb1/Rolls-Royce.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Rolls-Royce</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Saab For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/saab/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/4a938b6d06287fae/Saab.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/4a938b6d06287fae/Saab.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/4a938b6d06287fae/Saab.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Saab</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Saturn For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/saturn/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/398x384_full_color/d1197ea9dca096c2/Saturn.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/398x384_full_color/d1197ea9dca096c2/Saturn.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/398x384_full_color/d1197ea9dca096c2/Saturn.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Saturn</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Scion For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/scion/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/570x384_full_color/4a826825db9c0ec4/Scion.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/570x384_full_color/4a826825db9c0ec4/Scion.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/570x384_full_color/4a826825db9c0ec4/Scion.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Scion</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used smart For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/smart/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/405x384_full_color/13a6e9d329db2108/smart.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/405x384_full_color/13a6e9d329db2108/smart.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/405x384_full_color/13a6e9d329db2108/smart.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>smart</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Subaru For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/subaru/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Subaru</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Suzuki For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/suzuki/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/376x384_full_color/d3bcdb28245d306a/Suzuki.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/376x384_full_color/d3bcdb28245d306a/Suzuki.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/376x384_full_color/d3bcdb28245d306a/Suzuki.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Suzuki</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Tesla For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/tesla/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/385x384_full_color/894bffb70433ffd7/Tesla.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/894bffb70433ffd7/Tesla.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/894bffb70433ffd7/Tesla.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Tesla</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Toyota For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/toyota/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Toyota</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used VinFast For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/vinfast/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/395x384_full_color/86367274d3ed5011/VinFast.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/395x384_full_color/86367274d3ed5011/VinFast.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/395x384_full_color/86367274d3ed5011/VinFast.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>VinFast</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Volkswagen For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/volkswagen/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
                                                    <div class="inline-block self-center align-middle leading-[1]">
                                                        <div>Volkswagen</div>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                title="Used Volvo For Sale"
                                                class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                href="/used-cars-for-sale/listings/volvo/">
                                                <div class="inline-block align-middle">
                                                    <div class="picture-container mr-[16px] inline-block align-middle"
                                                        style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                            class="picture-inner"
                                                            src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                            srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                            role="presentation" alt=""></div>
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
                <section class="pb-5 pt-4 md:pt-5">
                    <div class="container container-max-width-1">
                        <div class="row flex flex-col md:flex-row md:flex-row-reverse items-center">
                            <div class="mb-3 text-center md:mb-0 col-md-6">
                                <div class="picture-container"
                                    style="padding-bottom: 0px; width: 320px; height: 214px;"><img
                                        class="picture-inner picture-svg"
                                        src="assets/_next/static/images/info-content-23291b9c14b0749c709fe3afc0c115ab.svg"
                                        loading="lazy" alt="Choose From More than 660,000 Used Cars"></div>
                            </div>
                            <div class="col-md-6">
                                <h2 class="heading-3 normal-case heading-md-2 md:normal-case">Choose From More than
                                    660,000 Used&nbsp;Cars</h2>
                                <p class="py-3">With an extensive inventory of vehicles to choose from, it's easy to
                                    find your ideal car, whether that's a sedan, truck, SUV, or other body type. Our
                                    Certified Dealers carry a broad selection of best-selling makes and models, including
                                    the Honda Civic, Jeep Wrangler, and Ford F-150.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pb-5 pt-4 md:pt-5">
                    <div class="container container-max-width-1">
                        <div class="row flex flex-col md:flex-row items-center">
                            <div class="mb-3 text-center md:mb-0 col-md-6">
                                <div class="picture-container"
                                    style="padding-bottom: 0px; width: 320px; height: 214px;"><img
                                        class="picture-inner picture-svg"
                                        src="assets/_next/static/images/module-4-img-81d35bcb2c254dc84acc1dd98053aada.svg"
                                        loading="lazy" alt="Explore, Compare, Then Build Your Deal"></div>
                            </div>
                            <div class="col-md-6">
                                <h2 class="heading-3 normal-case heading-md-2 md:normal-case">Explore, Compare, Then Build
                                    Your&nbsp;Deal</h2>
                                <p class="py-3">Check out our car comparison tool or explore our vehicle rankings to
                                    learn more about vehicles you're interested in. Then, use our lease and loan calculators
                                    to set your budget and customize your monthly payments.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pb-5 pt-4 md:pt-5">
                    <div class="container container-max-width-1">
                        <div class="row flex flex-col md:flex-row md:flex-row-reverse items-center">
                            <div class="mb-3 text-center md:mb-0 col-md-6">
                                <div class="picture-container"
                                    style="padding-bottom: 0px; width: 320px; height: 214px;"><img
                                        class="picture-inner picture-svg"
                                        src="assets/_next/static/images/module-1-img-61d1282fee01b38e2dcac37fb617efb3.svg"
                                        loading="lazy" alt="Know a Great Price When You See It"></div>
                            </div>
                            <div class="col-md-6">
                                <h2 class="heading-3 normal-case heading-md-2 md:normal-case">Know a Great Price When You
                                    See&nbsp;It</h2>
                                <p class="py-3">We look at a million of used-cars listings across the U.S., considering
                                    factors like mileage, location, options, and condition, to create a price rating for
                                    each used vehicle, so that you can tell when you're getting a good deal.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pt-4 pb-5 md:pt-5 md:pb-6">
                    <div class="container container-max-width-1 flex flex-col items-center">
                        <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-4 md:mb-5">Used Car
                            Shopping&nbsp;Advice</h2>
                        <div class="row w-full">
                            <div class="mb-3 lg:mb-0 sm:px-2 col-sm-6 offset-sm-0 col-lg-4 offset-lg-0"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] h-full"
                                    href="https://www.truecar.com/blog/the-six-factors-that-make-your-used-car-more-desirable/"
                                    target="_blank" rel="noopener">
                                    <div class="card-image">
                                        <div class="picture-container picture-container-block"
                                            style="padding-bottom: 73.3333%;"><img class="picture-block rounded-t"
                                                sizes="289.984375px"
                                                src="assets/_next/static/images/blog-1-5cf8f11374b2fb6c334f905e302691b8.jpeg"
                                                loading="lazy" alt="" role="presentation"></div>
                                    </div>
                                    <div data-test="cardContent" class="card-content">
                                        <h3 class="heading-base font-bold">The Six Factors That Make Your Used Car
                                            More&nbsp;Desirable</h3>
                                        <p class="py-1 text-xs text-muted">March 1, 2021</p>
                                        <p class="text-sm">Save those oil change receipts.</p>
                                    </div>
                                </a></div>
                            <div class="mb-3 lg:mb-0 sm:px-2 col-sm-6 offset-sm-0 col-lg-4 offset-lg-0"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] h-full"
                                    href="https://www.truecar.com/blog/heres-what-to-check-for-before-buying-a-used-car/"
                                    target="_blank" rel="noopener">
                                    <div class="card-image">
                                        <div class="picture-container picture-container-block"
                                            style="padding-bottom: 73.3333%;"><img class="picture-block rounded-t"
                                                sizes="289.984375px"
                                                src="assets/_next/static/images/blog-2-bb03f51e41760b713d980890953f3d35.jpeg"
                                                loading="lazy" alt="" role="presentation"></div>
                                    </div>
                                    <div data-test="cardContent" class="card-content">
                                        <h3 class="heading-base font-bold">Here's What to Check for Before Buying a
                                            Used&nbsp;Car</h3>
                                        <p class="py-1 text-xs text-muted">October 12, 2020</p>
                                        <p class="text-sm">Your guide to all the sights and sounds.</p>
                                    </div>
                                </a></div>
                            <div class="lg:mb-0 sm:px-2 col-sm-6 offset-sm-3 col-lg-4 offset-lg-0"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] h-full"
                                    href="https://www.truecar.com/blog/should-you-buy-a-used-car-as-is/" target="_blank"
                                    rel="noopener">
                                    <div class="card-image">
                                        <div class="picture-container picture-container-block"
                                            style="padding-bottom: 73.3333%;"><img class="picture-block rounded-t"
                                                sizes="289.984375px"
                                                src="assets/_next/static/images/blog-3-423bc706e7b48b386069705210043d86.jpeg"
                                                loading="lazy" alt="" role="presentation"></div>
                                    </div>
                                    <div data-test="cardContent" class="card-content">
                                        <h3 class="heading-base font-bold">Should You Buy a Used Car "As&nbsp;Is"?</h3>
                                        <p class="py-1 text-xs text-muted">July 7, 2020</p>
                                        <p class="text-sm">What to do when there's no warranty.</p>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </section>
                <section class="pt-4 pb-5 md:pt-5 md:pb-6">
                    <div class="container">
                        <h2 class="heading-3 normal-case heading-md-2 md:normal-case mb-2-5 text-center md:mb-3">Used Cars
                            FAQs</h2>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">What is good mileage for a used&nbsp;car?</h3>
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
                                    <div class="whitespace-pre-line">There are many factors to consider when determining
                                        whether the mileage on a used car is acceptable. The average vehicle in America is
                                        roughly 12 years old, and the average American drives around 13,500 miles per year.
                                        This would mean the average car on the road today has somewhere close to 160,000
                                        miles. A best practice would be to buy a used car at least 3-4 years younger than
                                        the average, with a correlating 40,000 - 50,000 fewer miles on the odometer.</div>
                                </div>
                            </div>
                        </div>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">Can you lease a used&nbsp;car?</h3>
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
                                    <div class="whitespace-pre-line">Yes, it is possible to lease a used vehicle.
                                        Although, this will depend on the vehicle you want and the dealership you are
                                        working with. Not every dealership will allow shoppers to lease used inventory. When
                                        leasing a used car, it is important to negotiate the capitalized cost (the vehicle's
                                        total value) just like you would the MSRP if you were purchasing a new car. You'll
                                        then want to compare the lease's overall costs to make sure it is a good value
                                        versus buying.</div>
                                </div>
                            </div>
                        </div>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">How do you buy a used&nbsp;car?</h3>
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
                                    <div class="whitespace-pre-line">When purchasing a used car from a dealership, the
                                        process is nearly the same as buying a new car. Identify the vehicle you want, reach
                                        out to the dealership to do a test drive, and negotiate the purchase terms. The
                                        purchase process is also very similar when buying a used car from a private party.
                                        However, the private party may be unwilling to accept financing and may require cash
                                        payment.</div>
                                </div>
                            </div>
                        </div>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">What to look for when buying a used&nbsp;car?</h3>
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
                                    <div class="whitespace-pre-line">Start by doing your research online through TrueCar
                                        to get a vehicle history report. These reports should tell you when the vehicle was
                                        registered, how many owners it has had, and if it has been in a wreck or otherwise
                                        has a clean title. Signs of a used car in rough shape include major dents or panel
                                        misalignment, a rough idling engine, or discolored fluids.</div>
                                </div>
                            </div>
                        </div>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">How do you negotiate the price of a used&nbsp;car?
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
                                    <div class="whitespace-pre-line">Negotiating the price of a used car is very similar
                                        to what you would do when buying a new vehicle. In this case, though, you should try
                                        to find several other used cars identical to the one you want that are for sale.
                                        Features, age, and mileage are most important when comparing a seller’s car to
                                        another vehicle. If you take the car for a test drive, identify any flaws you find
                                        with the car, such as small dents or interior damage, and use these as a way to
                                        bring down the price.</div>
                                </div>
                            </div>
                        </div>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">Should I buy a car used or&nbsp;new?</h3>
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
                                    <div class="whitespace-pre-line">The answer to this question depends on your own
                                        personal financial situation, as well as the length of time you are going to keep
                                        the car and your expected mileage. Generally, suppose there’s a slightly used
                                        version of the same vehicle with the features you want. In that case, you will take
                                        less of a depreciation hit, as new cars lose value as soon as they are driven off of
                                        the lot. Just know that the exact trim, color, or features you want may not be
                                        available.</div>
                                </div>
                            </div>
                        </div>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">When is the best time to buy a used&nbsp;car?</h3>
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
                                    <div class="whitespace-pre-line">Used car shopping is typically best after the new
                                        year, especially near Martin Luther King Jr. Day. New car sales are highest in the
                                        last few months of the year. Because of this, dealers are taking more trade-in
                                        inventory than usual. They will want to sell this inventory in the slower new car
                                        sales months of January, February, and March.</div>
                                </div>
                            </div>
                        </div>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">How do you finance a used&nbsp;car?</h3>
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
                                    <div class="whitespace-pre-line">When buying a used car from a dealer, the financing
                                        process is very similar to shopping for a new car. Private banks and banks that the
                                        dealership will offer various rates, so be sure to shop around. Private party
                                        sellers may not want to work with a loan or cashier’s check, so be sure to ask their
                                        preferences.</div>
                                </div>
                            </div>
                        </div>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">Does the lemon law apply to used&nbsp;cars?</h3>
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
                                    <div class="whitespace-pre-line">Yes, as long as the used car was sold with a written
                                        warranty, whether that is the original manufacturer’s warranty or a warranty from a
                                        dealer. It is important to note that, across most states, most used cars are sold
                                        “as-is,” especially when buying from a private party. The buyer’s responsibility is
                                        to do their due diligence to determine if there are any unacceptable issues with the
                                        car.</div>
                                </div>
                            </div>
                        </div>
                        <div class="expandable-list-item"><button
                                class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                aria-expanded="false">
                                <div class="heading-4 normal-case w-full px-3 py-3">
                                    <h3 class="heading-4 normal-case">What is a certified pre-owned (CPO)&nbsp;Car?</h3>
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
                                    <div class="whitespace-pre-line">A certified pre-owned or CPO car is a used vehicle
                                        that has undergone a detailed inspection by a dealership, is in excellent condition
                                        and has an extended warranty. The specific benefits of buying a CPO will vary by
                                        manufacturer. However, these cars often come with a higher cost than other used
                                        vehicles, so it’s worth weighing the vehicle certification pros and cons.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-light">
                    <div class="container container-max-width-3 py-4">
                        <div class="row">
                            <div class="pt-3 md:pt-4 lg:pt-0 col-12 col-sm-6 col-lg-3">
                                <div class="heading-5 normal-case py-2">Popular Used Cars</div>
                                <div class="see-more space-y-2" data-ignore-contrast="true">
                                    <div data-test="seeMoreBody" style="overflow: hidden; max-height: 9em;">
                                        <div>
                                            <ul class="whitespace-nowrap">
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/honda/civic/">Honda Civic</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/tesla/model-3/">Tesla
                                                        Model-3</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/dodge/charger/">Dodge
                                                        Charger</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/honda/accord/">Honda Accord</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/toyota/camry/">Toyota Camry</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/dodge/challenger/">Dodge
                                                        Challenger</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/toyota/corolla/">Toyota
                                                        Corolla</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/tesla/model-s/">Tesla Model
                                                        S</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/kia/stinger/">Kia Stinger</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/bmw/i8/">BMW i8</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/subaru/wrx/">Subaru WRX</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/nissan/altima/">Nissan
                                                        Altima</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/kia/soul/">Kia Soul</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/bmw/m3/">BMW M3</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/honda/fit/">Honda Fit</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/chrysler/300/">Chrysler 300</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/fusion/">Ford Fusion</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/mustang/">Ford Mustang</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/infiniti/q50/">Infiniti Q50</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/subaru/brz/">Subaru BRZ</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/toyota/prius/">Toyota Prius</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/audi/a4/">Audi A4</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/nissan/maxima/">Nissan
                                                        Maxima</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/nissan/leaf/">Nissan LEAF</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/hyundai/elantra/">Hyundai
                                                        Elantra</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-left mt-0" data-test="seeMoreLinkContainer"><button
                                            type="button" class="link-button see-more-link"
                                            data-test="seeMoreButton"><span class="see-more-link-text">See
                                                More</span><svg viewBox="0 0 24 24"
                                                class="icon icon-fill-default see-more-icon-angle" aria-hidden="true"
                                                style="width: 24px; height: 24px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></button></div>
                                    <div class="text-center mt-0" data-test="seeLessLinkContainer"
                                        style="display: none">
                                        <button type="button" class="link-button see-more-link"
                                            data-test="seeLessButton">
                                            <span class="see-less-link-text">See Less</span>
                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default see-less-icon-angle"
                                                aria-hidden="true" style="width: 24px; height: 24px;">
                                                <use href="#keyboard_arrow_up"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div data-test="seeMoreFade" class="see-more-fade see-more-fade-light"></div>
                                </div>
                            </div>
                            <div class="pt-3 md:pt-4 lg:pt-0 col-12 col-sm-6 col-lg-3">
                                <div class="heading-5 normal-case py-2">Popular Used SUVs</div>
                                <div class="see-more space-y-2" data-ignore-contrast="true">
                                    <div data-test="seeMoreBody" style="overflow: hidden; max-height: 9em;">
                                        <div>
                                            <ul class="whitespace-nowrap">
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/jeep/wrangler/">Jeep
                                                        Wrangler</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/toyota/4runner/">Toyota
                                                        4Runner</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/honda/cr-v/">Honda CR-V</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/toyota/rav4/">Toyota RAV4</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/toyota/highlander/">Toyota
                                                        Highlander</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/jeep/grand-cherokee/">Jeep
                                                        Grand Cherokee</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/explorer/">Ford
                                                        Explorer</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/mazda/cx-5/">Mazda CX-5</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/subaru/crosstrek/">Subaru
                                                        Crosstrek</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/subaru/outback/">Subaru
                                                        Outback</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/subaru/forester/">Subaru
                                                        Forester</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/honda/pilot/">Honda Pilot</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/chevrolet/tahoe/">Chevrolet
                                                        Tahoe</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/kia/telluride/">Kia
                                                        Telluride</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/nissan/rogue/">Nissan Rogue</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/tesla/model-x/">Tesla Model
                                                        X</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/jeep/cherokee/">Jeep
                                                        Cherokee</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/dodge/durango/">Dodge
                                                        Durango</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/volvo/xc90/">Volvo XC90</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/porsche/cayenne/">Porsche
                                                        Cayenne</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/expedition/">Ford
                                                        Expedition</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/escape/">Ford Escape</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/kia/sorento/">Kia Sorento</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/bmw/x5/">BMW X5</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/hyundai/santa-fe/">Hyundai
                                                        Santa Fe</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-left mt-0" data-test="seeMoreLinkContainer"><button
                                            type="button" class="link-button see-more-link"
                                            data-test="seeMoreButton"><span class="see-more-link-text">See
                                                More</span><svg viewBox="0 0 24 24"
                                                class="icon icon-fill-default see-more-icon-angle" aria-hidden="true"
                                                style="width: 24px; height: 24px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></button></div>
                                    <div class="text-center mt-0" data-test="seeLessLinkContainer"
                                        style="display: none">
                                        <button type="button" class="link-button see-more-link"
                                            data-test="seeLessButton">
                                            <span class="see-less-link-text">See Less</span>
                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default see-less-icon-angle"
                                                aria-hidden="true" style="width: 24px; height: 24px;">
                                                <use href="#keyboard_arrow_up"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div data-test="seeMoreFade" class="see-more-fade see-more-fade-light"></div>
                                </div>
                            </div>
                            <div class="pt-3 md:pt-4 lg:pt-0 col-12 col-sm-6 col-lg-3">
                                <div class="heading-5 normal-case py-2">Popular Used Trucks</div>
                                <div class="see-more space-y-2" data-ignore-contrast="true">
                                    <div data-test="seeMoreBody" style="overflow: hidden; max-height: 9em;">
                                        <div>
                                            <ul class="whitespace-nowrap">
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/toyota/tacoma/">Toyota
                                                        Tacoma</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/f-150/">Ford F-150</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/ranger/">Ford Ranger</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/toyota/tundra/">Toyota
                                                        Tundra</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/chevrolet/colorado/">Chevrolet
                                                        Colorado</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/jeep/gladiator/">Jeep
                                                        Gladiator</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/honda/ridgeline/">Honda
                                                        Ridgeline</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/nissan/frontier/">Nissan
                                                        Frontier</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ram/1500/">Ram 1500</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/gmc/canyon/">GMC Canyon</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/nissan/titan/">Nissan Titan</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ram/2500/">Ram 2500</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ram/3500/">Ram 3500</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/chevrolet/silverado-1500/">Chevrolet
                                                        Silverado 1500</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/gmc/sierra-1500/">GMC Sierra
                                                        1500</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/super-duty-f-250/">Ford
                                                        Super Duty F-250</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/nissan/titan-xd/">Nissan Titan
                                                        XD</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/chevrolet/silverado-2500hd/">Chevrolet
                                                        Silverado 2500HD</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/gmc/sierra-2500hd/">GMC Sierra
                                                        2500HD</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/chevrolet/silverado-3500hd/">Chevrolet
                                                        Silverado 3500HD</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/gmc/sierra-3500hd/">GMC Sierra
                                                        3500HD</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/super-duty-f-350/">Ford
                                                        Super Duty F-350</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ram/1500-classic/">Ram 1500
                                                        Classic</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/super-duty-f-450/">Ford
                                                        Super Duty F-450</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-left mt-0" data-test="seeMoreLinkContainer"><button
                                            type="button" class="link-button see-more-link"
                                            data-test="seeMoreButton"><span class="see-more-link-text">See
                                                More</span><svg viewBox="0 0 24 24"
                                                class="icon icon-fill-default see-more-icon-angle" aria-hidden="true"
                                                style="width: 24px; height: 24px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></button></div>
                                    <div class="text-center mt-0" data-test="seeLessLinkContainer"
                                        style="display: none">
                                        <button type="button" class="link-button see-more-link"
                                            data-test="seeLessButton">
                                            <span class="see-less-link-text">See Less</span>
                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default see-less-icon-angle"
                                                aria-hidden="true" style="width: 24px; height: 24px;">
                                                <use href="#keyboard_arrow_up"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div data-test="seeMoreFade" class="see-more-fade see-more-fade-light"></div>
                                </div>
                            </div>
                            <div class="pt-3 md:pt-4 lg:pt-0 col-12 col-sm-6 col-lg-3">
                                <div class="heading-5 normal-case py-2">Popular Used Vans</div>
                                <div class="see-more space-y-2" data-ignore-contrast="true">
                                    <div data-test="seeMoreBody" style="overflow: hidden; max-height: 9em;">
                                        <div>
                                            <ul class="whitespace-nowrap">
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/honda/odyssey/">Honda
                                                        Odyssey</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/toyota/sienna/">Totoya
                                                        Sienna</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/chrysler/pacifica/">Chrysler
                                                        Pacifica</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/kia/sedona/">Kia Sedona</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/transit-cargo-van/">Ford
                                                        Transit Cargo Van</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/dodge/grand-caravan/">Dodge
                                                        Grand Caravan</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/nissan/nv-passenger/">Nissan NV
                                                        Passenger</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ram/promaster-cargo-van/">Ram
                                                        ProMaster Cargo Van</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/nissan/nv-cargo/">Nissan NV
                                                        Cargo</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/chevrolet/express-cargo-van/">Chevrolet
                                                        Express Cargo Van</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/kia/carnival/">Kia Carnival</a>
                                                </li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/chrysler/voyager/">Chrysler
                                                        Voyager</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/transit-connect-wagon/">Ford
                                                        Transit Connect Wagon</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/gmc/savana-cargo-van/">GMC
                                                        Savana Cargo Van</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/mercedes-benz/sprinter-cargo-van/">Mercedes-Benz
                                                        Sprinter Cargo Van</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/mercedes-benz/sprinter-passenger-van/">Mercedes-Benz
                                                        Sprinter Passenger Van</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/transit-connect-van/">Ford
                                                        Transit Connect Van</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/mercedes-benz/metris-cargo-van/">Mercedes-Benz
                                                        Metris Cargo Van</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ram/promaster-city-wagon/">Ram
                                                        ProMaster City Wagon</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ram/promaster-city-cargo-van/">Ram
                                                        ProMaster City Cargo Van</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ram/promaster-window-van/">Ram
                                                        ProMaster Window Van</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/mercedes-benz/metris-passenger-van/">Mercedes-Benz
                                                        Metris Passenger Van</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/ford/transit-passenger-wagon/">Ford
                                                        Transit Passenger Wagon</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/nissan/nv200-compact-cargo/">Nissan
                                                        NV200 Compact Cargo</a></li>
                                                <li
                                                    class="block overflow-hidden text-ellipsis whitespace-nowrap text-[#0098d1]">
                                                    <a class="inset-focus"
                                                        href="/used-cars-for-sale/listings/mercedes-benz/sprinter-crew-van/">Mercedes-Benz
                                                        Sprinter Crew Van</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-left mt-0" data-test="seeMoreLinkContainer"><button
                                            type="button" class="link-button see-more-link"
                                            data-test="seeMoreButton"><span class="see-more-link-text">See
                                                More</span><svg viewBox="0 0 24 24"
                                                class="icon icon-fill-default see-more-icon-angle" aria-hidden="true"
                                                style="width: 24px; height: 24px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></button></div>
                                    <div class="text-center mt-0" data-test="seeLessLinkContainer"
                                        style="display: none">
                                        <button type="button" class="link-button see-more-link"
                                            data-test="seeLessButton">
                                            <span class="see-less-link-text">See Less</span>
                                            <svg viewBox="0 0 24 24" class="icon icon-fill-default see-less-icon-angle"
                                                aria-hidden="true" style="width: 24px; height: 24px;">
                                                <use href="#keyboard_arrow_up"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div data-test="seeMoreFade" class="see-more-fade see-more-fade-light"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
