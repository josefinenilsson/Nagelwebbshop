<?php

require "DB.php"; // Includes the database


$products[] = $db->db_GetProducts();



if($products == false){
     return "Error";
}  else {
    for ($i = 0; $i < count($products[0]); $i++){
        echo '<div>';
        echo '<a href="/?page=categories&category='.$products[0][$i]["Category_ID"].'"><img src="'.$products[0][$i]["Category_image"].'"></a>';
		echo '<h3>'.$products[0][$i]["Name"].'</h3>';
        echo '</div>';
    }
}
?>