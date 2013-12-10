<?php
require "DB.php"; // Includes the database
echo "Test";

$categories[] = $db->db_ListCategories();



if($categories == false){
     return "Error";
}  else {
    for ($i = 0; $i < count($categories[0]); $i++){
        echo '<div>';
        echo '<a href="/?page=categories&category='.$categories[0][$i]["Category_ID"].'"><img src="'.$categories[0][$i]["Category_image"].'"></a>';
		echo '<h3>'.$categories[0][$i]["Name"].'</h3>';
        echo '</div>';
    }
}
?>