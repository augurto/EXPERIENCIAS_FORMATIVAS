<?php
If(empty($_POST)){
 $serverName="DESKTOP-9429NCB\MSSQLSERVER01";// serverliame\instanceName
// Puesto que no se han especificado UID ni PWD en el array$connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo=array("Database"=>"CL2_EGO");
$conn=sqlsrv_connect($serverName,$connectionInfo);
$cod_cuenta='10';
$desc_cta='cuenta simple';
$moneda='sol';
/* $Cor=$_POST['correo'];
$Tel=$_POST['telefono'];
$Usu=$_POST['usuario'];
$Cla=$_POST['clave']; */
$insertar="INSERT into Tipos_Cuentas(cod_cuenta,desc_cta,moneda)values('$cod_cuenta','$desc_cta','$moneda')";
// Te faltaba esta lineax
$recurso=sqlsrv_prepare($conn,$insertar);
// Para mas seguridad usa el valor retornado por sqlsrv_execute
if(sqlsrv_execute($recurso)){
     echo "Agregado correctamente";
}
   else{
     echo " No Agregado";
}
}
?>