<?php	
	include("database.php");

	$firstname=$_POST['uname'];
	$lastname=$_POST['ulastname'];
	$gender = $_POST['gender'];
	$email=$_POST['uemail'];
	$identification=$_POST["idced"];
	
	if ($gender == "M")
		$photo = "images/boy.png";
	elseif	($gender == "F")
		$photo = "images/girl.png";
	else	
		$photo = "images/img_default.png";	
	
	$file_name=$_FILES['upfile']['name']; //trae el nombre del archivo
	$file_type=$_FILES['upfile']['type']; //trae el tipo de archivo
	$file_size=$_FILES['upfile']['size']/1024; //trae el tamaño del archivo
	$file_tmp=$_FILES['upfile']['tmp_name']; //trae la ubicacion temporal de la carpeta
	
	//echo $idnumber."<br>".$file_name."<br>".$file_type."<br>".$file_size."<br>".$file_tmp;
	
	move_uploaded_file($_FILES['upfile']['tmp_name'],"profiles/".$_FILES['upfile']['name']);
	//mueve la foto de la carpeta temporal a la carpeta photo
	
	$photo_url_db="profiles/".$_FILES['upfile']['name'];
	
	$pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);
	//1. Create query
	$sql_validation = "SELECT * FROM usuarios WHERE email = '$email' and indentification='$identification'";
	//2. Execute query
	$conn->query($sql);
	$result=$conn->query($sql_validation);
	
	//3. Validation
	if($result->num_rows == 0){
		$sql="INSERT INTO usuarios (firstname,lastname,identification,email, password,photo) VALUES('$firstname','$lastname','$identification','$email','$pswd','$photo_url_db')";
		if ($conn->query($sql)===true) {
			echo "<script language='javascript'>alert('Usuario regisrado con exito')</script>";
			header("Refresh:0;url=login.php");    
		}else{
			echo "Error:".$sql."<br>".$conn->error;
		}
	}else{
		echo "<script language='javascript'>alert('Usuario ya existe')</script>";
		header("Refresh:0;url=login.php");
	}	
?>
