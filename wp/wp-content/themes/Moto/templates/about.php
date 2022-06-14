<?php 
/* 
Template name: About
*/
get_header();
?>

    <!-- ABOUT COMPANY -->

    <div
      class="about-company"
      style="background-image: url(<?= CFS()->get('about_bg'); ?>)"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <img src="<?= CFS()->get('about_img'); ?>" alt="О компании" />
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>

    <?php get_header('advantages'); ?>
    
    <!-- TECHNICAL --> 

    <div class="technical" style="background-image: url(<?= CFS()->get('about_tech_bg'); ?>)">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2><?= CFS()->get('about_tab_title'); ?></h2>
            <p><?= CFS()->get('about_tab_description'); ?></p>
            <a href="<?= CFS()->get('about_tab_open_file'); ?>" class="btn" target="_blank"><?= CFS()->get('about_tab_open_text'); ?></a>
            <a href="<?= CFS()->get('about_tab_download_file'); ?>" class="btn" download=""><?= CFS()->get('about_tab_download_text'); ?></a>
          </div>
        </div>
      </div>
    </div>

    <?php get_footer(); ?>
