<?php
/* 	########################### 
		Connects to database 
	########################### */
// Here we create the Database class and connects to the database

class Database extends mysqli { 
	
    public function __construct($host, $user, $pass, $db) {
        parent::__construct($host, $user, $pass, $db);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ')'
                    . mysqli_connect_error());
        }
    }
	
#################################################################################################################################################
											/* DATABASE PRODUCT FUNCTIONS START */
#################################################################################################################################################
												 
	
/* 	########################### 
		Add product 
	########################### */
// Here we have a function that inserts data to the database, in this case it adds a product
	
	public function db_AddProduct($productName,$productDescr,$productPrice,$category_ID,$productImage){
		if($this->query( 'INSERT INTO `Products`(`Name`, `Description`, `Price`, `Category_ID`, `Product_image`) VALUES ("'.$productName.'","'.$productDescr.'","'.$productPrice.'","'.$category_ID.'","'.$productImage.'")')){
			return true;
		} else {
			return false;
		}
		
		
	}
	
/* 	########################### 
		Delete product
	########################### */
// Here we have a function that deletes data from the database, in this case it deletes a product
	
	public function db_DeleteProduct($serialNumber){
		if($this->query('DELETE FROM `176225-webshop`.`Products` WHERE `Products`.`SerialNumber` = "'.$serialNumber.'"')){
		return true;
		} else{
		return false;
		}
		
	}
	
/* 	########################### 
		Change product
	########################### */
// Here we have a function that updates data from the database, in this case we use it to change the information about the product
	
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
// Here we have a function that get all the data from the database, this one gets all the products in an array
	
	public function db_ListProducts(){
		if($result = $this->query('SELECT `SerialNumber`, `Name` FROM `Products`')){
		$i=0;
		while($row = mysqli_fetch_assoc($result)){
			$product_list[$i] = $row;
			$i++;
		}
			return $product_list;
		} else{
			return false;
		}
	}

	
	
    

	
/* 	########################### 
		Get Products
	########################### */
// Here we have a function that get all data from the database where the category is specified.	
	

	public function db_GetProducts($category_ID){
		if ($result = $this->query('SELECT * FROM `Products` WHERE `Category_ID` = "'.$category_ID.'" ')) {
			$i=0;
			while($row = mysqli_fetch_assoc($result)){
				$category_get[$i] = $row;
				$i++;
			}
			
			return $category_get;
		} else{
			return false;
			}
	}
    
    /* 	########################### 
		Get Product
	########################### */
// Get one product from products by serialnumber
	
    public function db_GetProduct($serialNumber){
		if ($result = $this->query('SELECT * FROM `Products` WHERE `SerialNumber` = "'.$serialNumber.'" ')) {
			return $result->fetch_assoc();
		} else{
			return false;
			}
	}	
    

	
#################################################################################################################################################
											/* DATABASE PRODUCT FUNCTIONS ENDS */
#################################################################################################################################################
												 
												 
	
#################################################################################################################################################
											/* DATABASE USER FUNCTIONS START */
#################################################################################################################################################
	
	
	
/* 	########################### 
		Add User
	########################### */
// Här har vi en funktion som lägger till data i databasen
	
	public function db_AddUser($firstname,$lastname,$email,$adress,$SSn,$phonenumber,$password,$isAdmin){
		$hashedPassword = $this->hashPassword($password);
		if($this->query('INSERT INTO `User`(`Firstname`, `Lastname`, `Email`, `Adress`, `SSN`, `Phonenumber`, `Password`, `isAdmin`) VALUES ("'.$firstname.'","'.$lastname.'","'.$email.'","'.$adress.'","'.$SSn.'","'.$phonenumber.'","'.$hashedPassword.'","'.$isAdmin.'")')){
			return true;
		} else{
			return false;
		}
	
	
	

	}
		
/* 	########################### 
		Delete User
	########################### */	
// Här har vi en funktion som tar bort en användare ur databasen där SSN stämmer in med det man valt
	public function db_DeleteUser($SSn){
		if($this->query('DELETE FROM `176225-webshop`.`User` WHERE `User`.`SSN` = "'.$SSn.'"')){
		  return true;
		}
        return false;
	}
	
	
	
