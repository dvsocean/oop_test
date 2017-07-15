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

<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 

</head>
<body>

<?php 

  $id= $_SESSION['user_id'];

//REMOVED LAST_NAME, CITY, ADDRESS,.. ECT.
    $sql="SELECT * FROM users WHERE id='$id'";
    $result=$db->query($sql);
  if ($row= $result->fetch_object()) {
        $fname=$row->first_name;
        $email=$row->email;
        $uname= $row->user_name;
  }

?>

<!--BUTTONS ACTING LIKE ACTIONS***-->
<a href="../index.php" class="btn btn-primary">Home</a>

<a href="../admin/product_insert.php" class="btn btn-primary">Products</a>

<a href="../logout/logout_page_data.php" class="btn btn-danger">Logout</a><br><br>

<a href="../admin/all_products.php" class="btn btn-primary">All products</a>
<!--BUTTONS ACTING LIKE ACTIONS***-->

<!--ACCOUNT MANAGE FORM START***-->
<form action="../update/user_update_data.php" method="POST">
<div class="container">
  <div class="row" align="center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <img src="../beerrunners_main/product_image/master_cheif.jpg" width="150" height="150" class="img-circle">
    </div>
  </div>
</div> 
<br><br>



<div class="container">
  <div class="row" align="center">
    <div class="col-md-4">
      <!--PLACEHOLDER-->
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <?php Session::display_message(); ?><br><br>
      <label>First Name:</label><br>
      <input class="form-control" type="text" name="first_name" value="<?php echo $fname;?>"><br>

      <label>Email:</label><br>
      <input class="form-control" type="text" name="email" value="<?php echo $email;?>"><br><br>   
    </div>

    <div class="col-md-4">
      <!--PLACEHOLDER-->
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




