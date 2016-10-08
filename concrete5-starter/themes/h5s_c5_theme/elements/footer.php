<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- Footer Section -->
	<footer>
<!-- Footer Menu -->
		<nav class="footer-menu">
			<ul>
				<?php
					$bt = BlockType::getByHandle('autonav');
					$bt->controller->displayPages = 'top';
					$bt->controller->orderBy = 'display_asc';
					$bt->render('templates/footer-menu');
				?>
			</ul>
		</nav>

<!-- Copyright -->
		<section class="copy">
			© <?php echo date('Y')?>
		</section>
	</footer>
	
<!-- jQuery CDN -->
	<script src="//code.jquery.com/jquery.min.js"></script>

<!-- Custom JavaScript -->
	<script src="js/config.js"></script>

	<!-- Old browsers support by Google Chrome --><!--[if lt IE 7]><script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script><style>.chromeFrameInstallDefaultStyle{width:100%;border:5px solid blue}</style><div id="prompt"></div><script>window.attachEvent("onload",function(){CFInstall.check({mode:"inline",node:"prompt"})});</script><![endif]-->
	
	<!-- Optimized Google Analytics. Change UA-XXXXX-X to your site ID -->
	<script>var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>

<?php  Loader::element('footer_required'); ?>
</body>
</html>