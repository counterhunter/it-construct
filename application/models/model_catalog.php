<?php
require_once './includes/config.php';

$id = $_GET['id'];

$sql_catalog = 'SELECT * FROM product';
$result_catalog = mysqli_query($link, $sql_catalog);
// $sql = 'SELECT * FROM product WHERE cat_id ='.$id;
// $result = mysqli_query($link, $sql);
// $row = mysqli_fetch_assoc($result);

// if (is_null($row['id'])) {
//   $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
//   header('HTTP/1.1 404 Not Found');
//   header("Status: 404 Not Found");
//   header('Location:'.$host.'404');
// }
// else{ //почему нельзя без else?
//   $result = mysqli_query($link, $sql);
// }