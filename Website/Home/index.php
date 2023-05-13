<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>Document</title>
</head>
<body>

    <?php  require ('../Database/database.php');
            require('../Model/trainer.php'); 
            $t1=new Trainer($conn);
            $array[]=$t1->getTrainer();
            $imglocation="../..//Images/";
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
        <a  class="nav-link active " aria-current="page" href="#">Home</a>
        <a href="../Services/index.php" class="nav-link text-white" >Services</a>
        <a href="../Results/result.php" class="nav-link text-white" >Result</a>
        <a href="../About Us/index.php" class="nav-link text-white" >Membership</a>
        <a href="../Contact US/index.php" class="nav-link text-white" >Contact Us</a>
      </div>
    </div>
  </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 video" >
            <video width="100%" height="600px"   src="../../Images/GymMotivation.mp4"  muted loop autoplay></video>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 train">
            <h5>Training</h5>
            <h3>Train With Us</h3>
        </div>
    </div>
</div>


         <!--Card Slider-->
         <div class="container">
         <div class="my-container ">
            <div class="slider swiper mySwiper">
                <div class="image-items swiper-wrapper">
                    <div class="image swiper-slide"><img src="../../Images/img_slider_2.jpg" alt=""></div>
                    <div class="image swiper-slide"><img src="../../Images/img_slider_3.jpg" alt=""></div>
                    <div class="image swiper-slide"><img src="../../Images/img_slider_4.jpg" alt=""></div>
                    <div class="image swiper-slide"><img src="../../Images/img_slider_7.jpg" alt=""></div>
                    <div class="image swiper-slide"><img src="../../Images/img_slider_8.jpg" alt=""></div>
                    <div class="image swiper-slide"><img src="../../Images/img_slider_9.jpg" alt=""></div>
                    
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
         </div>
        </div>


        <!--Card Slider End-->


         <!--Our Service Portion-->

        <div class="container">
            <div class="row">
                <div class="col-12 train">
                    <h5>Service</h5>
                    <h3>Our Process</h3>
                </div>
            </div>   
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 process">
                    <i class="bi bi-battery-half"></i>
                    <h5>Analyze You Goal</h3>
                    <p>We make it simple for you to push yourself, be your personal best and give you more. MORE results. MORE confidence. MORE Life. More than a gym. Because you shouldn’t live to exercise. You should exercise to live.</p>
                </div>
                
                <div class="col-md-4 col-sm-6 process">
                        
                    <i class="fa-sharp fa-solid fa-dumbbell"></i>
                    <h5>Work Hard On It</h3>
                    <p>Our Gym is more than a gym because the work you do here in our studio will make all the difference out there in your world.</p>
                   
                </div>
                <div class="col-md-4 col-sm-6 process">
                    
                    <i class="bi bi-speedometer"></i>
                    <h5>Improve Your Performance</h3>
                    <p>We’re passionate about fitness and inclusive of everyone. Come in and get the best part of your day – you fit here.</p>
                   
                </div>
                <div class="col-md-4 col-sm-6 process">
                    
                    <i class="fa-solid fa-child-reaching"></i>
                    <h5>Achieve Perfect Body</h3>
                    <p>It takes more than pure sweat to achieve your goals. Let our coaches create a workout plan for you that’s tailored to your body now — and moves you forward to where you want to go</p>
                   
                </div>
                <div class="col-md-4 col-sm-6 process">
                    
                    <i class="bi bi-battery-half"></i>
                    <h5>Analyze You Goal</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, beatae quis? Repellendus veritatis id necessitatibus esse unde qui, earum modi?</p>
                   
                </div>
                <div class="col-md-4 col-sm-6 process">
                    
                    <i class="bi bi-battery-half"></i>
                    <h5>Analyze You Goal</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, beatae quis? Repellendus veritatis id necessitatibus esse unde qui, earum modi?</p>
                   
                </div>


            </div>   
        </div>


    <!--Our Service End-->


     <!--Programs Section-->

        <div class="container">
            <div class="row">
                <div class="col-12 train">
                    <h5>Programs</h5>
                    <h3>Fitness Programs</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 process">
                    <img src="../../Images/Curls.png">
                    <h5>Body Building</h3>
                    <p>We make it simple for you to push yourself, be your personal best and give you more. MORE results. MORE confidence. MORE Life. More than a gym. Because you shouldn’t live to exercise. You should exercise to live.</p>
                </div>
                <div class="col-md-4 col-sm-6 process">
                    <img src="../../Images/Aerobic_Class.png">
                    <h5>Aerobic Classes</h3>
                    <p>We make it simple for you to push yourself, be your personal best and give you more. MORE results. MORE confidence. MORE Life. More than a gym. Because you shouldn’t live to exercise. You should exercise to live.</p>
                </div>
                <div class="col-md-4 col-sm-6 process">
                    <img src="../../Images/Weight_Lifting.png">
                    <h5>Weight Lifting</h3>
                    <p>We make it simple for you to push yourself, be your personal best and give you more. MORE results. MORE confidence. MORE Life. More than a gym. Because you shouldn’t live to exercise. You should exercise to live.</p>
                </div>
                <div class="col-md-4 col-sm-6 process">
                    <img src="../../Images/Yoga.png">
                    <h5>Yoga Classes</h3>
                    <p>We make it simple for you to push yourself, be your personal best and give you more. MORE results. MORE confidence. MORE Life. More than a gym. Because you shouldn’t live to exercise. You should exercise to live.</p>
                </div>
                <div class="col-md-4 col-sm-6 process">
                    <img src="../../Images/treadmill.png">
                    <h5>Cardio Training</h3>
                    <p>We make it simple for you to push yourself, be your personal best and give you more. MORE results. MORE confidence. MORE Life. More than a gym. Because you shouldn’t live to exercise. You should exercise to live.</p>
                </div>
                <div class="col-md-4 col-sm-6 process">
                    <img src="../../Images/Body_Transformation.png">
                    <h5>Body Transformation</h3>
                    <p>We make it simple for you to push yourself, be your personal best and give you more. MORE results. MORE confidence. MORE Life. More than a gym. Because you shouldn’t live to exercise. You should exercise to live.</p>
                </div>
                <div class="col-md-4 col-sm-6 process">
                    <img src="../../Images/Fat_Loss.png">
                    <h5>Fat Loss</h3>
                    <p>We make it simple for you to push yourself, be your personal best and give you more. MORE results. MORE confidence. MORE Life. More than a gym. Because you shouldn’t live to exercise. You should exercise to live.</p>
                </div>
                <div class="col-md-4 col-sm-6 process">
                    <img src="../../Images/Nutrition.png">
                    <h5>Nutrition</h3>
                    <p>We make it simple for you to push yourself, be your personal best and give you more. MORE results. MORE confidence. MORE Life. More than a gym. Because you shouldn’t live to exercise. You should exercise to live.</p>
                </div>
            </div>
        </div>



      <!--Programs Section Ends-->
            
        
        
         <!--Results Section-->

        <div class="container">
            <div class="row">
                <div class="col-12 train">
                    <h5>Results</h5>
                    <h3>Life Changing Results</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 ">
                    <div class="program">
                        <br>
                        <p class="p">Ben</p>
                        <img src="../../Images/body_transformation_1.1.jpg" width="170" heigh="800">
                        <img src="../../Images/body_transformation_1.2.jpg" width="170" heigh="800">
                        <i class="bi bi-star-fill fist"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <p class="result-p">Before starting at Embody, <br>I trained on my own five times a week and I never thought<br> it would be  possible to get results like this. <br>Their whole approach is just on another level and <br> the team are like family to me now</p><br>
                        <div >
                            <p><p>12 weeks Muscle <br> and Physique Program</p></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="program">
                        <br>
                        <p class="p">Ben</p>
                        <img src="../../Images/Body_Transformation_2.1.jpg" width="170" heigh="800">
                        <img src="../../Images/Body_Transformation_2.2.jpg" width="170" heigh="800">
                        <i class="bi bi-star-fill fist"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <p class="result-p">Since I started my new job, I’ve managed <br> to gain a lot of weight but Embody has changed absolutely <br> everything about my life and created a training and <br> nutrition plan that is so easy to follow. They’re hands down the best trainers I have ever worked with</p>
                        <div >
                            <p><p>12 weeks Muscle <br> and Physique Program</p></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="program">
                        <br>
                        <p class="p">Ben</p>
                        <img src="../../Images/Body_Transformation_3.1.jpg"width="170" heigh="800">
                        <img src="../../Images/Body_Transformation_3.2.jpg" width="170" heigh="800">
                        <i class="bi bi-star-fill fist"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <p class="result-p">"I’ve struggled with my weight for years and so I was very <br> apprehensive about going to a gym. But the guys at Embody made me <br> feel so welcome from the get-go. Their only goal is to help you change <br> your life and they really have made a positive difference to mine, right from the very first session.”</p>
                        <div >
                            <p><p>12 weeks Muscle <br> and Physique Program</p></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="program">
                        <br>
                        <p class="p">Ben</p>
                        <img src="../../Images/Body_Transformation_4.1.jpg"width="170" heigh="800">
                        <img src="../../Images/Body_Transformation_4.2.jpg" width="170" heigh="800">
                        <i class="bi bi-star-fill fist"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <p class="result-p">Before starting at Embody, I trained on my own five times a week and I never thought it would be possible to get results like this. Their whole approach is just on another level and the team are like family to me now</p><br><br>
                        <div >
                            
                            <p><p>12 weeks Muscle <br> and Physique Program</p></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="program">
                        <br>
                        <p class="p">Ben</p>
                        <img src="../../Images/Body_Transformation_6.1.jpg"width="170" heigh="800">
                        <img src="../../Images/Body_Transformation_6.2.jpg" width="170" heigh="800">
                        <i class="bi bi-star-fill fist"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <p class="result-p">Before starting at Embody, I trained on my own five times a week and I never thought it would be possible to get results like this. Their whole approach is just on another level and the team are like family to me now</p>
                        <br><br>
                        <div >
                            <p><p>12 weeks Muscle <br> and Physique Program</p></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="program">
                        <br>
                        <p class="p">Ben</p>
                        <img src="../../Images/Body_Transformation_5.1.jpg"width="170" heigh="800">
                        <img src="../../Images/Body_Transformation_5.2.jpg" width="170" heigh="800">
                        <i class="../../Images/bi bi-star-fill fist"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <p class="result-p">Before starting at Embody, I trained on my own five times a week and I never thought it would be possible to get results like this. Their whole approach is just on another level and the team are like family to me now</p>
                        <br><br>
                        <div >
                            <p><p>12 weeks Muscle <br> and Physique Program</p></p>
                        </div>
                    </div>
                </div>
            </div>   
        </div>

         <!--Results Section End-->


         <!--Results Section -->



         <div class="container">
            <div class="row">
                <div class="col-12 train">
                    <h5>Trainers</h5>
                    <h3>Our Trainers</h3>
                    <br>
                </div>
            </div>
                <div class="row">
                    <?php   foreach ($array[0] as $element) {
                        
                    ?>
                    <div class="col-md-4 col-sm-6 trainers">
                        <div class="col-12 pic">
                            
                            <img src="<?php echo $imglocation.$element['Timage']?>">
                        </div>
                    <pre style="color: white; overflow-x: hidden; font-weight:700;font-size:22px">
               <?php echo $element['Tname'] ?> </pre>
                <p style="color: white; text-align:center;margin-top:0;font-size: 15px;"><?php echo $element['Trole'] ?></p>
    <pre style="color: white; overflow-x: hidden;">
    <?php echo $element['Tdescription'] ?>
    </pre>
                </div>
                <?php } ?>
            </div>
         </div>
    
         <!--Results Section End-->
        
        


            <!-- Button trigger modal -->


                <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color: rgb(170, 170, 170);">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <br>
        <div class="login-form">
            <form name="myForm" onsubmit="return validation();">
                <label><i class="bi bi-person-badge"></i></label>
                <input type="email" placeholder="Email" name="LoginEmail"><br><br>
                <label><i class="bi bi-file-lock2"></i></label>
                <input type="password" placeholder="Password" name="Loginpass"><br><br>
        </div>
        <div class="login-buttons">
            <div class="login-btn">
                <i style="padding-left: 10px;"  class="bi bi-lock"></i><input  type="submit" value="LOGIN" style=" background-color: rgb(9, 9, 75);color:white; border:none">
            </div>
            
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
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
            
                <label><i class="bi bi-person"></i></label>
                <input type="text"  placeholder="First Name" name="firstName"><br><br>
                <label><i class="bi bi-person"></i></label>
                <input type="text" placeholder="Last Name" name="lastName"><br><br>
                <label><i class="bi bi-envelope-at"></i></label>
                <input type="email" placeholder="Email" name="Email"><br><br>
                <label><i   class="bi bi-lock"></i></label>
                <input type="password" placeholder="Password" name="pass"><br><br>
                <label><i class="bi bi-lock-fill"></i></label>
                <input type="password" placeholder="Confirm Password" name="confirmpass"><br><br>
            
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

          <!-- Swiper JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/bf3aae3a62.js" crossorigin="anonymous"></script>
  
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    function validation(){

        console.log("Hello");
        firstName=document.myForm.firstName.value;
        lastName=document.myForm.lastName.value;
        Email=document.myForm.Email.value;
        pass=document.myForm.pass.value;
        var reg=new RegExp("[A-Z]")
        confirmpass=document.myForm.confirmpass.value;
        LoginEmail=document.myForm.LoginEmail.value;
        Loginpass=document.myForm.Loginpass.value;;
        
    
        if(firstName=="" || lastName=="" || Email=="" || pass=="" || confirmpass=="" ){
            alert("Fields Cannot be Empty");
            return false;
        }
        if(pass.length <8){
            alert("Password must be greater than 8 characters");
            return false;
        }
        if(!(reg.test(pass))){
            alert("Password must contain 1 Capital letter");
            return false;
        }
        if(pass!=confirmpass){
            alert("Password Doesn't Matched");
            return false;
        }
       
        
        if(Email=="" || pass==""){
            alert("Fields cannot be Empty");
            return false;
        }
        
    }
   
  </script>

    
    
</body>
</html>