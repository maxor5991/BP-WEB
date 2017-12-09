<html>
<head>
	<title>Agregar Chofer</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$DNI = mysqli_real_escape_string($mysqli, $_POST['DNI']);
	$Nombre = mysqli_real_escape_string($mysqli, $_POST['Nombre']);
	$Apellido = mysqli_real_escape_string($mysqli, $_POST['Apellido']);
	$Direccion = mysqli_real_escape_string($mysqli, $_POST['Direccion']);
	$Celular = mysqli_real_escape_string($mysqli, $_POST['Celular']);
	$Correo = mysqli_real_escape_string($mysqli, $_POST['Correo']);
	$Contrasena = mysqli_real_escape_string($mysqli, $_POST['Contrasena']);
	$Estado = mysqli_real_escape_string($mysqli, $_POST['Estado']);
	$IdDistrito = mysqli_real_escape_string($mysqli, $_POST['IdDistrito']);
	// checking empty fields
	
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO chofer(DNI,Nombre,Apellido,Direccion,Celular,Correo,Contrasena,Estado,IdDistrito) VALUES('$DNI','$Nombre','$Apellido','$Direccion','$Celular','$Correo','$Contrasena','$Estado','$IdDistrito')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	
}
?>
</body>
</html>
