<div class="sidebar">
	<section class="catalog">
		<h2 class="sidebar__headline">Каталог</h2>
		<ul class="catalog-list">
			<?php

      while ($row = mysqli_fetch_array($result_categories_sidebar)) {
        print('<li class="catalog-list__item"><a class="catalog-list__link" href="/catalog.php?id=' . $row['id'] . '">' . $row['name'] . '</a></li>');
      }
    	?>
		</ul>
	</section>
	<section class="news">
		<h2 class="sidebar__headline news__headline">Новости</h2>
		<ul class="news-list">
		<?php

      while ($row = mysqli_fetch_array($result_news_sidebar)) {
        print('<li class="news-item">' . '<a class="news-item__link" href="/news-detail.php?id=' . $row['id'] . '">' . $row['header'] . '<span class="news-item__date">' . $row['date'] . '</span></a></li>');
      }
    ?>
		</ul>
		<span class="archive"><a class="archive__link" href="/news.php">Архив новостей</a></span>
	</section>
</div>