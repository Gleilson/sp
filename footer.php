<?php
/**
 * @Packge     : Poolax
 * @Version    : 1.0
 * @Author     : Themeholy
 * @Author URI : https://themeforest.net/user/themeholy
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
    
    /**
    *
    * Hook for Footer Content
    *
    * Hook poolax_footer_content
    *
    * @Hooked poolax_footer_content_cb 10
    *
    */
    do_action( 'poolax_footer_content' );


    /**
    *
    * Hook for Back to Top Button
    *
    * Hook poolax_back_to_top
    *
    * @Hooked poolax_back_to_top_cb 10
    *
    */
    do_action( 'poolax_back_to_top' );

    /**
    *
    * poolax grid lines
    *
    * Hook poolax_grid_lines
    *
    * @Hooked poolax_grid_lines_cb 10
    *
    */
    do_action( 'poolax_grid_lines' );

    wp_footer();
    ?>
</body>
</html>