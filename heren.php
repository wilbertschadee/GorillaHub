<?php
    require "nav.php"
?>
        <div id="wrapper">
            <div class="filter">
                Catagorie<br>
                <select name="catagorie" id="">
                    <option>Broek</option>
                    <option>Trui</option>
                    <option>Schoenen</option>
                    <option>Shirt</option>
                    <option>Jas</option>
                </select><br>
                Prijs<br>
                <select name="price" id="">
                    <option>€0 tot €20</option>
                    <option>€20 tot €50</option>
                    <option>€50 tot €100</option>
                    <option>€100+</option>
                </select>
            </div>
            <div class="productWrapper">
                <?php include "php/productsHeren.php"; ?>
            </div>
        </div>  

    </body>

</html>