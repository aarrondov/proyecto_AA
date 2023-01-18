<?php

echo "<table><tr><th>Usuario</th><th>Correo</th><th>Contraseña</th><th>Ruta</th></tr>";
foreach ($usuarios as $u) {
    echo "<tr><td>" . $u["usuario"] . "</td><td>" . $u["correo_usuario"] . "</td><td>" . $u["passwd_usuario"] . "</td><td><img class='logo' src='img/" . $u["perfil_usuario"] . "'></td></tr>";
}
echo "</table";

?>