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

    

    
    <nav class="navbar navbar-expand-lg bg" >
        <div class="container-fluid bg">
          <a class="navbar-brand" href="#"><img src="../../Images/Logo.png" alt="Logo Image" width="170" height="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  " id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto ">
              <hr style="color: rgb(145, 145, 145);">
              <a  class="nav-link active " aria-current="page" href="#">Home</a>
              <a href="../Services/index.php" class="nav-link text-white" >Services</a>
              <a href="../Results/result.php" class="nav-link text-white" >Result</a>
              <a href="../About Us/index.php" class="nav-link text-white" >Membership</a>
              <a href="../Contact US/index.php" class="nav-link text-white" >Contact Us</a>
            </div>
          </div>
        </div>
      </nav>
    

        <br><br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="form">
                        <h5>Personal Details</h5>
                        <br><br>
                        <form action="../PHP Files/AddMembership.php?id=<?php echo rawurlencode($_GET['id']); ?>" method="post">
                            <input type="text" name="firstName" placeholder="First Name"><br><br>
                            <input type="text" name="lastName" placeholder="Last Name"><br><br>
                            <input type="email" name="email" placeholder="Email"><br><br>
                            <label>Purchase Date</label>
                            <input type="date" name="purchasedate" ><br><br>
                            <input type="submit" name="submit" value="Purchase"><br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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

</body>
</html>