    <?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");

		if(!empty($_GET['id'])) {
		    $id = $_GET['id'];
			$sql = "SELECT * FROM `products` WHERE `id`='$id'";
			if($run = $db->query($sql)) {
			    $item = $run->fetch_assoc();
			    $file = $item['image'];
				$product_name = $item['product'];
				$image_id = $item['id'];
				$price = $item['price'];
				$desc = $item['description'];
			} else {
			    die("Fatal error loading item, please refresh the page.");
			}
		} else {
			header("Location: products.php");
			exit();
		}
     ?>
     
    <div id="container">
	    <div class='product'>
	        <h2 class='header'><?php echo $item['product']; ?></h2>
	        <div class='row'>
	            <div class='col image-holder'>
	                <img src="Images/products/<?php echo $file; ?>" alt="<?php echo $product_name; ?>" >
	            </div>
	            <div class='col'>
	                <h3>$<?php echo $price; ?> | <?php $item['category']; ?></h3>
	                <?php if(is_admin()): ?> <a href='process.deleteProduct.php?id=<?php echo $image_id; ?>&page=products' class='btn delete'>Delete</a> <?php endif; ?>
	                <p class='product description'><?php echo $desc; ?></p>
	            </div>
	            <div class='clear'></div>
	        </div>
	    </div>	
    </div>

</div> <!-- End of outer-wrapper which opens in header.php -->

<?php 
    include ("Includes/footer.php");
?>