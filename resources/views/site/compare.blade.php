@extends('site.layouts.app')
@section('content')
<style>
    .page-faqs{
        background-color: #000000;
        color: #fff;
        margin-top: 14px
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
    <main id="mainContent" style="margin-top: 160px;"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <h1 class="heading-3 normal-case heading-md-1 md:normal-case mt-5 mb-5 text-center md:mt-6 md:mb-5">Compare Cars
            Side-by-Side</h1>
        <form novalidate="">
            <div class="bg-light shadow lg:bg-white lg:shadow-none">
                <div
                    class="container container-max-width-1 relative mb-3 rounded bg-light pt-3 pb-5 md:mb-7 md:py-3 lg:shadow md:max-h-[388px] lg:max-h-[374px]">
                    <div class="max-w-3xl lg:mx-auto">
                        <div class="row">
                            <div class="lg:pr-5 col-12 col-lg-6">
                                <div class="mb-3 min-h-[22px]">
                                    <div class="heading-5 normal-case">Car 1</div>
                                </div>
                                <div class="mb-1 flex items-center lg:mb-3">
                                    <div class="row flex-1">
                                        <div class="relative md:hidden col-6 col-md-12">
                                            <div class="picture-container absolute right-2 sm:left-0 sm:right-auto"
                                                style="padding-bottom: 0px; width: 229px; height: 105px;"><img
                                                    class="picture-inner picture-svg"
                                                    src="assets/_next/static/images/car-frame-2aa78afd2de38b10aadf91d62b204a89.svg"
                                                    alt="" role="presentation"></div>
                                        </div>
                                        <div class="col-6 col-md-12">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-12">
                                                    <div class="mb-1 md:mb-0 md:pr-2 lg:pr-0">
                                                        <div class="field-container-challenger min-h-[71px]">
                                                            <div
                                                                class="field-wrapper-challenger field-label-padding-challenger">
                                                                <div class="field-content-row field-with-suffix">
                                                                    <div
                                                                        class="field-input-label-challenger input-label-select">
                                                                        <select required="" aria-label="Make"
                                                                            class="form-select-element-challenger"
                                                                            data-test="selectMake" data-test-item="0">
                                                                            <option disabled="" value="">Select
                                                                                Make</option>
                                                                            <option value="acura">Acura</option>
                                                                            <option value="alfa-romeo">Alfa Romeo</option>
                                                                            <option value="aston-martin">Aston Martin
                                                                            </option>
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
                                                                            <option value="mercedes-benz">Mercedes-Benz
                                                                            </option>
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
                                                                                <option value="am-general">AM General
                                                                                </option>
                                                                                <option value="daewoo">Daewoo</option>
                                                                                <option value="eagle">Eagle</option>
                                                                                <option value="geo">Geo</option>
                                                                                <option value="hummer">HUMMER</option>
                                                                                <option value="isuzu">Isuzu</option>
                                                                                <option value="karma">Karma</option>
                                                                                <option value="maybach">Maybach</option>
                                                                                <option value="mercury">Mercury</option>
                                                                                <option value="oldsmobile">Oldsmobile
                                                                                </option>
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
                                                                        <div class="field-label-text-challenger"
                                                                            data-test="fieldLabel"><label
                                                                                data-ignore-contrast="true">Make</label>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="field-addon-challenger field-addon-challenger-suffix">
                                                                        <svg viewBox="0 0 24 24"
                                                                            class="icon icon-fill-default"
                                                                            aria-hidden="true"
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
                                                <div class="lg:pt-3 col-md-6 col-lg-12">
                                                    <div class="md:pl-2 lg:pl-0">
                                                        <div class="field-container-challenger min-h-[71px]">
                                                            <div
                                                                class="field-wrapper-challenger field-label-padding-challenger">
                                                                <div
                                                                    class="field-content-row field-with-suffix field-content-disabled">
                                                                    <div
                                                                        class="field-input-label-challenger input-label-select">
                                                                        <select required="" aria-label="Model"
                                                                            disabled=""
                                                                            class="form-select-element-challenger"
                                                                            data-test="selectModel" data-test-item="0">
                                                                            <option disabled="" value="">Select
                                                                                Model</option>
                                                                        </select>
                                                                        <div class="field-label-text-challenger"
                                                                            data-test="fieldLabel"><label
                                                                                data-ignore-contrast="true">Model</label>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="field-addon-challenger field-addon-challenger-suffix field-addon-challenger-suffix-disabled">
                                                                        <svg viewBox="0 0 24 24"
                                                                            class="icon icon-fill-default"
                                                                            aria-hidden="true"
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:pl-5 col-12 col-lg-6">
                                <div class="mb-3 min-h-[22px]">
                                    <div class="heading-5 normal-case">Car 2</div>
                                </div>
                                <div class="mb-1 flex items-center lg:mb-3">
                                    <div class="row flex-1">
                                        <div class="relative md:hidden col-6 col-md-12">
                                            <div class="picture-container absolute right-2 sm:left-0 sm:right-auto"
                                                style="padding-bottom: 0px; width: 229px; height: 105px;"><img
                                                    class="picture-inner picture-svg"
                                                    src="assets/_next/static/images/car-frame-2aa78afd2de38b10aadf91d62b204a89.svg"
                                                    alt="" role="presentation"></div>
                                        </div>
                                        <div class="col-6 col-md-12">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-12">
                                                    <div class="mb-1 md:mb-0 md:pr-2 lg:pr-0">
                                                        <div class="field-container-challenger min-h-[71px]">
                                                            <div
                                                                class="field-wrapper-challenger field-label-padding-challenger">
                                                                <div class="field-content-row field-with-suffix">
                                                                    <div
                                                                        class="field-input-label-challenger input-label-select">
                                                                        <select required="" aria-label="Make"
                                                                            class="form-select-element-challenger"
                                                                            data-test="selectMake" data-test-item="1">
                                                                            <option disabled="" value="">Select
                                                                                Make</option>
                                                                            <option value="acura">Acura</option>
                                                                            <option value="alfa-romeo">Alfa Romeo</option>
                                                                            <option value="aston-martin">Aston Martin
                                                                            </option>
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
                                                                            <option value="lamborghini">Lamborghini
                                                                            </option>
                                                                            <option value="land-rover">Land Rover</option>
                                                                            <option value="lexus">Lexus</option>
                                                                            <option value="lincoln">Lincoln</option>
                                                                            <option value="lotus">Lotus</option>
                                                                            <option value="lucid">Lucid</option>
                                                                            <option value="maserati">Maserati</option>
                                                                            <option value="mazda">Mazda</option>
                                                                            <option value="mclaren">McLaren</option>
                                                                            <option value="mercedes-benz">Mercedes-Benz
                                                                            </option>
                                                                            <option value="mini">MINI</option>
                                                                            <option value="mitsubishi">Mitsubishi</option>
                                                                            <option value="nissan">Nissan</option>
                                                                            <option value="polestar">Polestar</option>
                                                                            <option value="porsche">Porsche</option>
                                                                            <option value="ram">Ram</option>
                                                                            <option value="rivian">Rivian</option>
                                                                            <option value="rolls-royce">Rolls-Royce
                                                                            </option>
                                                                            <option value="subaru">Subaru</option>
                                                                            <option value="tesla">Tesla</option>
                                                                            <option value="toyota">Toyota</option>
                                                                            <option value="vinfast">VinFast</option>
                                                                            <option value="volkswagen">Volkswagen</option>
                                                                            <option value="volvo">Volvo</option>
                                                                            <optgroup label="Out of Production">
                                                                                <option value="am-general">AM General
                                                                                </option>
                                                                                <option value="daewoo">Daewoo</option>
                                                                                <option value="eagle">Eagle</option>
                                                                                <option value="geo">Geo</option>
                                                                                <option value="hummer">HUMMER</option>
                                                                                <option value="isuzu">Isuzu</option>
                                                                                <option value="karma">Karma</option>
                                                                                <option value="maybach">Maybach</option>
                                                                                <option value="mercury">Mercury</option>
                                                                                <option value="oldsmobile">Oldsmobile
                                                                                </option>
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
                                                                        <div class="field-label-text-challenger"
                                                                            data-test="fieldLabel"><label
                                                                                data-ignore-contrast="true">Make</label>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="field-addon-challenger field-addon-challenger-suffix">
                                                                        <svg viewBox="0 0 24 24"
                                                                            class="icon icon-fill-default"
                                                                            aria-hidden="true"
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
                                                <div class="lg:pt-3 col-md-6 col-lg-12">
                                                    <div class="md:pl-2 lg:pl-0">
                                                        <div class="field-container-challenger min-h-[71px]">
                                                            <div
                                                                class="field-wrapper-challenger field-label-padding-challenger">
                                                                <div
                                                                    class="field-content-row field-with-suffix field-content-disabled">
                                                                    <div
                                                                        class="field-input-label-challenger input-label-select">
                                                                        <select required="" aria-label="Model"
                                                                            disabled=""
                                                                            class="form-select-element-challenger"
                                                                            data-test="selectModel" data-test-item="1">
                                                                            <option disabled="" value="">Select
                                                                                Model</option>
                                                                        </select>
                                                                        <div class="field-label-text-challenger"
                                                                            data-test="fieldLabel"><label
                                                                                data-ignore-contrast="true">Model</label>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="field-addon-challenger field-addon-challenger-suffix field-addon-challenger-suffix-disabled">
                                                                        <svg viewBox="0 0 24 24"
                                                                            class="icon icon-fill-default"
                                                                            aria-hidden="true"
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-test="smallCompareButton" class="md:hidden"><button type="submit"
                                data-ignore-contrast="true" data-loading="false" data-test="compareButton"
                                data-test-item="empty" class="btn btn-primary btn-md btn-block"><span
                                    class="btn-inner">Compare</span></button></div>
                    </div>
                </div>
            </div>
            <div data-test="largeCompareButton" class="hidden md:block"><button type="submit"
                    data-ignore-contrast="true" data-loading="false" data-test="compareButton" data-test-item="empty"
                    class="btn btn-primary btn-md btn-block mt-4"><span class="btn-inner">Compare</span></button></div>
        </form>

        <div class="page-faqs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Faqs Sidebar Start -->
                        <div class="faq-sidebar">
                            <!-- Faqs Catagery List Start -->
                            <div class="faq-catagery-list wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
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
                                <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">FAQs</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: start; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">G</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">f</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">m</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div></div></div></h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            What types of vehicles are available for rent?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, we accept international driver's licenses. An additional government-issued ID, such as a passport, is also required.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Where are your rental locations?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, we accept international driver's licenses. An additional government-issued ID, such as a passport, is also required.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            What are your hours of operation?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, we accept international driver's licenses. An additional government-issued ID, such as a passport, is also required.</p>
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
                                <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">FAQs</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: start; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">B</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">k</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">g</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">v</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion1">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            How do I make a reservation?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse show" aria-labelledby="heading4" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Yes, you can rent a car for someone else, but the primary driver must be present at the time of rental to provide their driver's license and sign the rental agreement.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            Can I modify or cancel my reservation?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Yes, you can rent a car for someone else, but the primary driver must be present at the time of rental to provide their driver's license and sign the rental agreement.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading6">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            What is your cancellation policy?
                                        </button>
                                    </h2>
                                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Yes, you can rent a car for someone else, but the primary driver must be present at the time of rental to provide their driver's license and sign the rental agreement.</p>
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
                                <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">FAQs</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: start; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">P</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">g</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">p</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">m</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div></div></div></h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion2">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading7">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                            What forms of payment do you accept?
                                        </button>
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse show" aria-labelledby="heading7" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Reservations can be made online through our website, by calling our customer service hotline, or by visiting one of our rental locations in person.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading8">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            Are there any hidden fees?
                                        </button>
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Reservations can be made online through our website, by calling our customer service hotline, or by visiting one of our rental locations in person.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading9">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                            Do you require a deposit?
                                        </button>
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Reservations can be made online through our website, by calling our customer service hotline, or by visiting one of our rental locations in person.</p>
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
                                <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">FAQs</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: start; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">V</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">h</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">f</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">m</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div></div></div></h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion3">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading10">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                            Are your vehicles insured?
                                        </button>
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse show" aria-labelledby="heading10" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We offer a diverse fleet of vehicles, including economy cars, compact cars, SUVs, luxury cars, and more to suit various needs and preferences.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading11">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                            Do you offer vehicles with automatic transmission?
                                        </button>
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We offer a diverse fleet of vehicles, including economy cars, compact cars, SUVs, luxury cars, and more to suit various needs and preferences.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="heading12">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                            Can I choose a specific vehicle model?
                                        </button>
                                    </h2>
                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We offer a diverse fleet of vehicles, including economy cars, compact cars, SUVs, luxury cars, and more to suit various needs and preferences.</p>
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

        <div class="our-testimonial">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">testimonials</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">W</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">h</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">m</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div></div> </div><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">g</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">b</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                <div class="swiper-wrapper" data-cursor-text="Drag" id="swiper-wrapper-76746779e8e44012" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-433.333px, 0px, 0px); transition-delay: 0ms;">
                                    <!-- Testimonial Slide Start -->

                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->

                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->

                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 4" data-swiper-slide-index="3" style="width: 403.333px; margin-right: 30px;">
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
                                                    <p>Renting a car from nova ride was a great decision. Not only did I get a reliable and comfortable vehicle, but the prices were also very competitive.</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{asset('novaride/images/author-4.jpg')}}" alt="">
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
                                <div class="swiper-slide swiper-slide-active" style="width: 403.333px; margin-right: 30px;" role="group" aria-label="1 / 4" data-swiper-slide-index="0">
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
                                                    <p>Renting a car from nova ride was a great decision. Not only did I get a reliable and comfortable vehicle, but the prices were also very competitive.</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{asset('novaride/images/author-1.jpg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>floyd miles</h3>
                                                    <p>project manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="swiper-slide swiper-slide-next" style="width: 403.333px; margin-right: 30px;" role="group" aria-label="2 / 4" data-swiper-slide-index="1">
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
                                                    <p>Renting a car from nova ride was a great decision. Not only did I get a reliable and comfortable vehicle, but the prices were also very competitive.</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{asset('novaride/images/author-2.jpg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>annette black</h3>
                                                    <p>project manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="swiper-slide" style="width: 403.333px; margin-right: 30px;" role="group" aria-label="3 / 4" data-swiper-slide-index="2">
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
                                                    <p>Renting a car from nova ride was a great decision. Not only did I get a reliable and comfortable vehicle, but the prices were also very competitive.</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{asset('novaride/images/author-3.jpg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>leslie alexander</h3>
                                                    <p>project manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div>
                                <div class="testimonial-btn">
                                    <div class="testimonial-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-76746779e8e44012"></div>
                                    <div class="testimonial-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-76746779e8e44012"></div>
                                </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
