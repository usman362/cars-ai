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
                <div class="h-[100vh] min-h-[510px]" data-test="homeContactUs">
                    <h1 class="heading-1 normal-case">Contact Us</h1>
                    <div class="mt-3 mb-3 md:text-base">TrueCar does not broker, sell or lease motor vehicles but we are
                        here to help you if you have questions.</div>
                    <hr>
                    <div class="mt-3 mb-3">
                        <ul>
                            <li>TrueCar, Inc.</li>
                            <li>225 Santa Monica Blvd, 12th Floor</li>
                            <li>Santa Monica<!-- -->, <!-- -->CA<!-- --> <!-- -->90401</li>
                            <li><a href="tel:1-800-200-2000">1-800-200-2000</a></li>
                        </ul>
                    </div>
                    <h2 class="heading-3 normal-case">Customer Support</h2>
                    <div class="mb-3">
                        <div class="mb-2">
                            <ul>
                                <li><a aria-label="customer support alphanumeric phone number"
                                        href="tel:1-888-878-3227">1-888-TRUECAR</a></li>
                                <li><a href="tel:1-888-878-3227"
                                        aria-label="customer support phone number">1-888-878-3227</a></li>
                                <li><a href="tel:1-888-256-5461"
                                        aria-label="customer support Spanish phone number">1-888-256-5461<!-- -->
                                        (Español)</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li>Mon-Fri <!-- -->9am to 9pm EST</li>
                                <li>Sat-Sun <!-- -->10am to 7pm EST</li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="heading-3 normal-case">Media Inquiries</h3>
                    <div class="mt-1 mb-1">If you are a member of the news media on deadline, you can reach our Public
                        Relations team at<!-- --> <a href="mailto:pr@truecar.com">pr@truecar.com</a></div>
                </div>
            </div>
        </div>
    </main>
@endsection
