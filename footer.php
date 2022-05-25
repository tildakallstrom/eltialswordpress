    <footer>
      <div class="gridfooter">
        <div class="leftline"></div>

        <?php

        if (dynamic_sidebar('LogoFooter')) : endif;
        ?>

        <div class="rightline"></div>
      </div>

      <div class="footermiddle">
        <div class="widget">
          <?php

          if (dynamic_sidebar('LeftFooter')) : endif;
          ?>
        </div>
        <div class="widget2">
          <?php

          if (dynamic_sidebar('RightFooter')) : endif;
          ?>
        </div>
      </div>

      <div class="socialmediafooter">
        <?php

        if (dynamic_sidebar('SocialmediaFooter')) : endif;
        ?>
      </div>
      <div class="bottomfooter">
        <?php

        if (dynamic_sidebar('BottomFooter')) : endif;
        ?></div>

      <script src='<?php echo get_template_directory_uri(); ?>/js/script.js'></script>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>