/* 	########################### 
		Change User
	########################### */
// Den här funktionen uppdaterar data i databasen, vi använder den här för att ändra en användare.
	public function db_ChangeUser(){
		$this->query('UPDATE `User` SET `Email`= '.$email.',`Adress`= '.$adress.',`Phonenumber`= '.$phonenumber.',`Password`= '.$password.' WHERE `SSN` = ');
	}
	
	/* 	########################### 
		Hash password
	########################### */
// Här har vi en funktion som hashar och saltar vårt lösenord ( detta är det som sparas i databasen)
	
	public function hashPassword($password) {
		return $hashedPassword = hash("md5",$password."ctf78j34mx8jtr23kezjt3r32");	
	}
	
	/* 	########################### 
		List user
	########################### */
    
    // Hämtar förnamn, efternamn av alla användare
	
	public function db_ListUser(){
		if($result = $this->query('SELECT `Firstname`,`Lastname`,`SSN` FROM `User`')){
		$i=0;
		while($row = mysqli_fetch_assoc($result)){
			$user_list[$i] = $row;
			$i++;
		}
			return $user_list;
		} else{
			return false;
		}
	}
    
    /* 	########################### 
		Get user
	########################### */
	// Hämtar användarinformation från en viss mailadress
    
public function db_GetUserByEmail($email){ 
		if($result = $this->query('SELECT * FROM `User` WHERE `Email` = "'.$email.'"')){
           return mysqli_fetch_assoc($result);		
		} else {
			return false;
        }
	}

		
	
	
#################################################################################################################################################
											/* DATABASE USER FUNCTIONS ENDS */
#################################################################################################################################################


	
	#################################################################################################################################################
											/* DATABASE ORDER FUNCTIONS START  */
#################################################################################################################################################

	
	
/* 	########################### 
		Add Order
	########################### */
// Här har vi en funktion som lägger till i databasen, Vi använder den här för att lägga till en produkt
	
	public function db_AddOrder($date,$SSn,$IPadress,$hasCheckedOut){
		if($result = $this->query('INSERT INTO `Order`(`Date`, `Customer`, `IP_Adress`, `HasCheckedOut`) VALUES 		 	 ("'.$date.'","'.$SSn.'","'.$IPadress.'","'.$hasCheckedOut.'")')){
            return $this->insert_id;
        } else{
            return false;
        }
}
	
/* 	########################### 
		Checkout Order
	########################### */
// Den här funktionen checkar ut en order
	
	public function db_CheckOutOrder($orderid){
        if($this->query('UPDATE `Order` SET `HasCheckedOut`= "1" WHERE `ID` = "'.$orderid.'"')){
            return true;
        } else {
            return false;
        }	
	}
	
	
/* 	########################### 
		List Orders
	########################### */
// Denna funktion skapar en lista med alla ordrar som finns ( admin funktion )
	
	public function db_ListOrders(){
		if($result = $this->query('SELECT * FROM `Order`')){
            $i=0;
            while($row = mysqli_fetch_assoc($result)){
                $order_list[$i] = $row;
                $i++;
            }
            return $order_list;
        } else {
            return false;
        }
	}
    
    
/* 	########################### 
		List Orders by User
	########################### */
    // hämtar alla ordrar för en viss användare
    public function db_ListOrdersByUser($SSn){
		if($result = $this->query('SELECT * FROM `Order` WHERE `Customer` = "'.$SSn.'"')){
            $i=0;
            while($row = mysqli_fetch_assoc($result)){
                $ordersuser_list[$i] = $row;
                $i++;
            }
            return $ordersuser_list;
        } else {
            return false;
        }
	}
    
    
/* 	########################### 
    Add products to orderlist
	########################### */
    // lägger till produkter i orderlist(kundkorgen)
    public function db_AddProductToOrderlist($orderID,$serialNumber){
        if($this->query('INSERT INTO `Order_List`(`Order_ID`, `Product_ID`,`Amount`) VALUES ("'.$orderID.'","'.$serialNumber.'",1)')){
            return true;
        } else {
            return false;
        } 
            
    }
    
