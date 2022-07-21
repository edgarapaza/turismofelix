<?php
require "../Models/listado.model.php";

$listas = new Listas();
$data = $listas->Todos();

$i=1;

$dat = "
<table class='table'>
<thead>
    <tr>
        <th>Id</th>
        <th>Registro</th>
        <th>imagen</th>
        <th>Tipo</th>
        <th>Opciones</th>
    </tr>
</thead>
<tbody>
";
// idsitios,nombre,imagen,tipo
while($fila = $data->fetch_array(MYSQLI_ASSOC)){
    
    $dat.= "
        <tr>
            <td>".$i."</td>
            <td>".$fila['nombre']."</td>
            <td>
                <img src='../View/".$fila['imagen']."' alt='".$fila['nombre']."' width='150'>
            </td>
            <td>".$fila['tipo']."</td>
            <td>
                <a href='edit.php?idsitio=".$fila['idsitios']."'>Modificar</a> |
                <a href='#?idsitio=".$fila['idsitios']."'>Eliminar</a>
            </td>
        </tr>
    ";
}

$dat.="</tbody>
</table>";
    
echo $dat;

