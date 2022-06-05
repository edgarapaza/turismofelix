<?php
require "../Models/lugares.model.php";

@$id = $_REQUEST['id'];

$lugares = new Lugares();

$data = $lugares->LugarEsp($id);

$data['disponible'];
$data['dias'];
$data['recomendado'];

$tipo = "
<div class='row'>
    <h3>LUGARES TURISTICOS</h3>
    <em>".$data['nombre']."</em>
    <p>".$data['descripcion']."</p>
    <p>".$data['descripcion2']."</p>
</div>
<div class='row'>
    <div class='col-8'>
        <figure class='figure'>
            <img src='".$data['imagen']."' alt='".$data['nombre']."' class='figure-img img-fluid'>
        </figure>
    </div>
    <div class='col-4'>
        <div class='col-4'>
            <label class='form-text'>Cantidad</label>
            <input type='number' name='txtcantidad' id='txtcantidad' min='1' max='999' value='1' class='form-control'>
            <br>
            <label for='txtcantidad' class='form-text'>Precio</label>
            <input type='text' name='txtcantidad' id='txtcantidad' value='".$data['precio']."' class='form-control'>
        </div>
    </div>
</div>

<div class='row'>
    <span class='size icon-start'></span> Mas de la lista
</div>

<div class='row'>
    <h4>Contactos</h4>
</div>

<div class='row'>
    <div class='col-6'>
        <span class='size icon-start'></span>
        <p>Telefono (Phone): ".$data['telefono']."</p>
    </div>
    <div class='col-6'>
        <span class='size icon-start'></span>
        <p>Email: ".$data['email']."</p>
    </div>
</div>

<div class='row'>
    <p>Disponible de Lunes a Domingo de 8am - 11pm</p>
    <p>Los sabados y domingos 9am - 9pm</p>
    <p>Puno - Perú</p>
</div>
";

echo $tipo;
