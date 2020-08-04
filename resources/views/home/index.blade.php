@extends('layouts.app')
@section('content')
    <aside class="container-fluid">
                <div class="container">
                    <div class="banner-box">
                        <div class="row">
                            <!-- banner box 1 -->
                            <div class="col-md-8">
                                <div class="banner__box-slide">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="https://scontent.fhan5-6.fna.fbcdn.net/v/t1.0-9/p960x960/116353676_2004079979727908_8184493341550115203_o.jpg?_nc_cat=107&_nc_sid=e3f864&_nc_ohc=aTqTqyuksdcAX9l5r_-&_nc_ht=scontent.fhan5-6.fna&_nc_tp=6&oh=7c7f7b5149ed74af0882be40a0424e68&oe=5F47DE8B" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://scontent.fhan5-6.fna.fbcdn.net/v/t1.0-9/p960x960/116353676_2004079979727908_8184493341550115203_o.jpg?_nc_cat=107&_nc_sid=e3f864&_nc_ohc=aTqTqyuksdcAX9l5r_-&_nc_ht=scontent.fhan5-6.fna&_nc_tp=6&oh=7c7f7b5149ed74af0882be40a0424e68&oe=5F47DE8B" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://scontent.fhan5-6.fna.fbcdn.net/v/t1.0-9/p960x960/116353676_2004079979727908_8184493341550115203_o.jpg?_nc_cat=107&_nc_sid=e3f864&_nc_ohc=aTqTqyuksdcAX9l5r_-&_nc_ht=scontent.fhan5-6.fna&_nc_tp=6&oh=7c7f7b5149ed74af0882be40a0424e68&oe=5F47DE8B" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex flex-column">
                                    <div class="bnnr__qq1">
                                        <a href="" class="w-100">
                                            <img src="https://scontent.fhan5-6.fna.fbcdn.net/v/t1.0-9/p960x960/116353676_2004079979727908_8184493341550115203_o.jpg?_nc_cat=107&_nc_sid=e3f864&_nc_ohc=aTqTqyuksdcAX9l5r_-&_nc_ht=scontent.fhan5-6.fna&_nc_tp=6&oh=7c7f7b5149ed74af0882be40a0424e68&oe=5F47DE8B" alt="banner advertisement" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="bnnr__qq2">
                                        <a href="" class="w-100">
                                            <img src="https://scontent.fhan5-6.fna.fbcdn.net/v/t1.0-9/p960x960/116353676_2004079979727908_8184493341550115203_o.jpg?_nc_cat=107&_nc_sid=e3f864&_nc_ohc=aTqTqyuksdcAX9l5r_-&_nc_ht=scontent.fhan5-6.fna&_nc_tp=6&oh=7c7f7b5149ed74af0882be40a0424e68&oe=5F47DE8B" alt="banner advertisement" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End banner box 1 -->
                            <!-- banner box 2 -->
                            <div class="col-md-12 border">
                                <!-- Swiper -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">Slide 1</div>
                                        <div class="swiper-slide">Slide 2</div>
                                        <div class="swiper-slide">Slide 3</div>
                                        <div class="swiper-slide">Slide 4</div>
                                        <div class="swiper-slide">Slide 5</div>
                                        <div class="swiper-slide">Slide 6</div>
                                        <div class="swiper-slide">Slide 7</div>
                                        <div class="swiper-slide">Slide 8</div>
                                        <div class="swiper-slide">Slide 9</div>
                                        <div class="swiper-slide">Slide 10</div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </aside>


    <aside class="homenews">
        <figure>
            <h2><a href="https://www.thegioididong.com/tin-tuc">Tin công nghệ</a></h2>
            <b></b>
        </figure>
        <ul>
            <li>
                <a href="https://www.thegioididong.com/tin-tuc/24h-cong-nghe-hot-26-7-oppo-a72-5g-ra-mat-voi-gia-6-2-trieu-1273951">
                    <img width="100" height="70" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/oppo_800x450-100x100.jpg" alt="🎧 Tuần qua công nghệ có gì HOT 1/8: Dòng OPPO Reno5 sẽ dùng chip hàng đầu, Galaxy Note 20 Ultra lộ điểm sức mạnh trên Geekbench">
                    <h3>🎧 Tuần qua công nghệ có gì HOT 1/8: Dòng OPPO Reno5 sẽ dùng chip hàng đầu, Galaxy Note 20 Ultra lộ điểm sức mạnh trên Geekbench</h3>
                    <span>16 phút trước</span>
                </a>
            </li>
        </ul>
        <div class="twobanner ">
            <a aria-label="slide" data-cate="0" data-place="1158" href="https://www.thegioididong.com/samsung" onclick="jQuery.ajax({ url: &#39;https://www.thegioididong.com/bannertracking?bid=37444&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/Sam-samsung-398-110-398x110.png" alt="SS" width="398" height="110"></a>
            <a aria-label="slide" data-cate="0" data-place="1158" href="https://www.thegioididong.com/apple#iphone" onclick="jQuery.ajax({ url: &#39;https://www.thegioididong.com/bannertracking?bid=37396&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/398-110-398x110-1.png" alt="iphone" width="398" height="110"></a>    </div>

    </aside>

    <div class="clr"></div>
    <div class="promotebanner b1">
        <a aria-label="slide" data-cate="0" data-place="1197" href="https://www.thegioididong.com/flashsale" onclick="jQuery.ajax({ url: &#39;https://www.thegioididong.com/bannertracking?bid=35988&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/1200-75-1200x75-4.png" alt="Mừng 8/3[break]Giảm Đến 38%" width="1200" height="75"></a>    </div>


        <div id="owl-promo" class="owl-carousel homepromo weekend owl-theme" style="opacity: 1; display: block;">
            <div class="owl-wrapper-outer">
                <div class="owl-wrapper" style="width: 10080px; left: 0px; display: block;">
                    <div class="owl-item" style="width: 240px;">
                        <div class="item" data-index="1">
                            <!--#region Ngành hàng chính -->
                            <a href="https://www.thegioididong.com/dtdd/samsung-galaxy-note-20" class="  large">
                                <img width="180" height="180" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/samsung-galaxy-note-20-600x600-1-400x400.jpg" alt="Samsung Galaxy Note Mới 1">
                                <h3>Samsung Galaxy Note Mới 1</h3>
                                <h6 class="textkm">Hàng sắp về</h6>
                                <div class="price"><strong>Dự kiến: 24.990.000₫</strong></div>

                                <div class="promo noimage">
                                    <p>Tặng bộ quà trị giá 4.5 triệu + Trả góp 0%, Phòng chờ thương gia</p>
                                </div>
                                <label class="preorder">Đặt trước đến 20/08</label>
                                <input class="spInfo" data-brand="Samsung" data-cat="Điện thoại" data-code="0131491002147" data-price="24990000" id="data218355" name="data218355" type="hidden" value="218355">
                            </a>
                            <!--#endregion -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-controls clickable">
                <div class="owl-buttons">
                    <div class="owl-prev">‹</div>
                    <div class="owl-next">›</div>
                </div>
            </div>
        </div>

    <div class="navigat cate42">
        <h2>Điện thoại nổi bật nhất</h2>
        <div class="viewallcat">
            <a href="">Apple iPhone</a>
        </div>
    </div>
    <!-- home products -->
    <ul class="homeproduct ">
        <li class="feature" data-id="211570">

            <a href="https://www.thegioididong.com/dtdd/samsung-galaxy-a51">
                <img width="600" height="275" data-original="https://cdn.tgdd.vn/Products/Images/42/211570/Feature/a51-spec-fix-720x333.jpg" class=" lazyloaded" alt="Samsung Galaxy A51 (6GB/128GB)" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/a51-spec-fix-720x333.jpg">
                <h3>Samsung Galaxy A51 (6GB/128GB)</h3>
                <div class="price">
                    <strong>7.190.000₫</strong>
                    <span>7.990.000₫</span>
                    <i>-10%</i>                </div>
                <label class="installment">Trả góp 0%</label>        <input class="spInfo" data-brand="Samsung" data-cat="Điện thoại" data-code="0131491001901" data-price="7990000" id="data211570" name="data211570" type="hidden" value="211570">
            </a>

        </li>
        <li data-id="213591">
            <!--#region Ngành hàng chính -->
            <a href="https://www.thegioididong.com/dtdd/oppo-reno3" class="  large">
                <img width="180" height="180" data-original="https://cdn.tgdd.vn/Products/Images/42/213591/oppo-reno3-trang-600x600-400x400.jpg" class=" lazyloaded" alt="OPPO Reno3" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/oppo-reno3-trang-600x600-400x400.jpg">
                <h3>OPPO Reno3</h3>
                <h6 class="textkm"></h6>
                <div class="price">
                    <strong>7.490.000₫</strong>
                    <span>8.990.000₫</span>
                    <i>-16%</i>                        </div>

                <label class="installment">Trả góp 0%</label>
                <input class="spInfo" data-brand="OPPO" data-cat="Điện thoại" data-code="0131491002018" data-price="8990000" id="data213591" name="data213591" type="hidden" value="213591">
            </a>
            <!--#endregion -->

        </li>
        <li data-id="210644">
            <!--#region Ngành hàng chính -->
            <a href="https://www.thegioididong.com/dtdd/iphone-11-128gb" class="  large">
                <img width="180" height="180" data-original="https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-green-400x400.jpg" class=" lazyloaded" alt="iPhone 11 128GB" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/iphone-11-128gb-green-400x400.jpg">
                <h3>iPhone 11 128GB</h3>
                <h6 class="textkm"></h6>
                <div class="price"><strong>23.990.000₫</strong></div>

                <div class="promo noimage">
                    <p>Giảm thêm <b>1.500.000₫</b></p>
                </div>
                <label class="installment">Trả góp 0%</label>
                <input class="spInfo" data-brand="iPhone (Apple)" data-cat="Điện thoại" data-code="0131491001787" data-price="23990000" id="data210644" name="data210644" type="hidden" value="210644">
            </a>
            <!--#endregion -->

        </li>
        <li data-id="214418">
            <!--#region Ngành hàng chính -->
            <a href="https://www.thegioididong.com/dtdd/xiaomi-redmi-note-8-pro-6gb-128gb" class="  large">
                <img width="180" height="180" data-original="https://cdn.tgdd.vn/Products/Images/42/214418/xiaomi-redmi-note-8-pro-6gb-128gb-white-400x400.jpg" class=" lazyloaded" alt="Xiaomi Redmi Note 8 Pro (6GB/128GB)" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/xiaomi-redmi-note-8-pro-6gb-128gb-white-400x400.jpg">
                <h3>Redmi Note 8 Pro (6GB/128GB)</h3>
                <h6 class="textkm"></h6>
                <div class="price">
                    <strong>5.690.000₫</strong>
                    <span>5.990.000₫</span>
                    <i>-5%</i>                        </div>

                <label class="installment">Trả góp 0%</label>
                <img data-original="https://cdn.tgdd.vn/ValueIcons/1/Label_01-02.png" class="icon-imgNew cate42 left lazyloaded" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/Label_01-02.png">
                <input class="spInfo" data-brand="Xiaomi" data-cat="Điện thoại" data-code="0131491001861" data-price="5990000" id="data214418" name="data214418" type="hidden" value="214418">
            </a>
            <!--#endregion -->

        </li>
        <li class="feature" data-id="220649">

            <a href="https://www.thegioididong.com/dtdd/oppo-a52">
                <img width="600" height="275" data-original="https://cdn.tgdd.vn/Products/Images/42/220649/Feature/oppo-a52-spec-zzz-720x333.jpg" class=" lazyloaded" alt="OPPO A52" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/oppo-a52-spec-zzz-720x333.jpg">
                <h3>OPPO A52</h3>
                <div class="price"><strong>5.990.000₫</strong></div>
                <label class="installment">Trả góp 0%</label>        <input class="spInfo" data-brand="OPPO" data-cat="Điện thoại" data-code="0131491002090" data-price="5990000" id="data220649" name="data220649" type="hidden" value="220649">
            </a>

        </li>
        <li data-id="219314">
            <!--#region Ngành hàng chính -->
            <a href="https://www.thegioididong.com/dtdd/samsung-galaxy-a21s" class="  large">
                <img width="180" height="180" data-original="https://cdn.tgdd.vn/Products/Images/42/219314/samsung-galaxy-a21s-055620-045659-400x400.jpg" class=" lazyloaded" alt="Samsung Galaxy A21s (6GB/64GB)" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/samsung-galaxy-a21s-055620-045659-400x400.jpg">
                <h3>Samsung Galaxy A21s (6GB/64GB)</h3>
                <h6 class="textkm"></h6>
                <div class="price">
                    <strong>4.890.000₫</strong>
                    <span>5.690.000₫</span>
                    <i>-14%</i>                        </div>

                <label class="installment">Trả góp 0%</label>
                <img data-original="https://cdn.tgdd.vn/ValueIcons/1/Label_01-05.png" class="icon-imgNew cate42 left lazyloaded" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/Label_01-05.png">
                <input class="spInfo" data-brand="Samsung" data-cat="Điện thoại" data-code="0131491002092" data-price="5690000" id="data219314" name="data219314" type="hidden" value="219314">
            </a>
            <!--#endregion -->

        </li>
        <li data-id="225176">
            <!--#region Ngành hàng chính -->
            <a href="https://www.thegioididong.com/dtdd/realme-c3-64gb" class="  large">
                <img width="180" height="180" data-original="https://cdn.tgdd.vn/Products/Images/42/225176/realme-c3-64gb-263620-023637-200x200.jpg" class=" lazyloaded" alt="Realme C3 (3GB/64GB)" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/realme-c3-64gb-263620-023637-200x200.jpg">
                <h3>Realme C3 (3GB/64GB)</h3>
                <h6 class="textkm"></h6>
                <div class="price">
                    <strong>3.390.000₫</strong>
                    <span>3.590.000₫</span>
                    <i>-5%</i>                        </div>

                <label class="installment">Trả góp 0%</label>
                <img data-original="https://cdn.tgdd.vn/ValueIcons/1/Label_01-05.png" class="icon-imgNew cate42 left lazyloaded" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/Label_01-05.png">
                <input class="spInfo" data-brand="Realme" data-cat="Điện thoại" data-code="0131491002106" data-price="3590000" id="data225176" name="data225176" type="hidden" value="225176">
            </a>
            <!--#endregion -->

        </li>
        <li data-id="217438">
            <!--#region Ngành hàng chính -->
            <a href="https://www.thegioididong.com/dtdd/vsmart-active-3-6gb" class="  large">
                <img width="180" height="180" data-original="https://cdn.tgdd.vn/Products/Images/42/217438/vsmart-active-3-6gb-emerald-green-600x600-400x400.jpg" class=" lazyloaded" alt="Vsmart Active 3 (6GB/64GB)" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/vsmart-active-3-6gb-emerald-green-600x600-400x400.jpg">
                <h3>Vsmart Active 3 (6GB/64GB)</h3>
                <h6 class="textkm"></h6>
                <div class="price">
                    <strong>3.490.000₫</strong>
                    <span>3.990.000₫</span>
                    <i>-12%</i>                        </div>

                <label class="installment">Trả góp 0%</label>
                <img data-original="https://cdn.tgdd.vn/ValueIcons/1/Label_01-02.png" class="icon-imgNew cate42 left lazyloaded" src="./Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng_files/Label_01-02.png">
                <input class="spInfo" data-brand="Vsmart" data-cat="Điện thoại" data-code="0131491001923" data-price="3990000" id="data217438" name="data217438" type="hidden" value="217438">
            </a>
            <!--#endregion -->

        </li>
    </ul>

    <div class="navigat acc1">
        <h2>Phụ kiện giá rẻ</h2>
        <div class="viewallcat">
            <a href="https://www.thegioididong.com/phu-kien" class="accessory">Xem tất cả <b>3.552</b> phụ kiện</a>
        </div>
    </div>
    <div class="owl-carousel homepromo acc owl-theme" style="opacity: 1; display: block;">
        <div class="owl-wrapper-outer">
            <div class="owl-wrapper" style="width: 7200px; left: 0px; display: block;">
                <div class="owl-item" style="width: 240px;">
                    <div class="item">
                        <!--#region Phụ kiện -->
                        <a href="https://www.thegioididong.com/sac-dtdd/polymer-10000-mah-type-c-esaver-pj-jp106s" class="  large">
                            <img width="180" height="180" data-original="https://cdn.tgdd.vn/Products/Images/57/145723/polymer-10000-mah-type-c-esaver-pj-jp106s-avatar-1-400x400.jpg" class="lazy" alt="Pin sạc dự phòng Polymer 10.000 mAh Type C eSaver PJ JP106S">
                            <h3>Pin sạc dự phòng Polymer 10.000 mAh Type C eSaver PJ JP106S</h3>
                            <h6 class="textkm"></h6>
                            <div class="price">
                                <strong>650.000₫</strong>
                            </div>

                            <n></n>        <input class="spInfo" data-brand="eSaver" data-cat="Pin sạc dự phòng" data-code="0160012000177" data-price="650000" id="data145723" name="data145723" type="hidden" value="145723">
                        </a>
                        <!--#endregion -->

                    </div>
                </div>
            </div>
        </div>
@stop
