<?php
require_once("../inc/config.php");
$pageTitle = "A Petry: Artifacts";
include(ROOT_PATH . 'inc/header.php'); ?>

	<div class="content container grid_12 omega">
		<div class="row_1">
			<div class="thumbs grid_4 alpha">
				<a href="<?php echo BASE_URL; ?>pixels/portfolio-wire.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-portfolio-wire-400.jpg'
						rel='<?php echo BASE_URL; ?>img/portfolio-wire-400.jpg' alt="Portfolio Wireframe">
				</a>
			</div>
			<div class="thumbs grid_4">
				<a href="<?php echo BASE_URL; ?>pixels/wk-logo.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-wk-logo-detail2-400.jpg'
						rel='<?php echo BASE_URL; ?>img/wk-logo-detail2-400.jpg' alt="wk Logo">
				</a>
			</div>
			<div class="thumbs grid_4 omega">
				<a href="<?php echo BASE_URL; ?>pixels/wire.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-wire-400.jpg' 
						rel='<?php echo BASE_URL; ?>img/wire-400.jpg'alt="Denim Wireframe">
				</a>
			</div>
		</div>
    </div>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>