<?php 
	include "header.php";
 ?>


<?php var_dump($_SESSION);
?>

<div class="addmember">
        <h1>Välkommen till Nailsnail</h1>
        <p>Detta är en nagelwebbshop som vi har skapat som projekt under vår kurs webb och databaser när vi läste DG på JTH.
</p><p>P.s Du måste vara medlem för att kunna shoppa d.s</p>
        <a href="adduser.php"><input class="become_member"  type="submit"  value="Bli medlem"></a>
      </div>
<h4><a href="reset.php">Session reset</a></h4>

<?php
	include "footer.php";
?>
