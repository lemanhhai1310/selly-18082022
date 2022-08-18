<?php $data["title"] = "Selly - Danh mục"; ?>
<?php $bodyClass = '' ?>
<?php $danhmuc = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Content-->
<div class="app__container">
    <div class="uk-background-muted item__3 uk-section-xsmall uk-padding-remove-top">
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <nav class="header__navbar <?= (isset($danhmuc))?'danhmuc':'uk-navbar-transparent' ?> uk-navbar-container uk-background-muted" uk-navbar>

                <div class="uk-navbar-left">
                    <a href="." class="uk-navbar-item"><span class="header__navbar__icon header__navbar__icon--back"></span></a>
                    <h1 class="uk-navbar-item uk-logo header__navbar__logo uk-margin-remove uk-padding-remove">Nhà Cửa và Đời Sống</h1>
                </div>

                <div class="uk-navbar-right">
                    <a href="" class="uk-navbar-item">
                        <span class="header__navbar__icon header__navbar__icon--cart" data-cart="1"></span>
                    </a>
                </div>

            </nav>
        </div>
        <div class="uk-container uk-container-expand uk-margin-small-top">
            <div class="uk-child-width-1-2 uk-grid-10" uk-grid="masonry: true">
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
                    array(
                        'src' => 'https://media.sellycdn.net/files/sm_753336664674_1647401400794.jpg',
                        'title' => 'BALO GẤU HỌC SINH CẤP 1 CHỐNG GÙ LƯNG THỜI TRANG HR0293 - HARAS',
                        'price' => '177.375đ',
                        'tip' => '37.625đ',
                        'address' => 'TP. Hồ Chí Minh',
                        'deal' => array('Dzựt Deal + 80K'),
                    ),
                    array(
                        'src' => 'https://media.sellycdn.net/files/sm_2022_08_13_04_59_37_0700_PAGTjmlcOl.jpg',
                        'title' => 'BALO MẪU GIÁO, HỌC SINH TIỂU HỌC, HOẠT HÌNH 3D TẶNG KÈM HỘP BÚT - BÁCH HÓA SHOP',
                        'price' => '142.468đ',
                        'tip' => '29.532đ',
                        'address' => 'Hà Nội',
                        'deal' => array('Dzựt Deal + 80K', '+ đến 35K Bạn Mới'),
                    ),
                    array(
                        'src' => 'https://media.sellycdn.net/files/sm_2022_05_21_07_00_49_0700_OVVAavcriq.png',
                        'title' => 'NƯỚC GIẶT - HOSHI',
                        'price' => '83.160đ',
                        'tip' => '20.790đ',
                        'address' => 'Hà Nội',
                        'deal' => array('Tặng quà'),
                    ),

                    array(
                        'src' => 'https://media.sellycdn.net/files/sm_2022_05_25_10_26_36_0700_uCJjskboCF.jpg',
                        'title' => 'KEM ĐÁNH RĂNG DENTAL IQ 93% TOOTHPASTE 120G - MEDIAN',
                        'price' => '36.300đ',
                        'tip' => '7.700đ',
                        'address' => 'Hà Nội',
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
                    <div>
                        <div class="home__card card uk-card uk-card-default uk-card-body uk-flex uk-flex-column">
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
            </div>

            <!--Loading-->
            <div class="uk-text-center uk-margin-top">
                <div uk-spinner></div>
            </div>
            <!--/Loading-->
        </div>
    </div>
</div>
<!--/Content-->
<?php require "template-parts/layouts/footer.php"; ?>