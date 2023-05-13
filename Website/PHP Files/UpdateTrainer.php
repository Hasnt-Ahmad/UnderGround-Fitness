<?php 


session_start();
require ('../Database/database.php');
require('../Model/trainer.php');


$name=$_POST["name"];
$email=$_POST["email"];
$role=$_POST["role"];
$contact=$_POST["contact"];
$desc=$_POST["desc"];
    $t1=new Trainer($conn);
    $t1->updateTrainer($name,$email,$role,$contact,$desc,$_GET['id']);

    $_SESSION['utrainer']=1;
    header('Location:../Admin Panel/viewTrainer.php');

?>