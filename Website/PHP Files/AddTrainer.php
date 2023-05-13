<?php 

session_start();
require ('../Database/database.php');
require('../Model/trainer.php');

$name=$_POST["name"];
$email=$_POST["email"];
$role=$_POST["role"];
$contact=$_POST["contact"];
$desc=$_POST["desc"];
$fileName=$_FILES["img"]["name"];
$tempName=$_FILES["img"]["tmp_name"];



$validImageExtention= ['jpg','jpeg','png'];
$imageExtention=explode('.',$fileName);
$imageExtention=strtolower(end($imageExtention));
$t1=new Trainer($conn);
if(!in_array($imageExtention,$validImageExtention)){
    echo"<script> alert('Invalid Type'); </script>";
}
else{

    $newIMageName=uniqid();
    $newIMageName.='.'.$imageExtention;
    move_uploaded_file($tempName,"../../Images/".$newIMageName);
    $t1->addTrainer($name,$email,$role,$contact,$desc,$newIMageName);
    $_SESSION['addtrainer']=1;
    header("Location:../Admin Panel/viewTrainer.php");
    
}

?>