<?php
	include "header.php";
?>
<meta http-equiv="content-type"
      content="text/html;charset=utf-8" />
<head>
    <link rel="stylesheet" type="text/css" href="base.css">
</head
<body>
<div id="wrapper">
    <nav id="mainmenu">
        <ul>
            <li><a href="#">Startsida</a></li>
            <li><a href="#">Produkter</a></li>
            <li><a href="#">Frågor och Svar</a></li>
            <li><a href="#">Om oss</a></li>
        </ul>
    </nav>
    <article>

<form action="changeuser.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Email</td>
                <td><input type="email" name="Email"</td>
            </tr>
			<tr>
                <td>Adress</td>
                <td><input type="text" name="Adress"</td>
            </tr>
            <tr>
                <td>Telefonnummer</td>
                <td><input type="number" name="Phonenumber"</td>
            </tr>
            <tr>
                <td>Lösenord</td>
                <td><input type="password" name="Password"</td>
            </tr>
			
			<tr>
                <td>Spara</td>
                <td><input type="submit" name="submit"</td>
            </tr>
        </table>
    </article>
</body>


<?php

require_once("DB.php"); // Includes the database

/* 	########################### 
	Change user function
	########################### */	

/* This function is for changing Email, Phonenumber and Password for the user. */


	if(isset($_POST["submit"])) {
		if($db->db_ChangeUser($_POST["Email"],$_POST["Adress"],$_POST["Phonenumber"],$_POST["Password"],$_GET['userid'])){
			echo "Success!";
		} else {
			echo "Failure!";
		}		
	} // Function ends here



// Här skall det vara validering av formuläret mot databasen!

?>
					
					