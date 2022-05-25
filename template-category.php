<?php
/* Template Name: Category */
?>
<?php get_header(); ?>
<?php
if (have_posts()) {
    the_post();
    the_content();
}

?>
<div class="newsgrid">
    <div>
        <?php

        query_posts('posts_per_page=3');
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>


                <article class="newsarticle">

                    <h3 class="newsh3"> <?= the_title(); ?></h3>
                    <?= the_content(); ?>

                    <?php if (has_post_thumbnail()) {
                    ?>

                        <?php
                        the_post_thumbnail();
                        ?>

                    <?php
                    } ?> <br>
                </article>

            <?php
            } ?>
    </div>
<?php
        } ?>




<div>
    <?php
    get_sidebar('posts');
    ?>

</div>
</div>
<?php get_footer(); ?>