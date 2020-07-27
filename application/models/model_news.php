<?php
require_once './includes/config.php';

$sql_news = 'SELECT * FROM news';
$result_news = mysqli_query($link, $sql_news);
$result_news_sidebar = mysqli_query($link, $sql_news); //как сделать чтоб не менять имя переменной?
