<main class="inside-content">
  <article class="news-article">
    <h1>Новости</h1>
    <ul class="news-list">
    <?php
      while ($row = mysqli_fetch_array($result_news)) {
        print('<li class="news-item">' . '<a class="news-item__link" href="/news-detail.php?id=' . $row['id'] . '">' . $row['header'] . '<span class="news-item__date">' . $row['date'] . '</span></a></li>');
      }
    ?>
		</ul>
  </article>
</main>