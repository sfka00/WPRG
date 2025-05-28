<?php
session_start();
session_destroy();

setcookie("Zapamietaj", "", time() - 3600, "/");
header("Location: PROJEKT.php");
exit();

?>