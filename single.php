<?php get_header(); ?>
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><img width="1750" height="668" class="wp-block-cover__image-background wp-image-45" alt="" src="http://localhost/dashboard/eltials/wp-content/uploads/2022/03/dsc_9268-1.jpg" data-object-fit="cover" />
  <div class="wp-block-cover__inner-container">
    <h1 class="has-text-align-left has-white-color has-text-color">Eltials Ragdoll</h1>



    <p class="has-text-align-left pleft has-white-color has-text-color">Eltials Ragdoll finns i Kalmar och föder upp den härliga kattrasen Ragdoll i liten skala.</p>



    <div class="wp-container-1 wp-block-buttons">
      <div class="wp-block-button is-style-outline wpbtnhero"><a class="wp-block-button__link" href="http://localhost/dashboard/eltials/om-oss/">Läs mer</a></div>


    </div>
  </div>
</div>
<section class="news">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2 class="newsh2">
        <?php the_title(); ?>
      </h2>

      <p class="p">
        <?php the_content(); ?>
      </p>

      <?php if (has_post_thumbnail()) {
      ?>

      <?php
        the_post_thumbnail();
      }
      ?>
      <a class="back" href="javascript:history.go(-1)">Tillbaka till butiken</a>
</section>
<?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>