<?php
session_start();

session_destroy();

header("Location: ./6login.php");
exit;
?>