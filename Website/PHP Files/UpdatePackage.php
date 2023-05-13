<?php 

session_start();
require ('../Database/database.php');
require('../Model/package.php');

$name=$_POST["name"];
$type=$_POST["type"];
$cost=$_POST["cost"];
$category=$_POST["category"];

$p1=new Package($conn);
$p1->updatePackage($name,$type,$cost,$category,$_GET['id']);
$_SESSION['upackage']=1;
header('Location:../Admin Panel/viewPackage.php');

?>