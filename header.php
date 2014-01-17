<?php
session_start();
?>
<?php
/* #####################
	Login function
	#################### */

// Här har vi funktionen för att logga in


include "DB.php"; // inkluderar filen DB.php

if(!empty($_POST["loginbutton"])){ // Om formuläret är ifyllt, kör "post" på formuläret och spara Email och Password i enskilda variabler

	$email = $_POST["Email"];
	$password = $_POST["Password"];
	
	var_dump($_POST);
	
	if(!empty($email) && !empty($password)){ 
		// Om $email & $password inte är tomma kör funktionen matchFunkction() mot databasen och kolla om inloggningsuppgifterna stämmer

		if($db->matchFunction($email, $password)){
		  	$_SESSION["Email"] = $email; // Spara $email (användarens email) i $_SESSION
			echo "Du är inloggad!";
		} else {
			echo "Inloggning misslyckades";
		}
	}
}

?>

<meta http-equiv="content-type"
      content="text/html; charset=utf-8" />
 <head>
        <link rel="stylesheet" type="text/css" href="css/base.css">
	 <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/sticky-footer.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
		
 <div id="wrapper">
<header >
	<nav id="mainmenu">
    <ul>
        <li><a href="index.php">Startsida</a></li>
        <li><a href="listcategories.php">Produkter</a></li>
        <li><a href="about.php">Om oss</a></li>
    </ul>
		 <form method="post" class="login" role="form">
            <div class="form_group">
				<input type="email" placeholder="Email" name="Email" class="form_control">
              	<input type="password" name="Password" placeholder="Password" class="form_control">
				<input type="submit" name="loginbutton" class="login_button" value="Logga in">
            </div>
            
          </form>
</nav>

	
</header>


    <input type="button" class="shoppingcart" value="Kundkorg"></button>



