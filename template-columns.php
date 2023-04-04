<?php
/* Template Name: NewsColumn */
?>
<?php get_header(); 
if (have_posts()) {
  the_post();
  the_content();
}
?>

<div class="grids">
  <div class="leftcolumn">
    <?php
    query_posts('posts_per_page=50');
    if (have_posts()) {
      while (have_posts()) {
        the_post();
    ?>
        <h3 class="newsh3"> <?= the_title(); ?></h3>
        <p class="newsp"> <?= the_excerpt(); ?> </p>
        <a href="<?= the_permalink(); ?>" class="readmore1">Läs mer...</a><br><br>
    <?php
      }
    }
    ?>
  </div>
  <div class="rightcolumn">
  </div>
</div>
<?php get_footer(); ?>