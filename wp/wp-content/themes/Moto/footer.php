    <!-- FOOTER -->

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <?php
              wp_nav_menu( [
              'theme_location' => 'bottom',
              'container' => '',
              'items_wrap' => '%3$s',
              ] );
            ?>
              <?php
                $settings = get_posts( [
                'numberposts' =>1,
                'category_name' => 'settings',
                'post_type' => 'post',
                 ]);
                foreach ($settings as $post) {
              ?>

              <span class="accent-color">&copy; </span> <?= CFS()->get('footer_text'); ?>, 2015-<?= date('Y'); ?>

              <?php
                }
                wp_reset_postdata();
              ?>
          </div>
        </div>
      </div>
    </div>

    <!-- BACK-TO-TOP -->

    <a href="#" class="back-to-top"><img src="http://moto/wp-content/themes/moto/assets/img/icons/arrow-up.png" alt="arrow-up"></a>

    <?php wp_footer(); ?>
  </body>
</html>