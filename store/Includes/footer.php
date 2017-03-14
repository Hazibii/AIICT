<?php
include ("Includes/closeDB.php");        
?>
    <footer>
        <div class="footer-wrapper">
            <div class="float-left">
                <p>&copy; Big Mike's Electronics</p>
            </div>
            <div class="float-right">
                <ul id="social">
                    <li><a href="http://facebook.com" class="facebook">Facebook</a></li>
                    <li><a href="http://twitter.com" class="twitter">Twitter</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        $("#slideshow > div:gt(0)").hide();

        setInterval(function () {
            $('#slideshow > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#slideshow');
        }, 3000);
    </script>
</body>

</html>