<?php
session_start();
unset($_SESSION['email1']);
session_destroy();

echo"<script>window.open('login.php','_self')</script>";	
exit;

?>