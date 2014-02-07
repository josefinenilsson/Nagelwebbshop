<?php
 include "header.php";
?>
<div id="wrapper">
    <article>
        <h3>Bli medlem</h3>
            <p>För att kunna shoppa hos NailSnail behöver du bli medlem.</p>
            <p>Medlemskapet förenklar din shoppingupplevelse genom att komma ihåg din adress och information för att lätt kunna sända din beställning och faktura till dig så snabbt som möjligt.</p>
        <form action="adduser.php" method="post" enctype="multipart/form-data">
            <table>
                <tr> 
                    <td><input id="firstname" class="addUser" placeholder="Förnamn" type="text" name="Firstname"></td>
                </tr>
                <tr>
                    <td><input id="lastname" class="addUser" placeholder="Efternamn" type="text" name="Lastname"></td>
                </tr>
                <tr>
                    <td><input id="email" class="addUser" placeholder="Email" type="email" name="Email"></td>
                </tr>
                <tr>
                    <td><input id="adress" class="addUser" placeholder="Adress" type="text" name="Adress"></td>
                </tr>
                <tr>
                    <td><input id="ssn" class="addUser" placeholder="Personnummer" type="number" name="SSN"></td>
                </tr>
                <tr>
                    <td><input id="number" class="addUser" placeholder="Telefonnummer" type="number" name="Phonenumber"></td>
                </tr>
                <tr>
                    <td><input id="password" class="addUser" placeholder="Lösenord" type="password" name="Password"></td>
                </tr>
                <tr>
                    <td><input value="Skapa användare" class="addUserButton" type="submit" name="submit"></td>
                </tr>
            </table>
    </article>
</div> <!-- Wrapper -->
</body>        

<?php require_once("DB.php"); // Includes the database

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



// Här är validerings koden

$_GET['Firstname'] = trim($_GET['Firstname']);
$_GET['Lastname'] = trim($_GET['Lastname']);
$_GET['Email'] = strtolower($_GET['Email']);
$_GET['Email'] = trim($_GET['Email']);
$_GET['Adress'] = trim($_GET['Adress']);
$_GET['SSN'] = trim($_GET['SSN']);
$_GET['Phonenumber'] = trim($_GET['Phonenumber']);
$_GET['Password'] = trim($_GET['Password']);

$pos = strpos($_GET['Email'],'@');
if ($pos == false) {
    return false;
} else{
    echo($_GET['Email']);
}
?>
                    
<?php include "footer.php"; ?>