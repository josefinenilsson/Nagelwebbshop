
<?php
	include "header.php";
?>
<?php
require "DB.php"; // Includes the database

if (isset($_POST['delete'])){ // Om man trycker på kanppen 'delete' kör funktionen db_DeleteFunction
	if($db->db_DeleteUser($_POST['delete'])) {
		echo "Product deleted.";
	} else {
		echo "Product failed to delete.";
	}
}
$user[] = $db->db_ListUser(); // Hämta en array genom funktionen db_ListUser()

echo '<table border="1">';
		echo '<tr>';
		echo '<th>Personnummer</th>';
		echo '<th>Ta bort användare</th>';
		echo '</tr>';
		echo '</table>';

if($user == false){ // Om den inte kan hämta användarlistan genom db_ListUser()
     return "Error"; // Visa fel
}  else {
    for ($i = 0; $i < count($user[0]); $i++){ // Om den hittar användarna kör en for loop. Som skriver ut en tabell med de olika värderna.
        	
		echo '<table border="1">';
		echo '<tr>';
		echo '<td>'.$user[0][$i]["SSN"].'</td>';
		echo '<td><form action="/adminuser.php" method="post"><input type="submit" value="Ta bort" name="delete"></form></td>';
		echo '</tr>';
		echo '</table>';
					
    }
}

?>
<?php
	include "footer.php";
?>


              