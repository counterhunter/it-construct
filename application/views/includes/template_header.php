<header class="page-header">
	<div class="wrapper">
		<aside class="header-top">
			<div class="header-logo">
				<img class="header-logo__image" src="img/logo.png" alt="Логотип" width="95" height="75">
				<span class="header-logo__caption">Company</span>
			</div>
			<div class="company-info">
				<b class="company-info__tagline">Нанотехнологии здоровья</b>
				<div class="contacts">
					<a class="contacts__link-mail" href="mailto:info@company.ru">info@company.ru</a>
					<a class="contacts__link-phone" href="tel:+73833491849">+7 (383) 349-18-49</a>
				</div>
			</div>
		</aside>
		<div class="user-info">
		</div>
	</div>
	<nav class="header-nav">
		<div class="wrapper">
			<span class="menu-toggler">Меню</span>
			<ul class="menu-togglable">
				<li class="header-nav-item">
					<span>
						<?php
						if ($_SERVER['REQUEST_URI'] == '/'){
							print('<span class="header-nav-item__link header-nav-item__link_current">Главная</span>');
						}
						else{
							print('<a class="header-nav-item__link" href="/">Главная</a>');
						}
						?>
					</span>
				</li>
				<li class="header-nav-item">
					<span class="header-nav-item__container-for-link"><?php
						if ($_SERVER['REQUEST_URI'] == '/catalog.php'){
							print('<span class="header-nav-item__link header-nav-item__link_current">Каталог</span>');
						}
						else{
							print('<a class="header-nav-item__link" href="/catalog.php?page=1">Каталог</a>');
						}
						?>
					</span>
					<ul class="sub-menu">
						<li class="sub-menu__list-item"><a class="sub-menu__link" href="#">Электронные сигареты</a></li>
						<li class="sub-menu__list-item"><a class="sub-menu__link" href="#">Трубки</a></li>
						<li class="sub-menu__list-item"><a class="sub-menu__link" href="#">Картриджи</a></li>
						<li class="sub-menu__list-item"><a class="sub-menu__link" href="#">Аккумуляторы и атомайзеры</a></li>
						<li class="sub-menu__list-item"><a class="sub-menu__link" href="#">Аксессуары</a></li>
						<li class="sub-menu__list-item"><a class="sub-menu__link" href="#">Зарядные устройства</a></li>
						<li class="sub-menu__list-item"><a class="sub-menu__link" href="#">Жидкости для заправки</a></li>
						<li class="sub-menu__list-item"><a class="sub-menu__link" href="#">Подарочные наборы</a></li>
					</ul>
				</li>
				<li class="header-nav-item">
					<span>
						<?php
						if ($_SERVER['REQUEST_URI'] == '/about.php'){
							print('<span class="header-nav-item__link header-nav-item__link_current">О компании</span>');
						}
						else{
							print('<a class="header-nav-item__link" href="/about.php">О компании</a>');
						}
						?>
					</span>
				</li>
				<li class="header-nav-item">
					<span>
						<?php
						if ($_SERVER['REQUEST_URI'] == '/news.php'){
							print('<span class="header-nav-item__link header-nav-item__link_current">Новости</span>');
						}
						else{
							print('<a class="header-nav-item__link" href="/news.php">Новости</a>');
						}
						?>
					</span>
				</li>
				<li class="header-nav-item">
					<span>	
						<?php
						if ($_SERVER['REQUEST_URI'] == '/shipment.php'){
							print('<span class="header-nav-item__link header-nav-item__link_current">Доставка и оплата</span>');
						}
						else{
							print('<a class="header-nav-item__link" href="/shipment.php">Доставка и оплата</a>');
						}
						?>
					</span>
				</li>
				<li class="header-nav-item">
					<span>	
						<?php
						if ($_SERVER['REQUEST_URI'] == '/contacts.php'){
							print('<span class="header-nav-item__link header-nav-item__link_current">Контакты</span>');
						}
						else{
							print('<a class="header-nav-item__link" href="/contacts.php">Контакты</a>');
						}
						?>
					</span>
				</li>
			</ul>
		</div>
	</nav>
</header>