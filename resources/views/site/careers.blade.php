@extends('site.layouts.app')
@section('content')
    <main id="mainContent" style="margin-top:60px"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
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
                        <li class="flex justify-center md:px-3 lg:px-4"><a href="https://ir.truecar.com/" target="_blank"
                                rel="noopener" aria-current="false" aria-disabled="false" class="inline-block tab"><span
                                    class="tab-text">Investors</span><span class="tab-bottom-border"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="pb-5 md:mb-7">
            <div class="container container-max-width-1">
                <h1 class="heading-1 normal-case my-6 text-center font-bold text-[black] md:my-7 md:text-[72px]"
                    data-test="careersHeader">You Belong in the<br>
                    <div class="picture-container align-bottom md:hidden" style="padding-bottom:0;width:303px;height:60px">
                        <img class="picture-inner"
                            src="{{asset('assets/_next/static/images/TrueCarCrew-6efaa50d6d26a7925210af56e47f20ac.png')}}?auto=format&amp;h=60&amp;w=303"
                            srcset="{{asset('assets/_next/static/images/TrueCarCrew-6efaa50d6d26a7925210af56e47f20ac.png')}}?auto=format&amp;h=60&amp;w=303 1x, {{asset('assets/_next/static/images/TrueCarCrew-6efaa50d6d26a7925210af56e47f20ac.png')}}?auto=format&amp;h=120&amp;w=606 2x"
                            alt="TrueCar Crew"></div>
                    <div class="picture-container -mt-3 hidden align-bottom md:inline-block"
                        style="padding-bottom:0;width:525px;height:105px"><img class="picture-inner"
                            src="{{asset('assets/_next/static/images/TrueCarCrew-6efaa50d6d26a7925210af56e47f20ac.png')}}?auto=format&amp;h=105&amp;w=525"
                            srcset="{{asset('assets/_next/static/images/TrueCarCrew-6efaa50d6d26a7925210af56e47f20ac.png')}}?auto=format&amp;h=105&amp;w=525 1x, {{asset('assets/_next/static/images/TrueCarCrew-6efaa50d6d26a7925210af56e47f20ac.png')}}?auto=format&amp;h=210&amp;w=1050 2x"
                            alt="TrueCar Crew"></div>
                </h1>
                <div class="grid gap-y-3">
                    <p>Please be aware that online actors may fraudulently pose as TrueCar employees or representatives in
                        attempts to wrongfully obtain personal and financial information, money, or other items of value
                        from potential job applicants by presenting false job opportunities, interviews, or offers that
                        appear to be authorized by TrueCar.<!-- --> <button type="button" class="link-button">See more
                            information below.</button></p>
                    <h2 class="heading-3 normal-case">Be True, Be&nbsp;You</h2>
                    <p>Here at TrueCar, we know our crew members are our greatest asset. We value the different backgrounds,
                        unique perspectives, individual experiences, and special skills each crew member brings, making us
                        stronger together. We are building a marketplace for everyone, and to be successful, our crew must
                        reflect the communities and consumers we serve and be empowered to bring our whole, authentic selves
                        to work. That is why TrueCar is committed to creating a workplace that promotes and values
                        diversity, equity, and inclusion — where crew members know they belong and can thrive every day.</p>
                    <div class="flex justify-center"><button type="button" data-ignore-contrast="true" data-loading="false"
                            class="mt-4 btn btn-primary btn-md"><span class="btn-inner">See our open
                                positions</span></button></div>
                </div>
            </div>
        </div>
        <div class="bg-light">
            <div class="container container-max-width-1">
                <div class="py-5">
                    <div class="pb-5">
                        <div class="heading-3 normal-case pb-2">Our crew members are our greatest strength in driving
                            our&nbsp;mission.</div>
                        <p>We’re redefining car buying to reflect the experience people desire: flexible, convenient and
                            shaped to their life. We do this by enabling consumers and dealers to connect through a
                            world-class technology platform that offers more access, more choice, and more control than ever
                            before from discovery to delivery.</p>
                    </div>
                    <div class="mb-5 border-b border-b-gray-dark"></div>
                    <div class="row">
                        <div class="mb-4 pr-4 col-12 col-md-6">
                            <div class="px-1">
                                <div class="picture-container picture-container-block"
                                    style="padding-bottom:67.79661016949152%"><img class="picture-block" sizes="425px"
                                        src="{{asset('assets/_next/static/images/careers-culture-slide-1-ca4e8d4021f3a17d44b141e473546ef3.jpeg')}}?auto=format&amp;fit=max&amp;h=325.4237288135593&amp;w=480"
                                        srcset="{{asset('assets/_next/static/images/careers-culture-slide-1-ca4e8d4021f3a17d44b141e473546ef3.jpeg')}}?auto=format&amp;fit=max&amp;h=325.4237288135593&amp;w=480 480w, {{asset('assets/_next/static/images/careers-culture-slide-1-ca4e8d4021f3a17d44b141e473546ef3.jpeg')}}?auto=format&amp;fit=max&amp;h=650.8474576271186&amp;w=960 960w"
                                        alt="" role="presentation"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="pb-4">
                                <div class="heading-4 normal-case heading-lg-3 lg:normal-case pb-2">Purpose Driven &amp;
                                    Personal&nbsp;Impact</div>
                                <div>
                                    <p class="mb-3">We encourage our TrueCar Crew to have a strong sense of ownership and
                                        bring ideas that can have a direct impact on our product and our business.</p>
                                    <p>The TrueCar Crew has the opportunity and ability to influence roadmaps, priorities,
                                        programs, procedures, product features and technologies – all in support of making
                                        car buying and selling easy, transparent and efficient.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-4 pr-4 col-12 col-md-6">
                            <div class="px-1">
                                <div class="picture-container picture-container-block"
                                    style="padding-bottom:67.79661016949152%"><img class="picture-block" sizes="425px"
                                        src="{{asset('assets/_next/static/images/careers-culture-slide-2-0e264c590a89eea22ffa4dbd7e6bd838.jpeg')}}?auto=format&amp;fit=max&amp;h=325.4237288135593&amp;w=480"
                                        srcset="{{asset('assets/_next/static/images/careers-culture-slide-2-0e264c590a89eea22ffa4dbd7e6bd838.jpeg')}}?auto=format&amp;fit=max&amp;h=325.4237288135593&amp;w=480 480w, {{asset('assets/_next/static/images/careers-culture-slide-2-0e264c590a89eea22ffa4dbd7e6bd838.jpeg')}}?auto=format&amp;fit=max&amp;h=650.8474576271186&amp;w=960 960w"
                                        alt="" role="presentation"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="pb-4">
                                <div class="heading-4 normal-case heading-lg-3 lg:normal-case pb-2">Opportunity for Growth
                                </div>
                                <div>We seek to challenge and encourage growth all who are willing, providing them with the
                                    skills, knowledge and experiences to take that next step in their career, from job
                                    transfers to promotion opportunities. When our TrueCar Crew succeeds and grows, so does
                                    TrueCar.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-4 pr-4 col-12 col-md-6">
                            <div class="px-1">
                                <div class="picture-container picture-container-block"
                                    style="padding-bottom:67.79661016949152%"><img class="picture-block" sizes="425px"
                                        src="{{asset('assets/_next/static/images/careers-culture-slide-3-c2543d27e15680f62f6661a365a69538.jpeg')}}?auto=format&amp;fit=max&amp;h=325.4237288135593&amp;w=480"
                                        srcset="{{asset('assets/_next/static/images/careers-culture-slide-3-c2543d27e15680f62f6661a365a69538.jpeg')}}?auto=format&amp;fit=max&amp;h=325.4237288135593&amp;w=480 480w, {{asset('assets/_next/static/images/careers-culture-slide-3-c2543d27e15680f62f6661a365a69538.jpeg')}}?auto=format&amp;fit=max&amp;h=650.8474576271186&amp;w=960 960w"
                                        alt="" role="presentation"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="pb-4">
                                <div class="heading-4 normal-case heading-lg-3 lg:normal-case pb-2">Dynamic Work
                                    Environment</div>
                                <div>TrueCar has implemented a dynamic work environment with our entire crew based out of
                                    their homes. It allows our TrueCar Crew to work from home and live anywhere in the
                                    country (some roles excluded). We also believe in the power of coming together in-person
                                    and deliberately design these moments to foster connection and collaboration.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-max-width-1 mt-5 mb-6">
            <h2 class="heading-2 normal-case pb-3">The TrueCar Crew</h2>
            <div>
                <p class="mb-3">We are the TrueCar Crew, inspired by racing pit crews and how they work together. Each
                    person has a different and crucial role to play: Every crew member matters. They practice and train
                    together, refine their techniques and build trust with every step. They consistently show up for each
                    other with a goal of giving their best to the team. Come race day, all this hard work means they operate
                    as a highly precise team - trusting each other and anticipating each other's moves to deliver a winning
                    performance.</p>
                <p>At TrueCar, we believe everyone on our crew matters too. We are a team and everyone plays a pivotal role
                    in bringing our vision forward to “make car buying and selling easy, transparent and efficient, for both
                    consumers and dealers”. We show up consistently, looking for ways to build our own skills and fostering
                    trusting relationships with our fellow crew members. We rally behind our company vision, working
                    together to have a winning experience and platform for our consumers and dealers.</p>
            </div>
        </div>
        <section class="bg-light">
            <div class="container container-max-width-1">
                <div class="py-4">
                    <h2 class="heading-2 normal-case pb-4">Our Benefits</h2>
                    <div class="row row-card">
                        <div class="px-2 pb-3 col-12 col-sm-6 col-lg-4">
                            <div
                                class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] flex rounded-none py-3 px-3 text-white hover:text-white theme-blue-900">
                                <h3 class="heading-3 normal-case w-full pb-3">Physical &amp; Mental&nbsp;Health</h3>
                                <div>
                                    <div>
                                        <p class="mb-3">We pay 100% of your health benefits and offer highly discounted
                                            benefits for your dependents.</p>
                                        <p class="mb-3">We offer free clinical therapy and coaching sessions for you and
                                            your dependents (up to six sessions each).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-2 pb-3 col-12 col-sm-6 col-lg-4">
                            <div
                                class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] flex rounded-none py-3 px-3 text-white hover:text-white bg-[#03806D]">
                                <h3 class="heading-3 normal-case w-full pb-3">Growth &amp; Development</h3>
                                <div>
                                    <div>
                                        <p class="mb-3">We offer a learning &amp; development reimbursement program to
                                            support your cognitive growth.</p>
                                        <p class="mb-3">We offer a wellness stipend to you and your dependents to invest
                                            in your physical growth &amp; wellbeing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-2 pb-3 col-12 col-sm-6 col-lg-4">
                            <div
                                class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] flex rounded-none py-3 px-3 text-white hover:text-white bg-[#2E348C]">
                                <h3 class="heading-3 normal-case w-full pb-3">Community Engagement</h3>
                                <div>
                                    <div>
                                        <p class="mb-3">We deliver an Impact Program, offering in-person and virtual
                                            opportunities to volunteer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-2 pb-3 col-12 col-sm-6 col-lg-4">
                            <div
                                class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] flex rounded-none py-3 px-3 text-white hover:text-white bg-[#8D28C4]">
                                <h3 class="heading-3 normal-case w-full pb-3">Investing in the&nbsp;Future</h3>
                                <div>
                                    <div>
                                        <p class="mb-3">We offer a 401(k) and match contributions up to 3%.</p>
                                        <p class="mb-3">We also offer a generous equity package for eligible roles.</p>
                                        <p class="mb-3">We provide access to tools &amp; resources to help you navigate
                                            personal &amp; professional challenges.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-2 pb-3 col-12 col-sm-6 col-lg-4">
                            <div
                                class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] flex rounded-none py-3 px-3 text-white hover:text-white bg-[#D12F85]">
                                <h3 class="heading-3 normal-case w-full pb-3">Time-Off</h3>
                                <div>
                                    <div>
                                        <p class="mb-3">We support you in taking time off to recharge your batteries with
                                            our rich time-off policy and paid company designated days off.</p>
                                        <p class="mb-3">We offer company paid leave for birthing and non-birthing
                                            parents; as well as, non-birth related medical leaves.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-2 pb-3 col-12 col-sm-6 col-lg-4">
                            <div
                                class="linkable card transition-[transition:box-shadow] shadow-[2px_2px_7px_0_rgba(1,1,1,0.15)] duration-300 ease-[cubic-bezier(0.64,0.04,0.35,1)] flex rounded-none py-3 px-3 text-white hover:text-white bg-[#BD5622]">
                                <h3 class="heading-3 normal-case w-full pb-3">Dynamic Workplace</h3>
                                <div>
                                    <div>
                                        <p class="mb-3">We will help you get setup with an ergonomic at-home workstation.
                                        </p>
                                        <p class="mb-3">We provide a Connectivity Program to cover your internet &amp;
                                            cell phone.</p>
                                        <p class="mb-3">We develop engaging experiences to keep you connected to your
                                            colleagues.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container container-max-width-1">
            <div id="grnhse_app" class="min-h-screen"><iframe id="grnhse_iframe" width="100%" frameborder="0"
                    scrolling="no" allow="geolocation" onload="undefined" title="Greenhouse Job Board"
                    src="https://boards.greenhouse.io/embed/job_board?for=truecar&amp;b=https%3A%2F%2Fwww.truecar.com%2Fcareers%2F"
                    height="3372"></iframe></div>
        </div>
        <div class="container container-max-width-1 pb-5 pt-3 grid gap-y-3">
            <p>It is TrueCar’s policy to provide equal employment opportunity (EEO) to all persons regardless sex (including
                pregnancy, childbirth, breastfeeding or related medical conditions), race, religion (including religious
                dress and grooming practices), color, gender (including gender identity and gender expression), national
                origin (including language use restrictions and possession of a driver's license issued under California
                Vehicle Code section 12801.9), ancestry, physical or mental disability, medical condition, genetic
                information, marital status, registered domestic partner status, age, sexual orientation, military and
                veteran status or any other basis protected by federal, state or local law, ordinance or regulation. In
                addition, TrueCar will provide reasonable accommodations for qualified individuals with disabilities.
                TrueCar does not accept unsolicited agency submissions.</p>
            <p>Please be aware that online actors may fraudulently pose as TrueCar employees or representatives in attempts
                to wrongfully obtain personal and financial information, money, or other items of value from potential job
                applicants by presenting false job opportunities, interviews, or offers that appear to be authorized by
                TrueCar.</p>
            <p>TrueCar personnel will never communicate with job applicants from an email address that does not end in
                "@truecar.com" and neither TrueCar personnel nor its third-party representatives (such as recruiters) will
                ever ask applicants to provide financial information or payment as a part of the job application or
                onboarding process. Imposters may pose as third-party recruiters, use domain names that appear similar to
                TrueCar's, or present forged documents that appear to have been authorized by actual TrueCar employees.</p>
            <p>If you suspect you have been targeted by a fraudulent account, please notify<!-- --> <a
                    href="mailto:recruiting@truecar.com">recruiting@truecar.com</a>. If you believe you are a victim of
                fraud, we encourage you to report the occurrence to law enforcement.</p>
            <p>TrueCar is not liable for the actions of third parties who fraudulently represent themselves to be associated
                with TrueCar, or for any damages, losses, or other claims resulting therefrom. We encourage you to exercise
                caution if you receive unsolicited communications purporting to be on behalf of TrueCar or if you are asked
                to provide financial information or anything of monetary value. Please refer to the<!-- --> <a
                    href="https://consumer.ftc.gov/articles/job-scams" target="_blank">Federal Trade Commission's
                    resources related to employment scams</a> <!-- -->for additional information.</p>
        </div>
    </main>
@endsection
