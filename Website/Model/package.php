
<?php

class Package {
  public $name;
  public $type;
  public $category;
  public $cost;

  public $fileName;
  public $conn;

  public function __construct($conn) {
    $this->name="";
    $this->type="";
    $this->category="";
    $this->cost="";
    $this->conn=$conn;
  }
   function addPackage($name,$type,$category,$cost,$fileName){
    try{
        $this->name=$name;
        $this->type=$type;
        $this->category=$category;
        $this->cost=$cost;
        $this->fileName=$fileName;
        $sql = $this->conn->prepare("INSERT INTO packages (`Pname`, `Pcategory`, `Ppicture`, `Ptype`, `Pcost`) VALUES (:name1,:category, :fileName1,:type1,:cost)");
        $sql->bindParam(':name1', $name);
        $sql->bindParam(':type1', $type);
        $sql->bindParam(':category', $category);
        $sql->bindParam(':cost', $cost);
        $sql->bindParam(':fileName1', $fileName);
        $sql->execute();
        echo "<br> New record created successfully";
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
  }
  function getPackage(){
    try{
      $sql = "Select * from packages";
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

  function getPackageOne($id){
    try{
      $sql = $this->conn->prepare("Select * from packages where Pid=:id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        while($row = $sql->fetch(PDO::FETCH_ASSOC) ) {
          $array[] = $row;
        }
       return $array;
    }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }  

  function updatePackage($name,$type,$cost,$category,$id){
    try{
      $this->name=$name;
      $this->type=$type;
      $this->cost=$cost;
      $this->category=$category;
      $sql =  $this->conn->prepare("UPDATE `packages` SET `Pname`=:Name1,`Ptype`=:type1,`Pcost`=:cost,`Pcategory`=:category WHERE Pid=:id");
      $sql->bindParam(':Name1', $name);
      $sql->bindParam(':type1', $type);
      $sql->bindParam(':category', $category);
      $sql->bindParam(':cost', $cost);
      $sql->bindParam(':id', $id);
      $sql->execute();
      echo "<br> New Updated created successfully";
    }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }
  function deletePackage($id){

    try{
      $sql=$this->conn->prepare("DELETE FROM `packages` WHERE Pid=:id");
      $sql->bindParam(":id",$id);
      $sql->execute();
      echo "<br> Record Deleted successfully";
    }

    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

  }
  function getTotalPackage(){
    try{
      $sql = "Select COUNT(*) as Total_Packages from packages";
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