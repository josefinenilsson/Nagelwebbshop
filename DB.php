<?php

class database extends mysqli {
    public function __construct($host, $user, $pass, $db) {
        parent::__construct($host, $user, $pass, $db);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }
	public function db_AddProduct(){
		parent::query('INSERT INTO `Products`(`SerialNumber`, `Name`, `Description`, `Price`, `Category_ID`, `Product_image`) VALUES ("575757","Korv","Korv med bröd","20",1,"korv.jpg")');
		echo "db_AddProduct()";
			
	}
}

$db = new database('localhost', 'root', 'root', 'webshop');
$db->db_AddProduct();


echo 'Success...1 ' . $db->host_info . "\n";

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
	