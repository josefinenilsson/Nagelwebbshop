<?php 
	require_once("header.php");
 ?>


<?php 
echo '<h2>Session</h2>';
var_dump($_SESSION);
?>

<div class="addmember">
        <h1>Välkommen till Nailsnail</h1>
        <p>Detta är en nagelwebbshop som vi har skapat som projekt under vår kurs webb och databaser när vi läste DG på JTH.
</p><p>P.s Du måste vara medlem för att kunna shoppa d.s</p>
        <a href="adduser.php"><input class="become_member"  type="submit"  value="Bli medlem"></a>
      </div>
<h4><a href="logout.php">Logga ut</a></h4>
<h4><a href="adminproducts.php">Admin produkt</a></h4>
<h4><a href="adminuser.php">Admin user</a></h4>
<h4><a href="createuseradmin.php">Skapa admin/ användare</a></h4>

<?php
	include "footer.php";
?>
