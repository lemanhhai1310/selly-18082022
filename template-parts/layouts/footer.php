<?php if (isset($menuBottom)&&$menuBottom): ?>
    <!--Menu bottom-->
    <nav class="footer__nav uk-position-fixed uk-position-bottom">
        <ul class="footer__nav__ul uk-nav uk-child-width-expand uk-tab">
            <li class="uk-active footer__nav__li">
                <a href="." class="footer__nav__a">
                    <span class="footer__nav__icon footer__nav__icon--sanpham"></span>
                    <div class="uk-navbar-subtitle footer__nav__txt line-clamp-1">Sản phẩm</div>
                </a>
            </li>
            <li class="footer__nav__li">
                <a href="donhang.php" class="footer__nav__a">
                    <span class="footer__nav__icon footer__nav__icon--donhang"></span>
                    <div class="uk-navbar-subtitle footer__nav__txt line-clamp-1">Đơn hàng</div>
                </a>
            </li>
            <li class="footer__nav__li">
                <a href="" class="footer__nav__a">
                    <span class="footer__nav__icon footer__nav__icon--thuvien"></span>
                    <div class="uk-navbar-subtitle footer__nav__txt line-clamp-1">Thư viện</div>
                </a>
            </li>
            <li class="footer__nav__li">
                <a href="thuong.php" class="footer__nav__a">
                    <span class="footer__nav__icon footer__nav__icon--thuong"></span>
                    <div class="uk-navbar-subtitle footer__nav__txt line-clamp-1">Thưởng</div>
                </a>
            </li>
            <li class="footer__nav__li">
                <a href="taikhoan.php" class="footer__nav__a">
                    <span class="footer__nav__icon footer__nav__icon--taikhoan"></span>
                    <div class="uk-navbar-subtitle footer__nav__txt line-clamp-1">Tài khoản</div>
                </a>
            </li>
        </ul>
    </nav>
    <!--/Menu bottom-->
<?php else: ?>

<?php endif; ?>
</div>
<!--/app-->
<script src="js/app.js?v=<?php echo(time()) ?>"></script>
</body>
</html>