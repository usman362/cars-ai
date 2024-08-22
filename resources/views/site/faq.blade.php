@extends('site.layouts.app')
@section('content')
    <main id="mainContent" style="margin-top:60px"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div data-test="homeInfoSectionApp">
            <nav data-test="homeInfoSectionNav">
                <div class="flex justify-center overflow-hidden border theme-white">
                    <div class="container">
                        <ul class="tab-bar flex justify-between text-xs md:text-sm lg:text-base">
                            <li class="flex justify-center md:px-3 lg:px-4"><a aria-current="false" aria-disabled="false"
                                    class="inline-block tab" href="/about-us/"><span class="tab-text">About</span><span
                                        class="tab-bottom-border"></span></a></li>
                            <li class="flex justify-center md:px-3 lg:px-4"><a href="https://ir.truecar.com/executive-team/"
                                    target="_blank" rel="noopener" aria-current="false" aria-disabled="false"
                                    class="inline-block tab"><span class="tab-text">Leadership</span><span
                                        class="tab-bottom-border"></span></a></li>
                            <li class="flex justify-center md:px-3 lg:px-4"><a aria-current="false" aria-disabled="false"
                                    class="inline-block tab" href="/careers/"><span class="tab-text">Careers</span><span
                                        class="tab-bottom-border"></span></a></li>
                            <li class="flex justify-center md:px-3 lg:px-4"><a href="https://ir.truecar.com/press-releases/"
                                    target="_blank" rel="noopener" aria-current="false" aria-disabled="false"
                                    class="inline-block tab"><span class="tab-text">Press</span><span
                                        class="tab-bottom-border"></span></a></li>
                            <li class="flex justify-center md:px-3 lg:px-4"><a href="https://ir.truecar.com/"
                                    target="_blank" rel="noopener" aria-current="false" aria-disabled="false"
                                    class="inline-block tab"><span class="tab-text">Investors</span><span
                                        class="tab-bottom-border"></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container pt-6">
                <div data-test="homeFaq">
                    <h1 class="heading-1 normal-case">FAQs</h1>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <section class="mt-3">
                                <div class="heading-4 normal-case">General TrueCar Questions</div>
                                <ul>
                                    <li class="mt-3"><a target="_self" href="/faq/#what-is">What is TrueCar?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#how-do-i-use-the-price">How do I use
                                            the Price Report?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#what-should-i-do-if-the">What should I
                                            do if the dealer does not have my exact vehicle?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#where-can-i-find-more-car">Where can I
                                            find more car buying tips and advice? Is there a fee for using this service?</a>
                                    </li>
                                    <li class="mt-3"><a target="_self" href="/faq/#is-there-a-fee-for-using-this">Is there
                                            a fee for using this service?</a></li>
                                </ul>
                            </section>
                            <section class="mt-3">
                                <div class="heading-4 normal-case">General Data Questions</div>
                                <ul>
                                    <li class="mt-3"><a target="_self" href="/faq/#where-do-you-get-your-data">Where do
                                            you get your data, and how reliable is it?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#how-recent-is-your">How recent is your
                                            data?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#why-do-certain-vehicles-not">Why do
                                            certain vehicles not have a Price Report?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#why-is-truecars-factory">Why is
                                            TrueCar's Factory Invoice often higher than the Invoice Price I see on other
                                            sites?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#what-fees-are-included-in">What fees
                                            are included in your pricing information?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#do-you-take-consumer-and">Do you take
                                            consumer and dealer incentives into account?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#can-i-license-truecars">Can I license
                                            TrueCar's pricing information for my site?</a></li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-12 col-lg-6">
                            <section class="mt-3">
                                <div class="heading-4 normal-case">Give Us Feedback</div>
                                <ul>
                                    <li class="mt-3"><a target="_self" href="/faq/#i-have-a-great-story-that-id">I have a
                                            great story that I'd like to share about how much TrueCar helped me, who can I
                                            send it to?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#where-do-i-report-missing">Where do I
                                            report missing vehicles or options?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#how-do-i-tell-you-about">How do I
                                            tell you about mistakes I've found on your site?</a></li>
                                </ul>
                            </section>
                            <section class="mt-3">
                                <div class="heading-4 normal-case">Trademark Related Questions</div>
                                <ul>
                                    <li class="mt-3"><a target="_self" href="/faq/#is-truecar-endorsed-by-or">Is
                                            TrueCar endorsed by or sponsored by automobile manufacturers?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#what-is-truecars">What is TrueCar's
                                            relationship with automobile manufacturers?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#why-are-vehicles-photos-on">Why are
                                            vehicles photos on the TrueCar website not identical to the photos I see on
                                            manufacturer websites?</a></li>
                                    <li class="mt-3"><a target="_self" href="/faq/#does-truecar-sell-or-service">Does
                                            TrueCar sell or service vehicles?</a></li>
                                </ul>
                            </section>
                        </div>
                    </div>
                    <hr class="mt-5 mb-5">
                    <section>
                        <div class="heading-2 normal-case mb-5 mt-3 text-muted">General TrueCar Questions</div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="what-is" class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">What is TrueCar?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">TrueCar is an information and technology platform that enables its users
                                    to communicate with TrueCar Certified Dealers for a great car buying experience. Our
                                    mission is simple: make the car buying process simple, fair and fun. Achieving this goal
                                    begins with us analyzing the most accurate, timely and comprehensive pricing information
                                    available and then making it easy to understand and available to all; free of charge.
                                    This kind of pricing information, which has only recently become available, will allow
                                    you to recognize a fair price based on what others actually paid. The result: consumers
                                    and dealers now have a guide that helps them establish a baseline of trust and agree on
                                    the parameters of a fair deal.</p>
                                <p class="mb-3">We partnered with a national network of more than 13,000 dealers
                                    (representing about 35% of all franchised dealers) who share the belief that truth,
                                    transparency and fairness are the foundation of a great car buying experience.</p>
                                <p class="mb-3"><span>You can follow TrueCar on <a
                                            href="https://www.twitter.com/truecar" target="_blank">Twitter</a> and become
                                        a fan of TrueCar on<!-- --> <a href="https://www.facebook.com/truecar"
                                            target="_blank">Facebook</a>.</span></p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="how-do-i-use-the-price"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">How do I use the
                                    Price&nbsp;Report?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">On the TrueCar Price Report, we show you what you can expect to pay on
                                    average for new cars in your area, based on what other people actually paid for their
                                    cars. We do all this so you’ll be confident in your car purchase. Harness the power of
                                    this information, recognize a fair deal and essentially become a car buying expert.</p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="what-should-i-do-if-the"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">What should I do if the
                                    dealer does not have my exact&nbsp;vehicle?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">Dealers generally will do their best to match the vehicle you have
                                    configured on TrueCar, but many times they will not have an exact match for the car you
                                    are looking to purchase. This is not the dealer's fault, but rather a challenge with the
                                    way cars and trucks are manufactured and marketed. While some vehicles are produced in
                                    large numbers, other vehicles are produced in smaller numbers. To further complicate
                                    things, many options or colors will be produced in even more limited combinations. This
                                    creates a great deal of confusion for buyers that want a very specific configuration.
                                    Ultimately this can affect your expectations when contacting a dealer, so it may be
                                    helpful to keep an open mind about what the dealer may be offering as an alternative.
                                </p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="where-can-i-find-more-car"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">Where can I find more car
                                    buying tips and advice? Is there a fee for using this&nbsp;service?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3"><span>You can visit the TrueCar company blog. <a
                                            href="https://www.truecar.com/blog" target="_blank">Click here</a> to read it
                                        for yourself.</span></p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="is-there-a-fee-for-using-this"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">Is there a fee for using
                                    this&nbsp;service?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">We do not charge you any fees for using the services. We ordinarily
                                    receive fees from our Certified Dealers in connection with the services. In some
                                    instances, we also receive fees from automobile manufacturers and/or third-party service
                                    providers.</p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                    </section>
                    <section>
                        <div class="heading-2 normal-case mb-5 mt-3 text-muted">General Data Questions</div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="where-do-you-get-your-data"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">Where do you get your
                                    data, and how reliable is&nbsp;it?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">TrueCar obtains and processes data from well-known data aggregators
                                    within the automotive space to ensure that we present the most accurate pricing
                                    information available. We also acquire vehicle configuration data, customer and dealer
                                    incentives data, financing and loan data, vehicle registration and insurance data, and
                                    much, much more. Our data is among the most timely and comprehensive in the industry.
                                    Our sampling of the total number of car sales nationwide provides us with significant
                                    confidence that our data is representative of the market as a whole. Statistical
                                    analysis shows that on the whole, we have 99.1% confidence that our projected Average
                                    Paid Price per new car sale in a given week is within $20 of the average price of all
                                    nationwide sales transactions during that week. However, please keep in mind that this
                                    is the average for all vehicles. If you are evaluating the average price for any
                                    specific vehicle (particularly one with very low sales volume), the deviation from the
                                    national average for that vehicle can be substantially greater.</p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="how-recent-is-your"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">How recent is
                                    your&nbsp;data?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">Our pricing information is updated weekly, and incentives are checked
                                    daily and updated as new information is validated. The transactions we use are the most
                                    recent available. TrueCar typically pushes data out to the site within 72 hours of
                                    receipt of the data. To ensure relevance, we typically only use transactions from the
                                    last four weeks, but we'll go back as far as 8 weeks if the market pricing for a given
                                    vehicle is stable enough to be relevant to a car purchased today.</p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="why-do-certain-vehicles-not"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">Why do certain vehicles
                                    not have a Price&nbsp;Report?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">We are committed to keeping our data up-to-date and accurate. When a
                                    vehicle has a very small history of recent purchases, it's difficult to provide reliable
                                    price ranges. We believe that not showing a Price Report is a better approach than
                                    suggesting or making an interpretation of the price.</p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="why-is-truecars-factory"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">Why is TrueCar's Factory
                                    Invoice often higher than the Invoice Price I see on other&nbsp;sites?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3"><span>Often, manufacturers charge the dealer not only a Destination
                                        Charge, but also some additional fees such as extra freight fees, admin fees, fuel
                                        charges, and the most typical of all, Regional Ad Fees. Regional Ad Fees is the cost
                                        a manufacturer allocates for advertising and promoting the vehicle in the dealer's
                                        market. For example, all Toyota dealers pay Regional Ad Fees. These extra fees, like
                                        Destination Charges, are a legitimate cost to the dealer and should be added to the
                                        Factory Invoice. As a matter of fact, many dealers won't call it out but simply make
                                        them part of the Factory Invoice (which could make you believe the dealer is
                                        artificially inflating the price, especially when comparing the Factory Invoice
                                        found on other web sites). TrueCar includes these Regional Ad Fees and other extra
                                        fees, and the curious minds can always see the precise breakdown in our Table tab.
                                        This is, however, not a catch all. Taxes, title, license, registration, dealer
                                        documentation, after-market accessories, dealer installed options, etc. are costs
                                        added by the dealer (instead of the manufacturer) and are as such not part of the
                                        Factory Invoice. For more information, please check out our blog article, <a
                                            href="https://www.truecar.com/blog/what-is-included-in-factory-invoice/"
                                            target="_blank">What is Included in Factory Invoice?</a></span></p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="what-fees-are-included-in"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">What fees are included in
                                    your pricing&nbsp;information?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">The TrueCar Price Estimate shown on the Certificate includes the
                                    destination fee and the regional advertising fee. The TrueCar Price Estimate does not
                                    include dealer installed accessories, applicable tax, title, licensing, and
                                    documentation fees, other state and governmental charges and/or fees, dealer-locate fees
                                    for out-of-stock vehicles, and any other charges and/or fees allowed by law.</p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="do-you-take-consumer-and"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">Do you take consumer and
                                    dealer incentives into&nbsp;account?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">Absolutely. After you enter your ZIP code, our system identifies
                                    incentives applicable in your area.</p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="can-i-license-truecars"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">Can I license TrueCar's
                                    pricing information for my&nbsp;site?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3"><span>TrueCar has a number of options to provide pricing information on
                                        your website. Please contact us at <a href="mailto:contact@truecar.com"
                                            target="">contact@truecar.com</a> to find the solution that works best for
                                        you.</span></p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                    </section>
                    <section>
                        <div class="heading-2 normal-case mb-5 mt-3 text-muted">Give Us Feedback</div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="i-have-a-great-story-that-id"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">I have a great story that
                                    I'd like to share about how much TrueCar helped me, who can I send it&nbsp;to?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3"><span>We would be honored and encouraged to hear how we helped! Please
                                        send your stories to <a href="mailto:feedback@truecar.com"
                                            target="">feedback@truecar.com</a>.</span></p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="where-do-i-report-missing"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">Where do I report missing
                                    vehicles or&nbsp;options?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3"><span>If you catch any information missing from vehicle options, please
                                        let us know at <a href="mailto:feedback@truecar.com"
                                            target="">feedback@truecar.com</a>.</span></p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="how-do-i-tell-you-about"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">How do I tell you about
                                    mistakes I've found on your&nbsp;site?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3"><span>Whether you are a car buyer and have found a problem with our Price
                                        Report, or are a dealer and have the most up to date information on incentives, we
                                        are critical about our data, and strive to be as accurate as possible. We want to
                                        know!! If you find any mistakes, please send a note to <a
                                            href="mailto:feedback@truecar.com"
                                            target="">feedback@truecar.com</a>.</span></p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                    </section>
                    <section>
                        <div class="heading-2 normal-case mb-5 mt-3 text-muted">Trademark Related Questions</div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="is-truecar-endorsed-by-or"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">Is TrueCar endorsed by or
                                    sponsored by automobile&nbsp;manufacturers?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">Although TrueCar maintains and/or seeks cooperative business
                                    relationships with automobile manufacturers, TrueCar remains an independent company that
                                    is not endorsed or sponsored by any particular automobile manufacturer.</p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="what-is-truecars"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">What is TrueCar's
                                    relationship with automobile&nbsp;manufacturers?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">TrueCar provides a variety of information about vehicle makes, models,
                                    and specifications, but TrueCar’s presentation of information, including its Price
                                    Reports, is not endorsed or sponsored by automobile manufacturers. However, TrueCar does
                                    sell advertising space on its website, some of which is purchased by automobile
                                    manufacturers for the display of their advertisements.</p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="why-are-vehicles-photos-on"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">Why are vehicles photos
                                    on the TrueCar website not identical to the photos I see on manufacturer&nbsp;websites?
                                </div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">TrueCar generally licenses vehicles photos from independent photographers
                                    and/or companies who photograph the particular models you see on the website. In most
                                    cases, TrueCar does not obtain vehicle photos from the automobile manufacturers, so the
                                    angle, orientation, lighting, and other variables may differ from photos of the same
                                    model you see on an automobile manufacturer’s website. Vehicle photos are for reference
                                    purposes only, and do not imply any endorsement by, affiliation with, or sponsorship by
                                    the automobile manufacturer of the photographed vehicle.</p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                        <div class="mb-5">
                            <div class="relative h-[70px]"><a id="does-truecar-sell-or-service"
                                    class="absolute top-[-70px]">&nbsp;</a>
                                <div class="heading-4 normal-case absolute bottom-[20px] m-[0px]">Does TrueCar sell or
                                    service&nbsp;vehicles?</div>
                            </div>
                            <div class="mb-3">
                                <p class="mb-3">TrueCar does not sell any type of vehicle or vehicle component, and does
                                    not service vehicles. TrueCar is a provider of information about vehicles.</p>
                            </div><a class="block" href="#top">Back to top</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
