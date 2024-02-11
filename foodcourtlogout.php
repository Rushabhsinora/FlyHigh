<?php
session_start();
unset($_SESSION['femail']);
session_destroy();

header("Location: foodlogin.html");
exit;

?>