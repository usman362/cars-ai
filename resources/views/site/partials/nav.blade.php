<header
role="banner"
class="absolute top-0 z-[1000] w-full border-b-0 transition-[background-color_1s_linear] sm:fixed theme-black"
>
<div
  class="container flex h-[60px] flex-row items-center justify-between overflow-x-clip max-xl:max-w-full"
  data-test="trueCarHeaderContainer"
>
  <div class="flex">
    <div class="hidden lg:block">
      <a
        href="/"
        title="TrueCar"
        class="block"
        data-test="tcLogo"
        data-test-item="core"
        ><div
          class="picture-container transition-[color_1s]"
          style="padding-bottom: 0; width: 133px; height: 39px"
        >
          <img
            class="picture-inner"
            src="{{asset('assets/_next/static/images/tc-logo-white-500-4f595f7ed8d0cc657d151b089a9bd452.png')}}?auto=format&amp;h=39&amp;w=133"
            srcset="
              {{asset('assets/_next/static/images/tc-logo-white-500-4f595f7ed8d0cc657d151b089a9bd452.png')}}?auto=format&amp;h=39&amp;w=133 1x,
              {{asset('assets/_next/static/images/tc-logo-white-500-4f595f7ed8d0cc657d151b089a9bd452.png')}}?auto=format&amp;h=78&amp;w=266 2x
            "
            loading="eager"
            alt="TrueCar"
            data-test="tcdcLogo"
          /></div
      ></a>
    </div>
    <div class="mr-2 ml-1 hidden print:hidden lg:block">
      <div class="flex items-center py-2">
        <div class="flex flex-row transition-[color] duration-[1s]">
          <div class="flex items-center">
            <div
              data-test="globalNavDropdownItem"
              data-test-item="newCars"
              class="text-base pl-2-5 dropdown"
            >
              <button
                aria-expanded="false"
                data-toggle="dropdown"
                aria-haspopup="true"
                class="flex nav-dropdown-btn items-center text-center theme-black nav"
              >
                New<svg
                  viewBox="0 0 24 24"
                  class="icon icon-fill-default"
                  style="width: 24px; height: 24px"
                  aria-hidden="true"
                >
                  <use href="#arrow_drop_down"></use>
                </svg>
              </button>
              <ul
                tabindex="-1"
                role="menu"
                aria-hidden="true"
                class="pt-2 pr-0 theme-black z-1050 min-w-[240px] rounded-[0px] border-none shadow-[0_2px_4px_0_rgba(0,0,0,0.13)] dropdown-menu"
              >
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="BuildandPrice"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('shop-new')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Build and Price</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1 border-b">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="Deals"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('deals')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Deals</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="NewCarListings"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('new-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >New Car Listings</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="NewEVs"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('new-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >New EVs</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="NewSUVs"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('new-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >New SUVs</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="NewTrucks"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('new-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >New Trucks</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="NewVans"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('new-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >New Vans</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="NewConvertibles"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('new-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >New Convertibles</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <div
              data-test="globalNavDropdownItem"
              data-test-item="usedCars"
              class="text-base pl-2-5 dropdown"
            >
              <button
                aria-expanded="false"
                data-toggle="dropdown"
                aria-haspopup="true"
                class="flex nav-dropdown-btn items-center text-center theme-black"
              >
                Used<svg
                  viewBox="0 0 24 24"
                  class="icon icon-fill-default"
                  style="width: 24px; height: 24px"
                  aria-hidden="true"
                >
                  <use href="#arrow_drop_down"></use>
                </svg>
              </button>
              <ul
                tabindex="-1"
                role="menu"
                aria-hidden="true"
                class="pt-2 pr-0 theme-black z-1050 min-w-[240px] rounded-[0px] border-none shadow-[0_2px_4px_0_rgba(0,0,0,0.13)] dropdown-menu"
              >
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="BuyOnline"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('used-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Buy Online</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1 border-b">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="UsedCarsSearch"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('used-cars-for-sale')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Used Cars Search</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="UsedCarListings"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('used-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Used Car Listings</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="UsedEVs"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('used-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Used EVs</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="UsedSUVs"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('used-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Used SUVs</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="UsedCertifiedPre-Owned"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('used-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Used Certified Pre-Owned</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="UsedTrucks"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('used-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Used Trucks</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="UsedVans"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('used-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Used Vans</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="UsedConvertibles"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('used-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Used Convertibles</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <div
              data-test="globalNavDropdownItem"
              data-test-item="electricCars"
              class="text-base pl-2-5 dropdown"
            >
              <button
                aria-expanded="false"
                data-toggle="dropdown"
                aria-haspopup="true"
                class="flex nav-dropdown-btn items-center text-center theme-black"
              >
                Electric<svg
                  viewBox="0 0 24 24"
                  class="icon icon-fill-default"
                  style="width: 24px; height: 24px"
                  aria-hidden="true"
                >
                  <use href="#arrow_drop_down"></use>
                </svg>
              </button>
              <ul
                tabindex="-1"
                role="menu"
                aria-hidden="true"
                class="pt-2 pr-0 theme-black z-1050 min-w-[240px] rounded-[0px] border-none shadow-[0_2px_4px_0_rgba(0,0,0,0.13)] dropdown-menu"
              >
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="EVHub"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('electric')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >EV Hub</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="NewEVs"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('new-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >New EVs</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="UsedEVs"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('used-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Used EVs</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="UsedTeslas"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('used-car-listings')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Used Teslas</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="EVIncentives"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('electric-incentive')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >EV Incentives</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="EVDeals"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('fuel-electric-deals')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >EV Deals</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="BestEVs"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('best-cars-electric')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Best EVs</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    href="javascript:void(0)"
                    target="_blank"
                    data-test="globalNavDropdownList"
                    data-test-item="Buyer'sGuide"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Buyer's Guide</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <div
              data-test="globalNavDropdownItem"
              data-test-item="research"
              class="text-base pl-2-5 dropdown"
            >
              <button
                aria-expanded="false"
                data-toggle="dropdown"
                aria-haspopup="true"
                class="flex nav-dropdown-btn items-center text-center theme-black"
              >
                Research<svg
                  viewBox="0 0 24 24"
                  class="icon icon-fill-default"
                  style="width: 24px; height: 24px"
                  aria-hidden="true"
                >
                  <use href="#arrow_drop_down"></use>
                </svg>
              </button>
              <ul
                tabindex="-1"
                role="menu"
                aria-hidden="true"
                class="pt-2 pr-0 theme-black z-1050 min-w-[240px] rounded-[0px] border-none shadow-[0_2px_4px_0_rgba(0,0,0,0.13)] dropdown-menu"
              >
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="CarReviews"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('car-reviews')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Car Reviews</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="CarRankings"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('best-cars-trucks')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Car Rankings</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="CompareCars"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('compare')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Compare Cars</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="CarFinderQuiz"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="javascript:void(0)"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Car Finder Quiz</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="BuyingPowerCalculator"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('car-affordability-calculator')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Buying Power Calculator</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="AutoLoanCalculator"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('car-loan-calculator')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Auto Loan Calculator</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="LeaseaCar"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('lease-a-car')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Lease a Car</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="ElectricVehicles"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('electric')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Electric Vehicles</span
                    ></a
                  >
                </li>
                <li class="pb-1 pt-1">
                  <a
                    data-test="globalNavDropdownList"
                    data-test-item="ResearchCenter"
                    tabindex="0"
                    role="menuitem"
                    class="inset-focus pl-3 pt-1 pb-1 no-underline hover:bg-[transparent] focus:bg-[transparent] active:bg-[transparent] dropdown-item"
                    href="{{url('research')}}"
                    ><span
                      class="text-base theme-black font-normal hover:underline active:underline"
                      >Research Center</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <a
              class="no-underline pr-3 text-base text-center pl-2-5 w-max theme-black hover:underline active:underline"
              data-test="navTrade"
              href="{{url('sell-your-car')}}"
              >Sell Your Car</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lg:hidden">
    <span id="mobile-menu"
      ><p
        id="mobile-menu-icon"
        class="inline-block stroke-white lg:hidden"
      >
        <button
          type="button"
          class="link-button h-5 w-5 -translate-x-2 bg-none grid place-content-center"
          data-test="mobileMenu"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 22 19"
            fill="white"
          >
            <title>Menu</title>
            <line
              x1="1"
              y1="2"
              x2="21"
              y2="2"
              fill="none"
              stroke-miterlimit="10"
              stroke-width="2"
            ></line>
            <line
              x1="1"
              y1="9"
              x2="21"
              y2="9"
              fill="none"
              stroke-miterlimit="10"
              stroke-width="2"
            ></line>
            <line
              x1="1"
              y1="16"
              x2="21"
              y2="16"
              fill="none"
              stroke-miterlimit="10"
              stroke-width="2"
            ></line>
          </svg>
        </button></p
    ></span>
  </div>
  <div class="w-full text-left lg:hidden">
    <a href="/" title="TrueCar"
      ><div
        class="picture-container"
        style="padding-bottom: 0; width: 133px; height: 39px"
      >
        <img
          class="picture-inner"
          src="{{asset('assets/_next/static/images/tc-logo-white-500-4f595f7ed8d0cc657d151b089a9bd452.png')}}?auto=format&amp;h=39&amp;w=133"
          srcset="
            {{asset('assets/_next/static/images/tc-logo-white-500-4f595f7ed8d0cc657d151b089a9bd452.png')}}?auto=format&amp;h=39&amp;w=133 1x,
            {{asset('assets/_next/static/images/tc-logo-white-500-4f595f7ed8d0cc657d151b089a9bd452.png')}}?auto=format&amp;h=78&amp;w=266 2x
          "
          loading="eager"
          alt="TrueCar"
          data-test="tcdcLogo"
        /></div
    ></a>
  </div>
  <div class="flex lg:justify-center justify-start w-min">
    <div class="hidden" id="true-car-header">
      <div
        class="hidden-sm-down print:hidden text-center flex items-center cursor-default opacity-0 transition-opacity duration-500"
        data-test="headerShopButtons"
      >
        <a
          data-ignore-contrast="false"
          data-loading="false"
          disabled=""
          data-test="headerShopNewButton"
          class="btn-dark last:ml-2-5 cursor-default btn btn-secondary btn-md disabled"
          href="/shop/new/?filterType=brand"
          ><span class="btn-inner">Shop New</span></a
        ><a
          data-ignore-contrast="false"
          data-loading="false"
          disabled=""
          data-test="headerShopUsedButton"
          class="btn-dark last:ml-2-5 cursor-default btn btn-secondary btn-md disabled"
          href="/shop/used/?filterType=brand"
          ><span class="btn-inner">Shop Used</span></a
        >
      </div>
    </div>
  </div>
  <div class="flex w-full items-center lg:w-1/2">
    <div class="flex w-full items-center justify-end">
      <div
        class="z-1050 hidden w-full py-2 pl-3 text-[#000] lg:flex lg:max-w-sm"
      >
        <div class="w-full">
          <div class="relative flex w-full justify-center">
            <div
              data-test="dropdownBox"
              data-do-not-disturb="false"
              class="typeahead-field-dropdown-box dropdown"
            >
              <button
                aria-haspopup="true"
                class="h-0 w-full hidden"
                aria-expanded="false"
              >
                <span class="sr-only">Toggle Dropdown</span></button
              ><label
                for="trueCarHeaderSearchBarOmnisearchSearchField"
                class="sr-only"
                >Search</label
              >
              <div
                class="field-container-challenger typeahead-field-text-field"
              >
                <div
                  class="field-wrapper-challenger field-theme-dark-challenger"
                >
                  <div class="field-content-row field-with-prefix">
                    <div
                      class="field-addon-challenger field-addon-challenger-prefix"
                    >
                      <svg
                        viewBox="0 0 24 24"
                        class="icon icon-fill-default z-[200]"
                        style="width: 24px; height: 24px"
                        aria-hidden="true"
                      >
                        <use href="#search"></use>
                      </svg>
                    </div>
                    <div class="field-input-label-challenger">
                      <input
                        id="trueCarHeaderSearchBarOmnisearchSearchField"
                        autocomplete="off"
                        class="form-control-challenger typeahead-field-text-field-input !rounded-[100px] !h-[40px] !border-none"
                        aria-label="Search"
                        placeholder="Search"
                        autocorrect="off"
                        autocapitalize="none"
                        spellcheck="false"
                        data-test-item="TypeaheadField"
                        data-test="omnisearchSearchField"
                        type="text"
                        value=""
                      />
                    </div>
                  </div>
                  <div class="field-message-challenger">
                    <div
                      class="field-message-text-challenger"
                    ></div>
                  </div>
                </div>
              </div>
              <div
                tabindex="-1"
                role="menu"
                aria-hidden="true"
                class="w-full dropdown-menu-typeahead dropdown-menu-rounded z-[200] rounded-b-[25px] dropdown-menu-dark dropdown-menu dropdown-menu-right"
              >
                <ul
                  style="max-height: 252px; overflow-y: auto"
                  role="menu"
                >
                  <li
                    disabled=""
                    tabindex="-1"
                    class="dropdown-item-typeahead disabled dropdown-item"
                  >
                    <span
                      class="block overflow-hidden whitespace-normal italic text-dark"
                      >No results for ""</span
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button
        type="button"
        class="link-button lg:hidden"
        id="trueCarHeaderSearchButton"
        aria-label="Search Make, Model, or Type"
      >
        <svg
          viewBox="0 0 24 24"
          class="icon icon-fill-default stroke-white"
          style="width: 24px; height: 24px"
          aria-hidden="true"
        >
          <use href="#search"></use>
        </svg>
      </button>
      <div
        class="h-4 w-[1px] border-white lg:border-r lg:pl-3 border-r pl-3"
      ></div>
    </div>
    <div class="w-auto min-w-max pl-3 lg:hidden">
      <button
        type="button"
        class="link-button flex min-w-max items-center justify-end text-center text-base no-underline theme-black lg:justify-center"
        aria-label="Sign up"
        data-test="globalNavSignUpMobile"
        id="globalNavSignUpMobile"
      >
        <span>Sign up</span
        ><svg
          viewBox="0 0 24 24"
          class="icon icon-fill-default hidden lg:ml-1 lg:flex lg:items-center"
          style="width: 24px; height: 24px"
          aria-hidden="true"
        >
          <use href="#account_circle"></use>
        </svg>
      </button>
    </div>
    <div class="flex min-w-max pl-2-5 lg:pl-3">
      <div class="hidden lg:flex">
        <button
          type="button"
          class="link-button flex min-w-max items-center justify-end text-center text-base no-underline theme-black lg:justify-center"
          aria-label="Sign up"
          data-test="globalNavSignUp"
          id="globalNavSignUp"
        >
          <span>Sign up</span
          ><svg
            viewBox="0 0 24 24"
            class="icon icon-fill-default hidden lg:ml-1 lg:flex lg:items-center"
            style="width: 24px; height: 24px"
            aria-hidden="true"
          >
            <use href="#account_circle"></use>
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>
</header>
