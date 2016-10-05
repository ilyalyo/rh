<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <style>
            #main {
                margin-left: 5%;
                margin-right: 5%;
            }

            .slider-btns button {
                background: white;
                border: black solid 2px;
                color: black;
            }

            .slider-btns button:hover {
                border: #2173fc solid 2px;
                color: #2173fc;
            }

            .slider-btns button:active {
                border: #2173fc solid 2px;
                color: #2173fc;
            }
            .slick-active{
                outline: none;
            }
            .your-class img{
                max-height: 225px;
            }
        </style>
        <div class="row slider-btns text-center">
            <div class="col-md-4">
                <button id="slide_1">Озонобезопасные ГФУ<br>ГидроФторУглероды</button>
            </div>
            <div class="col-md-4">
                <button id="slide_2">Озоноопасные хладогенты<br>(переходные)</button>
            </div>
            <div class="col-md-4">
                <button id="slide_3">Озоноопасные хладогенты<br>ХлорФторУглероды</button>
            </div>
        </div>

        <div class="your-class">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R21</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/2/r21.png">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R22</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/2/r22.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R141b</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/2/R141b.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R142b</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/2/R142b.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R401a,b,c </h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/2/R401a.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R406a</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/2/R406a.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R409 a,b,c</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/2/R409.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R11</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/1/r11.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R12</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/1/r12.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R13</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/1/r13.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R114B2</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/1/R114B2.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R125</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/r125.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>507</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/r507.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R23</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/r23.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>134a</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/r134.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R152a</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/r152.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>404a</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/r404.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>R227ea</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/r227.jpg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fixed-container">
                                <h2>407c</h2>
                                <img src="/wp-content/themes/rusholod/img/hladons/r407.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- .site-main -->
    <script>
        jQuery(document).ready(function () {
            jQuery('.your-class').slick({
                arrows: false
            });
            jQuery('#slide_1').click(function () {
                jQuery('.your-class').slick('slickGoTo', 0);
            });
            jQuery('#slide_2').click(function () {
                jQuery('.your-class').slick('slickGoTo', 1);
            });
            jQuery('#slide_3').click(function () {
                jQuery('.your-class').slick('slickGoTo', 2);
            });
        });
    </script>
    <?php get_sidebar('content-bottom'); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>
