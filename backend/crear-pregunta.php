<?php
if(isset($_POST)){
    require_once 'conexion.php';

    $pregunta = isset($_POST['pregunta']) ? mysqli_real_escape_string($conn, $_POST['pregunta']) :false;
    $imagen = isset($_POST['imagen']) ? mysqli_real_escape_string($conn, $_POST['imagen']) :false;

    $error=array();

    if(empty($pregunta)){
        $error['pregunta'] = "LA PREGUNTA NO PUEDE ESTAR VACIA";
     }
     if(empty($imagen)){
        $error["imagen"] = "LA IMAGEN NO PUEDE ESTAR VACIA";
     }

     if(count($error)==0){
        $sql = "INSERT INTO preguntas VALUES('$pregunta','$imagen')";
        $query = mysqli_query($conn, $sql);
        echo "PREGUNTA CREADA CON EXITO";
     }
     else{
        $respuesta= array(
            'status' => 'error',
            'code'=> 400,
            'message'=> 'Error en los datos',
            'error' => $error,
        );
     }
     

}