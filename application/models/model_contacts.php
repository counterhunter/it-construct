<?php
require_once './includes/config.php';
require_once './includes/dbconn.php';

$name = $_POST['feedback-author'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$text = $_POST['feedback-text'];

$sql = "INSERT INTO feedback (name, email, phone, text) VALUES ('".$name."', '".$email."', '".$phone."', '".$text."')";