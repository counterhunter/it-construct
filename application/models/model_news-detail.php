<?php
require_once './includes/config.php';
require_once './includes/dbconn.php';

$id = $_GET['id'];
$not_found=true;

foreach($news_array as $index => $value) {
  if($value == $id){
    $not_found=false;
    $sql = 'SELECT * FROM news WHERE id ='.$id;
    $result_news_detail = mysqli_query($link, $sql);
    $result_news_detail_title = mysqli_query($link, $sql);
  break;
  }
}
if($not_found){
  // $host = 'http://'.$_SERVER['HTTP_HOST'].'/'; //так почему-то не работает
  // header('HTTP/1.1 404 Not Found');
  // header("Status: 404 Not Found");
  // header('Location:'.$host.'404');
  $content_view = '404_view.php';
}
