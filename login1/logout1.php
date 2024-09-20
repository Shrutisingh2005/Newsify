<?php
session_start();
unset($_SESSION["id"]);
header("location: homepage2.php");
exit();
?>