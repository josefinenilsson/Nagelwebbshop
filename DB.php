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
		Chanhe product
	########################### */
	
	public function db_ChangeProduct(){
		$this->query('UPDATE "Products" SET "Name"="korv" WHERE "Name"="Depend Blue"');
	}
	// Here we need to figure out what we want to change in the change function, and add variabels.
	
} // Here ends the class Database

$db = new Database('localhost', 'root', 'root', 'webshop'); // Connects to database here
//$db->db_AddProduct(); 									   	// Add product function runs here
//$db->db_DeleteProduct();									// Delete product function runs here
//$db->db_ChangeProduct();									// Change product function runs here


echo 'Success... ' . $db->host_info . "\n";


?>
	