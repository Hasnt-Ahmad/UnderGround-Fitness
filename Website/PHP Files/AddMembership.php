<?php  

require ('../Database/database.php');
require('../Model/membership.php');
require('../Model/purchasemembership.php');


$m1=new Membership($conn);
$m1->addMembership($_POST['firstName'],$_POST['lastName'],$_POST['purchasedate'],$_POST['email']);
$sql = "Select * from membership ORDER BY MId DESC LIMIT 1";
$result=$conn->query($sql);
$id=0;
while($row = $result->fetch(PDO::FETCH_ASSOC) ) {
   $id=$row['MId'];
  }
$pm1=new PurchaseMembership($conn);
$pm1->addPurchaseMemebrship($id,$_GET['id']);

header('Location:../About Us/index.php');

?>