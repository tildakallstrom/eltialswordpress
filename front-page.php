<?php get_header();
if (have_posts()) {

    the_post();
    the_content();
}
if (dynamic_sidebar('FrontpageWidget')) : endif;
get_footer(); ?>