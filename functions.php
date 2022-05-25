<?php
/*
Template name Eltials
@package Eltials
*/
/* registrera meny */

add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(array(
        'main-menu' => __('Huvudmeny')
    ));
}

/*aktivera stöd för dynamisk header*/

$args = array(
    'width' => 1760,
    'height' => 536,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
    'uploads' => true
);

add_theme_support('custom-header', $args);

/* aktivera stöd för thumbnails */


/* Custom sizes */
add_image_size('notis-thumb', 80, 80, true);
add_image_size('notis-wide', 960, 240, array('center', 'center'));
add_image_size('notis-hero', 300, 300, false);
add_theme_support('post-thumbnails');
add_image_size('sml_size', 300);
add_image_size('mid_size', 600);
add_image_size('lrg_size', 1200);
add_image_size('sup_size', 2400);


// aktivera widget-area

function new_sidebar_widget_init()
{

    register_sidebar(array(
        'id' => 'LeftHeader',
        'name' => 'LeftHeader',
        'description' => 'Widget area',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'id' => 'FrontpageWidget',
        'name' => 'FrontpageWidget',
        'description' => 'Widget area',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'id' => 'LogoFooter',
        'name' => 'LogoFooter',
        'description' => 'Widget area',
        'before_widget' => '<div class="footerimg">',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'id' => 'LeftFooter',
        'name' => 'LeftFooter',
        'description' => 'Widget area',
        'before_widget' => '<div class="leftfooterw">',
        'after_widget' => '</div>',

    ));

    register_sidebar(array(
        'id' => 'RightFooter',
        'name' => 'RightFooter',
        'description' => 'Widget area',
        'before_widget' => '<div class="rightfooterw">',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'id' => 'SocialmediaFooter',
        'name' => 'SocialmediaFooter',
        'description' => 'Widget area',
        'before_widget' => '<div class="centerwidget">',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'id' => 'BottomFooter',
        'name' => 'BottomFooter',
        'description' => 'Widget area',
        'before_widget' => ' ',
        'after_widget' => ' ',
    ));
    register_sidebar(array(
        'id' => 'ListNewsWidget',
        'name' => 'ListNewsWidget',
        'description' => 'Widget area',
        'before_widget' => ' ',
        'after_widget' => ' ',
    ));
}
add_action('widgets_init', 'new_sidebar_widget_init');

remove_filter('render_block', 'wp_render_layout_support_flag', 10, 2);

add_filter('render_block', function ($block_content, $block) {
    if ($block['blockName'] === 'core/group') {
        return $block_content;
    }

    return wp_render_layout_support_flag($block_content, $block);
}, 10, 2);
function eltials_remove_dynamic_css()
{
    remove_all_filters('eltials/frontend/dynamic_css');
    remove_all_filters('eltials/frontend/woocommerce/dynamic_css');

    remove_all_filters('eltials/frontend/pro_dynamic_css');
    remove_all_filters('eltials/frontend/woocommerce/pro_dynamic_css');
}
add_action('wp_enqueue_scripts', 'eltials_remove_dynamic_css', 0);

/* read more link */
function eltials_excerpt_more($link)
{
    if (is_admin()) {
        return $link;
    }

    $link = sprintf(
        '<p class="link"><a href="%1$s" class="link">%2$s</a></p>',
        esc_url(get_permalink(get_the_ID())),
        sprintf(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'eltials'), get_the_title(get_the_ID()))
    );
    return ' &hellip; ' . $link;
}
add_filter('excerpt_more', 'eltials_excerpt_more');
