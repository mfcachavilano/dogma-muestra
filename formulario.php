<?php 

		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$email = $_POST["email"];
		$tel = $_POST["tel"];
		$mensaje = $_POST["mensaje"];

		$para = "info@dogmaviajes.com.ar";
		$asunto = "Conulta desde dogmaviajes.com.ar";

		$contenido = "
		Nombre: ".$nombre."
		Apellido: ".$apellido."
		E-mail: ".$email."
		Telefono: ".$tel."
		Mensaje: ".$mensaje."

		";

		mail($para,$asunto,utf8_decode($contenido));

		echo ' <script>alert("Mensaje enviado con exito")</script> ';

		echo "<SCRIPT>window.location='index.html';</SCRIPT>"; //cambiar la pagina a la que se redurecciona por un "mensaje enviado. html o algo asi"
?>