<?php
require_once("inc/config.php");
$pageTitle = "A Petry: A Portfolio";
include(ROOT_PATH . 'inc/header.php'); ?>

	<div class="content container">
			<div class="home-image grid_6 alpha">
				<a href="<?php echo BASE_URL; ?>artifacts">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/sheath-400.jpg' rel='<?php echo BASE_URL; ?>img/artifacts-400.jpg' alt="Leather Knife Sheath">
				</a>
			</div>
			<div class="home-image grid_6 omega">
				<a href="<?php echo BASE_URL; ?>pixels">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/skillets-400.jpg' rel='<?php echo BASE_URL; ?>img/pixels-400.jpg' alt="Winsome Kitchen Skillets">
				</a>
			</div>
    </div>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>
