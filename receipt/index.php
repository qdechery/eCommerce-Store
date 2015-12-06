<?php

require_once("../inc/config.php");

$pageTitle = "Thank you for your order!";
$section = "none";
include(ROOT_PATH . "inc/header.php"); ?>

	<div class="section page">

		<div class="wrapper">

			<h1>Thank You!</h1>

			<p>Thank you for your payment. Your transaction has been completed, and a receipt has been sent.</p>

			<p>Need another shirt already? Visit the <a href="<?php echo BASE_URL; ?>shirts/">Shirts Listing page</a> to find more cool shirts!</p>

		</div>

	</div>	

<?php include(ROOT_PATH . "inc/footer.php"); ?>