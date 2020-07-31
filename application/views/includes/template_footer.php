<footer class="page-footer">
	<div class="wrapper page-footer__wrapper">
		<div class="copyright">
			<span class="copyright__part copyright__lifetime">Copyright ©2007-2010</span>
			<span class="copyright__part copyright__company-lifetime"><b>© "Company"</b>, 2010</span>
			<img class="copyright__image" src="img/logo.png" alt="Company-logo">
			<span class="copyright__part copyrhigt__company-name">Company</span>
		</div>
		<nav class="footer-nav">
			<ul class="footer-nav__list">
				<li class="footer-nav__list-item">
					<?php
					if ($_SERVER['REQUEST_URI'] == '/'){
						print('<span class="footer-nav__link"">Главная</span>');
					}
					else{
						print('<a class="footer-nav__link" href="/">Главная</a>');
					}
					?>
				</li>
				<li class="footer-nav__list-item">
					<?php
					if ($_SERVER['REQUEST_URI'] == '/catalog.php'){
						print('<span class="footer-nav__link"">Каталог</span>');
					}
					else{
						print('<a class="footer-nav__link" href="/catalog.php">Каталог</a>');
					}
					?>
				</li>
				<li class="footer-nav__list-item">
					<?php
					if ($_SERVER['REQUEST_URI'] == '/about.php'){
						print('<span class="footer-nav__link"">О компании</span>');
					}
					else{
						print('<a class="footer-nav__link" href="/about.php">О компании</a>');
					}
					?>
				</li>
				<li class="footer-nav__list-item">
					<?php
					if ($_SERVER['REQUEST_URI'] == '/news.php'){
						print('<span class="footer-nav__link"">Новости</span>');
					}
					else{
						print('<a class="footer-nav__link" href="/news.php">Новости</a>');
					}
					?>
				</li>
				<li class="footer-nav__list-item">
					<?php
					if ($_SERVER['REQUEST_URI'] == '/shipment.php'){
						print('<span class="footer-nav__link"">Доставка и оплата</span>');
					}
					else{
						print('<a class="footer-nav__link" href="/shipment.php">Доставка и оплата</a>');
					}
					?>
				</li>
				<li class="footer-nav__list-item">
					<?php
					if ($_SERVER['REQUEST_URI'] == '/contacts.php'){
						print('<span class="footer-nav__link"">Контакты</span>');
					}
					else{
						print('<a class="footer-nav__link" href="/contacts.php">Контакты</a>');
					}
					?>
				</li>
			</ul>
		</nav>
		<div class="developer">
			<span class="developer__ref">Разработка сайта - <a class="developer__link" href="https://itconstruct.ru/">ITConstruct</a></span>
			<img class="counter" src="img/counter.png" alt="Page-counter">
		</div>
	</div>
</footer>