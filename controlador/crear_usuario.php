<?php
require_once("../config/conectar.php");
$usuario = $_POST["usuario"];
$correo = $_POST["correo"];
$passwd = $_POST["passwd"];
$tipo = $_POST["tipo"];
$sql = "INSERT INTO `usuarios` (`id_usuario`, `usuario`, `correo_usuario`, `passwd_usuario`, `tipo_usuario`, `perfil_usuario`) VALUES (NULL,'" . $usuario . "','" . $correo . "','" . $passwd . "','" . $tipo . "', 'avatar.jpg');";
mysqli_query($conexion, $sql);
header("location:../index.php")
?>