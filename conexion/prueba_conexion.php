<?php
$serverName = "DESKTOP-9429NCB\MSSQLSERVER01"; //serverName\instanceName
$connectionInfo = array( "Database"=>"BDArcor", "UID"=>"ego", "PWD"=>"Eguito");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>