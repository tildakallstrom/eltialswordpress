<div class="sidebar" id="sidebar" aria-label="More news">

    <h3>More news</h3>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <a class="link" href="<?= the_permalink(); ?>"><?= the_title(); ?></a><br>
    <?php

        }
    }
    ?>
    <br>
</div>