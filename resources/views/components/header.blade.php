
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
                </div>
            </div>
        </div>
    </div>
    <!-- Header middle -->
    <div class="container-fluid header__middle-box">
        <div class="container pb-2">
            <div class="header__middle-list-menu row">
                <!-- icon -->
                <div class="col-md-2 p-0">
                    <a href="index.php">
                        <img src="img/D4T.png" alt="Đ4T icon" class="icon float-right">
                    </a>
                </div>
                <!-- Search -->
                <div class="col-md-9 search-box__list-menu">
                    <div class="header-with-search__search-section">
                        <div class="search-box bg-white text-dark d-flex flex-row">
                            <div class="w-100">
                                <form active="" method="post"
                                      class="form-search w-100 d-flex align-items-center overflow-hidden">
                                    <input maxlength="128" placeholder="Hàng Chính Hãng - Giảm Giá Trăm Tỷ" value=""
                                           class="w-100">
                                </form>
                            </div>
                            <button type="button" class="border-0 btn btn-search d-flex justify-content-center align-items-center">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                    <path fill-rule="evenodd"
                                          d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                </svg>
                            </button>
                        </div>
                        <ul class="header__menu d-flex flex-row">
                                @if(isset($categories))
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="#" class="mobile" title="{{ $category->c_name }}">
                                            {{ $category->c_name }}
                                        </a>
                                    </li>
                                    @endforeach
                                @endif

                                <li>
                                    <a href="https://www.thegioididong.com/sim-so-dep" class="sim" title="Sim, Thẻ cào">
                                        Sim, Thẻ cào
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.thegioididong.com/tien-ich/thanh-toan-tra-gop" class="utility" title="Trả góp, điện nước">
                                        Trả góp, điện nước
                                    </a>
                                </li>
                        </ul>
                    </div>
                </div>
                <!-- Cart -->
                <div class="col-md-1 cart__logo mt-3 d-flex justify-content-center">
                    <a href="cart.php">
                            <span class="cart__desc">
                                0
                            </span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                             class="bi bi-cart3 text-white header__cart" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Footer -->

