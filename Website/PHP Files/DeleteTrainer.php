<?php  

session_start();
require ('../Database/database.php');
require('../Model/trainer.php');
$t1=new Trainer($conn);
$t1->deleteTrainer($_GET['id']);
$_SESSION['dtrainer']=1;
header("Location:../Admin Panel/viewTrainer.php");

?>