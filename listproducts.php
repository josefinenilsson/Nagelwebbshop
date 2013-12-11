<?php
require "DB.php"; // Includes the database


$products[] = $db->db_ListProducts();



if($products == false){
     return "Error";
}  else {
    for ($i = 0; $i < count($products[0]); $i++){
        echo '<div class="products">';
		echo '<p>'.$products[0][$i]["SerialNumber"].'</p>';
        echo '</div>';
		
    }
}




?>