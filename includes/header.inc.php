<!-- Header.inc.php -->
<!-- Header area of the website starts -->
<div class="header">
	<header class="container" >
		<div class="row">
				<div class="col-md-4 brand">CONCRET<span>.</span>IO</div>
				<div class="col-md-8 margintop10">
					
					<form id="" method="GET" action="index.php" autocomplete="off" class="row">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Search for</span>
						  <input type="text" class="form-control" name="search" value = "<?php if(isset($_GET["search"])){echo $_GET["search"];}?>" placeholder="Products, Categories, Brands, Stores, Features etc...">
						  <span class="input-group-btn">
							<button class="btn btn-secondary" type="submit">Go!</button>
						  </span>
						</div>
					</form>
				</div>
				
		</div>
		<div class=" header"></div>
	</header>
</div>
<!-- Header area of the website ends -->