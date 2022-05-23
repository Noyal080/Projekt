<?php
include_once('C:\xampp\htdocs\register\includes\header.php');
if (isset($_GET['error'])) {

    if ($_GET['error'] == 'password_incorrect') {
      ?>
      <h4 style="">Login Failed due to incorrect password</h4>
      <?php
    }
  }
?>
<html>
    <head>
    <link rel="stylesheet" href="css\style.css">
    </head>

<body >
    <div class="flex">
    <div class="container">
        <div class="user">        </div>
        <form action="auth/log.php" method="POST">
            <h1>Log In</h1>
            <div class="input">
            <input type="text" name="loginname" id="loginname" required/>
            <label >Username</label>
            </div>
            <div class="input box">
                <input type="password" name="pword" id="pword" required/>
                <label >Password</label>
                <div class="forgot"> <a href="#">Forgot Password?</a> 
            </div>
            </div>
            <input type="submit" name="log" value="Login" />
        </form>
            <div class="div">
                <div class="line"> </div>
                <div class="signup">Dont have a account?
                    <a href="register.php">Sign up?</a></div>
               
            </div>
    </div>
</div>
    
    
</body>
</html>