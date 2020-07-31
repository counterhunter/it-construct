<?php
//сюда все ключевые константы через const или define
//или через JSON
//или через ассоциативный массив
const MAX_NEWS_COUNT = 6;
const MAX_PRODUCT_COUNT = 12;


$link = mysqli_connect("shop", "smirnov", "123","test_db");
if ($link == false){
  print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
    

$sql= 'SELECT id FROM news';
$result_news = mysqli_query($link, $sql);
$news_array = array();
while ($row = mysqli_fetch_array($result_news)) {
  $news_array[] = $row['id'];
}

$sql= 'SELECT id FROM product';
$result_product = mysqli_query($link, $sql);
$product_array = array();
while ($row = mysqli_fetch_array($result_product)) {
  $product_array[] = $row['id'];
}

$sql= 'SELECT id FROM category';
$result_catalog = mysqli_query($link, $sql);
$catalog_array = array();
while ($row = mysqli_fetch_array($result_catalog)) {
  $catalog_array[] = $row['id'];
}