<?php
get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" id="theCarousel" style="z-index:1">

                    <ol class="carousel-indicators ">
                        <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#theCarousel" data-slide-to="1"></li>
                        <li data-target="#theCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="">
                                <a href="#1"><img src="/wp-content/themes/rusholod/img/slide3.jpg"
                                                  class="img-responsive"></a>
                                <div class="carousel-caption text-left">
                                    <h3>Будущее за <br> альтернативной энергетикой</h3>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=""><a href="#1"><img src="/wp-content/themes/rusholod/img/slide2.jpg"
                                                            class="img-responsive"></a></div>

                            <div class="carousel-caption text-left">
                                <h3>Более 18 лет мы занимаемся <br> интересными проектами</h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class=""><a href="#1"><img src="/wp-content/themes/rusholod/img/slide1.jpg"
                                                            class="img-responsive"></a></div>
                            <div class="carousel-caption text-left">
                                <h3>Мы — российские <br> производители!</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="site-content">


        <div class="row">
            <div class="col-md-3 chapter">
                <h3>Направления <s style="font-size: 19px;padding-left: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s>
                </h3>
            </div>
        </div>


        <div class="row">

            <div class="col-md-6">
                <div>
                    <img src="/wp-content/themes/rusholod/img/img1.jpg" class="img-components">
                </div>
                <div class="text-over-pic">
                    <h2>ЧИЛЛЕРЫ</h2>
                    <p>Индивидуальный подход.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div>
                    <img src="/wp-content/themes/rusholod/img/img2.jpg" class="img-components">
                </div>
                <div class="text-over-pic">
                    <h2>РУССКИЕ <br> ТЕПЛОВЫЕ НАСОСЫ</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div>
                    <img src="/wp-content/themes/rusholod/img/img3.jpg" class="img-components">
                </div>
                <div class="text-over-pic">
                    <h2>КОМПЛЕКТУЮЩИЕ</h2>
                    <p>Новая комплексная услуга <br> на лучших складах.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div>
                    <img src="/wp-content/themes/rusholod/img/img4.jpg" class="img-components">
                </div>
                <div class="text-over-pic">
                    <h2>ХЛАДОН</h2>
                    <p>Оповещения о ваших заказах <br> и новости всегда под рукой.</p>
                </div>
            </div>
        </div>

        <div class="container"
             style="background: url('/wp-content/themes/rusholod/img/1998-capt.png') no-repeat; background-position: right;background-size: contain;
                padding: 0 0 0 0; margin: 0 0 0 0;">

            <div class="row">
                <div class="chapter">
                    <h3>О компании в цифрах <s style="font-size: 19px;padding-left: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s>
                    </h3>
                </div>
            </div>

            <div class="row vertical-align">
                <div class="bluenum">1998</div>
                <div class="bluenum-desc">ГОД <br> ОСНОВАНИЯ</div>
            </div>
            <div class="row vertical-align">
                <div class="bluenum">10</div>
                <div class="bluenum-desc">ФИЛИАЛОВ <br> В РОССИИ</div>
            </div>
            <div class="row vertical-align">
                <div class="bluenum">1000</div>
                <div class="bluenum-desc">НАИМЕНОВАНИЙ <br> ТОВАРОВ</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 chapter">
                <h3>Сертификаты <s style="font-size: 19px;padding-left: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s>
                </h3>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="row pict-pad">
                        <img src="/wp-content/themes/rusholod/img/sert1.jpg">
                    </div>
                    <div class="row col-md-9 col-md-push-4 pict-pad">
                        <div>
                            <img src="/wp-content/themes/rusholod/img/sert3.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row pict-pad">
                        <img src="/wp-content/themes/rusholod/img/sert2.jpg">
                    </div>
                    <div class="row pict-pad">
                        <img src="/wp-content/themes/rusholod/img/sert4.jpg">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row pict-pad" style="margin-top: 75%;">
                        <img src="/wp-content/themes/rusholod/img/sert5.jpg">
                    </div>
                </div>
            </div>
        </div>

    </div>
</main><!-- .site-main -->

<script>
    jQuery(function ($) {
        $(document).ready(function () {
            $('.carousel').carousel({
                interval: 4000
            }).carousel('cycle');
            $('.multi-item-carousel .item').each(function () {
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            });
        });
    });

</script>
<?php get_sidebar('content-bottom'); ?>

<?php get_footer(); ?>
