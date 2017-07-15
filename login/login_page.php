<?php 
/**
 * User: umber
 * Date: present
 * Time: 8:30 PM
 */

?>

<!DOCTYPE html>
<html>
<home>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    
<!--JQUERY CORE-->
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">
    </script>
<!--JQUERY CORE-->
      
      <style>
          body {
            background-image: url("../beerrunners_main/product_image/coconut_tree.png");
          }
      </style>

<!--BOOTSTRAP LINK FOLDER-->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 
<!--BOOTSTRAP LINK FOLDER-->

</home>
<body>

    <!--BUTTONS COMMUNICATING LIKE ACTIONS-->
   
     <br><br>
      <div class="container">
        <div class="row" align="right">
          <div class="col-md-12">
           <span class="glyphicon glyphicon-search"></span><a href="../index.php" class="btn btn-success">Home</a>
          </div>
        </div>
      </div>
 
    <!--BUTTONS COMMUNICATING LIKE ACTIONS-->

<h1><center><b>Login</b></center></h1>

<!--LOG IN FORM START!!!-->
<form action="login_page_data.php" method="POST" >
  <div class="container">
    <div class="row" align="center">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <img src="../beerrunners_main/product_image/avatar.png" width="150" height="150" class="img-circle">
      </div>
    </div>  
  </div>
  <br>
  <div class="container" align="#center" style="background-color:B06666">
    <div class="row" align="center">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <label>USER NAME..</label><br>
        <input class="#form-control" placeholder="Enter Username" type="text" name="username" required>
        <br><br>

        <label>PASSWORD..</label><br>
        <input class="#form-control" placeholder="Enter Password" type="password" name="psw" required>
        <br>

        <a href="../password/password_reset.php">Forgot your password?</a>
        <br><br>
      
        <button type="submit" name="pro">LOG-IN</button>

        <a href="../signup/signup_page.php"><button type="button" class="signupbtn">Create an account</button>
      </div>
    </div>
  </div>
</form>
<!--END OF LOG IN FORM!!!!-->

</body>
</html>