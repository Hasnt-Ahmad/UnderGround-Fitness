
<?php

class PurchaseMembership {
  public $MId;
  public $PId;
  public $conn;

  public function __construct($conn) {
    $this->MId="";
    $this->PId="";
    $this->conn=$conn;
  }
   function addPurchaseMemebrship($MId,$PId){
    try{
        $this->MId=$MId;
        $this->PId=$PId;
        $sql = $this->conn->prepare("INSERT INTO purchasemembership(`MId`, `PId`) VALUES (:MId,:PId)");
        $sql->bindParam(':MId',$MId);
        $sql->bindParam(':PId',$PId);
        $sql->execute();
        echo "<br> New record created successfully";
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
  }
  function getPurchaseMemebrship(){
    try{
      $sql = "Select * from purchasemembership";
        $result=$this->conn->query($sql);
        while($row = $result->fetch(PDO::FETCH_ASSOC) ) {
          $array[] = $row;
        }
       return $array;
    }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }

}



?>