<?php
session_start();
setcookie(session_name(), "", time() - 1800); 
session_destroy();
session_write_close();
header('Location:home.php');
?>
