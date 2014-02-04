
<?php
	include "header.php";
?>
<?php
require_once("DB.php"); // Includes the database

if (isset($_POST['delete'])){ // Om man trycker på kanppen 'delete' kör funktionen db_DeleteFunction
	if($db->db_DeleteProduct($_POST['delete'])) {
		echo "Produkten är nu borttagen";
	} else {
		echo "Kunde inte radera produkten";
	}
}
$products[] = $db->db_ListProducts(); // Hämta en array genom funktionen db_ListProducts()

		echo '<table class="admin_table" border="1">';
		echo '<tr>';
		echo '<th class="admin_th">Serienummer</th>';
		echo '<th class="admin_th">Produktnamn</th>';
		echo '<th class="admin_th">Ta bort produkt</th>';
		echo '</tr>';
		echo '</table>';

if($products == false){ // Om den inte kan hämta produktlistan genom db_ListProducts()
     return "Error"; // Visa fel
}  else {
    echo '<form method="post">';
    for ($i = 0; $i < count($products[0]); $i++){ // Om den hittar produkterna kör en for loop. Som skriver ut en tabell med de olika värderna.
        	
		echo '<table class="admin_table" border="1">';
		echo '<tr>';
		echo '<td class="admin_td">'.$products[0][$i]["SerialNumber"].'</td>';
		echo '<td class="admin_td">'.$products[0][$i]["Name"].'</td>';
		echo '<td class="admin_td"><button type="submit" value="'.$products[0][$i]["SerialNumber"].'" name="delete">Ta bort</button></td>';
		echo '</tr>';
		echo '</table>';
					
    }
    echo '</form>';
}

?>
<?php
	include "footer.php";
?>


              