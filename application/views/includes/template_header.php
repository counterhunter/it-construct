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
							if ($uri == '/'){
								echo('<span class="header-nav-item__link header-nav-item__link_current">Главная</span>');
							}
							else{
								echo('<a class="header-nav-item__link" href="/">Главная</a>');
							}
						?>
					</span>
				</li>
				<li class="header-nav-item">
					<span class="header-nav-item__container-for-link">
						<?php
							if ($uri_parts[0] == '/catalog.php'){
								echo('<span class="header-nav-item__link header-nav-item__link_current">Каталог</span>');
							}
							else{
								echo('<a class="header-nav-item__link" href="/catalog.php?page=1">Каталог</a>');
							}
						?>
					</span>
					<ul class="sub-menu">
						<?php
							while ($row = mysqli_fetch_array($result_categories_header)) {
								print('<li class="sub-menu__list-item"><a class="sub-menu__link" href="/catalog.php?id=' . $row['id'] . '">' . $row['name'] . '</a></li>');
							}
						?>
					</ul>
				</li>
				<li class="header-nav-item">
					<span>
						<?php
							if ($uri == '/about.php'){
								echo('<span class="header-nav-item__link header-nav-item__link_current">О компании</span>');
							}
							else{
								echo('<a class="header-nav-item__link" href="/about.php">О компании</a>');
							}
						?>
					</span>
				</li>
				<li class="header-nav-item">
					<span>
						<?php
							if ($uri  == '/news.php' || $uri_parts[0] == '/news-detail.php'){
								echo('<span class="header-nav-item__link header-nav-item__link_current">Новости</span>');
							}
							else{
								echo('<a class="header-nav-item__link" href="/news.php">Новости</a>');
							}
						?>
					</span>
				</li>
				<li class="header-nav-item">
					<span>	
						<?php
							if ($uri == '/shipment.php'){
								echo('<span class="header-nav-item__link header-nav-item__link_current">Доставка и оплата</span>');
							}
							else{
								echo('<a class="header-nav-item__link" href="/shipment.php">Доставка и оплата</a>');
							}
						?>
					</span>
				</li>
				<li class="header-nav-item">
					<span>	
							<?php
							if ($uri == '/contacts.php'){
								echo('<span class="header-nav-item__link header-nav-item__link_current">Контакты</span>');
							}
							else{
								echo('<a class="header-nav-item__link" href="/contacts.php">Контакты</a>');
							}
						?>
					</span>
				</li>
			</ul>
		</div>
	</nav>
</header>