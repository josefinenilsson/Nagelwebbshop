<?php
require "DB.php"; // Includes the database

if (isset($_POST['delete'])){
	if($db->db_DeleteProduct($_POST['delete'])) {
		echo "Product deleted.";
	} else {
		echo "Product failed to delete.";
	}
}
echo "test";
$products[] = $db->db_ListProducts();

echo '<table border="1">';
		echo '<tr>';
		echo '<th>Serienummer</th>';
		echo '<th>Produktnamn</th>';
		echo '</tr>';
		echo '</table>';

if($products == false){
     return "Error";
}  else {
    for ($i = 0; $i < count($products[0]); $i++){
        	
		echo '<table border="1">';
		echo '<tr>';
		echo '<td>'.$products[0][$i]["SerialNumber"].'</td>';
		echo '<td>'.$products[0][$i]["Name"].'</td>';
		echo '<td><form action="/" method="post"><input type="submit" value="'.$products[0][$i]["SerialNumber"].'" name="delete"></form></td>';	
		echo '</tr>';
		echo '</table>';
					
    }
}




?>


              