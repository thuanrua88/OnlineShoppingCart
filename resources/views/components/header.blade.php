<header>
    <div class="wrap-main /">
        <a class="logo " title="Về trang chủ Thegioididong.com" href="https://www.thegioididong.com/" aria-label="logo">
            <i class="icontgdd-logo"></i>
        </a>
        <form id="search-site" action="https://www.thegioididong.com/tim-kiem" method="get" autocomplete="off">
            <input class="topinput" id="search-keyword" name="key" type="text" aria-label="Bạn tìm gì..." placeholder="Bạn tìm gì..." autocomplete="off" onkeyup="SuggestSearch(event,this, 0);" maxlength="50">
            <button class="btntop" type="submit" aria-label="tìm kiếm"><i class="icontgdd-topsearch"></i></button>
        </form>
        <div class="menu-info">
            <a href="https://www.thegioididong.com/gio-hang" class="a1"><i class="icontgdd-cart"></i><span>Giỏ hàng</span></a>
            <a href="https://www.thegioididong.com/lich-su-mua-hang" class="a2">LỊCH SỬ MUA HÀNG</a>
            <div>
                <a href="https://www.thegioididong.com/tin-tuc">24h CÔNG NGHỆ</a>
                <a href="https://www.thegioididong.com/hoi-dap">HỎI ĐÁP</a>
                <a href="https://www.thegioididong.com/game-app">GAME APP</a>
            </div>
        </div>

    </div>
    <div class="clr"></div>
    <div class="wrap-nav">
        <nav>
            @if(isset($categories))
                @foreach($categories as $category)
                    <a href="#" class="mobile" title="{{ $category->c_name }}">
                        <i class="icontgdd-mobile"></i><b>{{ $category->c_name }}</b>
                    </a>
                @endforeach
                @endif

            <a href="https://www.thegioididong.com/sim-so-dep" class="sim" title="Sim, Thẻ cào">
                Sim, Thẻ cào
            </a>
            <a href="https://www.thegioididong.com/tien-ich/thanh-toan-tra-gop" class="utility" title="Trả góp, điện nước">
                Trả góp, điện nước
            </a>
        </nav>
        <style>
            [class^="icontgdd-"], [class*="icontgdd-"], [class^="iconmobile-"], [class*="iconmobile-"] {
                background-image: url(/Content/desktop/images/V5/icondesktop20200728@1x.png?v=2);
            }

            @media all and (-webkit-min-device-pixel-ratio: 1.5) {
                [class^="icontgdd-"], [class*="icontgdd-"], [class^="iconmobile-"], [class*="iconmobile-"] {
                    background-image: url(/Content/desktop/images/V5/icondesktop20200728@2x.png?v=2);
                    background-size: 500px 115px;
                }
            }

            .icontgdd-cart {
                width: 20px;
                height: 18px;
                background-position: -144px -91px;
            }

            .icontgdd-mobile {
                width: 13px;
                height: 20px;
                background-position: 0 -91px;
            }

            .icontgdd-laptop {
                width: 24px;
                height: 20px;
                background-position: -16px -91px;
            }

            .icontgdd-tablet {
                width: 16px;
                height: 20px;
                background-position: -43px -91px;
            }

            .icontgdd-phukien {
                width: 22px;
                height: 20px;
                background-position: -60px -91px;
            }

            .icontgdd-watch {
                width: 14px;
                height: 20px;
                background-position: -83px -91px;
            }

            .icontgdd-fashionwatch {
                width: 14px;
                height: 20px;
                background-position: -102px -91px;
            }

            .icontgdd-pc {
                width: 23px;
                height: 20px;
                background-position: -118px -91px;
            }

            section, .home-menu section {
                margin-top: 80px;
            }

            .compare-title {
                margin-top: 100px;
            }

            header {
                background-color: #000;
                height: 80px;
            }

            header .wrap-main {
                height: 40px;
            }

            header #search-site {
                height: 30px;
                margin-top: 5px;
                width: 200px;
            }

            header #search-site .topinput {
                height: 24px;
            }

            header #search-site .btntop {
                height: 30px;
                width: 30px;
            }

            header .wrap-suggestion {
                top: 35px;
            }

            header .logo {
                padding: 6px 0 4px 5px;
            }

            header .menu-info {
                width: 810px;
                float: right;
            }

            header .menu-info > * {
                display: inline-block;
                vertical-align: middle;
                color: #fff;
                font-size: 12px;
            }

            header .menu-info > a.a1 {
                width: 97px;
                border: 1px solid #8F8F8F;
                border-radius: 4px;
                height: 30px;
                text-align: center;
                line-height: 30px;
                margin: 4px 0;
            }

            header .menu-info > a.a1 > * {
                display: inline-block;
                vertical-align: middle;
            }

            header .menu-info > a.a1 > i {
                line-height: 18px;
                text-align: center;
                margin-right: 5px;
                text-indent: -9999px;
            }

            header .menu-info > a.a1.active > i {
                background-color: #FF0000;
                border-radius: 50%;
                font-size: 11px;
                font-style: normal;
                font-weight: bold;
                text-indent: 0;
                background-image: none;
            }

            header .menu-info > a.a2 {
                padding: 0 10px;
                line-height: 1.2;
            }

            header .menu-info > a.a3 {
                text-transform: uppercase;
                color: #FFE66B;
            }

            header .menu-info > a.liveevent {
                float: none;
                color: #FFE66B;
                max-width: 180px;
                border-left: 1px solid #232323;
                position: relative;
                padding: 0 0 0 40px;
                margin-bottom: 0;
                margin-left: 0;
            }

            header .menu-info > a.liveevent .text {
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                height: 40px;
                line-height: 40px;
                display: block;
                text-decoration: none;
                color: #FFE66B;
            }

            header .menu-info > a.liveevent:hover .text {
                color: #FFE66B;
            }

            header .menu-info > a.liveevent #dot {
                background-color: #FFE66B;
                left: 15px;
            }

            header .menu-info > a.liveevent #dot .ping {
                border-color: #FFE66B;
                background-color: rgba(255,230,107,.2);
            }

            header .menu-info > div {
                float: right;
            }

            header .menu-info > div > a {
                padding: 0 20px;
                border-left: 1px solid #232323;
                color: #fff;
                height: 40px;
                line-height: 40px;
                float: left;
            }

            header .menu-info > div > a:hover {
                background-color: #fff;
                color: #333;
            }

            header .wrap-nav {
                background-color: #FED101;
                height: 40px;
                overflow: hidden;
            }

            header .wrap-nav > nav {
                max-width: 1200px;
                margin: auto;
                min-width: 1024px;
                width: 100%;
            }

            header .wrap-nav > nav > a {
                padding: 0 12px;
                display: table-cell;
                vertical-align: middle;
                height: 40px;
                white-space: nowrap;
                color: #000;
                text-transform: none;
                font-size: 14px;
            }

            header .wrap-nav > nav > a > * {
                display: inline-block;
                vertical-align: middle;
            }

            header .wrap-nav > nav > a > i {
                margin: 0 5px 0 0;
            }

            header .wrap-nav > nav > a > b {
                font-weight: normal;
            }

            @media screen and (max-width:1220px) {
                header .wrap-main {
                    width: 100%;
                }

                header .menu-info {
                    width: calc(100% - 260px);
                }

                header .menu-info > a.a2 {
                    padding: 0 5px;
                }

                header .wrap-nav > nav > a {
                    padding: 0 12px;
                }

                header .wrap-nav > nav > a > i {
                    display: none;
                }

                header .menu-info > div > a {
                    padding: 0 13px;
                }
            }
        </style>
    </div>
</header>
