<?php
session_start();
require("connection.php");

unset($_SESSION['SESS_LOGGEDIN']);
unset($_SESSION['SESS_USERNAME']);
unset($_SESSION['SESS_USERID']);

session_destroy();
//header("Location: ". $config_basedir);
header($config_basedir);
include 'footer.php';
?>