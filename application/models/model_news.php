<?php
require_once './includes/config.php';

$sql= 'SELECT * FROM news';
$result_news = mysqli_query($link, $sql);
$result_news_sidebar = mysqli_query($link, $sql); //как сделать чтоб не менять имя переменной?

