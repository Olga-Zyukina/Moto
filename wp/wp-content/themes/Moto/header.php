<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      <?php
        if (is_404()) {
          echo 'Error 404';
        } else {
          the_title();
        }
      ?>
    </title>
    <?php wp_head(); ?>
  </head>

  <body>
    <!-- MENU -->
    <div class="menu">
      <div class="container">
        <div class="row">
          <div class="logo">
            <a href="<?= home_url(); ?>">
              <?php the_custom_logo(); ?>
            </a>
          </div>
          <?php
              wp_nav_menu( [
              'theme_location'  => 'top',
              'container'       => '',
              'menu_class'      => '',
              'menu_id'         => '',
            ] );
          ?>
          <div class="phone">
            <a href="tel:+79999999999">&#9742; +7 (999) 999-99-99</a>
          </div>
        </div>
      </div>
    </div>