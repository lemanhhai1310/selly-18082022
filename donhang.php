<?php $data["title"] = "Selly - Đơn hàng"; ?>
<?php $bodyClass = '' ?>
<?php $danhmuc = '' ?>
<?php $menuBottom = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Content-->
<div class="app__container">
    <div class="uk-background-default">
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <nav class="uk-navbar-container uk-navbar-transparent home__danhmuc__navbar uk-overflow-auto home__overflow uk-padding-remove-bottom uk-navbar uk-navbar-sticky" uk-navbar="" style="">
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="">Tất cả</a></li>
                        <li><a href="">Đang thanh toán</a></li>
                        <li><a href="" data-count="1">Đang xử lý</a></li>
                        <li><a href="">Đang giao</a></li>
                        <li><a href="">Đã giao & chờ đối soát</a></li>
                        <li><a href="">Đã đối soát</a></li>
                        <li><a href="">Đã huỷ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="uk-section-xsmall donhang__section">
        <div class="uk-container uk-container-expand">
            <div class="uk-margin-small">
                <form class="uk-search donhang__form uk-search-default uk-width uk-background-default">
                    <span class="donhang__form__icon" uk-search-icon></span>
                    <input class="uk-search-input uk-width donhang__form__input" type="search" placeholder="Tìm kiếm đơn hàng" aria-label="Search">
                </form>
            </div>
            <div class="uk-margin">
                <div class="donhang__title">Tổng quan</div>
                <div class="uk-background-default donhang__box donhang__box--c1 item__10">
                    <div class="uk-grid uk-flex-middle donhang__box__item" uk-grid>
                        <div class="uk-width-expand">
                            <div class="donhang__box__txtLeft">Tổng số đơn hàng</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="donhang__box__txtRight">1</div>
                        </div>
                    </div>
                    <div class="uk-grid uk-flex-middle donhang__box__item" uk-grid>
                        <div class="uk-width-expand">
                            <div class="donhang__box__txtLeft">Tổng giá trị đơn đã giao</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="donhang__box__txtRight">0đ</div>
                        </div>
                    </div>
                    <div class="uk-grid uk-flex-middle donhang__box__item" uk-grid>
                        <div class="uk-width-expand">
                            <div class="donhang__box__txtLeft">Hoa hồng đơn chờ đối soát</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="donhang__box__txtRight">108.800đ</div>
                        </div>
                    </div>
                    <div class="uk-grid uk-flex-middle donhang__box__item" uk-grid>
                        <div class="uk-width-expand">
                            <div class="donhang__box__txtLeft">Tổng thu nhập đã nhận</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="donhang__box__txtRight">0đ</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <div class="donhang__title">Hôm nay</div>
                <div class="uk-background-default donhang__box item__10">
                    <div class="uk-grid uk-grid-10 uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <div class="uk-cover-container uk-border-rounded donhang__box__img">
                                <img src="https://media.sellycdn.net/files/md_2023_02_05_03_39_54_0700_ZCkGsVZpsD.jpg" alt="" uk-cover="">
                                <canvas width="66" height="66"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="donhang__box__title">#SL_2302069112</div>
                            <div>
                                <div uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="donhang__box__title">680.000đ</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="donhang__box__icon"></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="donhang__box__txt">1 sản phẩm</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="donhang__box__label" style="color: rgb(52, 120, 246);">Lấy hàng</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item__15">
                        <a href="" class="uk-button donhang__box__btn uk-button-default uk-width">Chờ lấy hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--/Content-->
<?php require "template-parts/layouts/footer.php"; ?>