<?php

require_once("conexion.php");

$cod_usuari = $_POST["cod_usuari"];
$pws_usuari = $_POST["pws_usuari"];

$sql = "SELECT cod_usuari, nom_usuari, pws_usuari
        FROM tab_genera_usuari
        WHERE cod_usuari = '{$cod_usuari}'
        AND pws_usuari = '{$pws_usuari}'
        ";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "Nombre de usuario: " . $row["nom_usuari"]. " - Contraseña: " . $row["pws_usuari"]. "<br>";
    }
} else {
    echo "nombre y/o contraseña no validos";
}

?>