@extends('site.layouts.app')
@section('content')

    @push('styles')
        <style type="text/css" media="screen">
            body {
                -moz-osx-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                margin: 0;
                width: 100%;
                font-family: Radikal;
                font-weight: 400;
                font-style: normal;
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

            p {
                word-wrap: break-word;
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
                font-weight: 700;
                font-style: normal;
            }

            .btn {
                line-height: 120%;
                text-align: center;
                font-family: Radikal;
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

                #page-block-fi9y6rii8ts {
                    height: 5.5rem;
                    max-width: 100%;
                }

                #page-block-fi9y6rii8ts .section-holder-border {
                    border: 0;
                }

                #page-block-fi9y6rii8ts .section-block {
                    background: rgb(0, 0, 0);
                    height: 5.5rem;
                }

                #page-block-fi9y6rii8ts .section-holder-overlay {
                    display: none;
                }

                #element-1 {
                    top: 1.75rem;
                    left: 7.375rem;
                    height: 2.0674rem;
                    width: 10.125rem;
                    z-index: 3;
                }

                #page_block_header {
                    height: 33.75rem;
                    max-width: 100%;
                }

                #page_block_header .section-holder-border {
                    border: 0;
                }

                #page_block_header .section-block {
                    background: rgb(0, 0, 0);
                    height: 33.75rem;
                }

                #page_block_header .section-holder-overlay {
                    display: none;
                }

                #element-79 {
                    top: 16.8125rem;
                    left: 1.1875rem;
                    height: 16.9621rem;
                    width: 22.5rem;
                    z-index: 4;
                }

                #element-2 {
                    top: 3.125rem;
                    left: 2rem;
                    height: 10.9375rem;
                    width: 20.125rem;
                    z-index: 5;
                    color: #FFFFFF;
                    font-size: 1.7957rem;
                    line-height: 2.175rem;
                    text-align: center;
                }

                #element-2 .x_fac9ed88 {
                    text-align: center;
                    line-height: 2.1875rem;
                    font-size: 1.7957rem;
                }

                #page_block_below_fold {
                    height: 68.0625rem;
                    max-width: 100%;
                }

                #page_block_below_fold .section-holder-border {
                    border: 0;
                }

                #page_block_below_fold .section-block {
                    background: rgb(255, 255, 255);
                    height: 68.0625rem;
                }

                #page_block_below_fold .section-holder-overlay{display:none;}#element-97{top:29.4375rem;left:1.1875rem;height:34.6875rem;width:22.5rem;z-index:13;}.circle{border-radius:50%;}.shape{height:inherit;}.line-horizontal{height:.625rem;}.line-vertical{height:100%;margin-right:.625rem;}[class*='line-'] {
                    box-sizing: content-box;
                }

                #element-97 .shape {
                    border: 0;
                    border-radius: 0.3125rem 0.3125rem 0.3125rem 0.3125rem;
                    background: rgb(242, 242, 242);
                }

                #element-96 {
                    top: 31.3125rem;
                    left: 2.4375rem;
                    height: 1.4375rem;
                    width: 20rem;
                    z-index: 15;
                    color: #000000;
                    font-size: 1.4241rem;
                    line-height: 1.4375rem;
                    text-align: center;
                }

                #element-96 .x_e86fa07f {
                    text-align: center;
                    line-height: 1.4375rem;
                    font-size: 1.4241rem;
                }

                #element-94 {
                    top: 34.625rem;
                    left: 2.4375rem;
                    height: 22.5rem;
                    width: 20rem;
                    z-index: 14;
                }

                .btn-shadow {
                    box-shadow: 0 1px 3px rgba(1, 1, 1, 0.5);
                }

                .lightbox {
                    display: none;
                    position: fixed;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }

                .lightbox-dim {
                    background: rgba(0, 0, 0, 0.85);
                    height: 100%;
                    animation: fade-in .5s ease-in-out;
                    overflow-x: hidden;
                    display: flex;
                    align-items: center;
                    padding: 30px 0;
                }

                .lightbox-content {
                    background-color: #fefefe;
                    border-radius: 3px;
                    position: relative;
                    margin: auto;
                    animation: slide-down .5s ease-in-out;
                }

                .lightbox-opened {
                    display: block;
                }

                .lightbox-close {
                    width: 26px;
                    right: 0;
                    top: -10px;
                    cursor: pointer;
                }

                .lightbox-close-btn {
                    padding: 0;
                    border: none;
                    background: none;
                }

                .lightbox-btn-svg {
                    display: block;
                }

                .lightbox-close-icon {
                    fill: #fff;
                }

                .notification-text {
                    font-size: 1.5rem;
                    color: #fff;
                    text-align: center;
                    width: 100%;
                }

                .modal-on {
                    overflow: hidden;
                }

                .popup-link {
                    cursor: pointer;
                }

                .form {
                    font-size: 1.25rem;
                }

                fieldset {
                    margin: 0;
                    padding: 0;
                    border: 0;
                    min-width: 0;
                }

                .form-input {
                    color: transparent;
                    background-color: transparent;
                    border: 1px solid transparent;
                    border-radius: 3px;
                    font-family: inherit;
                    width: 100%;
                    height: 3.5rem;
                    margin: 0.5rem 0;
                    padding: 0.5rem 0.625rem 0.5625rem;
                }

                .form-input::placeholder {
                    opacity: 1;
                    color: transparent;
                }

                .form-textarea {
                    display: inline-block;
                    vertical-align: top;
                    resize: none;
                }

                .form-select {
                    background: url("//v.fastcdn.co/a/img/builder2/select-arrow-drop-down.png") no-repeat right;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    color: transparent;
                }

                .form-label {
                    display: inline-block;
                    color: transparent;
                }

                .form-label-title {
                    display: block;
                    line-height: 1.1;
                    width: 100%;
                    padding: 0.75rem 0 0.5625rem;
                    margin: 0.5rem 0 0.125rem;
                }

                .form-multiple-label:empty {
                    display: block;
                    height: 0.8rem;
                    margin-top: .375rem;
                }

                .form-label-outside {
                    margin: 0.3125rem 0 0;
                }

                .form-multiple-input {
                    position: absolute;
                    opacity: 0;
                }

                .form-multiple-label {
                    position: relative;
                    padding-top: 0.75rem;
                    line-height: 1.1;
                    margin-left: 1.5625rem;
                }

                .form-multiple-label:before {
                    content: "";
                    display: inline-block;
                    box-sizing: inherit;
                    width: 1rem;
                    height: 1rem;
                    background-color: #fff;
                    border-radius: 0.25rem;
                    border: 1px solid #8195a8;
                    margin-right: 0.5rem;
                    vertical-align: -2px;
                    position: absolute;
                    left: -1.5625rem;
                    top: .85rem;
                }

                .form-checkbox-label:after {
                    content: "";
                    width: 0.25rem;
                    height: 0.5rem;
                    position: absolute;
                    top: 0.8rem;
                    left: -1.25rem;
                    transform: rotate(45deg);
                    border-right: 0.1875rem solid;
                    border-bottom: 0.1875rem solid;
                    color: #fff;
                }

                .form-radio-label:before {
                    border-radius: 50%;
                }

                .form-multiple-input:focus+.form-multiple-label:before {
                    border: 2px solid #308dfc;
                }

                .form-multiple-input:checked+.form-radio-label:before {
                    border: 0.3125rem solid #308dfc;
                }

                .form-multiple-input:checked+.form-checkbox-label:before {
                    background-color: #308dfc;
                    border: 0;
                }

                .form-btn {
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    background-color: transparent;
                    border: 0;
                    cursor: pointer;
                    min-height: 100%;
                }

                .form-input-inner-shadow {
                    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.28);
                }

                body#landing-page .user-invalid-label {
                    color: #e85f54;
                }

                body#landing-page .user-invalid {
                    border-color: #e85f54;
                }

                .form-messagebox {
                    transform: translate(0.4375rem, -0.4375rem);
                }

                .form-messagebox:before {
                    content: "";
                    position: absolute;
                    display: block;
                    width: 0.375rem;
                    height: 0.375rem;
                    transform: rotate(45deg);
                    background-color: #e85f54;
                    top: -0.1875rem;
                    left: 25%;
                }

                .form-messagebox-contents {
                    font-size: 0.875rem;
                    font-weight: 500;
                    color: #fff;
                    background-color: #e85f54;
                    padding: 0.4375rem 0.9375rem;
                    max-width: 250px;
                    word-wrap: break-word;
                    margin: auto;
                }

                .form-messagebox-top {
                    transform: translate(0, -1rem);
                }

                .form-messagebox-top:before {
                    bottom: -0.1875rem;
                    top: auto;
                }

                #element-94 .btn.btn-effect3d:active {
                    box-shadow: none;
                }

                #element-94 .btn:hover {
                    background: #131213;
                    color: #F8F8F8;
                }

                #element-94 .btn {
                    background: #000000;
                    color: #FFFFFF;
                    font-size: 1.2384rem;
                    font-family: Radikal;
                    font-weight: 700;
                    font-style: normal;
                    height: 3.25rem;
                    width: 20rem;
                    border-radius: 41px;
                }

                #element-94 .form-label {
                    color: #5E6C7B;
                }

                #element-94 ::placeholder {
                    color: #5E6C7B;
                }

                #element-94 .form-input {
                    color: #000000;
                    background-color: #FFFFFF;
                }

                #element-94 .form-select[aria-invalid="false"] {
                    color: #000000;
                }

                #element-94 .user-invalid {
                    border-color: #E12627;
                }

                #element-94 input::placeholder,
                #element-94 .form-label-inside {
                    color: #5E6C7B;
                }

                #element-94 select.valid {
                    color: #000000;
                }

                #element-94 .form-btn-geometry {
                    top: 24.1875rem;
                    left: 0.0625rem;
                    height: 3.25rem;
                    width: 20rem;
                    z-index: 14;
                }

                #element-4 {
                    top: 3.5625rem;
                    left: 0.8125rem;
                    height: 1.4375rem;
                    width: 22.5rem;
                    z-index: 16;
                    color: #000000;
                    font-size: 1.4241rem;
                    line-height: 1.4375rem;
                    text-align: center;
                }

                #element-4 .x_79fcb26a {
                    text-align: center;
                    line-height: 1.4375rem;
                    font-size: 1.4241rem;
                }

                #element-6 {
                    top: 5.625rem;
                    left: 0.8125rem;
                    height: 21.5625rem;
                    width: 22.5rem;
                    z-index: 17;
                    color: #000000;
                    font-size: 1.1765rem;
                    line-height: 1.425rem;
                    text-align: center;
                }

                #element-6 .x_a974b7a7 {
                    text-align: center;
                    line-height: 1.4375rem;
                    font-size: 1.1765rem;
                }

                #element-6 strong {
                    font-weight: 900;
                }

                #page-block-6qpbdzsq779 {
                    height: 18.8125rem;
                    max-width: 100%;
                }

                #page-block-6qpbdzsq779 .section-holder-border {
                    border: 0;
                }

                #page-block-6qpbdzsq779 .section-block {
                    background: rgb(0, 0, 0);
                    height: 18.8125rem;
                }

                #page-block-6qpbdzsq779 .section-holder-overlay {
                    display: none;
                }

                #element-38 {
                    top: 2.5rem;
                    left: 4.0625rem;
                    height: 3.4375rem;
                    width: 16.8125rem;
                    z-index: 8;
                }

                #element-40 {
                    top: 7.875rem;
                    left: 13.5625rem;
                    height: 1.8125rem;
                    width: 1.8125rem;
                    z-index: 10;
                }

                #element-41 {
                    top: 7.875rem;
                    left: 17.9375rem;
                    height: 1.8125rem;
                    width: 1.8125rem;
                    z-index: 11;
                }

                #element-39 {
                    top: 7.875rem;
                    left: 5.1875rem;
                    height: 1.75rem;
                    width: 1.75rem;
                    z-index: 9;
                }

                #element-42 {
                    top: 7.875rem;
                    left: 9.375rem;
                    height: 1.75rem;
                    width: 1.75rem;
                    z-index: 12;
                }

                #element-36 {
                    top: 11.625rem;
                    left: 1.25rem;
                    height: 2.75rem;
                    width: 22.5rem;
                    z-index: 6;
                    color: #37465A;
                    font-size: 0.9907rem;
                    line-height: 1.4rem;
                    text-align: center;
                }

                #element-36 .x_2c80ab57 {
                    text-align: center;
                    line-height: 1.375rem;
                    font-size: 0.9907rem;
                }

                #element-36 .x_f2074b6c {
                    color: #ffffff;
                }

                #element-36 strong {
                    font-weight: 700;
                }

                #element-37 {
                    top: 16.25rem;
                    left: 1.25rem;
                    height: 1.0625rem;
                    width: 22.5rem;
                    z-index: 7;
                    color: #37465A;
                    font-size: 0.743rem;
                    line-height: 1.05rem;
                    text-align: center;
                }

                #element-37 .x_25a5a462 {
                    text-align: center;
                    line-height: 1.0625rem;
                    font-size: 0.743rem;
                }

                #element-37 .x_f2074b6c {
                    color: #ffffff;
                }

                #element-37 strong {
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

                @media screen and (min-width:768px) and (max-width:7680px) {
                    .hidden-desktop {
                        display: none;
                    }
                }

                @media screen and (max-width:767px) {
                    .hidden-mobile {
                        display: none;
                    }

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

                    #page-block-fi9y6rii8ts {
                        height: 5.6875rem;
                        max-width: 100%;
                    }

                    #page-block-fi9y6rii8ts .section-holder-border {
                        border: 0;
                    }

                    #page-block-fi9y6rii8ts .section-block {
                        background: rgb(0, 0, 0);
                        height: 5.6875rem;
                    }

                    #page-block-fi9y6rii8ts .section-holder-overlay {
                        display: none;
                    }

                    #element-1 {
                        top: 1.6875rem;
                        left: 24rem;
                        height: 2.4375rem;
                        width: 11.9375rem;
                        z-index: 3;
                    }

                    #page_block_header {
                        height: 29.9375rem;
                        max-width: 100%;
                    }

                    #page_block_header .section-holder-border {
                        border: 0;
                    }

                    #page_block_header .section-block {
                        background: rgb(0, 0, 0);
                        height: 29.9375rem;
                    }

                    #page_block_header .section-holder-overlay {
                        display: none;
                    }

                    #element-79 {
                        top: -0.5rem;
                        left: 31.625rem;
                        height: 30.4375rem;
                        width: 40.375rem;
                        z-index: 4;
                    }

                    #element-2 {
                        top: 6.375rem;
                        left: 0;
                        height: 16.5625rem;
                        width: 30.25rem;
                        z-index: 5;
                        color: #FFFFFF;
                        font-size: 2.7245rem;
                        line-height: 3.3rem;
                        text-align: left;
                    }

                    #element-2 .x_df3a45fa {
                        text-align: left;
                        line-height: 3.3125rem;
                        font-size: 2.7245rem;
                    }

                    #page_block_below_fold {
                        height: 39.8125rem;
                        max-width: 100%;
                    }

                    #page_block_below_fold .section-holder-border {
                        border: 0;
                    }

                    #page_block_below_fold .section-block {
                        background: rgb(255, 255, 255);
                        height: 39.8125rem;
                    }

                    #page_block_below_fold .section-holder-overlay {
                        display: none;
                    }

                    #element-97 {
                        top: 6rem;
                        left: 33.4375rem;
                        height: 28.125rem;
                        width: 26.5rem;
                        z-index: 13;
                    }

                    #element-97 .shape {
                        border: 0;
                        border-radius: 0.3125rem 0.3125rem 0.3125rem 0.3125rem;
                        background: rgb(242, 242, 242);
                    }

                    #element-96 {
                        top: 7.375rem;
                        left: 34.875rem;
                        height: 2.25rem;
                        width: 23.5rem;
                        z-index: 15;
                        color: #000000;
                        font-size: 1.8576rem;
                        line-height: 2.25rem;
                        text-align: center;
                    }

                    #element-96 .x_efe90565 {
                        text-align: center;
                        line-height: 2.25rem;
                        font-size: 1.8576rem;
                    }

                    #element-94 {
                        top: 10.375rem;
                        left: 34.875rem;
                        height: 18.4375rem;
                        width: 23.375rem;
                        z-index: 14;
                    }

                    .notification-text {
                        font-size: 3.125rem;
                    }

                    .form {
                        font-size: 0.8125rem;
                    }

                    .form-input {
                        font-size: 0.9375rem;
                        height: 2.6875rem;
                    }

                    .form-textarea {
                        height: 6.25rem;
                    }

                    .form-label-title {
                        margin: 0.3125rem 0 0.5rem;
                        font-size: 0.89375rem;
                        padding: 0;
                        line-height: 1.1875rem;
                    }

                    .form-multiple-label {
                        margin-bottom: 0.625rem;
                        font-size: 0.9375rem;
                        line-height: 1.1875rem;
                        padding: 0;
                    }

                    .form-multiple-label:empty {
                        display: inline;
                    }

                    .form-checkbox-label:after {
                        top: 0.1rem;
                    }

                    .form-label-outside {
                        margin-bottom: 0;
                    }

                    .form-multiple-label:before {
                        transition: background-color 0.1s, border 0.1s;
                        top: initial;
                    }

                    .form-radio-label:hover:before {
                        border: 0.3125rem solid #9bc7fd;
                    }

                    .form-messagebox {
                        transform: translate(0);
                        display: flex;
                    }

                    .form-messagebox-left {
                        transform: translateX(-100%);
                        left: -0.625rem;
                    }

                    .form-messagebox-right {
                        transform: translateX(100%);
                        right: -0.625rem;
                    }

                    .form-messagebox:before {
                        top: calc(50% - 0.1875rem);
                        left: auto;
                    }

                    .form-messagebox-left:before {
                        right: -0.1875rem;
                    }

                    .form-messagebox-right:before {
                        left: -0.1875rem;
                    }

                    #element-94 .btn.btn-effect3d:active {
                        box-shadow: none;
                    }

                    #element-94 .btn:hover {
                        background: #131213;
                        color: #F8F8F8;
                    }

                    #element-94 .btn {
                        background: #000000;
                        color: #FFFFFF;
                        font-size: 1.2384rem;
                        font-family: Radikal;
                        font-weight: 700;
                        font-style: normal;
                        height: 3.25rem;
                        width: 23.5rem;
                        border-radius: 41px;
                    }

                    #element-94 .form-label {
                        color: #5E6C7B;
                    }

                    #element-94 ::placeholder {
                        color: #5E6C7B;
                    }

                    #element-94 .form-input {
                        color: #000000;
                        background-color: #FFFFFF;
                    }

                    #element-94 .form-select[aria-invalid="false"] {
                        color: #000000;
                    }

                    #element-94 .user-invalid {
                        border-color: #E12627;
                    }

                    #element-94 input::placeholder,
                    #element-94 .form-label-inside {
                        color: #5E6C7B;
                    }

                    #element-94 select.valid {
                        color: #000000;
                    }

                    #element-94 .form-btn-geometry {
                        top: 19.1875rem;
                        left: 0.125rem;
                        height: 3.25rem;
                        width: 23.5rem;
                        z-index: 14;
                    }

                    #element-4 {
                        top: 7.5rem;
                        left: 0;
                        height: 2.875rem;
                        width: 29.4375rem;
                        z-index: 16;
                        color: #000000;
                        font-size: 2.3529rem;
                        line-height: 2.85rem;
                        text-align: left;
                    }

                    #element-4 .x_7d3ad679 {
                        text-align: left;
                        line-height: 2.875rem;
                        font-size: 2.3529rem;
                    }

                    #element-6 {
                        top: 11.625rem;
                        left: 0;
                        height: 21rem;
                        width: 29.4375rem;
                        z-index: 17;
                        color: #000000;
                        font-size: 1.2384rem;
                        line-height: 1.75rem;
                        text-align: left;
                    }

                    #element-6 .x_8b236db7 {
                        text-align: left;
                        line-height: 1.75rem;
                        font-size: 1.2384rem;
                    }

                    #element-6 strong {
                        font-weight: 900;
                    }

                    #page-block-6qpbdzsq779 {
                        height: 15.6875rem;
                        max-width: 100%;
                    }

                    #page-block-6qpbdzsq779 .section-holder-border {
                        border: 0;
                    }

                    #page-block-6qpbdzsq779 .section-block {
                        background: rgb(0, 0, 0);
                        height: 15.6875rem;
                    }

                    #page-block-6qpbdzsq779 .section-holder-overlay {
                        display: none;
                    }

                    #element-38 {
                        top: 1.6875rem;
                        left: 21.375rem;
                        height: 3.4375rem;
                        width: 16.8125rem;
                        z-index: 8;
                    }

                    #element-40 {
                        top: 6.8125rem;
                        left: 30.875rem;
                        height: 1.8125rem;
                        width: 1.8125rem;
                        z-index: 10;
                    }

                    #element-41 {
                        top: 6.8125rem;
                        left: 35.0625rem;
                        height: 1.8125rem;
                        width: 1.8125rem;
                        z-index: 11;
                    }

                    #element-39 {
                        top: 6.875rem;
                        left: 22.75rem;
                        height: 1.75rem;
                        width: 1.75rem;
                        z-index: 9;
                    }

                    #element-42 {
                        top: 6.875rem;
                        left: 26.8125rem;
                        height: 1.75rem;
                        width: 1.75rem;
                        z-index: 12;
                    }

                    #element-36 {
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

                    #element-36 .x_dc68832a {
                        text-align: center;
                        line-height: 1.625rem;
                        font-size: 0.9907rem;
                    }

                    #element-36 .x_f2074b6c {
                        color: #ffffff;
                    }

                    #element-36 strong {
                        font-weight: 700;
                    }

                    #element-37 {
                        top: 12.4375rem;
                        left: -6.25rem;
                        height: 1.1875rem;
                        width: 72.5625rem;
                        z-index: 7;
                        color: #37465A;
                        font-size: 0.743rem;
                        line-height: 1.2rem;
                        text-align: center;
                    }

                    #element-37 .x_01475da3 {
                        text-align: center;
                        line-height: 1.1875rem;
                        font-size: 0.743rem;
                    }

                    #element-37 .x_f2074b6c {
                        color: #ffffff;
                    }

                    #element-37 strong {
                        font-weight: 700;
                    }
                }
        </style>

        <script>
            window.__variantsData = [{
                name: 'A',
                chance: 100
            }];

            window.__page_id = 23868595;
            window.__customer_id = 2211801;
            window.__default_experience_id = 23868595;
            window.__version = 13;
            window.__variant = "A";
            window.__variant_id = 1;
            window.__variant_custom_name = "Variation A";
            window.__preview = false;
            window.__page_type = 2;
            window.__variant_hash = "294400cb829f94dab50b00e7d5c2321fc67c43b7";
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

        <script id="ip-analytics" type="application/json">{"trackingData":{"ownerId":1911941,"customerId":2211801,"pageId":23868595,"publishedVersion":13,"variationName":"A","variationId":1,"linkedVariationId":2,"variation":"A","trackedLinks":[{"href":"https://www.truecar.com/plus/","ariaLabel":"","id":"z3belmj1w3","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/plus/","ariaLabel":"","id":"2vw7w9dps4o","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.youtube.com/truecar","ariaLabel":"","id":"vgo35h5hg5b","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://twitter.com/CarsAI","ariaLabel":"","id":"dl5derl2fka","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.facebook.com/CarsAI/","ariaLabel":"","id":"puvw90vyaq9","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.instagram.com/truecar/","ariaLabel":"","id":"uxpwu1oezu","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/terms/","ariaLabel":"","id":"m4v793qk08e","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/privacy/","ariaLabel":"","id":"68z4d9vv3u3","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/privacy-rights/","ariaLabel":"","id":"4bvre7soebp","type":"url","track":true,"targetNewWindow":true,"passParameters":false}],"allLinks":[{"href":"https://www.truecar.com/plus/","ariaLabel":"","id":"z3belmj1w3","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/plus/","ariaLabel":"","id":"2vw7w9dps4o","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.youtube.com/truecar","ariaLabel":"","id":"vgo35h5hg5b","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://twitter.com/CarsAI","ariaLabel":"","id":"dl5derl2fka","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.facebook.com/CarsAI/","ariaLabel":"","id":"puvw90vyaq9","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.instagram.com/truecar/","ariaLabel":"","id":"uxpwu1oezu","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/terms/","ariaLabel":"","id":"m4v793qk08e","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/privacy/","ariaLabel":"","id":"68z4d9vv3u3","type":"url","track":true,"targetNewWindow":true,"passParameters":false},{"href":"https://www.truecar.com/privacy-rights/","ariaLabel":"","id":"4bvre7soebp","type":"url","track":true,"targetNewWindow":true,"passParameters":false}],"user_id":1911941},"conversionSettings":{"forms":true,"links":true,"external":false}}</script>

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

        <!-- F_INSTAPAGE[dynamic_text_replacement;page_generator] -->

        <!-- Workspace Level Script Head -->

        <!-- end Workspace Level Script Head -->

        <!-- custom HEAD code-->


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

    <main style="margin-top: 110px">

        <section class="section section-relative " id="page_block_header" data-at="section">

            <div class="section-holder-border item-block item-absolute" data-at="section-border"></div>
            <div class="section-holder-overlay item-block item-absolute" data-at="section-overlay"></div>
            <div class="section-block">
                <div class="section-inner section-fit section-relative">
                    <div class="widget item-absolute  " id="element-79">
                        <div class="contents cropped item-block" data-at="image-cropp">
                            <img class="item-content-box item-block image " data-at="image" alt=""
                                src="//v.fastcdn.co/t/ecac9fc3/651111a3/1707610203-64558438-646x487-OEM-Header4.png"
                                srcset="//v.fastcdn.co/t/ecac9fc3/651111a3/1707610203-64558438-646x487-OEM-Header4.png 2x">
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-2" data-at="headline">
                        <div class="contents">
                            <h1>
                                <span class="x_df3a45fa x_fac9ed88">End-to-end solutions for our OEM partners to reach
                                    consumers across the entire car shopping journey</span>
                            </h1>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section section-relative " id="page_block_below_fold" data-at="section">

            <div class="section-holder-border item-block item-absolute" data-at="section-border"></div>
            <div class="section-holder-overlay item-block item-absolute" data-at="section-overlay"></div>
            <div class="section-block">
                <div class="section-inner section-fit section-relative">
                    <div class="widget item-absolute " id="element-97">
                        <div class="contents shape  box figure " data-at="shape"></div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-96" data-at="headline">
                        <div class="contents">
                            <h1>
                                <span class="x_efe90565 x_e86fa07f">Lets connect</span>
                            </h1>
                        </div>
                    </div>

                    <div class="widget item-absolute  " id="element-94">
                        <form novalidate="" class="form email-form contents form-labels-inside" method="post"
                            data-id="element-94" data-at="form" action-xhr="">

                            <input id="field-eac4451661ab3f9f2e5c7c79a6774cd3-0"
                                class="form-input form-input-text required  " type="email" name="Email"
                                data-describedby="form-validation-error-box-element-94" value="" title="Email"
                                data-label-inside="Email" data-at="form-email" placeholder="Email" required=""
                                aria-required="true">

                            <input id="field-eac4451661ab3f9f2e5c7c79a6774cd3-1"
                                class="form-input form-input-text required  " data-at="form-text" type="text"
                                name="Name" data-describedby="form-validation-error-box-element-94" value=""
                                title="Name" placeholder="Name" data-label-inside="Name" required=""
                                aria-required="true">

                            <input id="field-eac4451661ab3f9f2e5c7c79a6774cd3-2"
                                class="form-input form-input-text required  " data-at="form-text" type="text"
                                name="Company Name" data-describedby="form-validation-error-box-element-94"
                                value="" title="Company Name" placeholder="Company Name"
                                data-label-inside="Company Name" required="" aria-required="true">

                            <div class="form-block-select">
                                <select autocomplete="off" id="field-eac4451661ab3f9f2e5c7c79a6774cd3-3"
                                    class="form-input form-select required form-label-inside  " data-at="form-select"
                                    name="Area of Expertise" data-describedby="form-validation-error-box-element-94"
                                    title="Area of Expertise" required="" aria-required="true">
                                    <option class="hidden" value="" disabled="" selected="">Area of
                                        Expertise</option>
                                    <option class="form-select-option" value="Fleet" data-at="form-select-option">Fleet
                                    </option>
                                    <option class="form-select-option" value="Finance" data-at="form-select-option">
                                        Finance</option>
                                    <option class="form-select-option" value="Marketing" data-at="form-select-option">
                                        Marketing</option>
                                    <option class="form-select-option" value="Incentives" data-at="form-select-option">
                                        Incentives</option>
                                    <option class="form-select-option" value="Sales" data-at="form-select-option">Sales
                                    </option>
                                    <option class="form-select-option" value="Other" data-at="form-select-option">Other
                                    </option>
                                </select>
                            </div>

                            <input id="field-eac4451661ab3f9f2e5c7c79a6774cd3-4" class="form-input form-input-text   "
                                data-at="form-text" type="text" name="Phone Number (Optional)"
                                data-describedby="form-validation-error-box-element-94" value=""
                                title="Phone Number (Optional)" placeholder="Phone Number (Optional)"
                                data-label-inside="Phone Number (Optional)" aria-required="false">

                            <input type="hidden" name="lpsSubmissionConfig"
                                value="eyJhbGciOiJIUzI1NiJ9.eyJhc3luYyI6dHJ1ZSwiZmllbGRzIjpbeyJ0eXBlIjoidGV4dCIsImRlZmF1bHRfdmFsdWUiOiJFbWFpbCIsIm5hbWUiOiJFbWFpbCIsInZhbHVlIjoiRW1haWwiLCJoYXNfZW1haWxfdmFsaWRhdGlvbiI6dHJ1ZSwicmVxdWlyZWQiOnRydWUsImZpZWxkX2lkIjowLCJpZCI6IjAxSEFTUTdHUzRTTlNHVjdaQUc4UzVIN1FRIiwiaGlkZV9sYWJlbCI6ZmFsc2UsImN1c3RvbVZhbGlkYXRpb24iOm51bGx9LHsidHlwZSI6InRleHQiLCJkZWZhdWx0X3ZhbHVlIjoiTmFtZSIsIm5hbWUiOiJOYW1lIiwidmFsdWUiOiJOYW1lIiwicmVxdWlyZWQiOnRydWUsImZpZWxkX2lkIjoxLCJpZCI6IjAxSEFTUTdHUzRTTlNHVjdaQUc4UzVIN1FQIiwiaGlkZV9sYWJlbCI6ZmFsc2UsImhhc19lbWFpbF92YWxpZGF0aW9uIjpmYWxzZSwiY3VzdG9tVmFsaWRhdGlvbiI6bnVsbH0seyJpZCI6IjAxSEFUMFlXMUpDQ00yWFpEOTMwN0RSQTZTIiwidmFsdWUiOiJDb21wYW55IE5hbWUiLCJkZWZhdWx0X3ZhbHVlIjoiQ29tcGFueSBOYW1lIiwidHlwZSI6InRleHQiLCJyZXF1aXJlZCI6dHJ1ZSwiZmllbGRfaWQiOjIsIm5hbWUiOiJDb21wYW55IE5hbWUiLCJoYXNfZW1haWxfdmFsaWRhdGlvbiI6ZmFsc2UsImN1c3RvbVZhbGlkYXRpb24iOm51bGwsImhpZGVfbGFiZWwiOmZhbHNlfSx7Im5hbWUiOiJBcmVhIG9mIEV4cGVydGlzZSIsImRlZmF1bHRfdmFsdWUiOiJEZXNjcmlwdGlvbiBHb2VzIEhlcmUiLCJ0eXBlIjoic2VsZWN0IiwicmVxdWlyZWQiOnRydWUsImhpZGVfbGFiZWwiOmZhbHNlLCJmaWVsZF9pZCI6MywiZWxlbWVudHMiOlt7Im5hbWUiOiJGbGVldCJ9LHsibmFtZSI6IkZpbmFuY2UifSx7Im5hbWUiOiJNYXJrZXRpbmcifSx7Im5hbWUiOiJJbmNlbnRpdmVzIn0seyJuYW1lIjoiU2FsZXMifSx7Im5hbWUiOiJPdGhlciJ9XSwidmFsdWUiOiJBcmVhIG9mIEV4cGVydGlzZSIsImlkIjoiMDFIQVo4ODRCMUVGSlJRQzhIR1EwUjBBVFgifSx7ImlkIjoiMDFIQVQxMFEwWVpZR0RZNkJKQ1NDMFpHWVMiLCJ2YWx1ZSI6IlBob25lIE51bWJlciAoT3B0aW9uYWwpIiwiZGVmYXVsdF92YWx1ZSI6IlBob25lIE51bWJlciAoT3B0aW9uYWwpIiwidHlwZSI6InRleHQiLCJyZXF1aXJlZCI6ZmFsc2UsImZpZWxkX2lkIjo0LCJuYW1lIjoiUGhvbmUgTnVtYmVyIChPcHRpb25hbCkiLCJoYXNfZW1haWxfdmFsaWRhdGlvbiI6ZmFsc2UsImN1c3RvbVZhbGlkYXRpb24iOm51bGwsImhpZGVfbGFiZWwiOmZhbHNlfV0sImZvcm1JZCI6OTQsImludGVncmF0aW9ucyI6W3sic2NyYXBQYXNzd29yZCI6dHJ1ZSwic3BlY2lhbCI6dHJ1ZSwiYXN5bmMiOnRydWUsImludGVncmF0aW9uIjoibHBzTGVhZE5vdGlmaWNhdGlvbiJ9XSwicGFnZSI6eyJpZCI6MjM4Njg1OTUsInZlcnNpb24iOjEzLCJvd25lciI6MTkxMTk0MSwiY3VzdG9tZXIiOjIyMTE4MDEsImZvbGRlciI6MTYxNzk2Nn0sInNhdmVTdWJtaXNzaW9uIjp0cnVlLCJ2YXJpYXRpb24iOnsiaWQiOjEsImxpbmtlZFZhcmlhdGlvbklkIjoyLCJuYW1lIjoiQSIsImN1c3RvbU5hbWUiOiJBIn0sInJlQ2FwdGNoYSI6ZmFsc2V9.vsabJ0le68QDb1LWvx7-yhzBEWGzsguPjJr4X5C994c"
                                data-at="form-hidden-input">

                            <input type="hidden" name="thank-you-message" value="VGhhbmsgWW91IQ=="
                                data-at="form-hidden-input">

                            <input type="hidden" name="thank-you-message-timeout" value="3000"
                                data-at="form-hidden-input">


                            <div class="item-absolute form-btn-geometry">
                                <button class="btn form-btn item-block  " data-at="form-button">
                                    Submit
                                </button>
                            </div>

                        </form>

                        <div id="form-validation-error-box-element-94" class="item-cover item-absolute form-messagebox"
                            data-at="form-validation-box" style="display:none;">
                            <div class="form-messagebox-contents" data-at="form-validation-box-message"></div>
                        </div>
                    </div>

                    <div class="widget item-absolute headline  " id="element-4" data-at="headline">
                        <div class="contents">
                            <h1>
                                <span class="x_7d3ad679 x_79fcb26a">Why CarsAI?</span>
                            </h1>
                        </div>
                    </div>

                    <div class="widget item-absolute paragraph  " id="element-6" data-at="paragraph">
                        <div class="contents">
                            <p class="x_8b236db7 x_a974b7a7">CarsAI streamlines the car shopping experience, offering
                                services that reach and motivate customers at pivotal points of the buying process. By
                                customizing comprehensive targeted marketing campaigns and working with hundreds of Affinity
                                Partners, we’re able to offer the vehicle and marketing platforms that place your brand in
                                front of motivated buyers.</p><br>
                            <p class="x_8b236db7 x_a974b7a7">Whether your goal is increasing brand awareness or reaching
                                undecided shoppers, CarsAI can help bridge the gap.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    @push('scripts')
        <div id="submit-popup" class="lightbox submit-lb item-cover" tabindex="0" role="button" style="display:none;">
            <div class="lightbox-dim">
                <div class="notification-text">Thank You!</div>
            </div>
        </div>





        <!-- Workspace Level Script Footer -->

        <!-- end Workspace Level Script Footer -->

        <!-- custom FOOTER code-->


        <!-- end custom FOOTER code-->


        <script src="//g.fastcdn.co/js/Cradle.8725edce5135a9515d48.js"></script>
        <script async="" defer="" src="//g.fastcdn.co/js/LazyImage.a698675f6fd38cb87757.js"></script>
        <script src="//g.fastcdn.co/js/Links.7722c547d653e74ec16f.js"></script>
        <script src="//g.fastcdn.co/js/Form.49c98a7fbd3b0935225e.js"></script>
        <script async="" src="https://heatmap-events-collector.instapage.com/static/lib.js"></script>

        <!-- Generated at: 2024-07-30T08:03:41.412Z -->
        <!--

          -->
        <script>
            (function() {
                function c() {
                    var b = a.contentDocument || a.contentWindow.document;
                    if (b) {
                        var d = b.createElement('script');
                        d.innerHTML =
                            "window.__CF$cv$params={r:'8b75f9b2eac3ef67',t:'MTcyNDM2MjM0NS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
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
