<?php
include "header.php";
?>

<h2>Här är dina ordrar</h2>

<?php
require_once("DB.php"); // Includes the database

if (isset($_POST['delete'])){ // Om man trycker på kanppen 'delete' kör funktionen db_DeleteFunction
	if($db->db_DeleteUser($_POST['delete'])) {
        
		echo "Användaren är nu borttagen";
	} else {
		echo "Kunde inte radera användaren";
	}
}
$user[] = $db->db_ListUser(); // Hämta en array genom funktionen db_ListUser()

echo '<table class="admin_table" border="1">';
		echo '<tr>';
        echo '<th class="admin_th">Förnamn</th>';
        echo '<th class="admin_th">Efternamn</th>';
		echo '<th class="admin_th">Personnummer</th>';
		echo '<th class="admin_th">Ta bort användare</th>';
		echo '</tr>';
		echo '</table>';

if($user == false){ // Om den inte kan hämta användarlistan genom db_ListUser()
     return "Error"; // Visa fel
}  else {
    echo '<form  method="post">';
    for ($i = 0; $i < count($user[0]); $i++){ // Om den hittar användarna kör en for loop. Som skriver ut en tabell med de olika värderna.
        	
		echo '<table class="admin_table" border="1">';
		echo '<tr>';
        echo '<td class="admin_td">'.$user[0][$i]["Firstname"].'</td>';
        echo '<td class="admin_td">'.$user[0][$i]["Lastname"].'</td>';
		echo '<td class="admin_td">'.$user[0][$i]["SSN"].'</td>';
		echo '<td class="admin_td"><button type="submit" value="'.$user[0][$i]["SSN"].'" name="delete">Ta bort användare</button></td>';
		echo '</tr>';
		echo '</table>';
        echo '</form>';
					
    }
}

?>

<?php
include "footer.php";
?>