<style>
    .logo {
        width: 30px;
        height: 30px;
    }
</style>
<?php
//error_reporting(0);
include_once "./vistas/cabecera.php";
//var_dump($conexion);
if (isset($_GET['opcion'])) {
    switch($_GET['opcion']){
        case "ver_reservas":
            ver_reservas();
            break;
        case "crear_usuario":
            crear_usuario();
            break;
        case "listar":
            listar();
            break;
        case "buscar":
            if (isset($_POST["nombre"])) {
                buscarResultado();
            }
            else {
                buscar();
            }
            
            break;
        case "insertar":
            insertar();
            break;
    };
} else {
    inicio();
}

function inicio() {
    require "config/conectar.php";
    // Creamos la sql de búsqueda
    $sql = 'SELECT usuario,correo_usuario,passwd_usuario,perfil_usuario FROM usuarios';
    $resul = mysqli_query($conexion, $sql);
    // Recogemos lso resultados devueltos por la BD y los metemos en un array $personas[]
    while ($fila = mysqli_fetch_array($resul))
        {
        // procesar la fila
        $usuarios[] = $fila;
        }
    // hacemos un include de la página vista_inicio.php
    include_once "vistas/vista_inicio.php";
}
/*
function listar() {
    require "config/conectar.php";
    // Creamos la sql de búsqueda
    $sql = 'SELECT nombre, apellido, edad, estadoC, sexo FROM personas';
    $resul = mysqli_query($conexion, $sql);
    // Recogemos lso resultados devueltos por la BD y los metemos en un array $personas[]
    while ($fila = mysqli_fetch_array($resul))
        {
        // procesar la fila
        $personas[] = $fila;
        }
    // hacemos un include de la página vista_inicio.php
    include_once "vistas/vista_listar.php";
}

function buscar() {
    // include a vista_formulario_buscar.php
    include_once "vistas/vista_formulario_buscar.php";
    
    
    
}

function buscarResultado() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require "config/conectar.php";
        $sql = 'SELECT nombre, apellido, edad, estadoC, sexo FROM personas WHERE';
        if (isset($_POST["nombre"]) && $_POST["nombre"] != '') {
            $nombre = $_POST["nombre"];
            $sql = $sql . ' nombre="' . $nombre . '" AND';
        }
        if (isset($_POST["apellido"]) && $_POST["apellido"] != '') {
            $apellido = $_POST["apellido"];
            $sql = $sql . ' apellido="' . $apellido . '" AND';
        }
        if (isset($_POST["edad"]) && $_POST["edad"] != '') {
            $edad = $_POST["edad"];
            $sql = $sql . ' edad="' . $edad . '" AND';
        }
        if (isset($_POST["estadoC"]) && $_POST["estadoC"] != '') {
            $estadoC = $_POST["estadoC"];
            $sql = $sql . ' estadoC="' . $estadoC . '" AND';
        }
        if (isset($_POST["sexo"]) && $_POST["sexo"] != '') {
            $sexo = $_POST["sexo"];
            $sql = $sql . ' sexo="' . $sexo . '" AND';
        }
        $sql = rtrim($sql,' AND');
        $resul = mysqli_query($conexion, $sql);
        while ($fila = mysqli_fetch_array($resul))
        {
        $personas[] = $fila;
        }
        include_once "vistas/vista_buscar.php";
    }
}

function insertar() {
    // include a vista_formulario_buscar.php
    include_once "vistas/vista_formulario_insertar.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require "config/conectar.php";
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $estadoC = $_POST["estadoC"];
        $sexo = $_POST["sexo"];
        $sql = 'INSERT INTO personas (nombre, apellido, edad, estadoC, sexo) VALUES ("' . $nombre . '","' . $apellido . '",' . $edad . ',"' . $estadoC . '","' . $sexo . '")';
        $resul = mysqli_query($conexion, $sql);
        echo "Añadido con exito";
    }
    
}

*/
function crear_usuario(){
    include_once "vistas/vista_crear_usuario.php";
}
function ver_reservas(){
    //TODO: Listar reservas por ID ($_SESSION["id"])
    include_once "vistas/vista_ver_reservas.php";
}
//include_once "./vistas/pie.php";
?>
