<?php

    $sql = "SELECT user_name FROM users";
    
    $data = $conn->query($sql);  

    foreach ($data as $row)
    {   
        echo '<p class="result">';     
        echo $row['user_name'] . "<br>";   
        echo "</p>";
    }  
  
?>