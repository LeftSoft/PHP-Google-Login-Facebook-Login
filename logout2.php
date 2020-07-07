<?php 
session_start();
session_destroy();
header("Location:giris-yap.php?durum=exit");

 ?>