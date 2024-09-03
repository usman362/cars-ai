@extends('site.layouts.app')
@section('content')
<style>
    body{
        background-color: #000000;
        color: #ffffff;
    }
    .form-check-input {
        position: relative;
    }
</style>
    <div class="page-header bg-section parallaxie" style="margin-top: 160px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: center; position: relative;">
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        O</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        u</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        r</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        F</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        l</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        e</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        e</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        t</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        s</div>
                                </div>
                            </div>
                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">fleets</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>


    <div class="page-fleets">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Fleets Sidebar Start -->
                    <div class="fleets-sidebar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <!-- Fleets Search Box Start -->
                        <div class="fleets-search-box">
                            <form id="fleetsForm" action="#" method="POST">
                                <div class="form-group">
                                    <input type="text" name="search" class="form-control" id="search"
                                        placeholder="Search..." required="">
                                    <button type="submit" class="section-icon-btn"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- Fleets Search Box End -->

                        <div class="fleets-sidebar-list-box">
                            <!-- Fleets Sidebar List Start -->
                            <div class="fleets-sidebar-list">
                                <div class="fleets-list-title">
                                    <h3>categories</h3>
                                </div>

                                <ul>
                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">sport cars</label>
                                    </li>

                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                                        <label class="form-check-label" for="checkbox2">electric car</label>
                                    </li>

                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                                        <label class="form-check-label" for="checkbox3">Convertible</label>
                                    </li>

                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox4">
                                        <label class="form-check-label" for="checkbox4">luxury cars</label>
                                    </li>

                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox5">
                                        <label class="form-check-label" for="checkbox5">sedan</label>
                                    </li>

                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox6">
                                        <label class="form-check-label" for="checkbox6">coupe cars</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Fleets Sidebar List End -->

                            <!-- Fleets Sidebar List Start -->
                            <div class="fleets-sidebar-list">
                                <div class="fleets-list-title">
                                    <h3>pickup location</h3>
                                </div>

                                <ul>
                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox7">
                                        <label class="form-check-label" for="checkbox7">abu dhabi</label>
                                    </li>

                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox8">
                                        <label class="form-check-label" for="checkbox8">alain</label>
                                    </li>

                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox9">
                                        <label class="form-check-label" for="checkbox9">dubai</label>
                                    </li>

                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox10">
                                        <label class="form-check-label" for="checkbox10">sharjah</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Fleets Sidebar List End -->

                            <!-- Fleets Sidebar List Start -->
                            <div class="fleets-sidebar-list">
                                <div class="fleets-list-title">
                                    <h3>dropoff location</h3>
                                </div>

                                <ul>
                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox11">
                                        <label class="form-check-label" for="checkbox11">abu dhabi</label>
                                    </li>

                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox12">
                                        <label class="form-check-label" for="checkbox12">alain</label>
                                    </li>

                                    <li class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox13">
                                        <label class="form-check-label" for="checkbox13">dubai</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Fleets Sidebar List End -->
                        </div>
                    </div>
                    <!-- Fleets Sidebar End -->
                </div>

                <div class="col-lg-9">
                    <!-- Fleets Collection Box Start -->
                    <div class="fleets-collection-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!-- Perfect Fleets Item Start -->
                                <div class="perfect-fleet-item fleets-collection-item wow fadeInUp"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <!-- Image Box Start -->
                                    <div class="image-box">
                                        <img src="{{asset('novaride/images/perfect-fleet-img-1.png')}}" alt="">
                                    </div>
                                    <!-- Image Box End -->

                                    <!-- Perfect Fleets Content Start -->
                                    <div class="perfect-fleet-content">
                                        <!-- Perfect Fleets Title Start -->
                                        <div class="perfect-fleet-title">
                                            <h3>luxury car</h3>
                                            <h2>BMW M2 Car 2017</h2>
                                        </div>
                                        <!-- Perfect Fleets Content End -->

                                        <!-- Perfect Fleets Body Start -->
                                        <div class="perfect-fleet-body">
                                            <ul>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-1.svg')}}" alt="">4 passenger
                                                </li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-2.svg')}}" alt="">4 door</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-3.svg')}}" alt="">bags</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-4.svg')}}" alt="">auto</li>
                                            </ul>
                                        </div>
                                        <!-- Perfect Fleets Body End -->

                                        <!-- Perfect Fleets Footer Start -->
                                        <div class="perfect-fleet-footer">
                                            <!-- Perfect Fleets Pricing Start -->
                                            <div class="perfect-fleet-pricing">
                                                <h2>$280<span>/day</span></h2>
                                            </div>
                                            <!-- Perfect Fleets Pricing End -->

                                            <!-- Perfect Fleets Btn Start -->
                                            <div class="perfect-fleet-btn">
                                                <a href="#" class="section-icon-btn"><img
                                                        src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Perfect Fleets Btn End -->
                                        </div>
                                        <!-- Perfect Fleets Footer End -->
                                    </div>
                                    <!-- Perfect Fleets Content End -->
                                </div>
                                <!-- Perfect Fleets Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Perfect Fleets Item Start -->
                                <div class="perfect-fleet-item fleets-collection-item wow fadeInUp" data-wow-delay="0.2s"
                                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <!-- Image Box Start -->
                                    <div class="image-box">
                                        <img src="{{asset('novaride/images/perfect-fleet-img-2.png')}}" alt="">
                                    </div>
                                    <!-- Image Box End -->

                                    <!-- Perfect Fleets Content Start -->
                                    <div class="perfect-fleet-content">
                                        <!-- Perfect Fleets Title Start -->
                                        <div class="perfect-fleet-title">
                                            <h3>luxury car</h3>
                                            <h2>Audi RS7 Car 2016</h2>
                                        </div>
                                        <!-- Perfect Fleets Content End -->

                                        <!-- Perfect Fleets Body Start -->
                                        <div class="perfect-fleet-body">
                                            <ul>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-1.svg')}}" alt="">4 passenger
                                                </li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-2.svg')}}" alt="">4 door</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-3.svg')}}" alt="">bags</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-4.svg')}}" alt="">auto</li>
                                            </ul>
                                        </div>
                                        <!-- Perfect Fleets Body End -->

                                        <!-- Perfect Fleets Footer Start -->
                                        <div class="perfect-fleet-footer">
                                            <!-- Perfect Fleets Pricing Start -->
                                            <div class="perfect-fleet-pricing">
                                                <h2>$320<span>/day</span></h2>
                                            </div>
                                            <!-- Perfect Fleets Pricing End -->

                                            <!-- Perfect Fleets Btn Start -->
                                            <div class="perfect-fleet-btn">
                                                <a href="#" class="section-icon-btn"><img
                                                        src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Perfect Fleets Btn End -->
                                        </div>
                                        <!-- Perfect Fleets Footer End -->
                                    </div>
                                    <!-- Perfect Fleets Content End -->
                                </div>
                                <!-- Perfect Fleets Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Perfect Fleets Item Start -->
                                <div class="perfect-fleet-item fleets-collection-item wow fadeInUp" data-wow-delay="0.4s"
                                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    <!-- Image Box Start -->
                                    <div class="image-box">
                                        <img src="{{asset('novaride/images/perfect-fleet-img-3.png')}}" alt="">
                                    </div>
                                    <!-- Image Box End -->

                                    <!-- Perfect Fleets Content Start -->
                                    <div class="perfect-fleet-content">
                                        <!-- Perfect Fleets Title Start -->
                                        <div class="perfect-fleet-title">
                                            <h3>luxury car</h3>
                                            <h2>Ferrari F12 Car 2022</h2>
                                        </div>
                                        <!-- Perfect Fleets Content End -->

                                        <!-- Perfect Fleets Body Start -->
                                        <div class="perfect-fleet-body">
                                            <ul>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-1.svg')}}" alt="">4 passenger
                                                </li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-2.svg')}}" alt="">4 door</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-3.svg')}}" alt="">bags</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-4.svg')}}" alt="">auto</li>
                                            </ul>
                                        </div>
                                        <!-- Perfect Fleets Body End -->

                                        <!-- Perfect Fleets Footer Start -->
                                        <div class="perfect-fleet-footer">
                                            <!-- Perfect Fleets Pricing Start -->
                                            <div class="perfect-fleet-pricing">
                                                <h2>$450<span>/day</span></h2>
                                            </div>
                                            <!-- Perfect Fleets Pricing End -->

                                            <!-- Perfect Fleets Btn Start -->
                                            <div class="perfect-fleet-btn">
                                                <a href="#" class="section-icon-btn"><img
                                                        src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Perfect Fleets Btn End -->
                                        </div>
                                        <!-- Perfect Fleets Footer End -->
                                    </div>
                                    <!-- Perfect Fleets Content End -->
                                </div>
                                <!-- Perfect Fleets Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Perfect Fleets Item Start -->
                                <div class="perfect-fleet-item fleets-collection-item wow fadeInUp" data-wow-delay="0.6s"
                                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                    <!-- Image Box Start -->
                                    <div class="image-box">
                                        <img src="{{asset('novaride/images/perfect-fleet-img-4.png')}}" alt="">
                                    </div>
                                    <!-- Image Box End -->

                                    <!-- Perfect Fleets Content Start -->
                                    <div class="perfect-fleet-content">
                                        <!-- Perfect Fleets Title Start -->
                                        <div class="perfect-fleet-title">
                                            <h3>luxury car</h3>
                                            <h2>Toyota Yaris 2017</h2>
                                        </div>
                                        <!-- Perfect Fleets Content End -->

                                        <!-- Perfect Fleets Body Start -->
                                        <div class="perfect-fleet-body">
                                            <ul>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-1.svg')}}" alt="">4 passenger
                                                </li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-2.svg')}}" alt="">4 door</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-3.svg')}}" alt="">bags</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-4.svg')}}" alt="">auto</li>
                                            </ul>
                                        </div>
                                        <!-- Perfect Fleets Body End -->

                                        <!-- Perfect Fleets Footer Start -->
                                        <div class="perfect-fleet-footer">
                                            <!-- Perfect Fleets Pricing Start -->
                                            <div class="perfect-fleet-pricing">
                                                <h2>$220<span>/day</span></h2>
                                            </div>
                                            <!-- Perfect Fleets Pricing End -->

                                            <!-- Perfect Fleets Btn Start -->
                                            <div class="perfect-fleet-btn">
                                                <a href="#" class="section-icon-btn"><img
                                                        src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Perfect Fleets Btn End -->
                                        </div>
                                        <!-- Perfect Fleets Footer End -->
                                    </div>
                                    <!-- Perfect Fleets Content End -->
                                </div>
                                <!-- Perfect Fleets Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Perfect Fleets Item Start -->
                                <div class="perfect-fleet-item fleets-collection-item wow fadeInUp" data-wow-delay="0.8s"
                                    style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                                    <!-- Image Box Start -->
                                    <div class="image-box">
                                        <img src="{{asset('novaride/images/perfect-fleet-img-5.png')}}" alt="">
                                    </div>
                                    <!-- Image Box End -->

                                    <!-- Perfect Fleets Content Start -->
                                    <div class="perfect-fleet-content">
                                        <!-- Perfect Fleets Title Start -->
                                        <div class="perfect-fleet-title">
                                            <h3>luxury car</h3>
                                            <h2>BMW M2 Car 2017</h2>
                                        </div>
                                        <!-- Perfect Fleets Content End -->

                                        <!-- Perfect Fleets Body Start -->
                                        <div class="perfect-fleet-body">
                                            <ul>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-1.svg')}}" alt="">4 passenger
                                                </li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-2.svg')}}" alt="">4 door</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-3.svg')}}" alt="">bags</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-4.svg')}}" alt="">auto</li>
                                            </ul>
                                        </div>
                                        <!-- Perfect Fleets Body End -->

                                        <!-- Perfect Fleets Footer Start -->
                                        <div class="perfect-fleet-footer">
                                            <!-- Perfect Fleets Pricing Start -->
                                            <div class="perfect-fleet-pricing">
                                                <h2>$280<span>/day</span></h2>
                                            </div>
                                            <!-- Perfect Fleets Pricing End -->

                                            <!-- Perfect Fleets Btn Start -->
                                            <div class="perfect-fleet-btn">
                                                <a href="#" class="section-icon-btn"><img
                                                        src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Perfect Fleets Btn End -->
                                        </div>
                                        <!-- Perfect Fleets Footer End -->
                                    </div>
                                    <!-- Perfect Fleets Content End -->
                                </div>
                                <!-- Perfect Fleets Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Perfect Fleets Item Start -->
                                <div class="perfect-fleet-item fleets-collection-item wow fadeInUp" data-wow-delay="1s"
                                    style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                                    <!-- Image Box Start -->
                                    <div class="image-box">
                                        <img src="{{asset('novaride/images/perfect-fleet-img-6.png')}}" alt="">
                                    </div>
                                    <!-- Image Box End -->

                                    <!-- Perfect Fleets Content Start -->
                                    <div class="perfect-fleet-content">
                                        <!-- Perfect Fleets Title Start -->
                                        <div class="perfect-fleet-title">
                                            <h3>luxury car</h3>
                                            <h2>Audi RS7 Car 2016</h2>
                                        </div>
                                        <!-- Perfect Fleets Content End -->

                                        <!-- Perfect Fleets Body Start -->
                                        <div class="perfect-fleet-body">
                                            <ul>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-1.svg')}}" alt="">4 passenger
                                                </li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-2.svg')}}" alt="">4 door</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-3.svg')}}" alt="">bags</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-4.svg')}}" alt="">auto</li>
                                            </ul>
                                        </div>
                                        <!-- Perfect Fleets Body End -->

                                        <!-- Perfect Fleets Footer Start -->
                                        <div class="perfect-fleet-footer">
                                            <!-- Perfect Fleets Pricing Start -->
                                            <div class="perfect-fleet-pricing">
                                                <h2>$320<span>/day</span></h2>
                                            </div>
                                            <!-- Perfect Fleets Pricing End -->

                                            <!-- Perfect Fleets Btn Start -->
                                            <div class="perfect-fleet-btn">
                                                <a href="#" class="section-icon-btn"><img
                                                        src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Perfect Fleets Btn End -->
                                        </div>
                                        <!-- Perfect Fleets Footer End -->
                                    </div>
                                    <!-- Perfect Fleets Content End -->
                                </div>
                                <!-- Perfect Fleets Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Perfect Fleets Item Start -->
                                <div class="perfect-fleet-item fleets-collection-item wow fadeInUp" data-wow-delay="1.2s"
                                    style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
                                    <!-- Image Box Start -->
                                    <div class="image-box">
                                        <img src="{{asset('novaride/images/perfect-fleet-img-3.png')}}" alt="">
                                    </div>
                                    <!-- Image Box End -->

                                    <!-- Perfect Fleets Content Start -->
                                    <div class="perfect-fleet-content">
                                        <!-- Perfect Fleets Title Start -->
                                        <div class="perfect-fleet-title">
                                            <h3>luxury car</h3>
                                            <h2>Ferrari F12 Car 2022</h2>
                                        </div>
                                        <!-- Perfect Fleets Content End -->

                                        <!-- Perfect Fleets Body Start -->
                                        <div class="perfect-fleet-body">
                                            <ul>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-1.svg')}}" alt="">4 passenger
                                                </li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-2.svg')}}" alt="">4 door</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-3.svg')}}" alt="">bags</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-4.svg')}}" alt="">auto</li>
                                            </ul>
                                        </div>
                                        <!-- Perfect Fleets Body End -->

                                        <!-- Perfect Fleets Footer Start -->
                                        <div class="perfect-fleet-footer">
                                            <!-- Perfect Fleets Pricing Start -->
                                            <div class="perfect-fleet-pricing">
                                                <h2>$450<span>/day</span></h2>
                                            </div>
                                            <!-- Perfect Fleets Pricing End -->

                                            <!-- Perfect Fleets Btn Start -->
                                            <div class="perfect-fleet-btn">
                                                <a href="#" class="section-icon-btn"><img
                                                        src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Perfect Fleets Btn End -->
                                        </div>
                                        <!-- Perfect Fleets Footer End -->
                                    </div>
                                    <!-- Perfect Fleets Content End -->
                                </div>
                                <!-- Perfect Fleets Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Perfect Fleets Item Start -->
                                <div class="perfect-fleet-item fleets-collection-item wow fadeInUp" data-wow-delay="1.4s"
                                    style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInUp;">
                                    <!-- Image Box Start -->
                                    <div class="image-box">
                                        <img src="{{asset('novaride/images/perfect-fleet-img-4.png')}}" alt="">
                                    </div>
                                    <!-- Image Box End -->

                                    <!-- Perfect Fleets Content Start -->
                                    <div class="perfect-fleet-content">
                                        <!-- Perfect Fleets Title Start -->
                                        <div class="perfect-fleet-title">
                                            <h3>luxury car</h3>
                                            <h2>Toyota Yaris 2017</h2>
                                        </div>
                                        <!-- Perfect Fleets Content End -->

                                        <!-- Perfect Fleets Body Start -->
                                        <div class="perfect-fleet-body">
                                            <ul>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-1.svg')}}" alt="">4 passenger
                                                </li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-2.svg')}}" alt="">4 door</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-3.svg')}}" alt="">bags</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-4.svg')}}" alt="">auto</li>
                                            </ul>
                                        </div>
                                        <!-- Perfect Fleets Body End -->

                                        <!-- Perfect Fleets Footer Start -->
                                        <div class="perfect-fleet-footer">
                                            <!-- Perfect Fleets Pricing Start -->
                                            <div class="perfect-fleet-pricing">
                                                <h2>$220<span>/day</span></h2>
                                            </div>
                                            <!-- Perfect Fleets Pricing End -->

                                            <!-- Perfect Fleets Btn Start -->
                                            <div class="perfect-fleet-btn">
                                                <a href="#" class="section-icon-btn"><img
                                                        src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Perfect Fleets Btn End -->
                                        </div>
                                        <!-- Perfect Fleets Footer End -->
                                    </div>
                                    <!-- Perfect Fleets Content End -->
                                </div>
                                <!-- Perfect Fleets Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Perfect Fleets Item Start -->
                                <div class="perfect-fleet-item fleets-collection-item wow fadeInUp" data-wow-delay="1.4s"
                                    style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInUp;">
                                    <!-- Image Box Start -->
                                    <div class="image-box">
                                        <img src="{{asset('novaride/images/perfect-fleet-img-2.png')}}" alt="">
                                    </div>
                                    <!-- Image Box End -->

                                    <!-- Perfect Fleets Content Start -->
                                    <div class="perfect-fleet-content">
                                        <!-- Perfect Fleets Title Start -->
                                        <div class="perfect-fleet-title">
                                            <h3>luxury car</h3>
                                            <h2>Toyota Yaris 2017</h2>
                                        </div>
                                        <!-- Perfect Fleets Content End -->

                                        <!-- Perfect Fleets Body Start -->
                                        <div class="perfect-fleet-body">
                                            <ul>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-1.svg')}}" alt="">4 passenger
                                                </li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-2.svg')}}" alt="">4 door</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-3.svg')}}" alt="">bags</li>
                                                <li><img src="{{asset('novaride/images/icon-fleet-list-4.svg')}}" alt="">auto</li>
                                            </ul>
                                        </div>
                                        <!-- Perfect Fleets Body End -->

                                        <!-- Perfect Fleets Footer Start -->
                                        <div class="perfect-fleet-footer">
                                            <!-- Perfect Fleets Pricing Start -->
                                            <div class="perfect-fleet-pricing">
                                                <h2>$220<span>/day</span></h2>
                                            </div>
                                            <!-- Perfect Fleets Pricing End -->

                                            <!-- Perfect Fleets Btn Start -->
                                            <div class="perfect-fleet-btn">
                                                <a href="#" class="section-icon-btn"><img
                                                        src="{{asset('novaride/images/arrow-white.svg')}}" alt=""></a>
                                            </div>
                                            <!-- Perfect Fleets Btn End -->
                                        </div>
                                        <!-- Perfect Fleets Footer End -->
                                    </div>
                                    <!-- Perfect Fleets Content End -->
                                </div>
                                <!-- Perfect Fleets Item End -->
                            </div>

                            <div class="col-lg-12">
                                <!-- Fleets Pagination Start -->
                                <div class="fleets-pagination wow fadeInUp" data-wow-delay="0.5s"
                                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Fleets Pagination End -->
                            </div>
                        </div>
                    </div>
                    <!-- Fleets Collection Box End -->
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
                                    <div class="swiper-wrapper" data-cursor-text="Drag" id="swiper-wrapper-0a324b55aafd885e" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-433.333px, 0px, 0px); transition-delay: 0ms;">
                                        <!-- Testimonial Slide Start -->

                                        <!-- Testimonial Slide End -->

                                        <!-- Testimonial Slide Start -->

                                        <!-- Testimonial Slide End -->

                                        <!-- Testimonial Slide Start -->

                                        <!-- Testimonial Slide End -->

                                        <!-- Testimonial Slide Start -->

                                        <!-- Testimonial Slide End -->
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
                                        </div><div class="swiper-slide swiper-slide-active" style="width: 403.333px; margin-right: 30px;" role="group" aria-label="1 / 4" data-swiper-slide-index="0">
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
                                        <div class="testimonial-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-0a324b55aafd885e"></div>
                                        <div class="testimonial-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-0a324b55aafd885e"></div>
                                    </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            </div>
                            <!-- Testimonial Slider End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
