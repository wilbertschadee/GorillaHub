<?php
    require "nav.php"
?>
        <div id="wrapper">
            <div class="filter">
                <p>Prijs</p>
                <a href="kidsD.php">aflopend</a>
                <a href="kids.php">oplopend</a>
            </div>
            <div class="productWrapper">
                <div class="banner">FREE STANDARD DELIVERY & FREE RETURNS</div>
                <div class="cat">KINDEREN</div>
                <div class="products">
                <?php include "php/productsKidsD.php"; ?>
                </div>
            </div>
        </div>

    </body>

</html>