<?php
    $conexion =mysqli_connect("localhost","root","","quizz","3306");

    if(mysqli_connect_errno()){
        echo "Error al conectar a la base de datos".mysqli_connect_error();
     }
     else{
        echo"Conexion Exitosa"; 
     }

     mysqli_query($con,"SET NAMES 'utf8'");

  