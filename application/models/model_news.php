<?php
require_once './includes/config.php';

$sql= 'SELECT * FROM news';
$result_news = mysqli_query($link, $sql);

$sql= 'SELECT * FROM news ORDER BY date DESC LIMIT '.MAX_NEWS_COUNT;
$result_news_sidebar = mysqli_query($link, $sql);

