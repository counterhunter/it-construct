<main class="inside-content">
  <nav class="bread-crumbs-container product__bread-crumbs">
    <ul class="bread-crumbs">
      <li class="bread-crumb"><a class="bread-crumb__link" href="index.php">Главная</a></li>
      <li class="bread-crumb"><a class="bread-crumb__link" href="news.php">Новости</a></li>
    </ul>
  </nav>
  <article class="news-detail-article">
  <p>
  <?php
    while ($item = mysqli_fetch_array($result)) {
      print($item['date'] . '</p><h1>' . $item['header'] . '</h1><p>' .  $item['preview'] . '</p><p>' . $item['text'] . '</p>');
    }
    ?>
  </article>
</main>