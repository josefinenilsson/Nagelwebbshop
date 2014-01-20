<?php
 include "header.php";
?>
<div id="wrapper">
<article>
    


	
		<h3>Bli medlem</h3>
		<p>Lollipop macaroon lollipop caramels. Cookie lemon drops pie oat cake candy canes fruitcake. Jelly chocolate cake brownie carrot cake soufflé gummies pastry dragée carrot cake.</p>
		<p>Lollipop macaroon lollipop caramels. Cookie lemon drops pie oat cake candy canes fruitcake. Jelly chocolate cake brownie carrot cake soufflé gummies pastry dragée carrot cake.</p>
<form action="adduser.php" method="post" enctype="multipart/form-data">
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
</article>
					</div>
    <footer> <p id="footertext">Kontakta oss på webshop@skolarbete.se</p></footer>
</body>        

<?php


include "DB.php"; // Includes the database

/* 	########################### 
	Add user function
	########################### */	

/* This function takes the data form the form and saves it in the database, and creates a user */


if(isset($_POST["submit"])) { 
	
	if($db->db_AddUser($_POST["Firstname"],$_POST["Lastname"],$_POST["Email"],$_POST["Adress"],$_POST["SSN"],$_POST["Phonenumber"],$_POST["Password"],"false")){
			echo "Success!";
		} else {
			echo "Failure!";
		}		
	} // Function ends here



// Här skall det vara validering av formuläret mot databasen!
		





?>