<?php
    require_once ("Includes/simplecms-config.php");
    require_once ("Functions/database.php");
    
    // Create database connection
    $db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);
    if ($db->connect_error)
    {
        die("Database selection failed: " . $db->connect_error);
    }
	$select = mysqli_select_db($db, DB_NAME);
	if(!$select) {
		die("Database selection failed: " . mysqli_error());
	}
	
    // Create tables if needed.
    prep_DB_content();
?>