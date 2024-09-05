@extends('site.layouts.app')
@section('content')
    <main id="mainContent" style="margin-top:160px"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div class="page-header bg-section parallaxie">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Page Header Box Start -->
                        <div class="page-header-box">
                            <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">T</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">m</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h1>
                            <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./">home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">testimonials</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>

        <div class="page-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- Testimonial Item Start -->
                        <div class="testimonial-item page-testimonial-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="testimonial-header">
                                <div class="testimonial-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="testimonial-content">
                                    <p>The quality and reliability are top-notch, and the team behind it is always ready to assist with any questions or issues. Highly recommended!</p>
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
                                    <p>rental sales agent</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Testimonial Item Start -->
                        <div class="testimonial-item page-testimonial-box wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="testimonial-header">
                                <div class="testimonial-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="testimonial-content">
                                    <p>The quality and reliability are top-notch, and the team behind it is always ready to assist with any questions or issues. Highly recommended!</p>
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
                                    <p>service representative</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Testimonial Item Start -->
                        <div class="testimonial-item page-testimonial-box wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <div class="testimonial-header">
                                <div class="testimonial-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="testimonial-content">
                                    <p>The quality and reliability are top-notch, and the team behind it is always ready to assist with any questions or issues. Highly recommended!</p>
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
                                    <p>reservation agent</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Testimonial Item Start -->
                        <div class="testimonial-item page-testimonial-box wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <div class="testimonial-header">
                                <div class="testimonial-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="testimonial-content">
                                    <p>The quality and reliability are top-notch, and the team behind it is always ready to assist with any questions or issues. Highly recommended!</p>
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
                                    <p>counter agent</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Testimonial Item Start -->
                        <div class="testimonial-item page-testimonial-box wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <div class="testimonial-header">
                                <div class="testimonial-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="testimonial-content">
                                    <p>The quality and reliability are top-notch, and the team behind it is always ready to assist with any questions or issues. Highly recommended!</p>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <div class="author-image">
                                    <figure class="image-anime">
                                        <img src="{{asset('novaride/images/author-5.jpg')}}" alt="">
                                    </figure>
                                </div>
                                <div class="author-content">
                                    <h3>sophia thompson</h3>
                                    <p>service representative</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Testimonial Item Start -->
                        <div class="testimonial-item page-testimonial-box wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                            <div class="testimonial-header">
                                <div class="testimonial-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="testimonial-content">
                                    <p>The quality and reliability are top-notch, and the team behind it is always ready to assist with any questions or issues. Highly recommended!</p>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <div class="author-image">
                                    <figure class="image-anime">
                                        <img src="{{asset('novaride/images/author-6.jpg')}}" alt="">
                                    </figure>
                                </div>
                                <div class="author-content">
                                    <h3>luna vega</h3>
                                    <p>branch representative</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Testimonial Item Start -->
                        <div class="testimonial-item page-testimonial-box wow fadeInUp" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
                            <div class="testimonial-header">
                                <div class="testimonial-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="testimonial-content">
                                    <p>The quality and reliability are top-notch, and the team behind it is always ready to assist with any questions or issues. Highly recommended!</p>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <div class="author-image">
                                    <figure class="image-anime">
                                        <img src="{{asset('novaride/images/author-7.jpg')}}" alt="">
                                    </figure>
                                </div>
                                <div class="author-content">
                                    <h3>aurora wynn</h3>
                                    <p>relations coordinator</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Testimonial Item Start -->
                        <div class="testimonial-item page-testimonial-box wow fadeInUp" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInUp;">
                            <div class="testimonial-header">
                                <div class="testimonial-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="testimonial-content">
                                    <p>The quality and reliability are top-notch, and the team behind it is always ready to assist with any questions or issues. Highly recommended!</p>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <div class="author-image">
                                    <figure class="image-anime">
                                        <img src="{{asset('novaride/images/author-8.jpg')}}" alt="">
                                    </figure>
                                </div>
                                <div class="author-content">
                                    <h3>juniper monroe</h3>
                                    <p>experience manager</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Testimonial Item Start -->
                        <div class="testimonial-item page-testimonial-box wow fadeInUp" data-wow-delay="1.6s" style="visibility: visible; animation-delay: 1.6s; animation-name: fadeInUp;">
                            <div class="testimonial-header">
                                <div class="testimonial-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="testimonial-content">
                                    <p>The quality and reliability are top-notch, and the team behind it is always ready to assist with any questions or issues. Highly recommended!</p>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <div class="author-image">
                                    <figure class="image-anime">
                                        <img src="{{asset('novaride/images/author-9.jpg')}}" alt="">
                                    </figure>
                                </div>
                                <div class="author-content">
                                    <h3>daisy meadows</h3>
                                    <p>service desk associate</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
