<!-- Footer -->
<footer>
    <div class="footer-top">
        <div class="text-center">
            <a href="{{ route('home.index') }}"><img class="img-responsive" src="{{ asset(config('image.footer-logo')) }}"></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-9">
                    <p><i class="fa fa-map-marker"></i>@lang('shop.address')</p>
                    <p><i class="fa fa-phone"></i><span>@lang('84-24-3795-5417')</span></p>
                    <p>
                        <i class="fa fa-envelope"></i>
                        <span><a href="@lang('support@gmail.com')">@lang('support@gmail.com')</a></span>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="footer-links">
                        <div class="social">
                            <ul class="inline-mode">
                                <p>@lang('shop.follow')</p>
                                <li class="social-network fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-network tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-network instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-6 col-xs-12 coppyright">
                    @lang('Copyright © 2019')
                    <a href="#">@lang('shop.title')</a>
                    @lang('. All Rights Reserved. ')
                </div>
                <div class="col-sm-5 col-md-6 col-xs-12 payment-accept">
                    <ul>
                        <li><a href="#"><img class="img-responsive" src="{{ asset(config('image.pay-1')) }}" alt="@lang('shop.card')"></a></li>
                        <li><a href="#"><img class="img-responsive" src="{{ asset(config('image.pay-2')) }}" alt="@lang('shop.card')"></a></li>
                        <li><a href="#"><img class="img-responsive" src="{{ asset(config('image.pay-3')) }}" alt="@lang('shop.card')"></a></li>
                        <li><a href="#"><img class="img-responsive" src="{{ asset(config('image.pay-4')) }}" alt="@lang('shop.card')"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
