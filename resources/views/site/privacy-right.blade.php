@extends('site.layouts.app')
@section('content')

<main id="mainContent" class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]">
    <div class="my-4" data-test="ccpaOptOutPageContainer">
        <div class="m-auto max-w-[750px]" style="height: 1610px;">
            <h1 class="heading-base sr-only">TrueCar CCPA Rights&nbsp;Form</h1>
          <iframe class="h-full w-full border-none" src="{{url('privacy-right-data')}}" title="TrueCar CCPA Rights Form"></iframe>
        </div>
    </div>
</main>

@endsection
