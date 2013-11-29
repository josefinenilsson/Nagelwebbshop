<?php
### Connects to database ###
class database extends mysqli {
    public function __construct($host, $user, $pass, $db) {
        parent::__construct($host, $user, $pass, $db);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }
	
	### Add product ###
	public function db_AddProduct(){
		$this->query('INSERT INTO `Products`(`SerialNumber`, `Name`, `Description`, `Price`, `Category_ID`, `Product_image`) VALUES ('.$serialNumber.','.$productName.','.$productDescr.','.$productPrice.','.$category_ID.','.$productImage.')');
		echo "db_AddProduct()";
			
	}
	
	### Delete product ###
	public function db_DeleteProduct(){
		$this->query('DELETE FROM `webshop`.`Products` WHERE `Products`.`SerialNumber` = '.$serialNumber.'');
		echo "db_DeleteProduct()";
	}
	
	### Change product ###
	public function db_ChangeProduct(){
		$this->query('UPDATE "Products" SET "Name"="korv" WHERE "Name"="Depend Blue"');
	}
}

$db = new database('localhost', 'root', 'root', 'webshop'); // Connects to database here
//$db->db_AddProduct(); 									   	// Add product function runs here
//$db->db_DeleteProduct();									// Delete product function runs here
$db->db_ChangeProduct();									// Change product function runs here


echo 'Success...4 ' . $db->host_info . "\n";

/*
$database = new Database("localhost","root","root","webshop");
$database->db_AddProduct("575757", "Korv", "Korv med bröd","25", "1", "korv.jpg");

class Database extends mysqli {
   protected $database;
    
    public function __constructor($host, $login, $password, $database){
        $this->database = mysqli_connect($host, $login, $password, $database) or die("Error " . mysqli_error($this->database));

	}
	
	
	public function db_AddProduct($serialNumber, $productName, $productDescr, $productPrice, $category_ID, $productImage){
		$addProduct = mysqli_query($this->database,"INSERT INTO `Products`(`SerialNumber`, `Name`, `Description`, `Price`, `Category_ID`, `Product_image`) VALUES (".$serialNumber.",".$productName.",".$productDescr.",".$productPrice.",".$category_ID.",".$productImage.")");
			
	}
	
	/* public function db_deleteProduct($serialNumber, $productName, $productDescr, $productPrice, $category_ID, $productImage){
		$deletePrody
	} '
} 
*/



/* $mysqli = new mysqli("localhost", "root", "root", "webshop");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$result = mysqli_query($mysqli,"SELECT SerialNumber, Name FROM Products");

echo "<table border='1'>
<tr>
<th>Serienummer</th>
<th>Namn</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['SerialNumber'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "</tr>";
  }
echo "</table>"; 



	*/
?>
	