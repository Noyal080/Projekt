<?php
	 
	 session_start();
	 $_SESSION["status"]= false;
	$user = $paswd = '';
	$errors = array('user'=>'','pword'=>'');
	if(isset($_POST['log']))
	
	{
		include_once('C:\xampp\htdocs\register\auth\connect.php');
		$user = $_POST['user'];
		$password = $_POST['pword'];
		$query = "SELECT * FROM `dbnam` WHERE username= '$user'";
    	$result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)!=FALSE)
	{
        $row = mysqli_fetch_assoc($result);
        $verify = password_verify($password,$row['Password']);
        if($verify == 1)
		{
            $_SESSION["status"]=true;
            header("Location:../dashboard.php?action=Login completed");
			exit();
        }
		else
		{
            header("Location:../login.php?action=check your password");
        }
    }
	else if($user==null||$user=="")
	{
        $errors['user']= 'Email field is empty!';
    }else
    {
        $errors['user'] = 'Please Enter Correct Email';
    }
	}


?>