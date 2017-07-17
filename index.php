<?php
require_once('classes/session.php');

  // $pictures = array('stone.png', 'lagunitas.png', 
  //                    'samuel_adams.png', 'sierra_nevada.png', 
  //                    'victoria.jpg', 'avatar.png', 'bender.jpg');
  // shuffle($pictures);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Beerrunners</title>

<!--JQUERY CORE-->
      <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">  
      </script>
<!--JQUERY CORE-->

<!--JS-->
<script type="text/javascript" src="js/navbar_functionality.js"></script>
<!--JS-->

<!--CSS-->
<link rel="stylesheet" type="text/css" href="../css/main.css">
      <style>
          body {
            background-image: url("../beerrunners_main/product_image/coconut_tree.png");
          }
      </style>
<!--CSS-->

<!--BOOTSTRAP-->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<!--BOOTSTRAP-->

</head>
<body>
<!--MENU BAR-->
<?php include("includes/nav_bar.php"); ?>
<!--MENU BAR-->



        <?php  Session::display_message(); ?>
  

        <!--BUTTONS IN ACTIONS-->
        <div class="container">
          <div class="row" align="right">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php
              if (isset($_SESSION['user_id'])) {
                echo "<span><a href='profile/profile.php' class='btn btn-success'>Profile</a>
              <span><a href='logout/logout_page_data.php' class='btn btn-danger'>Log Out</a></span>";
              } else{
                 echo "<a href='login/login_page.php' class='btn btn-primary'>Log In</a></span>
              <span><a href='signup/signup_page.php' class='btn btn-warning'>Sign Up</a></span>";
              }
            ?>
            </div>
          </div>
        </div>
        <!--BUTTONS IN ACTION-->
        <br>

        <div class="container">
          <div style="font-size: 25px" align="center">
              <div style="background-color: #cccccc" align="center">PRODUCTS 
              </div>
          </div>
        </div>

<!--DROP DOWN NAV BAR-->
<?php include("includes/nav_dropdown.php"); ?>
<!--DROP DOWN NAV BAR-->

            <!-- <div align="center">
              <table style="width: 100%; border: 0;">
                <tr>
                  <?php
                      // for ($i = 0; $i < 3; $i++) {
                         // echo "<td style=\"width: 33%; text-align: center\">
                               // <a href='../admin/product_insert.php'><img src=\"../beerrunners_main/product_image/";
                         // echo $pictures[$i];
                         // echo "\"/></a></td>";
                      // }
                  ?>
                </tr>
              </table>
            </div>
            --> 

</body>
</html>