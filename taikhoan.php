<?php $data["title"] = "Selly - Tài khoản"; ?>
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
                    <h1 class="uk-navbar-item uk-logo header__navbar__logo uk-margin-remove"><span>Tài khoản</span></h1>
                </div>

                <div class="uk-navbar-right">
                    <a href="" class="uk-navbar-item">
                        <span class="header__navbar__icon header__navbar__icon--setting"></span>
                    </a>
                </div>

            </nav>
        </div>
    </div>
    <div class="uk-section-xsmall taikhoan__section">
        <div class="uk-container uk-container-expand">
            <div class="uk-margin uk-background-default uk-border-rounded uk-overflow-hidden">
                <ul class="uk-nav uk-nav-default taikhoan__nav1">
                    <li class="user">
                        <a href="#">
                            <div class="uk-grid uk-grid-10 uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container uk-border-circle">
                                        <img src="images/sm_ic_avatar_default_male.png" alt="" uk-cover="">
                                        <canvas width="48" height="48"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="taikhoan__nav1__name">Hải</div>
                                    <div class="taikhoan__nav1__txt">Thành viên</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="taikhoan__nav1__icon taikhoan__nav1__icon--sodu"></div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="taikhoan__nav1__label">Số dư tài khoản</div>
                                    <div class="taikhoan__nav1__price">0đ</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="taikhoan__nav1__icon taikhoan__nav1__icon--thue"></div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="taikhoan__nav1__label">Thuế TNCN của bạn</div>
                                    <div class="taikhoan__nav1__price">0đ</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="taikhoan__nav1__icon taikhoan__nav1__icon--doisoat"></div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="taikhoan__nav1__label">Chờ đối soát</div>
                                    <div class="taikhoan__nav1__price">0đ</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="refund"><a href="">Rút tiền</a></li>
                </ul>
            </div>
            <div class="uk-margin uk-background-default uk-border-rounded uk-overflow-hidden">
                <ul class="uk-nav uk-nav-default taikhoan__nav1 taikhoan__nav1--nav2">
                    <li>
                        <a href="">
                            <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="taikhoan__nav1__icon taikhoan__nav1__icon--kh"></div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="taikhoan__nav1__label">Khách hàng</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="taikhoan__nav1__icon taikhoan__nav1__icon--passs"></div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="taikhoan__nav1__label">Cập nhật mật khẩu</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="taikhoan__nav1__icon taikhoan__nav1__icon--baidang"></div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="taikhoan__nav1__label">Mẫu bài đăng bán của bạn</div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="uk-margin">
                <div class="uk-margin-medium uk-position-relative hotline">
                    <div class="taikhoan__box uk-background-default uk-border-rounded uk-overflow-hidden">
                        <div class="uk-grid uk-grid-small" uk-grid>
                            <div class="uk-width-expand">
                                <div class="taikhoan__box__title">Hotline</div>
                                <div class="taikhoan__box__txt">Giải quyết các vấn đề liên quan đến <b>đơn hàng</b></div>
                            </div>
                            <div class="uk-width-auto">
                                <img style="width: 100px" src="images/helper_hotline.f73bbac4.png" alt="">
                            </div>
                        </div>
                    </div>
                    <a href="" class="uk-position-cover"></a>
                    <a href="" class="uk-button uk-button-secondary taikhoan__box__btn">Gọi ngay</a>
                </div>
                <div class="uk-margin-medium uk-position-relative community">
                    <div class="taikhoan__box uk-background-default uk-border-rounded uk-overflow-hidden">
                        <div class="uk-grid uk-grid-small" uk-grid>
                            <div class="uk-width-expand">
                                <div class="taikhoan__box__title">Cộng đồng</div>
                                <div class="taikhoan__box__txt">Giải đáp thắc mắc và trao đổi kinh nghiệm bán hàng</div>
                            </div>
                            <div class="uk-width-auto">
                                <img style="width: 100px" src="images/helper_community.a2c756fd.png" alt="">
                            </div>
                        </div>
                    </div>
                    <a href="" class="uk-position-cover"></a>
                    <a href="" class="uk-button uk-button-secondary taikhoan__box__btn">Khám phá</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!--/Content-->
<?php require "template-parts/layouts/footer.php"; ?>