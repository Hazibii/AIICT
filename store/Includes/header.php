<?php require_once ("Includes/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Big Mike's Electronic</title>
        <link href="Styles/style.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="icon" type="image/png" href="Images/favicon.png">
    </head>
    <body>
        <div class="outer-wrapper">
        <header>
            <div class="content-wrapper">
                <div class="float-left">
                    <p class="site-title"><a href="index.php">Big Mike's Electronics</a></p>
                </div>
                <div class="float-right">
                    <section id="login">
                        <ul id="login">
                        <?php
                        if (logged_on())
                        {
                            echo '<li><a href="logoff.php">Sign out</a></li>' . "\n";
                            if (is_admin())
                            {
                                echo '<li><a href="admin.php">Admin</a></li>' . "\n";
                            }
                        }
                        else
                        {
                            echo '<li><a href="logon.php">Login</a></li>' . "\n";
                            echo '<li><a href="register.php">Register</a></li>' . "\n";
                        }
                        ?>
                        </ul>
                        <?php if (logged_on()) {
                            echo "<div class=\"welcomeMessage\">Welcome! <strong>{$_SESSION['username']}</strong> </div>\n";
                        } ?>
                    </section>
                </div>

                <div class="clear-fix"></div>
            </div>

                <section class="navigation" data-role="navbar">
                    <nav>
                        <ul id="menu">
                            <li><a href="index.php">Home</a></li>
							<li><a href="products.php?cat=computers">Computers</a></li>
							<li><a href="products.php?cat=tvs">TVs</a></li>
							<li><a href="products.php?cat=phones">Phones</a></li>
							<li><a href="products.php?cat=dvds">DVDs</a></li>
							<li><a href="products.php?cat=games">Games</a></li>
                            <li><a href="contactUs.php">Contact Us</a></li>
                        </ul>
                    </nav>
            </section>
        </header>
