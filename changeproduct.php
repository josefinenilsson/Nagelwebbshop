<meta http-equiv="content-type"
      content="text/html;charset=utf-8" />
<head>
    <link rel="stylesheet" type="text/css" href="base.css">
</head
<body>
<div id="wrapper">
    <header id="header">
        <h1 class="h1title">Webshop</h1>
    </header>

    <nav id="mainmenu">
        <ul>
            <li><a href="#">Startsida</a></li>
            <li><a href="#">Produkter</a></li>
            <li><a href="#">Frågor och Svar</a></li>
            <li><a href="#">Om oss</a></li>
        </ul>
    </nav>

    <button type="button">Kundkorg</button>

    <article>
        <img src="img/depend.jpg">

<form action="changeproduct.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Namn</td>
                <td><input type="text" name="Name"</td>
            </tr>
            <tr>
                <td>Beskrivning</td>
                <td><input type="text" name="Description"</td>
            </tr>
            <tr>
                <td>Pris</td>
                <td><input type="text" name="Price"</td>
            </tr>
			
			<tr>
                <td>Spara</td>
                <td><input type="submit" name="submit"</td>
            </tr>
        </table>
    </article>
    <footer> <p id="footertext">Kontakta oss på webshop@skolarbete.se</p></footer>
    </body>
    <?php

include "DB.php"; // Includes the database

/* 	########################### 
	Change product function
	########################### */	

/* This function is for changing Name, Description and Price for the product. */


	if(isset($_POST["submit"])) {
		if($db->db_ChangeProduct($_POST["Name"],$_POST["Description"],$_POST["Price"],$_GET['productid'])){
			echo "Success!";
		} else {
			echo "Failure!";
		}		
	} // Function ends here



// Här skall det vara validering av formuläret mot databasen!

?>
