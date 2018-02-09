@extends('layouts.base')

@section('content')

    <div class="container with-border" id="content">
        <div id="home-page-container">
            <div class="react" data-reactroot="">
                <div class="home-page">
                    <section class="pagetemplate-pagelet">
                        <div class="banner-container row">
                            <div class="banner-image col-xs-12">
                                <div class="banner-desktop-wrapper">
                                    <div class="ui-carousel desktop" id="top-banner-slide">
                                        <div class="ui-carousel-images">
                                            <div class="slides">
                                                <a class="slide-image" href="/valentines-day"><img alt="Valentine's Day Guide from 1-14 Feb" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/12948/hero-banner_dt_943282de.jpg"></a>

                                                <a class="slide-image" href="/fave"><img alt="Fave welcome Feb with 10% off sitewide 1 Feb only" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/12951/hero-banner_dt_e590c819.jpg"></a>

                                                <a class="slide-image" href="/cotton-on"><img alt="Cotton on paw-fect outfit this lunar new year from 1-13 Feb" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/12949/hero-banner_dt_9011e301.jpg"></a>

                                                <a class="slide-image" href="/lazada"><img alt="Lazada Apple Official Store 3% Cashback for iPhone X till 2 Feb" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/12806/hero-banner_dt_6cfebe0a.jpg"></a>

                                                <a class="slide-image" href="/referral/invite"><img alt="RAF refer 5 friends and get $88 from 1-28 feb" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/12950/hero-banner_dt_80bcfea7.jpg"></a>

                                                <a class="slide-image" href="/visa"><img alt="Visa Earn extra Cashback when you shop with Visa!" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/9495/hero-banner_dt_5d33ecbe.png"></a>
                                            </div>
                                        </div>
                                        <div class="ui-carousel-controls">
                                            <span class="direction-control right"><i class="fa fa-angle-left"></i></span>
                                            <span class="direction-control left"><i class="fa fa-angle-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-mobile-wrapper">
                                    <div class="ui-carousel mobile">
                                        <div class="ui-carousel-images">
                                            <div>
                                                <div class="placeholder">
                                                    <span class="slide-image"><img alt="placeholder" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/12767/hero-banner_mb_4be585c8.jpg"></span>
                                                </div>
                                                <div class="slide left active">
                                                    <a class="slide-image" href="/expedia"><img alt="Expedia Hotels 9% upsized cashback from 30-31 Jan" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/12767/hero-banner_mb_4be585c8.jpg"></a>
                                                </div>
                                                <div class="slide left next">
                                                    <a class="slide-image" href="/lazada"><img alt="Lazada Apple Official Store 3% Cashback for iPhone X till 2 Feb" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/12806/hero-banner_mb_21724851.jpg"></a>
                                                </div>
                                                <div class="slide left">
                                                    <a class="slide-image" href="/book-depository"><img alt="Book Depository up to 50% off bestsellers" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/12938/hero-banner_mb_09361dff.jpg"></a>
                                                </div>
                                                <div class="slide left">
                                                    <a class="slide-image" href="/payday-sale"><img alt="PayDay Sale: first payday sale of the year from 22-31 Jan" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/12762/hero-banner_mb_b6a9ebdf.jpg"></a>
                                                </div>
                                                <div class="slide left">
                                                    <a class="slide-image" href="/referral/invite"><img alt="RAF Refer 8 friends, get $88" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/12642/hero-banner_mb_3aad1332.jpg"></a>
                                                </div>
                                                <div class="slide left prev">
                                                    <a class="slide-image" href="/visa"><img alt="Visa Earn extra Cashback when you shop with Visa!" src="https://cloud.shopback.com/w_1336,f_auto,fl_lossy,q_auto,e_sharpen/sg-banner/9495/hero-banner_mb_9e783a48.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ui-carousel-controls">
                                            <span class="direction-control right"><i class="fa fa-angle-left"></i></span><span class="direction-control left"><i class="fa fa-angle-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-image hidden-lg hidden-md hidden-sm col-xs-12">
                                <div class="banner-mobile-wrapper">
                                    <a href="/signup"><img alt="How ShopBack Works" class="image-content" src="https://shopily.s3.amazonaws.com/uploads/banners/5865/home-right_mb_8fb9bb93.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="popular-store-container">
                            <div class="section">
                                <div class="top-section">
                                    <div class="header hidden-lg hidden-md">
                                        <h4><span>Stores</span></h4>
                                    </div>
                                    <div class="popularStoreCategoryTabs hidden-sm hidden-xs">
                                        <ul class="nav nav-tabs">
                                            <li class="popularStoreCategoryTab active" role="presentation">
                                                <div role="button">
                                                    <img class="sb-icon sb-icon-fire popularStoreCategoryTabIcon" src="https://cloud.shopback.com/raw/upload/static/images/icon/core/fire.svg"><span class="popularStoreCategoryTabName">Popular</span>
                                                </div>
                                            </li>
                                            <li class="popularStoreCategoryTab" role="presentation">
                                                <div role="button">
                                                    <img class="sb-icon sb-icon-burger popularStoreCategoryTabIcon" src="https://cloud.shopback.com/raw/upload/static/images/icon/core/burger.svg"><span class="popularStoreCategoryTabName">Dining</span>
                                                </div>
                                            </li>
                                            <li class="popularStoreCategoryTab" role="presentation">
                                                <div role="button">
                                                    <img class="sb-icon sb-icon-plane popularStoreCategoryTabIcon" src="https://cloud.shopback.com/raw/upload/static/images/icon/core/plane.svg"><span class="popularStoreCategoryTabName">Travel</span>
                                                </div>
                                            </li>
                                            <li class="popularStoreCategoryTab" role="presentation">
                                                <div role="button">
                                                    <img class="sb-icon sb-icon-laptop popularStoreCategoryTabIcon" src="https://cloud.shopback.com/raw/upload/static/images/icon/core/laptop.svg"><span class="popularStoreCategoryTabName">Electronics</span>
                                                </div>
                                            </li>
                                            <li class="popularStoreCategoryTab" role="presentation">
                                                <div role="button">
                                                    <img class="sb-icon sb-icon-tshirt popularStoreCategoryTabIcon" src="https://cloud.shopback.com/raw/upload/static/images/icon/core/tshirt.svg"><span class="popularStoreCategoryTabName">Fashion</span>
                                                </div>
                                            </li>
                                            <li class="popularStoreCategoryTab" role="presentation">
                                                <div role="button">
                                                    <img class="sb-icon sb-icon-lettuce popularStoreCategoryTabIcon" src="https://cloud.shopback.com/raw/upload/static/images/icon/core/lettuce.svg"><span class="popularStoreCategoryTabName">Groceries</span>
                                                </div>
                                            </li>
                                            <li class="popularStoreCategoryTab" role="presentation">
                                                <div role="button">
                                                    <img class="sb-icon sb-icon-lipstick popularStoreCategoryTabIcon" src="https://cloud.shopback.com/raw/upload/static/images/icon/core/lipstick.svg"><span class="popularStoreCategoryTabName">Health &amp; Beauty</span>
                                                </div>
                                            </li>
                                            <li class="popularStoreCategoryTab" role="presentation">
                                                <div role="button">
                                                    <img class="sb-icon sb-icon-couch popularStoreCategoryTabIcon" src="https://cloud.shopback.com/raw/upload/static/images/icon/core/couch.svg"><span class="popularStoreCategoryTabName">Home &amp; Living</span>
                                                </div>
                                            </li>
                                            <li class="popularStoreCategoryTab" role="presentation">
                                                <div role="button">
                                                    <img class="sb-icon sb-icon-rugby popularStoreCategoryTabIcon" src="https://cloud.shopback.com/raw/upload/static/images/icon/core/rugby.svg"><span class="popularStoreCategoryTabName">Sports &amp; Outdoors</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="category-dropdown pull-right hidden-lg hidden-md">
                                        <div class="dropdown btn-group">
                                            <button aria-expanded="false" aria-haspopup="true" class="category-button sale-link dropdown-toggle btn btn-default" id="dropdown-store-category" role="button" type="button">Popular<span class="glyphicon glyphicon-lg glyphicon-menu-down"></span></button>
                                            <ul aria-labelledby="dropdown-store-category" class="row dropdown-menu" role="menu">
                                                <li class="ui-link">
                                                    <a>Popular</a>
                                                </li>
                                                <li class="ui-link">
                                                    <a>Dining</a>
                                                </li>
                                                <li class="ui-link">
                                                    <a>Travel</a>
                                                </li>
                                                <li class="ui-link">
                                                    <a>Electronics</a>
                                                </li>
                                                <li class="ui-link">
                                                    <a>Fashion</a>
                                                </li>
                                                <li class="ui-link">
                                                    <a>Groceries</a>
                                                </li>
                                                <li class="ui-link">
                                                    <a>Health &amp; Beauty</a>
                                                </li>
                                                <li class="ui-link">
                                                    <a>Home &amp; Living</a>
                                                </li>
                                                <li class="ui-link">
                                                    <a>Sports &amp; Outdoors</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <section class="store-group-wrapper-container">
                                    <div class=""></div>
                                    <div class="ui-store-group">
                                        <div class="store six col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/lazada" title="Lazada Coupons &amp; Promo Codes"><img alt="Lazada Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/661/661_logo_88812c16.png"></a>
                                                <div class="title-text">
                                                    Up to 12.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 11.0% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/expedia" title="Expedia Coupons &amp; Promo Codes"><img alt="Expedia Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/102/expedia-coupon-1.png"></a>
                                                <div class="title-text">
                                                    Up to 9.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 6.0% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/qoo10" title="Qoo10 Coupons &amp; Promo Codes"><img alt="Qoo10 Coupons &amp; Promo Codes" class="store-logo" src="https://static.shopback.com/uploads/ci/143830/logo-qoo10.gif"></a>
                                                <div class="title-text">
                                                    Up to 2.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/asos" title="ASOS Coupons &amp; Promo Codes"><img alt="ASOS Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/46/46_logo_5dce1684.jpg"></a>
                                                <div class="title-text">
                                                    3.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container qa-is-special-store clickable">
                                                <a class="store-logo-wrapper" href="/taobao" title="Taobao Coupons &amp; Promo Codes"><img alt="Taobao Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1012/1012_logo_2ef6161b.png"></a>
                                                <div class="title-text">
                                                    Up to 10.0% Cash Rewards
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/zalora" title="ZALORA Coupons &amp; Promo Codes"><img alt="ZALORA Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/93/zalora-coupon-1.png"></a>
                                                <div class="title-text">
                                                    2.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/booking-com" title="Booking.com Coupons &amp; Promo Codes"><img alt="Booking.com Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/318/318_logo_a567c6b3.png"></a>
                                                <div class="title-text">
                                                    6.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/aliexpress" title="AliExpress Coupons &amp; Promo Codes"><img alt="AliExpress Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/49/49_logo_86958e96.png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/fave" title="Fave by Groupon Coupons &amp; Promo Codes"><img alt="Fave by Groupon Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2175/2175_logo_b039552e.png"></a>
                                                <div class="title-text">
                                                    Up to 6.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 4.5% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/agoda" title="Agoda Coupons &amp; Promo Codes"><img alt="Agoda Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/838/838_logo_8573b983.png"></a>
                                                <div class="title-text">
                                                    6.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/deliveroo" title="Deliveroo Coupons &amp; Promo Codes"><img alt="Deliveroo Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1657/1657_logo_63185385.png"></a>
                                                <div class="title-text">
                                                    2.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/foodpanda" title="Foodpanda Coupons &amp; Promo Codes"><img alt="Foodpanda Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/81/81_logo_b5e671a3.png"></a>
                                                <div class="title-text">
                                                    Up to 8.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/fave" title="Fave by Groupon Coupons &amp; Promo Codes"><img alt="Fave by Groupon Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2175/2175_logo_b039552e.png"></a>
                                                <div class="title-text">
                                                    Up to 6.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 4.5% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/deliveroo" title="Deliveroo Coupons &amp; Promo Codes"><img alt="Deliveroo Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1657/1657_logo_63185385.png"></a>
                                                <div class="title-text">
                                                    2.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/foodpanda" title="Foodpanda Coupons &amp; Promo Codes"><img alt="Foodpanda Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/81/81_logo_b5e671a3.png"></a>
                                                <div class="title-text">
                                                    Up to 8.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/spizza" title="Spizza Coupons &amp; Promo Codes"><img alt="Spizza Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2072/2072_logo_2c98746f.png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/eatigo" title="Eatigo Coupons &amp; Promo Codes"><img alt="Eatigo Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2391/2391_logo_4b78a0aa.jpg"></a>
                                                <div class="title-text">
                                                    $1.50 Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/hungry-go-where" title="HungryGoWhere Reservations Coupons &amp; Promo Codes"><img alt="HungryGoWhere Reservations Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2474/2474_logo_75ff5700.png"></a>
                                                <div class="title-text">
                                                    $2.50 Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/quandoo" title="Quandoo Coupons &amp; Promo Codes"><img alt="Quandoo Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2005/2005_logo_8ea54f5f.png"></a>
                                                <div class="title-text">
                                                    $4.50 Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/stamford-catering" title="Stamford Catering Coupons &amp; Promo Codes"><img alt="Stamford Catering Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2100/2100_logo_be23d682.JPG"></a>
                                                <div class="title-text">
                                                    Up to 3.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/cat-and-the-fiddle" title="Cat &amp; the Fiddle Coupons &amp; Promo Codes"><img alt="Cat &amp; the Fiddle Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2020/Catandthefiddle-coupon.png"></a>
                                                <div class="title-text">
                                                    8.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/ubereats" title="UberEATS Coupons &amp; Promo Codes"><img alt="UberEATS Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2410/2410_logo_df538277.png"></a>
                                                <div class="title-text">
                                                    Temporarily Unavailable
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/cafe-britt-gourmet-coffee" title="Cafe Britt Gourmet Coffee Coupons &amp; Promo Codes"><img alt="Cafe Britt Gourmet Coffee Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/607/607_logo_8ad17c09.png"></a>
                                                <div class="title-text">
                                                    4.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/zchocolat" title="zChocolat Coupons &amp; Promo Codes"><img alt="zChocolat Coupons &amp; Promo Codes" class="store-logo" src="https://shopily-sg.s3.amazonaws.com/uploads/stores/504/504_logo_200c4121.png"></a>
                                                <div class="title-text">
                                                    10.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/lazada" title="Lazada Coupons &amp; Promo Codes"><img alt="Lazada Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/661/661_logo_88812c16.png"></a>
                                                <div class="title-text">
                                                    Up to 12.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 11.0% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/qoo10" title="Qoo10 Coupons &amp; Promo Codes"><img alt="Qoo10 Coupons &amp; Promo Codes" class="store-logo" src="https://static.shopback.com/uploads/ci/143830/logo-qoo10.gif"></a>
                                                <div class="title-text">
                                                    Up to 2.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/aliexpress" title="AliExpress Coupons &amp; Promo Codes"><img alt="AliExpress Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/49/49_logo_86958e96.png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/hachi-tech" title="Hachi.tech (Challenger) Coupons &amp; Promo Codes"><img alt="Hachi.tech (Challenger) Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2484/2484_logo_d01d4351.png"></a>
                                                <div class="title-text">
                                                    Up to 3.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/apple-online-store" title="Apple Online Coupons &amp; Promo Codes"><img alt="Apple Online Coupons &amp; Promo Codes" class="store-logo" src="https://static.shopback.com/uploads/ci/375152/screativeref-1101l7160.jpg"></a>
                                                <div class="title-text">
                                                    1.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/app-store" title="App Store Coupons &amp; Promo Codes"><img alt="App Store Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1973/app-store-coupon.png"></a>
                                                <div class="title-text">
                                                    Up to 5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/newegg" title="Newegg Coupons &amp; Promo Codes"><img alt="Newegg Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/284/newegg-coupon.png"></a>
                                                <div class="title-text">
                                                    Up to 0.75% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/gearbest" title="GearBest Coupons &amp; Promo Codes"><img alt="GearBest Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/501/gearbest-coupon-2.png"></a>
                                                <div class="title-text">
                                                    0.75% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/microsoft-store" title="Microsoft Store Coupons &amp; Promo Codes"><img alt="Microsoft Store Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2004/microsoft-coupon.jpg"></a>
                                                <div class="title-text">
                                                    Up to 7.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/hp" title="HP Coupons &amp; Promo Codes"><img alt="HP Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1651/hp-coupon-1.png"></a>
                                                <div class="title-text">
                                                    Up to 6.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/courts" title="Courts Coupons &amp; Promo Codes"><img alt="Courts Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/101/101_logo_c6c61e80.png"></a>
                                                <div class="title-text">
                                                    Up to 3.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/gamersgate-com" title="GamersGate.com Coupons &amp; Promo Codes"><img alt="GamersGate.com Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/440/440_logo_ffd71bf8.png"></a>
                                                <div class="title-text">
                                                    6.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/asos" title="ASOS Coupons &amp; Promo Codes"><img alt="ASOS Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/46/46_logo_5dce1684.jpg"></a>
                                                <div class="title-text">
                                                    3.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container qa-is-special-store clickable">
                                                <a class="store-logo-wrapper" href="/taobao" title="Taobao Coupons &amp; Promo Codes"><img alt="Taobao Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1012/1012_logo_2ef6161b.png"></a>
                                                <div class="title-text">
                                                    Up to 10.0% Cash Rewards
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/zalora" title="ZALORA Coupons &amp; Promo Codes"><img alt="ZALORA Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/93/zalora-coupon-1.png"></a>
                                                <div class="title-text">
                                                    2.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/aliexpress" title="AliExpress Coupons &amp; Promo Codes"><img alt="AliExpress Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/49/49_logo_86958e96.png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/shopbop" title="Shopbop Coupons &amp; Promo Codes"><img alt="Shopbop Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/388/388_logo_92b50f13.png"></a>
                                                <div class="title-text">
                                                    4.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/charles-and-keith" title="Charles &amp; Keith Coupons &amp; Promo Codes"><img alt="Charles &amp; Keith Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/901/charlesandkeith-coupon.png"></a>
                                                <div class="title-text">
                                                    Up to 8.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 4.5% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/nike" title="Nike Coupons &amp; Promo Codes"><img alt="Nike Coupons &amp; Promo Codes" class="store-logo" src="https://static.shopback.com/uploads/merchant_logo/1078/nikelogo.png"></a>
                                                <div class="title-text">
                                                    7.5% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was 5.0% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/gap" title="Gap Coupons &amp; Promo Codes"><img alt="Gap Coupons &amp; Promo Codes" class="store-logo" src="https://shopily-sg.s3.amazonaws.com/uploads/stores/756/756_logo_d3b1ac12.png"></a>
                                                <div class="title-text">
                                                    2.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/pomelo-fashion" title="Pomelo Fashion Coupons &amp; Promo Codes"><img alt="Pomelo Fashion Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2012/pomelo-coupon2.png"></a>
                                                <div class="title-text">
                                                    Up to 5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/esprit" title="Esprit Coupons &amp; Promo Codes"><img alt="Esprit Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1349/esprit-coupon.png"></a>
                                                <div class="title-text">
                                                    3.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/mr-porter" title="MR PORTER Coupons &amp; Promo Codes"><img alt="MR PORTER Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2060/2060_logo_d3f3176a.png"></a>
                                                <div class="title-text">
                                                    Up to 5.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 3.0% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/net-a-porter" title="NET-A-PORTER Coupons &amp; Promo Codes"><img alt="NET-A-PORTER Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1675/nap.png"></a>
                                                <div class="title-text">
                                                    Up to 3.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/lazada" title="Lazada Coupons &amp; Promo Codes"><img alt="Lazada Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/661/661_logo_88812c16.png"></a>
                                                <div class="title-text">
                                                    Up to 12.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 11.0% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/qoo10" title="Qoo10 Coupons &amp; Promo Codes"><img alt="Qoo10 Coupons &amp; Promo Codes" class="store-logo" src="https://static.shopback.com/uploads/ci/143830/logo-qoo10.gif"></a>
                                                <div class="title-text">
                                                    Up to 2.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container qa-is-special-store clickable">
                                                <a class="store-logo-wrapper" href="/taobao" title="Taobao Coupons &amp; Promo Codes"><img alt="Taobao Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1012/1012_logo_2ef6161b.png"></a>
                                                <div class="title-text">
                                                    Up to 10.0% Cash Rewards
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/honestbee" title="honestbee Coupons &amp; Promo Codes"><img alt="honestbee Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1067/1067_logo_02d4b140.png"></a>
                                                <div class="title-text">
                                                    Up to 4.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container qa-is-special-store clickable">
                                                <a class="store-logo-wrapper" href="/shopee" title="Shopee Coupons &amp; Promo Codes"><img alt="Shopee Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1816/shopee.png"></a>
                                                <div class="title-text">
                                                    Up to 10.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/rakuten-global" title="Rakuten Global Market Coupons &amp; Promo Codes"><img alt="Rakuten Global Market Coupons &amp; Promo Codes" class="store-logo" src="https://shopily-sg.s3.amazonaws.com/uploads/stores/330/330_logo_9b1260db.png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was 2.0% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/gofresh" title="GoFresh Coupons &amp; Promo Codes"><img alt="GoFresh Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/911/911_logo_e2c8956d.png"></a>
                                                <div class="title-text">
                                                    7.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/walmart" title="Walmart Coupons &amp; Promo Codes"><img alt="Walmart Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/935/walmart-coupon%20(1).png"></a>
                                                <div class="title-text">
                                                    Up to 2.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/brandsworld" title="Brandsworld Coupons &amp; Promo Codes"><img alt="Brandsworld Coupons &amp; Promo Codes" class="store-logo" src="https://static.shopback.com/uploads/merchant_logo/brandsworld.png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/the-cocoa-trees" title="The Cocoa Trees Coupons &amp; Promo Codes"><img alt="The Cocoa Trees Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1493/1493_logo_81ecef39.png"></a>
                                                <div class="title-text">
                                                    3.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/only-natural-pet" title="Only Natural Pet Coupons &amp; Promo Codes"><img alt="Only Natural Pet Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1055/only-natural-pet-coupon.png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/asos" title="ASOS Coupons &amp; Promo Codes"><img alt="ASOS Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/46/46_logo_5dce1684.jpg"></a>
                                                <div class="title-text">
                                                    3.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/zalora" title="ZALORA Coupons &amp; Promo Codes"><img alt="ZALORA Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/93/zalora-coupon-1.png"></a>
                                                <div class="title-text">
                                                    2.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container qa-is-special-store clickable">
                                                <a class="store-logo-wrapper" href="/iherb" title="iHerb Coupons &amp; Promo Codes"><img alt="iHerb Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/40/iherb-coupon-1.png"></a>
                                                <div class="title-text">
                                                    3.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/sephora" title="Sephora Coupons &amp; Promo Codes"><img alt="Sephora Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1025/1025_logo_fbd50ea3.svg"></a>
                                                <div class="title-text">
                                                    Up to 5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/althea" title="Althea Coupons &amp; Promo Codes"><img alt="Althea Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1093/1093_logo_81b4c260.png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/hermo" title="Hermo Coupons &amp; Promo Codes"><img alt="Hermo Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/948/948_logo_d9eefd24.png"></a>
                                                <div class="title-text">
                                                    3.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/lookfantastic" title="Lookfantastic Singapore Coupons &amp; Promo Codes"><img alt="Lookfantastic Singapore Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2013/lookfantastic-coupon.png"></a>
                                                <div class="title-text">
                                                    Up to 5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/watsons" title="Watsons Coupons &amp; Promo Codes"><img alt="Watsons Coupons &amp; Promo Codes" class="store-logo" src="https://static.shopback.com/uploads/ci/360237/Watsons_logo.png"></a>
                                                <div class="title-text">
                                                    Up to 11.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/strawberrynet-com" title="StrawberryNET Coupons &amp; Promo Codes"><img alt="StrawberryNET Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/294/strawberrynet-coupon-1.png"></a>
                                                <div class="title-text">
                                                    4.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/vaniday" title="Vaniday Coupons &amp; Promo Codes"><img alt="Vaniday Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2017/Vaniday-coupon.png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/gnc" title="GNC Coupons &amp; Promo Codes"><img alt="GNC Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2415/2415_logo_cd7ba67c.jpg"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/ishopchangi" title="iShopChangi Coupons &amp; Promo Codes"><img alt="iShopChangi Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2402/2402_logo_ade02ccc.png"></a>
                                                <div class="title-text">
                                                    $6 Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/lazada" title="Lazada Coupons &amp; Promo Codes"><img alt="Lazada Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/661/661_logo_88812c16.png"></a>
                                                <div class="title-text">
                                                    Up to 12.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 11.0% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/qoo10" title="Qoo10 Coupons &amp; Promo Codes"><img alt="Qoo10 Coupons &amp; Promo Codes" class="store-logo" src="https://static.shopback.com/uploads/ci/143830/logo-qoo10.gif"></a>
                                                <div class="title-text">
                                                    Up to 2.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container qa-is-special-store clickable">
                                                <a class="store-logo-wrapper" href="/taobao" title="Taobao Coupons &amp; Promo Codes"><img alt="Taobao Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1012/1012_logo_2ef6161b.png"></a>
                                                <div class="title-text">
                                                    Up to 10.0% Cash Rewards
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/aliexpress" title="AliExpress Coupons &amp; Promo Codes"><img alt="AliExpress Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/49/49_logo_86958e96.png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/book-depository" title="Book Depository Coupons &amp; Promo Codes"><img alt="Book Depository Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1496/1496_logo_860a9c17.png"></a>
                                                <div class="title-text">
                                                    Up to 4.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/hipvan" title="HipVan Coupons &amp; Promo Codes"><img alt="HipVan Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/685/685_logo_cd96ffd1.png"></a>
                                                <div class="title-text">
                                                    1.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/naiise" title="Naiise Coupons &amp; Promo Codes"><img alt="Naiise Coupons &amp; Promo Codes" class="store-logo" src="https://static.shopback.com/uploads/ci/364488/Untitled-1.png"></a>
                                                <div class="title-text">
                                                    6.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/megafash" title="Megafash Coupons &amp; Promo Codes"><img alt="Megafash Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1018/megafash-coupon-1.png"></a>
                                                <div class="title-text">
                                                    3.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/helpling" title="Helpling Coupons &amp; Promo Codes"><img alt="Helpling Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2426/2426_logo_dc956864.png"></a>
                                                <div class="title-text">
                                                    Up to $30 Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/mums-sg" title="MUMS SG Coupons &amp; Promo Codes"><img alt="MUMS SG Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2478/2478_logo_be9e3d3c.png"></a>
                                                <div class="title-text">
                                                    Up to 3.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/bed-bath-and-beyond" title="Bed Bath &amp; Beyond Coupons &amp; Promo Codes"><img alt="Bed Bath &amp; Beyond Coupons &amp; Promo Codes" class="store-logo" src="https://shopily-sg.s3.amazonaws.com/uploads/stores/2498/2498_logo_81f0a24d.png"></a>
                                                <div class="title-text">
                                                    3.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/barnes-and-noble" title="Barnes &amp; Noble Coupons &amp; Promo Codes"><img alt="Barnes &amp; Noble Coupons &amp; Promo Codes" class="store-logo" src="https://shopily-sg.s3.amazonaws.com/uploads/stores/2497/2497_logo_a625a7da.png"></a>
                                                <div class="title-text">
                                                    3.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/lazada" title="Lazada Coupons &amp; Promo Codes"><img alt="Lazada Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/661/661_logo_88812c16.png"></a>
                                                <div class="title-text">
                                                    Up to 12.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 11.0% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/qoo10" title="Qoo10 Coupons &amp; Promo Codes"><img alt="Qoo10 Coupons &amp; Promo Codes" class="store-logo" src="https://static.shopback.com/uploads/ci/143830/logo-qoo10.gif"></a>
                                                <div class="title-text">
                                                    Up to 2.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/asos" title="ASOS Coupons &amp; Promo Codes"><img alt="ASOS Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/46/46_logo_5dce1684.jpg"></a>
                                                <div class="title-text">
                                                    3.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container qa-is-special-store clickable">
                                                <a class="store-logo-wrapper" href="/taobao" title="Taobao Coupons &amp; Promo Codes"><img alt="Taobao Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1012/1012_logo_2ef6161b.png"></a>
                                                <div class="title-text">
                                                    Up to 10.0% Cash Rewards
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/aliexpress" title="AliExpress Coupons &amp; Promo Codes"><img alt="AliExpress Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/49/49_logo_86958e96.png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/fave" title="Fave by Groupon Coupons &amp; Promo Codes"><img alt="Fave by Groupon Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2175/2175_logo_b039552e.png"></a>
                                                <div class="title-text">
                                                    Up to 6.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 4.5% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/finish-line" title="Finish Line Coupons &amp; Promo Codes"><img alt="Finish Line Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2494/2494_logo_9827d96b.png"></a>
                                                <div class="title-text">
                                                    3.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/under-armour" title="Under Armour Coupons &amp; Promo Codes"><img alt="Under Armour Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1106/under-armour-coupon-.png"></a>
                                                <div class="title-text">
                                                    Up to 6.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/canon" title="Canon Coupons &amp; Promo Codes"><img alt="Canon Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1410/1410_logo_1f17bc8d.png"></a>
                                                <div class="title-text">
                                                    2.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/manchester-united" title="Manchester United Coupons &amp; Promo Codes"><img alt="Manchester United Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/467/manchester-united-coupon.png"></a>
                                                <div class="title-text">
                                                    2.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/backcountry" title="Backcountry Coupons &amp; Promo Codes"><img alt="Backcountry Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1613/backcountry-coupon%20(1).png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/adidas" title="Adidas Coupons &amp; Promo Codes"><img alt="Adidas Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/680/adidas-coupon-1.png"></a>
                                                <div class="title-text">
                                                    Up to 11.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/expedia" title="Expedia Coupons &amp; Promo Codes"><img alt="Expedia Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/102/expedia-coupon-1.png"></a>
                                                <div class="title-text">
                                                    Up to 9.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 6.0% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/booking-com" title="Booking.com Coupons &amp; Promo Codes"><img alt="Booking.com Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/318/318_logo_a567c6b3.png"></a>
                                                <div class="title-text">
                                                    6.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/fave" title="Fave by Groupon Coupons &amp; Promo Codes"><img alt="Fave by Groupon Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2175/2175_logo_b039552e.png"></a>
                                                <div class="title-text">
                                                    Up to 6.0% Cashback
                                                </div>
                                                <div class="subtitle-text">
                                                    Was up to 4.5% Cashback
                                                </div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/agoda" title="Agoda Coupons &amp; Promo Codes"><img alt="Agoda Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/838/838_logo_8573b983.png"></a>
                                                <div class="title-text">
                                                    6.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/hotels-com" title="Hotels.com Coupons &amp; Promo Codes"><img alt="Hotels.com Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/271/hotelscom-coupon.png"></a>
                                                <div class="title-text">
                                                    6.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/accor-hotels" title="AccorHotels.com Coupons &amp; Promo Codes"><img alt="AccorHotels.com Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/432/432_logo_08025cb3.png"></a>
                                                <div class="title-text">
                                                    Up to 4.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/klook-sg" title="Klook SG Coupons &amp; Promo Codes"><img alt="Klook SG Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2480/2480_logo_4efabb11.png"></a>
                                                <div class="title-text">
                                                    Up to 3.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/easybook" title="Easybook Coupons &amp; Promo Codes"><img alt="Easybook Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/1007/easybook-coupon-small.png"></a>
                                                <div class="title-text">
                                                    5.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/scoot" title="Scoot Coupons &amp; Promo Codes"><img alt="Scoot Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/43/43_logo_ccf5ef1c.PNG"></a>
                                                <div class="title-text">
                                                    1.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/zuji" title="ZUJI Coupons &amp; Promo Codes"><img alt="ZUJI Coupons &amp; Promo Codes" class="store-logo" src="https://static.shopback.com/product/237/zuji-discount-coupons-2209.jpg"></a>
                                                <div class="title-text">
                                                    Up to 6.5% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/trip-com" title="Trip.com Coupons &amp; Promo Codes"><img alt="Trip.com Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/671/671_logo_983cdc96.png"></a>
                                                <div class="title-text">
                                                    Up to 3.0% Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                        <div class="store six hidden col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                            <div class="internal-container clickable">
                                                <a class="store-logo-wrapper" href="/fwd-insurance" title="FWD Insurance Coupons &amp; Promo Codes"><img alt="FWD Insurance Coupons &amp; Promo Codes" class="store-logo" src="https://cloud.shopback.com/t_sd_250_pad,f_auto,fl_lossy,q_auto/sg-store/2074/2074_logo_5a03bd1b.png"></a>
                                                <div class="title-text">
                                                    Up to $45 Cashback
                                                </div>
                                                <div class="subtitle-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="button-row-container">
                                    <a class="link" href="/all-stores">View All Popular Stores</a>
                                </div>
                            </div>
                        </div>
                        <section class="ui-widget ui-widget-superproduct preview">
                            <section class="ui-widget-section-banner">
                                <div class="section">
                                    <div class="titleBar">
                                        <div class="titleText">
                                            Qoo10 Chinese New Year must-haves
                                        </div>
                                    </div>
                                    <section>
                                        <section class="ui-horizontal-list slicker-slider-products" data-slides="6">
                                            <span class="ui-slider-control left"><i class="fa fa-angle-left"></i></span>
                                            <span class="ui-slider-control right"><i class="fa fa-angle-right"></i></span>
                                            <div class="list-container">
                                                @each('partials.single-product', $products, 'product')
                                            </div>
                                        </section>
                                    </section>
                                </div>
                            </section>
                        </section>
                        <section class="ui-widget ui-widget-brand preview" data-qa="supercashback-brands">
                            <section class="ui-widget-section-banner">
                                <div class="section">
                                    <div class="titleBar">
                                        <div class="titleText">
                                            Brands In Spotlight
                                        </div>
                                    </div>
                                    <section class="brand-tile-wrapper">
                                        @for ($i = 0; $i < 4; $i++)
                                            @include('partials.single-product-banner')
                                        @endfor
                                    </section>
                                </div>
                            </section>
                        </section>
                        <section class="ui-widget ui-widget-top-deal preview" data-qa="topdeals">
                            <section class="ui-widget-section-banner">
                                <div class="section">
                                    <div class="title">
                                        <div class="title-text">
                                            Top Deals
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-sm btn-default" href="/best-deals"><span class="view-all-text">View all</span></a>
                                        </div>
                                    </div>
                                    <section>
                                        <section class="ui-horizontal-list slicker-slider-products" data-slides="5">
                                            <span class="ui-slider-control left"><i class="fa fa-angle-left"></i></span><span class="ui-slider-control right"><i class="fa fa-angle-right"></i></span>
                                            <div class="list-container">
                                                @each('partials.single-deal', $deals, 'deal')
                                            </div>
                                        </section>
                                    </section>
                                </div>
                            </section>
                        </section>
                        <section class="ui-widget ui-widget-brand preview" data-qa="supercashback-brands">
                            <section class="ui-widget-section-banner">
                                <div class="section">
                                    <div class="titleBar">
                                        <div class="titleText">
                                            Campaign Specials
                                        </div>
                                    </div>
                                    <section class="brand-tile-wrapper">
                                        @for ($i = 0; $i < 4; $i++)
                                            @include('partials.single-product-banner')
                                        @endfor
                                    </section>
                                </div>
                            </section>
                        </section>
                        <div class="ui-widget">
                            <div class="hero-cta-container section">
                                <div class="text">
                                    Explore the smarter way to shop with ShopBack
                                </div><a class="cta btn btn-default" href="/signup">I&#x27;m ready to try</a>
                            </div>
                        </div>
                        <section class="ui-widget ui-widget-press preview">
                            <h4>We&#x27;re Featured On:</h4>
                            <div class="press-logo-container">
                                <div class="press-logo">
                                    <a href="http://www.businesstimes.com.sg/technology/shopback-eyes-s-e-asias-us60b-e-commerce-market" target="_blank"><img alt="ShopBack eyes S-E Asia&#x27;s US$60b e-commerce market" class="logo-img" src="https://cloud.shopback.com/press/logo/businesstimes.png"></a>
                                </div>
                                <div class="press-logo">
                                    <a href="http://www.asianentrepreneur.org/singapore-start-up-shopback-pays-you-to-shop-online/" target="_blank"><img alt="Singapore start-up ShopBack pays you to shop online!" class="logo-img" src="https://cloud.shopback.com/press/logo/asianentrepreneur.png"></a>
                                </div>
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </div>
        <section id='brand-story-container'>
            <div class="react" data-reactroot="">
                <section class="brand-story">
                    <section class="pagetemplate-pagelet">
                        <div class="ui-widget ui-widget-text preview seo-brand-story">
                            <div id="507d0b88-f452-4eed-b4eb-679fbc309193">
                                <div class="with-read-more with-read-more--hide">
                                    <div>
                                        <h1>ShopBack Singapore revolutionise online shopping by giving you cash to shop</h1>
                                        <p>We all love The Great Singapore Sale – let's face it, who doesn't love a good discount? – but the promotion period is <em>waaaay</em> too short. One month isn’t good enough for us; we want all the best deals all year ‘round! ShopBack is the perfect place to find those discounts we so desire. Bringing you the latest promotions and voucher codes from over 300 renowned brands in the online shopping scene, including <a href="https://www.shopback.sg/taobao" title="Taobao Singapore Promotions &amp; Cashback">Taobao Singapore</a>, <a href="https://www.shopback.sg/lazada" title="Lazada Vouchers, Coupons &amp; Promo Codes">Lazada</a>, <a href="https://www.shopback.sg/ebay" title="eBay Coupon Codes, Discount Coupons &amp; Deals">eBay</a>, <a href="https://www.shopback.sg/aliexpress" title="AliExpress Singapore Coupon Codes &amp; Cashback">AliExpress</a> and <a href="https://www.shopback.sg/fave" rel="follow" target="__blank" title="https://www.shopback.sg/fave">Fave Singapore</a>, ShopBack is the one-site shop to get all the <strong>fantastic coupon deals</strong> at your favourite online shops.</p>
                                    </div>
                                    <div class="more-section">
                                        <div class="more-text">
                                            <div>
                                                <p>ShopBack's arrival took the e-commerce by storm, quickly rising up the ranks as one of the best online coupons and saving sites in Singapore. Shopping at ShopBack allows you to earn cashback with each purchase – in order words, you're literally <strong>getting paid to shop</strong> with us.</p>
                                                <h2>Use ShopBack promo codes and vouchers for an array of products</h2>
                                                <p>Easily browse through the categories on Shopback, including Fashion, Electronics, Travel, Lifestyle, Food &amp; Drink, Home &amp; Living and General to find all the products you desire. You can also visit the Featured section to get access to our new stores and popular stores. Expect to find <strong>special savings during the festive season</strong>. Get great offers and coupons on top of already low prices!</p>
                                                <h2>Strut your stuff with apparel on offer from ShopBack's fashion stores</h2>
                                                <p>ShopBack caters to the fashionistas with shops like <a href="https://www.shopback.sg/asos" title="ASOS Promo Codes, Discount Codes &amp; Coupons">ASOS</a> and <a href="https://www.shopback.sg/zalora" title="ZALORA Discount Codes, Promo Codes &amp; Coupons">Zalora</a>. Who says that you have to pay a price to look stunning? With <strong>no shortage of voucher codes, coupons and discounts</strong>, ShopBack Singapore ensures you don't have to worry about having a tight budget when planning your next big outfit.</p>
                                                <h2>You don't have to dream to fly – you can do so comfortably with ShopBack's voucher codes and coupons</h2>
                                                <p>Even having a simple holiday seems so hard these days, especially with soaring airline ticket and accommodation pricings – the thought of spending so much in such a short span of time is frightening indeed! Those suffering from wanderlust need not worry anymore, because of the <strong>awesome travel discounts</strong> we have right here at ShopBack! Easily book a flight at low promotional prices at <a href="https://www.shopback.sg/expedia" title="Expedia Discount Codes, Promo Codes &amp; Vouchers">Expedia</a> or <a href="https://www.shopback.sg/zuji" title="ZUJI Promo Codes, Discount Coupons &amp; Cashback">ZUJI</a>. You can easily plan a dream holiday, complete with a relaxing and luxurious, yet totally afforadable, hotel stay, at <a href="https://www.shopback.sg/agoda" title="Agoda Discount Codes, Promo Codes &amp; Deals in Singapore">Agoda Singapore</a> and <a href="https://www.shopback.sg/booking-com" title="Booking.com Coupon Codes, Discount Codes &amp; Promotions">Booking.com</a>! Plan your travel with no woes, thanks to voucher codes from ShopBack.</p>
                                                <h2>Spice up your life with deals brought to you by ShopBack</h2>
                                                <p>Life is no longer boring when you have great promo deals and voucher codes at ShopBack. You can't complain about a mundane lifestyle when you can get great offers (and of course, cashback!) for visiting dating websites like Date.com! You could also use coupon codes for quirky items at HipVan to personalize your home. As for the foodies, we know that food is <em>essential</em> for the soul. For that, ShopBack brings you caterers and food delivery like <a href="https://www.shopback.sg/foodpanda" title="FoodPanda Vouchers &amp; Coupons">FoodPanda</a>, whose offers will have you absolutely salivating for more. There are <a href="https://www.shopback.sg/cyber-monday-deals" rel="follow" target="__blank" title="Cyber Monday Sales">Cyber Monday Sales</a> , <a href="https://www.shopback.sg/1111-sales" rel="follow" target="__blank" title="Singles Day Sales">Singles Day Sales</a> and <a href="https://www.shopback.sg/black-friday-sales" rel="follow" target="__blank" title="Black Friday Sales">Black Friday Sales</a> events where you can get huge discounts when shopping online.&nbsp;</p>
                                                <h2>So what are you waiting for? The deals aren't gonna grab themselves!</h2>
                                                <p>Start shopping at our long list of online stores today. Stay tuned to our site to get all the promo codes and seasonal discounts you love. Happy shopping at ShopBack Singapore! ShopBack Singapore is offering you some great online deals this crazy shopping season! Get ready to grab some online deals and shop till you drop with ShopBack Singapore. Don't forget to check out <a href="https://www.shopback.sg/coupons" rel="follow" target="" title="">coupon codes</a>, <a href="https://www.shopback.sg/staycation-deals" rel="follow" target="" title="">staycation deals</a>, as well as the <a href="https://www.shopback.sg/blog/post/best-buffets-in-singapore-happening-now">best buffets in Singapore</a> to save more!</p>
                                                <p>Important Links:&nbsp;</p>
                                                <p><a href="https://www.shopback.sg/grab" rel="follow" target="__blank" title="Grab Coupons">Grab Promo Codes</a> | <a href="https://www.shopback.sg/singapore-airlines" rel="follow" target="__blank" title="Singapore Coupons">Singapore Airlines Promo Codes</a> | <a href="https://www.shopback.sg/deliveroo" rel="follow" target="__blank" title="Deliveroo Coupons">Deliveroo Promo Codes</a> | <a href="https://www.shopback.sg/ubereats" rel="follow" target="__blank" title="Ubereats Coupons">Ubereats Promo Codes</a> | <a href="https://www.shopback.sg/burger-king" rel="follow" target="__blank" title="Burger King Promos">Burger King Coupons</a> | <a href="https://www.shopback.sg/asos" rel="follow" target="__blank" title="Asos Coupons">Asos Promo Codes</a> | <a href="https://www.shopback.sg/courts" rel="follow" target="__blank" title="Courts Coupons">Courts Promo Codes</a> | <a href="https://www.shopback.sg/expedia" rel="follow" target="__blank" title="Expedia Coupons">Expedia Promo Codes</a> | <a href="https://www.shopback.sg/iherb" rel="follow" target="__blank" title="iHerb Coupons">iHerb Promo Codes</a> | <a href="https://www.shopback.sg/kfcdelivery" rel="follow" target="__blank" title="KFC Coupons">KFC Voucher Codes</a> | <a href="https://www.shopback.sg/mcdelivery" rel="follow" target="__blank" title="Mcdelivery Promos">Mcdelivery Coupon Codes</a></p>
                                            </div>
                                        </div><button class="more-link">Read more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </section>
    </div>

@endsection