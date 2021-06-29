<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location:Q3.php");
?>