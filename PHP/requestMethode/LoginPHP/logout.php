<?php
session_start();

session_unset(); //menghapus semua variabel session
session_destroy(); //menghancurkan session

header("Location: login.php");
exit ();

?>