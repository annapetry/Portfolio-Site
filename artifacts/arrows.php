<?php
require_once("../inc/config.php");

$pageTitle = "A Petry: Arrows";
include(ROOT_PATH . 'inc/header.php'); ?>

	<div class="content grid_12">
		<div class="empty_div grid_1"></div>
		<div class="feature grid_10">
			<img src="<?php echo BASE_URL; ?>img/arrow-750-600.jpg" alt="Steel Arrows">
		</div>
		<div class="grid_1 empty-div"></div>

		<div class="grid_3 alpha empty-div"></div>
		<div class="grid_6 blurb">
			<p>
				Arrows<br>
				Materials:<br> Steel, Wax
			</p>
		</div>
		<div class="grid_3 omega empty-div"></div>

		<div class="grid_1 alpha empty-div"></div>
		<div class="grid_5 detail1">
			<img src="<?php echo BASE_URL; ?>img/arrow-detail2-400.jpg" alt="Arrow Detail">
		</div>
		<div class="grid_5 detail2">
			<img src="<?php echo BASE_URL; ?>img/arrow-detail1-400.jpg" alt="Arrow Detail">
		</div>
		<div class="grid_1 alpha empty-div"></div>

		<div class="page-nav grid_12 omega">
			<div class="back-nav grid_6 alpha">
				<a href="<?php echo BASE_URL; ?>artifacts">
					<img src="<?php echo BASE_URL; ?>img/l-arrow-11-16.png">
					ARTIFACTS
				</a>
			</div>
			<div class="next-nav grid_6 omega">
				<a class="prev-last" href="<?php echo BASE_URL; ?>artifacts/sheath.php">
					<img class="prev" src="<?php echo BASE_URL; ?>img/l-arrow-11-16.png">
					PREVIOUS
				</a>
			</div>
		</div>	
	</div>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>