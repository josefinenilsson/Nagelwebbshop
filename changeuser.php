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
           
                
                <td><input class="changeUser" placeholder="Ny adress" type="text" name="Adress"</td>
            </tr>
            <tr>
              
                <td><input class="changeUser" placeholder="Nytt telefonnummer" type="number" name="Phonenumber"</td>
            </tr>
            <tr>
              
                <td><input class="changeUser" placeholder="Nytt lösenord" type="password" name="Password"</td>
            </tr>
			
			<tr>
                
                <td><input class="changeUser" value="Spara nya uppgifter"  type="submit" name="submit"</td>
            </tr>
        </table>
                    
        <div class="changeUsertext">
            <h3>Ändra användaruppgifter</h3>
            <p>Här kan du ändra dina användaruppgifter.</p>
                    
        </div>
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
					
					