@extends('shop.layouts.app')

@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <span>تماس با ما</span>
                        <a href="/home"><i class="fa fa-home"></i> خانه</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        <div class="contact__address">
                            <h5>اطلاعات تماس</h5>
                            <ul>
                                <li>
                                    <h6><i class="fa fa-map-marker"></i> آدرس</h6>
                                    <p>اصفهان- اردستان</p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-phone"></i> شماره تلفن</h6>
                                    <p><span>125-711-811</span><span>125-668-886</span></p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-headphones"></i> پشتیبانی</h6>
                                    <p>Support.photography@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__form">
                            <h5>ارسال پیام</h5>
                            <form action="#">
                                <input type="text" placeholder="نام">
                                <input type="text" placeholder="ایمیل">
                                <input type="text" placeholder="وبسات">
                                <textarea placeholder="متن پیام"></textarea>
                                <button type="submit" class="site-btn">ارسال</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"
                                    src="https://maps.google.com/maps?width=400&amp;height=400&amp;hl=en&amp;q=ardestan&amp;t=k&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                            <a href="https://formatjson.org/">format json</a></div>
                        <style>.mapouter {
                                position: relative;
                                text-align: right;
                                width: 100%;
                                height: 400px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                width: 100%;
                                height: 400px;
                            }

                            .gmap_iframe {
                                height: 400px !important;
                            }</style>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
