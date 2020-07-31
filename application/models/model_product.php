<?php
require_once './includes/config.php';

$id = $_GET['id'];
$not_found=true;

foreach($product_array as $index => $value) {
  if($value == $id){
    $not_found=false;
    $sql = 'SELECT * FROM product WHERE id ='.$id;
    $result_product = mysqli_query($link, $sql);
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