<?php $data["title"] = "Selly - Chi tiết sản phẩm"; ?>
<?php $bodyClass = '' ?>
<?php $danhmuc = '' ?>
<?php $menuBottom = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Content-->
<div class="app__container">
    <div class="uk-background-default item__3 uk-section-xsmall uk-padding-remove-top" style="padding-bottom: 15px">
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <nav class="header__navbar <?= (isset($danhmuc))?'danhmuc':'uk-navbar-transparent' ?> uk-navbar-container uk-background-muted" uk-navbar>

                <div class="uk-navbar-left uk-flex-nowrap">
                    <a href="." class="uk-navbar-item"><span class="header__navbar__icon header__navbar__icon--back"></span></a>
                    <h1 class="uk-navbar-item uk-logo header__navbar__logo uk-margin-remove uk-padding-remove"><span>Chi tiết sản phẩm</span></h1>
                </div>

                <div class="uk-navbar-right">
                    <a href="" class="uk-navbar-item">
                        <span class="header__navbar__icon header__navbar__icon--cart" data-cart="1"></span>
                    </a>
                </div>

            </nav>
        </div>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1:1; autoplay: true;">
            <ul class="uk-slideshow-items">
                <li>
                    <img src="images/photo.jpg" alt="" uk-cover>
                </li>
                <li>
                    <img src="images/dark.jpg" alt="" uk-cover>
                </li>
                <li>
                    <img src="images/light.jpg" alt="" uk-cover>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            <span class="uk-position-bottom-center uk-position-small uk-label uk-border-pill chitietsanpham__section1__slideshow__number">1/21</span>
            <div class="uk-position-top-left chitietsanpham__section1__slideshow__label">Freeship 80K</div>
        </div>
        <div class="uk-container uk-container-expand item__10">
            <div>
                <div class="chitietsanpham__section1__title">SON SÁP LÌ SWEET LOVE - ROSY</div>
                <div class="chitietsanpham__section1__price">157.210đ</div>
                <div class="uk-grid uk-flex-middle item__5" uk-grid>
                    <div class="uk-width-expand">
                        <div class="chitietsanpham__section1__rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span>4.8 / 5</span>
                        </div>
                    </div>
                    <div class="uk-width-auto">
                        <div class="chitietsanpham__section1__txtSmall">Đã bán 1.2K</div>
                    </div>
                </div>
            </div>
            <div class="uk-width item__20" uk-form-custom="target: > * > span:first-child">
                <select aria-label="Custom controls">
                    <option value="1">Màu sắc: Đỏ cam</option>
                    <option value="2">Màu sắc: Option 02</option>
                    <option value="3">Màu sắc: Option 03</option>
                    <option value="4">Màu sắc: Option 04</option>
                </select>
                <button class="chitietsanpham__section1__selectBtn uk-button uk-button-default uk-width uk-text-left" type="button" tabindex="-1">
                    <span></span>
                    <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                </button>
            </div>
            <div class="home__boxSpace item__10 uk-overflow-auto chitietsanpham__section1__scrollBar">
                <div class="uk-grid uk-flex-nowrap home__overflow__grid uk-child-width-auto uk-grid-10" uk-grid>
                    <?php for ($i=1;$i<=4;$i++): ?>
                    <div class="home__overflow__column">
                        <div class="chitietsanpham__section1__width uk-light uk-flex uk-flex-middle uk-grid-match">
                            <div class="uk-child-width-auto uk-grid-collapse uk-grid-match uk-flex-nowrap" uk-grid>
                                <div class="uk-width-auto">
                                    <img src="images/bg_promotion_start.573dfc01.svg" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <div class="chitietsanpham__section1__boxGift uk-flex uk-flex-middle">
                                        <div>
                                            <div class="chitietsanpham__section1__boxGift__txt1">CHAVA - MUA 1 TẶNG 1</div>
                                            <div class="chitietsanpham__section1__boxGift__txt2 item__5">Áp dụng tới 28/02/2023</div>
                                            <div class="item__5"><a href="" class="chitietsanpham__section1__boxGift__txt2 chitietsanpham__section1__boxGift__link" uk-icon="icon: chevron-right; ratio: 0.8">Xem chi tiết</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="uk-background-default" style="width: 1px;"></div>
                                </div>
                                <div class="uk-width-auto">
                                    <img src="images/bg_promotion_end.b284934a.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-background-default item__5 uk-section-small uk-position-relative chitietsanpham__section2">
        <span class="home__card__ship uk-position-top-left" style="top: 0;left: 0;border-top-left-radius: 0">Freeship 80K</span>
        <div class="uk-container uk-container-expand">
            <ul class="uk-list uk-list-bullet chitietsanpham__section2__list">
                <li>Miễn phí vận chuyển 20.000đ cho đơn từ 149.000đ</li>
                <li>Miễn phí vận chuyển 30.000đ cho đơn từ 249.000đ</li>
                <li>Miễn phí vận chuyển 80.000đ cho đơn từ 1.000.000đ</li>
            </ul>
            <div>
                <div class="chitietsanpham__section2__item">
                    <div class="uk-grid uk-flex-middle uk-grid-10" uk-grid>
                        <div class="uk-width-expand">
                            <div class="chitietsanpham__section2__txtLeft">Vận chuyển đến</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="chitietsanpham__section2__txtRightSelect">Vui lòng chọn địa chỉ</div>
                        </div>
                    </div>
                </div>
                <div class="chitietsanpham__section2__item">
                    <div class="uk-grid uk-flex-middle uk-grid-10" uk-grid>
                        <div class="uk-width-expand">
                            <div class="chitietsanpham__section2__txtLeft">Phí vận chuyển dự kiến</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="chitietsanpham__section2__txtRightSelect1">Vui lòng chọn địa chỉ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Thông tin sản phẩm-->
    <div class="uk-background-default item__5 uk-section-small chitietsanpham__section3">
        <div class="uk-container uk-container-expand">
            <div class="chitietsanpham__section3__title">Thông tin sản phẩm</div>
            <div class="uk-margin">
                <div class="chitietsanpham__section3__item">
                    <div class="uk-grid uk-flex-middle uk-grid-10" uk-grid>
                        <div class="uk-width-expand">
                            <div class="chitietsanpham__section2__txtLeft">Giá bán thị trường</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="chitietsanpham__section2__txtRight">199.000đ</div>
                        </div>
                    </div>
                </div>
                <div class="chitietsanpham__section3__item">
                    <div class="uk-grid uk-flex-middle uk-grid-10" uk-grid>
                        <div class="uk-width-expand">
                            <div class="chitietsanpham__section2__txtLeft">Giá nhà cung cấp</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="chitietsanpham__section2__txtRight">157.210đ</div>
                        </div>
                    </div>
                </div>
                <div class="chitietsanpham__section3__item">
                    <div class="uk-grid uk-flex-middle uk-grid-10" uk-grid>
                        <div class="uk-width-expand">
                            <div class="chitietsanpham__section2__txtLeft">Hoa hồng</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="chitietsanpham__section2__txtRight chitietsanpham__section2__txtRight--hoahong">41.790đ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Thông tin sản phẩm-->

    <!--Thông tin khác-->
    <div class="uk-background-default item__5 uk-section-small chitietsanpham__section3">
        <div class="uk-container uk-container-expand">
            <div class="chitietsanpham__section3__title">Thông tin khác</div>
            <div class="uk-margin">
                <div class="chitietsanpham__section3__item">
                    <div class="uk-grid uk-flex-middle uk-grid-10" uk-grid>
                        <div class="uk-width-expand">
                            <div class="chitietsanpham__section2__txtLeft">Thương hiệu</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="chitietsanpham__section2__txtRightSelect">Rosy</div>
                        </div>
                    </div>
                </div>
                <div class="chitietsanpham__section3__item">
                    <div class="uk-grid uk-flex-middle uk-grid-10" uk-grid>
                        <div class="uk-width-expand">
                            <div class="chitietsanpham__section2__txtLeft">Danh mục</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="chitietsanpham__section2__txtRightSelect">Sắc Đẹp</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Thông tin khác-->

    <!--Sản phẩm cùng kho-->
    <div class="uk-section-xsmall chitietsanpham__section4">
        <div class="uk-container uk-container-expand">
            <div class="uk-margin-small">
                <div class="uk-flex-middle uk-grid-small uk-grid" uk-grid="">
                    <div class="uk-width-expand uk-first-column">
                        <div class="chitietsanpham__section3__title">Sản phẩm cùng kho</div>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="home__linkMore">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="uk-margin-small-top home__boxSpace uk-overflow-auto home__overflow">
                <!--Code here-->
                <div class="uk-child-width-auto uk-flex-nowrap uk-grid-10 home__overflow__grid uk-grid-match" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'https://media.sellycdn.net/files/sm_2022_08_09_02_22_07_0700_rwJUdoDjxu.jpg',
                            'title' => '[THÙNG] NƯỚC GIẶT XẢ ACTIVE CHUYÊN BIỆT DÀNH CHO BÉ NĂNG ĐỘNG (12 - 36 THÁNG) 1.6L - POM POM - 4 CHAI/THÙNG',
                            'price' => '633.600đ',
                            'tip' => '134.400đ',
                            'address' => 'TP. Hồ Chí Minh',
                            'deal' => array('Dzựt Deal + 80K'),
                        ),
                        array(
                            'src' => 'https://media.sellycdn.net/files/sm_246682237822_1646621796983.jpg',
                            'title' => '[THÙNG 6 CHAI] NƯỚC MẮM NHỈ CÁ CƠM THAN 525ML - LÀNG CHÀI XƯA',
                            'price' => '165.900đ',
                            'tip' => '44.100đ',
                            'address' => 'TP. Hồ Chí Minh',
                            'deal' => array('Dzựt Deal + 80K', '+ đến 35K Bạn Mới'),
                        ),
                        array(
                            'src' => 'https://media.sellycdn.net/files/sm_626725890467_1640935807067.jpg',
                            'title' => 'VIÊN UỐNG SÁNG DA KAWAII COLLAGEN SECRET',
                            'price' => '680.000đ',
                            'tip' => '119.000đ',
                            'address' => 'Bình Định và 1 kho khác',
                            'deal' => array('Dzựt Deal + 80K', 'Mua 1 tặng 1'),
                        ),
                        array(
                            'src' => 'https://media.sellycdn.net/files/sm_2022_07_21_04_29_43_0700_VMkvHnermh.jpg',
                            'title' => 'TÚI DU LỊCH P479D - PADO',
                            'price' => '147.700đ',
                            'tip' => '41.300đ',
                            'address' => 'TP. Hồ Chí Minh',
                            'deal' => array('Dzựt Deal + 80K'),
                        ),
                        array(
                            'src' => 'https://media.sellycdn.net/files/sm_2022_07_09_07_44_31_0700_puSESGXjaf.png',
                            'title' => 'GỘI LÀ ĐEN THẢO DƯỢC CAO CẤP KÈM LƯỢC 250ML - LUCKY STAR',
                            'price' => '130.050đ',
                            'tip' => '32.130đ',
                            'address' => 'TP. Hồ Chí Minh',
                            'deal' => array('Dzựt Deal + 80K', '+ đến 35K Bạn Mới'),
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <div class="home__overflow__column">
                            <div class="home__card uk-card uk-card-default uk-card-body uk-flex uk-flex-column">
                                <div class="uk-flex-auto item__3">
                                    <div class="uk-cover-container uk-border-rounded">
                                        <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                        <canvas width="169" height="169"></canvas>
                                        <span class="home__card__ship uk-position-top-left">Freeship 80K</span>
                                        <div class="uk-position-bottom-left home__card__deal uk-flex uk-flex-nowrap">
                                            <?php foreach ($v['deal'] as $v1): ?>
                                                <div class="home__card__deal__item"><?= $v1 ?></div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <h4 class="uk-h4 home__card__title item__10"><?= $v['title'] ?></h4>
                                </div>
                                <div class="item__3">
                                    <div class="item__3">
                                        <div class="home__card__txt">Giá từ: <span
                                                    class="home__card__price"><?= $v['price'] ?></span></div>
                                        <div class="home__card__txt">Hoa hồng <?= $v['tip'] ?></div>
                                    </div>
                                    <div class="item__3">
                                        <div class="home__card__txt home__card__txt--map"><?= $v['address'] ?></div>
                                    </div>
                                </div>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="home__overflow__column">
                        <div class="home__card uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-center">
                            <div class="uk-text-center">
                                <div>
                                    <span class="home__card__iconMore"></span>
                                </div>
                                <div class="item__10 home__card__viewAll">Xem tất cả</div>
                            </div>
                            <a href="" class="uk-position-cover"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Sản phẩm cùng kho-->

    <!--Mô tả sản phẩm-->
    <div class="uk-background-default uk-section-small chitietsanpham__section3">
        <div class="uk-container uk-container-expand">
            <div class="uk-margin">
                <div class="chitietsanpham__section3__title">Mô tả sản phẩm</div>
                <ul class="uk-list uk-list-bullet chitietsanpham__section4__list">
                    <li>Thiết kế vỏ son được làm vừa vặn nên cầm rất êm tay.</li>
                    <li>Đầu son vát nên khi thoa son rất thuận tiện, dễ dàng, son không bị lem ra ngoài.</li>
                    <li>Son lên màu rất chuẩn, bền màu từ 6-8 giờ.</li>
                    <li>Độ dưỡng ẩm cao, ít bị đọng rãnh, rất thoải mái, nhẹ nhàng, êm môi.</li>
                    <li>Mùi hương trái cây rất nhẹ và dễ chịu.</li>
                    <li>Son sáp lì Rosy gồm có 8 màu:</li>
                    <li>Đỏ cam: Sở hữu một gam màu tươi sáng, đã làm tan chảy trái tim của biết bao cô nàng sang chảnh. Ưu điểm lớn nhất của màu son này là khả năng làm nổi bật màu da.</li>
                    <li>Đỏ Ruby: Son thiên về sắc đỏ nhiều hơn, mang đến vẻ đẹp đầy nữ tính, nhẹ nhàng nhưng vẫn quyến rũ và sang trọng.</li>
                    <li>Hồng san hô: là một màu nhẹ nhàng có thể làm "bừng sáng" gương mặt chỉ trong tích tắc, giúp các nàng thêm nổi bật, tươi tắn, trẻ trung hơn.</li>
                    <li>Cam đất: Màu son thời thượng, được nhiều chị em sử dụng. Với sự kết hợp của màu cam và màu nâu đất, son màu cam đất đem lại cho chị em vẻ đẹp nhẹ nhàng, dễ dàng kết hợp với nhiều phong cách thời trang.</li>
                    <li>Cam đỏ: Một trong những màu son phổ biến nhưng chưa bao giờ lỗi thời chính là tông cam đỏ siêu cưng, đánh lên tôn da hết biết. Đặc biệt các cô nàng mê son rất thích đó là cam đỏ chẳng kén tông da, càng không bắt buộc phải makeup mới diện đẹp.</li>
                    <li>Cam đào: Từ bao giờ đã trở thành một màu son "must-have" của các cô gái. Màu cam đào là sự pha trộn tuyệt vời giữa hai gam màu cam và san hô, cực kỳ tôn da, giúp bạn trở nên xinh đẹp hơn với nhiều phong cách trẻ trung, mạnh mẽ nhưng rất ngọt ngào</li>
                    <li>Cam gạch: Màu cam pha chút nâu luôn giúp người sử dụng có làn môi quyến rũ và tràn đầy năng lượng. Đây là một màu son trung tính, hoàn toàn phù hợp với mọi làn da, và trong mọi hoàn cảnh, từ đi làm, tới đi chơi, hay dự tiệc.</li>
                    <li>Hồng kute: Một màu hồng phá cách pha chút cam và nâu rất ngọt ngào, nữ tính. Lên môi hồng hồng nhẹ nhàng đốn tim bao người. Gam màu tạo nên làn sóng mới được nhiều cô nàng săn lùng.</li>
                </ul>
            </div>
            <div class="uk-margin">
                <div class="chitietsanpham__section3__title">Ưu điểm sản phẩm:</div>
                <ul class="uk-list uk-list-bullet chitietsanpham__section4__list">
                    <li>Chất son lì, mịn nhưng không hề gây khô môi, lên môi mềm và nhẹ.</li>
                    <li>Bám màu khá lâu từ 6h - 8h tùy vào cấu tạo môi và ăn uống (son kháng nước, không kháng dầu nên hạn chế dầu mỡ).</li>
                    <li>Siêu dưỡng và mờ thâm môi hiệu quả.</li>
                    <li>Sử dụng cho cả mẹ bầu và em nhỏ.</li>
                    <li>Thành phần từ tự nhiên, nhiều dầu dưỡng, nguyên liệu nhập khẩu Châu Âu, Mỹ nên rất an toàn, lành tính.</li>
                </ul>
            </div>
            <div class="uk-margin">
                <div class="chitietsanpham__section3__title">Thông tin sản phẩm:</div>
                <ul class="uk-list uk-list-bullet chitietsanpham__section4__list">
                    <li>Tên sản phẩm: Son Sáp Lì Sweet Love - Rosy</li>
                    <li>Thương hiệu: Rosy</li>
                    <li>Màu sắc: Đỏ cam, hồng san hô, cam đất, cam đỏ, cam đào, cam gạch, hồng kute, đỏ ruby</li>
                    <li>Bảo quản: Nơi khô ráo, thoáng mát</li>
                    <li>Xuất xứ: Việt Nam</li>
                </ul>
            </div>
        </div>
    </div>
    <!--/Mô tả sản phẩm-->

    <!--Đánh giá sản phẩm-->
    <div class="uk-background-default item__5 uk-section-small chitietsanpham__section5">
        <div class="uk-container uk-container-expand">

        </div>
    </div>
    <!--/Đánh giá sản phẩm-->

</div>
<!--/Content-->
<?php require "template-parts/layouts/footer.php"; ?>