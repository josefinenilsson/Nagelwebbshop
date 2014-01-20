<?php
/* #####################
	Login function
	#################### */

// Här har vi funktionen för att logga in


include "DB.php"; // inkluderar filen DB.php

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