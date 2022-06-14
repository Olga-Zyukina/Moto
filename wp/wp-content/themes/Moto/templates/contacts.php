<?php 
/* 
Template name: Contacts
*/
get_header();
?>
    <!-- CONTACTS -->

    <div class="our-contacts">
      <div class="container">
        <div class="row">
          <div class="col-9 col-lg-12">
          <?php
                $loop = CFS()->get('contacts_branches');
                foreach ($loop as $row) {
              ?>
                  <div class="contacts-block">
                    <h2><?= $row['branches_title']; ?></h2>
                    <div class="contacts-inner">
                      <div class="contacts-card">
                        <img src="<?= CFS()->get('icon_mail'); ?>" alt="пишите" />
                        <h3><?= CFS()->get('contacts_mail'); ?></h3>
                        <p><?= $row['branches_mail']; ?></p>
                      </div>
                      <div class="contacts-card">
                        <img src="<?= CFS()->get('icon_call'); ?>" alt="звоните" />
                        <h3><?= CFS()->get('contacts_call'); ?></h3>
                        <p><?= $row['branches_phone']; ?></p>
                      </div>
                      <div class="contacts-card">
                        <img src="<?= CFS()->get('icon_address'); ?>" alt="приезжайте" />
                        <h3><?= CFS()->get('contacts_address'); ?></h3>
                        <p><?= $row['branches_address']; ?></p>
                      </div>
                    </div>
                    <?= $row['branches_map']; ?>
                  </div>
              <?php
                }
              ?>

          </div>
          <div class="col-3 col-lg-12" id="cities">
            <h2><?= CFS()->get('dealer_title '); ?></h2>
            <input type="text" class="search" placeholder="Поиск" />
            <ul class="list">
              <?php
                $loop = CFS()->get('contacts_dealer');
                foreach ($loop as $row) {
              ?>
                <li><p class="city"><?= $row['dealer_address']; ?></p></li>
              <?php  
                }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php get_footer(); ?>