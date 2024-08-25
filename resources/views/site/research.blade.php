@extends('site.layouts.app')
@section('content')
    <main id="mainContent" style="margin-top:60px"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div data-test="researchLanding">
            <div class="container container-max-width-1">
                <div class="row">
                    <div class="text-center lg:pl-4 lg:text-left col-lg-5">
                        <h1 class="heading-3 normal-case heading-lg-2 lg:normal-case mt-4 lg:mt-7"
                            data-test="researchLandingHeaderHeading">Find the Right Car for&nbsp;You</h1>
                        <p data-test="researchLandingHeaderSubText" class="my-2 md:mb-0 md:mt-1 lg:mt-2">Compare features,
                            read reviews, find deals, and explore your payment options.</p>
                    </div>
                    <div class="text-center lg:mt-3 col-md-6 offset-md-3 col-lg-7 offset-lg-0">
                        <div class="picture-container picture-container-block" style="padding-bottom: 66.9388%;"><img
                                class="picture-block picture-svg lg:px-3"
                                src="{{ asset('assets/_next/static/images/research-and-compare-48d73c06611e64122f4fb2f02404d4a3.svg') }}"
                                data-test="researchLandingHeaderImg" alt="Research and Compare"></div>
                    </div>
                </div>
            </div>
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
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="field-message-challenger">
                                                    <div class="field-message-text-challenger"></div>
                                                </div>
                                            </div>
                                        </div><button type="submit" data-ignore-contrast="true" data-loading="false"
                                            data-test="modelOverviewCtaActionButton"
                                            class="self-end mt-1 md:mt-auto m-auto w-full md:w-auto btn btn-primary btn-lg"><span
                                                class="btn-inner">Go</span></button>
                                    </div>
                                    <p id="modelOverviewSelectorError"
                                        class="md:pt-1 h-[16px] text-xs text-center text-red whitespace-nowrap pt-1 md:pt-0 md:pl-2-5 w-full md:text-left"
                                        data-test="modelOverviewCtaHint"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="pt-2-5 pb-4 text-center lg:pt-5 lg:pb-5">
                        <h2 class="heading-3 normal-case">Featured Reviews</h2>
                        <p class="pb-3">Our experts road-test selected models.</p>

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

                        <div class="expandable-list-item border-t"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="seoLinkColumnHeading">
                            <div class="heading-4 normal-case w-full px-3 py-3">See More Popular Reviews</div><span class="ml-3 whitespace-nowrap">
                                <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></div>
                            </span>
                        </button>
                        <div class="expandable-list-item-collapse border-t collapse" style="">
                            <div class="px-3 py-3 expandable-list-item-shadow">
                                <div class="pt-2"><ul class="space-y-2 pt-2 md:grid md:grid-cols-3 md:space-y-0 md:gap-2 lg:grid-cols-4"><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/ford/maverick/">Ford Maverick Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/ford/bronco/">Ford Bronco Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/polestar/2/">Polestar 2 Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/volkswagen/taos/">Volkswagen Taos Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/jeep/gladiator/">Jeep Gladiator Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/subaru/outback/">Subaru Outback Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/audi/q5/">Audi Q5 Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/subaru/forester/">Subaru Forester Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/genesis/gv70/">Genesis GV70 Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/bmw/x3/">BMW X3 Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/hyundai/santa-fe/">Hyundai Santa Fe Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/kia/k5/">Kia K5 Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/acura/rdx/">Acura RDX Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/kia/ev6/">Kia EV6 Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/ford/ecosport/">Ford EcoSport Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/volkswagen/id-4/">Volkswagen ID.4 Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/porsche/macan/">Porsche Macan Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/honda/civic/">Honda Civic Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/bmw/i4/">BMW i4 Review</a></li><li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal" href="/overview/hyundai/elantra/">Hyundai Elantra Review</a></li></ul><a class="mt-4 mb-1 block" href="/all-reviews/">See All Reviews</a></div>
                            </div>
                        </div>
                    </div>
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
                                role="button" aria-pressed="true" data-test="newCarsMakes" data-selected="true">New Cars</a>
                            <a
                                class="linkable switch w-[125px]" href="javascript:void(0)" role="button" aria-pressed="false"
                                data-test="usedCarsMakes">Used Cars</a></div>
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
            <div class="theme-light">
                <div class="container py-5 text-center">
                    <div class="row">
                        <div class="col">
                            <h2 class="heading-3 normal-case" data-test="researchLandingModelInterviewCtaHeading">Not
                                sure where to start? We can help narrow your&nbsp;search.</h2>
                            <p data-test="researchLandingModelInterviewCtaSubText" class="md:pt-1">Answer a few
                                questions, and we'll show you cars that fit your needs.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><a data-ignore-contrast="true" data-loading="false"
                                data-test="researchLandingModelInterviewCtaGetStartedButton"
                                class="mt-4 btn btn-primary btn-md" href="/fit-quiz/steps/"><span
                                    class="btn-inner">Get Started</span></a></div>
                    </div>
                </div>
            </div>
            <div class="container container-max-width-1 my-6 text-center">
                <div class="row">
                    <div class="col">
                        <h2 class="heading-3 normal-case" data-test="researchLandingToolsAndGuidesHeading">Tools and
                            Guides</h2>
                        <p data-test="researchLandingToolsAndGuidesSubText" class="mt-1 px-4 md:px-0">Use these tools to
                            help you navigate through the car buying process.</p>
                    </div>
                </div>
                <div class="row row-card mt-4 lg:px-7">
                    <div class="col-8 offset-2 col-md-4 offset-md-0"><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)]"
                            data-test="researchLandingToolsAndGuidesCarComparisonCard" href="/compare/">
                            <div data-test="cardContent" class="card-content card-content-center py-0 px-0">
                                <div class="heading-5 normal-case pt-2-5" data-test="heading"
                                    data-test-item="researchLandingToolsAndGuidesCarComparisonCard">Car Comparison</div>
                                <div class="picture-container"
                                    style="padding-bottom: 0px; width: 320px; height: 215px;"><img
                                        class="picture-inner picture-svg"
                                        src="{{ asset('assets/_next/static/images/research-and-compare-3cc2e7d020c7f58b483416f960a5caa1.svg') }}"
                                        data-test="img" data-test-item="researchLandingToolsAndGuidesCarComparisonCard"
                                        alt="" role="presentation"></div>
                            </div>
                        </a></div>
                    <div class="mt-2-5 md:mt-0 col-8 offset-2 col-md-4 offset-md-0"><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)]"
                            data-test="researchLandingToolsAndGuidesLeaseCalculatorCard" href="/car-lease-calculator/">
                            <div data-test="cardContent" class="card-content card-content-center py-0 px-0">
                                <div class="heading-5 normal-case pt-2-5" data-test="heading"
                                    data-test-item="researchLandingToolsAndGuidesLeaseCalculatorCard">Lease Calculator
                                </div>
                                <div class="picture-container"
                                    style="padding-bottom: 0px; width: 320px; height: 215px;"><img
                                        class="picture-inner picture-svg"
                                        src="{{ asset('assets/_next/static/images/lease-calculator-632d0ef4ce8451a7a5045bdb9b742518.svg') }}"
                                        data-test="img"
                                        data-test-item="researchLandingToolsAndGuidesLeaseCalculatorCard" alt=""
                                        role="presentation"></div>
                            </div>
                        </a></div>
                    <div class="mt-2-5 md:mt-0 col-8 offset-2 col-md-4 offset-md-0"><a
                            class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] hover:shadow-[2px_2px_6px_0_rgba(1,1,1,0.05),2px_4px_9px_0_rgba(1,1,1,0.15)]"
                            data-test="researchLandingToolsAndGuidesLoanCalculatorCard" href="/car-loan-calculator/">
                            <div data-test="cardContent" class="card-content card-content-center py-0 px-0">
                                <div class="heading-5 normal-case pt-2-5" data-test="heading"
                                    data-test-item="researchLandingToolsAndGuidesLoanCalculatorCard">Loan Calculator</div>
                                <div class="picture-container"
                                    style="padding-bottom: 0px; width: 320px; height: 215px;"><img
                                        class="picture-inner picture-svg"
                                        src="{{ asset('assets/_next/static/images/loan-calculator-972faadbbdcf088570f845a658c7cee1.svg') }}"
                                        data-test="img" data-test-item="researchLandingToolsAndGuidesLoanCalculatorCard"
                                        alt="" role="presentation"></div>
                            </div>
                        </a></div>
                </div>
            </div>
            <div class="bg-light">
                <div class="container container-max-width-1 mb-5 pt-5 pb-2 text-center md:mb-6 md:pt-4 md:pb-4">
                    <div class="row">
                        <div class="col">
                            <h2 class="heading-3 normal-case" data-test="researchLandingDealsAndIncentivesHeading">See
                                <a data-test="researchLandingDealsAndIncentivesLink" href="/deals/">Car Deals and
                                    Incentives</a> Near You
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mt-3 mb-2 px-2-5 text-left col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <form novalidate="" class="flex flex-col items-start md:flex-row"
                                data-test="researchLandingDealsAndIncentivesSelector">
                                <div class="field-container-challenger w-full md:mr-2 md:w-[213px]">
                                    <div class="field-wrapper-challenger field-label-padding-challenger">
                                        <div class="field-content-row field-with-suffix">
                                            <div class="field-input-label-challenger input-label-select"><select
                                                    required="" aria-label="Make"
                                                    class="form-select-element-challenger"
                                                    data-test="dealsAndIncentivesSelectorMakeSelect" name="makeSlug">
                                                    <option disabled="" value="" selected="">Choose A Make
                                                    </option>
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
                                                    <option value="ford">Ford</option>
                                                    <option value="genesis">Genesis</option>
                                                    <option value="gmc">GMC</option>
                                                    <option value="honda">Honda</option>
                                                    <option value="hyundai">Hyundai</option>
                                                    <option value="infiniti">INFINITI</option>
                                                    <option value="jaguar">Jaguar</option>
                                                    <option value="jeep">Jeep</option>
                                                    <option value="kia">Kia</option>
                                                    <option value="lamborghini">Lamborghini</option>
                                                    <option value="land-rover">Land Rover</option>
                                                    <option value="lexus">Lexus</option>
                                                    <option value="lincoln">Lincoln</option>
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
                                                    <option value="volkswagen">Volkswagen</option>
                                                    <option value="volvo">Volvo</option>
                                                </select>
                                                <div class="field-label-text-challenger" data-test="fieldLabel"><label
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
                                <div
                                    class="field-container-challenger pt-2 md:pt-0 mb-1 md:mb-0 fs-mask text-left w-full md:w-[176px]">
                                    <div class="field-wrapper-challenger field-label-padding-challenger">
                                        <div class="field-content-row">
                                            <div class="field-input-label-challenger"><input id="27"
                                                    autocomplete="postal-code" class="form-control-challenger"
                                                    aria-label="ZIP Code" required="" placeholder=" "
                                                    inputmode="numeric" name="postalCode" maxlength="5"
                                                    data-test="dealsAndIncentivesSelectorZipCode" value="">
                                                <div class="field-label-text-challenger text-xs" data-test="fieldLabel">
                                                    <label for="27" data-ignore-contrast="true">ZIP Code *</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field-message-challenger">
                                            <div class="field-message-text-challenger"></div>
                                        </div>
                                    </div>
                                </div><button data-ignore-contrast="true" data-loading="false"
                                    data-test="dealsAndIncentivesSelectorButton"
                                    class="w-full p-0 md:ml-1 md:w-[70px] btn btn-primary btn-lg"><span
                                        class="btn-inner">Go</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <div class="py-5" data-test="seoFooter">
                    <div class="container">
                        <div class="grid grid-cols-1 gap-x-3 border-b md:grid-cols-2 md:border-0">
                            <div class="expandable-list-item border-t"><button
                                    class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                    aria-expanded="false" data-test="seoLinkColumnHeading">
                                    <div class="heading-4 normal-case w-full px-3 py-3">Popular Used Cars</div><span
                                        class="ml-3 whitespace-nowrap">
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
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/dodge/challenger/">Used Dodge
                                                    Challenger</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/ford/edge/">Used Ford Edge</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/ford/escape/">Used Ford Escape</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/ford/explorer/">Used Ford
                                                    Explorer</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/ford/f-150/">Used Ford F-150</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/honda/accord/">Used Honda
                                                    Accord</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/honda/civic/">Used Honda Civic</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/honda/cr-v/">Used Honda CR-V</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/honda/pilot/">Used Honda Pilot</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/hyundai/elantra/">Used Hyundai
                                                    Elantra</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/hyundai/kona/">Used Hyundai
                                                    Kona</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/hyundai/santa-fe/">Used Hyundai
                                                    Santa Fe</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/jeep/cherokee/">Used Jeep
                                                    Cherokee</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/jeep/grand-cherokee/">Used Jeep
                                                    Grand Cherokee</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/jeep/renegade/">Used Jeep
                                                    Renegade</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/jeep/wrangler/">Used Jeep
                                                    Wrangler</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/kia/sorento/">Used Kia Sorento</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/kia/stinger/">Used Kia Stinger</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/mazda/cx-5/">Used Mazda CX-5</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/nissan/rogue/">Used Nissan
                                                    Rogue</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/subaru/ascent/">Used Subaru
                                                    Ascent</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/subaru/crosstrek/">Used Subaru
                                                    Crosstrek</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/subaru/forester/">Used Subaru
                                                    Forester</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/subaru/outback/">Used Subaru
                                                    Outback</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/used-cars-for-sale/listings/toyota/4runner/">Used Toyota
                                                    4Runner</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item"><button
                                    class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                    aria-expanded="false" data-test="seoLinkColumnHeading">
                                    <div class="heading-4 normal-case w-full px-3 py-3">Popular New Cars</div><span
                                        class="ml-3 whitespace-nowrap">
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
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/dodge/challenger/">New Dodge
                                                    Challenger</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/ford/edge/">New Ford Edge</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/ford/escape/">New Ford Escape</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/ford/explorer/">New Ford
                                                    Explorer</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/ford/f-150/">New Ford F-150</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/honda/accord/">New Honda Accord</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/honda/civic/">New Honda Civic</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/honda/cr-v/">New Honda CR-V</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/honda/pilot/">New Honda Pilot</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/hyundai/elantra/">New Hyundai
                                                    Elantra</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/hyundai/kona/">New Hyundai Kona</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/hyundai/santa-fe/">New Hyundai Santa
                                                    Fe</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/jeep/cherokee/">New Jeep
                                                    Cherokee</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/jeep/grand-cherokee/">New Jeep Grand
                                                    Cherokee</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/jeep/renegade/">New Jeep
                                                    Renegade</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/jeep/wrangler/">New Jeep
                                                    Wrangler</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/kia/sorento/">New Kia Sorento</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/kia/stinger/">New Kia Stinger</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/mazda/cx-5/">New Mazda CX-5</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/nissan/rogue/">New Nissan Rogue</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/subaru/ascent/">New Subaru
                                                    Ascent</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/subaru/crosstrek/">New Subaru
                                                    Crosstrek</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/subaru/forester/">New Subaru
                                                    Forester</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/subaru/outback/">New Subaru
                                                    Outback</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/new-cars-for-sale/listings/toyota/4runner/">New Toyota
                                                    4Runner</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item md:border-b"><button
                                    class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                    aria-expanded="false" data-test="seoLinkColumnHeading">
                                    <div class="heading-4 normal-case w-full px-3 py-3">Research Cars</div><span
                                        class="ml-3 whitespace-nowrap">
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
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/dodge/challenger/">2023 Dodge Challenger</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/ford/edge/">2024 Ford Edge</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/ford/escape/">2024 Ford Escape</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/ford/explorer/">2025 Ford Explorer</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/ford/f-150/">2024 Ford F-150</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/honda/accord/">2024 Honda Accord</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/honda/civic/">2024 Honda Civic</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/honda/cr-v/">2024 Honda CR-V</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/honda/pilot/">2025 Honda Pilot</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/hyundai/elantra/">2024 Hyundai Elantra</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/hyundai/kona/">2024 Hyundai Kona</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/hyundai/santa-fe/">2024 Hyundai Santa Fe</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/jeep/cherokee/">2023 Jeep Cherokee</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/jeep/grand-cherokee/">2024 Jeep Grand Cherokee</a>
                                            </li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/jeep/renegade/">2023 Jeep Renegade</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/jeep/wrangler/">2024 Jeep Wrangler</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/kia/sorento/">2024 Kia Sorento</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/kia/stinger/">2023 Kia Stinger</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/mazda/cx-5/">2025 Mazda CX-5</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/nissan/rogue/">2024 Nissan Rogue</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/subaru/ascent/">2024 Subaru Ascent</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/subaru/crosstrek/">2024 Subaru Crosstrek</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/subaru/forester/">2025 Subaru Forester</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/subaru/outback/">2024 Subaru Outback</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/overview/toyota/4runner/">2024 Toyota 4Runner</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item md:border-b"><button
                                    class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                                    aria-expanded="false" data-test="seoLinkColumnHeading">
                                    <div class="heading-4 normal-case w-full px-3 py-3">Browse Inventory</div><span
                                        class="ml-3 whitespace-nowrap">
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
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ca/">California Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/tx/">Texas Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/fl/">Florida Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline" href="/sitemap/state/ny/">New
                                                    York Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/pa/">Pennsylvania Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/il/">Illinois Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/oh/">Ohio Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ga/">Georgia Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/nc/">North Carolina Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/mi/">Michigan Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline" href="/sitemap/state/nj/">New
                                                    Jersey Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/va/">Virginia Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/wa/">Washington Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/az/">Arizona Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ma/">Massachusetts Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/tn/">Tennessee Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/in/">Indiana Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/mo/">Missouri Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/md/">Maryland Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/wi/">Wisconsin Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/co/">Colorado Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/mn/">Minnesota Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/sc/">South Carolina Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/al/">Alabama Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/la/">Louisiana Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ky/">Kentucky Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/or/">Oregon Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ok/">Oklahoma Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ct/">Connecticut Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ut/">Utah Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ia/">Iowa Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/nv/">Nevada Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ar/">Arkansas Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ms/">Mississippi Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ks/">Kansas Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline" href="/sitemap/state/nm/">New
                                                    Mexico Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ne/">Nebraska Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/wv/">West Virginia Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/id/">Idaho Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/hi/">Hawaii Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline" href="/sitemap/state/nh/">New
                                                    Hampshire Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/me/">Maine Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/mt/">Montana Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ri/">Rhode Island Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/de/">Delaware Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/sd/">South Dakota Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/nd/">North Dakota Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/ak/">Alaska Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/dc/">District of Columbia Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/vt/">Vermont Inventory</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false"
                                                    class="link-item-minimal no-underline"
                                                    href="/sitemap/state/wy/">Wyoming Inventory</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
