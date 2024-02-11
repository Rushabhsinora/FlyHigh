<?php
session_start();
unset($_SESSION['memail']);
session_destroy();

header("Location: medicallogin.html");
exit;

?>