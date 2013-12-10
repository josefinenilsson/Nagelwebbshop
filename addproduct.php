<meta http-equiv="content-type"
      content="text/html;charset=utf-8" />
<head>
<<<<<<< HEAD


    <link rel="stylesheet" type="text/css" href="base.css">

</head
=======
    <link rel="stylesheet" type="text/css" href="base.css">
</head>
>>>>>>> 3aaea2ae254bc0afdeef5ca774f00b184437d262
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
    <form action="addproduct.php" method="post" enctype="multipart/form-data">
            <table>
            <tr>
                <td>Serienummer</td>
                <td><input type="text" name="SerialNumber"</td>
            </tr>
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
                <td>Kategori</td>
                <td><input type="text" name="Category_ID"</td>
            </tr>
			<tr>
	 			<td><label for="file">Filename:</label></td>
       			<td><input type="text" name="Product_image" id="file"></td><br>
        		
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
	Add product function
	########################### */	

/* This function takes the data form the form and saves it in the database. */


	if(isset($_POST["submit"])) {
		if($db->db_AddProduct($_POST["SerialNumber"],$_POST["Name"],$_POST["Description"],$_POST["Price"],$_POST["Category_ID"],$_POST["Product_image"])){
			echo "Success!";
		} else {
			echo "Failure!";
		}		
	} // Function ends here



// Här skall det vara validering av formuläret mot databasen!
		
?>	
