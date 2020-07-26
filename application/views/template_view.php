<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="shortcut icon" href="img/favicon.png" type="image/png">
		<link rel="alternate" href="https://allfont.ru/allfont.css?fonts=arial-narrow">
		<title>Company - Интернет-магазин электронных сигарет</title>
	</head>
	<body>
		<?php include 'application/views/includes/template_header.php'?>
		<div class="content">
			<div class="wrapper content__wrapper">
				<?php include 'application/views/includes/template_sidebar.php'?>
				<?php include 'application/views/'.$content_view; ?>
			</div>
		</div>
		<?php include 'application/views/includes/template_footer.php'?>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>