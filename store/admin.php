    <?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");        

		confirm_is_admin();	
     ?>


    <div id="container">
		<div id="admin">
			<h3>Welcome back!</h3>
			<span>Please make your selection from the menu below. Note that once you update anything, it will immediately update on the site.</span>
			<div id="adminMenuCont">
				<div class="adminMenu">
					<a href="products.php" title="Click to view products">View Products</a><br />
					Shows you a listing of all of your products currently listed.<br />
				</div>
				<div class="adminMenu">
					<a href="addProduct.php" title="Click to add a new product to the catalog">Add Product</a><br />
					You can add products from this screen by filling in the form with the item title, selecting a category, adding a description and uploading an image.
				</div>
				<div class="adminMenu">
					<a href="editProduct.php" title="Click to edit a current product">Edit Product</a><br />
					You can edit products from this screen by selecting a product and editing the form data.
				</div>
				<div class="adminMenu">
					<a href="deleteProduct.php" title="Click to delete a current product">Delete Product</a><br />
					You can delete products from this screen by selecting a product.
				</div>
				<div class="adminMenu">
					<a href="editBanner.php" title="Click to edit banner images">Edit Banner</a><br />
					You can edit the images displayed on the home page banner here.
				</div>
				<div class="adminMenu">
					<a href="editUsers.php" title="Click to edit banner images">Edit Users</a><br />
					You can edit the users of the site and their permissions here.
				</div>
			</div>
		</div>
    </div>

</div> <!-- End of outer-wrapper which opens in header.php -->

<?php 
    include ("Includes/footer.php");
 ?>