<?php 


if(isset($_POST['log'])){

  include_once('C:\xampp\htdocs\register\auth\connect.php');

$loginname = $_POST['loginname'];
$password = $_POST['pword'];

	if (empty($loginname) || empty($password)){
			header("Location: ../login.php?error=fields_are_empty");
			exit();
		}

	else{
		$query = "SELECT * FROM `dbnam` WHERE Username =? OR Email =?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $query)) {
				header("Location: ../login.php?error=prepared statement error");
				exit();
			}
		else {
				mysqli_stmt_bind_param($stmt, "ss", $loginname, $loginname);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if ($row = mysqli_fetch_assoc($result)) {
					$validatepassword = password_verify($password, $row['Password']);

					if ($validatepassword == false ){
						header("Location: ../login.php?error=password_incorrect");
						exit();
					}
					else {
						session_start();
						
						$_SESSION['loginname'] = $row['Username'];

						header("Location: ../dashboard.php?action=login successfully");
						exit();
					}
				}

		}

	}

}
else{

	header("Location:../login.php?error=login first");
	exit();
}

?>
