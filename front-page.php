<?php get_header(); ?>

<?php

if (have_posts()) {

    the_post();
    the_content();
}
if (dynamic_sidebar('FrontpageWidget')) : endif;
?>






<?php get_footer(); ?>