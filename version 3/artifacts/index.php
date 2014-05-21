<?php
require_once("../inc/config.php");
$pageTitle = "A Petry: Artifacts";
include(ROOT_PATH . 'inc/header.php'); ?>

	<div class="content container grid_12 omega">

		<div class="row_1">
			<div class="thumbs grid_4 alpha">
				<a href="<?php echo BASE_URL; ?>artifacts/altar.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-altar-detail2-400.jpg' 
						rel='<?php echo BASE_URL; ?>img/altar-detail2-400.jpg' alt="Altar">
				</a>
			</div>
			<div class="thumbs grid_4">
				<a href="<?php echo BASE_URL; ?>artifacts/knives.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-knife-detail1-400.jpg'
						rel='<?php echo BASE_URL; ?>img/knife-detail1-400.jpg' alt="Wooden Knives">
				</a>
			</div>
			<div class="thumbs grid_4 omega">
				<a href="<?php echo BASE_URL; ?>artifacts/major.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-major-detail1-400.jpg'
						rel='<?php echo BASE_URL; ?>img/major-detail1-400.jpg'alt="Major Arc">
				</a>
			</div>			
		</div>

		<div class="row_2">
				<div class="thumbs grid_4 aplha">
				<a href="<?php echo BASE_URL; ?>artifacts/minor.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-minor-detail2-400.jpg'
						rel='<?php echo BASE_URL; ?>img/minor-detail2-400.jpg'alt="Minor Arc">
				</a>
			</div>
			<div class="thumbs grid_4">
				<a href="<?php echo BASE_URL; ?>artifacts/nook.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-nook-detail1-400.jpg'
						rel='<?php echo BASE_URL; ?>img/nook-detail2-400.jpg' alt="Leather Nook Case">
				</a>
			</div>
			<div class="thumbs grid_4 omega">
				<a href="<?php echo BASE_URL; ?>artifacts/pyramids.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-pyramid-detail1-400.jpg'
						rel='<?php echo BASE_URL; ?>img/pyramid-detail1-400.jpg' alt="Pyramid">
				</a>
			</div>
		</div>

		<div class="row_3">
			<div class="thumbs grid_4 alpha">
				<a href="<?php echo BASE_URL; ?>artifacts/record.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-record-detail2-400.jpg'
						rel='<?php echo BASE_URL; ?>img/record-detail2-400.jpg' alt="Record Table">
				</a>
			</div>
			<div class="thumbs grid_4">
				<a href="<?php echo BASE_URL; ?>artifacts/sheath.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-sheath-detail1-400.jpg'
						rel='<?php echo BASE_URL; ?>img/sheath-detail1-400.jpg' alt="Leather Knife Sheath">
				</a>
			</div>
			<div class="thumbs grid_4 omega">
				<a href="<?php echo BASE_URL; ?>artifacts/arrows.php">
					<img class="rollover" src='<?php echo BASE_URL; ?>img/blue-arrow-detail1-400.jpg'
						rel='<?php echo BASE_URL; ?>img/arrow-detail1-400.jpg' alt="Steel Arrows">
				</a>
			</div>
		</div>
    </div>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>