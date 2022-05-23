<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet"  href="css\header.css">
 
 

</head>
<body>
    <header>
    <div class="nav-container">
    <a href="./dashboard.php" style="text-decoration: none;"><img src="" alt="Logo here"> Name Here</a> 
    <nav class="navbar">
        
        <ul>
           
           <li><a href="./dashboard.php">Home</a> </li> 
           <li><a href="#">page</a></li>
           <li><a href = "#">Page</a></li>
           <li><a href="#">Page</a></li>
           <?php 
             if (isset($_SESSION['loginname'])){ ?>
                 <li >
             <a class="nav-link" href="auth/logout.php">Logout</a>
             </li>
            
             <?php 
             } else { ?>
                  <li >
             <a class="nav-link" href="./login.php">Login</a>
             </li>
             <li >
             <a class="nav-link" href="./register.php">Register</a>
             </li>
         <?php } ?>
             

       </ul>

       
    </nav>
    </div>
    
    </header>


    

</body>
</html>