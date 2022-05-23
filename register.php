<?php
    include 'includes/header.php';
?>
<html>
    <head>
    <link rel="stylesheet"  href="css\style.css">
    </head>


<body>
    <main class="flex">
    <div class="rcontainer">
        <div class="user">        </div>
        <form action="auth/reg.php" method="POST">
            <h1>Register</h1>
            <div class="input">
            <input type="text" name="uname" id="user" required/>
            <label >Username</label>
            </div>
            <div class="input">
                <input type="email" name="email" id="email" required/>
                <label>Email</label>
            </div>
            <div class="input box">
                <input type="password" name="pass" id="pword" required/>
                <label >Password</label>
                <div class="forgot">            </div>
            </div>
            <input type="submit" value="Register" name="register" />
        </form>
            <div class="div">
                <div class="line"> </div>
                <div class="signup">Already have a account?
                    <a href="login.php">Login Here</a></div>
               
            </div>
    </div>
</main>
    
    
</body>
</html>