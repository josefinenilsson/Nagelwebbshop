<?php
require "DB.php"; // Includes the database
echo "Test";

$categories[] = $db->db_ListCategories();

var_dump($categories);

if($categories == false){
     return "Error";
}  else {
    for ($i = 0; $i < count($categories); $i++){
        echo '<div>';
        echo '<a href="/?page=categories&category='.$categories[$i]['Category_ID'].'"><img src="'.$categories[$i]['Category_image'].'"></a>';
		echo '<h3>'.$categories[$i]['Name'].'</h3>';
        echo '</div>';
    }
}
?>