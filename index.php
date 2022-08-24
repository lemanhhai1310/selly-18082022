<?php $data["title"] = "Selly - Sản phẩm"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
    <!--Content-->
    <div class="app__container">
        <div class="uk-background-muted item__3 uk-section-xsmall uk-padding-remove-top uk-padding-remove-bottom">
            <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
                <nav class="header__navbar uk-navbar-container uk-navbar-transparent uk-background-muted" uk-navbar>

                    <div class="uk-navbar-left">
                        <a href="" class="uk-navbar-item uk-logo header__navbar__logo"><span>Selly - Bán hàng dễ dàng</span></a>
                    </div>

                    <div class="uk-navbar-right">
                        <a href="" class="uk-navbar-item">
                            <span class="header__navbar__icon header__navbar__icon--cart" data-cart="1"></span>
                        </a>
                    </div>

                </nav>
            </div>
            <div class="uk-container uk-container-expand">
                <div class="item__25">
                    <div class="item__5">
                        <form class="uk-search uk-search-default home__search">
                            <span uk-search-icon></span>
                            <input class="uk-search-input home__search__input uk-form-large" type="search" placeholder="Tìm kiếm sản phẩm">
                        </form>
                    </div>
                    <div class="item__5">
                        <div class="uk-grid-10 uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="home__boxSelect__label">Kho hàng tại:</div>
                            </div>
                            <div class="uk-width-auto">
                                <div uk-form-custom="target: > * > span:first-child">
                                    <select class="">
                                        <option hidden="" value="" class="bg-white text-truncate">Toàn quốc</option>
                                        <option hidden="" value="ho-chi-minh" class="bg-white text-truncate">TP. Hồ Chí
                                            Minh
                                        </option>
                                        <option hidden="" value="ha-noi" class="bg-white text-truncate">Hà Nội</option>
                                        <option hidden="" value="da-nang" class="bg-white text-truncate">Đà Nẵng</option>
                                        <option hidden="" value="an-giang" class="bg-white text-truncate">An Giang</option>
                                        <option hidden="" value="bac-giang" class="bg-white text-truncate">Bắc Giang
                                        </option>
                                        <option hidden="" value="bac-ninh" class="bg-white text-truncate">Bắc Ninh</option>
                                        <option hidden="" value="ben-tre" class="bg-white text-truncate">Bến Tre</option>
                                        <option hidden="" value="binh-dinh" class="bg-white text-truncate">Bình Định
                                        </option>
                                        <option hidden="" value="binh-duong" class="bg-white text-truncate">Bình Dương
                                        </option>
                                        <option hidden="" value="binh-phuoc" class="bg-white text-truncate">Bình Phước
                                        </option>
                                        <option hidden="" value="binh-thuan" class="bg-white text-truncate">Bình Thuận
                                        </option>
                                        <option hidden="" value="can-tho" class="bg-white text-truncate">Cần Thơ</option>
                                        <option hidden="" value="dak-lak" class="bg-white text-truncate">Đắk Lắk</option>
                                        <option hidden="" value="dong-nai" class="bg-white text-truncate">Đồng Nai</option>
                                        <option hidden="" value="gia-lai" class="bg-white text-truncate">Gia Lai</option>
                                        <option hidden="" value="hai-duong" class="bg-white text-truncate">Hải Dương
                                        </option>
                                        <option hidden="" value="hai-phong" class="bg-white text-truncate">Hải Phòng
                                        </option>
                                        <option hidden="" value="hoa-binh" class="bg-white text-truncate">Hòa Bình</option>
                                        <option hidden="" value="hung-yen" class="bg-white text-truncate">Hưng Yên</option>
                                        <option hidden="" value="khanh-hoa" class="bg-white text-truncate">Khánh Hòa
                                        </option>
                                        <option hidden="" value="kien-giang" class="bg-white text-truncate">Kiên Giang
                                        </option>
                                        <option hidden="" value="long-an" class="bg-white text-truncate">Long An</option>
                                        <option hidden="" value="nam-dinh" class="bg-white text-truncate">Nam Định</option>
                                        <option hidden="" value="nghe-an" class="bg-white text-truncate">Nghệ An</option>
                                        <option hidden="" value="phu-tho" class="bg-white text-truncate">Phú Thọ</option>
                                        <option hidden="" value="quang-binh" class="bg-white text-truncate">Quảng Bình
                                        </option>
                                        <option hidden="" value="quang-nam" class="bg-white text-truncate">Quảng Nam
                                        </option>
                                        <option hidden="" value="quang-ngai" class="bg-white text-truncate">Quảng Ngãi
                                        </option>
                                        <option hidden="" value="quang-tri" class="bg-white text-truncate">Quảng Trị
                                        </option>
                                        <option hidden="" value="tay-ninh" class="bg-white text-truncate">Tây Ninh</option>
                                        <option hidden="" value="thai-binh" class="bg-white text-truncate">Thái Bình
                                        </option>
                                        <option hidden="" value="thanh-hoa" class="bg-white text-truncate">Thanh Hóa
                                        </option>
                                        <option hidden="" value="thua-thien-hue" class="bg-white text-truncate">Thừa Thiên
                                            Huế
                                        </option>
                                        <option hidden="" value="tra-vinh" class="bg-white text-truncate">Trà Vinh</option>
                                        <option hidden="" value="tuyen-quang" class="bg-white text-truncate">Tuyên Quang
                                        </option>
                                        <option hidden="" value="vinh-long" class="bg-white text-truncate">Vĩnh Long
                                        </option>
                                    </select>
                                    <span class="uk-link home__boxSelect__txt">
                                        <span></span>
                                        <span uk-icon="icon: chevron-down"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item__25" uk-slider="autoplay: true">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-1">
                            <?php
                            $data = array(
                                'https://media.sellycdn.net/files/md_2022_07_29_10_22_43_0700_xZRWLAAKTa.jpg',
                                'https://media.sellycdn.net/files/md_2022_08_04_10_39_56_0700_pEqTFOKOjl.jpg',
                                'https://media.sellycdn.net/files/md_2022_08_08_03_35_19_0700_kOvazvbXOC.jpg',
                                'https://media.sellycdn.net/files/md_2022_08_14_03_11_48_0700_EmZRlwBGNS.jpg',
                                'https://media.sellycdn.net/files/md_2022_08_15_07_19_02_0700_VYeEQvgckY.jpg',
                                'https://media.sellycdn.net/files/md_2022_07_29_10_37_35_0700_GkBOlJFhxK.jpg',
                                'https://media.sellycdn.net/files/md_2022_07_29_10_49_18_0700_BhGCPrsdwE.jpg',
                                'https://media.sellycdn.net/files/md_2022_08_02_06_49_30_0700_GmfWFsMyHY.jpg',
                                'https://media.sellycdn.net/files/md_2022_07_29_10_50_43_0700_GTqmlMLBja.jpg',
                                'https://media.sellycdn.net/files/md_2022_08_12_09_34_01_0700_ahNMygYFgO.jpg',
                                'https://media.sellycdn.net/files/md_2022_07_29_10_51_30_0700_nufYiXlPGu.jpg',
                            );
                            foreach ($data as $v): ?>
                                <li>
                                    <div class="uk-cover-container home__slider__cover">
                                        <img data-src="<?= $v ?>" alt="" uk-img uk-cover>
                                        <canvas width="374" height="281"></canvas>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                           uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                           uk-slider-item="next"></a>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-small-top home__slider__dots"></ul>

                </div>
                <div class="home__boxSpace uk-overflow-auto home__overflow item__25">
                    <div class="uk-child-width-auto uk-flex-nowrap uk-grid-10 item__10" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_2022_04_06_09_20_47_0700_FXamWqBAca.png',
                                'txt' => 'Sức Khỏe',
                                'color' => 'rgb(204, 51, 102)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_590713118627_1615273599654.png',
                                'txt' => 'Bách Hóa Online',
                                'color' => 'rgb(30, 175, 177)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_081753624643_1615273716998.png',
                                'txt' => 'Thời Trang Nữ',
                                'color' => 'rgb(232, 0, 134)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_966258044844_1615273708277.png',
                                'txt' => 'Thời Trang Nam',
                                'color' => 'rgb(80, 91, 218)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_482026832136_1615273640398.png',
                                'txt' => 'Thiết Bị Điện Gia Dụng',
                                'color' => 'rgb(0, 170, 240)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_2022_06_21_09_22_32_0700_AxGTzphsih.png',
                                'txt' => 'Chăm Sóc Nhà Cửa',
                                'color' => 'rgb(188, 64, 102)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_650425425121_1622014906808.png',
                                'txt' => 'Chăm Sóc Thú Cưng',
                                'color' => 'rgb(248, 172, 89)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_2022_06_21_02_20_08_0700_KsBPsrfdAM.png',
                                'txt' => 'Đồng Hồ',
                                'color' => 'rgb(250, 145, 0)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_2022_06_21_09_23_24_0700_LSQAOPagvb.png',
                                'txt' => 'Phụ Kiện và Trang Sức',
                                'color' => 'rgb(254, 192, 116)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_414632692130_1616646268557.png',
                                'txt' => 'Thiết Bị Điện Tử',
                                'color' => 'rgb(56, 64, 89)',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                            <div class="home__overflow__column">
                                <?php include 'template-parts/components/card.php'; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="uk-child-width-auto uk-flex-nowrap uk-grid-10 item__10" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_377699695473_1615460153880.png',
                                'txt' => 'Sắc Đẹp',
                                'color' => 'rgb(255, 58, 172)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_008624657339_1615273681754.png',
                                'txt' => 'Nhà Cửa và Đời Sống',
                                'color' => 'rgb(204, 51, 102)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_767151736558_1615273656421.png',
                                'txt' => 'Mẹ và Bé',
                                'color' => 'rgb(253, 153, 14)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_477181146759_1615273727990.png',
                                'txt' => 'Túi ví',
                                'color' => 'rgb(240, 88, 44)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_817477650252_1622691633460.png',
                                'txt' => 'Thời Trang Trẻ Em',
                                'color' => 'rgb(122, 165, 105)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_2022_04_06_09_44_36_0700_QeYyLLChNJ.png',
                                'txt' => 'Thể Thao và Du Lịch',
                                'color' => 'rgb(50, 50, 50)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_917177767161_1620291042326.png',
                                'txt' => 'Ô Tô Xe Máy và Xe Điện',
                                'color' => 'rgb(49, 145, 226)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_905838701251_1615273628526.png',
                                'txt' => 'Đồ Chơi',
                                'color' => 'rgb(109, 167, 98)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_144278524855_1609916944939.png',
                                'txt' => 'Sách',
                                'color' => 'rgb(248, 172, 89)',
                            ),
                            array(
                                'img' => 'https://media.sellycdn.net/files/sm_2022_06_21_09_22_58_0700_VkZEDgNhAX.png',
                                'txt' => 'Văn Phòng Phẩm Online',
                                'color' => 'rgb(52, 120, 246)',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                            <div class="home__overflow__column">
                                <?php include 'template-parts/components/card.php'; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="home__box uk-background-muted item__3 uk-section-xsmall uk-padding-remove-bottom">
            <div class="uk-container uk-container-expand">
                <div class="uk-margin-small">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand">
                            <h2 class="uk-h2 home__title">Sản phẩm đề xuất</h2>
                        </div>
                        <div class="uk-width-auto">
                            <a href="danhmuc.php" class="home__linkMore">Xem thêm</a>
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
        <div class="home__box uk-background-muted item__3 uk-section-xsmall uk-padding-remove-bottom">
            <div class="uk-container uk-container-expand">
                <div class="">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand">
                            <h2 class="uk-h2 home__title">Nhà cung cấp nổi bật</h2>
                        </div>
                        <div class="uk-width-auto">

                        </div>
                    </div>
                </div>
                <div class="home__boxSpace">
                    <div class="uk-position-relative uk-visible-toggle uk-light" style="padding: 15px 0" tabindex="-1"
                         uk-slider="center: true;autoplay: true">

                        <ul class="uk-slider-items uk-grid uk-grid-10 uk-flex-middle">
                            <?php
                            for ($i = 1; $i <= 16; $i++):
                                $img = 'https://picsum.photos/420/323/?random?v=' . +$i;
                                ?>
                                <li class="uk-width-auto">
                                    <div class="home__ncc uk-cover-container uk-border-rounded uk-box-shadow-small">
                                        <img src="<?= $img ?>" alt="" uk-cover>
                                        <canvas width="420" height="323"></canvas>
                                        <a href="" class="uk-position-cover"></a>
                                    </div>
                                </li>
                            <?php endfor; ?>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hovers" href="#"
                           uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hovers" href="#" uk-slidenav-next
                           uk-slider-item="next"></a>

                    </div>
                </div>
            </div>
        </div>

        <!--MÙA GÌ BÁN ĐẤY-->
        <div class="home__box uk-background-muted item__3 uk-section-xsmall">
            <div class="uk-container uk-container-expand">
                <div class="uk-margin-small">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand">
                            <h2 class="uk-h2 home__title">MÙA GÌ BÁN ĐẤY</h2>
                        </div>
                        <div class="uk-width-auto">

                        </div>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <div class="uk-child-width-1-2 uk-grid-10 uk-grid-match" uk-grid>
                        <?php
                        $data = array(
                            'https://media.sellycdn.net/files/md_2022_08_11_02_14_11_0700_sWbElETNZT.jpg',
                            'https://media.sellycdn.net/files/md_2022_08_05_07_31_33_0700_UdIeGAmzQu.jpg',
                            'https://media.sellycdn.net/files/md_2022_08_11_02_12_26_0700_gVgCqvwYcM.jpg',
                            'https://media.sellycdn.net/files/md_2022_08_09_07_24_01_0700_jAusvImlZR.jpg',
                        );
                        foreach ($data as $v): ?>
                            <div>
                                <div class="uk-cover-container uk-border-rounded">
                                    <img src="<?= $v ?>" alt="" uk-cover="">
                                    <canvas width="177" height="133"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--/MÙA GÌ BÁN ĐẤY-->

        <!--KHẢO SÁT Ý KIẾN SELLER-->
        <div class="home__box uk-background-muted item__3 uk-section-xsmall">
            <div class="uk-container uk-container-expand">
                <div class="uk-margin-small">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand">
                            <h2 class="uk-h2 home__title">KHẢO SÁT Ý KIẾN SELLER</h2>
                        </div>
                        <div class="uk-width-auto">

                        </div>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <a href=""><img class="uk-border-rounded"
                                    src="https://media.sellycdn.net/files/md_2022_07_28_08_06_29_0700_MaHuHtAjZz.jpg"
                                    alt=""></a>
                </div>
            </div>
        </div>
        <!--/KHẢO SÁT Ý KIẾN SELLER-->

        <!--CỘNG ĐỒNG BÁN HÀNG-->
        <div class="home__box uk-background-muted item__3 uk-section-xsmall">
            <div class="uk-container uk-container-expand">
                <div class="uk-margin-small">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand">
                            <h2 class="uk-h2 home__title">CỘNG ĐỒNG BÁN HÀNG</h2>
                        </div>
                        <div class="uk-width-auto">

                        </div>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <div class="uk-child-width-1-2 uk-grid-10 uk-grid-match" uk-grid>
                        <?php
                        $data = array(
                            'https://media.sellycdn.net/files/md_2022_08_16_08_09_13_0700_YPgIuLwjyg.jpg',
                            'https://media.sellycdn.net/files/md_2022_05_17_10_56_19_0700_VJfOJOCxuI.jpg',
                        );
                        foreach ($data as $v): ?>
                            <div>
                                <div class="uk-cover-container uk-border-rounded">
                                    <img src="<?= $v ?>" alt="" uk-cover="">
                                    <canvas width="177" height="133"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--/CỘNG ĐỒNG BÁN HÀNG-->

        <!--HỌC VIỆN SELLY-->
        <div class="home__box uk-background-muted item__3 uk-section-xsmall">
            <div class="uk-container uk-container-expand">
                <div class="uk-margin-small">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand">
                            <h2 class="uk-h2 home__title">HỌC VIỆN SELLY</h2>
                        </div>
                        <div class="uk-width-auto">

                        </div>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <div class="uk-child-width-1-2 uk-grid-10 uk-grid-match" uk-grid>
                        <?php
                        $data = array(
                            'https://media.sellycdn.net/files/md_2022_08_12_10_48_03_0700_IxZrvitgEO.jpg',
                            'https://media.sellycdn.net/files/md_2022_08_12_10_53_05_0700_zscbTgGFQr.jpg',
                        );
                        foreach ($data as $v): ?>
                            <div>
                                <div class="uk-cover-container uk-border-rounded">
                                    <img src="<?= $v ?>" alt="" uk-cover="">
                                    <canvas width="177" height="133"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--/HỌC VIỆN SELLY-->

        <!--ĐUA TOP THƯƠNG HIỆU-->
        <div class="home__box uk-background-muted item__3 uk-section-xsmall">
            <div class="uk-container uk-container-expand">
                <div class="uk-margin-small">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand">
                            <h2 class="uk-h2 home__title">ĐUA TOP THƯƠNG HIỆU</h2>
                        </div>
                        <div class="uk-width-auto">

                        </div>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <div class="uk-child-width-1-2 uk-grid-10 uk-grid-match" uk-grid>
                        <div class="uk-width-1-1">
                            <div class="uk-cover-container uk-border-rounded">
                                <img src="https://media.sellycdn.net/files/md_2022_07_31_04_57_00_0700_KPPQpWHMmg.jpg"
                                     alt="" uk-cover="">
                                <canvas width="177" height="133"></canvas>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <?php
                        $data = array(
                            'https://media.sellycdn.net/files/md_2022_07_31_04_57_54_0700_vanFQOLCoO.jpg',
                            'https://media.sellycdn.net/files/md_2022_08_01_06_51_57_0700_kfGOQtvUzi.jpg',
                            'https://media.sellycdn.net/files/md_2022_07_31_04_59_20_0700_owzSuJeZEF.jpg',
                            'https://media.sellycdn.net/files/md_2022_07_31_05_00_16_0700_iRxQlROGLj.jpg',
                            'https://media.sellycdn.net/files/md_2022_08_04_04_58_43_0700_DvgYJKZffz.jpg',
                        );
                        foreach ($data as $v): ?>
                            <div>
                                <div class="uk-cover-container uk-border-rounded">
                                    <img src="<?= $v ?>" alt="" uk-cover="">
                                    <canvas width="177" height="133"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div>
                            <div class="home__card card uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-center">
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
        <!--/ĐUA TOP THƯƠNG HIỆU-->

        <!--LỰA CHỌN DỄ BÁN-->
        <div class="home__box uk-background-muted item__3 uk-section-xsmall">
            <div class="uk-container uk-container-expand">
                <div class="uk-margin-small">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand">
                            <h2 class="uk-h2 home__title">LỰA CHỌN DỄ BÁN</h2>
                        </div>
                        <div class="uk-width-auto">

                        </div>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <div class="uk-child-width-1-2 uk-grid-10 uk-grid-match" uk-grid>
                        <?php
                        $data = array(
                            'https://media.sellycdn.net/files/md_040015821175_1645628128245.jpg',
                            'https://media.sellycdn.net/files/md_895115064233_1645628071566.jpg',
                            'https://media.sellycdn.net/files/md_713655879750_1636515644120.jpg',
                            'https://media.sellycdn.net/files/md_452535467194_1617698389324.jpg',
                            'https://media.sellycdn.net/files/md_664966263119_1636515820808.jpg',
                            'https://media.sellycdn.net/files/md_672336478112_1636516462134.png',
                        );
                        foreach ($data as $v): ?>
                            <div>
                                <div class="uk-cover-container uk-border-rounded">
                                    <img src="<?= $v ?>" alt="" uk-cover="">
                                    <canvas width="177" height="133"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--/LỰA CHỌN DỄ BÁN-->

        <!--LÃI CAO BÁN TỐT-->
        <div class="home__box uk-background-muted item__3 uk-section-xsmall">
            <div class="uk-container uk-container-expand">
                <div class="uk-margin-small">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand">
                            <h2 class="uk-h2 home__title">LÃI CAO BÁN TỐT</h2>
                        </div>
                        <div class="uk-width-auto">

                        </div>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <div class="uk-child-width-1-2 uk-grid-10 uk-grid-match" uk-grid>
                        <?php
                        $data = array(
                            'https://media.sellycdn.net/files/md_825823087971_1638238126101.jpg',
                            'https://media.sellycdn.net/files/md_664298624667_1636517194908.jpg',
                            'https://media.sellycdn.net/files/md_734762451362_1636517352491.jpg',
                            'https://media.sellycdn.net/files/md_286229742105_1636517278722.jpg',
                        );
                        foreach ($data as $v): ?>
                            <div>
                                <div class="uk-cover-container uk-border-rounded">
                                    <img src="<?= $v ?>" alt="" uk-cover="">
                                    <canvas width="177" height="133"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--/LÃI CAO BÁN TỐT-->

        <!--Danh mục-->
        <div class="home__box uk-background-muted item__3 uk-section-xsmall uk-padding-remove-top">
            <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; offset: 51">
                <nav class="uk-navbar-container uk-navbar-transparent home__danhmuc__navbar uk-overflow-auto home__overflow uk-padding-remove-bottom" uk-navbar>
                    <div class="uk-navbar-left">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active"><a href="#">Cho bạn</a></li>
                            <li><a href="#">Ưu đãi</a></li>
                            <li><a href="#">Sức Khỏe</a></li>
                            <li><a href="#">Sắc Đẹp</a></li>
                            <li><a href="#">Bách Hóa Online</a></li>
                            <li><a href="#">Nhà Cửa và Đời Sống</a></li>
                            <li><a href="#">Thời Trang Nữ</a></li>
                            <li><a href="#">Mẹ và Bé</a></li>
                            <li><a href="#">Thời Trang Nam</a></li>
                            <li><a href="#">Túi ví</a></li>
                            <li><a href="#">Thiết Bị Điện Gia Dụng</a></li>
                            <li><a href="#">Thời Trang Trẻ Em</a></li>
                            <li><a href="#">Chăm Sóc Nhà Cửa</a></li>
                        </ul>
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
        <!--/Danh mục-->
    </div>
    <!--/Content-->
<?php require "template-parts/layouts/footer.php"; ?>