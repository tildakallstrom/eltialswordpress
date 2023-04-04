<?php
/* Template Name: Listnews */
?>
<?php get_header();
if (have_posts()) {
    the_post();
    the_content();
}

query_posts('posts_per_page=20');
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <article class="newsarticle">
            <div>
                <h3 class="newsh3"> <?= the_title(); ?> <span class="datespan"> (<?php echo get_the_date(); ?>)</span></h3>
                <p class="newsp"> <?= /*the_excerpt();*/ the_content(); ?> </p>
            </div>
            <div class='newsimg'>
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail();
                } ?> </div><br>
        </article>
<?php
    }
}
get_footer(); ?>