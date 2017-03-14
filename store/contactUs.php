<?php 
    require_once ("Includes/simplecms-config.php"); 
    require_once  ("Includes/connectDB.php");
    include ("Includes/header.php");

 ?>

    <div id="container">
		<h2 class='header'>Contact Us</h2>
		<section id="form-main">
		    <div id='form-div'>
		        <form class='contactUs-form' method='post' onsubmit="submitThis('.contactUs-form'); return false;">
                    <p class="name">
                        <input name="name" type="text" class="feedback-input" placeholder="Name" id="name" required/>
                    </p>
                    <p class="email">
                        <input name="email" type="text" class="feedback-input" id="email" placeholder="Email" required/>
                    </p>
                    <p class="phone">
                        <input name="phone" type="text" class="feedback-input" id="phone" placeholder="Phone" required/>
                    </p>
                    <p class="text">
                        <textarea name="text" class="feedback-input" id="comment" placeholder="Comment" required></textarea>
                    </p>           
                    <div class="submit">
                        <input type="submit" value="SEND" id="button-blue"/>
                        <div class="ease"></div>
                    </div>
                    <div class='response'></div>
    		    </form>
		    </div>
		    <div class='clear'></div>
		</section>
    </div>

</div> <!-- End of outer-wrapper which opens in header.php -->

<?php 
    include ("Includes/footer.php");
?>