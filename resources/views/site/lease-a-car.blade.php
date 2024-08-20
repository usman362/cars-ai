@extends('site.layouts.app')
@section('content')
    
<main id="mainContent" style="margin-top:60px" class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
    <div class="bg-[image:var(--image-url-sm)] bg-[size:291px] bg-[position:100%_90%] bg-no-repeat pb-[190px] md:pb-[60px] lg:bg-[size:20%] xl:pb-0 xl:[position:100%_80%]" data-test="homeLeasingLandingHero" style="--image-url-sm: url({{asset('assets/_next/static/images/hand-graph@2x-7c93209dca4d0b53dc22d4c746b690ac.png')}}); background-size: 291px;">
        <div class="container container-max-width-1 py-5 md:py-7">
            <h1 class="heading-3 normal-case heading-sm-3 sm:normal-case heading-lg-1 lg:normal-case mb-5 text-center" data-test="homeLeasingLandingHeroHeader">Research and compare lease deals for new&nbsp;cars</h1>
            <div data-test="homeLeasingLandingHeroForm">
                <div class="flex flex-row justify-center">
                    <div class="field-container-challenger mb-2 w-[100%] max-w-[100%] md:w-[330px] lg:w-[414px]">
                        <div class="field-wrapper-challenger field-label-padding-challenger">
                            <div class="field-content-row field-with-suffix">
                                <div class="field-input-label-challenger input-label-select"><select required="" aria-label="Vehicle Make" class="form-select-element-challenger" data-test="leasingPageSelectMake">
                                        <option disabled="" value="">Select Make</option>
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
                                    <div class="field-label-text-challenger" data-test="fieldLabel"><label data-ignore-contrast="true">Vehicle Make</label></div>
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
                </div>
                <div class="flex flex-row justify-center">
                    <div class="field-container-challenger mb-2 w-[100%] max-w-[100%] md:w-[330px] lg:w-[414px]">
                        <div class="field-wrapper-challenger field-label-padding-challenger">
                            <div class="field-content-row field-with-suffix">
                                <div class="field-input-label-challenger input-label-select"><select required="" aria-label="Vehicle Model" class="form-select-element-challenger" data-test="leasingPageSelectModel">
                                        <option disabled="" value="">Select Model</option>
                                        <option value="giulia">Giulia</option>
                                        <option value="stelvio">Stelvio</option>
                                        <option value="tonale">Tonale</option>
                                    </select>
                                    <div class="field-label-text-challenger" data-test="fieldLabel"><label data-ignore-contrast="true">Vehicle Model</label></div>
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
                </div>
                <div class="flex flex-row justify-center"><button type="submit" data-ignore-contrast="true" data-loading="false" data-test="leasingPageViewCarsButton" class="w-[100%] md:w-[330px] lg:w-[414px] btn btn-primary btn-md"><span class="btn-inner">View Lease Deals</span></button></div>
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div class="container container-max-width-1 py-6">
            <h1 class="heading-2 normal-case mb-5 text-center">Why Lease with&nbsp;TrueCar?</h1>
            <div class="row row-card">
                <div class="col-12 col-md-4">
                    <div class="media media-md-vertical md:text-center md:flex-col md:items-center benefits-item-container mb-4"><img src="{{asset('assets/_next/static/images/iconTopDealers-e04aed81af9f7a52344b4404a28113b7.svg')}}" class="h-[86px] w-[86px] object-contain" alt="Top Dealers">
                        <div class=" benefits-item-block">
                            <div class="heading-4 normal-case mb-1" data-test="benefitsItemHeading">Top Dealers</div>
                            <p>TrueCar Certified Dealers compete for your business by providing discounted pricing on in-stock inventory.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="media media-md-vertical md:text-center md:flex-col md:items-center benefits-item-container mb-4"><img src="{{asset('assets/_next/static/images/iconDiscounted-5fdafc9afcb77d363012f4a7c04ff531.svg')}}" class="h-[86px] w-[86px] object-contain" alt="Discounted Pricing">
                        <div class=" benefits-item-block">
                            <div class="heading-4 normal-case mb-1" data-test="benefitsItemHeading">Discounted Pricing</div>
                            <p>View local inventory from the comfort of home and get access to guaranteed savings on the car of your choice.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="media media-md-vertical md:text-center md:flex-col md:items-center benefits-item-container mb-4"><img src="{{asset('assets/_next/static/images/iconPayments-62350181fa42bb7cd2f6ec1ea9e72667.svg')}}" class="h-[86px] w-[86px] object-contain" alt="Lower Payments">
                        <div class=" benefits-item-block">
                            <div class="heading-4 normal-case mb-1" data-test="benefitsItemHeading">Lower Payments</div>
                            <p>Get discounted pricing when you shop for a car or truck using TrueCar and save on your lease payment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-test="leaseLandingEducationModules">
        <div class="container container-max-width-1 pt-6 pb-7" data-test="leaseLandingEducationSectionOne">
            <h2 class="heading-2 normal-case pb-3 text-center" data-test="leaseLandingEducationSectionOneHeader">How Does Leasing&nbsp;Work?</h2>
            <div class="row">
                <div class="pt-3 pl-3 pb-5 col-12 col-md-6">
                    <p class="mb-5">Leasing a vehicle is essentially entering into a long term rental agreement for that vehicle. Unlike a traditional car purchase, you don’t actually own the vehicle. Instead, a leasing company purchases the vehicle from the dealer on your behalf and then you make monthly payments to the leasing company for the duration of your lease. Some leases however, do provide the option to purchase the vehicle at the end of the lease.</p>
                    <div class="heading-4 normal-case pb-3">Your lease payments are paying&nbsp;for:</div>
                    <ul>
                        <li class="flex items-center pb-3"><span class="mr-3 text-center inline-flex h-[70px] min-h-[70px] w-[70px] min-w-[70px] items-center justify-center rounded-[50%] text-[26px] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)]">
                                <div class="img-container rounded-full" style="height: 60px; padding-bottom: 0px; width: 60px;"><img src="{{asset('assets/_next/static/images/graph_decrease-36c9e60f2384a69306fc1a661b93bccc.jpeg')}}" alt="60x60" loading="auto" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/graph_decrease-36c9e60f2384a69306fc1a661b93bccc.jpeg')}});"></div>
                            </span>The depreciation of the vehicle during the time you are leasing it</li>
                        <li class="flex items-center pb-3"><span class="mr-3 text-center inline-flex h-[70px] min-h-[70px] w-[70px] min-w-[70px] items-center justify-center rounded-[50%] text-[26px] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)]">
                                <div class="img-container rounded-full" style="height: 60px; padding-bottom: 0px; width: 60px;"><img src="{{asset('assets/_next/static/images/money-1708b7935610af6e744d1defaa04acc6.jpeg')}}" alt="60x60" loading="auto" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/money-1708b7935610af6e744d1defaa04acc6.jpeg')}});"></div>
                            </span>The finance charge which is the cost of borrowing money from the leasing company</li>
                        <li class="flex items-center pb-3"><span class="mr-3 text-center inline-flex h-[70px] min-h-[70px] w-[70px] min-w-[70px] items-center justify-center rounded-[50%] text-[26px] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)]">
                                <div class="img-container rounded-full" style="height: 60px; padding-bottom: 0px; width: 60px;"><img src="{{asset('assets/_next/static/images/hand_coin-9b9705f48710a9f20caa8a2fbfa8e094.jpeg')}}" alt="60x60" loading="auto" class="img-inner img-contain" style="background-image: url({{asset('assets/_next/static/images/hand_coin-9b9705f48710a9f20caa8a2fbfa8e094.jpeg')}});"></div>
                            </span>Taxes and fees that you have chosen to capitalize (add to the total amount borrowed)</li>
                    </ul>
                </div>
                <div class="pt-3 pl-3 pb-5 col-12 col-md-6">
                    <div class="heading-4 normal-case pb-3">Similar to a short term car rental, there are rules that&nbsp;define:</div>
                    <ul>
                        <li class="flex items-center pb-3"><span class="mr-3 text-center inline-flex h-[70px] min-h-[70px] w-[70px] min-w-[70px] items-center justify-center rounded-[50%] text-[26px] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)]">1</span>How much you can drive, stated as annual miles (excess miles are charged at a specified rate)</li>
                        <li class="flex items-center pb-3"><span class="mr-3 text-center inline-flex h-[70px] min-h-[70px] w-[70px] min-w-[70px] items-center justify-center rounded-[50%] text-[26px] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)]">2</span>Types of damage that you may be liable for at the end of your lease</li>
                        <li class="flex items-center pb-3"><span class="mr-3 text-center inline-flex h-[70px] min-h-[70px] w-[70px] min-w-[70px] items-center justify-center rounded-[50%] text-[26px] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)]">3</span>The procedures and costs when you return the vehicle at the end of your lease</li>
                    </ul>
                    <div class="mt-3">Lease contracts are a commitment and ending them early can be difficult and expensive so it is important to consider your circumstances carefully before you decide.</div>
                </div>
            </div>
        </div>
        <div class="bg-light">
            <div class="container max-w-[970px] justify-between py-6" data-test="leaseLandingEducationSectionTwo">
                <h2 class="heading-2 normal-case pb-5 text-center" data-test="leaseLandingEducationSectionTwoHeader">Important Things to&nbsp;Consider</h2>
                <div class="col-xl-10 offset-xl-1">
                    <p class="pb-5 text-center">Depending on your circumstances and what is important to you, a lease could be a great option for your next vehicle. Below are some important factors that may influence your decision.</p>
                </div>
                <div class="col-xl-8 offset-xl-2">
                    <ul>
                        <li class="flex items-center pb-5"><span class="mr-3 inline-flex h-[72px] min-h-[72px] w-[72px] min-w-[72px] items-center justify-center rounded-full border text-center text-heading2">$</span>Monthly payments on leases are generally 20% - 30% cheaper than loans</li>
                        <li class="flex items-center pb-5"><svg viewBox="0 0 24 24" class="icon icon-fill-default icon-border-circle overflow-visible mr-3" aria-hidden="true" style="width: 72px; height: 72px; padding: 16.2px;">
                                <use href="#discount-available"></use>
                            </svg>You may be eligible for a tax break if you use the leased vehicle for business purposes</li>
                        <li class="flex items-center pb-5"><svg viewBox="0 0 24 24" class="icon icon-fill-default icon-border-circle overflow-visible mr-3" aria-hidden="true" style="width: 72px; height: 72px; padding: 16.2px;">
                                <use href="#directions_car"></use>
                            </svg> Easy to upgrade to the newest vehicle model every few years</li>
                        <li class="flex items-center pb-5"><svg viewBox="0 0 24 24" class="icon icon-fill-default icon-border-circle overflow-visible mr-3 " aria-hidden="true" style="width: 72px; height: 72px; padding: 16.2px;">
                                <use href="#assignment_turned_in"></use>
                            </svg>There are often fees charged if you drive more than your lease's mileage allowance</li>
                        <li class="flex items-center pb-5"><svg viewBox="0 0 24 24" class="icon icon-fill-default icon-border-circle overflow-visible mr-3 " aria-hidden="true" style="width: 72px; height: 72px; padding: 16.2px;">
                                <use href="#calendar_month"></use>
                            </svg>You will always have a car payment whereas with a loan you eventually pay it off</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="pt-4 pb-5 md:pt-5 md:pb-6">
        <div class="container container-max-width-1">
            <h2 class="heading-3 normal-case mb-3 text-center">Lease Deal FAQs</h2>
            <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                    <div class="heading-4 normal-case w-full px-3 py-3">
                        <h3 class="heading-4 normal-case">What is car&nbsp;leasing?</h3>
                    </div><span class="ml-3 whitespace-nowrap">
                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                <use href="#keyboard_arrow_down"></use>
                            </svg></div>
                    </span>
                </button>
                <div class="expandable-list-item-collapse border-t collapse">
                    <div class="px-3 py-3 expandable-list-item-shadow">
                        <div class="whitespace-pre-line">Car leasing is like renting a vehicle from a dealership. Instead of paying the full cost, a customer agrees to pay the dealership a specific amount per month for a set period of time, often 24 or 36 months. At the end of the lease, customers can either return the vehicle to the dealership or buy the car outright.</div>
                    </div>
                </div>
            </div>
            <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                    <div class="heading-4 normal-case w-full px-3 py-3">
                        <h3 class="heading-4 normal-case">What makes a good lease&nbsp;deal?</h3>
                    </div><span class="ml-3 whitespace-nowrap">
                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                <use href="#keyboard_arrow_down"></use>
                            </svg></div>
                    </span>
                </button>
                <div class="expandable-list-item-collapse border-t collapse">
                    <div class="px-3 py-3 expandable-list-item-shadow">
                        <div class="whitespace-pre-line">When leasing a car, the ultimate goal is to pay as little as possible over the life of the term, including the initial down payment. Typically, a shopper should look for a lease deal with a zero or near-zero down payment and the lowest monthly payment possible.</div>
                    </div>
                </div>
            </div>
            <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false">
                    <div class="heading-4 normal-case w-full px-3 py-3">
                        <h3 class="heading-4 normal-case">What else should be considered before signing a car&nbsp;lease?</h3>
                    </div><span class="ml-3 whitespace-nowrap">
                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                <use href="#keyboard_arrow_down"></use>
                            </svg></div>
                    </span>
                </button>
                <div class="expandable-list-item-collapse border-t collapse">
                    <div class="px-3 py-3 expandable-list-item-shadow">
                        <div class="whitespace-pre-line">Car leases are great for those who want a new vehicle every 2-3 years and don’t want to have to pay for the entire cost of a car. However, leases come with stipulations regarding how much you can drive the vehicle before turning it in. So if you’re someone who drives a lot, leasing may not be right for you.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-light">
        <div class="container py-5">
            <h2 class="heading-5 normal-case border-b border-b-[#ddd] pb-2-5">Top Lease Deals on&nbsp;TrueCar</h2>
            <div class="pt-2" data-test="homeLeasingTopLeaseLinks">
                <ul class="columns-1 sm:columns-2 md:columns-3 lg:columns-4">
                    <li class="truncate pt-2"><a href="/audi/q5/lease/">Audi Q5 Leases</a></li>
                    <li class="truncate pt-2"><a href="/bmw/x3/lease/">BMW X3 Leases</a></li>
                    <li class="truncate pt-2"><a href="/bmw/x5/lease/">BMW X5 Leases</a></li>
                    <li class="truncate pt-2"><a href="/ford/bronco/lease/">Ford Bronco Leases</a></li>
                    <li class="truncate pt-2"><a href="/ford/explorer/lease/">Ford Explorer Leases</a></li>
                    <li class="truncate pt-2"><a href="/ford/ranger/lease/">Ford Ranger Leases</a></li>
                    <li class="truncate pt-2"><a href="/honda/accord/lease/">Honda Accord Leases</a></li>
                    <li class="truncate pt-2"><a href="/honda/cr-v/lease/">Honda CR-V Leases</a></li>
                    <li class="truncate pt-2"><a href="/honda/civic/lease/">Honda Civic Leases</a></li>
                    <li class="truncate pt-2"><a href="/honda/pilot/lease/">Honda Pilot Leases</a></li>
                    <li class="truncate pt-2"><a href="/hyundai/palisade/lease/">Hyundai Palisade Leases</a></li>
                    <li class="truncate pt-2"><a href="/jeep/cherokee/lease/">Jeep Cherokee Leases</a></li>
                    <li class="truncate pt-2"><a href="/jeep/compass/lease/">Jeep Compass Leases</a></li>
                    <li class="truncate pt-2"><a href="/jeep/gladiator/lease/">Jeep Gladiator Leases</a></li>
                    <li class="truncate pt-2"><a href="/jeep/grand-cherokee/lease/">Jeep Grand Cherokee Leases</a></li>
                    <li class="truncate pt-2"><a href="/jeep/wrangler/lease/">Jeep Wrangler Leases</a></li>
                    <li class="truncate pt-2"><a href="/kia/telluride/lease/">Kia Telluride Leases</a></li>
                    <li class="truncate pt-2"><a href="/lexus/is/lease/">Lexus IS Leases</a></li>
                    <li class="truncate pt-2"><a href="/lincoln/aviator/lease/">Lincoln Aviator Leases</a></li>
                    <li class="truncate pt-2"><a href="/nissan/rogue/lease/">Nissan Rogue Leases</a></li>
                    <li class="truncate pt-2"><a href="/ram/1500/lease/">Ram 1500 Leases</a></li>
                    <li class="truncate pt-2"><a href="/toyota/highlander/lease/">Toyota Highlander Leases</a></li>
                    <li class="truncate pt-2"><a href="/toyota/rav4/lease/">Toyota RAV4 Leases</a></li>
                    <li class="truncate pt-2"><a href="/toyota/tacoma/lease/">Toyota Tacoma Leases</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="pt-4 md:pt-5">
        <div class="container">
            <section>
                <div class="py-5">
                    <div class="container">
                        <div class="grid grid-cols-1 gap-x-3 border-b md:grid-cols-2 md:border-0">
                            <div class="expandable-list-item border-t"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="seoLinkColumnHeading">
                                    <div class="heading-4 normal-case w-full px-3 py-3">Deals by Vehicle&nbsp;Type</div><span class="ml-3 whitespace-nowrap">
                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></div>
                                    </span>
                                </button>
                                <div class="expandable-list-item-collapse border-t collapse" style="">
                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                        <ul class="space-y-2">
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/convertibles/">Convertible Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/coupes/">Coupe Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/fuel-diesel/">Diesel Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/fuel-electric/">Electric Vehicle Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/hatchbacks/">Hatchback Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/fuel-hybrid/">Hybrid Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/luxury-cars/">Luxury Car Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/luxury-suvs/">Luxury SUV Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/suvs/">SUV Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/sedans/">Sedan Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/trucks/">Truck Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/vans/">Van Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/deals/wagons/">Wagon Deals</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="seoLinkColumnHeading">
                                    <div class="heading-4 normal-case w-full px-3 py-3">Deals by Make</div><span class="ml-3 whitespace-nowrap">
                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></div>
                                    </span>
                                </button>
                                <div class="expandable-list-item-collapse border-t collapse" style="">
                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                        <ul class="space-y-2">
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/acura/deals/">Acura Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/alfa-romeo/deals/">Alfa Romeo Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/aston-martin/deals/">Aston Martin Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/audi/deals/">Audi Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/bentley/deals/">Bentley Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/bmw/deals/">BMW Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/buick/deals/">Buick Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/cadillac/deals/">Cadillac Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/chevrolet/deals/">Chevrolet Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/chrysler/deals/">Chrysler Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/dodge/deals/">Dodge Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/ferrari/deals/">Ferrari Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/fiat/deals/">FIAT Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/ford/deals/">Ford Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/genesis/deals/">Genesis Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/gmc/deals/">GMC Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/honda/deals/">Honda Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/hyundai/deals/">Hyundai Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/infiniti/deals/">INFINITI Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/jaguar/deals/">Jaguar Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/jeep/deals/">Jeep Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/kia/deals/">Kia Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/lamborghini/deals/">Lamborghini Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/land-rover/deals/">Land Rover Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/lexus/deals/">Lexus Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/lincoln/deals/">Lincoln Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/lucid/deals/">Lucid Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/maserati/deals/">Maserati Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/mazda/deals/">Mazda Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/mclaren/deals/">McLaren Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/mercedes-benz/deals/">Mercedes-Benz Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/mini/deals/">MINI Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/mitsubishi/deals/">Mitsubishi Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/nissan/deals/">Nissan Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/polestar/deals/">Polestar Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/porsche/deals/">Porsche Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/ram/deals/">Ram Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/rivian/deals/">Rivian Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/rolls-royce/deals/">Rolls-Royce Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/subaru/deals/">Subaru Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/tesla/deals/">Tesla Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/toyota/deals/">Toyota Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/volkswagen/deals/">Volkswagen Deals</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/volvo/deals/">Volvo Deals</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item md:border-b"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="seoLinkColumnHeading">
                                    <div class="heading-4 normal-case w-full px-3 py-3">Vehicle Rankings</div><span class="ml-3 whitespace-nowrap">
                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></div>
                                    </span>
                                </button>
                                <div class="expandable-list-item-collapse border-t collapse" style="">
                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                        <ul class="space-y-2">
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/cars/">Best Cars</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/convertibles/">Best Convertibles</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/coupes/">Best Coupes</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/fuel-diesel/">Best Diesel Vehicles</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/fuel-electric/">Best Electric Vehicles</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/hatchbacks/">Best Hatchbacks</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/fuel-hybrid/">Best Hybrids</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/fuel-plug-in-hybrid/">Best Plug-In Hybrids</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/suvs/">Best SUVs</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/sedans/">Best Sedans</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/trucks/">Best Trucks</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/vans/">Best Vans</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/best-cars-trucks/wagons/">Best Wagons</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-list-item md:border-b"><button class="flex flex-nowrap justify-between expandable-list-item-button items-center" aria-expanded="false" data-test="seoLinkColumnHeading">
                                    <div class="heading-4 normal-case w-full px-3 py-3">Research Cars</div><span class="ml-3 whitespace-nowrap">
                                        <div style="position: static;"><svg viewBox="0 0 24 24" class="icon icon-fill-default my-3 mr-3" aria-hidden="true" data-test-item="down" style="width: 21px; height: 21px;">
                                                <use href="#keyboard_arrow_down"></use>
                                            </svg></div>
                                    </span>
                                </button>
                                <div class="expandable-list-item-collapse border-t collapse" style="">
                                    <div class="px-3 py-3 expandable-list-item-shadow">
                                        <ul class="space-y-2">
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/dodge/challenger/">2023 Dodge Challenger</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/ford/edge/">2024 Ford Edge</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/ford/escape/">2024 Ford Escape</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/ford/explorer/">2025 Ford Explorer</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/ford/f-150/">2024 Ford F-150</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/honda/accord/">2024 Honda Accord</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/honda/civic/">2024 Honda Civic</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/honda/cr-v/">2024 Honda CR-V</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/honda/pilot/">2025 Honda Pilot</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/hyundai/elantra/">2024 Hyundai Elantra</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/hyundai/kona/">2024 Hyundai Kona</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/hyundai/santa-fe/">2024 Hyundai Santa Fe</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/jeep/cherokee/">2023 Jeep Cherokee</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/jeep/grand-cherokee/">2024 Jeep Grand Cherokee</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/jeep/renegade/">2023 Jeep Renegade</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/jeep/wrangler/">2024 Jeep Wrangler</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/kia/sorento/">2024 Kia Sorento</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/kia/stinger/">2023 Kia Stinger</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/mazda/cx-5/">2025 Mazda CX-5</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/nissan/rogue/">2024 Nissan Rogue</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/subaru/ascent/">2024 Subaru Ascent</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/subaru/crosstrek/">2024 Subaru Crosstrek</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/subaru/forester/">2025 Subaru Forester</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/subaru/outback/">2024 Subaru Outback</a></li>
                                            <li class=""><a aria-current="false" aria-disabled="false" class="link-item-minimal no-underline" href="/overview/toyota/4runner/">2024 Toyota 4Runner</a></li>
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