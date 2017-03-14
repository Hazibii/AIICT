<?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");         
     ?>


    <div id="container">
        <div id="tagline">Big Mike's Electronics is a chain of retail electronics stores that caters to all of your electronic needs!</div>
        <div id="banner" class='banner'>
            <div id="slideshow">
                <div>
                    <img src="/Images/banner/1.jpg">
                </div>
                <div>
                    <img src="/Images/banner/2.jpg">
                </div>
                <div>
                    <img src="/Images/banner/3.jpg">
                </div>
                <div>
                    Pretty cool eh? This slide is proof the content can be anything.
                </div>
            </div>

        </div>
        <div class='randomProducts'>
            <?php $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 4";
	    	$run = $db->query($sql);
	    	while($r = $run->fetch_assoc()): 
	    	$file = $r['image']; $product_name = $r['product']; $image_id = $r['id']; $price = $r['price']; ?>
                <div class='randomProductContainer'>
                    <a href="viewProduct.php?id=<?php echo $image_id; ?>">
                        <p><img src="Images/products/<?php echo $file; ?>" alt="<?php echo $product_name; ?>" class='randImage'></p>
                        <?php echo $product_name; ?>
                    </a>
                    <br>$
                    <?php echo $price; ?>
                        <p class='product description small'>
                            <?php echo $desc; ?>
                        </p>
                        <a href="viewProduct.php?id=<?php echo $image_id; ?>" class='btn more'>More information</a>
                </div>
                <?php endwhile; ?>
                    <div class='clear'></div>
        </div>
    </div>

    </div>
    <!-- End of outer-wrapper which opens in header.php -->

    <?php 
    include ("Includes/footer.php");
 ?>