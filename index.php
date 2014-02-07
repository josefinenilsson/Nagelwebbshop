<?php include "header.php";
if(isset($_SESSION["Email"])){// Om $email finns i session / användaren är inloggad ?>
        <div class="logedinmember">
            <h1>Välkommen, du är nu inloggad hos Nailsnail</h1>
                <p>Det är nu fritt fram att shoppa loss bland våra produkter.</p>
        </div>
		<?php } else { ?>
        <div class="addmember">
            <h1>Välkommen till Nailsnail</h1>
                <p>Detta är en nagelwebbshop som vi har skapat som projekt under vår kurs webb och databaser när vi läste DG på JTH.</p>
                <p>P.s Du måste vara medlem för att kunna shoppa d.s</p>
                <a href="adduser.php"><input class="become_member"  type="submit"  value="Bli medlem"></a>
        </div>
		<?php } ?>

<?php include "footer.php"; ?>
