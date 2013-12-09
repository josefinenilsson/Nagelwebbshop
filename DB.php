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
	
	public function db_AddProduct($serialNumber,$productName,$productDescr,$productPrice,$category_ID,$productImage){
		if($this->query( 'INSERT INTO `Products`(`SerialNumber`, `Name`, `Description`, `Price`, `Category_ID`, `Product_image`) VALUES ("'.$serialNumber.'","'.$productName.'","'.$productDescr.'","'.$productPrice.'","'.$category_ID.'","'.$productImage.'")')){
			return true;
		} else {
			return false;
		}
		
		
	}
	
/* 	########################### 
		Delete product
	########################### */
	
	public function db_DeleteProduct(){
		if($this->query('DELETE FROM `webshop`.`Products` WHERE `Products`.`SerialNumber` = "'.$serialNumber.'"')){
		return true;
		} else{
		return false;
		}
		
	}
	
/* 	########################### 
		Change product
	########################### */
	
	public function db_ChangeProduct($productName,$productDescr,$productPrice,$serialNumber){
		if($this->query('UPDATE `Products` SET `Name`= "'.$productName.'",`Description`= "'.$productDescr.'",`Price`= "'.$productPrice.'" WHERE `Serialnumber`= "'.$serialNumber.'"')){
		return true;
		} else {
		return false;
		}
	}
	
	
/* 	########################### 
		List Products
	########################### */
	
	public function db_ListProducts(){
		$this->query('SELECT * FROM');
	}
	// INTE KLAR
	
/* 	########################### 
		Get Products
	########################### */
	public function db_GetProducts($id){ 
		$this->query('SELECT * FROM "Products" WHERE "Category" = "'.$id.'"');
}
	// Inte klar!
	
#################################################################################################################################################
											/* DATABASE PRODUCT FUNCTIONS ENDS */
#################################################################################################################################################
												 
												 
	
#################################################################################################################################################
											/* DATABASE USER FUNCTIONS START */
#################################################################################################################################################
	
	
	
/* 	########################### 
		Add User
	########################### */
	
	public function db_AddUser($firstname,$lastname,$email,$adress,$SSn,$phonenumber,$hashedPassword,$isAdmin){
		 if($this->query('INSERT INTO `User`(`Firstname`, `Lastname`, `Email`, `Adress`, `SSN`, `Phonenumber`, `Password`, `isAdmin`) VALUES ("'.$firstname.'","'.$lastname.'","'.$email.'","'.$adress.'","'.$SSn.'","'.$phonenumber.'","'.$hashedPassword.'",'.$isAdmin.')')){
		 return true;
		 } else{
		 return false;
		 }
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
		$this->query('UPDATE `User` SET `Email`= '.$email.',`Adress`= '.$adress.',`Phonenumber`= '.$phonenumber.',`Password`= '.$password.' WHERE `SSN` = ');
	}
	
	/* 	########################### 
		Hash password
	########################### */
	
	//$hashedPassword = hash($password."ctf78j34mx8jtr23kezjt3r32");

	
	
	
	
#################################################################################################################################################
											/* DATABASE USER FUNCTIONS ENDS */
#################################################################################################################################################


	
	#################################################################################################################################################
											/* DATABASE ORDER FUNCTIONS START  */
#################################################################################################################################################
	
	
	
	
/* 	########################### 
		Add Order
	########################### */
	
	public function db_AddOrder(){
		$this->query('INSERT INTO `Order`(`Date`, `Time`, `Customer`, `IP_Adress`, `ID`, `HasCheckedOut`) VALUES 		 	 ('.$date.','.$time.','.$SSn.','.$IPadress.','.$serialNumber.','.$hasCheckedOut.')');
	
}
	
/* 	########################### 
		Delete Order
	########################### */	
	
	public function db_DeleteOrder(){
		$this->query('DELETE FROM `webshop`.`Order` WHERE `User`.`SSN` = '.$SSn.'');
	}
// Denna är inte klar än
	
/* 	########################### 
		Change Order
	########################### */
	
	public function db_ChangeOrder(){
		$this->query('');
	}
// Denna är inte heller klar!
	
	
/* 	########################### 
		List Orders
	########################### */
	
	public function db_ListOrders(){
		$this->query('SELECT * FROM ');
	}
	// INTE KLAR
	
	
	#################################################################################################################################################
											/* DATABASE ORDER FUNCTIONS ENDS  */
#################################################################################################################################################
	
	
	
	#################################################################################################################################################
											/* DATABASE CATEGORY FUNCTIONS START  */
#################################################################################################################################################
	
	
	
/* 	########################### 
		List Categories
	########################### */
	public function db_ListCategories(){
		$this->query('');
	}
	
// Inte färdig!!!
	

	
	
	
	
	#################################################################################################################################################
											/* DATABASE CATEGORY FUNCTIONS ENDS  */
#################################################################################################################################################
	
	
	
	
	
	
} // Here ends the class Database

$db = new Database('localhost', 'root', 'root', 'webshop'); // Connects to database here
//$db->db_AddProduct($serialNumber,$productName,$productDescr,$productPrice,$category_ID,$productImage); 									// Add product function runs here
//$db->db_DeleteProduct();									// Delete product function runs here
//$db->db_ChangeProduct();									// Change product function runs here
$db->db_AddUser("Jos","Nilsson","jos@jos.jos","hejvägen 2","9302184966","0766120150","hejhejhej", false);										// Add user function runs here
//$db->db_DeleteUser();										// Delete user function runs here
//$db->db_ChangeUser();										// Change user function runs here
//$db->db_AddOrder();										// Add order function runs here


?>
	