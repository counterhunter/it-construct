<?php
require_once './includes/config.php';

$cat_id = $_GET['id'];
$price_from = $_GET['cost-from'];
$price_to = $_GET['cost-to'];
$page = $_GET['page'];


function exists($cat_id, $catalog_array){
  foreach($catalog_array as $index => $value) {
    if($value == $cat_id){
      return true;
    }
  }
  return false;
}

$sql = 'SELECT * FROM product ';

if (!is_null($cat_id)){ //если есть категория
  if(exists($cat_id, $catalog_array)){ //если такая категория существует
    $sql = $sql.' WHERE cat_main='.$cat_id;
    if (!is_null($price_from)){ //если есть нач. цена
      $sql = $sql.' AND '.$price_from.' <= price';
    }
    if (!is_null($price_to)){ //если есть конечная цена
      $sql = $sql.' AND '.' price <= '.$price_to ;
    }
  }
  else{
    $content_view = '404_view.php';
  }
}
else{   //если нет категории
  if (!is_null($price_from)){ //если есть нач. цена
    $sql = $sql.' WHERE '.$price_from.' <= price';
    if (!is_null($price_to)){ //если есть конечная цена
      $sql = $sql.' AND '.' price <= '.$price_to;
    }
  }
}

$result_catalog = mysqli_query($link, $sql);

