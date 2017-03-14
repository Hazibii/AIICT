    <?php 
		require_once ("Includes/simplecms-config.php"); 
		require_once ("Includes/connectDB.php");
        include("Includes/header.php");        

		confirm_is_admin();

		// max file size for the html upload form
		$max_file_size = 50 * 1024 * 1024; // size in bytes

		// directory that will recieve the uploaded file
		$dir = 'Images/products/';

		// load parameters
		$itemName = '';
		$itemCategory = '';
		$itemDescription = '';
		$itemPrice = '';
		
		if (isset($_POST['itemName'])) { $itemName = $_POST['itemName']; }
		if (isset($_POST['itemCategory'])) { $itemCategory = $_POST['itemCategory']; }
		if (isset($_POST['itemDescription'])) { $itemDescription = $_POST['itemDescription']; }
		if (isset($_POST['itemPrice'])) { $itemPrice = $_POST['itemPrice']; }
		
		// check if form submitted
		$addSuccess = false;
		$error = '';

		if(isset($_POST['submit'])) {
			if (strlen($itemName)>0 && strlen($itemDescription)>0) {
				if( $_FILES['uploadImage']['name'] != "" ) {
					echo $_FILES['uploadImage']['name']. ' uploaded succesfully.<br />';

					@move_uploaded_file($_FILES['uploadImage']['tmp_name'], $dir.$_FILES['uploadImage']['name']);

					$productQry = 'INSERT INTO products (product, image, price, category, description)
							VALUES (?, ?, ?, ?, ?)';
					$statement = $db->prepare($productQry);
					$statement->bind_param('sssss', $itemName, $_FILES['uploadImage']['name'], $itemPrice, $itemCategory, $itemDescription);
					$statement->execute();
				
					$addSuccess=true;

					// clear parameters
					$itemName = '';
					$itemCategory = '';
					$itemDescription = '';
				} else {
					$error = "Please select a valid image.<br />";
				}
			} else {
				$error = "Please enter a valid item name and description.<br />";
			}
		}
     ?>


    <div id="container">
		<div id="admin">
			<h1>Add Product</h1>
			<form id="product_form" class="dialogform" action="addProduct.php" method="post" enctype="multipart/form-data">
				<div class="form_description">
					<p>Fill in the details below to add a new product to the catalog.</p>
				</div>
				<label class="description" for="itemName">Item Name</label>
				<div>
					<input id="itemName" name="itemName" type="text" maxlength="255" />
				</div>
				<label class="description" for="itemPrice">Price</label>
				<div>
					<input id="itemPrice" name="itemPrice" type="text" maxlength="255" />
				</div>
				<label class="description" for="itemCategory">Category</label>
				<div>
					<select name="itemCategory">
						<option value="computers">Computers</option>
						<option value="tvs">TVs</option>
						<option value="phones">Phones</option>
						<option value="dvds">DVDs</option>
						<option value="games">Games</option>
					</select>
				</div>
				<label class="description" for="itemDescription">Description</label>
				<div>
					<textarea style="width: 350px; height: 108px;" id="itemDescription" name="itemDescription"></textarea>
				</div>
				<label class="description" for="uploadImage">Upload Image</label>
				<div>
					<input id="uploadImage" class="button_text" type="file" name="uploadImage" size="50" />
				</div>
				<input id="submit_button" class="button_text" type="submit" name="submit" value="Submit" />
			</form>
		</div>
    </div>

</div> <!-- End of outer-wrapper which opens in header.php -->

<?php 
    include ("Includes/footer.php");
 ?>