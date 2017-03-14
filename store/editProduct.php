<?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");        
		confirm_is_admin();
     ?>
    <?php if(isset($_SESSION['status'])) {
        echo $_SESSION['status'];
        unset($_SESSION['status']);
    } ?>

        <div id="container">
            <div id="admin">
                <h2 class='header'>Edit Products</h2>
                <?php if(!isset($_GET['id'])): 
                    $sql = "SELECT * FROM products"; 
                    $run = $db->query($sql); 
                ?>
                    <section class='products'>
                        <?php while($products = $run->fetch_assoc()): 
                            $file = $products['image'];
                            $product_name = $products['product'];
                            $image_id = $products['id'];
                            $price = $products['price']; 
                        ?>
                            <div class="product_container">
                                <p><img src="Images/products/<?php echo $file; ?>" alt="<?php echo $product_name; ?>" height="250"></p>
                                <?php echo $product_name; ?>
                                    <br>$
                                    <?php echo $price; ?>
                                        <a href="editProduct.php?id=<?php echo $image_id; ?>" class='btn more'>Edit</a>
                                        <?php if(is_admin()): ?>
                                            <a href='process.deleteProduct.php?id=<?php echo $image_id; ?>&page=products' class='btn delete'>Delete</a>
                                            <?php endif; ?>
                            </div>
                            <?php endwhile; ?>
                                <div class='clear'></div>
                    </section>

                    <?php elseif(isset($_GET['id'])):
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
                        } ?>

                        <div class='row'>
                            <h3><?php echo $item['product']; ?></h3>
                            <form id="product_form" class="dialogform" action="process.editProduct.php" method="post" enctype="multipart/form-data">
                                <input class='hide' readonly required name='itemID' value='<?php echo $id; ?>'>
                                <div class="form_description">
                                    <p>Change the details that need to be changed.</p>
                                </div>
                                <label class="description" for="itemName">Item Name</label>
                                <div>
                                    <input id="itemName" name="itemName" value='<?php echo $item[' product ']; ?>' type="text" maxlength="255" required/>
                                </div>
                                <label class="description" for="itemPrice">Price</label>
                                <div>
                                    <input id="itemPrice" name="itemPrice" value='<?php echo $price; ?>' type="text" maxlength="255" requierd/>
                                </div>
                                <label class="description" for="itemCategory">Category</label>
                                <div>
                                    <select name="itemCategory">
                                        <option value="computers" <?php if($item[ 'category']=='computers' ){echo "selected";} ?> >Computers</option>
                                        <option value="tvs" <?php if($item[ 'category']=='tvs' ){echo "selected";} ?> >TVs</option>
                                        <option value="phones" <?php if($item[ 'category']=='phones' ){echo "selected";} ?> >Phones</option>
                                        <option value="dvds" <?php if($item[ 'category']=='dvds' ){echo "selected";} ?> >DVDs</option>
                                        <option value="games" <?php if($item[ 'category']=='games' ){echo "selected";} ?> >Games</option>
                                    </select>
                                </div>
                                <label class="description" for="itemDescription">Description</label>
                                <div>
                                    <textarea style="width: 350px; height: 108px;" id="itemDescription" name="itemDescription">
                                        <?php echo $desc; ?>
                                    </textarea>
                                </div>
                                <p>Current Image, did you need to change it?</p>
                                <p><img src="Images/products/<?php echo $file; ?>" alt="<?php echo $product_name; ?>" height="250"></p>
                                <label class="description" for="uploadImage">Upload Image to Change it</label>
                                <div>
                                    <input id="uploadImage" class="button_text" type="file" name="uploadImage" size="50" />
                                </div>
                                <input id="submit_button" class="button_text" type="submit" name="submit" value="Submit" />
                            </form>
                        </div>
                        <?php endif; ?>
            </div>
        </div>

        </div>
        <!-- End of outer-wrapper which opens in header.php -->

        <?php 
    include ("Includes/footer.php");
 ?>