<div class="container  wrapper">
    <div class="advertisement">
        <div class="slider" id="slider-container">
            <div id="jssor_1" onmouseover="showSliderButton()" onmouseout="hideSliderButton()">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin"><img src="./assets/img/slider/spin.svg"
                                                                   alt=""/></div>
                <div data-u="slides" class="list-slider">
                    <div><img data-u="image" src="https://cdn2.cellphones.com.vn/690x300,webp,q100/https://dashboard.cellphones.com.vn/storage/x5-pro-sliding.png"/></div>
                    <div><img data-u="image" src="https://cdn2.cellphones.com.vn/690x300,webp,q100/https://dashboard.cellphones.com.vn/storage/redmi-note12s-004-sliding.png"/></div>
                    <div><img data-u="image" src="https://cdn2.cellphones.com.vn/690x300,webp,q100/https://dashboard.cellphones.com.vn/storage/vivo-v27e-sliding-moban.png"/></div>
                    <div><img data-u="image" src="https://cdn2.cellphones.com.vn/690x300,webp,q100/https://dashboard.cellphones.com.vn/storage/fold-right-th5-new.png"/></div>
                    <div><img data-u="image" src="https://cdn2.cellphones.com.vn/690x300,webp,q100/https://dashboard.cellphones.com.vn/storage/vivo-v27e-sliding-moban.png"/></div>
                </div>
                <a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">responsive
                    slider</a>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:16px;right:16px;"
                     data-autocenter="1"
                     data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:12px;height:12px;">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <path class="b"
                                  d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
                        </svg>
                    </div>
                </div>

                <div data-u="arrowleft" class="jssora093 slider__button-left" data-autocenter="2" data-scale="0.75"
                     data-scale-left="0.75" onmouseover="jssora093Hover(0)">
                    <i class="fas fa-angle-left"></i>
                </div>
                <div data-u="arrowright" class="jssora093 slider__button-right" data-autocenter="2" data-scale="0.75"
                     data-scale-right="0.75" onmouseover="jssora093Hover(1)">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
            <script type="text/javascript">
                $(window).resize(function () {
                    let width = $(window).width();
                    if (width >= 1200) window.jssor_1_slider_init = slider(800);
                    else{
                        window.jssor_1_slider_init = slider(width - 20);
                        document.getElementById("slider-container").style.width=width+"px";
                    }
                    jssor_1_slider_init();
                });
                let width = $(window).width();
                if (width >= 1200) window.jssor_1_slider_init = slider(800);
                else window.jssor_1_slider_init = slider(width - 20);
                jssor_1_slider_init();
            </script>
        </div>
        <div class="advertisement-fixed">
            <img data-u="image" src="https://cdn2.cellphones.com.vn/690x300,webp,q10/https://dashboard.cellphones.com.vn/storage/fold-right-th5-new.png"/>
            <img data-u="image" src="https://cdn2.cellphones.com.vn/690x300,webp,q10/https://dashboard.cellphones.com.vn/storage/right-banner-th5-newww1.jpg"/>
        </div>
    </div>
    <div class="wrapper up-to-5-columns list-logo-brands ">
        <a href="" class="logo-brands__item">Samsung</a>
        <a href="" class="logo-brands__item">Apple</a>
        <a href="" class="logo-brands__item">Xiaomi</a>
        <a href="" class="logo-brands__item">Nokia</a>
    </div>
    <div class="products wrapper up-to-5-columns">
        <h3 style="width: inherit; text-align: left;padding:0 20px;font: inherit;font-size: 20px;color:var(--primary-color);">Nổi bật nhất</h3>
        <div class="column">
            <a class="product" href="./phone-details">
                <div class="product__img" style="background-image: url('../phone_image/Rog5s_1_1.jpg')"></div>
                <h4 class="product-name">Samsung Galaxy M14 5G 4GB 128GB</h4>
                <div class="product__price">
                    <span class="product__price-old">17.690.000đ</span>
                    <span class="product__price-new">15.690.000đ</span>
                </div>
                <div class="product__action">
                    <div class="product__start">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <p class="product__sold">1.1k đánh giá</p>
                    </div>

                    <i class="fas fa-cart-plus product__action-add-cart" title="Thêm vào giỏ hàng"></i>
                </div>
                <p style="display: flex; justify-content: center;padding: 8px;margin: 10px;font-size:14px;border: var(--primary-color) solid 1px;border-radius: 4px;">Giao nhanh miễn phí</p>
                <div class="product__favourite">
                    <i class="fas fa-check"></i>
                    &nbsp;Yêu thích
                </div>
                <div class="product__sale-off">
                    <div class="after"></div>
                    <span class="sale-off__percent">10%</span>
                    <span class="sale-off__label">Giảm</span>
                </div>
            </a>
        </div>
    </div>
    <div class="pages">
        <div class="page "><i class="fas fa-angle-left"></i></div>
        <div class="page active">1</div>
        <div class="page">2</div>
        <div class="page">3</div>
        <div class="page">...</div>
        <div class="page"><i class="fas fa-angle-right"></i></div>
    </div>
</div>
