@extends('client.layouts.master')
@section('content')
    <!-- Slideshow  -->
    <div class="main-slider" id="home">
        <div class="jtv-slideshow">
            <div id="jtv-slideshow">
                <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                    <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                        <ul>
                            <li data-transition='slideup' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="{{ asset(config('image.slide-1')) }}" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                <div class="caption-inner left">
                                    <div class='tp-caption LargeTitle sft  tp-resizeme header-slider' data-x='50'  data-y='200'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'>@lang('shop.slide2')</div>
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme header-slider' data-x='50'  data-y='250'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'>@lang('shop.cat1')</div>
                                    <div class='tp-caption' data-x='72'  data-y='320'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'>@lang('shop.slide1')</div>
                                </div>
                            </li>
                            <li data-transition='slideup' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="{{ asset(config('image.slide-2')) }}" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                <div class="caption-inner">
                                    <div class='tp-caption LargeTitle sft  tp-resizeme header-slider' data-x='360'  data-y='170'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'>@lang('shop.slide1')</div>
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme header-slider' data-x='290'  data-y='240'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'>@lang('shop.cat3')</div>
                                    <div class='tp-caption' data-x='415'  data-y='315'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'>@lang('shop.slide2')</div>
                                </div>
                            </li>
                            <li data-transition='slideup' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="{{ asset(config('image.slide-3')) }}" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                <div class="caption-inner right">
                                    <div class='tp-caption LargeTitle sft  tp-resizeme header-slider' data-x='450'  data-y='170'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'>@lang('shop.slide2')</div>
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme header-slider' data-x='450'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'>@lang('shop.cat2')</div>
                                    <div class='tp-caption' data-x='475'  data-y='340'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'>@lang('shop.slide1')</div>
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
