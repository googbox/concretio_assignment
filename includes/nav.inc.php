<!-- Navigation Starts here -->
<nav class="nav" >
	<div class="container">
		<ul id="menu" class="nav clearfix">
			<li class=" nav-home"><a href="index.php">Home</a></li>
			<?php if ($categories_list) {
				/* fetch associative array */
				while ($row = $categories_list->fetch_assoc()) {?>
					<li class=" nav-item "><a href="index.php?category=<?php echo urlencode($row["product_category"]) ?>"><?php echo $row["product_category"] ?></a></li>
				<?php }
			}
			?>
		</ul>
	</div>
</nav>
<!-- Navigation ends here -->