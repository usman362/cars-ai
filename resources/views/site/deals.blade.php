@extends('site.layouts.app')
@section('content')
    <main id="mainContent"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]"
        style="margin-top:60px">
        <div>
            <div class="relative overflow-hidden bg-[#343434] pb-[57px] lg:pb-[73px]">
                <div class="absolute top-[-60px] z-1 h-[60px] w-[100%] shadow-[2px_2px_5px_rgba(1,_1,_1,_0.15)]"></div>
                <div
                    class="container container-max-width-2 w-full flex justify-center flex-col items-center relative md:items-start max-md:max-w-[375px]">
                    <div
                        class="absolute left-[51%] top-[-16%] h-[221px] w-[221px] rounded-[50%] bg-[#ffffff] md:left-[73%] md:top-[-10%] md:h-[331px] md:w-[371px] lg:top-[-22%] lg:left-[70%] lg:h-[599px] lg:w-[599px]">
                    </div>
                    <div
                        class="relative left-[8%] top-[-10%] z-[4] w-[260px] md:left-[60%] md:top-[27%] md:w-[383px] lg:absolute lg:left-[63%] lg:top-[20%] lg:w-[675px] pt-2">
                        <div class="picture-container picture-container-block" style="padding-bottom: 50%;"><img
                                class="picture-block" sizes="675px"
                                src="https://static.tcimg.net/vehicles/primary/2638db88c57c8270/2022-Jeep-Grand_Cherokee-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720"
                                srcset="https://static.tcimg.net/vehicles/primary/2638db88c57c8270/2022-Jeep-Grand_Cherokee-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w, https://static.tcimg.net/vehicles/primary/2638db88c57c8270/2022-Jeep-Grand_Cherokee-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=700&amp;w=1400 1400w"
                                alt="" role="presentation"></div>
                    </div>
                    <div class="">
                        <h1 class="heading-3 normal-case heading-md-2 md:normal-case heading-lg-1 lg:normal-case pt-2 text-center text-white md:pt-5 md:text-left lg:pt-7"
                            data-test="dealsLandingHeading">Find the Best Car Deals <div class="md:inline">Near You</div>
                        </h1>
                        <p class="pt-2 text-center text-white md:pt-3 md:text-left lg:pt-4">Looking for a specific car?</p>
                        <div class="w-full pt-2-5 md:pr-7 lg:pt-3 lg:pr-2-5">
                            <div>
                                <div class="flex flex-col items-center md:flex-row md:items-stretch">
                                    <div
                                        class="field-container-challenger w-[236px] max-lg:w-[185px] max-md:w-[247px] max-md:pb-[12px] md:mr-3">
                                        <div
                                            class="field-wrapper-challenger field-theme-dark-challenger field-label-padding-challenger">
                                            <div class="field-content-row field-with-suffix">
                                                <div class="field-input-label-challenger input-label-select"><select
                                                        required="" aria-label="Select Make"
                                                        class="form-select-element-challenger"
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
                                    <div
                                        class="field-container-challenger pt-1 md:pt-0 w-[236px] max-lg:w-[185px] max-md:w-[247px] max-md:pb-[12px]">
                                        <div
                                            class="field-wrapper-challenger field-theme-dark-challenger field-label-padding-challenger">
                                            <div class="field-content-row field-with-suffix">
                                                <div class="field-input-label-challenger input-label-select"><select
                                                        required="" aria-label="Select Model"
                                                        class="form-select-element-challenger"
                                                        data-test="dealsLandingSelectModel">
                                                        <option disabled="" value="">Select Model</option>
                                                        <option value="All Models">All Models</option>
                                                        <option value="giulia">Giulia</option>
                                                        <option value="stelvio">Stelvio</option>
                                                        <option value="tonale">Tonale</option>
                                                    </select>
                                                    <div class="field-label-text-challenger" data-test="fieldLabel"><label
                                                            data-ignore-contrast="true">Select Model</label></div>
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
                                </div>
                                <div
                                    class="pt-2 md:pt-2-5 lg:pt-3 pb-5 md:pb-4 lg:pb-6 mx-auto md:mx-0 w-[247px] md:w-[185px] lg:w-[236px]">
                                    <a data-ignore-contrast="true" data-loading="false" data-test="findDealsCTA"
                                        class="btn-dark btn btn-primary btn-md btn-block"
                                        href="/alfa-romeo/deals/?modelSlug=stelvio"><span class="btn-inner">Find
                                            Deals</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-[-56px] lg:mt-[-67px]">
                <div
                    class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] relative z-[3] rounded-[0px] bg-[#f8f8f8]">
                    <div class="container container-max-width-2 flex items-baseline py-2-5 lg:py-3"><svg
                            viewBox="0 0 24 24" class="icon icon-fill-default" aria-hidden="true"
                            style="width: 16px; height: 16px;">
                            <use href="#location_on"></use>
                        </svg><span class="pr-3 pl-2 font-bold" data-test="selectedZipCode">Santa Monica, CA 90401</span>
                        <div><button type="button" class="link-button pb-1" data-test="changeLocationLink">Change
                                Location</button></div>
                    </div>
                </div>
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
                                        src="assets/_next/static/images/iconConvertables-be884bb8d136f35bb6558b94fd825344.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Convertibles</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="coupes" href="/deals/coupes/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="assets/_next/static/images/iconCoupes-b13ad2ede15fb4beb0d01df2269cf9f8.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Coupes</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="suvs" href="/deals/suvs/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="assets/_next/static/images/iconSuv-f1ac2be397703ffcacdbfd74eea4299a.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">SUVs</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="sedans" href="/deals/sedans/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="assets/_next/static/images/iconSedans-299d7e8cb0d0d72d58efcb8af804a9e5.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Sedans</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="trucks" href="/deals/trucks/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="assets/_next/static/images/iconTrucks-580a7f2703d3c26ce63c295dc03d166d.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Trucks</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="hatchbacks" href="/deals/hatchbacks/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="assets/_next/static/images/iconHatchbacks-5fef3ca145dd8b50777b2033a6f4d6b0.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Hatchbacks</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="vans" href="/deals/vans/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="assets/_next/static/images/iconVans-870c7511e02faf9d23d77dfe8e77ff45.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Vans</span>
                            </div>
                        </a><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)] mb-3 md:mb-4 py-3 mr-[4px] w-[calc(33.33%_-_4px)] md:mr-[20px] md:w-[calc(20%_-_20px)]"
                            data-test="vehicleTypeDealsModuleCard" data-test-item="wagons" href="/deals/wagons/">
                            <div class="flex justify-center flex-col items-center w-full max-sm:min-h-[100px]">
                                <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 50px;">
                                    <img class="picture-inner picture-svg px-2 lg:px-0"
                                        src="assets/_next/static/images/iconWagons-570cc460532e6540d6108d60cf281230.svg"
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
                                        src="assets/_next/static/images/iconLuxuryCar-87a471f1074ed4055fb4a68b07764ee6.svg"
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
                                        src="assets/_next/static/images/iconLuxurySUV-d6de04f820cf51ed437f864b7fcbf7c8.svg"
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
                                        src="assets/_next/static/images/iconHybrids-750de8cd6fcd9984877da94f2d91c978.svg"
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
                                        src="assets/_next/static/images/iconElectrics-37b61a4ced0f9b529aa71879b3b1aeaa.svg"
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
                                        src="assets/_next/static/images/iconDiesel-d5cc1b3d19e25226bf7d3ec17ab5ba05.svg"
                                        alt="" role="presentation"></div><span
                                    class="pt-1 lg:pt-2 font-bold px-1 text-center overflow-hidden text-ellipsis">Diesels</span>
                            </div>
                        </a></div>
                </div>
            </div>
            <section class="py-5 lg:py-7">
                <div class="container container-max-width-2">
                    <div class="space-y-3 pb-2-5 text-center md:pb-3">
                        <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case text-left">Deals by Brand</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <ul class="hidden-md-up">
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Acura Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/acura/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Acura</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Alfa Romeo Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/alfa-romeo/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Alfa Romeo</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Audi Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/audi/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Audi</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New BMW Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/bmw/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>BMW</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Buick Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/buick/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
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
                                                    href="/cadillac/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Cadillac</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Chevrolet Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/chevrolet/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Chevrolet</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Chrysler Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/chrysler/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Chrysler</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Dodge Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/dodge/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Dodge</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New FIAT Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/fiat/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>FIAT</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Ford Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/ford/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Ford</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Genesis Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/genesis/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Genesis</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New GMC Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/gmc/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>GMC</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Honda Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/honda/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Honda</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Hyundai Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/hyundai/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Hyundai</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New INFINITI Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/infiniti/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>INFINITI</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Jaguar Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/jaguar/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Jaguar</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Jeep Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/jeep/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Jeep</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Kia Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/kia/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Kia</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Land Rover Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/land-rover/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Land Rover</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Lexus Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/lexus/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Lexus</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Lincoln Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/lincoln/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Lincoln</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Maserati Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/maserati/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Maserati</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Mazda Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/mazda/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Mazda</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Mercedes-Benz Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/mercedes-benz/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Mercedes-Benz</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New MINI Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/mini/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>MINI</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Mitsubishi Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/mitsubishi/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Mitsubishi</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Nissan Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/nissan/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Nissan</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Ram Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/ram/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Ram</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Subaru Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/subaru/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Subaru</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Toyota Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/toyota/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Toyota</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="border-b leading-[4] md:border-none"><a
                                                    data-test="makePanelListItem" title="New Volkswagen Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/volkswagen/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
                                                        <div class="inline-block self-center align-middle leading-[1]">
                                                            <div>Volkswagen</div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="leading-[4] md:border-none"><a data-test="makePanelListItem"
                                                    title="New Volvo Models"
                                                    class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                                    href="/volvo/deals/">
                                                    <div class="inline-block align-middle">
                                                        <div class="picture-container mr-[16px] inline-block align-middle"
                                                            style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                                class="picture-inner"
                                                                src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                                srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                                loading="lazy" role="presentation" alt=""></div>
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
                                <ul class="hidden-sm-down grid grid-cols-3 text-left lg:grid-cols-4" data-test="makesList"
                                    data-test-item="new">
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Acura Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/acura/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Acura</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Alfa Romeo Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/alfa-romeo/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Alfa Romeo</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Audi Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/audi/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Audi</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New BMW Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/bmw/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>BMW</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Buick Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/buick/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Buick</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Cadillac Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/cadillac/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Cadillac</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Chevrolet Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/chevrolet/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Chevrolet</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Chrysler Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/chrysler/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Chrysler</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Dodge Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/dodge/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Dodge</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New FIAT Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/fiat/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>FIAT</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Ford Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/ford/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Ford</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Genesis Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/genesis/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Genesis</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New GMC Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/gmc/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>GMC</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Honda Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/honda/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Honda</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Hyundai Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/hyundai/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Hyundai</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New INFINITI Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/infiniti/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>INFINITI</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Jaguar Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/jaguar/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Jaguar</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Jeep Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/jeep/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Jeep</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Kia Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/kia/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Kia</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Land Rover Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/land-rover/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Land Rover</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Lexus Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/lexus/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Lexus</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Lincoln Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/lincoln/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Lincoln</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Maserati Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/maserati/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Maserati</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Mazda Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/mazda/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Mazda</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Mercedes-Benz Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/mercedes-benz/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Mercedes-Benz</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New MINI Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/mini/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>MINI</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Mitsubishi Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/mitsubishi/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Mitsubishi</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Nissan Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/nissan/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Nissan</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Ram Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/ram/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Ram</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Subaru Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/subaru/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Subaru</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Toyota Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/toyota/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Toyota</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Volkswagen Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/volkswagen/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
                                                <div class="inline-block self-center align-middle leading-[1]">
                                                    <div>Volkswagen</div>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="border-b leading-[4] md:border-none"><a data-test="makePanelListItem"
                                            title="New Volvo Models"
                                            class="inline-block text-left leading-[3] text-inherit max-lg:w-[100%] max-lg:pl-[16px]"
                                            href="/volvo/deals/">
                                            <div class="inline-block align-middle">
                                                <div class="picture-container mr-[16px] inline-block align-middle"
                                                    style="padding-bottom: 0px; width: 30px; height: 30px;"><img
                                                        class="picture-inner"
                                                        src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30"
                                                        srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=30&amp;w=30 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=60 2x"
                                                        loading="lazy" role="presentation" alt=""></div>
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
            <section>
                <div class="container container-max-width-3">
                    <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case">Best Car Deals &amp; Incentives for
                        August 2024</h2>
                    <div class="flex justify-between pb-4 lg:pb-0 mt-2 md:mt-3">
                        <div class="flex lg:flex-row items-baseline">
                            <div class="pr-3 md:pb-2 lg:pb-0" data-test="zipCodeValue"><span class="hidden-md-down">We
                                    found </span><span class="md:font-bold">62 <span>deals </span></span><span
                                    class="hidden-lg-up">found </span>near <span class="hidden-sm-down">Santa Monica,
                                    CA</span> <span class="max-md:font-bold">90401</span></div><button type="button"
                                class="link-button block lg:inline" data-test="changeLocationModalLink">Change <span
                                    class="hidden-sm-down">Location</span><span class="hidden-md-up">ZIP</span></button>
                        </div>
                    </div>
                    <div class="py-2" data-test="vehicleTypeDealsBody">Are you looking to buy a new car? You can find
                        all of the latest new car, truck, and SUV deals and incentives for August 2024 below. Browse by
                        manufacturer or vehicle type and find the latest deals for financing, cash, or leasing. For example,
                        the 2024 Honda Civic has a 3.9% APR for 48 months deal, while the 2024 Toyota Corolla is offering
                        $1,000 customer cash. Incentives and new car deals are updated each month, so be sure to check back
                        for the latest specials.</div>
                </div>
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Honda Civic</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
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
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/honda/civic-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/honda/civic/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Honda
                                    Civic</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/e2af810e5f998397/2024-Honda-Civic-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/e2af810e5f998397/2024-Honda-Civic-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/e2af810e5f998397/2024-Honda-Civic-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation"></div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Honda Civic</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/honda/civic-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/honda/civic/" target=""
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
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Honda
                                                        Military Appreciation&nbsp;Offer</h2>
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
                                    <div class="pl-3 pt-3 col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">
                                                        Special APR</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">3.9%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">48</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Excludes 2 trims</span></div>
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
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Honda Civic&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$303</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/honda/civic/lease/">View Lease Options</a>
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
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Toyota Corolla</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
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
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/toyota/corolla-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/toyota/corolla/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Toyota
                                    Corolla</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/2f98c332d7c16ad4/2024-Toyota-Corolla-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/2f98c332d7c16ad4/2024-Toyota-Corolla-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/2f98c332d7c16ad4/2024-Toyota-Corolla-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation"></div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Toyota Corolla</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/toyota/corolla-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/toyota/corolla/" target=""
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
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Toyota Lease Loyalty&nbsp;Program </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,000</div>
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
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Special APR T3 -&nbsp;LA</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">10.49%</div>
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
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Toyota Corolla&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$303</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/toyota/corolla/lease/">View Lease Options</a>
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
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Honda Accord</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
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
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/honda/accord-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/honda/accord/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Honda
                                    Accord</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/0037d8af3b341851/2024-Honda-Accord-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/0037d8af3b341851/2024-Honda-Accord-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/0037d8af3b341851/2024-Honda-Accord-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation"></div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Honda Accord</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/honda/accord-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/honda/accord/" target=""
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
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">HFS
                                                        Lease Loyalty/Conquest</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,250</div>
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
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">
                                                        Special APR</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">2.9%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">36</div>
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
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Honda Accord&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$348</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/honda/accord/lease/">View Lease Options</a>
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
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Toyota Camry</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
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
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/toyota/camry-level-setting/?modelYear=2025"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/toyota/camry/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2025 Toyota
                                    Camry</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/735fb852128cb024/2025-Toyota-Camry-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/735fb852128cb024/2025-Toyota-Camry-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/735fb852128cb024/2025-Toyota-Camry-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation"></div>
                                    <div class="hidden-lg-up pt-1 text-center">2025 Toyota Camry</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/toyota/camry-level-setting/?modelYear=2025"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/toyota/camry/" target=""
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
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Toyota Lease Loyalty&nbsp;Program </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,000</div>
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
                                    <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Military Program -&nbsp;$500 </h2>
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
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Special APR T3 -&nbsp;LA</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">10.25%</div>
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
                                </div>
                                <div class="pt-4"><button type="button" class="link-button">See More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Hyundai Elantra</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
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
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/hyundai/elantra-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/hyundai/elantra/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Hyundai
                                    Elantra</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/f3da9046a3d27ec7/2024-Hyundai-Elantra-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/f3da9046a3d27ec7/2024-Hyundai-Elantra-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/f3da9046a3d27ec7/2024-Hyundai-Elantra-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation"></div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Hyundai Elantra</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/hyundai/elantra-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/hyundai/elantra/" target=""
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
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Retail
                                                        Bonus Cash</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,500</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Applies to 2 trims</span></div>
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
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">
                                                        Hyundai HMF Dealer&nbsp;Choice </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="text-sm font-bold invisible">Up to</div>
                                                            <div class="heading-3 normal-case">3.99%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="text-sm font-bold invisible">Up to</div>
                                                            <div class="heading-3 normal-case">60</div>
                                                            <div>months</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,250</div>
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
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Hyundai Elantra&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$254</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/hyundai/elantra/lease/">View Lease Options</a>
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
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Dodge Charger</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
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
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/dodge/charger-level-setting/?modelYear=2023"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/dodge/charger/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2023 Dodge
                                    Charger</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/fc39ce2bdc5a250f/2023-Dodge-Charger-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/fc39ce2bdc5a250f/2023-Dodge-Charger-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/fc39ce2bdc5a250f/2023-Dodge-Charger-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation"></div>
                                    <div class="hidden-lg-up pt-1 text-center">2023 Dodge Charger</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/dodge/charger-level-setting/?modelYear=2023"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/dodge/charger/" target=""
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
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2023
                                                        IDL Bonus&nbsp;Cash</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$5,000</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Applies to 2 trims</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>08/05/24</span></div>
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
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2023
                                                        SFS Standalone APR&nbsp;(72) </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">6.9%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">72</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Applies to 3 trims</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>08/05/24</span></div>
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
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2023
                                                        Dodge Charger&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$523</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/dodge/charger/lease/">View Lease Options</a>
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
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Ford Mustang</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
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
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/ford/mustang-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/ford/mustang/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Ford
                                    Mustang</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/8eb2f7a014ad464b/2024-Ford-Mustang-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/8eb2f7a014ad464b/2024-Ford-Mustang-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/8eb2f7a014ad464b/2024-Ford-Mustang-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation"></div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Ford Mustang</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/ford/mustang-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/ford/mustang/" target=""
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
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">RCL
                                                        Customer Cash</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,000</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Applies to 2 trims</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>09/30/24</span></div>
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
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Ford
                                                        Credit 90-Day Deferred Payment APR&nbsp;Financing</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">1.9%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">38</div>
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
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Ford Mustang&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$478</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/ford/mustang/lease/">View Lease Options</a>
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
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Dodge Challenger</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
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
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/dodge/challenger-level-setting/?modelYear=2023"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/dodge/challenger/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2023 Dodge
                                    Challenger</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/f1bb175460a2174a/2023-Dodge-Challenger-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/f1bb175460a2174a/2023-Dodge-Challenger-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/f1bb175460a2174a/2023-Dodge-Challenger-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation"></div>
                                    <div class="hidden-lg-up pt-1 text-center">2023 Dodge Challenger</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/dodge/challenger-level-setting/?modelYear=2023"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/dodge/challenger/" target=""
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
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2023
                                                        National Power Dollars Retail Bonus&nbsp;Cash</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$3,750</div>
                                                            </div>
                                                            <div>Customer Cash</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Applies to 3 trims</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>08/05/24</span></div>
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
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2023
                                                        SFS Standalone APR&nbsp;(72) </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">6.9%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">72</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                    <div class="grow text-xs"><span>Applies to 3 trims</span></div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div>
                                                    <div class="flex justify-between"><button type="button"
                                                            class="link-button" data-test="viewDealsDetails">View
                                                            Details</button>
                                                        <div>Exp. <span>08/05/24</span></div>
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
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2023
                                                        Dodge Challenger&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$498</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/dodge/challenger/lease/">View Lease Options</a>
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
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Kia Forte</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button>
                                </div>
                                <div>
                                    <div class="heading-4 normal-case inline-block">5 Deals Available</div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                                </div>
                                <div class="hidden-sm-down">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/kia/forte-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/kia/forte/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Kia Forte</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/ce2a0b1cb16e728c/2024-Kia-Forte-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/ce2a0b1cb16e728c/2024-Kia-Forte-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/ce2a0b1cb16e728c/2024-Kia-Forte-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation"></div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Kia Forte</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/kia/forte-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/kia/forte/" target=""
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
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">Kia
                                                        Customer Cash</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,000</div>
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
                                                    <div
                                                        class="bg-[#0e68ac] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">FINANCE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">KMF
                                                        Low APR&nbsp;Program</h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">3.9%</div>
                                                            <div>APR</div>
                                                        </div>
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">48</div>
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
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Kia Forte&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$344</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails" href="/kia/forte/lease/">View
                                                        Lease Options</a>
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
                <div class="pt-4">
                    <div class="container">
                        <div class="border-b pb-5" data-test="dealsSection">
                            <div class="flex items-baseline pb-2">
                                <div class="flex items-center md:mr-2">
                                    <h2
                                        class="heading-3 normal-case heading-md-2 md:normal-case inline-block pr-2-5 md:pr-1">
                                        Toyota Prius</h2><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-lg-up mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 28px; height: 28px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button><button type="button"
                                        class="link-button flex justify-center active:bg-transparent hover:no-underline group hidden-md-down mt-1 mr-2"
                                        aria-label="Save Model Button" aria-pressed="false" aria-haspopup="dialog"
                                        data-test="saveModelButton" data-test-item="notSaved"><svg viewBox="0 0 24 24"
                                            class="icon icon-fill-default shrink-0 text-white stroke-black"
                                            aria-hidden="true" style="width: 30px; height: 30px;">
                                            <use href="#outlined-heart-fill"></use>
                                        </svg>
                                        <div class="group-hover:text-dark group-hover:underline"></div>
                                    </button>
                                </div>
                                <div>
                                    <div class="heading-4 normal-case inline-block">4 Deals Available</div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute right-0 left-0 h-[101px] bg-[linear-gradient(90deg,#03806D_0%,#0E68AC_100%)] sm:h-[119px]">
                                </div>
                                <div class="hidden-sm-down">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/toyota/prius-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/toyota/prius/" target=""
                                                rel="noopener" data-test="buttonViewInventory"
                                                class="w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-secondary btn-md btn-block"><span
                                                    class="btn-inner">View Inventory</span></a></div>
                                    </div>
                                </div><span class="hidden-md-down absolute right-0 top-[119px] pt-3">2024 Toyota
                                    Prius</span>
                                <div class="m-auto w-[85%] pt-3 md:mr-4 md:w-[360px] lg:ml-[35%] lg:w-[400px]">
                                    <div class="picture-container picture-container-block" style="padding-bottom: 50%;">
                                        <img class="picture-block" sizes="400px"
                                            src="https://static.tcimg.net/vehicles/primary/1c9b9245c2179921/2024-Toyota-Prius-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360"
                                            srcset="https://static.tcimg.net/vehicles/primary/1c9b9245c2179921/2024-Toyota-Prius-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=180&amp;w=360 360w, https://static.tcimg.net/vehicles/primary/1c9b9245c2179921/2024-Toyota-Prius-white-full_color-driver_side_front_quarter.png?auto=format&amp;h=360&amp;w=720 720w"
                                            alt="" role="presentation"></div>
                                    <div class="hidden-lg-up pt-1 text-center">2024 Toyota Prius</div>
                                </div>
                                <div class="hidden-md-up">
                                    <div class="top-[119px] pt-3 md:absolute md:w-full">
                                        <div class="ml-0" data-test="buildAndPriceCTA"><a
                                                data-ignore-contrast="true" data-loading="false"
                                                data-test="dealsModelCardConfigUrl"
                                                class="mb-2 w-full md:ml-0 md:w-[calc((100%_-_200px)_/_2)] lg:w-[calc((100%_-_440px)_/_2)] btn btn-primary btn-md btn-block"
                                                href="/prices-new/toyota/prius-level-setting/?modelYear=2024"><span
                                                    class="btn-inner">Build &amp; Price</span></a></div>
                                        <div class="ml-0"><a data-ignore-contrast="false" data-loading="false"
                                                href="/new-cars-for-sale/listings/toyota/prius/" target=""
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
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Toyota Lease Loyalty&nbsp;Program </h2>
                                                    <div class="flex flex-nowrap justify-between">
                                                        <div class="inline-block">
                                                            <div>
                                                                <div class="text-sm font-bold">Up to</div>
                                                                <div class="heading-3 normal-case">$1,000</div>
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
                                    <div class="pl-3 pt-3 hidden-md-down col-12 col-md-6 col-lg-4">
                                        <div class="h-full flex flex-col bg-white min-h-[281px]"
                                            data-test="dealsIncentiveCard">
                                            <div class="pt-3 pb-3 px-3 border rounded grow flex flex-col justify-between">
                                                <div class="flex grow flex-col">
                                                    <div
                                                        class="bg-[#377e6e] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white" data-test="dealType">CASH
                                                            OFFER</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">TFS
                                                        Military Program -&nbsp;$500 </h2>
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
                                                    <div
                                                        class="bg-[#343434] mb-3 px-2-5 py-1 rounded self-start inline-block">
                                                        <span class="font-bold text-white"
                                                            data-test="dealType">LEASE</span></div>
                                                    <h2 class="heading-base mb-2 font-bold" style="flex-grow: 2;">2024
                                                        Toyota Prius&nbsp;Lease</h2>
                                                    <div class="flex grow flex-nowrap">
                                                        <div class="mr-4 inline-block">
                                                            <div class="heading-3 normal-case">$398</div>
                                                            <div>per month</div>
                                                        </div>
                                                        <div class="inline-block">
                                                            <div class="heading-3 normal-case">36</div>
                                                            <div>months</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="my-2-5 border-t"></div><a
                                                        data-test="viewLeaseDealsDetails"
                                                        href="/toyota/prius/lease/">View Lease Options</a>
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
            </section>
            <section class="bg-light">
                <div class="container py-3">
                    <div class="text-center">
                        <div class="mb-4 md:mb-6">
                            <h2 class="heading-3 normal-case py-3" data-test="dealsContentCashDealsHeading">Car Cash
                                Deals</h2>
                            <p data-test="dealsContentCashDeals">Right now is a great time to shop for a new car. If you
                                are purchasing, car models have cash offers of $400 - $5,000. Cars with cash deals include
                                the 2024 Honda Civic with $500 cash back, 2024 Toyota Corolla with $1,000 cash back, and
                                2024 Honda Accord with $1,250 cash back.</p>
                        </div>
                        <div class="mb-4 md:mb-6">
                            <h2 class="heading-3 normal-case py-3" data-test="dealsContentLeaseDealsHeading">Car Lease
                                Deals</h2>
                            <p data-test="dealsContentLeaseDeals">Want to get into a new car for a low monthly payment?
                                Then these car leasing deals might be right for you. Car lease deals for vehicles like the
                                2024 Hyundai Elantra can be had for as low as $254 per month for a 36-month term when you
                                pay $2,000 due at signing. Browse all car leases and see the real averages people pay per
                                model.</p>
                        </div>
                        <div class="mb-4 md:mb-6">
                            <h2 class="heading-3 normal-case py-3" data-test="dealsContentFinanceDealsHeading">Car
                                Finance Deals</h2>
                            <p data-test="dealsContentFinanceDeals">If you opt to finance a car, you may be qualified from
                                rates as low as 1.9% for 36 months. The cars offering these terms include the 2024 Ford
                                Mustang.</p>
                        </div>
                    </div>
                    <h2 class="heading-3 normal-case mt-6 text-center" data-test="incentivesMoreInfoHeading">More
                        Information About&nbsp;Incentives</h2>
                    <p class="px-5 pt-2-5 pb-6 text-center">Vehicle incentives and rebates are programs made available by
                        car manufacturers to encourage vehicle sales by providing consumers with cash allowances or
                        favorable financing/lease rates. Incentives can vary by location, vehicle configuration, as well as
                        the buyer’s method of payment (cash purchase, financing, lease). Some incentives can be stacked with
                        other incentive programs, and some have eligibility conditions that must be met to qualify.
                        Additional incentives are sometimes targeted to customer segment groups like college graduates,
                        military members, etc. Incentives are normally subject to change and governed by specific
                        eligibility rules. Please see your local dealer for details on incentives that might be available to
                        you.</p>
                </div>
            </section>
            <section>
                <div class="container pb-3 pt-4 md:pt-5">
                    <h2 class="heading-3 normal-case pb-3 text-center" data-test="incentivesMoreInfoHeading">Car Deals
                        &amp; Incentives&nbsp;FAQs</h2>
                    <div class="row mb-3 lg:mb-4">
                        <div class="col-12">
                            <div class="expandable-list-item"><button
                                    class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                    aria-expanded="false">
                                    <div class="heading-4 normal-case w-full px-3 py-3">
                                        <h3 class="heading-4 normal-case">What is customer&nbsp;cash?</h3>
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
                                        <div class="whitespace-pre-line">Customer cash is a direct discount or rebate
                                            taken off of the price of the vehicle. Often, these incentives require buyers to
                                            quality based on specific criteria such as being a recent college graduate or a
                                            current owner of that manufacturer’s vehicle. However, this isn’t always the
                                            case, and manufacturers can give some cash back offers to any customer.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item"><button
                                    class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                    aria-expanded="false">
                                    <div class="heading-4 normal-case w-full px-3 py-3">
                                        <h3 class="heading-4 normal-case">What are common finance&nbsp;deals?</h3>
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
                                        <div class="whitespace-pre-line">Manufacturers can offer buyers an interest rate
                                            or APR with a specific term limit (monthly payments) to be more competitive in
                                            the overall cost of the vehicle. It is common to see interest rates as low as 0%
                                            with terms of 48-60 months. It is important to keep in mind that a customer
                                            typically needs a high credit score to qualify.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item"><button
                                    class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                    aria-expanded="false">
                                    <div class="heading-4 normal-case w-full px-3 py-3">
                                        <h3 class="heading-4 normal-case">How do lease deals&nbsp;work?</h3>
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
                                        <div class="whitespace-pre-line">Typically, a manufacturer will offer a lease deal
                                            through their financial subsidiary company. Leasing allows them to over-inflate
                                            the residual value of the car at the end of the lease, meaning car dealerships
                                            can offer much more competitive terms when it comes to the monthly payment and
                                            depreciation of the vehicle because the consumer is paying less overall across
                                            the lease.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item"><button
                                    class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                    aria-expanded="false">
                                    <div class="heading-4 normal-case w-full px-3 py-3">
                                        <h3 class="heading-4 normal-case">Which is better, finance, cash back, or
                                            lease&nbsp;deal?</h3>
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
                                        <div class="whitespace-pre-line">The best incentives deal is the one that fits
                                            your budget. If you are OK with having a slightly higher monthly payment, a 0%
                                            finance offer is hard to beat. If you don’t want to keep the car for more than a
                                            few years, leasing is likely the way to go. However, if you want the lowest
                                            total upfront cost, a cash back offer might make the most sense.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container container-max-width-3 pb-5 pt-4 md:pt-5" data-test="dealsSeoFooter">
                <div class="row">
                    <div class="text-ellipsis col-12 col-sm-6 col-lg-3">
                        <h2 class="heading-5 normal-case pb-2" data-test="seoLinkColumnHeading">Vehicle Rankings</h2>
                        <div class="see-more space-y-2" data-ignore-contrast="true">
                            <div data-test="seeMoreBody" style="overflow: hidden; max-height: 10.5em;">
                                <div>
                                    <ul class="space-y-2 whitespace-nowrap">
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/best-cars-trucks/cars/">Best Cars</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/best-cars-trucks/trucks/">Best
                                                Trucks</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/best-cars-trucks/suvs/">Best SUVs</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/best-cars-trucks/sedans/">Best
                                                Sedans</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/best-cars-trucks/hatchbacks/">Best
                                                Hatchbacks</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/best-cars-trucks/wagons/">Best
                                                Wagons</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/best-cars-trucks/coupes/">Best
                                                Coupes</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/best-cars-trucks/convertibles/">Best
                                                Convertibles</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/best-cars-trucks/vans/">Best Vans</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/best-cars-trucks/fuel-hybrid/">Best
                                                Hybrids</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/best-cars-trucks/fuel-plug-in-hybrid/">Best Plug-In Hybrids</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/best-cars-trucks/fuel-electric/">Best
                                                Electric Vehicles</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/best-cars-trucks/fuel-diesel/">Best
                                                Diesel Vehicles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-left mt-0" data-test="seeMoreLinkContainer"><button type="button"
                                    class="link-button see-more-link" data-test="seeMoreButton"><span
                                        class="see-more-link-text">See More</span><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default see-more-icon-angle" aria-hidden="true"
                                        style="width: 24px; height: 24px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></button></div>
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
                    <div class="text-ellipsis col-12 col-sm-6 col-lg-3">
                        <h2 class="heading-5 normal-case pb-2" data-test="seoLinkColumnHeading">Popular New Cars</h2>
                        <div class="see-more space-y-2" data-ignore-contrast="true">
                            <div data-test="seeMoreBody" style="overflow: hidden; max-height: 10.5em;">
                                <div>
                                    <ul class="space-y-2 whitespace-nowrap">
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/dodge/challenger/">New Dodge
                                                Challenger</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/ford/edge/">New Ford Edge</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/ford/escape/">New Ford Escape</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/ford/explorer/">New Ford Explorer</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/ford/f-150/">New Ford F-150</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/honda/accord/">New Honda Accord</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/honda/civic/">New Honda Civic</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/honda/cr-v/">New Honda CR-V</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/honda/pilot/">New Honda Pilot</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/hyundai/elantra/">New Hyundai
                                                Elantra</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/hyundai/kona/">New Hyundai Kona</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/hyundai/santa-fe/">New Hyundai Santa
                                                Fe</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/jeep/cherokee/">New Jeep Cherokee</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/jeep/grand-cherokee/">New Jeep Grand
                                                Cherokee</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/jeep/renegade/">New Jeep Renegade</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/jeep/wrangler/">New Jeep Wrangler</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/kia/sorento/">New Kia Sorento</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/kia/stinger/">New Kia Stinger</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/mazda/cx-5/">New Mazda CX-5</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/nissan/rogue/">New Nissan Rogue</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/subaru/ascent/">New Subaru Ascent</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/subaru/crosstrek/">New Subaru
                                                Crosstrek</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/subaru/forester/">New Subaru
                                                Forester</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/subaru/outback/">New Subaru Outback</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal"
                                                href="/new-cars-for-sale/listings/toyota/4runner/">New Toyota 4Runner</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-left mt-0" data-test="seeMoreLinkContainer"><button type="button"
                                    class="link-button see-more-link" data-test="seeMoreButton"><span
                                        class="see-more-link-text">See More</span><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default see-more-icon-angle" aria-hidden="true"
                                        style="width: 24px; height: 24px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></button></div>
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
                    <div class="text-ellipsis col-12 col-sm-6 col-lg-3">
                        <h2 class="heading-5 normal-case pb-2" data-test="seoLinkColumnHeading">Research Cars</h2>
                        <div class="see-more space-y-2" data-ignore-contrast="true">
                            <div data-test="seeMoreBody" style="overflow: hidden; max-height: 10.5em;">
                                <div>
                                    <ul class="space-y-2 whitespace-nowrap">
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/dodge/challenger/">2023 Dodge
                                                Challenger</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/ford/edge/">2024 Ford Edge</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/ford/escape/">2024 Ford
                                                Escape</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/ford/explorer/">2024 Ford
                                                Explorer</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/ford/f-150/">2024 Ford
                                                F-150</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/honda/accord/">2024 Honda
                                                Accord</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/honda/civic/">2024 Honda
                                                Civic</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/honda/cr-v/">2024 Honda
                                                CR-V</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/honda/pilot/">2025 Honda
                                                Pilot</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/hyundai/elantra/">2024 Hyundai
                                                Elantra</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/hyundai/kona/">2024 Hyundai
                                                Kona</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/hyundai/santa-fe/">2024
                                                Hyundai Santa Fe</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/jeep/cherokee/">2023 Jeep
                                                Cherokee</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/jeep/grand-cherokee/">2024
                                                Jeep Grand Cherokee</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/jeep/renegade/">2023 Jeep
                                                Renegade</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/jeep/wrangler/">2024 Jeep
                                                Wrangler</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/kia/sorento/">2024 Kia
                                                Sorento</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/kia/stinger/">2023 Kia
                                                Stinger</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/mazda/cx-5/">2025 Mazda
                                                CX-5</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/nissan/rogue/">2024 Nissan
                                                Rogue</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/subaru/ascent/">2024 Subaru
                                                Ascent</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/subaru/crosstrek/">2024 Subaru
                                                Crosstrek</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/subaru/forester/">2025 Subaru
                                                Forester</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/subaru/outback/">2024 Subaru
                                                Outback</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/overview/toyota/4runner/">2024 Toyota
                                                4Runner</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-left mt-0" data-test="seeMoreLinkContainer"><button type="button"
                                    class="link-button see-more-link" data-test="seeMoreButton"><span
                                        class="see-more-link-text">See More</span><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default see-more-icon-angle" aria-hidden="true"
                                        style="width: 24px; height: 24px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></button></div>
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
                    <div class="text-ellipsis col-12 col-sm-6 col-lg-3">
                        <h2 class="heading-5 normal-case pb-2" data-test="seoLinkColumnHeading">Browse Inventory</h2>
                        <div class="see-more space-y-2" data-ignore-contrast="true">
                            <div data-test="seeMoreBody" style="overflow: hidden; max-height: 10.5em;">
                                <div>
                                    <ul class="space-y-2 whitespace-nowrap">
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ca/">California
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/tx/">Texas Inventory</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/fl/">Florida
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ny/">New York
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/pa/">Pennsylvania
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/il/">Illinois
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/oh/">Ohio Inventory</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ga/">Georgia
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/nc/">North Carolina
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/mi/">Michigan
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/nj/">New Jersey
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/va/">Virginia
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/wa/">Washington
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/az/">Arizona
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ma/">Massachusetts
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/tn/">Tennessee
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/in/">Indiana
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/mo/">Missouri
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/md/">Maryland
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/wi/">Wisconsin
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/co/">Colorado
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/mn/">Minnesota
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/sc/">South Carolina
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/al/">Alabama
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/la/">Louisiana
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ky/">Kentucky
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/or/">Oregon Inventory</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ok/">Oklahoma
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ct/">Connecticut
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ut/">Utah Inventory</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ia/">Iowa Inventory</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/nv/">Nevada Inventory</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ar/">Arkansas
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ms/">Mississippi
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ks/">Kansas Inventory</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/nm/">New Mexico
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ne/">Nebraska
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/wv/">West Virginia
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/id/">Idaho Inventory</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/hi/">Hawaii Inventory</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/nh/">New Hampshire
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/me/">Maine Inventory</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/mt/">Montana
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ri/">Rhode Island
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/de/">Delaware
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/sd/">South Dakota
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/nd/">North Dakota
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/ak/">Alaska Inventory</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/dc/">District of Columbia
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/vt/">Vermont
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal" href="/sitemap/state/wy/">Wyoming
                                                Inventory</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-left mt-0" data-test="seeMoreLinkContainer"><button type="button"
                                    class="link-button see-more-link" data-test="seeMoreButton"><span
                                        class="see-more-link-text">See More</span><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default see-more-icon-angle" aria-hidden="true"
                                        style="width: 24px; height: 24px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></button></div>

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
