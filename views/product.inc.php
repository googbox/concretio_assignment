<!--Product.inc.php to be included in product page contains product information in main content area -->
<!-- product area starts -->			
<div class="col-md-9">
	<div class="row result-box">
		<div class="col-md-12 resultheading-box">
			<h5><b>Products Description</b></h5>
		</div>		
		<div class="col-md-12">
		<?php if (count($product) > 0) {?>
				<div class="row">
				<div class="col-md-4"><img src="<?php echo $product["product_image"]?>" width="100%" alt="Image Missing : <?php echo $product["product_name"] ?>"></div>
				<div class="col-md-8"><br>
					<h3><?php echo $product["product_name"] ?></h3>
					<br>
					<h6>Total Cost : £ <?php echo $product["product_price"]; ?></h6>
					<h6>Brand : <?php echo $product["product_brand"]; ?></h6>
					<h6>Category : <?php echo $product["product_category"]; ?></h6>
					<h6>Features : <?php 
					$flag = false;
					 while($row = $features->fetch_assoc()){
						 if($flag != false){echo ", "; $flag = false;}
						echo $row["speci_value"]; $flag = true;
					 }
					?></h6>
					<h6>Stores : <?php 
					$flag = false;
					 while($row = $stores->fetch_assoc()){
						 if($flag != false){echo ", "; $flag = false;}
						echo $row["speci_value"]; $flag = true;
					 }
					?></h6>	
				</div>
				</div>
				<div class="row">
				<div class="col-md-12" style="margin-bottom:30px;">
					<h6>Description : </h6> <?php echo $product["product_description"]?>
					<br>
				</div>
				</div>
		<?php }else{
			echo "<div class='col-md-12' style='margin-bottom:20px;'>No Product found in our database. </div>";
		}
		?>
		</div>
	</div>
</div>
<!-- product area end -->