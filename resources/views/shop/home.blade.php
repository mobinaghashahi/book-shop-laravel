@extends('shop.layouts.app')

@section('content')
<!-- Banner Section Begin -->
<section class="banner set-bg" data-setbg="{{asset('/templates/shop/img/banner/banner-1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="banner__slider owl-carousel">
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>جورج اورول</span>
                            <h1>قلعه حیوانات</h1>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>هانریش بل</span>
                            <h1>عقاید یک دلقک</h1>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>آلبرکامو</span>
                            <h1>طاعون</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>محصولات جدید</h4>
                </div>
            </div>
        </div>
        <div class="row property__gallery">
            @foreach($newBooks as $key=>$book)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    @include('shop.products.item')
                </div>
            @endforeach
            <div class="col-lg-12 text-center">
                <a href="{{URL::to('/product/list')}}" class="site-btn">بیشتر</a>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>ارسال رایگان</h6>
                    <p>برای تمام سفارش ها</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>برگشت پول</h6>
                    <p>اگر مشکل دارید</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>پشتیبانی 24 ساعت</h6>
                    <p>پشتیبانی اختصاصی</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>پرداخت امن</h6>
                    <p>100% پرداخت امن</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

@endsection
