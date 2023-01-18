<?php
include_once "config.php";

try {
    $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
} catch (Exception $e) {
    $error = "No se ha podido conectar con el servidor de base de datos";
    include_once "vistas/error.php";
    exit();
}

try {
    $con = mysqli_select_db($conexion,DB_NAME);
    //var_dump($con);
    $sql = "SELECT * FROM usuarios";
    $res = mysqli_query($conexion,$sql);
    //var_dump($res);
} catch (Exception $e) {
    $error = "No se ha podido seleccionar la base de datos";
    include_once "vistas/error.php";
    exit();
}

?>