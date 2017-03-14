<?php
        require_once ("Includes/simplecms-config.php");
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");

		confirm_is_admin();


        $dir = 'Images/banner';
        $confirmation = "";

		if(isset($_GET["del"])){
			if (file_exists($dir . "/" . $_GET["del"])) {
				unlink($dir . "/" . $_GET["del"]);
				$confirmation = $_GET["del"] . " deleted. <br><br>";
			} else {
				$confirmation = $_GET["del"] . " doesn't exist. <br><br>";
			}
		}

		$files = scandir($dir);
		array_shift($files);
		array_shift($files);
		
		$newImage = COUNT($files)+1;

		if(isset($_GET["add"])) {
			$confirmation = "Image successfully uploaded.";
		}

		if(isset($_FILES["file"]["name"])){
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);

			if ((($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/x-png")
			|| ($_FILES["file"]["type"] == "image/png"))
			&& ($_FILES["file"]["size"] < 50 * 1024 * 1024) //50mb (1024 * 1kb = 1mb, 50 x 1024kb = 50mb)
			&& in_array($extension, $allowedExts)) {
			  if ($_FILES["file"]["error"] > 0) {
				echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
			  } else {
                  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
                  echo "Type: " . $_FILES["file"]["type"] . "<br>";
                  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                  echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
                  move_uploaded_file($_FILES["file"]["tmp_name"], $dir . "/" . $newImage . "." . $extension);
                  echo "Stored in: " . $dir. "/" . $_FILES["file"]["name"];
                  //header("Location: editBanner.php?add=". $newImage);
              }
			} else {
                echo "Invalid file";
			}
		}

     ?>


    <div id="container">
        <div id="admin">
            <?php
				if(!empty($confirmation)) {
					echo "<div id='confirmation'>" . $confirmation . "</div>";
				}

				for ($i = 0; $i < COUNT($files); $i++) {
					echo '<div id="bannerImage">';
					echo $files[$i] . ' - <a href="editBanner.php?del=' . $files[$i] . '">Delete</a><br>';
					echo '<img src="' . $dir . '/' . $files[$i] . '" width="200px" height="100px" /><br>';
					echo '</div>';
				}
			?>
                <div id="bannerAdd">
                    <form action=" " method="POST" enctype="multipart/form-data">
                        <h3>Upload a New Banner Image</h3>
                        <input type="file" name="file" id="file" />
                        <br>
                        <input type="submit" name="submit" value="Submit" />
                         
                    </form>
                </div>
        </div>
    </div>

</div>
    <!-- End of outer-wrapper which opens in header.php -->
    ?>
    <?php
    include ("Includes/footer.php");
    ?>