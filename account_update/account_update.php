<?php require_once("../classes/ini.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>User Profile</title>

    <!--JQUERY CORE**-->
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">
    </script>
    <!--JQUERY CORE**-->

    <!--BACKGROUND-IMAGE**-->
    <style>
      body{
        background-image: url("../beerrunners_main/product_image/coconut_tree.png");
      }
    </style>
    <!--BACKGROUND-IMAGE**-->

    <!--BOOTSTRAP LINK FOLDER**-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 
    <!--BOOTSTRAP LINK FOLDER**-->


</head>
<body>

<?php 

  $id= $_SESSION['user_id'];

//HTORRES6 REMOVED LAST_NAME, CITY, ADDRESS,.. ECT.
    $sql="SELECT * FROM users WHERE id='$id'";
    $result= $db->query($sql);
  if ($row= $result->fetch_object()) {
        $fname= $row->first_name;
        $lname= $row->last_name;
        $email= $row->email;
        $uname= $row->user_name;
  }

?>

<!--BUTTONS ACTING LIKE ACTIONS***-->
<a href="../admin/product_insert.php" class="btn btn-primary">Products</a>

<a href="../logout/logout_page_data.php" class="btn btn-danger">Logout</a><br><br>

<a href="../admin/product_update.php" class="btn btn-default">Product Update</a><br><br>


<!--BUTTONS ACTING LIKE ACTIONS***-->

<!--ACCOUNT MANAGE FORM START***-->
<form action="../update/user_update_data.php" method="POST">
<div class="container">
  <div class="row" align="center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <a href="../index.php"><img src="../beerrunners_main/product_image/master_cheif.jpg" width="100" height="100" class="img-circle"></a>
    </div>
  </div>
</div> 
<br>
<div class="container">
  <div class="row" align="center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <label style="color: green;">First Name:</label><br>
      <input type="text" name="name" value="<?php echo $fname;?>" required>

      <br><br>

      <label style="color: green;">Last Name:</label><br>
      <input type="text" name="name" value="<?php echo $lname;?>" required>

      <br><br>

      <label style="color: green;">Email:</label><br>
      <input type="text" name="email" value="<?php echo $email;?>" required>

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
<!--END OF ACCOUNT MANAGE FORM***-->

 <script src="../bootstrap/js/bootstrap.js"></script>

</body>
</html>