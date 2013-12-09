<form action="changeproduct.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Namn</td>
                <td><input type="text" name="Name"</td>
            </tr>
            <tr>
                <td>Beskrivning</td>
                <td><input type="text" name="Description"</td>
            </tr>
            <tr>
                <td>Pris</td>
                <td><input type="text" name="Price"</td>
            </tr>
			
			<tr>
                <td>Spara</td>
                <td><input type="submit" name="submit"</td>
            </tr>
        </table>


<?php

include "DB.php"; // Includes the database

/* 	########################### 
	Change product function
	########################### */	

/* This function is for changing Name, Description and Price for the product. */


	if(isset($_POST["submit"])) {
		if($db->db_ChangeProduct($_POST["Name"],$_POST["Description"],$_POST["Price"],$_GET['productid'])){
			echo "Success!";
		} else {
			echo "Failure!";
		}		
	} // Function ends here



// Här skall det vara validering av formuläret mot databasen!

?>
