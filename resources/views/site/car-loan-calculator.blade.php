@extends('site.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('novaride/css/car-loan-calculator.css') }}">
    <style>
        .page-faqs {
            background-color: #000000;
            color: #fff !important;
        }

        .page-faqs div{
            color: #fff !important;
        }

        .testimonial-item h3{
            color: #fff !important;
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
    <div id="main" style="margin-top: 116px">
        <div class="entry-header left small_title_box" style="">
            <div class="container">
                <div class="entry-title">
                    <h2 class="h1" style="">
                        Auto Loan Calculator </h2>
                </div>
            </div>
        </div>

        <!-- Breads -->
        <div class="container">
            <div data-elementor-type="wp-page" data-elementor-id="3258" class="elementor elementor-3258">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-db42d8c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="db42d8c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-4bfc04f"
                            data-id="4bfc04f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-62514a9 elementor-widget elementor-widget-text-editor"
                                    data-id="62514a9" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.20.0 - 13-03-2024 */
                                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                background-color: #69727d;
                                                color: #fff
                                            }

                                            .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                color: #69727d;
                                                border: 3px solid;
                                                background-color: transparent
                                            }

                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                margin-top: 8px
                                            }

                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                width: 1em;
                                                height: 1em
                                            }

                                            .elementor-widget-text-editor .elementor-drop-cap {
                                                float: left;
                                                text-align: center;
                                                line-height: 1;
                                                font-size: 50px
                                            }

                                            .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                display: inline-block
                                            }
                                        </style>
                                        <div class="wpb_text_column wpb_content_element vc_custom_1450931000474">
                                            <div class="wpb_wrapper">
                                                <p>Use this car payment calculator to estimate monthly payments on your next
                                                    new or used auto loan. Simply enter the loan amount, term and interest
                                                    rate to calculate your monthly auto loan payments. This calculator will
                                                    help you determine how much car you can afford.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-58ad784 elementor-widget elementor-widget-motors-loan-calculator"
                                    data-id="58ad784" data-element_type="widget"
                                    data-widget_type="motors-loan-calculator.default">
                                    <div class="elementor-widget-container">
                                        <div class="stm_auto_loan_calculator ">
                                            <div class="title single-calculator-title">
                                                <i class="fa-solid fa-calculator"></i>
                                                <h3 class="heading-font">Financing Calculator</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <!--Amount-->
                                                    <div class="form-group">
                                                        <div class="labeled ">
                                                            Vehicle price <span class="orange">($)</span></div>
                                                        <input type="text" class="numbersOnly vehicle_price"
                                                            value="">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <!--Interest rate-->
                                                            <div class="form-group md-mg-rt">
                                                                <div class="labeled ">
                                                                    Interest rate <span class="orange">(%)</span>
                                                                </div>
                                                                <input type="text" class="numbersOnly interest_rate"
                                                                    value="3">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <!--Period-->
                                                            <div class="form-group md-mg-lt">
                                                                <div class="labeled ">
                                                                    Loan Term <span class="orange">(month)</span>
                                                                </div>
                                                                <input type="text" class="numbersOnly period_month"
                                                                    value="24">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Down Payment-->
                                                    <div class="form-group">
                                                        <div class="labeled ">
                                                            Down Payment <span class="orange">($)</span>
                                                        </div>
                                                        <input type="text" class="numbersOnly down_payment"
                                                            value="">
                                                    </div>
                                                    <a href=""
                                                        class="button button-sm calculate_loan_payment dp-in">Calculate</a>
                                                    <div class="calculator-alert alert alert-danger"></div>
                                                </div>

                                                <!--Results-->
                                                <div class="col-md-12">
                                                    <div class="stm_calculator_results">
                                                        <div class="stm-calc-results-inner">
                                                            <div class="stm-calc-label">Monthly Payment</div>
                                                            <div class="monthly_payment h5"></div>

                                                            <div class="stm-calc-label">Total Interest Payment</div>
                                                            <div class="total_interest_payment h5"></div>

                                                            <div class="stm-calc-label">Total Amount to Pay</div>
                                                            <div class="total_amount_to_pay h5"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            (function($) {
                                                "use strict";
                                                $(document).ready(function() {
                                                    var vehicle_price;
                                                    var interest_rate;
                                                    var down_payment;
                                                    var period_month;
                                                    var stmCurrency = "$";
                                                    var stmPriceDel = " ";
                                                    var stmCurrencyPos = "left";
                                                    $('.calculate_loan_payment').on('click', function(e) {
                                                        e.preventDefault();
                                                        //Useful vars
                                                        var current_calculator = $(this).closest('.stm_auto_loan_calculator');
                                                        var calculator_alert = current_calculator.find('.calculator-alert');
                                                        //First of all hide alert
                                                        calculator_alert.removeClass('visible-alert');
                                                        //4 values for calculating
                                                        vehicle_price = parseFloat(current_calculator.find('input.vehicle_price').val());
                                                        interest_rate = parseFloat(current_calculator.find('input.interest_rate').val());
                                                        interest_rate = interest_rate / 1200;
                                                        down_payment = parseFloat(current_calculator.find('input.down_payment').val());
                                                        period_month = parseFloat(current_calculator.find('input.period_month').val());
                                                        //Help vars
                                                        var validation_errors = true;
                                                        var monthly_payment = 0;
                                                        var total_interest_payment = 0;
                                                        var total_amount_to_pay = 0;
                                                        //Check if not nan
                                                        if (isNaN(vehicle_price)) {
                                                            calculator_alert.text("Please fill Vehicle Price field");
                                                            calculator_alert.addClass('visible-alert');
                                                            current_calculator.find('input.vehicle_price').closest('.form-group').addClass(
                                                                'has-error');
                                                            validation_errors = true;
                                                        } else if (isNaN(interest_rate)) {
                                                            calculator_alert.text("Please fill Interest Rate field");
                                                            calculator_alert.addClass('visible-alert');
                                                            current_calculator.find('input.interest_rate').closest('.form-group').addClass(
                                                                'has-error');
                                                            validation_errors = true;
                                                        } else if (isNaN(period_month)) {
                                                            calculator_alert.text("Please fill Period field");
                                                            calculator_alert.addClass('visible-alert');
                                                            current_calculator.find('input.period_month').closest('.form-group').addClass(
                                                                'has-error');
                                                            validation_errors = true;
                                                        } else if (isNaN(down_payment)) {
                                                            calculator_alert.text("Please fill Down Payment field");
                                                            calculator_alert.addClass('visible-alert');
                                                            current_calculator.find('input.down_payment').closest('.form-group').addClass(
                                                                'has-error');
                                                            validation_errors = true;
                                                        } else if (down_payment > vehicle_price) {
                                                            //Check if down payment is not bigger than vehicle price
                                                            calculator_alert.text("Down payment can not be more than vehicle price");
                                                            calculator_alert.addClass('visible-alert');
                                                            current_calculator.find('input.down_payment').closest('.form-group').addClass(
                                                                'has-error');
                                                            validation_errors = true;
                                                        } else {
                                                            validation_errors = false;
                                                        }
                                                        if (!validation_errors) {
                                                            var interest_rate_unused = interest_rate;
                                                            if (interest_rate == 0) {
                                                                interest_rate_unused = 1;
                                                            }
                                                            monthly_payment = (vehicle_price - down_payment) * interest_rate_unused * Math
                                                                .pow(1 + interest_rate, period_month);
                                                            var monthly_payment_div = ((Math.pow(1 + interest_rate, period_month)) - 1);
                                                            if (monthly_payment_div == 0) {
                                                                monthly_payment_div = 1;
                                                            }
                                                            monthly_payment = monthly_payment / monthly_payment_div;
                                                            monthly_payment = monthly_payment.toFixed(2);
                                                            total_amount_to_pay = down_payment + (monthly_payment * period_month);
                                                            total_amount_to_pay = total_amount_to_pay.toFixed(2);
                                                            total_interest_payment = total_amount_to_pay - vehicle_price;
                                                            total_interest_payment = total_interest_payment.toFixed(2);
                                                            current_calculator.find('.stm_calculator_results').slideDown();
                                                            current_calculator.find('.monthly_payment').text(stm_get_price_view(
                                                                monthly_payment, stmCurrency, stmCurrencyPos, stmPriceDel));
                                                            current_calculator.find('.total_interest_payment').text(stm_get_price_view(
                                                                total_interest_payment, stmCurrency, stmCurrencyPos, stmPriceDel));
                                                            current_calculator.find('.total_amount_to_pay').text(stm_get_price_view(
                                                                total_amount_to_pay, stmCurrency, stmCurrencyPos, stmPriceDel));
                                                        } else {
                                                            current_calculator.find('.stm_calculator_results').slideUp();
                                                            current_calculator.find('.monthly_payment').text('');
                                                            current_calculator.find('.total_interest_payment').text('');
                                                            current_calculator.find('.total_amount_to_pay').text('');
                                                        }
                                                    })
                                                    $(".numbersOnly").on("keypress keyup blur", function(event) {
                                                        //this.value = this.value.replace(/[^0-9\.]/g,'');
                                                        $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
                                                        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 ||
                                                                event.which > 57)) {
                                                            event.preventDefault();
                                                        }
                                                        if ($(this).val() != '') {
                                                            $(this).closest('.form-group').removeClass('has-error');
                                                        }
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8f99223"
                            data-id="8f99223" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-fe65457 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="fe65457" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8784534"
                                            data-id="8784534" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-ba7735b elementor-widget elementor-widget-image"
                                                    data-id="ba7735b" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <style>
                                                            /*! elementor - v3.20.0 - 13-03-2024 */
                                                            .elementor-widget-image {
                                                                text-align: center
                                                            }

                                                            .elementor-widget-image a {
                                                                display: inline-block
                                                            }

                                                            .elementor-widget-image a img[src$=".svg"] {
                                                                width: 48px
                                                            }

                                                            .elementor-widget-image img {
                                                                vertical-align: middle;
                                                                display: inline-block
                                                            }
                                                        </style> <img decoding="async"
                                                            src="https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/elementor/thumbs/nissan-n0vhis1pvw1amooicch4eedp4bc4c74jk6z801v2xa.png"
                                                            title="nissan" alt="nissan" loading="lazy">
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3dd3345 elementor-widget elementor-widget-text-editor"
                                                    data-id="3dd3345" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="content">
                                                            <h4><span style="color: #dc2d4b;">370Z® NISMO
                                                                </span><br>IT’S&nbsp; CLOSER THAN <br>YOU THINK.</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1060d6b elementor-widget elementor-widget-image"
                                                    data-id="1060d6b" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img fetchpriority="high" decoding="async" width="1109"
                                                            height="699"
                                                            src="https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-1109x699.jpg"
                                                            class="attachment-full size-full wp-image-1100" alt=""
                                                            srcset="https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-1109x699.jpg 1109w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-150x95.jpg 150w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-300x189.jpg 300w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-768x484.jpg 768w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-1024x646.jpg 1024w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-600x378.jpg 600w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-380x240.jpg 380w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-255x161.jpg 255w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-510x322.jpg 510w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-280x177.jpg 280w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-560x353.jpg 560w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1-796x502.jpg 796w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/1.jpg 1110w"
                                                            sizes="(max-width: 1109px) 100vw, 1109px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-6ccea4b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="6ccea4b" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b10eb9a"
                                            data-id="b10eb9a" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b686bcd elementor-widget elementor-widget-image"
                                                    data-id="b686bcd" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img decoding="async"
                                                            src="https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/elementor/thumbs/ford-n0vhis1pvw1amooicch4eedp4bc4c74jk6z801v2xa.png"
                                                            title="ford" alt="ford" loading="lazy">
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-bcb0e57 elementor-widget elementor-widget-text-editor"
                                                    data-id="bcb0e57" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="content">
                                                            <h4><span style="color: #dc2d4b;">FORD FOCUS</span>
                                                                MADE WITH LOVE<br> FOR YOU</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ff4dc9e elementor-widget elementor-widget-image"
                                                    data-id="ff4dc9e" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img decoding="async" width="1024" height="646"
                                                            src="https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-1024x646.jpg"
                                                            class="attachment-large size-large wp-image-1158"
                                                            alt=""
                                                            srcset="https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-1024x646.jpg 1024w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-150x95.jpg 150w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-300x189.jpg 300w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-768x484.jpg 768w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-1109x699.jpg 1109w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-380x240.jpg 380w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-255x161.jpg 255w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-600x378.jpg 600w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-280x177.jpg 280w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-560x353.jpg 560w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-510x322.jpg 510w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18-796x502.jpg 796w, https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/uploads/sites/22/2015/12/18.jpg 1110w"
                                                            sizes="(max-width: 1024px) 100vw, 1024px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="clearfix">
            </div>


            <div class="our-testimonial">
                <div class="container">
                    <div class="row section-row">
                        <div class="col-lg-12">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    testimonials</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                    <div class="split-line"
                                        style="display: block; text-align: center; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                W</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                h</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
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
                                                c</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                m</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                        </div>
                                    </div>
                                    <div class="split-line"
                                        style="display: block; text-align: center; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                y</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                g</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                b</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                        </div>
                                    </div>
                                </h2>
                            </div>
                            <!-- Section Title End -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Testimonial Slider Start -->
                            <div class="testimonial-slider">
                                <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                    <div class="swiper-wrapper" data-cursor-text="Drag"
                                        id="swiper-wrapper-3374bab31c173053" aria-live="off"
                                        style="transition-duration: 0ms; transform: translate3d(-433.333px, 0px, 0px); transition-delay: 0ms;">
                                        <!-- Testimonial Slide Start -->

                                        <!-- Testimonial Slide End -->

                                        <!-- Testimonial Slide Start -->

                                        <!-- Testimonial Slide End -->

                                        <!-- Testimonial Slide Start -->

                                        <!-- Testimonial Slide End -->

                                        <!-- Testimonial Slide Start -->

                                        <!-- Testimonial Slide End -->
                                        <div class="swiper-slide swiper-slide-prev"
                                            style="width: 403.333px; margin-right: 30px;" role="group"
                                            aria-label="1 / 4" data-swiper-slide-index="0">
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
                                                        <p>Renting a car from nova ride was a great decision. Not only did I
                                                            get a reliable and comfortable vehicle, but the prices were also
                                                            very competitive.</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset('novaride/images/author-1.jpg') }}"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>floyd miles</h3>
                                                        <p>project manager</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 403.333px; margin-right: 30px;" role="group"
                                            aria-label="2 / 4" data-swiper-slide-index="1">
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
                                                        <p>Renting a car from nova ride was a great decision. Not only did I
                                                            get a reliable and comfortable vehicle, but the prices were also
                                                            very competitive.</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset('novaride/images/author-2.jpg') }}"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>annette black</h3>
                                                        <p>project manager</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next"
                                            style="width: 403.333px; margin-right: 30px;" role="group"
                                            aria-label="3 / 4" data-swiper-slide-index="2">
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
                                                        <p>Renting a car from nova ride was a great decision. Not only did I
                                                            get a reliable and comfortable vehicle, but the prices were also
                                                            very competitive.</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset('novaride/images/author-3.jpg') }}"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>leslie alexander</h3>
                                                        <p>project manager</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="4 / 4"
                                            data-swiper-slide-index="3" style="width: 403.333px; margin-right: 30px;">
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
                                                        <p>Renting a car from nova ride was a great decision. Not only did I
                                                            get a reliable and comfortable vehicle, but the prices were also
                                                            very competitive.</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset('novaride/images/author-4.jpg') }}"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>alis white</h3>
                                                        <p>project manager</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-btn">
                                        <div class="testimonial-button-prev" tabindex="0" role="button"
                                            aria-label="Previous slide" aria-controls="swiper-wrapper-3374bab31c173053">
                                        </div>
                                        <div class="testimonial-button-next" tabindex="0" role="button"
                                            aria-label="Next slide" aria-controls="swiper-wrapper-3374bab31c173053"></div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                            <!-- Testimonial Slider End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Faqs Sidebar Start -->
                    <div class="faq-sidebar">
                        <!-- Faqs Catagery List Start -->
                        <div class="faq-catagery-list wow fadeInUp" data-wow-delay="0.25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
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
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">FAQs
                            </h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                <div class="split-line"
                                    style="display: block; text-align: start; position: relative;color:#fff">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            G</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            r</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            l</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            f</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            r</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            m</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            t</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            n</div>
                                    </div>
                                </div>
                            </h2>
                        </div>
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true"
                                        aria-controls="collapse1">
                                        What types of vehicles are available for rent?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show"
                                    aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes, we accept international driver's licenses. An additional
                                            government-issued ID, such as a passport, is also required.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s"
                                style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse2"
                                        aria-expanded="false" aria-controls="collapse2">
                                        Where are your rental locations?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse"
                                    aria-labelledby="heading2" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes, we accept international driver's licenses. An additional
                                            government-issued ID, such as a passport, is also required.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s"
                                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse3"
                                        aria-expanded="false" aria-controls="collapse3">
                                        What are your hours of operation?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse"
                                    aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes, we accept international driver's licenses. An additional
                                            government-issued ID, such as a passport, is also required.</p>
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
                            <h3 class="wow fadeInUp" style="visibility: hidden; animation-name: none;">FAQs</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                <div class="split-line"
                                    style="display: block; text-align: start; position: relative;color:#fff">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            B</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            k</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            g</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            d</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            r</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            s</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            r</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            v</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            t</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            s</div>
                                    </div>
                                </div>
                            </h2>
                        </div>
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion1">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s"
                                style="visibility: hidden; animation-delay: 0.75s; animation-name: none;">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false"
                                        aria-controls="collapse4">
                                        How do I make a reservation?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse show"
                                    aria-labelledby="heading4" data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>Yes, you can rent a car for someone else, but the primary driver must be
                                            present at the time of rental to provide their driver's license and sign
                                            the rental agreement.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="1s"
                                style="visibility: hidden; animation-delay: 1s; animation-name: none;">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse5"
                                        aria-expanded="false" aria-controls="collapse5">
                                        Can I modify or cancel my reservation?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse"
                                    aria-labelledby="heading5" data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>Yes, you can rent a car for someone else, but the primary driver must be
                                            present at the time of rental to provide their driver's license and sign
                                            the rental agreement.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s"
                                style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                                <h2 class="accordion-header" id="heading6">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse6"
                                        aria-expanded="false" aria-controls="collapse6">
                                        What is your cancellation policy?
                                    </button>
                                </h2>
                                <div id="collapse6" class="accordion-collapse collapse"
                                    aria-labelledby="heading6" data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>Yes, you can rent a car for someone else, but the primary driver must be
                                            present at the time of rental to provide their driver's license and sign
                                            the rental agreement.</p>
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
                            <h3 class="wow fadeInUp" style="visibility: hidden; animation-name: none;">FAQs</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                <div class="split-line"
                                    style="display: block; text-align: start; position: relative;color:#fff">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            P</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            r</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            c</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            g</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            d</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            p</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            y</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            m</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            t</div>
                                    </div>
                                </div>
                            </h2>
                        </div>
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion2">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp"
                                style="visibility: hidden; animation-name: none;">
                                <h2 class="accordion-header" id="heading7">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse7" aria-expanded="true"
                                        aria-controls="collapse7">
                                        What forms of payment do you accept?
                                    </button>
                                </h2>
                                <div id="collapse7" class="accordion-collapse collapse show"
                                    aria-labelledby="heading7" data-bs-parent="#accordion2">
                                    <div class="accordion-body">
                                        <p>Reservations can be made online through our website, by calling our
                                            customer service hotline, or by visiting one of our rental locations in
                                            person.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s"
                                style="visibility: hidden; animation-delay: 0.25s; animation-name: none;">
                                <h2 class="accordion-header" id="heading8">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse8"
                                        aria-expanded="false" aria-controls="collapse8">
                                        Are there any hidden fees?
                                    </button>
                                </h2>
                                <div id="collapse8" class="accordion-collapse collapse"
                                    aria-labelledby="heading8" data-bs-parent="#accordion2">
                                    <div class="accordion-body">
                                        <p>Reservations can be made online through our website, by calling our
                                            customer service hotline, or by visiting one of our rental locations in
                                            person.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s"
                                style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                                <h2 class="accordion-header" id="heading9">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse9"
                                        aria-expanded="false" aria-controls="collapse9">
                                        Do you require a deposit?
                                    </button>
                                </h2>
                                <div id="collapse9" class="accordion-collapse collapse"
                                    aria-labelledby="heading9" data-bs-parent="#accordion2">
                                    <div class="accordion-body">
                                        <p>Reservations can be made online through our website, by calling our
                                            customer service hotline, or by visiting one of our rental locations in
                                            person.</p>
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
                            <h3 class="wow fadeInUp" style="visibility: hidden; animation-name: none;">FAQs</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                                <div class="split-line"
                                    style="display: block; text-align: start; position: relative;color:#fff">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            V</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            h</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            c</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            l</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            e</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            f</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            r</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            m</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            t</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(50px, 0px); opacity: 0;">
                                            n</div>
                                    </div>
                                </div>
                            </h2>
                        </div>
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion3">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp"
                                style="visibility: hidden; animation-name: none;">
                                <h2 class="accordion-header" id="heading10">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse10" aria-expanded="true"
                                        aria-controls="collapse10">
                                        Are your vehicles insured?
                                    </button>
                                </h2>
                                <div id="collapse10" class="accordion-collapse collapse show"
                                    aria-labelledby="heading10" data-bs-parent="#accordion3">
                                    <div class="accordion-body">
                                        <p>We offer a diverse fleet of vehicles, including economy cars, compact
                                            cars, SUVs, luxury cars, and more to suit various needs and preferences.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s"
                                style="visibility: hidden; animation-delay: 0.25s; animation-name: none;">
                                <h2 class="accordion-header" id="heading11">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse11"
                                        aria-expanded="false" aria-controls="collapse11">
                                        Do you offer vehicles with automatic transmission?
                                    </button>
                                </h2>
                                <div id="collapse11" class="accordion-collapse collapse"
                                    aria-labelledby="heading11" data-bs-parent="#accordion3">
                                    <div class="accordion-body">
                                        <p>We offer a diverse fleet of vehicles, including economy cars, compact
                                            cars, SUVs, luxury cars, and more to suit various needs and preferences.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s"
                                style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                                <h2 class="accordion-header" id="heading12">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse12"
                                        aria-expanded="false" aria-controls="collapse12">
                                        Can I choose a specific vehicle model?
                                    </button>
                                </h2>
                                <div id="collapse12" class="accordion-collapse collapse"
                                    aria-labelledby="heading12" data-bs-parent="#accordion3">
                                    <div class="accordion-body">
                                        <p>We offer a diverse fleet of vehicles, including economy cars, compact
                                            cars, SUVs, luxury cars, and more to suit various needs and preferences.
                                        </p>
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

    @push('scripts')
        <script defer
            src="https://motors.stylemixthemes.com/elementor-dealer-one/wp-content/cache/autoptimize/22/js/autoptimize_2533bffa04ed87c2cee6b9ced6a25216.js">
        </script>
        <script>
            window.onload = function() {
                setTimeout(function() {
                    console.clear();
                }, 1000); // 2 seconds
            };
        </script>
    @endpush
@endsection
