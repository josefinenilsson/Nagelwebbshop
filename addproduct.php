<?php
	include "header.php";
?>

<article>
    <form action="addproduct.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><input class="addProduct" placeholder="Namn" type="text" name="Name"></td>
            </tr>
            <tr> 
                <td><input class="addProduct" type="text" placeholder="Beskrivning" name="Description"></td>
            </tr>
            <tr>
                <td><input class="addProduct" placeholder="Pris" type="text" name="Price"></td>
            </tr>
			<tr>
                <td><select class="selectCategory" placeholder="Kategori" name="Category_ID">
                        <option value="">Välj kategori</option>
                        <option value="1">Basic</option>
                        <option value="2">Glitter</option>
                        <option value="3">Magnetiskt</option>
                        <option value="4">Holografiskt</option>
                        <option value="5">Graffiti</option>
                        <option value="6">Jelly</option>
                    </select>
                </td>
            </tr>
			<tr>
       			<td><input class="addProduct" type="file" name="Product_image" id="file"></td><br>
			</tr>
			<tr>
                <td><input class="addProductButton" value="Lägg till" type="submit" name="submit"><td>
            </tr>
        </table>
    </form>
</article>
   
</body>
<?php require_once("DB.php"); // Includes the database

/* 	########################### 
	Add product function
	########################### */	
/* This function takes the data form the form and saves it in the database. */

    if(isset($_POST["submit"])) {
		if($db->db_AddProduct($_POST["Name"],$_POST["Description"],$_POST["Price"],$_POST["Category_ID"],$_POST["Product_image"])){
			echo "Din produkt är nu tillagd";
		} else {
			echo "Kunde inte lägga till produkten";
		}		
	} // Function ends here
?>	
