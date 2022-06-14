<?php 
/* 
Template name: Information
*/
get_header();
?>

    <!-- USEFUL info -->
    <div class="information_page">
      <div class="container">

        <!-- Диски -->
        <div class="row information_title">
          <div class="col-12">
            <h2><?= get_category ( 9, ARRAY_A )['name']; ?></h2>
          </div>
        </div>
        <div class="row information_grid">
          <?php
              $posts = get_posts([
                'numberposts' => -1,
                'category' => 9,
                'orderby' => 'title',
                // 'order' => 'ASC',
                'post_type' => 'post'
                // 'suppress_filters' => 'true'
              ]);
              foreach($posts as $post) {
                setup_postdata($post)
          ?>            
                <div class="col-3 col-lg-6 col-sm-12">
                  <?php the_post_thumbnail(''); ?>
                  <h3><?php the_title(); ?></h3>
                </div>
            <?php           
               }
               wp_reset_postdata();
            ?>  
        </div>

        <!-- Рамы -->
        <div class="row information_title">
          <div class="col-12">
            <h2><?= get_category ( 10, ARRAY_A )['name']; ?></h2>
          </div>
        </div>
        <div class="row information_grid">
        <?php
              $posts = get_posts([
                'numberposts' => -1,
                'category' => 10,
                'orderby' => 'title',
                // 'order' => 'ASC',
                'post_type' => 'post'
                // 'suppress_filters' => 'true'
              ]);
              foreach($posts as $post) {
                setup_postdata($post)
          ?>            
                <div class="col-3 col-lg-6 col-sm-12">
                  <?php the_post_thumbnail(''); ?>
                  <h3><?php the_title(); ?></h3>
                </div>
            <?php           
               }
               wp_reset_postdata();
            ?>  
        </div>

        <!-- Маятники -->
        <div class="row information_title">
          <div class="col-12">
            <h2><?= get_category ( 11, ARRAY_A )['name']; ?></h2>
          </div>
        </div>
        <div class="row information_grid">
        <?php
              $posts = get_posts([
                'numberposts' => -1,
                'category' => 11,
                'orderby' => 'title',
                // 'order' => 'ASC',
                'post_type' => 'post'
                // 'suppress_filters' => 'true'
              ]);
              foreach($posts as $post) {
                setup_postdata($post)
          ?>            
                <div class="col-3 col-lg-6 col-sm-12">
                  <?php the_post_thumbnail(''); ?>
                  <h3><?php the_title(); ?></h3>
                </div>
            <?php           
               }
               wp_reset_postdata();
            ?>  
        </div>

        <!-- Цвет -->
        <div class="row information_title">
          <div class="col-12">
            <h2><?= get_category ( 12, ARRAY_A )['name']; ?></h2>
          </div>
        </div>
        <div class="row information_grid">
        <?php
              $posts = get_posts([
                'numberposts' => -1,
                'category' => 12,
                'orderby' => 'title',
                // 'order' => 'ASC',
                'post_type' => 'post'
                // 'suppress_filters' => 'true'
              ]);
              foreach($posts as $post) {
                setup_postdata($post)
          ?>            
                <div class="col-3 col-lg-6 col-sm-12">
                  <?php the_post_thumbnail(''); ?>
                  <h3><?php the_title(); ?></h3>
                </div>
            <?php           
               }
               wp_reset_postdata();
            ?>  
        </div>

        <!-- Аэрография -->
        <div class="row information_title">
          <div class="col-12">
            <h2><?= get_category ( 13, ARRAY_A )['name']; ?></h2>
          </div>
        </div>
        <div class="row information_grid">
        <?php
              $posts = get_posts([
                'numberposts' => -1,
                'category' => 13,
                'orderby' => 'title',
                // 'order' => 'ASC',
                'post_type' => 'post'
                // 'suppress_filters' => 'true'
              ]);
              foreach($posts as $post) {
                setup_postdata($post)
          ?>            
                <div class="col-3 col-lg-6 col-sm-12">
                  <?php the_post_thumbnail(''); ?>
                  <h3><?php the_title(); ?></h3>
                </div>
            <?php           
               }
               wp_reset_postdata();
            ?>  
        </div>
		
      </div>
    </div>

    <?php get_footer(); ?>