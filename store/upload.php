<?php 

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
				echo "Stored in: " . $dir . "/" . $_FILES["file"]["name"];
				header("Location: editBanner.php?add=1");
			  }
			} else {
			  echo "Invalid file";
			}
		}
?>