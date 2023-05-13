<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="admin.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script  src="admin.js?v=<?php echo time(); ?>"> </script>
    <title>Document</title>
</head>
<body>

    <?php 

    require ('../Database/database.php');
    require('../Model/package.php');
    require('../Model/membership.php');
    require('../Model/trainer.php');
    session_start();

    $p1=new Package($conn);
    $array=$p1->getTotalPackage();
    $m1=new Membership($conn);
    $mem=$m1->getTotalMembership();
    $t1=new Trainer($conn);
    $train=$t1->getTotalTrainer();

        if(!isset($_SESSION['adminSuccess'])){
            header("Location:login.php");
        }

        if(isset($_POST['submit'])){
            unset($_SESSION['adminSuccess']);
            header("Location:login.php");
        }



    ?>
    
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
   <div class="container-fluid">
        <div class="row">
            <div class="col-12 admin">
                <div id="adminDiv">
                    <i class="bi bi-person-lines-fill"></i>
                    <p>Admin</p>
                </div>
                <div class="admin-dash">
                    <ul>
                        <form action="" method="post">
                            <li><input type="submit" value="Log out" name="submit"></li>
                        </form>
                    </ul>
                </div>
            </div>
        </div>

   </div>
   <hr>
   <br><br>
   <div class="container-fluid Dashbaord-h5">
        <div class="row">
            <div class="col-12">
                <h4>Dashbaord</h4>
                <br><br>
            </div>
            <div class="col-md-6 col-lg-4 bg-clr">
                <div id="div">
                    <img src="../../Images/two.png">
                    <div>
                        <p style="color:grey">Trainers</p>
                        <p style="margin-left:60px;font-size:16px;padding:0px;"><?php echo $train['Total_Trainer'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 bg-clr">
                <div id="div">
                    <i class="bi bi-person-fill"></i>
                    <div>
                        <p style="color:grey">Memebrs</p>
                        <p style="margin-left:60px;font-size:16px;padding:0px;"><?php echo $mem['Total_Membership'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 bg-clr">
                <div id="div">
                    <i class="bi bi-gift-fill"></i>
                    <div>
                        <p style="color:grey">Packages</p>
                        <p style="margin-left:60px;font-size:16px;padding:0px;"><?php echo $array['Total_Packages'] ?></p>
                    </div>
                </div>
            </div>
        </div>
   </div>




    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>   
</body>
</html>