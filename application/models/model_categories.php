<?php
require_once './includes/config.php';

$sql = 'SELECT * FROM category';
$result_categories = mysqli_query($link, $sql);
$result_categories_sidebar = mysqli_query($link, $sql);

//добавляем картинку для тех у кого нет
// $new_pic_path = '/img/category-none.jpg';
// while ($row = mysqli_fetch_array($result_categories)) {
//   if($row['pic'] == NULL){
//     echo('у категории '.$row['name'].' нет картинки');
//     $row['pic'] = $new_pic_path;
//   }
// }
