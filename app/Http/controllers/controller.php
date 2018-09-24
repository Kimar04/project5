<?php
//seccion de login
if(isset($_POST['btn-register'])){

	$primernombre = $_POST['first-name'];
	$segundonombre = $_POST['last-name'];
	$empresa = $_POST['company'];
	$nombre = $_POST['username'];
	$correo = $_POST['email'];
	$password = $_POST['password'];
	$conf_pass = $_POST['conf_pass'];


	if($conf_pass == $password){

		include ('../../../views/front/forms/login.php');
	}
	else{
		//error 1 = 'Las contraseñas no coinciden!'
		header('Location: http://localhost/slideshow/index.php?error=1');
	}
}

//area de usuarios registrados
if(isset($_POST['btn-login'])){

	$primernombre = $_POST['first-name'];
	$segundonombre = $_POST['last-name'];
	$empresa  =$_POST['company'];
	$nombre = $_POST['username'];
	$correo = $_POST['email'];
	$password = $_POST['password'];
	$correo_log = $_POST['correo_log'];
	$password_log = $_POST['password_log'];

	if($correo_log == $correo && $pass_log == $password){

		include ('../../../views/admin/index.php');
	}
	else{
		//error 2 = 'Los datos de acceso no coinciden!'
		header('Location: http://localhost/slideshow/index.php?error=2');
	}
}

//Mensaje enviado

if(isset($_POST['btn-msg'])){
	$contacto = $_POST['contact'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$dest_msg = $_POST['dest_msg'];
	$asunto_msg = $_POST['asunto_msg'];
	$msg = $_POST['enviar-msg'];
	//Validar el genero
	if ($contacto == 'contact') {
		//error 3 = 'seleccionar solicitud !'
		header('Location: http://localhost/webmail/index.php?error=3');
	}

	if(isset($dest_msg)){

		include ('../../../views/admin/index.php');
	}
}

