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
		$this->query('UPDATE "Products" SET "Name" ='.$newProductName.' WHERE "Serialnumber"= '.$serialNumber.'');
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
		$this->query('INSERT INTO `User`(`Firstname`, `Lastname`, `Email`, `Adress`, `SSN`, `Phonenumber`, `Password`, `isAdmin`) VALUES ('.$firstname.','.$lastname.','.$email.','.$adress.','.$SSn.','.$phonenumber.','.$password.','.$isAdmin.')');
		echo "db_AddUser()";
	}
		
/* 	########################### 
		Delete User
	########################### */	
	public function db_DeleteUser(){
		$this->query('DELETE FROM `webshop`.`User` WHERE `User`.`SSN` = '.$SSn.'');
	}
	
/* 	########################### 
		Change User
	########################### */
	public function db_ChangeUser(){
		$this->query('UPDATE "User" SET "Email" ='.$email.'   WHERE "SSN"='.$SSn.'');
	}
	// Here we need to figure out what we want to change in the change function, and add variabels.
	
	
	
	
#################################################################################################################################################
											/* DATABASE USER FUNCTIONS ENDS */
#################################################################################################################################################

	
	
	
/* 	########################### 
		Add Order
	########################### */
	
public function db_AddOrder(){
	$this->query('INSERT INTO `Order`(`Date`, `Time`, `Customer`, `IP_Adress`, `ID`, `HasCheckedOut`) VALUES ("20131202","20:00","199302184966","8654790","8u89","true")');
	echo "db_AddOrder() 1";
}
// Need to add variables	
	
	
	
	
	#################################################################################################################################################
											/* DATABASE ORDER FUNCTIONS START  */
#################################################################################################################################################
	
	
	
	
	
	
} // Here ends the class Database

$db = new Database('localhost', 'root', 'root', 'webshop'); // Connects to database here
//$db->db_AddProduct(); 									// Add product function runs here
//$db->db_DeleteProduct();									// Delete product function runs here
//$db->db_ChangeProduct();									// Change product function runs here
//$db->db_AddUser();										// Add user function runs here
//$db->db_DeleteUser();										// Delete user function runs here
//$db->db_ChangeUser();										// Change user function runs here
//$db->db_AddOrder();										// Add order function runs here


echo 'Success... ' . $db->host_info . "\n";


?>
	