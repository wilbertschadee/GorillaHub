<?php
    require "nav.php"
?>
        <div id="wrapper">
            <div class="filter">
                <p>PRIJS</p>
                <a href="HerenD.php">Aflopend</a>
                <a href="Heren.php">Oplopend</a>
                <p>CATEGORIE</p>
                <a href="herenT.php">Truien</a>
                <a href="herenSh.php">Shirts</a>
                <a href="herenJ.php">Jassen</a>
                <a href="herenB.php">Broeken</a>
                <a href="herenSc.php">Schoenen</a>
            </div>
            <div class="productWrapper">
                <div class="banner">FREE STANDARD DELIVERY & FREE RETURNS</div>
                <div class="cat">HEREN</div>
                <div class="products">
                    <?php include "php/productsHeren.php"; ?>
                </div>
            </div>
        </div>
        <?php require "footer.php" ?>