<?php
    require "nav.php"
?>

        <div id="wrapper">
            <div class="filter">
                <p>PRIJS</p>
                <a href="damesD.php">Aflopend</a>
                <a href="dames.php">Oplopend</a>
                <p>CATEGORIE</p>
                <a href="damesT.php">Truien</a>
                <a href="damesSh.php">Shirts</a>
                <a href="damesJ.php">Jassen</a>
                <a href="damesBH.php">Beha's</a>
                <a href="damesB.php">Broeken</a>
                <a href="damesSc.php">Schoenen</a>
                <a href="damesTas.php">Tassen</a>
                <a href="damesJurk.php">jurken</a>
            </div>
            <div class="productWrapper">
                <div class="banner">FREE STANDARD DELIVERY & FREE RETURNS</div>
                <div class="cat">DAMES</div>
                <div class="products">
                    <?php include "php/productsDamesJ.php"; ?>
                </div>
            </div>
        </div>
        <?php require "footer.php" ?>