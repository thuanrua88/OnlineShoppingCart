<<<<<<< HEAD
<header class="short-stor">
    <div class="container-fluid">
        <div class="row">
            <!-- logo start -->
            <div class="col-md-3 col-sm-12 text-center nopadding-right">
                <div class="top-logo">
                    <a href="/"><img src="{{ asset('img/logo.gif') }}" alt="" /></a>
=======

<header>
    <!-- header top -->
    <div class="container-fluid"
         style="background: rgba(33,151,250,1)">
        <div class="container">
            <div class="header__top row">
                <div class="col-md-3">
                    <div class="header__dowapp text-white">
                        Dowload Đ4T
                        <span style="margin: 0px 5px; font-weight: 100; color: white">|</span>
                        Connect
                        <span class="header__list-connect ml-1">
                          <span><a href="" class="fab"></a></span>
                          <span><a href="" class="fab"></a></span>
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- <h1 class="title__welcome">Chào mừng bạn đã đến với shop bán hàng Đ4T</h1> -->
                </div>
                <div class="col-md-3">
                    <div class="member-box float-right">
                        <a href="register.php">Đăng kí</a>
                        <span style="margin: 0px 5px; font-weight: 100; color: white">|</span>
                        <a href="login.php">Đăng nhập</a>
                    </div>
>>>>>>> 8361957b93fa73069a671f8df8015e42a1de3694
                </div>
            </div>
            <!-- logo end -->
            <!-- mainmenu area start -->
            <div class="col-md-6 text-center">
                <div class="mainmenu">
                    <nav>
                        <ul>
                            <li class="expand"><a href="">Trang chủ</a></li>
                            <li class="expand">
                                <a href="">Sản phẩm</a>
                                <ul class="restrain sub-menu">
                                @if(isset($categories))
                                    @foreach($categories as $cate)
                                            <li><a href="{{ route('get.list.product',[$cate->c_slug,$cate->id]) }}">{{ $cate->c_name }}</a></li>
                                    @endforeach
                                @endif
                                </ul>
                            </li>
                            <li class="expand"><a href="">Tin tức</a></li>
                            <li class="expand"><a href="">Giới thiệu</a></li>
                            <li class="expand"><a href="{{ route('get.contact') }}">Liên hệ</a></li>

{{--                            <li class="expand"><a href="#">Pages</a>--}}

{{--                            </li>--}}
                            <li class="expand"><a href="about-us.html">About</a></li>
                            <li class="expand"><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- mobile menu start -->
                <div class="row">
                    <div class="col-sm-12 mobile-menu-area">
                        <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                            <span class="mobile-menu-title">Menu</span>
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li>
                                            <li><a href="index-4.html">Home 4</a></li>
                                            <li><a href="index-5.html">Home 5</a></li>
                                            <li><a href="index-6.html">Home 6</a></li>
                                            <li><a href="index-7.html">Home 7</a></li>
                                            <li><a href="index-8.html">Home 8</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-grid.html">Man</a>
                                        <ul>
                                            <li><a href="shop-grid.html">Dresses</a>
                                                <ul>
                                                    <li><a href="shop-grid.html">Coctail</a></li>
                                                    <li><a href="shop-grid.html">Day</a></li>
                                                    <li><a href="shop-grid.html">Evening </a></li>
                                                    <li><a href="shop-grid.html">Sports</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="mega-menu-title" href="shop-grid.html"> Handbags </a>
                                                <ul>
                                                    <li><a href="shop-grid.html">Blazers</a></li>
                                                    <li><a href="shop-grid.html">Table</a></li>
                                                    <li><a href="shop-grid.html">Coats</a></li>
                                                    <li><a href="shop-grid.html">Kids</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="mega-menu-title" href="shop-grid.html"> Clothing </a>
                                                <ul>
                                                    <li><a href="shop-grid.html">T-Shirt</a></li>
                                                    <li><a href="shop-grid.html">Coats</a></li>
                                                    <li><a href="shop-grid.html">Jackets</a></li>
                                                    <li><a href="shop-grid.html">Jeans</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-list.html">Women</a>
                                        <ul>
                                            <li><a href="shop-grid.html">Rings</a>
                                                <ul>
                                                    <li><a href="shop-grid.html">Coats & Jackets</a></li>
                                                    <li><a href="shop-grid.html">Blazers</a></li>
                                                    <li><a href="shop-grid.html">Jackets</a></li>
                                                    <li><a href="shop-grid.html">Rincoats</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-grid.html">Dresses</a>
                                                <ul>
                                                    <li><a href="shop-grid.html">Ankle Boots</a></li>
                                                    <li><a href="shop-grid.html">Footwear</a></li>
                                                    <li><a href="shop-grid.html">Clog Sandals</a></li>
                                                    <li><a href="shop-grid.html">Combat Boots</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-grid.html">Accessories</a>
                                                <ul>
                                                    <li><a href="shop-grid.html">Bootees bags</a></li>
                                                    <li><a href="shop-grid.html">Blazers</a></li>
                                                    <li><a href="shop-grid.html">Jackets</a></li>
                                                    <li><a href="shop-grid.html">Jackets</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-grid.html">Top</a>
                                                <ul>
                                                    <li><a href="shop-grid.html">Briefs</a></li>
                                                    <li><a href="shop-grid.html">Camis</a></li>
                                                    <li><a href="shop-grid.html">Nigntwears</a></li>
                                                    <li><a href="shop-grid.html">Shapewears</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-grid.html">Shop</a>
                                        <ul>
                                            <li><a href="shop-list.html">Shop Pages</a>
                                                <ul>
                                                    <li><a href="shop-list.html">List View </a></li>
                                                    <li><a href="shop-grid.html">Grid View</a></li>
                                                    <li><a href="login.html">My Account</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="cart.html">Cart </a></li>
                                                    <li><a href="checkout.html">Checkout </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="product-details.html">Product Types</a>
                                                <ul>
                                                    <li><a href="product-details.html">Simple Product</a></li>
                                                    <li><a href="product-details.html">Variables Product</a></li>
                                                    <li><a href="product-details.html">Grouped Product</a></li>
                                                    <li><a href="product-details.html">Downloadable</a></li>
                                                    <li><a href="product-details.html">Virtual Product</a></li>
                                                    <li><a href="product-details.html">External Product</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="cart.html">Shopping cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- mobile menu end -->
            </div>
