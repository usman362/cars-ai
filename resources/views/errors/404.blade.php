@extends('site.layouts.app')
@section('content')
    <main id="mainContent" style="margin-top:60px"
        class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
        <div class="container container-max-width-1 flex min-h-[70vh] flex-col items-center justify-center py-6"
            data-test="errorPage">
            <div class="w-full max-w-[400px]">
                <div class="img-container img-container-block" data-test="noMatchAppTruck"
                    style="height: auto; padding-bottom: 35.4305%; width: 100%;"><img
                        src="{{ asset('assets/_next/static/images/error-truck-791b8597fb094a3a357de52049ec9d8a.png') }}"
                        alt="ErrorTruck" loading="auto" class="img-inner img-block" style="background-image: none;"></div>
            </div>
            <div class="heading-4 normal-case heading-md-3 md:normal-case mt-4 text-center">Sorry! We can't find that page.
                You might try going<!-- --> <a href="{{ url()->previous() }}" class="link-button font-bold"
                    data-test="noMatchAppLink">back</a> <!-- -->or <a href="{{ url('/') }}">home</a>.</div>
        </div>
    </main>
@endsection
