<?php
include_once "Classes/Usuario.php";
$usuarios = new Usuarios();

if(isset($_POST["usuario"])){
if($_POST["usuario"] != "" && $_POST["senha"] != ""){
$login = $usuarios->login();
}else{
header('location:./login.php?erro=1');
}
}

if(isset($_GET["sair"])){
	unset ($_SESSION['usuario']);
	unset ($_SESSION['senha']);
	header('location:./index.php');
}
?>