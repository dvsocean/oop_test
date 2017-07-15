<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>

        <link rel="stylesheet" type="text/css" href="../css/signup.css">
        <script
              src="https://code.jquery.com/jquery-3.2.1.min.js"
              integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
              crossorigin="anonymous"></script>
<body>

<h1><center><b>Sign Up</b></center></h2>

<form action="signup_page_data.php" method="POST" >
  <div class="container">
    <label><b>Your name..</b></label>
    <input type="text" style="background-color: white;" placeholder="Your name" name="first_name" required><br />

    <div id="error"></div>
    <label><b>Username..</b></label>
    <input type="text" style="background-color: white;" placeholder="Enter Username" name="username" id="username" required><br />

    <label><b>Password..</b></label>
    <input type="password" style="background-color: white;" placeholder="Enter Password" name="psw" id="psw" required>

    <label><b>E-mail..</b></label>
    <input type="text" style="background-color: white;" placeholder="E-mail" name="email" id="email" required><br />
        
    <button type="submit" name="submit" id="submit">Create your Beerrunners account</button>

    <span class="psw"><b>Already have an account? </b><a href="../login/login_page.php">Log-In</a></span> 
  </div>
</form>

<script>
    $(function(){

        $('#username').blur(function(){

            var uname= $('#username').val();

            $.ajax({
                url:'username_data_ajax.php',
                method: 'POST',
                data: {uname:uname},
                dataType: 'text',
                success: function(data){
                    if (data) {
                        $('#error').html(data);
                        $('#username').focus();
                    }
                }
            });
        });


        $('#email').focus(function(){
            if ($('#error').text()) {
                $('#error').delay(1000).fadeOut('slow');
            }
        });


        $('#submit').click(function(){
            //
        });

        



    });
</script>

</body>
</html>