<?php
/* 	########################### 
		Connects to database 
	########################### */

class Database extends mysqli { 
	
    public function __construct($host, $user, $pass, $db) {
        parent::__construct($host, $user, $pass, $db);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }
	
#################################################################################################################################################
											/* DATABASE PRODUCT FUNCTIONS START */
#################################################################################################################################################
												 
												 
	
/* 	########################### 
		Add product 
	########################### */
	
	public function db_AddProduct(){
		$this->query('INSERT INTO `Products`(`SerialNumber`, `Name`, `Description`, `Price`, `Category_ID`, `Product_image`) VALUES ('.$serialNumber.','.$productName.','.$productDescr.','.$productPrice.','.$category_ID.','.$productImage.')');
		echo "db_AddProduct()";
			
	}
	
/* 	########################### 
		Delete product
	########################### */
	
	public function db_DeleteProduct(){
		$this->query('DELETE FROM `webshop`.`Products` WHERE `Products`.`SerialNumber` = '.$serialNumber.'');
		echo "db_DeleteProduct()";
	}
	
/* 	########################### 
		Change product
	########################### */
	
	public function db_ChangeProduct(){
		$this->query('UPDATE "Products" SET "$productName"="$newProductName" WHERE "Name"="Depend Blue"');
	}
	// Here we need to figure out what we want to change in the change function, and add variabels.
	
	
	
#################################################################################################################################################
											/* DATABASE PRODUCT FUNCTIONS ENDS */
#################################################################################################################################################
												 
												 
	
#################################################################################################################################################
											/* DATABASE USER FUNCTIONS START */
#################################################################################################################################################
	
	
	
/* 	########################### 
		Add User
	########################### */
	
	public function db_AddUser(){
		$this->query('INSERT INTO `User`(`Firstname`, `Lastname`, `Email`, `Adress`, `SSN`, `Phonenumber`, `Password`, `isAdmin`) VALUES ("Josefine","Nilsson","josefine.h.nilsson93@gmail.com","Hermansvägen 104","199302184966","0766120150","hejhej","false")');
		echo "db_AddUser()";
	}
	// We need to add variables here instead of my name stuff
	
	
#################################################################################################################################################
											/* DATABASE USER FUNCTIONS ENDS */
#################################################################################################################################################
	
	
	
} // Here ends the class Database

$db = new Database('localhost', 'root', 'root', 'webshop'); // Connects to database here
//$db->db_AddProduct(); 									// Add product function runs here
//$db->db_DeleteProduct();									// Delete product function runs here
//$db->db_ChangeProduct();									// Change product function runs here
$db->db_AddUser();											// Add user function runs here


echo 'Success... ' . $db->host_info . "\n";


?>
	