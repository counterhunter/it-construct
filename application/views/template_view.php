<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="img/favicon.png" type="image/png">
		<link rel="alternate" href="https://allfont.ru/allfont.css?fonts=arial-narrow">
		<?php
			if ($_SERVER['REQUEST_URI'] == '/'){
				print('<title>Company - Интернет-магазин электронных сигарет</title>');
			}
			if ($uri_parts[0] == '/catalog.php'){
				$cat_id = $_GET['id'];
				if(!is_null($cat_id)){
					while ($row = mysqli_fetch_array($result_categories_title)) {
						if($cat_id == $row['id']){
							print('<title>'.$row['name'].'. Company - Интернет-магазин электронных сигарет</title>');
						}
					}
				}
				else{
					print('<title>Каталог. Company - Интернет-магазин электронных сигарет</title>');
				}
			}
			if ($uri_parts[0] == '/product.php'){
				$cat_id = $_GET['id'];
				if(!is_null($cat_id)){
					$item = mysqli_fetch_array($result_product_title);
					print('<title>'.$item['name'].'. Company - Интернет-магазин электронных сигарет</title>');
				}
				else{
					print('<title>Товар. Company - Интернет-магазин электронных сигарет</title>');
				}
			}
			if ($_SERVER['REQUEST_URI'] == '/about.php'){
				print('<title>О компании. Company - Интернет-магазин электронных сигарет</title>');
			}
			if ($_SERVER['REQUEST_URI'] == '/news.php'){
				print('<title>Новости. Company - Интернет-магазин электронных сигарет</title>');
			}
			if ($uri_parts[0] == '/news-detail.php'){
				$item = mysqli_fetch_array($result_news_detail_title);
				print('<title>'.$item['header'].'. Company - Интернет-магазин электронных сигарет</title>');
			}
			if ($_SERVER['REQUEST_URI'] == '/shipment.php'){
				print('<title>Доставка и оплата. Company - Интернет-магазин электронных сигарет</title>');
			}
			if ($_SERVER['REQUEST_URI'] == '/contacts.php'){
				print('<title>Контакты. Company - Интернет-магазин электронных сигарет</title>');
			}

		?>
		<link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
	</head>
	<body>
		<?php include 'application/views/includes/template_header.php'?>
		<div class="content">
			<div class="wrapper content__wrapper">
				<?php include 'application/views/includes/template_sidebar.php'?>
				<?php include 'application/views/'.$content_view;?>
			</div>
		</div>
		<?php include 'application/views/includes/template_footer.php'?>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>