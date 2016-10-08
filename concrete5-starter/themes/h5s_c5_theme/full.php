<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<!-- Aside -->
	<aside class="aside">
		<?php 
			$b = new Area('Aside');
			$b->display($c);
		?>
	</aside>
		
<!-- Main Section -->
	<div class="main">
		<?php 
			$b = new Area('Main Content');
			$b->display($c);
		?>
	</div>

<?php  $this->inc('elements/footer.php'); ?>