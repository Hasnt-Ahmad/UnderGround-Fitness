
<?php

class Login {
  public $Email;
  public $Password;
  public $conn;

  public function __construct($conn) {
    $this->Email="";
    $this->Password="";
    $this->conn=$conn;
  }
   function addPurchaseMemebrship($Email,$Password){
    try{
        $this->Email=$Email;
        $this->Password=$Password;
        //$sql = "INSERT INTO purchasemembership(`MId`, `PId`) VALUES ('$MId','$PId')";
        //$this->conn->exec($sql);
        echo "<br> New record created successfully";
    }
    catch(PDOException $e) {
       // echo $sql . "<br>" . $e->getMessage();
      }
  }
  function getLogin($email,$pass){
    try{
      $sql = "SELECT  `Email`, `Password` FROM `login` WHERE Email='$email'";
        $result=$this->conn->query($sql);
        $array = array();
        while($row = $result->fetch(PDO::FETCH_ASSOC) ) {
          $array= $row;
        }
        if(empty($array)) {
            // Return a message or a value to indicate that no matching records were found
            return "No matching records found.";
          }
          return $array;
    }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }

}



?>