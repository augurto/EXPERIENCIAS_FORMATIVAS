<?php
	//Crear la conexión
	$srv="DESKTOP-9429NCB\MSSQLSERVER01";
	$opc=array("Database"=>"CL2_EGO", "UID"=>"ego", "PWD"=>"Eguito");
	$con=sqlsrv_connect($srv,$opc) or die(print_r(sqlsrv_errors(), true));
	$sql="SELECT TOP 10 * FROM Tipos_Cuentas ORDER BY cod_cuenta;";
	$res=sqlsrv_query($con,$sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
	<table>
		<tr>
			<td>ID</td><td>Tipo de cuenta</td><td>Moneda</td>
		</tr>
		<?php
		if(!$res)
		{?>
		<tr>
			<td colspan="6">No hay datos para mostrar</td>
		</tr>
		<?php
		}
		else
		{
			while($row=sqlsrv_fetch_array($res))
			{?>
			<tr>
				<td><?php echo $row['cod_cuenta'];?></td><td><?php echo $row['desc_cta'];?></td><td><?php echo $row['moneda'];?></td>
			</tr>
			<?php
			}
		}
		sqlsrv_close($con);
		?>
	</table>
</body>
</html>
