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
  
</head>
<body>

<div class="container">
  <h2>Sign Up</h2>
  <p>Formulario de registro de usuarios</p>
  <form action="uregister.php" id="register.js" class="was-validated" method="POST" >
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
      <label for="uname">Gender:</label>
      <select name="gender" class="form-control">
	  <option value="M">Male</option>
	  <option value="F">Female</option>
	  <option value="O">Other</option>
	  </select>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
	
	<input type="password" id="pswv" class="form-control" name="pswv" required pattern=".{6,}" 
	oninvalid="setCustomValidity('Campo obligatorio, debe contener minimo 6 caracteres')">
  Repita la nueva contraseña :
  <input type="password" id="pswv2" class="form-control" name="pswv2" required 
  oninvalid="setCustomValidity('Campo obligatorio, debe coincidir con la nueva contraseña')">
	
    <div class="form-group">
      <label for="uname">Email:</label>
      <input type="email" class="form-control" id="uemail" placeholder="Enter email" name="uemail" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
	<div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="cpassword" type="password" class="form-control" placeholder="Retype Password" required>
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
    
    <div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>

</body>
</html>
<?
if($_POST["password"]==$_POST["cpassword"])
{
     # son iguales
}else{
     # no son iguales
}
?>
