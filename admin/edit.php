<?php

require "../Models/listado.model.php";

$idsitio = $_REQUEST['idsitio'];
$listas = new Listas();
$turismo = $listas->SoloTurismo($idsitio);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo Felix</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    
    
</head>
<body>
    
    <div class="container">
        <div class="row">
            <center><h3>CAMBIAR DATOS</h3></center>
            <a href="listado.html"> <-- Volver al listado</a>
        </div>
        <div class="row">
            <div class="alert alert-info" id="respuesta"></div>
        </div>
        
        <div class="row">
            <form method="post" id="update-turismo" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="idsitio" id="idsitio" value="<?php echo $turismo['idsitios'];?>" required>
                <div class="form-group">
                  <label for="txtlugar">Dato:</label>
                  <input type="text" class="form-control" name="txtlugar" id="txtlugar" value="<?php echo $turismo['nombre'];?>" required>
                </div>
                <div class="form-group">
                  <label for="archivo">Imagen</label>
                  <img src="../View/<?php echo $turismo['imagen'];?>" alt="<?php echo $turismo['nombre'];?>" width="150">
                </div>
                <div class="form-group">
                  <label for="archivo">Cambiar imagen</label>
                  <input type="file" name="imagen" id="imagen" class="form-control-file" required>
                </div>
                <div class="form-group">
                    <input type="hidden" name="cbotipo" id="cbotipo" value="<?php echo $turismo['tipo'];?>">
                    <br>
                </div>

                <div class="form-group">
                    <label for="txtdescripcion">Descripcion </label>
                    <textarea name="txtdescripcion" id="txtdescripcion" name="txtdescripcion" cols="50" rows="5"><?php echo $turismo['descripcion'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="txtdescripcion2">Descripcion 2</label>
                    <textarea name="txtdescripcion2" id="txtdescripcion2" name="txtdescripcion2" cols="50" rows="5"><?php echo $turismo['descripcion2'];?></textarea>
                </div>
                <div class="form-group" class="form-control">
                    <label for="txtprecio">Precio</label>
                    <input type="number" name="txtprecio" id="txtprecio" class="form-control" value="<?php echo $turismo['precio'];?>" required>
                </div>
                <div class="form-group" class="form-control">
                    <label for="txttelefono">Telefono</label>
                    <input type="text" name="txttelefono" id="txttelefono" class="form-control" value="<?php echo $turismo['telefono'];?>" required>
                </div>
                <div class="form-group" class="form-control">
                    <label for="txtemail">Correo Electronico</label>
                    <input type="email" name="txtemail" id="txtemail" class="form-control" value="<?php echo $turismo['email'];?>" required>
                </div>
                <div class="form-group" class="form-control">
                    <label for="cbodisponible">Disponible</label>
                    <select name="cbodisponible" id="cbodisponible" class="form-control" required>
                        <option value="0" disabled="disabled">[Seleccione]</option>
                        <option value="Disponible">Disponible</option>
                        <option value="No disponible">No Disponible</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtdias">Dias</label>
                    <input type="number" name="txtdias" id="txtdias" class="form-control" value="<?php echo $turismo['dias'];?>" required>
                </div>

                <div class="form-group" class="form-control" required>
                    <label for="cborecomendado">Recomendado</label>
                    <select name="cborecomendado" id="cborecomendado" class="form-control" required>
                        <option value="" disabled="disabled">[Seleccione]</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>

                <button type="submit" id="btnGuardar" class="btn btn-primary">Guardar</button>
              </form>
        </div>
        
     
    </div>

    <script>
        $(document).ready(function(){

            $("#btnGuardar").click(SubirDatos)

            function SubirDatos(evento){
                evento.preventDefault()
                var datos = new FormData($("#update-turismo")[0])
                $("#respuesta").html("<img src='img/cargando.gif' alt='Cargando...'>");
                $.ajax({
                    url : '../Controllers/update.controller.php',
                    type: 'post',
                    data: datos,
                    contentType: false,
                    processData: false,                                          
                                                    
                    success : function(res) {
                        
                        $("#respuesta").html(res);
                        alert("Actualizado correctamente");
                    },
                    error : function(error) {
                        alert('Error' + error);
                    }
                });
            }

        });
    </script>
   
</body>
</html>
