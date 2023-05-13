<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="viewTrainer.css?v=<?php echo time(); ?>"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script  src="admin.js?v=<?php echo time(); ?>"> </script>
    <title>Document</title>
</head>


<?php 

session_start();
require ('../Database/database.php');
require('../Model/package.php');
    $p1=new Package($conn);
    $array[]=$p1->getPackage();

    function script($msg){
        return "<script> 

        document.addEventListener('DOMContentLoaded', function(event) {
        
          document.getElementById('login-p').innerHTML='$msg Successfully';
        var button = document.getElementById('myButton');
          if (button) {

          // Trigger a click event on the button
          button.click();
          }
        
        });
        </script>";
    }

    if(isset($_SESSION['dpackage'])){
        
        echo( script("Deleted") );
        unset($_SESSION['dpackage']);
    }
    
    if(isset($_SESSION['addpackage'])){
        
        echo( script("Added") );

        unset($_SESSION['addpackage']);
    }

    if(isset($_SESSION['upackage'])){
        
        echo( script("Updated") );
        unset($_SESSION['upackage']);
    }

?>


<body>

<div class="container-fluid panel">
        <div class="row">
        <a href="admin.php"><h3>Dashbaord</h3></a>
            <p class="trainer">Trainer +</p>
            <div class="trainer-drop">
                <br>
                <a href="addTrainer.php">Add Trainer</a><br><br>
                <a href="viewTrainer.php">View Trainers</a><br><br>
            </div>
            <p class="package">Packages +</p>
            <div class="package-drop">
                <br>
                <a href="addPackage.php">Add Package<br><br>
                <a href="viewPackage.php">View Package</a><br><br>
            </div>
        </div>
    </div>
   
        <br><br><br>
        <table class="table table-striped table-hover table-bordered table-responsive table-package">
            <thead class="table-primary">
                    <td>Name</td>
                    <td>Type</td>
                    <td>Category</td>
                    <td>Cost</td>
                    <td></td>
                    <td></td>
            </thead>
            <tbody>
            <?php foreach ($array[0] as $element) { ?>
                <tr>
                    <td > <?php echo $element["Pname"] ?>  </td>
                    <td > <?php echo $element["Ptype"] ?>  </td>
                    <td > <?php echo $element["Pcategory"] ?>  </td>
                    <td > <?php echo "$".$element["Pcost"] ?>  </td>
                    <td  > <a href="updatePackage.php?id=<?php echo($element['Pid']) ?>"> Upadte </td>
                    <td  > <a href="../PHP Files/DeletePackage.php?id=<?php echo($element['Pid']) ?>"> Delete </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>


            <button type="button" class="btn" id="myButton" data-bs-toggle="modal" data-bs-target="#exampleModal">
               
            </button>
            <div class="login-modal">
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <br>
                                      <div class="login-form">
                                          
                                             
                                            
                                         
                                      </div>
                                            
                                      <div class="login-buttons">
                                          <div class="login-btn">
                                                <p id="login-p" style="margin-left: 20px;">Deleted Succefully</p>  

                                              </form>
                                          </div>
                                             
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              
                              

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>