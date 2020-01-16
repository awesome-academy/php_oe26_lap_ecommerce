<div class="crosssel">
    <div class="jtv-title">
        <h2>@lang('product.recent')</h2>
    </div>
    <div class="category-products">
        <ul class="products-grid">
            @foreach ($recents as $product)
                <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info">
                                <a class="product-image image-list img-fluid" href="{{ route('home.products.detail', ['id' => $product->id]) }}">
                                    <img  src="{{ asset(config('image.link') . $product->images->first()->image) }}">
                                </a>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-content">
                                    <div class="rating">
                                        @for ($i = 1 ; $i < 5; $i++ )
                                            @if ($i <= round($product->rates->avg('rating')))
                                                <i class="fa fa-star"></i>
                                            @else
                                                <i class="fa fa-star-o"></i>
                                            @endif
                                        @endfor
                                    </div>
                                    <div class="item-title"><a href="">{{ $product->name }}</a></div>
                                    <div class="item-price">
                                        <div class="price-box">
                                            <span class="regular-price price">{{ money_format('%.2n', $product->price) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
