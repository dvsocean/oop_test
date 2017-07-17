<?php require_once("../classes/ini.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>User Profile</title>

    <!--JQUERY CORE-->
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">
    </script>
    <!--JQUERY CORE-->

    <!--JS-->
    <script type="text/javascript" src="../js/navbar_functionality.js"></script>
    <!--JS-->

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <style>
      body{
        background-image: url("../beerrunners_main/product_image/coconut_tree.png");
      }
    </style>
    <!--CSS-->

    <!--BOOTSTRAP LINK FOLDER-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 
    <!--BOOTSTRAP LINK FOLDER-->


</head>
<body>

<?php 

  $id= $_SESSION['user_id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $result= $db->query($sql);
  if ($row= $result->fetch_object()) {
        $fname= $row->first_name;
        $lname= $row->last_name;
        $email= $row->email;
        $uname= $row->user_name;
  }

  $sql2="SELECT upload_path FROM photos WHERE user_id='$id'";
  $result2= $db->query($sql2);
  if ($row2= $result2->fetch_object()) {
      $pic= $row2->upload_path;
  }

?>

<!--NAVIGATION DROP DOWN-->
<?php include("../includes/nav_bar.php"); ?>
<!--NAVIGATION DROP DOWN-->

<!--BUTTONS IN ACTION-->
<div class="container">
  <div class="row" align="right">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <a href="../admin/product_insert.php" class="btn btn-primary">Products</a>

      <a href="../logout/logout_page_data.php" class="btn btn-danger">Logout</a>
      <a href="../admin/all_products.php" class="btn btn-default">All products</a><br>
    </div>
  </div>
</div>
<!--BUTTONS IN ACTION-->

<div class="container">
  <div class="row" align="center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <label style="font-size: 25px; background-color: red;">PROFILE</label>
    </div>
  </div>
</div>


<script>
  $(function(){
    var photo_name= $('#photo').val();
    //alert(photo_name);
  });
</script>
<a href="" id="test">TEST</a>


                                    
<!-- ACCOUNT MANAGE FORM START***             ONLY USE WITH 'PHOTOS'-->
<form action="../update/user_update_data.php" method="POST" enctype="multipart/form-data">
<div class="container">
  <div class="row" align="center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <a href="../index.php"><img src="../update/<?php echo $pic;?>" width="100" height="100" class="img-circle"></a><br>

<!--LOGIN DATA MESSAGE-->
<?php Session::display_message(); ?>
<!--LOGIN DATA MESSAGE-->
      
      <br>
      <input type="file" name="user_photo" id="photo">
        <input type="hidden" name="current_photo" value="<?php echo $pic; ?>">
    </div>
  </div>
</div> 
<br>
<div class="container">
  <div class="row" align="center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <label style="color: green;">First Name:</label><br>
      <input type="text" name="first_name" value="<?php echo $fname;?>">

      <br><br>

      <label style="color: green;">Last Name:</label><br>
      <input type="text" name="last_name" value="<?php echo $lname;?>">

      <br><br>

      <label style="color: green;">Email:</label><br>
      <input type="text" name="email" value="<?php echo $email;?>">

      <br><br>
    </div>
  </div>

  <div class="row" align="center">
    <div class="col-md-12">
      <input type="submit" name="submit" value="update">
    </div>
  </div>
</div>
</form>
<!--END OF ACCOUNT MANAGE FORM-->








 <script src="../bootstrap/js/bootstrap.js"></script>

</body>
</html>

