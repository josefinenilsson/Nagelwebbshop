<?php
	include "header.php";
?>

    <article>
    <form action="addproduct.php" method="post" enctype="multipart/form-data">
            <table>
            <tr>
               
                <td><input class="addProduct" placeholder="Serienummer" type="text" name="SerialNumber"</td>
            </tr>
            <tr>
                
                <td><input class="addProduct" placeholder="Namn" type="text" name="Name"</td>
            </tr>
            <tr>
                
                <td><input class="addProduct" type="text" placeholder="Beskrivning" name="Description"</td>
            </tr>
            <tr>
               
                <td><input class="addProduct" placeholder="Pris" type="text" name="Price"</td>
            </tr>
			<tr>
                
                <td><input class="addProduct" placeholder="Kategori" type="text" name="Category_ID"</td>
            </tr>
			<tr>
	 			
       			<td><input class="addProduct" type="file" name="Product_image" id="file"></td><br>
        		
			</tr>
			<tr>
                
                <td><input class="addProductButton" value="Lägg till" type="submit" name="submit"</td>
            </tr>
        </table>
    </article>
   
</body>
    <?php
require_once("DB.php"); // Includes the database



/* 	########################### 
	Add product function
	########################### */	

/* This function takes the data form the form and saves it in the database. */


	if(isset($_POST["submit"])) {
		if($db->db_AddProduct($_POST["SerialNumber"],$_POST["Name"],$_POST["Description"],$_POST["Price"],$_POST["Category_ID"],$_POST["Product_image"])){
			echo "Success!";
		} else {
			echo "Failure!";
		}		
	} // Function ends here



// Här skall det vara validering av formuläret mot databasen!
		
?>	
