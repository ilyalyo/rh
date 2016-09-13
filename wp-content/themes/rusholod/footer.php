<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>



<footer id="colophon" class="site-footer" role="contentinfo">
    <?php if ( has_nav_menu( 'primary' ) ) : ?>
        <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu',
            ) );
            ?>
        </nav><!-- .main-navigation -->
    <?php endif; ?>

    <?php if ( has_nav_menu( 'social' ) ) : ?>
        <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'social',
                'menu_class'     => 'social-links-menu',
                'depth'          => 1,
                'link_before'    => '<span class="screen-reader-text">',
                'link_after'     => '</span>',
            ) );
            ?>
        </nav><!-- .social-navigation -->
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color: #f9f9f9;">
                <?php
                    $menu_name = "main menu";
                    $menu = wp_get_nav_menu_object( $menu_name );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    $menu_list = '<ul class="nav nav-pills" id="menu-' . $menu_name . '">';

                    foreach ( (array) $menu_items as $key => $menu_item ) {
                        if($menu_item->menu_item_parent != 0 || $menu_item->type_label == "Произвольная ссылка")
                            continue;
                        $title = $menu_item->title;
                        $url = $menu_item->url;
                        $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
                    }
                echo $menu_list;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 info">
                <h3 style="color: black;
    font-size: 16px;
    font-weight: 600;">info@rusholod.com <br> +7 (812) 677-93-82</h3>
                <br>
                <br>
                <img src="/wp-content/themes/rusholod/img/iconVKFB.png">
            </div>
        </div>
    </div>
        <?php
        /**
         * Fires before the twentysixteen footer text for footer customization.
         *
         * @since Twenty Sixteen 1.0
         */
        do_action( 'twentysixteen_credits' );
        ?>
    </div><!-- .site-info -->
</footer><!-- .site-footer -->
</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>