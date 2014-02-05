<?php
require_once("header.php");
require_once("DB.php");

/* #####################
	Login function
	#################### */

// Här har vi funktionen för att logga in


if(!empty($_POST["loginbutton"])){ // Om formuläret är ifyllt, kör "post" på formuläret och spara Email och Password i enskilda variabler

	$email = $_POST["Email"];
	$password = $_POST["Password"];
	
	
	if(!empty($email) && !empty($password)){ 
		// Om $email & $password inte är tomma kör funktionen matchFunkction() mot databasen och kolla om inloggningsuppgifterna stämmer

		if($db->matchFunction($email, $password)){
		  	$_SESSION["Email"] = $email; // Spara $email (användarens email) i $_SESSION
			echo "Du är inloggad!";
		} else {
			echo "Inloggning misslyckades";
		}
	}
}

?>

<form method="post" class="login login_extra" role="form">
            <div class="form_group">
				<input type="email" placeholder="Email" name="Email" class="form_control">
              	<input type="password" name="Password" placeholder="Password" class="form_control">
				<input type="submit" name="loginbutton" class="login_button" value="Logga in">
            </div>
</form>

<div class="become_member_login">
    <div class="become_member_login_text">
        <h3>Bli medlem</h3>
		  <p>För att kunna shoppa i webbshoppen så måste du vara medlem</p>
		  <p>Medlemskapet förenklar din shoppingupplevelse genom att komma ihåg din adress och information för att lätt kunna sända din beställning och faktura till dig så snabbt som möjligt.</p>
        <p>Om du redan är medlem kan du logga in i formuläret till höger.</p>
    </div>
<form class="become_member_login_form" action="adduser.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                
                <td><input class="addUser" placeholder="Förnamn" type="text" name="Firstname"</td>
            </tr>
            <tr>
              
                <td><input class="addUser" placeholder="Efternamn" type="text" name="Lastname"</td>
            </tr>
            <tr>
               
                <td><input class="addUser" placeholder="Email" type="email" name="Email"</td>
            </tr>
            <tr>
                
                <td><input class="addUser" placeholder="Adress" type="text" name="Adress"</td>
            </tr>
			<tr>
                
                <td><input class="addUser" placeholder="Personnummer" type="number" name="SSN"</td>
            </tr>
			<tr>
                
                <td><input class="addUser" placeholder="Telefonnummer" type="number" name="Phonenumber"</td>
            </tr>
			<tr>
              
                <td><input class="addUser" placeholder="Lösenord" type="password" name="Password"</td>
            </tr>
			<tr>
              
                <td><input value="Skapa användare" class="addUserButton" type="submit" name="submit"</td>
            </tr>
        </table>
</div>
                    
<?php


require_once("DB.php"); // Includes the database

/* 	########################### 
	Add user function
	########################### */	

/* This function takes the data form the form and saves it in the database, and creates a user */


if(isset($_POST["submit"])) { 
	
	if($db->db_AddUser($_POST["Firstname"],$_POST["Lastname"],$_POST["Email"],$_POST["Adress"],$_POST["SSN"],$_POST["Phonenumber"],$_POST["Password"],"false")){
			echo "Du är nu medlem";
		} else {
			echo "Du kunde inte bli medlem";
		}		
	} // Function ends here



// Här skall det vara validering av formuläret mot databasen!
		





?>
                    
<?php
include "footer.php";
                    
?>