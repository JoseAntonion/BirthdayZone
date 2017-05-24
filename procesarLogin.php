<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		if(isset($_POST['email']))
			$correo = $_POST['email'];
		if(isset($_POST['clave']))
			$pass = $_POST['clave'];

		
		echo "Bienvenido </br>";
		echo "E-Mail: $correo </br>";
		echo "Contraseña: $pass";
		
	}
       
?>


