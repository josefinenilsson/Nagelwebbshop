<?php include "header.php";?>
<article>
    <form  method="post" enctype="multipart/form-data">
        <table>
            <tr> 
                <td><input class="addUser" placeholder="Förnamn" type="text" name="Firstname"></td>
            </tr>
            <tr>
                <td><input class="addUser" placeholder="Efternamn" type="text" name="Lastname"></td>
            </tr>
            <tr>
                <td><input class="addUser" placeholder="Email" type="email" name="Email"></td>
            </tr>
            <tr>
                <td><input class="addUser" placeholder="Adress" type="text" name="Adress"></td>
            </tr>
			<tr>
                <td><input class="addUser" placeholder="Personnummer" type="number" name="SSN"></td>
            </tr>
			<tr>
                <td><input class="addUser" placeholder="Telefonnummer" type="number" name="Phonenumber"></td>
            </tr>
			<tr>
                <td><input class="addUser" placeholder="Lösenord" type="password" name="Password"></td>
            </tr>
			 <br>	
    			<label for="gender">Vanlig användare</label>
				<input type="radio"  name="user" value="false"><br>
				<label for="gender">Administratör</label>
				<input type="radio"  name="user" value="true"><br>
			<tr>
                <td><input class="addUserButton" value="Skapa användare" type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</article>
         

<?php require_once("DB.php"); // Includes the database

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
?>
<?php include "footer.php"; ?>