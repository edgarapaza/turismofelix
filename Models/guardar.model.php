<?php 
require "Conexion.php";

class TurismoClass
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	function Guardar($nombre,$imagen,$tipo,$descripcion,$descripcion2,$precio,$telefono,$email,$disponible,$dias,$recomendado)
	{
		$fecCreate = date('Y-m-d H:i:s');
		$sqlduplicado = "SELECT idsitios FROM sitios
				WHERE nombre ='$nombre' and imagen ='$imagen' and tipo ='$tipo' and descripcion ='$descripcion' and precio ='$precio' and telefono ='$telefono' and 
				email ='$email' and disponible ='$disponible' and dias ='$dias' and recomendado ='$recomendado';";
				
				$res1 = $this->conn->ConsultaCon($sqlduplicado);
				$num = $res1->num_rows;
					
				if($num > 0){
						//echo "Dato duplicado";
						return false;
				}else{
						//echo "Insertado";
						$sqlinsert ="INSERT INTO sitios VALUES (null,'$nombre','$imagen','$tipo','$descripcion','$descripcion2','$precio','$telefono','$email','$disponible','$dias','$recomendado','$fecCreate');";
				
						$this->conn->ConsultaSin($sqlinsert);

						return true;
					}
	
	}

}