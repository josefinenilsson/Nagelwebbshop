<?php
	include "header.php";
if (isset($_POST['addtocart'])){
    if(isset($_SESSION["Email"])){ 
		// Om $email finns i session

		} else {
        header ("Location: /login.php");

		}
	}

require_once("DB.php"); // Includes the database


$products[] = $db->db_GetProducts($_GET['category']);

echo '<form method="post" >';

if($products == false){
     return "Error";
}  else {
    for ($i = 0; $i < count($products[0]); $i++){
        echo '<div class ="get_Products" >';
        echo '<img src="'.$products[0][$i]["Product_image"].'">';
		echo '<h3>'.$products[0][$i]["Name"].'</h3>';
		echo '<p>'.$products[0][$i]["Description"].'</p>';
		echo '<p>'.$products[0][$i]["Price"].'kr</p>';
		echo '<a><button type="submit" value="'.$products[0][$i]["SerialNumber"].'" name="addtocart" >Lägg till i kundkorgen</button></a>';
        echo '</div>';
    }
}

echo '</form>';
?>
<?php
	include "footer.php";
?>