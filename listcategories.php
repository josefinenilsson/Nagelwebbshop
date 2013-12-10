<?php
include "DB.php"; // Includes the database

 $categories = db_ListCategories();
if($categories == false){
     return "Error";
} else {
    for ($i = 0; $i < $categories.count(); $i++){ 
        echo '<div>';
        echo '<a href="/?page=categories&category='.categories[$i]('Category_ID');.'"><img src="'.categories[$i]('Category_image');.'"></a>';
		echo '<h3>'.categories[$i]('Name');</h3>;
        echo '</div>';
    }
}
?>