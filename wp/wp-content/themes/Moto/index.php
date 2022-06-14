<?php 
/* 
Template name: Main
*/
get_header();
?>

    <!-- HEADER -->

    <header class="header" style="background-image: url(<?= CFS()->get('main_bg'); ?>)">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-12">
            <div class="header-inner">
              <div class="header-catalog">
                <h2><?= CFS()->get('catalog_title'); ?></h2>
                <div class="motorcycles">
                  <?php
                    $loop = CFS()->get('catalog');
                    foreach ($loop as $row) {
                  ?>
                    <div class="motorcycle">
                     <div
                       class="background"
                       style="background-image: url(<?= $row['catalog_img']; ?>">
                       <div class="name"><?= $row['catalog_text']; ?></div>
                     </div>
                    </div>

                  <?php
                    }
                  ?>
                </div>
                <a class="btn" href="/category/<?= CFS()->get('catalog_btn_link'); ?>"><?= CFS()->get('catalog_btn_text'); ?></a>
              </div>
              <div class="header-order">
                <h2><?= CFS()->get('order_title'); ?></h2>
                <div class="motorcycles">
                    <?php
                      $loop = CFS()->get('order');
                      foreach ($loop as $row) {
                    ?>
                      <div class="motorcycle">
                        <div
                         class="background"
                         style="background-image: url(<?= $row['order_img']; ?>">
                          <div class="name"><?= $row['order_text']; ?></div>
                        </div>
                      </div>

                    <?php
                      }
                    ?>
                  </div>
                </div>
                <a class="btn" href="/<?= CFS()->get('order_btn_link'); ?>"><?= CFS()->get('order_btn_text'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <?php get_header('advantages'); ?>

    <!-- ABOUT -->

    <div class="about" style="background-image: url(<?= CFS()->get('about_bg'); ?>)">
      <div class="container">
        <div class="row about-inner">
          <div class="col-6 col-lg-12">
            <h2><?= CFS()->get('about_title'); ?></h2>
            <?= CFS()->get('about_text'); ?>
          </div>
          <div class="col-6 col-lg-12 text-center">
            <a class="btn" href="/category/<?= CFS()->get('catalog_btn_link'); ?>"><?= CFS()->get('about_btn'); ?></a>
          </div>
        </div>
      </div>
    </div>

    <!-- POPLULAR -->

    <div class="popular" style="background-image: url(<?= CFS()->get('bg_2'); ?>)">
      <div class="container">
        <div class="row popular-title">
          <h2><?= CFS()->get('popular_title'); ?></h2>
        </div>
        <div class="row popular-goods">
          <?php
            $posts = get_posts( [
            'numberposts' =>8,
            'category_name' => 'motorcycles_popular',
            'post_type' => 'post',
            ]);
            foreach ($posts as $post) {
          ?>
          <div class="col-3 col-lg-6 col-sm-12 product">
            <?php the_post_thumbnail(); ?>
            <h3><?php the_title(); ?></h3>
            <div>от <?= CFS()->get('motorcycles_price'); ?> &#8381;</div>
            <a href="<?php the_permalink(); ?>" class="btn"><?= CFS()->get('motorcycles_more'); ?></a>
          </div>

          <?php
            }
            wp_reset_postdata();
          ?>

        </div>
        <div class="row">
          <div class="col-12 text-center">
          <a class="btn" href="/category/<?= CFS()->get('catalog_btn_link'); ?>"><?= CFS()->get('about_btn'); ?></a>
          </div>
        </div>
      </div>
    </div>

    <!-- CONTACTS -->

    <div class="contacts" style="background-image: url(<?= CFS()->get('form_bg'); ?>)">
      <div class="container">
        <div class="row">
          <div class="col-4 col-lg-12 contacts-item">
            <h3><?= CFS()->get('form_title'); ?></h3>
            <?= CFS()->get('form_text'); ?>
            <?= do_shortcode(CFS()->get('form_shortcode')); ?>
          </div>

          <?php
            $posts = get_posts([
              'numberposts' => 2,
              'category_name' => 'form',
              'post_type' => 'post'
             ]);
             foreach($posts as $post) {
               setup_postdata($post)
           ?>
              
              <div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
                <?php the_post_thumbnail('add-thumbnail'); ?>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
             </div>

            <?php           
              }
              wp_reset_postdata();
            ?> 


        </div>
      </div>
    </div>

    <script src="js/main.js"></script>    

<?php get_footer(); ?>