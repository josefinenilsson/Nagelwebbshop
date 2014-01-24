<?php
	include "header.php";

require_once("DB.php"); // Includes the database


$categories[] = $db->db_ListCategories(); // Hämtar sparar array från db_ListCategories() i  variablen $categories[]


if($categories == false){ // Om den inte hittar något = false
     return "Error";
}  else {
    for ($i = 0; $i < count($categories[0]); $i++){ // Kör en forloop som skriver ut informationen.
        echo '<div class="category">';
        echo '<a href=/getproducts.php?category='.$categories[0][$i]["Category_ID"].'><img src="'.$categories[0][$i]["Category_image"].'"></a>';
		echo '<h3>'.$categories[0][$i]["Name"].'</h3>';
		echo '<p>'.$categories[0][$i]["Description"].'</h3>';
        echo '</div>';
		
    }
}


?>

<?php
	include "footer.php";
?>