/* 	########################### 
    Get data from orderlist
	########################### */
    // Hämtar all data från orderlist(kundkorgen) med specifierat orderid samt produktid
    public function db_GetDataFromOrderlist($orderID,$serialNumber){
        if($result = $this->query('SELECT * FROM `Order_List` WHERE `Order_ID` = "'.$orderID.'" AND `Product_ID` = "'.$serialNumber.'"')){
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
/* 	########################### 
    Get all from orderlist by order id
	########################### */
    // Hämtar allt som ligger i orderlist(kundkorg) för en viss order
    public function db_GetProductsInCart($orderID){
        $orderID = intval($orderID);
        if($result = $this->query('SELECT * FROM `Order_List` WHERE Order_ID = "'.$orderID.'"')){
            $i=0;
            $order_list = array();
            while($row = $result->fetch_assoc()){
                $order_list[$i] = $row;
                $i++;
            }
            return $order_list;
        } else {
            return false;
        }
    }
    
    
/* 	########################### 
    Update data to Orderlist
	########################### */
    // uppdaterar antalet produkter i kundkorgen
    public function db_UpdateDataToOrderlist($amount,$orderID,$serialNumber){
        if($this->query('UPDATE `Order_List` SET `Amount`="'.$amount.'" WHERE `Order_ID`="'.$orderID.'" AND `Product_ID`="'.$serialNumber.'"')){
            return true;
        } else {
            return false;
        }
    }
    
/* 	########################### 
    Delete product from orderlist
	########################### */
    // Tar bort en specifik produkt ur kundkorgen
    public function db_DeleteProductFromOrderlist($serialNumber){
        if($this->query('DELETE FROM `Order_List` WHERE `Product_ID` = "'.$serialNumber.'"')){
            return true;
        } else {
            return false;
        }
    }
    
    
    
    
	
	#################################################################################################################################################
											/* DATABASE ORDER FUNCTIONS ENDS  */
#################################################################################################################################################
	
	
	
	#################################################################################################################################################
											/* DATABASE CATEGORY FUNCTIONS START  */
#################################################################################################################################################
	
	
	
/* 	########################### 
		List Categories
	########################### */
	
	// Den här funktioner listar alla kategorier
	
	
	public function db_ListCategories(){
		if ($result = $this->query('SELECT * FROM `Category` ')) {
			$i=0;
			while($row = mysqli_fetch_assoc($result)){
				$category_list[$i] = $row;
				$i++;
			}
			return $category_list;
		} else{
			return false;
			}
	}	
    


	
	
	
	
	#################################################################################################################################################
											/* DATABASE CATEGORY FUNCTIONS ENDS  */
#################################################################################################################################################
	
/* #####################
	Match password
	#################### */
// Denna funktionen kollar om lösenordet och email stämmer överrens med det användaren fyller i när de loggar in.
	public function matchFunction($email, $password) {
		$sql = " SELECT `Password` FROM `User` WHERE `Email` = '".$email."'"; // Hämtar lösenordet från en specifik användare
		$result = $this->query($sql); 
		$row = $result->fetch_assoc();
		$hashedPassword = $this->hashPassword($password);
		if($hashedPassword == $row['Password']){
			return true;
		}
		return false;
	}
	
	
	
} // Here ends the class Database

$db = new Database('webshop-176225.mysql.binero.se', '176225_xh46061', 'skola2014', '176225-webshop'); // Connects to database here
//$db->db_AddProduct($serialNumber,$productName,$productDescr,$productPrice,$category_ID,$productImage); 									// Add product function runs here
//$db->db_DeleteProduct();									// Delete product function runs here
//$db->db_ChangeProduct();									// Change product function runs here
//$db->db_AddUser("Jos","Nilsson","jos@jos.jos","hejvägen 2","9302184966","0766120150","hejhejhej", false);										// Add user function runs here
//$db->db_DeleteUser();										// Delete user function runs here
//$db->db_ChangeUser();										// Change user function runs here
//$db->db_AddOrder();										// Add order function runs here


?>
	