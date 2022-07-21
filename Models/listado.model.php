<?php 
require "Conexion.php";

class Listas
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	function Todos()
    {
        $sql = "SELECT idsitios,nombre,imagen,tipo FROM sitios";
        
        $response = $this->conn->ConsultaCon($sql);
        return $response;
    }

    function SoloTurismo($idsitio)
    {
        $sql = "SELECT idsitios,nombre,imagen,tipo,descripcion,descripcion2,precio,telefono,email,disponible,dias,recomendado FROM sitios WHERE idsitios = ".$idsitio;
        
        $response = $this->conn->ConsultaArray($sql);
        return $response;
    }
}