<<<<<<< HEAD
            <!-- mainmenu area end -->
            <!-- top details area start -->
            <div class="col-md-3 col-sm-12 nopadding-left">
                <div class="top-detail">
                    <div class="disflow">
                        <div class="circle-shopping expand">
                            <div class="shopping-carts text-right">
                                <div class="cart-toggler">
                                    <a href="{{ route('get.list.shopping.cart') }}"><i class="icon-bag"></i></a>
                                    <a href="{{ route('get.list.shopping.cart') }}"><span class="cart-quantity">{{Cart :: getTotalQuantity() }}</span></a>
                                </div>
{{--                                <div class="restrain small-cart-content">--}}
{{--                                    <ul class="cart-list">--}}
{{--                                        <li>--}}
{{--                                            <a class="sm-cart-product" href="product-details.html">--}}
{{--                                                <img src="{{ asset('img/products/sm-products/cart1.jpg') }}" alt="">--}}
{{--                                            </a>--}}
{{--                                            <div class="small-cart-detail">--}}
{{--                                                <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>--}}
{{--                                                <a href="#" class="edit-btn"><img src="{{ asset('img/btn_edit.gif') }}" alt="Edit Button" /></a>--}}
{{--                                                <a class="small-cart-name" href="product-details.html">Voluptas nulla</a>--}}
{{--                                                <span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a class="sm-cart-product" href="product-details.html">--}}
{{--                                                <img src="{{ asset('img/products/sm-products/cart2.jpg') }}" alt="">--}}
{{--                                            </a>--}}
{{--                                            <div class="small-cart-detail">--}}
{{--                                                <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>--}}
{{--                                                <a href="#" class="edit-btn"><img src="{{ asset('img/btn_edit.gif') }}" alt="Edit Button" /></a>--}}
{{--                                                <a class="small-cart-name" href="product-details.html">Donec ac tempus</a>--}}
{{--                                                <span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <p class="total">Subtotal: <span class="amount">$155.00</span></p>--}}
{{--                                    <p class="buttons">--}}
{{--                                        <a href="checkout.html" class="button">Checkout</a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <!-- addcart top start -->
                    <!-- search divition start -->
                    <div class="disflow">
                        <div class="header-search expand">
                            <div class="search-icon fa fa-search"></div>
                            <div class="product-search restrain">
                                <div class="container nopadding-right">
                                    <form action="index.html" id="searchform" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" maxlength="128" placeholder="Search product...">
                                            <span class="input-group-btn">
														<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
													</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- search divition end -->
                    <div class="disflow">
                        <div class="expand dropps-menu">
                            <a href="#"><i class="fa fa-align-right"></i></a>
                            <ul class="restrain language" style="width: 200px;text-align: left;">
                                @if(Auth::check())
                                <li><a href="login.html">Quản lý</a></li>
                                <li><a href="wishlist.html">Sản phẩm yêu thích</a></li>
                                <li><a href="cart.html">Giỏ hàng</a></li>
                                <li><a href="{{ route('get.logout.user') }}">Thoát</a></li>
                                @else
                                    <li><a href="{{ route('get.register') }}">Đăng ký</a></li>
                                    <li><a href="{{ route('get.login') }}">Đăng nhập</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top details area end -->
        </div>
    </div>
</header>
=======
        </div>
    </div>
</header>
<!-- Footer -->

>>>>>>> 8361957b93fa73069a671f8df8015e42a1de3694
