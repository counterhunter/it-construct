<?php
//сюда можно сложить какие-то вспомогательные функции, функции для подключения к БД с возвратом дескриптора
require_once './includes/dbconn.php';

ini_set('display_errors', 1);
$uri = $_SERVER['REQUEST_URI'];
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);

// require_once 'application/models/model_news.php';//подгрузка новостей

$sql= 'SELECT * FROM news';
$result_news = mysqli_query($link, $sql);

$sql= 'SELECT * FROM news ORDER BY date DESC LIMIT '.MAX_NEWS_COUNT;
$result_news_sidebar = mysqli_query($link, $sql);

function get_categories($link){
  $sql = 'SELECT * FROM category';
  $result_categories = mysqli_query($link, $sql);
  return $result_categories;
}
$categories = get_categories($link);
$categories_sidebar = get_categories($link);

//добавляем картинку для тех у кого нет
// $new_pic_path = '/img/category-none.jpg';
// while ($row = mysqli_fetch_array($result_categories)) {
//   if($row['pic'] == NULL){
//     echo('у категории '.$row['name'].' нет картинки');
//     $row['pic'] = $new_pic_path;
//   }
// }
