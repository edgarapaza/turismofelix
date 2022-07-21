<?php

require "../Models/guardar.model.php";

$turismoclass = new TurismoClass();

$idsitio      = $_POST['idsitio'];
$imagen       = $_FILES['imagen'];
$nombre       = $_POST['txtlugar'];
$tipo         = $_POST['cbotipo'];
$descripcion  = $_POST['txtdescripcion'];
$descripcion2 = $_POST['txtdescripcion2'];
$precio       = $_POST['txtprecio'];
$telefono     = $_POST['txttelefono'];
$email        = $_POST['txtemail'];
$disponible   = $_POST['cbodisponible'];
$dias         = $_POST['txtdias'];
$recomendado  = $_POST['cborecomendado'];

/*
foreach($imagen as $key => $value){
    echo $key." : ".$value."<br>";
}
*/
if( $imagen["type"]=="image/jpg" || $imagen["type"]=="image/jpeg" || $imagen["type"]=="image/png"){
    $ruta = "img/".md5($imagen["name"]).".jpg";
    $ruta2 = "../View/img/".md5($imagen["name"]).".jpg";
    
    $resp = $turismoclass->Update($idsitio,$nombre,$ruta,$descripcion,$descripcion2,$precio,$telefono,$email,$disponible,$dias,$recomendado);
    if($resp){
        if(move_uploaded_file($imagen["tmp_name"], $ruta2)){
            //echo "Bien";
        }else{
            echo "Error al subir al servidor";
        }
        echo "Los datos fueron guardados correctamente";
        
    }else{
        echo "Datos duplicado. Error al subir la imagen";
        
    }
}else{
    echo "Debe seleccionar una imagen valida";
}
