@extends('layout.main')

<!-- Body main wrapper start -->
@section('content')
<div class="wrapper fixed__footer">
    <!-- Start Header Style -->
    <header id="header" class="htc-header header--3 bg__white">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="/assets/images/logo/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <!-- Start MAinmenu Ares -->
                    <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                        <nav class="mainmenu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li class="drop"><a href="index.html">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                    </ul>
                                </li>
                                <li class="drop"><a href="portfolio-gutter-box-3.html">portfolio</a>
                                    <ul class="dropdown">
                                        <li><a href="portfolio-gutter-box-3.html">Boxed Gutter 3 Col</a></li>
                                        <li><a href="portfolio-gutter-full-wide-4.html">Wide Gutter 4 Col </a></li>
                                        <li><a href="portfolio-card-box-3.html">Card Gutter 3 Col </a></li>
                                        <li><a href="portfolio-masonry-3.html">Masonry Box 3 Col </a></li>
                                        <li><a href="portfolio-gutter-masonry-fullwide-4.html">Masonry Wide 4 Col </a></li>
                                        <li><a href="portfolio-gutter-box-3-carousel.html">carousel Gutter 3 Col </a></li>
                                        <li><a href="portfolio-justified-box-3.html">justified box 3 Col</a></li>
                                        <li><a href="single-portfolio-gallery.html">Portfolio Details </a></li>
                                    </ul>
                                </li>
                                <li class="drop"><a href="blog.html">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">blog 3 column</a></li>
                                        <li><a href="blog-2-col-rightsidebar.html">2 col right siderbar</a></li>
                                        <li><a href="blog-details-left-sidebar.html"> blog details</a></li>
                                    </ul>
                                </li>
                                <li class="drop"><a href="shop.html">Shop</a>
                                    <ul class="dropdown mega_dropdown">
                                        <!-- Start Single Mega MEnu -->
                                        <li><a class="mega__title" href="shop.html">shop layout</a>
                                            <ul class="mega__item">
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Single Mega MEnu -->
                                        <!-- Start Single Mega MEnu -->
                                        <li><a class="mega__title" href="shop.html">product details layout</a>
                                            <ul class="mega__item">
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                                <li><a href="#">demo page title</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Single Mega MEnu -->
                                        <!-- Start Single Mega MEnu -->
                                        <li>
                                            <ul class="mega__item">
                                                <li>
                                                    <div class="mega-item-img">
                                                        <a href="shop.html">
                                                            <img src="/assets/images/feature-img/3.png" alt="">
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- End Single Mega MEnu -->
                                    </ul>
                                </li>
                                <li class="drop"><a href="#">pages</a>
                                    <ul class="dropdown">
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="shop.html">shop</a></li>
                                        <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                        <li><a href="product-details-sticky-right.html">product details</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="team.html">team</a></li>
                                        <li><a href="login-register.html">login & register</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </nav>
                        <div class="mobile-menu clearfix visible-xs visible-sm">
                            <nav id="mobile_dropdown">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">portfolio</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-gutter-box-3.html">Boxed Gutter 3 Col</a></li>
                                            <li><a href="portfolio-gutter-full-wide-4.html">Wide Gutter 4 Col </a></li>
                                            <li><a href="portfolio-card-box-3.html">Card Gutter 3 Col </a></li>
                                            <li><a href="portfolio-masonry-3.html">Masonry Box 3 Col </a></li>
                                            <li><a href="portfolio-gutter-masonry-fullwide-4.html">Masonry Wide 4 Col </a></li>
                                            <li><a href="portfolio-gutter-box-3-carousel.html">carousel Gutter 3 Col </a></li>
                                            <li><a href="portfolio-justified-box-3.html">justified box 3 Col</a></li>
                                            <li><a href="single-portfolio-gallery.html">Portfolio Details </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">blog</a>
                                        <ul>
                                            <li><a href="blog.html">blog 3 column</a></li>
                                            <li><a href="blog-2-col-rightsidebar.html">2 col right siderbar</a></li>
                                            <li><a href="blog-details-left-sidebar.html"> blog details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                            <li><a href="product-details-sticky-right.html">product details</a></li>
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="team.html">team</a></li>
                                            <li><a href="login-register.html">login & register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- End MAinmenu Ares -->
                    <div class="col-md-2 col-sm-4 col-xs-3">
                        <ul class="menu-extra">
                            <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                            <li><a href="login-register.html"><span class="ti-user"></span></a></li>
                            <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                            <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu-area"></div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- End Header Style -->
    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12" >
                        <div class="search__inner">
                            <form action="#" method="get">
                                <input placeholder="Search here... " type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->
        <!-- Start Offset MEnu -->
        <div class="offsetmenu">
            <div class="offsetmenu__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="off__contact">
                    <div class="logo">
                        <a href="index.html">
                            <img src="/assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <ul class="sidebar__thumd">
                    <li><a href="#"><img src="/assets/images/sidebar-img/1.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/assets/images/sidebar-img/2.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/assets/images/sidebar-img/3.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/assets/images/sidebar-img/4.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/assets/images/sidebar-img/5.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/assets/images/sidebar-img/6.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/assets/images/sidebar-img/7.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/assets/images/sidebar-img/8.jpg" alt="sidebar images"></a></li>
                </ul>
                <div class="offset__widget">
                    <div class="offset__single">
                        <h4 class="offset__title">Language</h4>
                        <ul>
                            <li><a href="#"> Engish </a></li>
                            <li><a href="#"> French </a></li>
                            <li><a href="#"> German </a></li>
                        </ul>
                    </div>
                    <div class="offset__single">
                        <h4 class="offset__title">Currencies</h4>
                        <ul>
                            <li><a href="#"> USD : Dollar </a></li>
                            <li><a href="#"> EUR : Euro </a></li>
                            <li><a href="#"> POU : Pound </a></li>
                        </ul>
                    </div>
                </div>
                <div class="offset__sosial__share">
                    <h4 class="offset__title">Follow Us On Social</h4>
                    <ul class="off__soaial__link">
                        <li><a class="bg--twitter" href="#"  title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>

                        <li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                        <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                        <li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                        <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Offset MEnu -->
        <!-- Start Cart Panel -->
        <div class="shopping__cart">
            <div class="shopping__cart__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="shp__cart__wrap">
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="/assets/images/product/sm-img/1.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                            <span class="quantity">QTY: 1</span>
                            <span class="shp__price">$105.00</span>
                        </div>
                        <div class="remove__btn">
                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="/assets/images/product/sm-img/2.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html">Brone Candle</a></h2>
                            <span class="quantity">QTY: 1</span>
                            <span class="shp__price">$25.00</span>
                        </div>
                        <div class="remove__btn">
                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shoping__total">
                    <li class="subtotal">Subtotal:</li>
                    <li class="total__price">$130.00</li>
                </ul>
                <ul class="shopping__btn">
                    <li><a href="cart.html">View Cart</a></li>
                    <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
        </div>
        <!-- End Cart Panel -->
    </div>
    <!-- End Offset Wrapper -->
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/2.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Shop Sidebar</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.html">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">Shop Sidebar</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Our ShopSide Area -->
    <section class="htc__shop__sidebar bg__white ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                    <div class="htc__shop__left__sidebar">
                        <!-- Start Range -->
                        <div class="htc-grid-range">
                            <h4 class="section-title-4">FILTER BY PRICE</h4>
                            <div class="content-shopby">
                                <div class="price_filter s-filter clear">
                                    <form action="#" method="GET">
                                        <div id="slider-range"></div>
                                        <div class="slider__range--output">
                                            <div class="price__output--wrap">
                                                <div class="price--output">
                                                    <span>Price :</span><input type="text" id="amount" readonly>
                                                </div>
                                                <div class="price--filter">
                                                    <a href="#">Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Range -->
                        @foreach($filter as $title => $groupOption)
                        <!-- Start Product Cat -->
                            <div class="htc__shop__cat">
                                <h4 class="section-title-4">{{$groupOption->title}}</h4>
                                <ul class="sidebar__list">
                                    @foreach($groupOption->options as $option)
                                        <li>
                                            @if(request('filter'))
                                                @if(request('filter.'.$groupOption->slug))
                                                    @if(in_array($option->slug, request('filter.'.$groupOption->slug)))
                                                        <a href="{{ route('category', ['filter' => Arr::except(request('filter'), [$groupOption->slug.'.'.array_search($option->slug, request('filter.'.$groupOption->slug))])]) }}">{{$option->title}}
                                                    @else
                                                        <a href="{{ route('category', ['filter' => array_merge(request('filter'), [$groupOption->slug=>array_merge(request('filter.'.$groupOption->slug), [$option->slug])])]) }}">{{$option->title}}
                                                    @endif
                                                @else
                                                    <a href="{{ route('category', ['filter' => array_merge(request('filter'), [$groupOption->slug=>[$option->slug]])]) }}">{{$option->title}}
                                                @endif
                                            @else
{{--                                                    <a href="{{route('category', [$groupOption->slug => $option->slug])}}">{{$option->title}}--}}
                                                <a href="{{route('category', ['filter' => [$groupOption->slug => [$option->slug]]])}}">{{$option->title}}
                                            @endif

                                                <span>{{(int)$option->count}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        <!-- End Product Cat -->
                        @endforeach
                        <!-- Start Color Cat -->
                        <div class="htc__shop__cat">
                            <h4 class="section-title-4">CHOOSE COLOUR</h4>
                            <ul class="sidebar__list">
                                <li class="black"><a href="#"><i class="zmdi zmdi-circle"></i>Black<span>3</span></a></li>
                                <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i>Blue <span>4</span></a></li>
                                <li class="brown"><a href="#"><i class="zmdi zmdi-circle"></i>Brown <span>3</span></a></li>
                                <li class="red"><a href="#"><i class="zmdi zmdi-circle"></i>Red <span>6</span></a></li>
                                <li class="orange"><a href="#"><i class="zmdi zmdi-circle"></i>Orange <span>10</span></a></li>
                            </ul>
                        </div>
                        <!-- End Color Cat -->
                        <!-- Start Size Cat -->
                        <div class="htc__shop__cat">
                            <h4 class="section-title-4">PRODUCT CATEGORIES</h4>
                            <ul class="sidebar__list">
                                <li><a href="#">xl <span>3</span></a></li>
                                <li><a href="#">l <span>4</span></a></li>
                                <li><a href="#">lm <span>3</span></a></li>
                                <li><a href="#">ml <span>6</span></a></li>
                                <li><a href="#">m <span>10</span></a></li>
                                <li><a href="#">ml <span>3</span></a></li>
                            </ul>
                        </div>
                        <!-- End Size Cat -->
                        <!-- Start Tag Area -->
                        <div class="htc__shop__cat">
                            <h4 class="section-title-4">Tags</h4>
                            <ul class="htc__tags">
                                <li><a href="#">All</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Stationery</a></li>
                                <li><a href="#">Homelife</a></li>
                                <li><a href="#">Appliances</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Baby</a></li>
                                <li><a href="#">Beauty</a></li>
                            </ul>
                        </div>
                        <!-- End Tag Area -->
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 smt-30">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="producy__view__container">
                                <!-- Start Short Form -->
                                <div class="product__list__option">
                                    <div class="order-single-btn">
                                        <select class="select-color selectpicker">
                                            <option>Sort by newness</option>
                                            <option>Match</option>
                                            <option>Updated</option>
                                            <option>Title</option>
                                            <option>Category</option>
                                            <option>Rating</option>
                                        </select>
                                    </div>
                                    <div class="shp__pro__show">
                                        <span>Showing 1 - 4 of 25 results</span>
                                    </div>
                                </div>
                                <!-- End Short Form -->
                                <!-- Start List And Grid View -->
                                <ul class="view__mode" role="tablist">
                                    <li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                    <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                                </ul>
                                <!-- End List And Grid View -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="shop__grid__view__wrap another-product-style">
                            <!-- Start Single View -->
                            <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                @foreach($products->where('active', 1) as $product)
                                <!-- Start Single Product -->
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                    <div class="product">
                                        <div class="product__inner">
                                            <div class="pro__thumb">
                                                <a href="#">
                                                    <img src="/assets/images/product/1.png" alt="product images">
                                                </a>
                                            </div>
                                            <div class="product__hover__info">
                                                <ul class="product__action">
                                                    <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                    <li><a title="Add To Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                    <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__details">
                                            <h2><a href="product-details.html">{{ $product->title }}</a></h2>
                                            <ul class="product__price">
                                                <li class="old__price">$16.00</li>
                                                <li class="new__price">$10.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                                @endforeach
                            </div>
                            <!-- End Single View -->


                            <!-- Start Single View -->
                            <div role="tabpanel" id="list-view" class="single-grid-view tab-pane fade clearfix">
                                <!-- Start List Content-->
                                <div class="single__list__content clearfix">
                                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                                        <div class="list__thumb">
                                            <a href="product-details.html">
                                                <img src="/assets/images/product/1.png" alt="list images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
                                        <div class="list__details__inner">
                                            <h2><a href="product-details.html">Ninja Silhouette</a></h2>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet…</p>
                                            <span class="product__price">$15.00</span>
                                            <div class="shop__btn">
                                                <a class="htc__btn" href="cart.html"><span class="ti-shopping-cart"></span>Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End List Content-->
                                <!-- Start List Content-->
                                <div class="single__list__content clearfix">
                                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                                        <div class="list__thumb">
                                            <a href="product-details.html">
                                                <img src="/assets/images/product/2.png" alt="list images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
                                        <div class="list__details__inner">
                                            <h2><a href="product-details.html">Ninja Silhouette</a></h2>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet…</p>
                                            <span class="product__price">$15.00</span>
                                            <div class="shop__btn">
                                                <a class="htc__btn" href="cart.html"><span class="ti-shopping-cart"></span>Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End List Content-->
                                <!-- Start List Content-->
                                <div class="single__list__content clearfix">
                                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                                        <div class="list__thumb">
                                            <a href="product-details.html">
                                                <img src="/assets/images/product/3.png" alt="list images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
                                        <div class="list__details__inner">
                                            <h2><a href="product-details.html">Ninja Silhouette</a></h2>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet…</p>
                                            <span class="product__price">$15.00</span>
                                            <div class="shop__btn">
                                                <a class="htc__btn" href="cart.html"><span class="ti-shopping-cart"></span>Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End List Content-->
                                <!-- Start List Content-->
                                <div class="single__list__content clearfix">
                                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                                        <div class="list__thumb">
                                            <a href="product-details.html">
                                                <img src="/assets/images/product/4.png" alt="list images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
                                        <div class="list__details__inner">
                                            <h2><a href="product-details.html">Ninja Silhouette</a></h2>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet…</p>
                                            <span class="product__price">$15.00</span>
                                            <div class="shop__btn">
                                                <a class="htc__btn" href="cart.html"><span class="ti-shopping-cart"></span>Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End List Content-->
                                <!-- Start List Content-->
                                <div class="single__list__content clearfix">
                                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                                        <div class="list__thumb">
                                            <a href="product-details.html">
                                                <img src="/assets/images/product/5.png" alt="list images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
                                        <div class="list__details__inner">
                                            <h2><a href="product-details.html">Ninja Silhouette</a></h2>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet…</p>
                                            <span class="product__price">$15.00</span>
                                            <div class="shop__btn">
                                                <a class="htc__btn" href="cart.html"><span class="ti-shopping-cart"></span>Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End List Content-->
                                <!-- Start List Content-->
                                <div class="single__list__content clearfix">
                                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                                        <div class="list__thumb">
                                            <a href="product-details.html">
                                                <img src="/assets/images/product/6.png" alt="list images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
                                        <div class="list__details__inner">
                                            <h2><a href="product-details.html">Ninja Silhouette</a></h2>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet…</p>
                                            <span class="product__price">$15.00</span>
                                            <div class="shop__btn">
                                                <a class="htc__btn" href="cart.html"><span class="ti-shopping-cart"></span>Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End List Content-->
                            </div>
                            <!-- End Single View -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our ShopSide Area -->
    <!-- Start Footer Area -->
    <footer class="htc__foooter__area gray-bg">
        <div class="container">
            <div class="row">
                <div class="footer__container clearfix">
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="ft__widget">
                            <div class="ft__logo">
                                <a href="index.html">
                                    <img src="/assets/images/logo/logo.png" alt="footer logo">
                                </a>
                            </div>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="address-icon">
                                            <i class="zmdi zmdi-pin"></i>
                                        </div>
                                        <div class="address-text">
                                            <p>194 Main Rd T, FS Rayed <br> VIC 3057, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                        <div class="address-text">
                                            <a href="#"> info@example.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <i class="zmdi zmdi-phone-in-talk"></i>
                                        </div>
                                        <div class="address-text">
                                            <p>+012 345 678 102 </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="social__icon">
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Categories</h2>
                            <ul class="footer-categories">
                                <li><a href="shop-sidebar.html">Men</a></li>
                                <li><a href="shop-sidebar.html">Women</a></li>
                                <li><a href="shop-sidebar.html">Accessories</a></li>
                                <li><a href="shop-sidebar.html">Shoes</a></li>
                                <li><a href="shop-sidebar.html">Dress</a></li>
                                <li><a href="shop-sidebar.html">Denim</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Infomation</h2>
                            <ul class="footer-categories">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Returns & Exchanges</a></li>
                                <li><a href="#">Shipping & Delivery</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-3 col-lg-offset-1 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Newsletter</h2>
                            <div class="newsletter__form">
                                <p>Subscribe to our newsletter and get 10% off your first purchase .</p>
                                <div class="input__box">
                                    <div id="mc_embed_signup">
                                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                                <div class="news__input">
                                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                                                </div>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <div class="clearfix subscribe__btn"><input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="bst__btn btn--white__color">

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                </div>
            </div>
            <!-- Start Copyright Area -->
            <div class="htc__copyright__area">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="copyright__inner">
                            <div class="copyright">
                                <p>© 2017 <a href="#">your website name</a>
                                    All Right Reserved.</p>
                            </div>
                            <ul class="footer__menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop.html">Product</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </div>
    </footer>
    <!-- End Footer Area -->
</div>
@endsection
<!-- Body main wrapper end -->

@section('quickview-product')

    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="/assets/images/product/big-img/1.jpg">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">$17.20</span>
                                        <span class="old-price">$45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Red" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->

@endsection