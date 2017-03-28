<?php include_once("controllers/product_logic.php");?>
<!DOCTYPE html>
<html lang="en">
	<?php include_once("includes/lib.inc.php");?>
    <body>
	<!-- Product Page starts here -->	
    <div class="wrapper">
		<!-- Header -->
		<?php include_once("includes/header.inc.php");?>
		<!-- Navigation Bar -->
		<?php include_once("includes/nav.inc.php");?>
		<div class="container">
			<div class="row">
				<!-- Sidebar / Filter section -->
				<?php include_once("includes/sidebar.inc.php"); ?>
				<!-- Product Details section -->
				<?php include_once("views/product.inc.php"); ?>
			</div>
		</div>
		<br>
	</div>
	<!-- Footer Section -->
	<?php include_once("includes/footer.inc.php");?>
	<!-- Index Page ends here -->
    </body>
</html>
