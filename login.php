<table>
	<tr>
		<td>Email</td>
        <td><input type="text" name="Email"</td>
    </tr>
	<tr>
    	<td>Lösenord</td>
        <td><input type="text" name="Password"</td>
    </tr>
			
	<tr>
    	<td>Logga in</td>
    	<td><input type="submit" name="loginbutton"</td>
    </tr>

</table>
	


<?php
session_start();

include "DB.php";

if(!empty($_POST['loginbutton'])){

	$email = $_POST['Email'];
	$password = $_POST['Password'];
	
	if(!empty($email) && !empty($password)){

		$sql = " SELECT * FROM `User` WHERE `Email` = '".$email."'";
		$result = $db->query($ql);
		$row = $result->fetch_assoc();
		if($password == $row['password']){
		
			$_SESSION['Email'] = $email;
		} else{
			echo "Inloggning misslyckades";
		}
	}
}



?>