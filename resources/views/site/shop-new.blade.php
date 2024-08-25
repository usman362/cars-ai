@extends('site.layouts.app')
@section('content')

                <main id="mainContent" class="mx-auto md:max-w-[var(--layout-max-width-md,none)] lg:max-w-[var(--layout-max-width-lg,none)] xl:max-w-[var(--layout-max-width-xl,none)] md:border-l-[line-width:var(--layout-border,0)] md:border-r-[line-width:var(--layout-border,0)] md:border-r-[#ccc] md:border-l-[#ccc]" style="margin-top:32px">
                    <div class="w-full bg-white" data-test="shopMakeModel">
                        <div class="container min-h-[calc(100vh_-_289px)]">
                            <div class="row pb-4 pt-3">
                                <div class="col-12 col-md-7 col-lg-6">
                                    <div class="h-full flex flex-col">
                                        <h1 class="heading-3 normal-case mx-auto text-center hidden-md-up max-w-[95%]">Browse new vehicles by brand or body&nbsp;type.</h1>
                                        <div class="hidden-sm-down pt-3 pb-0">
                                            <fieldset class="tab-bar" aria-invalid="false">
                                                <legend class="sr-only">Shop Type</legend><label class="form-radio-control border-b" data-test="shopMakeModelShopNewTab"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-17" value="new" checked="">
                                                    <div class="w-full tab"><span class="tab-text">Shop New</span><span class="tab-bottom-border"></span></div>
                                                </label><label class="form-radio-control border-b" data-test="shopMakeModelShopUsedTab"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-17" value="used">
                                                    <div class="w-full tab"><span class="tab-text">Shop Used</span><span class="tab-bottom-border"></span></div>
                                                </label>
                                            </fieldset>
                                        </div>
                                        <div class="py-2">
                                            <h1 class="heading-3 normal-case hidden-sm-down mx-2-5 pt-2 text-left">Browse new vehicles by brand or body&nbsp;type.</h1>
                                            <div class="flex w-full flex-row items-center justify-center py-2 md:justify-start md:text-center">
                                                <fieldset class="switch-bar switch-bar-block my-2 w-full max-w-[200px]" aria-invalid="false">
                                                    <legend class="sr-only">Filter Vehicles</legend><label class="form-radio-control switch w-full" data-test="shopMakeModelBrandSwitch"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-18" value="brand" checked="">
                                                        <div>Brand </div>
                                                    </label><label class="form-radio-control switch w-full" data-test="shopMakeModelBodySwitch"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-18" value="body">
                                                        <div>Type </div>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="hidden-md-up">
                                            <div class="row flex flex-row gap-3 pb-1 pt-2 pl-3 fixed bottom-0 left-0 right-0 z-50 mt-[78px] border-t bg-white shadow-[0px_0px_4px_0_rgba(0,0,0,0.25)]">
                                                <div class="relative"><svg viewBox="0 0 24 24" class="icon icon-fill-tertiary icon-border-circle overflow-visible absolute top-[-10px] right-[-10px] z-20 scale-50 bg-white" aria-hidden="true" style="width: 48px; height: 48px; padding: 10.8px;">
                                                        <use href="#favorite-fill"></use>
                                                    </svg>
                                                    <div class="picture-container" style="padding-bottom: 0px; width: 100px; height: 60px;"><img class="picture-inner" src="{{asset('assets/_next/static/images/honda-civic-1ddc2565efa002bfb0ea999803d21be0.png')}}?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=100" srcset="{{asset('assets/_next/static/images/honda-civic-1ddc2565efa002bfb0ea999803d21be0.png')}}?auto=format&amp;fill=solid&amp;fit=fill&amp;h=60&amp;w=100 1x, {{asset('assets/_next/static/images/honda-civic-1ddc2565efa002bfb0ea999803d21be0.png')}}?auto=format&amp;fill=solid&amp;fit=fill&amp;h=120&amp;w=200 2x" alt="vehicle"></div>
                                                </div>
                                                <div class="flex flex-col"><span class="font-bold">Not sure which car you want?</span><a href="/fit-quiz/steps/">Let us help</a></div>
                                            </div>
                                        </div>
                                        <fieldset class="block h-full columns-1 md:columns-3" aria-invalid="false" data-test="makeList">
                                            <legend class="sr-only">Make List</legend>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="acura"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="acura">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo_text/710x384_full_color/18bc580ce00c3c95/Acura.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Acura</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="alfa-romeo"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="alfa-romeo">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/74d84f9942a7d3e8/Alfa_Romeo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Alfa Romeo</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="audi"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="audi">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/1088x384_full_color/0598fce6d069a5a0/Audi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Audi</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="bmw"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="bmw">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/614861eca7caf1b4/BMW.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">BMW</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="buick"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="buick">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/385x384_full_color/4acbf7c7efa21a3b/Buick.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Buick</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="cadillac"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="cadillac">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo_text/938x384_full_color/26078ba5f8aba234/Cadillac.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Cadillac</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="chevrolet"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="chevrolet">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo_text/820x384_full_color/1dd21e0781f0e450/Chevrolet.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Chevrolet</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="chrysler"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="chrysler">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/3658x384_full_color/f8a2454c744fb2af/Chrysler.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Chrysler</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="dodge"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="dodge">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/2751x384_full_color/0d87acfca3ddd404/Dodge.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Dodge</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="fiat"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="fiat">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/034e8804a56116b8/FIAT.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">FIAT</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="ford"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="ford">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/991x384_full_color/588008e646f944ab/Ford.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Ford</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="genesis"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="genesis">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/1664x384_full_color/3669c24f879ba296/Genesis.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Genesis</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="gmc"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="gmc">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/1694x384_full_color/81e05d9044355a28/GMC.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">GMC</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="honda"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="honda">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/605x384_full_color/00fea4dbe4426fc2/Honda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Honda</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="hyundai"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="hyundai">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/d88259cdbac929b7/Hyundai.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Hyundai</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="infiniti"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="infiniti">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo_text/872x384_full_color/4f5ff52d5ce2599a/INFINITI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">INFINITI</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="jaguar"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="jaguar">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/958x384_full_color/4c50d6932ea260bb/Jaguar.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Jaguar</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="jeep"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="jeep">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/974x384_full_color/a8fcfe1e70a37d25/Jeep.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Jeep</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="kia"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="kia">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/1629x384_full_color/638bbde84c5f569e/Kia.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Kia</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="land-rover"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="land-rover">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/722x384_full_color/2e9c24a2f6e9d190/Land_Rover.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Land Rover</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="lexus"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="lexus">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/543x384_full_color/c8d23de545755e0d/Lexus.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Lexus</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="lincoln"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="lincoln">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/115x384_full_color/b31e23eab6fd3beb/Lincoln.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Lincoln</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="maserati"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="maserati">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/297x384_full_color/4fbfea8890fe1308/Maserati.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Maserati</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="mazda"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="mazda">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo_text/389x384_full_color/c320eb8ddc97ecf7/Mazda.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Mazda</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="mercedes-benz"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="mercedes-benz">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/959be7e00726a9e0/Mercedes-Benz.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Mercedes-Benz</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="mini"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="mini">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/874x384_full_color/519add2e55e837af/MINI.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">MINI</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="mitsubishi"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="mitsubishi">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo_text/308x384_full_color/760f0043618e2330/Mitsubishi.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Mitsubishi</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="nissan"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="nissan">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/450x384_full_color/688cbf406361c9c1/Nissan.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Nissan</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="ram"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="ram">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/344x384_full_color/3d7b5b777d15c593/Ram.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Ram</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="subaru"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="subaru">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/689x384_full_color/43b494c614cd8ca3/Subaru.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Subaru</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="toyota"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="toyota">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/cf0bb1b2deca5e84/Toyota.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Toyota</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="volkswagen"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="volkswagen">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo_text/384x384_full_color/2e91116c833bfded/Volkswagen.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Volkswagen</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                            <div data-test="shopMakeModelMakeList" data-test-item="New" class="w-full border-b px-2 py-3 md:mb-2 md:w-fit md:border-none md:px-0 md:py-0"><label class="form-radio-control w-full relative pb-1" data-test="shopMakeModelMakeListTab" data-test-item="volvo"><input class="form-radio-control-input custom-control-input" type="radio" name="radio-group-20" value="volvo">
                                                    <div>
                                                        <div class="flex flex-row">
                                                            <div class="picture-container hidden-md-up align-middle" style="padding-bottom: 0px; width: 24px; height: 24px;"><img class="picture-inner" src="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24" srcset="https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=24&amp;w=24 1x, https://static.tcimg.net/vehicles/logo/384x384_full_color/c39d70a40d578560/Volvo.png?auto=format&amp;fill=solid&amp;fit=fill&amp;h=48&amp;w=48 2x" role="presentation" alt=""></div>
                                                            <div class="block overflow-hidden text-ellipsis whitespace-nowrap pl-[18px] text-center md:pl-0 after:absolute after:left-0 after:bottom-0 after:z-10 after:h-1 after:w-full after:rounded-t after:border-b after:border-transparent after:bg-transparent after:content-['']">Volvo</div>
                                                        </div>
                                                    </div>
                                                </label></div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="md:mt-6 col-12 col-md-5 col-lg-6">
                                    <div class="hidden-sm-down mt-6 flex h-[90%] flex-col items-center justify-start border-l ">
                                        <div class="relative mb-[-30px] mt-5 scale-[60%] lg:mb-0 lg:scale-100">
                                            <style>
                                                @keyframes slide {
                                                    0% {
                                                        left: 100%;
                                                    }

                                                    30% {
                                                        left: 16px;
                                                    }

                                                    70% {
                                                        left: 16px;
                                                    }

                                                    100% {
                                                        left: -100%;
                                                    }
                                                }
                                            </style>
                                            <div class="relative flex flex-col items-center justify-center overflow-hidden h-[179px] w-[318px]"><img src="{{asset('assets/_next/static/images/ram-1500-494b4f01d3717376f7bf667a8dec7bc5.jpeg')}}" width="286.2" alt="" role="presentation" class="absolute animate-[slide_3s_ease-in_infinite] mix-blend-multiply"></div>
                                        </div>
                                        <h2 class="heading-3 normal-case heading-lg-2 lg:normal-case pb-4 text-center" data-test="shopMakeModelInfoPanelHeading">Not sure which car you&nbsp;want?</h2><a data-ignore-contrast="true" data-loading="false" class="btn btn-primary btn-md" href="/fit-quiz/steps/"><span class="btn-inner">Let us help</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
    @endsection
