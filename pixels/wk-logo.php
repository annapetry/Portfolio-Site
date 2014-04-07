<?php
require_once("../inc/config.php");
$pageTitle = "A Petry: winsomekitchen Logo";
include(ROOT_PATH . 'inc/header.php'); ?>

	<div class="content grid_12">
		<div class="empty_div grid_1"></div>
		<div class="feature grid_10">
			<img src="<?php echo BASE_URL; ?>img/wk-banner-760-200.jpg" alt="winsomekitchen Banner">
		</div>
		<div class="grid_1 empty-div"></div>

		<div class="grid_3 alpha empty-div"></div>
		<div class="grid_6 blurb">
			<p>
				winsomekitchen Banner & Logo Prototypes.<br>
			</p>
		</div>
		<div class="grid_3 omega empty-div"></div>

		<div class="grid_1 alpha empty-div"></div>
		<div class="grid_5 detail1">
			<img src="<?php echo BASE_URL; ?>img/wk-logo-detail1-400.jpg" alt="Pan 1">
		</div>
		<div class="grid_5 detail2">
			<img src="<?php echo BASE_URL; ?>img/wk-logo-detail2-400.jpg" alt="Pan 2">
		</div>
		<div class="grid_1 alpha empty-div"></div>

		<div class="page-nav grid_12 omega">
			<div class="back-nav grid_6 alpha">
				<a href="<?php echo BASE_URL; ?>pixels">
					<img src="<?php echo BASE_URL; ?>img/l-arrow-11-16.png">
					PIXELS
				</a>
			</div>
			<div class="next-nav grid_6 omega">
				<a href="<?php echo BASE_URL; ?>pixels/portfolio-wire.php">
					<img src="<?php echo BASE_URL; ?>img/l-arrow-11-16.png">
					PREVIOUS
				</a>
				<a href="<?php echo BASE_URL; ?>pixels/wire.php">
					NEXT
					<img src="<?php echo BASE_URL; ?>img/r-arrow-11-16.png">
				</a>
			</div>
		</div>

	</div>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>