<?php
	include "header.php";
?>
<?php

include "DB.php"; // Includes the database


$products[] = $db->db_GetProducts($_GET['category']);
var_dump($products);


if($products == false){
     return "Error";
}  else {
    for ($i = 0; $i < count($products[0]); $i++){
        echo '<div >';
        echo '<a href="/?page=categories&category='.$products[0][$i]["SerialNumber"].'"><img src="'.$products[0][$i]["Product_image"].'"></a>';
		echo '<h3>'.$products[0][$i]["Name"].'</h3>';
		echo '<p>'.$products[0][$i]["Description"].'</p>';
        echo '</div>';
    }
}
?>
<?php
	include "footer.php";
?>