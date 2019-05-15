<?php	
	include("database.php");
	$email=$_POST['email'];
	//$passwd=$_POST['pswd'];
			
	$pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);
	//1. Create query
	$sql_validation = ("SELECT * FROM usuarios WHERE email = '$email' AND password='$pswd'");
	//2. Execute query
	$result=$conn->query($sql_validation);
	//3. Validation
	if($result->num_rows == 1){
		if ($conn->query($sql)===true) {
			echo "<script language='javascript'>alert('Usuario Existente')</script>";
			header("Refresh:0;url=index.php");    
		}else{
			echo "Error:".$sql."<br>".$conn->error;
		}
	}else{
		echo "<script language='javascript'>alert('Usuario no existe o su contraseña esta mal')</script>";
		header("Refresh:0;url=login.php");
	}	
?>