<?php
require_once("../inc/config.php");
$pageTitle = "A Petry: Artifacts";
include(ROOT_PATH . 'inc/header.php'); ?>

	<div class="content container grid_12 omega">
		<div class="row_1">
			<div class="grid_3 empty-div alpha"></div>
			<div class="thumbs grid_2">
				<a href="<?php echo BASE_URL; ?>pixels/wk-banner.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-thumb-wk-banner-200.jpg' rel='<?php echo BASE_URL; ?>img/thumb-wk-banner-200.jpg' alt="Altar">
				</a>
			</div>
			<div class="thumbs grid_2">
				<a href="<?php echo BASE_URL; ?>pixels/wk-logo.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-thumb-wk-logo-200.jpg' rel='<?php echo BASE_URL; ?>img/thumb-wk-logo-200.jpg' alt="Wooden Knives">
				</a>
			</div>
			<div class="thumbs grid_2">
				<a href="<?php echo BASE_URL; ?>pixels/wire.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-thumb-wire-200.jpg' rel='<?php echo BASE_URL; ?>img/thumb-wire-200.jpg'alt="Major Arc">
				</a>
			</div>
			<div class="grid_3 empty-div omega"></div>
		</div>
    </div>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>