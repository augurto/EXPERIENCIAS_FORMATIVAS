<?php

class Cconexion{

    function ConexionBD(){

        $host='localhost';
        $dbname='SEACE_PROYECTO';
        $username='proyecto';
        $pasword ='proyecto1';
        $puerto=1433;


        try{
            $conn = new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbname",$username,$pasword);
            echo "Se conectó correctamen a la base de datos";
        }
        catch(PDOException $exp){
            echo ("No se logró conectar correctamente con la base de datos: $dbname, error: $exp");
        }

        return $conn;
    }

}

?>