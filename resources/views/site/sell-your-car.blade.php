@extends('site.layouts.app')
@section('content')
    <main id="mainContent" style="margin-top:60px"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div class="relative" data-test="tradeLanding">
            <div
                class="relative w-[100%] border-b-[10px] border-b-[#009d84] bg-[#e6f7f5] md:h-[352px] md:border-b-[14px] md:border-b-[#009d84]">
                <div class="flex w-full justify-center">
                    <h1
                        class="heading-3 normal-case heading-sm-2 sm:normal-case heading-md-3 md:normal-case heading-lg-2 lg:normal-case absolute text-center ml-[auto] mr-[auto] mt-[30px] w-[80%] sm:w-[330px] md:mt-[40px] md:w-[650px] lg:w-[780px] xl:w-[800px]">
                        Want to sell your car? Get a True Cash Offer™ in&nbsp;minutes</h1>
                    <p
                        class="absolute text-center m-[auto] hidden w-[300px] sm:mt-[120px] sm:w-[430px] md:mt-[80px] md:block md:w-[650px] lg:mt-[100px] lg:w-[625px] xl:mt-[100px] xl:w-[800px]">
                        Answer a few questions about your vehicle, and then connect with one of thousands of Certified
                        Dealers who can pay you directly for your used car.</p>
                </div>
                <div class="picture-container picture-container-block bottom-[-10px] md:hidden"
                    style="padding-bottom: 89.0909%;"><img class="picture-block" sizes="40px"
                        src="{{asset('assets/_next/static/images/landing-banner-mobile-50263f3c1b0d3c1a78b0083071d57fdf.png')}}?auto=format&amp;h=53.45454545454545&amp;w=60"
                        srcset="{{asset('assets/_next/static/images/landing-banner-mobile-50263f3c1b0d3c1a78b0083071d57fdf.png')}}?auto=format&amp;h=53.45454545454545&amp;w=60 60w, {{asset('assets/_next/static/images/landing-banner-mobile-50263f3c1b0d3c1a78b0083071d57fdf.png')}}?auto=format&amp;h=80.18181818181817&amp;w=90 90w"
                        alt="" role="presentation"></div>
                <div class="flex w-full justify-between absolute bottom-[-14px] max-md:hidden">
                    <div class="picture-container ml-0" style="padding-bottom: 0px; width: 393px; height: 350px;"><img
                            class="picture-inner"
                            src="{{asset('assets/_next/static/images/landing-banner-left-ce0266be574488d26c94c17fe9f4d707.png')}}?auto=format&amp;h=350&amp;w=393"
                            srcset="{{asset('assets/_next/static/images/landing-banner-left-ce0266be574488d26c94c17fe9f4d707.png')}}?auto=format&amp;h=350&amp;w=393 1x, {{asset('assets/_next/static/images/landing-banner-left-ce0266be574488d26c94c17fe9f4d707.png')}}?auto=format&amp;h=700&amp;w=786 2x"
                            alt="" role="presentation"></div>
                    <div class="picture-container mr-0" style="padding-bottom: 0px; width: 393px; height: 350px;"><img
                            class="picture-inner"
                            src="{{asset('assets/_next/static/images/landing-banner-right-96962e60abbadac66ef7ef659cf10de6.png')}}?auto=format&amp;h=350&amp;w=393"
                            srcset="{{asset('assets/_next/static/images/landing-banner-right-96962e60abbadac66ef7ef659cf10de6.png')}}?auto=format&amp;h=350&amp;w=393 1x, {{asset('assets/_next/static/images/landing-banner-right-96962e60abbadac66ef7ef659cf10de6.png')}}?auto=format&amp;h=700&amp;w=786 2x"
                            alt="" role="presentation"></div>
                </div>
            </div>
        </div>
        <div class="container flex flex-col items-center px-0 md:mt-[-160px] md:max-w-[90%]">
            <form novalidate="" class="max-sm:w-full" data-gtm-form-interact-id="0">
                <div class="flex w-full justify-center">
                    <div class="z-[999] w-full rounded bg-white py-4 px-3 sm:py-5 sm:px-4 md:w-[466px] md:border">
                        <div>
                            <div data-test="sycVehicleIdentifier" data-reach-tabs="" data-orientation="horizontal">
                                <div role="tablist" aria-orientation="horizontal"
                                    class="switch-bar switch-bar-block my-2 mt-4 mb-4 flex justify-center"
                                    data-reach-tab-list=""><button aria-controls="tabs--27--panel--0" aria-selected="true"
                                        role="tab" tabindex="0" class="w-full switch" data-test="nav"
                                        data-test-item="licensePlate" data-reach-tab="" data-orientation="horizontal"
                                        id="tabs--27--tab--0" type="button" data-selected="">
                                        <p class="text-xs md:text-base">License Plate</p>
                                    </button><button aria-controls="tabs--27--panel--1" aria-selected="false" role="tab"
                                        tabindex="-1" class="w-full switch" data-test="nav" data-test-item="vin"
                                        data-reach-tab="" data-orientation="horizontal" id="tabs--27--tab--1"
                                        type="button">
                                        <p class="text-xs md:text-base">VIN</p>
                                    </button></div>
                                <div data-reach-tab-panels="">
                                    <div aria-labelledby="tabs--27--tab--0" role="tabpanel" tabindex="0"
                                        data-reach-tab-panel="" id="tabs--27--panel--0">
                                        <div class="row" data-test="sycLicensePlateForm">
                                            <div class="col-12 col-md-8">
                                                <div class="field-container-challenger py-1">
                                                    <div class="field-wrapper-challenger field-label-padding-challenger">
                                                        <div class="field-content-row">
                                                            <div class="field-input-label-challenger"><input
                                                                    id="sycLicensePlate" class="form-control-challenger"
                                                                    aria-label="Enter License Plate" placeholder=" "
                                                                    data-test="sycLicensePlateNumberField" value="">
                                                                <div class="field-label-text-challenger"
                                                                    data-test="fieldLabel"><label for="sycLicensePlate"
                                                                        data-ignore-contrast="true">Enter License
                                                                        Plate</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="field-message-challenger">
                                                            <div class="field-message-text-challenger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="field-container-challenger py-1">
                                                    <div class="field-wrapper-challenger field-label-padding-challenger">
                                                        <div class="field-content-row field-with-suffix">
                                                            <div class="field-input-label-challenger input-label-select">
                                                                <select required="" aria-label="State"
                                                                    class="form-select-element-challenger" id="state"
                                                                    data-test="sycStateSelectField">
                                                                    <option disabled="" value="">State</option>
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="CA">California</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="DC">District of Columbia</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                    <option value="HI">Hawaii</option>
                                                                    <option value="ID">Idaho</option>
                                                                    <option value="IL">Illinois</option>
                                                                    <option value="IN">Indiana</option>
                                                                    <option value="IA">Iowa</option>
                                                                    <option value="KS">Kansas</option>
                                                                    <option value="KY">Kentucky</option>
                                                                    <option value="LA">Louisiana</option>
                                                                    <option value="ME">Maine</option>
                                                                    <option value="MD">Maryland</option>
                                                                    <option value="MA">Massachusetts</option>
                                                                    <option value="MI">Michigan</option>
                                                                    <option value="MN">Minnesota</option>
                                                                    <option value="MS">Mississippi</option>
                                                                    <option value="MO">Missouri</option>
                                                                    <option value="MT">Montana</option>
                                                                    <option value="NE">Nebraska</option>
                                                                    <option value="NV">Nevada</option>
                                                                    <option value="NH">New Hampshire</option>
                                                                    <option value="NJ">New Jersey</option>
                                                                    <option value="NM">New Mexico</option>
                                                                    <option value="NY">New York</option>
                                                                    <option value="NC">North Carolina</option>
                                                                    <option value="ND">North Dakota</option>
                                                                    <option value="OH">Ohio</option>
                                                                    <option value="OK">Oklahoma</option>
                                                                    <option value="OR">Oregon</option>
                                                                    <option value="PA">Pennsylvania</option>
                                                                    <option value="RI">Rhode Island</option>
                                                                    <option value="SC">South Carolina</option>
                                                                    <option value="SD">South Dakota</option>
                                                                    <option value="TN">Tennessee</option>
                                                                    <option value="TX">Texas</option>
                                                                    <option value="UT">Utah</option>
                                                                    <option value="VT">Vermont</option>
                                                                    <option value="VA">Virginia</option>
                                                                    <option value="WA">Washington</option>
                                                                    <option value="WV">West Virginia</option>
                                                                    <option value="WI">Wisconsin</option>
                                                                    <option value="WY">Wyoming</option>
                                                                </select>
                                                                <div class="field-label-text-challenger"
                                                                    data-test="fieldLabel"><label for="state"
                                                                        data-ignore-contrast="true">State</label></div>
                                                            </div>
                                                            <div
                                                                class="field-addon-challenger field-addon-challenger-suffix">
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
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="field-container-challenger py-1">
                                                    <div class="field-wrapper-challenger field-label-padding-challenger">
                                                        <div class="field-content-row">
                                                            <div class="field-input-label-challenger"><input
                                                                    id="sycPostalCode" class="form-control-challenger"
                                                                    aria-label="Zip Code" placeholder=" "
                                                                    data-test="sycPostalCodeField" value="">
                                                                <div class="field-label-text-challenger"
                                                                    data-test="fieldLabel"><label for="sycPostalCode"
                                                                        data-ignore-contrast="true">Zip Code</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="field-message-challenger">
                                                            <div class="field-message-text-challenger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div aria-labelledby="tabs--27--tab--1" role="tabpanel" tabindex="-1"
                                        data-reach-tab-panel="" id="tabs--27--panel--1" hidden=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 justify-center md:mt-4"><button type="submit" data-ignore-contrast="true"
                                data-loading="false" data-test="sycSubmitButton" class="w-full btn btn-primary btn-md">
                                <div class="btn-inner btn-fade" style="opacity: 1;">Get Started</div>
                            </button></div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="text-center">
                                    <p class="pb-2">Is this vehicle a lease?</p><button type="button"
                                        class="link-button">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="mt-5 md:mt-6 lg:mt-7">
                <h2 class="heading-2 normal-case text-center">How It Works</h2>
                <div class="row md:mt-5">
                    <div class="flex justify-center col-12 col-md-4">
                        <div
                            class="media media-vertical text-center flex-col items-center benefits-item-container mt-4 max-w-[300px] md:mt-0 md:px-1 lg:px-3">
                            <div class="heading-base rounded-full border bg-dark">
                                <div class="flex items-center justify-center text-white h-[35px] w-[35px]">1</div>
                            </div>
                            <div class=" benefits-item-block">
                                <div class="heading-4 normal-case mb-1" data-test="benefitsItemHeading">Get an
                                    Estimate&nbsp;Fast</div>
                                <p>Enter your car’s information and instantly get a value estimate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center col-12 col-md-4">
                        <div
                            class="media media-vertical text-center flex-col items-center benefits-item-container mt-4 max-w-[300px] md:mt-0 md:px-1 lg:px-3">
                            <div class="heading-base rounded-full border bg-dark">
                                <div class="flex items-center justify-center text-white h-[35px] w-[35px]">2</div>
                            </div>
                            <div class=" benefits-item-block">
                                <div class="heading-4 normal-case mb-1" data-test="benefitsItemHeading">Fine-Tune Your
                                    Value</div>
                                <p>See immediately how features like color and mileage affect your car’s value.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center col-12 col-md-4">
                        <div
                            class="media media-vertical text-center flex-col items-center benefits-item-container mt-4 max-w-[300px] md:mt-0 md:px-1 lg:px-3">
                            <div class="heading-base rounded-full border bg-dark">
                                <div class="flex items-center justify-center text-white h-[35px] w-[35px]">3</div>
                            </div>
                            <div class=" benefits-item-block">
                                <div class="heading-4 normal-case mb-1" data-test="benefitsItemHeading">Get Your
                                    TrueTrade™&nbsp;Offer</div>
                                <p>Ready to sell? Get an offer from a local dealer today.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 lg:mt-7">
            <h2 class="heading-2 normal-case heading-md-2 md:normal-case mb-4 px-2 text-center md:px-0">Benefits of Getting
                a TrueTrade™&nbsp;Offer</h2>
            <div class="">
                <div class="container container-max-width-2">
                    <div class="row py-2 px-1 md:py-3 md:px-0">
                        <div class="py-4 col-12 col-md-6">
                            <h3 class="heading-3 normal-case heading-md-2 md:normal-case mb-2">Quick and Easy&nbsp;Process
                            </h3>
                            <p>We only ask questions that impact your car's value, so you can get to a real cash offer in
                                minutes.</p>
                        </div>
                        <div class="flex justify-center items-center order-last col-12 col-md-6">
                            <div class="img-container md:mb-4" style="height: 156px; padding-bottom: 0px; width: 234px;">
                                <img src="{{asset('assets/_next/static/images/benefit1-ff034ff92acb2069846e26e28c353a43.svg')}}"
                                    alt="" role="presentation" loading="auto" class="img-inner img-contain"
                                    style="background-image: url({{asset('assets/_next/static/images/benefit1-ff034ff92acb2069846e26e28c353a43.svg')}});">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#f8f8f8]">
                <div class="container container-max-width-2">
                    <div class="row py-2 px-1 md:py-3 md:px-0">
                        <div class="py-4 col-12 col-md-6">
                            <h3 class="heading-3 normal-case heading-md-2 md:normal-case mb-2">Total Transparency</h3>
                            <p>Quickly see how factors like mileage, color, and options affect your car's value. Have more
                                questions? A Certified Dealer will explain in person everything that goes into your car's
                                valuation.</p>
                        </div>
                        <div class="flex justify-center items-center order-first col-12 col-md-6">
                            <div class="img-container md:mb-4" style="height: 156px; padding-bottom: 0px; width: 234px;">
                                <img src="{{asset('assets/_next/static/images/benefit2-7e22f53d4b34f64bd51ec9d53e143468.svg')}}"
                                    alt="" role="presentation" loading="auto" class="img-inner img-contain"
                                    style="background-image: url({{asset('assets/_next/static/images/benefit2-7e22f53d4b34f64bd51ec9d53e143468.svg')}});">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="container container-max-width-2">
                    <div class="row py-2 px-1 md:py-3 md:px-0">
                        <div class="py-4 col-12 col-md-6">
                            <h3 class="heading-3 normal-case heading-md-2 md:normal-case mb-2">Get Paid</h3>
                            <p>A TrueTrade™ Offer means you get a check directly from a Certified Dealer. Private party
                                sales, on the other hand, could cost you additional time and money.</p>
                        </div>
                        <div class="flex justify-center items-center order-last col-12 col-md-6">
                            <div class="img-container md:mb-4" style="height: 156px; padding-bottom: 0px; width: 234px;">
                                <img src="{{asset('assets/_next/static/images/benefit3-875600fcb1dd2a6dac97434e22cae400.svg')}}"
                                    alt="" role="presentation" loading="auto" class="img-inner img-contain"
                                    style="background-image: url({{asset('assets/_next/static/images/benefit3-875600fcb1dd2a6dac97434e22cae400.svg')}});">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#f8f8f8]">
                <div class="container container-max-width-2">
                    <div class="row py-2 px-1 md:py-3 md:px-0">
                        <div class="py-4 col-12 col-md-6">
                            <h3 class="heading-3 normal-case heading-md-2 md:normal-case mb-2">Locked-In Price</h3>
                            <p>Not ready to sell today? No worries. Your TrueTrade™ Offer is good for three days at a
                                Certified Dealer.</p>
                        </div>
                        <div class="flex justify-center items-center order-first col-12 col-md-6">
                            <div class="img-container md:mb-4" style="height: 156px; padding-bottom: 0px; width: 234px;">
                                <img src="{{asset('assets/_next/static/images/benefit4-638e0bb6721a6e102ff43d385bf280bc.svg')}}"
                                    alt="" role="presentation" loading="auto" class="img-inner img-contain"
                                    style="background-image: url({{asset('assets/_next/static/images/benefit4-638e0bb6721a6e102ff43d385bf280bc.svg')}});">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="my-4 px-1 md:px-0 lg:my-6">
                <h2 class="heading-2 normal-case text-center">Selling Your Car</h2>
                <div class="mb-4 text-center md:mt-3 md:mb-6">
                    <p>Time to part ways with your car? Here are a few things you’ll want to know as you’re getting ready to
                        sell.</p>
                </div>
                <div class="mb-6">
                    <h3 class="heading-3 normal-case pb-3">Time Commitment</h3>
                    <div>
                        <p>First, think about how much time you want to dedicate to selling your car. TrueCar lets you get a
                            True Cash Offer for your car in minutes. Answer a few questions to get an offer on the spot.
                            From there, you can take your offer to a Certified Dealer to cash out. Just looking for an
                            estimate? Entering your car’s make and model will generate a price range, so you know what to
                            expect when you decide to sell.</p>
                    </div>
                </div>
                <div class="mb-6">
                    <h3 class="heading-3 normal-case pb-3">Determining Value</h3>
                    <div>
                        <div>
                            <p class="pb-3">The condition of your vehicle, plus specific information about trim and
                                modifications, will help you determine its value.</p>
                            <p class="pb-3">First, let’s assess your car’s condition.</p>
                            <div class="pl-2">
                                <ul class="list-disc pb-3">
                                    <li>Does it have dents and scrapes?</li>
                                    <li>Is the interior worn?</li>
                                    <li>Are the tires and brakes in good condition?</li>
                                    <li>Has it been in an accident?</li>
                                    <li>Is there any rust?</li>
                                </ul>
                            </div>
                            <p class="pb-3">This list is not exhaustive, but it should give you an idea of the types of
                                items you’ll want to look at to assess the condition properly. Next, let’s get into some of
                                your car’s specifics.</p>
                            <div class="pl-2">
                                <ul class="list-disc">
                                    <li>What is the trim?</li>
                                    <li>Does it have a sunroof or touch screen infotainment system?</li>
                                    <li>Did you make after-factory modifications?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <h3 class="heading-3 normal-case pb-3">Improving Value</h3>
                    <div>
                        <p class="pb-3">Wondering how you can get more money for your vehicle? Try improving your car’s
                            appearance. Not only is the car’s exterior appearance the first thing potential buyers will see,
                            it also sets the tone for how well you’ve taken care of your vehicle overall, implying that the
                            vehicle’s maintenance will also be up to date. On the inside, make sure you treat the
                            leather/interior to help it look new, and fix scratches and cracks.</p>
                        <p>While regular service checks may not boost the value of your vehicle, they will help prevent your
                            car from accelerated depreciation. You can buy a service plan through your dealer when you
                            purchase a vehicle, and in some cases, you can spread out these costs over the life of your
                            loan. If this helps motivate you to get your car in for service, it can be a good investment.
                        </p>
                    </div>
                </div>
                <div class="mb-6">
                    <h3 class="heading-3 normal-case pb-3">Dealership versus Private&nbsp;Sale</h3>
                    <div>
                        <div>
                            <p class="pb-3">There are several factors to consider when deciding whether to sell your car
                                to a dealer or a private party:</p>
                            <div>
                                <p class="pb-1"><span class="font-bold">Ownership</span> - Do you own your car outright?
                                    If not, what do you owe? Are you leasing? If you owe, you’ll likely need to pay off the
                                    balance before selling it to a private party. If you sell it to a dealership, you can
                                    let them handle the paperwork instead.</p>
                                <p class="pb-1"><span class="font-bold">Time</span> - Selling to a private party will
                                    invariably take more time. You’ll have to spruce up your ride, take some pictures, find
                                    places to post ads, and then go through the process of meeting buyers. Selling your car
                                    to a dealership typically means much less hassle.</p>
                                <p class="pb-1"><span class="font-bold">Price</span> - If your car has good trade-in
                                    value (a model that’s in demand, has low mileage, or is in good condition) and you have
                                    the time and patience to handle buyers, selling to a private party might be the way to
                                    go. If you have a car of lesser value and don’t want the hassle, you may want to simply
                                    sell it to a dealer and be done with it.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <h3 class="heading-3 normal-case pb-3">Gather the Paperwork</h3>
                    <div>
                        <p class="pb-3">Again, if you’re selling to a private party, make sure you have the right
                            paperwork. Here are some items you may need:</p>
                        <div class="pl-2 pb-3">
                            <ul class="list-disc">
                                <li>Vehicle Registration</li>
                                <li>Warranty information</li>
                                <li>Bill of sale</li>
                            </ul>
                        </div>
                        <p>To understand which forms you’ll need to complete a car sale in your state, check with your
                            nearest DMV, or contact AAA if you’re a member. Also, it’s a good idea to have your maintenance
                            records on hand, in case you need to refer to them.</p>
                    </div>
                </div>
            </div>
            <div class="mt-3 mb-6 md:mt-4 lg:mt-5">
                <h2 class="heading-2 normal-case mb-3">Car Selling FAQs</h2>
                <div class="mr-3 border-t border-b md:mt-5">
                    <div class="expandable-list-item"><button
                            class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                            aria-expanded="false">
                            <div class="heading-4 normal-case w-full px-3 py-3">What paperwork is needed to sell
                                my&nbsp;car?</div><span class="ml-3 whitespace-nowrap">
                                <div style="position: static;"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down"
                                        style="width: 21px; height: 21px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></div>
                            </span>
                        </button>
                        <div class="expandable-list-item-collapse border-t collapse">
                            <div class="px-3 py-3 expandable-list-item-shadow">
                                <div>Usually, you will need the current registration for the vehicle signed by all
                                    registered owners, along with the car title and your ID or driver’s license. You may
                                    also need to provide warranty information. To complete your sale transaction, you will
                                    likely need to complete a bill of sale. Check with your local DMV to confirm what you’ll
                                    need in your state.</div>
                            </div>
                        </div>
                    </div>
                    <div class="expandable-list-item"><button
                            class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                            aria-expanded="false">
                            <div class="heading-4 normal-case w-full px-3 py-3">Can I sell my car if I still owe money
                                on&nbsp;it?</div><span class="ml-3 whitespace-nowrap">
                                <div style="position: static;"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down"
                                        style="width: 21px; height: 21px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></div>
                            </span>
                        </button>
                        <div class="expandable-list-item-collapse border-t collapse">
                            <div class="px-3 py-3 expandable-list-item-shadow">
                                <div>Yes. Before going to the dealership, contact the lienholder (usually a bank or finance
                                    company) to get a payoff quote for the vehicle, and note the payee address for the
                                    dealership to send the payoff amount to.</div>
                            </div>
                        </div>
                    </div>
                    <div class="expandable-list-item"><button
                            class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                            aria-expanded="false">
                            <div class="heading-4 normal-case w-full px-3 py-3">Can I sell my car if I am&nbsp;leasing?
                            </div><span class="ml-3 whitespace-nowrap">
                                <div style="position: static;"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down"
                                        style="width: 21px; height: 21px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></div>
                            </span>
                        </button>
                        <div class="expandable-list-item-collapse border-t collapse">
                            <div class="px-3 py-3 expandable-list-item-shadow">
                                <div>
                                    <p class="pb-3">Yes, but you’ll need to review your lease contract to determine the
                                        buyout price. Just like when you owe money on a loan, the dealer may offer more than
                                        what you owe, but if they don’t, you’ll be responsible for paying the difference.
                                    </p>
                                    <p class="pb-3">If you have a lease and want to sell or trade your vehicle, you’ll
                                        probably need to complete the following steps:</p>
                                    <div class="pl-2 pb-3">
                                        <ul class="list-disc">
                                            <li>Review your lease to understand the terms of buying your vehicle early.</li>
                                            <li>Work with your leasing company to buy your vehicle.</li>
                                            <li>Get a new vehicle title in your name, showing that you are the sole owner.
                                            </li>
                                            <li>Visit the TrueCar site to get an instant True Cash Offer for your vehicle.
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="pb-1">This is for informational purposes only, and other terms and
                                        conditions may apply.</p>
                                    <p>Questions? Reach out to the dealer who leased you the vehicle — they’ll be able to
                                        help you with this process.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="expandable-list-item"><button
                            class="flex flex-nowrap justify-between expandable-list-item-button items-center"
                            aria-expanded="false">
                            <div class="heading-4 normal-case w-full px-3 py-3">What are the benefits of selling
                                with&nbsp;TrueCar?</div><span class="ml-3 whitespace-nowrap">
                                <div style="position: static;"><svg viewBox="0 0 24 24"
                                        class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down"
                                        style="width: 21px; height: 21px;">
                                        <use href="#keyboard_arrow_down"></use>
                                    </svg></div>
                            </span>
                        </button>
                        <div class="expandable-list-item-collapse border-t collapse">
                            <div class="px-3 py-3 expandable-list-item-shadow">
                                <div>Selling your car through TrueCar’s platform means you can get an instant True Cash
                                    Offer from one of our thousands of Certified Dealers without having to advertise your
                                    car, meet up with strangers, or deal with paperwork on your own.</div>
                            </div>
                        </div>
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
                                                href="/used-cars-for-sale/listings/ford/escape/">Used Ford Escape</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/ford/explorer/">Used Ford Explorer</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/ford/f-150/">Used Ford F-150</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/honda/accord/">Used Honda Accord</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/honda/civic/">Used Honda Civic</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/honda/cr-v/">Used Honda CR-V</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/honda/pilot/">Used Honda Pilot</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/hyundai/elantra/">Used Hyundai
                                                Elantra</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/hyundai/kona/">Used Hyundai Kona</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/hyundai/santa-fe/">Used Hyundai Santa
                                                Fe</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/jeep/cherokee/">Used Jeep Cherokee</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/jeep/grand-cherokee/">Used Jeep Grand
                                                Cherokee</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/jeep/renegade/">Used Jeep Renegade</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/jeep/wrangler/">Used Jeep Wrangler</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/kia/sorento/">Used Kia Sorento</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/kia/stinger/">Used Kia Stinger</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/mazda/cx-5/">Used Mazda CX-5</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/nissan/rogue/">Used Nissan Rogue</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/subaru/ascent/">Used Subaru Ascent</a>
                                        </li>
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
                                                href="/used-cars-for-sale/listings/subaru/outback/">Used Subaru Outback</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/used-cars-for-sale/listings/toyota/4runner/">Used Toyota 4Runner</a>
                                        </li>
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
                                                href="/new-cars-for-sale/listings/ford/escape/">New Ford Escape</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/ford/explorer/">New Ford Explorer</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/ford/f-150/">New Ford F-150</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/honda/accord/">New Honda Accord</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/honda/civic/">New Honda Civic</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/honda/cr-v/">New Honda CR-V</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/honda/pilot/">New Honda Pilot</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/hyundai/elantra/">New Hyundai Elantra</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/hyundai/kona/">New Hyundai Kona</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/hyundai/santa-fe/">New Hyundai Santa
                                                Fe</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/jeep/cherokee/">New Jeep Cherokee</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/jeep/grand-cherokee/">New Jeep Grand
                                                Cherokee</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/jeep/renegade/">New Jeep Renegade</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/jeep/wrangler/">New Jeep Wrangler</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/kia/sorento/">New Kia Sorento</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/kia/stinger/">New Kia Stinger</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/mazda/cx-5/">New Mazda CX-5</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/nissan/rogue/">New Nissan Rogue</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/subaru/ascent/">New Subaru Ascent</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/subaru/crosstrek/">New Subaru
                                                Crosstrek</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/subaru/forester/">New Subaru Forester</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/subaru/outback/">New Subaru Outback</a>
                                        </li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/new-cars-for-sale/listings/toyota/4runner/">New Toyota 4Runner</a>
                                        </li>
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
                                                class="link-item-minimal no-underline" href="/overview/ford/edge/">2024
                                                Ford Edge</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/overview/ford/escape/">2024
                                                Ford Escape</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/overview/ford/explorer/">2025 Ford Explorer</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/overview/ford/f-150/">2024
                                                Ford F-150</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/overview/honda/accord/">2024
                                                Honda Accord</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/overview/honda/civic/">2024
                                                Honda Civic</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/overview/honda/cr-v/">2024
                                                Honda CR-V</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/overview/honda/pilot/">2025
                                                Honda Pilot</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/overview/hyundai/elantra/">2024 Hyundai Elantra</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/overview/hyundai/kona/">2024
                                                Hyundai Kona</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/overview/hyundai/santa-fe/">2024 Hyundai Santa Fe</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/overview/jeep/cherokee/">2023 Jeep Cherokee</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/overview/jeep/grand-cherokee/">2024 Jeep Grand Cherokee</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/overview/jeep/renegade/">2023 Jeep Renegade</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/overview/jeep/wrangler/">2024 Jeep Wrangler</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/overview/kia/sorento/">2024
                                                Kia Sorento</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/overview/kia/stinger/">2023
                                                Kia Stinger</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/overview/mazda/cx-5/">2025
                                                Mazda CX-5</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/overview/nissan/rogue/">2024
                                                Nissan Rogue</a></li>
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
                                                class="link-item-minimal no-underline" href="/sitemap/state/tx/">Texas
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/fl/">Florida
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/ny/">New York
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/sitemap/state/pa/">Pennsylvania Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/il/">Illinois
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/oh/">Ohio
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/ga/">Georgia
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/nc/">North
                                                Carolina Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/mi/">Michigan
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/nj/">New
                                                Jersey Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/va/">Virginia
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/sitemap/state/wa/">Washington Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/az/">Arizona
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/sitemap/state/ma/">Massachusetts Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/tn/">Tennessee
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/in/">Indiana
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/mo/">Missouri
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/md/">Maryland
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/wi/">Wisconsin
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/co/">Colorado
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/mn/">Minnesota
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/sc/">South
                                                Carolina Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/al/">Alabama
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/la/">Louisiana
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/ky/">Kentucky
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/or/">Oregon
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/ok/">Oklahoma
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/sitemap/state/ct/">Connecticut Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/ut/">Utah
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/ia/">Iowa
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/nv/">Nevada
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/ar/">Arkansas
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/sitemap/state/ms/">Mississippi Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/ks/">Kansas
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/nm/">New
                                                Mexico Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/sitemap/state/ne/">Nebraska Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/wv/">West
                                                Virginia Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/id/">Idaho
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/hi/">Hawaii
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/nh/">New
                                                Hampshire Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/me/">Maine
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/mt/">Montana
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/ri/">Rhode
                                                Island Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/sitemap/state/de/">Delaware Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/sd/">South
                                                Dakota Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/nd/">North
                                                Dakota Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/ak/">Alaska
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline"
                                                href="/sitemap/state/dc/">District of Columbia Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/vt/">Vermont
                                                Inventory</a></li>
                                        <li class=""><a aria-current="false" aria-disabled="false"
                                                class="link-item-minimal no-underline" href="/sitemap/state/wy/">Wyoming
                                                Inventory</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
