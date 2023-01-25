<?php 

// 
function mzmdesigner_script_enqueue() {
    // General Style    
    wp_enqueue_style('Style', get_stylesheet_uri());
    
    // Include CSS Files
	wp_enqueue_style( 'Bootstrap-V5.2-CSS', get_theme_file_uri() . '/resources/bootstrap/bootstrap.min.css', NULL, 'all' );
    wp_enqueue_style( 'RemixIcon', get_theme_file_uri() . '/resources/vendor/remixicon/remixicon.css', NULL, 'all' );
    wp_enqueue_style( 'Swiper-CSS', get_theme_file_uri() . '/resources/vendor/swiper-js/swiper-bundle.min.css', NULL, 'all' );
    wp_enqueue_style( 'Theme-CSS', get_theme_file_uri() . '/resources/theme/css/mz-l.css', NULL, 'all' );

    // Include JS  Files
    wp_enqueue_script( 'Popper JS', get_theme_file_uri() . '/resources/bootstrap/popper.min.js', NULL, true );
    wp_enqueue_script( 'Bootstrap-V5.2-JS', get_theme_file_uri() . '/resources/bootstrap/bootstrap.min.js', NULL, true );
    wp_enqueue_style( 'Jquery-JS', get_theme_file_uri() . '/resources/vendor/jquery/jquery.min.js', NULL, 'all' );
    wp_enqueue_style( 'Swiper-JS', get_theme_file_uri() . '/resources/vendor/swiper-js/swiper-bundle.min.js', NULL, 'all' );
    wp_enqueue_script( 'Theme-JS', get_theme_file_uri() . '/resources/theme/js/mz-l.js', NULL, true );

}
add_action( 'wp_enqueue_scripts', 'mzmdesigner_script_enqueue' );


// Navwalker
function mzmdesigner_register_navwalker(){
    require_once get_template_directory() . '/resources/bootstrap/bootstrap-5-wordpress-navbar-walker.php';
}
add_action( 'after_setup_theme', 'mzmdesigner_register_navwalker' );


// Theme Setup
function mzmdesigner_theme_setup(){
    // Theme Support
	add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));
    add_theme_support('title-tag');

    // Nav Menus
    register_nav_menus(array(
        'main-menu'       => __('Main Menu'),
        'side-menu'       => __('Topics'),
    ));
}
add_action('after_setup_theme', 'mzmdesigner_theme_setup');


// Custom Image Sizes
add_image_size('logoMain', 187, 50, array('top', 'center'));
add_image_size('blogBanner', 1920, 715, array('top', 'center'));
add_image_size('blogThumb', 1120, 715, array('top', 'center'));
add_image_size('blogThumbSmall', 522, 365, array('top', 'center'));
add_image_size('videoThumb', 392, 283, array('top', 'center'));
add_image_size('v-banner', 808, 126, array('top', 'center'));
add_image_size('s-banner', 522, 720, array('top', 'center'));
add_image_size('pageBanner', 1070, 462, array('top', 'center'));



// Copyrights
function update_footer_admin () {    
echo 'Design & Development By: <a href="https://mostafazakaria.com/" target="_blank">www.mostafazakaria.com</a> | For any help or support send email to <a target="_blank" href="mailto:cs@mostafazakaria.com">cs@mostafazakaria.com</a>';    
}    
add_filter('admin_footer_text', 'update_footer_admin');