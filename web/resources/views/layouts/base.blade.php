<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"><!-- NREUM: (1) -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="!" name="fragment">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Coupons, Discount Codes + Cashback | Online Shopping | ShopBack.sg</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="{{ $pagename or '' }}">
<div class="content-container">
    <nav id='navigation-container'>
        <div class="react" data-reactroot="">
            <div class="navigation-container">
                <div class="nav-desktop-wrapper">
                    <div id="shark-affix">
                        <div class="ui-affix">
                            <div class="navigation">
                                <div class="search-menu-container">
                                    <div class="container">
                                        <div class="logo-container pull-left">
                                            <a class="logo" href="/"><img src="https://cloud.shopback.com/raw/upload/static/images/navbar/sb-logo.png"></a>
                                        </div>
                                        <div class="search-container pull-left">
                                            <div class="search-bar-container">
                                                <form action="/search" method="get">
                                                    <div class="react-autosuggest__container">
                                                        <input aria-autocomplete="list" aria-expanded="false" aria-haspopup="false" aria-owns="react-autowhatever-1" autocomplete="off" class="react-autosuggest__input" name="q" placeholder="Search for brands and stores" role="combobox" type="text" value="">
                                                        <div class="react-autosuggest__suggestions-container" id="react-autowhatever-1"></div>
                                                    </div><button class="glyphicon glyphicon-search" type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="login-menu-container pull-right">
                                            <ul class="pull-right nav nav-pills">
                                                <li class="menu-link menu-link-div sign-up-btn" role="presentation">
                                                    <div data-target="#loginModal" data-toggle="modal">
                                                        <span>Sign up</span>
                                                    </div>
                                                </li>
                                                <li class="menu-link menu-link-div login-btn" role="presentation">
                                                    <div data-target="#loginModal" data-toggle="modal">
                                                        <span>Log In</span>
                                                    </div>
                                                </li>
                                                <li class="menu-link menu-link-div login-btn" role="presentation">
                                                    <div><a href="{{ action('PageController@mypage') }}">My Page</a></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="hiw-education-banner">
                                    <div class="education-banners">
                                        <div class="inline-block">
                                            <img class="float-left img-icon" src="https://cloud.shopback.com/raw/upload/static/images/navbar/hiwEducationBanner/merchant-icon.png">
                                            <div class="float-left text-msg">
                                                shop on any store through shopback
                                            </div>
                                            <div class="right-arrow-icon float-left">
                                                <i class="fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>
                                        <div class="inline-block">
                                            <img class="float-left img-icon" src="https://cloud.shopback.com/raw/upload/static/images/navbar/hiwEducationBanner/coin-icon.png">
                                            <div class="float-left text-msg">
                                                get cashback in your account
                                            </div>
                                            <div class="right-arrow-icon float-left">
                                                <i class="fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>
                                        <div class="inline-block">
                                            <img class="float-left img-icon" src="https://cloud.shopback.com/raw/upload/static/images/navbar/hiwEducationBanner/wallet-icon.png">
                                            <div class="float-left text-msg">
                                                payout to your bank account
                                            </div>
                                        </div>
                                        <div class="inline-block">
                                            <div class="float-left">
                                                <a class="learn-more-btn float-left btn btn-default" href="/how-it-works">learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="category-navigation-container">
                                        <div class="container">
                                            <div class="category-dropdown pull-left"><div class="pull-left"><div data-qa="categories" class="dropdown btn-group"><button id="nav-gray-bar__categories" role="button" aria-haspopup="true" aria-expanded="false" type="button" class="category-button sale-link dropdown-toggle btn btn-default">Categories<span class="glyphicon glyphicon-lg glyphicon-menu-down"></span></button><ul role="menu" class="row dropdown-menu" aria-labelledby="nav-gray-bar__categories"><div data-qa="category-menu" class="category-menu col-md-6"><li class="ui-link category-item"><a href="/automotive-gadgets">Automotive &amp; Gadgets</a></li><li class="ui-link category-item"><a href="/dining">Dining</a></li><li class="ui-link category-item"><a href="/electronics">Electronics</a></li><li class="ui-link category-item"><a href="/fashion">Fashion</a></li><li class="ui-link category-item"><a href="/general">General</a></li><li class="ui-link category-item"><a href="/groceries">Groceries</a></li><li class="ui-link category-item"><a href="/health-beauty">Health &amp; Beauty</a></li><li class="ui-link category-item"><a href="/home-living">Home &amp; Living</a></li><li class="ui-link category-item"><a href="/kids-babies-mothers">Kids, Babies &amp; Mothers</a></li><li class="ui-link category-item"><a href="/lifestyle">Lifestyle</a></li><li class="ui-link category-item"><a href="/sports-outdoors">Sports &amp; Outdoors</a></li><li class="ui-link category-item"><a href="/travel">Travel</a></li></div><div data-qa="sub-category-menu" class="sub-category-menu col-md-6"><li class="ui-link sub-category-item"><a href="/auto-gadgets">Automotive</a></li><li class="ui-link sub-category-item"><a href="/car-gadgets">Gadgets</a></li><li class="ui-link sub-category-item"><a href="/automotive-transporting-storage">Transporting &amp; Storage</a></li><li class="ui-link sub-category-item hidden"><a href="/food-delivery">Food Delivery</a></li><li class="ui-link sub-category-item hidden"><a href="/cafe-restaurant-promotions">Restaurant &amp; Cafe Deals</a></li><li class="ui-link sub-category-item hidden"><a href="/cameras">Cameras</a></li><li class="ui-link sub-category-item hidden"><a href="/computers-laptops">Computers &amp; Laptops</a></li><li class="ui-link sub-category-item hidden"><a href="/consumer-electronics">Consumer Electronics</a></li><li class="ui-link sub-category-item hidden"><a href="/mobiles-tablets">Mobiles &amp; Tablets</a></li><li class="ui-link sub-category-item hidden"><a href="/mens-fashion">Men</a></li><li class="ui-link sub-category-item hidden"><a href="/womens-fashion">Women</a></li><li class="ui-link sub-category-item hidden"><a href="/group-buying">Group Buying</a></li><li class="ui-link sub-category-item hidden"><a href="/marketplace">Marketplace</a></li><li class="ui-link sub-category-item hidden"><a href="/industrial-equipment">Industrial Equipment</a></li><li class="ui-link sub-category-item hidden"><a href="/general-services">Services</a></li><li class="ui-link sub-category-item hidden"><a href="/alcohol">Alcohol</a></li><li class="ui-link sub-category-item hidden"><a href="/bakery">Bakery</a></li><li class="ui-link sub-category-item hidden"><a href="/beverages">Beverages</a></li><li class="ui-link sub-category-item hidden"><a href="/dairy-chilled-food">Dairy &amp; Chilled</a></li><li class="ui-link sub-category-item hidden"><a href="/food-cupboard">Food Cupboard</a></li><li class="ui-link sub-category-item hidden"><a href="/fresh-produce">Fresh Produce</a></li><li class="ui-link sub-category-item hidden"><a href="/frozen-food">Frozen</a></li><li class="ui-link sub-category-item hidden"><a href="/meat-seafood">Meat &amp; Seafood</a></li><li class="ui-link sub-category-item hidden"><a href="/bath-body-products">Bath &amp; Body</a></li><li class="ui-link sub-category-item hidden"><a href="/body-arts-tattoo">Body Arts &amp; Tattoo</a></li><li class="ui-link sub-category-item hidden"><a href="/first-aid-medical-supplies">First Aid &amp; Medical Supplies</a></li><li class="ui-link sub-category-item hidden"><a href="/food-supplements">Food Supplements</a></li><li class="ui-link sub-category-item hidden"><a href="/fragrance">Fragrance</a></li><li class="ui-link sub-category-item hidden"><a href="/hair-care">Hair Care</a></li><li class="ui-link sub-category-item hidden"><a href="/makeup">Makeup</a></li><li class="ui-link sub-category-item hidden"><a href="/mens-health-beauty">Men</a></li><li class="ui-link sub-category-item hidden"><a href="/nail">Nail</a></li><li class="ui-link sub-category-item hidden"><a href="/personal-health-beauty-care">Personal Care</a></li><li class="ui-link sub-category-item hidden"><a href="/skin-care-products">Skin Care</a></li><li class="ui-link sub-category-item hidden"><a href="/home-living-bath">Bath</a></li><li class="ui-link sub-category-item hidden"><a href="/bedding">Bedding</a></li><li class="ui-link sub-category-item hidden"><a href="/furniture">Furniture</a></li><li class="ui-link sub-category-item hidden"><a href="/home-appliances">Home Appliances</a></li><li class="ui-link sub-category-item hidden"><a href="/home-decor">Home Decor</a></li><li class="ui-link sub-category-item hidden"><a href="/home-improvement">Home Improvement</a></li><li class="ui-link sub-category-item hidden"><a href="/kitchen-dining">Kitchen &amp; Dining</a></li><li class="ui-link sub-category-item hidden"><a href="/lighting">Lighting</a></li><li class="ui-link sub-category-item hidden"><a href="/outdoor-living-garden-decor">Outdoor &amp; Garden</a></li><li class="ui-link sub-category-item hidden"><a href="/pets">Pets</a></li><li class="ui-link sub-category-item hidden"><a href="/stationery">Stationery</a></li><li class="ui-link sub-category-item hidden"><a href="/home-storage-organisation">Storage &amp; Organisation</a></li><li class="ui-link sub-category-item hidden"><a href="/baby-gear">Baby Gear</a></li><li class="ui-link sub-category-item hidden"><a href="/baby-gifts">Baby Gifts</a></li><li class="ui-link sub-category-item hidden"><a href="/baby-health-safety">Baby Health &amp; Safety</a></li><li class="ui-link sub-category-item hidden"><a href="/kids-babies-clothing-accessories">Clothing &amp; Accessories</a></li><li class="ui-link sub-category-item hidden"><a href="/baby-diapering-potty">Diapering &amp; Potty</a></li><li class="ui-link sub-category-item hidden"><a href="/kids-babies-feeding">Feeding</a></li><li class="ui-link sub-category-item hidden"><a href="/maternity-care">Maternity Care</a></li><li class="ui-link sub-category-item hidden"><a href="/baby-nursery-products">Nursery</a></li><li class="ui-link sub-category-item hidden"><a href="/baby-pacifiers-accessories">Pacifiers &amp; Accessories</a></li><li class="ui-link sub-category-item hidden"><a href="/babies-kids-toys-games">Toys &amp; Games</a></li><li class="ui-link sub-category-item hidden"><a href="/books-magazines">Books &amp; Magazines</a></li><li class="ui-link sub-category-item hidden"><a href="/dating">Dating</a></li><li class="ui-link sub-category-item hidden"><a href="/hobbies">Hobbies</a></li><li class="ui-link sub-category-item hidden"><a href="/music">Music</a></li><li class="ui-link sub-category-item hidden"><a href="/tickets-events">Tickets &amp; Events</a></li><li class="ui-link sub-category-item hidden"><a href="/sports-outdoor-helmets-protection">Helmets &amp; Protection</a></li><li class="ui-link sub-category-item hidden"><a href="/individual-sports-equipment">Individual Sports Equipment</a></li><li class="ui-link sub-category-item hidden"><a href="/outdoor-adventure">Outdoor &amp; Adventure</a></li><li class="ui-link sub-category-item hidden"><a href="/sports-outdoor-shoes-clothing">Shoes &amp; Clothing</a></li><li class="ui-link sub-category-item hidden"><a href="/sport-watches-sunglasses">Sport Watches &amp; Sunglasses</a></li><li class="ui-link sub-category-item hidden"><a href="/sports-accessories">Sports Accessories</a></li><li class="ui-link sub-category-item hidden"><a href="/sports-bags">Sports Bags</a></li><li class="ui-link sub-category-item hidden"><a href="/team-sports-equipment">Team Sports Equipment</a></li><li class="ui-link sub-category-item hidden"><a href="/travel-activities">Activities</a></li><li class="ui-link sub-category-item hidden"><a href="/car-rental">Car Rental</a></li><li class="ui-link sub-category-item hidden"><a href="/cruises">Cruises</a></li><li class="ui-link sub-category-item hidden"><a href="/flights">Flights</a></li><li class="ui-link sub-category-item hidden"><a href="/hotels">Hotels</a></li><li class="ui-link sub-category-item hidden"><a href="/kids-travel">Kids Travel</a></li><li class="ui-link sub-category-item hidden"><a href="/travel-luggage">Luggage</a></li><li class="ui-link sub-category-item hidden"><a href="/travel-packing-organizers">Packing Organizers</a></li><li class="ui-link sub-category-item hidden"><a href="/rail-ferry-coach">Rail, Ferry &amp; Coach</a></li><li class="ui-link sub-category-item hidden"><a href="/travel-tour-packages">Tour Packages</a></li><li class="ui-link sub-category-item hidden"><a href="/travel-accessories">Travel Accessories</a></li></div></ul></div></div><span><a href="/travel-deals" class="link sale-link" title="Travel deals up to 60% off + up to 10% Cashback!">TRAVEL</a><a href="/fashion-sale" class="link sale-link" title="Fashion Edit! Your one-stop guide to the best fashion deals and styles!">FASHION</a><a href="/food-promotion" class="link sale-link" title="Food Deals: Get up to 50% off + <8% Upsized Cashback!">DINING</a><a href="/credit-cards" class="link sale-link" title="Credit Cards">CREDIT CARDS</a><a href="/valentines-day" class="link sale-link" title="Valentine's Day Sales: Up to 30% Cashback">V'DAY SALES</a></span></div>
                                            <div class="pull-right">
                                                <a class="sale-link download-app" href="/mobile-apps" title="ShopBack CashBack Mobile App"><img class="icon-app" src="https://cloud.shopback.com/raw/upload/static/images/navbar/desktop/icon-app.svg"><span>Get ShopBack App</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class='header-container'></div>

    @yield('content')

    <div id="footer-customer-service-container">
        <div class="react" data-reactroot="">
            <footer class="footer-container">
                <div class="footerInternalLinks">
                    <div class="innerContainer">
                        <div class="seoLinkGroup-container">
                            <div class="seoLinkContent">
                                <div class="seoLinkTitle">
                                    Popular Stores
                                </div><a class="seoLink seoLinkHorizontal" href="/grab">Grab Promo Codes</a><a class="seoLink seoLinkHorizontal" href="/singapore-airlines">Singapore Airlines Promo Codes</a><a class="seoLink seoLinkHorizontal" href="/deliveroo">Deliveroo Promo Codes</a><a class="seoLink seoLinkHorizontal" href="/airasia">Air Asia Promo Codes</a><a class="seoLink seoLinkHorizontal" href="/asos">Asos Promo Codes</a><a class="seoLink seoLinkHorizontal" href="/courts">Courts Promo Codes</a><a class="seoLink seoLinkHorizontal" href="/expedia">Expedia Promo Codes</a><a class="seoLink seoLinkHorizontal" href="/iherb">iHerb Promo Codes</a>
                            </div>
                            <div class="seoLinkContent">
                                <div class="seoLinkTitle">
                                    Popular Events
                                </div><a class="seoLink seoLinkHorizontal" href="/black-friday-sales">Black Friday Sales</a><a class="seoLink seoLinkHorizontal" href="/cyber-monday-deals">Cyber Monday Sales</a><a class="seoLink seoLinkHorizontal" href="/1111-sales">Singles Day Sales</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footerContent">
                    <div class="innerContainer">
                        <div class="footerContacts">
                            <div class="footerContactItem footerLongContent">
                                <div class="footerTitle">
                                    <span>Reach us</span>
                                </div>
                                <div class="footerItemContent">
                                    <span>Contact us at help@shopback.sg</span>
                                </div>
                                <div class="footerSafetyContainer">
                                    <div class="footerSafety">
                                        <div>
                                            <span>Secured by</span>
                                        </div><img alt="" class="footerSafetyIcon" src="https://cloud.shopback.com/raw/upload/static/images/footer/cloudflare.png"></div>
                                </div>
                            </div>
                            <div class="footerContactItem footerShortContent">
                                <div class="footerTitle">
                                    <span>About ShopBack</span>
                                </div>
                                <div class="footerItemContent">
                                    <a href="http://careers.shopback.com/#about-us" target="_blank"><span>About us</span></a>
                                </div>
                                <div class="footerItemContent">
                                    <a href="http://careers.shopback.com/" target="_blank"><span>ShopBack Careers</span></a>
                                </div>
                                <div class="footerItemContent">
                                    <a href="https://support.shopback.sg/hc/en-us/articles/115010365708-ShopBack-Personal-Data-Protection-Policy" target="_blank"><span>Privacy Policy</span></a>
                                </div>
                                <div class="footerItemContent">
                                    <a href="https://support.shopback.sg/hc/en-us/categories/115001606288-Terms-Conditions" target="_blank"><span>Terms &amp; Conditions</span></a>
                                </div>
                                <div class="footerItemContent">
                                    <a href="https://www.shopback.sg/how-it-works" target="_self"><span>How ShopBack works</span></a>
                                </div>
                            </div>
                            <div class="footerContactItem footerShortContent">
                                <div class="footerTitle">
                                    <span>Explore</span>
                                </div>
                                <div class="footerItemContent">
                                    <a href="https://www.shopback.sg/all-stores" target="_self"><span>All Stores</span></a>
                                </div>
                                <div class="footerItemContent">
                                    <a href="https://www.shopback.sg/store-directory" target="_self"><span>Store Directory</span></a>
                                </div>
                                <div class="footerItemContent">
                                    <a href="https://www.shopback.sg/blog/" target="_blank"><span>ShopBack Blog</span></a>
                                </div>
                                <div class="footerItemContent">
                                    <a href="https://www.shopback.sg/cashback-button/how-it-works" target="_self"><span>Cashback Buddy</span></a>
                                </div>
                            </div>
                            <div class="footerContactItem footerImgContainer footerAppImage footerMediumContent">
                                <div class="footerImgText">
                                    <span>Get Cashback On The Go</span>
                                </div><a href="https://play.google.com/store/apps/details?id=com.shopback.app" target="_blank"><img alt="" class="footerPlayStoreImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/button-playstore.png"></a><a href="https://itunes.apple.com/app/id1086505626" target="_blank"><img alt="" class="footerAppStoreImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/button-appstore.png"></a><img alt="" class="footerCornerImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/phone-image.png"></div>
                            <div class="footerContactItem footerImgContainer footerExtImage footerMediumContent">
                                <div class="footerImgText">
                                    <span>Cashback Buddy Extension</span>
                                </div><img alt="" class="footerCornerImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/extension-happy-bag.png"></div>
                        </div>
                        <div class="footerCountries">
                            <div class="footerSmarterWay">
                                <span>Shop Smart. Live Smart. Save Smart</span>
                            </div>
                            <div class="footerFlagContainer">
                                <a class="footerIconContainer" href="https://www.shopback.my/"><img alt="" class="footerIconImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/flag-my.png"></a><a class="footerIconContainer" href="https://www.shopback.ph/"><img alt="" class="footerIconImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/flag-ph.png"></a><a class="footerIconContainer" href="https://www.shopback.co.id/"><img alt="" class="footerIconImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/flag-id.png"></a><a class="footerIconContainer" href="https://www.shopback.com.tw/"><img alt="" class="footerIconImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/flag-tw.png"></a><a class="footerIconContainer" href="https://www.myshopback.co.th/"><img alt="" class="footerIconImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/flag-th.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footerBottomBar">
                    <div class="innerContainer">
                        <div class="footerSocialContainer">
                            <a class="footerIconContainer" href="https://twitter.com/shopbacksg" target="_blank"><img alt="" class="footerIconImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/icon-twitter.svg"></a><a class="footerIconContainer" href="https://www.facebook.com/ShopBack" target="_blank"><img alt="" class="footerIconImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/icon-facebook.svg"></a><a class="footerIconContainer" href="https://instagram.com/shopbacksg/" target="_blank"><img alt="" class="footerIconImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/icon-instagram.svg"></a><a class="footerIconContainer" href="https://plus.google.com/+ShopbackSg" target="_blank"><img alt="" class="footerIconImg" src="https://cloud.shopback.com/raw/upload/static/images/footer/icon-googleplus.svg"></a>
                        </div>
                        <div class="footerHappydanceContainer">
                            <div class="footerHappydanceText">
                                <div>
                                    Made with love by
                                </div>
                                <img alt="" class="footerLogo" src="https://cloud.shopback.com/raw/upload/static/images/footer/shopback-logo.png">
                            </div>
                            <img alt="" class="footerHappydance" src="https://cloud.shopback.com/raw/upload/static/images/footer/happydance-loader.gif">
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <div class="modal fade react" id="loginModal" role="dialog">
        <div class="modal-dialog">
            <div class="login-modal-container modal-dialog">
                <div class="modal-content" role="document">
                    <button class="button-close"><span>×</span></button>
                    <div class="modal-body">
                        <div class="login-container text-center row">
                            <div class="welcome-container col-md-12">
                                <h3>Welcome back</h3>
                                <h4>The smarter way to shop and earn Cashback</h4>
                            </div>
                            <div class="col-md-12">
                                <ul class="tab-navigation nav nav-tabs nav-justified">
                                    <li class="" role="presentation">
                                        <div>
                                            Sign up
                                        </div>
                                    </li>
                                    <li class="active" role="presentation">
                                        <div>
                                            Log In
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="action-container col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                    <span style="transition: opacity 0.5s;"><button class="btn btn-default button-facebook metro" type="button"><span style="transition: opacity 0.5s;">Log In with Facebook</span></button></span>
                                    <div class="divider"></div>
                                    <div class="ui-form-control ui-input ui-input--default full-width">
                                        <div class="ui-form-control__object">
                                            <input placeholder="Email" type="email" value="">
                                        </div>
                                    </div>
                                    <div class="ui-form-control ui-input ui-input--default full-width">
                                        <div class="ui-form-control__object">
                                            <input placeholder="Password" type="password" value="">
                                        </div>
                                    </div>
                                    <div>
                                        <input class="element" name="firstName" type="text"><input class="element" name="lastName" type="text">
                                    </div><button class="button-email btn btn-default" type="button"><span>Log In with Email</span></button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="/forgot"><span>Forgot your password</span>?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>