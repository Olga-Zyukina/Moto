<?php 
/* 
Template name: Main
*/
get_header();
?>

    <!-- HEADER -->

    <header class="header" style="background-image: url(img/header.png)">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-12">
            <div class="header-inner">
              <div class="header-catalog">
                <h2>Каталог</h2>
                <div class="motorcycles">
                  <div class="motorcycle">
                    <div
                      class="background"
                      style="background-image: url(img/motorcycle1.jpg)"
                    >
                      <div class="name">Классика</div>
                    </div>
                  </div>
                  <div class="motorcycle">
                    <div
                      class="background"
                      style="background-image: url(img/motorcycle2.jpg)"
                    >
                      <div class="name">Спорт</div>
                    </div>
                  </div>
                  <div class="motorcycle">
                    <div
                      class="background"
                      style="background-image: url(img/motorcycle3.jpg)"
                    >
                      <div class="name">Чоппер</div>
                    </div>
                  </div>
                </div>
                <a class="btn" href="catalog.html">Смотреть</a>
              </div>
              <div class="header-order">
                <h2>На заказ</h2>
                <div class="motorcycles">
                  <div class="motorcycle">
                    <div
                      class="background"
                      style="background-image: url(img/motorcycle-1.jpg)"
                    >
                      <div class="name">Диски</div>
                    </div>
                  </div>
                  <div class="motorcycle">
                    <div
                      class="background"
                      style="background-image: url(img/motorcycle-2.jpg)"
                    >
                      <div class="name">Маятники</div>
                    </div>
                  </div>
                  <div class="motorcycle">
                    <div
                      class="background"
                      style="background-image: url(img/motorcycle-3.jpg)"
                    >
                      <div class="name">Рама</div>
                    </div>
                  </div>
                </div>
                <a class="btn" href="order.html">Смотреть</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <?php get_header('advantages'); ?>

    <!-- ABOUT -->

    <div class="about" style="background-image: url(img/bg-about.jpg)">
      <div class="container">
        <div class="row about-inner">
          <div class="col-6 col-lg-12">
            <h2>
              MOTO – ЭТО ВЫСОКОКАЧЕСТВЕННЫЕ ИЗДЕЛИЯ,
              <span>ПРОИЗВОДЯЩИЕСЯ В РОССИИ.</span>
            </h2>
            <p>Залог качества и надежности - отечественное производство</p>
          </div>
          <div class="col-6 col-lg-12 text-center">
            <a href="catalog.html" class="btn">Перейти в каталог</a>
          </div>
        </div>
      </div>
    </div>

    <!-- POPLULAR -->

    <div class="popular" style="background-image: url(img/background.jpg)">
      <div class="container">
        <div class="row popular-title">
          <h2>ПОПУЛЯРНЫЕ ТОВАРЫ</h2>
        </div>
        <div class="row popular-goods">
          <div class="col-3 col-lg-6 col-sm-12 product">
            <img src="img/catalog/motorcycle_black.png" alt="Название" />
            <h3>Название</h3>
            <div>777 999 &#8381;</div>
            <a href="door.html" class="btn">Подробнее</a>
          </div>
          <div class="col-3 col-lg-6 col-sm-12 product">
            <img src="img/catalog/motorcycle_black.png" alt="Название" />
            <h3>Название</h3>
            <div>777 999 &#8381;</div>
            <a href="door.html" class="btn">Подробнее</a>
          </div>
          <div class="col-3 col-lg-6 col-sm-12 product">
            <img src="img/catalog/motorcycle_black.png" alt="Название" />
            <h3>Название</h3>
            <div>777 999 &#8381;</div>
            <a href="door.html" class="btn">Подробнее</a>
          </div>
          <div class="col-3 col-lg-6 col-sm-12 product">
            <img src="img/catalog/motorcycle_black.png" alt="Название" />
            <h3>Название</h3>
            <div>777 999 &#8381;</div>
            <a href="door.html" class="btn">Подробнее</a>
          </div>
          <div class="col-3 col-lg-6 col-sm-12 product">
            <img src="img/catalog/motorcycle_black.png" alt="Название" />
            <h3>Название</h3>
            <div>777 999 &#8381;</div>
            <a href="door.html" class="btn">Подробнее</a>
          </div>
          <div class="col-3 col-lg-6 col-sm-12 product">
            <img src="img/catalog/motorcycle_black.png" alt="Название" />
            <h3>Название</h3>
            <div>777 999 &#8381;</div>
            <a href="door.html" class="btn">Подробнее</a>
          </div>
          <div class="col-3 col-lg-6 col-sm-12 product">
            <img src="img/catalog/motorcycle_black.png" alt="Название" />
            <h3>Название</h3>
            <div>777 999 &#8381;</div>
            <a href="door.html" class="btn">Подробнее</a>
          </div>
          <div class="col-3 col-lg-6 col-sm-12 product">
            <img src="img/catalog/motorcycle_black.png" alt="Название" />
            <h3>Название</h3>
            <div>777 999 &#8381;</div>
            <a href="door.html" class="btn">Подробнее</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="catalog.html" class="btn">Перейти в каталог</a>
          </div>
        </div>
      </div>
    </div>

    <!-- CONTACTS -->

    <div class="contacts" style="background-image: url(img/bg-contacts.png)">
      <div class="container">
        <div class="row">
          <div class="col-4 col-lg-12 contacts-item">
            <h3>Закажите звонок специалиста</h3>
            <p>
              Вы можете заказать звонок нашего специалиста в удобное для Вас
              время.
            </p>
            <form action="">
              <input type="text" placeholder="Имя" />
              <input type="text" placeholder="Телефон" />
              <input type="text" placeholder="Когда позвонить?" />
              <button class="btn">Заказать звонок</button>
            </form>
          </div>
          <div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
            <img src="img/icons/tag.png" alt="Подробно" />
            <h3>Подробно</h3>
            <p>Наши специалисты помогут Вам в выборе нужного изделия.</p>
          </div>
          <div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
            <img src="img/icons/clock.png" alt="Быстро" />
            <h3>Быстро</h3>
            <p>Мы стараемся максимально быстро ответить на Ваш запрос.</p>
          </div>
        </div>
      </div>
    </div>

    <script src="js/main.js"></script>    

<?php get_footer(); ?>