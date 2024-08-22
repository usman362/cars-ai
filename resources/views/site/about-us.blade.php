@extends('site.layouts.app')
@section('content')
    <main id="mainContent" style="margin-top:60px"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div data-test="homeInfoSectionApp">
            <nav data-test="homeInfoSectionNav">
                <div class="flex justify-center overflow-hidden border theme-white">
                    <div class="container">
                        <ul class="tab-bar flex justify-between text-xs md:text-sm lg:text-base">
                            <li class="flex justify-center md:px-3 lg:px-4"><a aria-current="page" aria-disabled="false"
                                    class="inline-block tab tab-active" href="/about-us/"><span
                                        class="tab-text">About</span><span class="tab-bottom-border"></span></a></li>
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
            <section>
                <h1 class="heading-3 normal-case heading-md-1 md:normal-case py-3 text-center"><span class="block">Make car
                        buying easy,</span>transparent and efficient for all.</h1>
                <div>
                    <div class="relative h-[0px] w-full" style="padding-bottom:56.25%"><iframe
                            title="Car Buying Shaped To Your Life | TrueCar"
                            class="absolute top-[0px] left-[0px] h-[100%] w-[100%] !border-none"
                            src="https://www.youtube.com/embed/-rTtnjKFuVw?rel=0&amp;modestbranding=1&amp;enablejsapi=1"
                            frameborder="0" allow="fullscreen" allowfullscreen="" width="1440" height="810"
                            loading="lazy" data-gtm-yt-inspected-6="true" id="361796689"></iframe></div>
                </div>
                <div class="container container-max-width-1">
                    <div class="py-5">
                        <h2 class="heading-3 normal-case heading-md-2 md:normal-case py-2">Who We Are</h2>
                        <div class="mb-3">
                            <p data-test="homeAboutBody">For nearly two decades, TrueCar has enabled consumers to connect
                                with Certified Dealers to engage in buying and selling automotive transactions. We are the
                                first and only online marketplace for new, used and certified pre-owned vehicles. We provide
                                consumers with the research and shopping tools they need to confidently purchase or lease a
                                vehicle that fits their life. In partnership with our network of Certified Dealers, we offer
                                one of the most expansive inventories.</p>
                            <p class="pt-3">Now, TrueCar is building a modern-day marketplace to make car buying and
                                selling more easy, convenient and transparent, and bringing more of the transaction online.
                                We are designing a shopping experience customized to individual preferences. There is no
                                “one-size-fits-all” solution when it comes to purchasing a car. Whether your budget is
                                $6,000 or $60,000, or if it’s your first time buying a car or 14th time, TrueCar makes car
                                buying true for you.</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="list-striped">
                <section>
                    <div class="container container-max-width-1">
                        <div class="pt-5 md:pt-6 md:pb-6">
                            <div class="border-b pb-3 md:pb-5">
                                <h2 class="heading-3 normal-case heading-md-2 md:normal-case pb-2">What We Do</h2>We’re
                                redefining car buying to reflect the experience people desire: flexible, convenient and
                                shaped to their life. We do this by enabling consumers and dealers to connect through a
                                world-class technology platform that offers more access, more choice, and more control than
                                ever before from discovery to delivery.
                            </div>
                            <div class="pt-5">
                                <div class="row pb-5">
                                    <div class="md:pr-5 col-12 col-md-6">
                                        <div class="picture-container picture-container-block"
                                            style="padding-bottom:64.04682274247492%"><img class="picture-block"
                                                sizes="425px"
                                                src="{{asset('assets/_next/static/images/designed-with-purpose-bd456f5883add456d3846ce979732fb5.jpg')}}?auto=format&amp;h=307.4247491638796&amp;w=480"
                                                srcset="{{asset('assets/_next/static/images/designed-with-purpose-bd456f5883add456d3846ce979732fb5.jpg')}}?auto=format&amp;h=307.4247491638796&amp;w=480 480w, {{asset('assets/_next/static/images/designed-with-purpose-bd456f5883add456d3846ce979732fb5.jpg')}}?auto=format&amp;h=614.8494983277592&amp;w=960 960w"
                                                alt="" role="presentation"></div>
                                    </div>
                                    <div class="pt-3 md:pl-5 md:pt-0 col-12 col-md-6">
                                        <h3 class="heading-3 normal-case pb-2">Designed With Purpose</h3>There’s nothing
                                        better than that “I’ve got this” feeling.
                                        That’s why, at TrueCar, we empower car buyers and sellers with the
                                        resources they need for a tailored experience from start to
                                        finish. Now they can shop how they want, when they want to find
                                        the right car for their lifestyle and budget from one of the
                                        nation’s largest inventories of vehicles.
                                        <div class="pt-2-5"><a href="/">Start shopping</a></div>
                                    </div>
                                </div>
                                <div class="row pb-5">
                                    <div class="md:pr-5 col-12 col-md-6">
                                        <div class="picture-container picture-container-block"
                                            style="padding-bottom:64.04682274247492%"><img class="picture-block"
                                                sizes="425px"
                                                src="{{asset('assets/_next/static/images/developed-by-relationships-03afecdffef6dca88d960c689477137a.jpg')}}?auto=format&amp;h=307.4247491638796&amp;w=480"
                                                srcset="{{asset('assets/_next/static/images/developed-by-relationships-03afecdffef6dca88d960c689477137a.jpg')}}?auto=format&amp;h=307.4247491638796&amp;w=480 480w, {{asset('assets/_next/static/images/developed-by-relationships-03afecdffef6dca88d960c689477137a.jpg')}}?auto=format&amp;h=614.8494983277592&amp;w=960 960w"
                                                alt="" role="presentation"></div>
                                    </div>
                                    <div class="pt-3 md:pl-5 md:pt-0 col-12 col-md-6">
                                        <h3 class="heading-3 normal-case pb-2">Developed By Relationships</h3>Our
                                        relationships are the cornerstone of our business, and we’re proud
                                        of the connections we’ve fostered – from our network of over 10,000
                                        Certified Dealers nationwide to our partnerships with some of America’s
                                        most trusted brands to power their car buying programs.<div class="pt-2-5"><a
                                                href="https://dealerportal.truecar.com/" target="_blank">Be a partner</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-5">
                                    <div class="md:pr-5 col-12 col-md-6">
                                        <div class="picture-container picture-container-block"
                                            style="padding-bottom:64.04682274247492%"><img class="picture-block"
                                                sizes="425px"
                                                src="{{asset('assets/_next/static/images/driven-by-humanity-4c96b7ed55e517dd8464f0f9cd41bfe6.jpg')}}?auto=format&amp;h=307.4247491638796&amp;w=480"
                                                srcset="{{asset('assets/_next/static/images/driven-by-humanity-4c96b7ed55e517dd8464f0f9cd41bfe6.jpg')}}?auto=format&amp;h=307.4247491638796&amp;w=480 480w, {{asset('assets/_next/static/images/driven-by-humanity-4c96b7ed55e517dd8464f0f9cd41bfe6.jpg')}}?auto=format&amp;h=614.8494983277592&amp;w=960 960w"
                                                alt="" role="presentation"></div>
                                    </div>
                                    <div class="pt-3 md:pl-5 md:pt-0 col-12 col-md-6">
                                        <h3 class="heading-3 normal-case pb-2">Driven By Humanity</h3>It’s people who are
                                        at the center of our universe. Cars play an
                                        important role in our daily lives and for many, it is one of the biggest
                                        purchases you can make. We’re dedicated to helping everyone in our
                                        community achieve their goals as easily and efficiently as possible,
                                        including our consumers, our dealers and our valued members of the
                                        military community.<div class="pt-2-5"><a href="https://www.truecar.com/blog/"
                                                target="_blank">Learn more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container container-max-width-1">
                        <div class="row items-center py-5 md:py-7">
                            <div class="flex flex-col items-center md:items-start col-12 col-md-5">
                                <h2 class="heading-3 normal-case heading-md-2 md:normal-case">Keep up with the&nbsp;latest
                                </h2>
                                <div class="w-3/4 pt-3 pb-6 md:pb-0"><a data-ignore-contrast="true" data-loading="false"
                                        href="https://ir.truecar.com/press-releases/" target="_blank" rel="noopener"
                                        class="btn btn-primary btn-md btn-block"><span class="btn-inner">See
                                            Newsroom</span></a></div>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="picture-container picture-container-block"
                                    style="padding-bottom:36.36904761904762%"><img class="picture-block"
                                        sizes="538.328125px"
                                        src="{{asset('assets/_next/static/images/keep-up-with-the-latest-c4dde311f38be687d8173e507af4f525.png')}}?auto=format&amp;h=203.66666666666666&amp;w=560"
                                        srcset="{{asset('assets/_next/static/images/keep-up-with-the-latest-c4dde311f38be687d8173e507af4f525.png')}}?auto=format&amp;h=203.66666666666666&amp;w=560 560w, {{asset('assets/_next/static/images/keep-up-with-the-latest-c4dde311f38be687d8173e507af4f525.png')}}?auto=format&amp;h=349.1428571428571&amp;w=960 960w"
                                        alt="" role="presentation"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
