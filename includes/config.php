<?php
//сюда все ключевые константы через const или define
//или через JSON
//или через ассоциативный массив

$link = mysqli_connect("shop", "smirnov", "123","test_db");
if ($link == false){
  print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
    