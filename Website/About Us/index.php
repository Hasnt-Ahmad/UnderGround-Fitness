<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

    
<?php  require ('../Database/database.php');
            require('../Model/package.php'); 
            require('../Model/Login.php'); 
            require('../Model/Register.php'); 
            session_start();

            $p1=new Package($conn);
            $array[]=$p1->getPackage();
            $imglocation="../..//Images/";
            $pid=0;
            $emailexist="";
            

            $r1=new Register($conn);

            if(isset($_POST['Email'])){
              $array2 = array();
              $array2=$r1->getregisteration($_POST['Email']);
              if($array2=="No matching records found."){
                $r1->addregisteration($_POST['firstName'],$_POST['lastName'],$_POST['Email'],$_POST['password'],$_POST['phone']);
                header("Location:index.php");
              }
              else{
                $_SESSION['match']="Match";
                sleep(1);
                header('Location:../About Us/index.php');
              }
            }

            if(isset($_POST['logout'])){
              unset($_SESSION['email']);
            }

            
            
            if(isset($_POST['email'])) {
              $l1 = new Login($conn);
              $array1 = array();
              $array1=$l1->getLogin($_POST['email'], $_POST['pass']);
              
              if($array1=="No matching records found."){
                $_SESSION['error'] = "Error";
                $_SESSION['noemail']='Noemail';
                header('Location:../About Us/index.php');
              }
              else{
                
                if(($_POST['email']==$array1['Email']) && ($_POST['pass']==$array1['Password']) ){
                    echo(" <script> document.getElementsByClassName('span').style.display='none'; </script> ");
                    $_SESSION['email']='useremail';
                  header("Location:../About Us/index.php");
                }
                elseif(($_POST['email']!=$array1['Email'])){
                  $_SESSION['error'] = "Error";
                  header('Location:../About Us/index.php');
              }
                elseif(($_POST['pass']!=$array1['Password'])){
                $_SESSION['error'] = "Error";
                header('Location:../About Us/index.php');
            }
              }
              
            }
            elseif(isset($_SESSION['error'])){
              echo("<script>  document.getElementsByClassName('span').style.display='block !importanat' </script> ");
              echo(" <script> 

              document.addEventListener('DOMContentLoaded', function(event) {
              
              var button = document.getElementById('myButton');
                if (button) {
    
                // Trigger a click event on the button
                button.click();
                }
              
              });
              </script>" );

              unset($_SESSION['error']);
              
            }
            elseif($_SESSION['match']=="Match"){

              echo(" <script> 

              document.addEventListener('DOMContentLoaded', function(event) {
              
              var button = document.getElementById('myButton');
                if (button) {
    
                // Trigger a click event on the button
                button.click();
                }
                
              var btn = document.getElementById('create-btn');
                if (btn) {
    
                // Trigger a click event on the button
                  btn.click();
                }
              
              });

              
            
              </script>" );
              
              $emailexist="Email already exist";
              
              print_r($_SESSION);

              $_SESSION['match']="";

              print_r($_SESSION);
             
            }

     ?>


    
    <nav class="navbar navbar-expand-lg bg" >
        <div class="container-fluid bg">
          <a class="navbar-brand" href="#"><img src="../../Images/Logo.png" alt="Logo Image" width="170" height="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  " id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto ">
              <hr style="color: rgb(145, 145, 145);">
              <a  class="nav-link text-white " href="../Home/index.php">Home</a>
              <a href="../Services/index.php" class="nav-link text-white" >Services</a>
              <a href="../Results/result.php" class="nav-link text-white" >Result</a>
              <a href="../About Us/index.php" class="nav-link active " >Membership</a>
              <a href="../Contact US/index.php" class="nav-link text-white" >Contact Us</a>
              <?php if(isset($_SESSION['email'])){
              
              echo(' <ul class="ul">
                      <li><i class="bi bi-person-circle"></i> </li>
                       ');
              } 
              ?>
            </div>
          </div>
        </div>
      </nav>
    
      <?php if(isset($_SESSION['email'])){
              
              echo(' <div class="log-out">
                  <form action="" method="post">

                      <input type="submit" value="Log Out" name="logout">

                  </form>
                </div>

                       ');
              } ?>

      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h6>MEMBERSHIP</h6>
                <h2>START YOUR <br> JOURNEY</h2>
                <p>With more than 200 clubs across Canada, we’ve got what you need, where and <br>when you need it.</p>
            </div>
            <div class="col-md-6">
                <img src="../../Images/Member-Image.png">
            </div>
        </div>

      </div>
      <br><br><br>

      <div class="container-fluid">
        <div class="row">
            <div class="col-12 Journey">
                <h2>Choose your membership</h2>
                <p>Choose your package</p>
                <br><br>
            </div>
            <?php foreach ($array[0] as $element) { ?>
            <div class=col-12 style="margin-bottom:40px;">
                <div class="pkg-img">
                      <img src="../../Images/645505e72f861.jpg">  
                      <div>
                        <h3><?php echo $element["Pname"] ?></h3>
                        <p>Category : <?php echo $element["Pcategory"] ?></p>
                        <p>Type :  <?php echo $element["Ptype"] ?></p>
                        <p style="color:red">Cost : <?php echo "$".$element["Pcost"] ?></p>
                      </div>
                      <div class="vl"></div>
                      <?php   if (isset($_SESSION['email'])) {
                          $pid = rawurlencode($element['Pid']);
                          echo "<a href='membership.php?id=$pid'>Buy Now</a>";
                          }
                          else{
                            echo('<button type="button" class="btn" id="myButton" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Buy Now
                                </button>
                              
                                ');
                          }
                        ?>
                      
                </div>
            </div>   
            <?php } ?>
        </div>

      </div>




      <!-- Modal -->
      <div class="login-modal">
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" style="color: rgb(170, 170, 170);">Login</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <br>
                                      <div class="login-form">
                                          <form name="myForm" action="" method="post" onsubmit="return validation();">
                                              <label><i class="bi bi-person-badge"></i></label>
                                              <input type="email" placeholder="Email" name="email"><br><br>
                                            
                                              <label><i class="bi bi-file-lock2"></i></label>
                                              <input type="password" placeholder="Password" name="pass"><br><br>
                                              <span class="span" style="color:red"> Email Does Not Exist</span><br><br>
                                             
                                            
                                         
                                      </div>
                                            
                                      <div class="login-buttons">
                                          <div class="login-btn">
                                            
                                              <i style="padding-left: 10px;"  class="bi bi-lock"></i><input  type="submit" value="LOGIN" name="login" style=" background-color: rgb(9, 9, 75);color:white; border:none"><br><br>
                                              </form>
                                          </div>
                                          
                                              <button type="button" class="btn btn-primary" id="create-btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                  <i class="bi bi-person-add"></i> CREATE ACCOUNT
                                                </button>
                                              
                                         
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              
                              
                              
                              
                              
                              
                              
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content create-form">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1" style="color: rgb(170, 170, 170);">Login</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <br>
                                      <div class="login-form">
                                          <form name="myForm1" action="" method="post" onsubmit="return validation1();">
                                              <label><i class="bi bi-person"></i></label>
                                              <input type="text"  placeholder="First Name" name="firstName"><br><br>
                                              <label><i class="bi bi-person"></i></label>
                                              <input type="text" placeholder="Last Name" name="lastName"><br><br>
                                              <label><i class="bi bi-envelope-at"></i></label>
                                              <input type="email" placeholder="Email" name="Email"><br><br>
                                              <label><i   class="bi bi-lock"></i></label>
                                              <input type="password" placeholder="Password" name="password"><br><br>
                                              <label><i class="bi bi-lock-fill"></i></label>
                                              <input type="password" placeholder="Confirm Password" name="confirmpass"><br><br>
                                              <input type="text" placeholder="Phone No" name="phone"><br><br>
                                          
                                      </div>
                                      <div class="login-buttons">
                                          <div class="create-btn">
                                              <i style="padding-left: 10px;" class="bi bi-person-add"></i><input  type="submit" value="CREATE ACCOUNT" style=" background-color: rgb(190, 190, 190); color:rgb(255, 255, 255); border:none">
                                          </div>
                                          </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              
                              </div>
                              '




      <br><br>

      <footer>
            
        <div class="container">
        
            <div class="row">
                
                <div class="col-md-4">
                    <h2 style="color: white ;">Company Info & Location</h2>
                    <address style="color: rgb(162, 162, 162)"> Underground Fitness<br>Block E Street 2,<br>New City Home<br>Peshawar KPK,Pakistan</address>
                    <i class="bi bi-envelope" style="color: rgb(162, 162, 162); font-size:20px;"></i><a href="hasnatahmadofficial@gmail.com">  hasnatahmadofficial@gmail.com</a><br>
                    <i class="bi bi-instagram" style="color: rgb(162, 162, 162);font-size:20px;"></i>
                    <a href="https://www.facebook.com/"><i class="bi bi-facebook" style="color: rgb(162, 162, 162);font-size:20px;"></i></a>
                    
                </div>
                <div class="col-md-4">
                    <h2 style="color: white">Useful Links</h2>
                    <a  class="nav-link text-white " aria-current="page" href="#">Home</a>
                    <a href="../Services/index.html" class="nav-link " style="color: rgb(162, 162, 162)" >Services</a>
                    <a href="../Results/index.html" class="nav-link " style="color: rgb(162, 162, 162)" >Result</a>
                    <a href="../About Us/index.html" class="nav-link "  style="color: rgb(162, 162, 162)">About Us</a>
                    <a href="../Contact US/index.html" class="nav-link "  style="color: rgb(162, 162, 162)">Contact Us</a>
                    
                </div>
                <div class="col-md-4">
                    <h2 style="color: white">Opening Hours</h2>
                    <p style="color: rgb(162, 162, 162)">Monday-Saturday : 7am-10pm</p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p style="text-align: center; color:rgb(162, 162, 162); font-size:13px;">ALL RIGHTS | RESERVED TERMS & CONDITIONS | PRIVACY POLICY | FAQs</p>
                </div>
            </div>
        </div>
        <hr style="color: white;">
      </footer>

      


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/bf3aae3a62.js" crossorigin="anonymous"></script>
  <script>
                      
                
                           
      function validation(){  
        var reg = new RegExp("[^A-Za-z0-9]");
        pass=document.myForm.pass.value;
        email=document.myForm.email.value;
        
        if(pass=="" || email=="" ){
            alert("Fields Cannot be Empty");
            return false;
        }  
        return true;
    }
    function validation1(){  
        var reg = new RegExp("[^A-Za-z0-9]");
        firstName=document.myForm1.firstName.value;
        email=document.myForm1.Email.value;
        password=document.myForm1.password.value;
        lastName=document.myForm1.lastName.value;
        phone=document.myForm1.phone.value;
        confirmpass=document.myForm1.confirmpass.value;
        if(password=="" || email=="" || firstName =="" || lastName=="" || confirmpass=="" || phone==""  ){
            alert("Fields Cannot be Empty");
            return false;
        }
        if(password!=confirmpass){
          alert("Password Doesn't Match");
            return false
        }  
        return true;
    }
    </script>
    <script type="text/javascript">

$(document).ready(function(){
    $(".ul").click(function(){
        $(".log-out").toggle("slow");
      });



});
</script>
</body>
</html>