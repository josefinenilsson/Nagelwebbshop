<?php
	include "header.php";
?>
<article>
    <img src="img/depend.jpg">


<form action="adduser.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Förnamn</td>
                <td><input type="text" name="Firstname"</td>
            </tr>
            <tr>
                <td>Efternamn</td>
                <td><input type="text" name="Lastname"</td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="Email"</td>
            </tr>
            <tr>
                <td>Adress</td>
                <td><input type="text" name="Adress"</td>
            </tr>
			<tr>
                <td>Personnummer</td>
                <td><input type="number" name="SSN"</td>
            </tr>
			<tr>
                <td>Telefonnummer</td>
                <td><input type="number" name="Phonenumber"</td>
            </tr>
			<tr>
                <td>Lösenord</td>
                <td><input type="password" name="Password"</td>
            </tr>
			 <br>
					
    			<label for="gender">Vanlig användare</label>
				<input type="radio"  name="user" value="false"><br>
				<label for="gender">Administratör</label>
				<input type="radio"  name="user" value="true"><br>
			<tr>
                <td>Skapa användare</td>
                <td><input type="submit" name="submit"</td>
            </tr>
        </table>
</article>
         

<?php


include "DB.php"; // Includes the database

/* 	########################### 
	Add user (admin) function
	########################### */	

/* This function takes the data from the form and saves it in the database, and creates a user */
// Den kolla också om man admin har valt att skapa admin användare, eller vanlig användare


if(isset($_POST["submit"])) { 
	if(!isset($_POST['user']) || $_POST['user'] == "false"){ 
	// Om man inte valt något alternativ, eller man inte har valt admin, sätt $isAdmin = false
		$isAdmin = false;
	} else {
		$isAdmin = true;
	}
	// Denna funktionen tar data från formuläret och lägger till användare i databasen.
	if($db->db_AddUser($_POST["Firstname"],$_POST["Lastname"],$_POST["Email"],$_POST["Adress"],$_POST["SSN"],$_POST["Phonenumber"],$_POST["Password"],$isAdmin)){
			echo "Success!";
		} else {
			echo "Failure!";
		}		
	} // Function ends here



// Här skall det vara validering av formuläret mot databasen!
		





?>
<?php
	include "footer.php";
?>