<?php
require_once('classes/session.php');

  $pictures = array('stone.png', 'lagunitas.png', 
                    'samuel_adams.png', 'sierra_nevada.png', 
                    'victoria.jpg', 'avatar.png', 'bender.jpg');
  shuffle($pictures);
?>

<!DOCTYPE html>
<html>
<head>
	<title>beerrunners</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
      <style>
          body {
            background-image: url("../beerrunners_main/product_image/coconut_tree.png");
          }
      </style>

      <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">  
      </script>

    <!--BOOTSTRAP-->
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--BOOTSTRAP-->


</head>
  <body>
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#"><b>Products</b></a>
            <a href="#"><b>Services</b></a>
            <a href="#"><b>Rewards</b></a>
            <a href="#"><b>Contact</b></a>
          </div>

          <div id="main">
              <span style="color: #FFFFFF; font-weight: bold; font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
          </div>

          <?php  Session::display_message(); ?>

          <!--BUTTONS COMMUNICATING LIKE ACTIONS-->
          <a href="login/login_page.php" class="btn btn-primary">Login</a>

          <a href="logout/logout_page_data.php" class="btn btn-danger">Logout</a>

          <a href="signup/signup_page.php" class="btn btn-warning">Signup</a>

          <span class="glyphicon glyphicon-queen" aria-hidden="true"></span>
          <!--BUTTONS COMMUNICATING LIKE ACTIONS-->
          
          <script>
              function openNav() {
                  document.getElementById("mySidenav").style.width = "250px";
                  document.getElementById("main").style.marginLeft = "250px";
                  document.body.style.backgroundColor = "#B06666";
              }

              function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                  document.getElementById("main").style.marginLeft = "0";
                  document.body.style.backgroundColor = "#B06666";
              }
          </script>

    <h1><center>WELCOME! To Beer Nation</center></h1>
    <br /><br />
      <div align="center">
      <table style="width: 100%; border: 0;">
        <tr>
    <?php
        for ($i = 0; $i < 3; $i++) {
           echo "<td style=\"width: 33%; text-align: center\">
                 <a href='../admin/product_insert.php'><img src=\"../beerrunners_main/product_image/";
           echo $pictures[$i];
           echo "\"/></a></td>";
        }
    ?>
        </tr>
     </table>
      </div>
  </body>
</html>
</body>
</html>