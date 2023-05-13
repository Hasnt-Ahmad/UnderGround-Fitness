
<?php

class Membership {
  public $firstName;
  public $lastName;
  
  public $email;
  public $purchaseDate;
  public $expiryDate;

  public $conn;

  public function __construct($conn) {
    $this->firstName="";
    $this->lastName="";
    $this->purchaseDate="";
    $this->expiryDate="";
    $this->email="";
    $this->conn=$conn;
  }
   function addMembership($firstName,$lastName,$purchaseDate,$email){
    try{
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->purchaseDate=$purchaseDate;
        $this->expiryDate=new DateTime("+90 day");;
        $this->expiryDate=$this->expiryDate->format('Y-m-d');
        $this->email=$email;
        $sql =$this->conn->prepare( "INSERT INTO membership (`FirstName`, `LastName`, `PurchaseDate`, `ExpiryDate`, `Email`) VALUES (:firstName,:lastName,:purchaseDate,:expiryDate,:email)");

        $sql->bindParam(':firstName', $firstName);
        $sql->bindParam(':lastName', $lastName);
        $sql->bindParam(':purchaseDate', $purchaseDate);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':expiryDate', $this->expiryDate);
        $sql->execute();
        echo "<br> New record created successfully";
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
  }
  function getPackage(){
    try{
      $sql = "Select * from membership";
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
  function getTotalMembership(){
    try{
      $sql = "Select COUNT(*) as Total_Membership from membership";
        $result=$this->conn->query($sql);
        while($row = $result->fetch(PDO::FETCH_ASSOC) ) {
          return $row;
        }
    }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }

}



?>