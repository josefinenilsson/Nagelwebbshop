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
                <td><input type="text" name="Email"</td>
            </tr>
            <tr>
                <td>Adress</td>
                <td><input type="text" name="Adress"</td>
            </tr>
			<tr>
                <td>Personnummer</td>
                <td><input type="text" name="SSN"</td>
            </tr>
			<tr>
                <td>Telefonnummerr</td>
                <td><input type="text" name="Phonenumber"</td>
            </tr>
			<tr>
                <td>Lösenord</td>
                <td><input type="text" name="Password"</td>
            </tr>
			<tr>
                <td>Skapa användare</td>
                <td><input type="submit" name="submit"</td>
            </tr>
        </table>

<?php


include "DB.php"; // Includes the database

/* 	########################### 
	Add product function
	########################### */	

/* This function takes the data form the form and saves it in the database, and creates a user */


if(isset($_POST["submit"])) {
	if($db->db_AddUser($_POST["Firstname"],$_POST["Lastname"],$_POST["Email"],$_POST["Adress"],$_POST["SSN"],$_POST["Phonenumber"],$_POST["Password"],false)){
			echo "Success!";
		} else {
			echo "Failure!";
		}		
	} // Function ends here



// Här skall det vara validering av formuläret mot databasen!
		





?>