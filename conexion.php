<?php

define("SERVIDOR", "localhost");
define("USUARIO", "305588");
define("CONTRASENA", "Jerome01");
define("DB", "305588");
define("PUERTO", "3306");

$conexion = mysqli_connect(SERVIDOR, USUARIO, CONTRASENA, DB, PUERTO);

?>