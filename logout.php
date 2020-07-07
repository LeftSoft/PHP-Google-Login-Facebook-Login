<?php 
session_start();
session_destroy();
header("Location:admin-giris.php?durum=exit");

 ?>