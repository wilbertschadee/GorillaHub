<?php
    require "nav.php"
?>
        <div id="wrapper">
            <div class="filter">
                <p>PRIJS</p>
                <a href="kidsD.php">Aflopend</a>
                <a href="kids.php">Oplopend</a>
                <p>CATEGORIE</p>
                <a href="herenT.php">Truien</a>
                <a href="herenSh.php">Shirts</a>
                <a href="herenJ.php">Jassen</a>
                <a href="herenB.php">Broeken</a>
                <a href="herenSc.php">Schoenen</a>
                <a href="kidsJurk.php">jurken</a>
            </div>
            <div class="productWrapper">
                <div class="banner">FREE STANDARD DELIVERY & FREE RETURNS</div>
                <div class="cat">KINDEREN</div>
                <div class="products">
                <?php include "php/productsKidsD.php"; ?>
                </div>
            </div>
        </div>
        <?php require "footer.php" ?>