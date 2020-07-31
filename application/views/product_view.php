<div class="wrapper content__wrapper">
  <main class="inside-content">
    <nav class="bread-crumbs-container product__bread-crumbs">
      <ul class="bread-crumbs">
        <li class="bread-crumb"><a class="bread-crumb__link" href="index.php">Главная</a></li>
        <li class="bread-crumb"><a class="bread-crumb__link" href="catalog.php">Каталог</a></li>
        <li class="bread-crumb"><a class="bread-crumb__link" href="#">Электронные сигареты</a></li>
        <li class="bread-crumb bread-crumb_current">Электронная сигарета «Такая-то»</li>
      </ul>
    </nav>
    <section class="product">
      <?php
        while ($row = mysqli_fetch_array($result_product)) {
          print('<h1 class="product__info-block-part product__headline">' . $row['name'] . '</h1><img class="product__image" src="' . $row['pic'] . '" alt="Упс! Здесь было фото сигареты, но теперь его нет :("><span class="good-price good_price product__info-block-part product__info-price">'. $row['price'] .' <small class="good-price__currency">руб.</small></span><article class="product__description">' . $row['desc'] . '</article>');
        }
      ?>
    </section>
  </main>
</div>