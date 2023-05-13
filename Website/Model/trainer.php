
<?php

class Trainer {
  public $name;
  public $contact;
  public $email;
  public $role;
  public $description;

  public $fileName;
  public $conn;

  public function __construct($conn) {
    $this->name="";
    $this->contact="";
    $this->email="";
    $this->role="";
    $this->description="";
    $this->conn=$conn;
  }
   function addTrainer($name,$email,$role,$contact,$desc,$fileName){
    try{
        $this->name=$name;
        $this->contact=$contact;
        $this->email=$email;
        $this->role=$role;
        $this->description=$desc;
        $this->fileName=$fileName;
        $sql = "INSERT INTO trainer(`Tname`, `Tcontact`, `Temail`, `Trole`, `Tdescription`, `Timage`) VALUES ('$name','$contact','$email','$role','$desc','$fileName')";
        $this->conn->exec($sql);
        echo "<br> New record created successfully";
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
  }
  function getTrainer(){
    try{
      $sql = "Select * from trainer";
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
  function getTrainerOne($id){
    try{
      $sql = "Select * from trainer where Tid=$id";
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
  function UpdateTrainer($name,$email,$role,$contact,$desc,$id){
    try{
      $this->name=$name;
      $this->contact=$contact;
      $this->email=$email;
      $this->role=$role;
      $this->description=$desc;
      $sql = "UPDATE `trainer` SET `Tname`='$name',`Tcontact`='$contact',`Temail`='$email',`Trole`='$role',`Tdescription`='$desc' WHERE Tid=$id";
      $this->conn->exec($sql);
      echo "<br> New Updated created successfully";
    }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }

  function deleteTrainer($id){

    try{
      $sql="DELETE FROM `trainer` WHERE Tid=$id";
      $this->conn->exec($sql);
      echo "<br> Record Deleted successfully";
      header('Location:../Admin Panel/viewTrainer.php');
    }

    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

  }

  function getTotalTrainer(){
    try{
      $sql = "Select COUNT(*) as Total_Trainer from trainer";
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