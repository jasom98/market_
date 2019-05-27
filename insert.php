<?php

    include "database.php";

    $codigo=$_POST['codigo'];
    $nombre=strtoupper( $_POST['producto']);
    $cantidad=$_POST['cantidad'];
    $costo=$_POST['costo'];
    //$imagen=$_POST['foto'];
	
	$extarray= array("jpeg","jpg","png","gif");
	$tmp_name = $_FILES["foto"]["tmp_name"];
	$status=FALSE;
    $exploarray = explode('.',$_FILES['foto']["name"]);
	$ext=end($exploarray);
	if(in_array($ext,$extarray)){
		$newname = implode('.', [$codigo,$costo,$ext]);
		move_uploaded_file($tmp_name, "profiles/$newname");
		$photo = "profiles/$newname";
		$status=TRUE;
	}
	
	if($status==TRUE){
		$sql="INSERT INTO productos (codprod,nomprod,cantprod,pcosto,imagen)VALUES('$codigo','$nombre',$cantidad,$costo,'$photo')";
    
    if ($conn->query($sql)===true) {
        echo "<script languaje='javascript'>alert('Producto regisrado con exito')</script>";
        header("Refresh:0;url=index.php"); 
    }else{
        echo "Error:".$sql."<br>".$conn->error;
    }
	}ELSE{
		echo "<script language='javascript'>alert('La imagen es superior a 2 MB o no tiene el formato indicado')</script>";
		header("Refresh:0;url=view_create.php");
	}

?>