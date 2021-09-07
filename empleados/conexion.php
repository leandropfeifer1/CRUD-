<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "test_empleados";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$db = mysqli_select_db( $con, $db_name ) or die ( " no se ha podido conectar a la base de datos" );

?>
