<?php
    require "nav.php"
?>
        <div id="wrapper">
            <div class="filter">
                <p>PRIJS</p>
                <a href="kidsD.php">Aflopend</a>
                <a href="kids.php">Oplopend</a>
                <p>CATEGORIE</p>
                <a href="kidsT.php">Truien</a>
                <a href="kidsSh.php">Shirts</a>
                <a href="kidsJ.php">Jassen</a>
                <a href="kidsB.php">Broeken</a>
                <a href="kidsSc.php">Schoenen</a>
                <a href="kidsJurk.php">jurken</a>
            </div>
            <div class="productWrapper">
                <div class="banner">FREE STANDARD DELIVERY & FREE RETURNS</div>
                <div class="cat">KINDEREN</div>
                <div class="products">
                <?php include "php/productsKidsJ.php"; ?>
                </div>
            </div>
        </div>

    </body>

</html>