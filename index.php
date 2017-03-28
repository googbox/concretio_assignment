<?php include_once("controllers/index_logic.php");?>
<!DOCTYPE html>
<html lang="en">
	<?php include_once("includes/lib.inc.php");?>
    <body>
	<!-- Index Page starts here -->
    <div class="wrapper">
		<!-- Header Section -->
		<?php include_once("includes/header.inc.php");?>
		<!-- Navigation Bar Section -->
		<?php include_once("includes/nav.inc.php");?>
		<div class="container">
			<div class="row">
				<!-- Sidebar/Filter Section -->
				<?php include_once("includes/sidebar.inc.php"); ?>
				<!-- Products List with/without filters  Section -->
				<?php include_once("views/index.inc.php"); ?>
			</div>
		</div>
		<br>
	</div>
	<!-- Footer Section -->
	<?php include_once("includes/footer.inc.php");?>
	<!-- Index Page ends here -->
    </body>
</html>
