<?php 


require ('../Database/database.php');
require('../Model/package.php');

session_start();

$name=$_POST["name"];
$type=$_POST["type"];
$cost=$_POST["cost"];
$category=$_POST["category"];
$fileName=$_FILES["img"]["name"];
$tempName=$_FILES["img"]["tmp_name"];



$validImageExtention= ['jpg','jpeg','png'];
$imageExtention=explode('.',$fileName);
$imageExtention=strtolower(end($imageExtention));

$p1=new Package($conn);

if(!in_array($imageExtention,$validImageExtention)){
    echo"<script> alert('Invalid Type'); </script>";
}
else{

    $newIMageName=uniqid();
    $newIMageName.='.'.$imageExtention;
    move_uploaded_file($tempName,"../../Images/".$newIMageName);
    $p1->addPackage($name,$type,$category,$cost,$newIMageName);
    $_SESSION["addpackage"]=1;
    header('Location:../Admin Panel/viewPackage.php');
}

?>