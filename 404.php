<?php
/**
 * @Packge     : Poolax
 * @Version    : 1.0
 * @Author     : Themeholy
 * @Author URI : https://themeforest.net/user/themeholy
 *
 */

    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit();
    }

    if( class_exists( 'ReduxFramework' ) ) {
        $poolax404title     = poolax_opt( 'poolax_error_title' );
        $poolax404description  = poolax_opt( 'poolax_error_description' );
        $poolax404btntext      = poolax_opt( 'poolax_error_btn_text' );
    } else {
        $poolax404title     = __( 'OooPs! Page Not Found', 'poolax' );
        $poolax404description  = __( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'poolax' );
        $poolax404btntext      = __( ' Back To Home', 'poolax');

    }

    // get header //
    get_header(); ?>

    <section class="space">
        <div class="container">
            <div class="error-img">
                <?php if(!empty(poolax_opt('poolax_error_img', 'url' ) )): ?>
                    <img src="<?php echo esc_url( poolax_opt('poolax_error_img', 'url' ) ) ?>" alt="<?php echo esc_attr__('404 image', 'poolax'); ?>">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/error.svg" alt="<?php echo esc_attr__('404 image', 'poolax'); ?>">
                <?php endif; ?>
            </div>
            <div class="error-content">
                <h2 class="error-title"><?php echo wp_kses_post( $poolax404title ); ?></h2>
                <p class="error-text"><?php echo esc_html( $poolax404description ); ?></p>
                <div class="btn-group justify-content-center">
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="th-btn error-btn"><i class="fal fa-home me-2"></i><?php echo esc_html( $poolax404btntext ); ?></a>
                </div>
            </div>
        </div>
    </section>
    
    <?php
    //footer
    get_footer();