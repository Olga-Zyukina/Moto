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
            <span class="accent-color">&copy; </span> MOTO, 2022
          </div>
        </div>
      </div>
    </div>

    <!-- BACK-TO-TOP -->

    <a href="#" class="back-to-top"><img src="http://moto/wp-content/themes/moto/assets/img/icons/arrow-up.png" alt="arrow-up"></a>

    <?php wp_footer(); ?>
  </body>
</html>