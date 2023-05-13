<?php

session_start();
require ('../Database/database.php');
require('../Model/Login.php');

$l1=new Login($conn);
$array[] =$l1->getLogin($_POST['user'],$_POST['pwd']);
if($array[0]=="No matching records found."){
    $_SESSION['noAdmin']=1;
    header("Location:../Admin Panel/login.php");
}
else{
    if($array[0]['Password']!=$_POST['pwd']){
        $_SESSION['noPass']=1;
        header("Location:../Admin Panel/login.php");
    }
    else{
        $_SESSION['adminSuccess']=1;
        header("Location:../Admin Panel/admin.php");
    }
}

?>