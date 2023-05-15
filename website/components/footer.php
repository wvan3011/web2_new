<footer>
    <div class="wrapper up-to-5-columns">
        <div class="column column-in-footer">
            <div class="footer-title">Chăm sóc khách hàng</div>
            <ul class="footer__list">
                <li class="footer__item"><a href="page/help.html">Trung tâm trợ giúp</a></li>
                <li class="footer__item"><a href="page/help.html">Điều khoản dich vụ</a></li>
            </ul>
        </div>
        <div class="column column-in-footer">
            <div class="footer-title">Về ShopMy</div>
            <ul class="footer__list">
                <li class="footer__item"><a href="page/introduce.html">Giới thiệu về ShopMy</a></li>
                <li class="footer__item"><a href="page/introduce.html"></a></li>
            </ul>
        </div>
        <div class="column column-in-footer">
            <div class="footer-title">Áp dụng thanh toán</div>
            <ul class="footer__list footer-pay">
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
            </ul>
        </div>
        <div class="column column-in-footer">
            <div class="footer-title">Theo dõi MyShop trên</div>
            <ul class="footer__list">
                <li class="footer__item footer__follow">
                    <i class="fab fa-facebook"></i>
                    <a href="https://www.facebook.com/shop.maytinh.3">&ensp;Facebook</a>
                </li>
                <li class="footer__item footer__follow">
                    <i class="fab fa-instagram"></i>
                    <a href="https://www.instagram.com/laptopxachtaygiasi/">&ensp;Instagram</a>
                </li>
            </ul>
        </div>
        <div class="column column-in-footer">
            <div class="footer-title">Liên hệ</div>
            <ul class="footer__list">
                <li class="footer__item">
                    <i class="fas fa-phone-alt"></i>
                    <a>&ensp;0775820223</a>
                </li>
                <li class="footer__item">
                    <i class="fas fa-envelope"></i>
                    <a>&ensp;nguyentandat@gmail.com</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>© 2021 - Bản quyền thuộc về Nguyễn Tấn Đạt</p>
    </div>
</footer>
<script>
    function gotoTop() {
        if (window.jQuery) {
            jQuery('html,body').animate({
                scrollTop: 0
            }, 1000);
        } else {
            document.getElementsByClassName('header')[0].scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    }
</script>
<div class="button-up" onclick="gotoTop();">
    <i class="fas fa-chevron-up"></i>
</div>