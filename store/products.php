<?php
    // Include need php scripts
    require_once ("Includes/simplecms-config.php");
    require_once ("Includes/connectDB.php");
    include ("Includes/header.php");
 
	if (!empty($_GET['cat'])) {
		$category = $_GET['cat'];
		$query = mysqli_query($db, "SELECT * FROM products WHERE category = '".$category."'");
	} else {
		$query = mysqli_query($db, "SELECT * FROM products");
	}

    if (!$query) {
        die('Database query failed: ' . $query->error);
    } 
?>
<section>
	<div id="productList">
		<?php
			$row_count = mysqli_num_rows($query);
			if ($row_count == 0) {
				echo '<p style="color:red">There are no images uploaded for this category</p>';
			} elseif ($query) {
				while($products = mysqli_fetch_array($query)){             
					$file = $products['image'];
					$product_name = $products['product'];
					$image_id = $products['id'];
					$price = $products['price'];
					$desc = $products['description'];
					echo '<div class="image_container">';
					echo '<a href="viewProduct.php?id=' . $image_id . '"><p><img src="Images/products/'.$file.'" alt="'.$product_name.'" height="250" /></p>';
					echo $product_name . "</a><br>$" . $price;
                    echo '<a href="deleteProcess.php?id=' . $image_id . '&page=products" class="btn delete">Delete</a> </br>';
                    echo $desc;
					echo '</div>';
				 } 
			 } else {
				 die('There was a problem with the query: ' .$query->error);             
			 } 
			 mysqli_free_result($query);     
		?>
	</div>
</section>
<?php include ("Includes/footer.php"); ?>



 <a href='process.deleteProduct.php?id=<?php echo $image_id; ?>&page=products' class='btn delete'>Delete</a>
 
