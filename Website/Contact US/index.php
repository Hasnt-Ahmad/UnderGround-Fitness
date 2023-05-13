<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css"> 
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    

</head>
<body>

  

    
    <nav class="navbar navbar-expand-lg bg" >
        <div class="container-fluid bg">
          <a class="navbar-brand" href="#"><img src="../../Images/Logo.png" width="170" height="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  " id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto ">
              <hr style="color: rgb(145, 145, 145);">
              <a  class="nav-link active text-white " aria-current="page" href="../Home/index.php">Home</a>
              <a  class="nav-link text-white" href="#">Services</a>
              <a href="../Results/result.php" class="nav-link text-white" href="#">Result</a>
              <a href="../About Us/index.php" class="nav-link text-white" href="#">Memberships</a>
              <a href="#" class="nav-link text-white" href="#">Contact Us</a>
            </div>
          </div>
        </div>
      </nav>

      <div class="Container ">
        <div class="row">
          <div class="col-12 Contact-Us ">
            <h1>Contact Us</h1>
            <br><br>
          </div>
        </div>
        </div>
      <div class="Container">
        <div class="row">
          <div class="col-md-6 first">
            <div class="contact-details">
              <i class="bi bi-house-door-fill"></i>
              <h5 style="padding-left: 15px; color:white">Company Ino And Address</h5>
            </div>
            <p>Jo Physique PLt <br> 31-1, Jalan Merbah 3, <br> Bandar Puchong Jaya <br> Pakistan</p>
            <div class="contact-details">
              <i class="bi bi-phone-vibrate-fill"></i>
              <h5 style="padding-left: 15px; color:white">Call</h5>
            </div>
            <p>Undeground Fitness Ph.no : +92123445678<br>
            Mr Hasnat Ph.no : +922134476892<br>
            Mr Afaq Ph.no : +922134476752</p>
            <div class="contact-details">
              <i class="fa-sharp fa-solid fa-dumbbell"></i>
              <h5 style="padding-left: 15px; color:white">Opening Hours</h5>
            </div>
            <p>Monady to Saturday : 7:00 am- 10 pm<br>
              Sunday : 8 am - 10 pm<br>
              Public Holiday Closed</p>
          </div>
          <div class="col-md-6">
            <form class="contact-form" name="myForm" onsubmit="return validation();">
              <input type="text" placeholder="First Name" name="firstName">
              <input type="text" placeholder="Last Name" name="LastName"><br>
              <input style="width:505px" type="email" placeholder="Email Address" name="contactEmail"><br>
              <input style="width:505px" type="text" placeholder="Subject" name="contactsubject"><br>
              <input style="width:505px" type="text" placeholder="Contact Number" name="contactNumber"><br>
              <textarea placeholder="Your Message...." rows="6" cols="66" name="contactTextarea"></textarea><br><br>
              <input type="submit" value="SEND MESSAGE">
            </form>
          </div>
        </div>
      </div>


      <footer>
        <hr style="color: white";>
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

      
      
      <script src="contact.js" ></script>
      

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/bf3aae3a62.js" crossorigin="anonymous"></script>
</body>
</html>