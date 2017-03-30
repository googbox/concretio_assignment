<!-- Sidebar -Filters starts -->
<div class="col-md-3">
	<form method="get" id="search_form" action="index.php">
	<input type="hidden" name="category" value="<?php if(isset($_GET["category"]))  echo $_GET["category"]?>"/>
		<div class="filter-box">
			<h4>Filter Deals</h4>
		</div>
		<div class="filter-container">
		
			<h5 class="filter-heading">Minimum Review Rating</h5>
			<div>
			 <div> <input type="radio" name="rating" value="5" class="form_ele" <?php if(isset($_GET["rating"]) && $_GET["rating"] == 5){echo "checked='checked'";}?>> 5 Stars </div>
			 <div> <input type="radio" name="rating" value="4" class="form_ele" <?php if(isset($_GET["rating"]) && $_GET["rating"] == 4){echo "checked='checked'";}?>> 4 Stars </div>
			 <div> <input type="radio" name="rating" value="3" class="form_ele" <?php if(isset($_GET["rating"]) && $_GET["rating"] == 3){echo "checked='checked'";}?>> 3 Stars </div>
			</div>
		
			<h5 class="filter-heading">Brand</h5>
			<div>
			<div> 
					<select name="brands" class="form_ele">
						<option value="All">All Brands</option>
							<?php if ($brands_list) {
								/* fetch associative array */
								while ($row = $brands_list->fetch_assoc()) {?>
									
						<option value="<?php echo $row["product_brand"] ?>" <?php
										if(isset($_GET["brands"]) && $_GET["brands"] == $row["product_brand"]) {
													echo "selected=selected";
										}
										?>
						> <?php echo $row["product_brand"] ?></option>
									
								<?php }
							}?>
					</select>
				</div>
			</div>
			
			<h5 class="filter-heading">Store</h5>
			<div>
				<div> 
					<select name="stores" class="form_ele">
						<option value="All">All Merchants</option>
							<?php if ($stores_list) {
								/* fetch associative array */
								while ($row = $stores_list->fetch_assoc()) {?>
									
						<option value="<?php echo $row["speci_value"] ?>" <?php
										if(isset($_GET["stores"]) && $_GET["stores"] == $row["speci_value"]) {
													echo "selected=selected";
										}
										?>
						> <?php echo $row["speci_value"] ?></option>
									
								<?php }
							}?>
					</select>
				</div>
			</div>
			
			<h5 class="filter-heading">Features</h5>
			<div>
			<?php if ($features_list) {
				/* fetch associative array */
				while ($row = $features_list->fetch_assoc()) {?>
					<div> <input type="checkbox" name="features[]" class="form_ele" value="<?php echo $row["speci_value"] ?>"
					<?php
						if(isset($_GET["features"]) && in_array($row["speci_value"],$_GET['features'])) {
									echo $check='checked="checked"';
						}
						?>
					
					> <?php echo $row["speci_value"] ?></div>
				<?php }
			}
			?>
			</div>
			<h5 class="filter-heading">Price Range</h5>
			<div>
				<div>
				Minimun Range<br>
				<span><input type="range" id="minrange" value="<?php if(isset($_GET["minrange"]) && $_GET["minrange"] != "")echo $_GET["minrange"]; else echo "10";?>" min="10" max="1000" step="5" /></span>
				<span> <input type="text" disabled placeholder="10" id="minrangeval1" name="minrange1" value="<?php if(isset($_GET["minrange"]) && $_GET["minrange"] != "")echo $_GET["minrange"]; else echo "";?>" style="width:50px"></span><br>
				<span> <input type="hidden"  placeholder="10" id="minrangeval" name="minrange" value="<?php if(isset($_GET["minrange"]) && $_GET["minrange"] != "")echo $_GET["minrange"]; else echo "";?>" style="width:50px"></span><br>
				Maximum Range
				<span><input type="range" id="maxrange" value="<?php if(isset($_GET["maxrange"]) && $_GET["maxrange"] != "")echo $_GET["maxrange"]; else echo "1000";?>" min="10" max="1000" step="5" /> </span>
				<span><input type="text" disabled id="maxrangeval1" placeholder="1000" name="maxrange1" value="<?php if(isset($_GET["minrange"]) && $_GET["maxrange"] != "")echo $_GET["maxrange"]; else echo "";?>" style="width:50px"></span>
				<span><input type="hidden"  id="maxrangeval" placeholder="1000" name="maxrange" value="<?php if(isset($_GET["minrange"]) && $_GET["maxrange"] != "")echo $_GET["maxrange"]; else echo "";?>" style="width:50px"></span>
				</div>
			</div>	

			<div style="margin-top:30px;text-align:center;margin-bottom:20px;"><input type="submit" class="btn btn-submit" value="Refine Search"/></div>
		</div>
	</form>	
</div>
<!-- Sidebar -Filters ends -->				