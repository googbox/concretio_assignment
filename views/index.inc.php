<!--Index.inc.php to be included in index page contains product list in main content area -->			
<!-- product area starts -->
<div class="col-md-9">
	<div class="row result-box">
		<div class="col-md-12 resultheading-box">
			<h5><b>Products </b>
			<?php
			if(isset($_GET["search"]) && $_GET["search"] != "") echo " : Search Results for \"".$_GET["search"]."\" ";
			?>
			</h5><span style="float:right; margin-top:-30px;">Showing 4 Products per page</span>
		</div>
		<div class="col-md-12 paginationheading-box">
		<div style="float:right; margin-top:25px;">
		<?php
		if($num_page>1){ echo $pagination_link;}else{echo "";}
		?>
		</div>
		</div>
		<div class="col-md-12 row">
		<?php if ($total > 0) {
			while ($row = $products_list->fetch_assoc()) {?>
				<div class="col-md-3 product_box">
				<div><a href="product.php?prod_id=<?php echo $row["product_id"]?>"><img src="<?php echo $row["product_image"]?>" width="100%" alt="Image Missing : <?php echo $row["product_name"] ?>"><a></div>
				<div> <a href="product.php?prod_id=<?php echo $row["product_id"]?>"><?php echo $row["product_name"] ?></a></div>
				<div> £<?php echo $row["product_price"]?></div>
				</div>
			<?php }
			
		}else{
			echo "<div class='col-md-12' style='margin-bottom:20px;'>No Product found in our database with given filter. </div>";
		}
		?>
		</div>
	</div>
</div>
<!-- product area ends -->