<?php
//сюда можно сложить какие-то вспомогательные функции, функции для подключения к БД с возвратом дескриптора

ini_set('display_errors', 1);
require_once 'application/models/model_news.php';//подгрузка новостей
require_once 'application/models/model_categories.php';//подгрузка категорий
