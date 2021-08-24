<?php
    header("Access-Control-Allow-Origin: *");

    $correo = $_REQUEST["correoR"];
    $nombre = $_REQUEST["nombreR"];
    $contrasena = $_REQUEST["contrasenaR"];
    $fecha = $_REQUEST["fechaR"];

    require("conexion.php");

    $cifrada = password_hash($contrasena, PASSWORD_DEFAULT);
    $sql = "INSERT INTO tblUsuario VALUES('$correo','$cifrada','$nombre','$fecha')";
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    
    echo "Registrado";
?>
