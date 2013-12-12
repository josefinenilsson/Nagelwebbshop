
<?php
	include "header.php";
?>
<?php
require "DB.php"; // Includes the database

if (isset($_POST['delete'])){ // Om man trycker på kanppen 'delete' kör funktionen db_DeleteFunction
	if($db->db_DeleteProduct($_POST['delete'])) {
		echo "Product deleted.";
	} else {
		echo "Product failed to delete.";
	}
}
$products[] = $db->db_ListProducts(); // Hämta en array genom funktionen db_ListProducts()

echo '<table border="1">';
		echo '<tr>';
		echo '<th>Serienummer</th>';
		echo '<th>Produktnamn</th>';
		echo '<th>Ta bort produkt</th>';
		echo '</tr>';
		echo '</table>';

if($products == false){ // Om den inte kan hämta produktlistan genom db_ListProducts()
     return "Error"; // Visa fel
}  else {
    for ($i = 0; $i < count($products[0]); $i++){ // Om den hittar produkterna kör en for loop. Som skriver ut en tabell med de olika värderna.
        	
		echo '<table border="1">';
		echo '<tr>';
		echo '<td>'.$products[0][$i]["SerialNumber"].'</td>';
		echo '<td>'.$products[0][$i]["Name"].'</td>';
		echo '<td><form action="/adminproducts.php" method="post"><input type="submit" value="'.$products[0][$i]["SerialNumber"].'" name="delete"></form></td>';
		echo '</tr>';
		echo '</table>';
					
    }
}

?>
<?php
	include "footer.php";
?>


              