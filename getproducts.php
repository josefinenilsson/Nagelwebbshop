<?php
	include "header.php";
?>
<?php

include "DB.php"; // Includes the database


$products[] = $db->db_GetProducts($_GET['category']);



if($products == false){
     return "Error";
}  else {
    for ($i = 0; $i < count($products[0]); $i++){
        echo '<div class ="get_Products" >';
        echo '<a href=http://localhost/getproducts.php?category='.$products[0][$i]["Category_ID"].'"><img src="'.$products[0][$i]["Product_image"].'"></a>';
		echo '<h3>'.$products[0][$i]["Name"].'</h3>';
		echo '<p>'.$products[0][$i]["Description"].'</p>';
		echo '<p>'.$products[0][$i]["Price"].'kr</p>';
		echo '<a><input type="submit" value="Lägg till i kundkorgen"></a>';
        echo '</div>';
    }
}
?>
<?php
	include "footer.php";
?>