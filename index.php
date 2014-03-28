<?php
require_once("inc/config.php");
$pageTitle = "A Petry: A Portfolio";
include(ROOT_PATH . 'inc/header.php'); ?>

	<div class="content-container">
		<div class="content grid_12">
			<div class="home-image first-img grid_4">
				<a href="<?php echo BASE_URL; ?>mixedmedia">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/sheath-400.png' rel='<?php echo BASE_URL; ?>img/mixed-media-250.png' alt="Leather Knife Sheath">
				</a>
			</div>
			<div class="home-image grid_4">
				<a href="<?php echo BASE_URL; ?>arcash">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/geo-400.png' rel='<?php echo BASE_URL; ?>img/aa-250.png' alt="Crystal">
				</a>
			</div>
			<div class="home-image grid_4">
				<a href="<?php echo BASE_URL; ?>pixels">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/skillets-400.jpg' rel='<?php echo BASE_URL; ?>img/pixels-250.png' alt="Winsome Kitchen Skillets">
				</a>
			</div>
		</div>
    </div>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>
