<!DOCTYPE html>
<html>
	<head>
		<title>ATN Toy shop</title>
		<link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<body>
		<div id="menu_top">
			<div id="Toy's">
				<a href="index.php" title="HOME PAGE">ATN Toy shop</a>
			</div>
			<div id="menu">
				<ul>
				<li><a href="index.php" title="HOME PAGE">HOME</a></li>
				<li><a href="introduce.php" title="INTRODUCE">INTRODUCE</a></li>
				<li><a href="product.php" title="PRODUCT">PRODUCT</a></li>
				<li><a href="contact.html" title="CONTACT">CONTACT</a></li>	
			</ul>
			</div>
			<div id="help">
				<a href="help.php" title="HELP">HELP</a>
			</div>
		</div>
		<div id="banner">
			<img src="logo.png" alt="TOY" width="1000px" />
		</div>
		<div id="main">
		          
			<div id="TOY">

				<?php
		include 'dbconnector.php';
		            $sql = "SELECT productid, image,  productname FROM product1";
		            $result = pg_query($connection,$sql);
		            if (pg_num_rows($result) > 0) {
		            // output data of each row
		            while($row = pg_fetch_assoc($result)) {
		            	$productid = $row['productid'];
		              	$image = $row['image'];
		              	$productname = $row['productname'];
		         
		          ?>
				<a class="col-3" href="detail.php?productid=<?= $productid; ?>">
					<img src="<?= $image; ?>"  width="220px" />
					<h3><?= $productname; ?></h3>
				</a>
				 <?php }} 

		       ?>

			</div>
		</div>
		<div id="footer">
			<div class="row">
				<p>WELCOME TO ATN shop</p>
			</div>
		</div>
	</body>
</html>