<?php
require "../Models/lugares.model.php";

$lugares = new Lugares();
$res = $lugares->Restobar();
while($fila = $res->fetch_array(MYSQLI_ASSOC)){
    /*echo $fila['idsitios']."<br>";
    echo $fila['nombre']."<br>";
    echo $fila['imagen']."<br>";
    echo $fila['tipo']."<br>";
    echo $fila['descripcion']."<br>";
    echo $fila['descripcion2']."<br>";
    echo $fila['precio']."<br>";
    echo $fila['telefono']."<br>";
    echo $fila['email']."<br>";
    echo $fila['disponible']."<br>";
    echo $fila['dias']."<br>";
    echo $fila['recomendado']."<br>";    
    */
    $print = "
        <a href='descripcion.html?id=".$fila['idsitios']."' target='_self'> 
        <div class='cajas'>
            <span class='size2 icon-checkmark2'></span>
            <span>".$fila['nombre']."</span>
            <figure class='figure imagen'>
                <img src='".$fila['imagen']."' alt='".$fila['descripcion']."' class='figure-img img-fluid'>
            </figure>
        </div>
        </a>
        ";
    
    echo $print;
}

