<?php
	//Crear la conexión
	$srv="DESKTOP-9429NCB\MSSQLSERVER01";
	$opc=array("Database"=>"SEACE_PROYECTO", "UID"=>"ego", "PWD"=>"Eguito");
	$con=sqlsrv_connect($srv,$opc) or die(print_r(sqlsrv_errors(), true));
	$sql="SELECT  * FROM DISTRITO ;";
	$res=sqlsrv_query($con,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Exportar tablas</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
  </head>
    
  <body> 
     <header style="background: black;">
         <h1 class="text-center text-light">Experiencias Formativas</h1>
         <h2 class="text-center text-light">Conexion con  <span class="badge badge-warning">SQL Server</span></h2> 
     </header>    
    <div style="height:50px"></div>
     
    <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Codigo Distrito</th>
                                <th>Nombre</th>
                                
                            </tr>
                        </thead>
                        <tbody>
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
                                    <td><?php echo $row['COD_DISTRITO'];?></td><td><?php echo $row['NOM_DISTRITO'];?></td>
                                </tr>
                                <?php
                                }
                            }
                            sqlsrv_close($con);
                            ?>                         
                        </tbody>        
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>    
     
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>
