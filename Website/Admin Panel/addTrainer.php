<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="addTrainer.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script  src="admin.js?v=<?php echo time(); ?>"> </script>
    <title>Document</title>
</head>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 add-trainer">
                <h1>Add Trainer </h1>
            </div>
            <div class="col-12 form">
                <form name="myForm" action="../PHP Files/AddTrainer.php" method="post" enctype="multipart/form-data" onsubmit="return validation();">
                    <input type="text" name="name" placeholder="Name"><br>
                    <input type="text" name="email" placeholder="Email"><br>
                    <input type="text" name="role" placeholder="Role"><br>
                    <input type="tel" name="contact" placeholder="Mobile No"><br><br><br>
                    <textarea name="desc" placeholder="Description" cols="95" rows="7"></textarea><br>
                    <input type="file" name="img">
                    <input type="submit" name="submit" value="ADD">
                </form>
            </div>
        </div>

    </div>
   




    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>   

  <script>
        function validation(){

        var reg = new RegExp("[^A-Za-z0-9]");
        name=document.myForm.name.value;
        email=document.myForm.email.value;
        role=document.myForm.role.value;
        contact=document.myForm.contact.value;
        desc=document.myForm.desc.value;
        file=document.myForm.img.value;
        phone=contact.startsWith("+92");
        if(name=="" || email=="" ||  role=="" ||  contact=="" || desc=="" || file=="" ){
            alert("Fields Cannot be Empty");
            return false;
        }
        if (!phone) {
            alert("Phone Number start number should contain +92");
            return false;
        }
        if((name.length<5) || (name.length>32) ){
            alert("Name Length should be between 5 and 32");
           return false;
        }
        
        
    }
    </script>
</body>
</html>