
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="img/4T1D_icon.png">
    <meta property="og:description" content="">
    <meta property="og:title" content="">
    <link rel="shortcut icon" type="image/png" href="img/iconico.png">
    <title>Mua Hàng Trực Tuyến Và Uy Tín Cùng </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/header.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/footer.css")}}">
    <link rel="stylesheet" href="{{asset("css/font.css")}}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="js/swiper-bundle.js"></script>

</head>
<body id="body">
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
<footer onkeyup="footer_click()">
    <div class="container-fuid">
        <!-- footer top -->
        <div class="container">
            <div class="footer-box__top row border-bottom justify-content-center">
                <div class="footer-top__items col-lg-2 col-md-4 col-6">
                    <h2 class="footer__title">chăm sóc khách hàng</h2>
                    <ul class="list_menu d-flex flex-column">
                        <li><a href="">Trung Tâm Trợ Giúp</a></li>
                        <li><a href="">Đ4T Blog</a></li>
                        <li><a href="">Đ4T Mall</a></li>
                        <li><a href="">Hướng Dẫn Mua Hàng</a></li>
                        <li><a href="">Hướng Dẫn Bán Hàng</a></li>
                        <li><a href="">Thanh Toán</a></li>
                        <li><a href="">Đ4T Xu</a></li>
                        <li><a href="">Vận Chuyển</a></li>
                        <li><a href="">Trả Hàng & Hoàn Tiền</a></li>
                        <li><a href="">Chăm Sóc Khách Hàng</a></li>
                        <li><a href="">Chính Sách Bảo Hành</a></li>
                    </ul>
                </div>
                <div class="footer-top__items col-lg-3 col-md-4 col-6">
                    <h2 class="footer__title">Về Đ4T</h2>
                    <ul class="list_menu d-flex flex-column">
                        <li><a href="">Giới Thiệu Về Đ4T Việt Nam</a></li>
                        <li><a href="">Tuyển Dụng</a></li>
                        <li><a href="">Điều Khoản Đ4T</a></li>
                        <li><a href="">Chính Sách Bảo Mật</a></li>
                        <li><a href="">Chính Hãng</a></li>
                        <li><a href="">Kênh Người Bán</a></li>
                        <li><a href="">Flash Sales</a></li>
                        <li><a href="">Chương Trình Tiếp Thị Liên Kết Đ4T</a></li>
                        <li><a href="">Liên Hệ Với Truyền Thông</a></li>
                    </ul>
                </div>
                <div class="footer-top__items col-lg-3 col-md-4 col-6">
                    <!-- THANH TOÁN -->
                    <h2 class="footer__title">THANH TOÁN</h2>
                    <ul class="list_menu-pay grid-3">
                        <li>
                            <div class="pay__icon" style="background-position: 71.37037% 30.967741935483872%;"></div>
                        </li>
                        <li>
                            <div class="pay__icon" style="background-position: 45.01424501424501% 6.451612903225806%;"></div>
                        </li>
                        <li>
                            <div class="pay__icon" style="background-position: 37.60683760683761% 36.64596273291925%;"></div>
                        </li>
                        <li>
                            <div class="pay__icon" style="background-position: 11.315417% 6.172839506172839%;"></div>
                        </li>
                        <li>
                            <div class="pay__icon" style="background-position: 60.264498% 55.483870967741936%;"></div>
                        </li>
                        <li>
                            <div class="pay__icon" style="background-position: 70.65812% 62.58064516129032%;"></div>
                        </li>
                        <li>
                            <div class="pay__icon" style="background-position: 0% 7.575758%;background-size: 1049.5% 344.846154%;">
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="footer-top__items col-lg-2 col-md-4 col-6">
                    <h2 class="footer__title">THEO DÕI CHÚNG TÔI TRÊN</h2>
                    <ul class="list_menu-about d-flex flex-column">
                        <li><a href="" class="fab">Facebook</a></li>
                        <li><a href="" class="fab">Instagram</a></li>
                        <li><a href="" class="fab">Twitter</a></li>
                        <li><a href="" class="fab">Youtube</a></li>
                    </ul>
                </div>
                <div class="footer-top__items col-lg-2 col-md-4 col-6">
                    <h2 class="footer__title">TẢI ỨNG DỤNG Đ4T NGAY THÔI</h2>
                    <div class="dowload-box d-flex">
              <span class="dowload-box__img">
                <img
                    src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/f184c0b68a2d385feb5d70a76396230b.png"
                    alt="QR code" class="border">
              </span>
                        <span class="dowload-box__link">
                <ul>
                  <li>
                    <img
                        src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/759416b55e2bd69ecc360ee2faab7ad0.png"
                        alt="Apple store" class="ml-3">
                  </li>
                  <li>
                    <img
                        src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/2679f513b5f9e235adf2c6c288617e7b.png"
                        alt="Google store" class="ml-3">
                  </li>
                  <li></li>
                </ul>
              </span>
                    </div>
                </div>
                <div class="footer-top__items col-lg-3 col-md-4 col-6">
                    <!--  -->
                    <h2 class="footer__title">ĐƠN VỊ VẬN CHUYỂN</h2>
                    <ul class="list_menu-pay grid-3">
                        <!-- <li>
                            <div class="pay__icon" style="background-size: 699%;background-position: 60.526315789473685% 1335421%;">
                            </div>
                          </li>
                          <li>
                            <div class="pay__icon" style="background-position: 19.51567% 59.445783%;
                background-size: 1594%;"></div>
                          </li> -->
                        <li>
                            <div class="pay__icon" style="background-position: 7.831909% 68.806452%"></div>
                        </li>
                        <li>
                            <div class="pay__icon"
                                 style="background-position: 59.686609686609685% 28.91566265060241%;background-size: 1300%;"></div>
                        </li>
                        <li>
                            <div class="pay__icon" style="background-position: 96.868946% 50.770701%;"></div>
                        </li>
                        <li>
                            <div class="pay__icon" style="background-position: 76.358974% 1.952381%;"></div>
                        </li>
                        <li>
                            <div class="pay__icon"
                                 style="background-size: 564.9253731343283% 434.4827586206897%;background-position: 26.003210272873194% 6.451612903225806%;">
                            </div>
                        </li>
                        <li>
                            <div class="pay__icon"
                                 style="background-size: 750.561797752809% 262.85714285714283%;background-position: 84.4311377245509% 100%;">
                            </div>
                        </li>
                        <li>
                            <div class="pay__icon" style="background-position: 48.63701578192253% 37.341772%;"></div>
                        </li>
                        <li>
                            <div class="pay__icon" style="background-position: 10.218978102189782% 33.76623376623377%;"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- footer middler -->
        <div class="contianer-fluid">
            <div class="footer__middler container d-flex justify-content-between pt-5 pb-5">
                <small>© 2020 Shopee. Tất cả các quyền được bảo lưu</small>
                <span>
            Quốc gia & Khu vực:
            <span>Singapore</span>
            <span>Indonesia</span>
            <span>Đài Loan</span>
            <span>Thái Lan</span>
            <span>Malaysia</span>
            <span>Việt Nam</span>
            <span>Philippines</span>
            <span>Brazil</span>
          </span>
            </div>
        </div>
        <!-- footer bottom -->
        <div class="container-fluid" style="background: #F5F5F5">
            <div class="container-fluid">
                <!-- footer bottom__header -->
                <div class="footer-bottom__header row pt-3">
                    <div class="border-right col-lg-3 col-md-3"><a href="#">CHÍNH SÁCH BẢO MẬT</a></div>
                    <div class="border-right col-lg-3 col-md-3"><a href="#">QUY CHẾ HOẠT ĐỘNG</a></div>
                    <div class="border-right col-lg-3 col-md-3"><a href="#">CHÍNH SÁCH VẬN CHUYỂN</a></div>
                    <div class="border-0 col-lg-3 col-md-3"><a href="#" class="border-0">RETURN AND REFUND POLICY</a></div>
                </div>
                <!-- footer bototm__body -->
                <div class="footer-bottom__body mt-5 d-flex justify-content-center">
                    <a href="#">
                        <div class="pay__icon"></div>
                    </a>
                    <a href="#">
                        <div class="pay__icon"></div>
                    </a>
                    <a href="#">
                        <div class="pay__icon"
                             style="background-size: 1577.0833333333333% 383.3333333333333%;background-position: 80.25387870239774% 33.8235294117647%;">
                        </div>
                    </a>
                </div>
                <p class="text-center" style="font-size: .75rem; margin-top: 10px;">Công ty TNHH Đ4T</p>
                <address class="text-center" style="font-size: .75rem; line-height: 1.5;">
                    <p class="text-center addr">Địa chỉ: Tầng 28, Tòa nhà trung tâm Lotte Hà Nội, 54 Liễu Giai, phường Cống Vị,
                        Quận Ba Đình, Hà Nội. Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.Đ4T.vn</p>
                    <p class="text-center addr">Mã số doanh nghiệp: 0123455679 do Sở Kế hoạch & Đầu tư TP Hà Nội cấp lần đầu ngày
                        16/07/2020</p>
                    <p class="text-center addr">© 2020- Bản quyền thuộc về Công ty TNHH Đ4T</p>
                </address>
            </div>

        </div>
    </div>

    <!-- End Menu trôi nổi -->
</footer>
<!-- bs js -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<!-- end bs js -->
<!-- // Banner  -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        // init: false,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 50,
            },
        }
    });
</script>
<!-- // End banner -->
<script>
    var i = 0;
    //show_menu()
    function show_menu() {
        if (i == 0) {
            document.getElementById("sub-menu").style.display = "block";

            i = 1;
        }
        else {
            document.getElementById("sub-menu").style.display = "none";
            i = 0;
        }
    }

    // function footer_click() {
    //     document.getElementById("toggle").style.height = "47px";
    // }
    function expand() {
        if (i == 0) {
            document.getElementById("toggle").style.height = "182px";
            document.getElementById("show").style.transform = "rotate(0.5turn)";

            i = 1;
        }
        else {
            document.getElementById("toggle").style.height = "47px";
            document.getElementById("show").style.transform = "rotate(0turn)";

            i = 0;
        }
    }
</script>
</body>

</html>
