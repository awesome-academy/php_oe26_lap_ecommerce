<!-- Header -->
<header class="jtv-header-v2">
    <div class="header-lines-decoration">
        <span class="bg-secondary-color"></span>
        <span class="bg-blue"></span>
        <span class="bg-blue-light"></span>
        <span class="bg-orange-light"></span>
        <span class="bg-red"></span>
        <span class="bg-green"></span>
        <span class="bg-secondary-color"></span>
    </div>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-4 col-xs-12">
                        <!-- Default Welcome Message -->
                        <div class="welcome-msg hidden-xs hidden-sm">
                            @lang('header.welcome')
                        </div>
                        <div class="jtv-lang-cur-wrapper">
                            <div class="jtv-inner-box">
                                <div class="block jtv-language-block">
                                    <div class="lg-cur">
                                        <span>
                                            <img src="{{ asset(config('image.vn')) }}" alt="@lang('header.vn')">
                                            <span class="lg-fr">@lang('header.vn')</span>
                                            <i class="fa fa-angle-down"></i>
                                        </span>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#"><img src="{{ asset(config('image.en')) }}" alt="@lang('header.en')">
                                                <span>@lang('header.en')</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset(config('image.vn')) }}" alt="@lang('header.vn')">
                                                <span>@lang('header.vn')</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- top links -->
                    <div class="toplinks col-md-7 col-sm-8 col-xs-12 hidden-xs">
                        <ul class="links">
                            <li>
                                <a title="@lang('header.sin')" href="#">
                                    <span class="hidden-xs">@lang('header.sin')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 jtv-logo-block">
                        <div class="logo">
                            <a href="{{ route('home.index') }}"><img src="{{ asset(config('image.logo')) }}"></a>
                        </div>
                        <!-- Navbar -->
                        <div class="nav-inner">
                            <ul id="nav" class="hidden-xs hidden-sm">
                                @foreach ($categories as $cate1)
                                <li class="level-a drop-menu"><a href="{{ route('home.categories.show', $cate1->id) }}"><span>{{ $cate1->name }}</span></a>
                                    @if ($cate1->sub->count())
                                    <ul class="level-b">
                                        @foreach ($cate1->sub as $cate2)
                                        <li class="level-b"><a href="{{ route('home.categories.show', $cate2->id) }}"><span>{{ $cate2->name }}</span></a>
                                            @if ($cate2->sub->count())
                                            <ul class="level-c right-sub">
                                                @foreach ($cate2->sub as $cate3)
                                                    <li class="level-c"><a href="{{ route('home.categories.show', $cate3->id) }}"><span>{{ $cate3->name }}</span></a></li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            <!-- top cart -->
                            <div class="top-cart">
                                <div class="top-cart-contain">
                                    <div class="mini-cart">
                                        <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                            <a href="#">
                                                <div class="shoppingcart-inner">
                                                    <span class="cart-title"><i class="fa fa-shopping-cart"></i></span>
                                                    <span class="cart_count"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="top-cart-content">
                                                <div class="block-subtitle hidden-xs">@lang('cartp.added')</div>
                                                <div class="top-subtotal">@lang('cartp.sub') : <span class="price"></span></div>
                                                <div class="actions">
                                                    <button class="btn-checkout" type="button"><span>@lang('checkout.view')</span></button>
                                                    <button class="view-cart" type="button"><span>@lang('cartp.view')</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jtv-search-block">
                                <div class="search">
                                    <input class="search_box" type="checkbox" id="search_box">
                                    <label class="fa fa-search" for="search_box"></label>
                                    <div class="search_form">
                                        <form action="#">
                                            <input type="text">
                                            <input type="submit" value="@lang('shop.search')">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end nav -->
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- end header -->
