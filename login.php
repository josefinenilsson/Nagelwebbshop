
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
<form action="/" method="post">
<table>
	<tr>
		<td>Email</td>
        <td><input type="email" name="Email"</td>
    </tr>
	<tr>
    	<td>Lösenord</td>
        <td><input type="password" name="Password"</td>
    </tr>
			
	<tr>
    	<td>Logga in</td>
    	<td><input type="submit" name="loginbutton"</td>
    </tr>

</table>
</form>
			

	


