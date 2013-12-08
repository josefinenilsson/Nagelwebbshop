<?php

include "DB.php";

public class Product{
	
	if(isset($_POST["submit"])) {
	db_AddProduct($_POST["SerialNumber"],$_POST["Name"],$_POST["Description"],$_POST["Price"],$_POST["Category_ID"],$_POST["Product_image"]);
	}

	
} // Here ends the class Product



?>

