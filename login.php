<?php
 //session_start();

include "DB.php";

if(!empty($_POST["loginbutton"])){

	$email = $_POST["Email"];
	$password = $_POST["Password"];
	
	if(!empty($email) && !empty($password)){

		if($db->matchFunction($email, $password)){
		  	$_SESSION["Email"] = $email;
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
	


