@extends('shop.layouts.app')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <span>ثبت نام</span>
                    <a href="{{URL::TO('/')}}">خانه<i class="fa fa-home"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Register Section Begin -->
<section class="checkout spad">
    <div class="container">
        <form method="post" action="{{URL::TO('/user/register')}}" class="checkout__form" >
            {{ csrf_field() }}
            <h5 class="text-center">ثبت نام</h5>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    @if (Session::has('error'))
                        <div class="alert alert-warning" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="checkout__form__input">
                        <p>نام و نام خانوادگی<span></span></p>
                        <input type="text" name="name" required>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3"></div>

                <div class="col-lg-3 col-md-3 col-sm-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="checkout__form__input">
                        <p>ایمیل <span>*</span></p>
                        <input type="email" name="email" required>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3"></div>

                <div class="col-lg-3 col-md-3 col-sm-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="checkout__form__input">
                        <p>رمز عبور <span>*</span></p>
                        <input type="password" name="password" minlength="6" required>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3"></div>

                <div class="col-lg-3 col-md-3 col-sm-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="checkout__form__input">
                        <p>تایید رمز عبور <span>*</span></p>
                        <input type="password" name="password_confirmation" minlength="6" required>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3"></div>

                <div class="col-lg-3 col-md-3 col-sm-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="text-center">
                        <div class="p-2">
                            <button type="submit" class="site-btn">ثبت نام</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3"></div>
            </div>
        </form>
    </div>
</section>
<!-- Register Section End -->
@endsection
