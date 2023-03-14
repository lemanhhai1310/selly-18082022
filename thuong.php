<?php $data["title"] = "Selly - Thưởng"; ?>
<?php $bodyClass = '' ?>
<?php $danhmuc = '' ?>
<?php $menuBottom = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Content-->
<div class="app__container">
    <div class="uk-background-default">
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <nav class="header__navbar <?= (isset($danhmuc))?'danhmuc':'uk-navbar-transparent' ?> uk-navbar-container uk-background-muted" uk-navbar>

                <div class="uk-navbar-left uk-flex-nowrap">
                    <h1 class="uk-navbar-item uk-logo header__navbar__logo uk-margin-remove"><span>Thưởng</span></h1>
                </div>

                <div class="uk-navbar-right">

                </div>

            </nav>
        </div>
    </div>
    <div class="uk-background-muted uk-padding-small">
        <div class="" uk-slider="autoplay: true">

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
    </div>

    <!--Mời bạn có thưởng-->
    <div class="item__5 uk-background-muted uk-padding-small">
        <div class="thuong__moiban__title">Mời bạn có thưởng</div>
        <div class="item__15" uk-grid>
            <div class="uk-width-3-5">
                <div class="thuong__moiban__card uk-background-default uk-height-small uk-border-rounded uk-padding-small">
                    <div>MỜI BẠN 100K</div>
                    <div><a href="">Xem chi tiết</a></div>
                </div>
            </div>
        </div>
        <div class="item__15 thuong__moiban__card uk-background-default uk-border-rounded uk-padding-small">
            <div class="uk-grid-10 uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <span uk-icon="icon: user"></span>
                </div>
                <div class="uk-width-expand">
                    <div>Mời thành công</div>
                    <div>0 người</div>
                </div>
                <div class="uk-width-auto">
                    <span uk-icon="icon: chevron-right"></span>
                </div>
            </div>
        </div>
        <div class="item__15 thuong__moiban__card uk-background-default uk-border-rounded uk-padding-small">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div>MÃ GIỚI THIỆU</div>
                </div>
                <div class="uk-width-auto">
                    <a href="">Thay đổi</a>
                </div>
            </div>

            <div class="uk-margin-top">
                <div class="uk-grid-collapse" uk-grid>
                    <div class="uk-width-expand">
                        <div>6gcv72n</div>
                    </div>
                    <div class="uk-width-1-3">
                        <a href="">Sao chép</a>
                    </div>
                </div>
            </div>

            <div class="item__15">
                <div class="uk-grid-collapse" uk-grid>
                    <div class="uk-width">
                        <div>Link mời bạn: <span>selly.vn/6gcv72n</span></div>
                    </div>
                    <div class="uk-width-1-2">
                        <button class="uk-button uk-button-primary uk-width">Mã QR</button>
                    </div>
                    <div class="uk-width-1-2">
                        <button class="uk-button uk-button-danger uk-width">Chia sẻ</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="item__15 thuong__moiban__card uk-background-default uk-padding-small uk-border-rounded">
            <div>Bạn được mời bởi Selly</div>
            <div>Liên hệ người mời để chia sẻ kinh nghiệm bán hàng</div>
        </div>
    </div>
    <!--/Mời bạn có thưởng-->










    <div class="item__5 uk-background-muted uk-height-small">

    </div>
    <div class="item__5 uk-background-muted uk-height-small">

    </div>
    <div class="item__5 uk-background-muted uk-height-small">

    </div>
</div>
<!--/Content-->
<?php require "template-parts/layouts/footer.php"; ?>