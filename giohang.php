<?php $data["title"] = "Selly - Giỏ hàng"; ?>
<?php $bodyClass = '' ?>
<?php $danhmuc = '' ?>
<?php $menuBottom = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Content-->
<div class="app__container">
    <div class="uk-background-default">
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <nav class="header__navbar <?= (isset($danhmuc))?'danhmuc':'uk-navbar-transparent' ?> uk-navbar-container uk-background-muted" uk-navbar>

                <div class="uk-navbar-left uk-flex-nowrap">
                    <a href="." class="uk-navbar-item"><span class="header__navbar__icon header__navbar__icon--back"></span></a>
                    <h1 class="uk-navbar-item uk-logo header__navbar__logo uk-margin-remove uk-padding-remove"><span>Giỏ hàng</span></h1>
                </div>

                <div class="uk-navbar-right">

                </div>

            </nav>
        </div>
    </div>

    <?php for ($i=1;$i<=4;$i++): ?>
    <div class="uk-background-default item__5 uk-padding-small giohang__boxsp">
        <div class="uk-grid uk-grid-small" uk-grid>
            <div class="uk-width-auto">
                <input class="uk-checkbox giohang__checkbox" type="checkbox">
            </div>
            <div class="uk-width-expand">
                <div class="uk-position-relative giohang__boxsp__khohangName">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M4 13V22H20V13" stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                              stroke-linecap="square"></path>
                        <path d="M4.00001 2L1.00001 7C0.998497 7.67436 1.22485 8.32946 1.64235 8.85905C2.05985 9.38864 2.64401 9.76165 3.3001 9.9176C3.95619 10.0735 4.64572 10.0033 5.25686 9.71819C5.868 9.4331 6.36491 8.94991 6.667 8.347C6.91348 8.84349 7.29368 9.26131 7.76479 9.5534C8.23589 9.84549 8.77919 10.0002 9.3335 10.0002C9.88781 10.0002 10.4311 9.84549 10.9022 9.5534C11.3733 9.26131 11.7535 8.84349 12 8.347C12.2465 8.84349 12.6267 9.26131 13.0978 9.5534C13.5689 9.84549 14.1122 10.0002 14.6665 10.0002C15.2208 10.0002 15.7641 9.84549 16.2352 9.5534C16.7063 9.26131 17.0865 8.84349 17.333 8.347C17.6351 8.94991 18.132 9.4331 18.7431 9.71819C19.3543 10.0033 20.0438 10.0735 20.6999 9.9176C21.356 9.76165 21.9401 9.38864 22.3577 8.85905C22.7752 8.32946 23.0015 7.67436 23 7L20 2H4.00001Z"
                              stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square"></path>
                        <path d="M10 22V16H14V22" stroke="currentColor" stroke-width="2" stroke-miterlimit="10"></path>
                    </svg>
                    Kho hàng <span>HARAS</span>
                    <span class="uk-position-center-right" uk-icon="icon: chevron-right"></span>
                </div>
            </div>
        </div>

        <div class="uk-grid uk-grid-20" uk-grid>
            <div class="uk-width-auto">
                <div class="uk-child-width-auto uk-grid-small uk-flex-middle" uk-grid>
                    <div>
                        <input class="uk-checkbox giohang__checkbox" type="checkbox">
                    </div>
                    <div>
                        <div class="uk-position-relative">
                            <div class="uk-cover-container giohang__boxsp__img">
                                <img src="images/noimage.jpg" alt="" uk-cover="">
                                <canvas width="70" height="70"></canvas>
                            </div>
                            <span class="uk-position-bottom-center giohang__boxsp__sl">SL: 1</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <h6 class="uk-h6 giohang__boxsp__name">TÚI XÁCH DU LỊCH CỠ LỚN THỜI TRANG HR272 - HARAS - MÀU XANH</h6>
                <div class="giohang__boxsp__txt1">Phân loại: Xanh</div>
                <div class="giohang__boxsp__txt2">Giá nhà cung cấp: 171.350đ</div>
                <div class="giohang__boxsp__txt3">Giá bán của bạn: 215.000đ</div>
                <div class="uk-margin-small-top" uk-grid>
                    <div class="uk-width-expand">
                        <a href="" class="giohang__boxsp__actionLink">Sửa</a>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="giohang__boxsp__actionLink" uk-icon="icon: trash"> Xoá sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-padding-small giohang__boxship">
        <div class="uk-grid-5 uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <svg width="24" height="24" viewBox="0 0 15 12" fill="currentColor" class="flex-shrink-0">
                    <rect y="2" width="6" height="1" rx="0.5" fill="currentColor"></rect>
                    <rect x="2" y="4" width="4" height="1" rx="0.5" fill="currentColor"></rect>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M2 1C2 0.447715 2.44772 0 3 0H6C6.55228 0 7 0.447715 7 1V4C7 4.55228 6.55228 5 6 5H4V4H4.49995C4.77609 4 4.99995 3.77614 4.99995 3.5C4.99995 3.22386 4.77609 3 4.49995 3H4H2V1Z"
                          fill="currentColor"></path>
                    <path d="M9.4165 6.87593L8.0485 5.96393L9.67975 4.73993L11.47 6.53018C11.6106 6.67084 11.8014 6.74989 12.0002 6.74993H14.2502V5.24993H12.3107L10.2805 3.21968C10.1529 3.09203 9.98345 3.0147 9.80339 3.00189C9.62332 2.98908 9.44468 3.04164 9.30025 3.14993L7.1485 4.76468C6.95657 4.90859 6.80195 5.09643 6.69762 5.31245C6.5933 5.52846 6.5423 5.76635 6.54891 6.00615C6.55552 6.24594 6.61955 6.48066 6.73562 6.6906C6.8517 6.90053 7.01643 7.07957 7.216 7.21268L8.25025 7.90118V11.2499H9.75025V7.49993C9.75027 7.37649 9.71981 7.25495 9.66159 7.1461C9.60337 7.03724 9.51919 6.94444 9.4165 6.87593Z"
                          fill="currentColor"></path>
                    <path d="M5.25 7.5C4.80499 7.5 4.36998 7.63196 3.99997 7.87919C3.62996 8.12643 3.34157 8.47783 3.17127 8.88896C3.00097 9.3001 2.95642 9.7525 3.04323 10.189C3.13005 10.6254 3.34434 11.0263 3.65901 11.341C3.97368 11.6557 4.37459 11.8699 4.81105 11.9568C5.2475 12.0436 5.6999 11.999 6.11104 11.8287C6.52217 11.6584 6.87357 11.37 7.12081 11C7.36804 10.63 7.5 10.195 7.5 9.75C7.5 9.15326 7.26295 8.58097 6.84099 8.15901C6.41903 7.73705 5.84674 7.5 5.25 7.5ZM5.25 10.5C5.10166 10.5 4.95666 10.456 4.83332 10.3736C4.70999 10.2912 4.61386 10.1741 4.55709 10.037C4.50033 9.89997 4.48547 9.74917 4.51441 9.60368C4.54335 9.4582 4.61478 9.32456 4.71967 9.21967C4.82456 9.11478 4.9582 9.04335 5.10368 9.01441C5.24917 8.98547 5.39997 9.00032 5.53701 9.05709C5.67406 9.11386 5.79119 9.20998 5.8736 9.33332C5.95601 9.45666 6 9.60166 6 9.75C6 9.94891 5.92098 10.1397 5.78033 10.2803C5.63968 10.421 5.44891 10.5 5.25 10.5Z"
                          fill="currentColor"></path>
                    <path d="M12.75 7.5C12.305 7.5 11.87 7.63196 11.5 7.87919C11.13 8.12643 10.8416 8.47783 10.6713 8.88896C10.501 9.3001 10.4564 9.7525 10.5432 10.189C10.6301 10.6254 10.8443 11.0263 11.159 11.341C11.4737 11.6557 11.8746 11.8699 12.311 11.9568C12.7475 12.0436 13.1999 11.999 13.611 11.8287C14.0222 11.6584 14.3736 11.37 14.6208 11C14.868 10.63 15 10.195 15 9.75C15 9.15326 14.7629 8.58097 14.341 8.15901C13.919 7.73705 13.3467 7.5 12.75 7.5ZM12.75 10.5C12.6017 10.5 12.4567 10.456 12.3333 10.3736C12.21 10.2912 12.1139 10.1741 12.0571 10.037C12.0003 9.89997 11.9855 9.74917 12.0144 9.60368C12.0434 9.4582 12.1148 9.32456 12.2197 9.21967C12.3246 9.11478 12.4582 9.04335 12.6037 9.01441C12.7492 8.98547 12.9 9.00032 13.037 9.05709C13.1741 9.11386 13.2912 9.20998 13.3736 9.33332C13.456 9.45666 13.5 9.60166 13.5 9.75C13.5 9.94891 13.421 10.1397 13.2803 10.2803C13.1397 10.421 12.9489 10.5 12.75 10.5Z"
                          fill="currentColor"></path>
                    <path d="M12.0232 0C12.4211 0 12.8026 0.158035 13.0839 0.43934C13.3652 0.720644 13.5232 1.10218 13.5232 1.5C13.5232 1.89782 13.3652 2.27936 13.0839 2.56066C12.8026 2.84196 12.4211 3 12.0232 3C11.1945 3 9 1.5 9 1.5C9 1.5 11.1945 0 12.0232 0Z"
                          fill="currentColor"></path>
                </svg>
            </div>
            <div class="uk-width-expand">
                <div>Miễn phí vận chuyển 20.000đ cho đơn từ 149.000đ</div>
                <div>Miễn phí vận chuyển 30.000đ cho đơn từ 249.000đ</div>
                <div>Miễn phí vận chuyển 80.000đ cho đơn từ 1.000.000đ</div>
            </div>
        </div>
    </div>
    <?php endfor; ?>
</div>
<!--/Content-->
<div class="uk-position-bottom uk-position-fixed giohang__bottomFixed uk-background-default">
    <div class="uk-padding-small">
        <div class="uk-grid" uk-grid>
            <div class="uk-width-expand">
                <label class="giohang__bottomFixed__txt"><input class="uk-checkbox giohang__checkbox" type="checkbox"> Chọn tất cả</label>
            </div>
            <div class="uk-width-auto">
                <div class="giohang__bottomFixed__txt">Tổng giá bán <strong>0đ</strong></div>
            </div>
        </div>
    </div>
    <button class="giohang__bottomFixed__btn uk-button uk-button-primary uk-button-large uk-width" uk-icon="icon: chevron-right; ratio: 1"><span>Tạo đơn</span></button>
</div>
<?php require "template-parts/layouts/footer.php"; ?>