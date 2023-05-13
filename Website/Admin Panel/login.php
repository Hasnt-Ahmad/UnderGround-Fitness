<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Login.css?v=<?php echo time(); ?>">
    <title>Login</title>
  </head>
  <body>


    <?php 

        session_start();
        $error='';
        $error1='';
        if(isset($_SESSION['noAdmin'])){
            $error="Email doesn't exist";
            unset($_SESSION['noAdmin']);
            return;
        }
        elseif(isset($_SESSION['noPass'])){
            $error1="Password is incorrect";
            unset($_SESSION['noPass']);
        }
        elseif(isset($_SESSION['adminSuccess'])){
            header("Location:../Admin Panel/admin.php");
        }

    ?>


  <div class="container"  >
        <div class="row">
          <div class="col-12">
            <h3 id="form-h3">Gym <br>Management  System </h3>
          </div>
          <div class="col-12">
            <form action="../PHP Files/LoginCheck.php" id="form" method="post">
              <input type="text" placeholder="Email" name="user" id="input"><br><br>
              <?php echo ("<p style='color:red'> $error </p>") ?>
              <input type="password" placeholder="Password" name="pwd" id="input"><br>
              <?php echo ("<p style='color:red'> $error1 </p>") ?>
              <input type="submit" value="Login" id="submit-btn" name="submit">
            </form>
          </div>
        </div>
      </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>