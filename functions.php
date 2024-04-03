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
 * Include File
 *
 */

// Constants
require_once get_parent_theme_file_path() . '/inc/poolax-constants.php';

//theme setup
require_once POOLAX_DIR_PATH_INC . 'theme-setup.php';

//essential scripts
require_once POOLAX_DIR_PATH_INC . 'essential-scripts.php';

// Woo Hooks
require_once POOLAX_DIR_PATH_INC . 'woo-hooks/poolax-woo-hooks.php';

// Woo Hooks Functions
require_once POOLAX_DIR_PATH_INC . 'woo-hooks/poolax-woo-hooks-functions.php';

// plugin activation
require_once POOLAX_DIR_PATH_FRAM . 'plugins-activation/poolax-active-plugins.php';

// theme dynamic css
require_once POOLAX_DIR_PATH_INC . 'poolax-commoncss.php';

// meta options
require_once POOLAX_DIR_PATH_FRAM . 'poolax-meta/poolax-config.php';

// page breadcrumbs
require_once POOLAX_DIR_PATH_INC . 'poolax-breadcrumbs.php';

// sidebar register
require_once POOLAX_DIR_PATH_INC . 'poolax-widgets-reg.php';

//essential functions
require_once POOLAX_DIR_PATH_INC . 'poolax-functions.php';

// helper function
require_once POOLAX_DIR_PATH_INC . 'wp-html-helper.php';

// Demo Data
require_once POOLAX_DEMO_DIR_PATH . 'demo-import.php';

// pagination
require_once POOLAX_DIR_PATH_INC . 'wp_bootstrap_pagination.php';

// poolax options
require_once POOLAX_DIR_PATH_FRAM . 'poolax-options/poolax-options.php';

// hooks
require_once POOLAX_DIR_PATH_HOOKS . 'hooks.php';

// hooks funtion
require_once POOLAX_DIR_PATH_HOOKS . 'hooks-functions.php';

