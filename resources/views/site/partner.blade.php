@extends('site.layouts.app')
@section('content')
    @push('styles')
        <style type="text/css" media="screen">
            body {
                -moz-osx-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                margin: 0;
                width: 100%;
                font-family: Arial;
                font-weight: 400;
                background: rgb(255, 255, 255);
            }

            a {
                text-decoration: none;
                color: inherit;
            }

            a:not(.btn):hover {
                text-decoration: underline;
            }

            input,
            select,
            textarea,
            p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                margin: 0;
                font-size: inherit;
                font-weight: inherit;
            }

            u>span {
                text-decoration: inherit;
            }

            h1>span,
            h2>span,
            h3>span,
            h4>span,
            h5>span,
            h6>span {
                display: block;
                word-wrap: break-word;
            }

            iframe {
                border: 0;
            }

            * {
                box-sizing: border-box;
            }

            :root.js-text-scaling {
                --mobile-font-size: 4vw;
                --default-font-size: 16px;
            }

            .item-absolute {
                position: absolute;
            }

            .item-relative {
                position: relative;
            }

            .item-block {
                display: block;
                height: 100%;
                width: 100%;
            }

            .item-cover {
                z-index: 1000030;
            }

            .item-breakword {
                word-wrap: break-word;
            }

            .item-content-box {
                box-sizing: content-box;
            }

            .clearfix {
                clear: both;
            }

            sup,
            sub {
                margin-left: 0.1rem;
                line-height: 0;
            }

            @keyframes slide-down {
                from {
                    opacity: 0;
                    transform: translateY(-50px);
                }
            }

            @keyframes fade-in {
                from {
                    opacity: 0;
                }
            }

            @supports (-webkit-overflow-scrolling:touch) {
                @media (-webkit-min-device-pixel-ratio:2),
                (min-resolution:192dpi){.image[src$=".svg"] {
                    width:calc(100% + 1px);
                }
            }
            }

            .show-for-sr {
                border: 0 !important;
                clip: rect(1px, 1px, 1px, 1px) !important;
                -webkit-clip-path: inset(50%) !important;
                clip-path: inset(50%) !important;
                height: 1px !important;
                margin: -1px !important;
                overflow: hidden !important;
                padding: 0 !important;
                position: absolute !important;
                width: 1px !important;
                white-space: nowrap !important;
            }

            .headline {
                font-family: Radikal;
                font-weight: 500;
            }

            .btn {
                line-height: 120%;
                text-align: center;
                font-family: Arial;
                font-weight: 400;
                cursor: pointer;

                transition:border .5s;width:100%;border:0;white-space:normal;display:table-cell;vertical-align:middle;padding:0;}.section-fit{max-width:400px;}[class*="sticky-block-footer"] .section:last-child{bottom:0;z-index:1000015;}[class*="sticky-block-header"] .section:first-child {
                    top: 0;
                    z-index: 1000015;
                }

                .sticky-block-header .section:first-child,
                .sticky-block-footer .section:last-child {
                    position: sticky;
                }

                :root {
                    --section-relative-margin: 0 auto;
                }

                .section-relative {
                    position: relative;
                    margin: 0 auto;
                }

                .js-text-scaling .section-relative {
                    margin: var(--section-relative-margin);
                }

                .section-inner {
                    height: 100%;
                }

                #page-block-6fr9scesh5 {
                    height: 7.0625rem;
                    max-width: 100%;
                }

                #page-block-6fr9scesh5 .section-holder-border {
                    border: 0;
                }

                #page-block-6fr9scesh5 .section-block {
                    background: rgb(0, 0, 0);
                    height: 7.0625rem;
                }

                #page-block-6fr9scesh5 .section-holder-overlay {
                    display: none;
                }

                #element-1 {
                    top: 2.5rem;
                    left: 7.4375rem;
                    height: 2.0625rem;
                    width: 10.125rem;
                    z-index: 3;
                }

                #element-1 .cropped {
                    background: url(//v.fastcdn.co/u/ecac9fc3/58319577-0-RGB-TrueCar-Gradient.png) 0 -0.625rem / 10.125rem 3.25rem;
                }

                #page_block_header {
                    height: 28.625rem;
                    max-width: 100%;
                }

                #page_block_header .section-holder-border {
                    border: 0;
                }

                #page_block_header .section-block {
                    background: url(//v.fastcdn.co/u/ecac9fc3/62062016-0-iStock-140276231.jpg) repeat 50% 56% / cover;
                    height: 28.625rem;
                }

                #page_block_header .section-holder-overlay {
                    opacity: 0.52;
                    background-color: #000000;
                    display: block;
                }

                #element-2 {
                    top: 7rem;
                    left: 2.625rem;
                    height: 3.875rem;
                    width: 19.75rem;
                    z-index: 4;
                    color: #37465A;
                    font-size: 1.6099rem;
                    line-height: 1.95rem;
                    text-align: center;
                }

                #element-2 .x_64e665fe {
                    text-align: center;
                    line-height: 1.9375rem;
                    font-size: 1.6099rem;
                }

                #element-2 .x_f2074b6c {
                    color: #ffffff;
                }

                #element-2 strong {
                    font-weight: 900;
                }

                #element-82 {
                    top: 11.6875rem;
                    left: 1.25rem;
                    height: 5.8125rem;
                    width: 22.5rem;
                    z-index: 51;
                    color: #37465A;
                    font-size: 1.3622rem;
                    line-height: 1.925rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-82 .x_a2e00130 {
                    text-align: center;
                    line-height: 1.9375rem;
                    font-size: 1.3622rem;
                }

                #element-82 .x_86ac332f {
                    color: #f8f8f8;
                }

                #element-82 strong {
                    font-weight: 900;
                }

                #element-82.headline {
                    font-weight: 400;
                }

                #element-3 {
                    top: 19.375rem;
                    left: 4rem;
                    height: 2.5rem;
                    width: 17rem;
                    z-index: 5;
                }

                .btn-shadow {
                    box-shadow: 0 1px 3px rgba(1, 1, 1, 0.5);
                }

                #element-3 .btn.btn-effect3d:active {
                    box-shadow: none;
                }

                #element-3 .btn:hover {
                    background: #0E68AC;
                    color: #FFFFFF;
                }

                #element-3 .btn {
                    background: #1979C7;
                    color: #FFFFFF;
                    font-size: 1.2384rem;
                    font-family: Radikal;
                    font-weight: 400;
                    height: 2.5rem;
                    width: 17rem;
                    border-radius: 41px;
                }

                #page_block_below_fold {
                    height: 18.125rem;
                    max-width: 100%;
                }

                #page_block_below_fold .section-holder-border {
                    border: 0;
                }

                #page_block_below_fold .section-block {
                    background: rgb(248, 248, 248);
                    height: 18.125rem;
                }

                #page_block_below_fold .section-holder-overlay {
                    display: none;
                }

                #element-4 {
                    top: 2.5rem;
                    left: 1.875rem;
                    height: 3.25rem;
                    width: 21.1875rem;
                    z-index: 7;
                    color: #37465A;
                    font-size: 1.3622rem;
                    line-height: 1.65rem;
                    text-align: center;
                }

                #element-4 .x_b796efc8 {
                    text-align: center;
                    line-height: 1.625rem;
                    font-size: 1.3622rem;
                }

                #element-4 .x_7b2817bf {
                    color: #000000;
                }

                #element-4 strong {
                    font-weight: 900;
                }

                #element-5 {
                    top: 6.875rem;
                    left: 1.875rem;
                    height: 8.625rem;
                    width: 21.1875rem;
                    z-index: 13;
                    color: #37465A;
                    font-size: 1.1765rem;
                    line-height: 1.425rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-5 .x_5e4484a5 {
                    text-align: center;
                    line-height: 1.4375rem;
                    font-size: 1.1765rem;
                }

                #element-5 .x_7b2817bf {
                    color: #000000;
                }

                #element-5 strong {
                    font-weight: 900;
                }

                #element-5.headline {
                    font-weight: 400;
                }

                #page-block-o234a0hamf {
                    height: 87.0625rem;
                    max-width: 100%;
                }

                #page-block-o234a0hamf .section-holder-border {
                    border: 0;
                }

                #page-block-o234a0hamf .section-block {
                    background: none;
                    height: 87.0625rem;
                }

                #page-block-o234a0hamf .section-holder-overlay {
                    display: none;
                }

                #element-9 {
                    top: 2.5rem;
                    left: 1.25rem;
                    height: 1.375rem;
                    width: 22.5rem;
                    z-index: 12;
                    color: #37465A;
                    font-size: 1.3622rem;
                    line-height: 1.375rem;
                    text-align: center;
                }

                #element-9 .x_05b72d8a {
                    text-align: center;
                    line-height: 1.375rem;
                    font-size: 1.3622rem;
                }

                #element-9 .x_7b2817bf {
                    color: #000000;
                }

                #element-9 strong{font-weight:900;}#element-23{top:5.75rem;left:1.25rem;height:15.3125rem;width:22.5rem;z-index:20;}.circle{border-radius:50%;}.shape{height:inherit;}.line-horizontal{height:.625rem;}.line-vertical{height:100%;margin-right:.625rem;}[class*='line-'] {
                    box-sizing: content-box;
                }

                #element-23 .shape {
                    border: 0;
                    border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                    background: rgb(255, 255, 255);
                    box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                }

                #element-56 {
                    top: 7.625rem;
                    left: 9.625rem;
                    height: 5.6875rem;
                    width: 5.6875rem;
                    z-index: 22;
                }

                #element-28 {
                    top: 15.1875rem;
                    left: 3.75rem;
                    height: 3.5625rem;
                    width: 17.5rem;
                    z-index: 21;
                    color: #37465A;
                    font-size: 0.9907rem;
                    line-height: 1.2rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-28 .x_2b60e4ec {
                    text-align: center;
                    line-height: 1.1875rem;
                    font-size: 0.9907rem;
                }

                #element-28 .x_7b2817bf {
                    color: #000000;
                }

                #element-28 strong {
                    font-weight: 900;
                }

                #element-28.headline {
                    font-weight: 400;
                }

                #element-24 {
                    top: 22.0625rem;
                    left: 1.25rem;
                    height: 13.6875rem;
                    width: 22.5rem;
                    z-index: 23;
                }

                #element-24 .shape {
                    border: 0;
                    border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                    background: rgb(255, 255, 255);
                    box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                }

                #element-57 {
                    top: 23.9375rem;
                    left: 9.625rem;
                    height: 5.6875rem;
                    width: 5.6875rem;
                    z-index: 25;
                }

                #element-29 {
                    top: 31.5rem;
                    left: 3.875rem;
                    height: 2.375rem;
                    width: 17.25rem;
                    z-index: 24;
                    color: #37465A;
                    font-size: 0.9907rem;
                    line-height: 1.2rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-29 .x_2b60e4ec {
                    text-align: center;
                    line-height: 1.1875rem;
                    font-size: 0.9907rem;
                }

                #element-29 .x_7b2817bf {
                    color: #000000;
                }

                #element-29 strong {
                    font-weight: 900;
                }

                #element-29.headline {
                    font-weight: 400;
                }

                #element-35 {
                    top: 36.75rem;
                    left: 1.25rem;
                    height: 15.3125rem;
                    width: 22.5rem;
                    z-index: 26;
                }

                #element-35 .shape {
                    border: 0;
                    border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                    background: rgb(255, 255, 255);
                    box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                }

                #element-58 {
                    top: 38.625rem;
                    left: 9.625rem;
                    height: 5.6875rem;
                    width: 5.6875rem;
                    z-index: 28;
                }

                #element-34 {
                    top: 46.1875rem;
                    left: 3.75rem;
                    height: 3.5625rem;
                    width: 17.5rem;
                    z-index: 27;
                    color: #37465A;
                    font-size: 0.9907rem;
                    line-height: 1.2rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-34 .x_2b60e4ec {
                    text-align: center;
                    line-height: 1.1875rem;
                    font-size: 0.9907rem;
                }

                #element-34 .x_7b2817bf {
                    color: #000000;
                }

                #element-34 strong {
                    font-weight: 900;
                }

                #element-34.headline {
                    font-weight: 400;
                }

                #element-33 {
                    top: 53.0625rem;
                    left: 1.25rem;
                    height: 14.3125rem;
                    width: 22.5rem;
                    z-index: 29;
                }

                #element-33 .shape {
                    border: 0;
                    border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                    background: rgb(255, 255, 255);
                    box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                }

                #element-59 {
                    top: 54.9375rem;
                    left: 9.625rem;
                    height: 5.6875rem;
                    width: 5.6875rem;
                    z-index: 31;
                }

                #element-32 {
                    top: 62.5rem;
                    left: 3.75rem;
                    height: 2.375rem;
                    width: 17.5rem;
                    z-index: 30;
                    color: #37465A;
                    font-size: 0.9907rem;
                    line-height: 1.2rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-32 .x_2b60e4ec {
                    text-align: center;
                    line-height: 1.1875rem;
                    font-size: 0.9907rem;
                }

                #element-32 .x_7b2817bf {
                    color: #000000;
                }

                #element-32 strong {
                    font-weight: 900;
                }

                #element-32.headline {
                    font-weight: 400;
                }

                #element-38 {
                    top: 68.5625rem;
                    left: 1.25rem;
                    height: 15.3125rem;
                    width: 22.5rem;
                    z-index: 32;
                }

                #element-38 .shape {
                    border: 0;
                    border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                    background: rgb(255, 255, 255);
                    box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                }

                #element-60 {
                    top: 70.4375rem;
                    left: 9.625rem;
                    height: 5.6875rem;
                    width: 5.6875rem;
                    z-index: 34;
                }

                #element-37 {
                    top: 78rem;
                    left: 3.75rem;
                    height: 3.5625rem;
                    width: 17.5rem;
                    z-index: 33;
                    color: #37465A;
                    font-size: 0.9907rem;
                    line-height: 1.2rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-37 .x_2b60e4ec {
                    text-align: center;
                    line-height: 1.1875rem;
                    font-size: 0.9907rem;
                }

                #element-37 .x_7b2817bf {
                    color: #000000;
                }

                #element-37 strong {
                    font-weight: 900;
                }

                #element-37.headline {
                    font-weight: 400;
                }

                #page-block-lclaasur83 {
                    height: 102.625rem;
                    max-width: 100%;
                }

                #page-block-lclaasur83 .section-holder-border {
                    border: 0;
                }

                #page-block-lclaasur83 .section-block {
                    background: rgb(248, 248, 248);
                    height: 102.625rem;
                }

                #page-block-lclaasur83 .section-holder-overlay {
                    display: none;
                }

                #element-11 {
                    top: 2.5rem;
                    left: 1.25rem;
                    height: 1.375rem;
                    width: 22.5rem;
                    z-index: 11;
                    color: #37465A;
                    font-size: 1.3622rem;
                    line-height: 1.375rem;
                    text-align: center;
                }

                #element-11 .x_05b72d8a {
                    text-align: center;
                    line-height: 1.375rem;
                    font-size: 1.3622rem;
                }

                #element-11 .x_7b2817bf {
                    color: #000000;
                }

                #element-11 strong {
                    font-weight: 900;
                }

                #element-12 {
                    top: 5rem;
                    left: 1.25rem;
                    height: 2.875rem;
                    width: 22.5rem;
                    z-index: 14;
                    color: #37465A;
                    font-size: 1.1765rem;
                    line-height: 1.425rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-12 .x_5e4484a5 {
                    text-align: center;
                    line-height: 1.4375rem;
                    font-size: 1.1765rem;
                }

                #element-12 .x_7b2817bf {
                    color: #000000;
                }

                #element-12 strong {
                    font-weight: 900;
                }

                #element-12.headline {
                    font-weight: 400;
                }

                #element-41 {
                    top: 9.75rem;
                    left: 1.25rem;
                    height: 17.0625rem;
                    width: 22.5rem;
                    z-index: 35;
                }

                #element-41 .shape {
                    border: 0;
                    border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                    background: rgb(255, 255, 255);
                    box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                }

                #element-61 {
                    top: 11.625rem;
                    left: 7.875rem;
                    height: 6.4375rem;
                    width: 9.1875rem;
                    z-index: 37;
                }

                #element-43 {
                    top: 19.9375rem;
                    left: 3.75rem;
                    height: 4.75rem;
                    width: 17.5rem;
                    z-index: 36;
                    color: #37465A;
                    font-size: 0.9907rem;
                    line-height: 1.2rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-43 .x_2b60e4ec {
                    text-align: center;
                    line-height: 1.1875rem;
                    font-size: 0.9907rem;
                }

                #element-43 .x_08faff08 {
                    color: #00adee;
                }

                #element-43 .x_7b2817bf {
                    color: #000000;
                }

                #element-43 strong {
                    font-weight: 900;
                }

                #element-43.headline {
                    font-weight: 400;
                }

                #element-42 {
                    top: 27.8125rem;
                    left: 1.25rem;
                    height: 18.0625rem;
                    width: 22.5rem;
                    z-index: 38;
                }

                #element-42 .shape {
                    border: 0;
                    border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                    background: rgb(255, 255, 255);
                    box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                }

                #element-62 {
                    top: 29.6875rem;
                    left: 5.8125rem;
                    height: 6.4375rem;
                    width: 13.3125rem;
                    z-index: 40;
                }

                #element-62 .cropped {
                    background: url(//v.fastcdn.co/u/ecac9fc3/62063093-0-Partnerships-Site-Mo.png) 0 0 / 13.25rem 6.4375rem;
                }

                #element-51 {
                    top: 38rem;
                    left: 3.75rem;
                    height: 5.9375rem;
                    width: 17.5rem;
                    z-index: 39;
                    color: #37465A;
                    font-size: 0.9907rem;
                    line-height: 1.2rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-51 .x_2b60e4ec {
                    text-align: center;
                    line-height: 1.1875rem;
                    font-size: 0.9907rem;
                }

                #element-51 .x_bb23a208 {
                    color: #ff6400;
                }

                #element-51 .x_7b2817bf {
                    color: #000000;
                }

                #element-51 strong {
                    font-weight: 900;
                }

                #element-51.headline {
                    font-weight: 400;
                }

                #element-45 {
                    top: 46.875rem;
                    left: 1.25rem;
                    height: 17.0625rem;
                    width: 22.5rem;
                    z-index: 41;
                }

                #element-45 .shape {
                    border: 0;
                    border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                    background: rgb(255, 255, 255);
                    box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                }

                #element-63 {
                    top: 48.75rem;
                    left: 4.5rem;
                    height: 6.4375rem;
                    width: 15.9375rem;
                    z-index: 43;
                }

                #element-63 .cropped {
                    background: url(//v.fastcdn.co/u/ecac9fc3/62063075-0-Partnerships-Site-Mo.png) 0 0 / 15.875rem 6.4375rem;
                }

                #element-52 {
                    top: 57.0625rem;
                    left: 3.75rem;
                    height: 4.75rem;
                    width: 17.5rem;
                    z-index: 42;
                    color: #37465A;
                    font-size: 0.9907rem;
                    line-height: 1.2rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-52 .x_2b60e4ec {
                    text-align: center;
                    line-height: 1.1875rem;
                    font-size: 0.9907rem;
                }

                #element-52 .x_d7191531 {
                    color: #06c5ac;
                }

                #element-52 .x_7b2817bf {
                    color: #000000;
                }

                #element-52 strong {
                    font-weight: 900;
                }

                #element-52.headline {
                    font-weight: 400;
                }

                #element-46 {
                    top: 64.9375rem;
                    left: 1.25rem;
                    height: 17.0625rem;
                    width: 22.5rem;
                    z-index: 44;
                }

                #element-46 .shape {
                    border: 0;
                    border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                    background: rgb(255, 255, 255);
                    box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                }

                #element-64 {
                    top: 66.8125rem;
                    left: 4.125rem;
                    height: 6.4375rem;
                    width: 16.6875rem;
                    z-index: 46;
                }

                #element-53 {
                    top: 75.125rem;
                    left: 3.75rem;
                    height: 4.75rem;
                    width: 17.5rem;
                    z-index: 45;
                    color: #37465A;
                    font-size: 0.9907rem;
                    line-height: 1.2rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-53 .x_2b60e4ec {
                    text-align: center;
                    line-height: 1.1875rem;
                    font-size: 0.9907rem;
                }

                #element-53 .x_bd0e048b {
                    color: #eb008b;
                }

                #element-53 .x_7b2817bf {
                    color: #000000;
                }

                #element-53 strong {
                    font-weight: 900;
                }

                #element-53.headline {
                    font-weight: 400;
                }

                #element-49 {
                    top: 83rem;
                    left: 1.25rem;
                    height: 16.0625rem;
                    width: 22.5rem;
                    z-index: 47;
                }

                #element-49 .shape {
                    border: 0;
                    border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                    background: rgb(255, 255, 255);
                    box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                }

                #element-65 {
                    top: 84.875rem;
                    left: 7.625rem;
                    height: 6.4375rem;
                    width: 9.75rem;
                    z-index: 49;
                }

                #element-54 {
                    top: 93.1875rem;
                    left: 3.75rem;
                    height: 3.5625rem;
                    width: 17.5rem;
                    z-index: 48;
                    color: #37465A;
                    font-size: 0.9907rem;
                    line-height: 1.2rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-54 .x_2b60e4ec {
                    text-align: center;
                    line-height: 1.1875rem;
                    font-size: 0.9907rem;
                }

                #element-54 .x_705b78eb {
                    color: #9a09cb;
                }

                #element-54 .x_7b2817bf {
                    color: #000000;
                }

                #element-54 strong {
                    font-weight: 900;
                }

                #element-54.headline {
                    font-weight: 400;
                }

                #page-block-8ty0au7uq46 {
                    height: 31.0625rem;
                    max-width: 100%;
                }

                #page-block-8ty0au7uq46 .section-holder-border {
                    border: 0;
                }

                #page-block-8ty0au7uq46 .section-block {
                    background: none;
                    height: 31.0625rem;
                }

                #page-block-8ty0au7uq46 .section-holder-overlay {
                    display: none;
                }

                #element-13 {
                    top: 2.5rem;
                    left: 1.25rem;
                    height: 6.5rem;
                    width: 22.5rem;
                    z-index: 9;
                    color: #37465A;
                    font-size: 1.3622rem;
                    line-height: 1.65rem;
                    text-align: center;
                    font-weight: 400;
                }

                #element-13 .x_b796efc8 {
                    text-align: center;
                    line-height: 1.625rem;
                    font-size: 1.3622rem;
                }

                #element-13 .x_7b2817bf {
                    color: #000000;
                }

                #element-13 .x_e4a86398 {
                    color: #999999;
                }

                #element-13 strong {
                    font-weight: 900;
                }

                #element-13.headline {
                    font-weight: 400;
                }

                #element-15 {
                    top: 10.25rem;
                    left: 4rem;
                    height: 2.5rem;
                    width: 17rem;
                    z-index: 15;
                }

                #element-15 .btn.btn-effect3d:active {
                    box-shadow: none;
                }

                #element-15 .btn:hover {
                    background: #0E68AC;
                    color: #FFFFFF;
                }

                #element-15 .btn {
                    background: #1979C7;
                    color: #FFFFFF;
                    font-size: 1.2384rem;
                    font-family: Radikal;
                    font-weight: 400;
                    height: 2.5rem;
                    width: 17rem;
                    border-radius: 41px;
                }

                #element-66 {
                    top: 15.125rem;
                    left: 1.1875rem;
                    height: 13.1404rem;
                    width: 22.5rem;
                    z-index: 50;
                }

                #page-block-v0nmvz7236 {
                    height: 23.4375rem;
                    max-width: 100%;
                }

                #page-block-v0nmvz7236 .section-holder-border {
                    border: 0;
                }

                #page-block-v0nmvz7236 .section-block {
                    background: rgb(0, 0, 0);
                    height: 23.4375rem;
                }

                #page-block-v0nmvz7236 .section-holder-overlay {
                    display: none;
                }

                #element-18 {
                    top: 2.5rem;
                    left: 4.0625rem;
                    height: 3.4375rem;
                    width: 16.8125rem;
                    z-index: 10;
                }

                #element-18 .cropped {
                    background: url(//v.fastcdn.co/u/ecac9fc3/58319577-0-RGB-TrueCar-Gradient.png) 0 -0.875rem / 16.8125rem 5.125rem;
                }

                #element-20 {
                    top: 9.25rem;
                    left: 6.3125rem;
                    height: 1.8125rem;
                    width: 1.8125rem;
                    z-index: 17;
                }

                #element-21 {
                    top: 9.25rem;
                    left: 9.8125rem;
                    height: 1.8125rem;
                    width: 1.8125rem;
                    z-index: 18;
                }

                #element-19 {
                    top: 9.25rem;
                    left: 13.3125rem;
                    height: 1.75rem;
                    width: 1.75rem;
                    z-index: 16;
                }

                #element-22 {
                    top: 9.25rem;
                    left: 16.75rem;
                    height: 1.75rem;
                    width: 1.75rem;
                    z-index: 19;
                }

                #element-16 {
                    top: 14.1875rem;
                    left: 1.25rem;
                    height: 2.75rem;
                    width: 22.5rem;
                    z-index: 6;
                    color: #37465A;
                    font-size: 0.9907rem;
                    line-height: 1.4rem;
                    text-align: center;
                }

                #element-16 .x_2c80ab57 {
                    text-align: center;
                    line-height: 1.375rem;
                    font-size: 0.9907rem;
                }

                #element-16 .x_f2074b6c {
                    color: #ffffff;
                }

                #element-16 strong {
                    font-weight: 700;
                }

                #element-17 {
                    top: 18.8125rem;
                    left: 1.25rem;
                    height: 1.0625rem;
                    width: 22.5rem;
                    z-index: 8;
                    color: #37465A;
                    font-size: 0.743rem;
                    line-height: 1.05rem;
                    text-align: center;
                }

                #element-17 .x_25a5a462 {
                    text-align: center;
                    line-height: 1.0625rem;
                    font-size: 0.743rem;
                }

                #element-17 .x_f2074b6c {
                    color: #ffffff;
                }

                #element-17 strong {
                    font-weight: 700;
                }

                @font-face {
                    font-family: "Radikal";
                    src: url("https://radikal.tcimg.net/radikal-black.ttf"), local("Open Sans"), url("https://storage.googleapis.com/instapage-fonts/OpenSans.ttf");
                    font-weight: 900;
                    font-display: swap;
                }

                @font-face {
                    font-family: "Radikal";
                    src: url("https://radikal.tcimg.net/radikal-bold.ttf"), local("Open Sans"), url("https://storage.googleapis.com/instapage-fonts/OpenSans.ttf");
                    font-weight: 700;
                    font-display: swap;
                }

                @font-face {
                    font-family: "Radikal";
                    src: url("https://radikal.tcimg.net/radikal-regular.ttf"), local("Open Sans"), url("https://storage.googleapis.com/instapage-fonts/OpenSans.ttf");
                    font-weight: 400;
                    font-display: swap;
                }

                @font-face {
                    font-family: "Radikal";
                    src: url("https://radikal.tcimg.net/radikal-medium.ttf"), local("Open Sans"), url("https://storage.googleapis.com/instapage-fonts/OpenSans.ttf");
                    font-weight: 500;
                    font-display: swap;
                }

                @media screen and (max-width:400px) {
                    :root {
                        font-size: 4vw;
                    }

                    :root.js-text-scaling {
                        font-size: var(--mobile-font-size);
                    }
                }

                @media screen and (min-width:401px) and (max-width:767px) {
                    :root {
                        font-size: 16px;
                    }

                    :root.js-text-scaling {
                        font-size: var(--default-font-size);
                    }
                }

                @media screen and (min-width:768px) and (max-width:1200px) {
                    :root {
                        font-size: 1.33vw;
                    }
                }

                @media screen and (max-width:767px) {

                    .sticky-block-header-onlyonmobile .section:first-child,
                    .sticky-block-footer-onlyonmobile .section:last-child {
                        position: sticky;
                    }
                }

                @media screen and (min-width:768px) {
                    .section-fit {
                        max-width: 60rem;
                    }

                    .sticky-block-header-onlyondesktop .section:first-child,
                    .sticky-block-footer-onlyondesktop .section:last-child {
                        position: sticky;
                    }

                    #page-block-6fr9scesh5 {
                        height: 4.875rem;
                        max-width: 100%;
                    }

                    #page-block-6fr9scesh5 .section-holder-border {
                        border: 0;
                    }

                    #page-block-6fr9scesh5 .section-block {
                        background: rgb(0, 0, 0);
                        height: 4.875rem;
                    }

                    #page-block-6fr9scesh5 .section-holder-overlay {
                        display: none;
                    }

                    #element-1 {
                        top: 1.375rem;
                        left: 0;
                        height: 2.0625rem;
                        width: 10.125rem;
                        z-index: 3;
                    }

                    #element-1 .cropped {
                        background: url(//v.fastcdn.co/u/ecac9fc3/58319577-0-RGB-TrueCar-Gradient.png) 0 -0.625rem / 10.125rem 3.25rem;
                    }

                    #page_block_header {
                        height: 31.8125rem;
                        max-width: 100%;
                    }

                    #page_block_header .section-holder-border {
                        border: 0;
                    }

                    #page_block_header .section-block {
                        background: url(//v.fastcdn.co/u/ecac9fc3/62062016-0-iStock-140276231.jpg) repeat 50% 56% / cover;
                        height: 31.8125rem;
                    }

                    #page_block_header .section-holder-overlay {
                        opacity: 0.52;
                        background-color: #000000;
                        display: block;
                    }

                    #element-2 {
                        top: 8.875rem;
                        left: 2.125rem;
                        height: 2.875rem;
                        width: 55.75rem;
                        z-index: 4;
                        color: #37465A;
                        font-size: 2.3529rem;
                        line-height: 2.85rem;
                        text-align: center;
                    }

                    #element-2 .x_b614627d {
                        text-align: center;
                        line-height: 2.875rem;
                        font-size: 2.3529rem;
                    }

                    #element-2 .x_f2074b6c {
                        color: #ffffff;
                    }

                    #element-2 strong {
                        font-weight: 900;
                    }

                    #element-82 {
                        top: 12.625rem;
                        left: 11.0625rem;
                        height: 4.25rem;
                        width: 37.9375rem;
                        z-index: 51;
                        color: #37465A;
                        font-size: 1.7337rem;
                        line-height: 2.1rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-82 .x_446dab97 {
                        text-align: center;
                        line-height: 2.125rem;
                        font-size: 1.7337rem;
                    }

                    #element-82 .x_86ac332f {
                        color: #f8f8f8;
                    }

                    #element-82 strong {
                        font-weight: 900;
                    }

                    #element-82.headline {
                        font-weight: 400;
                    }

                    #element-3 {
                        top: 19.8125rem;
                        left: 20.75rem;
                        height: 2.5rem;
                        width: 17rem;
                        z-index: 5;
                    }

                    #element-3 .btn.btn-effect3d:active {
                        box-shadow: none;
                    }

                    #element-3 .btn:hover {
                        background: #0E68AC;
                        color: #FFFFFF;
                    }

                    #element-3 .btn {
                        background: #1979C7;
                        color: #FFFFFF;
                        font-size: 1.2384rem;
                        font-family: Radikal;
                        font-weight: 400;
                        height: 2.5rem;
                        width: 17rem;
                        border-radius: 41px;
                    }

                    #page_block_below_fold {
                        height: 18rem;
                        max-width: 100%;
                    }

                    #page_block_below_fold .section-holder-border {
                        border: 0;
                    }

                    #page_block_below_fold .section-block {
                        background: rgb(248, 248, 248);
                        height: 18rem;
                    }

                    #page_block_below_fold .section-holder-overlay {
                        display: none;
                    }

                    #element-4 {
                        top: 5.0625rem;
                        left: 2.8125rem;
                        height: 2.125rem;
                        width: 54.3125rem;
                        z-index: 7;
                        color: #37465A;
                        font-size: 1.7337rem;
                        line-height: 2.1rem;
                        text-align: center;
                    }

                    #element-4 .x_446dab97 {
                        text-align: center;
                        line-height: 2.125rem;
                        font-size: 1.7337rem;
                    }

                    #element-4 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-4 strong {
                        font-weight: 900;
                    }

                    #element-5 {
                        top: 8.125rem;
                        left: 7.25rem;
                        height: 4.875rem;
                        width: 45.5rem;
                        z-index: 13;
                        color: #37465A;
                        font-size: 1.3622rem;
                        line-height: 1.65rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-5 .x_b796efc8 {
                        text-align: center;
                        line-height: 1.625rem;
                        font-size: 1.3622rem;
                    }

                    #element-5 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-5 strong {
                        font-weight: 900;
                    }

                    #element-5.headline {
                        font-weight: 400;
                    }

                    #page-block-o234a0hamf {
                        height: 65.1875rem;
                        max-width: 100%;
                    }

                    #page-block-o234a0hamf .section-holder-border {
                        border: 0;
                    }

                    #page-block-o234a0hamf .section-block {
                        background: none;
                        height: 65.1875rem;
                    }

                    #page-block-o234a0hamf .section-holder-overlay {
                        display: none;
                    }

                    #element-9 {
                        top: 5.0625rem;
                        left: 2.8125rem;
                        height: 2.125rem;
                        width: 54.3125rem;
                        z-index: 12;
                        color: #37465A;
                        font-size: 1.7337rem;
                        line-height: 2.1rem;
                        text-align: center;
                    }

                    #element-9 .x_446dab97 {
                        text-align: center;
                        line-height: 2.125rem;
                        font-size: 1.7337rem;
                    }

                    #element-9 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-9 strong {
                        font-weight: 900;
                    }

                    #element-23 {
                        top: 9.6875rem;
                        left: 0;
                        height: 14.4375rem;
                        width: 28.875rem;
                        z-index: 20;
                    }

                    #element-23 .shape {
                        border: 0;
                        border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                        background: rgb(255, 255, 255);
                        box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                    }

                    #element-56 {
                        top: 12.25rem;
                        left: 11.5625rem;
                        height: 5.6875rem;
                        width: 5.6875rem;
                        z-index: 22;
                    }

                    #element-28 {
                        top: 19.1875rem;
                        left: 2.5625rem;
                        height: 2.375rem;
                        width: 23.6875rem;
                        z-index: 21;
                        color: #37465A;
                        font-size: 0.9907rem;
                        line-height: 1.2rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-28 .x_2b60e4ec {
                        text-align: center;
                        line-height: 1.1875rem;
                        font-size: 0.9907rem;
                    }

                    #element-28 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-28 strong {
                        font-weight: 900;
                    }

                    #element-28.headline {
                        font-weight: 400;
                    }

                    #element-24 {
                        top: 9.6875rem;
                        left: 31.0625rem;
                        height: 14.4375rem;
                        width: 28.875rem;
                        z-index: 23;
                    }

                    #element-24 .shape {
                        border: 0;
                        border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                        background: rgb(255, 255, 255);
                        box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                    }

                    #element-57 {
                        top: 12.25rem;
                        left: 42.625rem;
                        height: 5.6875rem;
                        width: 5.6875rem;
                        z-index: 25;
                    }

                    #element-29 {
                        top: 19.1875rem;
                        left: 36.875rem;
                        height: 2.375rem;
                        width: 17.25rem;
                        z-index: 24;
                        color: #37465A;
                        font-size: 0.9907rem;
                        line-height: 1.2rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-29 .x_2b60e4ec {
                        text-align: center;
                        line-height: 1.1875rem;
                        font-size: 0.9907rem;
                    }

                    #element-29 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-29 strong {
                        font-weight: 900;
                    }

                    #element-29.headline {
                        font-weight: 400;
                    }

                    #element-35 {
                        top: 26.5625rem;
                        left: 0;
                        height: 14.4375rem;
                        width: 28.875rem;
                        z-index: 26;
                    }

                    #element-35 .shape {
                        border: 0;
                        border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                        background: rgb(255, 255, 255);
                        box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                    }

                    #element-58 {
                        top: 29.125rem;
                        left: 11.5625rem;
                        height: 5.6875rem;
                        width: 5.6875rem;
                        z-index: 28;
                    }

                    #element-34 {
                        top: 36.0625rem;
                        left: 2.5625rem;
                        height: 2.375rem;
                        width: 23.6875rem;
                        z-index: 27;
                        color: #37465A;
                        font-size: 0.9907rem;
                        line-height: 1.2rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-34 .x_2b60e4ec {
                        text-align: center;
                        line-height: 1.1875rem;
                        font-size: 0.9907rem;
                    }

                    #element-34 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-34 strong {
                        font-weight: 900;
                    }

                    #element-34.headline {
                        font-weight: 400;
                    }

                    #element-33 {
                        top: 26.5625rem;
                        left: 31.0625rem;
                        height: 14.4375rem;
                        width: 28.875rem;
                        z-index: 29;
                    }

                    #element-33 .shape {
                        border: 0;
                        border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                        background: rgb(255, 255, 255);
                        box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                    }

                    #element-59 {
                        top: 29.125rem;
                        left: 42.625rem;
                        height: 5.6875rem;
                        width: 5.6875rem;
                        z-index: 31;
                    }

                    #element-32 {
                        top: 36.0625rem;
                        left: 35.125rem;
                        height: 2.375rem;
                        width: 20.75rem;
                        z-index: 30;
                        color: #37465A;
                        font-size: 0.9907rem;
                        line-height: 1.2rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-32 .x_2b60e4ec {
                        text-align: center;
                        line-height: 1.1875rem;
                        font-size: 0.9907rem;
                    }

                    #element-32 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-32 strong {
                        font-weight: 900;
                    }

                    #element-32.headline {
                        font-weight: 400;
                    }

                    #element-38 {
                        top: 43.5rem;
                        left: 15.5rem;
                        height: 14.4375rem;
                        width: 28.875rem;
                        z-index: 32;
                    }

                    #element-38 .shape {
                        border: 0;
                        border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                        background: rgb(255, 255, 255);
                        box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                    }

                    #element-60 {
                        top: 46.0625rem;
                        left: 26.875rem;
                        height: 5.6875rem;
                        width: 5.6875rem;
                        z-index: 34;
                    }

                    #element-37 {
                        top: 53rem;
                        left: 17.875rem;
                        height: 2.375rem;
                        width: 23.6875rem;
                        z-index: 33;
                        color: #37465A;
                        font-size: 0.9907rem;
                        line-height: 1.2rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-37 .x_2b60e4ec {
                        text-align: center;
                        line-height: 1.1875rem;
                        font-size: 0.9907rem;
                    }

                    #element-37 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-37 strong {
                        font-weight: 900;
                    }

                    #element-37.headline {
                        font-weight: 400;
                    }

                    #page-block-lclaasur83 {
                        height: 69.25rem;
                        max-width: 100%;
                    }

                    #page-block-lclaasur83 .section-holder-border {
                        border: 0;
                    }

                    #page-block-lclaasur83 .section-block {
                        background: rgb(248, 248, 248);
                        height: 69.25rem;
                    }

                    #page-block-lclaasur83 .section-holder-overlay {
                        display: none;
                    }

                    #element-11 {
                        top: 5.0625rem;
                        left: 2.8125rem;
                        height: 2.125rem;
                        width: 54.3125rem;
                        z-index: 11;
                        color: #37465A;
                        font-size: 1.7337rem;
                        line-height: 2.1rem;
                        text-align: center;
                    }

                    #element-11 .x_446dab97 {
                        text-align: center;
                        line-height: 2.125rem;
                        font-size: 1.7337rem;
                    }

                    #element-11 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-11 strong {
                        font-weight: 900;
                    }

                    #element-12 {
                        top: 8.125rem;
                        left: 13.8125rem;
                        height: 3.25rem;
                        width: 32.3125rem;
                        z-index: 14;
                        color: #37465A;
                        font-size: 1.3622rem;
                        line-height: 1.65rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-12 .x_b796efc8 {
                        text-align: center;
                        line-height: 1.625rem;
                        font-size: 1.3622rem;
                    }

                    #element-12 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-12 strong {
                        font-weight: 900;
                    }

                    #element-12.headline {
                        font-weight: 400;
                    }

                    #element-41 {
                        top: 13.875rem;
                        left: 0;
                        height: 14.4375rem;
                        width: 28.875rem;
                        z-index: 35;
                    }

                    #element-41 .shape {
                        border: 0;
                        border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                        background: rgb(255, 255, 255);
                        box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                    }

                    #element-61 {
                        top: 15.375rem;
                        left: 9.8125rem;
                        height: 6.4375rem;
                        width: 9.1875rem;
                        z-index: 37;
                    }

                    #element-43 {
                        top: 22.75rem;
                        left: 2.5625rem;
                        height: 3.5625rem;
                        width: 23.6875rem;
                        z-index: 36;
                        color: #37465A;
                        font-size: 0.9907rem;
                        line-height: 1.2rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-43 .x_2b60e4ec {
                        text-align: center;
                        line-height: 1.1875rem;
                        font-size: 0.9907rem;
                    }

                    #element-43 .x_08faff08 {
                        color: #00adee;
                    }

                    #element-43 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-43 strong {
                        font-weight: 900;
                    }

                    #element-43.headline {
                        font-weight: 400;
                    }

                    #element-42 {
                        top: 13.875rem;
                        left: 31.0625rem;
                        height: 14.4375rem;
                        width: 28.875rem;
                        z-index: 38;
                    }

                    #element-42 .shape {
                        border: 0;
                        border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                        background: rgb(255, 255, 255);
                        box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                    }

                    #element-62 {
                        top: 15.375rem;
                        left: 38.8125rem;
                        height: 6.4375rem;
                        width: 13.3125rem;
                        z-index: 40;
                    }

                    #element-62 .cropped {
                        background: url(//v.fastcdn.co/u/ecac9fc3/62063093-0-Partnerships-Site-Mo.png) 0 0 / 13.25rem 6.4375rem;
                    }

                    #element-51 {
                        top: 22.75rem;
                        left: 32.8125rem;
                        height: 3.5625rem;
                        width: 25.3125rem;
                        z-index: 39;
                        color: #37465A;
                        font-size: 0.9907rem;
                        line-height: 1.2rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-51 .x_2b60e4ec {
                        text-align: center;
                        line-height: 1.1875rem;
                        font-size: 0.9907rem;
                    }

                    #element-51 .x_bb23a208 {
                        color: #ff6400;
                    }

                    #element-51 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-51 strong {
                        font-weight: 900;
                    }

                    #element-51.headline {
                        font-weight: 400;
                    }

                    #element-45 {
                        top: 30.75rem;
                        left: 0;
                        height: 14.4375rem;
                        width: 28.875rem;
                        z-index: 41;
                    }

                    #element-45 .shape {
                        border: 0;
                        border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                        background: rgb(255, 255, 255);
                        box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                    }

                    #element-63 {
                        top: 32.25rem;
                        left: 6.4375rem;
                        height: 6.4375rem;
                        width: 15.9375rem;
                        z-index: 43;
                    }

                    #element-63 .cropped {
                        background: url(//v.fastcdn.co/u/ecac9fc3/62063075-0-Partnerships-Site-Mo.png) 0 0 / 15.875rem 6.4375rem;
                    }

                    #element-52 {
                        top: 39.625rem;
                        left: 2.5625rem;
                        height: 3.5625rem;
                        width: 23.6875rem;
                        z-index: 42;
                        color: #37465A;
                        font-size: 0.9907rem;
                        line-height: 1.2rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-52 .x_2b60e4ec {
                        text-align: center;
                        line-height: 1.1875rem;
                        font-size: 0.9907rem;
                    }

                    #element-52 .x_d7191531 {
                        color: #06c5ac;
                    }

                    #element-52 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-52 strong {
                        font-weight: 900;
                    }

                    #element-52.headline {
                        font-weight: 400;
                    }

                    #element-46 {
                        top: 30.75rem;
                        left: 31.0625rem;
                        height: 14.4375rem;
                        width: 28.875rem;
                        z-index: 44;
                    }

                    #element-46 .shape {
                        border: 0;
                        border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                        background: rgb(255, 255, 255);
                        box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                    }

                    #element-64 {
                        top: 32.25rem;
                        left: 37.125rem;
                        height: 6.4375rem;
                        width: 16.6875rem;
                        z-index: 46;
                    }

                    #element-53 {
                        top: 39.625rem;
                        left: 34.9375rem;
                        height: 3.5625rem;
                        width: 21.125rem;
                        z-index: 45;
                        color: #37465A;
                        font-size: 0.9907rem;
                        line-height: 1.2rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-53 .x_2b60e4ec {
                        text-align: center;
                        line-height: 1.1875rem;
                        font-size: 0.9907rem;
                    }

                    #element-53 .x_bd0e048b {
                        color: #eb008b;
                    }

                    #element-53 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-53 strong {
                        font-weight: 900;
                    }

                    #element-53.headline {
                        font-weight: 400;
                    }

                    #element-49 {
                        top: 47.6875rem;
                        left: 15.5rem;
                        height: 14.4375rem;
                        width: 28.875rem;
                        z-index: 47;
                    }

                    #element-49 .shape {
                        border: 0;
                        border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                        background: rgb(255, 255, 255);
                        box-shadow: rgba(93, 93, 93, 0.15) 0 0 15px 5px;
                    }

                    #element-65 {
                        top: 49.1875rem;
                        left: 25.0625rem;
                        height: 6.4375rem;
                        width: 9.75rem;
                        z-index: 49;
                    }

                    #element-54 {
                        top: 56.5625rem;
                        left: 21rem;
                        height: 3.5625rem;
                        width: 17.9375rem;
                        z-index: 48;
                        color: #37465A;
                        font-size: 0.9907rem;
                        line-height: 1.2rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-54 .x_2b60e4ec {
                        text-align: center;
                        line-height: 1.1875rem;
                        font-size: 0.9907rem;
                    }

                    #element-54 .x_705b78eb {
                        color: #9a09cb;
                    }

                    #element-54 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-54 strong {
                        font-weight: 900;
                    }

                    #element-54.headline {
                        font-weight: 400;
                    }

                    #page-block-8ty0au7uq46 {
                        height: 38.6875rem;
                        max-width: 100%;
                    }

                    #page-block-8ty0au7uq46 .section-holder-border {
                        border: 0;
                    }

                    #page-block-8ty0au7uq46 .section-block {
                        background: none;
                        height: 38.6875rem;
                    }

                    #page-block-8ty0au7uq46 .section-holder-overlay {
                        display: none;
                    }

                    #element-13 {
                        top: 5.0625rem;
                        left: 6.3125rem;
                        height: 4.25rem;
                        width: 47.3125rem;
                        z-index: 9;
                        color: #37465A;
                        font-size: 1.7337rem;
                        line-height: 2.1rem;
                        text-align: center;
                        font-weight: 400;
                    }

                    #element-13 .x_446dab97 {
                        text-align: center;
                        line-height: 2.125rem;
                        font-size: 1.7337rem;
                    }

                    #element-13 .x_7b2817bf {
                        color: #000000;
                    }

                    #element-13 .x_e4a86398 {
                        color: #999999;
                    }

                    #element-13 strong {
                        font-weight: 900;
                    }

                    #element-13.headline {
                        font-weight: 400;
                    }

                    #element-15 {
                        top: 11.8125rem;
                        left: 21.4375rem;
                        height: 2.5rem;
                        width: 17rem;
                        z-index: 15;
                    }

                    #element-15 .btn.btn-effect3d:active {
                        box-shadow: none;
                    }

                    #element-15 .btn:hover {
                        background: #0E68AC;
                        color: #FFFFFF;
                    }

                    #element-15 .btn {
                        background: #1979C7;
                        color: #FFFFFF;
                        font-size: 1.2384rem;
                        font-family: Radikal;
                        font-weight: 400;
                        height: 2.5rem;
                        width: 17rem;
                        border-radius: 41px;
                    }

                    #element-66 {
                        top: 17.25rem;
                        left: 14.5rem;
                        height: 17.8125rem;
                        width: 30.5rem;
                        z-index: 50;
                    }

                    #page-block-v0nmvz7236 {
                        height: 15.6875rem;
                        max-width: 100%;
                    }

                    #page-block-v0nmvz7236 .section-holder-border {
                        border: 0;
                    }

                    #page-block-v0nmvz7236 .section-block {
                        background: rgb(0, 0, 0);
                        height: 15.6875rem;
                    }

                    #page-block-v0nmvz7236 .section-holder-overlay {
                        display: none;
                    }

                    #element-18 {
                        top: 1.6875rem;
                        left: 21.375rem;
                        height: 3.4375rem;
                        width: 16.8125rem;
                        z-index: 10;
                    }

                    #element-18 .cropped {
                        background: url(//v.fastcdn.co/u/ecac9fc3/58319577-0-RGB-TrueCar-Gradient.png) 0 -0.875rem / 16.8125rem 5.125rem;
                    }

                    #element-20 {
                        top: 6.8125rem;
                        left: 30.875rem;
                        height: 1.8125rem;
                        width: 1.8125rem;
                        z-index: 17;
                    }

                    #element-21 {
                        top: 6.8125rem;
                        left: 35.0625rem;
                        height: 1.8125rem;
                        width: 1.8125rem;
                        z-index: 18;
                    }

                    #element-19 {
                        top: 6.875rem;
                        left: 22.75rem;
                        height: 1.75rem;
                        width: 1.75rem;
                        z-index: 16;
                    }

                    #element-22 {
                        top: 6.875rem;
                        left: 26.8125rem;
                        height: 1.75rem;
                        width: 1.75rem;
                        z-index: 19;
                    }

                    #element-16 {
                        top: 9.75rem;
                        left: -6.25rem;
                        height: 1.625rem;
                        width: 72.5625rem;
                        z-index: 6;
                        color: #37465A;
                        font-size: 0.9907rem;
                        line-height: 1.6rem;
                        text-align: center;
                    }

                    #element-16 .x_dc68832a {
                        text-align: center;
                        line-height: 1.625rem;
                        font-size: 0.9907rem;
                    }

                    #element-16 .x_f2074b6c {
                        color: #ffffff;
                    }

                    #element-16 strong {
                        font-weight: 700;
                    }

                    #element-17 {
                        top: 12.4375rem;
                        left: -6.25rem;
                        height: 1.1875rem;
                        width: 72.5625rem;
                        z-index: 8;
                        color: #37465A;
                        font-size: 0.743rem;
                        line-height: 1.2rem;
                        text-align: center;
                    }

                    #element-17 .x_01475da3 {
                        text-align: center;
                        line-height: 1.1875rem;
                        font-size: 0.743rem;
                    }

                    #element-17 .x_f2074b6c {
                        color: #ffffff;
                    }

                    #element-17 strong {
                        font-weight: 700;
                    }
                }

                .page-faqs {
                    background-color: #000000;
                    color: #fff;
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

        <script>
            window.__variantsData = [{
                name: 'A',
                chance: 100
            }];

            window.__page_id = 23207577;
            window.__customer_id = 2211801;
            window.__default_experience_id = 23207577;
            window.__version = 23;
            window.__variant = "A";
            window.__variant_id = 1;
            window.__variant_custom_name = "Variation A";
            window.__preview = false;
            window.__page_type = 2;
            window.__variant_hash = "1070856020dd683a95f5afee7825eef52e342887";
            window.__page_domain = "www.truecar.com";
            window.__page_generator = true;
            window.__experiment_id = null;
            window.__new_tracker = true;
            window._Translate = {
                translations: {},
                set: function(text, translation) {
                    this.translations[text] = translation;
                },
                get: function(text) {
                    return this.translations[text] || text;
                }
            };
        </script>
        <script id="ip-config" type="application/json">
    {"mobileDisabled":false,"snowplowWrapperUrl":"//g.fastcdn.co/js/sptw.2fff3c07e91a81e507a4.js","downloadFileEndpoint":"https://app.instapage.com/ajax/pageserver/files/serve-file","reCaptchaEnabled":false,"snowplowUrl":"https://cdn.instapagemetrics.com/t/js/3/it.js"}
  </script>

        <script id="ip-analytics" type="application/json">{"trackingData":{"ownerId":1911941,"customerId":2211801,"pageId":23207577,"publishedVersion":23,"variationName":"A","variationId":1,"linkedVariationId":2,"variation":"A","trackedLinks":[{"href":"https://www.truecar.com/plus/","ariaLabel":"","id":"gdrsz9rhoda","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/plus/","ariaLabel":"","id":"0hfiza3h5ix","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.youtube.com/truecar","ariaLabel":"","id":"fgxaesrck5g","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://twitter.com/TrueCar","ariaLabel":"","id":"t59nucmmajh","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.facebook.com/TrueCar/","ariaLabel":"","id":"uz2m4qx8mvd","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.instagram.com/truecar/","ariaLabel":"","id":"79uyvsv2mx6","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/terms/","ariaLabel":"","id":"bsisjr5wo2s","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/privacy/","ariaLabel":"","id":"mtryed27p8","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/privacy-rights/","ariaLabel":"","id":"4nhcdj3c4h","type":"url","track":true,"targetNewWindow":true,"passParameters":false}],"allLinks":[{"href":"https://www.truecar.com/plus/","ariaLabel":"","id":"gdrsz9rhoda","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"mailto:partnerships@truecar.com","ariaLabel":"","id":"nn1hi6n9aki","type":"url","track":false,"targetNewWindow":true,"passParameters":false},{"href":"mailto:partnerships@truecar.com","ariaLabel":"","id":"8a32kxgb0j5","type":"url","track":false,"targetNewWindow":true,"passParameters":false},{"href":"mailto:partnerships@truecar.com","ariaLabel":"","id":"a74ih4mfy8n","type":"url","track":false,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/plus/","ariaLabel":"","id":"0hfiza3h5ix","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.youtube.com/truecar","ariaLabel":"","id":"fgxaesrck5g","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://twitter.com/TrueCar","ariaLabel":"","id":"t59nucmmajh","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.facebook.com/TrueCar/","ariaLabel":"","id":"uz2m4qx8mvd","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.instagram.com/truecar/","ariaLabel":"","id":"79uyvsv2mx6","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/terms/","ariaLabel":"","id":"bsisjr5wo2s","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/privacy/","ariaLabel":"","id":"mtryed27p8","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/privacy-rights/","ariaLabel":"","id":"4nhcdj3c4h","type":"url","track":true,"targetNewWindow":true,"passParameters":false}],"user_id":1911941},"conversionSettings":{"forms":true,"links":true,"external":false}}</script>

        <script id="ip-trkr" type="text/javascript" async="1">
            ;
            (function(p, l, o, w, i, n, g) {
                if (!p[i]) {
                    p.GlobalSnowplowNamespace = p.GlobalSnowplowNamespace || [];
                    p.GlobalSnowplowNamespace.push(i);
                    p[i] = function() {
                        (p[i].q = p[i].q || []).push(arguments)
                    };
                    p[i].q = p[i].q || [];
                    n = l.createElement(o);
                    g = l.getElementsByTagName(o)[0];
                    n.async = 1;
                    n.src = w;
                    g.parentNode.insertBefore(n, g)
                }
            }(window, document, "script", "https://cdn.instapagemetrics.com/t/js/3/it.js", "instapageSp"));;
            (function(i, n, s, t, a, p, g) {
                i[a] || (i[a] = function() {
                        (i[a].q = i[a].q || []).push(arguments)
                    },
                    i[a].q = i[a].q || [], p = n.createElement(s), g = n.getElementsByTagName(s)[0], p.async = 1,
                    p.src = t, g.parentNode.insertBefore(p, g))
            }(window, document, "script", "//g.fastcdn.co/js/sptw.2fff3c07e91a81e507a4.js", "_instapageSnowplow"));
            try {
                var trackingData = JSON.parse(document.querySelector('#ip-analytics').text).trackingData;
                window._instapageSnowplow('setWrapperConfig', {
                    lpContext: {
                        lp_id: trackingData.pageId,
                        lp_variation_id: trackingData.variationId,
                        lp_version: trackingData.publishedVersion,
                        subaccount_id: trackingData.customerId
                    },
                    collectorHost: "https://ec.instapagemetrics.com"
                });
                if (!localStorage.getItem('IP_NO_TRACKING')) {
                    window._instapageSnowplow('enableActivityTracking');
                    window._instapageSnowplow('trackPageView');
                }
            } catch (e) {
                console.warn('Snowplow tracker error', e);
            }
        </script>

        <script id="ip-cm" type="text/javascript" async="1">
            ;
            (function(c, o, n, s, e, m, a) {
                c[e] || (c[e] = function() {
                        (c[e].q = c[e].q || []).push(arguments)
                    },
                    c[e].q = c[e].q || [], m = o.createElement(n), a = o.getElementsByTagName(n)[0], m.async = 1,
                    m.src = s, a.parentNode.insertBefore(m, a))
            }(window, document, "script", "https://g.fastcdn.co/js/cm.js", "_instapageConsentManagement"));
        </script>

        <script src="//g.fastcdn.co/js/utils.8e682833b85e4bb96d30.js"></script>

        <!-- end custom HEAD code-->
        <style type="text/css">
            @font-face {
                font-weight: 400;
                font-style: normal;
                font-family: circular;

                src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
            }

            @font-face {
                font-weight: 700;
                font-style: normal;
                font-family: circular;

                src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
            }
        </style>
    @endpush

    <main style="margin-top: 120px">

        <section class="section section-relative " id="page_block_header" data-at="section">

            <div class="section-holder-border item-block item-absolute" data-at="section-border"></div>
            <div class="section-holder-overlay item-block item-absolute" data-at="section-overlay"></div>
            <div class="section-block">
                <div class="section-inner section-fit section-relative">
                    <div class="widget item-absolute headline  " id="element-2" data-at="headline">
                        <div class="contents">
                            <h1>
                                <span class="x_b614627d x_64e665fe"><span class="x_f2074b6c">Provide more value to your
                                        members</span></span>
                            </h1>
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-82" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_446dab97 x_a2e00130"><span class="x_86ac332f">By partnering with the most
                                        useful third party car-shopping platform, according to J.D. Power.</span></span>
                            </h2>
                        </div>
                    </div>

                    <div class="widget item-absolute  " id="element-3">
                        <a href="javascript:void(0)" id="link-nn1hi6n9aki" target="_blank" class="url-link btn item-block"
                            data-at="button" data-link-nn1hi6n9aki="">
                            Learn More
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <section class="section section-relative " id="page_block_below_fold" data-at="section">

            <div class="section-holder-border item-block item-absolute" data-at="section-border"></div>
            <div class="section-holder-overlay item-block item-absolute" data-at="section-overlay"></div>
            <div class="section-block">
                <div class="section-inner section-fit section-relative">
                    <div class="widget item-absolute headline  " id="element-4" data-at="headline">
                        <div class="contents">
                            <h1>
                                <span class="x_446dab97 x_b796efc8"><span class="x_7b2817bf">Elevate Your Offerings
                                        and Engage Your Members</span></span>
                            </h1>
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-5" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_b796efc8 x_5e4484a5"><span class="x_7b2817bf">
                                        Car buying platforms aim to provide a seamless
                                        car buying and selling process for consumers while enhancing your brand
                                        awareness, member benefits, and product penetration.</span></span>
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section section-relative " id="page-block-o234a0hamf" data-at="section">

            <div class="section-holder-border item-block item-absolute" data-at="section-border"></div>
            <div class="section-holder-overlay item-block item-absolute" data-at="section-overlay"></div>
            <div class="section-block">
                <div class="section-inner section-fit section-relative">
                    <div class="widget item-absolute headline  " id="element-9" data-at="headline">
                        <div class="contents">
                            <h1>
                                <span class="x_446dab97 x_05b72d8a"><span class="x_7b2817bf">Platform
                                        Benefits</span></span>
                            </h1>
                        </div>
                    </div>

                    <div class="widget item-absolute " id="element-23">
                        <div class="contents shape  box figure " data-at="shape"></div>
                    </div>

                    <div class="widget item-absolute  " id="element-56">
                        <div class="contents cropped item-block" data-at="image-cropp">
                            <img class="item-content-box item-block image" data-at="image" alt=""
                                src="//v.fastcdn.co/u/ecac9fc3/62063087-0-Partnerships-Site-Mo.png"
                                data-src="//v.fastcdn.co/u/ecac9fc3/62063087-0-Partnerships-Site-Mo.png"
                                data-retina-src="//v.fastcdn.co/u/ecac9fc3/62063087-0-Partnerships-Site-Mo.png"
                                srcset="//v.fastcdn.co/u/ecac9fc3/62063087-0-Partnerships-Site-Mo.png 2x">
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-28" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_2b60e4ec"><span class="x_7b2817bf">Flexible and tailored car buying and
                                        selling experience at no cost to the partner</span></span>
                            </h2>
                        </div>
                    </div>

                    <div class="widget item-absolute " id="element-24">
                        <div class="contents shape  box figure " data-at="shape"></div>
                    </div>

                    <div class="widget item-absolute  " id="element-57">
                        <div class="contents cropped item-block" data-at="image-cropp">
                            <img class="item-content-box item-block image" data-at="image" alt=""
                                src="//v.fastcdn.co/u/ecac9fc3/62063080-0-Partnerships-Site-Mo.png"
                                data-src="//v.fastcdn.co/u/ecac9fc3/62063080-0-Partnerships-Site-Mo.png"
                                data-retina-src="//v.fastcdn.co/u/ecac9fc3/62063080-0-Partnerships-Site-Mo.png"
                                srcset="//v.fastcdn.co/u/ecac9fc3/62063080-0-Partnerships-Site-Mo.png 2x">
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-29" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_2b60e4ec"><span class="x_7b2817bf">Partner dedicated Product &amp;
                                        Marketing resources</span></span>
                            </h2>
                        </div>
                    </div>

                    <div class="widget item-absolute " id="element-35">
                        <div class="contents shape  box figure " data-at="shape"></div>
                    </div>

                    <div class="widget item-absolute  " id="element-58">
                        <div class="contents cropped item-block" data-at="image-cropp">
                            <img class="item-content-box item-block image" data-at="image" alt=""
                                src="//v.fastcdn.co/u/ecac9fc3/62063095-0-Partnerships-Site-Mo.png"
                                data-src="//v.fastcdn.co/u/ecac9fc3/62063095-0-Partnerships-Site-Mo.png"
                                data-retina-src="//v.fastcdn.co/u/ecac9fc3/62063095-0-Partnerships-Site-Mo.png"
                                srcset="//v.fastcdn.co/u/ecac9fc3/62063095-0-Partnerships-Site-Mo.png 2x">
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-34" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_2b60e4ec"><span class="x_7b2817bf">Valuable savings for your members
                                        and unique cross-sell opportunities for your brand</span></span>
                            </h2>
                        </div>
                    </div>

                    <div class="widget item-absolute " id="element-33">
                        <div class="contents shape  box figure " data-at="shape"></div>
                    </div>

                    <div class="widget item-absolute  " id="element-59">
                        <div class="contents cropped item-block" data-at="image-cropp">
                            <img class="item-content-box item-block image" data-at="image" alt=""
                                src="//v.fastcdn.co/u/ecac9fc3/62063072-0-Partnerships-Site-Mo.png"
                                data-src="//v.fastcdn.co/u/ecac9fc3/62063072-0-Partnerships-Site-Mo.png"
                                data-retina-src="//v.fastcdn.co/u/ecac9fc3/62063072-0-Partnerships-Site-Mo.png"
                                srcset="//v.fastcdn.co/u/ecac9fc3/62063072-0-Partnerships-Site-Mo.png 2x">
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-32" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_2b60e4ec"><span class="x_7b2817bf">Closed-loop business model with
                                        unparalleled access to data</span></span>
                            </h2>
                        </div>
                    </div>

                    <div class="widget item-absolute " id="element-38">
                        <div class="contents shape  box figure " data-at="shape"></div>
                    </div>

                    <div class="widget item-absolute  " id="element-60">
                        <div class="contents cropped item-block" data-at="image-cropp">
                            <img class="item-content-box item-block image" data-at="image" alt=""
                                src="//v.fastcdn.co/u/ecac9fc3/62063079-0-Partnerships-Site-Mo.png"
                                data-src="//v.fastcdn.co/u/ecac9fc3/62063079-0-Partnerships-Site-Mo.png"
                                data-retina-src="//v.fastcdn.co/u/ecac9fc3/62063079-0-Partnerships-Site-Mo.png"
                                srcset="//v.fastcdn.co/u/ecac9fc3/62063079-0-Partnerships-Site-Mo.png 2x">
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-37" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_2b60e4ec"><span class="x_7b2817bf">Closed-loop business model allowing
                                        for compensation from generated revenue</span></span>
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section section-relative " id="page-block-lclaasur83" data-at="section">

            <div class="section-holder-border item-block item-absolute" data-at="section-border"></div>
            <div class="section-holder-overlay item-block item-absolute" data-at="section-overlay"></div>
            <div class="section-block">
                <div class="section-inner section-fit section-relative">
                    <div class="widget item-absolute headline  " id="element-11" data-at="headline">
                        <div class="contents">
                            <h1>
                                <span class="x_446dab97 x_05b72d8a"><span class="x_7b2817bf">Program
                                        Overview</span></span>
                            </h1>
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-12" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_b796efc8 x_5e4484a5"><span class="x_7b2817bf">Today, TrueCar’s
                                        experience solves for all key inputs
                                        to a seamless car purchase.</span></span>
                            </h2>
                        </div>
                    </div>

                    <div class="widget item-absolute " id="element-41">
                        <div class="contents shape  box figure " data-at="shape"></div>
                    </div>

                    <div class="widget item-absolute  " id="element-61">
                        <div class="contents cropped item-block" data-at="image-cropp">
                            <img class="item-content-box item-block image" data-at="image" alt=""
                                src="//v.fastcdn.co/u/ecac9fc3/62063088-0-Partnerships-Site-Mo.png"
                                data-src="//v.fastcdn.co/u/ecac9fc3/62063088-0-Partnerships-Site-Mo.png"
                                data-retina-src="//v.fastcdn.co/u/ecac9fc3/62063088-0-Partnerships-Site-Mo.png"
                                srcset="//v.fastcdn.co/u/ecac9fc3/62063088-0-Partnerships-Site-Mo.png 2x">
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-43" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_2b60e4ec"><span class="x_08faff08">New Car</span><span class="x_7b2817bf">
                                        flow provides pricing context and an upfront offer on
                                        nationwide inventory to enhance and fast-track the purchase
                                        experience</span></span>
                            </h2>
                        </div>
                    </div>

                    <div class="widget item-absolute " id="element-42">
                        <div class="contents shape  box figure " data-at="shape"></div>
                    </div>

                    <div class="widget item-absolute  " id="element-62">
                        <div class="contents cropped item-block" data-at="image-cropp">
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-51" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_2b60e4ec"><span class="x_bb23a208">Used Car</span> <span
                                        class="x_7b2817bf">flow allows shoppers to browse nationwide inventory
                                        leveraging best-in-class filtering capabilities, including price, vehicle type,
                                        condition, and dealer type</span></span>
                            </h2>
                        </div>
                    </div>

                    <div class="widget item-absolute " id="element-45">
                        <div class="contents shape  box figure " data-at="shape"></div>
                    </div>

                    <div class="widget item-absolute  " id="element-63">
                        <div class="contents cropped item-block" data-at="image-cropp">
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-52" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_2b60e4ec"><span class="x_d7191531">Deals Experience</span><span
                                        class="x_7b2817bf"> allows shoppers to translate price &amp; trade into
                                        transactable monthly payments by lease or loan with customized
                                        terms</span></span>
                            </h2>
                        </div>
                    </div>

                    <div class="widget item-absolute " id="element-46">
                        <div class="contents shape  box figure " data-at="shape"></div>
                    </div>

                    <div class="widget item-absolute  " id="element-64">
                        <div class="contents cropped item-block" data-at="image-cropp">
                            <img class="item-content-box item-block image" data-at="image" alt=""
                                src="//v.fastcdn.co/u/ecac9fc3/62063076-0-Partnerships-Site-Mo.png"
                                data-src="//v.fastcdn.co/u/ecac9fc3/62063076-0-Partnerships-Site-Mo.png"
                                data-retina-src="//v.fastcdn.co/u/ecac9fc3/62063076-0-Partnerships-Site-Mo.png"
                                srcset="//v.fastcdn.co/u/ecac9fc3/62063076-0-Partnerships-Site-Mo.png 2x">
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-53" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_2b60e4ec"><span class="x_bd0e048b">Sell Your Car</span> <span
                                        class="x_7b2817bf">provides shoppers with the ability to see the value of their
                                        current car and gives a cash offer in minutes.</span></span>
                            </h2>
                        </div>
                    </div>

                    <div class="widget item-absolute " id="element-49">
                        <div class="contents shape  box figure " data-at="shape"></div>
                    </div>

                    <div class="widget item-absolute  " id="element-65">
                        <div class="contents cropped item-block" data-at="image-cropp">
                            <img class="item-content-box item-block image" data-at="image" alt=""
                                src="//v.fastcdn.co/u/ecac9fc3/62063083-0-Partnerships-Site-Mo.png"
                                data-src="//v.fastcdn.co/u/ecac9fc3/62063083-0-Partnerships-Site-Mo.png"
                                data-retina-src="//v.fastcdn.co/u/ecac9fc3/62063083-0-Partnerships-Site-Mo.png"
                                srcset="//v.fastcdn.co/u/ecac9fc3/62063083-0-Partnerships-Site-Mo.png 2x">
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-54" data-at="headline">
                        <div class="contents">
                            <h2>
                                <span class="x_2b60e4ec"><span class="x_705b78eb">Unique Benefits and Savings</span>
                                    <span class="x_7b2817bf">from exclusive OEM incentives to custom post-sale
                                        benefits.</span></span>
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Page Faqs Start -->
        <div class="page-faqs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Faqs Sidebar Start -->
                        <div class="faq-sidebar">
                            <!-- Faqs Catagery List Start -->
                            <div class="faq-catagery-list wow fadeInUp" data-wow-delay="0.25s">
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
                                <h3 class="wow fadeInUp">FAQs</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">General information</h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
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
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                            aria-controls="collapse2">
                                            Where are your rental locations?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, we accept international driver's licenses. An additional
                                                government-issued ID, such as a passport, is also required.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                            aria-controls="collapse3">
                                            What are your hours of operation?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                        data-bs-parent="#accordion">
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
                                <h3 class="wow fadeInUp">FAQs</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Booking and reservations</h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion1">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            How do I make a reservation?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse show"
                                        aria-labelledby="heading4" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Yes, you can rent a car for someone else, but the primary driver must be
                                                present at the time of rental to provide their driver's license and sign the
                                                rental agreement.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                            aria-controls="collapse5">
                                            Can I modify or cancel my reservation?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                        data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Yes, you can rent a car for someone else, but the primary driver must be
                                                present at the time of rental to provide their driver's license and sign the
                                                rental agreement.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="accordion-header" id="heading6">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false"
                                            aria-controls="collapse6">
                                            What is your cancellation policy?
                                        </button>
                                    </h2>
                                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                        data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Yes, you can rent a car for someone else, but the primary driver must be
                                                present at the time of rental to provide their driver's license and sign the
                                                rental agreement.</p>
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
                                <h3 class="wow fadeInUp">FAQs</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Pricing and payment</h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion2">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading7">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                            What forms of payment do you accept?
                                        </button>
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse show"
                                        aria-labelledby="heading7" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Reservations can be made online through our website, by calling our customer
                                                service hotline, or by visiting one of our rental locations in person.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                    <h2 class="accordion-header" id="heading8">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false"
                                            aria-controls="collapse8">
                                            Are there any hidden fees?
                                        </button>
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                                        data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Reservations can be made online through our website, by calling our customer
                                                service hotline, or by visiting one of our rental locations in person.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="accordion-header" id="heading9">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false"
                                            aria-controls="collapse9">
                                            Do you require a deposit?
                                        </button>
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                                        data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Reservations can be made online through our website, by calling our customer
                                                service hotline, or by visiting one of our rental locations in person.</p>
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
                                <h3 class="wow fadeInUp">FAQs</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Vehicle information</h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion3">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading10">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                            Are your vehicles insured?
                                        </button>
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse show"
                                        aria-labelledby="heading10" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We offer a diverse fleet of vehicles, including economy cars, compact cars,
                                                SUVs, luxury cars, and more to suit various needs and preferences.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                    <h2 class="accordion-header" id="heading11">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false"
                                            aria-controls="collapse11">
                                            Do you offer vehicles with automatic transmission?
                                        </button>
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                                        data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We offer a diverse fleet of vehicles, including economy cars, compact cars,
                                                SUVs, luxury cars, and more to suit various needs and preferences.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="accordion-header" id="heading12">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false"
                                            aria-controls="collapse12">
                                            Can I choose a specific vehicle model?
                                        </button>
                                    </h2>
                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                                        data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We offer a diverse fleet of vehicles, including economy cars, compact cars,
                                                SUVs, luxury cars, and more to suit various needs and preferences.</p>
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
        <!-- Page Faq End -->

        <section class="section section-relative " id="page-block-8ty0au7uq46" data-at="section">

            <div class="section-holder-border item-block item-absolute" data-at="section-border"></div>
            <div class="section-holder-overlay item-block item-absolute" data-at="section-overlay"></div>
            <div class="section-block">
                <div class="section-inner section-fit section-relative">
                    <div class="widget item-absolute headline  " id="element-13" data-at="headline">
                        <div class="contents">
                            <h1>
                                <span class="x_446dab97 x_b796efc8"><span class="x_7b2817bf">Reach out to
                                    </span><u><span class="x_e4a86398"><a href="javacript:void(0)" id="link-8a32kxgb0j5"
                                                target="_blank" data-link-8a32kxgb0j5=""
                                                class="url-link">example@gmail.com</a></span></u><span class="x_7b2817bf">
                                        to learn more about our Affinity Partner Programs
                                        today.</span></span>
                            </h1>
                        </div>
                    </div>

                    <div class="widget item-absolute  " id="element-15">
                        <a href="{{ url('contact-us') }}" id="link-a74ih4mfy8n" target="_blank"
                            class="url-link btn    item-block" data-at="button" data-link-a74ih4mfy8n="">
                            Get In Touch
                        </a>
                    </div>

                    <div class="widget item-absolute  " id="element-66">
                        <div class="contents cropped item-block" data-at="image-cropp">
                            <img class="item-content-box item-block image" data-at="image" alt=""
                                src="//v.fastcdn.co/u/ecac9fc3/62063100-0-Partnerships-Site-Mo.png"
                                data-src="//v.fastcdn.co/u/ecac9fc3/62063100-0-Partnerships-Site-Mo.png"
                                data-retina-src="//v.fastcdn.co/u/ecac9fc3/62063100-0-Partnerships-Site-Mo.png"
                                srcset="//v.fastcdn.co/u/ecac9fc3/62063100-0-Partnerships-Site-Mo.png 2x">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="why-choose-us">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">why choose us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">U</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">m</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">h</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">q</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">v</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div></div> </div><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">f</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 order-lg-1 order-md-1 order-1">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="icon-box">
                                <img src="{{asset('novaride/images/icon-why-choose-1.svg')}}" alt="">
                            </div>
                            <div class="why-choose-content">
                                <h3>extensive fleet options</h3>
                                <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus Hendrerit, Massa</p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="icon-box">
                                <img src="{{asset('novaride/images/icon-why-choose-2.svg')}}" alt="">
                            </div>
                            <div class="why-choose-content">
                                <h3>exceptional customer service</h3>
                                <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus Hendrerit, Massa</p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->
                    </div>

                    <div class="col-lg-4 col-md-12 order-lg-2 order-md-3 order-2">
                        <div class="why-choose-image">
                            <figure class="reveal" style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <img src="{{asset('novaride/images/why-choose-img.jpg')}}" alt="" style="transform: translate(0px, 0px);">
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 order-lg-3 order-md-2 order-3">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="icon-box">
                                <img src="{{asset('novaride/images/icon-why-choose-3.svg')}}" alt="">
                            </div>
                            <div class="why-choose-content">
                                <h3>convenient locations</h3>
                                <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus Hendrerit, Massa</p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="icon-box">
                                <img src="{{asset('novaride/images/icon-why-choose-4.svg')}}" alt="">
                            </div>
                            <div class="why-choose-content">
                                <h3>reliability and safety</h3>
                                <p>Quisque Sollicitudin Feugiat Risus, Eu Posuere Ex Euismod Eu. Phasellus Hendrerit, Massa</p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    @push('scripts')
        <script src="//g.fastcdn.co/js/Cradle.8725edce5135a9515d48.js"></script>
        <script async="" defer="" src="//g.fastcdn.co/js/LazyImage.a698675f6fd38cb87757.js"></script>
        <script src="//g.fastcdn.co/js/Links.7722c547d653e74ec16f.js"></script>
        <script async="" src="https://heatmap-events-collector.instapage.com/static/lib.js"></script>

        <!-- Generated at: 2024-07-30T08:03:38.386Z -->
        <!--

                  -->
        <script>
            (function() {
                function c() {
                    var b = a.contentDocument || a.contentWindow.document;
                    if (b) {
                        var d = b.createElement('script');
                        d.innerHTML =
                            "window.__CF$cv$params={r:'8b75f903b86aef20',t:'MTcyNDM2MjMxNy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                        b.getElementsByTagName('head')[0].appendChild(d)
                    }
                }
                if (document.body) {
                    var a = document.createElement('iframe');
                    a.height = 1;
                    a.width = 1;
                    a.style.position = 'absolute';
                    a.style.top = 0;
                    a.style.left = 0;
                    a.style.border = 'none';
                    a.style.visibility = 'hidden';
                    document.body.appendChild(a);
                    if ('loading' !== document.readyState) c();
                    else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                    else {
                        var e = document.onreadystatechange || function() {};
                        document.onreadystatechange = function(b) {
                            e(b);
                            'loading' !== document.readyState && (document.onreadystatechange = e, c())
                        }
                    }
                }
            })();
        </script><iframe height="1" width="1"
            style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>


        <div id="loom-companion-mv3" ext-id="liecbddmkiiihnedobmlmillhodjkdmb">
            <section id="shadow-host-companion"></section>
        </div>
    @endpush
@endsection
