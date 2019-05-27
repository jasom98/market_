<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
  function validarclave(){
	  var a1 = document.form1.pswd.value
	  var a2 = document.form1.pswd2.value
	  
	  if (a1 == a2) 
		 document.form1.submit()	
		 else
		 alert("Las Contraseñas No Son Iguales")

  }
 /* function validartipofoto(){
	  $max=2000000;// 2Mb)
	  $filesize = $_FILES['upfile']['size'];
	  $filename = trim($_FILES['upfile']['name']); 
	  $filename = substr($filename, -20); 
	  $filename = ereg_replace(" ", "", $filename);
	if($filesize < $max){
		if($filesize > 0){ 
			if((ereg(".jpg", $filename)) || (ereg(".gif", $filename)) || (ereg(".JPG", $filename))|| (ereg(".GIF", $filename))){
				$uploadfile = $uploaddir . $filename;
				if (move_uploaded_file($_FILES['profiles']['tmp_name'], $uploadfile)) {
				print("Archivo subido correctamente");
				} else {
				print("Error de conexi&oacute;n con el servidor.");
				}
				} else {
				print("Sólo se permiten imágenes en formato jpg. y gif., no se ha podido adjuntar.");
				}
				}
				else {
				print("<br><br>Campo vac&iacute;o, no ha seleccionado ninguna imagen");
				}
				}
				else {
				print("<br><br>La imagen que ha intentado adjuntar es mayor de 1.5 Mb, si desea cambie el tamaño del archivo y vuelva a intentarlo.");
		}
  } */
  
  </script>  
</head>
<body>
<div class="container">
  <h2>Sign Up</h2>
  <p>Formulario de registro de usuarios</p>
  <form name="form1" action="uregister.php"  class="was-validated" method="POST"  enctype="multipart/form-data">
	<div class="form-group">
	  <label for="uname">Fisrtname:</label>
	  <input type="text" class="form-control" id="uname" placeholder="Enter Firstname" name="uname" required>
	  <div class="valid-feedback">Valid.</div>
	  <div class="invalid-feedback">Please fill out this field.</div>
	</div>
	<div class="form-group">
	  <label for="uname">Lastname:</label>
	  <input type="text" class="form-control" id="ulastname" placeholder="Enter Lastname" name="ulastname" required>
	  <div class="valid-feedback">Valid.</div>
	  <div class="invalid-feedback">Please fill out this field.</div>
	</div>
	<div class="form-group">
	  <label for="idced">Identificacion:</label>
	  <input type="number" class="form-control" id="idced" placeholder="Enter id" name="idced" required>
	  <div class="valid-feedback">Valid.</div>
	  <div class="invalid-feedback">Please fill out this field.</div>
	</div>
	
	<div class="form-group">
	  <label for="uname">Gender:</label>
	  <select name="gender" class="form-control">
	  <option value="M">Male</option>
	  <option value="F">Female</option>
	  <option value="O">Other</option>
	  </select>
	  <div class="invalid-feedback">Please fill out this field.</div>
	</div>
	
	<div class="form-group">
	  <label for="uname">Email:</label>
	  <input type="email" class="form-control" id="uemail" placeholder="Enter email" name="uemail" required>
	  <div class="valid-feedback">Valid.</div>
	  <div class="invalid-feedback">Please fill out this field.</div>
	</div>
	
	 <div class="form-group">
	  <label for="pwd">Password:</label>
	  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
	  <div class="valid-feedback">Valid.</div>
	  <div class="invalid-feedback">Please fill out this field.</div>
	</div>
	<div class="form-group">
	  <label for="pwd">Confirmar password:</label>
	  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd2"  required>
	  <div class="valid-feedback">Valid.</div>
	  <div class="invalid-feedback">Please fill out this field.</div>
	</div>
	<div class="form-group">
    <label for="foto">Imagen de Perfil:</label>
    <input type="file" class="form-control" id="photo" name="photo" value="Examinar" accept="image/png, .jpeg, .jpg, image/gif">
  </div>
	<button type="button" class="btn btn-primary" onClick="validarclave()" onClick="validartipofoto">Register</button>
	
  </form>
</div>
</body>
</html>

