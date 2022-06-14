<?php get_header(); ?>

    <!-- MOTO PAGE -->

    <div class="moto-template">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-12">
            <div class="moto-gallery">
              <?php
                $loop = CFS()->get('gallery');
                foreach ($loop as $row) {
              ?>
                  <a href="<?= $row['gallery_photo']; ?>" data-caption="<?= $row['gallery_description']; ?>" >
                    <img src="<?= $row['gallery_photo']; ?>" alt="<?= $row['gallery_title']; ?>" />
                  </a>
              <?php
                }
              ?>
            </div>
          </div>
          <div class="col-6 col-lg-12 moto-description">
            <h2><?php the_title(); ?>
              <span>
                <?php 
                  if(CFS()->get('moto_stock')) {
                    echo CFS()->get('moto_stock_true');
                  } else {
                    echo CFS()->get('moto_stock_false');
                  }                 
                ?>
              </span>
            </h2>
            <?php the_content(); ?>
            <h3>от <?= CFS()->get('motorcycles_price'); ?> &#8381;</h3>
            <?= do_shortcode(CFS()->get('moto_form_shortcode')); ?>
            <table>
              <caption><?= CFS()->get('moto_property_title'); ?></caption>
              <?php
                $loop = CFS()->get('moto_property');
                foreach ($loop as $row) {
              ?>
                <tr>              
                  <td><?= $row['moto_key']; ?></td>
                  <td><?= $row['moto_value']; ?></td>
                </tr>
              <?php
                }
              ?>
            </table>
            <a class="btn" href="/<?= CFS()->get('info_slug'); ?>"><?= CFS()->get('info_title'); ?></a>
          </div>
        </div>
      </div>
    </div>

    <?php get_footer(); ?>