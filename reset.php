<?php
require_once("header.php");
session_unset();
session_destroy();
echo "Session reset";
var_dump($_SESSION);


/* session_start();
session_destroy();
header("Location: index.php");
exit; */

?>

<h4><a href="index.php">Tillbaka till startsida</a></h4>