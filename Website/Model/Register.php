
<?php

class Register {
  public $email;
  public $firstName;
  
  public $lastName;
  public $password;
  public $number;
  public $conn;

  public function __construct($conn) {
    $this->firstName="";
    $this->lastName="";
    $this->password="";
    $this->number="";
    $this->email="";
    $this->conn=$conn;
  }
   function addregisteration($firstName,$lastName,$email,$password,$number){
    try{
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->email=$email;
        $this->password=$password;
        $this->number=$number;
        $sql = $this->conn->prepare("INSERT INTO registration(`Email`, `First Name`, `Last Name`, `Password`, `Phone Number`) VALUES (:email,:firstName,:lastName,:password1,:number1)");
        $sql->bindParam(':email',$email);
        $sql->bindParam(':firstName',$firstName);
        $sql->bindParam(':lastName',$lastName);
        $sql->bindParam(':password1',$password);
        $sql->bindParam(':number1',$number);
        $sql->execute();
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
  }
  function getregisteration($email){
    try{
      $sql = $this->conn->prepare ( "Select * from registration where Email= :email");
      $sql->bindParam(':email',$email);
      $sql->execute();
        $array = array();
        while($row = $sql->fetch(PDO::FETCH_ASSOC) ) {
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