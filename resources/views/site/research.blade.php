@extends('site.layouts.app')
@section('content')
    <style>
        .page-faqs {
            background-color: #000000;
            color: #fff;
        }

        .accordion-button {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            /* padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x); */
            font-size: 1rem;
            /* color: var(--bs-accordion-btn-color); */
            text-align: left;
            /* background-color: var(--bs-accordion-btn-bg); */
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            /* transition: var(--bs-accordion-transition); */
        }
    </style>
    <main id="mainContent" style="margin-top:160px"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div data-test="researchLanding">
            <div class="bg-light">
                <div class="container container-max-width-1 rounded pb-2 pt-5 text-center md:pt-4 md:pb-1">
                    <div>
                        <h2 class="heading-3 normal-case" data-test="researchLandingResearchAndCompareHeading">Research and
                            Compare</h2>
                        <p data-test="researchLandingResearchAndCompareHeadingSubText"
                            class="mt-1 mb-3 px-3 md:mb-2-5 md:px-0">Find the car that's right for you: see detailed
                            descriptions of every make and model, look at photos, and read reviews.</p>
                    </div>
                    <div class="mx-auto">
                        <form novalidate="">
                            <div class="items-center justify-center md:flex">
                                <div data-test="researchLandingResearchAndCompareModelOverviewSelector" class="">
                                    <div class="flex md:inline-flex flex-col md:flex-row">
                                        <div class="field-container-challenger md:mr-2 mb-2-5 md:mb-0 w-full md:w-[175px]">
                                            <div class="field-wrapper-challenger field-label-padding-challenger">
                                                <div class="field-content-row field-with-suffix">
                                                    <div class="field-input-label-challenger input-label-select"><select
                                                            required="" aria-invalid="false" aria-label="Make"
                                                            class="form-select-element-challenger"
                                                            data-test="modelOverviewCtaMakeSelect">
                                                            <option disabled="" value="">Make</option>
                                                            <option value="acura">Acura</option>
                                                            <option value="alfa-romeo">Alfa Romeo</option>
                                                            <option value="aston-martin">Aston Martin</option>
                                                            <option value="audi">Audi</option>
                                                            <option value="bentley">Bentley</option>
                                                            <option value="bmw">BMW</option>
                                                            <option value="buick">Buick</option>
                                                            <option value="cadillac">Cadillac</option>
                                                            <option value="chevrolet">Chevrolet</option>
                                                            <option value="chrysler">Chrysler</option>
                                                            <option value="dodge">Dodge</option>
                                                            <option value="ferrari">Ferrari</option>
                                                            <option value="fiat">FIAT</option>
                                                            <option value="fisker">Fisker</option>
                                                            <option value="ford">Ford</option>
                                                            <option value="genesis">Genesis</option>
                                                            <option value="gmc">GMC</option>
                                                            <option value="honda">Honda</option>
                                                            <option value="hyundai">Hyundai</option>
                                                            <option value="ineos">INEOS</option>
                                                            <option value="infiniti">INFINITI</option>
                                                            <option value="jaguar">Jaguar</option>
                                                            <option value="jeep">Jeep</option>
                                                            <option value="kia">Kia</option>
                                                            <option value="lamborghini">Lamborghini</option>
                                                            <option value="land-rover">Land Rover</option>
                                                            <option value="lexus">Lexus</option>
                                                            <option value="lincoln">Lincoln</option>
                                                            <option value="lotus">Lotus</option>
                                                            <option value="lucid">Lucid</option>
                                                            <option value="maserati">Maserati</option>
                                                            <option value="mazda">Mazda</option>
                                                            <option value="mclaren">McLaren</option>
                                                            <option value="mercedes-benz">Mercedes-Benz</option>
                                                            <option value="mini">MINI</option>
                                                            <option value="mitsubishi">Mitsubishi</option>
                                                            <option value="nissan">Nissan</option>
                                                            <option value="polestar">Polestar</option>
                                                            <option value="porsche">Porsche</option>
                                                            <option value="ram">Ram</option>
                                                            <option value="rivian">Rivian</option>
                                                            <option value="rolls-royce">Rolls-Royce</option>
                                                            <option value="subaru">Subaru</option>
                                                            <option value="tesla">Tesla</option>
                                                            <option value="toyota">Toyota</option>
                                                            <option value="vinfast">VinFast</option>
                                                            <option value="volkswagen">Volkswagen</option>
                                                            <option value="volvo">Volvo</option>
                                                            <optgroup label="Out of Production">
                                                                <option value="am-general">AM General</option>
                                                                <option value="daewoo">Daewoo</option>
                                                                <option value="eagle">Eagle</option>
                                                                <option value="geo">Geo</option>
                                                                <option value="hummer">HUMMER</option>
                                                                <option value="isuzu">Isuzu</option>
                                                                <option value="karma">Karma</option>
                                                                <option value="maybach">Maybach</option>
                                                                <option value="mercury">Mercury</option>
                                                                <option value="oldsmobile">Oldsmobile</option>
                                                                <option value="panoz">Panoz</option>
                                                                <option value="plymouth">Plymouth</option>
                                                                <option value="pontiac">Pontiac</option>
                                                                <option value="saab">Saab</option>
                                                                <option value="saturn">Saturn</option>
                                                                <option value="scion">Scion</option>
                                                                <option value="smart">smart</option>
                                                                <option value="suzuki">Suzuki</option>;
                                                            </optgroup>
                                                        </select>
                                                        <div class="field-label-text-challenger text-left"
                                                            data-test="fieldLabel"><label
                                                                data-ignore-contrast="true">Make</label></div>
                                                    </div>
                                                    <div class="field-addon-challenger field-addon-challenger-suffix"><svg
                                                            viewBox="0 0 24 24" class="icon icon-fill-default"
                                                            aria-hidden="true" style="width: 24px; height: 24px;">
                                                            <use href="#arrow_drop_down"></use>
                                                        </svg></div>
                                                </div>
                                                <div class="field-message-challenger">
                                                    <div class="field-message-text-challenger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field-container-challenger md:mr-2 mb-2-5 md:mb-0 w-full md:w-[175px]">
                                            <div class="field-wrapper-challenger field-label-padding-challenger">
                                                <div class="field-content-row field-with-suffix field-content-disabled">
                                                    <div class="field-input-label-challenger input-label-select"><select
                                                            required="" aria-invalid="false" aria-label="Model"
                                                            disabled="" class="form-select-element-challenger"
                                                            data-test="modelOverviewCtaModelSelect">
                                                            <option disabled="" value="">Model</option>
                                                        </select>
                                                        <div class="field-label-text-challenger text-left"
                                                            data-test="fieldLabel"><label
                                                                data-ignore-contrast="true">Model</label></div>
                                                    </div>
                                                    <div
                                                        class="field-addon-challenger field-addon-challenger-suffix field-addon-challenger-suffix-disabled">
                                                        <svg viewBox="0 0 24 24" class="icon icon-fill-default"
                                                            aria-hidden="true" style="width: 24px; height: 24px;">
                                                            <use href="#arrow_drop_down"></use>
                                                        </svg></div>
                                                </div>
                                                <div class="field-message-challenger">
                                                    <div class="field-message-text-challenger"></div>
                                                </div>
                                            </div>
                                        </div><button type="submit"
                                            class="btn btn-lg btn-primary self-end mt-1 md:mt-auto m-auto w-full md:w-auto"
                                            data-ignore-contrast="true" data-loading="false"
                                            data-test="modelOverviewCtaActionButton"><span
                                                class="btn-inner">Go</span></button>
                                    </div>
                                    <p id="modelOverviewSelectorError"
                                        class="md:pt-1 h-[16px] text-xs text-center text-red whitespace-nowrap pt-1 md:pt-0 md:pl-2-5 w-full md:text-left"
                                        data-test="modelOverviewCtaHint"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container container-max-width-1 pt-6 text-center" data-test="rankingsModule">
                <div class="row">
                    <div class="col">
                        <h2 class="heading-3 normal-case" data-test="researchLandingBestRankedSelectorHeading">Your Guide
                            to Top&nbsp;Vehicles</h2>
                        <p class="mt-1" data-test="researchLandingBestRankedSelectorSubText">We sifted through the data
                            to select the best cars and trucks in every category.</p>
                    </div>
                </div>
                <div class="row mt-4 lg:mt-5" data-test="researchLandingBestRankedSelectorRankingCategorySelector">
                    <div class="col">
                        <div class="row">
                            <div class="col-sm-6 col-md-4"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2 md:mb-3 relative overflow-hidden group shadow-none border"
                                    size="2" data-test="researchLandingBestRankedSelectorRankingCategoryCard"
                                    href="/best-cars-trucks/cars/">
                                    <div
                                        class="absolute right-[79px] top-[40px] h-[63px] w-[158px] translate-x-1/2 rounded-[50%] bg-gradient-to-r from-[#06AEAA] to-[#0088D6] duration-1000 ease-in-out group-hover:right-1/2 group-hover:-top-4 group-hover:h-[125px] group-hover:w-[667px] group-hover:translate-x-1/2 sm:top-auto sm:right-auto sm:bottom-[-82px] sm:left-1/2 sm:h-[120px] sm:w-[320px] sm:-translate-x-1/2 group-hover:sm:right-auto group-hover:sm:top-auto group-hover:sm:h-[225px] group-hover:sm:w-[600px] group-hover:sm:-translate-x-1/2">
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content card-content-center z-10 flex-row items-center py-2 sm:flex-col sm:pt-3 sm:pb-2">
                                        <h3
                                            class="heading-4 normal-case heading-md-3 md:normal-case sm:pb-1 ml-3 sm:ml-0 group-hover:text-white duration-1000 mr-auto sm:mr-0">
                                            Best Cars</h3>
                                        <div class="img-container hidden sm:block"
                                            style="height: 61px; padding-bottom: 0px; width: 123px;"><img
                                                src="{{ asset('assets/_next/static/images/cars-1a091092666f44deead3a3dc15132d25.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/cars-1a091092666f44deead3a3dc15132d25.png') }});">
                                        </div>
                                        <div class="img-container mr-1 mt-0 translate-y-[3px] sm:hidden"
                                            style="height: 43px; padding-bottom: 0px; width: 101px;"><img
                                                src="{{ asset('assets/_next/static/images/cars-1a091092666f44deead3a3dc15132d25.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/cars-1a091092666f44deead3a3dc15132d25.png') }});">
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col-sm-6 col-md-4"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2 md:mb-3 relative overflow-hidden group shadow-none border"
                                    size="2" data-test="researchLandingBestRankedSelectorRankingCategoryCard"
                                    href="/best-cars-trucks/trucks/">
                                    <div
                                        class="absolute right-[79px] top-[40px] h-[63px] w-[158px] translate-x-1/2 rounded-[50%] bg-gradient-to-r from-[#06AEAA] to-[#0088D6] duration-1000 ease-in-out group-hover:right-1/2 group-hover:-top-4 group-hover:h-[125px] group-hover:w-[667px] group-hover:translate-x-1/2 sm:top-auto sm:right-auto sm:bottom-[-82px] sm:left-1/2 sm:h-[120px] sm:w-[320px] sm:-translate-x-1/2 group-hover:sm:right-auto group-hover:sm:top-auto group-hover:sm:h-[225px] group-hover:sm:w-[600px] group-hover:sm:-translate-x-1/2">
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content card-content-center z-10 flex-row items-center py-2 sm:flex-col sm:pt-3 sm:pb-2">
                                        <h3
                                            class="heading-4 normal-case heading-md-3 md:normal-case sm:pb-1 ml-3 sm:ml-0 group-hover:text-white duration-1000 mr-auto sm:mr-0">
                                            Best Trucks</h3>
                                        <div class="img-container hidden sm:block"
                                            style="height: 61px; padding-bottom: 0px; width: 123px;"><img
                                                src="{{ asset('assets/_next/static/images/trucks-9c6f843f671cf1e1f3ce32395874da37.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/trucks-9c6f843f671cf1e1f3ce32395874da37.png') }});">
                                        </div>
                                        <div class="img-container mr-1 mt-0 translate-y-[3px] sm:hidden"
                                            style="height: 43px; padding-bottom: 0px; width: 101px;"><img
                                                src="{{ asset('assets/_next/static/images/trucks-9c6f843f671cf1e1f3ce32395874da37.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/trucks-9c6f843f671cf1e1f3ce32395874da37.png') }});">
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col-sm-6 col-md-4"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2 md:mb-3 relative overflow-hidden group shadow-none border"
                                    size="2" data-test="researchLandingBestRankedSelectorRankingCategoryCard"
                                    href="/best-cars-trucks/suvs/">
                                    <div
                                        class="absolute right-[79px] top-[40px] h-[63px] w-[158px] translate-x-1/2 rounded-[50%] bg-gradient-to-r from-[#06AEAA] to-[#0088D6] duration-1000 ease-in-out group-hover:right-1/2 group-hover:-top-4 group-hover:h-[125px] group-hover:w-[667px] group-hover:translate-x-1/2 sm:top-auto sm:right-auto sm:bottom-[-82px] sm:left-1/2 sm:h-[120px] sm:w-[320px] sm:-translate-x-1/2 group-hover:sm:right-auto group-hover:sm:top-auto group-hover:sm:h-[225px] group-hover:sm:w-[600px] group-hover:sm:-translate-x-1/2">
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content card-content-center z-10 flex-row items-center py-2 sm:flex-col sm:pt-3 sm:pb-2">
                                        <h3
                                            class="heading-4 normal-case heading-md-3 md:normal-case sm:pb-1 ml-3 sm:ml-0 group-hover:text-white duration-1000 mr-auto sm:mr-0">
                                            Best SUVs</h3>
                                        <div class="img-container hidden sm:block"
                                            style="height: 61px; padding-bottom: 0px; width: 123px;"><img
                                                src="{{ asset('assets/_next/static/images/suvs-efc002759c9094e2b49110cb7576e290.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/suvs-efc002759c9094e2b49110cb7576e290.png') }});">
                                        </div>
                                        <div class="img-container mr-1 mt-0 translate-y-[3px] sm:hidden"
                                            style="height: 43px; padding-bottom: 0px; width: 101px;"><img
                                                src="{{ asset('assets/_next/static/images/suvs-efc002759c9094e2b49110cb7576e290.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/suvs-efc002759c9094e2b49110cb7576e290.png') }});">
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col-sm-6 col-md-4"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2 md:mb-3 relative overflow-hidden group shadow-none border"
                                    size="2" data-test="researchLandingBestRankedSelectorRankingCategoryCard"
                                    href="/best-cars-trucks/sedans/">
                                    <div
                                        class="absolute right-[79px] top-[40px] h-[63px] w-[158px] translate-x-1/2 rounded-[50%] bg-gradient-to-r from-[#06AEAA] to-[#0088D6] duration-1000 ease-in-out group-hover:right-1/2 group-hover:-top-4 group-hover:h-[125px] group-hover:w-[667px] group-hover:translate-x-1/2 sm:top-auto sm:right-auto sm:bottom-[-82px] sm:left-1/2 sm:h-[120px] sm:w-[320px] sm:-translate-x-1/2 group-hover:sm:right-auto group-hover:sm:top-auto group-hover:sm:h-[225px] group-hover:sm:w-[600px] group-hover:sm:-translate-x-1/2">
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content card-content-center z-10 flex-row items-center py-2 sm:flex-col sm:pt-3 sm:pb-2">
                                        <h3
                                            class="heading-4 normal-case heading-md-3 md:normal-case sm:pb-1 ml-3 sm:ml-0 group-hover:text-white duration-1000 mr-auto sm:mr-0">
                                            Best Sedans</h3>
                                        <div class="img-container hidden sm:block"
                                            style="height: 61px; padding-bottom: 0px; width: 123px;"><img
                                                src="{{ asset('assets/_next/static/images/sedans-29f768e83a0cde5fcceba51338c322cf.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/sedans-29f768e83a0cde5fcceba51338c322cf.png') }});">
                                        </div>
                                        <div class="img-container mr-1 mt-0 translate-y-[3px] sm:hidden"
                                            style="height: 43px; padding-bottom: 0px; width: 101px;"><img
                                                src="{{ asset('assets/_next/static/images/sedans-29f768e83a0cde5fcceba51338c322cf.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/sedans-29f768e83a0cde5fcceba51338c322cf.png') }});">
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col-sm-6 col-md-4"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2 md:mb-3 relative overflow-hidden group shadow-none border"
                                    size="2" data-test="researchLandingBestRankedSelectorRankingCategoryCard"
                                    href="/best-cars-trucks/hatchbacks/">
                                    <div
                                        class="absolute right-[79px] top-[40px] h-[63px] w-[158px] translate-x-1/2 rounded-[50%] bg-gradient-to-r from-[#06AEAA] to-[#0088D6] duration-1000 ease-in-out group-hover:right-1/2 group-hover:-top-4 group-hover:h-[125px] group-hover:w-[667px] group-hover:translate-x-1/2 sm:top-auto sm:right-auto sm:bottom-[-82px] sm:left-1/2 sm:h-[120px] sm:w-[320px] sm:-translate-x-1/2 group-hover:sm:right-auto group-hover:sm:top-auto group-hover:sm:h-[225px] group-hover:sm:w-[600px] group-hover:sm:-translate-x-1/2">
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content card-content-center z-10 flex-row items-center py-2 sm:flex-col sm:pt-3 sm:pb-2">
                                        <h3
                                            class="heading-4 normal-case heading-md-3 md:normal-case sm:pb-1 ml-3 sm:ml-0 group-hover:text-white duration-1000 mr-auto sm:mr-0">
                                            Best Hatchbacks</h3>
                                        <div class="img-container hidden sm:block"
                                            style="height: 61px; padding-bottom: 0px; width: 123px;"><img
                                                src="{{ asset('assets/_next/static/images/hatchbacks-abb3b880c11270e699ca24aa1c1fbffe.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/hatchbacks-abb3b880c11270e699ca24aa1c1fbffe.png') }});">
                                        </div>
                                        <div class="img-container mr-1 mt-0 translate-y-[3px] sm:hidden"
                                            style="height: 43px; padding-bottom: 0px; width: 101px;"><img
                                                src="{{ asset('assets/_next/static/images/hatchbacks-abb3b880c11270e699ca24aa1c1fbffe.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/hatchbacks-abb3b880c11270e699ca24aa1c1fbffe.png') }});">
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col-sm-6 col-md-4"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2 md:mb-3 relative overflow-hidden group shadow-none border"
                                    size="2" data-test="researchLandingBestRankedSelectorRankingCategoryCard"
                                    href="/best-cars-trucks/coupes/">
                                    <div
                                        class="absolute right-[79px] top-[40px] h-[63px] w-[158px] translate-x-1/2 rounded-[50%] bg-gradient-to-r from-[#06AEAA] to-[#0088D6] duration-1000 ease-in-out group-hover:right-1/2 group-hover:-top-4 group-hover:h-[125px] group-hover:w-[667px] group-hover:translate-x-1/2 sm:top-auto sm:right-auto sm:bottom-[-82px] sm:left-1/2 sm:h-[120px] sm:w-[320px] sm:-translate-x-1/2 group-hover:sm:right-auto group-hover:sm:top-auto group-hover:sm:h-[225px] group-hover:sm:w-[600px] group-hover:sm:-translate-x-1/2">
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content card-content-center z-10 flex-row items-center py-2 sm:flex-col sm:pt-3 sm:pb-2">
                                        <h3
                                            class="heading-4 normal-case heading-md-3 md:normal-case sm:pb-1 ml-3 sm:ml-0 group-hover:text-white duration-1000 mr-auto sm:mr-0">
                                            Best Coupes</h3>
                                        <div class="img-container hidden sm:block"
                                            style="height: 61px; padding-bottom: 0px; width: 123px;"><img
                                                src="{{ asset('assets/_next/static/images/coupes-5fd935d31f7d9e4d05b087d0793acf29.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/coupes-5fd935d31f7d9e4d05b087d0793acf29.png') }});">
                                        </div>
                                        <div class="img-container mr-1 mt-0 translate-y-[3px] sm:hidden"
                                            style="height: 43px; padding-bottom: 0px; width: 101px;"><img
                                                src="{{ asset('assets/_next/static/images/coupes-5fd935d31f7d9e4d05b087d0793acf29.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/coupes-5fd935d31f7d9e4d05b087d0793acf29.png') }});">
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col-sm-6 col-md-4"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2 md:mb-3 relative overflow-hidden group shadow-none border"
                                    size="2" data-test="researchLandingBestRankedSelectorRankingCategoryCard"
                                    href="/best-cars-trucks/convertibles/">
                                    <div
                                        class="absolute right-[79px] top-[40px] h-[63px] w-[158px] translate-x-1/2 rounded-[50%] bg-gradient-to-r from-[#06AEAA] to-[#0088D6] duration-1000 ease-in-out group-hover:right-1/2 group-hover:-top-4 group-hover:h-[125px] group-hover:w-[667px] group-hover:translate-x-1/2 sm:top-auto sm:right-auto sm:bottom-[-82px] sm:left-1/2 sm:h-[120px] sm:w-[320px] sm:-translate-x-1/2 group-hover:sm:right-auto group-hover:sm:top-auto group-hover:sm:h-[225px] group-hover:sm:w-[600px] group-hover:sm:-translate-x-1/2">
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content card-content-center z-10 flex-row items-center py-2 sm:flex-col sm:pt-3 sm:pb-2">
                                        <h3
                                            class="heading-4 normal-case heading-md-3 md:normal-case sm:pb-1 ml-3 sm:ml-0 group-hover:text-white duration-1000 mr-auto sm:mr-0">
                                            Best Convertibles</h3>
                                        <div class="img-container hidden sm:block"
                                            style="height: 61px; padding-bottom: 0px; width: 123px;"><img
                                                src="{{ asset('assets/_next/static/images/convertibles-24a1fb24de8772ea405ac87b1cf65551.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/convertibles-24a1fb24de8772ea405ac87b1cf65551.png') }});">
                                        </div>
                                        <div class="img-container mr-1 mt-0 translate-y-[3px] sm:hidden"
                                            style="height: 43px; padding-bottom: 0px; width: 101px;"><img
                                                src="{{ asset('assets/_next/static/images/convertibles-24a1fb24de8772ea405ac87b1cf65551.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/convertibles-24a1fb24de8772ea405ac87b1cf65551.png') }});">
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col-sm-6 col-md-4"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2 md:mb-3 relative overflow-hidden group shadow-none border"
                                    size="2" data-test="researchLandingBestRankedSelectorRankingCategoryCard"
                                    href="/best-cars-trucks/vans/">
                                    <div
                                        class="absolute right-[79px] top-[40px] h-[63px] w-[158px] translate-x-1/2 rounded-[50%] bg-gradient-to-r from-[#06AEAA] to-[#0088D6] duration-1000 ease-in-out group-hover:right-1/2 group-hover:-top-4 group-hover:h-[125px] group-hover:w-[667px] group-hover:translate-x-1/2 sm:top-auto sm:right-auto sm:bottom-[-82px] sm:left-1/2 sm:h-[120px] sm:w-[320px] sm:-translate-x-1/2 group-hover:sm:right-auto group-hover:sm:top-auto group-hover:sm:h-[225px] group-hover:sm:w-[600px] group-hover:sm:-translate-x-1/2">
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content card-content-center z-10 flex-row items-center py-2 sm:flex-col sm:pt-3 sm:pb-2">
                                        <h3
                                            class="heading-4 normal-case heading-md-3 md:normal-case sm:pb-1 ml-3 sm:ml-0 group-hover:text-white duration-1000 mr-auto sm:mr-0">
                                            Best Vans</h3>
                                        <div class="img-container hidden sm:block"
                                            style="height: 61px; padding-bottom: 0px; width: 123px;"><img
                                                src="{{ asset('assets/_next/static/images/vans-0b42b678c324e84c8568a867fe23d507.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/vans-0b42b678c324e84c8568a867fe23d507.png') }});">
                                        </div>
                                        <div class="img-container mr-1 mt-0 translate-y-[3px] sm:hidden"
                                            style="height: 43px; padding-bottom: 0px; width: 101px;"><img
                                                src="{{ asset('assets/_next/static/images/vans-0b42b678c324e84c8568a867fe23d507.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/vans-0b42b678c324e84c8568a867fe23d507.png') }});">
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col-sm-6 col-md-4"><a
                                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] mb-2 md:mb-3 relative overflow-hidden group shadow-none border"
                                    size="2" data-test="researchLandingBestRankedSelectorRankingCategoryCard"
                                    href="/best-cars-trucks/fuel-hybrid/">
                                    <div
                                        class="absolute right-[79px] top-[40px] h-[63px] w-[158px] translate-x-1/2 rounded-[50%] bg-gradient-to-r from-[#06AEAA] to-[#0088D6] duration-1000 ease-in-out group-hover:right-1/2 group-hover:-top-4 group-hover:h-[125px] group-hover:w-[667px] group-hover:translate-x-1/2 sm:top-auto sm:right-auto sm:bottom-[-82px] sm:left-1/2 sm:h-[120px] sm:w-[320px] sm:-translate-x-1/2 group-hover:sm:right-auto group-hover:sm:top-auto group-hover:sm:h-[225px] group-hover:sm:w-[600px] group-hover:sm:-translate-x-1/2">
                                    </div>
                                    <div data-test="cardContent"
                                        class="card-content card-content-center z-10 flex-row items-center py-2 sm:flex-col sm:pt-3 sm:pb-2">
                                        <h3
                                            class="heading-4 normal-case heading-md-3 md:normal-case sm:pb-1 ml-3 sm:ml-0 group-hover:text-white duration-1000 mr-auto sm:mr-0">
                                            Best Hybrids</h3>
                                        <div class="img-container hidden sm:block"
                                            style="height: 61px; padding-bottom: 0px; width: 123px;"><img
                                                src="{{ asset('assets/_next/static/images/hybrids-ecd066b6103e4bf815202aa289544709.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/hybrids-ecd066b6103e4bf815202aa289544709.png') }});">
                                        </div>
                                        <div class="img-container mr-1 mt-0 translate-y-[3px] sm:hidden"
                                            style="height: 43px; padding-bottom: 0px; width: 101px;"><img
                                                src="{{ asset('assets/_next/static/images/hybrids-ecd066b6103e4bf815202aa289544709.png') }}"
                                                alt="" role="presentation" loading="lazy"
                                                class="img-inner img-contain"
                                                style="background-image: url({{ asset('assets/_next/static/images/hybrids-ecd066b6103e4bf815202aa289544709.png') }});">
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6 lg:pb-7" data-test="researchLandingByBrandSection">
                <div class="container max-w-[864px]">
                    <div class="space-y-3 pb-2-5 text-center md:pb-3">
                        <h2 class="heading-3 normal-case">Browse by Brand</h2>
                        <div class="switch-bar"><a class="linkable switch w-[125px]" href="javascript:void(0)"
                                role="button" aria-pressed="true" data-test="newCarsMakes" data-selected="true">New
                                Cars</a>
                            <a class="linkable switch w-[125px]" href="javascript:void(0)" role="button"
                                aria-pressed="false" data-test="usedCarsMakes">Used Cars</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <ul class="hidden-md-up">
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Acura Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=acura">
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
                                            title="New Alfa Romeo Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=alfa-romeo">
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
                                            title="New Audi Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=audi">
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
                                            title="New BMW Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=bmw">
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
                                    <li class="leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Buick Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=buick">
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
                                </ul>
                                <div class="hidden-md-up">
                                    <div class="collapse">
                                        <ul>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Cadillac Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=cadillac">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Chevrolet Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=chevrolet">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Chrysler Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=chrysler">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Dodge Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=dodge">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New FIAT Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=fiat">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Ford Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=ford">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Genesis Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=genesis">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New GMC Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=gmc">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Honda Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=honda">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Hyundai Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=hyundai">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New INFINITI Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=infiniti">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Jaguar Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=jaguar">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Jeep Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=jeep">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Kia Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=kia">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Land Rover Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=land-rover">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Lexus Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=lexus">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Lincoln Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=lincoln">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Maserati Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=maserati">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Mazda Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=mazda">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Mercedes-Benz Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=mercedes-benz">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New MINI Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=mini">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Mitsubishi Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=mitsubishi">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Nissan Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=nissan">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Ram Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=ram">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Subaru Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=subaru">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Toyota Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=toyota">
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
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Volkswagen Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=volkswagen">
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
                                            <li class="leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                    title="New Volvo Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/model-search/?make[]=volvo">
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
                                    data-test="makesList" data-test-item="new">
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Acura Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=acura">
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
                                            title="New Alfa Romeo Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=alfa-romeo">
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
                                            title="New Audi Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=audi">
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
                                            title="New BMW Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=bmw">
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
                                            title="New Buick Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=buick">
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
                                            title="New Cadillac Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=cadillac">
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
                                            title="New Chevrolet Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=chevrolet">
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
                                            title="New Chrysler Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=chrysler">
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
                                            title="New Dodge Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=dodge">
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
                                            title="New FIAT Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=fiat">
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
                                            title="New Ford Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=ford">
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
                                            title="New Genesis Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=genesis">
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
                                            title="New GMC Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=gmc">
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
                                            title="New Honda Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=honda">
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
                                            title="New Hyundai Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=hyundai">
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
                                            title="New INFINITI Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=infiniti">
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
                                            title="New Jaguar Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=jaguar">
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
                                            title="New Jeep Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=jeep">
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
                                            title="New Kia Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=kia">
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
                                            title="New Land Rover Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=land-rover">
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
                                            title="New Lexus Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=lexus">
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
                                            title="New Lincoln Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=lincoln">
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
                                            title="New Maserati Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=maserati">
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
                                            title="New Mazda Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=mazda">
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
                                            title="New Mercedes-Benz Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=mercedes-benz">
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
                                            title="New MINI Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=mini">
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
                                            title="New Mitsubishi Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=mitsubishi">
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
                                            title="New Nissan Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=nissan">
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
                                            title="New Ram Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=ram">
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
                                            title="New Subaru Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=subaru">
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
                                            title="New Toyota Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=toyota">
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
                                            title="New Volkswagen Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=volkswagen">
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
                                            title="New Volvo Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/model-search/?make[]=volvo">
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
            </div>

            <div class="our-testimonial">
                <div class="container">
                    <div class="row section-row">
                        <div class="col-lg-12">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    testimonials</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                    <div class="split-line"
                                        style="display: block; text-align: center; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                W</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                h</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                m</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                        </div>
                                    </div>
                                    <div class="split-line"
                                        style="display: block; text-align: center; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                y</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                g</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                b</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                        </div>
                                    </div>
                                </h2>
                            </div>
                            <!-- Section Title End -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Testimonial Slider Start -->
                            <div class="testimonial-slider">
                                <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                    <div class="swiper-wrapper" data-cursor-text="Drag"
                                        id="swiper-wrapper-3374bab31c173053" aria-live="off"
                                        style="transition-duration: 1000ms; transform: translate3d(-433.333px, 0px, 0px);">
                                        <!-- Testimonial Slide Start -->

                                        <!-- Testimonial Slide End -->

                                        <!-- Testimonial Slide Start -->

                                        <!-- Testimonial Slide End -->

                                        <!-- Testimonial Slide Start -->

                                        <!-- Testimonial Slide End -->

                                        <!-- Testimonial Slide Start -->
                                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 4"
                                            data-swiper-slide-index="3" style="width: 403.333px; margin-right: 30px;">
                                            <div class="testimonial-item">
                                                <div class="testimonial-header">
                                                    <div class="testimonial-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <p>Renting a car from nova ride was a great decision. Not only did I
                                                            get a reliable and comfortable vehicle, but the prices were also
                                                            very competitive.</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset('novaride/images/author-4.jpg') }}"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>alis white</h3>
                                                        <p>project manager</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Testimonial Slide End -->
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 403.333px; margin-right: 30px;" role="group"
                                            aria-label="1 / 4" data-swiper-slide-index="0">
                                            <div class="testimonial-item">
                                                <div class="testimonial-header">
                                                    <div class="testimonial-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <p>Renting a car from nova ride was a great decision. Not only did I
                                                            get a reliable and comfortable vehicle, but the prices were also
                                                            very competitive.</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset('novaride/images/author-1.jpg') }}"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>floyd miles</h3>
                                                        <p>project manager</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next"
                                            style="width: 403.333px; margin-right: 30px;" role="group"
                                            aria-label="2 / 4" data-swiper-slide-index="1">
                                            <div class="testimonial-item">
                                                <div class="testimonial-header">
                                                    <div class="testimonial-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <p>Renting a car from nova ride was a great decision. Not only did I
                                                            get a reliable and comfortable vehicle, but the prices were also
                                                            very competitive.</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset('novaride/images/author-2.jpg') }}"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>annette black</h3>
                                                        <p>project manager</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 403.333px; margin-right: 30px;"
                                            role="group" aria-label="3 / 4" data-swiper-slide-index="2">
                                            <div class="testimonial-item">
                                                <div class="testimonial-header">
                                                    <div class="testimonial-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <p>Renting a car from nova ride was a great decision. Not only did I
                                                            get a reliable and comfortable vehicle, but the prices were also
                                                            very competitive.</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset('novaride/images/author-3.jpg') }}"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>leslie alexander</h3>
                                                        <p>project manager</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-btn">
                                        <div class="testimonial-button-prev" tabindex="0" role="button"
                                            aria-label="Previous slide" aria-controls="swiper-wrapper-3374bab31c173053">
                                        </div>
                                        <div class="testimonial-button-next" tabindex="0" role="button"
                                            aria-label="Next slide" aria-controls="swiper-wrapper-3374bab31c173053">
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                            <!-- Testimonial Slider End -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Faqs Start -->
            <div class="page-faqs">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Faqs Sidebar Start -->
                            <div class="faq-sidebar">
                                <!-- Faqs Catagery List Start -->
                                <div class="faq-catagery-list wow fadeInUp" data-wow-delay="0.25s">
                                    <ul>
                                        <li><a href="#general_information">general information</a></li>
                                        <li><a href="#booking_and_reservations">booking and reservations</a></li>
                                        <li><a href="#pricing_and_payment">pricing and payment</a></li>
                                        <li><a href="#vehicle_information">vehicle information</a></li>
                                    </ul>
                                </div>
                                <!-- Faqs Catagery List End -->
                            </div>
                            <!-- Faqs Sidebar End -->
                        </div>

                        <div class="col-lg-8">
                            <!-- FAQs section start -->
                            <div class="rental-condition-accordion" id="general_information">
                                <div class="section-title faqs-section-title">
                                    <h3 class="wow fadeInUp">FAQs</h3>
                                    <h2 class="text-anime-style-3" data-cursor="-opaque">General information</h2>
                                </div>
                                <!-- FAQ Accordion Start -->
                                <div class="faq-accordion" id="accordion">
                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp">
                                        <h2 class="accordion-header" id="heading1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse1" aria-expanded="true"
                                                aria-controls="collapse1">
                                                What types of vehicles are available for rent?
                                            </button>
                                        </h2>
                                        <div id="collapse1" class="accordion-collapse collapse show"
                                            aria-labelledby="heading1" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>Yes, we accept international driver's licenses. An additional
                                                    government-issued ID, such as a passport, is also required.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                        <h2 class="accordion-header" id="heading2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                aria-expanded="false" aria-controls="collapse2">
                                                Where are your rental locations?
                                            </button>
                                        </h2>
                                        <div id="collapse2" class="accordion-collapse collapse"
                                            aria-labelledby="heading2" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>Yes, we accept international driver's licenses. An additional
                                                    government-issued ID, such as a passport, is also required.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                        <h2 class="accordion-header" id="heading3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                aria-expanded="false" aria-controls="collapse3">
                                                What are your hours of operation?
                                            </button>
                                        </h2>
                                        <div id="collapse3" class="accordion-collapse collapse"
                                            aria-labelledby="heading3" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>Yes, we accept international driver's licenses. An additional
                                                    government-issued ID, such as a passport, is also required.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->
                                </div>
                                <!-- FAQ Accordion End -->
                            </div>
                            <!-- FAQs section End -->

                            <!-- FAQs section start -->
                            <div class="rental-condition-accordion" id="booking_and_reservations">
                                <div class="section-title faqs-section-title">
                                    <h3 class="wow fadeInUp">FAQs</h3>
                                    <h2 class="text-anime-style-3" data-cursor="-opaque">Booking and reservations</h2>
                                </div>
                                <!-- FAQ Accordion Start -->
                                <div class="faq-accordion" id="accordion1">
                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                        <h2 class="accordion-header" id="heading4">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse4" aria-expanded="false"
                                                aria-controls="collapse4">
                                                How do I make a reservation?
                                            </button>
                                        </h2>
                                        <div id="collapse4" class="accordion-collapse collapse show"
                                            aria-labelledby="heading4" data-bs-parent="#accordion1">
                                            <div class="accordion-body">
                                                <p>Yes, you can rent a car for someone else, but the primary driver must be
                                                    present at the time of rental to provide their driver's license and sign
                                                    the rental agreement.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                                        <h2 class="accordion-header" id="heading5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse5"
                                                aria-expanded="false" aria-controls="collapse5">
                                                Can I modify or cancel my reservation?
                                            </button>
                                        </h2>
                                        <div id="collapse5" class="accordion-collapse collapse"
                                            aria-labelledby="heading5" data-bs-parent="#accordion1">
                                            <div class="accordion-body">
                                                <p>Yes, you can rent a car for someone else, but the primary driver must be
                                                    present at the time of rental to provide their driver's license and sign
                                                    the rental agreement.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                        <h2 class="accordion-header" id="heading6">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                aria-expanded="false" aria-controls="collapse6">
                                                What is your cancellation policy?
                                            </button>
                                        </h2>
                                        <div id="collapse6" class="accordion-collapse collapse"
                                            aria-labelledby="heading6" data-bs-parent="#accordion1">
                                            <div class="accordion-body">
                                                <p>Yes, you can rent a car for someone else, but the primary driver must be
                                                    present at the time of rental to provide their driver's license and sign
                                                    the rental agreement.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->
                                </div>
                                <!-- FAQ Accordion End -->
                            </div>
                            <!-- FAQs section End -->

                            <!-- FAQs section start -->
                            <div class="rental-condition-accordion" id="pricing_and_payment">
                                <div class="section-title faqs-section-title">
                                    <h3 class="wow fadeInUp">FAQs</h3>
                                    <h2 class="text-anime-style-3" data-cursor="-opaque">Pricing and payment</h2>
                                </div>
                                <!-- FAQ Accordion Start -->
                                <div class="faq-accordion" id="accordion2">
                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp">
                                        <h2 class="accordion-header" id="heading7">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse7" aria-expanded="true"
                                                aria-controls="collapse7">
                                                What forms of payment do you accept?
                                            </button>
                                        </h2>
                                        <div id="collapse7" class="accordion-collapse collapse show"
                                            aria-labelledby="heading7" data-bs-parent="#accordion2">
                                            <div class="accordion-body">
                                                <p>Reservations can be made online through our website, by calling our
                                                    customer service hotline, or by visiting one of our rental locations in
                                                    person.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                        <h2 class="accordion-header" id="heading8">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse8"
                                                aria-expanded="false" aria-controls="collapse8">
                                                Are there any hidden fees?
                                            </button>
                                        </h2>
                                        <div id="collapse8" class="accordion-collapse collapse"
                                            aria-labelledby="heading8" data-bs-parent="#accordion2">
                                            <div class="accordion-body">
                                                <p>Reservations can be made online through our website, by calling our
                                                    customer service hotline, or by visiting one of our rental locations in
                                                    person.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                        <h2 class="accordion-header" id="heading9">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse9"
                                                aria-expanded="false" aria-controls="collapse9">
                                                Do you require a deposit?
                                            </button>
                                        </h2>
                                        <div id="collapse9" class="accordion-collapse collapse"
                                            aria-labelledby="heading9" data-bs-parent="#accordion2">
                                            <div class="accordion-body">
                                                <p>Reservations can be made online through our website, by calling our
                                                    customer service hotline, or by visiting one of our rental locations in
                                                    person.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->
                                </div>
                                <!-- FAQ Accordion End -->
                            </div>
                            <!-- FAQs section End -->

                            <!-- FAQs section start -->
                            <div class="rental-condition-accordion" id="vehicle_information">
                                <div class="section-title faqs-section-title">
                                    <h3 class="wow fadeInUp">FAQs</h3>
                                    <h2 class="text-anime-style-3" data-cursor="-opaque">Vehicle information</h2>
                                </div>
                                <!-- FAQ Accordion Start -->
                                <div class="faq-accordion" id="accordion3">
                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp">
                                        <h2 class="accordion-header" id="heading10">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse10" aria-expanded="true"
                                                aria-controls="collapse10">
                                                Are your vehicles insured?
                                            </button>
                                        </h2>
                                        <div id="collapse10" class="accordion-collapse collapse show"
                                            aria-labelledby="heading10" data-bs-parent="#accordion3">
                                            <div class="accordion-body">
                                                <p>We offer a diverse fleet of vehicles, including economy cars, compact
                                                    cars, SUVs, luxury cars, and more to suit various needs and preferences.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                        <h2 class="accordion-header" id="heading11">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse11"
                                                aria-expanded="false" aria-controls="collapse11">
                                                Do you offer vehicles with automatic transmission?
                                            </button>
                                        </h2>
                                        <div id="collapse11" class="accordion-collapse collapse"
                                            aria-labelledby="heading11" data-bs-parent="#accordion3">
                                            <div class="accordion-body">
                                                <p>We offer a diverse fleet of vehicles, including economy cars, compact
                                                    cars, SUVs, luxury cars, and more to suit various needs and preferences.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                        <h2 class="accordion-header" id="heading12">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse12"
                                                aria-expanded="false" aria-controls="collapse12">
                                                Can I choose a specific vehicle model?
                                            </button>
                                        </h2>
                                        <div id="collapse12" class="accordion-collapse collapse"
                                            aria-labelledby="heading12" data-bs-parent="#accordion3">
                                            <div class="accordion-body">
                                                <p>We offer a diverse fleet of vehicles, including economy cars, compact
                                                    cars, SUVs, luxury cars, and more to suit various needs and preferences.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->
                                </div>
                                <!-- FAQ Accordion End -->
                            </div>
                            <!-- FAQs section End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Faq End -->

        </div>
    </main>
@endsection
