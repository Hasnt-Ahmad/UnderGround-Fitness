<?php  


session_start();
require ('../Database/database.php');
require('../Model/package.php');
$p1=new Package($conn);
$p1->deletePackage($_GET['id']);

$_SESSION['dpackage']="deleted";

header('Location:../Admin Panel/viewPackage.php');
?>