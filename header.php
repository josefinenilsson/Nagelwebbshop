<?php
session_start();
require_once("DB.php"); // inkluderar filen DB.php

if(!empty($_POST["loginbutton"])){ // Om formuläret är ifyllt, kör "post" på formuläret och spara Email och Password i enskilda variabler

	$email = $_POST["Email"];
	$password = $_POST["Password"];
	
	
	if(!empty($email) && !empty($password)){ 
		// Om $email & $password inte är tomma kör funktionen matchFunkction() mot databasen och kolla om inloggningsuppgifterna stämmer

		if($db->matchFunction($email, $password)){
		  	$_SESSION["Email"] = $email; // Spara $email (användarens email) i $_SESSION
            $userData = $db->db_GetUserByEmail($email); // Hämtar användarens namn samt om den är admin eller ej.
            $_SESSION["Name"] = $userData["Firstname"]; // Sparar användarens förnamn i $_SESSION["Name"] 
            $_SESSION["isAdmin"] = $userData["isAdmin"]; //Sparar om användaren är admin eller ej i $_SESSION["isAdmin"]
		} else {

		}
	}
}
?>
<meta http-equiv="content-type"
      content="text/html;charset=utf-8" 
      />

 <head>
        <link rel="stylesheet" type="text/css" href="css/base.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
		
		<header >
	<nav id="mainmenu">
    
         <ul class="menu">
                            <li><a href="index.php">Startsida</a></li>
                           
                            <li><a href="listcategories.php">Produkter</a></li>
                            <li><a href="about.php">Om oss</a></li>
             
             <?php if(!empty($_SESSION["isAdmin"])&& $_SESSION["isAdmin"] == true){ ?>
             
                            <li><a>Admin</a>
                                    <ul>
                                            <li><a href="adminproducts.php">Ta bort produkter</a></li>
                                            <li><a href="addproduct.php">Lägg till produkter</a></li>
                                            <li><a href="adminuser.php">Ta bort användare</a></li>
                                            <li><a href="createuseradmin.php">Lägg till användare</a></li>
                                    </ul>
                            </li>
              <?php } ?>
                        
                    </ul>
                
       
       
    
        <?php
        if (!empty($_SESSION["Email"])&&!empty($_SESSION["Name"])){
            
            echo '<ul class="signed_in_user">';
			echo '   <li><a>Välkommen '.$_SESSION["Name"].'</a>';
            echo '      <ul>';
            echo '          <li><a href="changeuser.php">Inställningar</a></li>';    
            echo '          <li><a href="#">Ordrar</a></li>';
            echo '          <li><a href="logout.php">Logga ut</a></li>';
            echo '      </ul>';
            echo '  </li>';
            echo '  <li><a href="order.php"  class="shopping_cart">Kundkorg</a></li>';
            echo '</ul>';
        }else{ ?>
        <form method="post" class="login" role="form">
            <div class="form_group">
				<input type="email" placeholder="Email" name="Email" class="form_control">
              	<input type="password" name="Password" placeholder="Password" class="form_control">
				<input type="submit" name="loginbutton" class="login_button" value="Logga in">
            </div>
        </form>
        <?php } ?>
		
             
             
        
         
</nav>

	
</header>
		
 <div id="wrapper">
	 



