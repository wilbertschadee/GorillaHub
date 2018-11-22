<?php
    
    $sql = "SELECT product_name, price, img_path, gender FROM product
    WHERE  gender='heren' ORDER BY price desc " ;
    
    $data = $conn->query($sql);     

    foreach ($data as $row)
    {   
        $htmlOutput  = "";         
        $htmlOutput  = '<div class="product">';
        $htmlOutput .= '<img src="' . $row['img_path'] . '" alt="' . $row['product_name'] . '" style="max-width:100%">';
        $htmlOutput .= '<h1>'. $row['product_name']  . '</h1>';
        $htmlOutput .= '<p class="price"> € ' . $row['price'] . '</p>';
        $htmlOutput .= '</div>';   

        echo $htmlOutput;
    }  
  
?> 
